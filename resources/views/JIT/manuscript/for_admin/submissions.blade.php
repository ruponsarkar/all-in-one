<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<style>
    #loader {
        display: none;
    }


    .custom-dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-toggle-btn {
        background-color: #0d6efd;
        color: white;
        border: none;
        padding: 5px 10px;
        font-size: 14px;
        cursor: pointer;
        border-radius: 3px;
    }

    .dropdown-menu-custom {
        display: none;
        position: absolute;
        background-color: white;
        min-width: 150px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        z-index: 1;
        border: 1px solid #ccc;
        border-radius: 4px;
        margin-top: 5px;
    }

    .dropdown-item-custom {
        padding: 8px 12px;
        display: block;
        text-decoration: none;
        color: #333;
        font-size: 14px;
    }

    .dropdown-item-custom:hover {
        background-color: #f1f1f1;
    }
</style>


<div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">All Manuscript</h3>
                </div>


                {{-- ********** add link modal*********** --}}


                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div>
                                    <label for="">Article link</label>
                                    <input type="text" class="form-control" id="articleLink"
                                        placeholder="Article link">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary"
                                    onclick="submitPublishedStatus()">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- ********************* --}}


                {{-- ************** view modal ************** --}}
                <!-- View Modal -->
                <div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="viewModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg"> <!-- larger width -->
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="viewModalLabel">Submission Details</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <table class="table table-bordered table-sm">
                                    <tbody>
                                        <tr>
                                            <th>MSID</th>
                                            <td id="view-msid"></td>
                                        </tr>
                                        <tr>
                                            <th>Title</th>
                                            <td id="view-title"></td>
                                        </tr>
                                        <tr>
                                            <th>Author</th>
                                            <td id="view-author"></td>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td id="view-email"></td>
                                        </tr>
                                        <tr>
                                            <th>Status</th>
                                            <td id="view-status"></td>
                                        </tr>
                                        <tr>
                                            <th>Date</th>
                                            <td id="view-date"></td>
                                        </tr>
                                        <tr>
                                            <th>Keywords</th>
                                            <td id="view-keywords"></td>
                                        </tr>
                                        <tr>
                                            <th>File</th>
                                            <td id="view-file"></td>
                                        </tr>
                                        <tr>
                                            <th>Article Link</th>
                                            <td id="view-article-link"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- ************** view modal ************** --}}






                <!-- /.card-header -->
                <div class="card-body">

                    <table id="" class="table table-bordered  table-hover small">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>File</th>
                                <th>Manuscript Title</th>
                                {{-- <th>Mode</th> --}}
                                <th>Author</th>
                                <th>email</th>
                                <th>Status</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody id="submission-table-body">
                        </tbody>
                    </table>


                    <div>
                        <div class="text-center my-3">
                            <button class="btn btn-outline-primary btn-sm" id="prev-btn">Previous</button>
                            <button class="btn btn-outline-secondary btn-sm" disabled> <span
                                    id="current-page">1</span></button>
                            <button class="btn btn-outline-primary btn-sm" id="next-btn">Next</button>
                        </div>
                        <div class="text-center">
                            Total: <span id="total-submissions">0</span>
                        </div>

                    </div>

                    <div id="loader" class="text-center my-4">
                        <div class="spinner-border text-primary" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>




<script>
    let website_url = "http://127.0.0.1:8000";


    let currentPage = 1;
    const limit = 10;

    function loadSubmissions(page = 1) {
        $('#loader').show();
        $('#submission-table-body').hide();

        fetch(`${website_url}/api/allSubmissions?page=${page}&limit=${limit}`)
            .then(response => response.json())
            .then(data => {
                const tableBody = $('#submission-table-body');
                tableBody.empty();
                console.log(data);

                $('#total-submissions').text(data.total);

                data.submissions.forEach((submission, index) => {
                    const row = `
                        <tr>
                            <td>${(page - 1) * limit + index + 1}</td>
                            <td><a href="" class="btn btn-sm btn-outline-success"><img src="https://www.svgrepo.com/show/509347/download.svg" width="15px" ></a></td>
                            <td>${submission.paper_title}</td>
                            <td>${submission.author_name}</td>
                            <td>${submission.corresponding_email}</td>
                          
                            <td>${submission.submission_status}</td>
                            <td>${submission.date}</td>
                            <td>
                                <div class="d-flex gap-2">
                                <div><button class="btn btn-sm btn-outline-primary" onclick='showViewModal(${JSON.stringify(submission)})'>View</button></div>
                                <div class="custom-dropdown">
                                    <button class="dropdown-toggle-btn">Update ⌄</button>
                                    <div class="dropdown-menu-custom">
                                        <a href="#" onClick="addSubmissionStatus('Accepted', ${submission.id})" class="dropdown-item-custom">Accepted</a>
                                        <a href="#" onClick="addSubmissionStatus('Reviewed', ${submission.id})" class="dropdown-item-custom">Reviewed</a>
                                        <a href="#" onClick="addSubmissionStatus('Edited', ${submission.id})" class="dropdown-item-custom">Edited</a>
                                        <a href="#" onClick="addSubmissionStatus('Add-Link', ${submission.id})" class="dropdown-item-custom">Published</a>
                                    </div>
                                </div>
                                </div>
                            </td>
                        </tr>
                    `;
                    tableBody.append(row);
                });

                currentPage = data.page;
                const totalPages = Math.ceil(data.total / data.limit);

                // Update pagination buttons
                $('#current-page').text(currentPage);
                $('#prev-btn').prop('disabled', currentPage <= 1);
                $('#next-btn').prop('disabled', currentPage >= totalPages);

                $('#loader').hide();
                tableBody.show();
            })
            .catch(error => {
                console.error('Error fetching submissions:', error);
                $('#loader').html('<p class="text-danger">Failed to load data.</p>');
            });
    }

    // Event handlers
    $(document).ready(function() {
        loadSubmissions();

        $('#prev-btn').click(function() {
            if (currentPage > 1) {
                loadSubmissions(currentPage - 1);
            }
        });

        $('#next-btn').click(function() {
            loadSubmissions(parseInt(currentPage) + 1);
        });
    });


    function submitPublishedStatus() {
        const modalEl = document.getElementById('exampleModal');
        const id = modalEl.getAttribute('data-id'); // Retrieve stored id
        const articleLink = document.getElementById('articleLink').value;

        // if (!articleLink.trim()) {
        //     alert('Please enter the article link.');
        //     return;
        // }

        // console.log(articleLink);

        addSubmissionStatus('Published', id, articleLink);

        // close modal 
        const modal = bootstrap.Modal.getInstance(document.getElementById('exampleModal'));
        modal?.hide();
    }


    // update status
    async function addSubmissionStatus(status, id, articleLink = null) {

        console.log(status);
        console.log(id);
        console.log(articleLink);

        if (status === "Add-Link") {
            const modalEl = document.getElementById('exampleModal');
            modalEl.setAttribute('data-id', id); // Store the id
            const myModal = new bootstrap.Modal(modalEl);
            myModal.show();
            return;
        }

        const confirmed = confirm(`Are you sure you want to update status to ${status}?`);
        if (!confirmed) return;

        const reqdata = {
            status,
            articleLink,
            id
        };

        try {
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

            const response = await fetch(`${website_url}/api/addSubmissionStatus`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken
                },
                body: JSON.stringify(reqdata)
            });

            if (!response.ok) {
                throw new Error(`HTTP error! Status: ${response.status}`);
            }

            const data = await response.json();
            console.log(data);
            if (data.status === 'success') {
                loadSubmissions(currentPage);
            }

            // Optional: show feedback or refresh table
            alert(data?.message ? data.message : 'Status updated successfully.');

        } catch (error) {
            console.error('Error updating submission status:', error);
            alert('Failed to update status. Please try again.');
        }
    }


    function showViewModal(submission) {
    // Fill modal with data
    document.getElementById('view-msid').innerText = submission.msid;
    document.getElementById('view-title').innerText = submission.paper_title;
    document.getElementById('view-author').innerText = submission.author_name;
    document.getElementById('view-email').innerText = submission.corresponding_email;
    document.getElementById('view-status').innerText = submission.submission_status;
    document.getElementById('view-date').innerText = submission.date;
    document.getElementById('view-keywords').innerText = submission.keywords;
    document.getElementById('view-file').innerText = submission.file_original_name;
    document.getElementById('view-article-link').innerText = submission.article_link ?? '—';

    // Show modal
    const modalEl = document.getElementById('viewModal');
    const modal = new bootstrap.Modal(modalEl);
    modal.show();
}

</script>


<script>
    $(document).on('click', '.dropdown-toggle-btn', function(e) {
        e.stopPropagation(); // Prevent event bubbling
        const dropdownMenu = $(this).siblings('.dropdown-menu-custom');
        $('.dropdown-menu-custom').not(dropdownMenu).hide(); // Close others
        dropdownMenu.toggle(); // Toggle current
    });

    $(document).click(function() {
        $('.dropdown-menu-custom').hide(); // Close dropdown on outside click
    });
</script>

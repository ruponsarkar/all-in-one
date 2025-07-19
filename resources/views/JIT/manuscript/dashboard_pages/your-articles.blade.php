<style>
    .paper-form3 {
        /* max-width: 700px; */
        margin: auto;
        background: #fff;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.05);
    }
</style>

<!-- Paper Submission Section -->
<div class="container mt-4">
    <div class="paper-form3">
        <h4 class="section-title">Your Articles</h4>

        <div>
            <table class="table table-hover">


                <tbody>
                    @foreach ($submissions as $submission)
                        {{-- Status History Section --}}
                        @if (!empty($submission->statuses) && count($submission->statuses))
                            <tr>
                                <td colspan="7">
                                    <div class="border rounded p-2 bg-light">
                                        <div>
                                            Title:<strong> {{ $submission->paper_title }}</strong>
                                        </div>
                                        <div>
                                            MSID:<strong> {{ $submission->msid }}</strong>
                                        </div>
                                        <div>
                                            Author:<strong> {{ $submission->author_name }}</strong>
                                        </div>
                                        <div>
                                            Keywords:<strong> {{ $submission->keywords }}</strong>
                                        </div>

                                        <table class="table table-sm table-bordered mt-2 mb-0">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Status</th>
                                                    <th>Updated At</th>
                                                    {{-- Add more fields if needed --}}
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($submission->statuses as $index => $status)
                                                    <tr>
                                                        <td>{{ $index + 1 }}</td>
                                                        <td>
                                                            <div>
                                                                {{ $status->status }}
                                                            </div>
                                                            <div>
                                                                @if ($status->status && $status->status == 'Published' && $status->article_link)
                                                                    <div>
                                                                        <small>
                                                                            Article link:
                                                                            <a href="{{ $status->article_link }}">
                                                                                {{ $status->article_link }}
                                                                            </a>
                                                                        </small>
                                                                    </div>
                                                                @endif
                                                            </div>
                                                        </td>
                                                        <td>{{ $status->date ?? '—' }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>

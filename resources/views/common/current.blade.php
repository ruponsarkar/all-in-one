<div class="row justify-content-center py-3">


    <div class="container mt-5">
        <h3 class="mb-4">Articles for: {{ $volume }}</h3>
    
        <div class="accordion" id="issuesAccordion">

            @php
            $a= count($issues);

            @endphp

            {{$a === 0 ? 'Under Indexing Maintenance or No articles found for this issue.' : ''}}
            @foreach ($issues as $index => $item)
                @php
                    $issue = $item['issue'];
                    $articles = $item['articles'];
                @endphp
    
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading{{ $index }}">
                        <button class="accordion-button {{ $index > 0 ? 'collapsed' : '' }}" type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapse{{ $index }}"
                                aria-expanded="{{ $index == 0 ? 'true' : 'false' }}"
                                aria-controls="collapse{{ $index }}">
                            {{ $issue->name ?? 'Unnamed Issue' }} ({{ $issue->month ?? 'N/A' }})
                        </button>
                    </h2>
    
                    <div id="collapse{{ $index }}" class="accordion-collapse collapse {{ $index == 0 ? 'show' : '' }}"
                         aria-labelledby="heading{{ $index }}" data-bs-parent="#issuesAccordion">
                        <div class="accordion-body">
                            @if ($articles->isNotEmpty())
                                <ul class="list-group">
                                    @foreach ($articles as $article)
                                        <li class="list-group-item mb-3 border  rounded p-3 shadow-lg">
                                            <h5>{{ $article->name ?? 'Untitled Article' }}</h5>
                                            <p><strong>Author(s):</strong> {{ $article->aname ?? 'Unknown' }}</p>
                                            {{-- @if (!empty($article->abstract))
                                                <p><strong>Abstract:</strong> {{ Str::limit($article->abstract, 300) }}</p>
                                            @endif --}}
                                            <p><strong>Pages:</strong> {{ $article->page ?? 'N/A' }}</p>
                                            <p><strong>DOI:</strong> {{ $article->doi ?? 'N/A' }}</p>
    
                                            @if (!empty($article->file))
                                                <a href="{{ asset('storage/' . $article->file) }}" target="_blank"
                                                   class="btn btn-sm btn-outline-primary">View PDF</a>
                                            @endif
                                        </li>
                                    @endforeach
                                </ul>
                            @else
                                <p>Under Indexing Maintenance or No articles found for this issue.</p>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    


    <div class="issue">








        {{-- @foreach ($issues as $index => $issue)
        
        
        <div class="col-lg-12 details text-center p-2">
            <h3>Issue 10, Issue 019</h3>
        </div>

        <div class="articles">
            <div class="col-lg-12 py-3">
                <div class="border  rounded p-3 shadow-lg">
                    <div>
                        <strong>
                            Putting Team-Based Learning into Practice: Database Class Results
                        </strong>
                    </div>
                    <div>
                        Brad Kalitherine
                    </div>
                    <div class="text-muted">
                        Drake University, Des Moines, IA, USA
                    </div>
                    <div>
                        <a href="articles/01-07.pdf">DOI : 10.25257/jiteiip_10_1_01-07 </a>
                    </div>
                </div>
            </div>


            <div class="col-lg-12 py-3">
                <div class="border  rounded p-3 shadow-lg">
                    <div>
                        <strong>
                            Softwear development in Research course activates
                        </strong>
                    </div>
                    <div>
                        David Conway
                    </div>
                    <div class="text-muted">
                        University of Minnesota, Crookston, MN, United States
                    </div>
                    <div>
                        <a href="articles/08-13.pdf">DOI : 10.25257/jiteiip_10_1_08-13</a>
                    </div>
                </div>
            </div>


            <div class="col-lg-12 py-3">
                <div class="border  rounded p-3 shadow-lg">
                    <div>
                        <strong>
                            The Perspective of Senior Academic Staff on Incorporating Technology into Online Teaching
                            and Learning
                        </strong>
                    </div>
                    <div>
                        Haseeb Al Basir
                    </div>
                    <div class="text-muted">
                        College of Computer Science, King Khalid University, Abha, Saudi Arabia
                    </div>
                    <div>
                        <a href="articles/14-21.pdf">DOI : 10.25257/jiteiip_10_1_14-21</a>
                    </div>
                </div>
            </div>


            <div class="col-lg-12 py-3">
                <div class="border  rounded p-3 shadow-lg">
                    <div>
                        <strong>
                            ONLINE LEARNING INTEGRATION OF TECHNOLOGY IN HS SCHOOL
                        </strong>
                    </div>
                    <div>
                        Dr. Omer Albaik
                    </div>
                    <div class="text-muted">
                        Achva Academic College, Open University of Israel
                    </div>
                    <div>
                        <a href="articles/22-32.pdf">DOI : 10.25257/jiteiip_10_1_21-32</a>
                    </div>
                </div>
            </div>


            <div class="col-lg-12 py-3">
                <div class="border  rounded p-3 shadow-lg">
                    <div>
                        <strong>
                            Senior Faculty's Beliefs About Using Technology in Online Learning Environments
                        </strong>
                    </div>
                    <div>
                        Sarida Patel
                    </div>
                    <div class="text-muted">
                        DK University, Phagwara, India
                    </div>
                    <div>
                        <a href="articles/33-40.pdf">DOI : 10.25257/jiteiip_10_1_34-40</a>
                    </div>
                </div>
            </div>


            <div class="col-lg-12 py-3">
                <div class="border  rounded p-3 shadow-lg">
                    <div>
                        <strong>
                            The Perspective of Senior Academic Staff on Incorporating Technology into Online Teaching
                            and Learning
                        </strong>
                    </div>
                    <div>
                        Om Prakesh Pandey
                    </div>
                    <div class="text-muted">
                        Dehradun College of Education , India
                    </div>
                    <div>
                        <a href="articles/43-51.pdf">DOI : 10.25257/jiteiip_10_1_43-51</a>
                    </div>
                </div>
            </div>
        </div>

        @endforeach --}}

    </div>


    {{-- <div class="issue">


        <div class="col-lg-12 details text-center p-2">
            <h3>Issue 10, Issue 01</h3>
        </div>

        <div class="articles">
            <div class="col-lg-12 py-3">
                <div class="border  rounded p-3 shadow-lg">
                    <div>
                        <strong>
                            Putting Team-Based Learning into Practice: Database Class Results
                        </strong>
                    </div>
                    <div>
                        Brad Kalitherine
                    </div>
                    <div class="text-muted">
                        Drake University, Des Moines, IA, USA
                    </div>
                    <div>
                        <a href="articles/01-07.pdf">DOI : 10.25257/jiteiip_10_1_01-07 </a>
                    </div>
                </div>
            </div>


            <div class="col-lg-12 py-3">
                <div class="border  rounded p-3 shadow-lg">
                    <div>
                        <strong>
                            Softwear development in Research course activates
                        </strong>
                    </div>
                    <div>
                        David Conway
                    </div>
                    <div class="text-muted">
                        University of Minnesota, Crookston, MN, United States
                    </div>
                    <div>
                        <a href="articles/08-13.pdf">DOI : 10.25257/jiteiip_10_1_08-13</a>
                    </div>
                </div>
            </div>


            <div class="col-lg-12 py-3">
                <div class="border  rounded p-3 shadow-lg">
                    <div>
                        <strong>
                            The Perspective of Senior Academic Staff on Incorporating Technology into Online Teaching
                            and Learning
                        </strong>
                    </div>
                    <div>
                        Haseeb Al Basir
                    </div>
                    <div class="text-muted">
                        College of Computer Science, King Khalid University, Abha, Saudi Arabia
                    </div>
                    <div>
                        <a href="articles/14-21.pdf">DOI : 10.25257/jiteiip_10_1_14-21</a>
                    </div>
                </div>
            </div>


            <div class="col-lg-12 py-3">
                <div class="border  rounded p-3 shadow-lg">
                    <div>
                        <strong>
                            ONLINE LEARNING INTEGRATION OF TECHNOLOGY IN HS SCHOOL
                        </strong>
                    </div>
                    <div>
                        Dr. Omer Albaik
                    </div>
                    <div class="text-muted">
                        Achva Academic College, Open University of Israel
                    </div>
                    <div>
                        <a href="articles/22-32.pdf">DOI : 10.25257/jiteiip_10_1_21-32</a>
                    </div>
                </div>
            </div>


            <div class="col-lg-12 py-3">
                <div class="border  rounded p-3 shadow-lg">
                    <div>
                        <strong>
                            Senior Faculty's Beliefs About Using Technology in Online Learning Environments
                        </strong>
                    </div>
                    <div>
                        Sarida Patel
                    </div>
                    <div class="text-muted">
                        DK University, Phagwara, India
                    </div>
                    <div>
                        <a href="articles/33-40.pdf">DOI : 10.25257/jiteiip_10_1_34-40</a>
                    </div>
                </div>
            </div>


            <div class="col-lg-12 py-3">
                <div class="border  rounded p-3 shadow-lg">
                    <div>
                        <strong>
                            The Perspective of Senior Academic Staff on Incorporating Technology into Online Teaching
                            and Learning
                        </strong>
                    </div>
                    <div>
                        Om Prakesh Pandey
                    </div>
                    <div class="text-muted">
                        Dehradun College of Education , India
                    </div>
                    <div>
                        <a href="articles/43-51.pdf">DOI : 10.25257/jiteiip_10_1_43-51</a>
                    </div>
                </div>
            </div>
        </div>

    </div> --}}









</div>

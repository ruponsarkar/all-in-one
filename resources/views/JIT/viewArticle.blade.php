@extends('layout') @section('title', 'View Article') @section('content')
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<div class="container my-4">
    <div class="row">
        <div class="col-lg-8">

            <div class="journal-desc">
                <div class="text-center">
                    <h4>
                        {{ $article->name }}
                    </h4>
                </div>

                <hr />

                {{-- <div class="pb-2">
                    <strong>Sr No: </strong>
                    <span>{{ $article->sr_no }}</span>
                </div> --}}
                @if ($article->aname)
                    <div class="pb-2">
                        <strong>Authors: </strong>
                        <span>{{ $article->aname }}</span>
                    </div>
                @endif


                @if ($article->page)
                    <div class="pb-2">
                        <strong>Page No: </strong>
                        <span>{{ $article->page }}</span>
                    </div>
                @endif


                @if ($article->language)
                    <div class="pb-2">
                        <strong>Language: </strong>
                        <span>{{ $article->language }}</span>
                    </div>
                @endif
                @if ($article->licence)
                    <div class="pb-2">
                        <strong>Licence: </strong>
                        <span>{{ $article->licence }}</span>
                    </div>
                @endif

                @if ($article->received)
                    <div class="pb-2">
                        <strong>Received: </strong>
                        <span>{{ $article->received }}</span>
                    </div>
                @endif
                @if ($article->revised)
                    <div class="pb-2">
                        <strong>Revised: </strong>
                        <span>{{ $article->revised }}</span>
                    </div>
                @endif
                @if ($article->accepted)
                    <div class="pb-2">
                        <strong>Accepted: </strong>
                        <span>{{ $article->accepted }}</span>
                    </div>
                @endif
                @if ($article->doi)
                    <div class="pb-2">
                        <strong>DOI: </strong>
                        <span>{{ $article->doi }}</span>
                    </div>
                @endif
                @if ($article->published_date)
                    <div class="pb-2">
                        <strong>Published Date: </strong>
                        <span>{{ $article->published_date }}</span>
                    </div>
                @endif
                @if ($article->googleScholar)
                    <div class="pb-2">
                        <strong>GoogleScholar: </strong>
                        <span><a href="{{ $article->googleScholar }}">Click here
                            </a>
                        </span>
                    </div>
                @endif







                <div class="pb-2">
                    <strong>Abstract: </strong>
                    <div>
                        {{ $article->abstract }}
                    </div>
                </div>

                <div class="pb-2">
                    <strong>Keywords: </strong>
                    <i>{{ $article->keywords }}
                    </i>
                </div>

            </div>


        </div>

        <!-- Sidebar -->
        <div class="col-lg-4 sidebar mt-4 mt-lg-0">
            @include('common.sidebar')
        </div>
    </div>


</div>



@endsection

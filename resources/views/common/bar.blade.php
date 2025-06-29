<style>
    .inner-bar .vr {
        display: inline-block;
        align-self: center;
        width: 1px;
        min-height: 1em;
        background-color: currentcolor;
        opacity: .25;
        height: 50%;
    }
</style>

<div class="bg-success">
    <div class="p-3 ">
        <div class="d-flex gap-3  align-items-center justify-content-center">
            <div>
                {{-- <img src="https://jcbsonline.ac.in/assets/img/JCBS_LOGO.jpeg" style="height: 100px" alt=""> --}}
            </div>
            <div class="text-white">
                <h2 class="">
                    {{-- Journal of Antibiotic Development and Clinical Practice --}}
                    {{ $journal->j_name }}

                </h2>
            </div>
        </div>
    </div>
</div>

{{-- <div>
    <div class="d-flex align-items-center justify-content-center inner-bar" style="background-color: #c2b5a5">

        
        <a href="/journal/{{ $journal->slug }}" class="btn  my-2 @if ($type === 'archive') active @endif">Archive </a><div class="vr"></div>
        <a href="/journal/{{ $journal->slug }}/about" class="btn  my-2 @if ($type === 'about') active @endif">About Journal</a><div class="vr"></div>
        <a href="/journal/{{ $journal->slug }}/aim-and-scope" class="btn  my-2 @if ($type === 'aim-and-scope') active @endif">
            Aim and Scope
        </a><div class="vr"></div>


        <a href="/journal/{{ $journal->slug }}/editors" class="btn  my-2 @if ($type === 'editors') active @endif">Authors Guidelines</a><div class="vr"></div>
        <a href="/journal/{{ $journal->slug }}/editors" class="btn  my-2 @if ($type === 'editors') active @endif">Indexing and Abstracting</a><div class="vr"></div>


        <a href="/journal/{{ $journal->slug }}/editors" class="btn  my-2 @if ($type === 'editors') active @endif">Editorial Board</a><div class="vr"></div>

        <a href="/manuscript/{{ $journal->slug }}" class="btn btn-outline-danger my-2"> <i class="bi bi-send"></i> Submit Manuscript</a>
        

    </div>
</div> --}}



<div class="">
    <header id="header" class="header">
        <nav id="navbar" class="navbar order-last order-lg-0 bg-nav-dark">
            <ul>
                <li><a class="nav-link scrollto @if ($type === 'about') active @endif" href="{{ url('/journal/'.$journal->slug.'/about') }}">About Journal</a></li>
                <li><a class="nav-link scrollto @if ($type === 'aim-and-scope') active @endif" href="{{ url('/journal/'.$journal->slug.'/aim-and-scope') }}">Aim and Scope</a></li>

                <li><a class="nav-link scrollto" href="{{ url('/journal/'.$journal->slug.'/guidlines') }}">Authors Guidelines</a></li>
                <li><a class="nav-link scrollto" href="{{ url('/journal/'.$journal->slug.'/indexings') }}">Indexing and Abstracting</a></li>

                <li><a class="nav-link scrollto @if ($type === 'editors') active @endif" href="{{ url('/journal/'.$journal->slug.'/editors') }}">Editorial Board</a></li>

                <li class="dropdown"><a href="#"><span>Policy</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{ url('/journal/'.$journal->slug.'/OpenAccessPolicy') }}">Open access policy</a></li>
                        <li><a href="{{ url('/journal/'.$journal->slug.'/journalPolicy') }}">Journal policy</a></li>

                        <li><a href="{{ url('/journal/'.$journal->slug.'/copyrightNotice') }}">Copyright notice</a></li>
                        <li><a href="{{ url('/journal/'.$journal->slug.'/publicationEthics') }}">Publication ethics</a></li>
                        <li><a href="{{ url('/journal/'.$journal->slug.'/fee') }}">Fee</a></li>
                    </ul>
                </li>

                <li><a class="nav-link scrollto @if ($type === 'archive') active @endif" href="{{ url('/journal/'.$journal->slug) }}"> Archive</a></li>


                {{-- <li><a class="nav-link scrollto " href="{{ url('#') }}"> Payments</a></li> --}}
                <li><a class="nav-link scrollto " href="{{ url('/journal/'.$journal->slug.'/contact') }}">Contact Us</a></li>

            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
    </header>

</div>

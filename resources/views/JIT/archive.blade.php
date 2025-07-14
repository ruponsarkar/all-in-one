@extends('layout') @section('title', 'Archive') @section('content')
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<div class="container my-4">
    <div class="row">
        <div class="col-lg-8">

            <div class="journal-desc">

                <div>
                    <div class="row justify-content-center py-3">
                        <div class="col-lg-12 details text-center p-2">
                            <h3>Archive</h3>
                        </div>

                        @foreach($volumes as $ar)

                        <div class="col-lg-12 py-3">
                            <div class="border  rounded p-3 shadow-lg">
                                <a href="/issues/MRSJMRS/{{$ar->short}}">
                                    <strong>
                                      {{$ar->name}}
                                    </strong>
                                </a>
                              
                            </div>
                        </div>

                        @endforeach
                       
                        
                    </div>
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

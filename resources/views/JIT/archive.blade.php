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

                        <div class="col-lg-12 py-3">
                            <div class="border  rounded p-3 shadow-lg">
                                <a href="/current-issue">
                                    <strong>
                                       Volume 10 (Current Issue)
                                    </strong>
                                </a>
                              
                            </div>
                        </div>
                        <div class="col-lg-12 py-3">
                            <div class="border  rounded p-3 shadow-lg">
                                <a href="/maintenance">
                                    <strong>
                                       Volume 09
                                    </strong>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-12 py-3">
                            <div class="border  rounded p-3 shadow-lg">
                                <a href="/maintenance">
                                    <strong>
                                       Volume 08
                                    </strong>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-12 py-3">
                            <div class="border  rounded p-3 shadow-lg">
                                <a href="/maintenance">
                                    <strong>
                                       Volume 07
                                    </strong>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-12 py-3">
                            <div class="border  rounded p-3 shadow-lg">
                                <a href="/maintenance">
                                    <strong>
                                       Volume 06
                                    </strong>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-12 py-3">
                            <div class="border  rounded p-3 shadow-lg">
                                <a href="/maintenance">
                                    <strong>
                                       Volume 05
                                    </strong>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-12 py-3">
                            <div class="border  rounded p-3 shadow-lg">
                                <a href="/maintenance">
                                    <strong>
                                       Volume 04
                                    </strong>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-12 py-3">
                            <div class="border  rounded p-3 shadow-lg">
                                <a href="/maintenance">
                                    <strong>
                                       Volume 03
                                    </strong>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-12 py-3">
                            <div class="border  rounded p-3 shadow-lg">
                                <a href="/maintenance">
                                    <strong>
                                       Volume 02
                                    </strong>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-12 py-3">
                            <div class="border  rounded p-3 shadow-lg">
                                <a href="/maintenance">
                                    <strong>
                                       Volume 01
                                    </strong>
                                </a>
                            </div>
                        </div>
                       
                        
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

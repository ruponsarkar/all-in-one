@extends('layout') @section('title', 'Indexed Abstract') @section('content')
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<div class="container my-4">
    <div class="row">
        <div class="col-lg-8">

            <div class="journal-desc">

                <div>
                    <div class="row justify-content-center py-3">
                        <div class="col-lg-12 details text-center p-2">
                            <h3>Indexed Abstract</h3>
                        </div>


                        <div class="col-lg-4 py-3">
                            <div class="border  rounded text-center p-3 shadow-lg">
                                <div>
                                    <strong>
                                        Scopus 
                                    </strong>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 py-3">
                            <div class="border  rounded text-center p-3 shadow-lg">
                                <div>
                                    <strong>
                                        RoMeo 
                                    </strong>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 py-3">
                            <div class="border  rounded text-center p-3 shadow-lg">
                                <div>
                                    <strong>
                                        Proquest 
                                    </strong>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 py-3">
                            <div class="border  rounded text-center p-3 shadow-lg">
                                <div>
                                    <strong>
                                        Google Scholar 
                                    </strong>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 py-3">
                            <div class="border  rounded text-center p-3 shadow-lg">
                                <div>
                                    <strong>
                                       EBSCO 
                                    </strong>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 py-3">
                            <div class="border  rounded text-center p-3 shadow-lg">
                                <div>
                                    <strong>
                                        Index Copernicus 
                                    </strong>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 py-3">
                            <div class="border  rounded text-center p-3 shadow-lg">
                                <div>
                                    <strong>
                                        DHET 
                                    </strong>
                                </div>
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

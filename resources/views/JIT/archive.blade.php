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
                                <div>
                                    <strong>
                                        Journal of Information Technology Education: IIP
                                    </strong>
                                </div>
                                <div>
                                    <i>
                                        ISSN - 2165-316X
                                    </i>
                                </div>
                                <div class="text-muted">
                                    10 Papers 
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 py-3">
                            <div class="border  rounded p-3 shadow-lg">
                                <div>
                                    <strong>
                                        Journal of Education and Social Sciences 
                                    </strong>
                                </div>
                                <div>
                                    <i>
                                        ISSN - XXXX-XXXX
                                    </i>
                                </div>
                                <div class="text-muted">
                                    5 Papers 
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 py-3">
                            <div class="border  rounded p-3 shadow-lg">
                                <div>
                                    <strong>
                                        Journal of Multidisciplinary Bulletin 
                                    </strong>
                                </div>
                                <div>
                                    <i>
                                        ISSN - XXXX-XXXX
                                    </i>
                                </div>
                                <div class="text-muted">
                                    5 Papers 
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 py-3">
                            <div class="border  rounded p-3 shadow-lg">
                                <div>
                                    <strong>
                                        Journal of Engineering Technologies 
                                    </strong>
                                </div>
                                <div>
                                    <i>
                                        ISSN - XXXX-XXXX
                                    </i>
                                </div>
                                <div class="text-muted">
                                    5 Papers 
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-12 py-3">
                            <div class="border  rounded p-3 shadow-lg">
                                <div>
                                    <strong>
                                        Journal of Medical Sciences 
                                    </strong>
                                </div>
                                <div>
                                    <i>
                                        ISSN - XXXX-XXXX
                                    </i>
                                </div>
                                <div class="text-muted">
                                    5 Papers 
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-12 py-3">
                            <div class="border  rounded p-3 shadow-lg">
                                <div>
                                    <strong>
                                        Journal of Business management 
                                    </strong>
                                </div>
                                <div>
                                    <i>
                                        ISSN - XXXX-XXXX
                                    </i>
                                </div>
                                <div class="text-muted">
                                    5 Papers 
                                </div>
                            </div>
                        </div>

                        Total 35 papres
                        
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

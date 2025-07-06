@extends('layout') @section('title', 'Editorial Board') @section('content')
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<div class="container my-4">
    <div class="row">
        <div class="col-lg-8">

            <div class="journal-desc">

                <div>
                    <div class="row justify-content-center py-3">
                        <div class="col-lg-12 details text-center p-2">
                            <h3>Editors in Chief</h3>
                        </div>


                        <div class="col-lg-6">
                            <div class="border  rounded text-center p-3 shadow-lg">
                                <div>
                                    <strong>
                                        Tian Luo
                                    </strong>
                                </div>
                                <div>
                                    <i>

                                        Editor in Chief
                                    </i>
                                </div>
                                <div class="text-muted">
                                    Old Dominion University, United States
                                </div>
                            </div>
                        </div>



                    </div>

                    <hr>
                    <div class="row justify-content-center py-3">
                        <div class="col-lg-12 details text-center p-2">
                            <h3>Associate Editors</h3>
                        </div>

                        <div class="col-lg-6 py-3">
                            <div class="border  rounded text-center p-3 shadow-lg">
                                <div>
                                    <strong>
                                        Tian Luo
                                    </strong>
                                </div>
                                <div>
                                    <i>

                                        Editor in Chief
                                    </i>
                                </div>
                                <div class="text-muted">
                                    Old Dominion University, United States
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 py-3">
                            <div class="border  rounded text-center p-3 shadow-lg">
                                <div>
                                    <strong>
                                        Tian Luo
                                    </strong>
                                </div>
                                <div>
                                    <i>

                                        Editor in Chief
                                    </i>
                                </div>
                                <div class="text-muted">
                                    Old Dominion University, United States
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 py-3">
                            <div class="border  rounded text-center p-3 shadow-lg">
                                <div>
                                    <strong>
                                        Tian Luo
                                    </strong>
                                </div>
                                <div>
                                    <i>

                                        Editor in Chief
                                    </i>
                                </div>
                                <div class="text-muted">
                                    Old Dominion University, United States
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 py-3">
                            <div class="border  rounded text-center p-3 shadow-lg">
                                <div>
                                    <strong>
                                        Tian Luo
                                    </strong>
                                </div>
                                <div>
                                    <i>

                                        Editor in Chief
                                    </i>
                                </div>
                                <div class="text-muted">
                                    Old Dominion University, United States
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

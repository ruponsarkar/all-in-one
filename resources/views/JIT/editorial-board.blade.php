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
                                        Prof. Athanassios Jimoyiannis
                                    </strong>
                                </div>
                                <div>
                                    <i>

                                        Associate Editor in Chief
                                    </i>
                                </div>
                                <div class="text-muted">
                                    Universityof Peloponnese, Greece
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 py-3">
                            <div class="border  rounded text-center p-3 shadow-lg">
                                <div>
                                    <strong>
                                        Dr Man Fung (Kelvin) LO
                                    </strong>
                                </div>
                                <div>
                                    <i>

                                        Associate Editor in Chief
                                    </i>
                                </div>
                                <div class="text-muted">
                                    The University of Hong Kong, Hong
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 py-3">
                            <div class="border  rounded text-center p-3 shadow-lg">
                                <div>
                                    <strong>
                                        Dr Krassie Petrova
                                    </strong>
                                </div>
                                <div>
                                    <i>

                                        Associate Editor in Chief
                                    </i>
                                </div>
                                <div class="text-muted">
                                    Auckland University of Technology, New Zealand
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 py-3">
                            <div class="border  rounded text-center p-3 shadow-lg">
                                <div>
                                    <strong>
                                        Dr Donna Jean Satterlee
                                    </strong>
                                </div>
                                <div>
                                    <i>

                                        Associate Editor in Chief
                                    </i>
                                </div>
                                <div class="text-muted">
                                    University of Maryland Eastern Shore, United States
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-6 py-3">
                            <div class="border  rounded text-center p-3 shadow-lg">
                                <div>
                                    <strong>
                                        Dr Janice Whatley
                                    </strong>
                                </div>
                                <div>
                                    <i>

                                        Editor
                                    </i>
                                </div>
                                <div class="text-muted">
                                    Manchester Metropolitan University, United Kingdom
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 py-3">
                            <div class="border  rounded text-center p-3 shadow-lg">
                                <div>
                                    <strong>
                                        Vishal Shah
                                    </strong>
                                </div>
                                <div>
                                    <i>

                                       Associate Editor
                                    </i>
                                </div>
                                <div class="text-muted">
                                    Central Michigan University, United States
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 py-3">
                            <div class="border  rounded text-center p-3 shadow-lg">
                                <div>
                                    <strong>
                                        Dr Joko Slamet
                                    </strong>
                                </div>
                                <div>
                                    <i>

                                        Associate Editor
                                    </i>
                                </div>
                                <div class="text-muted">
                                    Universitas Negeri Malang, Indonesia
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

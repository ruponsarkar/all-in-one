@extends('layout') @section('title', 'Maintenance') @section('content')
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<div class="container my-4">
    <div class="row">
        <div class="col-lg-8">

            <div class="journal-desc">

                <div>
                    <div class="row justify-content-center p-3">

                        <h1>Under Indexing Maintenance...</h1>

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
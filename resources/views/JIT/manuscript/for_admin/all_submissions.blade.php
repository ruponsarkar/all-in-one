@extends('admin/layout')

@section('title', 'Home')
@section('breadcrumb', 'Dashboard')

@section('content')


    <section class="content">
        <div class="container-fluid">
            @include('JIT/manuscript/for_admin/submissions')
        </div>
    </section>


@endsection

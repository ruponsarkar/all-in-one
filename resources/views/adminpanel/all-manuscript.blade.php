@extends('adminpanel/layout')

@section('title', 'All Manuscript')
@section('breadcrumb', 'All Manuscript')
@section('content')



<section class="content">
  <div class="container-fluid">
      @include('JIT/manuscript/for_admin/submissions')
  </div>
</section>



@endsection

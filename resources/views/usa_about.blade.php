@extends('layout')

@section('title', 'Journals')

<!-- this is journal page -->

@section('content')


    <div class="container">



        <div class="card1 p-3 my-5">
            {!! $data->data !!}
        </div>
    </div>

    <br>
    <br>

@endsection

@extends('layout')

@section('title', 'Journals')

<!-- this is journal page -->

@section('content')
    @include('common/bar')


    <div class="container py-3">


        @if ($type === 'aim-and-scope')
            @include('component/aim_and_scope')
        @endif


        @if ($type === 'about')
            @include('component/about')
        @endif


        @if ($type === 'editors')
            @include('component/editorial_board')
        @endif


        @if ($type === 'guidlines')
            @include('component/guidelines')
        @endif



        @if ($type === 'indexings')
            @include('component/indexings')
        @endif


        @if (
            $type === 'OpenAccessPolicy' ||
                $type === 'journalPolicy' ||
                $type === 'copyrightNotice' ||
                $type === 'publicationEthics' ||
                $type === 'fee' ||
                $type === 'contact')
            @include('component/pages')
        @endif








    </div>

    <br>
    <br>

@endsection

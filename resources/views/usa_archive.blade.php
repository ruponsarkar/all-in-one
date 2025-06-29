@extends('layout')

@section('title', 'Journals')

<!-- this is journal page -->

@section('content')
    @include('common/bar')


    <div class="container">



        <div class="py-3">
            <div class="text-center">
                <h3>
                    Archives
                    {{-- {{$journal->slug}} --}}
                </h3>
            </div>

            <form action="/journal/{{ $journal->slug }}" method="GET">
                <div class="row">
                    <div class="col-md-4">
                        <label for="volume">Select Volume:</label>
                        <select name="volume" class="form-control" id="volume">
                            <option value="all">All</option>
                            @foreach ($volumes as $data)
                                <option value="{{ $data->short }}" {{ request('volume') == $data->short ? 'selected' : '' }}>{{ $data->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="issue">Select Issue:</label>
                        <select name="issue" class="form-control" id="issue">
                            <option value="all">All</option>
                            @foreach ($issues as $data)
                                <option value="{{ $data->short }}" {{ request('issue') == $data->short ? 'selected' : '' }} >{{ $data->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4 text-center">
                        <br />
                        <button class="btn btn-success" type="submit">Search</button>
                    </div>
                </div>
            </form>
            


            <div class="row py-3">


                @if ($archive->isEmpty())
                <div>
                    <h2 class="text-center">
                        No articles found
                    </h2>
                </div>
            @endif


                @foreach ($archive as $data)

                <div class="col-md-4 mt-3">

                    <div class="card1 p-3">

                        {{-- <div>
                            <img src="https://sciresol.s3.us-east-2.amazonaws.com/srs-j/JCBS/front-placeholder.png"
                                class="img-fluid" alt="">
                        </div> --}}

                        <div class="pt-3">
                            <h5>
                                {{$data->name}}
                            </h5>
                        </div>

                        <div>
                            <strong>{{$data->aname}}</strong>
                        </div>

                        <div>
                            {{$data->designation}}
                        </div>

                        <div>
                            <strong> Year: </strong> {{$data->v_year}}, <strong> {{$data->v_name}} </strong> , <strong> {{$data->i_name}} </strong>,
                            <strong> Pages:</strong> {{$data->page}}
                        </div>

                        <div>
                            {{$data->doi}}
                        </div>

                        <div class="col py-2">
                            <button class="btn btn-danger">Read More</button>
                        </div>

                        <div class="py-3">
                            {{$data->published_date}}
                        </div>

                    </div>
                </div>
                
                @endforeach



                {{-- <div class="col-md-4 mt-3">

                    <div class="card1 p-3">

                        <div>
                            <img src="https://sciresol.s3.us-east-2.amazonaws.com/srs-j/JCBS/front-placeholder.png"
                                class="img-fluid" alt="">
                        </div>



                        <div class="pt-3">
                            <h5>
                                Bombay Blood A Rare Entity
                            </h5>
                        </div>

                        <div>
                            <strong>Subhashish Das, Harendra Kumar ML, Anand R</strong>
                        </div>

                        <div>
                            Journal of Clinical and Biomedical Sciences
                        </div>

                        <div>
                            <strong> Year: </strong> 2011, <strong> Volume: </strong> 1, <strong> Issue:</strong> 3,
                            <strong> Pages:</strong> 122-125
                        </div>

                        <div>
                            10.58739/jcbs/v01i3.1
                        </div>

                        <div class="col py-2">
                            <button class="btn btn-danger">Read More</button>
                        </div>

                        <div class="py-3">
                            15 July 2022
                        </div>

                    </div>
                </div> --}}


            </div>



        </div>
    </div>

    <br>
    <br>

@endsection

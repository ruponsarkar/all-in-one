<div class="container">



    <div class="card1 p-3 px-4 my-4">
        <div class="text-center">
            <h3>
                The Editorial Board of {{ $journal->j_name }}
            </h3>
        </div>

        <div class="">
            <div class="mt-5">


                <div class="mt-5">
                    <div class="row">
                        

                        @foreach ($editors as $groupName => $groupMembers)
                            @if (count($groupMembers))
                                <div class="text-center mt-4">
                                    <h4 class="text-uppercase">{{ $groupName }}</h4>
                                </div>
                                @foreach ($groupMembers as $member)
                                    <div class="col-md-4">
                                        <div class="p-3">
                                            <div>
                                                <strong>{{ $member['name'] }}</strong>
                                            </div>
                                            <div>
                                                {{ $member['details'] }}
                                            </div>
                                            <div>
                                                @if ($member['profile'])
                                                    <a href="{{ $member['profile'] }}" target="_blank">View Profile</a>
                                                @else
                                                    {{-- <span>No Profile Available</span> --}}
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        @endforeach
                    </div>
                </div>



            </div>

        </div>





    </div>
</div>

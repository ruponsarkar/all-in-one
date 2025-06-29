<div>

    <div class="card1 p-3 px-4 my-4">


        <div class="row">
            <div class="col-md-6 d-flex align-items-center justify-content-center">
                <div class="">
                    <div>
                        <div>
                            <strong>Name :</strong> {{ $journal->j_name }}
                        </div>
                        <div>
                            <strong>Abbr title :</strong> {{ $journal->abbr_title }}
                        </div>
                        <div>
                            <strong>ISSN :</strong> {{ $journal->issn }}
                        </div>
                        <div>
                            <strong>Frequency :</strong> {{ $journal->frequency }}
                        </div>
                        <div>
                            <strong>language :</strong> {{ $journal->language }}
                        </div>
                        <div>
                            <strong>Chief editor :</strong> {{ $journal->chief_editor }}
                        </div>
                        <div>
                            <strong>Publisher :</strong> {{ $journal->publisher }}
                        </div>
                        <div>
                            <strong>Country of origin :</strong> {{ $journal->country_of_origin }}
                        </div>
                        <div>
                            <strong>Subject :</strong> {{ $journal->subject }}
                        </div>
                        <div>
                            <strong>Format :</strong> {{ $journal->format }}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <img src="/assets/journals/img/{{ $journal->photo }}" class="col-md-4 col-12" alt="cover image">
            </div>

        </div>
    </div>
    {{-- {!!$journal->about!!} --}}
</div>

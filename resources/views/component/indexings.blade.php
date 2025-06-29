<div class="container">



    <div class="card1 p-3 px-4 my-4">
        <div class="text-center">
            <h3>
                Indexing and Abstracting
            </h3>
        </div>

        <div class="row pt-3">
            @foreach ($indexings as $data)
                <div class="col-md-3 text-center">
                    <img class="img-fluid" {{-- src="https://services.brieflands.com/cdn/serve/31648/dbc6c7a707f13c7f938b16b1229e4399d4ce15da/ithenticate.png" --}} src="{{ url('assets/indexing/img/' . $data->img) }}"
                        alt="Image" style="width: 140px; object-fit: contain;">
                </div>
            @endforeach


        </div>





    </div>
</div>

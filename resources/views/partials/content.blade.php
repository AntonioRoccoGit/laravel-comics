<div class="ms_content">

    <div class="ms_container">
        <h2 class="ms_label">
            CURRENT SERIES
        </h2>
        <div class="container">

            <div class="row row-cols-5 ">
                @foreach ($comics_array as $comic)
                    <div class="col"">
                        <div class="card h-100" style="border:none; background-color: inherit">
                            <img class="card-img-top" src="{{ $comic['thumb'] }}" alt="">
                            <div class="card-body">
                                <h6 class="card-title"> {{ $comic['series'] }} </h6>

                            </div>
                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

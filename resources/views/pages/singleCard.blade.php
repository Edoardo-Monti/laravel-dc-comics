@extends( 'layout.app' )

@section('content')
<div class="cardDcc d-flex justify-content-center py-5">



    <div class="card mb-3" style="max-width: 800px;">
        <div class="row g-0">
            <div class="col-md-6 allign-items-center d-flex">
                <img src="{{ $comicSingolo->thumb }}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-6">
                <div class="card-body">
                    <h5 class="card-title">{{ $comicSingolo->title }}</h5>
                    <span style="font-size: 20px">Price: {{ $comicSingolo->price }}</span>
                    <p class="card-text">{{ $comicSingolo->description }}</p>
                    <p class="card-text"><small class="text-body-secondary">{{ $comicSingolo->series }}</small></p>
                    <p class="card-text"><small class="text-body-secondary">{{ $comicSingolo->sale_date }}</small></p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

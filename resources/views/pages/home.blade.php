@extends( 'layout.app' )

@section('content')
    <div class="bg">
    
        <div class="wid">
            <button type="button" class="btn btn-primary">Load More</button>
    
            @foreach($comic as $elem)
            <div class="cardDc">
                <a href="/comic/{{$elem['id'] }}">
                    <img src="{{ $elem['thumb'] }}" alt="">
                    <h3>{{$elem['type']}}</h3>
                </a>
            </div>
            @endforeach
        </div>
        <div class="buttonLoad">
            <button type="button" class="btn btn-primary">Load More</button>
        </div>
    </div>


@endsection
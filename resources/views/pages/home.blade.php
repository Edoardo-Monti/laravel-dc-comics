@extends( 'layout.app' )

@section('content')
<div class="bg">

    <div class="wid">
        <button type="button" class="btn btn-primary bottone">Load More</button>

        @foreach($comic as $elem)
        <div class="cardDc">
            <a href="/comic/{{$elem['id'] }}">
                <img src="{{ $elem['thumb'] }}" alt="">
                <div class="altezza">
                    <h3 class="">{{$elem['title']}}</h3>
                </div>
            </a>

            <a href="{{route('comic.edit', $elem)}}" class="btn btn-primary">Modifica</a>

            <form action="{{route('comic.destroy', $elem)}}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-warning btn-delete">Elimina</button>
            </form>
        </div>
        @endforeach
    </div>
    <div class="buttonLoad">
        <button type="button" class="btn btn-primary">Load More</button>
    </div>
</div>


@endsection

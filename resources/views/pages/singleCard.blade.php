@extends( 'layout.app' )

@section('content')
<div class="cardDc">
    <img src="{{ $comicSingolo->thumb }}" alt="">
    <h3>{{$comicSingolo->type}}</h3>

</div>

@endsection
@extends( 'layout.app' )

@section('content')
<h1>MODIFICA NUOVO FUMETTO</h1>
<div class="container">
    <form action=" {{ route( 'comic.update', $comic ) }} " method="POST">

        @csrf
        @method('PUT')
    
        <div class="form-group">
            <label class="form-label" for="">Title</label>
            <input class="form-control @error('title') is-invalid @enderror" type="text" name="title" value="{{ old('title') ?? $comic->title }}">
            @error('title')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label class="form-label" for="">description</label>
            <textarea class="@error('title') is-invalid @enderror" name="description" id="" cols="50" rows="10">{{ old('description') ?? $comic->description }}</textarea>
            @error('description')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label class="form-label" for="">thumb</label>
            <input class="form-control @error('thumb') is-invalid @enderror" type="text" name="thumb" value="{{ old('thumb') ?? $comic->thumb }}">
            @error('thumb')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label class="form-label" for="">price</label>
            <input class="form-control @error('price') is-invalid @enderror" type="number" name="price" value="{{ old('price') ?? $comic->price }}">
            @error('price')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label class="form-label" for="">series</label>
            <input class="form-control @error('series') is-invalid @enderror" type="text" name="series" value="{{ old('series') ?? $comic->series }}">
            @error('series')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label class="form-label" for="">sale_date</label>
            <input class="form-control @error('sale_date') is-invalid @enderror" type="date" name="sale_date" value="{{ old('sale_date') ?? $comic->sale_date }}">
            @error('sale_date')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label class="form-label" for="">type</label>
            <input class="form-control @error('type') is-invalid @enderror" type="text" name="type" value="{{ old('type') ?? $comic->type }}">
            @error('type')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
    
        <button type="submit" class="btn btn-primary">Crea Fumetto</button>
</div>

@endsection
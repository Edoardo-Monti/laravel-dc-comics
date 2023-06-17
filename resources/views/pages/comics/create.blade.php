@extends( 'layout.app' )

@section('content')
<h1>CREA UN NUOVO FUMETTO</h1>
<div class="container">
    <form action=" {{ route( 'comic.store' ) }} " method="POST">
        @csrf
    
        <div class="form-group">
            <label class="form-label" for="">Title</label>
            <input class="form-control @error('title') is-invalid @enderror" type="text" name="title">
            @error('title')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label class="form-label" for="">Description</label>
            <textarea class="@error('title') is-invalid @enderror" name="description" id="" cols="50" rows="10"></textarea>
            @error('description')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label class="form-label" for="">Thumb</label>
            <input class="form-control @error('thumb') is-invalid @enderror" type="text" name="thumb">
            @error('thumb')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label class="form-label" for="">Price</label>
            <input class="form-control @error('price') is-invalid @enderror" type="number" name="price">
            @error('price')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label class="form-label" for="">Series</label>
            <input class="form-control @error('series') is-invalid @enderror" type="text" name="series">
            @error('series')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label class="form-label" for="">Sale_Date</label>
            <input class="form-control @error('sale_date') is-invalid @enderror" type="date" name="sale_date">
            @error('sale_date')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label class="form-label" for="">Type</label>
            <input class="form-control @error('type') is-invalid @enderror" type="text" name="type">
            @error('type')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
    
        <button type="submit" class="btn btn-primary">Crea Fumetto</button>
</div>

@endsection
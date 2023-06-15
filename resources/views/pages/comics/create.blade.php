@extends( 'layout.app' )

@section('content')
<h1>CREA UN NUOVO FUMETTO</h1>
<div class="container">
    <form action=" {{ route( 'comic.store' ) }} " method="POST">
        @csrf
    
        <div class="form-group">
            <label class="form-label" for="">Title</label>
            <input class="form-control" type="text" name="title">
        </div>
        <div class="form-group">
            <label class="form-label" for="">Description</label>
            <textarea name="description" id="" cols="50" rows="10"></textarea>
        </div>
        <div class="form-group">
            <label class="form-label" for="">Thumb</label>
            <input class="form-control" type="text" name="thumb">
        </div>
        <div class="form-group">
            <label class="form-label" for="">Price</label>
            <input class="form-control" type="number" name="price">
        </div>
        <div class="form-group">
            <label class="form-label" for="">Series</label>
            <input class="form-control" type="text" name="series">
        </div>
        <div class="form-group">
            <label class="form-label" for="">Sale_Date</label>
            <input class="form-control" type="date" name="sale_date">
        </div>
        <div class="form-group">
            <label class="form-label" for="">Type</label>
            <input class="form-control" type="text" name="type">
        </div>
    
        <button type="submit" class="btn btn-primary">Crea Fumetto</button>
</div>

@endsection
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
            <label class="form-label" for="">description</label>
            <textarea name="description" id="" cols="50" rows="10"></textarea>
        </div>
        <div class="form-group">
            <label class="form-label" for="">thumb</label>
            <input class="form-control" type="text" name="thumb">
        </div>
        <div class="form-group">
            <label class="form-label" for="">price</label>
            <input class="form-control" type="number" name="price">
        </div>
        <div class="form-group">
            <label class="form-label" for="">series</label>
            <input class="form-control" type="text" name="series">
        </div>
        <div class="form-group">
            <label class="form-label" for="">sale_date</label>
            <input class="form-control" type="date" name="sale_date">
        </div>
        <div class="form-group">
            <label class="form-label" for="">type</label>
            <input class="form-control" type="text" name="type">
        </div>
    
        <button type="submit">Crea Fumetto</button>
</div>

@endsection
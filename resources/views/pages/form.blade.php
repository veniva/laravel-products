@extends('layout')

@section('page')
<form method="POST" action="/{{$action ?? ''}}">
    <div class="form-group">
        <label>Name:
            <input type="text" class="form-control" name="name" value="{{$name ?? ''}}" />
        </label>
    </div>
    <div class="form-group">
        <label>Qty:
            <input type="number" class="form-control" name="qty" value="{{$qty ?? ''}}" />
        </label>
    </div>
    <div class="form-group">
        <button class="btn btn-primary" type="submit">Add</button>
        <a class="btn btn-light" href="/">Cancel</a>
    </div>
    @csrf
    @isset($$method)
        @method($method)
    @endisset
</form>
@endsection
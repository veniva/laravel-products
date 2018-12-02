@extends('layout')

@section('page')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{$action ?? '/'}}">
        <div class="form-group">
            <label>Name:
                <input type="text" class="form-control" name="name" value="{{old('name', $name ?? '')}}"/>
            </label>
        </div>
        <div class="form-group">
            <label>Qty:
                <input type="number" class="form-control" name="qty" value="{{old('qty', $qty ?? '')}}"/>
            </label>
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit">Add</button>
            <a class="btn btn-light" href="/">Cancel</a>
        </div>
        @csrf
        @isset($method)
            @method($method)
        @endisset
    </form>
@endsection
@extends('layout')

@section('page')
<div class="container">
    <div class="row mb-5">
        <div class="col-md">
            <ul class="nav">
                <li class="nav-item">
                    <a class="btn btn-primary" href="/create">Add new product</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-md">
            @include('components.table')
        </div>
    </div>
</div>
@endsection
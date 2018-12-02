@extends('layout')

@section('page')
<div class="container">
    @if (!empty($message) && $message instanceof \App\Http\Message)
        <div class="row mb-5">
            <div class="col-md">
                <div class="alert alert-{{$message->getLevel()}} alert-dismissible fade show" role="alert">
                    {{$message->getMessage()}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    @endif
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
@extends('layouts.app')
@section('content')
    <div>
        <h3 class="text-primary float-left">Buildings</h3>
        <a href="{{ url('/buildings/create') }}" class="btn btn-sm btn-primary float-right">Add</a>
    </div>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <br>
    <buildings-index></buildings-index>
@endsection
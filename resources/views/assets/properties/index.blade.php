@extends('layouts.app')
@section('customHeader')
    <link href="{{ asset('css/properties.css') }}" rel="stylesheet">    
@endsection
@section('content')
    <div>
        <h3 class="text-primary float-left">Properties</h3>
        <a href="{{ url('/properties/create') }}" class="btn btn-sm btn-primary float-right">Add</a>
    </div>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <br>
    <properties-index></properties-index>
@endsection
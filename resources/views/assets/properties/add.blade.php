@extends('layouts.app')
@section('content')
    <h3 class="text-primary">Add Property</h3>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <br>
    <propertys-add></propertys-add>
@endsection
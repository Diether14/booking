@extends('layouts.app')
@section('content')
    <h3 class="text-primary">Add Building</h3>
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
    <buildings-add></buildings-add>
@endsection
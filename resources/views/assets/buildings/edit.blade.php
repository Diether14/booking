@extends('layouts.app')
@section('content')
    <h3 class="text-primary">Edit Building</h3>
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
    <buildings-edit building-id="{{$buildingID}}"></buildings-edit>
@endsection
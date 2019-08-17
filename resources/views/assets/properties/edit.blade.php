@extends('layouts.app')
@section('content')
    <h3 class="text-primary">Edit Property</h3>
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
<properties-edit property-id="{{$propertyID}}" buildings="{{json_encode($buildings)}}" landlords="{{json_encode($landlords)}}"></properties-edit>
@endsection
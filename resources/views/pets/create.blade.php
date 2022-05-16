@extends('pets.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <br>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('pets.index') }}"> Back</a>
        </div><div></div>
        <div class="pull-left">
            <h2 align='center'>Create a New Pet</h2>
        </div>
        
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Warning!</strong> Please check your input code<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('pets.store') }}" method="POST">
    @csrf
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name of Pet</strong>
                <input type="text" name="name_of_pet" class="form-control" placeholder="Pet's Name" required pattern="[a-zA-Z'-'\s]*">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Type of Animal:</strong>
                <input type="text" name="type_of_animal" class="form-control" placeholder="Animal Type" required pattern="[a-zA-Z'-'\s]*">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name of Owner:</strong>
                <input type="text" name="owner_of_pet" class="form-control" placeholder="Owner's Name" required pattern="[a-zA-Z'-'\s]*">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Address of Owner:</strong>
                <input type="text" name="address_of_owner" class="form-control" placeholder="Address" required>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection
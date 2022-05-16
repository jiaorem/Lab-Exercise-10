@extends('pets.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <br>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('pets.index') }}"> Back</a>
            </div>
            <div class="pull-left">
                <h2 align='center'>Edit Pet</h2>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Warning!</strong> Please check input field code<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('pets.update',$pet->id) }}" method="POST">
        @csrf
        @method('PUT')
   
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Current Name of Pet: </strong> {{ $pet->name_of_pet }}
                <div>
                <input type="text" name="name_of_pet" class="form-control" placeholder="New Name of Pet" required pattern="[a-zA-Z'-'\s]*">
            </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Current Type of Animal: </strong> {{ $pet->type_of_animal }}
                <div>
                <input type="text" name="type_of_animal" class="form-control" placeholder="New Type of Animal" required pattern="[a-zA-Z'-'\s]*">
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Current Name of Owner:</strong> {{ $pet->owner_of_pet }}
                <div>
                <input type="text" name="owner_of_pet" class="form-control" placeholder="New Name of Owner" required pattern="[a-zA-Z'-'\s]*">
            </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Current Address of Owner:</strong> {{ $pet->address_of_owner }}
                <div>
                <input type="text" name="address_of_owner" class="form-control" placeholder="New Address of Owner" required>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
    </form>
@endsection
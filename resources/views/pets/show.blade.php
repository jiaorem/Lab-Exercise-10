@extends('pets.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <br>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('pets.index') }}"> Back</a>
            </div>
            <br>
            <div class="pull-left">
                <h2 align='center'>Pet #{{ $pet->id }} Details </h2>
            </div>
            
        </div>
    </div>
   
    <div class="card" style="width: 18rem; left: 40%;">
        <div class="card-header" align='center'>
        <strong>{{ $pet->name_of_pet }}'s Record</strong>
        </div>

        <ul class="list-group list-group-flush">

        <li class="list-group-item"><strong>Name of Pet:</strong>
            {{ $pet->name_of_pet }}
        </li>
        <li class="list-group-item"><strong>Type of Animal:</strong>
            {{ $pet->type_of_animal }}
        </li>
        <li class="list-group-item"><strong>Name of the Owner:</strong>
            {{ $pet->owner_of_pet }}
        </li>
        <li class="list-group-item"><strong>Owner's Address:</strong>
            {{ $pet->address_of_owner }}
        </li>
        </ul>
        </div>
    </div>
@endsection
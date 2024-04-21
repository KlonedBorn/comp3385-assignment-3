@extends('layouts.app')
@section('content')
    <div class="container w-75">
        <p class="lead mb-5 fw-bold" style="font-size: 46px;">Add New Property</p>
        <form class="form w-100 mx-auto mt-5 mb-5 p-5 rounded shadow bg-white" method="POST"
            action="{{ route('properties.create') }}">
            @csrf
            <div class="form-group">
                <label class="form-label" for="propTitle">Property Title</label>
                <input class="form-control" type="text" id="propTitle" rows="2" placeholder="Enter property title"
                    required>
            </div>
            <div class="form-group">
                <label class="form-label f-bold" for="propDescript">Description</label>
                <textarea class="form-control" id="propDescript" rows="2" placeholder="Enter property description"></textarea>
            </div>
            <div class="container">
                <div class="row">
                    <div class="form-group col">
                        <label class="form-label f-bold" for="numOfRooms">No. of Rooms</label>
                        <input class="form-control" type="number" id="numOfRooms" rows="2" required value="1">
                    </div>
                    <div class="form-group col">
                        <label class="form-label f-bold" for="numOfBathRms">No. of Bathrooms</label>
                        <input class="form-control" type="number" id="numOfBathRms" rows="2" required value="1">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col">
                        <label class="form-label f-bold" for="propPrice">Price</label>
                        <input class="form-control" type="text" id="propPrice" data-inputmask="'alias': 'currency', 'prefix': '$', 'groupSeparator': ',', 'digits': 2, 'digitsOptional': false, 'placeholder': '0'" required>
                    </div>
                    <div class="form-group col">
                        <label class="form-label f-bold" for="propType">Property Type</label>
                        <select class="form-control" name="propertyType" id="propType">
                            <option value="Apartment">Apartment</option>
                            <option value="House">House</option>
                            <option value="Condo">Condo</option>
                            <option value="Townhouse">Townhouse</option>
                            <option value="Land">Land</option>
                            <option value="Commercial Building">Commercial Building</option>
                            <option value="Commercial Property">Commercial Property</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="form-label f-bold" for="propLoc">Location</label>
                <input class="form-control" type="text" id="propLoc" placeholder="Enter property location" required>
            </div>
            <div class="form-group">
                <label class="form-label f-bold" for="propImage">Photo</label>
                <input class="form-control" type="file" id="propImage" accept=".png,.jpeg,.jpg,.svg,.gif" >
            </div>
            <button class="btn btn-primary" type="submit">Add Property</button>
        </form>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection

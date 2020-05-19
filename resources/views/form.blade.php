@extends('app')

@section('main')
<div class="text-center m-4">
<h2 class="p-4">New Owner</h2>
    <form method="get">
    @csrf
        <label form ="first_name" name ="first_name">First Name</label>
        <input class="form-control @error('first_name') is-invalid @enderror "id="first_name" name="last_name" type="text" value="{{ old('first_name') }}"required>

        @error('first_name')
            <p class="invalid-feedback">
                {{ $messages }}
            </p>
        @enderror

        <label form ="last_name" name ="last_name">Last Name</label>
        <input class="form-control @error('first_name') is-invalid @enderror "id="last_name" name="last_name" type="text" value="{{ old('last_name') }}" required>

        <label form ="address_1" name ="address_1">Address 1</label>
        <input class="form-control "id="address_1" name="address_1" type="text" value="{{ old('address_1') }}" required>

        <label form ="address_2" name ="address_2">Address 2</label>
        <input class="form-control "id="address_2" name="address_2" type="text" value="{{ old('address_2') }}" required>

        <label form ="town" name ="town">Town</label>
        <input class="form-control "id="town" name="town" type="text" value="{{ old('town') }}" required>

        <label form ="postcode" name ="postcode">Postcode</label>
        <input class="form-control" id="telephone" name="telephone" type="tel" value="{{ old('postcode') }}" required>

        <label form ="telephone" name ="telephone">Telephone</label>
        <input class="form-control" id="telephone" name="telephone" type="tel" value="{{ old('telephone') }}" required>

        

        <button class="btn btn-info m-3">Save</button>
    </form>
@endsection
@extends('app')

@section('main')

      <div>
        <h2 class="p-3 text-center">Owner List</h2>
          @foreach( $owners as $owner)
           @include("partials/owner-list", ["owner" => $owner])
          @endforeach
      </div>

      <div>
        <form class="p-3 text-center" method="get">
        @csrf
            <h2 class="p-2">Add Animal</h2>

            <fieldset class="text-center">
            <div class="form-group">
            <label form ="owner" name ="owner">Your Name</label>
            <input id="owner_name" name="owner_name" type="text" class="form-control" required>
            </div>

            <div class="form-group">
            <label form ="animal" name ="animal">Animal Name</label>
            <input id="new_animal" name="new_animal" type="text" class="form-control" required>
            </div>

            <div class="form-group">
            <label form ="animal" name ="animal">Animal Type</label>
            <input id="new_animal" name="new_animal" type="text" class="form-control" required>
            </div>

            <div class="form-group">
            <label form ="animal" name ="animal">Date Of Birth</label>
            <input id="new_animal" name="new_animal" type="text" class="form-control" required>
            </div>

            </fieldset>

            <div class="text-center">
                <button class="btn btn-info">Add</button>
            </div>
        </form>

{{-- //the post method is not supported 

Route::post('/articles/{articles}, "Articles@editPost" --}}


      </div>

@endsection
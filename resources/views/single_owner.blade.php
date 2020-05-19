@extends('app')

@section('main')

      <div>
        <h2 class="p-3 text-center">Owner Profile</h2>
        @include("partials/owner-list", ["owner" => $owner])
      </div>

@endsection
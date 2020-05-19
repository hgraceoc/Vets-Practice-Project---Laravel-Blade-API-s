@extends('app')

@section('main')

            @if (Auth::check())
                <a href="/owners/{{ $owner->id }}/edit" class="float-right btn btn-primary">Edit Owner</a>
            @endif

      <div>
        <h2 class="p-3 text-center">Owner Profile</h2>
        @include("partials/owner-list", ["owner" => $owner])
      </div>


@endsection
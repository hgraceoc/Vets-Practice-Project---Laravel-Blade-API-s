@extends('app')


@section("main")
    <article class="card">
        <h2 class="card-header">
            {{ $owner->name }}

            @if (Auth::check())
                <a href="/owners/{{ $owner->id }}/edit" class="float-right btn btn-primary">Edit Owner</a>
            @endif
        </h2>

        <div class="card-body">

            @include("partials/owner-list", ["owner" => $owner])
            
        </div>
    </article>


@endsection

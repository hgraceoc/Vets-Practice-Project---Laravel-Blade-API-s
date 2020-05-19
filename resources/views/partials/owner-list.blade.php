<a href="/owner/{{ $owner->id }}" class="list-group-item
    list-group-item-action">
<div class="d-inline justify-content-between">
  <h5 class="mb-1">{{ $owner->fullName() }}</h5>
  <br>
  <h6 class="mb-1 text-info">{{ $owner->fullAddress() }}</h6>
</a>

{{-- <h5 class="mb-1">{{ $owner->animals() }}</h5> --}}




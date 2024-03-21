@extends('layouts.main')

@section('container')
  <div class="row">
    <div class="d-flex flex-column gap-2 col-md-6">
      <h1>{{ $note->title }}</h1>
      <p>{{ $note->content }}</p>
    </div>
  </div>
@endsection

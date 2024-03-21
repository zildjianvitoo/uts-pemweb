@extends('layouts.main')


@section('container')
  <h1>Edit catatan</h1>
  <div class="row">
    <div class="col-md-6">
      <form action="/notes/{{ $note->id }}" method="POST" class="my-3">
        @csrf
        @method('PATCH')
        <div class="mb-3">
          <label for="title" class="form-label">Judul catatan</label>
          <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
            value="{{ $note->title }}">
          @error('title')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="description" class="form-label">Deskripsi catatan</label>
          <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"
            style="height: 200px">{{ $note->content }}</textarea>
          @error('description')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
  </form>
@endsection

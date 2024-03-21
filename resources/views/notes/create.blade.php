@extends('layouts.main')


@section('container')
  <h1>Buat catatan baru</h1>
  <div class="row">
    <div class="col-md-6">
      <form action="/notes" method="POST" class="my-3">
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Judul catatan</label>
          <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
            value="{{ old('title') }}">
          @error('title')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="description" class="form-label">Deskripsi catatan</label>
          <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"
            style="height: 200px" value="{{ old('description') }}"></textarea>
          @error('description')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
@endsection

@extends('welcome')


@section('container')
  <div class="row my-3">
    <div class="col-md-4">
      <button class="btn btn-primary">Buat catatan baru</button>
    </div>
  </div>
  <div class="row">

    @foreach ($notes as $note)
      <div class="col-md-3 d-flex align-items-stretch my-2">
        <div class="card " style="width: 18rem;">
          <div class="card-body d-flex flex-column">
            <h3 class="card-title">{{ $note->title }}</h3>
            <p class="card-text">{{ $note->excerpt }}.</p>
            <div class="d-flex justify-content-between mt-auto align-items-center" style="cursor: pointer">
              <a href="/notes/{{ $note->id }}" class="btn btn-secondary mt-auto w-75">Selengkapnya</a>
              <div class="dropdown">
                <a class="  text-decoration-none " role="button" data-bs-toggle="dropdown">
                  <i class="bi bi-three-dots-vertical fs-4"></i>
                </a>
                <ul class="dropdown-menu p-0">
                  <li>
                    <a class="dropdown-item bg-warning text-white" href="/notes/edit">
                      <button class="btn text-white">Edit</button>
                    </a>
                  </li>
                  <form action="/notes/{{ $note->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <li>
                      <a class="dropdown-item bg-danger text-white">
                        <button type="submit" class="btn text-white">Delete</button>
                      </a>
                    </li>
                  </form>
                </ul>
              </div>

            </div>

          </div>
        </div>
      </div>
    @endforeach

  </div>
  </div>
@endsection

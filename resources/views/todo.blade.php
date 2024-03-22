@extends('layouts.index')


@section('main')
  <div class="flex flex-col max-w-screen-md gap-4">
    <div class="flex gap-3 my-1">
      <a href="/todos/{{ $todo->id }}/edit">
        <button type="button"
          class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900">Edit</button>
      </a>
      <form action="/todos/{{ $todo->id }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit"
          class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
          Hapus Todo
        </button>
      </form>
    </div>
    <h1
      class="text-4xl font-semibold text-transparent bg-gradient-to-r bg-clip-text from from-emerald-600 to to-emerald-900 ">
      {{ $todo->title }}
    </h1>
    <p class="text-lg">{{ $todo->description }}</p>
  </div>
@endsection

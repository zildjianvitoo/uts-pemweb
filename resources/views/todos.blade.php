@extends('layouts.index')


@section('main')
  <h1 class="my-6 text-3xl font-bold">Todo Saya</h1>
  <a href="/todos/create">
    <button type="button"
      class="focus:outline-none  text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-4 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
      Buat Todo baru
    </button>
  </a>
  <div class="grid gap-4 grid-cols-12">
    @foreach ($todos as $todo)
      <div class="col-span-3 ">
        <div
          class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 flex flex-col items-stretch h-full">

          @if ($todo->isDone)
            <svg class="w-6 h-6 text-emerald-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
              height="24" fill="none" viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M5 11.917 9.724 16.5 19 7.5" />
            </svg>
          @else
            <h3 class="text-red-500 font-semibold">X</h3>
          @endif


          <a href="/todos/{{ $todo->id }}">
            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">
              {{ $todo->title }}
            </h5>
          </a>
          <p class="mb-3 font-normal text-gray-500 dark:text-gray-400 w-fit">
            {{ $todo->excerpt }}
          </p>
          <a href="/todos/{{ $todo->id }}"
            class="inline-flex mt-auto font-medium items-center text-blue-600 hover:underline">
            Selengkapnya
            <svg class="w-3 h-3 ms-2.5 rtl:rotate-[270deg]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
              fill="none" viewBox="0 0 18 18">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778" />
            </svg>
          </a>
        </div>
      </div>
    @endforeach
  </div>
@endsection

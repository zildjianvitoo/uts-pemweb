@extends('layouts.index')

@section('main')
  <form action="/todos/{{ $todo->id }}" method="POST" class="flex flex-col max-w-md mx-auto ">
    @csrf
    @method('PUT')
    <div class="mb-5">
      <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
        Nama Todo
      </label>
      <input type="text" id="title" name="title"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('title') border-red-500 @enderror"
        placeholder="Masukkan nama todo" value="{{ $todo->title }}" required />
      @error('title')
        <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span
            class="font-medium">{{ $message }}</p>
      @enderror
    </div>
    <div class="mb-5">
      <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi Todo</label>
      <textarea type="text" id="description" name="description"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 h-40 @error('description') border-red-500 @enderror"
        required>{{ $todo->description }}</textarea>
      @error('description')
        <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span
            class="font-medium">{{ $message }}</p>
      @enderror
    </div>
    <div class="mb-5">
      <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
        Status Todo
      </label>
      {{-- {{ dd($todo->isDone) }} --}}
      <select id="countries" name="isDone"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        <option value="0" @selected(!$todo->isDone)>Belum dikerjakan</option>
        <option value="1" @selected($todo->isDone)>Sudah dikerjakan</option>
      </select>
    </div>

    <button type="submit"
      class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
  </form>
@endsection

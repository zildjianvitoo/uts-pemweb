<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>UTS Pemweb</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>


  <nav class="bg-emerald-700">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4 ">
      <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
        <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">Todo List</span>
      </a>
      <button data-collapse-toggle="navbar-default" type="button"
        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-white rounded-lg md:hidden hover:bg-emerald-400 focus:outline-none focus:ring-2 focus:ring-emerald-200"
        aria-controls="navbar-default" aria-expanded="false">
        {{-- <span class="sr-only">Open main menu</span> --}}
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M1 1h15M1 7h15M1 13h15" />
        </svg>
      </button>
      <div class="hidden w-full md:block md:w-auto" id="navbar-default">
        <ul
          class="font-medium flex flex-col p-4 md:p-0 mt-4 border rounded-lg  md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0   ">
          <li>
            <a href="/" class="block py-2 px-3 text-white bg-emerald-500 md:bg-transparent  md:p-0"
              aria-current="page">Home</a>
          </li>
          <li>
            <a href="/todos" class="block py-2 px-3 text-white bg-emerald-500 md:bg-transparent  md:p-0"
              aria-current="page">Todos</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <main class="container mx-auto  max-w-screen-xl px-4 my-5">
    @yield('main')
  </main>

</body>

</html>

<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                Familles
            </h2>
        </div>
    </x-slot>
<div class="m-5">
    @if(session()->has('success'))
    <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md mb-24" role="alert">
        <div class="flex">
          <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
          <div>
            <p class="font-bold">
                {{session()->get('success')}}
            </p>
          </div>
        </div>
      </div>
    @endif
    <a class="m-5" href="{{ route('familles.create') }}"><i class="fa-solid fa-square-plus"></i> Ajouter une famille</a>
</div>
    <div class="overflow-auto rounded-lg shadow-md hidden md:block bg-white dark:bg-dark-eval-2 dark:text-white border-spacing-2">
        {{-- Desktop and Tablets view --}}
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead>
                <tr>
                    <th class="p-3 text-sm font-semibold tracking-wide text-left" scope="col">Id</th>
                    <th class="p-3 text-sm font-semibold tracking-wide text-left" scope="col">Photo</th>
                    <th class="p-3 text-sm font-semibold tracking-wide text-left" scope="col">Titre</th>
                    <th class="p-3 text-sm font-semibold tracking-wide text-left" scope="col">Active</th>
                    <th class="p-3 text-sm font-semibold tracking-wide text-left" scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($familles as $famille)
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <th class="px-6 py-4 bg-gray-50 dark:bg-gray-800" scope="row">{{ $famille->id }}</th>
                        <th scope="row">
                            <img src="{{ url("/uploads/familles_imgs/$famille->photo_famille") }}" width="120px" height="80px" />
                        </th>
                        <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">{{ $famille->famille }}</td>
                        <td class="px-6 py-4 text-sm text-gray-700 dark:text-white border-spacing-2">
                            @if ($famille->active === 1)
                                <span
                                    class="p-1.5 text-xs font-medium uppercase tracking-wider text-green-800 bg-green-200 rounded-lg">
                                    Active
                                </span>
                            @endif

                            @if ($famille->active === 0)
                                <span
                                    class="p-1.5 text-xs font-medium uppercase tracking-wider text-red-800 bg-red-200 rounded-lg">
                                    Not Active
                                </span>
                            @endif
                        </td>
                        <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                           <div class="flex">
                            <a href={{route('familles.edit',$famille->id)}} class="text-lg mr-5">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            <form action="{{ route('familles.destroy',$famille->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                             <button class="text-orange-600 text-lg"><i class="fa-solid fa-trash"></i></button>
                            </form>
                        </div>
                        </td>


                    </tr>
                @endforeach
            </tbody>

        </table>


    </div>

    {{-- Phones view --}}
    <div class="grid grid-cols-1 gap-4 md:hidden mb-10">
        @foreach ($familles as $famille)
        <div class="flex bg-white border relative border-gray-300 dark:bg-dark-eval-2 dark:border-dark-eval-3 rounded-xl overflow-hidden items-center justify-start" style="cursor: auto;">

            <div class="relative w-32 h-32 flex-shrink-0">

              <div class="absolute left-0 top-0 w-full h-full flex items-center justify-center">

                <img class="absolute left-0 top-0 w-full h-full object-cover object-center transition duration-50" loading="lazy" src="{{ url("/uploads/familles_imgs/$famille->photo_famille") }}" />

              </div>

            </div>

            <div class="p-4 flex">

              <h1 class="line-clamp-1 text-3xl"><b>{{ $famille->famille }}</b></h1>

              <span class="text-sm text-gray-500 mx-6 mt-2">
                @if ($famille->active === 1)
                <span
                    class="p-1.5 text-xs font-medium uppercase tracking-wider text-green-800 bg-green-200 rounded-lg">
                    Active
                </span>
            @endif

            @if ($famille->active === 0)
                <span
                    class="p-1.5 text-xs font-medium uppercase tracking-wider text-red-800 bg-red-200 rounded-lg">
                    Not Active
                </span>
            @endif
              </span>

              <span class="flex items-center absolute right-5 text-gray-500">
                <a href={{route('familles.edit',$famille->id)}} class="text-lg mr-5">
                    <i class="fa-solid fa-pen-to-square"></i>
                </a>
                <form action="{{ route('familles.destroy',$famille->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                 <button class="text-orange-600 text-lg"><i class="fa-solid fa-trash"></i></button>

                </form>
              </span>

            </div>

          </div>
        @endforeach

    </div>

</x-app-layout>

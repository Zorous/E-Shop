<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                Familles
            </h2>

        </div>
    </x-slot>

    <div class="p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
        <div class="overflow-auto rounded-lg shadow hidden md:block">
        {{-- Desktop and Tablets view --}}
        <table class="w-full">
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
                    <tr>
                        <th class="p-3 text-sm text-gray-700" scope="row">{{ $famille->id }}</th>
                        <th scope="row">
                            <img src="{{ $famille->photo_famille }}" width="120px" height="80px" />
                        </th>
                        <td class="p-3 text-sm text-gray-700">{{ $famille->famille }}</td>
                        <td class="p-3 text-sm text-gray-700">
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
                        <td class="p-3 text-sm text-gray-700">
                            <a class="btn btn-primary btn-sm text-white">Edit</a>
                            <a class="btn btn-danger btn-sm text-white">Delete</a>
                        </td>


                    </tr>
                @endforeach
            </tbody>

        </table>


    </div>

{{-- Phones view --}}
 <div class="grid grid-cols-1 gap-3 md:hidden mb-10">

@foreach ($familles as $famille)
 <div class="p-4 space-y-3 rounded-lg shadow-lg">
    <div class="flex items-center space-x-2 text-sm shadow-lg">
      <div>
        <img src="{{ $famille->photo_famille }}" width="120px" height="80px" />
      </div>
      <div class="text-sm font-medium">{{ $famille->famille }}</div>
    </div>
    <div>
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
      </div>
      <div>
        <a class="btn btn-primary btn-sm text-white">Edit</a>
        <a class="btn btn-danger btn-sm text-white">Delete</a>
      </div>
   <div>

</div>
@endforeach
  </div>
 </div>
</x-app-layout>

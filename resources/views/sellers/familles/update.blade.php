<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Modifier cette famille') }}
            </h2>

        </div>
    </x-slot>

    <div class="p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
        <form class="w-full max-w-lg mx-auto" action="{{ route('familles.update', $famille->id) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="flex flex-wrap -mx-3 mb-6 mt-6">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-500 text-xs font-bold mb-2"
                        for="grid-first-name">
                        Nom de famille :
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-500 border @error('famille') border-red-500 @enderror dark:bg-slate-700 dark:text-white rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                        id="grid-first-name" name="famille" type="text" value="{{ $famille->famille }}">
                    @error('famille')
                        <p class="text-red-500 text-xs italic">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

            </div>

            <div class="flex flex-wrap -mx-3 mb-6 mt-6">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-500 text-xs font-bold mb-2" for="image">
                        Image
                    </label>
                    <p class="text-yellow-500 text-xs italic">
                        Ne choisissez rien si vous voulez conserver l'ancienne image
                    </p>
                    <input
                        class="appearance-none block w-full bg-gray-200 @error('famille') border-red-500 @enderror text-gray-500 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 dark:bg-slate-700 dark:text-white"
                        id="image" name="photo" type="file">
                    @error('photo')
                        <p class="text-red-500 text-xs italic">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6 mt-6">
                <div class="w-full px-3">
                    <label for="active" class="uppercase tracking-wide text-gray-500 text-xs font-bold">active :</label>
                    <input type="hidden" name="active" value="0">
                    <input type="checkbox" name="active" id="active" value="1" @if($famille->active === 1) checked @endif>
                </div>
            </div>

            <div class="flex items-center justify-between p-6">
                <button type="submit"
                    class="text-sm bg-green-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    <i class="fa-solid fa-pen-to-square"></i> Modifier
                </button>
                <a href={{route('familles.index')}} class="inline-block  align-baseline font-bold text-sm text-orange-600 hover:text-orange-800">
                    Annuler
                </a>
            </div>

        </form>
    </div>
</x-app-layout>

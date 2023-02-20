<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                Ajouter une nouvelle sous famille
            </h2>

        </div>
    </x-slot>

    <div class="p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
        <form class="w-full max-w-lg mx-auto" action="{{ route('sous-familles.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="flex flex-wrap -mx-3 mb-6 mt-6">
                <div class="w-full px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="grid-first-name">
                       Nom d'Article  :
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border @error("sous_famille") border-red-500 @enderror dark:bg-slate-700 dark:text-white rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                        id="grid-first-name" name="article" type="text" value={{old("famille")}}>
                        @error("article")
                        <p class="text-red-500 text-xs italic">
                            {{$message}}
                        </p>
                        @enderror
                </div>

            </div>
            <div class="flex flex-wrap -mx-3 mb-6 mt-6">
                <div class="w-full px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="grid-first-name">
                       Stock initiale :
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border @error("sous_famille") border-red-500 @enderror dark:bg-slate-700 dark:text-white rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                        id="grid-first-name" name="stock_initial" type="text" value={{old("famille")}}>
                        @error("stock")
                        <p class="text-red-500 text-xs italic">
                            {{$message}}
                        </p>
                        @enderror
                </div>

            </div>

            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="image">
                        Image
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 @error("famille") border-red-500 @enderror text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 dark:bg-slate-700 dark:text-white"
                        id="image" name="photo" type="file">
                        @error("photo")
                        <p class="text-red-500 text-xs italic">
                            {{$message}}
                        </p>
                        @enderror
                </div>

                <div class="w-full px-3 mb-6">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="image">
                        Sous Famille
                    </label>
                    <select name="sous_famille_id" class="block appearance-none w-full bg-white dark:bg-slate-700 border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                        <option value="none" selected disabled hidden>Selecter une famille</option>
                        @foreach($sous_familles as $sf)
                        <option value={{$sf->id}}>{{$sf->sous_famille}}</option>
                        @endforeach
                      </select>
                      @error("sous_famille")
                      <p class="text-red-500 text-xs italic">
                          {{$message}}
                      </p>
                      @enderror
                </div>
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="image">
                        Unité
                    </label>
                    <select name="unite_id" class="block appearance-none w-full bg-white dark:bg-slate-700 border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                        <option value="none" selected disabled hidden>Selecter une famille</option>
                        @foreach($unites as $unite)
                        <option value={{$unite->id}}>{{$unite->unite}}</option>
                        @endforeach
                      </select>
                      @error("unite")
                      <p class="text-red-500 text-xs italic">
                          {{$message}}
                      </p>
                      @enderror
                </div>
            </div>

            <div class="flex items-center justify-between p-6">
                <button type="submit" class="text-sm bg-green-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                  + Ajouter
                </button>
                <a href={{route('sous-familles.index')}} class="inline-block  align-baseline font-bold text-sm text-orange-600 hover:text-orange-800">
                    Annuler
                </a>
              </div>

        </form>
    </div>
</x-app-layout>

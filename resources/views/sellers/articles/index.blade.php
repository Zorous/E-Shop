<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                Articles
            </h2>
        </div>
    </x-slot>
    <div class="m-5">
        @if (session()->has('success'))
            <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md mb-24"
                role="alert">
                <div class="flex">
                    <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path
                                d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z" />
                        </svg></div>
                    <div>
                        <p class="font-bold">
                            {{ session()->get('success') }}
                        </p>
                    </div>
                </div>
            </div>
        @endif
        <a class="text-sm bg-orange-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
            href="{{ route('articles.create') }}"><i class="fa-solid fa-square-plus"></i> Ajouter une article</a>
    </div>
    <div
        class="overflow-auto p-9 rounded-lg shadow-md hidden md:block bg-white dark:bg-dark-eval-2 dark:text-white border-spacing-2">
        {{-- Desktop and Tablets view --}}
        <table class="w-full text-sm text-left mx-auto text-gray-500 dark:text-gray-400">
            <thead>
                <tr>
                    <th class="p-3 text-sm font-semibold tracking-wide text-left" scope="col">Photo</th>
                    <th class="p-3 text-sm font-semibold tracking-wide text-left" scope="col">Designation</th>
                    <th class="p-3 text-sm font-semibold tracking-wide text-left" scope="col">Stock</th>
                    <th class="p-3 text-sm font-semibold tracking-wide text-left" scope="col">Active</th>
                    <th class="p-3 text-sm font-semibold tracking-wide text-left" scope="col">Prix</th>
                    <th class="p-3 text-sm font-semibold tracking-wide text-left" scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @if ($articles->count() > 0)
                    @foreach ($articles as $article)
                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700 text-center">
                            <td class="relative w-89 h-32 flex-shrink-0">
                                <div class="absolute left-0 top-0 w-full h-full flex items-center justify-center">
                                    <img class="absolute left-0 top-0 w-full h-full object-cover object-center transition duration-50"
                                        src="{{ url("/uploads/articles_imgs/$article->photo") }}" width="120px"
                                        height="80px" />
                                </div>
                            </td>
                            <td class="px-6 py-4 text-center text-xl bg-gray-50 dark:bg-gray-800">
                                {{ $article->designation }}</td>
                            <td class="bg-white border-b dark:bg-gray-900 dark:border-gray-700 text-center">
                                {{ $article->stock_initial }}</td>
                            <td class="px-6 py-4 text-center text-xl bg-gray-50 dark:bg-gray-800">
                                @if ($article->active === 1)
                                    <span
                                        class="p-1.5 text-xs font-medium uppercase tracking-wider text-green-800 bg-green-200 rounded-lg">
                                        <i class="fa-solid fa-star"></i> Active
                                    </span>
                                @endif

                                @if ($article->active === 0)
                                    <span
                                        class="p-1.5 text-xs font-medium uppercase tracking-wider text-red-800 bg-red-200 rounded-lg">
                                        Not Active
                                    </span>
                                @endif
                            </td>
                            <td class="bg-white border-b dark:bg-gray-900 dark:border-gray-700 text-center">
                                {{ $article->prix }}</td>
                            <td class="px-6 py-4 text-center bg-gray-50 dark:bg-gray-800">
                                <div class="flex">
                                    <a href={{ route('articles.edit', $article->id) }} class="text-lg mr-5">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                    <form action="{{ route('articles.destroy', $article->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="text-orange-600 text-lg"><i
                                                class="fa-solid fa-trash"></i></button>
                                    </form>
                                </div>
                            </td>


                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="5" class="text-center bg-gray-50 dark:bg-gray-800">Aucun Article est trouvée
                        </td>
                    </tr>
                @endif
            </tbody>

        </table>


    </div>

    {{-- Phones view --}}
    <div class="grid grid-cols-1 gap-4 md:hidden mb-10">
        @foreach ($articles as $article)
            <div class="flex bg-white border relative border-gray-300 dark:bg-dark-eval-2 dark:border-dark-eval-3 rounded-xl overflow-hidden items-center justify-start"
                style="cursor: auto;">

                <div class="relative w-32 h-32 flex-shrink-0">

                    <div class="absolute left-0 top-0 w-full h-full flex items-center justify-center">

                        <img class="absolute left-0 top-0 w-full h-full object-cover object-center transition duration-50"
                            loading="lazy" src="{{ url("/uploads/articles_imgs/$article->photo") }}" />

                    </div>

                </div>

                <div class="p-4 flex">

                    <div class="block">
                        <h1 class="line-clamp-1 text-3xl"><b>{{ $article->designation }}</b></h1>
                        <h2 class="line-clamp-1 text-sm text-gray-400"><b>Prix : {{ $article->prix }} DH</b></h2>
                        <h2 class="line-clamp-1 text-sm text-gray-400"><b>Stock : {{ $article->stock_initial }}</b></h2>
                    </div>
                    <span class="text-sm text-gray-500 mx-6 mt-2">
                        @if ($article->active === 1)
                            <span
                                class="p-1.5 text-xs font-medium uppercase tracking-wider text-green-800 bg-green-200 rounded-lg">
                                Active
                            </span>
                        @endif

                        @if ($article->active === 0)
                            <span
                                class="p-1.5 text-xs font-medium uppercase tracking-wider text-red-800 bg-red-200 rounded-lg">
                                Not Active
                            </span>
                        @endif
                    </span>

                    <span class="flex items-center absolute right-5 text-gray-500">
                        <a href={{ route('articles.edit', $article->id) }} class="text-lg mr-5">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        <form action="{{ route('articles.destroy', $article->id) }}" method="post">
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

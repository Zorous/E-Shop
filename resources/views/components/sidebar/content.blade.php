<x-perfect-scrollbar
    as="nav"
    aria-label="main"
    class="flex flex-col flex-1 gap-4 px-3"
>

    <x-sidebar.link
        title="Dashboard"
        href="{{ route('dashboard') }}"
        :isActive="request()->routeIs('dashboard')"
    >
        <x-slot name="icon">
            <x-icons.dashboard class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>

    <x-sidebar.link
        title="Familles"
        href="{{ route('familles.index') }}"
        :isActive="request()->routeIs('dashboard')"
    >
        <x-slot name="icon">
            <img src={{url("/assets/images/icons/article-icon.png")}} class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>

    <x-sidebar.link
        title="Sous Familles"
        href="{{ route('sous-familles.index') }}"
        :isActive="request()->routeIs('dashboard')"
    >
        <x-slot name="icon">
            <img src={{url("/assets/images/icons/sousf.png")}} class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>

    <x-sidebar.link
        title="Articles"
        href="{{ route('articles.index') }}"
        :isActive="request()->routeIs('dashboard')"
    >
        <x-slot name="icon">
            <img src={{url("/assets/images/icons/grocery-icon.png")}} class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>


</x-perfect-scrollbar>

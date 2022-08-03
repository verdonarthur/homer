<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Pages
        </h2>
    </x-slot>
    <x-slot name="slot">

        <div class="pages-list-header max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h3 class="pages-list-title font-semibold">Pages list</h3>
            <form method="GET" action="{{ route('pages.create') }}">
                <x-button>Add new page</x-button>
            </form>
        </div>

        <div class="list max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <ul>
                @foreach ($pages as $page)
                    <li class="page bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="title"><a class ="a" href="{{ route('pages.show', [$page->url]) }}">{{ $page->title }}</a></div>

                        <div class="page-buttons">
                            <form class="page-button" method="GET" action="{{route('pages.edit', [$page->id])}}">
                                <x-button class="secondary">Edit</x-button>
                            </form>

                            <form class="page-button" method="POST" action="{{ route('pages.destroy', [$page->id]) }}">
                                @csrf
                                @method('DELETE')
                                <x-button class="delete">Delete </x-button>
                            </form>
                        </div>
                    </li>
                @endforeach
            </ul>

            {!! $links !!}
        </div>

    </x-slot>

</x-app-layout>

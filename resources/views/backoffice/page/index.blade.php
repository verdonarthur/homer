<x-backoffice-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Pages
        </h2>
    </x-slot>
    <x-slot name="slot">

        <div class="flex flex-row justify-start p-t2 max-w-7xl mx-auto pt-6 pb-4 px-4 sm:px-6 lg:px-8">
            <h3 class="pages-list-title font-semibold mr-4">Pages list</h3>
            <form method="GET" action="{{ route('pages.create') }}">
                <x-button>Add new page</x-button>
            </form>
        </div>

        <div class="max-w-7xl mx-auto py-2 px-4 sm:px-6 lg:px-8">
            <ul>
                @foreach ($pages as $page)
                    <li class="flex flex-row content-evenly justify-between px-2 py-2 mb-4 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="title"><a class="text-indigo-400" href="{{ route('pages.show', [$page->id]) }}">{{ $page->title }}</a></div>

                        <div class="flex flex-row">
                            <form method="GET" action="{{route('pages.edit', [$page->id])}}">
                                <x-button class="secondary">Edit</x-button>
                            </form>

                            <form class="mx-2" method="POST" action="{{ route('pages.destroy', [$page->id]) }}">
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

</x-backoffice-layout>

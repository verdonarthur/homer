<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Pages
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in the backoffice!
                </div>
            </div>
        </div>
    </div>
    <x-slot name="slot">
        <div class="pages-list-header">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <a href="{{ route('page.create') }}">
                    <x-button>Add new page</x-button>
                </a>
            </div>
        </div>
        <div class="list max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <ul>
                @foreach ($pages as $page)
                    <li class="page bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="title">{{ $page->title }}</div>
                        <div class="url">{{ $page->url }}</div>
                        <a href="{{ route('pages.edit', [$page->id]) }}">
                            <x-button>Edit</x-button>
                        </a>
                        <form method="POST" action="{{ route('pages.destroy', [$page->id]) }}">
                            @csrf
                            @method('DELETE')
                            <a href="{{ route('pages.destroy', [$page->id]) }}">
                                <x-button>Destroy</x-button>
                            </a>
                        </form>
                    </li>
                @endforeach
            </ul>
            {!! $links !!}
        </div>
        <style>
            .pages-list-header {
                display: flex;
                flex-direction: row;
                justify-content: space-between;
            }

            .page {
                display: flex;
                padding: 0.3rem 1rem 0.3rem 1rem;
                flex-direction: row;
                justify-content: space-between;
                align-content: space-evenly;
                margin: 0 0 1rem 0;
                border-radius: 0.2rem;
            }
        </style>
    </x-slot>
</x-app-layout>

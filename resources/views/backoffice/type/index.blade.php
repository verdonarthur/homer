<x-backoffice-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Page types
        </h2>
    </x-slot>
    <x-slot name="slot">

        <div class="flex flex-row justify-start p-t2 max-w-7xl mx-auto pt-6 pb-4 px-4 sm:px-6 lg:px-8 mb-6">
            <h3 class="types-list-title font-semibold mr-4">types list</h3>
            <form method="GET" action="{{ route('types.create') }}">
                <x-button>Add new type type</x-button>
            </form>
        </div>

        <div class="max-w-7xl mx-auto py-2 px-4 sm:px-6 lg:px-8">
            <ul>
                @foreach ($types as $type)
                    <li class="flex flex-row content-evenly items-center justify-between px-2 py-2 mb-4 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div><span>{{ $type->name }}</span></div>

                        <div class="flex flex-row">
                            <form method="GET" action="{{route('types.edit', [$type->id])}}">
                                <x-button type="primary">Edit</x-button>
                            </form>

                            <form class="mx-2" method="POST" action="{{ route('types.destroy', [$type->id]) }}">
                                @csrf
                                @method('DELETE')
                                <x-button type="delete">Delete </x-button>
                            </form>
                        </div>
                    </li>
                @endforeach
            </ul>

            {!! $links !!}
        </div>

    </x-slot>

</x-backoffice-layout>

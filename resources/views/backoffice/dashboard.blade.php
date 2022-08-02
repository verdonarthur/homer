<x-backoffice-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
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
            <div class="pages-list-title">
                <h1> Pages </h1>
            </div>
            <div class="create-page-button">
                <a href="{{ route('page.create') }}"><x-button>Ajouter</x-button></a>
            </div>
        </div>
    </div>
    </x-slot>
</x-backoffice-layout>

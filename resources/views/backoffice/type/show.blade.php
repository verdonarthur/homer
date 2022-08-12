<x-app-layout>

    <x-slot name="slot">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $page->title }}
        </h2>
        <div class="pages-list-header">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">           
            </div>
        </div>
        <span>Url: {{$page->url}}</span><br/>
        <span>Type id: {{$page->type_id}}</span>
    </x-slot>

</x-app-layout>
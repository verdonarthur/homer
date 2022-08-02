<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create a new page
        </h2>
    </x-slot>
    <div class="pages-list">
        <form method="POST" action="{{ route('pages.store') }}" accept-charset="UTF-8" class="form-horizontalpanel">
            @csrf
            <x-label>Title</x-label>
            <div class="form-group {!! $errors->has('title') ? 'has-error' : '' !!}">
                <x-input type="text" name="title" placeholder="Title" class="form-control"></x-input>
                {!! $errors->first('title', '<small class="help-block">:message</small>') !!}
            </div>
            <x-label>Url</x-label>
            <div class="form-group {!! $errors->has('url') ? 'has-error' : '' !!}">
                <x-input type="text" name="url" placeholder="Url" class="form-control"></x-input>
                {!! $errors->first('url', '<small class="help-block">:message</small>') !!}
            </div>
            <x-button>Save the page</x-button>
        </form>
    </div>
   
</x-app-layout>

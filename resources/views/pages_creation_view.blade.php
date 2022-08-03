<x-backoffice-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create a new page
        </h2>
    </x-slot>
    <div class="page-creation">
        <form class="page-creation-form" method="POST" action="{{ route('pages.store') }}" accept-charset="UTF-8">
            @csrf
            <div class="form-title">
                <h3 class="font-semibold">Page creation form</h3>
            </div>
            <x-label class="page-label">Title</x-label>
            <div class="form-group {!! $errors->has('title') ? 'has-error' : '' !!}">
                <x-input type="text" name="title" placeholder="Title" class="form-control"></x-input>
                {!! $errors->first('title', '<small class="help-block">:message</small>') !!}
            </div>
            <x-label class="page-label">Url</x-label>
            <div class="form-group {!! $errors->has('url') ? 'has-error' : '' !!}">
                <x-input type="text" name="url" placeholder="Url" class="form-control"></x-input>
                {!! $errors->first('url', '<small class="help-block">:message</small>') !!}
            </div>
            <div class="form-group submit">
                <x-button>Save the page</x-button>
            </div>
        </form>
    </div>
</x-backoffice-layout>

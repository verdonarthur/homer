<x-app-layout>
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
    <div class="pages-list">
        <form method="POST" action="{{ route('page.create') }}" accept-charset="UTF-8" class="form-horizontalpanel">
            @csrf
            <div class="form-group {!! $errors->has('title') ? 'has-error' : '' !!}">
                <input type="text" name="title" placeholder="Title" class="form-control">
                {!! $errors->first('title', '<small class="help-block">:message</small>') !!}
            </div>
            <div class="form-group {!! $errors->has('url') ? 'has-error' : '' !!}">
                <input type="text" name="url" placeholder="Url" class="form-control">
                {!! $errors->first('url', '<small class="help-block">:message</small>') !!}
            </div>
            <input class="btn btn-primary pull-right" type="submit" value="Envoyer">
        </form>
    </div>
</x-app-layout>

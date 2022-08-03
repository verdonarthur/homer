<x-backoffice-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit page {{ $page->title }}
        </h2>
    </x-slot>
    <div class="page-creation">
     <form method="GET" action="/{{$page->url}}" accept-charset="UTF-8">
   <a href="/{{$page->url}}"> <x-button>View page</x-button></a>
    </form>
        <form class="page-creation-form" method="POST" target="_blank" action="{{ route('pages.update', [$page->id]) }}" accept-charset="UTF-8">
            @csrf
            @method('PUT')
            <div class="form-title">
                <h3 class="font-semibold">Page edition form</h3>
            </div>
            <x-label class="page-label">Title</x-label>
            <div class="form-group {!! $errors->has('title') ? 'has-error' : '' !!}">
                <x-input type="text" name="title" placeholder="{{$page->title}}" value="{{$page->title}}" class="form-control"></x-input>
                {!! $errors->first('title', '<small class="help-block">:message</small>') !!}
            </div>
            <x-label class="page-label">Url</x-label>
            <div class="form-group {!! $errors->has('url') ? 'has-error' : '' !!}">
                <x-input type="text" name="url" placeholder="{{ $page->url }}" value="{{ $page->url }}" class="form-control"></x-input>
                {!! $errors->first('url', '<small class="help-block">:message</small>') !!}
            </div>
            <div class="form-group submit">
                <x-button>Update the page</x-button>
            </div>
        </form>
    </div>
</x-backoffice-layout>
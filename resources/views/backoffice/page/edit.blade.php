<x-backoffice-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit page {{ $page->title }}
        </h2>
    </x-slot>


        <div class="flex content-center justify-center flex-col mt-4">
            <form class="m-auto" method="GET" action="/{{ $page->url }}" accept-charset="UTF-8">
                <a href="/{{ $page->url }}">
                    <x-button>View page</x-button>
                </a>
            </form>

            <form class="flex flex-col border-2 border-grey-600 bg-slate-50 m-auto rounded-lg p-4 my-4" method="POST" target="_blank"
                action="{{ route('pages.update', [$page->id]) }}" accept-charset="UTF-8">
                @csrf
                @method('PUT')
                <div class="flex justify-center my-2">
                    <h3 class="font-semibold">Page edition form</h3>
                </div>

                <x-label class="page-label">Title</x-label>
                <div class="flex justify-center my-4  {!! $errors->has('title') ? 'has-error' : '' !!}">
                    <x-input type="text" name="title" placeholder="{{ $page->title }}" value="{{ $page->title }}"
                        class="form-control"></x-input>
                    {!! $errors->first('title', '<small class="help-block">:message</small>') !!}
                </div>

                <x-label class="page-label">Url</x-label>
                <div class="flex justify-center my-4 {!! $errors->has('url') ? 'has-error' : '' !!}">
                    <x-input type="text" name="url" placeholder="{{ $page->url }}" value="{{ $page->url }}"
                        class="form-control"></x-input>
                    {!! $errors->first('url', '<small class="help-block">:message</small>') !!}
                </div>

                <div class="flex justify-center m-2">
                    <x-button>Update the page</x-button>
                </div>
            </form>

        </div>

</x-backoffice-layout>

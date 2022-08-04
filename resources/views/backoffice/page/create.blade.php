<x-backoffice-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create a new page
        </h2>
    </x-slot>

    <div class="flex justify-center">

        <form class="flex flex-col border-2 border-grey-600 bg-slate-50 m-auto rounded-lg p-4 my-4" method="POST"
            action="{{ route('pages.store') }}" accept-charset="UTF-8">
            @csrf
            <div class="flex justify-center my-2">
                <h3 class="font-semibold">Page creation form</h3>
            </div>

            <x-label class="page-label">Title</x-label>
            <div class="flex justify-center my-4 {!! $errors->has('title') ? 'has-error' : '' !!}">
                <x-input type="text" name="title" placeholder="Title" class="form-control"></x-input>
                {!! $errors->first('title', '<small class="help-block">:message</small>') !!}
            </div>

            <x-label class="page-label">Url</x-label>
            <div class="flex justify-center my-4 {!! $errors->has('url') ? 'has-error' : '' !!}">
                <x-input type="text" name="url" placeholder="Url" class="form-control"></x-input>
                {!! $errors->first('url', '<small class="help-block">:message</small>') !!}
            </div>

            <x-label class="page-label">Type</x-label>
            <div class="flex justify-center my-4 {!! $errors->has('url') ? 'has-error' : '' !!}">
                <select
                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 form-control mr-auto" name="type_id" class="form-control">
                    @foreach($types as $type)
                        <option value="{{$type['id']}}">{{$type['name']}}</option>
                    @endforeach
                </select>
                {!! $errors->first('url', '<small class="help-block">:message</small>') !!}
            </div>

            <div class="flex justify-center m2">
                <x-button>Save the page</x-button>
            </div>
        </form>

    </div>

</x-backoffice-layout>

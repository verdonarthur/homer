<x-backoffice-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create a new type
        </h2>
    </x-slot>

    <div class="flex justify-center">

        
        <form class="flex flex-col border-2 border-grey-600 bg-slate-50 m-auto rounded-lg p-4 my-4" method="POST"
            action="{{ route('types.store') }}" accept-charset="UTF-8">
            @csrf
            <div class="flex justify-center my-2">
                <h3 class="font-semibold">Type creation form</h3>
            </div>

            <x-label class="type-label">Name</x-label>
            <div class="flex justify-center my-4 {!! $errors->has('name') ? 'has-error' : '' !!}">
                <x-input type="text" name="name" placeholder="Name" class="form-control"></x-input>
                {!! $errors->first('name', '<small class="help-block">:message</small>') !!}
            </div>

            <x-label class="type-label">Layout</x-label>
                <select
                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 form-control mr-auto" name="layout" class="form-control">
                    @foreach($layouts as $layout)
                        <option value="{{$layout}}">{{$layout}}</option>
                    @endforeach
                </select>

            <div class="flex justify-center m2">
                <x-button>Save the type</x-button>
            </div>
        </form>

    </div>

</x-backoffice-layout>

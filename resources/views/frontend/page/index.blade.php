    @extends('layouts.' . $layout)

    @section('slot')
        <div class="pages-list-header">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ $page->title }}
                </h2>
            </div>
        </div>
    @endsection

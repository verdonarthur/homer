<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Pages
        </h2>
    </x-slot>
    <x-slot name="slot">
        <div class="pages-list-header max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h3 class="pages-list-title font-semibold">Pages list</h3>
            <form method="GET" action="{{ route('pages.create') }}">
                <x-button>Add new page</x-button>
            </form>
        </div>
        <div class="list max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <ul>
                @foreach ($pages as $page)
                    <li class="page bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="title"><a style="color: #818CF8"
                                href="{{ route('pages.show', [$page->url]) }}">{{ $page->title }}</a></div>
                        <div class="page-buttons">
                            <form class="page-button" method="GET" action="/{{$page->url}}">
                                <x-button style="background-color: #818CF8">Edit</x-button>
                            </form>
                            <form class="page-button" method="POST" action="{{ route('pages.destroy', [$page->id]) }}">
                                @csrf
                                @method('DELETE')
                                <x-button class="delete">Delete </x-button>
                            </form>
                        </div>
                    </li>
                @endforeach
            </ul>
            {!! $links !!}
        </div>
        <div class="confirmation-form hidden">
            <span class="confirmation-text">Are you sure you want to delete the page ? This action cannot be
                undone.</span>
            <div class="confirmation-buttons">
                <x-button style="background-color:#818CF8" onClick="hideConfirmationForm()">Cancel</x-button>
                <form class="page-button" action="{{ route('pages.destroy', [$page->id]) }}">
                    @csrf
                    @method('DELETE')
                    <x-button>Delete this page</x-button>
                </form>
            </div>
        </div>

        {{-- <script>
            const confirmation_form = document.querySelector('.confirmation-form')

            const delete_buttons = document.querySelectorAll('.deleteButton')
            delete_buttons.forEach(button => {
                button.addEventListener('click', (e) => {
                    showConfirmationForm(e.target.dataset.pageTitle)
                })
            })

            function showConfirmationForm(page_title) {
                confirmation_form.classList.remove('hidden')
                confirmation_form.querySelector('.confirmation-text').textContent = `Are you sure you want to delete the page ${page_title} ? This action cannot be undone.`
            }

            function hideConfirmationForm() {
                console.log("hides")
                confirmation_form.classList.add('hidden')
            }
        </script> --}}
    </x-slot>
</x-app-layout>

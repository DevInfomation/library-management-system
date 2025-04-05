@extends('layout.default')
@section('content')
    <form action="{{route('search')}}" method="GET">
        @csrf
        <div class="flex justify-evenly">
            <div class="border-4 rounded-md border-black w-1/3 bg-white ml-4 mt-12 min-h-[10rem]">
                <div class="bg-gray-400 p-2">
                    <p class="text-center">Search for a book</p>
                </div>
                <div class='max-w-md mx-auto flex flex-col'>
                    <div class="flex items-center w-full h-12 rounded-lg focus-within:shadow-lg bg-white overflow-hidden">
                        <div class="grid place-items-center h-full w-12 text-gray-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </div>
                        <input
                            class="peer h-full w-full outline-none text-sm text-gray-700 pr-2"
                            name="search"
                            type="search"
                            id="search"
                            placeholder="Search for a book...">
                    </div>
                    <button class="text-white border rounded-md bg-green-400 p-1 mt-4" type="button" onclick="hideSearchedBooks()">Search</button>
                </div>
            </div>
        </div>
    </form>
    <div class="flex justify-evenly" id="searched-books" style="display: none;">
        <div class="border-4 rounded-md border-black w-1/3 bg-white ml-4 mt-12 min-h-[10rem]">
            <div class="bg-gray-400 p-2">
                <p class="text-center">The Searched Book</p>
            </div>
            @if ($books->isNotEmpty())
                @foreach ($books as $book)
                    <p>{{$book->title}}</p>
                @endforeach
            @else
                <div>
                    <h2>No books found</h2>
                </div>
            @endif
        </div>
    </div>

    <script>
        function hideSearchedBooks() {
            const hide = document.getElementById("searched-books");
            hide.style.display = '';
        }
    </script>
@endsection
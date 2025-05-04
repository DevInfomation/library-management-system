@extends('layout.default')
@section('content')
    <form action="{{route('search')}}" method="GET">
        @csrf
        <div class="grid grid-cols-3 gap-5">
            <div class="border-4 rounded-md border-black w-md bg-white ml-4 mt-12 min-h-[10rem] col-start-2">
                {{-- <div class="bg-gray-400 p-2">
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
                            type="text"
                            id="search"
                            placeholder="Search for a book...">
                    </div>
                    <button class="text-white border rounded-md bg-green-400 p-1 mt-4" type="submit" onclick="hideSearchedBooks()">Search</button>
                </div> --}}
                <div class="bg-gray-400 p-2">
                    <div class="text-center">Search for a book</div>
                </div>
                <div class="mx-w-md mx-auto flex flex-col p-2">
                    <div class="flex items-center w-full h-12 rounded-lg focus-within:shadow-lg bg-white overflow-hidden">
                        <input class="peer h-full w-full outline-none text-sm text-gray-700 pr-2" type="text" name="search" placeholder="Search here..."/>
                    </div>
                    <button class="text-white border rounded-md bg-green-400 p-1 mt-4" type="submit" type="submit">Search</button>
                </div>
            </div>
            <div class="border-4 rounded-md border-black w-1/3 bg-white mt-12 h-40">
                <div class="bg-gray-400 p-2">
                    <p>Issued Books</p>
                </div>
                <div class="p-2">
                    <div>
                        <p>See the issued books you have borrowed</p> 
                    </div>
                    <a href="{{route('issuedBooks')}}"><h3 class="mt-5 border-2 rounded-md bg-green-400 text-center text-white">Issued Books</h3></a>
                </div>
            </div>
        </div>
    </form>

    <form action="#" method="POST">
        <table class="mx-auto border-4 border-collapse bg-black mt-10">
            <thead>
                <tr class="border-4 border-collapse bg-black">
                    <th class="text-white p-2">ISBN</th>
                    <th class="text-white p-2">Title</th>
                    <th class="text-white p-2">Author</th>
                    <th class="text-white p-2">Genre</th>
                    <th class="text-white p-2">Category</th>
                    <th class="text-white p-2">Published Year</th>
                    <th class="text-white p-2">Price (MKD)</th>
                    <th class="text-white p-2">Copies Available</th>
                    <th class="text-white p-2">Rent</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <th class="text-white p-2">{{$book->isbn}}</th>
                        <th class="text-white p-2">{{$book->title}}</th>
                        <th class="text-white p-2">{{$book->author}}</th>
                        <th class="text-white p-2">{{$book->genre}}</th>
                        <th class="text-white p-2">{{$book->category}}</th>
                        <th class="text-white p-2">{{$book->published_year}}</th>
                        <th class="text-white p-2">{{$book->price}}</th>
                        <th class="text-white p-2">{{$book->copies_available}}</th>
                        <th class="text-white p-2"><button class="border rounded-md bg-green-400 p-2">Rent</button></th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </form>

@endsection
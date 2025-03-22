@extends('layout.default')
@section('content')
    <div class="flex">
        <div class="border-4 rounded-md border-black w-1/6 bg-white ml-4 mt-4 min-h-[8rem]">
            <div class="bg-gray-400 p-2">
                <p>Logout</p>
            </div>
            <div class="p-2">
                <div>
                    <p>Do you wish to logout?</p>
                </div>
                <form action="{{route('logout')}}" method="POST" class="bg-white">
                    @csrf
                    <button class="text-white border rounded-md bg-green-400 p-1 mt-4">Logout</button>
                </form>
            </div>
        </div>
        <div class="border-4 rounded-md border-black w-1/6 bg-white ml-4 mt-4 min-h-[8rem]">
            <div class="bg-gray-400 p-2">
                <p>Books Issued</p>
            </div>
            <div class="p-2">
                <div>
                    {{-- Keep the 0 for now and we will update with the database soon --}}
                    <p>Issued books: 0</p> 
                </div>
                <form action="" method="POST" class="bg-white">
                    @csrf
                    <button class="text-white border rounded-md bg-green-400 p-1 mt-4">View Issued Books</button>
                </form>
            </div>
        </div>
        <div class="border-4 rounded-md border-black w-1/6 bg-white ml-4 mt-4 min-h-[8rem]">
            <div class="bg-gray-400 p-2">
                <p>Book Creation</p>
            </div>
            <div class="p-2">
                <div>
                    {{-- Keep the 0 for now and we will update with the database soon --}}
                    <p>Create a book here:</p> 
                </div>
                <a href="/book-creation"><button class="text-white border rounded-md bg-green-400 p-1 mt-4">Create a book</button></a>
            </div>
        </div>
    </div>
    <div class="flex justify-evenly">
        <div class="border-4 rounded-md border-black w-1/3 bg-white ml-4 mt-12 min-h-[8rem]">
            <div class="bg-gray-400 p-2">
                <p class="text-center">Search for a book</p>
            </div>
            <div class='max-w-md mx-auto'>
                <div class="relative flex items-center w-full h-12 rounded-lg focus-within:shadow-lg bg-white overflow-hidden">
                    <div class="grid place-items-center h-full w-12 text-gray-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                    <input
                        class="peer h-full w-full outline-none text-sm text-gray-700 pr-2"
                        type="text"
                        id="search"
                        placeholder="Search for a book..." /> 
                </div>
            </div>
        </div>
    </div>
@endsection
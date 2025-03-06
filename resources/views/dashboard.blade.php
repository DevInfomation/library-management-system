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
    </div>
@endsection
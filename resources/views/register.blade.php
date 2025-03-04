@extends('layout.default')
@section('content')
    <div class="border rounded-sm bg-gray-200 bg-opacity-90 min-h-[400px]">
        <div class="mx-[35rem] mt-12">
            <form action="/register" method="POST" class="flex flex-col">
                @csrf
                <h1 class="text-2xl text-center font-semibold">Register User</h1>
                <label class="mb-2">Email ID:</label>
                <input type="text" name="email" class="border rounded-md p-1.5 mb-2">
                <label class="mb-2">Password:</label>
                <input type="password" name="password" class="border rounded-md p-1.5 mb-2">
                <div class="flex mt-3">
                    <button class="mr-2 border rounded-md bg-[#037bf7] p-2 text-white">Register</button>
                    <button class="mr-2 border rounded-md bg-[#037bf7] p-2 text-white"><a href="{{route('home')}}">Cancel</a></button>
                </div>
            </form>
        </div>
    </div>
@endsection
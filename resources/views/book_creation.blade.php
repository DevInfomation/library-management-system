@extends('layout.default')
@section('content')
<div class="h-screen flex items-center">
    <form action="{{route('book_creation.submit')}}" method="POST" class="mx-auto w-1/3 border-4 rounded-md border-black bg-white p-4">
        <h1 class="text-center text-2xl mb-2">Here you can create your book</h1>
            @csrf
            <div class="flex flex-col">
                <label class="mb-1">Book title:</label>
                <input type="text" name="title" class="border rounded-md p-1.5 mb-2" placeholder="Enter book title...">
                <label class="mb-1">Book author:</label>
                <input type="text" name="title" class="border rounded-md p-1.5 mb-2" placeholder="Enter book title...">
                <label class="mb-1">Book genre:</label>
                <input type="text" name="title" class="border rounded-md p-1.5 mb-2" placeholder="Enter book title...">
                <label class="mb-1">Book category:</label>
                <input type="text" name="title" class="border rounded-md p-1.5 mb-2" placeholder="Enter book title...">
                <label class="mb-1">Book published year:</label>
                <input type="text" name="title" class="border rounded-md p-1.5 mb-2" placeholder="Enter book title...">
                <label class="mb-1">Book price:</label>
                <input type="text" name="title" class="border rounded-md p-1.5 mb-2" placeholder="Enter book title...">
                <label class="mb-1">Book copies:</label>
                <input type="text" name="title" class="border rounded-md p-1.5 mb-2" placeholder="Enter book title...">
                <button class="text-white border rounded-md bg-green-400 p-1 mt-4">Create Your Book</button>
            </div>
        </form>
    </div>
@endsection
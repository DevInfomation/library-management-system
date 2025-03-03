@extends('layout.default')
@section('content')
    
    <div class="border rounded-sm bg-gray-200 min-h-[400px]">
        <div class=" flex">
            <div class="w-1/3 ml-10">
                <h3 class="mt-2 text-xl font-semibold">Today's Quote</h3>
                <p class="font-semibold">"There is more treasure in books than in all<br>the pirate's loot on Treasure Island"</p>
                <p>~ Walt Disney</p>
                <br>
                <h3 class="text-xl font-semibold">Library Timing</h3>
                <ul class="ml-8 list-disc">
                    <li>Opening: 9:00</li>
                    <li>Closing: 23:59</li>
                </ul>
                <br>
                <h3 class="text-xl font-semibold">What We Provide</h3>
                <ul class="ml-8 list-disc">
                    <li>AC Rooms</li>
                    <li>Free Wi-fi</li>
                    <li>Learning Environment</li>
                    <li>Discussion Room</li>
                    <li>Free Electricity</li>
                </ul>
            </div>
            <form action="login" method="POST" class="flex flex-1">
                @csrf
                <div class="flex flex-col flex-1">
                    <h1 class="text-xl font-semibold text-center">User Login Form</h1>
                    <label class="text-left">Email ID:</label>
                    <input type="text" name="email">
                    <label class="text-left" >Password:</label>
                    <input type="password" name="password">
                    <div class="flex mt-2">
                        <button class="mr-2 border rounded-md bg-[#037bf7] p-2">Login</button>
                        <p class="mt-2"><a href="#">Sign up now!!!</a></p>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
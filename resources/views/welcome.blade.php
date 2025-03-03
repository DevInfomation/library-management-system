@extends('layout.default')
@section('content')
    
    <div class="border rounded-sm bg-gray-200 min-h-[400px]">
        <div class="flex justify-between">
            <div class="ml-10">
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
            <form action="login" method="POST">
                @csrf
                <div class="flex flex-col items-center">
                    <h1 class="text-xl font-semibold">User Login Form</h1>
                    <label class="text-left">Email ID:</label>
                    <input type="text" name="email" class="w-96">
                    <label class="text-left" >Password:</label>
                    <input type="password" name="password">
                </div>
            </form>
        </div>
    </div>

@endsection
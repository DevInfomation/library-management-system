@extends('layout.default')
@section('content')
    
    <div class="border rounded-sm bg-gray-200 min-h-[400px]">
        <div class="flex justify-between">
            <div class="">
                <h3>Today's Quote</h3>
                <p>"There is more treasure in books than in all<br>the pirate's loot on Treasure Island"</p>
                <p>~ Walt Disney</p>
                <br>
                <h3>Library Timing</h3>
                <ul>
                    <li>Opening: 9:00</li>
                    <li>Closing: 23:59</li>
                </ul>
                <br>
                <h3>What We Provide</h3>
                <ul>
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
                    <label>Email ID:</label>
                    <input type="text" name="email">
                    <label>Password:</label>
                    <input type="password" name="password">
                </div>
            </form>
        </div>
    </div>


@endsection
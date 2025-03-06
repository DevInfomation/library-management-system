<div class="border border-gray-400 bg-gray-500 overflow-visible p-6 flex justify-between">
    <div class="">
        <h2 class="text-white text-xl">Library Management System</h2>
    </div>
    @if (Auth::guest())
        <div class="flex">
            <h2 class="mr-2"><a href="#">Login</a></h2>
            <h2 class="mr-2"><a href="#">Admin login</a></h2>
            <h2><a href="{{route('register')}}">Register</a></h2>
        </div>
    @else
        <div class="flex">
            <h2 class="mr-2">{{$user->name}}</h2>
            <h2 class="mr-2">{{$user->email}}</h2>
            {{-- <h2></h2> --}}
        </div>    
    @endif
</div>
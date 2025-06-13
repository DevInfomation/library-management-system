<div class="border border-gray-400 bg-gray-500 overflow-visible p-6 flex justify-between">
    <div class="w-1/5">
        <a href="{{route('dashboard')}}"><h2 class="text-white text-xl">Library Management System</h2></a>
    </div>
    @if (Auth::guest())
        <div class="flex">
            <h2 class="mr-2"><a href="#">Login</a></h2>
            <h2 class="mr-2"><a href="#">Admin login</a></h2>
            <h2><a href="{{route('register')}}">Register</a></h2>
        </div>
    @else
        <div class="flex flex-1">
            <div class="flex flex-1 justify-evenly w-2/3">
                <h2 class="mr-2">Welcome: {{auth()->user()->name}}</h2>
                <h2 class="mr-2">Email: {{auth()->user()->email}}</h2>
            </div>    
            <div class="flex">
                <select name="My Profile" class="border-0 cursor-pointer drop-shadow-md w-[5.8rem] mr-2 bg-transparent">
                    <option value="view">My Profile</option>
                    <option value="edit">Edit Profile</option>
                    <option value="change">Change Profile</option>
                </select>
                <form action="{{route('logout')}}" method="POST">
                    @csrf
                    <button class="">Logout</button>
                </form>
            </div>
        </div>
    @endif
</div>
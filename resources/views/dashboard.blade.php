@extends('layout.default')
@section('content')
    <div>
        <div class="flex border-2 rounded-md border-black">
            <form action="{{route('logout')}}" method="POST" class="bg-white">
                @csrf
                <button class="text-white border bg-sky-400">Logout</button>
            </form>
        </div>
    </div>
@endsection
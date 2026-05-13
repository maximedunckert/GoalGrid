@extends('template.template')
@section('content')
    <div class="container">
        <div class="flex flex-row justify-center mb-8">
            <div>
                <h1 class="text-4xl text-white font-bold mb-4">Register</h1>
                <form action="/register" method="POST" class="flex flex-col gap-4 text-white">
                    @csrf
                    <input type="text" name="username" placeholder="Username" class="p-2 rounded">
                    <input type="text" name="email" placeholder="Email" class="p-2 rounded">
                    <input type="password" name="password" placeholder="Password" class="p-2 rounded">
                    <input type="password" name="password_confirmation" placeholder="Confirm Password" class="p-2 rounded">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Register
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
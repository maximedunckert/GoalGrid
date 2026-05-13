@extends('template.template')
@section('content')
<h1 class="text-4xl text-white font-bold mb-4">Login</h1>
<form action="/login" method="POST" class="text-white">
    @csrf
    <input type="text" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Password">
    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Login</button>
</form>
<h5 class="text-white">Don't have an account? <a href="/register" class="text-blue-500 hover:text-blue-700">Register here</a></h5>
@endsection
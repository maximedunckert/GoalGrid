@extends('template.template')
@section('content')
    <div class="container">
        <div class="flex flex-row justify-between mb-8">
            <div>
                <h1 class="text-4xl text-white font-bold mb-4">Ongoing games</h1>
                @foreach ($matches as $match)
                    @if ($match['home_team'] != '')
                        <div class="text-white w-full">
                        <div class="rounded-5 overflow-hidden shadow-lg p-5">
                        <div class="flex justify-between flex-row gap-4">
                            <div class="">
                                <span>{{ $match['home_team'] }}</span>
                                vs
                                <span>{{ $match['away_team'] }}</span>
                                <br>
                                <small>{{ $match['kickoff_utc'] }}</small>
                            </div>
                            <div class="">
                                @auth
                                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                        Place your bet.
                                    </button>
                                @endauth
                                @guest
                                    <a href="/login">
                                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                            Place your bet.
                                        </button>
                                    </a>
                                @endguest
                            </div>
                        </div>
                        </div>
                    </div>
                    @endif
                @endforeach
            </div>
            <div>
                <h1 class="text-4xl text-white font-bold mb-4">Scoreboard</h1>
            </div>
        </div>
    </div>
@endsection
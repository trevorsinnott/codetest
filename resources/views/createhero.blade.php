@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            <form action=" {{ route('createhero') }}" method="POST">
                @csrf
                <div>
                    <label for="superHeroName">Super Hero Name</label>
                    <input type="text" name="superHeroName" id="superHeroName" placeholder="Super Hero Name"
                        class="bg-gray-100 border-2 p-4 rounded-lg" value=" {{ old('superHeroName') }} ">
                    @error('superHeroName')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div>
                    <span>Which side are you on?</span>
                    <div class="flex items-center">
                        <input id="light" type="radio" name="side" checked />
                        <label for="light" class="flex items-center cursor-pointer">Light</label>
                    </div>
                    <div class="flex items-center">
                        <input id="dark" type="radio" name="side" />
                        <label for="dark" class="flex items-center cursor-pointer">Dark</label>
                    </div>
                </div>
                <div>
                    <label for="hitPoints">Hit Points</label>
                    <input type="number" name="hitPoints" id="hitPoints" class="bg-gray-100 border-2 p-4 rounded-lg" min="0"
                        max="100" value=" {{ old('hitPoints') }} ">
                </div>
                <div>
                    <label for="attack">Attack</label>
                    <input type="text" name="attack" id="attack" placeholder="Attack"
                        class="bg-gray-100 border-2 p-4 rounded-lg" value=" {{ old('attack') }} ">
                </div>
                <div>
                    <label for="specialAbility">Super Hero Name</label>
                    <input type="text" name="specialAbility" id="specialAbility" placeholder="Super Hero Name"
                        class="bg-gray-100 border-2 p-4 rounded-lg" value=" {{ old('specialAbility') }} ">
                </div>
                <div>
                    <button type="submit" class="bg-blue-500 text-white rounded-lg p-2">Create My Hero!</button>
                </div>
            </form>
        </div>
    </div>
@endsection

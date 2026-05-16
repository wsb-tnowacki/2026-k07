@extends('layout.layout')
@section('tytul','K07 - Dodanie posta')
@section('podtytul','Formularz dodania posta')
@section('tresc')
<div class="w-full text-red-400">
     @if ($errors->any())
    <div class="mb-2">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}} </li>
            @endforeach
        </ul>
    </div>
    @endif
</div>
    <form action="{{ route('post.store') }}" method="POST" class="bg-white shadow-md rounded-lg px-8 pt-6 pb-8 max00 font-bold mb-2 ">
    @csrf
        <div class="mb-2">
            <label for="tytul" class="block text-gray-700 font-bold mb-2">Tytuł</label>
            <input type="text" name="tytul" id="tytul" placeholder="Podaj tytuł postu" value="@if(old('tytul')){{old('tytul')}}@endif" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        @if ($errors->has('tytul'))
        <div class="mb-2 text-red-400">
            <ul>
                @foreach ($errors->get('tytul') as $error)
                    <li>{{$error}} </li>
                @endforeach
            </ul>
        </div>
        @endif
        </div>
        <div class="mb-2"><label for="autor" class="block text-gray-700 font-bold mb-2">Autor</label>
    <input type="text" name="autor" id="autor" placeholder="Podaj autora postu" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="@if(old('autor')){{old('autor')}}@endif">
    @error('autor')
        <div class="font-bold text-red-400">{{$message}}</div>
    @enderror
        </div>
        <div class="mb-2"><label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
            <input type="text" name="email" id="email" placeholder="Podaj email autora postu" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="@if(old('email')){{old('email')}}@endif">
@error('email')
        <div class="font-bold text-red-400">{{$message}}</div>
    @enderror
        </div>
        <div class="mb-2">
            <label for="tresc" class="block text-gray-700 font-bold mb-2">Treść</label>
            <textarea name="tresc" id="tresc" rows="4" placeholder="Wpisz treść posta" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">@if(old('tresc')){{old('tresc')}}@endif</textarea>
@error('tresc')
        <div class="font-bold text-red-400">{{$message}}</div>
    @enderror
        </div>
        <div class="flex items-center justify-between">
            <button type="submit" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline">Dodaj post</button>
        </div>
    </form>
</div>

@endsection

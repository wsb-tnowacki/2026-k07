@extends('layout.layout')
@section('tytul','K07 - Szczegóły posta')
@section('podtytul','Szczegóły posta')
@section('tresc')
<div class="w-full ">
@isset($post)
<div class="mb-2">
<label for="tytul" class="block text-gray-700 font-bold mb-2">Tytuł</label>
    <input type="text" name="tytul" id="tytul" value="{{$post->tytul}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" disabled>
</div>

<div class="mb-2">
    <label for="autor" class="block text-gray-700 font-bold mb-2">Autor</label>
    <input type="text" name="autor" id="autor" value="{{$post->autor}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" disabled>
</div>
<div class="mb-2">
    <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
    <input type="text" name="email" id="email" value="{{$post->email}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" disabled>
</div>
<div class="mb-2">
    <label for="tresc" class="block text-gray-700 font-bold mb-2">Treść</label>
    <textarea name="tresc" id="tresc" rows="4" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" disabled>{{$post->tresc}}</textarea>
</div>
<div class="mb-2 text-right">
    <div><b>Czas utworzenia:</b> {{ $post->created_at->locale('pl')->setTimezone('Europe/Warsaw')->translatedFormat('j F Y H:i:s')}}</div>
    <div><b>Czas edycji:</b> {{ $post->updated_at->locale('pl')->setTimezone('Europe/Warsaw')->translatedFormat('j F Y H:i:s')}}</div>
</div>
<div class="flex items-center justify-between">
    <a href="{{route('post.index')}}">
        <button type="button" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline">Powrót do listy</button>
    </a>
</div>
@endisset


</div>

@endsection

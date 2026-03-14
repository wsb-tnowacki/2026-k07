@extends('layout.layout')
@section('tytul','K07 - O nas')
@section('podtytul','Strona informacyjna')
@section('tresc')
    <div>Treść strony o nas</div>
    <blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt accusantium quae maiores repudiandae quasi animi fugit officiis quibusdam corporis sunt? Minus autem fugit assumenda, provident vitae placeat voluptate rem mollitia.</blockquote>
  {{-- @dump($zadania) --}}
  <ol>
    @foreach ($zadania as $zadanie)
        <li>{{$zadanie}}</li>
    @endforeach 
  </ol>
  
@endsection
@extends('master')

@section('content')
  @foreach($books as $book)
    <div class="book">
       <strong> {{$book->title}} </strong> - {{$book->author}} - {{$book->booktype->name}}
    </div>
  @endforeach

 @stop


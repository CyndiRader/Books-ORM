@extends('master')

@section('content')
  @foreach($books as $book)
    <div class="book">
       <strong> {{$book->title}} </strong> - {{$book->author}} - {{$book->booktype->name}}
    </div>
  @endforeach
  <p></p>
  <p>There are currently {{count($books)}} books on my bookshelf. </p>
  <p>Now for some Eloquent ORM practice</p>
  <ul>
   <li><a href="{{URL::to('books')}}">Show all books</a></li>
   <li><a href="{{URL::to('books/booktype/non-fiction')}}">Show only non-fiction</a></li>
   <li><a href="{{URL::to('books/ordered')}}">Order by author</a></li>
   </ul>
  
 @stop


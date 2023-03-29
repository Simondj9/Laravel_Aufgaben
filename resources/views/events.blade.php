<style>
nav {
  background-color: #333;
  overflow: hidden;
}

nav a {
  float: left;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

nav a:hover {
  background-color: #ddd;
  color: black;
}

.active {
  background-color: #4CAF50;
}   
</style>

<body>
    @extends('layouts.master')
    @section('title', 'Events')
    @section('content')

    <br>
    <p>Events:</p>
    <ul>
        @foreach($events as $event)

        <li><a href="/event/{{$event->id}}">{{ $event -> title }}</a> </li>

        @endforeach

    </ul>
    @endsection
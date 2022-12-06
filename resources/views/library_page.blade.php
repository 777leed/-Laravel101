@extends('layouts.layout')
@section('content')

    <div class="Container">
        <div class="courseContainer">
            Your Course list
            
            @foreach($courses as $course)
            <div class="courseElement">
            {{ $course->name }}
            </div>
            @endforeach
            
        </div>
    </div>
       
@endsection  


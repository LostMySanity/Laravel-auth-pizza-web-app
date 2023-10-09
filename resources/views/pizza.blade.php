@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
<div class="content">
    <!-- <div class="title m-b-md"> -->
        Pizza List
    <!-- </div> -->
        <p>{{$name}}</p>
        <p>{{$age}}</p>
    <!-- @for($i=0; $i < count($pizza); $i++)
  
    <p>the value is {{ $pizza[$i]['type']}}-{{ $pizza[$i]['name']}}</p>
    @endfor -->
     @foreach($pizza as $pizzas)
    <p>{{$loop->index}} - {{$pizzas['type']}} - {{$pizzas['name']}}
        @if($loop->first)
        <span>-first in the loop</span>
        @endif
        @if($loop->last)
        <span>-last in the loop</span>
        @endif
    </p>
    @endforeach
</div>
</div>
    <!-- <p>Pizzaa!!!</p> -->
@endsection

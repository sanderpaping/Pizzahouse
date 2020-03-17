@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Pizza List
        </div>

        @foreach($pizzas as $pizza)
          <div>
            <a href="/pizzas/{{ $pizza->id }}">{{ $pizza->name }} {{ $pizza->type }} {{ $pizza->base}}</a>
          </div>
        @endforeach

    </div>
</div>
@endsection
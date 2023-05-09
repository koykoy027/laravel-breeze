@extends('layouts.app')
@section('content')
@section('title', 'Dashboard')

<div class="card bg-white first:grid lg:grid-cols-4 sm:grid-cols-1 md:grid-cols-2 gap-4">
    <div class="card bg-blue-500">
        <h1 class="text-white">First card</h1>
    </div>
    <div class="card bg-blue-500">
        <h1 class="text-white">Second card</h1>
    </div>
    <div class="card bg-blue-500">
        <h1 class="text-white">Third card</h1>
    </div>
    <div class="card bg-blue-500">
        <h1 class="text-white">Fourth card</h1>
    </div>
</div>

<div class="card bg-white">
    <button class="btn btn-primary">primary</button>
<button class="btn btn-secondary">secondary</button>
<button class="btn btn-danger">danger</button>
</div>


@endsection

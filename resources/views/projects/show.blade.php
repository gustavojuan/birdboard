@extends('layouts.app')
@section('content')
    <h1 class="text-xl font-bold text-start text-gray-800 lg:mt-5">{{ $project->title }}</h1>
    <p>{{ $project->description }}</p>

    <a href="/projects">Go back</a>
@endsection

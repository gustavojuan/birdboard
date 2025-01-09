@extends('layouts.app')
@section('content')
    <div class=" px-4 my-5">
        <!-- Heading -->
        <div class="flex items-center justify-between border-b py-10 pb-2 mb-4">
            <h1 class="text-2xl font-bold text-gray-800">
                Birdboard
            </h1>
            <a href="/projects/create" class="text-blue-600 hover:text-blue-800 hover:underline">
                Create New Project
            </a>
        </div>

        <!-- Projects List -->
        <ul class="space-y-2">
            @forelse ($projects as $project)
                <li>
                    <a href="{{ $project->path() }}" class="text-blue-600 hover:underline hover:text-blue-800">
                        {{ $project->title }}
                    </a>
                </li>
            @empty
                <li class="text-gray-500">
                    No projects found
                </li>
            @endforelse
        </ul>
    </div>
@endsection

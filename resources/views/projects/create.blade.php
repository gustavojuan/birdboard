@extends('layouts.app')
@section('content')
    <form method="POST" action="/projects" class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md">
        @csrf
        <h1 class="text-2xl font-bold text-gray-800 mb-6 text-center">Create a Project</h1>

        <!-- Title Field -->
        <div class="mb-4">
            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
            <div class="mt-1">
                <input type="text" name="title" id="title" placeholder="Enter project title"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
            </div>
        </div>

        <!-- Description Field -->
        <div class="mb-4">
            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
            <div class="mt-1">
                <textarea name="description" id="description" rows="4" placeholder="Enter project description"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"></textarea>
            </div>
        </div>

        <!-- Buttons -->
        <div class="flex justify-between space-x-4">
            <button type="submit"
                class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                Create Project
            </button>
            <a href="/projects"
                class="w-full bg-gray-300 text-gray-700 py-2 px-4 rounded-md hover:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-offset-2 text-center">
                Cancel
            </a>
        </div>
    </form>
@endsection

@extends('layouts.app')

@section('title', 'Portfolio')

@section('content')

    <!-- Skills Section -->
    <div class="bg-white rounded-xl shadow-md p-6 max-w-4xl mb-6">
        <h2 class="text-2xl font-bold text-gray-800 mb-4 text-center">Skills & Technologies</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <div class="text-center p-3 bg-blue-50 rounded-lg">
                <div class="text-2xl mb-2">🌐</div>
                <h3 class="font-semibold">Frontend</h3>
                <p class="text-sm text-gray-600">React, Vue, JavaScript</p>
            </div>
            <div class="text-center p-3 bg-green-50 rounded-lg">
                <div class="text-2xl mb-2">⚙️</div>
                <h3 class="font-semibold">Backend</h3>
                <p class="text-sm text-gray-600">Laravel, Node.js, PHP</p>
            </div>
            <div class="text-center p-3 bg-purple-50 rounded-lg">
                <div class="text-2xl mb-2">🗄️</div>
                <h3 class="font-semibold">Database</h3>
                <p class="text-sm text-gray-600">MySQL, PostgreSQL</p>
            </div>
            <div class="text-center p-3 bg-yellow-50 rounded-lg">
                <div class="text-2xl mb-2">☁️</div>
                <h3 class="font-semibold">Cloud</h3>
                <p class="text-sm text-gray-600">AWS, Docker, Git</p>
            </div>
        </div>
    </div>

    <!-- Projects Section -->
    <div class="max-w-6xl">
        <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Featured Projects</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 p-6">
            @forelse ($projects as $project)
                <div class="bg-white shadow-md rounded-xl overflow-hidden hover:scale-105 transition-transform duration-200">
                    @if($project->image)
                        <img src="{{ asset('images/' . $project->image) }}"
                             alt="{{ $project->name }}"
                             class="w-full h-48 object-cover">
                    @else
                        <div class="w-full h-48 bg-gradient-to-br from-blue-400 to-purple-500 flex items-center justify-center">
                            <div class="text-white text-4xl">🚀</div>
                        </div>
                    @endif
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">{{ $project->name }}</h3>
                        <p class="text-gray-600 text-sm mb-3">{{ $project->description }}</p>
                        @if($project->technologies)
                            <div class="flex flex-wrap gap-2 mb-3">
                                @foreach($project->technologies as $tech)
                                    <span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs rounded-full">{{ $tech }}</span>
                                @endforeach
                            </div>
                        @endif
                        <div class="flex gap-2">
                            @if($project->demo_url)
                                <a href="{{ $project->demo_url }}" target="_blank" class="px-3 py-1 bg-blue-500 text-white text-sm rounded hover:bg-blue-600 transition">Demo</a>
                            @endif
                            @if($project->github_url)
                                <a href="{{ $project->github_url }}" target="_blank" class="px-3 py-1 bg-gray-500 text-white text-sm rounded hover:bg-gray-600 transition">Code</a>
                            @endif
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-full text-center py-8">
                    <p class="text-gray-500">No featured projects available.</p>
                </div>
            @endforelse
        </div>
    </div>
@endsection
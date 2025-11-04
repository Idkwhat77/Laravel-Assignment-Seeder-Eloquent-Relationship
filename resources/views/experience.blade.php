@extends('layouts.app')

@section('title', 'Experiences')

@section('content')
    <div class="bg-white rounded-xl shadow-md p-6 max-w-4xl mb-6">
        <h2 class="text-2xl font-bold text-gray-800 mb-4 text-center">Professional Experience</h2>
        <div class="space-y-4">
            @foreach($experiences as $experience)
                <div class="border-l-4 border-blue-500 pl-4">
                    <div class="flex justify-between items-start mb-2">
                        <div>
                            <h3 class="font-semibold text-lg">{{ $experience->position }}</h3>
                            <p class="text-blue-600 font-medium">{{ $experience->company }}</p>
                            @if($experience->location)
                                <p class="text-gray-500 text-sm">{{ $experience->location }}</p>
                            @endif
                        </div>
                        <div class="text-right text-sm text-gray-500">
                            {{ $experience->start_date->format('M Y') }} - 
                            {{ $experience->is_current ? 'Present' : $experience->end_date->format('M Y') }}
                        </div>
                    </div>
                    <p class="text-gray-700 mb-2">{{ $experience->description }}</p>
                    @if($experience->technologies)
                        <div class="flex flex-wrap gap-2">
                            @foreach($experience->technologies as $tech)
                                <span class="px-2 py-1 bg-gray-100 text-gray-700 text-xs rounded-full">{{ $tech }}</span>
                            @endforeach
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
@endsection

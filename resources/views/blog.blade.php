@extends('layouts.app')

@section('title', 'Blog')

@section('content')
    <div class="max-w-4xl">
        <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Latest Blog Posts</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 p-6">
            @forelse($blogs as $blog)
                <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-lg transition-shadow">
                    @if($blog->image)
                        <img src="{{ asset('images/blog/' . $blog->image) }}" alt="{{ $blog->title }}" class="w-full h-40 object-cover rounded-lg mb-4">
                    @endif
                    
                    @if($blog->blogCategory)
                        <div class="mb-3">
                            <span class="inline-block px-3 py-1 text-xs font-medium rounded-full" 
                                  style="background-color: {{ $blog->blogCategory->color ?? '#e5e7eb' }}; color: {{ $blog->blogCategory->color ? '#ffffff' : '#374151' }}">
                                {{ $blog->blogCategory->name }}
                            </span>
                        </div>
                    @endif
                    
                    <h2 class="text-lg font-semibold text-gray-800 mb-2">{{ $blog->title }}</h2>
                    <p class="text-gray-700 mb-3">{{ $blog->excerpt ?: Str::limit(strip_tags($blog->content), 150) }}</p>
                    <div class="flex justify-between items-center">
                        <span class="text-xs text-gray-400">{{ $blog->published_at->format('M d, Y') }}</span>
                        <a href="{{ route('blog.show', $blog) }}" class="px-3 py-1 bg-blue-500 text-white text-sm rounded hover:bg-blue-600 transition">Read More</a>
                    </div>
                </div>
            @empty
                <div class="col-span-full text-center py-8">
                    <p class="text-gray-500">No blog posts available.</p>
                </div>
            @endforelse
        </div>
    </div>
@endsection
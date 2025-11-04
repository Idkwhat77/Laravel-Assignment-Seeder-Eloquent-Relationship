@extends('layouts.app')

@section('title', 'Loading')

@section('content')
    <div
        class="inline-block h-8 w-8 animate-spin rounded-full border-4 border-solid border-current border-e-transparent text-black"
        role="status">
        <span class="sr-only">Loading...</span>
    </div>

    <script>
        // Wait 3 seconds then redirect to home route
        setTimeout(() => {
            window.location.href = "{{ route('home') }}";
        }, 3000);
    </script>
@endsection

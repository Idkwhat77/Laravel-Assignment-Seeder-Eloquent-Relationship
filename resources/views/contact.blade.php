@extends('layouts.app')

@section('title', 'Contacts')

@section('content')
    <p class="text-center text-black font-bold">Check my contacts : </p>
    <div class="flex flex-row gap-6">
        <a href="https://wa.me/1234567890" class="flex items-center gap-2 px-4 py-2 bg-white rounded-xl shadow hover:bg-green-100 transition">
            <!-- WhatsApp Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-6 h-6 text-green-500">
                <path d="M12 2C6.477 2 2 6.477 2 12c0 1.85.504 3.583 1.382 5.07L2 22l5.13-1.36A9.96 9.96 0 0 0 12 22c5.523 0 10-4.477 10-10S17.523 2 12 2zm0 18c-1.61 0-3.13-.488-4.39-1.32l-.31-.2-3.04.81.81-2.97-.2-.32A7.96 7.96 0 0 1 4 12c0-4.418 3.582-8 8-8s8 3.582 8 8-3.582 8-8 8zm4.13-5.47c-.22-.11-1.3-.64-1.5-.71-.2-.07-.34-.11-.48.11-.14.22-.55.71-.67.86-.12.15-.25.16-.47.05-.22-.11-.93-.34-1.77-1.07-.65-.58-1.09-1.29-1.22-1.51-.13-.22-.01-.34.1-.45.1-.1.22-.26.33-.39.11-.13.15-.22.22-.37.07-.15.04-.28-.02-.39-.06-.11-.48-1.16-.66-1.59-.17-.41-.34-.35-.47-.36-.12-.01-.26-.01-.41-.01-.15 0-.39.06-.6.28-.21.22-.8.78-.8 1.9s.82 2.21.93 2.37c.11.15 1.62 2.48 3.93 3.38.55.19.98.31 1.31.39.55.14 1.05.12 1.44.07.44-.07 1.3-.53 1.48-1.04.18-.51.18-.95.13-1.04-.05-.09-.2-.14-.41-.25z"/>
            </svg>
            WhatsApp
        </a>
        <a href="https://instagram.com/yourprofile" class="flex items-center gap-2 px-4 py-2 bg-white rounded-xl shadow hover:bg-pink-100 transition">
            <!-- Instagram Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-6 h-6 text-pink-500">
                <path d="M7.75 2h8.5A5.75 5.75 0 0 1 22 7.75v8.5A5.75 5.75 0 0 1 16.25 22h-8.5A5.75 5.75 0 0 1 2 16.25v-8.5A5.75 5.75 0 0 1 7.75 2zm0 1.5A4.25 4.25 0 0 0 3.5 7.75v8.5A4.25 4.25 0 0 0 7.75 20.5h8.5A4.25 4.25 0 0 0 20.5 16.25v-8.5A4.25 4.25 0 0 0 16.25 3.5h-8.5zm4.25 3.25a5.25 5.25 0 1 1 0 10.5 5.25 5.25 0 0 1 0-10.5zm0 1.5a3.75 3.75 0 1 0 0 7.5 3.75 3.75 0 0 0 0-7.5zm5.25.75a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
            </svg>
            Instagram
        </a>
        <a href="https://twitter.com/yourprofile" class="flex items-center gap-2 px-4 py-2 bg-white rounded-xl shadow hover:bg-blue-200 transition">
            <!-- Twitter Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-6 h-6 text-blue-400">
                <path d="M22.46 6c-.77.35-1.6.59-2.47.7a4.3 4.3 0 0 0 1.88-2.37 8.59 8.59 0 0 1-2.72 1.04 4.28 4.28 0 0 0-7.29 3.9A12.13 12.13 0 0 1 3.15 4.67a4.28 4.28 0 0 0 1.32 5.71c-.7-.02-1.36-.21-1.94-.53v.05a4.28 4.28 0 0 0 3.43 4.19c-.33.09-.68.14-1.04.14-.25 0-.5-.02-.74-.07a4.29 4.29 0 0 0 4 2.98A8.6 8.6 0 0 1 2 19.54a12.13 12.13 0 0 0 6.56 1.92c7.88 0 12.2-6.53 12.2-12.2 0-.19-.01-.37-.02-.56A8.72 8.72 0 0 0 24 4.59a8.48 8.48 0 0 1-2.54.7z"/>
            </svg>
            Twitter
        </a>
    </div>
@endsection
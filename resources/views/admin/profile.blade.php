@extends('layouts.app')

@section('content')
<div class="bg-gray-100 min-h-screen p-6 flex flex-col items-center">
    {{-- Card Profil --}}
    <div class="bg-white rounded-2xl shadow-lg w-full md:w-1/2 lg:w-1/3 p-6 text-center">
        {{-- Foto Profil --}}
        <div class="relative inline-block">
            <img src="/images/admin-avatar.png" 
                 alt="Admin Avatar" 
                 class="w-24 h-24 rounded-full mx-auto shadow-md object-cover">
            <span class="absolute bottom-2 right-2 w-4 h-4 bg-green-500 border-2 border-white rounded-full"></span>
        </div>

        <h1 class="text-xl font-bold mt-4 text-gray-800">{{ $admin->nama_admin ?? 'Nama Admin' }}</h1>
        <p class="text-gray-500">{{ $admin->role ?? 'Admin' }}</p>

        <div class="mt-6 text-left space-y-3">
            <div class="flex justify-between items-center border-b pb-2">
                <span class="font-medium text-gray-700">Username</span>
                <span class="text-gray-600">{{ $admin->username ?? '-' }}</span>
            </div>
            <div class="flex justify-between items-center border-b pb-2">
                <span class="font-medium text-gray-700">Role</span>
                <span class="text-gray-600">{{ $admin->role ?? '-' }}</span>
            </div>
        </div>

        {{-- Tombol Logout --}}
        <div class="mt-8">
            <a href="{{ route('admin.logout') }}" 
               class="inline-block bg-red-500 text-white px-6 py-2 rounded-full shadow hover:bg-red-600 transition">
               Logout
            </a>
        </div>
    </div>

    {{-- Bottom Navbar mirip menu --}}
    <div class="fixed bottom-5 left-0 right-0 flex justify-center">
        <div class="bg-red-500 rounded-full flex items-center px-6 py-3 space-x-8 shadow-lg">
            <a href="{{ route('admin.home.menu') }}">
                <img src="/icons/home.svg" class="w-6">
            </a>
            <a href="{{ route('admin.profile') }}">
                <img src="/icons/user.svg" class="w-6">
            </a>
        </div>
    </div>
</div>
@endsection

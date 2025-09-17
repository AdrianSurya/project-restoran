@extends('layouts.app')

@section('content')
<div class="bg-gray-100 min-h-screen p-6">
  {{-- Filter --}}
  <div class="flex items-center gap-4 mb-6">
    <input type="text" placeholder="Search" class="rounded-lg px-3 py-1 shadow flex-1">
  </div>

  {{-- Menu List --}}
  <div class="flex gap-4">
    @foreach($menus as $menu)
    <div class="bg-white rounded-lg shadow w-32 text-center relative">
      <img src="{{ asset('storage/'.$menu->gambar) }}" class="rounded-t-lg w-full h-24 object-cover">
      <p class="py-2 font-semibold text-sm">{{ $menu->nama_menu }}</p>
      <p class="py-2 font-semibold text-sm">{{ $menu->harga }}</p>
      {{-- <a href="{{ route('admin.menu.edit', $menu->Id_menu) }}" 
      class="text-xs bg-blue-500 text-white px-2 py-1 rounded absolute bottom-1 left-1">
      Edit</a> --}}
    </div>
    @endforeach

    {{-- Add Menu --}}
    <a href="{{ route('admin.menu.create') }}" class="bg-white rounded-lg shadow w-32 h-32 flex flex-col items-center justify-center text-red-500">
      <span class="text-4xl">+</span>
      <p class="text-sm mt-1">ADD MENU</p>
    </a>
  </div>

  {{-- Bottom Navbar --}}
  <div class="fixed bottom-5 left-0 right-0 flex justify-center">
    <div class="bg-red-500 rounded-full flex items-center px-4 py-2 space-x-6 shadow-lg">
      {{-- <a href="{{ route('admin.home') }}"><img src="/icons/home.svg" class="w-6"></a> --}}
      <a href="#"><img src="/icons/order.svg" class="w-6"></a>
      <a href="{{ route("admin.profile") }}"><img src="/icons/more.svg" class="w-6"></a>
    </div>
  </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="bg-gray-100 min-h-screen flex justify-center items-center">
  <div class="bg-white p-6 rounded-lg shadow w-full max-w-lg">
    <h2 class="text-xl font-bold mb-4">Edit Menu</h2>
    <form action="{{ route('admin.menu.update',$menu->id_menu) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')

      <div class="mb-4">
        <label class="block font-semibold">Nama Menu</label>
        <input type="text" name="nama_menu" value="{{ $menu->nama_menu }}" class="w-full border rounded px-3 py-2" required>
      </div>

      <div class="mb-4">
        <label class="block font-semibold">Harga</label>
        <input type="number" name="harga" value="{{ $menu->harga }}" class="w-full border rounded px-3 py-2" required>
      </div>

      <div class="mb-4">
        <label class="block font-semibold">Gambar</label>
        <input type="file" name="gambar" class="w-full border rounded px-3 py-2">
        @if($menu->gambar)
            <img src="{{ asset('storage/'.$menu->gambar) }}" class="w-20 mt-2">
        @endif
      </div>

      <div class="flex justify-end">
        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Update</button>
      </div>
    </form>
  </div>
</div>
@endsection

@extends('layouts.app')
@section('content')
<div class="bg-gray-100 min-h-screen flex justify-center items-center">
  <div class="bg-white p-6 rounded-lg shadow w-full max-w-lg">
    <h2 class="text-xl font-bold mb-4">Edit Menu</h2>
    <form action="{{ route('admin.menu.update',$menu->id) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')

      <div class="mb-4">
        <label class="block font-semibold">Nama Menu</label>
        <input type="text" name="name" value="{{ $menu->name }}" class="w-full border rounded px-3 py-2" required>
      </div>

      <div class="mb-4">
        <label class="block font-semibold">Jenis</label>
        <select name="type" class="w-full border rounded px-3 py-2" required>
          <option value="Food" @selected($menu->type=='Food')>Food</option>
          <option value="Drink" @selected($menu->type=='Drink')>Drink</option>
        </select>
      </div>

      <div class="mb-4">
        <label class="block font-semibold">Harga</label>
        <input type="number" name="price" value="{{ $menu->price }}" class="w-full border rounded px-3 py-2" required>
      </div>

      <div class="mb-4">
        <label class="block font-semibold">Deskripsi</label>
        <textarea name="description" class="w-full border rounded px-3 py-2">{{ $menu->description }}</textarea>
      </div>

      <div class="mb-4">
        <label class="block font-semibold">Foto</label>
        <input type="file" name="photo" class="w-full border rounded px-3 py-2">
        <img src="{{ asset('storage/'.$menu->photo) }}" class="w-24 mt-2 rounded">
      </div>

      <div class="flex justify-end">
        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Update</button>
      </div>
    </form>
  </div>
</div>
@endsection

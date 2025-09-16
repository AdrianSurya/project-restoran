@extends('layouts.app')
@section('content')
<div class="bg-gray-100 min-h-screen flex justify-center items-center">
  <div class="bg-white p-6 rounded-lg shadow w-full max-w-lg">
    <h2 class="text-xl font-bold mb-4">Tambah Menu</h2>
    <form action="{{ route('admin.menu.store') }}" method="POST" enctype="multipart/form-data">
      @csrf

      <div class="mb-4">
        <label class="block font-semibold">Nama Menu</label>
        <input type="text" name="name" class="w-full border rounded px-3 py-2" required>
      </div>

      <div class="mb-4">
        <label class="block font-semibold">Jenis</label>
        <select name="type" class="w-full border rounded px-3 py-2" required>
          <option value="Food">Food</option>
          <option value="Drink">Drink</option>
        </select>
      </div>

      <div class="mb-4">
        <label class="block font-semibold">Harga</label>
        <input type="number" name="price" class="w-full border rounded px-3 py-2" required>
      </div>

      <div class="mb-4">
        <label class="block font-semibold">Deskripsi</label>
        <textarea name="description" class="w-full border rounded px-3 py-2"></textarea>
      </div>

      <div class="mb-4">
        <label class="block font-semibold">Foto</label>
        <input type="file" name="gambar" class="w-full border rounded px-3 py-2" required>
      </div>

      <div class="flex justify-end">
        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Simpan</button>
      </div>
    </form>
  </div>
</div>
@endsection

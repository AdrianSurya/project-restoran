<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menu Admin</title>
  <style>
    body {
      background: url('/images/bg.jpg') no-repeat center center fixed;
      background-size: cover;
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    .content {
      background: #f1f1f1;
      border-radius: 25px 25px 0 0;
      padding: 30px;
      margin: 40px;
    }

    .filter-bar {
      display: flex;
      justify-content: flex-end;
      align-items: center;
      gap: 10px;
      margin-bottom: 20px;
    }

    .filter-bar button {
      border: none;
      padding: 10px 15px;
      border-radius: 20px;
      cursor: pointer;
      background-color: #fff;
      color: #000;
    }

    .filter-bar button.active {
      background-color: #d32f2f;
      color: #fff;
    }

    .filter-bar input {
      border: none;
      padding: 10px 15px;
      border-radius: 20px;
      width: 200px;
      box-shadow: 0 2px 3px rgba(0, 0, 0, 0.1);
    }

    .menu-grid {
      display: flex;
      gap: 20px;
      flex-wrap: wrap;
    }

    .menu-card {
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      width: 150px;
      overflow: hidden;
      text-align: center;
    }

    .menu-card img {
      width: 100%;
      height: 120px;
      object-fit: cover;
    }

    .menu-card .title {
      padding: 10px;
      font-weight: bold;
    }

    .menu-card .actions {
      display: flex;
      justify-content: space-around;
      padding-bottom: 10px;
    }

    .add-menu {
      display: flex;
      align-items: center;
      justify-content: center;
      background-color: #fff;
      border-radius: 10px;
      width: 150px;
      height: 150px;
      font-size: 30px;
      color: #d32f2f;
      cursor: pointer;
      text-decoration: none;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .bottom-nav {
      position: fixed;
      bottom: 20px;
      left: 50%;
      transform: translateX(-50%);
      background-color: #d32f2f;
      padding: 10px 30px;
      border-radius: 30px;
      display: flex;
      gap: 30px;
    }

    .bottom-nav a {
      color: #fff;
      text-decoration: none;
      font-size: 18px;
    }
  </style>
</head>
<body>
  <div class="content">
    <div class="filter-bar">
      <button class="active">All</button>
      <button>Foods</button>
      <button>Drinks</button>
      <input type="text" placeholder="Search">
    </div>

    <div class="menu-grid">
      @foreach ($menus as $menu)
      <div class="menu-card">
        <img src="{{ asset('storage/'.$menu->gambar) }}" alt="{{ $menu->nama_menu }}">
        <div class="title">{{ $menu->nama_menu }}</div>
        <div class="actions">
          <a href="#">✏️</a>
          <form action="#" method="POST" onsubmit="return confirm('Hapus menu ini?')">
            @csrf
            @method('DELETE')
            <button type="submit" style="background:none;border:none;color:red;">🗑️</button>
          </form>
        </div>
      </div>
      @endforeach

      <a href="#" class="add-menu">+</a>
    </div>
  </div>

  <div class="bottom-nav">
    <a href="#">🏠</a>
    <a href="#">👤</a>
    <a href="#">⚙️</a>
  </div>
</body>
</html>

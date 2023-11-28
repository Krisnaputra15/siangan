<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex flex-row">
    <nav class="w-[18%] bg-sky-950 h-screen sticky top-0">
        <div class="header flex items-center justify-center">
            <p class="text-center text-white text-2xl font-semibold py-8 w-[85%] border-b-2 border-white">SIANGAN FILKOM</p>
        </div>
        <div class="menu">
            <ul class="py-8 ps-6">
                <li class="py-2 text-white font-light"><a href="" class="active"><i class="fa-solid fa-plus text-white mr-3"></i>Tambah Peminjaman</a></li>
                <li class="py-2 text-white font-light"><a href=""><i class="fa-solid fa-clock-rotate-left mr-3"></i>Riwayat Peminjaman</a></li>
                <li class="py-2 text-white font-light"><a href=""><i class="fa-regular fa-envelope mr-3"></i>Pesan Masuk</a></li>
                <li class="py-2 text-white font-light"><a href="" class="text-[#FFD5CA]"><i class="fa-solid fa-arrow-right-from-bracket mr-3"></i>Keluar</a></li>
            </ul>
        </div>
    </nav>
    <div class="w-[82%] bg-white py-8 px-10 flex flex-col gap-10">
        @yield('content')
    </div>
    <script src="https://kit.fontawesome.com/0cf4c39c1c.js" crossorigin="anonymous"></script>
</body>
</html>
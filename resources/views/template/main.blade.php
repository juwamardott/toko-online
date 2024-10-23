<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>@yield('title')</title>
     @vite('resources/css/app.css')
</head>
<body>
     {{-- navbar --}}
     <div  class="w-full h-20 bg-black fixed top-0 flex justify-around gap-4 py-2">
          <div class="w-[20%] flex items-center justify-center">
               <h1 class="text-xl text-white font-bold italic">TOKO MARDOOD</h1>
          </div>
          <div class="w-[50%] flex justify-around items-center p-2 text-white italic">
               <a href="/home" class="hover:text-black">Home</a>
               <a href="/product" class="hover:text-black">Product</a>
               <a href="/about" class="hover:text-black">Tentang Kami</a>
          </div>
          <div class="w-[20%]"></div>
     </div>
     {{-- end navbar --}}
     {{-- Main Content --}}
     <div class="h-[1200px] pt-20">
          @yield('main')
     </div>
     {{-- End Main Content --}}
     {{-- Footer --}}
     <div class="w-full h-14 bg-black fixed bottom-0"></div>
     {{-- End Footer --}}
</body>
</html>
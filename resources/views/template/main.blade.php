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
     <div  class="w-full h-20 bg-purple-600 fixed top-0 flex justify-around gap-4 py-2">
          <div class="w-[20%] border flex items-center justify-center">
               <h1 class="text-xl text-white font-bold italic">TOKO MARDOOD</h1>
          </div>
          <div class="w-[50%] border"></div>
          <div class="w-[20%] border"></div>
     </div>
     {{-- end navbar --}}
     {{-- Main Content --}}
     <div class="h-svh pt-20">
          @yield('main')
     </div>
     {{-- End Main Content --}}
     {{-- Footer --}}
     <div class="w-full h-14 bg-purple-600 fixed bottom-0"></div>
     {{-- End Footer --}}
</body>
</html>
@extends('template.main')
@section('title')
Home
@endsection
{{-- @dd($product) --}}
@section('main')
<div class="grid grid-cols-3 w-full  border p-2 gap-4">
     @foreach ($product as $p)
     <div class="text-center border p-2">
          <h1>{{ $p->nama_product }}</h1> 
          <img src="{{ $p->images }}" alt="" width="200" class="mx-auto">
          <a href="/product/{{ $p->id }}" class="">
               <button class="mt-2 py-2 px-10 rounded-lg border bg-yellow-400 text-white">Pesan</button>
          </a>
     </div>
     @endforeach
</div>
@endsection
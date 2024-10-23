@extends('template.main')
@section('title')
Detail
@endsection
@section('main')
<div class="border w-[50%] h-auto mx-auto text-center p-3">
     <img src="{{ $p[0]->images }}" alt="" width="200" class="mx-auto">
     <p>{{ $p[0]->kode_product }}</p>
     <p>{{ $p[0]->nama_product }}</p>
     <p>{{ $p[0]->harga_product }}</p>
</div>
@endsection
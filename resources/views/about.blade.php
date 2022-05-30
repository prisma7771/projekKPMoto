@extends('layouts.main')

@section('container')
   <div class="container border border-dark border-2 rounded-3 bg-light bg-opacity-75 text-dark">
   <div class="text-center">
		<h1 class="mt-3">{{ $name }}</h1>
		<h6 class="mt-4"> CV. Tapanuli Motor adalah sebuah perusahaan milik swasta yang bergerak pada bidang palayanan perbaikan dan penyedia suku cadang untuk kendaraan roda 4 atau lebih. Perbaikan yang kami berikan menggunakan teknologi yang cukup memadai pada kami. Kami juga menyediakan suku cadang untuk kendaraan anda dengan kualitas terbaik yang kami miliki. Kami akan memberikan pelayanan dan produk terbaik dengan harga yang sempurna. Karena kepuasan anda adalah prioritas utama untuk kami. </h6>
        <h3 class="mt-4">For more information contact:</h3>
		<h6>{{ $email }}</h6>
		<img src="img/{{ $image }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle border-1 mt-4 color: black">
		<h6 class="mt-5">Created by:</h6>
		<a href="https://www.upnyk.ac.id/" style="text-decoration: none; color: black"><h5><img src="/img/Logo.png" alt="Logo UPN" style="height: 45px;"> Universitas Pembangunan Nasional "Veteran" Yogyakarta</h5></a>
		<h6>&copy Copyright 2022</h6>
	</div>
	</div>
@endsection
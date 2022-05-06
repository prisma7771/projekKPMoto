@extends('layouts.main')

@section('container')
    <div class="container border border-dark border-2 rounded-3 bg-light bg-opacity-75 text-dark" style="height: 550px;">
        <div class="text-center">
            <h2 class="mt-5"><strong>WELCOME TO OUR WEBSITE STORE</strong></h2>
            <hr class="bg-dark border-3 border-top border-dark">
        </div>
        <div class="d-flex justify-content-around text-center" style="margin-top: 110px;">
            <div>
                <a class="nav-link {{ Request::is('posts') ? 'active' : '' }}" href="/posts">
                    <i class=" fa-solid fa-clipboard-list" style="color:black; font-size:9vw"></i>
                </a>
                <div>
                    <hr>
                    <p style="display: inline-block">Browse Our Product</p>
                </div>
            </div>
            <div>
                <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="/about">
                    <i class=" fa-brands fa-whatsapp" style="color:green; font-size: 9vw"></i>
                </a>
                <div>
                    <hr>
                    <p style="display: inline-block;">Contact Our DIstributor</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-3xl uppercase font-bold text-shadow-md pb-14">
                    Escreva o que você ama e compartilhe com o mundo
                </h1>
                <a 
                    href="/blog"
                    class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                    Ver Postagens
                </a>
            </div>
        </div>
    </div>


    <div class="text-center py-15">
        <span class="uppercase text-s text-gray-400">
            Blog
        </span>

        <h2 class="text-4xl font-bold py-10">
            Postagens Recentes
        </h2>
        
        <div>
            {{-- <img src="https://cdn.pixabay.com/photo/2018/04/07/08/28/notepad-3297994_960_720.jpg" alt=""> --}}
        </div>

@endsection
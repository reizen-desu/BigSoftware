@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-center">
    <div class="py-15 border-b border-gray-200">
        <h1 class="text-6xl">
            Postagens
        </h1>
    </div>
</div>

@if (session()->has('message'))
    <div class="w-4/5 m-auto mt-10 pl-2">
        <p class="w-2/6 mb-4 text-gray-50 bg-green-500 rounded-2xl py-4">
            {{ session()->get('message') }}
        </p>
    </div>
@endif

@if (Auth::check())
    <div class="pt-15 transition duration-150 ease-in-out w-full inline-block m-auto">
        <a 
            href="/blog/create"
            class="w-full text-center inline-block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-lg px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
            Criar post
        </a>
    </div>
@endif

@foreach ($posts as $post)
    <div class="sm:grid gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        {{-- <div>
            <img src="{{ asset('images/' . $post->image_path) }}" alt="">
        </div> --}}
        <div>
            <h2 class="text-gray-700 font-bold text-5xl pb-4">
                {{ $post->title }}
            </h2>

            <span class="text-gray-500">
                Por <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>, Criado em {{ date('j M Y', strtotime($post->updated_at)) }}
            </span>

            <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
                {{ $post->description }}
            </p>

            <a href="/blog/{{ $post->slug }}" 
                class="uppercase bg-blue-500 hover:bg-blue-800 focus:ring-blue-300 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                {{-- class="text-white bg-blue-700  focus:ring-4 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"> --}}
                Continuar Lendo
            </a>

            @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
                <span class="float-right">
                    <a 
                        href="/blog/{{ $post->slug }}/edit"
                        class="text-gray-700 italic hover:text-gray-900 pb-1 border-b-2">
                        Editar
                    </a>
                </span>

                <span class="float-right">
                     <form 
                        action="/blog/{{ $post->slug }}"
                        method="POST">
                        @csrf
                        @method('delete')

                        <button
                            class="text-red-500 pr-3"
                            type="submit">
                            Apagar
                        </button>

                    </form>
                </span>
            @endif
        </div>
    </div>    
@endforeach

@endsection
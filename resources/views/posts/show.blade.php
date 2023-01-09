@extends('layouts.master')

@section('sidebar')

    <header>

        <h2 class="title">Najnovšie články</h2>

    </header>

    <main>

        <ul class="posts_list">

            @foreach ($posts as $post)

                    <li> @include('posts.sidebar') </li>

            @endforeach

        </ul>

    </main>
    
@endsection

@section('content')
    @include('posts.article', ['type' => 'show-article'])
    @include('comments.index')
@endsection
@extends('layouts.master')

@section('content')

    <div class="container content_posts">

        <div class="row flex-posts margin_class">

            @foreach($postsmain->slice(0, 2) as $post)

                @include('posts.main_post')

            @endforeach

        </div>

        <div class="row flex-posts mb-2">

            @foreach($postsmain->slice(2, 4) as $post)

                @include('posts.main_post')

            @endforeach

        </div>

    </div>
    
@endsection

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

@section('addon')

    <div class="container addon_posts">

        <div class="row">

            @foreach ($postsaddon as $post)

                @include('posts.addon')
                
            @endforeach

        </div>

    </div>
    
@endsection
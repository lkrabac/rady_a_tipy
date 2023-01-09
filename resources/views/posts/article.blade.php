<article class="max-w-[890px] mx-auto p-8 m-2 post shadow-lg {{$type}}">
    <header class="post-header">
        <img src="{{$post->img}}" alt="">
        <h2 class="text-xl mt-2">
            <a class="post-title" href="/posts/{{$post->id}}"> {{$post->title}} </a>
        </h2>
    </header>

    <div class="post-content">
        <p>{!! nl2br($post->text) !!}</p>
    </div>

    <footer class="post-meta">
        <a class="post-author text-sm" href="/users/{{$post->user->id }}">@<span>{{$post->user->name}}</span></a>
        <a href="/posts/{{$post->id}}#comments" class="px-2"> {{$post->comments->count()}} @if ($post->comments->count() > 1)
                @if ($post->comments->count() > 4)
                    Komentárov
                @else 
                    Kommentáre
                @endif
        @else
        @if($post->comments->count() <= 0)
            Komentárov
        @else 
            Komentár
        @endif
        @endif</a>
    </footer>

</article>

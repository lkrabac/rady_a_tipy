<section class="container max-w-[890px] mx-auto rounded" id="comments">
    <h2 class="text-3xl p-5 sm:p-0 sm:py-2.5">Komentáre</h2>

    @auth
        <div class="container mx-auto">@include('comments.create')</div>       
    @endauth

    @guest
        <p class="outline-dotted inline-block p-1.5">Pre pridanie komentárov sa musíš <a href="/login">prihlásiť</a> alebo <a href="/register">zaregistrovať</a>.</p>
    @endguest


    <ol class="comments-list">
        @foreach ($post->comments as $comment)

            <li>
                @include('comments.show')
            </li>
            
        @endforeach
    </ol>

</section>
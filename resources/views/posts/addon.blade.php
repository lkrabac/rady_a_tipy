<div class="col post">

    <header>

        <h2>ÚŽITKOVÉ ZÁHRADY</h2>

    </header>

    <a href="/posts/{{$post->id}}"><img class="img" src="{{$post->img}}"></a>

    <footer class="meta">

        <h2><a href="/posts/{{$post->id}}">{{Str::limit($post->text, 100)}}</a></h2>

    </footer>

</div>
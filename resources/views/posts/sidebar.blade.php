<div class="post_card">

    <img src="{{$post->img}}" alt="" class="img">

    <div class="text">

        <a href="/posts/{{$post->id}}">{{Str::limit($post->title, 62)}}</a>

    </div>

</div>
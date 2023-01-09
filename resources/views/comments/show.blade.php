<article class="comment p-7">

    <div class="content">
        <p class="p-2">{{$comment->text}}</p>
    </div>

    <footer class="meta">
        <a class=" text-green-300" href="/users/{{$comment->user->id}}">
            @<span>{{$comment->user->name}}</span>
        </a>
        <time>
            <h5 class="text-sm text-gray-500 p-2">{{$comment->created_at->format('d/m/Y')}}</h5>
        </time>
    </footer>

</article>
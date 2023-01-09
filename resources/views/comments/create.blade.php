<form action="/comments" method="POST" class="add-comment-form py-2.5">

    @csrf

    <label class="label text-gray-400">Pridaním komentáru súhlasíte s našimi Terms and Services požiadavkami.</label>
    <textarea name="text" placeholder="Sem napíšte komentár" id="comment-add-form-text" cols="80" rows="5" class="textarea rounded-lg"></textarea>

    <button style="background-color: #5D3E1D" type="submit" class="my-2.5 block rounded-md p-2.5 text-white">
        Pridať komentár
    </button>

    <input type="hidden" name="post_id" value="{{$post->id}}">
    <input type="hidden" name="user_id" value="{{auth()->user()->id}}">

</form>
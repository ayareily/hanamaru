@csrf

<div class="form-group">
  <label>はなまる追加</label>
  <textarea name="body" required class="form-control" rows="3" placeholder="はなまるメモ">{{ $article->body ?? old('id') }}</textarea>
</div>
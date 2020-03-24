@csrf

<div class="form-group">
  <label></label>
  <textarea name="body" class="form-control" rows="3" placeholder="はなまるメモ">{{ $article->body ?? old('id') }}</textarea>
</div>
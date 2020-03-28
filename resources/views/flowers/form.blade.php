@csrf

<div class="form-group">
  <label></label>
  <div class="form-group">
  <article-tags-input
  >
  </article-tags-input>
</div>

  <textarea name="body" class="form-control" rows="3" placeholder="はなまるメモ">{{ $flower->body ?? old('id') }}</textarea>
</div>
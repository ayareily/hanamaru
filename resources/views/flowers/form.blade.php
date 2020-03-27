@csrf

<div class="form-group">
  <label></label>
  <textarea name="foruser" class="form-control" rows="1" placeholder="送信先">{{ $flower->foruser ?? old('id') }}</textarea>
  <textarea name="body" class="form-control" rows="3" placeholder="はなまるメモ">{{ $flower->body ?? old('id') }}</textarea>
</div>
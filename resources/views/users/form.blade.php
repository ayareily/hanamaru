@csrf

<div class="form-group">
  <label></label>
  <textarea name="nickname" class="form-control" rows="1" placeholder="新しい表示名">{{ $user->nickname ?? old('id') }}</textarea>
</div>
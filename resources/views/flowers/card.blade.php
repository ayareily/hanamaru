<div class="card mt-3">
          <div class="card-body d-flex flex-row">
          <i class="fas fa-asterisk fa-3x mr-1"></i>

            <div　class="name">
            <a href="{{ $flower->user->name }}" class="text-dark">
                {{ $flower->user->name }}
            
            <div class="font-weight-lighter">
              {{ $flower->created_at->format('Y/m/d H:i') }} 
            </div>
        
          <div class="body">
            {{ $flower->body }} 
          </div>
        </div>

        @if( Auth::id() === $flower->user_id )
    <!-- dropdown -->
      <div class="ml-auto card-text">
        <div class="dropdown">
          <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-ellipsis-v"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="{{ route("flowers.edit", ['flower' => $flower]) }}">
              <i class="fas fa-pen mr-1"></i>はなまる編集
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item text-danger" data-toggle="modal" data-target="#modal-delete-{{ $flower->id }}">
              <i class="fas fa-trash-alt mr-1"></i>はなまる削除
            </a>
          </div>
        </div>
      </div>
      <!-- dropdown -->

      <!-- modal -->
      <div id="modal-delete-{{ $flower->id }}" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <form method="POST" action="{{ route('flowers.destroy', ['flower' => $flower]) }}">
              @csrf
              @method('DELETE')
              <div class="modal-body">
                {{ $flower->created_at->format('Y/m/d H:i') }}に受け取ったはなまるを削除します。よろしいですか？
              </div>
              <div class="modal-footer justify-content-between">
                <a class="btn btn-outline-grey" data-dismiss="modal">キャンセル</a>
                <button type="submit" class="btn btn-danger">削除する</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- modal -->
    @endif
</div>
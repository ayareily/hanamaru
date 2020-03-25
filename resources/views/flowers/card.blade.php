<div class="card mt-3">
        <div class="card-body d-flex flex-row">
        <a href="{{ route('home', ['name' => $flower->user->name]) }}" class="text-dark">
        <i class="fas fa-user-circle fa-3x mr-1"></i>
        </a>
          <i class="fas fa-asterisk fa-3x mr-1"></i>
          <div>
            <div class="font-weight-lighter">
              {{ $flower->created_at->format('Y/m/d H:i') }} 
          </div>
        </div>
          <div class="body">
            {{ $flower->body }} 
          </div>
        </div>
      </div>
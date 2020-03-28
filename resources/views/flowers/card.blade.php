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
</div>
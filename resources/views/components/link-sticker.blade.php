<a href="{{ route('links.show', $link) }}" class="d-flex align-items-center p-2 my-2 shadow text-decoration-none">
     <x-image
     :title="$link->title"
     :image="$link->banner"
     class="rounded-circle"
     height="40px"
     width="40px"
     ></x-image>
    <div class="mx-3">
         <p class="m-0 text-dark d-block">{{ $link->title }}</p>
         <span class="text-muted">{{ $link->created_at->diffForHumans() }}</span>
    </div>
</a>
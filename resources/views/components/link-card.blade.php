<div class="card shadow border-0">
    <div class="card-header border-0 bg-white d-flex align-items-center px-3 py-2">
         <span>{{ $link->created_at->diffForHumans() }}</span>
         <span class="example-spacer"></span>
          <div class="dropdown">
               <button class="btn p-1" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                         <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                    </svg>
               </button>
               <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
               <li><a class="dropdown-item" href="{{ route('links.show', $link) }}">Ver mas..</a></li>
               <li><a class="dropdown-item" href="{{ route('links.edit', $link) }}">Editar</a></li>
               <li>
                    <form action="{{ route('links.destroy', $link) }}" method="POST" class="d-inline-block">
                         @csrf
                         @method("delete")
                         <button type="submit" class="btn text-danger w-100 mx-2">Eliminar</button>
                    </form>
               </li>
               </ul>
          </div>
    </div>

    <x-image
     :title="$link->title"
     :image="$link->banner"
     height="200px"
     width="100%"
     class="mb-3"
     ></x-image>

    <div class="card-body pt-1">
         <h5 class="card-title mb-1">
              <strong>{{ $link->title }}</strong>
         </h5>
         <span class="card-subtitle text-muted">{{ $link->subtitle }}</span>
         <a href="{{ $link->link }}" target="_blank" class="btn btn-info text-white px-3 d-block mt-2">Visitar sitio</a>
    </div>
</div>
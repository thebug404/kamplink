<x-profile-layout>
     <div class="container">
          <div class="row justify-content-center">
               <div class="col-12 col-sm-10 col-md-8 col-lg-10">
                    <div class="card shadow border-0">
                         <div class="card-body">
                              <div class="row">
                                   <div class="col-12 col-lg-6 pb-3">
                                        <x-image
                                             :title="$link->title"
                                             :image="$link->banner"
                                             width="100%"
                                             class="mb-3"
                                        ></x-image>
                                        <span class="text-muted">
                                             Creacion: 
                                             <span class="mx-2">{{ $link->created_at }}</span>
                                        </span>
                                   </div>
                                   <div class="col-12 col-lg-6">
                                        <h4 class="card-title">
                                             <strong>{{ $link->title }}</strong>
                                        </h4>
                                        <p class="card-subtitle">{{ $link->subtitle }}</p>
                                        <hr>
                                        <span>{{ $link->description }}</span>
                                   </div>
                              </div>
                         </div>
                         <div class="card-footer pt-0 mt-0 border-0 d-flex justify-content-end bg-white">
                              <form action="{{ route('links.destroy', $link) }}" method="POST" class="d-inline-block">
                                   @csrf
                                   @method("delete")
                                   <button type="submit" class="btn text-danger mx-2">Eliminar</button>
                              </form>
                              <div class="example-spacer"></div>
                              <div class="btn-group" role="group" aria-label="Basic outlined example">
                                   <a href="{{ route('links.index') }}" class="btn btn-outline-primary">Regresar</a>
                                   <a href="{{ route('links.edit', $link) }}" class="btn btn-outline-primary">Editar</a>
                                   <a href="{{ $link->link }}" target="_blank" class="btn btn-info text-white">Vistar sitio</a>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</x-profile-layout>
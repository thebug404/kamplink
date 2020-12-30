<x-profile-layout>
     <div class="container">
          <div class="row justify-content-center">
               <div class="col-12 col-sm-8 col-md-10 col-lg-8">
                    <div class="card shadow border-0">
                         <div class="card-body">
                              <form action="{{ route('links.store') }}" method="POST">
                                   @csrf
                                   <div class="row">
                                        <div class="col-12 col-lg-6">
                                             <x-input
                                                  :text="'Ingrese un titulo*'"
                                                  :title="'Titulo'"
                                                  name="title"
                                                  autofocus
                                             ></x-input>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                             <x-input
                                                  :text="'Ingrese el subtitulo'"
                                                  :title="'Subtitulo'"
                                                  name="subtitle"
                                             ></x-input>
                                        </div>
                                        <div class="col-12">
                                             <x-input
                                                  :text="'Ingrese la url del sitio web*'"
                                                  :title="'Link'"
                                                  name="link"
                                                  type="url"
                                             ></x-input>
                                        </div>
                                        <div class="col-12">
                                             <x-input
                                                  :text="'Ingrese una imagen url'"
                                                  :title="'Imagen'"
                                                  name="banner"
                                                  type="url"
                                             ></x-input>
                                        </div>
                                        <div class="col-12">
                                             <div class="form-group">
                                                  <label for="description">Descripcion</label>
                                                  <textarea
                                                       placeholder="Agrege una descripcion"
                                                       class="form-control"
                                                       name="description"
                                                       id="description"
                                                       rows="3"
                                                  ></textarea>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="d-flex justify-content-end">
                                        <a href="{{ route('links.index') }}" class="btn mx-2 px-2">Cancelar</a>
                                        <button type="submit" class="px-3 btn btn-info text-white">Guardar</button>
                                   </div>
                              </form>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</x-profile-layout>
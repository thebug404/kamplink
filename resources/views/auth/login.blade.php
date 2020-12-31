<x-default-layout>
     <div class="container py-5">
          <div class="row justify-content-center">
               <div class="col-12 col-sm-10 col-md-8 col-lg-10">
                    <div class="card shadow bg-white border-0">
                         <div class="card-body">
                              <div class="row align-items-center">
                                   <div class="col-12 col-lg-6 d-none d-lg-block">
                                        <img
                                             src="{{ asset('/images/banner-login.svg') }}"
                                             width="100%"
                                             alt="Kamplink login banner"
                                        >
                                   </div>
                                   <div class="col-12 col-lg-6">
                                        <div class="mb-5">
                                             <h1 class="card-title">
                                                  <strong>Iniciar sesion</strong>
                                             </h1>
                                             <p class="card-subtitle text-muted">Inicia sesion y accede todos tus links.</p>
                                        </div>
                                        <form action="{{ route('auth.login.store') }}" method="POST">
                                             @csrf
                                             <x-input
                                                  :text="'Escriba su correo electronico'"
                                                  :title="'Correo electronico'"
                                                  value="{{ old('email') }}"
                                                  type="email"
                                                  name="email"
                                                  autofocus
                                             ></x-input>

                                             <x-input
                                                  :text="'Escriba su contraseña'"
                                                  :title="'Contraseña'"
                                                  type="password"
                                                  name="password"
                                             ></x-input>
                                             <button type="submit" class="btn btn-info text-white w-100">Iniciar sesion</button>
                                             <a href="{{ route('auth.register.create') }}" class="btn text-info mt-2 w-100">¿Como puedo registrarme?</a>
                                        </form>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
     
     <x-footer></x-footer>
</x-default-layout>
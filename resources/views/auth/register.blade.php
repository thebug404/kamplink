<x-default-layout>
     <div class="container py-5">
          <div class="row justify-content-center">
               <div class="col-12 col-sm-10 col-md-8 col-lg-12">
                    <div class="card shadow border-0">
                         <div class="card-body">
                              <div class="row align-items-center">
                                   <div class="col-12 col-lg-6 d-none d-lg-block">
                                        <img
                                             src="{{ asset('/images/banner-register.svg') }}"
                                             alt="Kamplink register banner"
                                             width="100%"
                                        >
                                   </div>
                                   <div class="col-12 col-lg-6">
                                        <div class="mb-5">
                                             <h1 class="card-title">
                                                  <strong>Crea una cuenta</strong>
                                             </h1>
                                             <p class="card-subtitle text-muted">Crea una cuenta y organiza tu vida.</p>
                                        </div>
                                        <form action="{{ route('auth.register.store') }}" method="POST">
                                             @csrf
                                             <x-input
                                                  :text="'Escriba su nombre'"
                                                  value="{{ old('name') }}"
                                                  :title="'Nombres'"
                                                  name="name"
                                                  autofocus
                                             ></x-input>

                                             <x-input
                                                  :text="'Escriba su correo electronico'"
                                                  :title="'Correo electronico'"
                                                  value="{{ old('email') }}"
                                                  name="email"
                                             ></x-input>

                                             <x-input
                                                  :text="'Escriba su contraseña.'"
                                                  :title="'Contraseña'"
                                                  type="password"
                                                  name="password"
                                             ></x-input>

                                             <button type="submit" class="btn btn-info text-white w-100">Registrase</button>
                                             <a href="{{ route('auth.login.create') }}" class="btn text-info w-100 mt-2">Ya tengo una cuenta</a>
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
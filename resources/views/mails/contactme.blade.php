<x-default-layout>
     <div class="container py-5">
          <div class="row justify-content-center">
               <div class="col-12 col-sm-10 col-md-8 col-lg-12">
                    <div class="card shadow border-0">
                         <div class="card-body">
                              <div class="row align-items-center">
                                   <div class="col-12 col-lg-6 d-none d-lg-block">
                                        <img
                                             src="{{ asset('/images/banner-contactme.svg') }}"
                                             alt="Kamplink contact me banner"
                                             class="w-100"
                                        >
                                   </div>
                                   <div class="col-12 col-lg-6">
                                        <div class="mb-5">
                                             <h1 class="card-title">
                                                  <strong>Contactanos</strong>
                                             </h1>
                                             <p class="card-subtitle text-muted">Comuniquenos sus dudas, estamos para servirle.</p>
                                        </div>
                                        <form action="{{ route('contact.store') }}" method="POST">
                                             @csrf
                                             <x-input
                                                  :text="'Escriba su correo electronico'"
                                                  :title="'Correo electronico'"
                                                  value="{{ old('email') }}"
                                                  name="email"
                                                  autofocus
                                             ></x-input>

                                             <x-input
                                                  :text="'Escriba el asunto'"
                                                  value="{{ old('subject') }}"
                                                  :title="'Asunto'"
                                                  name="subject"
                                             ></x-input>

                                             <div class="form-group">
                                                  <label for="message">Mensaje</label>
                                                  <textarea
                                                  placeholder="Escriba su mensaje"
                                                  class="form-control"
                                                  name="message"
                                                  id="message"
                                                  rows="4"
                                                  >{{ old('message') }}</textarea>
                                             </div>

                                             <button class="btn btn-info w-100 text-white">Enviar</button>
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
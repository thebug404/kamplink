<x-profile-layout>
     <div class="container">
          <h2 class="text-muted">
               <strong>Bienvenido {{ Auth::user()->name }}</strong>
          </h2>

          <div class="row">
               <div class="col-12 col-lg-5 p-2">
                    <a href="{{ route('links.index') }}" class="card shadow border-0 text-decoration-none">
                         <div class="card-header border-0 bg-white">
                              <div class="text-muted">
                                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hourglass-split" viewBox="0 0 16 16">
                                        <path d="M2.5 15a.5.5 0 1 1 0-1h1v-1a4.5 4.5 0 0 1 2.557-4.06c.29-.139.443-.377.443-.59v-.7c0-.213-.154-.451-.443-.59A4.5 4.5 0 0 1 3.5 3V2h-1a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-1v1a4.5 4.5 0 0 1-2.557 4.06c-.29.139-.443.377-.443.59v.7c0 .213.154.451.443.59A4.5 4.5 0 0 1 12.5 13v1h1a.5.5 0 0 1 0 1h-11zm2-13v1c0 .537.12 1.045.337 1.5h6.326c.216-.455.337-.963.337-1.5V2h-7zm3 6.35c0 .701-.478 1.236-1.011 1.492A3.5 3.5 0 0 0 4.5 13s.866-1.299 3-1.48V8.35zm1 0v3.17c2.134.181 3 1.48 3 1.48a3.5 3.5 0 0 0-1.989-3.158C8.978 9.586 8.5 9.052 8.5 8.351z"/>
                                   </svg>
                                   <span class="mx-2">Comenzar</span>
                              </div>
                         </div>
                         <div>
                              <img src="/images/banner-links.svg" alt="My link image" class="w-100" style="height: 150px">
                         </div>
                         <div class="card-body">
                              <h4 class="card-title text-info">
                                   <strong>Mis links</strong>
                              </h4>
                              <p class="card-subtitle text-muted">Encuentras tus sitios web favoritos</p>
                         </div>
                    </a>
               </div>

               <div class="col-12 col-sm-6 col-lg-3 p-2">
                    <div class="card shadow border-0">
                         <div class="card-header border-0 text-muted bg-white">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-alarm-fill" viewBox="0 0 16 16">
                                   <path d="M6 .5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1H9v1.07a7.001 7.001 0 0 1 3.274 12.474l.601.602a.5.5 0 0 1-.707.708l-.746-.746A6.97 6.97 0 0 1 8 16a6.97 6.97 0 0 1-3.422-.892l-.746.746a.5.5 0 0 1-.707-.708l.602-.602A7.001 7.001 0 0 1 7 2.07V1h-.5A.5.5 0 0 1 6 .5zm2.5 5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5zM.86 5.387A2.5 2.5 0 1 1 4.387 1.86 8.035 8.035 0 0 0 .86 5.387zM11.613 1.86a2.5 2.5 0 1 1 3.527 3.527 8.035 8.035 0 0 0-3.527-3.527z"/>
                              </svg>
                              <span class="mx-2">Tiempo</span>
                         </div>
                         <div class="card-body text-center">
                              <img src="/icons/dawn.svg" width="150px" height="150px" class="mx-auto mb-2" alt="">
                              <p class="card-title m-0 p-0 text-info">Lun, 18 Nov 2020</p>
                              <span class="card-subtitle text-muted">
                                   05:22 AM
                              </span>
                         </div>
                    </div>
               </div>

               <div class="col-12 col-sm-6 col-lg-4 p-2">
                    <div class="card shadow border-0">
                         <div class="card-body">
                              <div class="card-subtitle text-muted">
                                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                   </svg>
                                   <span class="mx-2">Agregadas recientemente.</span>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</x-profile-layout>
<x-profile-layout>
     <div class="container">
          <div class="row justify-content-center">
               <div class="col-12 col-sm-8 col-md-10 col-lg-8">
                    <div class="card shadow border-0">
                         <div class="card-body">
                              <form action="{{ route('links.update', $link) }}" method="POST">
                                   @csrf
                                   @method("PUT")
                                   <x-link-fields :link="$link"></x-link-fields>
                              </form>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</x-profile-layout>
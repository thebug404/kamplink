<x-profile-layout>
     <div class="container">
          <div class="row">
               @forelse ($links as $link)
                    <div class="col-12 col-sm-6 col-lg-4 p-2">
                         <x-link-card :link="$link"></x-link-card>
                    </div>
               @empty
                   <p class="text-center w-100">La coleccion se encuentra vacia.</p>
               @endforelse
          </div>
     </div>
</x-profile-layout>
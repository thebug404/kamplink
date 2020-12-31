<x-default-layout>
    <div class="container-fluid">
        <div
            class="row justify-content-center align-items-center"
            style="height: 95vh"
        >
            <div class="col-12 col-sm-10 col-md-8 col-lg-6 p-5">
                <h1>
                    <strong>Kamplink te permite organizar tus sitios web de manera sencilla, instantanea y segura.</strong>
                </h1>
                <p class="text-muted">Olvidate de los quebraderos de cabeza por buscar una pagina que querias visitar y se ha olvidado, ahora con Kamplink podras registrar tus sitios web y accedes a ellos en cualquier momento.</p>
            </div>
            <div class="col-12 col-sm-10 col-md-8 col-lg-6 p-3 d-none d-lg-block">
                <img
                    src="{{ asset('/images/banner-index.svg') }}"
                    width="100%"
                    alt="Link banner kamplink"
                >
            </div>
        </div>
    </div>

    <div class="container pt-5">
        <h1 class="text-center">
            <strong>Disfruta de Kamplink desde cualquier dispositivo.</strong>
        </h1>
        <p class="text-muted text-center d-block w-100">Guarda tus sitios web favoritos.</p>

        <div class="row py-5">
            <div class="col-12 p-2">
                <div class="card shadow border-0">
                    <div class="card-body">
                        <img src="{{ asset('/images/kamplink-pc.png') }}" alt="" class="w-100">
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-5 p-2">
                <div class="card shadow border-0">
                    <div class="card-body">
                        <img src="{{ asset('/images/kamplink-phone.png') }}" alt="" class="w-100">
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-8 col-lg-7 p-2">
                <div class="card shadow border-0">
                    <div class="card-body">
                        <img src="{{ asset('/images/kamplink-tablet.png') }}" alt="" class="w-100">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-footer></x-footer>
</x-default-layout>
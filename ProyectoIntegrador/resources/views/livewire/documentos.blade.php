<x-app-layout>
    @section('title', 'Practicante | Documentos')
    <div class="Frame9 w-[1200px] h-[full] relative bg-neutral-800 rounded-[15px]">
        <div class="ml-10 mt-5 text-white text-[32px] font-bold font-['Mulish']">Documentos</div>
        <img class="ml-10 mt-5 w-[1200px] h-[379px] rounded-[15px] shadow border border-black" src="img/plan.png" />

        <div class="grid grid-cols-2 gap-8 ml-20 mt-5">

            <div class="w-[400px] h-[full] ml-10 mt-5 mb-7 mr-10 bg-zinc-900 shadow border border-white background-size: cover; background-position: center" style="background-image: url('img/card2.avif'); ">
                <div class="text-white text-4xl font-extrabold font-['Mulish'] ml-5 mt-5 mr-2 flex justify-center items-center">Carta de aceptacion </div>
                <div class="mt-48 mb-5">
                    {{-- Crear --}}
                    <div x-data="{ showModal: false }">
                        <div class="flex">
                            <div class="text-white text-3xl font-extrabold font-['Mulish'] ml-5 mt-5 mr-2 w-[full]"> Subir : </div>
                            <a @click="showModal = true" class="ml-28 mt-6 cursor-pointer"><i class="fa-solid fa-file-arrow-up fa-2xl" style="color: green"></i></a>
                        </div>
                        {{-- Modal --}}
                        <div x-show="showModal" @click.away="showModal = false" class="fixed inset-0 overflow-y-auto flex items-center justify-center">
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 p-5">
                                <!-- Contenido del modal -->
                                        <!-- Modal header -->
                                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                                Subir Carta de Aceptacion
                                            </h3>
                                        </div>
                                        <!-- Modal body -->
                                        <form class="p-4 md:p-5" action="{{ route('cartaaceptacion.store') }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="grid gap-4 mb-4 grid-cols-2">
                                                <div class="col-span-2">
                                                    <label for="direccion" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Direccion:</label>
                                                    <input type="text" name="direccion" id="direccion" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" required="">

                                                    <label for="ubigeo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ubigeo:</label>
                                                    <input type="text" name="ubigeo" id="ubigeo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" required="">

                                                    <label for="coordenadas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Coordenadas:</label>
                                                    <input type="text" name="coordenadas" id="coordenadas" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" required="">

                                                    <label for="archivo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Carta de aceptacion:</label>
                                                    <input type="file" accept=".pdf" name="archivo" id="archivo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" required="">
                                                </div>
                                            </div>
                                            <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                Subir Carta de Acceptacion
                                            </button>
                                        </form>
                                <!-- Botón para cerrar el modal -->
                                <button @click="showModal = false" class="absolute top-0 right-0 p-2 cursor-pointer">
                                    <i class="fa-solid fa-times text-gray-500"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    {{-- editar --}}
                    <div x-data="{ showModal: false }">
                        <div class="flex">
                            <div class="text-white text-3xl font-extrabold font-['Mulish'] ml-5 mt-5 mr-2 w-[full]"> Editar : </div>
                            <a @click="showModal = true" class="ml-24 mt-6 cursor-pointer"><i class="fa-solid fa-file-pen fa-2xl" style="color: skyblue"></i></a>
                        </div>
                        {{-- Modal --}}
                        @if ($informePPP !== null)
                            <div x-show="showModal" @click.away="showModal = false" class="fixed inset-0 overflow-y-auto flex items-center justify-center">
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 p-5">
                                    <!-- Contenido del modal -->
                                            <!-- Modal header -->
                                            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                                    Editar Informe
                                                </h3>
                                            </div>
                                            <!-- Modal body -->
                                            <form class="p-4 md:p-5" action="{{ url('cartaaceptacion/'.App\Models\CartaAceptacion::where('practicante_id', Auth::id())->value('id')) }}" method="post" enctype="multipart/form-data">
                                                @method("put")
                                                @csrf
                                                <div class="grid gap-4 mb-4 grid-cols-2">
                                                    <div class="col-span-2">
                                                        <label for="direccion" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Direccion:</label>
                                                        <input value="{{$informePPP->acep_direccion}}" type="text" name="direccion" id="direccion" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" required="">

                                                        <label for="ubigeo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ubigeo:</label>
                                                        <input value="{{$informePPP->acep_ubigeo}}" type="text" name="ubigeo" id="ubigeo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" required="">

                                                        <label for="coordenadas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Coordenadas:</label>
                                                        <input value="{{$informePPP->acep_coordenadas}}" type="text" name="coordenadas" id="coordenadas" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" required="">

                                                        <label for="archivo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Carta de aceptacion:</label>
                                                        <input value="{{$informePPP->acep_archivo}}" type="file" accept=".pdf" name="archivo" id="archivo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" required="">
                                                    </div>
                                                </div>
                                                <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                    Editar Carta de aceptacion
                                                </button>
                                            </form>
                                    <!-- Botón para cerrar el modal -->
                                    <button @click="showModal = false" class="absolute top-0 right-0 p-2 cursor-pointer">
                                        <i class="fa-solid fa-times text-gray-500"></i>
                                    </button>
                                </div>
                            </div>
                        @endif
                    </div>
                    {{-- Borrar --}}
                    <div class="flex">
                        <div class="text-white text-3xl font-extrabold font-['Mulish'] ml-5 mt-5 mr-2 w-[full]"> Eliminar : </div>
                        <form action="{{ url('cartaaceptacion/' .  Auth::id()) }}" method="post" id="deleteFormCarta">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="ml-16 mt-6" onclick="confirmDelete1()"><i class="fa-solid fa-trash fa-2xl" style="color: red"></i></button>
                            <script>
                                function confirmDelete1() {
                                    Swal.fire({
                                        title: '¿Estás seguro?',
                                        text: 'No podrás revertir esto',
                                        icon: 'warning',
                                        showCancelButton: true,
                                        confirmButtonColor: '#d33',
                                        cancelButtonColor: '#3085d6',
                                        confirmButtonText: 'Sí, eliminarlo'
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            // Si el usuario confirma, envía el formulario
                                            document.getElementById('deleteFormCarta').submit();
                                        }
                                    });
                                }
                            </script>
                        </form>
                    </div>
                </div>
            </div>

            <div class="w-[400px] h-[full] ml-10 mt-5 mb-7 mr-10 bg-zinc-900 shadow border border-white background-size: cover; background-position: center" style="background-image: url('img/card2.avif'); ">
                <div class="text-white text-6xl font-extrabold font-['Mulish'] ml-5 mt-5 mr-2 flex justify-center items-center">Constancia </div>
                <div class="mt-40 mb-5">
                    {{-- Crear --}}
                    <div x-data="{ showModal: false }">
                        <div class="flex">
                            <div class="text-white text-3xl font-extrabold font-['Mulish'] ml-5 mt-5 mr-2 w-[full]"> Subir : </div>
                            <a @click="showModal = true" class="ml-28 mt-6 cursor-pointer"><i class="fa-solid fa-file-arrow-up fa-2xl" style="color: green"></i></a>
                        </div>
                        {{-- Modal --}}
                        <div x-show="showModal" @click.away="showModal = false" class="fixed inset-0 overflow-y-auto flex items-center justify-center">
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 p-5">
                                <!-- Contenido del modal -->
                                        <!-- Modal header -->
                                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                                Subir Constancia
                                            </h3>
                                        </div>
                                        <!-- Modal body -->
                                        <form class="p-4 md:p-5" action="{{ url('constancia') }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="grid gap-4 mb-4 grid-cols-2">
                                                <div class="col-span-2">
                                                    <label for="archivo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Informe:</label>
                                                    <input type="file" accept=".pdf" name="archivo" id="archivo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" required="">
                                                </div>
                                            </div>
                                            <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                Subir Constancia
                                            </button>
                                        </form>
                                <!-- Botón para cerrar el modal -->
                                <button @click="showModal = false" class="absolute top-0 right-0 p-2 cursor-pointer">
                                    <i class="fa-solid fa-times text-gray-500"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    {{-- editar --}}
                    <div x-data="{ showModal: false }">
                        <div class="flex">
                            <div class="text-white text-3xl font-extrabold font-['Mulish'] ml-5 mt-5 mr-2 w-[full]"> Editar : </div>
                            <a @click="showModal = true" class="ml-24 mt-6 cursor-pointer"><i class="fa-solid fa-file-pen fa-2xl" style="color: skyblue"></i></a>
                        </div>
                        {{-- Modal --}}
                        <div x-show="showModal" @click.away="showModal = false" class="fixed inset-0 overflow-y-auto flex items-center justify-center">
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 p-5">
                                <!-- Contenido del modal -->
                                        <!-- Modal header -->
                                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                                Editar Constancia
                                            </h3>
                                        </div>
                                        <!-- Modal body -->
                                        <form class="p-4 md:p-5" action="{{ url('constancia/'.App\Models\Constancia::where('practicante_id', Auth::id())->value('id')) }}" method="post" enctype="multipart/form-data">
                                            @method("put")
                                            @csrf
                                            <div class="grid gap-4 mb-4 grid-cols-2">
                                                <div class="col-span-2">
                                                    <label for="archivo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Informe:</label>
                                                    <input type="file" accept=".pdf" name="archivo" id="archivo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" required="">
                                                </div>
                                            </div>
                                            <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                Editar Constancia
                                            </button>
                                        </form>
                                <!-- Botón para cerrar el modal -->
                                <button @click="showModal = false" class="absolute top-0 right-0 p-2 cursor-pointer">
                                    <i class="fa-solid fa-times text-gray-500"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    {{-- Borrar --}}
                    <div class="flex">
                        <div class="text-white text-3xl font-extrabold font-['Mulish'] ml-5 mt-5 mr-2 w-[full]"> Eliminar : </div>
                        <form action="{{ url('constancia/' .  Auth::id()) }}" method="post" id="deleteFormConstancia">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="ml-16 mt-6" onclick="confirmDelete2()"><i class="fa-solid fa-trash fa-2xl" style="color: red"></i></button>
                        </form>
                        <script>
                            function confirmDelete2() {
                                Swal.fire({
                                    title: '¿Estás seguro?',
                                    text: 'No podrás revertir esto',
                                    icon: 'warning',
                                    showCancelButton: true,
                                    confirmButtonColor: '#d33',
                                    cancelButtonColor: '#3085d6',
                                    confirmButtonText: 'Sí, eliminarlo'
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        // Si el usuario confirma, envía el formulario
                                        document.getElementById('deleteFormConstancia').submit();
                                    }
                                });
                            }
                        </script>
                    </div>

                </div>
            </div>

            <div class="w-[400px] h-[full] ml-10 mt-5 mb-7 mr-10 bg-zinc-900 shadow border border-white background-size: cover; background-position: center" style="background-image: url('img/card2.avif'); ">
                <div class="text-white text-6xl font-extrabold font-['Mulish'] ml-5 mt-5 mr-2 flex justify-center items-center">Informe  </div>
                <div class="mt-40 mb-5">
                    {{-- Crear --}}
                    <div x-data="{ showModal: false }">
                        <div class="flex">
                            <div class="text-white text-3xl font-extrabold font-['Mulish'] ml-5 mt-5 mr-2 w-[full]"> Subir : </div>
                            <a @click="showModal = true" class="ml-28 mt-6 cursor-pointer"><i class="fa-solid fa-file-arrow-up fa-2xl" style="color: green"></i></a>
                        </div>
                        {{-- Modal --}}
                        <div x-show="showModal" @click.away="showModal = false" class="fixed inset-0 overflow-y-auto flex items-center justify-center">
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 p-5">
                                <!-- Contenido del modal -->
                                        <!-- Modal header -->
                                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                                Subir Informe
                                            </h3>
                                        </div>
                                        <!-- Modal body -->
                                        <form class="p-4 md:p-5" action="{{ url('informe') }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="grid gap-4 mb-4 grid-cols-2">
                                                <div class="col-span-2">
                                                    <label for="archivo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Informe:</label>
                                                    <input type="file" accept=".pdf" name="archivo" id="archivo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" required="">
                                                </div>
                                            </div>
                                            <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                Subir Informe
                                            </button>
                                        </form>
                                <!-- Botón para cerrar el modal -->
                                <button @click="showModal = false" class="absolute top-0 right-0 p-2 cursor-pointer">
                                    <i class="fa-solid fa-times text-gray-500"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    {{-- editar --}}
                    <div x-data="{ showModal: false }">
                        <div class="flex">
                            <div class="text-white text-3xl font-extrabold font-['Mulish'] ml-5 mt-5 mr-2 w-[full]"> Editar : </div>
                            <a @click="showModal = true" class="ml-24 mt-6 cursor-pointer"><i class="fa-solid fa-file-pen fa-2xl" style="color: skyblue"></i></a>
                        </div>
                        {{-- Modal --}}
                        <div x-show="showModal" @click.away="showModal = false" class="fixed inset-0 overflow-y-auto flex items-center justify-center">
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 p-5">
                                <!-- Contenido del modal -->
                                        <!-- Modal header -->
                                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                                Editar Informe
                                            </h3>
                                        </div>
                                        <!-- Modal body -->
                                        <form class="p-4 md:p-5" action="{{ url('informe/'.App\Models\InformePPP::where('practicante_id', Auth::id())->value('id')) }}" method="post" enctype="multipart/form-data">
                                            @method("put")
                                            @csrf
                                            <div class="grid gap-4 mb-4 grid-cols-2">
                                                <div class="col-span-2">
                                                    <label for="archivo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Informe:</label>
                                                    <input type="file" accept=".pdf" name="archivo" id="archivo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" required="">
                                                </div>
                                            </div>
                                            <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                Subir Informe
                                            </button>
                                        </form>
                                <!-- Botón para cerrar el modal -->
                                <button @click="showModal = false" class="absolute top-0 right-0 p-2 cursor-pointer">
                                    <i class="fa-solid fa-times text-gray-500"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    {{-- Borrar --}}
                    <div class="flex">
                        <div class="text-white text-3xl font-extrabold font-['Mulish'] ml-5 mt-5 mr-2 w-[full]"> Eliminar : </div>
                        <form action="{{ url('informe/' .  Auth::id()) }}" method="post" id="deleteFormInforme">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="ml-16 mt-6" onclick="confirmDelete3()"><i class="fa-solid fa-trash fa-2xl" style="color: red"></i></button>
                        </form>
                        <script>
                            function confirmDelete3() {
                                Swal.fire({
                                    title: '¿Estás seguro?',
                                    text: 'No podrás revertir esto',
                                    icon: 'warning',
                                    showCancelButton: true,
                                    confirmButtonColor: '#d33',
                                    cancelButtonColor: '#3085d6',
                                    confirmButtonText: 'Sí, eliminarlo'
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        // Si el usuario confirma, envía el formulario
                                        document.getElementById('deleteFormInforme').submit();
                                    }
                                });
                            }
                        </script>
                    </div>
                </div>
            </div>

            <div class="w-[400px] h-[full] ml-10 mt-5 mb-7 mr-10 bg-zinc-900 shadow border border-white background-size: cover; background-position: center" style="background-image: url('img/card2.avif'); ">
                <div class="text-white text-6xl font-extrabold font-['Mulish'] ml-5 mt-5 mr-2 flex justify-center items-center">Convenio</div>
                <div class="mt-48 mb-5">
                    {{-- Crear --}}
                    <div x-data="{ showModal: false }">
                        <div class="flex">
                            <div class="text-white text-3xl font-extrabold font-['Mulish'] ml-5 mt-5 mr-2 w-[full]"> Subir : </div>
                            <a @click="showModal = true" class="ml-28 mt-6 cursor-pointer"><i class="fa-solid fa-file-arrow-up fa-2xl" style="color: green"></i></a>
                        </div>
                        {{-- Modal --}}
                        <div x-show="showModal" @click.away="showModal = false" class="fixed inset-0 overflow-y-auto flex items-center justify-center">
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 p-5">
                                <!-- Contenido del modal -->
                                        <!-- Modal header -->
                                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                                Subir Convenio
                                            </h3>
                                        </div>
                                        <!-- Modal body -->
                                        <form class="p-4 md:p-5" action="{{ url('convenio') }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="grid gap-4 mb-4 grid-cols-2">
                                                <div class="col-span-2">
                                                    <label for="tipo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipo:</label>
                                                    <input type="text" name="tipo" id="tipo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" required="">

                                                    <label for="inicio" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fecha de Inicio:</label>
                                                    <input type="date" name="inicio" id="inicio" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" required="">

                                                    <label for="fin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fecha Fin:</label>
                                                    <input type="date" name="fin" id="fin" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" required="">

                                                    <label for="emp_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Empresa:</label>
                                                    <select name="emp_id" id="emp_id"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required>
                                                        <option value="">Seleccionar Empresa</option>
                                                        @foreach ($empresas as $empresa)
                                                            <option value="{{$empresa->id}}">{{$empresa->emp_nombre}}</option>
                                                        @endforeach
                                                    </select>

                                                    <label for="archivo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Convenio:</label>
                                                    <input type="file" accept=".pdf" name="archivo" id="archivo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" required="">
                                                </div>
                                            </div>
                                            <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                Subir Constancia
                                            </button>
                                        </form>
                                <!-- Botón para cerrar el modal -->
                                <button @click="showModal = false" class="absolute top-0 right-0 p-2 cursor-pointer">
                                    <i class="fa-solid fa-times text-gray-500"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    {{-- editar --}}
                    <div x-data="{ showModal: false }">
                        <div class="flex">
                            <div class="text-white text-3xl font-extrabold font-['Mulish'] ml-5 mt-5 mr-2 w-[full]"> Editar : </div>
                            <a @click="showModal = true" class="ml-24 mt-6 cursor-pointer"><i class="fa-solid fa-file-pen fa-2xl" style="color: skyblue"></i></a>
                        </div>
                        {{-- Modal --}}
                        @if ($convenio !== null)
                            <div x-show="showModal" @click.away="showModal = false" class="fixed inset-0 overflow-y-auto flex items-center justify-center">
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 p-5">
                                    <!-- Contenido del modal -->
                                            <!-- Modal header -->
                                            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                                    Editar Informe
                                                </h3>
                                            </div>
                                            <!-- Modal body -->
                                            <form class="p-4 md:p-5" action="{{ url('convenio/'.App\Models\Convenio::where('practicante_id', Auth::id())->value('id')) }}" method="post" enctype="multipart/form-data">
                                                @method("put")
                                                @csrf
                                                <div class="grid gap-4 mb-4 grid-cols-2">
                                                    <div class="col-span-2">
                                                        <label for="tipo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipo:</label>
                                                        <input type="text" value="{{$convenio->convenio_tipoConvenio}}" name="tipo" id="tipo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" required="">

                                                        <label for="inicio" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fecha de Inicio:</label>
                                                        <input type="date" value="{{$convenio->convenio_fechaInicio}}" name="inicio" id="inicio" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" required="">

                                                        <label for="fin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fecha Fin:</label>
                                                        <input type="date" value="{{$convenio->convenio_fechaFin}}" name="fin" id="fin" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" required="">

                                                        <label for="emp_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Empresa:</label>
                                                        <select name="emp_id" id="emp_id"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required>
                                                            <option value="">Seleccionar Empresa</option>
                                                            @foreach ($empresas as $empresa)
                                                                <option value="{{$empresa->id}}" @if ($empresa->id==$convenio->emp_id) {{'selected'}} @endif>{{$empresa->emp_nombre}}</option>
                                                            @endforeach
                                                        </select>

                                                        <label for="archivo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Convenio:</label>
                                                        <input type="file" accept=".pdf" name="archivo" id="archivo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" required="">
                                                    </div>
                                                </div>
                                                <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                    Editar Convenio
                                                </button>
                                            </form>
                                    <!-- Botón para cerrar el modal -->
                                    <button @click="showModal = false" class="absolute top-0 right-0 p-2 cursor-pointer">
                                        <i class="fa-solid fa-times text-gray-500"></i>
                                    </button>
                                </div>
                            </div>
                        @endif
                    </div>
                    {{-- Borrar --}}
                    <div class="flex">
                        <div class="text-white text-3xl font-extrabold font-['Mulish'] ml-5 mt-5 mr-2 w-[full]"> Eliminar : </div>
                        <form action="{{ url('convenio/' .  Auth::id()) }}" method="post" id="deleteFormConvenio">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="ml-16 mt-6" onclick="confirmDelete1()"><i class="fa-solid fa-trash fa-2xl" style="color: red"></i></button>
                            <script>
                                function confirmDelete1() {
                                    Swal.fire({
                                        title: '¿Estás seguro?',
                                        text: 'No podrás revertir esto',
                                        icon: 'warning',
                                        showCancelButton: true,
                                        confirmButtonColor: '#d33',
                                        cancelButtonColor: '#3085d6',
                                        confirmButtonText: 'Sí, eliminarlo'
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            // Si el usuario confirma, envía el formulario
                                            document.getElementById('deleteFormConvenio').submit();
                                        }
                                    });
                                }
                            </script>
                        </form>
                    </div>
                </div>
            </div>
        </div>

</x-app-layout>

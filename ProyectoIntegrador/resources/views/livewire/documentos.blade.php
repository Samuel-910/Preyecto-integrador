<x-app-layout>
    @section('title', 'Practicante | Documentos')
    <div class="Frame9 w-[1200px] h-[full] relative bg-neutral-800 rounded-[15px]">
        <div class="ml-10 mt-5 text-white text-[32px] font-bold font-['Mulish']">Documentos</div>
        <img class="ml-10 mt-5 w-[1200px] h-[379px] rounded-[15px] shadow border border-black" src="img/plan.png" />
        <div class="flex">
            <div class="w-[400px] h-[full] ml-10 mt-5 mb-7 mr-10 bg-zinc-900 shadow border border-white background-size: cover; background-position: center" style="background-image: url('img/card2.avif'); ">
                <div class="text-white text-4xl font-extrabold font-['Mulish'] ml-5 mt-5 mr-2">Carta de aceptacion </div>
                <div class="mt-48 mb-5">
                    <div class="flex">
                        <div class="text-white text-3xl font-extrabold font-['Mulish'] ml-5 mt-5 mr-2 w-[full]"> Subir : </div>
                        <a href="{{ url('planppp/create') }}" class="ml-28 mt-6"><i class="fa-solid fa-file-arrow-up fa-2xl" style="color: green"></i></a>
                    </div>

                    <div class="flex">
                        <div class="text-white text-3xl font-extrabold font-['Mulish'] ml-5 mt-5 mr-2 w-[full]"> Editar : </div>
                        <a href="{{ url('planppp/' . Auth::id() . '/edit') }}" class="ml-24 mt-6"><i class="fa-solid fa-file-pen fa-2xl" style="color: skyblue"></i></a>
                    </div>

                    <div class="flex">
                        <div class="text-white text-3xl font-extrabold font-['Mulish'] ml-5 mt-5 mr-2 w-[full]"> Eliminar : </div>
                        <form action="{{ url('planppp/' .  Auth::id()) }}" method="post" id="deleteForm">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="ml-16 mt-6" onclick="confirmDelete()"><i class="fa-solid fa-trash fa-2xl" style="color: red"></i></button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="w-[350px] h-[full] ml-10 mt-5 mb-7 mr-10 bg-zinc-900 shadow border border-white background-size: cover; background-position: center" style="background-image: url('img/card2.avif'); ">
                <div class="text-white text-6xl font-extrabold font-['Mulish'] ml-5 mt-5 mr-2">Constancia </div>
                <div class="mt-40 mb-5">
                    <div class="flex">
                        <div class="text-white text-3xl font-extrabold font-['Mulish'] ml-5 mt-5 mr-2 w-[full]"> Subir : </div>
                        <a href="{{ url('planppp/create') }}" class="ml-28 mt-6"><i class="fa-solid fa-file-arrow-up fa-2xl" style="color: green"></i></a>
                    </div>

                    <div class="flex">
                        <div class="text-white text-3xl font-extrabold font-['Mulish'] ml-5 mt-5 mr-2 w-[full]"> Editar : </div>
                        <a href="{{ url('planppp/' . Auth::id() . '/edit') }}" class="ml-24 mt-6"><i class="fa-solid fa-file-pen fa-2xl" style="color: skyblue"></i></a>
                    </div>

                    <div class="flex">
                        <div class="text-white text-3xl font-extrabold font-['Mulish'] ml-5 mt-5 mr-2 w-[full]"> Eliminar : </div>
                        <form action="{{ url('planppp/' .  Auth::id()) }}" method="post" id="deleteForm">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="ml-16 mt-6" onclick="confirmDelete()"><i class="fa-solid fa-trash fa-2xl" style="color: red"></i></button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="w-[350px] h-[full] ml-10 mt-5 mb-7 mr-10 bg-zinc-900 shadow border border-white background-size: cover; background-position: center" style="background-image: url('img/card2.avif'); ">
                <div class="text-white text-6xl font-extrabold font-['Mulish'] ml-5 mt-5 mr-2 flex justify-center items-center">Informe  </div>
                <div class="mt-40 mb-5">
                    <div class="flex">
                        <div class="text-white text-3xl font-extrabold font-['Mulish'] ml-5 mt-5 mr-2 w-[full]"> Subir : </div>
                        <a href="{{ url('planppp/create') }}" class="ml-28 mt-6"><i class="fa-solid fa-file-arrow-up fa-2xl" style="color: green"></i></a>
                    </div>

                    <div class="flex">
                        <div class="text-white text-3xl font-extrabold font-['Mulish'] ml-5 mt-5 mr-2 w-[full]"> Editar : </div>
                        <a href="{{ url('planppp/' . Auth::id() . '/edit') }}" class="ml-24 mt-6"><i class="fa-solid fa-file-pen fa-2xl" style="color: skyblue"></i></a>
                    </div>

                    <div class="flex">
                        <div class="text-white text-3xl font-extrabold font-['Mulish'] ml-5 mt-5 mr-2 w-[full]"> Eliminar : </div>
                        <form action="{{ url('planppp/' .  Auth::id()) }}" method="post" id="deleteForm">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="ml-16 mt-6" onclick="confirmDelete()"><i class="fa-solid fa-trash fa-2xl" style="color: red"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

</x-app-layout>

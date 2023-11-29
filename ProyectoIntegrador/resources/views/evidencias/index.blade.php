<x-app-layout>
    @section('title', 'Practicante | Evidencia')
    <div class="text-white text-[32px] font-bold font-['Mulish'] w-[300px] ml-10 mt-5 mb-5">
        <h2>Listado de alumnos</h2>
    </div>
    <div class="ml-10 items-end">
        <a href="{{ url('evidencias/create') }}" class="w-[199px] h-[50px] bg-zinc-900 rounded-[10px] border border-white justify-center items-center inline-flex text-white text-opacity-50 text-2xl font-bold font-['Mulish'] mb-5 ">Nuevo Registro</a>

        <div class="flex flex-wrap ml-6">
            @foreach ($evidencias as $evidencia)
                @if ($evidencia->practicante_id == auth()->id())
                    <div class="w-[350px] h-[full] m-4  bg-zinc-900 shadow border border-white background-size: cover; background-position: center" style="background-image: url('img/cardevi.jpg'); ">
                        <div class="text-white text-3xl font-extrabold font-['Mulish'] ml-5 mt-5 mr-2">Fecha inicio: {{$evidencia->evi_inicio}}</div>
                        <div class="text-white text-3xl font-extrabold font-['Mulish'] ml-5 mt-5 mr-2">Fecha fin: {{$evidencia->evi_fin}}</div>
                        <div class="text-white text-3xl font-extrabold font-['Mulish'] ml-5 mt-5 mr-2">Horas: {{$evidencia->evi_horas}}</div>
                        <div class="text-white text-3xl font-extrabold font-['Mulish'] ml-5 mt-5 mr-2">Descripcion: {{$evidencia->evi_descripcion}}</div>

                        <div class="text-white text-3xl font-extrabold font-['Mulish'] ml-5 mt-5 mr-2 w-[full]">
                            Archivo :
                            <a href="javascript:void(0);" onclick="mostrarArchivo('{{ $evidencia->evi_archivo }}')">
                                <i class="fa-solid fa-eye fa-1xl" style="color: white"></i>
                            </a>
                        </div>

                        <div class="flex justify-end items-end mr-10 mb-10 mt-5">
                            <a href="{{ url('evidencias/'.$evidencia->id.'/edit') }}"><i class="fa-solid fa-file-pen fa-2xl" style="color: skyblue"></i></a>
                            <form action="{{ url('evidencias/'.$evidencia->id) }}" method="post" id="deleteForm">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="ml-9 mt-1" onclick="confirmDelete()"><i class="fa-solid fa-trash fa-2xl" style="color: red"></i></button>
                            </form>
                        </div>
                    </div>

                @endif
            @endforeach
        </div>
    </div>


    @if(session('alert'))
            <script>
                swal({
                    title: "{{ session('alert.title') }}",
                    text: "{{ session('alert.text') }}",
                    icon: "{{ session('alert.icon') }}",
                });
            </script>
    @endif

    <script>
        function confirmDelete() {
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
                    document.getElementById('deleteForm').submit();
                }
            });
        }

        function mostrarArchivo(archivo) {
            // Cambia el tipo de archivo según tus necesidades (por ejemplo, 'application/pdf')
            let tipoArchivo = 'application/pdf';

            Swal.fire({
                html: `<iframe width="100%" height="500px" src="{{ route('ver-archivo', '') }}/${archivo}" type="${tipoArchivo}" frameborder="0"></iframe>`,
                width: '50%',
                heightAuto: false,
                background: '#161b22',
                showConfirmButton: true,
                showCloseButton: true,  // Agregado para mostrar el botón de cerrar
                confirmButtonText: 'Cerrar',  // Opcional: personaliza el texto del botón de confirmación
            });
        }
    </script>


</x-app-layout>

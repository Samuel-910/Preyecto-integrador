<x-app-layout>
    @section('title', 'Practicante | Evidencia-Create')
    <div class="w-full ml-10 mt-5 mb-10">
        <div class="text-white text-[32px] font-bold font-['Mulish']">Registrar Evidencias</div>
        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ url('evidencias') }}" method="post" enctype="multipart/form-data" id="planForm">
            @csrf

                <div class="mt-5">
                    <label for="inicio" class="Nombre w-[304px] text-white text-2xl font-bold font-['Mulish']">Fecha de Inicio : </span><span class="text-red-600 text-2xl font-bold font-['Mulish']">*</span></label>
                    <div class="col-sm-5 mt-5">
                        <input type="date" class="w-[394px] h-[70px] pl-[115px] pr-[115px] pt-[20px] pb-[20px] bg-neutral-800 rounded-[10px] justify-start items-center inline-flex text-white text-opacity-50 text-2xl font-normal font-['Inter']" name="inicio" id="inicio" value="{{old('inicio')}}" required>
                    </div>
                </div>

                <div class="mt-5">
                    <label for="fin" class="Nombre w-[304px] text-white text-2xl font-bold font-['Mulish']">Fecha de Fin : </span><span class="text-red-600 text-2xl font-bold font-['Mulish']">*</span></label>
                    <div class="col-sm-5 mt-5">
                        <input type="date" class="w-[394px] h-[70px] pl-[115px] pr-[115px] pt-[20px] pb-[20px] bg-neutral-800 rounded-[10px] justify-start items-center inline-flex text-white text-opacity-50 text-2xl font-normal font-['Inter']" name="fin" id="fin" value="{{old('fin')}}" required>
                    </div>
                </div>

                <div class="mt-5">
                    <label for="horas" class="Nombre w-[304px] text-white text-2xl font-bold font-['Mulish']">Horas : </span><span class="text-red-600 text-2xl font-bold font-['Mulish']">*</span></label>
                    <div class="col-sm-5 mt-5">
                        <input type="text" class="w-[394px] h-[70px] pl-[115px] pr-[115px] pt-[20px] pb-[20px] bg-neutral-800 rounded-[10px] justify-start items-center inline-flex text-white text-opacity-50 text-2xl font-normal font-['Inter']" name="horas" id="horas" value="{{old('horas')}}" required placeholder="20">
                    </div>
                </div>
                <div class="mt-5">
                    <label for="descripcion"
                        class="Nombre w-[304px] text-white text-2xl font-bold font-['Mulish']">Descripción:</label>
                    <div class="col-sm-5 mt-5">
                        <textarea
                            class="w-[394px] h-[120px] pl-[20px] pr-[20px] pt-[20px] pb-[20px] bg-neutral-800 rounded-[10px] justify-start items-center inline-flex text-white text-opacity-50 text-2xl font-normal font-['Inter']"
                            name="descripcion" id="descripcion" required placeholder="Informe detallado que respalda la participación activa y los logros obtenidos durante mis prácticas profesionales">{{ old('descripcion') }} </textarea>
                    </div>
                </div>

                <div class="mt-5 w-[500px]">
                    <label for="archivo" class=" w-[300px] text-white text-2xl font-bold font-['Mulish']">Archivo: <span
                            class="text-red-600 text-2xl font-bold font-['Mulish']">*</span></label>
                    <div class="col-sm-5 border border-solid border-white rounded-[10px]">
                        <input type="file" name="archivo"
                            class="w-[full] h-[70px] pl-[20px] pt-[20px] pb-[20px] bg-neutral-800 rounded-[10px] justify-start items-center inline-flex text-white text-opacity-50 text-2xl font-normal font-['Inter']"
                            id="archivo" value="{{ old('archivo') }}" accept=".pdf,.doc,.docx" required>
                    </div>
                </div>

                <a href="{{ url('planppp') }}" class="pl-24 pr-24 mr-5 pt-6 pb-6 mt-5 w-[298px] h-26 bg-yellow-500 rounded-[25px] text-black text-3xl font-bold font-['Mulish']" onclick="return confirmCancel()">Cancelar</a>

                <button class="mt-5 w-[298px] h-20 bg-yellow-500 rounded-[25px] text-black text-3xl font-bold font-['Mulish']" type="button" onclick="confirmSubmit()">
                    Subir Evidencia
                </button>

        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        function confirmCancel() {
            Swal.fire({
                title: '¿Estás seguro?',
                text: 'Esta acción no se puede deshacer.',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sí, cancelar',
                cancelButtonText: 'No'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "{{ url('evidencias') }}";
                }
            });

            return false; // Evita que el enlace se siga si SweetAlert está activo
        }

        function confirmSubmit() {
            Swal.fire({
                title: '¿Estás seguro?',
                text: 'Esta acción no se puede deshacer.',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sí, subir Plan PPP',
                cancelButtonText: 'No'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Si el usuario confirma, se envía el formulario
                    document.getElementById('planForm').submit();
                }
            });
        }
    </script>
</x-app-layout>

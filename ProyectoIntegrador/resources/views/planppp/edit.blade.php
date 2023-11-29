<x-app-layout>
    @section('title', 'Practicante | Planppp-Edit')

    <div class="w-full ml-10 mt-5 mb-10">
        <div class="text-white text-[50px] font-bold font-['Mulish']">Editar Plan Inicial</div>
        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ url('planppp/'.App\Models\PlanPPP::where('practicante_id', Auth::id())->value('id')) }}" method="post" enctype="multipart/form-data" id="planForm">
            @method("put")
            @csrf
            <div class="grid grid-cols-2 gap-8">
                <div>
                    <div class="text-white text-[32px] font-bold font-['Mulish']">Datos del plan:</div>
                    <div class="mt-5">
                        <label for="inicio" class="Nombre w-[304px] text-white text-2xl font-bold font-['Mulish']">Fecha
                            Inicio : </span><span class="text-red-600 text-2xl font-bold font-['Mulish']">*</span></label>
                        <div class="col-sm-5 mt-5">
                            <input type="date"
                                class="w-[394px] h-[70px] pl-[115px] pr-[115px] pt-[20px] pb-[20px] bg-neutral-800 rounded-[10px] justify-start items-center inline-flex text-white text-opacity-50 text-2xl font-normal font-['Inter']"
                                name="inicio" id="inicio" value="{{ $registro->plan_inicio }}" required>
                        </div>
                    </div>

                    <div class="mt-5">
                        <label for="fin" class="Nombre w-[304px] text-white text-2xl font-bold font-['Mulish']">Fecha Fin
                            :</span><span class="text-red-600 text-2xl font-bold font-['Mulish']">*</span></label>
                        <div class="col-sm-5 mt-5">
                            <input type="date"
                                class="w-[394px] h-[70px] pl-[115px] pr-[115px] pt-[20px] pb-[20px] bg-neutral-800 rounded-[10px] justify-start items-center inline-flex text-white text-opacity-50 text-2xl font-normal font-['Inter']"
                                name="fin" id="fin" value="{{ $registro->plan_fin }}" required>
                        </div>
                    </div>

                    <div class="mt-5">
                        <label for="horas" class="Nombre w-[304px] text-white text-2xl font-bold font-['Mulish']">Horas
                            Planeadas : </span><span class="text-red-600 text-2xl font-bold font-['Mulish']">*</span></label>
                        <div class="col-sm-5 mt-5">
                            <input type="text"
                                class="w-[394px] h-[70px] pl-[115px] pr-[115px] pt-[20px] pb-[20px] bg-neutral-800 rounded-[10px] justify-start items-center inline-flex text-white text-opacity-50 text-2xl font-normal font-['Inter']"
                                name="horas" id="horas" value="{{ $registro->plan_horas }}" required placeholder="200">
                        </div>
                    </div>

                    <div class="mt-5">
                        <label for="modalidad" class="Nombre w-[304px] text-white text-2xl font-bold font-['Mulish']">Modalidad
                            :</label>
                        <div class="col-sm-5 mt-5">
                            <select class="w-[394px] h-[70px] bg-neutral-800 rounded-[10px] text-white text-opacity-50 text-2xl font-normal font-['Inter']"
                                name="modalidad" id="modalidad" required>
                                <option value="" {{ old('modalidad') == '' ? 'selected' : '' }}>Seleccionar</option>
                                <option value="1" @if (1==$registro->plan_modalidad) {{'selected'}} @endif>Virtual</option>
                                <option value="2" @if (2==$registro->plan_modalidad) {{'selected'}} @endif>Presencial</option>
                                <option value="3" @if (3==$registro->plan_modalidad) {{'selected'}} @endif>Semipresencial</option>
                            </select>
                        </div>
                    </div>

                    <div class="mt-5">
                        <label for="turno" class="Nombre w-[304px] text-white text-2xl font-bold font-['Mulish']">Turno:</label>
                        <div class="col-sm-5 mt-5">
                            <select class="w-[394px] h-[70px] bg-neutral-800 rounded-[10px] text-white text-opacity-50 text-2xl font-normal font-['Inter']" name="turno" id="turno" required>
                                <option value="" {{ old('turno', $registro->plan_turno) == '' ? 'selected' : '' }}>Seleccionar</option>
                                <option value="1" @if (1==$registro->plan_turno) {{'selected'}} @endif >Mañana</option>
                                <option value="2" @if (2==$registro->plan_turno) {{'selected'}} @endif>Tarde</option>
                            </select>
                        </div>
                    </div>



                    <div class="mt-5 w-[500px]">
                        <label for="archivo" class=" w-[300px] text-white text-2xl font-bold font-['Mulish']">Archivo: <span class="text-red-600 text-2xl font-bold font-['Mulish']">*</span></label>
                        <div class="col-sm-5 border border-solid border-white rounded-[10px]">
                            <input type="file" name="archivo" class="w-[full] h-[70px] pl-[20px] pt-[20px] pb-[20px] bg-neutral-800 rounded-[10px] justify-start items-center inline-flex text-white text-opacity-50 text-2xl font-normal font-['Inter']" id="archivo" value="{{ $registro->plan_archivo }}" accept=".pdf,.doc,.docx" required>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="text-white text-[32px] font-bold font-['Mulish']">Supervisor:</div>

                    <div class="mt-5">
                        <label for="nombre" class="Nombre w-[304px] text-white text-2xl font-bold font-['Mulish']">Nombre :
                            </span><span class="text-red-600 text-2xl font-bold font-['Mulish']">*</span></label>
                        <div class="col-sm-5 mt-5">
                            <input type="text"
                                class="w-[394px] h-[70px] pl-[115px] pr-[115px] pt-[20px] pb-[20px] bg-neutral-800 rounded-[10px] justify-start items-center inline-flex text-white text-opacity-50 text-2xl font-normal font-['Inter']"
                                name="nombre" id="nombre" value="{{ $registro->plan_super_nombre }}" required placeholder="Juan Perez">
                        </div>
                    </div>

                    <div class="mt-5">
                        <label for="correo" class="Nombre w-[304px] text-white text-2xl font-bold font-['Mulish']">Correo :
                            </span><span class="text-red-600 text-2xl font-bold font-['Mulish']">*</span></label>
                        <div class="col-sm-5 mt-5">
                            <input type="text"
                                class="w-[394px] h-[70px] pl-[115px] pr-[115px] pt-[20px] pb-[20px] bg-neutral-800 rounded-[10px] justify-start items-center inline-flex text-white text-opacity-50 text-2xl font-normal font-['Inter']"
                                name="correo" id="correo" value="{{ $registro->plan_super_correo }}" required
                                placeholder="juan.perez@gmail.com">
                        </div>
                    </div>

                    <div class="mt-5">
                        <label for="numero" class="Nombre w-[304px] text-white text-2xl font-bold font-['Mulish']">Numero :
                            </span><span class="text-red-600 text-2xl font-bold font-['Mulish']">*</span></label>
                        <div class="col-sm-5 mt-5">
                            <input type="text"
                                class="w-[394px] h-[70px] pl-[115px] pr-[115px] pt-[20px] pb-[20px] bg-neutral-800 rounded-[10px] justify-start items-center inline-flex text-white text-opacity-50 text-2xl font-normal font-['Inter']"
                                name="numero" id="numero" value="{{ $registro->plan_super_numero }}" required placeholder="987654321">
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-end mt-10">
                <a href="{{ url('planppp') }}" class="pl-24 pr-24 mr-5 pt-6 pb-6 mt-5 w-[298px] h-26 bg-yellow-500 rounded-[25px] text-black text-3xl font-bold font-['Mulish']" onclick="return confirmCancel()">Cancelar</a>

                <button class="mt-5 w-[298px] h-20 bg-yellow-500 rounded-[25px] text-black text-3xl font-bold font-['Mulish']" type="button" onclick="confirmSubmit()">
                    Editar Plan
                </button>
            </div>

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
                    window.location.href = "{{ url('planppp') }}";
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
                confirmButtonText: 'Sí, editar registro',
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


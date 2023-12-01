<x-app-layout>
    @section('title', 'Practicante | Convocatoria-Lista')

    <form action="{{ route('buscar-convocatorias') }}" method="GET">
        <input class="m-2 bg-black  w-52 h-[41px] rounded-[20px] text-white text-lg font-bold font-['Istok Web']" type="text" name="titulo" placeholder="Buscar por título">
        <input class="m-2 bg-black  w-52 h-[41px] rounded-[20px] text-white text-lg font-bold font-['Istok Web']" type="text" name="empresa" placeholder="Buscar por empresa">
        <input class="m-2 bg-black  w-52 h-[41px] rounded-[20px] text-white text-lg font-bold font-['Istok Web']" type="text" name="puesto" placeholder="Buscar por puesto">
        <input class="m-2 bg-black  w-52 h-[41px] rounded-[20px] text-white text-lg font-bold font-['Istok Web']" type="text" name="vacantes" placeholder="Buscar por vacantes">
        <button class="bg-black  w-60 h-[41px] rounded-[20px] text-white text-lg font-bold font-['Istok Web']" type="submit">Buscar</button>
    </form>


    <div class="Desktop10 w-[full] h-[full] relative">
        @foreach ($convocatorias as $item)
        @if ($item->convocatoria_estado == 'activo')
            <div class="p-5 flex rounded-[33px] w-[full] h-[full] m-4 bg-zinc-900 shadow border border-white background-size: cover background-position: center" style="background-image: url('img/cardevi.jpg'); ">
                <div class="w-[20%] m-5 flex items-center">
                    <img class="Image24 w-[183px] h-[129px] mr-5 rounded-[33px]" src="img/card.jpg" />
                </div>

                <div class="w-[40%] m-5 flex items-center">
                    <div>
                        <div class="text-white text-[30px] font-bold font-['Istok Web']">{{ $item->convocatoria_titulo }}</div>
                        <div class="text-white text-[25px] font-bold font-['Istok Web']">{{ $item->convocatoria_puesto }}</div>
                        <div class="text-white text-[20px] font-bold font-['Istok Web']">
                            @php
                            $empresa = \App\Models\Empresa::find($item->emp_id);
                            @endphp
                            {{ $empresa ? $empresa->emp_nombre : 'Nombre no encontrado' }}
                        </div>
                        <div class="text-white text-[15px] font-['Istok Web']">{{ $item->convocatoria_descripcion }}</div>
                    </div>
                </div>

                <div class="w-[20%] m-5 flex items-center">
                    <div class="left-[808px] top-[314px]">
                        <div class="text-white text-sm font-bold font-['Istok Web']">Fecha inicio: {{$item->convocatoria_fechaInicio}}</div>
                        <div class="text-white text-sm font-bold font-['Istok Web']">Fecha fin: {{$item->convocatoria_fechaFin}}</div>
                        <div class="text-white text-sm font-bold font-['Istok Web']">{{$item->convocatoria_vacantes}} vacantes</div>
                    </div>
                </div>

                <div class="w-[20%] m-5 flex items-center">
                    <div>
                        <a href="{{ route('masinfo', ['id' => $item->id]) }}" class="Rectangle24 w-64 h-[41px] bg-sky-900 rounded-[34px] mb-5 flex items-center justify-center">
                            <div class=" text-white text-lg font-bold font-['Istok Web']">+ Más Información</div>
                        </a>

                        <a href="#" class="Rectangle28 w-64 h-[41px] bg-sky-900 rounded-[34px] mb-5 flex items-center justify-center" onclick="confirmPostular({{ $item->id }})">
                            <div class="text-white text-lg font-bold font-['Istok Web']">Postular</div>
                        </a>
                    </div>
                </div>
            </div>
        @endif
        @endforeach
    </div>
    <script>
        function confirmPostular(convocatoriaId) {
            Swal.fire({
                title: '¿Estás seguro de postular?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sí, estoy seguro',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Crear un formulario dinámico
                    const form = document.createElement('form');
                    form.action = '/guardar-postulacion';
                    form.method = 'POST';

                    // Agregar el token CSRF si estás utilizando Laravel
                    const csrfToken = document.querySelector('meta[name="csrf-token"]').content;
                    const csrfInput = document.createElement('input');
                    csrfInput.type = 'hidden';
                    csrfInput.name = '_token';
                    csrfInput.value = csrfToken;
                    form.appendChild(csrfInput);

                    // Agregar el campo de convocatoriaId
                    const convocatoriaIdInput = document.createElement('input');
                    convocatoriaIdInput.type = 'hidden';
                    convocatoriaIdInput.name = 'convocatoria_id';
                    convocatoriaIdInput.value = convocatoriaId;
                    form.appendChild(convocatoriaIdInput);

                    // Adjuntar el formulario al cuerpo del documento y enviarlo
                    document.body.appendChild(form);
                    form.submit();
                }
            });
        }

    </script>

    @if(session('alert'))
        <script>
            swal({
                title: "{{ session('alert.title') }}",
                text: "{{ session('alert.text') }}",
                icon: "{{ session('alert.icon') }}",
            });
        </script>
    @endif
</x-app-layout>

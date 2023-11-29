<x-app-layout>
    @section('title', 'Coordinador | Convocatorias')
    <div class="Frame8 w-[1352px] h-[full] relative bg-neutral-800 rounded-[15px]">
        <div class="ConvocatoriasActivas w-[592px] h-[63px]  text-white text-[50px] font-extrabold font-['Mulish'] ml-10">Convocatorias activas</div>
        <div class="w-[1352px] flex justify-end">
            <a href="{{ url('convocatoria/create') }}" class="pl-[52px] pr-[53px] pt-2.5 pb-[11px]  bg-zinc-900 rounded-[10px] border-4 border-orange-600 justify-center items-center inline-flex mr-10">
                <div class="CrearNuevaConvocatoria text-white text-2xl font-bold font-['Mulish'] ">Crear nueva <br/>convocatoria</div>
            </a>
        </div>



        <div class="m-5 ">
            @php $i = 0 @endphp

        @foreach ($convocatoria as $item)
            @if ($item->convocatoria_estado == 'activo')
                @if ($i % 2 == 0)
                    <div class="flex">
                @endif

                <div class="p-3 w-[599px] h-[full] relative bg-cyan-950 rounded-[10px] border-4 border-blue-600 m-3 background-size: cover; background-position: center" style="background-image: url('img/card3.avif'); ">

                    <div class="LaEmpresaLaCuracaoJuliacaSolicitaPersonalEnElReaDeDesarrolladorDeAplicacionesMViles w-[575px] h-[85px] left-[11px] top-[15px] text-white text-xl font-bold font-['Mulish']">La Empresa LA @php
                        $empresa = \App\Models\Empresa::find($item->emp_id);
                    @endphp
                    {{ $empresa ? $empresa->emp_nombre : 'Nombre no encontrado' }} solicita personal <br/>En el Área de: {{ $item->convocatoria_puesto }}</div>
                    <div class="flex justify-end mb-3">
                        <a href="{{ url('convocatoria/' .$item->id. '/edit') }}" class="ml-24 mt-6"><i class="fa-solid fa-file-pen fa-2xl" style="color: skyblue"></i></a>
                        <form action="{{ url('convocatoria/'.$item->id) }}" method="post" id="deleteForm">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="ml-9 mt-5" onclick="confirmDelete()"><i class="fa-solid fa-trash fa-2xl" style="color: red"></i></button>
                        </form>
                    </div>
                    <div class="flex justify-between">
                        <div class="IngrasaTuNumeroDeContacto left-[11px] top-[159px] text-white text-opacity-50 text-2xl font-normal font-['Inter']">Habilitado hasta: {{ $item->convocatoria_fechaFin }}</div>
                        <a href="{{ route('masinfo', ['id' => $item->id]) }}" class="DirecciN left-[354px] top-[156px] text-white text-2xl font-bold font-['Mulish']">Más información  <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                    </div>

                </div>

                @if ($i % 2 != 0 || $loop->last)
                    </div>
                @endif

                @php $i++ @endphp
            @endif
        @endforeach
        </div>


        <div class="ConvocatoriasInactivas w-[675px] h-[63px] ml-[45px] top-[637px] text-white text-[50px] font-extrabold font-['Mulish'] mb-10">Convocatorias inactivas</div>

        <div class="m-5 ">
            @php $i = 0 @endphp

        @foreach ($convocatoria as $item)
            @if ($item->convocatoria_estado == 'inactivo')
                @if ($i % 2 == 0)
                    <div class="flex">
                @endif

                <div class="p-3 w-[599px] h-[full] relative bg-cyan-950 rounded-[10px] border-4 border-blue-600 m-3 background-size: cover; background-position: center" style="background-image: url('img/card3.avif'); ">

                    <div class="LaEmpresaLaCuracaoJuliacaSolicitaPersonalEnElReaDeDesarrolladorDeAplicacionesMViles w-[575px] h-[85px] left-[11px] top-[15px] text-white text-xl font-bold font-['Mulish']">La Empresa LA @php
                        $empresa = \App\Models\Empresa::find($item->emp_id);
                    @endphp
                    {{ $empresa ? $empresa->emp_nombre : 'Nombre no encontrado' }} solicita personal <br/>En el Área de: {{ $item->convocatoria_puesto }}</div>
                    <div class="flex justify-end mb-3">
                        <a href="{{ url('convocatoria/' .$item->id. '/edit') }}" class="ml-24 mt-6"><i class="fa-solid fa-file-pen fa-2xl" style="color: skyblue"></i></a>
                        <form action="{{ url('convocatoria/'.$item->id) }}" method="post" id="deleteForm">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="ml-9 mt-5" onclick="confirmDelete()"><i class="fa-solid fa-trash fa-2xl" style="color: red"></i></button>
                        </form>
                    </div>
                    <div class="flex justify-between">
                        <div class="IngrasaTuNumeroDeContacto left-[11px] top-[159px] text-white text-opacity-50 text-2xl font-normal font-['Inter']">Habilitado hasta: {{ $item->convocatoria_fechaFin }}</div>
                        <a href="{{ route('masinfo', ['id' => $item->id]) }}" class="DirecciN left-[354px] top-[156px] text-white text-2xl font-bold font-['Mulish']">Más información  <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                    </div>

                </div>

                @if ($i % 2 != 0 || $loop->last)
                    </div>
                @endif

                @php $i++ @endphp
            @endif
        @endforeach
        </div>

      </div>
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
    </script>
</x-app-layout>

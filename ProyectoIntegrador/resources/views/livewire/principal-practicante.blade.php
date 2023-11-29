<div class="bg-neutral-800">
    @section('title', 'Practicante | Principal')
    <img class="w-[98%] h-[570px] m-5" src="img/conec.png" />
    <div class="w-[592px] h-[63px] text-white text-[50px] font-extrabold m-5 font-['Mulish']">Convocatorias activas</div>
    {{-- Card --}}
    <div class="flex flex-wrap ml-6">
        @foreach ($convocatoria as $item)
            <div class="w-[403px] h-[539px] m-4 relative bg-zinc-900 shadow border border-white  background-size: cover background-position: center" style="background-image: url('img/card.jpg'); ">
                <div class="m-3 left-[26px] top-[16px] text-white text-3xl font-extrabold font-['Mulish']">{{ $item->convocatoria_titulo }}</div>
                <div class="m-3 left-[26px] top-[53px] text-white text-2xl font-extrabold font-['Mulish']">{{ $item->convocatoria_puesto }}</div>
                <div class="m-3 left-[26px] top-[90px] text-white text-2xl font-extrabold font-['Mulish']">
                    @php
                        $empresa = \App\Models\Empresa::find($item->emp_id);
                    @endphp
                    {{ $empresa ? $empresa->emp_nombre : 'Nombre no encontrado' }}
                </div>
                <div class="absolute bottom-14 w-[350px] ml-3 text-black text-3xl font-extrabold font-['Mulish']">{{ $item->convocatoria_descripcion }}</div>
                <div class="w-[200px] h-10 absolute bottom-0 right-0">
                    <a href="{{ route('masinfo', ['id' => $item->id]) }}" class="MasInformacion text-xl font-bold font-['Mulish']"
                    style="background: linear-gradient(to right, #FFD700, #87CEEB); display: inline-block; padding: 0 10px; border-radius: 5px; color: black;">
                        Más información
                    </a>
                </div>

            </div>
        @endforeach
    </div>
</div>

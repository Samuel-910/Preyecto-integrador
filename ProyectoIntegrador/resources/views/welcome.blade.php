<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        <style>
          </style>
    </head>
    <body class="antialiased bg-neutral-800 ">
        <div class="place-content-between w-full h-[91px] pl-full pr-[34px] pt-[13px] pb-3.5 bg-zinc-900 items-center inline-flex">
            <img class="ml-8" src="img/upeu.png" alt="">
            <div class="w-[239px] self-stretch pl-4 pr-[35px] pt-2.5 pb-[9px] bg-neutral-800 rounded-[10px] justify-start items-center gap-[17px] inline-flex">
              <div class="w-[45px] h-[45px] p-[4.22px] justify-center items-center inline-flex"><i class="fa-solid fa-circle-user fa-xl" style="color: white"></i></div>
              <a href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" class="text-white text-xl font-normal font-['Inter']">Iniciar Secion</a>
            </div>
        </div>

            <img class="w-[98%] h-[570px] m-5" src="img/conec.png" />
            <div class="w-[592px] h-[63px] text-white text-[50px] font-extrabold m-5 font-['Mulish']">Convocatorias activas</div>

            {{-- Card --}}
            <div class="flex flex-wrap ml-14">
                @foreach ($convocatoria as $item)
                    <div class="w-[403px] h-[539px] m-8 relative bg-zinc-900 shadow border border-white  background-size: cover background-position: center" style="background-image: url('img/card.jpg'); ">
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
                            <a href="{{ route('dashboard') }}" class="MasInformacion text-xl font-bold font-['Mulish']"
                            style="background: linear-gradient(to right, #FFD700, #87CEEB); display: inline-block; padding: 0 10px; border-radius: 5px; color: black;">
                                Más información
                            </a>
                        </div>

                    </div>
                @endforeach
            </div>
    </body>
</html>

<x-app-layout>
    @section('title', 'Practicante | Evidencia-Create')
    <div class="w-full ml-10 mt-5 mb-10">
        <div class="text-white text-[32px] font-bold font-['Mulish']">Generar Cartas</div>
        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ url('cartapresentacion') }}" method="post" >
            @csrf

                <div class="mt-5">
                    <label for="institucion" class="Nombre w-[304px] text-white text-2xl font-bold font-['Mulish']">Institucion : </span><span class="text-red-600 text-2xl font-bold font-['Mulish']">*</span></label>
                    <div class="col-sm-5 mt-5">
                        <input type="text" class="w-[394px] h-[70px] pl-[115px] pr-[115px] pt-[20px] pb-[20px] bg-neutral-800 rounded-[10px] justify-start items-center inline-flex text-white text-opacity-50 text-2xl font-normal font-['Inter']" name="institucion" id="institucion" value="{{old('institucion')}}" required placeholder="Municipalidad de Juliaca">
                    </div>
                </div>

                <div class="mt-5">
                    <label for="ruc" class="Nombre w-[304px] text-white text-2xl font-bold font-['Mulish']">Ruc :</span><span class="text-red-600 text-2xl font-bold font-['Mulish']">*</span></label>
                    <div class="col-sm-5 mt-5">
                        <input type="text" class="w-[394px] h-[70px] pl-[115px] pr-[115px] pt-[20px] pb-[20px] bg-neutral-800 rounded-[10px] justify-start items-center inline-flex text-white text-opacity-50 text-2xl font-normal font-['Inter']" name="ruc" id="ruc" value="{{old('ruc')}}" required placeholder="8730576208652">
                    </div>
                </div>

                <div class="mt-5">
                    <label for="representante" class="Nombre w-[304px] text-white text-2xl font-bold font-['Mulish']">Representante : </span><span class="text-red-600 text-2xl font-bold font-['Mulish']">*</span></label>
                    <div class="col-sm-5 mt-5">
                        <input type="text" class="w-[394px] h-[70px] pl-[115px] pr-[115px] pt-[20px] pb-[20px] bg-neutral-800 rounded-[10px] justify-start items-center inline-flex text-white text-opacity-50 text-2xl font-normal font-['Inter']" name="representante" id="representante" value="{{old('representante')}}" required placeholder="Juan Perez">
                    </div>
                </div>

                <div class="mt-5">
                    <label for="cargo" class="Nombre w-[304px] text-white text-2xl font-bold font-['Mulish']">Cargo : </span><span class="text-red-600 text-2xl font-bold font-['Mulish']">*</span></label>
                    <div class="col-sm-5 mt-5">
                        <input type="text" class="w-[394px] h-[70px]  bg-neutral-800 rounded-[10px] justify-start items-center inline-flex text-white text-opacity-50 text-2xl font-normal font-['Inter']" name="cargo" id="cargo" value="{{old('cargo')}}" required placeholder="Director">
                    </div>
                </div>

                <div class="mt-5">
                    <label for="fecha" class="Nombre w-[304px] text-white text-2xl font-bold font-['Mulish']">Fecha : </span><span class="text-red-600 text-2xl font-bold font-['Mulish']">*</span></label>
                    <div class="col-sm-5 mt-5">
                        <input type="date" class="w-[394px] h-[70px] pl-[115px] pr-[115px] pt-[20px] pb-[20px] bg-neutral-800 rounded-[10px] justify-start items-center inline-flex text-white text-opacity-50 text-2xl font-normal font-['Inter']" name="fecha" id="fecha" value="{{old('fecha')}}" required>
                    </div>
                </div>

            <a href="{{ url('evidencias') }}" class=" pl-24 pr-24 mr-5 pt-6 pb-6 mt-5 w-[298px] h-26 bg-yellow-500 rounded-[25px] text-black text-3xl font-bold font-['Mulish']">Cancelar</a>
            <button class=" mt-5 w-[298px] h-20 bg-yellow-500 rounded-[25px] text-black text-3xl font-bold font-['Mulish']" type="submit">Subir Evidencia</button>

        </form>
    </div>

</x-app-layout>

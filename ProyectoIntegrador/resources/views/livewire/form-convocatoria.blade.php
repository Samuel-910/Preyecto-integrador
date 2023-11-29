<x-app-layout>
    @section('title', 'Practicante | Evidencia-Create')
    <div class="w-full ml-10 mt-5 mb-10">
        <div class="text-white text-[32px] font-bold font-['Mulish']">Crear Convocatoria</div>
        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ url('convocatoria') }}" method="post">
            @csrf

            <div class="grid grid-cols-2 gap-8">
                <div class="ml-10">
                    <!-- empreas -->
                    <div class="mt-5">
                        <label for="empresa" class="Nombre w-[304px] text-white text-2xl font-bold font-['Mulish']">Empresa:</label>
                        <div class="col-sm-5 mt-5">
                            <select name="empresa" id="empresa" class="w-[394px] h-[70px] pl-[20px] pr-[20px] pt-[20px] pb-[20px] bg-neutral-800 rounded-[10px] text-white text-opacity-50 text-2xl font-normal form-select" required>
                                <option value="">Seleccionar Empresa</option>
                                @foreach ($empresas as $empresa)
                                    <option value="{{$empresa->id}}">{{$empresa->emp_nombre}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <!-- Salario -->
                    <div class="mt-5">
                        <label for="salario"
                            class="Nombre w-[304px] text-white text-2xl font-bold font-['Mulish']">Salario:</label>
                        <div class="col-sm-5 mt-5">
                            <input type="text"
                                class="w-[394px] h-[70px] pl-[20px] pr-[20px] pt-[20px] pb-[20px] bg-neutral-800 rounded-[10px] justify-start items-center inline-flex text-white text-opacity-50 text-2xl font-normal font-['Inter']"
                                name="salario" id="salario" value="{{ old('salario') }}" required>
                        </div>
                    </div>
                    <!-- Título -->
                    <div class="mt-5">
                        <label for="titulo"
                            class="Nombre w-[304px] text-white text-2xl font-bold font-['Mulish']">Título:</label>
                        <div class="col-sm-5 mt-5">
                            <input type="text"
                                class="w-[394px] h-[70px] pl-[20px] pr-[20px] pt-[20px] pb-[20px] bg-neutral-800 rounded-[10px] justify-start items-center inline-flex text-white text-opacity-50 text-2xl font-normal font-['Inter']"
                                name="titulo" id="titulo" value="{{ old('titulo') }}" required>
                        </div>
                    </div>
                    <!-- Puesto -->
                    <div class="mt-5">
                        <label for="puesto"
                            class="Nombre w-[304px] text-white text-2xl font-bold font-['Mulish']">Puesto:</label>
                        <div class="col-sm-5 mt-5">
                            <input type="text"
                                class="w-[394px] h-[70px] pl-[20px] pr-[20px] pt-[20px] pb-[20px] bg-neutral-800 rounded-[10px] justify-start items-center inline-flex text-white text-opacity-50 text-2xl font-normal font-['Inter']"
                                name="puesto" id="puesto" value="{{ old('puesto') }}" required>
                        </div>
                    </div>
                    <!-- Descripción -->
                    <div class="mt-5">
                        <label for="descripcion"
                            class="Nombre w-[304px] text-white text-2xl font-bold font-['Mulish']">Descripción:</label>
                        <div class="col-sm-5 mt-5">
                            <textarea
                                class="w-[394px] h-[120px] pl-[20px] pr-[20px] pt-[20px] pb-[20px] bg-neutral-800 rounded-[10px] justify-start items-center inline-flex text-white text-opacity-50 text-2xl font-normal font-['Inter']"
                                name="descripcion" id="descripcion" required>{{ old('descripcion') }}</textarea>
                        </div>
                    </div>

                </div>

                <div class="ml-10">
                    <!-- Vacantes -->
                    <div class="mt-5">
                        <label for="vacantes"
                            class="Nombre w-[304px] text-white text-2xl font-bold font-['Mulish']">Vacantes:</label>
                        <div class="col-sm-5 mt-5">
                            <input type="number"
                                class="w-[394px] h-[70px] pl-[20px] pr-[20px] pt-[20px] pb-[20px] bg-neutral-800 rounded-[10px] justify-start items-center inline-flex text-white text-opacity-50 text-2xl font-normal font-['Inter']"
                                name="vacantes" id="vacantes" value="{{ old('vacantes') }}" required>
                        </div>
                    </div>
                    <!-- Experiencia -->
                    <div class="mt-5">
                        <label for="experiencia" class="Nombre w-[304px] text-white text-2xl font-bold font-['Mulish']">Experiencia:</label>
                        <div class="col-sm-5 mt-5">
                            <select
                                class="w-[394px] h-[70px] bg-neutral-800 rounded-[10px] text-white text-opacity-50 text-2xl font-normal font-['Inter']"
                                name="experiencia" id="experiencia" required>
                                <option value="" {{ old('modalidad') == '' ? 'selected' : '' }}>Seleccionar</option>
                                <option value="1" {{ old('experiencia') == 'Sin experiencia' ? 'selected' : '' }}>Sin experiencia</option>
                                <option value="2" {{ old('experiencia') == 'Menos de 1 año' ? 'selected' : '' }}>Menos de 1 año</option>
                                <option value="3" {{ old('experiencia') == '1-2 años' ? 'selected' : '' }}>1-2 años</option>
                                <option value="4" {{ old('experiencia') == '2-5 años' ? 'selected' : '' }}>2-5 años</option>
                                <option value="5" {{ old('experiencia') == '5-10 años' ? 'selected' : '' }}>5-10 años</option>
                                <option value="6" {{ old('experiencia') == 'Más de 10 años' ? 'selected' : '' }}>Más de 10 años</option>

                            </select>
                        </div>
                    </div>
                    <!-- Idiomas -->
                    <div class="mt-5">
                        <label for="idiomas"
                            class="Nombre w-[304px] text-white text-2xl font-bold font-['Mulish']">Idiomas:</label>
                        <div class="col-sm-5 mt-5">
                            <input type="text"
                                class="w-[394px] h-[70px] pl-[20px] pr-[20px] pt-[20px] pb-[20px] bg-neutral-800 rounded-[10px] justify-start items-center inline-flex text-white text-opacity-50 text-2xl font-normal font-['Inter']"
                                name="idiomas" id="idiomas" value="{{ old('idiomas') }}" required>
                        </div>
                    </div>
                    <!-- Formacion academica -->
                    <div class="mt-5">
                        <label for="forma_aca" class="Nombre w-[304px] text-white text-2xl font-bold font-['Mulish']">Formación académica:</label>
                        <div class="col-sm-5 mt-5">
                            <select
                                class="w-[394px] h-[70px] bg-neutral-800 rounded-[10px] text-white text-opacity-50 text-2xl font-normal font-['Inter']"
                                name="forma_aca" id="forma_aca" required>
                                <option value="" {{ old('modalidad') == '' ? 'selected' : '' }}>Seleccionar</option>
                                <option value="1" {{ old('forma_aca') == 'Sin formación académica' ? 'selected' : '' }}>Sin formación académica</option>
                                <option value="2" {{ old('forma_aca') == 'Secundaria' ? 'selected' : '' }}>Secundaria</option>
                                <option value="3" {{ old('forma_aca') == 'Preparatoria' ? 'selected' : '' }}>Preparatoria</option>
                                <option value="4" {{ old('forma_aca') == 'Técnico' ? 'selected' : '' }}>Técnico</option>
                                <option value="5" {{ old('forma_aca') == 'Universitario' ? 'selected' : '' }}>Universitario</option>
                                <option value="6" {{ old('forma_aca') == 'Postgrado' ? 'selected' : '' }}>Postgrado</option>

                            </select>
                        </div>
                    </div>
                    <!-- Inicio -->
                    <div class="mt-5">
                        <label for="inicio" class="Nombre w-[304px] text-white text-2xl font-bold font-['Mulish']">Fecha de
                            Inicio:</label>
                        <div class="col-sm-5 mt-5">
                            <input type="date"
                                class="w-[394px] h-[70px] pl-[20px] pr-[20px] pt-[20px] pb-[20px] bg-neutral-800 rounded-[10px] justify-start items-center inline-flex text-white text-opacity-50 text-2xl font-normal font-['Inter']"
                                name="inicio" id="inicio" value="{{ old('inicio') }}" required>
                        </div>
                    </div>
                    <!-- Fin -->
                    <div class="mt-5">
                        <label for="fin" class="Nombre w-[304px] text-white text-2xl font-bold font-['Mulish']">Fecha de
                            Fin:</label>
                        <div class="col-sm-5 mt-5">
                            <input type="date"
                                class="w-[394px] h-[70px] pl-[20px] pr-[20px] pt-[20px] pb-[20px] bg-neutral-800 rounded-[10px] justify-start items-center inline-flex text-white text-opacity-50 text-2xl font-normal font-['Inter']"
                                name="fin" id="fin" value="{{ old('fin') }}" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-end mt-10">
                <a href="{{ url('convocatoria') }}" class=" pl-24 pr-24 mr-5 pt-6 pb-6 mt-5 w-[298px] h-26 bg-yellow-500 rounded-[25px] text-black text-3xl font-bold font-['Mulish']">Cancelar</a>
                <button class=" mt-5 w-[298px] h-20 bg-yellow-500 rounded-[25px] text-black text-3xl font-bold font-['Mulish']" type="submit">Crear Convocatoria</button>
            </div>

        </form>
    </div>

</x-app-layout>

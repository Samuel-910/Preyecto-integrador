<x-app-layout>
    @section('title', 'Placticante | Mas Informacion')

    <div class="w-[1200px] h-[full] relative bg-neutral-800 rounded-[15px]">
        <div class="flex justify-between ml-10 mr-10 mt-5">
            <div class="pt-10">
                <div class="text-white mb-4 text-[32px] font-bold font-['Mulish']">{{$convocatorias->convocatoria_titulo}}</div>
                <div class="text-white mb-4 text-2xl font-normal font-['Mulish']">{{$convocatorias->convocatoria_puesto}}</div>
                <div class="text-white mb-4 text-xl font-normal font-['Mulish']">
                    @php
                        $idEmpresa = $convocatorias->emp_id; // Reemplaza con la ID específica que estás buscando
                        $empresa = \App\Models\Empresa::find($idEmpresa);
                    @endphp

                    {{ $empresa ? $empresa->emp_nombre : 'Nombre no encontrado' }}
                </div>
            </div>
            <img class="Image7 w-[433px] h-[244px] rounded-[20px]" src="../img/card.jpg" />
        </div>

        <div class="Line3 w-[836px] h-[0px] m-10 border-2 border-white"></div>

        <div class="text-white text-2xl font-normal font-['Mulish'] ml-10 mb-5">Publicado el {{$convocatorias->created_at}}</div>
        <div class="text-white text-2xl font-normal font-['Mulish'] ml-10 mb-5">{{$convocatorias->convocatoria_vacantes}} Vacantes</div>

        <div class="flex">

            <div class="w-[49%] m-5">

                <div class="mb-5 text-white text-[32px] font-bold font-['Mulish']">REQUISITOS</div>

                <div class="mb-3 w-[378px] h-[58px] bg-#333841 border-l-8 border-blue-600 flex justify-center items-center">
                    <div class="text-white text-2xl font-['Mulish']">Formación Académica Mínima</div>
                </div>
                <div class="flex">
                    <div class="mt-1 mr-4 w-5 h-5 bg-sky-500 rounded-full"></div>
                    <div class="text-white text-2xl font-extralight font-['Mulish']">
                        @if ($convocatorias->convocatoria_forma_aca == 1)
                            Sin formación académica
                        @elseif ($convocatorias->convocatoria_forma_aca == 2)
                            Secundaria
                        @elseif ($convocatorias->convocatoria_forma_aca == 3)
                            Preparatoria
                        @elseif ($convocatorias->convocatoria_forma_aca == 4)
                            Técnico
                        @elseif ($convocatorias->convocatoria_forma_aca == 5)
                            Universitario
                        @elseif ($convocatorias->convocatoria_forma_aca == 6)
                            Postgrado
                        @endif
                    </div>
                </div>

                <div class="mt-10 mb-3 w-[378px] h-[58px] bg-#333841 border-l-8 border-blue-600 flex justify-center items-center">
                    <div class="text-white text-2xl font-['Mulish']">Experiencia</div>
                </div>
                <div class="flex">
                    <div class="mt-1 mr-4 w-5 h-5 bg-sky-500 rounded-full"></div>
                    <div class="text-white text-2xl font-extralight font-['Mulish']">
                        @if ($convocatorias->convocatoria_experiencia == 1)
                            Sin experiencia
                        @elseif ($convocatorias->convocatoria_experiencia == 2)
                            Menos de 1 año
                        @elseif ($convocatorias->convocatoria_experiencia == 3)
                            1-2 años
                        @elseif ($convocatorias->convocatoria_experiencia == 4)
                            2-5 años
                        @elseif ($convocatorias->convocatoria_experiencia == 5)
                            5-10 años
                        @elseif ($convocatorias->convocatoria_experiencia == 6)
                            Más de 10 años
                        @endif
                    </div>
                </div>

                <div class="mt-10 mb-3 w-[378px] h-[58px] bg-#333841 border-l-8 border-blue-600 flex justify-center items-center">
                    <div class="text-white text-2xl font-['Mulish']">Idiomas</div>
                </div>
                <div class="flex">
                    <div class="mt-1 mr-4 w-5 h-5 bg-sky-500 rounded-full"></div>
                    <div class="text-white text-2xl font-extralight font-['Mulish']">{{$convocatorias->convocatoria_idiomas}}</div>
                </div>

            </div>

            <div class="w-[2%] m-5">
                <div class="Line3 w-[0px] h-[423px] m-10 border-2 border-white"></div>
            </div>

            <div class="w-[49%] m-5 h-[full] relative">
                <div class="DescripciN left-[711px] top-[451px] text-white text-[32px] font-bold font-['Mulish']">DESCRIPCIÓN</div>
                <div class="flex">
                    <div class="mr-5 mt-1  w-5 h-5 left-[711px] top-[523px] bg-sky-500 rounded-full"></div>
                    <div class="w-[378px] left-[749px] top-[519px] text-white text-xl font-bold font-['Mulish']">{{$convocatorias->convocatoria_descripcion}}</div>
                </div>
                <div class="absolute bottom-0 right-0 mb-5 mr-5">
                    <button class="Rectangle152 w-[298px] h-24 left-[711px] top-[777px] bg-yellow-500 rounded-[25px] flex justify-center items-center " onclick="confirmPostular({{ $convocatorias->id }})">
                        <div class="Postular left-[729px] top-[795px] text-black text-5xl font-bold font-['Mulish']">POSTULAR</div>
                    </button>
                </div>
            </div>
        </div>
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



</x-app-layout>

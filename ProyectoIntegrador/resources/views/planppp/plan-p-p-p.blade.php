<x-app-layout>
    @section('title', 'Practicante | Plan PPP')
    <div class="bg-neutral-800 overflow-hidden shadow-xl sm:rounded-lg">
        <div class="text-white m-4 text-[32px] font-bold font-['Mulish']">Plan de Practicas PreProfesionales</div>
        <img class=" ml-8 w-[1200px] h-[414px]" src="img/plan.png" />
        <div class="flex">
            <div class="w-[50%]">
                <div class="flex m-8">
                    <div class="text-white text-2xl font-bold font-['Mulish']">VER EJEMPLO PLAN PPP <span class="text-red-600 text-2xl font-bold font-['Mulish']">*</span></div>
                    <button target="_blank" class="ml-8 mt-1 " id="openModal">
                        <i class="fa-solid fa-eye fa-2xl" style="color: white"></i>
                    </button>
                </div>
                <div class="flex m-8">
                    <div class="SubirPlanInicialPpp text-white text-2xl font-bold font-['Mulish']">SUBIR PLAN INICIAL PPP <span class="text-red-600 text-2xl font-bold font-['Mulish']">*</span></div>
                    <a href="{{ url('planppp/create') }}" class="ml-9 mt-1"><i class="fa-solid fa-file-arrow-up fa-2xl" style="color: white"></i></a>
                    <a href="{{ url('planppp/' . Auth::id() . '/edit') }}" class="ml-9 mt-1"><i class="fa-solid fa-file-pen fa-2xl" style="color: white"></i></a>
                    <form action="{{ url('planppp/' .  Auth::id()) }}" method="post" id="deleteForm">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="ml-9 mt-1" onclick="confirmDelete()"><i class="fa-solid fa-trash fa-2xl" style="color: white"></i></button>
                    </form>
                </div>
            </div>

            <div  class="w-[50%] m-8">
                <div class="Evidencias text-white text-2xl mb-4 font-bold font-['Mulish']">EVIDENCIAS <span class="text-red-600 text-2xl font-bold font-['Mulish']">*</span></div>
                <div class="flex ml-8 items-center space-x-20">
                    <a href="{{ route('evidencias.index') }}" class="ml-9 mt-1"><i class="fa-solid fa-list-check fa-2xl" style="color: white"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div id="pdfModal" class="fixed inset-0 overflow-y-auto hidden bg-black bg-opacity-50">
        <div class="flex items-center justify-center min-h-screen">
            <div class="bg-zinc-900 p-4 rounded-lg w-full max-w-2xl mx-auto">
                <iframe id="pdfIframe" class="w-full h-96" src="" frameborder="0"></iframe>
                <div class="mt-4 flex justify-end">
                    <button id="closeModal" class="px-4 py-2 bg-blue-500 text-white rounded focus:outline-none">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('openModal').addEventListener('click', function () {
            document.getElementById('pdfIframe').src = '{{ route('ver-pdf', ['nombre' => 'planppp']) }}';
            document.getElementById('pdfModal').classList.remove('hidden');
        });

        document.getElementById('closeModal').addEventListener('click', function () {
            document.getElementById('pdfModal').classList.add('hidden');
            document.getElementById('pdfIframe').src = '';
        });

        document.getElementById('closeModalButton').addEventListener('click', function () {
            document.getElementById('pdfModal').classList.add('hidden');
            document.getElementById('pdfIframe').src = '';
        });
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





<x-app-layout>
    @section('title', 'Practicante | Carta Presentacion')
    <div class="Frame8 w-[full] h-[750px] relative bg-neutral-800 rounded-[15px] flex-col justify-start items-start inline-flex">
        <div class="text-white m-4 text-[32px] font-bold font-['Mulish']">CARTA DE PRESENTACION</div>
        <img class="Image16 ml-8 w-[1200px] h-[414px] rounded-[20px]" src="img/432.webp" />
        <div class="Frame pl-5 pr-[186px] pt-[7px] pb-[5px] justify-start items-center gap-[361px] inline-flex mt-12 ml-20">
          <div class="GenerarCartaDePresentacion text-white text-2xl font-bold font-['Mulish']">GENERAR CARTA DE PRESENTACION<span class="text-red-600 text-2xl font-bold font-['Mulish']">*</span></div>
          <a href="{{ url('cartapresentacion/create') }}" class=" mt-1"><i class="fa-solid fa-file-circle-plus fa-2xl" style="color: #ffffff;"></i></a>
        </div>
        <div class="Frame pl-5 pr-[35px] pt-[11px] pb-[9px] justify-start items-center gap-[388px] inline-flex mt-12 ml-20">
          <div class="VerCartaDePresentacion text-white text-2xl font-bold font-['Mulish']">VER CARTA DE PRESENTACION</span><span class="text-red-600 text-2xl font-bold font-['Mulish']">*</span></div>
          <button target="_blank" class=" mt-1 " id="openModal">
            <i class="fa-solid fa-eye fa-2xl ml-10" style="color: white"></i>
        </button>
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
</x-app-layout>

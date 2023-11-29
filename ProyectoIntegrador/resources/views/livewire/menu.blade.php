<aside class=" top-0 left-0 z-40 w-64 h-100% transition-transform -translate-x-full border-r  sm:translate-x-0 bg-zinc-900 border-gray-700" aria-label="Sidebar">
<div class="h-full w-30px px-3 pb-4 overflow-y-auto bg-zinc-900">
    <ul class="space-y-2 font-medium mt-3">

        @can('Ver dashboard')
        <div>
            <x-nav-link class="text-white text-lg font-bold font-Mulish" href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                <i class="fa-solid fa-gauge-high mr-1"></i> {{ __('Inicio') }}
            </x-nav-link>
        </div>
        @endcan


        @can('convocatoriapracticante')
            <div>
                <x-nav-link href="{{ route('convocatorialist') }}" :active="request()->routeIs('convocatorialist')">
                    <i class="fa-solid fa-gauge-high mr-1"></i> {{ __('Convocatorias') }}
                </x-nav-link>
            </div>
        @endcan


        <div>
            <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                <i class="fa-solid fa-gauge-high mr-1"></i> {{ __('Sede') }}
            </x-nav-link>
        </div>

        <div>
            <x-nav-link href="{{ url('cartapresentacion') }}" :active="request()->routeIs('cartapresentacion')">
                <i class="fa-solid fa-gauge-high mr-1"></i> {{ __('Carta de presentacion') }}
            </x-nav-link>
        </div>

        <div>
            <x-nav-link href="{{ url('planppp') }}" :active="request()->routeIs('planppp')">
                <i class="fa-solid fa-gauge-high mr-1"></i> {{ __('Plan de PPP') }}
            </x-nav-link>
        </div>

        <div>
            <x-nav-link href="{{ route('documentos') }}" :active="request()->routeIs('documentos')">
                <i class="fa-solid fa-gauge-high mr-1"></i> {{ __('Documentos') }}
            </x-nav-link>
        </div>
        <div>
            <x-nav-link href="{{ url('convocatoria') }}" :active="request()->routeIs('convocatoria')">
                <i class="fa-solid fa-gauge-high mr-1"></i> {{ __('Convocatoria') }}
            </x-nav-link>
        </div>
    </ul>
</div>
</aside>

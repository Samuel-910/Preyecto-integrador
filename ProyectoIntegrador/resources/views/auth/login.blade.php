<x-guest-layout>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                {{ session('status') }}
            </div>
        @endif
                <div class="flex">
                    <img class="w-[50%] h-[695px] relative" src="img/login.png" />
                    <div class="w-[50%] h-[695px] relative bg-zinc-900 flex-col justify-center  flex items-center mx-auto">
                      <div class="Upeu text-white text-[40px] font-bold font-['Mulish']">UPeU</div>
                      <div class="BienvenidoDeVueltaSisppp text-white text-[32px] font-bold font-['Mulish']">Bienvenido de vuelta - SisPPP</div>
                      <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div>
                            <x-label for="email" class="mb-3 left-[18px] top-0 text-white text-3xl font-bold font-['Mulish']" value="{{ __('Correo electronico') }}" />
                            <x-input id="email"  class="IngrasaTuUsuario text-white text-opacity-50 text-2xl font-normal font-['Inter']" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Ingresa tu gmail" />
                        </div>

                        <div class="mt-4">
                            <x-label for="password" class="mb-3 left-[18px] top-0 text-white text-3xl font-bold font-['Mulish']" value="{{ __('Password') }}" />
                            <x-input id="password"  class=" text-white text-opacity-50 text-2xl font-normal font-['Inter']" type="password" name="password" required autocomplete="current-password" placeholder="Ingresa tu contraseña"/>
                        </div>

                        <div class="block mt-4">
                            <label for="remember_me" class="flex items-center">
                                <x-checkbox id="remember_me" name="remember" />
                                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                            </label>
                        </div>
                        <x-validation-errors class="mb-4" />
                        <div class="flex items-center justify-end mt-4 mb-5">
                            @if (Route::has('password.request'))
                                <a class="Password left-[280px] top-0 text-white text-opacity-50 text-2xl font-normal font-['Mulish']" href="{{ route('password.request') }}">
                                    {{ __('¿Has olvidado tu contraseña?') }}
                                </a>
                            @endif
                        </div>
                            <x-button>
                                    {{ __('Iniciar Secion') }}
                            </x-button>
                    </form>
                </div>

</x-guest-layout>

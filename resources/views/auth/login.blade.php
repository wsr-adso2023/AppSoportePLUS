<x-guest-layout>
    <x-authentication-card>
        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div>
                <x-label for="username" value="{{ __('Usuario') }}" />
                <x-input class="" id="username" type="text" name="username" :value="old('username')" autofocus autocomplete="Username" />     
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Contraseña') }}" />
                <x-input id="password" type="password" name="password" required autocomplete="Contrasena" />
            </div>

            <x-button>
                {{ __('Iniciar Sesion') }}
            </x-button>

            <div class="d-flex justify-content-center m-4">
                @if (Route::has('password.request'))
                    <a class="text-decoration-none text-nord10" href="{{ route('password.request') }}">
                        {{ __('¿Olvide mi Contraseña?') }}
                    </a>
                @endif
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
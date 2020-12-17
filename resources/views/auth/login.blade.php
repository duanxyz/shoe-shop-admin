<x-guest-layout>
    <div class="container mx-auto px-4 h-full">
        <div class="flex content-center items-center justify-center h-full">
            <div class="w-full lg:w-4/12 px-4">
                <x-jet-authentication-card>
                    {{-- <x-slot name="logo">
                        <x-jet-authentication-card-logo />
                    </x-slot> --}}

                    <x-jet-validation-errors class="mb-4" />

                    @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                    @endif

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="relative w-full mb-3">
                            <x-jet-label for="email" value="{{ __('Email') }}" />
                            <x-jet-input id="email" type="email" name="email" placeholder="{{ __('Email') }}"
                                :value="old('email')" required autofocus />
                        </div>

                        <div class="relative w-full mb-3">
                            <x-jet-label for="password" value="{{ __('Password') }}" />
                            <x-jet-input id="password" type="password" placeholder="{{ __('Password') }}"
                                name="password" required autocomplete="current-password" />
                        </div>

                        <div class="inline-flex items-center cursor-pointer">
                            <label for="remember_me" class="flex items-center">
                                <input id="remember_me" type="checkbox"
                                    class="form-checkbox text-gray-800 ml-1 w-5 h-5 ease-linear transition-all duration-150"
                                    name="remember">
                                <span class="ml-2 text-sm font-semibold text-gray-700">{{ __('Remember me') }}</span>
                            </label>
                        </div>

                        <div class="text-center mt-6">
                            <x-jet-button>
                                {{ __('Login') }}
                            </x-jet-button>
                        </div>
                    </form>
                </x-jet-authentication-card>
                <div class="flex flex-wrap mt-6 relative">
                    <div class="w-1/2">
                        @if (Route::has('password.request'))
                        <a class="text-gray-300" href="{{ route('password.request') }}">
                            <small>{{ __('Forgot your password?') }}</small>
                        </a>
                        @endif
                    </div>
                    <div class="w-1/2 text-right">
                        <a href="{{ route('register') }}" class="text-gray-300">
                            <small>Create new account</small>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>

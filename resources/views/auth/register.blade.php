<x-guest-layout>
    <div class="container mx-auto px-4 h-full">
        <div class="flex content-center items-center justify-center h-full">
            <div class="w-full lg:w-6/12 px-4">
                <div
                    class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-300 border-0">
                </div>
                <x-jet-authentication-card>

                    <x-jet-validation-errors class="mb-4" />

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="relative w-full mb-3">
                            <x-jet-label for="name" value="{{ __('Name') }}" />
                            <x-jet-input id="name" type="text" name="name" :value="old('name')" required autofocus
                                placeholder="{{ __('Name') }}" autocomplete="name" />
                        </div>

                        <div class="relative w-full mb-3">
                            <x-jet-label for="email" value="{{ __('Email') }}" />
                            <x-jet-input id="email" type="email" name="email" placeholder="{{ __('Email') }}"
                                :value="old('email')" required />
                        </div>

                        <div class="relative w-full mb-3">
                            <x-jet-label for="password" value="{{ __('Password') }}" />
                            <x-jet-input id="password" type="password" placeholder="{{ __('Password') }}"
                                name="password" required autocomplete="new-password" />
                        </div>

                        <div class="relative w-full mb-3">
                            <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                            <x-jet-input id="password_confirmation" type="password" name="password_confirmation"
                                placeholder="{{ __('Confirm Password')}}" required autocomplete="new-password" />
                        </div>

                        <div class="inline-flex items-center cursor-pointer">
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                {{ __('Already registered?') }}
                            </a>

                        </div>
                        <div class="text-center mt-6">
                            <x-jet-button>
                                {{ __('Register') }}
                            </x-jet-button>
                        </div>
                    </form>
                </x-jet-authentication-card>
            </div>
        </div>
    </div>
</x-guest-layout>

<div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-200 border-0">
    <div class="rounded-t mb-0 px-6 py-6">
        <div class="text-center mb-3">
            <h6 class="text-gray-600 text-sm font-bold">
                Sign in with
            </h6>
        </div>
        <div class="btn-wrapper text-center">
            <button
                class="bg-white active:bg-gray-100 text-gray-800 font-normal px-4 py-2 rounded outline-none focus:outline-none mr-2 mb-1 uppercase shadow hover:shadow-md inline-flex items-center font-bold text-xs ease-linear transition-all duration-150"
                type="button">
                <img alt="..." class="w-5 mr-1" src="{{ asset('img/github.svg') }}" />
                Github
            </button>
            <button
                class="bg-white active:bg-gray-100 text-gray-800 font-normal px-4 py-2 rounded outline-none focus:outline-none mr-1 mb-1 uppercase shadow hover:shadow-md inline-flex items-center font-bold text-xs ease-linear transition-all duration-150"
                type="button">
                <img alt="..." class="w-5 mr-1" src="{{ asset('img/google.svg') }}" />
                Google
            </button>
        </div>
        <hr class="mt-6 border-b-1 border-gray-400" />
    </div>
    <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
        <div class="text-gray-500 text-center mb-3 font-bold">
            <small>Or sign in with credentials</small>
        </div>
        {{ $slot }}
    </div>
</div>

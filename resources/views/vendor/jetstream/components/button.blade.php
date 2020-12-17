<button {{ $attributes->merge(['type' => 'submit', 'class' => 'bg-gray-900 text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg
outline-none focus:outline-none mr-1 mb-1 w-full ease-linear transition-all duration-150']) }}>
    {{ $slot }}
</button>

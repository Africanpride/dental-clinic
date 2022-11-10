<button {{ $attributes->merge(['type' => 'submit', 'class' => 'flex items-center justify-center w-full px-4 py-2 bg-blue-800 border border-transparent rounded-md font-semibold text-center text-xs text-white uppercase tracking-widest hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:ring ring-blue-300 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>

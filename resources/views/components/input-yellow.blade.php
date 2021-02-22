@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-yellow-400 border border-transparent rounded-md font-semibold text-xs text-black uppercase tracking-widest hover:bg-yellow-300 active:bg-yellow-400 focus:outline-none focus:border-yellow-300 focus:ring ring-yellow-200 disabled:opacity-25 transition ease-in-out duration-150']) !!}>
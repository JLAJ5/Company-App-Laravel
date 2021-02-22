@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['type' => 'submit', 'class' => 'underline inline-flex items-center px-4 py-2 bg-white border-style: none font-semibold text-sm text-red-600 tracking-widest hover:text-red-900 active:bg-red-900 focus:outline-none focus:border-red-900']) !!}>
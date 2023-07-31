<button {{ $attributes->merge(['type' => 'button','class' => 'alert'])}}  >
    {{ $slot }}
</button>
<button {{ $attributes->merge(['type' => 'submit', 'class' => 'w-[629px] h-[81px] pt-[25px] pb-[26px] bg-blue-600 hover:bg-blue-400 rounded-[10px] justify-center items-center inline-flex']) }}>
    {{ $slot }}
</button>

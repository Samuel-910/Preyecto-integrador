@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'w-[700px] h-[70px] pl-[18px] pr-[408px] pt-[21px] pb-5 bg-neutral-800 rounded-[10px] justify-start items-center inline-flex hover:bg-neutral-700']) !!}>

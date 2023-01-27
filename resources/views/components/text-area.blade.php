@props(['disabled' => false, 'field' => '', 'value' => ''])

<textarea {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-orange-500 focus:ring-orange-500 rounded-md shadow-sm']) !!}
>{{ $value }}</textarea>
@error($field)
<div class="text-red-600 text-sm">{{ $message }}</div>
@enderror

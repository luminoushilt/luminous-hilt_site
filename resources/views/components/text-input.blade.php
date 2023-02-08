@props(['disabled' => false, 'field' => ''])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-orange-500 focus:ring-orange-500 rounded-md shadow-sm']) !!}>
@error($field)
<div class="mb-2 text-red-600 text-sm"> {{ $message }} </div>
@enderror

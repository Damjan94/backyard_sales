<div id="jump_to_{{ $name }}" class="m-1 py-4 flex flex-col">
    <label for="{{ $name }}">{{ $labelText }}</label>
    {{ $slot }}
    <x-form.input_error field="{{ $name }}"/>
</div>
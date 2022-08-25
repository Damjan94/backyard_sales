<button type="submit" {{$attributes->merge(['class' => 'rounded-xl block px-1 flex items-center h-fit w-fit bg-red-400 hover:bg-red-300 hover:shadow-sm'])}}>
    {{$slot}}
</button>
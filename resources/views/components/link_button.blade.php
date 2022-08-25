<a  class="{{$attributes->get('class') . " rounded-xl block px-1 flex items-center h-fit w-fit bg-red-400 hover:bg-red-300 hover:shadow-sm "}}"
    href="{{ route($route, $parameters ?? '') }}">
    {{$slot}}
</a>
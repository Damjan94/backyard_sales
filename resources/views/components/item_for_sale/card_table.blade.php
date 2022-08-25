<div {{ $attributes->merge([ "class" => "flex flex-col items-center w-full justify-between hover:shadow-md sm:flex-row"]) }}>
    <a href="{{ route('item_for_sale.show', $item) }}"
       class="flex flex-col w-full items-center justify-between sm:flex-row">
    
        <img 
        width="50"
        height="50"
        src="{{ asset($item->photos[0]->path) }}"
        alt="{{$item->name}} photo"/>
        
        <p class="p-4">
            {{ $item->name }}
        </p>
        

        <div class=" p-4">
            <h4 class="text-sm p-1">{{ "location" }}</h4>
            <h4 class="text-sm p-1">{{ $item->created_at }}</h4>
        </div>

        <p class="p-4 hidden text-center md:line-clamp-4 md:w-4/6 md:block">
            {{ $item->description }}
        </p>

        <x-item_for_sale.price>{{ $item->price }}</x-item_for_sale.price>
    </a>
    @if((null !== auth()->user()) and (auth()->user()->id == $item->user_id))
        <div class="flex flex-nowrap items-center">
            <x-link_button route="item_for_sale.edit" :parameters="['item_for_sale' => $item]" class="mx-1">Edit</x-link_button>
            <form method="POST" action="{{route('item_for_sale.destroy', [$item])}}">
                @csrf
                @method('DELETE')
                <x-form.submit class="mx-1">Delete</x-form.submit>
            </form>
        </div>
    @endif
</div>

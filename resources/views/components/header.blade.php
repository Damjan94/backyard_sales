<header class="flex flex-col md:items-center md:justify-around md:h-16 md:flex-row">
    <x-logo/>

    <form action="{{ route('item_for_sale.search') }}" class="flex items-center border w-full md:w-2/5">
        <label class="sr-only" for="search">Type to search</label>
        <input id="search" type="search" placeholder="Search all" class="p-1 w-full" name="q"/>
        <input type="image" class="h-6" src="{{ url('magnifying-glass-svgrepo-com.svg') }}" alt="Search"/>
    </form>
    <div class="flex items-center justify-center w-full h-10 md:w-1/5  ">
        <x-link_button route="item_for_sale.create">Put item to sale</x-link_button>
    </div>
</header>
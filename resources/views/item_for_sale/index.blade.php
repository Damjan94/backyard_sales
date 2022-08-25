<x-main-layout>
    <div class="flex flex-col m-2 items-center md:w-11/12">
    @forelse($items_for_sale as $item_for_sale)
        <x-item_for_sale.card_table class="{{ $loop->even ? 'bg-gray-100' : 'bg-gray-200' }} hover:bg-gray-300"
                                    :item="$item_for_sale" />
    @empty
        <p>No items listed</p>
    @endforelse
    </div>
</x-main-layout>


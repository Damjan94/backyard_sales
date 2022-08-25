<x-main-layout>
    <x-form>    
        <form method="POST" action="{{ route('item_for_sale.update', ['item_for_sale' => $item_for_sale]) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <x-form.input_item name='name' labelText='What are you selling?'>
                <input id="name" name="name" value="{{$item_for_sale->name}}"/>
            </x-form.input_item>
            
            <x-form.input_item name='description' labelText='Provide some info about it.'>
                <textarea id=description" name="description">{{$item_for_sale->description}}</textarea>
            </x-form.input_item>
            
            <x-form.input_item name='price' labelText='How much does it cost?'>
                <div class="flex">
                    <input id="price" name="price" type="number" value="{{$item_for_sale->price}}"/>
                    <p class="px-1">€</p>
                </div>
            </x-form.input_item>
            
            <x-form.input_item name='photos' labelText='Add more photos.'>
                <input id="photos" name="photos[]" type="file" accept="image/*" multiple="true"/>
            </x-form.input_item>
            <x-form.submit>Update</x-form.submit>
        </form>
    </x-form>
</x-main-layout>
<x-main-layout>
    <x-form>    
        <form method="POST" action="{{ route('item_for_sale.store') }}" enctype="multipart/form-data">
            @csrf
            
            <x-form.input_item name='name' labelText='What are you selling?'>
                <input id="name" name="name" value="{{old('name')}}"/>
            </x-form.input_item>
            
            <x-form.input_item name='description' labelText='Provide some info about it.'>
                <textarea id=description" name="description">{{old('description')}}</textarea>
            </x-form.input_item>
            
            <x-form.input_item name='price' labelText='How much does it cost?'>
                <div class="flex">
                    <input id="price" name="price" type="number" value="{{old('price')}}"/>
                    <p class="px-1">€</p>
                </div>
            </x-form.input_item>
            
            <x-form.input_item name='photos' labelText='Provide the photos.'>
                <input id="photos" name="photos[]" type="file" accept="image/*" multiple="true"/>
            </x-form.input_item>
            <x-form.submit>Sell it</x-form.submit>
        </form>
    </x-form>
</x-main-layout>
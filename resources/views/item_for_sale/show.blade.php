<x-main-layout>
    <div class="m-5">
        <div class="flex justify-start items-center">
            <div class="p-3">
                <img src="{{ asset($item_for_sale->photos[0]->path) }}"
                 alt="{{$item_for_sale->name}} image"
                 class="p-3 w-28"/>

                
            </div>
            
            <div class="p-3">
                <p class="inline">Price: </p>
                <x-item_for_sale.price class="inline">{{$item_for_sale->price}}</x-item_for_sale.price>
                <p class"inline">Phone number: {{$item_for_sale->user->phone_number}}</p>
            </div>
        </div>
        
        <p>{{ $item_for_sale->description }}</p>

        <div>
            <img id="main_image" src="{{ asset($item_for_sale->photos[0]->path) }}"/>
            <div class="flex">
                @foreach($item_for_sale->photos as $photo)
                    <img class="photo p-2 m-1 w-16 object-scale-down cursor-pointer hover:opacity-75" src="{{ asset($photo->path) }}"/>
                @endforeach
            </div>
        </div>
    </div>
    
    <script>
        const all_photos = document.getElementsByClassName('photo');
        const main_photo = document.querySelector('#main_image');
        
        //When a small photo is clicked, change the big photo to display the small photo
        for(const photo of all_photos) {
            photo.addEventListener('click', (event) => {
                main_photo.src = photo.src;
            });
        }
    </script>
</x-main-layout>
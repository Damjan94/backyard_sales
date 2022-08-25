<footer class="flex flex-col justify-around items-center h-52 md:h-auto md:flex-row">
    <div class="flex flex-col items-center justify-center sm:flex-row">
        <x-logo/>

        <div class="p-2 text-sm">
            <p>{{$user_count}} registered users</p>
            <p>{{$item_for_sale_count}} listed items</p>
        </div>
    </div>
    
    <div>
        <h2 class="text-lg">Useful info</h2>
        <div class="flex-row text-sm">
            <a class="block" href="{{ route('about') }}">About us</a>
        </div>
    </div>
    
    <div>
        <h2 class="text-lg">Community</h2>
        <div class="flex items-center">
            <a href="#">
                <img src="{{ url('iconmonstr-github-1.svg') }}" alt="github"/>
            </a>
        </div>
    </div>
    
    
</footer>
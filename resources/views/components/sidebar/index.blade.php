<div class="flex flex-col items-center m-5 border p-3 w-full md:w-1/5">
    @auth
        <x-sidebar.clickable.link link="{{route('item_for_sale.own')}}" text="My items on sale"/>
        <x-sidebar.clickable.post link="{{route('logout')}}" text="Log out"/>
    @endauth
    
    @guest
        <x-sidebar.clickable.link link="{{ route('register') }}" text="Register"/>
        <x-sidebar.clickable.link link="{{ route('login') }}" text="Log in"/>
    @endguest

    
</div>
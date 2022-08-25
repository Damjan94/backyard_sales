<form method="POST" action="{{$link}}">
    @csrf
    <button type="submit">{{$text}}</button>
</form>
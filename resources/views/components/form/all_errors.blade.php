
@if($errors->any())
    <div class="border-8 border-red-400 w-fit">
        @foreach($errors->getMessages() as $field => $error)
            <a href="#jump_to_{{ $field }}" class="block p-2 text-lg font-bold">{{end($error)}}</a>
        @endforeach
    </div>
@endif
<x-form.input_item name='email' :labelText="__('Email')">
    <input id="email"
             type="email" 
             name="email" 
             value="{{old('email')}}" 
             required/>
</x-form.input_item>
@props(['name','type'=>'text'])
<x-form.label name="{{$name}}"/>
<input class="form-control mt-3" type="{{$type}}" name="{{$name}}" value="{{old($name)}}" placeholder="{{$name}}" id="">
<x-form.eror name="{{$name}}"/>
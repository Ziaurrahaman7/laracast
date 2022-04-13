
@props(['name'])
<x-form.label name="{{$name}}"/>
<textarea class="form-control mt-3" type="text" name="{{$name}}" placeholder="{{$name}}"  id="">{{old($name)}}</textarea>
<x-form.eror name="{{$name}}"/>



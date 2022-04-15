@include('post.header')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
			<x-setting hedding="Create Post">
			<x-panel>
<form action="/post/admin/create" method="POST" enctype="multipart/form-data">
                @csrf
                <x-form.input name="title"/>
                <x-form.input name="slug"/>
                <x-form.input name="image" type="file"/>
                <x-form.textarea name="excrept"/>
                <x-form.label name="category"/>
              <select name="categorie_id" class="form-select mt-3 form-control">
                  @foreach (\App\Models\Categorie::all() as $category)
                  <option value="{{$category->id}}" {{old('categorie_id')== $category->id ? 'selected' : ''}}>{{ucwords($category->name)}}</option>
                  @endforeach
              </select>
              <x-form.textarea name="body"/>
               <x-form.button>Submit</x-form.button>

            </form>
</x-panel>
			</x-setting>
        </div>
    </div>
</div>
@include('post.footer')
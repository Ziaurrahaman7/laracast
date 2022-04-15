@include('post.header')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
			<x-setting :hedding="'Update Post:'.$post->title">
<form action="/post/admin/{{$post->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <x-form.input name="title" :value="old('title',$post->title)"/>
                <x-form.input name="slug" :value="old('slug',$post->slug)"/>
                <x-form.input name="image" type="file"  :value="old('image',$post->image)"/>
                <img src="/storage/app/{{$post->image}}">
                <x-form.textarea name="excrept">{{old('excrept',$post->excrept)}}</x-form.textarea>
                <x-form.label name="category" :value="old('title',$post->excrept)"/>
              <select name="categorie_id" class="form-select mt-3 form-control">
                  @foreach (\App\Models\Categorie::all() as $category)
                  <option value="{{$category->id}}" {{old('categorie_id', $post->categorie_id)== $category->id ? 'selected' : ''}}>{{ucwords($category->name)}}</option>
                  @endforeach
              </select>
              <x-form.textarea name="body">{{old('body',$post->body)}}</x-form.textarea>
               <x-form.button>Update</x-form.button>

            </form>
			</x-setting>
        </div>
    </div>
</div>
@include('post.footer')
@include('post.header')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="/post/admin/create" method="POST" enctype="multipart/form-data">
                @csrf
                <input class="form-control mt-3" type="text" name="title" value="{{old('title')}}" placeholder="title" id="">
                @error('title')
                  <p style="color:red">{{$message}}</p>  
                @enderror
                <input class="form-control mt-3" type="text" name="slug" value="{{old('slug')}}" placeholder="slug" id="">
                @error('slug')
                  <p style="color:red">{{$message}}</p>  
                @enderror
                <input class="form-control mt-3" type="file" name="image">
                @error('image')
                  <p style="color:red">{{$message}}</p>  
                @enderror
                <textarea class="form-control mt-3" type="text" name="excrept" placeholder="excrept"  id="">{{old('excrept')}}</textarea>
                @error('excrept')
                <p style="color:red">{{$message}}</p>  
              @enderror
              <select name="categorie_id" class="form-select mt-3">
                  @foreach (\App\Models\Categorie::all() as $category)
                  <option value="{{$category->id}}" {{old('categorie_id')== $category->id ? 'selected' : ''}}>{{ucwords($category->name)}}</option>
                  @endforeach
              </select>
                <input class="form-control mt-3"  type="body" value="{{old('body')}}" name="body" placeholder="body" id="">
                @error('body')
                <p style="color:red">{{$message}}</p>  
              @enderror
                <input class="btn btn-info mt-3" type="submit" vlue="submit" id="">
                @foreach ($errors as $error )
                   <li>{{$error}}</li> 
                @endforeach

            </form>
        </div>
    </div>
</div>
@include('post.footer')
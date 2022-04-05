@include('post.header')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="" method="POST">
                @csrf
                <input class="form-control mt-3" type="text" name="username" value="{{old('username')}}" placeholder="username" id="">
                @error('username')
                  <p style="color:red">{{$message}}</p>  
                @enderror
                <input class="form-control mt-3" type="text" value="{{old('name')}}" name="name" placeholder="name"  id="">
                @error('name')
                <p style="color:red">{{$message}}</p>  
              @enderror
                <input class="form-control mt-3"  type="email" value="{{old('email')}}" name="email" placeholder="email" id="">
                @error('email')
                <p style="color:red">{{$message}}</p>  
              @enderror
                <input class="form-control mt-3" type="password" value="{{old('password')}}"  placeholder="password" name="password" id="">
                @error('password')
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
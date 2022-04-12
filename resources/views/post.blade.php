@include('post.header')

        @foreach ($post as $pt )
        <h3>{{$pt->title}}</h3>
        <img src="{{asset('storage/'.$pt->image)}}" alt="">
        <p> <a href="/author/{{$pt->author->username}}">{{$pt->author->name}}</a> in <a href="/categorie/{{$pt->categorie->slug}}">{{$pt->excrept}}</a></p>
        <p>{{$pt->body}}</p>
        <a href="/">Go Back</a>
        <hr>

    @endforeach
    {{$post->links()}}
    <h1>
        @if (session()->has('success'))
        <div x-data="{show: true}" x-init="setTimeout(() => show = false, 5000)" x-show="show" class="alert alert-primary" role="alert">
           {{session()->get('success')}}
          </div>
          @endif
    </h1>
   <form action="/newslatter" method="POST">
        @csrf
        <input type="email" name="email" class="form-control">
        @error('email')
            {{$message}}
        @enderror
        <input type="submit" class="btn btn-info" value="subscribed">
    </form>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@2.8.2/dist/alpine.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
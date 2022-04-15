@include('post.header')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="login" method="POST">
                @csrf
               
               <x-form.input name="email" type="email"/>
               <x-form.input name="password" type="password"/>
               <x-form.button>Register</x-form.button>
                @foreach ($errors as $error )
                   <li>{{$error}}</li> 
                @endforeach

            </form>
        </div>
    </div>
</div>
@include('post.footer')
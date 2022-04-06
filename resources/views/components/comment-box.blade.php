

<section style="background: #ededed">
    <div class="container">
        <div class="row">
            <div class="col-12">

                
                @auth
                <form method="POST" action="comment">
                    @csrf
                    <div class="form-group">
                        <img class="mr-3" src="https://i.pravatar.cc/50?img={{Auth()->id()}}" alt="Generic placeholder image">
                    <textarea name="body" id="" cols="30" rows="10" required placeholder="Whant to participate?"></textarea>
                  <p style="color:red">  @error('body')
                    {{$message}} 
                 @enderror</p>
                    <input type="submit" class="btn btn-info" value="Post">
                    </div>
                </form>
                @else 
                <a href="/register">Sign up</a> or <a href="/login">Login</a> for comment
                @endauth

            </div>
        </div>
    </div>
</section>

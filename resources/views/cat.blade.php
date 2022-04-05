@include('post.header')
    @foreach ($posts as $pt )
    <h3>{{$pt->title}}</h3>
    <p> <a href="http:#">{{$pt->author->username}}</a> in <a href="/categorie/{{$pt->categorie->slug}}">{{$pt->excrept}}</a></p>
    <p>{{$pt->body}}</p>
    <a href="/">Go Back</a>
    <hr>
    @endforeach
  
</body>
</html>


@props(['comment'])

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            
            <div class="media">
                <img class="mr-3" src="https://i.pravatar.cc/80?img={{$comment->id}}" alt="Generic placeholder image">
                <div class="media-body">
                    <p>{{$comment->created_at->diffforhumans()}}</p>
                  <h5 class="mt-0">{{$comment->author->username}}</h5>
                  {{$comment->body}}
                </div>
              </div>
        </div>
    </div>
</div>
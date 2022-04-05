
<form action="">
    <input name="search" value="{{request('search')}}"type="text">
  
        
        <select name="categorie" id="">
            @foreach ($post as $pt )
            <option value="{{$pt->categorie->slug}}">{{$pt->categorie->slug}}</option>
            @endforeach
        </select>
       
      <input type="submit" value="submit"> 
    
</form>
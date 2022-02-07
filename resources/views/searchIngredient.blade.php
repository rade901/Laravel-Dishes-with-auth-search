@section('title', __('search'))
<div class="container pt-5">
  @if($dish->count() > 0)
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="card">
          <div class="card-body">
              <h3>Add New Ingredient for Dish</h3>
              <form action="dish_ingredient" method="POST">
                @csrf
                  <div class="form-group">
                    <label for="Input">Dish_id</label>
                    <input type="number" name="dish_id" class="form-control" placeholder="dish">
                  </div>
                  <div class="form-group">
                    <label for="input">Ingredient_id</label>
                    <input type="number" name="ingredient_id" class="form-control" placeholder="Ingredients id">
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
          </div>
        </div>
      </div>
      <div class="col">
       
      </div>
      <div class="col">
        
      </div>
    </div>
  </div>
  <div class="container pt-5">
  <h1>Searching Result...</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Category</th>
            <th scope="col">Ingredient</th>
            <th scope="col">Created</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($dish as $d )
          <tr>
            <th scope="row">{{$d->id}}</th>
              <td>{{Str::title($d->title)}}</td>  
               <td>{{Str::title($d->description)}}</td>
               @if ($d->category == null)
               <td>No category</td>
               @else
               <td>{{Str::title($d->category->title)}}</td>
               @endif
               <td>
                @foreach($DiIn as $dishIngredient)
                @foreach($ingredientColl as $ingredient)
                @if ($dishIngredient->dish_id == $d->id && $dishIngredient->ingredient_id == $ingredient->id)
                {{$ingredient->title}}
                @endif
                @endforeach
                @endforeach
                <td>{{$d->created_at->diffForHumans()}}</td>
                <td> <form action="dish/{{$d->id}}" method="POST">
                  @csrf
      
                  <button type="submit" class="btn btn-danger">Delete</button>
      
                </form></td>
               
               
                
                @endforeach
           
          </tr>
        </tbody>
      </table>
  </div>
  @endif
  @if($ingredients->count() > 0)
    <h1>Searching Result...</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Slug</th>
            <th scope="col">Created</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          
          @foreach ($ingredients as $i )

          <tr>
            <th scope="row">{{$i->id}}</th>
            <td>{{Str::title($i->title)}}</td>  
             <td>{{Str::slug($i->slug)}}</td>
             <td>{{$i->created_at->diffForHumans()}}</td>
             <td>action</td>
            @endforeach
            @endif
            @if($category->count() > 0)
            <h1>Searching Result...</h1>
           <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Slug</th>
            <th scope="col">Created</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach($category as $cat)
          <tr>
            <th scope="row">{{$cat->id}}</th>
              <td>{{Str::title($cat->title)}}</td>  
               <td>{{Str::slug($cat->slug)}}</td>
               <td>{{$cat->created_at->diffForHumans()}}</td>
               <td>action</td>
           @endforeach
            @endif
          </tr>  
    </div>
    
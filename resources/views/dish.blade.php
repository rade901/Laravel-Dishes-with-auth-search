@section('title', __('Dish'))

<div>
    {{ __('You are in dish section!') }}
</div>

<div class="container pt-5">
  <div class="row">
    <div class="col-sm">
      <div class="card">
          <div class="card-body">
              <h3>Add New Dish</h3>
              <form form action="dish" method="POST">
                @csrf
                  <div class="form-group">
                    <label for="Input">Title</label>
                    <input type="text" class="form-control" name="title"  placeholder="Enter title">
                  </div>
                  <div class="form-group">
                    <label for="input">Description</label>
                    <input type="text" class="form-control" name="description" placeholder="Description">
                  </div>
                  <div class="form-group">
                    <label class="form-label">Category</label>
                    <select name="category_id" class="form-select" aria-label="Default select example">
                      <option selected>Open this select menu</option>
    
    
                      @foreach($category as $cat)
                      <option value="{{$cat->id}}">{{$cat->title}}</option>
                      @endforeach
                    </select>
    
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
          </div>
        </div>
    </div>
    <div class="col-sm">
      
    </div>
    <div class="col-sm">
      
    </div>
  </div>
</div>
<div class="container pt-5">
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Title</th>
        <th scope="col">Description</th>
        <th scope="col">Category</th>
        <th scope="col">Ingredients</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($dish as $d )
      <tr>
        <th scope="row">{{$d->id}}</th>
          <td>{{Str::title($d->title)}}</td>  
           <td>{{Str::title(Str::limit($d->description,15))}}</td>
           @if ($d->category == null)
           <td>No category</td>
           @else
           <td>{{Str::title($d->category->title)}}</td>
           @endif
           <td>
            @foreach($DiIn as $dishIngredient)
            @foreach($ingredients as $ingredient)
            @if ($dishIngredient->dish_id == $d->id && $dishIngredient->ingredient_id == $ingredient->id)
            {{$ingredient->title}}
            @endif
            @endforeach
            @endforeach
           <td> <form action="dish/{{$d->id}}" method="POST">
            @csrf

            <button type="submit" class="btn btn-danger">Delete</button>

          </form></td>
        @endforeach
      </tr>
    </tbody>
  </table>
  {{ $dish->links() }} 
</div>

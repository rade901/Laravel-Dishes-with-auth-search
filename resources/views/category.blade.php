@section('title', __('Category'))


<div>
    {{ __('You are in Category!') }}
</div>
<div class="container pt-5">
    <div class="row">
      <div class="col">
        <div class="card">
            <div class="card-body">
                <h3>Add New Category</h3>
                <form form action="category" method="POST">
                  @csrf
                    <div class="form-group">
                      <label for="Input">Title</label>
                      <input type="text" class="form-control" name="title"  placeholder="Enter title">
                    </div>
                    <div class="form-group">
                      <label for="input">Slug</label>
                      <input type="text" class="form-control" name="slug" placeholder="Slug">
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
               <td> <form action="category/{{$cat->id}}" method="POST">
                @csrf
    
                <button type="submit" class="btn btn-danger">Delete</button>
    
              </form></td>
           @endforeach
          </tr>
        </tbody>
      </table>
      {{ $category->links() }}
    </div>
@section('title', __('Ingredient'))


<div>
    {{ __('You are in Ingredient !') }}
</div>
<div class="container pt-5">
    <div class="row">
      <div class="col">
        <div class="card">
            <div class="card-body">
                <h3>Add New Ingredient</h3>
                <form form action="ingredient" method="POST">
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
          @foreach ($ingredients as $i )
          <tr>
            <th scope="row">{{$i->id}}</th>
            <td>{{Str::title($i->title)}}</td>  
             <td>{{Str::slug($i->slug)}}</td>
             <td>{{$i->created_at->diffForHumans()}}</td>
             <td>action</td>
            @endforeach
           
           
          </tr>
        </tbody>
      </table>
      {{ $ingredients->links() }}
    </div>
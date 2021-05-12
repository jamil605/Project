
@extends('layouts.app')
@section('content')
 <h1>Create Post</h1>   
 <form action="App/Http/Controllers/PostController@store" method="POST" type="hidden">
    @csrf
    <div class="form-group">
        <label for="title">Post title</label> 
        <input type="title" class="form-control"  placeholder="Post title" required>
    </div>
         <br><br>
         <div class="form-group">
         <label for="body">Body</label>      
         <textarea class="form-control" rows="14" required></textarea>
         </div>
         <br><br>
         <div class="form-group">
            <input type="file" class="form-control-file">
        </div>
        <button class="btn btn-primary" type="submit">Create</button>
    </div>
</form>
@endsection

@endsection
@extends('layouts.app') 
@section('content') @push('scripts')


<div class="container">
  <div class="row">
    <div class="col-12">
      <form action="{{route('posts.store')}}" method="POST">
        {{csrf_field()}}
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" name="title" class="form-control" placeholder="Post Title">
        </div>
        <div class="form-group">
          <label for="category">Category</label>
          <select name="category" id="" class="form-control">
            <option value="php">PHP</option>
            <option value="laravel">laravel</option>
          </select>
        </div>
        <div class="form-group">
          <label for="content">Content</label>
          <textarea name="content" id="editor" cols="30" rows="10"></textarea>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-success">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>
<script src="{{asset('ckeditor/ckeditor.js')}}"></script>

<script src="{{asset('ckfinder/ckfinder.js')}}"></script>
<script>
  var editor = CKEDITOR.replace('editor');
  CKFinder.setupCKEditor( editor );

</script>





















@endpush
@endsection

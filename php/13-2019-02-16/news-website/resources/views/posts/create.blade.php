@extends('layouts.app') 
@section('content') @push('scripts')


<div class="container">
  <div class="row">
    <div class="col-12">
      <textarea name="editor" id="editor" cols="30" rows="10"></textarea>
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

@extends('layouts.app') 
@section('content')
<form action="">
  <textarea name="editor" id="editor" cols="30" rows="10">fsdf</textarea>

</form>
@endsection
 @push('scripts')
<script src="{{asset('/ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('/ckfinder/ckfinder.js')}}"></script>
<script>
  CKEDITOR.replace('editor',{
    filebrowserBrowseUrl: '{{asset('/ckfinder/ckfinder.html')}}',
     filebrowserImageBrowseUrl: '{{asset('/ckfinder/ckfinder.html?type=Images')}}',
     filebrowserUploadUrl: '{{asset('/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files')}}',
     filebrowserImageUploadUrl: '{{asset('/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images')}}'
  });
  // CKFinder.setupCKEditor( editor );

</script>




























































@endpush

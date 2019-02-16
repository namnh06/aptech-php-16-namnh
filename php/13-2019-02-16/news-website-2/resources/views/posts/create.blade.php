@extends('layouts.app') 
@section('content')
<textarea name="editor" id="editor" cols="30" rows="10"></textarea>
@endsection
 @push('scripts')
<script src="{{asset('ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('ckfinder/ckfinder.js')}}"></script>
<script>
  // CKEDITOR.replace('editor');
  var editor = CKEDITOR.replace( 'editor' );
CKFinder.setupCKEditor( editor );

// CKEDITOR.replace('editor',{
//   // fileb....
// })

</script>













@endpush

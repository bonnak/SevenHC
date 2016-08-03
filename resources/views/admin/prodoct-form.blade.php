@extends('_layouts.admin')

@section('content')
<div id="summernote"></div>
@stop

@section('script')
<script>
  $(document).ready(function() {
      $('#summernote').summernote({height: 300});
  });
</script>
@stop
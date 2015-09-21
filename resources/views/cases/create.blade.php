@extends('app')
@section('content')
<form class="">

 <div class="form-group">
  <label class="form-label">Type</label>
  <select name="case_type" class="form-control">
   <option>Select type</option>  
  </select>
 </div>
 
  <div class="form-group">
  <label class="form-label">Subject</label>
  <input name="case_subject" class="form-control">
 </div>

 <div class="form-group">
  <label class="form-label">Type</label>
  <textarea name="case_description" class="form-control"> </textarea>
 </div>
 
   <div class="form-group">
    <label for="exampleInputFile">File input</label>
    <input type="file" id="exampleInputFile" class="form-control">
    <p class="help-block">Example block-level help text here.</p>
  </div>
 
  <div class="form-group">
   <button type="submit" name="case_submit" class="btn btn-custom">Create ticket</button>
 </div>
</form>

@endsection
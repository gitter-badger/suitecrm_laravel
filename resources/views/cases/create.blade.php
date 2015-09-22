@extends('app')
@section('content')
<form class="">

 <div class="form-group">
  <label for="case_type" class="form-label"><?php echo Lang::get('aop.case_type');?></label>
  <select name="case_type" id="case_type" class="form-control">
   <option>Select type</option>  
  </select>
 </div>
 
  <div class="form-group">
  <label for="case_subject" class="form-label"><?php echo Lang::get('aop.case_subject');?></label>
  <input name="case_subject" id="case_subject" class="form-control">
 </div>

 <div class="form-group">
  <label for="case_message" class="form-label"><?php echo Lang::get('aop.case_description');?></label>
  <textarea name="case_message" id="case_message" class="form-control" rows="5"></textarea>
 </div>
 
   <div class="form-group">
    <label for="case_file"><?php echo Lang::get('aop.case_add_file');?></label>
    <input type="file" id="case_file" class="form-control">
  </div>
 
  <div class="form-group">
   <button type="submit" name="case_submit" class="btn btn-custom"><?php echo Lang::get('aop.create_case');?></button>
 </div>
</form>

@endsection
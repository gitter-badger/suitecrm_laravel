@extends('app')

@section('content')
<div class="row">
<div class="col-md-12">
<form action="" method="POST" role="form" class="form-inline">
    <div class="form-group"> 
        <label class="sr-only">Type</label>  
        <select name="type" class="form-control ">
            <option value="" selected="">Filter by type</option>
            <option value="administration">Administration</option>
            <option value="Technical">Technical</option>            
        </select>
    </div>
    
    <div class="form-group"> 
        <label class="sr-only">status</label>  
        <select name="status" class="form-control">
            <option value="" selected="">Filter by status</option>
            <option value="open">Open</option>
            <option value="closed">Closed</option>            
        </select>
    </div>  
    <button type="submit" class="btn btn-custom ">Search</button>
</form>
</div>
</div>

<div class="clearfix">&nbsp;</div>
<div class="clearfix">&nbsp;</div>

<div class="row">
<div class="col-md-12">
<table class="table table-bordered table-striped">
 <thead>
  <tr>
      <th class="col-md-2">Case number</th>  
   <th>Subject</th>  
   <th class="col-md-2">Status</th>  
  </tr>
 </thead>   
  <tbody>
   <tr>
    <td>1</td>
    <td><a href="{{url('cases/read')}}">Case creation</a></td>
    <td>Open</td>
   </tr> 
   <tr>
     <td>2</td>
     <td><a href="{{url('cases/read')}}">I did not receive my invoice</a></td>
     <td>Open</td>
   </tr>                                             
  </tbody>
</table>
</div>
</div>    
@endsection

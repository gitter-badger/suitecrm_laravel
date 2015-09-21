@extends('app')
@section('content')
<div class="row">
<div class="col-md-12">
<form action="" method="POST" role="form" class="form-inline">
    <div class="form-group"> 
        <label class="sr-only">Type</label>  
        <select name="type" class="form-control">
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
            <option value="inprogress">In Progress</option>            
            <option value="closed">Closed</option>            
        </select>
    </div>  
    <button type="submit" class="btn btn-custom ">Search</button>
    <a href="{{url('cases/create')}}" class="btn btn-success"><i class="fa fa-plus"></i> Create case</a>
</form>
</div>
</div>

<div class="clearfix">&nbsp;</div>
<div class="clearfix">&nbsp;</div>

<div class="row">
<div class="col-md-12">
<table class="table table-striped">
 <thead>
  <tr>
   <th class="col-md-2">Case number</th>  
   <th class="col-md-2">Type</th>
   <th>Subject</th>  
   <th class="col-md-2">Status</th>  
  </tr>
 </thead>   
  <tbody>
   <tr>
    <td><a href="{{url('cases/read')}}">#1</a></td>
    <td>Support</td>
    <td><a href="{{url('cases/read')}}">Case creation</a></td>
     <td><p class="badge progress-bar-success">Open</p></td>
   </tr> 
   <tr>
     <td><a href="{{url('cases/read')}}">#2</a></td>
     <td>Administration</td>     
     <td><a href="{{url('cases/read')}}">I did not receive my invoice</a></td>
     <td><p class="badge progress-bar-success">Open</p></td>
   </tr>                                             
  </tbody>
</table>
</div>
</div>    
@endsection

@extends('app')
@section('content')
<h2>Case - #5864452</h2>
<div class="bottom case-header">
      <span class="pull-right">
      <button type="button" data-toggle="modal" data-target="#CloseCase" data-backdrop="false"  class="btn btn-custom btn-sm">Close ticket</button>  
      </span>
      
        <div class="modal" id="CloseCase" tabindex="-1" role="dialog" aria-labelledby="CloseCase">
       <div class="modal-dialog" role="document">
         <div class="modal-content">
          <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
           <h4 class="modal-title" id="">Close case</h4>
          </div>
        <div class="modal-body">
        Are you sure you want to close this case?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-custom"><?php echo Lang::get('aop.save');?></button>
      </div>
    </div>
  </div>
</div> 

    <ul class="list-unstyled padding">
    <li class="row">
      <strong class="col-md-3">Case number</strong>
      <div class="col-md-7">5864452</div>
    </li>
    <li class="row">
      <strong class="col-md-3">Subject</strong>
      <div class="col-md-7">
        Waar kan ik een dns record wijzigen?
      </div>
    </li>
    <li class="row">
       <strong class="col-md-3">Date created</strong>
      <div class="col-md-7">20/09/2015 2:04 AM</div>
    </li>
    <li class="row">
      <strong class="col-md-3">Last modified</strong>
      <div class="col-md-7">20/09/2015 2:04 AM</div>
    </li>
    <li class="row">
      <strong class="col-md-3">Status</strong>
      <div class="col-md-7">Open</div>
    </li>

    <li class="row">
      <strong class="col-md-3">Contact</strong>
      <div class="col-md-7">Mr. Hermans Glenn</div>
    </li>
   </ul>
  </div>
  <div class="clearfix">
        <div class="pull-right">
<button id="expandAll" href="#" class="btn btn-custom btn-sm" role="button">Expand All</button>
<button id="collapseAll" href="#" class="btn btn-custom btn-sm" role="button">Collapse All</button>
        </div>
    </div>
<div id="accordion" class="panel-group case-items">
  <div class="panel panel-default">
  <div class="panel-heading tocustomer">
    <div class="panel-title">
      <a data-toggle="collapse" data-parent="#accordion" href="#collapse_645749">
                  <span class="indicator glyphicon glyphicon-chevron-down pull-right">
          </span>
                <span class="glyphicon glyphicon-envelope read">
        </span>
                <strong class="author">SuiteCRM administrator</strong>
        <span class="date">20/09/2015 2:04 AM</span>
      </a>
    </div>
  </div>
  <div id="collapse_645749" class="panel-collapse collapse in">
    <div class="case-message ">
      <div class="case-message-content">
          <p> Beste heer Hermans Glenn,<br />
<br />
Bedankt voor uw mail.<br />
<br />
Het wijzigen van DNS records dient te geschieden door de klant zelfs via het control panel.<br />

          </p>

       </div>

          </div>
  </div>
</div>
    </div>          
    
<script type="text/javascript">
$(function () {			
                    $('a[data-toggle="collapse"]').on('click',function(){
				
				var objectID=$(this).attr('href');
				
				if($(objectID).hasClass('in'))
				{
                                    $(objectID).collapse('hide');
				}
				
				else{
                                    $(objectID).collapse('show');
				}
                    });
                    
                    
                    $('#expandAll').on('click',function(){
                        
                        $('a[data-toggle="collapse"]').each(function(){
                            var objectID=$(this).attr('href');
                            if($(objectID).hasClass('in')===false)
                            {
                                 $(objectID).collapse('show');
                            }
                        });
                    });
                    
                    $('#collapseAll').on('click',function(){
                        
                        $('a[data-toggle="collapse"]').each(function(){
                            var objectID=$(this).attr('href');
                            $(objectID).collapse('hide');
                        });
                    });
                    
		});

$('#CloseCase').appendTo("body")		
</script>   
@endsection

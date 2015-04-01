@extends('app')

@section('content')
<h2>Case - #5864452</h2>
<div class="bottom case-header">
      <span class="pull-right">
      <button class="btn btn-custom btn-sm">Close ticket</button></span>
    <ul class="list-unstyled padding">
    <li class="row">
      <strong class="col-md-3">Case number</strong>
      <div class="col-md-7">1</div>
    </li>
    <li class="row">
      <strong class="col-md-3">Subject</strong>
      <div class="col-md-7">
        [NL]Suggesties voor nieuwe functionaliteiten      
      </div>
    </li>
    <li class="row">
       <strong class="col-md-3">
        Date created      </strong>
      <div class="col-md-7">3/31/15 2:04 AM</div>
    </li>
    <li class="row">
      <strong class="col-md-3">Last modified</strong>
      <div class="col-md-7">
        3/31/15 2:05 PM      </div>
    </li>

    <li class="row">
      <strong class="col-md-3">Status</strong>
      <div class="col-md-7">open</div>
    </li>
        
    
    <li class="row">
      <strong class="col-md-3">Contact</strong>
      <div class="col-md-7">Mr. Hermans Glenn</div>
    </li>


      </ul>
  </div> 
  <div class="clearfix">
        <div class="pull-right">
            <a id="openall" class="btn-link">show all</a>
            <a id="closeall" class="btn-link">hide all</a>
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
        <span class="date">3/31/15 2:05 PM</span>
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
Het wijzigen van DNS records dient te geschieden door de klant zelfs via<br />
het control panel.<br />

Let op de Nameservers kunt niet zelfs wijzigen die worden op aanvraag<br />
van u door ons gewijzigd.<br />
<br />
Hopende u voldoende te hebben geinformeerd.<br />
          </p>

       </div>

          </div>
  </div>
</div>
    </div>        
   
@endsection
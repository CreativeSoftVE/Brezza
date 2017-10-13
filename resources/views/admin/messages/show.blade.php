@extends('admin.layouts.app')
@section('title', 'Mail Box')
@section('content')
<div class="wrapper wrapper-content">
    <div class="row">
        
<div class="col-lg-12 animated fadeInRight">
<div class="mail-box-header">
    <div class="pull-right tooltip-demo">
        <a href="<%= url_for :controller => 'mailbox', :action => 'compose_email' %>" class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Reply"><i class="fa fa-reply"></i> Reply</a>
    <a href="#" class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Print email"><i class="fa fa-print"></i> </a>
    <a href="<%= url_for :controller => 'mailbox', :action => 'inbox' %>" class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Move to trash"><i class="fa fa-trash-o"></i> </a>
</div>
<h2>
Detalle de mensaje
</h2>
<div class="mail-tools tooltip-demo m-t-md">


<h3>
    <span class="font-normal">From: </span>{{ $message->email}}
</h3>
<h5>
    <span class="pull-right font-normal">10:15AM 02 FEB 2014</span>
    <span class="font-normal">Enviado a través de la </span>sección de contácto
</h5>
</div>
        </div>
<div class="mail-box">


<div class="mail-body">
    <p>
        {{$message->content}}
    </p>
</div>

<div class="mail-body text-right tooltip-demo">
    <a class="btn btn-sm btn-white" href="<%= url_for :controller => 'mailbox', :action => 'compose_email' %>"><i class="fa fa-reply"></i> Reply</a>
    <a class="btn btn-sm btn-white" href="<%= url_for :controller => 'mailbox', :action => 'compose_email' %>"><i class="fa fa-arrow-right"></i> Forward</a>
    <button title="" data-placement="top" data-toggle="tooltip" type="button" data-original-title="Print" class="btn btn-sm btn-white"><i class="fa fa-print"></i> Print</button>
    <button title="" data-placement="top" data-toggle="tooltip" data-original-title="Trash" class="btn btn-sm btn-white"><i class="fa fa-trash-o"></i> Remove</button>
</div>
<div class="clearfix"></div>


        </div>
        </div>
        </div>
</div>
@endsection


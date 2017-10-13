@extends('admin.layouts.app')
@section('title', 'Mail Box')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
   <div class="col-lg-10">
      <h2 class="text-dark-blue"><strong>Mail box</strong></h2>
      <ol class="breadcrumb">
         <li>
            <a href="{{ url('/admin') }}">Inicio</a>
         </li>
         <li class="active">
            <strong class="text-blue">Listado de correos</strong>
         </li>
      </ol>
   </div>
</div>
<div class=""><br/>@include('flash::message')</div>
<div class="wrapper wrapper-content">
   <div class="row">
      <div class="col-sm-12">
         <div class="ibox float-e-margins">
            <div class="ibox-title">
               <h4 class="text-dark-blue">
                  <strong>Contenido: Pie de página</strong>
               </h4>
            </div>
            <div class="ibox-content">
               <div class="row">
                  <div class="col-lg-12 animated fadeInRight">
                     <div class="mail-box-header">
                        <form method="get" action="#" class="pull-right mail-search">
                           <div class="input-group">
                              <input type="text" class="form-control input-sm" name="search" placeholder="Search email">
                              <div class="input-group-btn">
                                 <button type="submit" class="btn btn-sm btn-primary">
                                 Search
                                 </button>
                              </div>
                           </div>
                        </form>
                        <h2>
                           Inbox ({{$messagescount}})
                        </h2>
                        <div class="mail-tools tooltip-demo m-t-md">
                           <div class="btn-group pull-right">
                              <button class="btn btn-white btn-sm"><i class="fa fa-arrow-left"></i></button>
                              <button class="btn btn-white btn-sm"><i class="fa fa-arrow-right"></i></button>
                           </div>
                           <button class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="left" title="Refresh inbox"><i class="fa fa-refresh"></i> Refresh</button>
                           <button class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Mark as read"><i class="fa fa-eye"></i> </button>
                           <button class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Mark as important"><i class="fa fa-exclamation"></i> </button>
                           <button class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Move to trash"><i class="fa fa-trash-o"></i> </button>
                        </div>
                     </div>
                     <div class="mail-box">
                        <table class="table table-hover table-mail">
                           <tbody>
                              @Foreach($messages as $message) 
                              <tr class="@if ($message->status == 'leido')
                                           read
                                         @elseif ($message->status == 'noleido')
                                           unread
                                         @endif">
                                 <td class="check-mail">
                                    <input type="checkbox" class="i-checks">
                                 </td>
                                 <td class="mail-ontact"><a href="<%= url_for :controller => 'mailbox', :action => 'email_view' %>">{{ $message->email}}</a>
                                     @if ($message->status == 'leido')
                                       <span class="label label-info pull-right">Leido</span>
                                     @elseif ($message->status == 'noleido')
                                       <span class="label label-primary pull-right">No leido</span>
                                     @endif
                                 </td>
                                 <td class="mail-subject"><a href="<%= url_for :controller => 'mailbox', :action => 'email_view' %>">{{ $message->content}}</a></td>
                                 <td class=""></td>
                                 <td class="text-right mail-date">{{ $message->created_at->diffForHumans()}}</td>
                              </tr>
                              @endForeach
             
                               
                               
                               
                              <!--
                              <tr class="unread">
                                 <td class="check-mail">
                                    <input type="checkbox" class="i-checks">
                                 </td>
                                 <td class="mail-ontact"><a href="<%= url_for :controller => 'mailbox', :action => 'email_view' %>">Anna Smith</a></td>
                                 <td class="mail-subject"><a href="<%= url_for :controller => 'mailbox', :action => 'email_view' %>">Lorem ipsum dolor noretek imit set.</a></td>
                                 <td class=""><i class="fa fa-paperclip"></i></td>
                                 <td class="text-right mail-date">6.10 AM</td>
                              </tr>
                              <tr class="unread">
                                 <td class="check-mail">
                                    <input type="checkbox" class="i-checks" checked>
                                 </td>
                                 <td class="mail-ontact"><a href="<%= url_for :controller => 'mailbox', :action => 'email_view' %>">Jack Nowak</a></td>
                                 <td class="mail-subject"><a href="<%= url_for :controller => 'mailbox', :action => 'email_view' %>">Aldus PageMaker including versions of Lorem Ipsum.</a></td>
                                 <td class=""></td>
                                 <td class="text-right mail-date">8.22 PM</td>
                              </tr>
                              <tr class="read">
                                 <td class="check-mail">
                                    <input type="checkbox" class="i-checks">
                                 </td>
                                 <td class="mail-ontact"><a href="<%= url_for :controller => 'mailbox', :action => 'email_view' %>">Facebook</a> <span class="label label-warning pull-right">Clients</span> </td>
                                 <td class="mail-subject"><a href="<%= url_for :controller => 'mailbox', :action => 'email_view' %>">Many desktop publishing packages and web page editors.</a></td>
                                 <td class=""></td>
                                 <td class="text-right mail-date">Jan 16</td>
                              </tr>
                              <tr class="read">
                                 <td class="check-mail">
                                    <input type="checkbox" class="i-checks">
                                 </td>
                                 <td class="mail-ontact"><a href="<%= url_for :controller => 'mailbox', :action => 'email_view' %>">Mailchip</a></td>
                                 <td class="mail-subject"><a href="<%= url_for :controller => 'mailbox', :action => 'email_view' %>">There are many variations of passages of Lorem Ipsum.</a></td>
                                 <td class=""></td>
                                 <td class="text-right mail-date">Mar 22</td>
                              </tr>
                              <tr class="read">
                                 <td class="check-mail">
                                    <input type="checkbox" class="i-checks">
                                 </td>
                                 <td class="mail-ontact"><a href="<%= url_for :controller => 'mailbox', :action => 'email_view' %>">Alex T.</a> <span class="label label-danger pull-right">Documents</span></td>
                                 <td class="mail-subject"><a href="<%= url_for :controller => 'mailbox', :action => 'email_view' %>">Lorem ipsum dolor noretek imit set.</a></td>
                                 <td class=""><i class="fa fa-paperclip"></i></td>
                                 <td class="text-right mail-date">December 22</td>
                              </tr>
                              <tr class="read">
                                 <td class="check-mail">
                                    <input type="checkbox" class="i-checks">
                                 </td>
                                 <td class="mail-ontact"><a href="<%= url_for :controller => 'mailbox', :action => 'email_view' %>">Monica Ryther</a></td>
                                 <td class="mail-subject"><a href="<%= url_for :controller => 'mailbox', :action => 'email_view' %>">The standard chunk of Lorem Ipsum used.</a></td>
                                 <td class=""></td>
                                 <td class="text-right mail-date">Jun 12</td>
                              </tr>
                              <tr class="read">
                                 <td class="check-mail">
                                    <input type="checkbox" class="i-checks">
                                 </td>
                                 <td class="mail-ontact"><a href="<%= url_for :controller => 'mailbox', :action => 'email_view' %>">Sandra Derick</a></td>
                                 <td class="mail-subject"><a href="<%= url_for :controller => 'mailbox', :action => 'email_view' %>">Contrary to popular belief.</a></td>
                                 <td class=""></td>
                                 <td class="text-right mail-date">May 28</td>
                              </tr>
                              <tr class="read">
                                 <td class="check-mail">
                                    <input type="checkbox" class="i-checks">
                                 </td>
                                 <td class="mail-ontact"><a href="<%= url_for :controller => 'mailbox', :action => 'email_view' %>">Patrick Pertners</a> <span class="label label-info pull-right">Adv</span></td>
                                 <td class="mail-subject"><a href="<%= url_for :controller => 'mailbox', :action => 'email_view' %>">If you are going to use a passage of Lorem </a></td>
                                 <td class=""></td>
                                 <td class="text-right mail-date">May 28</td>
                              </tr>
                              <tr class="read">
                                 <td class="check-mail">
                                    <input type="checkbox" class="i-checks">
                                 </td>
                                 <td class="mail-ontact"><a href="<%= url_for :controller => 'mailbox', :action => 'email_view' %>">Michael Fox</a></td>
                                 <td class="mail-subject"><a href="<%= url_for :controller => 'mailbox', :action => 'email_view' %>">Humour, or non-characteristic words etc.</a></td>
                                 <td class=""></td>
                                 <td class="text-right mail-date">Dec 9</td>
                              </tr>
                              <tr class="read">
                                 <td class="check-mail">
                                    <input type="checkbox" class="i-checks">
                                 </td>
                                 <td class="mail-ontact"><a href="<%= url_for :controller => 'mailbox', :action => 'email_view' %>">Damien Ritz</a></td>
                                 <td class="mail-subject"><a href="<%= url_for :controller => 'mailbox', :action => 'email_view' %>">Oor Lorem Ipsum is that it has a more-or-less normal.</a></td>
                                 <td class=""></td>
                                 <td class="text-right mail-date">Jun 11</td>
                              </tr>
                              <tr class="read">
                                 <td class="check-mail">
                                    <input type="checkbox" class="i-checks">
                                 </td>
                                 <td class="mail-ontact"><a href="<%= url_for :controller => 'mailbox', :action => 'email_view' %>">Anna Smith</a></td>
                                 <td class="mail-subject"><a href="<%= url_for :controller => 'mailbox', :action => 'email_view' %>">Lorem ipsum dolor noretek imit set.</a></td>
                                 <td class=""><i class="fa fa-paperclip"></i></td>
                                 <td class="text-right mail-date">6.10 AM</td>
                              </tr>
                              <tr class="read">
                                 <td class="check-mail">
                                    <input type="checkbox" class="i-checks">
                                 </td>
                                 <td class="mail-ontact"><a href="<%= url_for :controller => 'mailbox', :action => 'email_view' %>">Jack Nowak</a></td>
                                 <td class="mail-subject"><a href="<%= url_for :controller => 'mailbox', :action => 'email_view' %>">Aldus PageMaker including versions of Lorem Ipsum.</a></td>
                                 <td class=""></td>
                                 <td class="text-right mail-date">8.22 PM</td>
                              </tr>
                              <tr class="read">
                                 <td class="check-mail">
                                    <input type="checkbox" class="i-checks">
                                 </td>
                                 <td class="mail-ontact"><a href="<%= url_for :controller => 'mailbox', :action => 'email_view' %>">Mailchip</a></td>
                                 <td class="mail-subject"><a href="<%= url_for :controller => 'mailbox', :action => 'email_view' %>">There are many variations of passages of Lorem Ipsum.</a></td>
                                 <td class=""></td>
                                 <td class="text-right mail-date">Mar 22</td>
                              </tr>
                              <tr class="read">
                                 <td class="check-mail">
                                    <input type="checkbox" class="i-checks">
                                 </td>
                                 <td class="mail-ontact"><a href="<%= url_for :controller => 'mailbox', :action => 'email_view' %>">Alex T.</a> <span class="label label-warning pull-right">Clients</span></td>
                                 <td class="mail-subject"><a href="<%= url_for :controller => 'mailbox', :action => 'email_view' %>">Lorem ipsum dolor noretek imit set.</a></td>
                                 <td class=""><i class="fa fa-paperclip"></i></td>
                                 <td class="text-right mail-date">December 22</td>
                              </tr>
                              <tr class="read">
                                 <td class="check-mail">
                                    <input type="checkbox" class="i-checks">
                                 </td>
                                 <td class="mail-ontact"><a href="<%= url_for :controller => 'mailbox', :action => 'email_view' %>">Monica Ryther</a></td>
                                 <td class="mail-subject"><a href="<%= url_for :controller => 'mailbox', :action => 'email_view' %>">The standard chunk of Lorem Ipsum used.</a></td>
                                 <td class=""></td>
                                 <td class="text-right mail-date">Jun 12</td>
                              </tr>
                              <tr class="read">
                                 <td class="check-mail">
                                    <input type="checkbox" class="i-checks">
                                 </td>
                                 <td class="mail-ontact"><a href="<%= url_for :controller => 'mailbox', :action => 'email_view' %>">Sandra Derick</a></td>
                                 <td class="mail-subject"><a href="<%= url_for :controller => 'mailbox', :action => 'email_view' %>">Contrary to popular belief.</a></td>
                                 <td class=""></td>
                                 <td class="text-right mail-date">May 28</td>
                              </tr>
                              <tr class="read">
                                 <td class="check-mail">
                                    <input type="checkbox" class="i-checks">
                                 </td>
                                 <td class="mail-ontact"><a href="<%= url_for :controller => 'mailbox', :action => 'email_view' %>">Patrick Pertners</a> </td>
                                 <td class="mail-subject"><a href="<%= url_for :controller => 'mailbox', :action => 'email_view' %>">If you are going to use a passage of Lorem </a></td>
                                 <td class=""></td>
                                 <td class="text-right mail-date">May 28</td>
                              </tr>
                              <tr class="read">
                                 <td class="check-mail">
                                    <input type="checkbox" class="i-checks">
                                 </td>
                                 <td class="mail-ontact"><a href="#">Michael Fox</a></td>
                                 <td class="mail-subject"><a href="#">Humour, or non-characteristic words etc.</a></td>
                                 <td class=""></td>
                                 <td class="text-right mail-date">Dec 9</td>
                              </tr>
                              <tr class="read">
                                 <td class="check-mail">
                                    <input type="checkbox" class="i-checks">
                                 </td>
                                 <td class="mail-ontact"><a href="#">Damien Ritz</a></td>
                                 <td class="mail-subject"><a href="#">Oor Lorem Ipsum is that it has a more-or-less normal.</a></td>
                                 <td class=""></td>
                                 <td class="text-right mail-date">Jun 11</td>
                              </tr>-->
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

@endsection

@section('scripts')
   <script type="text/javascript">
      $(function() {
      
          $('.i-checks').iCheck({
              checkboxClass: 'icheckbox_square-green',
              radioClass: 'iradio_square-green',
          });
      
      });
      
   </script>
@endsection
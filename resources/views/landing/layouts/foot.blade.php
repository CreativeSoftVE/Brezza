<div class="row">
         <div class="col-lg-8 col-lg-offset-2 text-center m-t-lg m-b-lg">
            <p><strong>&copy; 2016-2017 Brezza Project S.A.</strong><br/> <a data-toggle="modal" data-target="#myModalpol">{{ trans('app.politics') }}</a> | <a data-toggle="modal" data-target="#myModalpro">{{ trans('app.prospective') }}</a> | <a data-toggle="modal" data-target="#myModalesc">{{ trans('app.scalability') }}</a></p>
            <!-- Modal -->
            <div class="modal fade" id="myModalpol" role="dialog">
               <div class="modal-dialog">
                  <!-- Modal content-->
                  <div class="modal-content">
                     <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">{{ trans('app.politics') }}</h4>
                     </div>
                     <div class="modal-body">
                        <p>
                           @if (App::getLocale() == 'en')
                           <p>{{ $footers -> content1}}</p>
                           @elseif (App::getLocale() == 'es')
                           <p>{{ $footers -> contenido1}}</p>
                           @endif
                        </p>
                        
                     </div>
                     <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">{{ trans('app.close') }}</button>
                     </div>
                  </div>
               </div>
            </div>
            <div class="modal fade" id="myModalpro" role="dialog">
               <div class="modal-dialog">
                  <!-- Modal content-->
                  <div class="modal-content">
                     <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">{{ trans('app.prospective') }}</h4>
                     </div>
                     <div class="modal-body">
                        <p>
                           @if (App::getLocale() == 'en')
                           <p>{{ $footers -> content2}}</p>
                           @elseif (App::getLocale() == 'es')
                           <p>{{ $footers -> contenido2}}</p>
                           @endif
                        
                        
                        </p>
                     </div>
                     <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">{{ trans('app.close') }}</button>
                     </div>
                  </div>
               </div>
            </div>
            <div class="modal fade" id="myModalesc" role="dialog">
               <div class="modal-dialog">
                  <!-- Modal content-->
                  <div class="modal-content">
                     <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">{{ trans('app.scalability') }}</h4>
                     </div>
                     <div class="modal-body">
                        <p>
                           @if (App::getLocale() == 'en')
                           <p>{{ $footers -> content3}}</p>
                           @elseif (App::getLocale() == 'es')
                           <p>{{ $footers -> contenido3}}</p>
                           @endif
                        
                        
                        </p>
                     </div>
                     <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">{{ trans('app.close') }}</button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
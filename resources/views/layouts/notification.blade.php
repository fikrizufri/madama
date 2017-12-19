@if (session()->has('flash_notif.massage'))
             <div class="alert alert-{{ session()->get('flash_notif.level') }}">
                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                 <p>{!! session()->get('flash_notif.massage') !!}</p>
             </div>
     @endif

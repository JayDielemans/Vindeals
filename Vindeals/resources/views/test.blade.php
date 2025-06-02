<div>
  Welkom adverteerder!
</div>

@if(Auth::User()->role == 'zakelijk')
  <p>Welkom zakelijke klant!</p>
@endif

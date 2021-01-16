<li class="nav-item @if ($pages ?? ''=='index')active @endif">
    <a class=" nav-link" href="/">Home</a>
</li>

@auth
@if(\Illuminate\Support\Facades\Auth::user()->isAdmin())
<li class="nav-item @if ($pages ?? ''=='user')active @endif">
    <a class="nav-link" href="{{route('admin.user.index')}}">User List</a>
</li>
@endif
@endauth
<li class="nav-item @if ($pages ?? ''=='event')active @endif">
<a class="nav-link" href="{{route('event.index')}}">Events</a>
</li>

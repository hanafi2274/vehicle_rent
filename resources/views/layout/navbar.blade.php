@if(Auth::guard('web')->check()==true)
<nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
<button href="#menu-toggle" class="btn btn-outline-primary bi bi-list btn-sm" style="margin-right:5px;" id="menu-toggle">

      </button>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
               
            </li>
        </ul>
        <div class="form-row">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="btn btn-outline-primary" type="submit">Logout</button>
            </form>
        </div>
    </div>
</nav>
@endif

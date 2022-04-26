@if(Auth::guard('web')->user()->role == "head manager")
<div id="slidebar" class="slidebar-nav">

    <div class="sidebar-container">
    <div class="sidebar-logo">
    Head Manager
  </div>
        <ul class="sidebar-navigation">
            <li class="header">Vehicle</li>
            <li>
                <a href="{{route('listUsageVehicle') }}">
                    <i class="fa fa-users" aria-hidden="true"></i> List Order Vehicle
                </a>
            </li>
            <li>
                <a href="{{route('listServiceVehicle') }}">
                    <i class="fa fa-home" aria-hidden="true"></i> Service Vehicle
                </a>
            </li>


            


        </ul>
    </div>
</div>
@elseif(Auth::guard('web')->user()->role == "branch manager")
<div id="slidebar" class="slidebar-nav">

    <div class="sidebar-container">
    <div class="sidebar-logo">
    Branch Manager
  </div>
        <ul class="sidebar-navigation">
        <li class="header">Vehicle</li>
            <li>
                <a href="{{route('listUsageVehicle') }}">
                    <i class="fa fa-users" aria-hidden="true"></i> List Order Vehicle
                </a>
            </li>
            <li>
                <a href="{{route('listServiceVehicle') }}">
                    <i class="fa fa-home" aria-hidden="true"></i> Service Vehicle
                </a>
            </li>





        </ul>
    </div>
</div>
@elseif(Auth::guard('web')->user()->role == "admin")
<div id="slidebar" class="slidebar-nav">

    <div class="sidebar-container">
    <div class="sidebar-logo">
    Admin
  </div>
        <ul class="sidebar-navigation">
        <li class="header">Vehicle</li>
            <li>
                <a href="{{route('listUsageVehicle') }}">
                    <i class="fa fa-users" aria-hidden="true"></i> List Order Vehicle
                </a>
            </li>
            <li>
                <a href="{{route('listServiceVehicle') }}">
                    <i class="fa fa-home" aria-hidden="true"></i> Service Vehicle
                </a>
            </li>



           

        </ul>
    </div>
</div>
@endif
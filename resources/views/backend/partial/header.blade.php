<div class="header">
    <div class="header-left">
        <div class="menu-icon dw dw-menu"></div>
    </div>
    <div class="header-right">
        <div class="user-info-dropdown">
            <div class="dropdown">
                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                    <span class="user-icon">
                        <img src="{{asset('backend/vendors/images/photo1.jpg')}}" alt="">
                    </span>
                    <span class="user-name">{{Auth::user()->name}}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                    <form action="{{route('logout')}}" method="POST">
                        @csrf
                        <a class="dropdown-item" href="#"><button class="btn btn-danger">Logout</button></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

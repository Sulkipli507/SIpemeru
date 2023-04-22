<div class="header">
    <div class="header-left">
        <div class="menu-icon dw dw-menu"></div>
        <div class="search-toggle-icon dw dw-search2" data-toggle="header_search"></div>
    </div>
    <div class="header-right">
        <div class="dashboard-setting user-notification">
            <div class="dropdown">
                <a class="dropdown-toggle no-arrow" href="javascript:;" data-toggle="right-sidebar">
                    <i class="dw dw-settings2"></i>
                </a>
            </div>
        </div>
        <div class="user-info-dropdown">
            <div class="dropdown">
                <a class="dropdown-toggle" href="#" role="button">
                    <span class="user-icon">
                        <img src="{{asset('backend/vendors/images/photo1.jpg')}}" alt="">
                    </span>
                    <span class="user-name">{{Auth::user()->name}}</span>
                </a>
            </div>
        </div>
        <div class="mt-3 mr-3">
            <form action="{{route('logout')}}" method="POST">
                @csrf
                <button class="btn btn-danger">Logout</button>
            </form>
        </div>  
    </div>
</div>

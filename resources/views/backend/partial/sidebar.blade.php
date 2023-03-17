<div class="left-side-bar">
    <div class="brand-logo">
        <a href="#">
            <img src="{{asset('backend/vendors/images/deskapp-logo.svg')}}" alt="" class="dark-logo">
            <img src="{{asset('backend/vendors/images/deskapp-logo-white.svg')}}" alt="" class="light-logo">
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul>
                <li class="dropdown">
                    <a href="{{ route('home') }}" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-house-1"></span><span class="mtext">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-paper-plane1"></span>
                        <span class="mtext">Landing Page</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('room-index') }}" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-hotel"></span>
                        <span class="mtext">Room</span>
                    </a>
                </li>
            </ul>           
        </div>     
    </div>
</div>

<div class="left-side-bar">
    <div class="brand-logo">
        <a href="#">
            <img src="{{asset('backend/vendors/images/sipemeru-loading.png')}}" alt="" class="dark-logo">
            <img src="{{asset('backend/vendors/images/sipemeru-loading-white.png')}}" alt="" class="light-logo">
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">
                <li>
                    <a href="{{ route('home') }}" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-house"></span>
                        <span class="mtext">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('calendar') }}" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-calendar1"></span>
                        <span class="mtext">Kalender</span>
                    </a>
                </li>
                @if (Auth::user()->role == "admin")
                <li>
                    <a href="{{ route('room-index') }}" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-hotel"></span>
                        <span class="mtext">Daftar Ruangan</span>
                    </a>
                </li>
                @elseif (Auth::user()->role == "staff")
                <li>
                    <a href="{{ route('loan-index') }}" class="dropdown-toggle no-arrow">
                        <span class="dw dw-notebook"></span>
                        <span class="mtext">Daftar Peminjaman</span>
                    </a>
                </li>
                @else
                <li>
                    <a href="{{ route('loan-user-index') }}" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-calendar1"></span>
                        <span class="mtext">Daftar Peminjaman</span>
                    </a>
                </li>
                @endif
                <li>
                    <a href="{{ route('landingpage') }}" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-paper-plane1"></span>
                        <span class="mtext">Landing Page</span>
                    </a>
                </li>
            </ul>           
        </div>     
    </div>
</div>

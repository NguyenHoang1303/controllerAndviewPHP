<?php
$admin = array();
if (Session::has('loginId')) {
    $admin = DB::table('admins')->find(Session::get('loginId'));
}
?>

<div class="top_nav">
    <div class="nav_menu">
        <div class="nav toggle">
            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
        </div>
        <nav class="nav navbar-nav">
            <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                    <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown"
                       data-toggle="dropdown" aria-expanded="false">
                        <img src="/images/jjjj.jpg" alt="">
                        Admin
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>

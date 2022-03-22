<div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
        <img src="/admin-vendors/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">{{$user->name}}</span>
    </a>
</div>
<hr class="horizontal light mt-0 mb-2">
<div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
    <ul class="navbar-nav">
        <!-- Danh mục -->
        <li class="nav-item">
            <a class="nav-link text-white active bg-gradient-primary" href="{{route('listing.index',['model'=>'Menu'])}}">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10">dashboard</i>
                </div>
                <span class="nav-link-text ms-1">Danh mục</span>
            </a>
        </li>
        <!-- Tin tức -->
        <li class="nav-item">
            <a class="nav-link text-white " href="{{route('listing.index',['model'=>'News'])}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Tin tức</span>
            </a>
        </li>
        <!-- Sản phẩm -->
        <li class="nav-item">
            <a class="nav-link text-white " href="{{route('listing.index',['model'=>'Product'])}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">Sản phẩm</span>
            </a>
        </li>
        <!-- Đơn hàng -->
        <li class="nav-item">
            <a class="nav-link text-white " href="{{route('listing.index',['model'=>'Order'])}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">format_textdirection_r_to_l</i>
            </div>
            <span class="nav-link-text ms-1">Đơn hàng</span>
            </a>
        </li>
        <!-- Thành viên -->
        <li class="nav-item">
            <a class="nav-link text-white " href="{{route('listing.index',['model'=>'Admin'])}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">notifications</i>
            </div>
            <span class="nav-link-text ms-1">Thành viên</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="{{route('admin.logout')}}">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10">login</i>
                </div>
                <span class="nav-link-text ms-1">{{$user->name}}</span>
            </a>
        </li>
    </ul>
</div>
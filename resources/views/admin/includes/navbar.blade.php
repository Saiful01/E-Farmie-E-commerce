<div class="left side-menu">
    <div class="slimscroll-menu" id="remove-scroll"><!--- Sidemenu -->
        <div id="sidebar-menu"><!-- Left Menu Start -->
            <ul class="metismenu" id="side-menu">
                <li class="menu-title">Main</li>
                <li><a href="/admin/dashboard" class="waves-effect"><i class="mdi mdi-view-dashboard"></i><span
                            class="badge badge-primary badge-pill float-right">2</span>
                        <span>Dashboard</span></a></li>
                {{--     <li><a href="calendar.html" class="waves-effect"><i
                                     class="mdi mdi-calendar-check"></i><span> Calendar</span></a>
                     </li>
     --}}
                @if(Session::get('user_type')==1)

                    <li>
                        <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-ornament"></i><span> Manage Admins <span
                                    class="float-right menu-arrow"><i
                                        class="mdi mdi-chevron-right"></i></span></span></a>
                        <ul class="submenu">
                            <li><a href="/admin/create">New Admin</a></li>
                            <li><a href="/admin/show">List Admin</a></li>
                        </ul>
                    </li>

                    <li><a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-email-outline"></i><span> Products <span
                                    class="float-right menu-arrow"><i
                                        class="mdi mdi-chevron-right"></i></span></span></a>
                        <ul class="submenu">
                            <li><a href="/admin/product/create">New Product</a></li>
                            <li><a href="/admin/product/show">List Products</a></li>
                            <li><a href="/admin/product/category/new">New Category</a></li>
                            <li><a href="/admin/product/category/show">List Categories</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-email-outline"></i><span> Slider Image <span
                                    class="float-right menu-arrow"><i
                                        class="mdi mdi-chevron-right"></i></span></span></a>
                        <ul class="submenu">
                            <li><a href="/admin/slider/create">New Slider</a></li>
                            <li><a href="/admin/slider/show">List Slider Image</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-email-outline"></i><span> Client <span
                                    class="float-right menu-arrow"><i
                                        class="mdi mdi-chevron-right"></i></span></span></a>
                        <ul class="submenu">
                            <li><a href="/admin/client/create">New Client</a></li>
                            <li><a href="/admin/client/show">List Client</a></li>
                        </ul>
                    </li>
                    {{--
                                        <li>
                                            <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-email-outline"></i><span> Promo <span
                                                            class="float-right menu-arrow"><i
                                                                class="mdi mdi-chevron-right"></i></span></span></a>
                                            <ul class="submenu">
                                                <li><a href="/admin/promo/create">New Promo</a></li>
                                                <li><a href="/admin/promo/show">List Promo</a></li>
                                            </ul>
                                        </li>--}}
                    {{--    <li>
                                            <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-email-outline"></i><span> Stock Manage <span
                                                            class="float-right menu-arrow"><i
                                                                class="mdi mdi-chevron-right"></i></span></span></a>
                                            <ul class="submenu">
                                                <li><a href="/admin/stock/show">List Product</a></li>
                                            </ul>
                                        </li>--}}

                @endif

                <li><a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-email-outline"></i><span> Sells <span
                                class="float-right menu-arrow"><i
                                    class="mdi mdi-chevron-right"></i></span></span></a>
                    <ul class="submenu">
                        <li><a href="/admin/sell/show">List Sell</a></li>
                    </ul>
                </li>

                <li><a href="/admin/customers" class="waves-effect"><i
                            class="mdi mdi-settings"></i><span> Manage Customers</span></a>
                </li>
{{--
                @if(Session::get('user_type')==1)
                    <li><a href="/admin/promotion/show" class="waves-effect"><i
                                class="mdi mdi-settings"></i><span>Promotional Slider</span></a>
                    </li>
                    <li><a href="/" class="waves-effect" target="_BLANK"><i
                                class="mdi mdi-settings"></i><span> New Order</span></a>
                    </li>
                    <li><a href="/admin/setting" class="waves-effect"><i
                                class="mdi mdi-settings"></i><span> Shop Setting</span></a>
                    </li>

                @endif--}}
                @if(Session::get('user_type')==1)

                    <li>
                        <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-ornament"></i><span>  Blog Category <span
                                    class="float-right menu-arrow"><i
                                        class="mdi mdi-chevron-right"></i></span></span></a>
                        <ul class="submenu">
                            <li><a href="/admin/blog/category/create">Create Blog Category</a></li>
                            <li><a href="/admin/blog/category/show">View Blog category</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-ornament"></i><span> Manage Blog  <span
                                    class="float-right menu-arrow"><i
                                        class="mdi mdi-chevron-right"></i></span></span></a>
                        <ul class="submenu">
                            <li><a href="/admin/blog/create">Create Blog </a></li>
                            <li><a href="/admin/blog/show">View Blog </a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-ornament"></i><span> Manage Comment  <span
                                    class="float-right menu-arrow"><i
                                        class="mdi mdi-chevron-right"></i></span></span></a>
                        <ul class="submenu">
                          {{--  <li><a href="/admin/blog/create">Create Blog </a></li>--}}
                            <li><a href="/admin/comment/show">View Comment </a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-ornament"></i><span> Manage Contact  <span
                                    class="float-right menu-arrow"><i
                                        class="mdi mdi-chevron-right"></i></span></span></a>
                        <ul class="submenu">
                          {{--  <li><a href="/admin/blog/create">Create Blog </a></li>--}}
                            <li><a href="/admin/contact/show">View Contact </a></li>
                        </ul>
                    </li>
                @endif


            </ul>
        </div><!-- Sidebar -->
        <div class="clearfix"></div>
    </div><!-- Sidebar -left -->
</div><!-- Left Sidebar End -->

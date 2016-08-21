<div id="sidebar" class="">
    <div class="scrollbar">
        <div class="track">
            <div class="thumb">
                <div class="end"></div>
            </div>
        </div>
    </div>
    <div class="viewport ">
        <div class="overview collapse">

            <div class="search row-fluid container">
            <!--
                <h2>Search</h2>
                <form class="form-search">
                    <div class="input-append">
                        <input type="text" class=" search-query" placeholder="">
                        <button class="btn_search color_4">Search</button>
                    </div>
                </form>
                -->
            </div>
            <ul id="sidebar_menu" class="navbar nav nav-list container full">
                <li class="accordion-group active color_4"> <a class="dashboard " href="/"><img src="{{ WIN8('img/menu_icons/dashboard.png') }}"><span>Dashboard</span></a> </li>
                <li class="accordion-group color_25 @if ($MENU_ELEMENT == true) active @endif"> <a class="accordion-toggle widgets collapsed " data-toggle="collapse" data-parent="#sidebar_menu" href="#collapse1"> <img src="{{ WIN8('img/menu_icons/forms.png') }}"><span>Elements</span></a>
                    <ul id="collapse1" class="accordion-body
                    @if ($MENU_ELEMENT == true)
                    in
                    @endif
                    collapse">
                        <li @if ($active == 'carousels') class="active" @endif><a href="/admin/carousel/index">Carousel-轮播图</a></li>
                        <li @if ($active == 'articles') class="active" @endif
                        ><a href="/admin/articles/index">Article-文章</a></li>
                        <li @if ($active == 'albums') class="active" @endif
                        ><a href="/admin/albums/index">Album-相册</a></li>
                        <li @if ($active == 'photos') class="active" @endif><a href="/admin/photos/index">Photo-图片</a></li>
                        <li @if ($active == 'softwares') class="active" @endif><a href="/admin/softwares/index">Software-软件</a></li>
                    </ul>
                </li>
                <!--<li class="accordion-group color_3"> <a class="accordion-toggle widgets collapsed" data-toggle="collapse" data-parent="#sidebar_menu" href="#collapse2"> <img src="{{ WIN8('img/menu_icons/widgets.png') }}"><span>UI Widgets</span></a>
                    <ul id="collapse2" class="accordion-body collapse">
                        <li><a href="ui_buttons.html">Buttons</a></li>
                        <li><a href="ui_dialogs.html">Dialogs</a></li>
                        <li><a href="ui_icons.html">Icons</a></li>
                        <li><a href="ui_tabs.html">Tabs</a></li>
                        <li><a href="ui_accordion.html">Accordion</a></li>
                    </ul>
                </li>-->
                <li class="color_13 @if ($active == 'calendars') active @endif"> <a class="widgets" href="/admin/calendar/index"> <img src="{{ WIN8('img/menu_icons/calendar.png') }}"><span>Calendar-日历</span></a> </li>
                <!--<li class="color_10"> <a class="widgets"data-parent="#sidebar_menu" href="maps.html"> <img src="{{ WIN8('img/menu_icons/maps.png') }}"><span>Maps</span></a> </li>-->
                <!--<li class="accordion-group color_12"> <a class="accordion-toggle widgets collapsed" data-toggle="collapse" data-parent="#sidebar_menu" href="#collapse3"> <img src="{{ WIN8('img/menu_icons/tables.png') }}"><span>Tables</span></a>
                    <ul id="collapse3" class="accordion-body collapse">
                        <li><a href="tables_static.html">Static</a></li>
                        <li><a href="tables_dynamic.html">Dynamics</a></li>
                    </ul>
                </li>-->
                <li class="accordion-group color_19 @if ($active == 'charts') active @endif"> <a class="accordion-toggle widgets collapsed" data-toggle="collapse" data-parent="#sidebar_menu" href="#collapse4"> <img src="{{ WIN8('img/menu_icons/statistics.png') }}"><span>Charts-今年统计</span></a>
                    <ul id="collapse4" class="accordion-body collapse @if ($active == 'charts') in @endif">

                        <li @if ($active == 'charts') class="active" @endif><a href="/admin/charts/index">Index</a></li>
                    </ul>
                </li>
                <!--<li class="color_24"> <a class="widgets"data-parent="#sidebar_menu" href="grid.html"> <img src="{{ WIN8('img/menu_icons/grid.png') }}"><span>Grid</span></a> </li>-->
                <li class="color_8 @if ($active == 'links') active @endif"> <a class="widgets"data-parent="#sidebar_menu" href="/admin/links/index"> <img src="{{ WIN8('img/menu_icons/gallery.png') }}"><span>Links-友情链接</span></a> </li>
                <li class="color_4 @if ($active == 'profile') active @endif"> <a class="widgets"data-parent="#sidebar_menu" href="/admin/profile/index"> <img src="{{ WIN8('img/menu_icons/gallery.png') }}"><span>Profile-个人主页</span></a> </li>
                <!--<li class="color_4"> <a class="widgets"data-parent="#sidebar_menu" href="file_explorer.html"> <img src="{{ WIN8('img/menu_icons/explorer.png') }}"><span>File Explorer</span>  </a> </li>-->
                <!--
                <li class="accordion-group color_25"> <a class="accordion-toggle widgets collapsed" data-toggle="collapse" data-parent="#sidebar_menu" href="#collapse5"> <img src="{{ WIN8('img/menu_icons/others.png') }}"><span>Specific Pages</span></a>
                    <ul id="collapse5" class="accordion-body collapse">
                        <li><a href="profile.html">Profile</a></li>
                        <li><a href="search.html">Search</a></li>
                        <li><a href="index2.html">Login</a></li>
                        <li><a href="404.html">404 Error</a></li>
                        <li ><a href="blog.html">Blog</a></li>
                    </ul>
                </li>
                -->
            </ul>
            <div class="menu_states row-fluid container ">
                <h2 class="pull-left">Menu Settings</h2>
                <div class="options pull-right">
                    <button id="menu_state_1" class="color_4" rel="tooltip" data-state ="sidebar_icons" data-placement="top" data-original-title="Icon Menu">1</button>
                    <button id="menu_state_2" class="color_4 active" rel="tooltip" data-state ="sidebar_default" data-placement="top" data-original-title="Fixed Menu">2</button>
                    <button id="menu_state_3" class="color_4" rel="tooltip" data-placement="top" data-state ="sidebar_hover" data-original-title="Floating on Hover Menu">3</button>
                </div>
            </div>
            <!-- End sidebar_box -->

        </div>
    </div>
</div>
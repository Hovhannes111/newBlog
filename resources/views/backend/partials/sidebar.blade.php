<!-- sidebar.blade.php -->
@php
    $signedUser = getUserById();
@endphp
<aside class="main-sidebar">
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image d-inline-block">
                <img src="{{asset('img/logo/aew.png')}}" class="img-circle" alt=" Image"/>
            </div>
            <div class="pull-left info d-inline-block">
                <p>
                    @if (!empty($signedUser))
                        {{strtolower($signedUser->name)}}
                        <br>
                {{$signedUser->email}}
                @endif
            </div>
        </div>
        <ul class="sidebar-menu" data-widget="tree">
            <li class="text-uppercase">
                <a href="{{action('Backend\AdminController@index')}}">
                    <i class="fa fa-chart-bar"></i>
                    <span>Dashboard</span>
                    {{--                    <span class="pull-right-container">--}}
                    {{--                    <i class="fa fa-angle-left pull-right"></i>--}}
                    {{--                    </span>--}}
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-list"></i> <span>Manage Menu</span>
                    <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">

                    <li><a href="{{action('Backend\MenuController@index')}}"><i class="fa fa-circle-o"></i>Menu List</a>
                    </li>
                    <li><a href="{{action('Backend\MenuController@create')}}"><i class="fa fa-circle-o"></i>Add Menu</a>
                    </li>

                </ul>
            </li>

            {{--            <li class="text-uppercase">--}}
            {{--                <a href="">--}}
            {{--                    <i class="fa fa-chart-bar"></i>--}}
            {{--                    <span>Statistics</span>--}}
            {{--                    <span class="pull-right-container">--}}
            {{--                    <i class="fa fa-angle-left pull-right"></i>--}}
            {{--                    </span>--}}
            {{--                </a>--}}
            {{--            </li>--}}

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-file-code"></i> <span>Pages</span>
                    <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">

                    <li><a href="{{action('Backend\PageController@index')}}"><i class="fa fa-circle-o"></i>Page List</a>
                    </li>
                    <li><a href="{{action('Backend\PageController@create')}}"><i class="fa fa-circle-o"></i>Add Page</a>
                    </li>

                </ul>
            </li>
        </ul>
    </section>
</aside>

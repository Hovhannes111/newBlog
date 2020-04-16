@php
    $signedUser = getUserById();
@endphp
<header class="main-header">
    <a href="" class="logo">
        <span class="logo-mini"><b>AEW</b></span>
        <span class="logo-lg"><b>AEW</b></span>
    </a>
    <nav class="navbar navbar-static-top">
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
            <i class="fa fa-th margin-r-5"></i>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                    <a href="#" id="dLabel" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">

                        <img src="{{asset('img/logo/aew.png')}}" class="user-image" alt="User Image"/>
                        <span class="hidden-xs">
                            @if (!empty($signedUser))
                                {{strtolower($signedUser->name)}}
                            @endif
                        </span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dLabel">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="{{asset('img/logo/aew.png')}}" class="img-circle" alt="User Image"/>
                            <p class="">
                                @if (!empty($signedUser))
                                    E-male:{{strtolower($signedUser->email)}}
                                    <br>
                                    Date: {{$signedUser->updated_at
                                   }}
                                @endif
                            </p>
                        </li>
                        <li class="user-footer">
                            <div class="pull-right">
                                <a class="dropdown-item btn btn-default" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

</header>

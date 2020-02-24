
    <nav id="myNavmenu" class="navmenu navmenu-default navmenu-fixed-left offcanvas-sm" role="navigation">
        <div class="list-group panel">
            <p class="list-group-item siderbar-top" title="" style="background-color: #eee"><img src="{{url('images/flarepoint_logo.png')}}" alt="" style="display: block; margin-left: auto; margin-right: auto;"></p>
            <a href="{{route('dashboard', \Auth::id())}}" class=" list-group-item" data-parent="#MainMenu"><i
                        class="glyphicon sidebar-icon glyphicon-dashboard"></i><span id="menu-txt">{{ __('داشبورد') }}</span> </a>
            <a href="{{route('users.show', \Auth::id())}}" class=" list-group-item" data-parent="#MainMenu"><i
                        class="glyphicon sidebar-icon glyphicon-user"></i><span id="menu-txt">{{ __('مشخصات') }}</span> </a>


            <a href="#clients" class=" list-group-item" data-toggle="collapse" data-parent="#MainMenu"><i
                        class="glyphicon sidebar-icon glyphicon-tag"></i><span id="menu-txt">{{ __('مشتریان') }}</span>
            <i class="ion-chevron-up  arrow-up sidebar-arrow"></i></a>
            <div class="collapse" id="clients">

                <a href="{{ route('clients.my')}}" class="list-group-item childlist">{{ __('مشتریان من') }}</a>
                <a href="{{ route('clients.index')}}" class="list-group-item childlist">{{ __('همه مشتریان') }}</a>
                @if(Entrust::can('client-create'))
                    <a href="{{ route('clients.create')}}"
                       class="list-group-item childlist">{{ __('مشتری جدید') }}</a>
                @endif
            </div>

            <a href="#contacts" class=" list-group-item" data-toggle="collapse" data-parent="#MainMenu"><i
                        class="glyphicon sidebar-icon glyphicon-tag"></i><span id="menu-txt">{{ __('تماسها') }}</span>
            <i class="ion-chevron-up  arrow-up sidebar-arrow"></i></a>
            <div class="collapse" id="contacts">

                <a href="{{ route('contacts.my')}}" class="list-group-item childlist">{{ __('تماسهای من') }}</a>
                <a href="{{ route('contacts.index')}}" class="list-group-item childlist">{{ __('همه تماسها') }}</a>
                @if(Entrust::can('contact-create'))
                    <a href="{{ route('contacts.create')}}"
                       class="list-group-item childlist">{{ __('تماس جدید') }}</a>
                @endif
            </div>

            <a href="#tasks" class="list-group-item" data-toggle="collapse" data-parent="#MainMenu"><i
                        class="glyphicon sidebar-icon glyphicon-tasks"></i><span id="menu-txt">{{ __('وظایف') }}</span>
            <i class="ion-chevron-up  arrow-up sidebar-arrow"></i></a>
            <div class="collapse" id="tasks">
                <a href="{{ route('tasks.my')}}" class="list-group-item childlist">{{ __('وضایف من') }}</a>
                <a href="{{ route('tasks.index')}}" class="list-group-item childlist">{{ __('همه وظایف') }}</a>
                @if(Entrust::can('task-create'))
                    <a href="{{ route('tasks.create')}}" class="list-group-item childlist">{{ __('وظیفه جدید') }}</a>
                @endif
            </div>

            <a href="#leads" class=" list-group-item" data-toggle="collapse" data-parent="#MainMenu"><i
                        class="glyphicon sidebar-icon glyphicon-hourglass"></i><span id="menu-txt">{{ __('رهبری') }}</span>
            <i class="ion-chevron-up  arrow-up sidebar-arrow"></i></a>
            <div class="collapse" id="leads">
                <a href="{{ route('leads.my')}}" class="list-group-item childlist">{{ __('رهبران من') }}</a>
                <a href="{{ route('leads.index')}}" class="list-group-item childlist">{{ __('همه رهبران') }}</a>
                @if(Entrust::can('lead-create'))
                    <a href="{{ route('leads.create')}}"
                       class="list-group-item childlist">{{ __('رهبر جدید') }}</a>
                @endif
            </div>

            <a href="#user" class="list-group-item" data-toggle="collapse" data-parent="#MainMenu"><i
                        class="sidebar-icon fa fa-users"></i><span id="menu-txt">{{ __('کاربران') }}</span>
            <i class="ion-chevron-up  arrow-up sidebar-arrow"></i></a>
            <div class="collapse" id="user">
                <a href="{{ route('users.index')}}" class="list-group-item childlist">{{ __('همه کاربران') }}</a>
                @if(Entrust::can('user-create'))
                    <a href="{{ route('users.create')}}"
                       class="list-group-item childlist">{{ __('کاربر جدید') }}</a>
                @endif
            </div>

            <a href="#departments" class=" list-group-item" data-toggle="collapse" data-parent="#MainMenu"><i
                        class="sidebar-icon glyphicon glyphicon-list-alt"></i><span id="menu-txt">{{ __('دپارتمان') }}</span>
            <i class="ion-chevron-up  arrow-up sidebar-arrow"></i></a>
            <div class="collapse" id="departments">
                <a href="{{ route('departments.index')}}"
                   class="list-group-item childlist">{{ __('کل دپارتمان') }}</a>
                @if(Entrust::hasRole('administrator'))
                    <a href="{{ route('departments.create')}}"
                       class="list-group-item childlist">{{ __('دپارتمان جدید') }}</a>
                @endif
            </div>

            @if(Entrust::hasRole('administrator'))
                <a href="#settings" class=" list-group-item" data-toggle="collapse" data-parent="#MainMenu"><i
                            class="glyphicon sidebar-icon glyphicon-cog"></i><span id="menu-txt">{{ __('تنظیمات') }}</span>
                <i class="ion-chevron-up  arrow-up sidebar-arrow"></i></a>
                <div class="collapse" id="settings">
                    <a href="{{ route('settings.index')}}"
                       class="list-group-item childlist">{{ __('تنظیمات کلی') }}</a>
                    <a href="{{ route('roles.index')}}"
                       class="list-group-item childlist">{{ __('مدیریت نقشها') }}</a>
                    <a href="{{ route('integrations.index')}}"
                       class="list-group-item childlist">{{ __('یکپارچه سازی') }}</a>
                </div>
            @endif
            <a href="{{ url('/logout') }}" class=" list-group-item impmenu" data-parent="#MainMenu"><i
                        class="glyphicon sidebar-icon glyphicon-log-out"></i><span id="menu-txt">{{ __('خروج') }}</span> </a>
        </div>
    </nav>

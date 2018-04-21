@inject('request', 'Illuminate\Http\Request')
<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <ul class="sidebar-menu">

            <li class="{{ $request->segment(1) == 'home' ? 'active' : '' }}">
                <a href="{{ url('/') }}">
                    <i class="fa fa-dashboard"></i>
                    <span class="title">@lang('global.app_dashboard')</span>
                </a>
            </li>
            
            @can('users_manage')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span class="title">Admin Management</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">

                    <li class="{{ $request->segment(2) == 'abilities' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.abilities.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span class="title">
                                @lang('global.abilities.title')
                            </span>
                        </a>
                    </li>
                    <li class="{{ $request->segment(2) == 'roles' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.roles.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span class="title">
                                @lang('global.roles.title')
                            </span>
                        </a>
                    </li>
                    <li class="{{ $request->segment(2) == 'users' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.users.index') }}">
                            <i class="fa fa-user"></i>
                            <span class="title">
                                @lang('global.users.title')
                            </span>
                        </a>
                    </li>
                     
                </ul>
            </li>
            @endcan

            
            <li class="{{ $request->segment(1) == 'home' ? 'active' : '' }}">
                <a href="{{ url('#') }}">
                    <i class="fa fa-users"></i>
                    <span class="title">Members</span>
                </a>
            </li>
            <li class="{{ $request->segment(1) == 'home' ? 'active' : '' }}">
                <a href="{{ url('#') }}">
                    <i class="fa fa-gift"></i>
                    <span class="title">Packages</span>
                </a>
            </li>
            <li class="{{ $request->segment(1) == 'home' ? 'active' : '' }}">
                <a href="{{ url('#') }}">
                    <i class="fa fa-cog"></i>
                    <span class="title">Configuration</span>
                </a>
            </li>
            <li class="{{ $request->segment(1) == 'home' ? 'active' : '' }}">
                <a href="{{ url('#') }}">
                    <i class="fa fa-gift"></i>
                    <span class="title">Vouchers</span>
                </a>
            </li>
            <li class="{{ $request->segment(1) == 'home' ? 'active' : '' }}">
                <a href="{{ url('#') }}">
                    <i class="fa fa-credit-card"></i>
                    <span class="title">Payment Update</span>
                </a>
            </li>
            <li class="{{ $request->segment(1) == 'home' ? 'active' : '' }}">
                <a href="{{ url('#') }}">
                    <i class="fa fa-cc-mastercard"></i>
                    <span class="title">AMC Update</span>
                </a>
            </li>
             <li class="{{ $request->segment(1) == 'home' ? 'active' : '' }}">
                <a href="{{ url('#') }}">
                    <i class="fa fa-envelope "></i>
                    <span class="title">Holiday Request</span>
                </a>
            </li>
             <li class="{{ $request->segment(1) == 'home' ? 'active' : '' }}">
                <a href="{{ url('#') }}">
                    <i class="fa fa-commenting"></i>
                    <span class="title">Customer Support</span>
                </a>
            </li>
             <li class="{{ $request->segment(1) == 'home' ? 'active' : '' }}">
                <a href="{{ url('#') }}">
                    <i class="fa fa-comments"></i>
                    <span class="title">Feedback</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-cloud-download"></i>
                    <span class="title">Report</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">

                    <li class="{{ $request->segment(2) == 'abilities' ? 'active active-sub' : '' }}">
                        <a href="#">
                            <i class="fa fa-users"></i>
                            <span class="title">
                                Member Report
                            </span>
                        </a>
                    </li>
                    <li class="{{ $request->segment(2) == 'roles' ? 'active active-sub' : '' }}">
                        <a href="#">
                            <i class="fa fa-credit-card"></i>
                            <span class="title">
                                Payments Report
                            </span>
                        </a>
                    </li>
                    <li class="{{ $request->segment(2) == 'users' ? 'active active-sub' : '' }}">
                        <a href="#">
                            <i class="fa fa-cc-mastercard"></i>
                            <span class="title">
                                AMC Report
                            </span>
                        </a>
                    </li>
                    <li class="{{ $request->segment(2) == 'users' ? 'active active-sub' : '' }}">
                        <a href="#">
                            <i class="fa fa-gift"></i>
                            <span class="title">
                                Voucher Report
                            </span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="{{ $request->segment(1) == 'change_password' ? 'active' : '' }}">
                <a href="{{ route('auth.change_password') }}">
                    <i class="fa fa-key"></i>
                    <span class="title">Change password</span>
                </a>
            </li>

            <li>
                <a href="#logout" onclick="$('#logout').submit();">
                    <i class="fa fa-arrow-left"></i>
                    <span class="title">@lang('global.app_logout')</span>
                </a>
            </li>
        </ul>
    </section>
</aside>
{!! Form::open(['route' => 'auth.logout', 'style' => 'display:none;', 'id' => 'logout']) !!}
<button type="submit">@lang('global.logout')</button>
{!! Form::close() !!}

@inject('request', 'Illuminate\Http\Request')
<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <ul class="sidebar-menu">

            <li class="{{ $request->segment(1) == 'home' ? 'active' : '' }}">
                <a href="{{ url('/') }}">
                    <i class="fa fa-list"></i>
                    <span class="title">Accueil</span>
                </a>
            </li>
            <!-- Client -->
        @can('users_manage')
        <li  class="{{ $request->segment(2) == 'penalite' ? 'active active-sub' : '' }}"><a href="{{route('penalite.index') }}"><i  class="fa fa-briefcase"></i>  <span>Contraventions</span></a></li>

          <!-- Produit -->
        <li  class="{{ $request->segment(2) == 'produit' ? 'active active-sub' : '' }}"><a href="{{route('reporting.index') }}"><i class="fa fa-briefcase"></i> <span>Bilan Des Arrestations</span></a></li>


         <!-- Produit -->
        <li  class="{{ $request->segment(2) == 'produit' ? 'active active-sub' : '' }}"><a href="{{route('statistique.index') }}"><i class="fa fa-briefcase"></i> <span>Statistique</span></a></li>

       
         @endcan
          @can('caisse')
         <li  class="{{ $request->segment(2) == 'caisse' ? 'active active-sub' : '' }}"><a href="{{route('caisse.index') }}"><i class="glyphicon glyphicon-new-window"></i> <span>Payement</span></a></li>
         @endcan

             
 @can('users_manage')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span class="title">Gestion des Utilisateurs</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">

                    <li class="{{ $request->segment(2) == 'permissions' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.permissions.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span class="title">
                                @lang('global.permissions.title')
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

            <li class="{{ $request->segment(1) == 'change_password' ? 'active' : '' }}">
                <a href="{{ route('auth.change_password') }}">
                    <i class="fa fa-key"></i>
                    <span class="title">Change Password</span>
                </a>
            </li>

            <li>
                <a href="#logout" onclick="$('#logout').submit();">
                    <i class="fa fa-arrow-left"></i>
                    <span class="title">Se déconnecter</span>
                </a>
            </li>
        </ul>
    </section>
</aside>
{!! Form::open(['route' => 'auth.logout', 'style' => 'display:none;', 'id' => 'logout']) !!}
<button type="submit">@lang('global.logout')</button>
{!! Form::close() !!}

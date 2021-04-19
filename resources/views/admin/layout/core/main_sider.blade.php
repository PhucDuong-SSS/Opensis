<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('admin.dashboard')}}" class="brand-link">
        <img src="{{ asset('admin_resource/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">OpenSIS</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img style="width: 70px; height: 70px"
                     src="{{ asset( \Illuminate\Support\Facades\Auth::user()->image ?? 'admin_resource/default.png')}}" class="img-circle elevation-2"
                     alt="User Image">
            </div>
            <div class="info">
                <a href="{{route('admin.dashboard')}}" class="d-block">
                    {{\Illuminate\Support\Facades\Auth::user()->username}}
                    <br>
                    <i>Chức vụ: <b>{{\Illuminate\Support\Facades\Auth::user()->role->name}}</b></i>
                </a>
                <a href="{{route('user-profile.profile', \Illuminate\Support\Facades\Auth::user()->id)}}">Trang cá nhân</a>
            </div>
        </div>


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview {{ \Illuminate\Support\Facades\Request::routeIs('admin.dashboard') ? 'menu-open' : '' }}">
                    <a href="{{route('admin.dashboard')}}"
                       class="nav-link {{ \Illuminate\Support\Facades\Request::routeIs('admin.dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Bảng điều khiển
                        </p>
                    </a>
                </li>
                @if(\Illuminate\Support\Facades\Auth::user()->role_id == \App\Models\RoleConstants::ROLE_ADMIN)
                    <li class="nav-item has-treeview  {{ \Illuminate\Support\Facades\Request::routeIs('group.*') ? 'menu-open' : '' }}">
                        <a href="#"
                           class="nav-link {{ \Illuminate\Support\Facades\Request::routeIs('group.*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-layer-group"></i>
                            <p>
                                Quản lý lớp học
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('group.index') }}"
                                   class="nav-link {{ \Illuminate\Support\Facades\Request::routeIs('group.index') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Danh sách</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('group.create')}}"
                                   class="nav-link {{ \Illuminate\Support\Facades\Request::routeIs('group.create') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Thêm mới</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview {{ \Illuminate\Support\Facades\Request::routeIs('user.*') ? 'menu-open' : '' }}">
                        <a href="#"
                           class="nav-link {{ \Illuminate\Support\Facades\Request::routeIs('user.*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Quản lý người dùng
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('user.index') }}"
                                   class="nav-link {{ \Illuminate\Support\Facades\Request::routeIs('user.*') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Danh sách</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('user.create')}}"
                                   class="nav-link" {{ \Illuminate\Support\Facades\Request::routeIs('user.*') ? 'active' : '' }}>
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Thêm mới</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview {{ \Illuminate\Support\Facades\Request::routeIs('students.*') ? 'menu-open' : '' }}">
                        <a href="#"
                           class="nav-link {{ \Illuminate\Support\Facades\Request::routeIs('students.*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-user-graduate"></i>
                            <p>
                                Quản lý học sinh
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('students.index') }}"
                                   class="nav-link {{ \Illuminate\Support\Facades\Request::routeIs('students.*') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Danh sách</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview {{ \Illuminate\Support\Facades\Request::routeIs('teachers.*') ? 'menu-open' : '' }}">
                        <a href="#"
                           class="nav-link {{ \Illuminate\Support\Facades\Request::routeIs('teachers.*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-user-circle"></i>
                            <p>
                                Quản lý giáo viên
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('teachers.index') }}"
                                   class="nav-link {{ \Illuminate\Support\Facades\Request::routeIs('teachers.*') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Danh sách</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview {{ \Illuminate\Support\Facades\Request::routeIs('grade.*') ? 'menu-open' : '' }}">
                        <a href="#"
                           class="nav-link {{ \Illuminate\Support\Facades\Request::routeIs('grade.*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-table"></i>
                            <p>
                                Quản lý khối lớp học
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview ">
                            <li class="nav-item">
                                <a href="{{ route('grade.index') }}"
                                   class="nav-link {{ \Illuminate\Support\Facades\Request::routeIs('grade.*') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Danh sách</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item has-treeview {{ \Illuminate\Support\Facades\Request::routeIs('subject.*') ? 'menu-open' : '' }}">
                        <a href="#"
                           class="nav-link {{ \Illuminate\Support\Facades\Request::routeIs('subject.*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-table"></i>
                            <p>
                                Quản lý môn học
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview ">
                            <li class="nav-item">
                                <a href="{{ route('subject.index') }}"
                                   class="nav-link {{ \Illuminate\Support\Facades\Request::routeIs('subject.*') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Danh sách</p>
                                </a>
                            </li>
                        </ul>
                    </li>


                    <li class="nav-item has-treeview {{ \Illuminate\Support\Facades\Request::routeIs('year.*') ? 'menu-open' : '' }}">
                        <a href="#"
                           class="nav-link {{ \Illuminate\Support\Facades\Request::routeIs('year.*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-calendar"></i>
                            <p>
                                Quản lý năm học
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('year.index') }}"
                                   class="nav-link {{ \Illuminate\Support\Facades\Request::routeIs('year.*') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Danh sách</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview {{ \Illuminate\Support\Facades\Request::routeIs('classifications.*') ? 'menu-open' : '' }}">
                        <a href="#"
                           class="nav-link {{ \Illuminate\Support\Facades\Request::routeIs('classifications.*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Quản lý phân lớp
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('classificationTeacherGroup.index') }}"
                                   class="nav-link {{ \Illuminate\Support\Facades\Request::routeIs('classifications.*') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Phân lớp cho giáo viên</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('teachers.index') }}"
                                   class="nav-link {{ \Illuminate\Support\Facades\Request::routeIs('classifications.*') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Phân lớp cho học viên</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @elseif(\Illuminate\Support\Facades\Auth::user()->role_id == \App\Models\RoleConstants::ROLE_CAA)
                    <li class="nav-item has-treeview  {{ \Illuminate\Support\Facades\Request::routeIs('group.*') ? 'menu-open' : '' }}">
                        <a href="#"
                           class="nav-link {{ \Illuminate\Support\Facades\Request::routeIs('group.*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-layer-group"></i>
                            <p>
                                Quản lý lớp học
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('group.index') }}"
                                   class="nav-link {{ \Illuminate\Support\Facades\Request::routeIs('group.index') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Danh sách</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('group.create')}}"
                                   class="nav-link {{ \Illuminate\Support\Facades\Request::routeIs('group.create') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Thêm mới</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview {{ \Illuminate\Support\Facades\Request::routeIs('user.*') ? 'menu-open' : '' }}">
                        <a href="#"
                           class="nav-link {{ \Illuminate\Support\Facades\Request::routeIs('user.*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Quản lý người dùng
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('user.index') }}"
                                   class="nav-link {{ \Illuminate\Support\Facades\Request::routeIs('user.*') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Danh sách</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview {{ \Illuminate\Support\Facades\Request::routeIs('students.*') ? 'menu-open' : '' }}">
                        <a href="#"
                           class="nav-link {{ \Illuminate\Support\Facades\Request::routeIs('students.*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Quản lý học sinh
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('students.index') }}"
                                   class="nav-link {{ \Illuminate\Support\Facades\Request::routeIs('students.*') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Danh sách</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview {{ \Illuminate\Support\Facades\Request::routeIs('teachers.*') ? 'menu-open' : '' }}">
                        <a href="#"
                           class="nav-link {{ \Illuminate\Support\Facades\Request::routeIs('teachers.*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Quản lý giáo viên
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('teachers.index') }}"
                                   class="nav-link {{ \Illuminate\Support\Facades\Request::routeIs('teachers.*') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Danh sách</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview {{ \Illuminate\Support\Facades\Request::routeIs('grade.*') ? 'menu-open' : '' }}">
                        <a href="#"
                           class="nav-link {{ \Illuminate\Support\Facades\Request::routeIs('grade.*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-table"></i>
                            <p>
                                Quản lý khối lớp học
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview ">
                            <li class="nav-item">
                                <a href="{{ route('grade.index') }}"
                                   class="nav-link {{ \Illuminate\Support\Facades\Request::routeIs('grade.*') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Danh sách</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item has-treeview {{ \Illuminate\Support\Facades\Request::routeIs('subject.*') ? 'menu-open' : '' }}">
                        <a href="#"
                           class="nav-link {{ \Illuminate\Support\Facades\Request::routeIs('subject.*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-table"></i>
                            <p>
                                Quản lý môn học
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview ">
                            <li class="nav-item">
                                <a href="{{ route('subject.index') }}"
                                   class="nav-link {{ \Illuminate\Support\Facades\Request::routeIs('subject.*') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Danh sách</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item has-treeview {{ \Illuminate\Support\Facades\Request::routeIs('year.*') ? 'menu-open' : '' }}">
                        <a href="#"
                           class="nav-link {{ \Illuminate\Support\Facades\Request::routeIs('year.*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-calendar"></i>
                            <p>
                                Quản lý năm học
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('year.index') }}"
                                   class="nav-link {{ \Illuminate\Support\Facades\Request::routeIs('year.*') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Danh sách</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @elseif(\Illuminate\Support\Facades\Auth::user()->role_id == \App\Models\RoleConstants::ROLE_STUDENT)
                    <li class="nav-item has-treeview {{ \Illuminate\Support\Facades\Request::routeIs('users.*') ? 'menu-open' : '' }}">
                        <a href="#"
                           class="nav-link {{ \Illuminate\Support\Facades\Request::routeIs('year.*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-calendar"></i>
                            <p>
                                Thông tin cá nhân
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                @foreach($users as $key => $user)
                                    <a href="{{route('student-profile.profile', $user->id)}}"
                                       @endforeach
                                       class="nav-link {{ \Illuminate\Support\Facades\Request::routeIs('users.*') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Hồ sơ cá nhân</p>
                                    </a>
                            </li>
                        </ul>
                    </li>
                @elseif(\Illuminate\Support\Facades\Auth::user()->role_id == \App\Models\RoleConstants::ROLE_TEACHER)
                    teacher
                @endif
                <li class="nav-item mt-5">
                    <a href="{{ route('admin.logout') }}" class="nav-link">
                        <i class="nav-icon fas fa-arrow-circle-left"></i>
                        <p>
                            Đăng xuất
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

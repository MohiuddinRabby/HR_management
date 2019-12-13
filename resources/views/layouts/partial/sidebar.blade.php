

<div class="sidebar" data-color="purple" data-background-color="white"
                data-image="{{asset('admindash/img/sidebar-1.jpg')}}">

                <div class="logo">
                    <a href="#" class="simple-text logo-normal">
                        Admin Panel
                    </a>
                </div>
                <div class="sidebar-wrapper">
                    <ul class="nav">
                        <li class="{{Request::is('admin/employee*')? 'active':''}}">
                            <a class="nav-link" href="{{route('admin.dashboard')}}">
                                <i class="material-icons">dashboard</i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="{{Request::is('admin/employee*')? 'active':''}}">
                            <a class="nav-link" href="{{route('employee.index')}}">
                                <i class="material-icons">person</i>
                                <p>Employees</p>
                            </a>
                        </li>
                        <li class="{{Request::is('admin/department*')? 'active':''}}">
                            <a class="nav-link" href="{{route('department.index')}}">
                                <i class="material-icons">content_paste</i>
                                <p>Department</p>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="#">
                                <i class="material-icons">calendar_today</i>
                                <p>Attendance</p>
                            </a>
                        </li>
                        <li class="{{Request::is('admin/leaveToAdmin*')? 'active':''}}">
                            <a class="nav-link" href="{{route('applicationToAdmin')}}">
                                <i class="material-icons">contact_mail</i>
                                <p>Leave Application</p>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="#">
                                <i class="material-icons">notifications</i>
                                <p>Notifications</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
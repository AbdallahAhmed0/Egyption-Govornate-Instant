<aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="{{ route('student-home') }}"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>
                    <li class="menu-title">Tables</li><!-- /.menu-title -->
                    <li class=" dropdown">
                        <a href="{{ route('departments.index') }}" class="dropdown-toggle"> <i class="menu-icon fa fa-building-o"></i>Departments</a>
                    </li>
                    <li class=" dropdown">
                        <a href="{{ route('doctors.create') }}" class="dropdown-toggle"> <i class="menu-icon fa fa-book text-success"></i>Doctors</a>
                    </li>
                    <li class=" dropdown">
                        <a href="{{ route('students.index') }}" class="dropdown-toggle"> <i class="menu-icon fa fa-user text-primary"></i>Students</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
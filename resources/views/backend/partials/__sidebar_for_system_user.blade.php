<li
    class="nav-item @if($commons['main_menu'] == 'report') menu-open @endif"
    class="nav-item"
>
    <a
        href="#"
        class="nav-link @if($commons['main_menu'] == 'report') active @endif"
    >
        <i class="nav-icon fas far fa-chart-bar"></i>
        <p>
            REPORTS
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li
            class="nav-item @if($commons['main_menu'] == 'report') menu-open @endif"
        >
             <a
                href="{{ route('report.index') }}"
                class="nav-link @if($commons['current_menu'] == 'Activity-report') active @endif"
            >
                <i class="fa fa-sticky-note" style="font-size: 15px"></i>
                <p>
                    <span class="badge badge-success">Monthly -></span>
                    Report
                </p>
            </a> 
        </li>


    </ul>
</li>

<li class="nav-header">Company</li>

<li class="nav-item @if($commons['main_menu'] == 'activity') menu-open @endif">
    <a
        href="{{ route('office.create') }}"
        class="nav-link @if($commons['current_menu'] == 'activity_create') active @endif"
    >
        <i class="nav-icon fas fa-plus"></i>
        <p> Add Office</p>
    </a>
</li>

<li class="nav-item @if($commons['main_menu'] == 'activity') menu-open @endif">
    <a
        href="{{ route('department.create') }}"
        class="nav-link @if($commons['current_menu'] == 'activity_index') active @endif"
    >
        <i class="nav-icon fas fa-list"></i>
        <p>Add Department</p>
    </a>
</li>

<li class="nav-header">Employee</li>


{{-- <li class="nav-item @if($commons['main_menu'] == 'activity') menu-open @endif">
    <a
        href=""
        class="nav-link @if($commons['current_menu'] == 'activity_create') active @endif"
    >
        <i class="nav-icon fas fa-plus"></i>
        <p>Position</p>
    </a>
</li> --}}


<li class="nav-item @if($commons['main_menu'] == 'activity') menu-open @endif">
    <a
        href="{{ route('employee.create') }}"
        class="nav-link @if($commons['current_menu'] == 'activity_create') active @endif"
    >
        <i class="nav-icon fas fa-plus"></i>
        <p>Add Employee</p>
    </a>
</li>


<li class="nav-item @if($commons['main_menu'] == 'activity') menu-open @endif">
    <a
        href="{{ route('employee.index') }}"
        class="nav-link @if($commons['current_menu'] == 'activity_create') active @endif"
    >
        <i class="nav-icon fas fa-plus"></i>
        <p>Manage Employee</p>
    </a>
</li>

<li class="nav-item @if($commons['main_menu'] == 'trainer') menu-open @endif">
    <a
        href="#"
        class="nav-link @if($commons['main_menu'] == 'trainer') active @endif"
    >
        <i class="nav-icon fas fa-user-tie"></i>
        <p>
           Attendence
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
   
        <li class="nav-item">
            <a
                href="{{ route('checktime.index')}}"
                class="nav-link @if($commons['current_menu'] == 'trainer_create') active @endif"
            >
                <i class="fas fa-plus nav-icon"></i>
                <p>Import Excel file</p>
            </a>
        </li>
      
        <li class="nav-item">
            <a
                href="{{route('attendence.index')}}"
                class="nav-link @if($commons['current_menu'] == 'trainer_index') active @endif"
            >
                <i class="fas fa-list nav-icon"></i>
                <p>Import Attendence Log</p>
            </a>
        </li>

        <li class="nav-item">
            <a
                href="{{route('empattendence.index')}}"
                class="nav-link @if($commons['current_menu'] == 'trainer_create') active @endif"
            >
                <i class="fas fa-plus nav-icon"></i>
                <p>Generate Total Report</p>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item @if($commons['main_menu'] == 'trainer') menu-open @endif">
    <a
        href="#"
        class="nav-link @if($commons['main_menu'] == 'trainer') active @endif"
    >
        <i class="nav-icon fas fa-user-shield"></i>
        <p>
           Payroll
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
   
        <li class="nav-item">
            <a
                href=""
                class="nav-link @if($commons['current_menu'] == 'trainer_create') active @endif"
            >
                <i class="fas fa-plus nav-icon"></i>
                <p>Sallary Generate</p>
            </a>
        </li>
      
        <li class="nav-item">
            <a
                href=""
                class="nav-link @if($commons['current_menu'] == 'trainer_index') active @endif"
            >
                <i class="fas fa-list nav-icon"></i>
                <p>Manage Sallary</p>
            </a>
        </li>

        <li class="nav-item">
            <a
                href=""
                class="nav-link @if($commons['current_menu'] == 'trainer_create') active @endif"
            >
                <i class="fas fa-plus nav-icon"></i>
                <p>Generate Report</p>
            </a>
        </li>
    </ul>
</li>
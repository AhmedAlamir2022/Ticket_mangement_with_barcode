 <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!-- User details -->
                

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">Menu</li>

                            <li>
                                <a href="{{ route('organizer.dashboard') }}" class="waves-effect">
                                    <i class="ri-dashboard-line"></i><span>Dashboard </span>
                                </a>
                            </li>

                            <li class="menu-title">Event Category</li>

                            <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="ri-account-circle-line"></i>
                            <span>Event Category</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                            <li><a href="{{ route('all.event.category1') }}">All Event Category</a></li>
                        <li><a href="{{ route('add.event.category1') }}">Add Event Category</a></li>
                            </ul>
                            </li>


                            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="ri-profile-line"></i>
                    <span>Events </span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{ route('all.event1') }}">All Events</a></li>
                    <li><a href="{{ route('add.event1') }}">Add Event</a></li> 
                    
                </ul>
            </li>
            <li class="menu-title">Tickets</li>

<li>
    <a href="javascript: void(0);" class="has-arrow waves-effect">
        <i class="ri-account-circle-line"></i>
        <span>Tickets</span>
    </a>
    <ul class="sub-menu" aria-expanded="false">
    <li><a href="{{ route('all.ticket1') }}">My Tickets</a></li>
                        <li><a href="{{ route('add.ticket1') }}">Add Ticket</a></li>
                        <li><a href="{{ route('report.ticket1') }}">Ticket Report</a></li>
                        <li><a href="{{ route('pending.ticket') }}">Pending Tickets</a></li>
    </ul>
</li>
           

            <li class="menu-title">Settings</li>

<li>
    <a href="{{ route('organizer.profile') }}" class="waves-effect">
        <i class="ri-user-line"></i><span>Profile</span>
    </a>
</li> 
<li>
    <a href="{{ route('organizer.logout') }}" class="waves-effect">
        <i class="ri-shut-down-line"></i><span>Logout</span>
    </a>
</li> 




                            
                         

                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
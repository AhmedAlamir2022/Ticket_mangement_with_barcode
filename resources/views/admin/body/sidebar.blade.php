<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <!-- User details -->
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                 <li class="menu-title">Menu</li>
                 <li>
                    <a href="{{ route('admin.dashboard') }}" class="waves-effect"><i class="ri-dashboard-line"></i><span>Admin Dashboard</span></a>
                </li>
                <li class="menu-title">Users</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="ri-account-circle-line"></i><span>Admins</span></a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.all') }}">All Admins</a></li>
                        <li><a href="{{ route('admin.register') }}">Add admin</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="ri-account-circle-line"></i><span>Event Organizers</span></a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('organizer.all') }}">All Event Organizers</a></li>
                        <li><a href="{{ route('add.organizer') }}">Add Event Organizers</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="ri-account-circle-line"></i><span>Users</span></a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('users.all') }}">All Users</a></li>
                    </ul>
                </li>
                <li class="menu-title">Event Category</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="ri-account-circle-line"></i><span>Event Category</span></a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('all.event.category') }}">All Event Category</a></li>
                        <li><a href="{{ route('add.event.category') }}">Add Event Category</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="ri-profile-line"></i><span>Events </span></a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('all.event') }}">All Events</a></li>
                        <li><a href="{{ route('add.event') }}">Add Event</a></li> 
                </ul>
                </li>
                <li class="menu-title">Tickets</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="ri-account-circle-line"></i><span>Tickets</span></a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('all.ticket') }}">All Tickets</a></li>
                        <li><a href="{{ route('add.ticket') }}">Add Ticket</a></li>
                        <li><a href="{{ route('report.ticket') }}">Ticket Report</a></li>
                    </ul>
                </li>
                <li class="menu-title">Subscribers</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="ri-profile-line"></i><span>Subscribers </span></a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('subscribe.email') }}">Subscribers</a></li>
                    </ul>
                </li>
                <li class="menu-title">User Testimonials</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="ri-profile-line"></i><span>Testimonials </span></a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('user.totestimonials') }}">Testimonials</a></li>
                    </ul>
                </li>
                <li class="menu-title">Contacts</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="ri-profile-line"></i><span>Contact  </span></a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('contact.message') }}">Contact Message</a></li>
                        <li><a href="{{ route('contact.quirey') }}">Contact Quires</a></li>
                    </ul>
                </li>
                <li class="menu-title">Settings</li>
                <li>
                    <a href="{{ route('admin.profile') }}" class="waves-effect"><i class="ri-user-line"></i><span>Profile</span></a>
                </li> 
                <li>
                    <a href="{{ route('admin.logout') }}" class="waves-effect"><i class="ri-shut-down-line"></i><span>Logout</span></a>
                </li>
            </ul>
        </div>
         <!-- Sidebar -->
    </div>
</div>
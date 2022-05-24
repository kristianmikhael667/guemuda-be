<nav class="sidebar">
    <ul class="menu-slide">
        {{-- Side Bar Admin --}}
        @if(Auth::user()->rolesname == "admin")
        <li class="{{ Request::is('administrator') ? 'active' : '' }}">
            <a class="" href="/administrator" title="">
                <i><svg id="icon-home" class="feather feather-home" stroke-linejoin="round" stroke-linecap="round"
                        stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="14" width="14"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                        <polyline points="9 22 9 12 15 12 15 22" />
                    </svg></i> Dashboard
            </a>
        </li>

        <li class="{{ Request::is('administrator/post*') ? 'active' : '' }}">
            <a class="" href="/administrator/post" title="">
                <i><svg id="ab4" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-airplay">
                        <path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path>
                        <polygon points="12 15 17 21 7 21 12 15"></polygon>
                    </svg></i> Post
            </a>
        </li>

        <li class="menu-item-has-children {{ Request::is('administrator/users*') ? 'active' : '' }}">
            <a class="" href="#" title="">
                <i><svg id="ab1" class="feather feather-users" stroke-linejoin="round" stroke-linecap="round"
                        stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="14" width="14"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                        <circle r="4" cy="7" cx="9" />
                        <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                        <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                    </svg></i> User Management
            </a>
            <ul class="submenu">
                <li><a href="/administrator/users" title="">All Users</a></li>
                <li><a href="/administrator/admin" title="">Admin</a></li>
                <li><a href="forgot-password.html" title="">Editor</a></li>
                <li><a href="loaders.html" title="">Contributor</a></li>
            </ul>
        </li>

        <li class="">
            <a class="" href="events.html" title=""><i class="">
                    <svg id="ab4" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-airplay">
                        <path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path>
                        <polygon points="12 15 17 21 7 21 12 15"></polygon>
                    </svg></i>Events
            </a>
        </li>
        <li class="">
            <a class="" href="products.html" title="">
                <i class="">
                    <svg id="ab5" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-shopping-bag">
                        <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                        <line x1="3" y1="6" x2="21" y2="6"></line>
                        <path d="M16 10a4 4 0 0 1-8 0"></path>
                    </svg></i>Content
            </a>
        </li>
        @endif

        {{-- Side Bar Superadmin --}}
        @if(Auth::user()->rolesname == "superadmin")

        <li class="{{ Request::is('administrator') ? 'active' : '' }}">
            <a class="" href="/administrator" title="">
                <i><svg id="icon-home" class="feather feather-home" stroke-linejoin="round" stroke-linecap="round"
                        stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="14" width="14"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                        <polyline points="9 22 9 12 15 12 15 22" />
                    </svg></i> Dashboard
            </a>
        </li>

        <li class="{{ Request::is('administrator/post*') ? 'active' : '' }}">
            <a class="" href="/administrator/post" title="">
                <i><svg id="ab4" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-airplay">
                        <path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path>
                        <polygon points="12 15 17 21 7 21 12 15"></polygon>
                    </svg></i> Post
            </a>
        </li>

        <li class="{{ Request::is('administrator/premiumcontent*') ? 'active' : '' }}">
            <a class="" href="/administrator/premiumcontent" title="">
                <i><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-gift">
                        <polyline points="20 12 20 22 4 22 4 12"></polyline>
                        <rect x="2" y="7" width="20" height="5"></rect>
                        <line x1="12" y1="22" x2="12" y2="7"></line>
                        <path d="M12 7H7.5a2.5 2.5 0 0 1 0-5C11 2 12 7 12 7z"></path>
                        <path d="M12 7h4.5a2.5 2.5 0 0 0 0-5C13 2 12 7 12 7z"></path>
                    </svg></i> Premium Content
            </a>
        </li>

        {{-- Clear --}}
        {{-- <li class="{{ Request::is('administrator/category-premium*') ? 'active' : '' }}">
            <a class="" href="/administrator/category-premium" title="">
                <i><svg id="ab4" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-airplay">
                        <path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path>
                        <polygon points="12 15 17 21 7 21 12 15"></polygon>
                    </svg></i> Premium Category
            </a>
        </li> --}}
        {{-- <li class="menu-item-has-children {{ Request::is('administrator/post*') ? 'active' : '' }}">
            <a class="" href="#" title="">
                <i><svg id="ab4" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-airplay">
                        <path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path>
                        <polygon points="12 15 17 21 7 21 12 15"></polygon>
                    </svg></i> Post
            </a>
            <ul class="submenu">
                <li><a href="/administrator/post" title="">Article News</a></li>
                <li><a href="/administrator/video-article" title="">Video Article</a></li>
            </ul>
        </li> --}}

        <li class="{{ Request::is('administrator/webinars*') ? 'active' : '' }}">
            <a class="" href="/administrator/webinars" title="">
                <i><svg id="webi" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-speaker">
                        <rect x="4" y="2" width="16" height="20" rx="2" ry="2"></rect>
                        <circle cx="12" cy="14" r="4"></circle>
                        <line x1="12" y1="6" x2="12.01" y2="6"></line>
                    </svg></i> Webinar
            </a>
        </li>

        <li class="{{ Request::is('administrator/community*') ? 'active' : '' }}">
            <a class="" href="/administrator/community-news" title="">
                <i><svg id="commu" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-users">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                        <circle cx="9" cy="7" r="4"></circle>
                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                    </svg></i> Community
            </a>
        </li>

        {{-- <li class="{{ Request::is('administrator/communitiesgroup*') ? 'active' : '' }}">
            <a class="" href="/administrator/communitiesgroup" title="">
                <i><svg id="commu" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-users">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                        <circle cx="9" cy="7" r="4"></circle>
                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                    </svg></i> Category Community
            </a>
        </li> --}}

        {{-- <li class="menu-item-has-children {{ Request::is('administrator/community*') ? 'active' : '' }}">
            <a class="" href="#" title="">
                <i><svg id="commu" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-users">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                        <circle cx="9" cy="7" r="4"></circle>
                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                    </svg></i> Community
            </a>
            <ul class="submenu">
                <li><a href="/administrator/community-news" title="">News</a></li>
                <li><a href="/administrator/community-video" title="">Video</a></li>
                <li><a href="/administrator/community-group" title="">Group Social Media</a></li>
            </ul>
        </li> --}}

        {{-- <li class="menu-item-has-children {{ Request::is('administrator/category-article*') ? 'active' : '' }}">
            <a class="" href="#" title="">
                <i><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-list">
                        <line x1="8" y1="6" x2="21" y2="6"></line>
                        <line x1="8" y1="12" x2="21" y2="12"></line>
                        <line x1="8" y1="18" x2="21" y2="18"></line>
                        <line x1="3" y1="6" x2="3.01" y2="6"></line>
                        <line x1="3" y1="12" x2="3.01" y2="12"></line>
                        <line x1="3" y1="18" x2="3.01" y2="18"></line>
                    </svg></i> Category
            </a>
            <ul class="submenu">
                <li><a href="/administrator/category-article" title="">Article</a></li>
                <li><a href="/administrator/category-community" title="">Comunnity</a></li>
                <li><a href="/administrator/category-webinars" title="">Webinars</a></li>
            </ul>
        </li> --}}

        <li class="{{ Request::is('administrator/media*') ? 'active' : '' }}">
            <a class="" href="/administrator/media" title="">
                <i><svg id="med" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-camera">
                        <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z">
                        </path>
                        <circle cx="12" cy="13" r="4"></circle>
                    </svg></i> Media
            </a>
        </li>


        <li class="">
            <a class="" href="/administrator" title="">
                <i><svg id="kom" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-file-text">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                        <polyline points="14 2 14 8 20 8"></polyline>
                        <line x1="16" y1="13" x2="8" y2="13"></line>
                        <line x1="16" y1="17" x2="8" y2="17"></line>
                        <polyline points="10 9 9 9 8 9"></polyline>
                    </svg></i> Comment
            </a>
        </li>

        <li class="menu-item-has-children {{ Request::is('administrator/users*') ? 'active' : '' }}">
            <a class="" href="#" title="">
                <i><svg id="ab1" class="feather feather-users" stroke-linejoin="round" stroke-linecap="round"
                        stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="14" width="14"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                        <circle r="4" cy="7" cx="9" />
                        <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                        <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                    </svg></i> User Management
            </a>
        {{-- User --}}
            <ul class="submenu">
                <li><a href="/administrator/users" title="">All</a></li> 
                <li><a href="/administrator/superadmin" title="">Super Admin</a></li> 
                <li><a href="/administrator/admin" title="">Admin</a></li> 
                <li><a href="/administrator/editor" title="">Editor</a></li> 
                <li><a href="/administrator/contributor" title="">Contributor</a></li> 
                <li><a href="/administrator/subscriber" title="">Subscriber</a></li> 
            </ul>
        </li>

        <li class="{{ Request::is('administrator/roles*') ? 'active' : '' }}">
            <a class="" href="/administrator/roles" title="">
                <i class="">
                    <svg id="main" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-tool">
                        <path
                            d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z">
                        </path>
                    </svg></i>Roles
            </a>
        </li>
        {{-- <li class="">
            <a class="" href="events.html" title=""><i class="">
                    <svg id="set" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-settings">
                        <circle cx="12" cy="12" r="3"></circle>
                        <path
                            d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                        </path>
                    </svg></i>Setting
            </a>
        </li> --}}

        @endif
    </ul>
</nav>
<!-- sidebar -->
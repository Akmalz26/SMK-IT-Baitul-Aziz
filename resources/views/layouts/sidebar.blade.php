<aside class="sidebar sidebar-default sidebar-white sidebar-base navs-rounded-all ">
    <div class="sidebar-header d-flex align-items-center justify-content-start">
        <a href="{{route('dashboard')}}" class="navbar-brand">

            <h4 class="logo-title">SMK IT Baitul Aziz</h4>
        </a>
        <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
            <i class="icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.25 12.2744L19.25 12.2744" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M10.2998 18.2988L4.2498 12.2748L10.2998 6.24976" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </i>
        </div>
    </div>
    <div class="sidebar-body pt-0 data-scrollbar">
        <div class="sidebar-list">
            <!-- Sidebar Menu Start -->
            <ul class="navbar-nav iq-main-menu" id="sidebar-menu">
                <li class="nav-item static-item">
                    <a class="nav-link static-item disabled" href="#" tabindex="-1">
                        <span class="default-icon">Home</span>
                        <span class="mini-icon">-</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}" aria-current="page" href="{{ route('dashboard') }}">
                        <i class="icon">
                            <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-20">
                                <path opacity="0.4" d="M16.0756 2H19.4616C20.8639 2 22.0001 3.14585 22.0001 4.55996V7.97452C22.0001 9.38864 20.8639 10.5345 19.4616 10.5345H16.0756C14.6734 10.5345 13.5371 9.38864 13.5371 7.97452V4.55996C13.5371 3.14585 14.6734 2 16.0756 2Z" fill="currentColor"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M4.53852 2H7.92449C9.32676 2 10.463 3.14585 10.463 4.55996V7.97452C10.463 9.38864 9.32676 10.5345 7.92449 10.5345H4.53852C3.13626 10.5345 2 9.38864 2 7.97452V4.55996C2 3.14585 3.13626 2 4.53852 2ZM4.53852 13.4655H7.92449C9.32676 13.4655 10.463 14.6114 10.463 16.0255V19.44C10.463 20.8532 9.32676 22 7.92449 22H4.53852C3.13626 22 2 20.8532 2 19.44V16.0255C2 14.6114 3.13626 13.4655 4.53852 13.4655ZM19.4615 13.4655H16.0755C14.6732 13.4655 13.537 14.6114 13.537 16.0255V19.44C13.537 20.8532 14.6732 22 16.0755 22H19.4615C20.8637 22 22 20.8532 22 19.44V16.0255C22 14.6114 20.8637 13.4655 19.4615 13.4655Z" fill="currentColor"></path>
                            </svg>
                        </i>
                        <span class="item-name">Dashboard</span>
                    </a>
                </li>

                <li>
                    <hr class="hr-horizontal">
                </li>
                <li class="nav-item static-item">
                    <a class="nav-link static-item disabled" href="#" tabindex="-1">
                        <span class="default-icon">Pages</span>
                        <span class="mini-icon">-</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('users*') ? 'active' : '' }}" data-bs-toggle="collapse" href="#sidebar-user" role="button" aria-expanded="false" aria-controls="sidebar-user">
                        <i class="icon">
                            <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.9488 14.54C8.49884 14.54 5.58789 15.1038 5.58789 17.2795C5.58789 19.4562 8.51765 20.0001 11.9488 20.0001C15.3988 20.0001 18.3098 19.4364 18.3098 17.2606C18.3098 15.084 15.38 14.54 11.9488 14.54Z" fill="currentColor"></path>
                                <path opacity="0.4" d="M11.949 12.467C14.2851 12.467 16.1583 10.5831 16.1583 8.23351C16.1583 5.88306 14.2851 4 11.949 4C9.61293 4 7.73975 5.88306 7.73975 8.23351C7.73975 10.5831 9.61293 12.467 11.949 12.467Z" fill="currentColor"></path>
                                <path opacity="0.4" d="M21.0881 9.21923C21.6925 6.84176 19.9205 4.70654 17.664 4.70654C17.4187 4.70654 17.1841 4.73356 16.9549 4.77949C16.9244 4.78669 16.8904 4.802 16.8725 4.82902C16.8519 4.86324 16.8671 4.90917 16.8895 4.93889C17.5673 5.89528 17.9568 7.0597 17.9568 8.30967C17.9568 9.50741 17.5996 10.6241 16.9728 11.5508C16.9083 11.6462 16.9656 11.775 17.0793 11.7948C17.2369 11.8227 17.3981 11.8371 17.5629 11.8416C19.2059 11.8849 20.6807 10.8213 21.0881 9.21923Z" fill="currentColor"></path>
                                <path d="M22.8094 14.817C22.5086 14.1722 21.7824 13.73 20.6783 13.513C20.1572 13.3851 18.747 13.205 17.4352 13.2293C17.4155 13.232 17.4048 13.2455 17.403 13.2545C17.4003 13.2671 17.4057 13.2887 17.4316 13.3022C18.0378 13.6039 20.3811 14.916 20.0865 17.6834C20.074 17.8032 20.1698 17.9068 20.2888 17.8888C20.8655 17.8059 22.3492 17.4853 22.8094 16.4866C23.0637 15.9589 23.0637 15.3456 22.8094 14.817Z" fill="currentColor"></path>
                                <path opacity="0.4" d="M7.04459 4.77973C6.81626 4.7329 6.58077 4.70679 6.33543 4.70679C4.07901 4.70679 2.30701 6.84201 2.9123 9.21947C3.31882 10.8216 4.79355 11.8851 6.43661 11.8419C6.60136 11.8374 6.76343 11.8221 6.92013 11.7951C7.03384 11.7753 7.09115 11.6465 7.02668 11.551C6.3999 10.6234 6.04263 9.50765 6.04263 8.30991C6.04263 7.05904 6.43303 5.89462 7.11085 4.93913C7.13234 4.90941 7.14845 4.86348 7.12696 4.82926C7.10906 4.80135 7.07593 4.78694 7.04459 4.77973Z" fill="currentColor"></path>
                                <path d="M3.32156 13.5127C2.21752 13.7297 1.49225 14.1719 1.19139 14.8167C0.936203 15.3453 0.936203 15.9586 1.19139 16.4872C1.65163 17.4851 3.13531 17.8066 3.71195 17.8885C3.83104 17.9065 3.92595 17.8038 3.91342 17.6832C3.61883 14.9167 5.9621 13.6046 6.56918 13.3029C6.59425 13.2885 6.59962 13.2677 6.59694 13.2542C6.59515 13.2452 6.5853 13.2317 6.5656 13.2299C5.25294 13.2047 3.84358 13.3848 3.32156 13.5127Z" fill="currentColor"></path>
                            </svg>
                        </i>
                        <span class="item-name">Users</span>
                        <i class="right-icon">
                            <svg class="icon-18" xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </i>
                    </a>
                    <ul class="sub-nav collapse {{ request()->is('users*') ? 'show' : '' }}" id="sidebar-user" data-bs-parent="#sidebar-menu">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('dashboard/user-profile') ? 'active' : '' }}" href="dashboard/user-profile">
                                <i class="icon">
                                    <svg class="icon-10" xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                        <g>
                                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                        </g>
                                    </svg>
                                </i>
                                <i class="sidenav-mini-icon"> U </i>
                                <span class="item-name">User Profile</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('dashboard/user-add') ? 'active' : '' }}" href="dashboard/user-add">
                                <i class="icon">
                                    <svg class="icon-10" xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                        <g>
                                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                        </g>
                                    </svg>
                                </i>
                                <i class="sidenav-mini-icon"> A </i>
                                <span class="item-name">Add User</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('dashboard/user-list') ? 'active' : '' }}" href="dashboard/user-list">
                                <i class="icon">
                                    <svg class="icon-10" xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                        <g>
                                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                        </g>
                                    </svg>
                                </i>
                                <i class="sidenav-mini-icon"> U </i>
                                <span class="item-name">User List</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('admin') ? 'active' : '' }}" href="admin">
                        <i class="icon">
                            <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.7688 8.71387H16.2312C18.5886 8.71387 20.5 10.5831 20.5 12.8885V17.8254C20.5 20.1308 18.5886 22 16.2312 22H7.7688C5.41136 22 3.5 20.1308 3.5 17.8254V12.8885C3.5 10.5831 5.41136 8.71387 7.7688 8.71387ZM11.9949 17.3295C12.4928 17.3295 12.8891 16.9419 12.8891 16.455V14.2489C12.8891 13.772 12.4928 13.3844 11.9949 13.3844C11.5072 13.3844 11.1109 13.772 11.1109 14.2489V16.455C11.1109 16.9419 11.5072 17.3295 11.9949 17.3295Z" fill="currentColor"></path>
                                <path opacity="0.4" d="M17.523 7.39595V8.86667C17.1673 8.7673 16.7913 8.71761 16.4052 8.71761H15.7447V7.39595C15.7447 5.37868 14.0681 3.73903 12.0053 3.73903C9.94257 3.73903 8.26594 5.36874 8.25578 7.37608V8.71761H7.60545C7.20916 8.71761 6.83319 8.7673 6.47754 8.87661V7.39595C6.4877 4.41476 8.95692 2 11.985 2C15.0537 2 17.523 4.41476 17.523 7.39595Z" fill="currentColor"></path>
                            </svg>
                        </i>
                        <span class="item-name">Admin</span>
                    </a>
                </li>
                <li>
                    <hr class="hr-horizontal">
                </li>
                <li class="nav-item static-item">
                    <a class="nav-link static-item disabled" href="#" tabindex="-1">
                        <span class="default-icon">Main</span>
                        <span class="mini-icon">-</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('informasi*') ? 'active' : '' }}" data-bs-toggle="collapse" href="#sidebar-informasi" role="button" aria-expanded="false" aria-controls="sidebar-informasi">
                        <i class="icon">
                        <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.4" d="M2 11.0786C2.05 13.4166 2.19 17.4156 2.21 17.8566C2.281 18.7996 2.642 19.7526 3.204 20.4246C3.986 21.3676 4.949 21.7886 6.292 21.7886C8.148 21.7986 10.194 21.7986 12.181 21.7986C14.176 21.7986 16.112 21.7986 17.747 21.7886C19.071 21.7886 20.064 21.3566 20.836 20.4246C21.398 19.7526 21.759 18.7896 21.81 17.8566C21.83 17.4856 21.93 13.1446 21.99 11.0786H2Z" fill="currentColor"></path>
                                <path d="M11.2451 15.3843V16.6783C11.2451 17.0923 11.5811 17.4283 11.9951 17.4283C12.4091 17.4283 12.7451 17.0923 12.7451 16.6783V15.3843C12.7451 14.9703 12.4091 14.6343 11.9951 14.6343C11.5811 14.6343 11.2451 14.9703 11.2451 15.3843Z" fill="currentColor"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.211 14.5565C10.111 14.9195 9.762 15.1515 9.384 15.1015C6.833 14.7455 4.395 13.8405 2.337 12.4815C2.126 12.3435 2 12.1075 2 11.8555V8.38949C2 6.28949 3.712 4.58149 5.817 4.58149H7.784C7.972 3.12949 9.202 2.00049 10.704 2.00049H13.286C14.787 2.00049 16.018 3.12949 16.206 4.58149H18.183C20.282 4.58149 21.99 6.28949 21.99 8.38949V11.8555C21.99 12.1075 21.863 12.3425 21.654 12.4815C19.592 13.8465 17.144 14.7555 14.576 15.1105C14.541 15.1155 14.507 15.1175 14.473 15.1175C14.134 15.1175 13.831 14.8885 13.746 14.5525C13.544 13.7565 12.821 13.1995 11.99 13.1995C11.148 13.1995 10.433 13.7445 10.211 14.5565ZM13.286 3.50049H10.704C10.031 3.50049 9.469 3.96049 9.301 4.58149H14.688C14.52 3.96049 13.958 3.50049 13.286 3.50049Z" fill="currentColor">
                                </path>
                            </svg>
                        </i>
                        <span class="item-name">Informasi Sekolah</span>
                        <i class="right-icon">
                            <svg class="icon-18" xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </i>
                    </a>
                    <ul class="sub-nav collapse {{ request()->is('informasi*') ? 'show' : '' }}" id="sidebar-informasi" data-bs-parent="#sidebar-menu">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('dashboard/sejarah') ? 'active' : '' }}" href="{{route('sejarah.index')}}">
                                <i class="icon">
                                    <svg class="icon-10" xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                        <g>
                                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                        </g>
                                    </svg>
                                </i>
                                <i class="sidenav-mini-icon"> S </i>
                                <span class="item-name">Sejarah Sekolah</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('dashboard/profil') ? 'active' : '' }}" href="{{route('profil.sekolah')}}">
                                <i class="icon">
                                    <svg class="icon-10" xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                        <g>
                                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                        </g>
                                    </svg>
                                </i>
                                <i class="sidenav-mini-icon"> P </i>
                                <span class="item-name">Profil Sekolah</span>
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link {{ request()->is('dashboard/ekstrakulikuler') ? 'active' : '' }}" href="dashboard/ekstrakulikuler">
                                <i class="icon">
                                    <svg class="icon-10" xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                        <g>
                                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                        </g>
                                    </svg>
                                </i>
                                <i class="sidenav-mini-icon"> E </i>
                                <span class="item-name">Ekstrakulikuler</span>
                            </a>
                        </li> -->
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('admin/sambutan') ? 'active' : '' }}" href="{{route('sambutan.index')}}">
                        <i class="icon">
                            <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.4" d="M2 11.0786C2.05 13.4166 2.19 17.4156 2.21 17.8566C2.281 18.7996 2.642 19.7526 3.204 20.4246C3.986 21.3676 4.949 21.7886 6.292 21.7886C8.148 21.7986 10.194 21.7986 12.181 21.7986C14.176 21.7986 16.112 21.7986 17.747 21.7886C19.071 21.7886 20.064 21.3566 20.836 20.4246C21.398 19.7526 21.759 18.7896 21.81 17.8566C21.83 17.4856 21.93 13.1446 21.99 11.0786H2Z" fill="currentColor"></path>
                                <path d="M11.2451 15.3843V16.6783C11.2451 17.0923 11.5811 17.4283 11.9951 17.4283C12.4091 17.4283 12.7451 17.0923 12.7451 16.6783V15.3843C12.7451 14.9703 12.4091 14.6343 11.9951 14.6343C11.5811 14.6343 11.2451 14.9703 11.2451 15.3843Z" fill="currentColor"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.211 14.5565C10.111 14.9195 9.762 15.1515 9.384 15.1015C6.833 14.7455 4.395 13.8405 2.337 12.4815C2.126 12.3435 2 12.1075 2 11.8555V8.38949C2 6.28949 3.712 4.58149 5.817 4.58149H7.784C7.972 3.12949 9.202 2.00049 10.704 2.00049H13.286C14.787 2.00049 16.018 3.12949 16.206 4.58149H18.183C20.282 4.58149 21.99 6.28949 21.99 8.38949V11.8555C21.99 12.1075 21.863 12.3425 21.654 12.4815C19.592 13.8465 17.144 14.7555 14.576 15.1105C14.541 15.1155 14.507 15.1175 14.473 15.1175C14.134 15.1175 13.831 14.8885 13.746 14.5525C13.544 13.7565 12.821 13.1995 11.99 13.1995C11.148 13.1995 10.433 13.7445 10.211 14.5565ZM13.286 3.50049H10.704C10.031 3.50049 9.469 3.96049 9.301 4.58149H14.688C14.52 3.96049 13.958 3.50049 13.286 3.50049Z" fill="currentColor">
                                </path>
                            </svg>
                        </i>
                        <span class="item-name">Sambutan Kepsek</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('admin/berita') ? 'active' : '' }}" href="{{ route('admin.berita') }}">
                        <i class="icon">
                            <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.4" d="M2 11.0786C2.05 13.4166 2.19 17.4156 2.21 17.8566C2.281 18.7996 2.642 19.7526 3.204 20.4246C3.986 21.3676 4.949 21.7886 6.292 21.7886C8.148 21.7986 10.194 21.7986 12.181 21.7986C14.176 21.7986 16.112 21.7986 17.747 21.7886C19.071 21.7886 20.064 21.3566 20.836 20.4246C21.398 19.7526 21.759 18.7896 21.81 17.8566C21.83 17.4856 21.93 13.1446 21.99 11.0786H2Z" fill="currentColor"></path>
                                <path d="M11.2451 15.3843V16.6783C11.2451 17.0923 11.5811 17.4283 11.9951 17.4283C12.4091 17.4283 12.7451 17.0923 12.7451 16.6783V15.3843C12.7451 14.9703 12.4091 14.6343 11.9951 14.6343C11.5811 14.6343 11.2451 14.9703 11.2451 15.3843Z" fill="currentColor"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.211 14.5565C10.111 14.9195 9.762 15.1515 9.384 15.1015C6.833 14.7455 4.395 13.8405 2.337 12.4815C2.126 12.3435 2 12.1075 2 11.8555V8.38949C2 6.28949 3.712 4.58149 5.817 4.58149H7.784C7.972 3.12949 9.202 2.00049 10.704 2.00049H13.286C14.787 2.00049 16.018 3.12949 16.206 4.58149H18.183C20.282 4.58149 21.99 6.28949 21.99 8.38949V11.8555C21.99 12.1075 21.863 12.3425 21.654 12.4815C19.592 13.8465 17.144 14.7555 14.576 15.1105C14.541 15.1155 14.507 15.1175 14.473 15.1175C14.134 15.1175 13.831 14.8885 13.746 14.5525C13.544 13.7565 12.821 13.1995 11.99 13.1995C11.148 13.1995 10.433 13.7445 10.211 14.5565ZM13.286 3.50049H10.704C10.031 3.50049 9.469 3.96049 9.301 4.58149H14.688C14.52 3.96049 13.958 3.50049 13.286 3.50049Z" fill="currentColor">
                                </path>
                            </svg>
                        </i>
                        <span class="item-name">Berita</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('dashboard/galeri') ? 'active' : '' }}" href="#">
                        <i class="icon">
                            <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.4" d="M2 11.0786C2.05 13.4166 2.19 17.4156 2.21 17.8566C2.281 18.7996 2.642 19.7526 3.204 20.4246C3.986 21.3676 4.949 21.7886 6.292 21.7886C8.148 21.7986 10.194 21.7986 12.181 21.7986C14.176 21.7986 16.112 21.7986 17.747 21.7886C19.071 21.7886 20.064 21.3566 20.836 20.4246C21.398 19.7526 21.759 18.7896 21.81 17.8566C21.83 17.4856 21.93 13.1446 21.99 11.0786H2Z" fill="currentColor"></path>
                                <path d="M11.2451 15.3843V16.6783C11.2451 17.0923 11.5811 17.4283 11.9951 17.4283C12.4091 17.4283 12.7451 17.0923 12.7451 16.6783V15.3843C12.7451 14.9703 12.4091 14.6343 11.9951 14.6343C11.5811 14.6343 11.2451 14.9703 11.2451 15.3843Z" fill="currentColor"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.211 14.5565C10.111 14.9195 9.762 15.1515 9.384 15.1015C6.833 14.7455 4.395 13.8405 2.337 12.4815C2.126 12.3435 2 12.1075 2 11.8555V8.38949C2 6.28949 3.712 4.58149 5.817 4.58149H7.784C7.972 3.12949 9.202 2.00049 10.704 2.00049H13.286C14.787 2.00049 16.018 3.12949 16.206 4.58149H18.183C20.282 4.58149 21.99 6.28949 21.99 8.38949V11.8555C21.99 12.1075 21.863 12.3425 21.654 12.4815C19.592 13.8465 17.144 14.7555 14.576 15.1105C14.541 15.1155 14.507 15.1175 14.473 15.1175C14.134 15.1175 13.831 14.8885 13.746 14.5525C13.544 13.7565 12.821 13.1995 11.99 13.1995C11.148 13.1995 10.433 13.7445 10.211 14.5565ZM13.286 3.50049H10.704C10.031 3.50049 9.469 3.96049 9.301 4.58149H14.688C14.52 3.96049 13.958 3.50049 13.286 3.50049Z" fill="currentColor">
                                </path>
                            </svg>
                        </i>
                        <span class="item-name">Galeri</span>
                    </a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('dashboard/kontak') ? 'active' : '' }}" href="{{ route('kontak.index') }}">
                        <i class="icon">
                            <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.4" d="M2 11.0786C2.05 13.4166 2.19 17.4156 2.21 17.8566C2.281 18.7996 2.642 19.7526 3.204 20.4246C3.986 21.3676 4.949 21.7886 6.292 21.7886C8.148 21.7986 10.194 21.7986 12.181 21.7986C14.176 21.7986 16.112 21.7986 17.747 21.7886C19.071 21.7886 20.064 21.3566 20.836 20.4246C21.398 19.7526 21.759 18.7896 21.81 17.8566C21.83 17.4856 21.93 13.1446 21.99 11.0786H2Z" fill="currentColor"></path>
                                <path d="M11.2451 15.3843V16.6783C11.2451 17.0923 11.5811 17.4283 11.9951 17.4283C12.4091 17.4283 12.7451 17.0923 12.7451 16.6783V15.3843C12.7451 14.9703 12.4091 14.6343 11.9951 14.6343C11.5811 14.6343 11.2451 14.9703 11.2451 15.3843Z" fill="currentColor"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.211 14.5565C10.111 14.9195 9.762 15.1515 9.384 15.1015C6.833 14.7455 4.395 13.8405 2.337 12.4815C2.126 12.3435 2 12.1075 2 11.8555V8.38949C2 6.28949 3.712 4.58149 5.817 4.58149H7.784C7.972 3.12949 9.202 2.00049 10.704 2.00049H13.286C14.787 2.00049 16.018 3.12949 16.206 4.58149H18.183C20.282 4.58149 21.99 6.28949 21.99 8.38949V11.8555C21.99 12.1075 21.863 12.3425 21.654 12.4815C19.592 13.8465 17.144 14.7555 14.576 15.1105C14.541 15.1155 14.507 15.1175 14.473 15.1175C14.134 15.1175 13.831 14.8885 13.746 14.5525C13.544 13.7565 12.821 13.1995 11.99 13.1995C11.148 13.1995 10.433 13.7445 10.211 14.5565ZM13.286 3.50049H10.704C10.031 3.50049 9.469 3.96049 9.301 4.58149H14.688C14.52 3.96049 13.958 3.50049 13.286 3.50049Z" fill="currentColor">
                                </path>
                            </svg>
                        </i>
                        <span class="item-name">Kontak</span>
                    </a>
                </li>
                

    
            </ul>
            <!-- Sidebar Menu End -->
        </div>
    </div>
    <div class="sidebar-footer"></div>
</aside>

<div class="main-content">
    <div class="position-relative iq-banner">
        <!--Nav Start-->
        <nav class="nav navbar navbar-expand-lg navbar-light iq-navbar">
            <div class="container-fluid navbar-inner">
                <a href="../dashboard/index.html" class="navbar-brand">

                    <!--Logo start-->
                    <div class="logo-main">
                        <div class="logo-normal">
                            <svg class="text-primary icon-30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2" transform="rotate(-45 -0.757324 19.2427)" fill="currentColor" />
                                <rect x="7.72803" y="27.728" width="28" height="4" rx="2" transform="rotate(-45 7.72803 27.728)" fill="currentColor" />
                                <rect x="10.5366" y="16.3945" width="16" height="4" rx="2" transform="rotate(45 10.5366 16.3945)" fill="currentColor" />
                                <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2" transform="rotate(45 10.5562 -0.556152)" fill="currentColor" />
                            </svg>
                        </div>
                        <div class="logo-mini">
                            <svg class="text-primary icon-30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2" transform="rotate(-45 -0.757324 19.2427)" fill="currentColor" />
                                <rect x="7.72803" y="27.728" width="28" height="4" rx="2" transform="rotate(-45 7.72803 27.728)" fill="currentColor" />
                                <rect x="10.5366" y="16.3945" width="16" height="4" rx="2" transform="rotate(45 10.5366 16.3945)" fill="currentColor" />
                                <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2" transform="rotate(45 10.5562 -0.556152)" fill="currentColor" />
                            </svg>
                        </div>
                    </div>
                    <!--logo End-->




                    <h4 class="logo-title">Hope UI</h4>
                </a>
                <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
                    <i class="icon">
                        <svg width="20px" class="icon-20" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z" />
                        </svg>
                    </i>
                </div>
                <div class="input-group search-input">
                    <span class="input-group-text" id="search-input">
                        <svg class="icon-18" width="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="11.7669" cy="11.7666" r="8.98856" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></circle>
                            <path d="M18.0186 18.4851L21.5426 22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </span>
                    <input type="search" class="form-control" placeholder="Search...">
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <span class="mt-2 navbar-toggler-bar bar1"></span>
                        <span class="navbar-toggler-bar bar2"></span>
                        <span class="navbar-toggler-bar bar3"></span>
                    </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="mb-2 navbar-nav ms-auto align-items-center navbar-list mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="py-0 nav-link d-flex align-items-center" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="../assets/images/avatars/01.png" alt="User-Profile" class="theme-color-default-img img-fluid avatar avatar-50 avatar-rounded">
                                <img src="../assets/images/avatars/avtar_1.png" alt="User-Profile" class="theme-color-purple-img img-fluid avatar avatar-50 avatar-rounded">
                                <img src="../assets/images/avatars/avtar_2.png" alt="User-Profile" class="theme-color-blue-img img-fluid avatar avatar-50 avatar-rounded">
                                <img src="../assets/images/avatars/avtar_4.png" alt="User-Profile" class="theme-color-green-img img-fluid avatar avatar-50 avatar-rounded">
                                <img src="../assets/images/avatars/avtar_5.png" alt="User-Profile" class="theme-color-yellow-img img-fluid avatar avatar-50 avatar-rounded">
                                <img src="../assets/images/avatars/avtar_3.png" alt="User-Profile" class="theme-color-pink-img img-fluid avatar avatar-50 avatar-rounded">
                                <div class="caption ms-3 d-none d-md-block ">
                                    @if(Auth::user())
                                        <h6 class="mb-0 caption-title">{{ Auth::user()->name }}</h6>
                                        <p class="mb-0 caption-sub-title">{{ Auth::user()->email }}</p>
                                    @else
                                        <h6 class="mb-0 caption-title">Tidak Ada User</h6>
                                        <p class="mb-0 caption-sub-title">Tidak Ada Email</p>
                                    @endif
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="../dashboard/app/user-profile.html">Profile</a></li>
                                <li><a class="dropdown-item" href="../dashboard/app/user-privacy-setting.html">Privacy Setting</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav> <!-- Nav Header Component Start -->
        <div class="iq-navbar-header" style="height: 215px;">
            <div class="container-fluid iq-container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="flex-wrap d-flex justify-content-between align-items-center">
                            <div>
                                <h1>Baitul Aziz</h1>
                                <p>Menuai Risalah, Menggapai Peradaban.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="iq-header-img">
                <img src="../assets/images/dashboard/top-header.png" alt="header" class="theme-color-default-img img-fluid w-100 h-100 animated-scaleX">
                <img src="../assets/images/dashboard/top-header1.png" alt="header" class="theme-color-purple-img img-fluid w-100 h-100 animated-scaleX">
                <img src="../assets/images/dashboard/top-header2.png" alt="header" class="theme-color-blue-img img-fluid w-100 h-100 animated-scaleX">
                <img src="../assets/images/dashboard/top-header3.png" alt="header" class="theme-color-green-img img-fluid w-100 h-100 animated-scaleX">
                <img src="../assets/images/dashboard/top-header4.png" alt="header" class="theme-color-yellow-img img-fluid w-100 h-100 animated-scaleX">
                <img src="../assets/images/dashboard/top-header5.png" alt="header" class="theme-color-pink-img img-fluid w-100 h-100 animated-scaleX">
            </div>
        </div> <!-- Nav Header Component End -->
        <!--Nav End-->
    </div>
<!-- Page Sidebar Start-->
<div class="sidebar-wrapper" data-sidebar-layout="stroke-svg">
    <div>
        <div class="logo-wrapper"><a href="{{ route('admin.default_dashboard') }}"><img class="img-fluid for-light"
                    src="{{ asset('assets/images/logo/logo.png') }}" alt=""><img class="img-fluid for-dark"
                    src="{{ asset('assets/images/logo/logo_dark.png') }}" alt=""></a>
            <div class="back-btn"><i class="fa-solid fa-angle-left"></i></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid">
                </i></div>
        </div>
        <div class="logo-icon-wrapper"><a href="{{ route('admin.default_dashboard') }}"><img class="img-fluid"
                    src="{{ asset('assets/images/logo/logo-icon.png') }}" alt=""></a></div>
        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <li class="back-btn"><a href="{{ route('admin.default_dashboard') }}"><img class="img-fluid"
                                src="{{ asset('assets/images/logo/logo-icon.png') }}" alt=""></a>
                        <div class="mobile-back text-end"><span>Back</span><i class="fa-solid fa-angle-right ps-2"
                                aria-hidden="true"></i></div>
                    </li>
                    <li class="pin-title sidebar-main-title">
                        <div>
                            <h6>Pinned</h6>
                        </div>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6 class="lan-1">General</h6>
                        </div>
                    </li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><label
                            class="badge badge-light-primary"></label><a class="sidebar-link sidebar-title"
                            href="javascript:void(0)"><svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-home') }}"></use>
                            </svg><span class="lan-3">Dashboard </span></a>
                        <ul class="sidebar-submenu">
                            <li><a class="lan-4" href="{{ route('admin.default_dashboard') }}">Default</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a class="sidebar-link sidebar-title"
                            href="javascript:void(0)"><svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-widget') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-widget') }}"></use>
                            </svg><span class="lan">Laravel Example</span></a>
                        <ul class="sidebar-submenu">
                            @can('role.index')
                                <li><a href="{{ route('admin.role.index') }}">Role Management</a></li>
                            @endcan
                            @can('user.index')
                                <li><a  href="{{ route('admin.user.index') }}">User Management</a></li>
                            @endcan
                            @can('blog.index')
                                <li><a href="{{ route('admin.blog.index') }}">Blog Management</a></li>
                            @endcan
                            @can('category.index')
                                <li><a href="{{ route('admin.category.index') }}">Category Management</a></li>
                            @endcan
                            @can('tag.index')
                                <li><a href="{{ route('admin.tag.index') }}">Tag Management</a></li>
                            @endcan
                            @can('page.index')
                                <li><a href="{{ route('admin.page.index') }}">Page Management</a></li>
                            @endcan
                        </ul>
                    </li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a class="sidebar-link sidebar-title"
                            href="javascript:void(0)"><svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-layout') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-layout') }}"></use>
                            </svg><span class="lan-7">Page layout</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('admin.box_layout') }}">Boxed</a></li>
                            <li><a href="{{ route('admin.rtl_layout') }}">RTL</a></li>
                            <li><a href="{{ route('admin.dark_layout') }}">Dark Layout</a></li>
                            <li><a href="{{ route('admin.footer_dark') }}">Footer Dark</a></li>
                        </ul>
                    </li> 
                    
                    <li class="sidebar-main-title">
                        <div>
                            <h6>Forms & Table</h6>
                        </div>
                    </li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title" href="javascript:void(0)"><svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-form') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-form') }}"> </use>
                            </svg><span>Forms</span></a>
                        <ul class="sidebar-submenu">
                            <li><a class="submenu-title" href="javascript:void(0)">Form Controls<span class="sub-arrow"><i
                                            class="fa-solid fa-angle-right"></i></span></a>
                                <ul class="sidebar-submenu">
                                    <li><a href="{{ route('admin.form_validation') }}">Form Validation</a></li>
                                    <li><a href="{{ route('admin.base_input') }}">Base Inputs</a></li>
                                    <li><a href="{{ route('admin.radio_checkbox_control') }}">Checkbox & Radio</a></li>
                                    <li><a href="{{ route('admin.input_group') }}">Input Groups</a></li>
                                    <!-- <li><a href="#">Input Mask</a></li>
                                    <li><a href="#">    Mega Options</a></li> -->
                                </ul>
                            </li>
                            <li><a class="submenu-title" href="javascript:void(0)">Form Widgets<span class="sub-arrow"><i
                                            class="fa-solid fa-angle-right"></i></span></a>
                                <ul class="sidebar-submenu">
                                    <li><a href="{{ route('admin.datepicker') }}">Datepicker</a></li>
                                    <li><a href="{{ route('admin.touchspin') }}">Touchspin</a></li>
                                    <li><a href="{{ route('admin.select2') }}">Select2</a></li>
                                    <li><a href="{{ route('admin.switch') }}">Switch</a></li>
                                    <li><a href="{{ route('admin.typeahead') }}">Typeahead</a></li>
                                    <li><a href="{{ route('admin.clipboard') }}">Clipboard</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title" href="javascript:void(0)"><svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-table') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-table') }}"></use>
                            </svg><span>Tables</span></a>
                        <ul class="sidebar-submenu">
                            <li><a class="submenu-title" href="javascript:void(0)">Bootstrap Tables<span class="sub-arrow"><i
                                            class="fa-solid fa-angle-right"></i></span></a>
                                <ul class="sidebar-submenu">
                                    <li><a href="{{ route('admin.bootstrap_basic_table') }}">Basic Tables</a></li>
                                    <li><a href="{{ route('admin.table_components') }}">Table components</a></li>
                                </ul>
                            </li>
                            <li><a class="submenu-title" href="javascript:void(0)">Data Tables<span class="sub-arrow"><i
                                            class="fa-solid fa-angle-right"></i></span></a>
                                <ul class="sidebar-submenu">
                                    <li><a href="{{ route('admin.datatable_basic_init') }}">Basic Init</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6>Components</h6>
                        </div>
                    </li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title" href="javascript:void(0)"><svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-ui-kits') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-ui-kits') }}"></use>
                            </svg><span>Ui Kits</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('admin.typography') }}">Typography</a></li>
                            <li><a href="{{ route('admin.avatars') }}">Avatars</a></li>
                            <li><label class="badge badge-light-success">New</label><a href="{{ route('admin.divider') }}">Divider</a>
                            </li>
                            <li><a href="{{ route('admin.helper_classes') }}">helper classes</a></li>
                            <li><a href="{{ route('admin.grid') }}">Grid</a></li>
                            <li><a href="{{ route('admin.tag_pills') }}">Tags & pills</a></li>
                            <li><a href="{{ route('admin.progress_bar') }}">Progress</a></li>
                            <li><a href="{{ route('admin.modal') }}">Modal</a></li>
                            <li><a href="{{ route('admin.alert') }}">Alert</a></li>
                            <li><a href="{{ route('admin.popover') }}">Popover</a></li>
                            <li><label class="badge badge-light-success">New</label><a
                                    href="{{ route('admin.placeholders') }}">Placeholders</a></li>
                            <li><a href="{{ route('admin.tooltip') }}">Tooltip</a></li>
                            <li><a href="{{ route('admin.dropdown') }}">Dropdown</a></li>
                            <li><a href="{{ route('admin.according') }}">Accordion</a></li>
                            <li><a href="{{ route('admin.tabs') }}">Tabs</a></li>
                            <li><label class="badge badge-light-success">New</label><a
                                    href="{{ route('admin.offcanvas') }}">Offcanvas</a></li>
                            <li><label class="badge badge-light-success">New</label><a
                                    href="{{ route('admin.navigate_links') }}">Navigate Links</a></li>
                            <li><a href="{{ route('admin.list') }}">Lists</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title" href="javascript:void(0)"><svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-bonus-kit') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-bonus-kit') }}"></use>
                            </svg><span>Bonus Ui</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('admin.pagination') }}">Pagination</a></li>
                            <li><a href="{{ route('admin.breadcrumb') }}">Breadcrumb</a></li>
                            <li><a href="{{ route('admin.basic_card') }}">Basic Card</a></li>
                            <li><a href="{{ route('admin.creative_card') }}">Creative Card</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title" href="javascript:void(0)"><svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-animation') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-animation') }}"></use>
                            </svg><span>Animations</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('admin.animate') }}">Animate</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title" href="javascript:void(0)"><svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-icons') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-icons') }}"></use>
                            </svg><span>Icons</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('admin.flag_icon') }}">Flag icon</a></li>
                            <li><a href="{{ route('admin.font_awesome') }}">Fontawesome Icon</a></li>
                            <li><a href="{{ route('admin.ico_icon') }}">Ico Icon</a></li>
                            <li><a href="{{ route('admin.themify_icon') }}">Themify Icon</a></li>
                            <li><a href="{{ route('admin.feather_icon') }}">Feather icon</a></li>
                            <li><a href="{{ route('admin.whether_icon') }}">Weather Icon</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title link-nav" href="{{ route('admin.buttons') }}"><svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-button') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-button') }}"></use>
                            </svg><span>Button</span></a></li>

                    <li class="sidebar-main-title">
                        <div>
                            <h6>Pages</h6>
                        </div>
                    </li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title link-nav" href="{{ route('admin.sample_page') }}"><svg
                                class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-sample-page') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-sample-page') }}"></use>
                            </svg><span>Sample page</span></a></li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title" href="javascript:void(0)"><svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-error') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-error') }}"></use>
                            </svg><span>Error Pages</span></a>
                        <ul class="sidebar-submenu">
                            <!-- <li><a href="#">Error 403</a></li> -->
                            <li><a href="{{ route('admin.error_404') }}">Error 404</a></li>
                            <!-- <li><a href="#">Error 500</a></li> -->
                        </ul>
                    </li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title" href="javascript:void(0)"><svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-authenticate') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-authenticate') }}"></use>
                            </svg><span>Authentication</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('login') }}" target="_blank">Login Simple</a></li>
                             <li><a href="{{ route('admin.sign_up') }}" target="_blank">Register Simple</a></li>
                             <li><a href="{{ route('admin.forget_password') }}">Forgot Password</a></li>
                             <li><a href="{{ route('admin.reset_password') }}">Reset Password</a></li>
                        </ul>
                    </li>
                 
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
    </div>
</div>
<!-- Page Sidebar Ends-->
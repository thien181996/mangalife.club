<div
    id="m_ver_menu"
    class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark "
    data-menu-vertical="true"
    data-menu-scrollable="false" data-menu-dropdown-timeout="500"
>
    <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
        <li class="m-menu__item  m-menu__item--active" aria-haspopup="true" >
            <a href="index.html" class="m-menu__link ">
                <i class="m-menu__link-icon flaticon-line-graph"></i>
                <span class="m-menu__link-title">
                    <span class="m-menu__link-wrap">
                        <span class="m-menu__link-text">
                            Bảng điều khiển
                        </span>
                        <span class="m-menu__link-badge">
                            <span class="m-badge m-badge--danger">
                                2
                            </span>
                        </span>
                    </span>
                </span>
            </a>
        </li>
        <li class="m-menu__section">
            <h4 class="m-menu__section-text">
                Thành viên
            </h4>
            <i class="m-menu__section-icon flaticon-more-v3"></i>
        </li>
        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
            <a  href="#" class="m-menu__link m-menu__toggle">
                <i class="m-menu__link-icon flaticon-layers"></i>
                <span class="m-menu__link-text">
                    Quản lý tài khoản
                </span>
                <i class="m-menu__ver-arrow la la-angle-right"></i>
            </a>
            <div class="m-menu__submenu ">
                <span class="m-menu__arrow"></span>
                <ul class="m-menu__subnav">
                    <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
                        <span class="m-menu__link">
                            <span class="m-menu__link-text">
                                Quản lý tài khoản
                            </span>
                        </span>
                    </li>
                    <li class="m-menu__item " aria-haspopup="true" >
                        <a  href="{{ route('panel.listUser') }}" class="m-menu__link ">
                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                <span></span>
                            </i>
                            <span class="m-menu__link-text">
                                Danh sách tài khoản
                            </span>
                        </a>
                    </li>

                </ul>
            </div>
        </li>

        <li class="m-menu__section">
            <h4 class="m-menu__section-text">
                Manga
            </h4>
            <i class="m-menu__section-icon flaticon-more-v3"></i>
        </li>
        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
            <a  href="#" class="m-menu__link m-menu__toggle">
                <i class="m-menu__link-icon flaticon-layers"></i>
                <span class="m-menu__link-text">
                    Quản lý tác giả
                </span>
                <i class="m-menu__ver-arrow la la-angle-right"></i>
            </a>
            <div class="m-menu__submenu ">
                <span class="m-menu__arrow"></span>
                <ul class="m-menu__subnav">
                    <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
                        <span class="m-menu__link">
                            <span class="m-menu__link-text">
                                Quản lý tác giả
                            </span>
                        </span>
                    </li>
                    <li class="m-menu__item " aria-haspopup="true" >
                        <a  href="{{ route('panel.createAuthor') }}" class="m-menu__link ">
                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                <span></span>
                            </i>
                            <span class="m-menu__link-text">
                                Thêm tác giả
                            </span>
                        </a>
                    </li>
                    <li class="m-menu__item " aria-haspopup="true" >
                        <a  href="{{ route('panel.listAuthor') }}" class="m-menu__link ">
                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                <span></span>
                            </i>
                            <span class="m-menu__link-text">
                                Danh sách tác giả
                            </span>
                        </a>
                    </li>

                </ul>
            </div>
        </li>
        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
            <a  href="#" class="m-menu__link m-menu__toggle">
                <i class="m-menu__link-icon flaticon-layers"></i>
                <span class="m-menu__link-text">
                    Quản lý nhóm dịch
                </span>
                <i class="m-menu__ver-arrow la la-angle-right"></i>
            </a>
            <div class="m-menu__submenu ">
                <span class="m-menu__arrow"></span>
                <ul class="m-menu__subnav">
                    <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
                        <span class="m-menu__link">
                            <span class="m-menu__link-text">
                                Quản lý nhóm dịch
                            </span>
                        </span>
                    </li>
                    <li class="m-menu__item " aria-haspopup="true" >
                        <a  href="{{ route('panel.createTranslateGroup') }}" class="m-menu__link ">
                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                <span></span>
                            </i>
                            <span class="m-menu__link-text">
                                Thêm nhóm dịch
                            </span>
                        </a>
                    </li>
                    <li class="m-menu__item " aria-haspopup="true" >
                        <a  href="{{ route('panel.listTranslateGroup') }}" class="m-menu__link ">
                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                <span></span>
                            </i>
                            <span class="m-menu__link-text">
                                Danh sách nhóm dịch
                            </span>
                        </a>
                    </li>

                </ul>
            </div>
        </li>
        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
            <a  href="#" class="m-menu__link m-menu__toggle">
                <i class="m-menu__link-icon flaticon-layers"></i>
                <span class="m-menu__link-text">
                    Quản lý thể loại
                </span>
                <i class="m-menu__ver-arrow la la-angle-right"></i>
            </a>
            <div class="m-menu__submenu ">
                <span class="m-menu__arrow"></span>
                <ul class="m-menu__subnav">
                    <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
                        <span class="m-menu__link">
                            <span class="m-menu__link-text">
                                Quản lý thể loại
                            </span>
                        </span>
                    </li>
                    <li class="m-menu__item " aria-haspopup="true" >
                        <a  href="{{ route('panel.createCategory') }}" class="m-menu__link ">
                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                <span></span>
                            </i>
                            <span class="m-menu__link-text">
                                Thêm thể loại
                            </span>
                        </a>
                    </li>
                    <li class="m-menu__item " aria-haspopup="true" >
                        <a  href="{{ route('panel.listCategory') }}" class="m-menu__link ">
                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                <span></span>
                            </i>
                            <span class="m-menu__link-text">
                                Danh sách thể loại
                            </span>
                        </a>
                    </li>

                </ul>
            </div>
        </li>
        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
            <a  href="#" class="m-menu__link m-menu__toggle">
                <i class="m-menu__link-icon flaticon-layers"></i>
                <span class="m-menu__link-text">
                    Quản lý Manga
                </span>
                <i class="m-menu__ver-arrow la la-angle-right"></i>
            </a>
            <div class="m-menu__submenu ">
                <span class="m-menu__arrow"></span>
                <ul class="m-menu__subnav">
                    <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
                        <span class="m-menu__link">
                            <span class="m-menu__link-text">
                                Quản lý Manga
                            </span>
                        </span>
                    </li>
                    <li class="m-menu__item " aria-haspopup="true" >
                        <a  href="{{ route('panel.createManga') }}" class="m-menu__link ">
                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                <span></span>
                            </i>
                            <span class="m-menu__link-text">
                                Thêm Manga
                            </span>
                        </a>
                    </li>
                    <li class="m-menu__item " aria-haspopup="true" >
                        <a  href="{{ route('panel.listManga') }}" class="m-menu__link ">
                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                <span></span>
                            </i>
                            <span class="m-menu__link-text">
                                Danh sách Manga
                            </span>
                        </a>
                    </li>

                </ul>
            </div>
        </li>
        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
            <a  href="#" class="m-menu__link m-menu__toggle">
                <i class="m-menu__link-icon flaticon-layers"></i>
                <span class="m-menu__link-text">
                    Quản lý Chương
                </span>
                <i class="m-menu__ver-arrow la la-angle-right"></i>
            </a>
            <div class="m-menu__submenu ">
                <span class="m-menu__arrow"></span>
                <ul class="m-menu__subnav">
                    <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
                        <span class="m-menu__link">
                            <span class="m-menu__link-text">
                                Quản lý Chương
                            </span>
                        </span>
                    </li>
                    <li class="m-menu__item " aria-haspopup="true" >
                        <a  href="{{ route('panel.createChapter') }}" class="m-menu__link ">
                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                <span></span>
                            </i>
                            <span class="m-menu__link-text">
                                Thêm Chương
                            </span>
                        </a>
                    </li>
                    <li class="m-menu__item " aria-haspopup="true" >
                        <a  href="{{ route('panel.listChapter') }}" class="m-menu__link ">
                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                <span></span>
                            </i>
                            <span class="m-menu__link-text">
                                Danh sách Chương
                            </span>
                        </a>
                    </li>

                </ul>
            </div>
        </li>
    </ul>
</div>
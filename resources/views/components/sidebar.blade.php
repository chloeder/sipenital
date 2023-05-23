@if (Auth::user()->role == 'petugas')
    <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
        <div class="app-brand demo">
            <a href="{{ route('dashboard.admin') }}" class="app-brand-link">
                <span class="app-brand-logo demo">
                    <img src="{{ asset('templates') }}/assets/img/logo/polda_sulut.png" height="50"
                        alt="View Badge User" data-app-dark-img="logo/polda_sulut.png"
                        data-app-light-img="logo/polda_sulut.png" />
                </span>
                <span class="app-brand-text demo menu-text fw-bolder ms-2">SIPENITAL</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
        </div>

        <div class="menu-inner-shadow"></div>

        <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item {{ request()->routeIs('dashboard.admin') ? 'active' : '' }}">
                <a href="{{ route('dashboard.admin') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-home-circle"></i>
                    <div data-i18n="Analytics">Dashboard</div>
                </a>
            </li>

            <!-- Layouts -->

            <li class="menu-header small text-uppercase">
                <span class="menu-header-text">Data</span>
            </li>
            <li class="menu-item {{ request()->routeIs('admin.p*') ? 'active' : '' }}">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-group"></i>
                    <div data-i18n="Account Settings">Data Personil</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item {{ request()->routeIs('admin.personil') ? 'active' : '' }}">
                        <a href="{{ route('admin.personil') }}" class="menu-link">
                            <div data-i18n="Account">Semua Personil</div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="menu-item {{ request()->routeIs('admin.s*') ? 'active' : '' }}">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-briefcase-alt-2"></i>
                    <div data-i18n="Authentications">Satuan Kerja</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item {{ request()->routeIs('admin.s*') ? 'active' : '' }}">
                        <a href="{{ route('admin.satker') }}" class="menu-link">
                            <div data-i18n="Basic">Semua Bagian/Satker</div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="menu-item {{ request()->routeIs('admin.a*') ? 'active' : '' }}">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-id-card"></i>
                    <div data-i18n="Authentications">Daftar Agama Personil</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item {{ request()->routeIs('admin.agama.islam') ? 'active' : '' }}">
                        <a href="{{ route('admin.agama.islam') }}" class="menu-link">
                            <div data-i18n="Basic">Islam</div>
                        </a>
                    </li>
                    <li class="menu-item {{ request()->routeIs('admin.agama.protestan') ? 'active' : '' }}">
                        <a href="{{ route('admin.agama.protestan') }}" class="menu-link">
                            <div data-i18n="Basic">Protestan</div>
                        </a>
                    </li>
                    <li class="menu-item {{ request()->routeIs('admin.agama.katolik') ? 'active' : '' }}">
                        <a href="{{ route('admin.agama.katolik') }}" class="menu-link">
                            <div data-i18n="Basic">Katolik</div>
                        </a>
                    </li>
                    <li class="menu-item {{ request()->routeIs('admin.agama.hindu') ? 'active' : '' }}">
                        <a href="{{ route('admin.agama.hindu') }}" class="menu-link">
                            <div data-i18n="Basic">Hindu</div>
                        </a>
                    </li>
                    <li class="menu-item {{ request()->routeIs('admin.agama.buddha') ? 'active' : '' }}">
                        <a href="{{ route('admin.agama.buddha') }}" class="menu-link">
                            <div data-i18n="Basic">Buddha</div>
                        </a>
                    </li>
                    <li class="menu-item {{ request()->routeIs('admin.agama.khonghucu') ? 'active' : '' }}">
                        <a href="{{ route('admin.agama.khonghucu') }}" class="menu-link">
                            <div data-i18n="Basic">Khonghucu</div>
                        </a>
                    </li>
                    <li class="menu-item {{ request()->routeIs('admin.agama.lainnya') ? 'active' : '' }}">
                        <a href="{{ route('admin.agama.lainnya') }}" class="menu-link">
                            <div data-i18n="Basic">Lainnya</div>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-header small text-uppercase"><span class="menu-header-text">Lainnya</span></li>
            <!-- Cards -->
            <li class="menu-item {{ request()->routeIs('admin.daftar.*') ? 'active' : '' }}">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-history"></i>
                    <div data-i18n="Misc">Riwayat</div>
                </a>
                <ul class="menu-sub ">
                    <li class="menu-item {{ request()->routeIs('admin.daftar.riwayat.personil') ? 'active' : '' }}">
                        <a href="{{ route('admin.daftar.riwayat.personil') }}" class="menu-link">
                            <div data-i18n="Under Maintenance">Riwayat Personil Keseluruhan</div>
                        </a>
                    </li>
                    <li class="menu-item {{ request()->routeIs('admin.daftar.riwayat.pensiun') ? 'active' : '' }}">
                        <a href="{{ route('admin.daftar.riwayat.pensiun') }}" class="menu-link">
                            <div data-i18n="Error">Riwayat Personil Pensiun</div>
                        </a>
                    </li>
                    <li class="menu-item {{ request()->routeIs('admin.daftar.riwayat.sakit') ? 'active' : '' }}">
                        <a href="{{ route('admin.daftar.riwayat.sakit') }}" class="menu-link">
                            <div data-i18n="Error">Riwayat Personil Sakit</div>
                        </a>
                    </li>
                    <li class="menu-item {{ request()->routeIs('admin.daftar.riwayat.bermasalah') ? 'active' : '' }}">
                        <a href="{{ route('admin.daftar.riwayat.bermasalah') }}" class="menu-link">
                            <div data-i18n="Error">Riwayat Personil Bermasalah</div>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </aside>
@endif
@if (Auth::user()->role == 'admin')
    <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
        <div class="app-brand demo">
            <a href="{{ route('dashboard.admin') }}" class="app-brand-link">
                <span class="app-brand-logo demo">
                    <img src="{{ asset('templates') }}/assets/img/logo/polda_sulut.png" height="50"
                        alt="View Badge User" data-app-dark-img="logo/polda_sulut.png"
                        data-app-light-img="logo/polda_sulut.png" />
                </span>
                <span class="app-brand-text demo menu-text fw-bolder ms-2">SIPENITAL</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
        </div>

        <div class="menu-inner-shadow"></div>

        <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item {{ request()->routeIs('dashboard.admin') ? 'active' : '' }}">
                <a href="{{ route('dashboard.admin') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-home-circle"></i>
                    <div data-i18n="Analytics">Dashboard</div>
                </a>
            </li>

            <!-- Layouts -->

            <li class="menu-header small text-uppercase">
                <span class="menu-header-text">Data</span>
            </li>
            <li class="menu-item {{ request()->routeIs('admin.p*') ? 'active' : '' }}">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-group"></i>
                    <div data-i18n="Account Settings">Data Personil</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item {{ request()->routeIs('admin.personil') ? 'active' : '' }}">
                        <a href="{{ route('admin.personil') }}" class="menu-link">
                            <div data-i18n="Account">Semua Personil</div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="menu-item {{ request()->routeIs('admin.s*') ? 'active' : '' }}">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-briefcase-alt-2"></i>
                    <div data-i18n="Authentications">Satuan Kerja</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item {{ request()->routeIs('admin.satker') ? 'active' : '' }}">
                        <a href="{{ route('admin.satker') }}" class="menu-link">
                            <div data-i18n="Basic">Semua Bagian/Satker</div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="menu-item {{ request()->routeIs('admin.a*') ? 'active' : '' }}">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-id-card"></i>
                    <div data-i18n="Authentications">Daftar Agama Personil</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item {{ request()->routeIs('admin.agama.islam') ? 'active' : '' }}">
                        <a href="{{ route('admin.agama.islam') }}" class="menu-link">
                            <div data-i18n="Basic">Islam</div>
                        </a>
                    </li>
                    <li class="menu-item {{ request()->routeIs('admin.agama.protestan') ? 'active' : '' }}">
                        <a href="{{ route('admin.agama.protestan') }}" class="menu-link">
                            <div data-i18n="Basic">Protestan</div>
                        </a>
                    </li>
                    <li class="menu-item {{ request()->routeIs('admin.agama.katolik') ? 'active' : '' }}">
                        <a href="{{ route('admin.agama.katolik') }}" class="menu-link">
                            <div data-i18n="Basic">Katolik</div>
                        </a>
                    </li>
                    <li class="menu-item {{ request()->routeIs('admin.agama.hindu') ? 'active' : '' }}">
                        <a href="{{ route('admin.agama.hindu') }}" class="menu-link">
                            <div data-i18n="Basic">Hindu</div>
                        </a>
                    </li>
                    <li class="menu-item {{ request()->routeIs('admin.agama.buddha') ? 'active' : '' }}">
                        <a href="{{ route('admin.agama.buddha') }}" class="menu-link">
                            <div data-i18n="Basic">Buddha</div>
                        </a>
                    </li>
                    <li class="menu-item {{ request()->routeIs('admin.agama.khonghucu') ? 'active' : '' }}">
                        <a href="{{ route('admin.agama.khonghucu') }}" class="menu-link">
                            <div data-i18n="Basic">Khonghucu</div>
                        </a>
                    </li>
                    <li class="menu-item {{ request()->routeIs('admin.agama.lainnya') ? 'active' : '' }}">
                        <a href="{{ route('admin.agama.lainnya') }}" class="menu-link">
                            <div data-i18n="Basic">Lainnya</div>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-header small text-uppercase"><span class="menu-header-text">Lainnya</span></li>
            <!-- Cards -->
            <li class="menu-item {{ request()->routeIs('admin.daftar.*') ? 'active' : '' }}">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-history"></i>
                    <div data-i18n="Misc">Riwayat</div>
                </a>
                <ul class="menu-sub ">
                    <li class="menu-item {{ request()->routeIs('admin.daftar.riwayat.personil') ? 'active' : '' }}">
                        <a href="{{ route('admin.daftar.riwayat.personil') }}" class="menu-link">
                            <div data-i18n="Under Maintenance">Riwayat Personil Keseluruhan</div>
                        </a>
                    </li>
                    <li class="menu-item {{ request()->routeIs('admin.daftar.riwayat.pensiun') ? 'active' : '' }}">
                        <a href="{{ route('admin.daftar.riwayat.pensiun') }}" class="menu-link">
                            <div data-i18n="Error">Riwayat Personil Pensiun</div>
                        </a>
                    </li>
                    <li class="menu-item {{ request()->routeIs('admin.daftar.riwayat.sakit') ? 'active' : '' }}">
                        <a href="{{ route('admin.daftar.riwayat.sakit') }}" class="menu-link">
                            <div data-i18n="Error">Riwayat Personil Sakit</div>
                        </a>
                    </li>
                    <li class="menu-item {{ request()->routeIs('admin.daftar.riwayat.bermasalah') ? 'active' : '' }}">
                        <a href="{{ route('admin.daftar.riwayat.bermasalah') }}" class="menu-link">
                            <div data-i18n="Error">Riwayat Personil Bermasalah</div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="menu-item {{ request()->routeIs('admin.kelola.*') ? 'active' : '' }}">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bxs-user-account"></i>
                    <div data-i18n="Misc">Kelola Akun</div>
                </a>
                <ul class="menu-sub ">
                    <li class="menu-item {{ request()->routeIs('admin.kelola.akun.semua') ? 'active' : '' }}">
                        <a href="{{ route('admin.kelola.akun.semua') }}" class="menu-link">
                            <div data-i18n="Under Maintenance">Semua Akun</div>
                        </a>
                    </li>
                    <li class="menu-item {{ request()->routeIs('admin.kelola.buat.akun') ? 'active' : '' }}">
                        <a href="{{ route('admin.kelola.buat.akun') }}" class="menu-link">
                            <div data-i18n="Under Maintenance">Buat Akun Baru</div>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </aside>
@endif

<div id="kt_app_header" class="app-header">
    <!--begin::Contenedor de encabezado-->
    <div class="app-container container-fluid d-flex align-items-stretch justify-content-between"
        id="kt_app_header_container">
        <!--begin::Alternar barra lateral en dispositivos móviles-->
        <div class="d-flex align-items-center d-lg-none ms-n3 me-2" title="Mostrar menú de la barra lateral">
            <div class="btn btn-icon btn-active-color-primary w-35px h-35px" id="kt_app_sidebar_mobile_toggle">
                <i class="ki-duotone ki-abstract-14 fs-1">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i>
            </div>
        </div>
        <!--end::Alternar barra lateral en dispositivos móviles-->
        <!--begin::Logo para dispositivos móviles-->
        <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
            <a href="{{ route('home') }}" class="d-lg-none">
                <img alt="Logo" src="assets/media/logos/default-small.svg" class="theme-light-show h-35px" />
                <img alt="Logo" src="assets/media/logos/default-small-dark.svg" class="theme-dark-show h-35px" />
            </a>
        </div>
        <!--end::Logo para dispositivos móviles-->
        <!--begin::Contenedor de encabezado-->
        <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1" id="kt_app_header_wrapper">
            <!--begin::Contenedor de menú-->
            <div class="app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true"
                data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}"
                data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="end"
                data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true"
                data-kt-swapper-mode="{default: 'append', lg: 'prepend'}"
                data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">
                <!--begin::Menú-->
                <div class="menu menu-rounded menu-column menu-lg-row my-5 my-lg-0 align-items-stretch fw-semibold px-2 px-lg-0"
                    id="kt_app_header_menu" data-kt-menu="true">
                    <!--begin:Elemento de menú-->
                    <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                        class="menu-item here show menu-here-bg menu-lg-down-accordion me-0 me-lg-2">
                        <!--begin:Enlace de menú-->
                        <span class="menu-link">
                            <span class="menu-title" id="tanggal"></span>
                            <span>&nbsp;</span>
                            <span>&nbsp;</span>
                            <span class="menu-title" id="jam"></span>
                        </span>
                        <!--end:Enlace de menú-->
                    </div>
                    <!--end:Elemento de menú-->
                </div>
                <!--end::Menú-->
            </div>
            <!--end::Contenedor de menú-->
            <!--begin::Barra de navegación-->
            <div class="app-navbar flex-shrink-0">
                <!--begin::Modo de tema-->
                <div class="app-navbar-item ms-1 ms-lg-3">
                    <!--begin::Alternar menú-->
                    <a href="#"
                        class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px w-md-40px h-md-40px"
                        data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent"
                        data-kt-menu-placement="bottom-end">
                        <i class="ki-duotone ki-night-day theme-light-show fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                            <span class="path4"></span>
                            <span class="path5"></span>
                            <span class="path6"></span>
                            <span class="path7"></span>
                            <span class="path8"></span>
                            <span class="path9"></span>
                            <span class="path10"></span>
                        </i>
                        <i class="ki-duotone ki-moon theme-dark-show fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </a>
                    <!--begin::Alternar menú-->
                    <!--begin::Menú-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px"
                        data-kt-menu="true" data-kt-element="theme-mode-menu">
                        <!--begin::Elemento de menú-->
                        <div class="menu-item px-3 my-0">
                            <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
                                <span class="menu-icon" data-kt-element="icon">
                                    <i class="ki-duotone ki-night-day fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                        <span class="path5"></span>
                                        <span class="path6"></span>
                                        <span class="path7"></span>
                                        <span class="path8"></span>
                                        <span class="path9"></span>
                                        <span class="path10"></span>
                                    </i>
                                </span>
                                <span class="menu-title">Claro</span>
                            </a>
                        </div>
                        <!--end::Elemento de menú-->
                        <!--begin::Elemento de menú-->
                        <div class="menu-item px-3 my-0">
                            <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
                                <span class="menu-icon" data-kt-element="icon">
                                    <i class="ki-duotone ki-moon fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </span>
                                <span class="menu-title">Oscuro</span>
                            </a>
                        </div>
                        <!--end::Elemento de menú-->
                        <!--begin::Elemento de menú-->
                        <div class="menu-item px-3 my-0">
                            <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                data-kt-value="system">
                                <span class="menu-icon" data-kt-element="icon">
                                    <i class="ki-duotone ki-screen fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                    </i>
                                </span>
                                <span class="menu-title">Sistema</span>
                            </a>
                        </div>
                        <!--end::Elemento de menú-->
                    </div>
                    <!--end::Menú-->
                </div>
                <!--end::Modo de tema-->
                <!--begin::Menú de usuario-->
                <div class="app-navbar-item ms-2 ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
                    <!--begin::Contenedor de menú-->
                    <div class="cursor-pointer symbol symbol-35px symbol-md-40px"
                        data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
                        data-kt-menu-placement="bottom-end">
                        <img src="assets/media/avatars/blank.png" alt="usuario" />
                    </div>
                    <!--begin::Menú de cuenta de usuario-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                        data-kt-menu="true">
                        <!--begin::Elemento de menú-->
                        <div class="menu-item px-3">
                            <div class="menu-content d-flex align-items-center px-3">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-50px me-5">
                                    <img alt="Logo" src="assets/media/avatars/blank.png" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Nombre de usuario-->
                                <div class="d-flex flex-column">
                                    <div class="fw-bold d-flex align-items-center fs-5">{{ auth()->user()->name }}
                                    </div>
                                    <a href="" class="fw-semibold text-muted text-hover-primary fs-7">
                                        {{ auth()->user()->email }}
                                    </a>
                                </div>
                                <!--end::Nombre de usuario-->
                            </div>
                        </div>
                        <!--end::Elemento de menú-->
                        <!--begin::Separador de menú-->
                        <div class="separator my-2"></div>
                        <!--end::Separador de menú-->
                        <!--begin::Elemento de menú-->
                        <div class="menu-item px-5 my-1">
                            <a href="{{ route('profile.edit') }}" class="menu-link px-5">Configuración de la cuenta</a>
                        </div>
                        <!--end::Elemento de menú-->
                        <!--begin::Elemento de menú-->
                        <div class="menu-item px-5">
                            <a href="javascript:void(0);" class="menu-link px-5 text-danger" onclick="submitForm()">
                                Cerrar sesión
                            </a>

                            <form id="formKeluar" action="{{ route('logout') }}" method="POST">
                                @csrf
                            </form>

                            <script>
                                function submitForm() {
                                    document.getElementById("formKeluar").submit();
                                }
                            </script>
                        </div>
                        <!--end::Elemento de menú-->
                    </div>
                    <!--end::Menú de cuenta de usuario-->
                    <!--end::Contenedor de menú-->
                </div>
                <!--end::Menú de usuario-->
            </div>
            <!--end::Barra de navegación-->
        </div>
        <!--end::Contenedor de encabezado-->
    </div>
    <!--end::Contenedor de encabezado-->
</div>

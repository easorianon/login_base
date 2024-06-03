<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!--begin::Head-->

<head>
    <title>{{ config('app.name', 'Laravel') }} | Restablecer contraseña</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="assets/media/favicon.ico" />
    <meta name="theme-color" content="#ffffff">
    <meta name="color-scheme" content="light">

    <!-- Meta Tags principales -->
    <meta name="title" content="Login" />

    <!--begin::Fonts(obligatorio para todas las páginas)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(obligatorio para todas las páginas)-->
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
    <script>
        // Evita que el sitio se cargue dentro de un marco sin permiso (click-jacking)
        if (window.top != window.self) { window.top.location.replace(window.self.location.href); }
    </script>
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="app-blank app-blank">
    @include('sweetalert::alert')
    <!--begin::Configuración del modo de tema al cargar la página-->
    <script>
        var defaultThemeMode = "light";
        var themeMode;
        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
            } else {
                if (localStorage.getItem("data-bs-theme") !== null) {
                    themeMode = localStorage.getItem("data-bs-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }
            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            }
            document.documentElement.setAttribute("data-bs-theme", themeMode);
        }
    </script>
    <!--end::Configuración del modo de tema al cargar la página-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <!--begin::Autenticación - Restablecer contraseña -->
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            <!--begin::Aside-->
            <div class="d-flex flex-lg-row-fluid w-lg-50 bgi-size-cover bgi-position-center"
                style="background-image: url(assets/media/misc/auth-bg.png)">
                <!--begin::Contenido-->
                <div class="d-flex flex-column flex-center p-6 p-lg-10 w-100">
                    <!--begin::Logo-->
                    <a href="{{ url('/') }}" class="mb-0 mb-lg-20">
                        <img alt="Logo" src="assets/media/logos/default-white.svg" class="h-40px h-lg-70px" />
                    </a>
                    <!--end::Logo-->
                    <!--begin::Imagen-->
                    <img class="d-none d-lg-block mx-auto w-300px w-lg-75 w-xl-500px mb-10 mb-lg-20"
                        src="assets/media/misc/auth-screens.png" alt="" />
                    <!--end::Imagen-->
                </div>
                <!--end::Contenido-->
            </div>
            <!--begin::Aside-->
            <!--begin::Body-->
            <div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10">
                <!--begin::Formulario-->
                <div class="d-flex flex-center flex-column flex-lg-row-fluid">
                    <!--begin::Wrapper-->
                    <div class="w-lg-500px p-10">
                        <!--begin::Formulario-->
                        <form class="form w-100" novalidate="novalidate" method="POST"
                            action="{{ route('password.email') }}">
                            @csrf
                            <!--begin::Encabezado-->
                            <div class="text-center mb-10">
                                <!--begin::Título-->
                                <h1 class="text-gray-900 fw-bolder mb-3">¿Olvidaste tu contraseña?</h1>
                                <!--end::Título-->
                                <!--begin::Enlace-->
                                <div class="text-gray-500 fw-semibold fs-6">Ingresa tu correo electrónico para restablecer tu contraseña.
                                </div>
                                <!--end::Enlace-->
                            </div>
                            <!--begin::Encabezado-->
                            <!--begin::Grupo de entrada-->
                            <div class="fv-row mb-8">
                                <!--begin::Email-->
                                <input type="text" placeholder="Correo electrónico" name="email" autocomplete="email"
                                    class="form-control bg-transparent @error('email') is-invalid @enderror" />

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <!--end::Email-->
                            </div>
                            <!--begin::Acciones-->
                            <div class="d-flex flex-wrap justify-content-center pb-lg-0">
                                <button type="submit" id="kt_password_reset_submit" class="btn btn-primary me-4">
                                    <!--begin::Etiqueta del indicador-->
                                    <span class="indicator-label">Enviar</span>
                                    <!--end::Etiqueta del indicador-->
                                </button>
                                <a href="{{ route('login') }}" class="btn btn-light">Cancelar</a>
                            </div>
                            <!--end::Acciones-->
                        </form>
                        <!--end::Formulario-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Formulario-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Autenticación - Restablecer contraseña-->
    </div>
    <!--end::Root-->
    <!--begin::Javascript-->
    <!--begin::Global Javascript Bundle(obligatorio para todas las páginas)-->
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Javascript personalizado(solo para esta página)-->
    <script src="assets/js/custom/authentication/reset-password/reset-password.js"></script>
    <!--end::Javascript personalizado-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>

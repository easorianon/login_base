<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!--begin::Head-->

<head>
    <title>{{ config('app.name', 'Laravel') }} | Mantenimiento</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="assets/media/favicon.ico" />
    <meta name="theme-color" content="#ffffff">
    <meta name="color-scheme" content="light">

    <!-- Primary Meta Tags -->
    <meta name="title" content="Iniciar sesión" />

    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
    <script>
        // Evita que el sitio se cargue en un marco sin permiso (click-jacking)
        if (window.top != window.self) { window.top.location.replace(window.self.location.href); }
    </script>
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="app-blank app-blank bgi-size-cover bgi-position-center bgi-no-repeat">
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
        <!--begin::Imagen de fondo de la página-->
        <style>
            body {
                background-image: url('assets/media/auth/bg18.jpg');
            }

            [data-bs-theme="dark"] body {
                background-image: url('assets/media/auth/bg18-dark.jpg');
            }
        </style>
        <!--end::Imagen de fondo de la página-->
        <!--begin::Autenticación - Mensaje de bienvenida al registro -->
        <div class="d-flex flex-column flex-center flex-column-fluid">
            <!--begin::Contenido-->
            <div class="d-flex flex-column flex-center text-center p-10">
                <!--begin::Contenedor-->
                <div class="card card-flush w-lg-650px py-5">
                    <div class="card-body py-15 py-lg-20">
                        <!--begin::Título-->
                        <h1 class="fw-bolder fs-2hx text-gray-900 mb-4">
                            ¡Volveremos pronto!
                        </h1>
                        <!--end::Título-->
                        <!--begin::Texto-->
                        <div class="fw-semibold fs-6 text-gray-500 mb-7">
                            Disculpa las molestias, pero actualmente estamos realizando tareas de mantenimiento. Si
                            necesitas, siempre puedes <a href="mailto:">contactarnos</a>.
                            ¡Volveremos en línea en breve!
                        </div>
                        <p class="fw-semibold fs-6 text-gray-500 mb-7">
                            &mdash; Equipo de {{ config('app.name', 'Laravel') }}
                        </p>
                        <!--end::Texto-->
                        <!--begin::Ilustración-->
                        <div class="mb-3">
                            <img src="assets/media/auth/maintenance.png" class="mw-100 mh-300px theme-light-show"
                                alt="" />
                            <img src="assets/media/auth/maintenance-dark.png" class="mw-100 mh-300px theme-dark-show"
                                alt="" />
                        </div>
                        <!--end::Ilustración-->
                    </div>
                </div>
                <!--end::Contenedor-->
            </div>
            <!--end::Contenido-->
        </div>
        <!--end::Autenticación - Mensaje de bienvenida al registro-->
    </div>
    <!--end::Root-->
    <!--begin::Javascript-->
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>
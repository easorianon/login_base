<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!--begin::Cabeza-->

<head>
    <title>{{ config('app.name', 'Laravel') }} | Iniciar sesión</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="assets/media/favicon.ico" />
    <meta name="theme-color" content="#ffffff">
    <meta name="color-scheme" content="light">

    <!-- Metaetiquetas primarias -->
    <meta name="title" content="Login" />

    <!--begin::Fuentes(obligatorias para todas las páginas)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fuentes-->
    <!--begin::Conjunto de hojas de estilo globales(obligatorio para todas las páginas)-->
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Conjunto de hojas de estilo globales-->
    <script>
        // Evita que el sitio se cargue en un marco sin permiso (click-jacking)
        if (window.top != window.self) { window.top.location.replace(window.self.location.href); }
    </script>
</head>
<!--end::Cabeza-->
<!--begin::Cuerpo-->

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
    <!--begin::Raíz-->
    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <!--begin::Autenticación - Iniciar sesión -->
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
            <!--begin::Cuerpo-->
            <div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10">
                <!--begin::Formulario-->
                <div class="d-flex flex-center flex-column flex-lg-row-fluid">
                    <!--begin::Envoltorio-->
                    <div class="w-lg-500px p-10">
                        <!--begin::Formulario-->
                        <form class="form w-100" novalidate="novalidate" method="POST" action="{{ route('login') }}">
                            @csrf
                            <!--begin::Encabezado-->
                            <div class="text-center mb-11">
                                <!--begin::Título-->
                                <h1 class="text-gray-900 fw-bolder mb-3">Iniciar sesión</h1>
                                <!--end::Título-->
                            </div>
                            <!--begin::Encabezado-->
                            <!--begin::Grupo de entrada=-->
                            <div class="fv-row mb-8">
                                <!--begin::Correo electrónico-->
                                <input type="text" placeholder="Correo electrónico o nombre de usuario" name="login"
                                    autocomplete="login"
                                    class="form-control bg-transparent @error('login') is-invalid @enderror"
                                    value="{{ old('login') }}" />

                                @error('login')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <!--end::Correo electrónico-->
                            </div>
                            <!--end::Grupo de entrada=-->
                            <div class="fv-row mb-4">
                                <!--begin::Contraseña-->
                                <input type="password" placeholder="Contraseña" name="password" autocomplete="off"
                                    class="form-control bg-transparent @error('password') is-invalid @enderror" />

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <!--end::Contraseña-->
                            </div>
                            <!--end::Grupo de entrada=-->
                            <!--begin::Envoltorio-->
                            <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
                                <div></div>
                                @if (Route::has('password.request'))
                                    <!--begin::Enlace-->
                                    <a href="{{ route('password.request') }}" class="link-primary">¿Olvidaste tu contraseña?</a>
                                    <!--end::Enlace-->
                                @endif
                            </div>
                            <!--end::Envoltorio-->
                            <!--begin::Botón de envío-->
                            <div class="d-grid mb-10">
                                <button type="submit" class="btn btn-primary">
                                    <!--begin::Etiqueta del indicador-->
                                    <span class="indicator-label">Iniciar sesión</span>
                                    <!--end::Etiqueta del indicador-->
                                </button>
                            </div>
                            <!--end::Botón de envío-->
                            <!--begin::Registrarse-->
                            <div class="text-gray-500 text-center fw-semibold fs-6">¿Aún no eres miembro?
                                <a href="{{ route('register') }}" class="link-primary">Regístrate</a>
                            </div>
                            <!--end::Registrarse-->
                        </form>
                        <!--end::Formulario-->
                    </div>
                    <!--end::Envoltorio-->
                </div>
                <!--end::Formulario-->
            </div>
            <!--end::Cuerpo-->
        </div>
        <!--end::Autenticación - Iniciar sesión-->
    </div>
    <!--end::Raíz-->
    <!--begin::Javascript-->
    <!--begin::Conjunto de Javascript globales(obligatorio para todas las páginas)-->
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <!--end::Conjunto de Javascript globales-->
    <!--begin::Javascript personalizado(solo para esta página)-->
    <script src="assets/js/custom/authentication/sign-in/general.js"></script>
    <!--end::Javascript personalizado-->
    <!--end::Javascript-->
</body>
<!--end::Cuerpo-->

</html>

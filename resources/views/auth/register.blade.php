<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!--begin::Head-->

<head>
    <title>{{ config('app.name', 'Laravel') }} | Registrarse</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="assets/media/favicon.ico" />
    <meta name="theme-color" content="#ffffff">
    <meta name="color-scheme" content="light">

    <!-- Primary Meta Tags -->
    <meta name="title" content="Login" />

    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
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
    <!--begin::Theme mode setup on page load-->
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
    <!--end::Theme mode setup on page load-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <!--begin::Authentication - Sign-up -->
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            <!--begin::Aside-->
            <div class="d-flex flex-lg-row-fluid w-lg-50 bgi-size-cover bgi-position-center"
                style="background-image: url(assets/media/misc/auth-bg.png)">
                <!--begin::Content-->
                <div class="d-flex flex-column flex-center p-6 p-lg-10 w-100">
                    <!--begin::Logo-->
                    <a href="{{ url('/') }}" class="mb-0 mb-lg-20">
                        <img alt="Logo" src="assets/media/logos/default-white.svg" class="h-40px h-lg-70px" />
                    </a>
                    <!--end::Logo-->
                    <!--begin::Image-->
                    <img class="d-none d-lg-block mx-auto w-300px w-lg-75 w-xl-500px mb-10 mb-lg-20"
                        src="assets/media/misc/auth-screens.png" alt="" />
                    <!--end::Image-->
                </div>
                <!--end::Content-->
            </div>
            <!--begin::Aside-->
            <!--begin::Body-->
            <div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10">
                <!--begin::Form-->
                <div class="d-flex flex-center flex-column flex-lg-row-fluid">
                    <!--begin::Wrapper-->
                    <div class="w-lg-500px p-10">
                        <!--begin::Form-->
                        <form class="form w-100" method="POST" novalidate="novalidate"
                            action="{{ route('register') }}">
                            @csrf
                            <!--begin::Heading-->
                            <div class="text-center mb-11">
                                <!--begin::Title-->
                                <h1 class="text-gray-900 fw-bolder mb-3">Registrarse</h1>
                                <!--end::Title-->
                            </div>
                            <!--begin::Heading-->
                            <div class="row">
                                <div class="col-12 col-md-6 col-sm-6 mb-5">
                                    <!--begin::Nombre-->
                                    <input type="text" placeholder="Nombre" name="name" autocomplete="name"
                                        class="form-control bg-transparent @error('name') is-invalid @enderror"
                                        value="{{ old('name') }}" />

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <!--end::Nombre-->
                                </div>

                                <div class="col-12 col-md-6 col-sm-6 mb-5">
                                    <!--begin::Nombre de usuario-->
                                    <input type="text" placeholder="Nombre de usuario" name="username"
                                        autocomplete="username"
                                        class="form-control bg-transparent @error('username') is-invalid @enderror"
                                        value="{{ old('username') }}" />

                                    @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <!--end::Nombre de usuario-->
                                </div>
                            </div>
                            <!--begin::Grupo de entrada-->
                            <div class="fv-row mb-5">
                                <!--begin::Correo electrónico-->
                                <input type="email" placeholder="Correo electrónico" name="email" autocomplete="email"
                                    class="form-control bg-transparent @error('email') is-invalid @enderror"
                                    value="{{ old('email') }}" />

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <!--end::Correo electrónico-->
                            </div>
                            <!--begin::Grupo de entrada-->
                            <div class="row">
                                <div class="col-12 col-md-6 col-sm-6 mb-5" data-kt-password-meter="true">
                                    <!--begin::Envoltura de entrada-->
                                    <div class="position-relative mb-3">
                                        <input
                                            class="form-control bg-transparent @error('password') is-invalid @enderror"
                                            type="password" placeholder="Contraseña" name="password"
                                            autocomplete="new-password" />

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <span
                                            class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                                            data-kt-password-meter-control="visibility">
                                            <i class="ki-duotone ki-eye-slash fs-2"></i>
                                            <i class="ki-duotone ki-eye fs-2 d-none"></i>
                                        </span>
                                    </div>
                                    <!--end::Envoltura de entrada-->
                                    <!--begin::Medidor-->
                                    <div class="d-flex align-items-center mb-3"
                                        data-kt-password-meter-control="highlight">
                                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
                                        </div>
                                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
                                        </div>
                                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
                                        </div>
                                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                                    </div>
                                    <!--end::Medidor-->
                                </div>

                                <div class="col-12 col-md-6 col-sm-6 mb-5">
                                    <!--begin::Confirmación de contraseña-->
                                    <input placeholder="Confirmación de contraseña" name="password_confirmation"
                                        type="password" autocomplete="new-password"
                                        class="form-control bg-transparent @error('password_confirmation') is-invalid @enderror" />

                                    @error('password_confirmation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <!--end::Confirmación de contraseña-->
                                </div>
                            </div>
                            <!--begin::Indicación-->
                            <div class="text-muted mb-5">Utiliza 8 o más caracteres con una combinación de letras, números y símbolos.</div>
                            <!--end::Indicación-->
                            <!--begin::Aceptar-->
                            <div class="fv-row mb-8">
                                <label class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="toc" value="1"
                                        required />
                                    <span class="form-check-label fw-semibold text-gray-700 fs-base ms-1">Acepto los
                                        <a href="#" class="ms-1 link-primary">Términos de uso</a> y la <a
                                            href="#" class="ms-1 link-primary">Política de privacidad</a>
                                    </span>
                                </label>
                            </div>
                            <!--end::Aceptar-->
                            <!--begin::Botón de enviar-->
                            <div class="d-grid mb-5">
                                <button type="submit" id="kt_sign_up_submit" class="btn btn-primary">
                                    <!--begin::Etiqueta del indicador-->
                                    <span class="indicator-label">Registrarse</span>
                                    <!--end::Etiqueta del indicador-->
                                </button>
                            </div>
                            <!--end::Botón de enviar-->
                            <!--begin::Iniciar sesión-->
                            <div class="text-gray-500 text-center fw-semibold fs-6">¿Ya tienes una cuenta?
                                <a href="{{ route('login') }}" class="link-primary fw-semibold">Iniciar sesión</a>
                            </div>
                            <!--end::Iniciar sesión-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Form-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Authentication - Sign-up-->
    </div>
    <!--end::Root-->
    <!--begin::Javascript-->
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="assets/js/custom/authentication/sign-up/general.js"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>

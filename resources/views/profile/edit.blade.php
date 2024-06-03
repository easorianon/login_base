@extends('app')
@section('title', 'Configuración de la cuenta')

@section('content')
    @include('sweetalert::alert')
    <div class="d-flex flex-column flex-column-fluid">
        <!--end::Toolbar-->
        <!--begin::Content-->
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container container-fluid">

                <!--begin::Información de perfil-->
                <div class="card mb-5 mt-19 mb-xl-10">
                    <!--begin::Encabezado de la tarjeta-->
                    <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
                        data-bs-target="#kt_account_profile_details" aria-expanded="true"
                        aria-controls="kt_account_profile_details">
                        <!--begin::Título de la tarjeta-->
                        <div class="card-title m-0">
                            <h3 class="fw-bold m-0">Información del perfil</h3>
                        </div>
                        <!--end::Título de la tarjeta-->
                    </div>
                    <!--begin::Encabezado de la tarjeta-->
                    <!--begin::Contenido-->
                    <div id="kt_account_settings_profile_details" class="collapse show">
                        <!--begin::Formulario-->
                        <form id="sendVerification" method="post" action="{{ route('verification.send') }}">
                            @csrf
                        </form>

                        <script>
                            function sendForm() {
                                document.getElementById("sendVerification").submit();
                            }
                        </script>

                        <form class="form" action="{{ route('profile.update') }}" method="POST">
                            @csrf
                            @method('patch')
                            <!--begin::Cuerpo de la tarjeta-->
                            <div class="card-body border-top p-9">

                                <!--begin::Grupo de entrada-->
                                <div class="row mb-6">
                                    <!--begin::Etiqueta-->
                                    <label class="col-lg-3 col-form-label fw-semibold fs-6">Nombre</label>
                                    <!--end::Etiqueta-->
                                    <!--begin::Columna-->
                                    <div class="col-lg-9 fv-row">
                                        <input type="text" name="name"
                                            class="form-control form-control-lg form-control-solid @error('name') is-invalid @enderror"
                                            placeholder="Nombre" value="{{ old('name', $user->name) }}" autocomplete="name" />

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <!--end::Columna-->
                                </div>
                                <!--end::Grupo de entrada-->

                                <!--begin::Grupo de entrada-->
                                <div class="row mb-6">
                                    <!--begin::Etiqueta-->
                                    <label class="col-lg-3 col-form-label fw-semibold fs-6">Nombre de usuario</label>
                                    <!--end::Etiqueta-->
                                    <!--begin::Columna-->
                                    <div class="col-lg-9 fv-row">
                                        <input type="text" name="username"
                                            class="form-control form-control-lg form-control-solid @error('username') is-invalid @enderror"
                                            placeholder="Nombre de usuario" value="{{ old('username', $user->username) }}"
                                            autocomplete="username" />

                                        @error('username')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <!--end::Columna-->
                                </div>
                                <!--end::Grupo de entrada-->

                                <!--begin::Grupo de entrada-->
                                <div class="row mb-6">
                                    <!--begin::Etiqueta-->
                                    <label class="col-lg-3 col-form-label fw-semibold fs-6">Correo electrónico</label>
                                    <!--end::Etiqueta-->
                                    <!--begin::Columna-->
                                    <div class="col-lg-9 fv-row">
                                        <input type="text" name="email"
                                            class="form-control form-control-lg form-control-solid @error('email') is-invalid @enderror"
                                            placeholder="Correo electrónico" value="{{ old('email', $user->email) }}" />

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <!--end::Columna-->

                                    @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                                        <!--begin::Aviso-->
                                        <div
                                            class="notice d-flex bg-light-primary rounded border-primary border border-dashed p-6 mt-6">
                                            <!--begin::Icono-->
                                            <i class="ki-duotone ki-shield-tick fs-2tx text-primary me-4">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                            <!--end::Icono-->
                                            <!--begin::Contenedor-->
                                            <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                                                <!--begin::Contenido-->
                                                <div class="mb-3 mb-md-0 fw-semibold">
                                                    <h4 class="text-gray-900 fw-bold">Verifica tu nuevo correo electrónico</h4>
                                                    <div class="fs-6 text-gray-700 pe-7">
                                                        Por favor, presiona el botón <span class="text-primary">Enviar</span>,
                                                        para enviar el enlace de verificación a tu nuevo
                                                        correo electrónico.
                                                    </div>
                                                </div>
                                                <!--end::Contenido-->
                                                <!--begin::Acción-->
                                                <a href="javascript:void(0);"
                                                    class="btn btn-primary px-6 align-self-center text-nowrap"
                                                    onclick="sendForm()">
                                                    Enviar
                                                </a>
                                                <!--end::Acción-->
                                            </div>
                                            <!--end::Contenedor-->
                                        </div>
                                        <!--end::Aviso-->

                                        @if (session('status') === 'verification-link-sent')
                                            <!--begin::Notificación-->
                                            <div
                                                class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6 mt-6">
                                                <!--begin::Icono-->
                                                <i class="ki-duotone ki-design-1 fs-2tx text-primary me-4"></i>
                                                <!--end::Icono-->
                                                <!--begin::Contenedor-->
                                                <div class="d-flex flex-stack flex-grow-1">
                                                    <!--begin::Contenido-->
                                                    <div class="fw-semibold">
                                                        <div class="fs-6 text-gray-700">
                                                            Se ha enviado un nuevo enlace de verificación a tu dirección de correo electrónico.
                                                        </div>
                                                    </div>
                                                    <!--end::Contenido-->
                                                </div>
                                                <!--end::Contenedor-->
                                            </div>
                                            <!--end::Notificación-->
                                        @endif
                                    @endif
                                </div>
                                <!--end::Grupo de entrada-->
                            </div>
                            <!--end::Cuerpo de la tarjeta-->
                            <!--begin::Acciones-->
                            <div class="card-footer d-flex justify-content-end py-6 px-9">
                                <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Guardar
                                    cambios</button>
                            </div>
                            <!--end::Acciones-->
                        </form>
                        <!--end::Formulario-->
                    </div>
                    <!--end::Contenido-->
                </div>
                <!--end::Información de perfil-->

                <!--begin::Contraseña de la cuenta-->
                <div class="card mb-5 mb-xl-10">
                    <!--begin::Encabezado de la tarjeta-->
                    <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
                        data-bs-target="#kt_account_profile_details" aria-expanded="true"
                        aria-controls="kt_account_profile_details">
                        <!--begin::Título de la tarjeta-->
                        <div class="card-title m-0">
                            <h3 class="fw-bold m-0">Actualizar contraseña</h3>
                        </div>
                        <!--end::Título de la tarjeta-->
                    </div>
                    <!--begin::Encabezado de la tarjeta-->
                    <!--begin::Contenido-->
                    <div id="kt_account_settings_profile_details" class="collapse show">
                        <!--begin::Formulario-->
                        <form class="form" action="{{ route('password.update') }}" method="POST">
                            @csrf
                            @method('put')
                            <!--begin::Cuerpo de la tarjeta-->
                            <div class="card-body border-top p-9">
                                <!--begin::Grupo de entrada-->
                                <div class="row mb-6">
                                    <!--begin::Etiqueta-->
                                    <label class="col-lg-3 col-form-label fw-semibold fs-6">Contraseña actual</label>
                                    <!--end::Etiqueta-->
                                    <!--begin::Columna-->
                                    <div class="col-lg-9 fv-row">
                                        <input type="password" name="current_password"
                                            class="form-control form-control-lg form-control-solid @error('current_password') is-invalid @enderror"
                                            placeholder="Contraseña actual" autocomplete="current-password" />

                                        @error('current_password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <!--end::Columna-->
                                </div>
                                <!--end::Grupo de entrada-->

                                <!--begin::Grupo de entrada-->
                                <div class="row mb-6">
                                    <!--begin::Etiqueta-->
                                    <label class="col-lg-3 col-form-label fw-semibold fs-6">Nueva contraseña</label>
                                    <!--end::Etiqueta-->
                                    <!--begin::Columna-->
                                    <div class="col-lg-9 fv-row">
                                        <input type="password" name="password"
                                            class="form-control form-control-lg form-control-solid @error('password') is-invalid @enderror"
                                            placeholder="Nueva contraseña" autocomplete="new-password" />

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <!--end::Columna-->
                                </div>
                                <!--end::Grupo de entrada-->

                                <!--begin::Grupo de entrada-->
                                <div class="row mb-6">
                                    <!--begin::Etiqueta-->
                                    <label class="col-lg-3 col-form-label fw-semibold fs-6">Confirmar contraseña</label>
                                    <!--end::Etiqueta-->
                                    <!--begin::Columna-->
                                    <div class="col-lg-9 fv-row">
                                        <input type="password" name="password_confirmation"
                                            class="form-control form-control-lg form-control-solid @error('password_confirmation') is-invalid @enderror"
                                            placeholder="Confirmar contraseña" autocomplete="new-password" />

                                        @error('password_confirmation')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <!--end::Columna-->
                                </div>
                                <!--end::Grupo de entrada-->
                            </div>
                            <!--end::Cuerpo de la tarjeta-->
                            <!--begin::Acciones-->
                            <div class="card-footer d-flex justify-content-end py-6 px-9">
                                <button type="submit" class="btn btn-primary"
                                    id="kt_account_profile_details_submit">Guardar cambios</button>
                            </div>
                            <!--end::Acciones-->
                        </form>
                        <!--end::Formulario-->
                    </div>
                    <!--end::Contenido-->
                </div>
                <!--end::Contraseña de la cuenta-->

                {{-- <!--begin::Eliminar cuenta-->
                <div class="card">
                    <!--begin::Encabezado de la tarjeta-->
                    <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
                        data-bs-target="#kt_account_deactivate" aria-expanded="true"
                        aria-controls="kt_account_deactivate">
                        <div class="card-title m-0">
                            <h3 class="fw-bold m-0">Eliminar cuenta</h3>
                        </div>
                    </div>
                    <!--end::Encabezado de la tarjeta-->
                    <!--begin::Contenido-->
                    <div id="kt_account_settings_deactivate" class="collapse show">
                        <!--begin::Formulario-->
                        <form id="kt_account_deactivate_form" class="form" action="{{ route('profile.destroy') }}"
                            method="POST">
                            @csrf
                            @method('DELETE')
                            <!--begin::Cuerpo de la tarjeta-->
                            <div class="card-body border-top p-9">
                                <!--begin::Aviso-->
                                <div
                                    class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-9 p-6">
                                    <!--begin::Icono-->
                                    <i class="ki-duotone ki-information fs-2tx text-warning me-4">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                    <!--end::Icono-->
                                    <!--begin::Contenedor-->
                                    <div class="d-flex flex-stack flex-grow-1">
                                        <!--begin::Contenido-->
                                        <div class="fw-semibold">
                                            <h4 class="text-gray-900 fw-bold">¿Eliminar cuenta?</h4>
                                            <div class="fs-6 text-gray-700">
                                                Una vez que se elimine tu cuenta, todos sus recursos y datos se eliminarán de forma permanente. Antes de eliminar tu cuenta, por favor descarga cualquier dato o información que desees conservar.
                                            </div>
                                        </div>
                                        <!--end::Contenido-->
                                    </div>
                                    <!--end::Contenedor-->
                                </div>
                                <!--end::Aviso-->
                                <!--begin::Fila de entrada del formulario-->
                                <div class="form-check form-check-solid fv-row">
                                    <input name="deactivate" class="form-check-input" type="checkbox" value="1"
                                        id="deactivate" />
                                    <label class="form-check-label fw-semibold ps-2 fs-6" for="deactivate">Confirmo la desactivación de mi cuenta</label>
                                </div>
                                <!--end::Fila de entrada del formulario-->
                            </div>
                            <!--end::Cuerpo de la tarjeta-->
                            <!--begin::Pie de la tarjeta-->
                            <div class="card-footer d-flex justify-content-end py-6 px-9">
                                <button id="kt_account_deactivate_account_submit" type="submit"
                                    class="btn btn-danger fw-semibold">Eliminar cuenta</button>
                            </div>
                            <!--end::Pie de la tarjeta-->
                        </form>
                        <!--end::Formulario-->
                    </div>
                    <!--end::Contenido-->
                </div>
                <!--end::Eliminar cuenta--> --}}


            </div>
            <!--end::Contenedor de contenido-->
        </div>
        <!--end::Contenido-->
    </div>
@endsection

@push('custom-javascript')
    {{-- <script src="assets/js/custom/account/settings/deactivate-account.js"></script> --}}
@endpush

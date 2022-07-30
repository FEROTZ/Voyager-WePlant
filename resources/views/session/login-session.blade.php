@extends('layouts.user_type.guest')

@section('content')

  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-75">
        <div class="container">
          <div class="row">
            <div class="col-xl-6 col-lg-5 col-md-6 d-flex flex-column mx-auto">
              <div class="card card-plain mt-7">
                <div class="card-header col-lg-8 pb-0 text-left bg-transparent">
                  <h3 class="font-weight-bolder text-dark text-gradient">Bienvenido de nuevo</h3>
                  <p class="mb-0">Crea una cuenta nueva<br></p>
                  <p class="mb-0">O inicia sesión con tus credenciales:</p>
                </div>
                <div class="card-body col-xl-8">
                  <form role="form" method="POST" action="/session">
                    @csrf
                    <label>Correo electrónico</label>
                    <div class="mb-3">
                      <input type="email" class="form-control" name="email" id="email" placeholder="Correo electrónico" aria-label="Email" aria-describedby="email-addon">
                      {{-- @error('email')
                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                      @enderror --}}
                    </div>
                    <label>Contraseña</label>
                    <div class="mb-3">
                      <input type="password" class="form-control" name="password" id="password" placeholder="Contraseña" aria-label="Password" aria-describedby="password-addon">
                      @error('email')
                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                      @enderror
                    </div>
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="rememberMe" checked="">
                      <label class="form-check-label" for="rememberMe">Recordarme</label>
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn bg-gradient-dark w-100 mt-4 mb-0">Iniciar sesión</button>
                    </div>
                  </form>
                  <div class="card-footer text-center pt-0 px-lg-2 px-1 mt-3">
                    <small class="text-muted">
                      <a href="/login/forgot-password" class="text-dark text-gradient font-weight-bold">¿Olvidaste tu contraseña?</a>
                    </small>
                      <p class="mb-4 text-sm mx-auto">
                        <a href="register" class="text-dark text-gradient font-weight-bold">Crear una cuenta</a>
                      </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="background-image:url('../assets/img/curved-images/bg.jpg')"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

@endsection

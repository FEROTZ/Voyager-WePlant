@extends('layouts.user_type.auth')

@section('content')

<div>
    <div class="container-fluid">
        <div class="page-header min-height-300 border-radius-xl mt-4 cover-centered" style="background-image:url('');">
            <span class="mask bg-gradient-primary opacity-6"></span>
        </div>
        <div class="card card-body blur shadow-blur mx-4 mt-n6">
            <div class="row gx-4">
                <div class="col-auto my-auto">
                    <div class="h-100 my-4">
                        <h5 class="mb-1">
                            {{ __('Agregar un nuevo huerto') }}
                        </h5>
                    </div>
                </div>
                {{-- <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                    <div class="nav-wrapper position-relative end-0">
                        <div class="d-flex justify-content-end">
                          <label for="file-upload" class="custom-file-upload btn bg-gradient-light btn-md mt-4 mb-4">
                            {{ __('Editar imagen') }}
                            <i class="fas fa-edit ms-2"></i>
                          </label>
                          <input id="file-upload" type="file"/>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-body pt-4 p-3">
                <form action="/#" method="POST" role="form text-left">
                    @csrf
                    @if($errors->any())
                        <div class="mt-3  alert alert-primary alert-dismissible fade show" role="alert">
                            <span class="alert-text text-white">
                            {{$errors->first()}}</span>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                <i class="fa fa-close" aria-hidden="true"></i>
                            </button>
                        </div>
                    @endif
                    @if(session('success'))
                        <div class="m-3  alert alert-success alert-dismissible fade show" id="alert-success" role="alert">
                            <span class="alert-text text-white">
                            {{ session('success') }}</span>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                <i class="fa fa-close" aria-hidden="true"></i>
                            </button>
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="serial-number" class="form-control-label">{{ __('No. serie del WePlant') }}</label>
                                <div class="@error('orchard.serial-number')border border-danger rounded-3 @enderror">
                                    <input class="form-control" value="{{ auth()->user()->name }}" type="text" placeholder="Ingresa el numero de serie del dispositivo WePlant" id="serial-number" name="No. serie">
                                    {{-- hay que sustituir todos estos error pero no sé que se ponga aquí --}}
                                    @error('name')
                                      <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                              <label for="crop" class="form-control-label">{{ __('Cultivo a plantar') }}</label>
                              <div class="@error('email')border border-danger rounded-3 @enderror">
                                <select class="form-select" id="crop" aria-label="Default select example">
                                  <option selected>Selecciona un cultivo</option>
                                  <option value="1">Zanahorias</option>
                                  <option value="2">Calabazas</option>
                                  <option value="3">Epazote</option>
                                </select>
                                  @error('email')
                                      <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                  @enderror
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="location" class="form-control-label">{{ __('Lugar en el que se encuentra el huerto') }}</label>
                                <div class="@error('humidity.low')border border-danger rounded-3 @enderror">
                                    <input class="form-control" type="text" placeholder="Oficina, casa, jardín abuela" id="location" name="location" value="">
                                        @error('phone')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-md-3">
                            <div class="form-group">
                                <label for="user.location" class="form-control-label">{{ __('Temperatura minima') }}</label>
                                <div class="@error('user.location') border border-danger rounded-3 @enderror">
                                    <input class="form-control" type="text" placeholder="Ingresa la temperatura mínima" id="name" name="location" value="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                              <label for="user.location" class="form-control-label">{{ __('Temperatura máximo') }}</label>
                              <div class="@error('user.location') border border-danger rounded-3 @enderror">
                                  <input class="form-control" type="text" placeholder="Ingresa la temperatura máxima" id="name" name="location" value="">
                              </div>
                          </div>
                      </div> --}}
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'Guardar' }}</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection
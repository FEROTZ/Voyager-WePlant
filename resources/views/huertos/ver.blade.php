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
                            {{ __('Editar huerto') }}
                        </h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                  <div class="nav-wrapper position-relative end-0 d-flex justify-content-end">
                      <input type="checkbox" class="btn-check" name="Prueba" id="ChkEdit" autocomplete="off" onclick="checkEdit()">
                      <label class="btn btn-outline-primary" for="ChkEdit"><i class="fas fa-edit"></i></label>
                  </div>
              </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-body pt-4 p-3">
                <form action="{{route('store.huerto')}}" method="POST" role="form text-left">
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
                                <label for="serial" class="form-control-label">{{ __('No. serie del WePlant') }}</label>
                                <div class="@error('orchard.serial')border border-danger rounded-3 @enderror">
                                    <input class="form-control" type="text" placeholder="Ingresa el numero de serie del dispositivo WePlant"
                                    id="serial" name="serial" required value="WePlantas564d1-35" readOnly>
                                    @error('serial')
                                      <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                              <label for="crop" class="form-control-label">{{ __('Cultivo a plantar') }}</label>
                              <div class="@error('crop')border border-danger rounded-3 @enderror">
                                <select class="form-select" id="crop" name="crop" aria-label="Default select example" required disabled>
                                    <option selected>Selecciona un cultivo</option>
                                    <option selected>Prueba 1</option>
                                    <option selected>Prueba 2</option>
                                    <option selected>Prueba 3</option>
                                </select>
                                  @error('crop')
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
                                    <input class="form-control" type="text" placeholder="Oficina, casa, jardín abuela"
                                    id="location" name="location" value="Oficina" readOnly>
                                        @error('location')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" id="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4" disabled>{{ 'Actualizar' }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    function checkEdit(){
      var checkbox = document.getElementById("ChkEdit"); // Get the checkbox
      var serial = document.getElementById("serial"); // Get the serial number field
      var crop = document.getElementById("crop"); // Get the crop field
      var location = document.getElementById("location"); // Get the location field
      var submit = document.getElementById("submit"); // Get the submit button

      if(checkbox.checked){
        serial.readOnly = false;
        crop.disabled = false;
        location.readOnly = false;
        submit.disabled = false;
      }else{
        serial.readOnly = true;
        crop.disabled = true;
        location.readOnly = true;
        submit.disabled = true;
      }
    }
</script>
@endsection

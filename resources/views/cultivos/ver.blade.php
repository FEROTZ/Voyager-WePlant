@extends('layouts.user_type.auth')

@section('title')
    <title>
        WePlant | {{ $crop->name }}
    </title>
@endsection

@section('page-title')
    Mi Cultivo / {{ $crop->name }}
@endsection

@section('content')

<div>

    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-body pt-4 p-3">
                <form action="{{route('edit.cultivo', $crop)}}" method="POST" role="form text-left" enctype="multipart/form-data">

                    @csrf
                    @method('put')

                    <div class="container-fluid">{{-- ../assets/img/vegetables/zanahorias.jpg --}}
                        <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('{{asset("$crop->photo")}}'); background-position-y: 50%;">
                            <span class="mask bg-gradient-primary opacity-6"></span>
                        </div>
                        <div class="card card-body blur shadow-blur mx-4 mt-n6">
                            <div class="row gx-4">
                                <div class="col-auto my-auto">
                                    <div class="h-100">
                                        <h5 class="mb-1">
                                            {{ __('Editar cultivo') }}
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3 row justify-content-end">
                                    <div class="col-4">
                                        <input type="checkbox" class="btn-check" name="Prueba" id="ChkEdit" autocomplete="off" onclick="checkEdit()">
                                        <label class="btn btn-outline-primary" for="ChkEdit"><i class="fas fa-edit"></i></label>
                                    </div>
                                    <div class="col-4">
                                        <label for="file" class="custom-file-upload btn bg-gradient-light btn-md mb-4">
                                            <i class="fas fa-camera"></i>
                                        </label>
                                        <input id="file" type="file" name="photo" accept="image/*" disabled/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



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


                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="crop-name" class="form-control-label">{{ __('Nombre del cultivo') }}</label>
                                <div class="@error('crop.name')border border-danger rounded-3 @enderror">
                                    <input class="form-control" type="text" placeholder="Nombre del cultivo"
                                    id="name" name="name" required value="{{$crop->name}}" readOnly>
                                    @error('name')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="low_ph" class="form-control-label">{{ __('pH mínimo') }}</label>
                                <div class="@error('email')border border-danger rounded-3 @enderror">
                                    <input class="form-control" type="number" step="any" placeholder="Ingresa el pH mínimo"
                                    id="low_ph" name="low_ph" required value="{{$crop->regulation->low_ph}}" readOnly>
                                        @error('low_ph')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="high_ph" class="form-control-label">{{ __('pH máximo') }}</label>
                                <div class="@error('email')border border-danger rounded-3 @enderror">
                                    <input class="form-control" type="number" step="any" placeholder="Ingresa el pH máximo"
                                    id="high_ph" name="high_ph" required value="{{$crop->regulation->high_ph}}" readOnly>
                                        @error('high_ph')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="low_humidity" class="form-control-label">{{ __('Humedad min') }}</label>
                                <div class="@error('low_humidity')border border-danger rounded-3 @enderror">
                                    <input class="form-control" type="number" step="any" placeholder="Ingresa la humedad minima"
                                    id="low_humidity" name="low_humidity" required value="{{$crop->regulation->low_humidity}}" readOnly>
                                        @error('low_humidity')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="high_humidity" class="form-control-label">{{ __('Humedad max') }}</label>
                                <div class="@error('high_humidity')border border-danger rounded-3 @enderror">
                                    <input class="form-control" type="number" step="any" placeholder="Ingresa la humedad máxima"
                                    id="high_humidity" name="high_humidity" required value="{{$crop->regulation->high_humidity}}" readOnly>
                                        @error('high_humidity')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="low_temperature" class="form-control-label">{{ __('Temperatura minima') }}</label>
                                <div class="@error('low_temperature') border border-danger rounded-3 @enderror">
                                    <input class="form-control" type="number" step="any" placeholder="Ingresa la temperatura mínima"
                                    id="low_temperature" name="low_temperature"`required value="{{$crop->regulation->low_temperature}}" readOnly>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="high_temperature" class="form-control-label">{{ __('Temperatura máximo') }}</label>
                                <div class="@error('high_temperature') border border-danger rounded-3 @enderror">
                                    <input class="form-control" type="number" step="any" placeholder="Ingresa la temperatura máxima"
                                    id="high_temperature" name="high_temperature" required value="{{$crop->regulation->high_temperature}}" readOnly>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="description">{{ 'Descripción' }}</label>
                        <div class="@error('description')border border-danger rounded-3 @enderror">
                            <textarea class="form-control" id="description" rows="3" placeholder="Dinos algo de tu cultivo"
                            name="description" readOnly>{{$crop->description}}</textarea>
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
        var checkbox = document.getElementById("ChkEdit");	// Get the checkbox
        var file = document.getElementById("file");	// Get the file input
        var name = document.getElementById("name"); // Get the name field
        var lowpH = document.getElementById("low_ph"); // Get the lowpH field
        var highpH = document.getElementById("high_ph"); // Get the highpH field
        var lowHumidity = document.getElementById("low_humidity"); // Get the lowHumidity field
        var highHumidity = document.getElementById("high_humidity"); // Get the highHumidity field
        var lowTemperature = document.getElementById("low_temperature"); // Get the lowTemperature field
        var highTemperature = document.getElementById("high_temperature"); // Get the highTemperature field
        var description = document.getElementById("description"); // Get the description field
        var submit = document.getElementById("submit"); // Get the submit button

        if (checkbox.checked) {
            file.disabled = false;
            name.readOnly = false;
            lowpH.readOnly = false;
            highpH.readOnly = false;
            lowHumidity.readOnly = false;
            highHumidity.readOnly = false;
            lowTemperature.readOnly = false;
            highTemperature.readOnly = false;
            description.readOnly = false;
            submit.disabled = false;
        } else {
            file.disabled = true;
            name.readOnly = true;
            lowpH.readOnly = true;
            highpH.readOnly = true;
            lowHumidity.readOnly = true;
            highHumidity.readOnly = true;
            lowTemperature.readOnly = true;
            highTemperature.readOnly = true;
            description.readOnly = true;
            submit.disabled = true;
        }
    }
</script>
@endsection

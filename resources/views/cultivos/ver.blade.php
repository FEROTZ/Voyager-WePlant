@extends('layouts.user_type.auth')

@section('content')

<div>
    <div class="container-fluid">
        <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('../assets/img/vegetables/zanahorias.jpg'); background-position-y: 50%;">
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
                <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                    <div class="nav-wrapper position-relative end-0 d-flex justify-content-end">
                        <button type="button" class="btn btn-outline-primary"
                        title="Eliminar" onclick="deleteConfirmation({{$crop->id}})">
                            <i class="fas fa-trash"></i>
                        </button>
                        <button type="button" class="btn btn-outline-primary" style="margin-left:1rem!important" title="Actualizar">
                            <i class="fas fa-edit"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-body pt-4 p-3">
                <form action="" method="POST" role="form text-left">
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
                                <label for="crop-name" class="form-control-label">{{ __('Nombre del cultivo') }}</label>
                                <div class="@error('crop.name')border border-danger rounded-3 @enderror">
                                    <input class="form-control" type="text" placeholder="Nombre del cultivo"
                                    id="name" name="name" required value="">
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
                                    <input class="form-control" value="" type="number" step="any" placeholder="Ingresa el pH mínimo" id="low_ph" name="low_ph">
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
                                    <input class="form-control" value="" type="number" step="any" placeholder="Ingresa el pH máximo" id="high_ph" name="high_ph">
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
                                    <input class="form-control" type="number" step="any" placeholder="Ingresa la humedad minima" id="low_humidity" name="low_humidity" value="">
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
                                    <input class="form-control" type="number" step="any" placeholder="Ingresa la humedad mínima" id="number" name="high_humidity" value="">
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
                                    <input class="form-control" type="number" step="any" placeholder="Ingresa la temperatura mínima" id="low_temperature" name="low_temperature" value="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="high_temperature" class="form-control-label">{{ __('Temperatura máximo') }}</label>
                                <div class="@error('high_temperature') border border-danger rounded-3 @enderror">
                                    <input class="form-control" type="number" step="any" placeholder="Ingresa la temperatura máxima" id="high_temperature" name="high_temperature" value="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="description">{{ 'Descripción' }}</label>
                        <div class="@error('description')border border-danger rounded-3 @enderror">
                            <textarea class="form-control" id="description" rows="3" placeholder="Dinos algo de tu cultivo" name="description"></textarea>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'Actualizar' }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function deleteConfirmation(id) {
        swal.fire({
            title: `¿Eliminar cultivo? ${id}`,
            icon: 'question',
            text: "Ten en cuenta que este cambio no se puede deshacer",
            type: "warning",
            showCancelButton: !0,
            confirmButtonText: "Sí, eliminar!",
            cancelButtonText: "No, cancelar!",
            reverseButtons: !0
        }).then(function (e) {

            if (e.value === true) {
                let token = $('meta[name="csrf-token"]').attr('content');
                let _url = `mi-cultivo/eliminar/${id}`;

                $.ajax({
                    type: 'POST',
                    url: _url,
                    data: {_token: token},
                    success: function (resp) {
                        if (resp.success) {
                            swal.fire("¡Hecho!", resp.message, "success");
                            location.reload();
                        } else {
                            swal.fire("¡Error!", 'Algo salio mal.', "error");
                        }
                    },
                    error: function (resp) {
                        swal.fire("¡Error!", `algo malio sal ${resp}`, "error");
                    }
                });

            } else {
                e.dismiss;
            }

        }, function (dismiss) {
            return false;
        })
    }
</script>
@endsection
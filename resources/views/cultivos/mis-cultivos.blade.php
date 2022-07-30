@extends('layouts.user_type.auth')

@section('content')

<div>
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="row">
                        <div class="col-lg-6 col-6">
                                <h5>
                                    <i class="fas fa-carrot me-2" aria-hidden="true"></i>
                                    Mis cultivos
                                </h5>
                        </div>
                        <div class="col-lg-6 col-6">
                            <div class="input-group">
                                <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" placeholder="Buscar...">
                            </div>
                    </div>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    @foreach ($crops as $crop)
                        <div class="overflow-hidden position-relative border-radius-lg bg-cover h-100 m-4 cover-centered" style="background-image: url('../assets/img/vegetables/calabazas.jpg');">
                            <span class="mask bg-gradient-dark"></span>
                                <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3">
                                    <div class="row">
                                        <div class="col-lg-6 col-7">
                                            <h5 class="text-white font-weight-bolder mb-4 pt-2">{{$crop->name}}</h5>
                                        </div>
                                        <div class="col-lg-6 col-5 text-end">

                                            <form action="{{route('destroy.cultivo', $crop)}}" method="post" id="deleteForm" name="deleteForm">

                                                @csrf

                                                @method('delete')

                                                <div class="dropdown float-lg-end pe-4">
                                                    <a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-ellipsis-v text-secondary"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-cards px-2 py-3 ms-sm-n4 ms-n5" aria-labelledby="dropdownTable">

                                                        <li><a class="dropdown-item border-radius-md" onclick="deleteConfirmation()" href="javascript:;">
                                                            <i class="fas fa-trash text-end"></i>
                                                            Eliminar
                                                        </a></li>
                                                    </ul>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                    <div class="text-white text-sm font-weight-bold mb-0 mt-auto pt-4" href="javascript:;">
                                        <a class="icon-move-right text-white" href="{{route('show.cultivo', $crop)}}">
                                            Acceder
                                            <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                        </div>
                    @endforeach

                    <a href="{{route('create.cultivo')}}">
                        <div class="overflow-hidden position-relative border-radius-lg h-100 m-4">
                            <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3 border-primary-dashed">
                                <div class="p-2 justify-content-center text-center">
                                    <i class="fa fa-plus text-primary mb-1 mt-2"></i>
                                    <h5 class=" text-primary mb-2 pt-2"> Nuevo cultivo </h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <script>
        function deleteConfirmation() {
            console.log("Entró")
        swal.fire({
            title: `¿Eliminar cultivo?`,
            icon: 'question',
            text: "Ten en cuenta que este cambio no se puede deshacer",
            showCancelButton: !0,
            confirmButtonText: "Sí, eliminar!",
            cancelButtonText: "No, cancelar!",
            reverseButtons: !0
        }).then(function (e) {

            if (e.value === true) {

                deleteForm.submit();

                /* let token = $('meta[name="csrf-token"]').attr('content');
                let _url = `/mi-cultivo/eliminar/${id}`;

                $.ajax({
                    type: 'POST',
                    url: _url,
                    data: {_token: token},
                    success: function (resp) {
                        if (resp.success) {
                            swal.fire("Done!", resp.message, "success");
                            location.reload();
                        } else {
                            swal.fire("Error!", 'Sumething went wrong.', "error");
                        }
                    },
                    error: function (resp) {
                        swal.fire("Error!", 'Sumething went wrong.', "error");
                    }
                }); */

            } else {
                e.dismiss;
            }

            }, function (dismiss) {
            return false;
            })
    }
    </script>
</div>

@endsection

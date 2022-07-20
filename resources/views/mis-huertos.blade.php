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
                                    Mis huertos
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
                    <div class="overflow-hidden position-relative border-radius-lg bg-cover h-100 m-4" style="background-image: url('../assets/img/vegetables/epazote.jpg');">
                        <span class="mask bg-gradient-dark"></span>
                        <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3">
                            <h5 class="text-white font-weight-bolder mb-4 pt-2">Epazote</h5>
                            <a class="text-white text-sm font-weight-bold mb-0 icon-move-right mt-auto pt-4" href="javascript:;">
                                Acceder
                                <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>

                    <div class="overflow-hidden position-relative border-radius-lg bg-cover h-100 m-4" style="background-image: url('../assets/img/vegetables/epazote.jpg');">
                        <span class="mask bg-gradient-dark"></span>
                        <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3">
                            <h5 class="text-white font-weight-bolder mb-4 pt-2">Epazote</h5>
                            <a class="text-white text-sm font-weight-bold mb-0 icon-move-right mt-auto pt-4" href="javascript:;">
                                Acceder
                                <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>

                    <a href="javascript:;">
                        <div class="overflow-hidden position-relative border-radius-lg h-100 m-4">
                            <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3 border-primary-dashed">
                                    <div class="p-2 justify-content-center text-center">
                                        <i class="fa fa-plus text-primary mb-1 mt-2"></i>
                                        <h5 class=" text-primary mb-2 pt-2"> Nuevo huerto </h5>
                                    </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
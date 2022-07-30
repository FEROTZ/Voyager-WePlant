@extends('layouts.user_type.auth')

@section('content')
  <div class="row mt-4">

    <div class="col-lg-6 mb-lg-0 mb-4">
        <div class="card h-100 p-3">
            <div class="card-header">
                <div class="row">
                    <div class="col-lg-12 col-12">
                    <h6>
                        <i class="fas fa-seedling  me-2" aria-hidden="true"></i>
                        <a class="font-weight-bold mt-auto" href="/mis-huertos">
                        Mis Huertos
                        <i class="fas fa-arrow-right ms-3" aria-hidden="true"></i>
                        </a>
                    </h6>
                    </div>
                </div>
            </div>

            @foreach ($orchards as $orchard)
                @php
                    $photo = $orchard->crop->photo;
                @endphp
                <div class="overflow-hidden position-relative border-radius-lg bg-cover h-100 mb-2" style="background-image: url('{{asset("$photo")}}');">
                    <span class="mask bg-gradient-dark"></span>
                    <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3">
                        <h5 class="text-white font-weight-bolder mb-4 pt-2">{{$orchard->name}}</h5>
                        <a class="text-white text-sm font-weight-bold mb-0 icon-move-right mt-auto pt-4" href="{{route('show.huerto', $orchard)}}">
                        Acceder
                        <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            @endforeach

        </div>
    </div>

    <div class="col-lg-6 mb-lg-0 mb-4">
      <div class="card h-100 p-3">
        <div class="card-header">
          <div class="row">
            <div class="col-lg-12 col-12">
              <h6>
                <i class="fas fa-carrot me-2" aria-hidden="true"></i>
                <a class="font-weight-bold mt-auto" href="/mis-cultivos">
                  Mis Cultivos
                  <i class="fas fa-arrow-right ms-3" aria-hidden="true"></i>
                </a>
              </h6>
            </div>
          </div>
        </div>
        @foreach ($crops as $crop)
            <div class="overflow-hidden position-relative border-radius-lg bg-cover h-100 mb-2" style="background-image: url('{{asset("$crop->photo")}}');">
                <span class="mask bg-gradient-dark"></span>
                <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3">
                    <h5 class="text-white font-weight-bolder mb-4 pt-2">{{$crop->name}}</h5>
                    <a class="text-white text-sm font-weight-bold mb-0 icon-move-right mt-auto pt-4" href="{{route('show.cultivo', $crop)}}">
                    Acceder
                    <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        @endforeach

      </div>
    </div>

  </div>
  <div class="row mt-4">
    <div class="col-lg-12 mb-lg-0 mb-4">
      <div class="card">
        <div class="card-header">
          <div class="row">
            <div class="col-lg-12 col-12">
              <h6>
                <i class="fas fa-question me-2" aria-hidden="true"></i>
                <a class="font-weight-bold mt-auto" href="/sabias-que">
                  ¿Sabías Que?
                  <i class="fas fa-arrow-right ms-3" aria-hidden="true"></i>
                </a>
              </h6>
            </div>
          </div>
        </div>
        <div class="card-body">

            @foreach ($informations as $information)
                <div class="card mb-3">
                    <div class="overflow-hidden position-relative border-radius-lg bg-cover h-100">
                        <span class="mask bg-gradient-light"></span>
                        <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3">
                            <div class="row">
                            <div class="col-lg-6">
                                <div class="d-flex flex-column h-100">
                                <p class="mb-1 pt-2 text-bold">{{$information->updated_at->format('d/m/Y H:i')}}</p>
                                <h5 class="font-weight-bolder">{{$information->title}}</h5>
                                <p class="mb-5">{{Str::limit($information->description, 150, '...')}}</p>
                                <a class="text-body text-sm font-weight-bold mb-0 icon-move-right mt-auto" href="{{route('sabias-que.show', $information)}}">
                                    Aprender más
                                    <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                                </a>
                                </div>
                            </div>
                            <div class="col-lg-5 ms-auto text-center mt-5 mt-lg-0">
                                <div class="bg-gradient-primary border-radius-lg h-100">
                                <div class="position-relative d-flex align-items-center justify-content-center h-100">
                                    <img class="w-100 position-relative z-index-2 border-radius-lg" src="{{asset("storage/images/$information->photo")}}" alt="rocket">
                                    {{-- ../assets/img/curved-images/field-farm.jpg --}}
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
      </div>
    </div>
  </div>
@endsection

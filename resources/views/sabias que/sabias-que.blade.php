@extends('layouts.user_type.auth')

@section('content')

  <div>
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="row">
                        <div class="col-lg-12 col-12">
                          <h5>
                            <i class="fas fa-question me-2" aria-hidden="true"></i>
                            ¿Sabías Que?
                          </h5>
                        </div>
                    </div>
                </div>
                @foreach ($informations as $information)
                    <div class="card-body px-0 pt-0 pb-2">
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
                                        </div>
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


@extends('layouts.user_type.auth')

@section('title')
    <title>
        WePlant | {{Str::limit($information->title, 15, '...')}}
    </title>
@endsection

@section('page-title')
    Mi Cultivo / {{Str::limit($information->title, 150, '...')}}
@endsection

@section('content')

<div>
    <div class="container-fluid">
        <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url({{asset("storage/images/$information->photo")}}); background-position-y: 50%;">
            <span class="mask bg-gradient-primary opacity-6"></span>
        </div>
        <div class="card card-body blur shadow-blur mx-4 mt-n6">
            <div class="row gx-4">
                <div class="col-auto my-auto">
                    <div class="h-100">
                        <h5 class="mb-1">
                            {{$information->title}}
                        </h5>
                        <p class="mb-0 font-weight-bold text-sm article-font">
                            {{$information->updated_at->format('d/m/Y H:i')}} | WePlant
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-body pt-4 p-3 article-font">
                {{$information->description}}
            </div>
        </div>
    </div>
</div>
@endsection

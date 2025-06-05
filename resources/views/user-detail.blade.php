@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1 class="h2 mb-0">Detalhes do Usuário</h1>
                @include('users.back-button')
            </div>

            <div class="card shadow-sm">
                <div class="card-body p-4">
                    @include('users.avatar', ['user' => $user])
                    @include('users.heading', ['user' => $user])
                    @include('users.details', ['user' => $user])
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

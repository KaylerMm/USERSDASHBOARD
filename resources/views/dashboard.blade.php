@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1 class="mb-4">
        <i class="bi bi-person-lines-fill me-1"></i>
        Lista de Usuários
    </h1>

    @include('users.reload-button')

    @include('users.filters', [
        'search' => $search,
        'countries' => $countries,
        'selectedCountry' => $selectedCountry
    ])

    @include('users.list', ['users' => $users])
</div>
@endsection

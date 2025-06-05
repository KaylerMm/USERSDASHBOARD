<form method="GET" class="row mb-4">
    <div class="col-md-6">
        <input type="text" name="search" value="{{ $search }}" class="form-control" placeholder="Buscar por nome ou e-mail">
    </div>
    <div class="col-md-4">
        <select name="country" class="form-select">
            <option value="">Filtrar por país</option>
            @foreach($countries as $country)
                <option value="{{ $country }}" {{ $selectedCountry == $country ? 'selected' : '' }}>{{ $country }}</option>
            @endforeach
        </select>
    </div>
    <div class="col-md-2 d-flex gap-2">
        <button class="btn btn-primary flex-fill" type="submit">
            <i class="bi bi-funnel-fill me-1"></i> Filtrar
        </button>
        <a href="{{ route('dashboard') }}" class="btn btn-secondary flex-fill">
            <i class="bi bi-x-circle me-1"></i> Limpar filtros
        </a>
    </div>
</form>

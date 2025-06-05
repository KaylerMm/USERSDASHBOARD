<div class="col-md-4">
    <a href="{{ route('user.show', $index) }}" class="text-decoration-none text-dark">
        <div class="card h-100">
            <div class="card-body d-flex align-items-center">
                <img src="{{ $user['picture']['medium'] }}" class="rounded-circle me-3" alt="Foto">
                <div>
                    <h5 class="card-title mb-1">
                        {{ $user['name']['first'] }} {{ $user['name']['last'] }}
                    </h5>

                    <p class="card-text mb-0">
                        <i class="bi bi-envelope-fill me-1"></i>
                        {{ $user['email'] }}
                    </p>

                    <small>
                        <i class="bi bi-geo-alt-fill me-1"></i>
                        {{ $user['location']['city'] }}, {{ $user['location']['country'] }}
                    </small>
                </div>
            </div>
        </div>
    </a>
</div>

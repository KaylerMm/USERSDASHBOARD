<div class="row g-3">
    @forelse($users as $index => $user)
        @include('users.card', ['user' => $user, 'index' => $index])
    @empty
        <div class="col-12">
            <p><i class="bi bi-exclamation-circle me-1"></i> Nenhum usuário encontrado.</p>
        </div>
    @endforelse
</div>

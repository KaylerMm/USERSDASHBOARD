<form action="{{ route('dashboard') }}" method="POST" class="mb-3">
    @csrf
    <button class="btn btn-primary" name="reset" value="1">
        <i class="bi bi-arrow-clockwise me-1"></i> Recarregar usuários
    </button>
</form>

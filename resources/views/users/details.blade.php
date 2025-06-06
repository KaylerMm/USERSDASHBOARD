<div class="user-details">
    <div class="detail-item mb-3">
        <span class="detail-label">
            <i class="bi bi-envelope me-2"></i>Email:
        </span>
        <span class="detail-value">{{ $user['email'] }}</span>
    </div>

    <div class="detail-item mb-3">
        <span class="detail-label">
            <i class="bi bi-telephone me-2"></i>Telefone:
        </span>
        <span class="detail-value">{{ $user['phone'] }}</span>
    </div>

    <div class="detail-item mb-3">
        <span class="detail-label">
            <i class="bi bi-geo-alt me-2"></i>Endereço:
        </span>
        <span class="detail-value">
            {{ $user['location']['street']['number'] }} {{ $user['location']['street']['name'] }}, 
            {{ $user['location']['city'] }} - {{ $user['location']['state'] }}, 
            {{ $user['location']['country'] }}
        </span>
    </div>

    <div class="detail-item">
        <span class="detail-label">
            <i class="bi bi-calendar-date me-2"></i>Nascimento:
        </span>
        <span class="detail-value">
            {{ \Carbon\Carbon::parse($user['dob']['date'])->format('d/m/Y') }} 
            ({{ $user['dob']['age'] }} anos)
        </span>
    </div>

    @include('social.whatsapp-button', ['user' => $user])
    @include('social.email-button', ['user' => $user])
</div>

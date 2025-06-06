@php
    $telefone = preg_replace('/\D/', '', $user['phone']);
    $mensagem = urlencode("Olá, tudo bem? Estou entrando em contato com você!");
@endphp

<a href="https://api.whatsapp.com/send?phone={{ $telefone }}&text={{ $mensagem }}" 
   target="_blank"
   class="btn btn-success rounded-circle shadow-lg"
   id="whatsapp-button"
   title="Enviar mensagem no WhatsApp"
>
    <i class="bi bi-whatsapp fs-3"></i>
</a>

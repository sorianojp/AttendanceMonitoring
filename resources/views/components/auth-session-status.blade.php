@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'font-medium text-sm text-green-600 status-message']) }} id="status-message">
        {{ $status }}
    </div>

    <script>
        setTimeout(() => {
            const msg = document.getElementById('status-message');
            if (msg) {
                msg.style.opacity = '0';
                setTimeout(() => msg.style.display = 'none', 500);
            }
        }, 1000);
    </script>
@endif

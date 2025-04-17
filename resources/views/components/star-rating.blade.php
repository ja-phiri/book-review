<!-- Live as if you were to die tomorrow. Learn as if you were to live forever. - Mahatma Gandhi -->

@if ($rating)
    @for ($i = 1; $i <= 5; $i++)
        {{ $i <= round($rating) ? '⭐' : '☆' }}
    @endfor
@else
@endif

<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Controle de Tarefas')
<img src="https://banner2.cleanpng.com/20190206/uqu/kisspng-checkbox-check-mark-computer-icons-vector-graphics-5c5baa28dd4324.2477970615495112089063.jpg" class="logo" alt="Laravel Logo">
{{-- <img src="https://localhost:8000/img/logo.png" class="logo" alt="Laravel Logo"> --}}
{{-- <img src="https://laravel.com/img/notification-logo.png" class="logo" alt="Laravel Logo"> --}}
@else
{{ $slot }}
@endif
</a>
</td>
</tr>

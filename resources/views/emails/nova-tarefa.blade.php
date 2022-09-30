@component('mail::message')
# {{$tarefa}}

Uma nova tarefa foi criada<br>
Data de conclusão limiete: {{$data_limite_conclusao}}

@component('mail::button', ['url' => $url])
Vizualizar Tarefa
@endcomponent

Att,<br>
{{ config('app.name') }}
@endcomponent

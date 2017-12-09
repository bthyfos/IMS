@component('mail::message')
Registration Notification

Hello {{$user->name}} here is your password {{$user->password}}

@component('mail::button', ['url' =>env('url')])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

@component('mail::message')
Registration Notification

Hello {{$userName}} here is your password  {($userPassword)}}

@component('mail::button', ['url' =>env('url')])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

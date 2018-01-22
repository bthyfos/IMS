@component('mail::message')
Registration Notification

Hello {{$userName}} here are  your credentials;
                                  - Username / Email <br>{{$userEmail}}
                                  - Password        <br>{{$userPassword}}

@component('mail::button', ['url' =>'/'])
Log in
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

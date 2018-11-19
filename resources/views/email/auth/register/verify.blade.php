@component('mail:message')
    Please refer to the following link:
@component('mail::button', ['url' => route('register.verify', ['token' => $user->verify_token])])
    Verify email
    @endcomponent
    Thanks, <br>
    {{ config('app.name') }}
    @endcomponent
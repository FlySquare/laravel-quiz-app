@component('mail::message')
# Your New Password Is Here!

Your new password is: {{ $newPassword }}



Thanks,<br>
{{ config('app.name') }}
@endcomponent

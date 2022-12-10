<x-mail::message>
# Otp send

Your varifaction code is {{ $data }}.

<x-mail::button :url="'http://127.0.0.1:8000/verifyOtpPage'">
    Verify Now
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>

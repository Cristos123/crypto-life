@component('mail::message')
# Deposit Approved

Your deposit request has been approved.

@component('mail::button', ['url' => route('deposits.index')])
Go to Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

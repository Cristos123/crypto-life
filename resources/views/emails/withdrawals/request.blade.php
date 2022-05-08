@component('mail::message')
# Withdrawal Request

A user just made a Withdrawal request.

@component('mail::button', ['url' => route('admin.withdrawal.index')])
View Withdrawal
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

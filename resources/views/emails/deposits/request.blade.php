@component('mail::message')
# New Deposit Request

A user has just made a new deposit request.

@component('mail::button', ['url' => route('admin.deposits.index')])
View Deposit
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

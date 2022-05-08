@component('mail::message')
# New Investment

A user has just created an investment.

@component('mail::button', ['url' => route('admin.investment.index')])
View Investment
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

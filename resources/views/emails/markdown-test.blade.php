@component('mail::message')
# Introduction

The body of your message.
{{ $email }}
@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Merci

Thanks,<br>
{{ config('app.name') }}
@endcomponent

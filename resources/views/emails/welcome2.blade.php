@component('mail::message')
# Introduction

- first login
- second logout
- have fun



@component('mail::button', ['url' => 'https://iq-tech.net'])
Visit Website
@endcomponent

@component('mail::panel')
The body of your message.
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

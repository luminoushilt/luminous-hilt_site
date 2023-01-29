<x-mail::message>
# New Luminous Hilt Message

Subject: {{ $data['subject'] }}

Name: {{ $data['name'] }}

Email: {{ $data['email'] }}

Message: {{ $data['body'] }}

<x-mail::button :url="'http://localhost'">
Check Site
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>

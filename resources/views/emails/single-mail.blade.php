<x-mail::message>
# Introduction

{{$data['title']}}
The body of your message.

<x-mail::button :url="$data['url']">
visit laravel
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>

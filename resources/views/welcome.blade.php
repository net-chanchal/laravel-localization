<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('messages.locale') }}</title>
</head>
<body>
<p style="text-align: right">
    <a href="{{ route('switchLang', ['lang' => 'en']) }}">English</a> |
    <a href="{{ route('switchLang', ['lang' => 'bn']) }}">বাংলা</a>
</p>
<h1>{{ __('messages.welcome') }}</h1>
<p>{{ __('messages.description') }}</p>

<hr>
<h4>{{ __('settings.title') }}</h4>
<ul>
    <li><a href="#">{{ __('settings.profile') }}</a></li>
    <li><a href="#">{{ __('settings.password_change') }}</a></li>
    <li><a href="#">{{ __('settings.settings') }}</a></li>
    <li><a href="#">{{ __('settings.messenger', ['total' => '(20)']) }}</a></li>
</ul>
</body>
</html>
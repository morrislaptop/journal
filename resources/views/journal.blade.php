<!doctype html>
<html>

<head>
    <title>Journal{{ config('app.name') ? ' - ' . config('app.name') : '' }}</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <style>
        [x-cloak] { display: none !important; }
    </style>
    @livewireStyles
</head>

<body>
    <h1>Your Events</h1>
    <livewire:journal:counter />

    @livewireScripts
</body>
</html>

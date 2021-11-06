<!doctype html>
<html>

<head>
    <title>Journal{{ config('app.name') ? ' - ' . config('app.name') : '' }}</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="//unpkg.com/alpinejs" defer></script>
    <link href="https://unpkg.com/tailwindcss@^2/dist/base.min.css" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^2/dist/components.min.css" rel="stylesheet">
    <link href="https://unpkg.com/@tailwindcss/forms@^0.2/dist/forms.min.css" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^2/dist/utilities.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <style>
        [x-cloak] { display: none !important; }
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
    @livewireStyles
</head>

<body class="bg-gray-200">
    <div id="journal" v-cloak>
        <alert :message="alert.message"
               :type="alert.type"
               :auto-close="alert.autoClose"
               :confirmation-proceed="alert.confirmationProceed"
               :confirmation-cancel="alert.confirmationCancel"
               v-if="alert.type"></alert>

        <div class="container mx-auto max-w-7xl px-4 mb-5">
            <div class="flex items-center py-6 border-b border-gray-300">
                <span class="text-4xl">📽</span>

                <h4 class="text-xl mb-0 ml-2"><strong>Laravel Event Sourcing</strong> Journal{{ config('app.name') ? ' - ' . config('app.name') : '' }}</h4>

                <button x-class="bg-purple-600" class="border text-purple-600 border-purple-600 ml-auto text-white py-2 px-3 rounded" title="Auto Load Entries">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current w-4">
                        <path d="M10 3v2a5 5 0 0 0-3.54 8.54l-1.41 1.41A7 7 0 0 1 10 3zm4.95 2.05A7 7 0 0 1 10 17v-2a5 5 0 0 0 3.54-8.54l1.41-1.41zM10 20l-4-4 4-4v8zm0-12V0l4 4-4 4z"></path>
                    </svg>
                </button>
            </div>

            {{ $slot }}
        </div>
    </div>

    @livewireScripts
</body>
</html>

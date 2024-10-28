<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>
        Livewire Modal
    </title>
    <!-- Font-->
    <link rel="preconnect" href="https://fonts.bunny.net"/>
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>
    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased">
<div class="flex">
    <div class="w-2/4 mx-auto pt-10">
        <x-modal title="Modal 1" name="1">
            <x-slot:body>
                <livewire:register-form/>
            </x-slot>
        </x-modal>
        <button x-data @click="$dispatch('open-modal', {name: '1'})" class="px-3 py-1 bg-teal-500 text-white rounded">
            Modal 1
        </button>
        <x-modal title="Modal 2" name="2">
            <x-slot:body>
                <span class="p-5">
                    Modal 2
                </span>
            </x-slot>
        </x-modal>
        <button x-data @click="$dispatch('open-modal', {name: '2'})" class="px-3 py-1 bg-blue-500 text-white rounded">
            Modal 2
        </button>
    </div>
</div>
<livewire:users-list/>
</body>
</html>

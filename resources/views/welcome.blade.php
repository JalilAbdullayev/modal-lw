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
<body class="p-5">
<x-modal title="Modal 1" name="modal1">
    <x-slot:body>
        <span class="p-5">
            Modal
        </span>
    </x-slot>
</x-modal>
<x-modal title="Modal 2" name="modal2">
    <x-slot:body>
        <span class="p-5">
            Another modal
        </span>
    </x-slot>
</x-modal>
<button x-data x-on:click="$dispatch('open-modal', {name: 'modal1'})" class="px-3 py-1 bg-teal-500 text-white rounded">
    Open Modal 1
</button>
<button x-data x-on:click="$dispatch('open-modal', {name: 'modal2'})" class="px-3 py-1 bg-teal-500 text-white rounded">
    Open Modal 2
</button>
</body>
</html>

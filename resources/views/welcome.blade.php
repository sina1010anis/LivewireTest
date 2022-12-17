<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <script src="{{ asset('js/app.js') }}" defer></script>
        @livewireStyles
    </head>
    <body class="antialiased">
        <div id="app">
            <p>@{{version}}</p>
            <components-test>
                <template #test>
                    <livewire:front.header />
                </template>
            </components-test>
            @php
                $data = ['name' => 'sina' , 'family'=> 'nayebzade']
            @endphp
            <livewire:test-component :data="$data" />

            @livewireScripts
        </div>
    </body>
</html>

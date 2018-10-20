<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
    <link rel="apple-touch-icon" sizes="180x180" href="/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/icons/favicon-16x16.png">
    <link rel="manifest" href="/icons/site.webmanifest">
    <link rel="mask-icon" href="/icons/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="/icons/favicon.ico">
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="msapplication-config" content="/icons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <style type="text/css">
        body {
            font-family: "Manrope";
        }
    </style>
</head>

<body>
    <div id="app" class="h-screen">
        <nav class="bg-blue-darker py-3 mb-10">
            <ul class="list-reset flex justify-around">
                <li class="text-white font-bold">Search</li>
                <li class="text-white">List</li>
            </ul>
        </nav>

        <div class="flex justify-center font-thin tracking-wide text-xl mb-6">
            Chemical shifts of common impurities on NMR
        </div>

        <div class="flex justify-center">
            <div class="flex-col">
                <div id="nucleus" class="flex justify-center mb-3">
                    <select-nucleus @nucleus-selected="setNucleus"></select-nucleus>
                </div>

                <div id="solvent" class="flex justify-center mb-4">
                    <select-solvent @solvent-selected="setSolvent"></select-solvent>
                </div>

                <form @submit.prevent="searchShift" autocomplete="off">
                    <div class="flex justify-center mb-6">
                        <div class="w-screen flex justify-center">
                            <input v-model="shift" id="search" name="shift" class="mt-4 text-grey-darkest text-lg font-thin border h-12 shadow hover:shadow-md w-4/5 sm:w-1/3 px-4 py-2 mr-3 text-center" type="text" placeholder='Search for chemical shift ("2.01")' required autofocus>
                        </div>
                    </div>

                    <div class="flex justify-center">
                        <div class="w-screen flex justify-center">
                            <button class="bg-grey-lighter border border-white text-grey-dark hover:border-grey hover:text-grey-darkest px-4 py-2 rounded text">Search</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>

    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <style type="text/css">
        #search:focus {
            outline: none;
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
                    <button class="border border-blue bg-blue text-white px-2 py-1 mr-2" href="">
                        <sup>1</sup>H
                    </button>
                    <button class="border border-blue px-2 py-1 hover:bg-blue text-blue hover:text-white" href="">
                        <sup>13</sup>C
                    </button>
                </div>

                <div id="solvent" class="flex justify-center mb-4">
                    <button class="border border-blue bg-blue-dark text-white px-2 py-1 mr-2" href="">
                        Chloroform-d
                    </button>
                    <button class="border border-blue-dark text-blue-dark px-2 py-1 hover:bg-blue-dark hover:text-white mr-2" href="">
                        DMSO-d6
                    </button>
                    <button class="border border-blue-dark text-blue-dark px-2 py-1 hover:bg-blue-dark hover:text-white" href="">
                        MeOD
                    </button>
                </div>
                <form autocomplete="off">
                <div class="flex justify-center mb-6">
                    <div class="w-screen flex justify-center">
                        <input id="search" class="mt-4 text-grey-darkest text-lg font-thin border h-12 shadow hover:shadow-md w-4/5 sm:w-1/3 px-4 py-2 mr-3 text-center" type="text" placeholder='Search for chemical shift ("2.01")' autofocus>
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

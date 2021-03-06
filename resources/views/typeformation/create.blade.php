<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Creer un type de formation') }}
        </h2>
    </x-slot>

    <!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Formations!</title>
       
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>

        <!-- Main -->
        <main class="container">

       
            <form action="{{ route('typeformation.store') }}" method="post"  class="mt-10" >

                @csrf
                <div class=" shadow-md rounded px-8 pt-6 pb-8 mb-4 " >
                 
                <h1 class="text-center">Formulaire ajout type Formation</h1>

                    <div class="mb-4" style="margin: 50px;">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="nom">
                            <h5>Nom du Type</h5>
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight " id="nom" type="text" name="nom" placeholder="nom du type de formation">
                    </div>
                    <div class="mb-4" style="margin: 50px;">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="description">
                            <h5>Description</h5>
                        </label>
                        <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight " id="description" type="text" name="description" placeholder="description du type de formation"></textarea>
                    </div>
                   
                        <x-button style="display: block !important;">Creer un Type formation</x-button> 
                    </div>    
                </form>
            </main>
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
            integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
            integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
        </script>
        <script src="./formations/js/script.js"></script>
    </body>

    </html>

</x-app-layout>
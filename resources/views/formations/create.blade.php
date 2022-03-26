<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Creer une Formation') }}
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

            <div class="my-5">

                @foreach($errors->all() as $error)
                    
                    <span class="block text-red-500">{{ $error }}</span>

                @endforeach
            </div>
            
            <form action="{{ route('formations.store') }}" method="post" enctype="multipart/form-data" class="mt-10" >

                @csrf
                <div class=" shadow-md rounded px-8 pt-6 pb-8 mb-4 " >
                 
                <h1 class="text-center">Formulaire d'ajout de Formation</h1>

                    <div class="mb-4" style="margin: 50px;">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                            <h5>Nom Formation</h5>
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight " id="nom" type="text" name="nom_formation" placeholder="nom de la formation">
                    </div>
                    <div class="mb-4" style="margin: 50px;">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="description">
                                <h5>Description</h5>
                            </label>
                            <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="description" type="text" placeholder="description de la formation" name="description"></textarea>
                        </div>
                        
                       
                        <div class="mb-4" style="margin: 50px;">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="description">
                                <h5>Date Debut</h5>
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="date_debut" id="description" type="date" placeholder="description de la formation" name="description"></input>
                        </div>
                        <div class="mb-4" style="margin: 50px;">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="description">
                                <h5>Date Fin</h5>
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="date_fin" id="description" type="date" placeholder="description de la formation" name="description"></input>
                        </div>

                        <div class="mb-4"style="margin: 50px;">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="image">
                                <h5>Télecharger une Image</h5>
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight  e" id="image" name="image" type="file" placeholder="image de la formation">
                        </div>
                        <div class="mb-4" style="margin: 50px;">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="category">
                              <h5> Categories de la Formation</h5> 
                            </label>
                            <select name="category" id="category">
                                @foreach ($categories as $category)

                                    <option value="{{ $category->id }}">{{ $category->nom_categorie }}</option>

                                @endforeach
                            </select>
                        </div>
                       
                        <x-button style="display: block !important;">Creer une Formation</x-button> 
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

     
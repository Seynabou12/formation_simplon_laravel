<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formations!</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- header -->
    <header>
        <nav class="navbar navbar-expand-lg  fw-bold">
            <div class="container">
                <a class="navbar-brand" href="#" title="Logo Simplon">
                    <img src="{{ asset('img/simplonSN.png') }}" alt="Logo Simplon" width="150" class=" d-inline-block align-text-top">
                </a>
                <button class="navbar-toggler border  border-2 border-black" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <!-- <span class="navbar-toggler-icon sp-red"></span> -->
                    <i class="bi bi-menu-app-fill text-danger"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item mx-2">
                            <a class="nav-link " aria-current="page" href="#row-secondary">Accueil</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="#">Fabrique</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link active" href="">Formations</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link " href="">Partenariat</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link " href="">Espaces</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link " href="">Entites</a>
                        </li>
                    </ul>
                    <form class="d-flex flex-column flex-lg-row align-items-lg-center">
                        <label for="search" class="align-items-center d-flex justify-content-center mt-lg-0 mt-3 order-1 order-lg-0 rounded rounded-pill">
                            <input class="border-0 mw-100" id="search" type="search" placeholder="Search" aria-label="Search" name="search">
                            <i class="bi bi-search " aria-hidden="true"></i>
                        </label>
                        <div class="dropdown mx-sm-0 mx-sm-1 nav-item ">
                            <!-- <a class="nav-link dropdown-toggle text-black" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                EN
                            </a> -->
                            <a class="nav-link d-flex sp-dropdown-toggle text-black" href="#">
                                EN
                                <i class=" bi bi-caret-down-fill text-danger"></i>
                            </a>
                            <ul class="dropdown-menu mw-5 " aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item sp-hover-red" href="#">EN</a>
                                </li>
                                <li>
                                    <a class="dropdown-item sp-hover-red" href="#">FR</a>
                                </li>
                            </ul>
                        </div>
                        <a href="" class="sm px-3 py-2 sp-rounded-link  sp-btn-danger">Contact</a>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <!-- End header -->
    <!-- Main -->
    <main class="container-fluid ">
        <figure>
            <img src="{{ asset('img/formationsproBestResolution.jpg') }}" alt="Banner" class="img-fluid">
            <figcaption class="position-absolute">Formations</figcaption>
        </figure>
        <!-- barre de recherche -->
        <div class="row justify-content-center">
            <div class="col-sm-8 col-md-6">
                <div class="input-group my-3">
                    <input type="text" class="form-control sp-input-shadow" placeholder="Rechercher une formation" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <span class="input-group-text sp-btn-danger" id="basic-addon2"><i class="bi bi-search   text-black" aria-hidden="true"></i></span>
                </div>
            </div>
        </div>
        <!-- End search bar -->
        <!-- public Section  -->
        <section class="row mb-3 justify-content-center row-secondary public-section">
            <div class="col-12">
                <div class="col-10 offset-1">
                    <!-- Public title -->
                    <h2 class=" fw-bold text-uppercase sp-red sp-line-under mb-2">Par Public </h2>
                    <p class="my-5 text-justify">
                        Physical space is often conceived in three linear dimensions, although modern physicists
                        usually
                        consider it, with time, to be part of a boundless four-dimensional continuum known as
                        spacetime.
                        The concept of space is considered to be of fundamental importance to an understanding of
                        the
                        physical Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, nostrum optio id
                        iusto
                        doloribus suscipit similique incidunt minima molestiae alias tempora beatae. Eaque, ducimus
                        maiores?
                        Corporis nostrum fugit alias eum exercitationem tempore ab sapiente temporibus modi quae
                        tempora
                        laudantium deserunt asperiores aliquid ratione dolorum placeat omnis hic enim aperiam
                        ducimus,
                        labore aliquam. Vitae, adipisci ea accusamus esse molestias quae tenetur asperiores
                        aspernatur
                        laborum aperiam molestiae vero quod praesentium fuga dolore deserunt facere libero. Sunt
                        earum
                        debitis
                        corporis nihil magni, maiores quasi natus! Deleniti cum perferendis placeat vel corporis
                        dolor
                        quod
                        reiciendis ad ullam? Minus architecto officia animi quod quo sit.
                    </p>
                    <div class="row align-items-center display-block">
                        <!-- menu -->
                        <div class="d-none d-md-inline-block col-md-2 col-sm-12 p-0 text-center col-md">
                            <div class="left-bloc my-4 d-flex align-items-center  align-items-sm-start ">
                                <div class="vertical-bar"></div>
                                <div class="menu flex-column menu-public">
                                    @foreach($formations as $formation)
                                    <p class="align-items-center d-flex my-4 p-1 pe-md-3 rounded-pill rounded-start shadow-sm">
                                        <span class="d-flex align-items-center">
                                            <object type="image/svg+xml" data="{{ asset('img/SVG/IconDiscoverBlanc.svg') }}" title="icon"></object>
                                        </span>
                                        {{ $formation->category->nom_categorie}}
                                    </p>

                                    @endforeach
                                </div>

                            </div>
                        </div>
                        <!-- card formation -->
                        <div class="col-md-10  col-sm-12">
                            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 ">

                                @foreach($formations as $formation)

                                <div class="my-3 justify-content-center ">
                                    <div class="card shadow-sm h-100 text-center sp-rounded-top-15 sp-rounded-bottom-15">

                                        <img src="/storage/{{ $formation->image}}" alt="">

                                        <div class="card-body sp-rounded-bottom-15">
                                            <h5 class="card-title center text-uppercase fw-bold sp-red sp-text-sm">
                                                {{ $formation->nom_formation }}
                                            </h5>
                                            <p class="card-text">

                                                {{ Str::limit($formation->description, 100  )}}
                                            </p>
                                            <a href="{{ route('formations.show', $formation) }}" class=" d-inline-block my-2  sp-text-sm  px-3 py-1 sp-rounded-link  sp-btn-danger ">En
                                                savoir plus</a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class=" col-12 px-0 text-end alert">
                                <a href="" class="text-decoration-underline alert-dark  alert-link bg-white">Afficher
                                    tout
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- End public Section  -->
        <!-- Section parcours -->
        <section class="row mb-3 justify-content-center row-secondary parcours-section">
            <div class="col-12 px-0">
                <div class="col-10 offset-1">
                    <!-- Parcours title -->
                    <h2 class=" fw-bold text-uppercase sp-red sp-line-under mb-2">Par Parcours </h2>
                    <p class="my-5 text-justify">
                        Physical space is often conceived in three linear dimensions, although modern physicists
                        usually
                        consider it, with time, to be part of a boundless four-dimensional continuum known as
                        spacetime.

                    </p>
                    <div class="row align-items-center p-relative">
                        <!-- menu secondaire -->

                        <!-- <div class="menu secondary-menu position-fixed d-md-none secondary-menu-parcours">
                                <p class="active align-items-center d-flex p-1 pe-md-3 rounded-pill rounded-start shadow-sm">
                                    <span class="d-flex align-items-center">
                                        <object type="image/svg+xml" data="{{ asset('img/SVG/IconDiscoverBlanc.svg') }}"
                                            title="icon"></object>
                                    </span>
                                    decouverte
                                </p>
                                <p class="align-items-center d-flex p-1 pe-md-3 rounded-pill rounded-start shadow-sm">
                                    <span class="d-flex align-items-center">
                                        <object type="image/svg+xml"
                                            data="{{ asset('img/SVG/father-svgrepo-com.svg') }}" title="icon"></object>
                                    </span>
                                    Initiation
                                </p>
                                <p class="align-items-center d-flex p-1 pe-md-3 rounded-pill rounded-start shadow-sm">
                                    <span class="d-flex align-items-center">
                                        <object type="image/svg+xml"
                                            data="{{ asset('img/SVG/IconOrienteMetierBlanc.svg') }}"
                                            title="icon"></object>
                                    </span>
                                    metier
                                </p>
                            </div> -->

                        <!-- menu -->

                        <div class="d-none d-md-inline-block col-md-2 col-sm-12 p-0 text-center">
                            <div class="left-bloc my-4 d-flex align-items-center  align-items-sm-start  ">
                                <div class="vertical-bar">
                                </div>
                                <div class="menu flex-column menu-parcours">
                                    @foreach($formations as $formation)

                                    <p class="active align-items-center d-flex my-4 p-1 pe-md-3 rounded-pill rounded-start shadow-sm">
                                        <span class="d-flex align-items-center">
                                            <object type="image/svg+xml" data="{{ asset('img/SVG/IconDiscoverBlanc.svg') }}" title="icon">
                                            </object>
                                        </span>
                                        {{ $formation->category->nom_categorie}}
                                    </p>
                                    @endforeach

                                </div>
                            </div>

                        </div>

                        <!-- card formation -->

                        <div class="col-md-10  col-sm-12">
                            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3">
                                @foreach($formations as $formation)
                                <div class="my-3 justify-content-center ">
                                    <div class="card shadow-sm h-100 text-center sp-rounded-top-15 sp-rounded-bottom-15">

                                        <img src="/storage/{{ $formation->image}}" alt="">
                                        <div class="card-body sp-rounded-bottom-15">
                                            <h5 class="card-title center text-uppercase fw-bold sp-red sp-text-sm">
                                                {{ $formation->nom_formation }}
                                            </h5>
                                            <p class="card-text">

                                                {{ Str::limit($formation->description, 100)}}
                                            </p>
                                            <a href="#" class=" d-inline-block my-2  sp-text-sm  px-3 py-1 sp-rounded-link  sp-btn-danger ">En
                                                savoir plus</a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class=" col-12 px-0 text-end alert">
                                <a href="" class="text-decoration-underline alert-dark  alert-link bg-white">Afficher
                                    tout
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--  Partenariat Section-->
        <section class=" partenariat row  justify-content-center">
            <!-- Parcours title -->
            <div class="col-12 px-0 me-0">
                <div class="col-10 offset-1">
                    <h2 class=" fw-bold text-uppercase sp-red sp-line-under mb-2">En Partenariat </h2>
                    <p class="my-5 text-justify">
                        Physical space is often conceived in three linear dimensions, although modern physicists
                        usually
                        consider it, with time, to be part of a boundless four-dimensional continuum known as
                        spacetime.
                        The concept of space is considered to be of fundamental importance to an understanding of
                        the
                        physical Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, nostrum optio id
                        iusto
                        doloribus suscipit similique incidunt minima molestiae alias tempora beatae. Eaque, ducimus
                        maiores?
                        Corporis nostrum fugit alias eum exercitationem tempore ab sapiente temporibus modi quae
                        tempora
                        laudantium deserunt asperiores aliquid ratione dolorum placeat omnis hic enim aperiam
                        ducimus,
                        labore aliquam. Vitae, adipisci ea accusam..
                    </p>
                    <div class="row me row-cols-1 row-cols-sm-2 row-cols-md-3 ">
                        @foreach($formations as $formation)
                        <div class="my-3  justify-content-center ">

                            <div class="card shadow-sm h-100 text-center sp-rounded-top-15 sp-rounded-bottom-15">
                                <div class="card-header sp-bg-red  sp-rounded-top-15">
                                    <p class=" text-uppercase fw-bold text-white sp-text-sm">
                                        {{ $formation->nom_formation }}
                                    </p>
                                    <img class="dropdown-icon" src="{{ asset('img/SVG/dropdown-svgrepo-com.svg') }}" width="30" height="30" alt="dropdown icon">
                                </div>
                                <div class="card-body sp-rounded-bottom-15">
                                    <img class="logo-partenaire my-3 img-fluid" src="{{ asset('img/miscrosoftLogo.png') }}" width="150" alt="logo microsoft">
                                    <p class="card-text">
                                        {{ $formation->description }}
                                    </p>
                                    <a href="#" class=" d-inline-block my-2  sp-text-sm  px-3 py-1 sp-rounded-link  sp-btn-danger ">Decouvrir
                                        la formation</a>
                                </div>
                            </div>

                        </div>
                        @endforeach
                    </div>
                    <div class=" col-12 px-0 text-end alert">
                        <a href="" class="text-decoration-underline alert-dark  alert-link bg-white">Afficher tout
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!--  End Partenariat Section-->
    </main>
    <!-- End Main -->
    <!-- Section footer -->
    @include('partials.footer')
    <!-- End Section footer -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    <script src="./formations/js/script.js"></script>
</body>

</html>
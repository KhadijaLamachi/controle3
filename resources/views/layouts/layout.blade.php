<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<style>
    .social-icons {
 list-style: none;
 padding: 0;
 margin-top: 20px;
}

.social-icons li {
 display: inline-block;
 margin-right: 10px;

}
.nav-link{
    margin-right: 20px;
    color:#2F7693;
    font-weight: 550;
}
.nav-link:hover{
    color:#4B94A4;
}
.btnB{
    background-color: #067790;
    color: #fff;
}
.btnB:hover{
    background-color: #45b3cc;
    color: #fff;
}

</style>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="">Acceuil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('cars.index')}}">oneToOne</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('auteurs.index')}}">OneToMany</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('formateurs')}}">ManyToMany</a>
                        </li>
                        
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                class="btn btn-danger"
                                onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                {{ __('Déconnexion') }}
                            </x-dropdown-link>
                        </form>
                        <!-- @auth
                            <li class="nav-item">
                                <form id="logoutForm" action="" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btnB">Déconnexion</button>
                                </form>
                            </li>
                        @endauth

                        @guest
                            <li class="nav-item">
                                <a class="btn btnB" href="">Se connecter</a>
                            </li>
                        @endguest -->


                        

                    </ul>
                </div>
            </div>
        </nav>
    </header>
    @yield('content')
    <footer class="bg-light text-dark text-center py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6" style="list-decoration:none">
                    <h5>Follow Us</h5>
                    <ul class="social-icons">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h5>Contact Us</h5>
                    <p>Email: info@eventmanagement.com</p>
                    <p>Phone: +1-234-567-890</p>
                </div>
            </div>
        </div>
        <p>&copy; 2024 Event Management. All rights reserved.</p>
    </footer>
     <!-- Bootstrap JS -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .navbar-nav {
            display: flex;
            justify-content: center;
        }
        .navbar {
            background-color: #28a745;
        }
        .navbar-brand {
            color: white;
        }
        .nav-link {
            color: white;
        }
    </style>
    <title>Your Laravel App</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                Edwin
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link <?= ($active === "home") ? 'active' : '' ?>" href="/">
                            Home
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link <?= ($active === "posts") ? 'active' : '' ?>" href="/posts">
                            Article
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ($active === "categories") ? 'active' : '' ?>" href="/categories">
                            Categories
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <?php
                    if (auth()->check()) :
                    ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Hello, {{ auth()->user()->name  }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/dashboard"><i
                                        class="bi bi-layout-text-sidebar-reverse"></i>My Dashboard</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <form action="/logout" method="post">
                                    {{ csrf_field() }}
                                    <button type="submit" class="dropdown-item">
                                        <i class="bi bi-box-arrow-right"></i>Logout
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </li>
                    @else
                    <li class="nav-item">
                        <a href="/login" class="nav-link <?= ($active === "login") ? 'active' : '' ?>">
                            <i class="bi bi-box-arrow-in-right"></i>Login
                        </a>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>
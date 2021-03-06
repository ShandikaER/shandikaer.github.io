<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shop Homepage - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="<?= base_url('assets/homepage')?>/assets/deficon.jpg" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?= base_url('assets/homepage')?>/css/styles.css" rel="stylesheet" />
    </head>
    <body>
        
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="<?= base_url('')?>">MS GLOW</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                        <li class="nav-item dropdown col-1">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="<?= base_url('/dashboard/all_product') ?>">All Products</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="<?= base_url('/kategori/whitening') ?>">Whitening Series</a></li>
                                <li><a class="dropdown-item" href="<?= base_url('/kategori/luminous') ?>">Luminous Series</a></li>
                                <li><a class="dropdown-item" href="<?= base_url('/kategori/ultimate') ?>">Ultimate Series</a></li>
                                <li><a class="dropdown-item" href="<?= base_url('/kategori/acne') ?>">Acne Series</a></li>
                                <li><a class="dropdown-item" href="#!">White Cell DNA Series</a></li>
                                <li><a class="dropdown-item" href="#!">Additional</a></li>
                            </ul>
                            <!-- <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#!">All Products</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="#!">Whitening Series</a></li>
                                <li><a class="dropdown-item" href="#!">Luminous Series</a></li>
                                <li><a class="dropdown-item" href="#!">Ultimate Series</a></li>
                                <li><a class="dropdown-item" href="#!">Acne Series</a></li>
                                <li><a class="dropdown-item" href="#!">White Cell DNA Series</a></li>
                                <li><a class="dropdown-item" href="#!">Additional</a></li>
                            </ul> -->
                        </li>
                    </ul>
                    <form class="d-flex">
                        <button class="btn btn-outline-dark" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Cart
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                        </button>
                    </form>
                    <form class="" style="margin-left: 15px;">
                        <button class="btn btn-outline-dark" type="submit">
                            LOGIN
                        </button>
                    </form>
                </div>
            </div>
        </nav>
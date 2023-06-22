<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>MR-X</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <link href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css')}}" rel="stylesheet" />
        <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" />
        <link href="{{asset('css/style.css')}}" rel="stylesheet" />
    </head>

    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">

            <!-- Navigation-->
            <nav class="navbar shadow-sm sticky-top navbar-expand-lg navbar-light bg-white py-3">
                <div class="container px-5">
                    <a class="navbar-brand" href="index.html"><span class="fw-bolder text-primary">MR-X</span></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                            <li class="nav-item"><a class="nav-link" href="{{ route('home.page') }}">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('resume.page') }}">Resume</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('project.page') }}">Projects</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('contact.page') }}">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pornoSmishkami</title>

    <link href="../css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="https://i.ebayimg.com/00/s/MTAwMVg3ODc=/z/b7QAAOSwhwlb9LY4/$_57.JPG?set_id=8800005007" alt="Bootstrap" width="30" height="24">
        </a>
        <a class="navbar-brand" href="{{route('show', $user)}}">Мишка Фредди</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Переключатель навигации">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link" href="">Мероприятия</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="report.html">Отчеты</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="create_report.html">Создать отчет</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('group', $user)}}">Группа</a>
                </li>

            </ul>
            <button class="btn btn-outline-success" type="submit">Выйти</button>
        </div>
    </div>
</nav>
    @yield('content')

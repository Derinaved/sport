<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>

</head>

<body>
<section class="background-radial-gradient overflow-hidden">

    <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
        <div class="row gx-lg-5 align-items-center mb-5">

            <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
                <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

                <div class="card bg-glass">
                    <div class="card-body px-4 py-5 px-md-5">
                        <form action="{{ route('store')}}" method="post">
                            @csrf
                            <div class="col-md-6 mb-4">
                                <div data-mdb-input-init class="form-outline mb-4">
                                    <input type="text" id="form3Example2" name="name" class="form-control" placeholder="Имя" />
                                </div>
                            </div>

                            <!-- Email input -->
                            <div data-mdb-input-init class="form-outline mb-4">
                                <input type="email" id="form3Example3" name="email" class="form-control" placeholder="Email"/>
                            </div>
                            <div data-mdb-input-init class="form-outline mb-4">
                                <input type="text" id="form3Example3" name="item" class="form-control" placeholder="Предмет"/>
                            </div>

                            <!-- Password input -->
                            <div data-mdb-input-init class="form-outline mb-4">
                                <input type="password" id="form3Example4" name="password" class="form-control"  placeholder="Пароль"/>
                            </div>

                            <div data-mdb-input-init class="form-outline mb-4">
                                <input type="password-2" id="form3Example4" name="secondPassword" class="form-control"  placeholder="Подтверждение"/>
                            </div>


                            <div class="text-center">
                                <!-- Submit button -->
                                <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">
                                    Регистрация
                                </button>
                            </div>
                            <!-- Register buttons -->
                            <div class="text-center">
                                <a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover"
                                   style="color: black; "
                                   href="{{route('index')}}">
                                    Войти в учетную запись
                                </a>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>

</html>

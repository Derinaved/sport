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
    <div class="container-fluid">
      <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
        <div class="row gx-lg-5 align-items-center mb-5">
          <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
            <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
              Очень крутой текст  <br />
              <span style="color: hsl(218, 81%, 75%)">еще больше крутого текста</span>
            </h1>
            <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit.
              Temporibus, expedita iusto veniam atque, magni tempora mollitia
              dolorum consequatur nulla, neque debitis eos reprehenderit quasi
              ab ipsum nisi dolorem modi. Quos?
            </p>
          </div>

          <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
            <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
            <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

            <div class="card bg-glass">
              <div class="card-body px-4 py-5 px-md-5">
                <form action="{{route('logins')}}" method="get">
                  <div class="row">
                  <!-- Email input -->
                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="email" name="email" id="form3Example3" class="form-control" placeholder="Email"/>
                  </div>

                  <!-- Password input -->
                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="password" name="password" id="form3Example4" class="form-control"  placeholder="Пароль"/>
                  </div>

                  <div class="text-center">
                  <!-- Submit button -->
                    <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">
                      Войти

                    </button>
                      <a href="{{route(('create'))}}" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">
                          Зарегестрироваться
                      </a>
                  </div>

                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>

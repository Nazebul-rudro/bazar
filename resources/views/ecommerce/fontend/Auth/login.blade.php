
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Login</title>
  </head>
  <body>


    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-3 py-5">
                <form action="{{ route('login.user') }}" method="POST">
                    @csrf
                    <h2 class="text-warning text-center py-3">Login Form</h2>
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                      <input type="email" id="form2Example1" class="form-control" name="email" />
                      <label class="form-label" for="form2Example1">Email address</label>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                      <input type="password" id="form2Example2" class="form-control" name="password" />
                      <label class="form-label" for="form2Example2">Password</label>
                    </div>

                    <!-- 2 column grid layout for inline styling -->
                    <div class="row mb-4">
                      <div class="col d-flex justify-content-center">
                        <!-- Checkbox -->
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                          <label class="form-check-label" for="form2Example31"> Remember me </label>
                        </div>
                      </div>
                      <input type="submit" value="Sign In" class="btn btn-primary btn-block mb-4">

                      <div class="col">
                        <!-- Simple link -->
                        <a href="#!">Forgot password?</a>
                      </div>
                    </div>

                    <!-- Submit button -->
                    {{-- <button type="button" >Sign in</button> --}}


                    <!-- Register buttons -->
                    <div class="text-center">
                      <p>Not a member? <a href="{{ route('register') }}">Register</a></p>
                      <p>or sign up with:</p>
                      <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-facebook-f"></i>
                      </button>

                      <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-google"></i>
                      </button>

                      <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-twitter"></i>
                      </button>

                      <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-github"></i>
                      </button>
                    </div>
                  </form>
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>

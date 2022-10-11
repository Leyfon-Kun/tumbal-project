<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>

<body>

    <div class="container card " style="width: 23rem;">
        <main class="form-signin w-100 m-auto">
            <form method="POST" action="/login">
                @csrf
                <div class="form-floating">
                    <label for="floatingInput">Name:</label>
                    <input type="name" class="form-control" value="{{ old('username') }}" name="name"
                        id="floatingInput" placeholder="Username">
                </div>
                <div class="form-floating">
                    <label for="floatingPassword">Password:</label>
                    <input type="password" class="form-control" name="password" id="floatingPassword"
                        placeholder="Password">
                </div>
                <br>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
            </form>
        </main>
    </div>

</body>

</html>
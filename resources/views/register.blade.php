<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- link css  -->
    <link rel="stylesheet" href="style/login-theme.css">

    <!-- icons  -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

    <title>Register</title>
</head>
<body>
    <div class="flex-r container">
        <div class="flex-r login-wrapper">
            <div class="login-text">
                <h1>Register</h1>

                <form class="flex-c" method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="input-box">
                        <span class="label">Name</span>
                        <div class="flex-r input">
                            <input type="text" name="name" placeholder="Your Name" required>
                            <i class="fas fa-user"></i>
                        </div>
                    </div>
                    <div class="input-box">
                        <span class="label">Nomor Identitas</span>
                        <div class="flex-r input">
                            <input type="text" name="nomor_identitas" placeholder="Nomor Identitas" required>
                            <i class="fas fa-id-card"></i>
                        </div>
                    </div>
                    <div class="input-box">
                        <span class="label">E-mail</span>
                        <div class="flex-r input">
                            <input type="email" name="email" placeholder="name@abc.com" required>
                            <i class="fas fa-at"></i>
                        </div>
                    </div>
                    <div class="input-box">
                        <span class="label">Password</span>
                        <div class="flex-r input">
                            <input type="password" name="password" placeholder="8+ (a, A, 1, #)" required>
                            <i class="fas fa-lock"></i>
                        </div>
                    </div>
                    <div class="input-box">
                        <span class="label">Konfirmasi Password</span>
                        <div class="flex-r input">
                            <input type="password" name="password_confirmation" placeholder="8+ (a, A, 1, #)" required>
                            <i class="fas fa-lock"></i>
                        </div>
                    </div>

                    <input class="btn" type="submit" value="Create an Account">
                    <span class="extra-line">
                        <span>Sudah mempunyai akun?</span>
                        <a href="/login">Login</a>
                    </span>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

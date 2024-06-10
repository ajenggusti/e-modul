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

    <title>Login</title>
</head>

<body>
    <div class=" flex-r container">
        <div class="flex-r login-wrapper">
            <div class="login-text">
                <div class="logo">
                    <img src="{{ asset('img/logo.jpg') }}" alt="">
                    <p>E-MODUL</p>
                </div>
                <h1>Register</h1>

                <form class="flex-c">
                    <div class="input-box">
                        <span class="label">E-mail</span>
                        <div class=" flex-r input">
                            <input type="text" placeholder="name@abc.com">
                            <i class="fas fa-at"></i>
                        </div>
                    </div>
                    
                    <div class="input-box">
                        <span class="label">Password</span>
                        <div class="flex-r input">
                            <input type="password" placeholder="8+ (a, A, 1, #)">
                            <i class="fas fa-lock"></i>
                        </div>
                    </div>
                    <div class="input-box">
                        <span class="label">Konfirmasi Password</span>
                        <div class="flex-r input">
                            <input type="konfirm" placeholder="8+ (a, A, 1, #)">
                            <i class="fas fa-lock"></i>
                        </div>
                    </div>

                    <input class="btn" type="submit" value="Create an Account">
                    <span class="extra-line">
                        <span>Already have an account?</span>
                        <a href="#">Login</a>
                    </span>
                </form>

            </div>
        </div>
    </div>
</body>

</html>

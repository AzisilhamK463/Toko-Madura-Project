<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12/dist/gsap.min.js"></script>
</head>
<div>
    <div class="container">
        <div class="gambar">
            <img src="{{ asset('storage/image/gmbr2.jpg') }}">
        </div>
        <div class="login">
            <form action="{{ route('pengguna.store') }}" method="POST">
                @csrf
                <h1>Registrasi</h1>
                <hr>
                <p>Toko Madura</p>
                <label for="username">Username</label>
                <input type="text" id="username" name="username">

                <br><br>

                <label for="Email">Email</label>
                <input type="text" id="email" name="email">

                <br><br>

                <label for="password">Password</label>
                <input type="text" id="Password" name="password">

                <br><br>

                <input type="hidden" id="hidden" name="levels" value=2>
                <button type="submit" value="Submit">REGISTER</button>
                <p>
                    <a href="{{ route('login') }}">Silahkan Login</a>
                </p>
            </form>
        </div>
    </div>
</div>
</body>
<script type="text/javascript">
    gsap.from('.container', {
        duration: 1,
        y: -200,
        opacity: 0,
        ease: 'back'
    });
</script>

</html>

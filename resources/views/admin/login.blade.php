<!-- resources/views/admin/login.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
    <div class="w3-container w3-card-4 w3-light-grey" style="max-width:400px; margin:auto; margin-top:100px;">
        <h2 class="w3-center">Admin Login</h2>
        <form class="w3-container" method="POST" action="{{ route('admin.login') }}">
            @csrf
            <p>
                <label>Email</label>
                <input class="w3-input" type="email" name="email" required>
            </p>
            <p>
                <label>Password</label>
                <input class="w3-input" type="password" name="password" required>
            </p>
            <p>
                <button class="w3-button w3-block w3-orange" type="submit">Login</button>
            </p>
            @if ($errors->any())
                <div class="w3-panel w3-red">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </form>
    </div>
</body>
</html>

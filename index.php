<!DOCTYPE html>
<html>
<head>
    <title>Form Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        h2 {
            color: #333;
        }

        form {
            background-color: #fff;
            border: 1px solid #ddd;
            padding: 20px;
            width: 300px;
            margin: 0 auto;
        }

        .custom-label {
            color: red;
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"] {
            width: 90%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: blue;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: blue;
        }

        #message {
            color: #f00;
        }

        img{
            width:100%;
            border-radius:4px;
        }
    </style>
</head>
<body>

    <h2>Form Login</h2>
    <form id="loginForm">
     <img src="https://cdn0-production-images-kly.akamaized.net/4HoYhuF1-5XHw5Qt24uauJCqGEo=/800x450/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/3387602/original/000737900_1614323344-tropical-1651426_1920.jpg" alt="">
        <label for="username" class="custom-label">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="password" class="custom-label">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        
        <input type="submit" value="Login">
    </form>

    <p id="message"></p>

    <script>
        document.getElementById("loginForm").addEventListener("submit", function(event) {
            event.preventDefault();

            // Mengganti dengan username dan password yang benar
            const validUsername = "Hotmaria";
            const validPassword = "hotma1410";

            const username = document.getElementById("username").value;
            const password = document.getElementById("password").value;

            if (username === validUsername && password === validPassword) {
                // Redirect ke halaman lain (ganti URL sesuai kebutuhan)
                window.location.href = "home.php";
            } else {
                document.getElementById("message").innerHTML = "Username atau password salah. Silakan coba lagi.";
            }
        });
    </script>
</body>
</html>
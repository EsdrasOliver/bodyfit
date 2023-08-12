<!DOCTYPE html>
<html>
<head>
    <title>Sistema de Ficha BodyFit - Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .login-container {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
        }
        .login-container h2 {
            margin-top: 0;
            text-align: center;
            font-size: 24px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        .form-group button {
            background-color: #007BFF;
            border: none;
            color: #fff;
            padding: 10px 15px;
            border-radius: 3px;
            width: 100%;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2>Sistema de Ficha BodyFit</h2>
    <form>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required>
        </div>
        <div class="form-group">
            <button type="submit">Entrar</button>
        </div>
    </form>
</div>

</body>
</html>

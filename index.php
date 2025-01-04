<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Exness</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f9f9f9;
        }
        .container {
            text-align: center;
            width: 100%;
            max-width: 400px;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }
        .tabs {
            display: flex;
            justify-content: center;
            border-bottom: 1px solid #ddd;
            margin-bottom: 20px;
        }
        .tab {
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
        }
        .tab.active {
            font-weight: bold;
            border-bottom: 2px solid black;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        input {
            font-size: 16px;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            font-size: 16px;
            padding: 10px;
            color: white;
            background-color: #FFD700;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #FFC107;
        }
        .or-sign-in {
            margin-top: 10px;
            font-size: 14px;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to Exness</h1>
        <div class="tabs">
            <div class="tab active">Sign in</div>
            <div class="tab">Create an account</div>
        </div>
        <form>
            <input type="email" placeholder="Your email address" required>
            <input type="password" placeholder="Password" required>
            <button type="submit">Continue</button>
        </form>
        <div class="or-sign-in">Or sign in with</div>
    </div>
</body>
</html>

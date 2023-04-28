<!DOCTYPE html>
<html>
<head>
    <title>Task</title>
    <style>
        /* Styles for the email body */
        body {
            font-family: Arial, sans-serif;
            line-height: 1.5;
            color: #333;
        }
        /* Styles for the email header */
        .header {
            background-color: #f2f2f2;
            padding: 20px;
            text-align: center;
        }
        .header h1{
            text-align: center;
        }
        /* Styles for the email content */
        .content {
            padding: 20px;
        }
        /* Styles for the email footer */
        .footer {
            background-color: #f2f2f2;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Welcome to Task</h1> 
    </div>
    <div class="content">
        <h2>Info Login</h2>
        <ul>
            <li>
                <h3>Email :</h3>
                <p>{{ $email }}</p> 
            </li>
            <li>
                <h3>Password :</h3>
                <p>{{ $password }}</p> 
            </li>
        </ul>
    </div>
    <div class="footer">
        <p>Contact Us: task@gmail.com | Phone: 0641686753</p>
    </div>
</body>
</html>
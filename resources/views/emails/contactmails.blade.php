<!-- resources/views/emails/auto_mail.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto Mail</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            width: 100%;
            margin: 0 auto;
            color:#fff;
            background-color: #000;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #fff;
            font-weight:bold;
        }

        p {
            color: #fff;
            font-size:11px;
        }
        .footer{
            background:#F3E217;
            height:100px;
            padding:20px;
            width:100%;
            margin:0 auto;
        }

        /* Add your additional styles here */
    </style>
</head>
<body>
    <div class="container">
        <h1>Information of a complaint</h1>
        <p>Name: {{$cname}} </p>
        <p>Email Address: {{$email}}</p>
        <p>Contact: {{$contact}}</p>
        <p>Message: <br> {{$message}}</p>
        <!-- Add more HTML content as needed -->
    </div>
    <div class="footer">
      <p>All Information given came from your contact link,
        please do well to reach out to the client
      </p>
    </div>
</body>
</html>

<?php 
    $company = "Nepalese Stuf";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terms & Conditions: Nepalese Stuff</title>

    <!-- Favicon -->
    <link rel="icon" href="../img/logo.png">

    <!-- Bootstrap -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
        }
        .wrap {
            display: flex;
            justify-content: space-around;
            align-items: center;
            box-sizing: border-box;
            height: 100vh;
            padding: 2rem;
            background-color: #eee;
        }

        .container {
            display: flex;
            flex-direction: column;
            box-sizing: border-box;
            padding: 1rem;
            background-color: #fff;
            width: 768px;
            height: 100%;
            border-radius: 8px;
            box-shadow: 0rem 1rem 2rem -0.25rem rgba(0, 0, 0, 0.25);
        }
        .container__heading {
            padding: 1rem 0;
            border-bottom: 1px solid #ccc;
            text-align: center;
        }
        .container__heading > h2 {
            font-size: 1.75rem;
            line-height: 1.75rem;
            margin: 0;
        }
        .container__content {
            flex-grow: 1;
            overflow-y: scroll;
        }
        .container__nav {
            border-top: 1px solid #ccc;
            text-align: right;
            padding: 2rem 0 1rem;
        }
        .container__nav > .button {
            /* background-color: #444499; */
            box-shadow: 0rem 0.5rem 1rem -0.125rem rgba(0, 0, 0, 0.25);
            padding: 0.5rem 1.5rem;
            border-radius: 5px;
            color: #fff;
            text-decoration: none;
        }
        .container__nav > .button:hover {
            box-shadow: 0rem 0rem 1rem -0.125rem rgba(0, 0, 0, 0.25);
            transform: translateY(-0.5rem);
        }
        p{
            color: #777;
            padding: 8px;
        }
        
    </style>

</head>
<body>
    <main class="wrap">
    <section class="container">
        <div class="container__heading">
        <h2>Terms & Conditions</h2>
        </div>
        <div class="container__content">
            <p>
                By agreeing to our terms and conditions, you declare that you are responsible and accountable for your actions and the organisation '<?=$company?>' can and will take actions against any inappropriate behaviour or any action by you that violates our policies.
            </p>
            <p>
                The user of '<?=$company?>' cannot post or comment any vulgar or inappropriate content that may harass, harm or strike against others faith and belief.
            </p>
        </div>
        <div class="container__nav">
            <a class="button" href="../index.php" style="background-color: #f53838">Home</a>
            <a class="button" href="signUp.php" style="background-color: #444499">Continue</a>
        </div>
    </section>
    </main>
</body>
</html>
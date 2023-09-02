<!DOCTYPE html>
<link rel="stylesheet">
<link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link
    rel="preconnect"
    href="https://fonts.gstatic.com"
    crossorigin="crossorigin">
<link
    href="https://fonts.googleapis.com/css2?family=Capriola&family=Fredoka+One&display=swap"
    rel="stylesheet">
<html>
    <body>
        <div class="container">
            <div class="row w-200">
                <h5>
                    <strong>Form Validation<img src = "validation.png" style = "width:40px; height:40px; margin-left:7px;"></strong>
                </h5>
            </div>
                    <strong>To check if there is an empty or not chosen field :
                    </strong>
                    <br>
                <?php
                $eventName = $_POST["eventName"];
                $picName = $_POST["picName"];
                $picPhone = $_POST["picPhone"];
                $emailAddress = $_POST["emailAdd"];
                $passWord = $_POST["passWord"];
                $confirmPassword = $_POST["confirmPassword"];
                $date = $_POST["eventDate"];
                $eventType = $_POST["eventType"];

                $newEmail = filter_var($emailAddress, FILTER_SANITIZE_EMAIL);

                if (empty($eventName)) {
                    echo "<span class = 'wrong'><strong>Name is Empty!</strong>&nbsp;<img src = 'wrong.png'><br></span>";
                } else {
                    echo "<span class = 'correct'><strong>The Event Name : " .
                        $eventName .
                        "</strong>&nbsp;<img src = 'correct.png'><br></span>";
                }

                if (empty($picPhone)) {
                    echo "<span class = 'wrong'><strong>Person in charge phone number is empty!</strong>&nbsp;<img src = 'wrong.png'><br></span>";
                }
                
                else if (!preg_match('/^0\d(-\d{2}|\d-\d|\d{2}-)\d{6}$/', $picPhone))
                {
                    echo "<span class = 'wrong'><strong>Phone number doesn't follow the format!</strong>&nbsp;<img src = 'wrong.png'><br></span>";
                }
                
                else {
                    echo "<span class = 'correct'><strong>The person in charge's phone number : " .
                        $picPhone .
                        "</strong>&nbsp;<img src = 'correct.png'><br></span>";
                }

                if (empty($newEmail)) {
                    echo "<span class = 'wrong'><strong>Email address is empty!</strong>&nbsp;<img src = 'wrong.png'><br></span>";
                }

                else if (!filter_var($newEmail, FILTER_VALIDATE_EMAIL))
                {
                    echo "<span class = 'wrong'><strong>Email address doesn't follow the format!</strong>&nbsp;<img src = 'wrong.png'><br></span>";
                }
                
                else {
                    echo "<span class = 'correct'><strong>The amail address Is : " .
                        $newEmail .
                        "</strong>&nbsp;<img src = 'correct.png'><br></span>";
                }

                if (empty($passWord)) {
                    echo "<span class = 'wrong'><strong>Password is empty!</strong>&nbsp;<img src = 'wrong.png'><br></span>";
                } else {
                    echo "<span class = 'correct'><strong>Your password is : " .
                        $passWord .
                        "</strong>&nbsp;<img src = 'correct.png'><br></span>";
                }

                if (empty($confirmPassword)) {
                    echo "<span class = 'wrong'><strong>Your password confirmation is empty!</strong>&nbsp;<img src = 'wrong.png'><br></span>";
                } else {
                    echo "<span class = 'correct'><strong>Your confirmation password is : " .
                        $confirmPassword .
                        "</strong>&nbsp;<img src = 'correct.png'><br></span>";
                }

                if (empty($date)) {
                    echo "<span class = 'wrong'><strong>Please choose a date!</strong>&nbsp;<img src = 'wrong.png'><br></span>";
                } else {
                    echo "<span class = 'correct'><strong>Your chosen date is : " .
                        $date .
                        "</strong>&nbsp;<img src = 'correct.png'><br></span>";
                }

                if ($eventType == "0") {
                    echo "<span class = 'wrong'><strong>Event type not chosen!</strong>&nbsp;<img src = 'wrong.png'><br></span>";
                } else {
                    echo "<span class = 'correct'><strong>Your chosen event is : " .
                        $eventType .
                        "</strong>&nbsp;<img src = 'correct.png'><br></span>";
                }
                ?>

                    <Strong><br>To check date Validation :
                    </strong>
                    <br>

                <?php if (empty($date)) {
                    echo "<span class = 'wrong'><strong>You haven't chosen a date yet!</strong>&nbsp;<img src = 'wrong.png'><br></span>";
                } elseif ($date >= "2022-01-01" && $date <= "2050-12-31") {
                    echo "<span class = 'correct'><strong>The date is valid</strong>&nbsp;<img src = 'correct.png'><br></span>";
                } else {
                    echo "<span class = 'wrong'><strong>Please choose a date between 01/01/2022 and 31/12/2050 only!</strong>&nbsp;<img src = 'wrong.png'><br></span>";
                } ?>

                    <Strong><br>To check if the password is the same or not :
                    </strong>

                    <br>

                <?php if (empty($passWord && $confirmPassword)) {
                    echo "<span class = 'wrong'><strong>Password and confirmation of password are empty!</strong>&nbsp;<img src = 'wrong.png'><br></span><br>";
                } elseif ($passWord == $confirmPassword) {
                    echo "<span class = 'correct'><strong>Password and confirmation of password is the same</strong>&nbsp;<img src = 'correct.png'><br></span><br>";
                } else {
                    echo "<span class = 'wrong'><strong>Password and confirmation of password is not the same!</strong>&nbsp;<img src = 'wrong.png'><br></span><br>";
                } ?>

                    <form action="register.html">
                        <button class="btn btn-warning">
                            <strong>Go Back</strong>
                        </button>

                    </form>
        </div>
    </body>
</html>

<style>
    .container {
        margin-bottom: 30px;
        box-shadow: rgba(0, 0, 0, 0.35) 0 5px 15px;
        border-radius: 20px;
        width: 100%;
        margin-top: 10px;
        
    }
    .form
    {
        width:420px;
         height:420px;"
    }
    .row {
        background-color: orange;
        border-top-left-radius: 20px;
        border-top-right-radius: 20px;
    }
    h5 {
        text-shadow: 2px 2px black;
        font-size: 28px;
        height: 40px;
        padding-top: 5px;
        color: white;
        text-align: center;
        font-family: 'Fredoka One', cursive;
        width: 100%;
    }
    .btn-warning {
        text-shadow: 1px 1px black;
        color: white;
        margin-bottom: 20px;
    }

    .btn-warning:hover {
        text-shadow: 1px 1px black;
        color: white;
    }

    .box {
        padding-left: 5px;
    }

    .wrong {
        color: red;
        text-align: center;
    }

    .correct {
        color: green;
        text-align: center;
    }

    img {
        width: 20px;
        height: 20px;
    }
</style>
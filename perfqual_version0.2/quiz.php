<?php
include 'partial/nav.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" type='text/css' />
    <link href="css/style.css" rel='stylesheet' type='text/css' />


    <script src="js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <style>
        .main_body {
            /* color: purple !important; */
            background: linear-gradient(to right, #ffffff 0%, #cc99ff 66%);

        }

        th {
            text-align: center;
        }

        td {
            text-align: center;

        }

        .myd {
            padding: 10px;
        }


        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
        }

        .required:after {
            content: " *";
            color: red;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container-fluid" style="background-image: url('images/wms2c.png');background-repeat: no-repeat;background-size: cover;">
        <div class="row">
            <div class="col-lg-3"><a href="https://simulationsx.com/"><img src="images/nlogo.png" style="width: 200px;" alt=""></a></div>
            <div class="col-lg-6" style="text-align: center;color:white">
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>

            </div>
            <div class="col-lg-3"></div>

        </div>
        <br>
        <br>
        <br>
    </div>
    <div class="main_body">
        <br>
        <div class="container" style="border-radius: 20px;background-color: #ffffff !important;margin-top: -70px;">
            <div class="container" style="text-align: center;">
                <h2 style="color: black; font-weight:bold;">INVENTORY MANAGEMENT</h2>

            </div>
            <hr>
            <form action="" method="post" style="color:black">

                <div class="row">
                    <div class="myd">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <P style="font-size: 20px;" class="required">On the scale of 10, how much this game came up to your expectation</P>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="col" rowspan="2" style="text-align: center; vertical-align: middle;">
                                        <label for="inputEmail4">Not at all Likely</label>
                                    </th>
                                    <th scope="col">
                                        <label for="inputEmail4">0</label>
                                    </th>
                                    <th scope="col">
                                        <label for="inputEmail4">1</label>
                                    </th>
                                    <th scope="col">
                                        <label for="inputEmail4">2</label>
                                    </th>
                                    <th scope="col">
                                        <label for="inputEmail4">3</label>
                                    </th>
                                    <th scope="col">
                                        <label for="inputEmail4">4</label>
                                    </th>
                                    <th scope="col">
                                        <label for="inputEmail4">5</label>
                                    </th>
                                    <th scope="col">
                                        <label for="inputEmail4">6</label>
                                    </th>
                                    <th scope="col">
                                        <label for="inputEmail4">7</label>
                                    </th>
                                    <th scope="col">
                                        <label for="inputEmail4">8</label>
                                    </th>
                                    <th scope="col">
                                        <label for="inputEmail4">9</label>
                                    </th>
                                    <th scope="col">
                                        <label for="inputEmail4">10</label>
                                    </th>
                                    <th scope="col" rowspan="2" style="text-align: center; vertical-align: middle;">
                                        <label for="inputEmail4">Extremely Likely</label>
                                    </th>
                                </tr>
                                <tr>
                                    <td style="width: 120px;"><input class="form-check-input" type="radio" required="" name="like1" id="like1" value="10" style="margin-left: -6px;">
                                    <td style="width: 120px;"><input class="form-check-input" type="radio" required="" name="like1" id="like1" value="10" style="margin-left: -6px;">
                                    <td style="width: 120px;"><input class="form-check-input" type="radio" required="" name="like1" id="like1" value="10" style="margin-left: -6px;">
                                    <td style="width: 120px;"><input class="form-check-input" type="radio" required="" name="like1" id="like1" value="10" style="margin-left: -6px;">
                                    <td style="width: 120px;"><input class="form-check-input" type="radio" required="" name="like1" id="like1" value="10" style="margin-left: -6px;">
                                    <td style="width: 120px;"><input class="form-check-input" type="radio" required="" name="like1" id="like1" value="10" style="margin-left: -6px;">
                                    <td style="width: 120px;"><input class="form-check-input" type="radio" required="" name="like1" id="like1" value="10" style="margin-left: -6px;">
                                    <td style="width: 120px;"><input class="form-check-input" type="radio" required="" name="like1" id="like1" value="10" style="margin-left: -6px;">
                                    <td style="width: 120px;"><input class="form-check-input" type="radio" required="" name="like1" id="like1" value="10" style="margin-left: -6px;">
                                    <td style="width: 120px;"><input class="form-check-input" type="radio" required="" name="like1" id="like1" value="10" style="margin-left: -6px;">
                                    <td style="width: 120px;"><input class="form-check-input" type="radio" required="" name="like1" id="like1" value="10" style="margin-left: -6px;">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="myd">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <P style="font-size: 20px;" class="required">How likely are you to recommend this game to a friend or colleague?</P>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="col" rowspan="2" style="text-align: center; vertical-align: middle;">
                                        <label for="inputEmail4">Not at all Likely</label>
                                    </th>
                                    <th scope="col">
                                        <label for="inputEmail4">0</label>
                                    </th>
                                    <th scope="col">
                                        <label for="inputEmail4">1</label>
                                    </th>
                                    <th scope="col">
                                        <label for="inputEmail4">2</label>
                                    </th>
                                    <th scope="col">
                                        <label for="inputEmail4">3</label>
                                    </th>
                                    <th scope="col">
                                        <label for="inputEmail4">4</label>
                                    </th>
                                    <th scope="col">
                                        <label for="inputEmail4">5</label>
                                    </th>
                                    <th scope="col">
                                        <label for="inputEmail4">6</label>
                                    </th>
                                    <th scope="col">
                                        <label for="inputEmail4">7</label>
                                    </th>
                                    <th scope="col">
                                        <label for="inputEmail4">8</label>
                                    </th>
                                    <th scope="col">
                                        <label for="inputEmail4">9</label>
                                    </th>
                                    <th scope="col">
                                        <label for="inputEmail4">10</label>
                                    </th>
                                    <th scope="col" rowspan="2" style="text-align: center; vertical-align: middle;">
                                        <label for="inputEmail4">Extremely Likely</label>
                                    </th>
                                </tr>
                                <tr>
                                    <td style="width: 120px;"><input class="form-check-input" type="radio" required name="like2" id="like2" value="0"></td>
                                    <td style="width: 120px;"><input class="form-check-input" type="radio" required name="like2" id="like2" value="1"></td>
                                    <td style="width: 120px;"><input class="form-check-input" type="radio" required name="like2" id="like2" value="2"></td>
                                    <td style="width: 120px;"><input class="form-check-input" type="radio" required name="like2" id="like2" value="3"></td>
                                    <td style="width: 120px;"><input class="form-check-input" type="radio" required name="like2" id="like2" value="4"></td>
                                    <td style="width: 120px;"><input class="form-check-input" type="radio" required name="like2" id="like2" value="5"></td>
                                    <td style="width: 120px;"><input class="form-check-input" type="radio" required name="like2" id="like2" value="6"></td>
                                    <td style="width: 120px;"><input class="form-check-input" type="radio" required name="like2" id="like2" value="7"></td>
                                    <td style="width: 120px;"><input class="form-check-input" type="radio" required name="like2" id="like2" value="8"></td>
                                    <td style="width: 120px;"><input class="form-check-input" type="radio" required name="like2" id="like2" value="9"></td>
                                    <td style="width: 120px;"><input class="form-check-input" type="radio" required name="like2" id="like2" value="10"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </form>
        </div>
        <br>
    </div>

    <div>



    </div>
</body>
<?php
include 'partial/footer.php';
?>

</html>
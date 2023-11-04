<?php
include 'partial/nav.php';
?>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./styles/quiz_res.css" rel='stylesheet' type='text/css' />
    <link href="./styles/quiz_style.css" rel='stylesheet' type='text/css' />


    <script src="./js/quiz.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <style>
        .main_body {
            /* color: purple !important; */
            background: linear-gradient(to right, #3498db85, #3c6ae77d);

        }

        th {
            text-align: center;
        }

        td {
            text-align: center;

        }

        .myd {
            padding: 20px;
        }

        .btn1 {
            background: linear-gradient(to right, #3498db, #3c6ae7);
            padding-left: 15%;
            padding-right: 15%;
            padding-top: 3%;
            padding-bottom: 3%;
            border-radius: 8px;
            border-color: #3498db;
            font-weight: 600;
            font-size: larger;

        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
        }
    </style>
</head>

<body>
    <div class="container-fluid" style="background-image: url('images/wms2c.png');background-repeat: no-repeat;background-size: cover;">
        <div class="row">

            <div class="col-lg-6" style="text-align: center;color:white">
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
            <div class="container">
                <h2 style="color: black; font-weight:bold;text-align: center;">QUIZ</h2>

            </div>
            <hr>
            <form action="" method="post" style="align-items: center;justify-content: center;">
                <div class="row" style="text-align: center;">
                    <div class="col-md-12">
                        <div class="form-group col-md-2">
                            <button type="button" class="btn1 btn-primary">Primary</button>
                        </div>
                        <div class="form-group col-md-2">
                            <button type="button" class="btn1 btn-primary">Primary</button>
                        </div>
                        <div class="form-group col-md-2">
                            <button type="button" class="btn1 btn-primary">Primary</button>
                        </div>
                        <div class="form-group col-md-2">
                            <button type="button" class="btn1 btn-primary">Primary</button>
                        </div>
                        <div class="form-group col-md-2">
                            <button type="button" class="btn1 btn-primary">Primary</button>
                        </div>
                        <div class="form-group col-md-2">
                            <button type="button" class="btn1 btn-primary">Primary</button>
                        </div>
                        <div class="form-group col-md-2">
                            <button type="button" class="btn1 btn-primary">Primary</button>
                        </div>
                        <div class="form-group col-md-2">
                            <button type="button" class="btn1 btn-primary">Primary</button>
                        </div>
                        <div class="form-group col-md-2">
                            <button type="button" class="btn1 btn-primary">Primary</button>
                        </div>

                    </div>
                </div>


                <div class="row">
                    <div class="myd">
                        <div style=" background: linear-gradient(to right, #3498db, #3c6ae7);text-align: center; border-radius: 8px; font-size: 25px;color:white">SECTIONS</div>
                        <div class="row">
                            <div class="myd">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <P style="font-size: 20px;" class="required">On the scale of 10, how much this
                                                game
                                                came up to your expectation</P>
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
                                            <td style="width: 120px;"><input class="form-check-input" type="radio" required name="like1" id="like1" value="0"></td>
                                            <td style="width: 120px;"><input class="form-check-input" type="radio" required name="like1" id="like1" value="1"></td>
                                            <td style="width: 120px;"><input class="form-check-input" type="radio" required name="like1" id="like1" value="2"></td>
                                            <td style="width: 120px;"><input class="form-check-input" type="radio" required name="like1" id="like1" value="3"></td>
                                            <td style="width: 120px;"><input class="form-check-input" type="radio" required name="like1" id="like1" value="4"></td>
                                            <td style="width: 120px;"><input class="form-check-input" type="radio" required name="like1" id="like1" value="5"></td>
                                            <td style="width: 120px;"><input class="form-check-input" type="radio" required name="like1" id="like1" value="6"></td>
                                            <td style="width: 120px;"><input class="form-check-input" type="radio" required name="like1" id="like1" value="7"></td>
                                            <td style="width: 120px;"><input class="form-check-input" type="radio" required name="like1" id="like1" value="8"></td>
                                            <td style="width: 120px;"><input class="form-check-input" type="radio" required name="like1" id="like1" value="9"></td>
                                            <td style="width: 120px;"><input class="form-check-input" type="radio" required name="like1" id="like1" value="10"></td>
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
                                            <P style="font-size: 20px;" class="required">How likely are you to recommend
                                                this
                                                game to a friend or colleague?</P>
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
                        <div class="row">
                            <div class="col-md-12" style="padding: 30px;padding-left: 5%;padding-right: 5%;">
                                <button type="submit" class="btn btn-primary" name="btn_submit">SUBMIT</button>
                            </div>
                        </div>
            </form>
        </div>
        <br>
    </div>
    <div style="background-color: purple;color:white;text-align: center;padding: 15px;">
        <span>Connect with us: info@simulationsx.com</span>
        <br>
        © 2023 Simulations Xperience Pvt. Ltd.

    </div>

    <div>

    </div>
   
    <?php
    include 'partial/footer.php';
    ?>
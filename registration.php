<?php
     session_start();
    require('getregistration.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mystyle.css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
        crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <title>User Registration Form</title>

    <style>
        body {
            background-color: gray;
        }
    </style>
</head>

<body>

    <div class="container m-3">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">
                        <h2>REGISTRATION</h2>
                        <p>Fill up the form with correct values.</p>
                    </div>
                    <div class="card-body">
                        <form class="" method="POST" action="getregistration.php" enctype="multipart/form-data">

                            <div class="form-label">
                                <label class="col-md-8">First Name:<br>
                                    <input class="form-control" type="text" name="firstname" required>
                                </label>
                            </div>
                            <div class="form-label">
                                <label class="col-md-8">Last Name:<br>
                                    <input class="form-control" type="text" name="lastname" required>
                                </label>
                            </div>
                            <div class="form-label">
                                <label class="col-md-8">Date Of Birth:
                                    <input class="form-control" type="date" name="dob" id="dob" required>
                                </label>
                            </div>
                            <div class="form-label">
                                <label class="col-md-8">Email Address:<br>
                                    <input class="form-control" type="email" name="email" placeholder="email@gmail.com"
                                        required>
                                </label>
                            </div>
                            <div class="form-label">
                                <label class="col-md-8">Phone Number:<br>
                                    <input class="form-control" type="tel" name="phoneNo" required>
                                </label>
                            </div>
                            <label>Gender:
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" value="female" required>
                                    <label class="form-check-label">Female</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" value="male" required>
                                    <label class="form-check-label">Male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" value="other" required>
                                    <label class="form-check-label">Other</label>
                                </div>

                            </label><br><br>


                            <div class="form-label">

                                <label>Type of Model:<br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" name="model-type" type="checkbox">
                                        <label class="form-check-label">Runway</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" name="model-type" type="checkbox">
                                        <label class="form-check-label">Fashion</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" name="model-type" type="checkbox">
                                        <label class="form-check-label">Swimsuit/Lingerie</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" name="model-type" type="checkbox">
                                        <label class="form-check-label">Commercial</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" name="model-type" type="checkbox">
                                        <label class="form-check-label">Fitness</label>
                                    </div><br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" name="model-type" type="checkbox">
                                        <label class="form-check-label">Parts</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" name="model-type" type="checkbox">
                                        <label class="form-check-label">Promotional</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" name="model-type" type="checkbox">
                                        <label class="form-check-label">Glamour</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" name="model-type" type="checkbox">
                                        <label class="form-check-label">Print</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" name="model-type" type="checkbox">
                                        <label class="form-check-label">All</label>
                                    </div>

                                </label>
                            </div>

                            <div class="row g-3">

                                <div class="col-sm">
                                    <label for="inputState" class="form-label">State</label>
                                    <input type="text" class="form-control" name="state" id="inputState">
                                </div>





                                <div class="col-sm-7">
                                    <label for="inputCounty" class="form-label">County</label>
                                    <input class="form-control" name="county" list="datalistOptions"
                                        id="exampleDataList" placeholder="Type to search..." required>

                                    <datalist id="datalistOptions">

                                        <option value="">
                                        <option value="baringo">Baringo</option>
                                        <option value="bomet">
                                        <option value="bungoma">
                                        <option value="busia">
                                        <option value="elgeyo marakwet">
                                        <option value="embu">
                                        <option value="garissa">
                                        <option value="homa bay">
                                        <option value="isiolo">
                                        <option value="kajiado">
                                        <option value="kakamega">
                                        <option value="kericho">

                                        <option value="kiambu">
                                        <option value="kilifi">
                                        <option value="kirinyaga">
                                        <option value="kisii">
                                        <option value="kisumu">
                                        <option value="kitui">
                                        <option value="kwale">
                                        <option value="laikipia">
                                        <option value="lamu">
                                        <option value="machakos">
                                        <option value="makueni">
                                        <option value="mandera">
                                        <option value="meru">
                                        <option value="migori">
                                        <option value="marsabit">
                                        <option value="mombasa">
                                        <option value="muranga">
                                        <option value="nairobi">
                                        <option value="nakuru">
                                        <option value="nandi">
                                        <option value="narok">
                                        <option value="nyamira">
                                        <option value="nyandarua">
                                        <option value="nyeri">
                                        <option value="samburu">
                                        <option value="siaya">
                                        <option value="taita taveta">
                                        <option value="tana river">
                                        <option value="tharaka nithi">
                                        <option value="trans nzoia">
                                        <option value="turkana">
                                        <option value="uasin gishu">
                                        <option value="vihiga">
                                        <option value="wajir">
                                        <option value="pokot">
                                    </datalist>
                                </div>
                                <div class="col-sm">
                                    <label for="inputZip" class="form-label">Zip</label>
                                    <input type="text" class="form-control" name="zip" id="inputZip">
                                </div>
                            </div>
                            <label>Experience
                                <select class="form-select" name="experience">
                                    <option value="beginner">Beginner</option>
                                    <option value="intermediate">Intermediate</option>
                                    <option value="expert">Expert</option>
                                </select>
                            </label><br><br>
                            <label>Your Height
                                <select class="form-select" name="heigth" aria-label="Default select example" required>
                                    <option selected>Choose your height</option>
                                    <option value="4.5">4.5</option>
                                    <option value="4.5">4.6</option>
                                    <option value="4.5">4.7</option>
                                    <option value="4.5">4.8</option>
                                    <option value="4.5">4.9</option>
                                    <option value="4.5">5.0</option>
                                    <option value="4.5">5.1</option>
                                    <option value="4.5">5.2</option>
                                    <option value="4.5">5.3</option>
                                    <option value="4.5">5.4</option>
                                    <option value="4.5">5.5</option>
                                    <option value="4.5">5.6</option>
                                    <option value="4.5">5.7</option>
                                    <option value="4.5">5.8</option>
                                    <option value="4.5">5.9</option>
                                    <option value="4.5">6.0</option>
                                    <option value="4.5">6.1</option>
                                    <option value="4.5">6.2</option>
                                    <option value="4.5">6.3</option>
                                    <option value="4.5">6.4</option>
                                    <option value="4.5">6.5</option>
                                    <option value="4.5">6.6</option>
                                    <option value="4.5">6.7</option>
                                    <option value="4.5">6.8</option>
                                    <option value="4.5">6.9</option>
                                    <option value="4.5">7.0</option>
                                    <option value="4.5">7.1</option>
                                    <option value="4.5">7.2</option>
                                    <option value="4.5">7.3</option>
                                    <option value="4.5">7.4</option>
                                    <option value="4.5">7.5</option>
                                    <option value="4.5">7.6</option>
                                    <option value="4.5">7.7</option>
                                    <option value="4.5">7.8</option>
                                    <option value="4.5">7.9</option>
                                    <option value="4.5">8.0</option>
                                    <option value="4.5">8.1</option>
                                    <option value="4.5">8.2</option>
                                    <option value="4.5">8.3</option>
                                    <option value="4.5">8.4</option>
                                </select>
                            </label><br><br>
                            <div class="form-label">
                                <label class="col-md-8">Enter your Username:<br>
                                    <input class="form-control" type="text" name="username" placeholder="username"
                                        required>
                                </label>
                            </div>
                            <div class="form-label">
                                <label class="col-md-8">Enter your password:<br>
                                    <input class="form-control" type="password" name="password" placeholder="password"
                                        required>
                                </label>
                            </div>
                            <div class="form-label">
                                <label class="col-md-8">Confirm your password:<br>
                                    <input class="form-control" type="password" name="password"
                                        placeholder="confirm your password" required>
                                </label>
                            </div>
                            <div class="form-group form-label">
                                <label class="col-md-8" for="uploadImage">Image Photo
                                    <input class="form-control" type="file" name="uploadImage" id="image">
                                </label>
                            </div>

                            <div class="form-label">
                                <label class="col-md-8">Describe Yourself<br>
                                    <textarea class="form-control" name="dy" id="" cols="30" rows="10"></textarea>
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label">I accept the terms of use & policy.</label>
                            </div>
                            <div>
                                <a href="index.php" class="btn btn-outline-info float-left" type="submit">Login</a>
                                <button class="btn btn-outline-success" type="submit">SUBMIT</button>
                            </div>
                            <div class="row">
                                <p class="text-center">Already registered?<a style="color:gray; "
                                        href="login.php">Login</a></p>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>

    </div>
</body>

</html>
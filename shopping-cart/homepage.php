<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        My Homepage
    </title>
    <link rel="stylesheet" href="bootstrap-4.3.1/bootstrap-4.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <header>
        <div class="container-fluid" style="width: 100%">
            <div class="jumbotron"
                style="height: 350px; background-image: linear-gradient(to top left,darkgreen, yellow)">
                <img src="images/cart1.png" class="rounded-circle" width="100px" height="100px">
                <div>
                
                    <a href="sign-in.php" class="btn btn-link float-right" style="color: darkblue">Sign in</a>
                    <p class="text-primary float-right">&boxv;</p>
                    <button type="button" class="btn btn-link float-right" style="color: darkblue">
                        <a href="createform.php" style=" color: darkblue">Register</a>
                    </button>
                    <p class="text-primary float-right">&boxv;</p>
                    <button type="button" class="btn btn-link float-right" style="color: darkblue">My account</button>
                    <p class="text-primary float-right">&boxv;</p>
                    <button type="button" class="btn btn-link float-right" style="color: darkblue">Track order</button>
                    <br>
                    <h3>Welcome Guest!</h3>
                    <p style="float: right">Cash on delivery &boxv;30 day return</p><br><br>
                    <p style="float: right">24/7 Customer care service <a href="tel:1800001122"
                            style="text-decoration: none; color: darkblue">1800001122</a></p>
                </div>
            </div>
            <div class="container">
                <div class="input-group">
                    <input type="search" class="form-control"
                        placeholder="Search for a product, Category, Sellers or Brand">
                    <div class="input-group-append">
                        <button class="btn btn-success" type="submit">Search</button>
                    </div>
                </div>
            </div>
    </header><br><br>
    <nav class="right" style="background: #5ea4a6">
        <div class="container">
            <ul class="nav nav-pills justify-content-center" role="tablist">
                <li class="nav-item">
                    <a class="nav-link btn btn-info" role="menu" style="border-radius: 0%" data-toggle="pill"
                        href="Electronics">ELECTRONICS&dtrif;</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-info" role="menu" data-toggle="pill" style="border-radius: 0%"
                        href="Men">MEN&dtrif;</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-info" role="menu" data-toggle="pill" style="border-radius: 0%"
                        href="Women">WOMEN&dtrif;</a>
                <li class="nav-item">
                    <a class="nav-link btn btn-info" role="menu" data-toggle="pill" style="border-radius: 0%"
                        href="Baby & Kids">BABY & KIDS&dtrif;</a>
                <li class="nav-item">
                    <a class="nav-link btn btn-info" role="menu" data-toggle="pill" style="border-radius: 0%"
                        href="Books & Media">BOOKS & MEDIA&dtrif;</a>
                <li class="nav-item">
                    <a class="nav-link btn btn-info" role="menu" data-toggle="pill" style="border-radius: 0%"
                        href="Household">HOUSEHOLD&dtrif;</a>
                <li class="nav-item">
                    <a class="nav-link btn btn-info" role="menu" data-toggle="pill" style="border-radius: 0%"
                        href="All Departments">ALL DEPARTMENTS&dtrif;</a>
                </li>
            </ul>
        </div>
    </nav><br><br>
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4">
                    <div class="card " style="border: 3px solid black; box-shadow: 10px 10px darkgrey;">
                        <div class="card-body justify-content-center">
                            <h4 class="card-title">Quick Find- Choose Product</h4>
                            <p class="card-text">Find the right product at the right place.</p><br>
                            <div class="input-group">
                                <input type="search" class="form-control" placeholder="Type">
                                <div class="input-group-append">
                                    <button class="btn btn-dark" type="submit">&dtrif;</button>
                                </div>
                            </div><br>
                            <div class="input-group">
                                <input type="search" class="form-control" placeholder="Brand">
                                <div class="input-group-append">
                                    <button class="btn btn-dark" type="submit">&dtrif;</button>
                                </div>
                            </div><br>
                            <div class="input-group">
                                <input type="search" class="form-control" placeholder="Category">
                                <div class="input-group-append">
                                    <button class="btn btn-dark" type="submit">&dtrif;</button>
                                </div>
                            </div><br>
                            <button type="button" class="btn btn-dark btn-block">&#128269;Search</button><br><br>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8" style="height: 700px">
                    <div id="demo" class="carousel slide" data-ride="carousel">
                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/h1.jpg" width="100%" alt="Los Angeles">
                            </div>
                            <div class="carousel-item">
                                <img src="images/h2.jpg" width="100%" alt="Chicago">
                            </div>
                            <div class="carousel-item">
                                <img src="images/h3.jpg" width="100%" alt="New York">
                                <div class="carousel-caption">
                                    <h1 style="color: red">SALE</h1><br>
                                    <h1 style="color:blue">20% OFF on purchase above INR20000</h1>
                                </div>
                            </div>
                        </div>
                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-8 ">
                    <h4 class="float-left">Deals of the Day</h4><br><br>
                    <div class="row" style="height: 1500px">
                        <div class="col">
                            <img src="images/kurti.jpg" style="width: 230px; height: 220px">
                            <button type="button" class="btn btn-link" style="color: blue">See More</button>
                        </div>
                        <div class="col">
                            <img src="images/jeans.jpg" style="width: 230px; height: 220px">
                            <button type="button" class="btn btn-link" style="color: blue">See More</button>
                        </div>
                        <div class="col">
                            <img src="images/tshirt.jpg" style="width: 230px; height: 220px">
                            <button type="button" class="btn btn-link" style="color: blue">See More</button>
                        </div>
                        <div class="col">
                            <img src="images/men.jpg" style="width: 230px; height: 220px">
                            <button type="button" class="btn btn-link" style="color: blue">See More</button>
                        </div>
                        <div class="col">
                            <img src="images/shoes.jpg" style="width: 230px; height: 220px">
                            <button type="button" class="btn btn-link" style="color: blue">See More</button>
                        </div>
                        <div class="col">
                            <img src="images/hood.jpg" style="width: 230px; height: 220px">
                            <button type="button" class="btn btn-link" style="color: blue">See More</button>
                        </div>
                        <div class="col">
                            <img src="images/kid1.jpg" style="width: 230px; height: 220px">
                            <button type="button" class="btn btn-link" style="color: blue">See More</button>
                        </div>
                        <div class="col">
                            <img src="images/kid2.jpg" style="width: 230px; height: 220px">
                            <button type="button" class="btn btn-link" style="color: blue">See More</button>
                        </div>
                        <div class="col">
                            <img src="images/jacket.jpg" style="width: 230px; height: 220px">
                            <button type="button" class="btn btn-link" style="color: blue">See More</button>
                        </div>
                        <div class="col">
                            <img src="images/iphone.jpg" style="width: 230px; height: 220px">
                            <button type="button" class="btn btn-link" style="color: blue">See More</button>
                        </div>
                        <div class="col">
                            <img src="images/iron.jpg" style="width: 230px; height: 220px">
                            <button type="button" class="btn btn-link" style="color: blue">See More</button>
                        </div>
                        <div class="col">
                            <img src="images/tv.jpg" style="width: 230px; height: 220px">
                            <button type="button" class="btn btn-link" style="color: blue">See More</button>
                        </div>
                        <div class="col">
                            <img src="images/cookware.jpg" style="width: 230px; height: 220px">
                            <button type="button" class="btn btn-link" style="color: blue">See More</button>
                        </div>
                        <div class="col">
                            <img src="images/soap.jpg" style="width: 230px; height: 220px">
                            <button type="button" class="btn btn-link" style="color: blue">See More</button>
                        </div>
                        <div class="col">
                            <img src="images/food.png" style="width: 230px; height: 220px">
                            <button type="button" class="btn btn-link" style="color: blue">See More</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4" style="background:lightpink">
                    <h3 style="margin-top: 20px">Most Reviewed Items</h3>
                    <div class=" row" style="margin-top: 60px">
                        <div class="col-sm-6">
                            <figure>
                                <img src="images/img1.jpg" class="rounded-circle" width="200px" ; height="200px">
                                <figcaption class="font-weight-bold" style="margin-left: 50px">FOOTWEAR</figcaption>
                            </figure>
                        </div>
                        <div class="col-sm-6">
                            <a href="#" class="link float-right">Product Description</a><br>
                            <h4 class="font-weight-bolder float-right" style="text-decoration: line-through; ">Rs
                                1500.00</h4><br>
                            <p class="font-weight-bolder float-right" style="color: red; margin-left: 30px">34% OFF
                            </p>
                            <h4 class="font-weight-bolder float-right">Rs 999.00</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <figure>
                                <img src="images/img2.jpg" class="rounded-circle" width="200px" ; height="200px">
                                <figcaption class="font-weight-bold" style="margin-left: 50px">WATCHES</figcaption>
                            </figure>
                        </div>
                        <div class="col-sm-6">
                            <a href="#" class="link float-right">Product Description</a><br>
                            <h4 class="font-weight-bolder float-right" style="text-decoration: line-through; ">Rs
                                1500.00</h4><br>
                            <p class="font-weight-bolder float-right" style="color: red; margin-left: 30px">34% OFF
                            </p>
                            <h4 class="font-weight-bolder float-right">Rs 999.00</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <figure>
                                <img src="images/img3.jpg" class="rounded-circle" width="200px" ; height="200px">
                                <figcaption class="font-weight-bold" style="margin-left: 50px">HOUSEHOLD ITEMS
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-sm-6">
                            <a href="#" class="link float-right">Product Description</a><br>
                            <h4 class="font-weight-bolder float-right" style="text-decoration: line-through; ">Rs
                                1500.00</h4><br>
                            <p class="font-weight-bolder float-right" style="color: red; margin-left: 30px">34% OFF
                            </p>
                            <h4 class="font-weight-bolder float-right">Rs 999.00</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <figure>
                                <img src="images/img4.jpg" class="rounded-circle" width="200px" ; height="200px">
                                <figcaption class="font-weight-bold" style="margin-left: 50px">ELECTRONICS
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-sm-6">
                            <a href="#" class="link float-right">Product Description</a><br>
                            <h4 class="font-weight-bolder float-right" style="text-decoration: line-through; ">Rs
                                1500.00</h4><br>
                            <p class="font-weight-bolder float-right" style="color: red; margin-left: 30px">34% OFF
                            </p>
                            <h4 class="font-weight-bolder float-right">Rs 999.00</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <figure>
                                <img src="images/img5.jpg" class="rounded-circle" width="200px" ; height="200px">
                                <figcaption class="font-weight-bold" style="margin-left: 50px">BOOKSHELF
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-sm-6">
                            <a href="#" class="link float-right">Product Description</a><br>
                            <h4 class="font-weight-bolder float-right" style="text-decoration: line-through; ">Rs
                                1500.00</h4><br>
                            <p class="font-weight-bolder float-right" style="color: red; margin-left: 30px">34% OFF
                            </p>
                            <h4 class="font-weight-bolder float-right">Rs 999.00</h4>
                        </div>
                    </div>
                </div>
            </div>
    </main>
    <footer>
        <div class="container-fluid">
            <div class="row" style="height: 350px; margin-top: 30px; background: lightgreen;">
                <div class="col-sm-3" style="margin-top: 30px;">
                    <h4 class="font-weight: bolder" style="margin-bottom: 30px">Payment Methods</h4>
                    <a href="#"> <i class="fa fa-cc-mastercard" style="font-size: 38px; color:blue"></i></a><br>
                    <a href="#"><i class="fa fa-cc-paypal" style="font-size: 38px; color:blue"></i></a><br>
                    <a href="#"> <i class="fa fa-cc-visa" style="font-size: 38px; color:blue"></i></a><br>
                    <a href="#"> <i class="fa fa-cc-discover" style="font-size: 38px; color:blue"></i></a><br>

                </div>
                <div class="col-sm-3" style="margin-top: 30px;">
                    <h4 class="font-weight: bolder" style="margin-bottom: 30px">Quick Links</h4>
                    <button type="button" class="btn btn-link" style="color: darkblue">Help</button><br>
                    <button type="button" class="btn btn-link" style="color: darkblue">Shipping Policy</button><br>
                    <button type="button" class="btn btn-link" style="color: darkblue">Cancellation &
                        Returns</button><br>
                    <button type="button" class="btn btn-link" style="color: darkblue">FAQ</button><br>
                    <button type="button" class="btn btn-link" style="color: darkblue">Privacy Policy</button><br>
                    <button type="button" class="btn btn-link" style="color: darkblue">Disclamer</button><br>
                </div>
                <div class="col-sm-3" style="margin-top: 30px;">
                    <h4 class="font-weight: bolder" style="margin-bottom: 30px">Lets be social</h4>
                    <a href="#"><img src="images/facebook (1).png" style="width: 30px; height: 30px;"></a>
                    <a href="#"><img src="images/tumblr.png" style="width: 30px; margin-left: 15px; height: 30px;"></a>
                    <a href="#"><img src="images/google-plus.png"
                            style="width: 30px; margin-left: 15px; height: 30px;"></a>
                </div>
                <div class="col-sm-3" style="margin-top: 30px;">
                    <h4 class="font-weight: bolder" style="margin-bottom: 30px">Contact us</h4>
                    <a href="#"><img src="images/email-black-envelope-back.png" style="width: 30px; height: 30px;"></a>
                    <a href="mailto: gocart@gmail.com"
                        style="text-decoration: none; margin-left: 10px; color: darkblue">gocart@gmail.com</a><br>
                    <a href="#"><img src="images/phone-volume.png" style="width: 30px; height: 30px;"></a>
                    <a href="tel:180000112"
                        style="text-decoration: none;  margin-left: 10px;color: darkblue">1800001122</a>
                </div>
            </div>


        </div>
        <div class="container-fluid" style=" background: gray">

            <p class="font-weight-bolder" style="margin-left: 550px; margin-bottom: 0%;">&copy; 2007-2014 Company.com
            </p>
        </div>

    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="bootstrap-4.3.1/bootstrap-4.3.1/dist/js/bootstrap.min.js"></script>
</body>

</html>
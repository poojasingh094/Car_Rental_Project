<?php
include ('includes/header.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Car Rental Service</title>
        <link rel="stylesheet" href="css/index.css">
        <style>
        .content-header {
            background: #fff;
            padding: 10px 0;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .header a {
            color: #333;
            text-decoration: none;
            padding: 10px;
            font-weight: bold;
        }
        .btn-1 {
            background-color: #3457D5;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
        }
        .btn-1:hover {
            background-color: #2a3b8f;
        }
        @media (max-width: 768px) {
    .text-content h1 {
        margin-top: 60px; /
    }
}
        @media (max-width: 768px) {
            .header {
                display: none;
            }
            .mobile-nav {
                display: flex;
                justify-content: space-between;
            }
        }
        .mobile-nav {
            display: none;
            justify-content: space-between;
        }
        .mobile-nav a {
            color: #333;
            text-decoration: none;
            padding: 10px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container-xxl">
        <!--Header-->
        <div class="content-header">
            <div class="row align-items-center">
                <div class="col-sm-3">
                    <h1 class="m-0">Car<span>Lease</span></h1>
                </div>
                <div class="col-sm-6 d-flex justify-content-between flex-wrap header">
                    <a href="#services" class="header">Services</a>
                    <a href="#products" class="header">Products</a>
                    <a href="#reviews" class="header">Reviews</a>
                    <a href="#about" class="header">Contact Us</a>
                </div>
                <div class="col-sm-3 d-flex justify-content-end">
                    <a href="authentication/signup.php" name="login_btn" class="btn-1">Sign Up</a>
                </div>
            </div>
        </div>
        <div class="mobile-nav">
            <a href="#services">Services</a>
            <a href="#products">Products</a>
            <a href="#reviews">Reviews</a>
            <a href="#about">Contact Us</a>
        </div>
        <!-- content-header -->

            <!--Hero Section -->
            <section>
                <div class="row my-row">
                    <div class="col-sm-4 text-content">
                        <h1>Are you looking to rent a car? Your journey to the perfect rental starts here!</h1>
                        <p> Discover the perfect car for your needs with our easy-to-use rental service. From luxury vehicles to budget-friendly options, 
                        find the latest models and enjoy hassle-free rentals.</p>
                        <div class="btn-container">
                            <h2>Want to List your Car for Rent?<a href="authentication/loginagency.php" class="btn-2">Login</a></h2>
                    </div>
                    <h2>Want to Rent A Car?<a href="authentication/rentlogin.php" class="btn-2">Login</a></h2>
                </div>
                    <div class="col-sm-4">
                        <img src="images/hy.jpg" alt="" class="image">
                    </div>
                </div>
            </section>

            <!--How it Works-->
            <section class="howit" id="services">
                <div class="heading">
                    <span>How it Works</span>
                    <h1>Rent with 3 easy steps</h1>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="card">
                                <i class="nav-icon fa-solid fa-location-dot"></i>
                                <h2>Choose A Location</h2>
                                <p>Select your preferred rental location from our extensive list of options to find the most convenient pick-up spot.</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                                <i class="nav-icon fa-solid fa-calendar-alt"></i>
                                <h2>Pick-Up Date</h2>
                                <p>Specify your desired pick-up date and time to ensure the car is ready when you need it.</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                                <i class="nav-icon fa-solid fa-star"></i>
                                <h2>Book A Car</h2>
                                <p>Browse our selection, choose your ideal vehicle, and finalize your booking with just a few simple clicks.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--Products-->
            <section class="products" id="products">
    <div class="container">
        <div class="heading">
            <span>Services Offered</span>
            <h1>Explore Our Top Renting Cars</h1>
        </div>
        <div class="row">
            <div class="col-sm-4 mb-4">
                <div class="card">
                    <div class="img">
                        <img src="images/car2.jpg" alt="">
                    </div>
                    <h3>Toyota Corolla</h3>
                    <h4>ABC1234</h4>
                    <p>Seats: 5</p>
                    <h2>$250<span1>/month</span1></h2>
                    <a href="authentication/rentlogin.php" class="btn">Rent Now</a>
                </div>
            </div>
            <div class="col-sm-4 mb-4">
                <div class="card">
                    <div class="img">
                        <img src="images/car5.jpg" alt="">
                    </div>
                    <h3>BMW X5</h3>
                    <h4>DEF5678</h4>
                    <p>Seats: 5</p>
                    <h2>$300<span1>/month</span1></h2>
                    <a href="authentication/rentlogin.php" class="btn">Rent Now</a>
                </div>
            </div>
            <div class="col-sm-4 mb-4">
                <div class="card">
                    <div class="img">
                        <img src="images/car6.jpg" alt="">
                    </div>
                    <h3>Ford Mustang</h3>
                    <h4>GHI9012</h4>
                    <p>Seats: 4</p>
                    <h2>$350<span1>/month</span1></h2>
                    <a href="authentication/rentlogin.php" class="btn">Rent Now</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 mb-4">
                <div class="card">
                    <div class="img">
                        <img src="images/car7.jpg" alt="">
                    </div>
                    <h3>Honda Civic</h3>
                    <h4>JKL3456</h4>
                    <p>Seats: 5</p>
                    <h2>$270<span1>/month</span1></h2>
                    <a href="authentication/rentlogin.php" class="btn">Rent Now</a>
                </div>
            </div>
            <div class="col-sm-4 mb-4">
                <div class="card">
                    <div class="img">
                        <img src="images/car8.jpg" alt="">
                    </div>
                    <h3>Audi A4</h3>
                    <h4>MNO7890</h4>
                    <p>Seats: 5</p>
                    <h2>$320<span1>/month</span1></h2>
                    <a href="authentication/rentlogin.php" class="btn">Rent Now</a>
                </div>
            </div>
            <div class="col-sm-4 mb-4">
                <div class="card">
                    <div class="img">
                        <img src="images/car9.jpg" alt="">
                    </div>
                    <h3>Chevrolet Malibu</h3>
                    <h4>PQR1234</h4>
                    <p>Seats: 5</p>
                    <h2>$290<span1>/month</span1></h2>
                    <a href="authentication/rentlogin.php" class="btn">Rent Now</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="reviews" id="reviews">
    <div class="heading">
        <span>Reviews</span>
        <h1>What Our Customers Say</h1>
    </div>
    <div class="review-container">
        <div class="card">
            <div class="img1">
                <img src="images/girl.jpg" alt="">
            </div>
            <h2>Name 1</h2>
            <div class="stars">
                <i class="nav-icon fa-solid fa-star"></i>
                <i class="nav-icon fa-solid fa-star"></i>
                <i class="nav-icon fa-solid fa-star"></i>
                <i class="nav-icon fa-solid fa-star"></i>
            </div>
            <p>CarLease made renting a car so easy! The booking process was smooth, and the vehicle was in excellent condition. Highly recommend!</p>
        </div>

        <div class="card">
            <div class="img1">
                <img src="images/boy.jpg" alt="">
            </div>
            <h2>Name 2</h2>
            <div class="stars">
                <i class="nav-icon fa-solid fa-star"></i>
                <i class="nav-icon fa-solid fa-star"></i>
                <i class="nav-icon fa-solid fa-star"></i>
                <i class="nav-icon fa-solid fa-star"></i>
            </div>
            <p>Fantastic experience with CarLease. The car was clean and well-maintained, and customer service was top-notch. Will definitely use them again!</p>
        </div>

        <div class="card">
            <div class="img1">
                <img src="images/man.jpg" alt="">
            </div>
            <h2>Name 3</h2>
            <div class="stars">
                <i class="nav-icon fa-solid fa-star"></i>
                <i class="nav-icon fa-solid fa-star"></i>
                <i class="nav-icon fa-solid fa-star"></i>
                <i class="nav-icon fa-solid fa-star"></i>
            </div>
            <p>I had a great experience with CarLease. The car was exactly as described, and the rental process was straightforward. Great value for the price!</p>
        </div>

        <div class="card">
            <div class="img1">
                <img src="images/boy1.jpg" alt="">
            </div>
            <h2>Name 4</h2>
            <div class="stars">
                <i class="nav-icon fa-solid fa-star"></i>
                <i class="nav-icon fa-solid fa-star"></i>
                <i class="nav-icon fa-solid fa-star"></i>
                <i class="nav-icon fa-solid fa-star"></i>
            </div>
            <p>CarLease exceeded my expectations. Quick and hassle-free rental with friendly staff. The car was perfect for my trip. Will be my go-to for future rentals!</p>
        </div>
    </div>
</section>
<!-- About Us-->
<section class="about py-5" id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="about_text">
                    <h3>About Us</h3>
                    <p>Welcome to CarLease, your trusted partner in car rentals! We pride ourselves on offering a seamless and reliable rental experience, tailored to meet your travel needs. At CarLease, we provide a diverse fleet of high-quality vehicles, from economical models to luxury options, ensuring you find the perfect car for any occasion.
                    Our mission is simple: to deliver exceptional service and unbeatable convenience. </p>
                    <p>At CarLease, we value transparency, integrity, and customer satisfaction. Explore our extensive selection, enjoy competitive rates, and experience the joy of hassle-free car rentals. Drive with confidence and let us help you make every journey memorable.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="contact-info">
                    <h4>Have Any Queries?</h4>
                    <p>Contact us for more information:</p>
                    <p><strong>Email:</strong> support@example.com</p>
                    <p><strong>Phone:</strong> +1-234-567-890</p>
                    <p><strong>Address:</strong> 123 Main Street, City, Country</p>
                    <a href="#" class="btn btn-primary">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</section>
        </div><!-- container-xxl -->
        <script>
        document.querySelectorAll('.header a, .mobile-nav a').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        window.addEventListener('scroll', () => {
            const sections = document.querySelectorAll('section');
            let current = '';

            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                if (pageYOffset >= sectionTop - 50 && pageYOffset < sectionTop + sectionHeight) {
                    current = section.getAttribute('id');
                }
            });

            document.querySelectorAll('.header a, .mobile-nav a').forEach(anchor => {
                anchor.classList.remove('active');
                if (anchor.getAttribute('href') === `#${current}`) {
                    anchor.classList.add('active');
                }
            });
        });
    </script>
    </body>
</html>


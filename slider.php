<?php include 'data.php'; ?> <!-- Include the data.php file -->
<div class="hero_area">
<section class="slider_section">
    <div class="dot_design">
        <img src="images/dots.png" alt="">
    </div>
    <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <?php foreach ($sliderItems as $index => $item): ?>
                <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>" style="background-color: <?php echo $item['background_color']; ?>;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="detail-box">
                                    <div class="play_btn">
                                        <button>
                                            <i class="fa fa-play" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                    <h1>
                                        <?php echo $item['title']; ?> <br>
                                        <span><?php echo $item['subtitle']; ?></span>
                                    </h1>
                                    <p>
                                        <?php echo $item['description']; ?>
                                    </p>
                                    <a href="<?php echo $item['link']; ?>">Contact Us</a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="img-box">
                                    <img src="<?php echo $item['image']; ?>" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="carousel_btn-box">
            <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
                <img src="images/prev.png" alt="">
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
                <img src="images/next.png" alt="">
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
<!-- jQery -->
<script src="js/jquery-3.4.1.min.js"></script>
<!-- bootstrap js -->
<script src="js/bootstrap.js"></script>
<!-- nice select -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js" integrity="sha256-Zr3vByTlMGQhvMfgkQ5BtWRSKBGa2QlspKYJnkjZTmo=" crossorigin="anonymous"></script>
<!-- owl slider -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<!-- datepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
<!-- custom js -->
<script src="js/custom.js"></script>


</section>
</div>
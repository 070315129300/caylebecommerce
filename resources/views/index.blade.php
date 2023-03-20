@include('css')
@include('navbar')


<section id="heros" style="background-image: url('images/image5.jpg');">
    <h1>Trade-in-offer</h1>
    <h2 style="color: orange">Super value deals</h2>
    <h1>on all products</h1>
    <p style="color: white">Save more with coupons $ up to 70% off!</p>
    <button class="btn btn-outline-dark">shop now</button>
</section>

<section id="featuress" class="section-p1">
    @foreach( $user as $users)
    <div class="feat-box">
        <img  height="120px" src="freeshippingimage/{{$users->image}}" width="120px" alt="">
        <h6>free shipping</h6>
        <h6>{{$users->productname}}</h6>
    </div>
    @endforeach
    <div class="feat-box">
        <img src="images/hero_3.jpg" height="120px" width="120px" alt="">
        <h6>free shipping</h6>

    </div>


</section>

<section id="product11" class="section-p1">
    <h2>Featured Products</h2>
    <p>Summer Collection New Morden Design</p>
    <div class="pro-container">
        <div class="pro">
            <img src="images/image3.jpg" height="350px" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>product name</h5>
                <h4>amount $</h4>
            </div>
            <a href="#"><span class="icon-shopping-cart cart"></span></a>
        </div>

        <div class="pro">
            <img src="images/image8.jpg" height="350px" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>product name</h5>
                <h4>amount $</h4>
            </div>
            <a href="#"><span class="icon-shopping-cart cart"></span></a>
        </div>
        <div class="pro">
            <img src="images/image9.jpg" height="350px" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>product name</h5>
                <h4>amount $</h4>
            </div>
            <a href="#"><span class="icon-shopping-cart cart"></span></a>
        </div>
        <div class="pro">
            <img src="images/image11.jpg" height="350px" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>product name</h5>
                <h4>amount $</h4>
            </div>
            <a href="#"><span class="icon-shopping-cart cart"></span></a>
        </div>
        <div class="pro">
            <img src="images/image12.jpg" height="350px" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>product name</h5>
                <h4>amount $</h4>
            </div>
            <a href="#"><span class="icon-shopping-cart cart"></span></a>
        </div>
        <div class="pro">
            <img src="images/image13.jpg" height="350px" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>product name</h5>
                <h4>amount $</h4>
            </div>
            <a href="#"><span class="icon-shopping-cart cart"></span></a>
        </div>
        <div class="pro">
            <img src="images/image14.jpg" height="350px" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>product name</h5>
                <h4>amount $</h4>
            </div>
            <a href="#"><span class="icon-shopping-cart cart"></span></a>
        </div>
        <div class="pro">
            <img src="images/image15.jpg" height="350px" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>product name</h5>
                <h4>amount $</h4>
            </div>
            <a href="#"><span class="icon-shopping-cart cart"></span></a>
        </div>
        <div class="pro">
            <img src="images/images16.jpg" height="350px" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>product name</h5>
                <h4>amount $</h4>
            </div>
            <a href="#"><span class="icon-shopping-cart cart"></span></a>
        </div>
        <div class="pro">
            <img src="images/image17.jpg" height="350px" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>product name</h5>
                <h4>amount $</h4>
            </div>
            <a href="#"><span class="icon-shopping-cart cart"></span></a>
        </div>
        <div class="pro">
            <img src="images/image18.jpg" height="350px" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>product name</h5>
                <h4>amount $</h4>
            </div>
            <a href="#"><span class="icon-shopping-cart cart"></span></a>
        </div>
        <div class="pro">
            <img src="images/image19.jpg" height="350px" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>product name</h5>
                <h4>amount $</h4>
            </div>
            <a href="#"><span class="icon-shopping-cart cart"></span></a>
        </div>
    </div>

</section>

<section id="banners" class = 'section-m1' style="background-image: url('images/image1.png');">
    <h2>Up to <span>70%  off</span> All Perfumes & Cologue</h2>
    <button class="btn btn-warning"><a href="#">Explore More</a></button>
</section>

<section id="product11" class="section-p1">
    <h2>New Arrival</h2>
    <p>Latest Collection Morden Design</p>
    <div class="pro-container">
        <div class="pro">
            <img src="images/image9.jpg" height="350px" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>product name</h5>
                <h4>amount $</h4>
            </div>
            <a href="#"><span class="icon-shopping-cart cart"></span></a>
        </div>

        <div class="pro">
            <img src="images/image11.jpg" height="350px" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>product name</h5>
                <h4>amount $</h4>
            </div>
            <a href="#"><span class="icon-shopping-cart cart"></span></a>
        </div>
        <div class="pro">
            <img src="images/image12.jpg" height="350px" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>product name</h5>
                <h4>amount $</h4>
            </div>
            <a href="#"><span class="icon-shopping-cart cart"></span></a>
        </div>
        <div class="pro">
            <img src="images/image13.jpg" height="350px" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>product name</h5>
                <h4>amount $</h4>
            </div>
            <a href="#"><span class="icon-shopping-cart cart"></span></a>
        </div>
        <div class="pro">
            <img src="images/image14.jpg" height="350px"  alt="">
            <div class="des">
                <span>adidas</span>
                <h5>product name</h5>
                <h4>amount $</h4>
            </div>
            <a href="#"><span class="icon-shopping-cart cart"></span></a>
        </div>
        <div class="pro">
            <img src="images/image15.jpg" height="350px" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>product name</h5>
                <h4>amount $</h4>
            </div>
            <a href="#"><span class="icon-shopping-cart cart"></span></a>
        </div>
        <div class="pro">
            <img src="images/image17.jpg" height="350px" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>product name</h5>
                <h4>amount $</h4>
            </div>
            <a href="#"><span class="icon-shopping-cart cart"></span></a>
        </div>
        <div class="pro">
            <img src="images/image18.jpg" height="350px" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>product name</h5>
                <h4>amount $</h4>
            </div>
            <a href="#"><span class="icon-shopping-cart cart"></span></a>
        </div>
        <div class="pro">
            <img src="images/image19.jpg" height="350px" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>product name</h5>
                <h4>amount $</h4>
            </div>
            <a href="#"><span class="icon-shopping-cart cart"></span></a>
        </div>
        <div class="pro">
            <img src="images/image20.jpg" height="350px" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>product name</h5>
                <h4>amount $</h4>
            </div>
            <a href="#"><span class="icon-shopping-cart cart"></span></a>
        </div>
        <div class="pro">
            <img src="images/images7.jpg" height="350px" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>product name</h5>
                <h4>amount $</h4>
            </div>
            <a href="#"><span class="icon-shopping-cart cart"></span></a>
        </div>
        <div class="pro">
            <img src="images/images16.jpg" height="350px" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>product name</h5>
                <h4>amount $</h4>
            </div>
            <a href="#"><span class="icon-shopping-cart cart"></span></a>
        </div>
    </div>

</section>

<section id="sm-banners" class="section-p1" >
    <div class="banner-box" style="background-image: url('images/image22.jpg');">
        <h4>Crazy deals</h4>
        <h2>buy 1 get 1 free</h2>
        <span style="margin: 0; padding: 0" >The best classic dress is on sale at demmstore</span>
        <button class="btn btn-outline-secondary" >learn more</button>
    </div>
    <div class="banner-box " id="banner-box2" style="background-image: url('images/image6.jpg');">
        <h4>Crazy deals</h4>
        <h2>Smell good, it your right</h2>
        <span style="margin: 0; padding: 0" >The best perfume deal at demmstore</span>
        <button class="btn btn-outline-secondary">learn more</button>
    </div>
</section>


<section id="banner3">
    <div class="banner-box" style="background-image: url('images/image23.jpg');">
        <h4>Smell good, it your right</h4>
        <p>raining collection</p>
    </div>
    <div class="banner-box" style="background-image: url('images/image24.jpg');">
        <h4 style="margin: 0; padding: 0 " >Smell good, it your right</h4>
        <p style="margin: 0; padding: 0" >raining  <span style="color: orange"> collection</span></p>
    </div>
    <div class="banner-box" style="background-image: url('images/image2.jpg');">
        <h4>Smell good, it your right</h4>
        <p>raining <span style="color: gold"> collection</span></p>
    </div>
</section>



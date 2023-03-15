@include('css')
@include('navbar')

<section id="prodetails" class="section-p1">
    <div class="single-pro-image ">
        <img src="images/image12.jpg" width="100%" height="500px" id="mainimg" alt="">

        <div class="small-img-group mt-2">
            <div class="small-img-col ">
                <img src="images/image12.jpg" width="100%" height="200px" class="small-img" alt="">
            </div>
            <div class="small-img-col">
                <img src="images/image20.jpg" width="100%" height="200px"class="small-img" alt="">
            </div>
            <div class="small-img-col">
                <img src="images/image19.jpg" width="100%" height="200px"class="small-img" alt="">
            </div>
            <div class="small-img-col">
                <img src="images/image14.jpg" width="100%" height="200px" class="small-img" alt="">
            </div>
        </div>
    </div>

    <div class="single-pro-details">
        <h6>Home / T-shirt</h6>
        <h4>Men's Fashion T Shirt</h4>
        <h2>$139.00</h2>
        <select name="" id="">
            <option value="">Select Size</option>
            <option value="">xxl</option>
            <option value="">xl</option>
            <option value="">l</option>
            <option value="">m</option>
            <option value="">s</option>
        </select>
        <input type="number" value="1">
        <button class="btn btn-outline-warning">Add to cart</button>
        <h4>Product Details</h4>
        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        Cumque laborum nobis officia recusandae voluptatem. Commodi i
        psum tempora ut. Architecto doloremque ducimus est hic iusto molestiae,
        nisi nobis odio porro unde!
    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        Aliquam, dolorum ducimus eveniet labore minima nihil quod
        reprehenderit vero. Accusamus aliquam asperiores autem et
        in, iure molestiae neque quasi! Nobis, quasi!
    </span>
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

    </div>

</section>

//footer

<script>
    var mainimg = document.getElementById('mainimg');
    var smallimg = document.getElementsByClassName('small-img');

    smallimg[0].onclick = function(){
        mainimg.src = smallimg[0].src;
    }
    smallimg[1].onclick = function(){
        mainimg.src = smallimg[1].src;
    }
    smallimg[2].onclick = function(){
        mainimg.src = smallimg[2].src;
    }
    smallimg[3].onclick = function(){
        mainimg.src = smallimg[3].src;
    }

</script>


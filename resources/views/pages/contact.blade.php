@include('css')
@include('navbar')

<section id="page-header" style="background-image: url('images/wall_cover.png');">

    <h2 style="color: orange">Super value deals</h2>

    <p >Save more with coupons $ up to 70% off!</p>

</section>

<section id="contact-details" class="section-p1 mb-5">
    <div class="details">
        <span>Get In Touch</span>
        <h2>Visit one Of our agency location or contact us today</h2>
        <h3>Head office</h3>
        <div>
            <li>
          <span class="icon-map"></span>
            <p>Sagamu Road</p>
            </li>

            <li>
                <span class="icon-envelope"></span>
                <p>contact@gmail.com</p>
            </li>

            <li>
                <span class="icon-phone"></span>
                <p>07031512930</p>
            </li>
            <li>
                <span class="icon-clock-o"></span>
                <p>Monday to Saturday 9:00AM t0 6:00PM</p>
            </li>
        </div>
    </div>
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.
        8476155219!2d3.377233614718392!3d6.540919395269077!2m3!1f0!2f0!3f0!3m2!
        1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8d0a06431a91%3A0xc5329bb2ff74799a!2s
        57%20Popoola%20St%2C%20Bariga%20102216%2C%20Lagos!5e0!3m2!1sen!2sng!4v1
        679306464618!5m2!1sen!2sng" width="600" height="450" style="border:0;"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>

<section id="form-details" class="mt-5">
    <form action="insertcontact" method="POST" enctype="multipart/form-data">
        <span> LEAVE A MESSAGE</span>
        <h2>We love to hear from you</h2>
        <input type="text" placeholder="Your Name" name="name">
        <input type="text" placeholder="Email" name="email">
        <input type="text" placeholder="Subject" name="subject">
        <textarea name="message" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
        <button class="btn btn-primary">Submit</button>
    </form>
</section>












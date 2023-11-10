<!DOCTYPE html>
<html lang="en">
<head>
    <?php include './php/views/header-content.php' ?>
    <title>contact us | Paradigm</title>
    <style>
        
    </style>
</head>
<body>
    
    <!-- nav section -->
    <?php include './php/views/nav-bar.php' ?>

    <!-- map section -->
    <section id="map">
        <div class="map container">
            <div class="map-header header">
                <h3>Locate us anytime.</h3>
                <div class="map-icon">
                    <img src="" alt="map-icon">
                </div>
            </div>

            <div class="map-gps">

            </div>
        </div>
    </section>

    <!-- contact details & form section -->
    <section id="contact">
        <div class="contact container">
            <!-- contact header -->
            <div class="contacts header">
                <h3>Is there anything you'll like us to know?</h3>
            </div>

            <!-- contact details & form area -->
            <div class="contacts-details-form">
                <div class="contact-details">
                    <div class="address">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur voluptatum repudiandae sint?
                    </div>
                    <div class="phone">
                        <a href="tel:+2349138188338">+2349138188338</a>
                        <a href="tel:+2349138188338">+2349138188338</a>
                    </div>
                    <div class="email">
                        <a href="mailto:crownedx.creativ@gmail.com">
                            crownedx.creativ@gmail.com
                        </a>
                    </div>
                    <div class="socials">
                        <a href="https://facebook.com">
                            <span class="facebook">F</span>
                        </a>
                        <a href="https://instagram.com">
                            <span class="instagram">i</span>
                        </a>
                        <a href="https://twitter.com">
                            <span class="twitter">X</span>
                        </a>
                        <a href="https://linkedin.com">
                            <span class="linkedin">in</span>
                        </a>
                    </div>
                </div>
                <div class="contact-form">
                    <form action="">
                        <div class="field">
                            <label for="email">Your email: </label>
                            <input type="email" name="email" id="email">
                        </div>

                        <div class="field">
                            <label for="message">What's your message?</label>
                            <textarea name="message" id="message" cols="30" rows="10"> 
                            </textarea>
                        </div>

                        <button>Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- footer section -->
    <?php include './php/views/footer.php' ?>
    
</body>
</html>



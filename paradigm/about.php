<!DOCTYPE html>
<html lang="en">
<head>
    <?php include './php/views/header-content.php' ?>
    <title>about us | Paradigm</title>
    <style>
        .about.container{
            flex-direction: column;
            background-color: #390b23;
            /* background-color: #353535; */
            color: #fff;
        }

        .about .about-image-section {
            width: 70%;
            height: 100%;
            background-color: #fff;
        }

        .about .about-header{
            display: flex;
            width: 100%;
            justify-content: start;
            font-size: 3rem;
        }
        
        .about .about-header h2{
            font-weight: 400;

        }
    </style>
</head>
<body>
    
    <!-- nav section -->
    <?php include './php/views/nav-bar.php' ?>

    <!-- about section -->
    <section id="about">
        <div class="about container">
            <!-- about header section -->
            <div class="about-header header">
                <h2>
                    About Us.
                </h2>
            </div>
            <!-- about image section -->
            <div class="about-image-section">
                <img src="./img/study-girl.png" alt="about-img" id="about-img">
            </div>

            <!-- about text section -->
            <div class="about-text-section">
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vero ab vel eaque qui consequatur officiis
                    adipisci amet delectus exercitationem! Provident iure ratione fugit blanditiis. Atque asperiores
                    fugiat dolor quos rem.
                </p>
            </div>
        </div>
    </section>

    <!-- mvg section -->
    <section id="mvg">
        <div class="mvg container">
            <div class="mission">
                <div class="mission-icon icon">
                    <img src="" alt="" id="icon-img">
                </div>

                <div class="mission-text text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam iste cum veniam.
                </div>
            </div>

            <div class="vision">
                <div class="vision-icon icon">
                    <img src="" alt="" id="icon-img">
                </div>

                <div class="vision-text text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam iste cum veniam.
                </div>
            </div>

            <div class="goal">
                <div class="goal-icon icon">
                    <img src="" alt="" id="icon-img">
                </div>

                <div class="goal-text text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam iste cum veniam.
                </div>
            </div>
        </div>
    </section>
    <!-- mvg section end-->

    <!-- footer section -->
    <?php include './php/views/footer.php' ?>
    
</body>
</html>



<!DOCTYPE html>
<html lang="en">
<head>
    <?php include './php/views/header-content.php' ?>
    <title>courses | Paradigm</title>
    <style>
        div.main-courses.container{
            flex-direction: column;
            gap: 100px;
        }

        .course-img{
            background-color: rgba(200, 200, 200, .2);
            /* z-index: -1; */
        }
        .main-courses .header{
            position: relative;
        }

        .float-circle {
            position: absolute;
            top: -30px;
            left: -20px;
            width: 100px;
            height: 100px;
            border-radius: 100%;
            background-color: #b364a8;
            display: flex;
            mix-blend-mode: color-dodge;
            
            /* z-index: -1; */
        }
        
        .main-courses .header h2{
            font-weight: 400;
            font-size: 3.3rem;
        }

        .general-dept-cont{
            display: flex;
            gap: 80px;
            flex-direction: column;
        }

        .courses-cont{
            gap: 50px;
        }
    </style>
</head>
<body>
    
    <!-- nav section -->
    <?php include './php/views/nav-bar.php' ?>

    <!-- courses section -->
    <section id="course">
        <div class="main-courses container">
            <div class="main-courses header">
                <div class="float-circle"></div>

                <h2>
                    Take a <span class="special">Diploma</span> course, Today<span class="special">...</span> 
                </h2>
            </div>

            <div class="general-dept-cont">
                <!-- Professional department -->
                <div id="professional" class="professional dept-item">
                    <div class="dept-heading">
                        <div class="dept-heading-image">
                            <img src="./img/department/professional-1'1.png" alt="professional-image" id="professional-image">
                        </div>
                        <div class="dept-heading-text">   
                            <h4>Department of Professional Studies</h4>
                            <p>
                            This department focuses on making you an almost indispensable personell that is needed by every organization
                            </p>
                        </div>
                    </div>

                    <div class="courses-cont">
                        <div class="basic certificate">
                            <div class="certificate-header">
                                <h4>Basic</h4>
                            </div>

                            <div class="basic-courses courses-list">
                                <ul>
                                    <li>Design thinking, generating ideas and prototypes</li>
                                    <li>Sales techniques-interacting with customers</li>
                                    <li>Sales and negotiating skills</li>
                                    <li>Diploma in creativity and innovation</li>
                                    <li>Principles of marketing</li>
                                    <li>Executive assistant skills</li>
                                    <li>Introduction to office and administrative management</li>
                                    <li>Leadership skills and team management</li>
                                    <li>Retail management;customer interactions</li>
                                    <li>Recruitment consultant</li>
                                    <li>Introduction to cash accounting</li>
                                </ul>
                            </div>
                        </div>

                        <div class="advanced certificate">
                            <div class="certificate-header">
                                <h4>Advanced</h4>
                            </div>

                            <div class="advanced-courses courses-list">
                                <ul>
                                    <li>Diploma in marketing essentials</li>
                                    <li>Diploma in customer service</li>
                                    <li>Diploma in managerial economics</li>
                                    <li>Diploma in operations management</li>
                                    <li>Diploma in business administration</li>
                                    <li>Diploma in project management</li>
                                    <li>Diploma in modern human resource management</li>
                                    <li>Diploma in supervision</li>
                                    <li>Diploma in financial accounting</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Agriculture department -->
                <div id="agriculture" class="agriculture dept-item">
                    <div class="dept-heading">
                        <div class="dept-heading-image">
                            <img src="./img/department/agric-1'1.png" alt="agriculture-image" id="agriculture-image">
                        </div>
                        <div class="dept-heading-text">   
                            <h4>Department of Agriculture Studies</h4>
                            <p>
                            This department focuses on things you can do with plants and animals
                            </p>
                        </div>
                    </div>

                    <div class="courses-cont">
                        <div class="basic certificate">
                            <div class="certificate-header">
                                <h4>Basic</h4>
                            </div>

                            <div class="basic-courses courses-list">
                                <ul>
                                    <li>Agriculture: Gardening, animal farming and acquaculture</li>
                                    <li>Fish farming</li>
                                    <li>Poultry breeding and egg production</li>
                                    <li>Snailery</li>
                                    <li>Growing organic foods for sale</li>
                                </ul>
                            </div>
                        </div>

                        <div class="advanced certificate">
                            <div class="certificate-header">
                                <h4>Advanced</h4>
                            </div>

                            <div class="advanced-courses courses-list">
                                <ul>
                                    <li>Dilpoma in dairy(poultry), food processes and product technology</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                
                <!-- Technical department -->
                <div id="technical" class="technical dept-item">
                    <div class="dept-heading">
                        <div class="dept-heading-image">
                            <img src="./img/department/technical-1'1.png" alt="technical-image" id="technical-image">
                        </div>
                        <div class="dept-heading-text">   
                            <h4>Department of Technical Studies</h4>
                            <p>
                            This department focuses on repairs, installations etc
                            </p>
                        </div>
                    </div>

                    <div class="courses-cont">
                        <div class="basic certificate">
                            <div class="certificate-header">
                                <h4>Basic</h4>
                            </div>

                            <div class="basic-courses courses-list">
                                <ul>
                                    <li>Introduction to plumbing</li>
                                    <li>Fundamentals of a handyperson</li>
                                    <li>Car mechanic training</li>
                                    <li>Lighting technician</li>
                                    <li>CCTV installation: Introdution to CCTV sytems and AutoCAD layouts</li>
                                    <li>Introduction to electrical wiring systems</li>
                                </ul>
                            </div>
                        </div>

                        <div class="advanced certificate">
                            <div class="certificate-header">
                                <h4>Advanced</h4>
                            </div>

                            <div class="advanced-courses courses-list">
                                <ul>
                                    <li>Diploma in plumbing studies</li>
                                    <li>Diploma in carpentry studies</li>
                                    <li>Diploma in electrical studies</li>
                                    <li>Advanced diploma in basic electronics</li>
                                    <li>Diploma in mechatronics.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                
                <!-- Art and Design department -->
                <div id="artndesign" class="artndesign dept-item">
                    <div class="dept-heading">
                        <div class="dept-heading-image">
                            <img src="./img/department/artndes-1.png" alt="artndesign-image" id="artndesign-image">
                        </div>
                        <div class="dept-heading-text">   
                            <h4>Department of Art and Design </h4>
                            <p>
                            This department focuses on skills that you can do with your hands
                            </p>
                        </div>
                    </div>

                    <div class="courses-cont">
                        <div class="basic certificate">
                            <div class="certificate-header">
                                <h4>Basic</h4>
                            </div>

                            <div class="basic-courses courses-list">
                                <ul>
                                    <li>House cleaning fundamentals</li>
                                    <li>Interior decorations: Become a painter and decorator</li>
                                    <li>Baking and desserts for beginners</li>
                                    <li>The essential beginners pastry baking course</li>
                                    <li>Hair stylist</li>
                                    <li>Cosmetologist</li>
                                    <li>Nail technician</li>
                                    <li>Theatre and performance makeup artist</li>
                                    <li>Fashion stylist Makeup artist</li>
                                    <li>Bridal hair styling</li>
                                    <li>Introduction to gentle craftivism</li>
                                    <li>Introduction to crochet</li>
                                </ul>
                            </div>
                        </div>

                        <div class="advanced certificate">
                            <div class="certificate-header">
                                <h4>Advanced</h4>
                            </div>

                            <div class="advanced-courses courses-list">
                                <ul>
                                    <li>Diploma in digital photography</li>
                                    <li>Diploma in make up artistry</li>
                                    <li>Body contouring specialist</li>
                                    <li>Diploma in food skills an techniques</li>
                                    <li>Diploma in makeup artistry</li>
                                    <li>Diploma in interior design</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                
                <!-- ICT department -->
                <div id="ict" class="ict dept-item">
                    <div class="dept-heading">
                        <div class="dept-heading-image">
                            <img src="./img/department/ict-1.png" alt="ict-image" id="ict-image">
                        </div>
                        <div class="dept-heading-text">   
                            <h4>Department of ICT </h4>
                            <p>
                            This department focuses on skills and businesses that you can do with the computer
                            </p>
                        </div>
                    </div>

                    <div class="courses-cont">
                        <div class="basic certificate">
                            <div class="certificate-header">
                                <h4>Basic</h4>
                            </div>

                            <div class="basic-courses courses-list">
                                <ul>
                                    <li>Microsoft word</li>
                                    <li>Microsoft outlook</li>
                                    <li>Microsoft excel</li>
                                    <li>Journalism and print media</li>
                                    <li>Fundamentals of logo design</li>
                                    <li>Fundamentals of graphics design</li>
                                </ul>
                            </div>
                        </div>

                        <div class="advanced certificate">
                            <div class="certificate-header">
                                <h4>Advanced</h4>
                            </div>

                            <div class="advanced-courses courses-list">
                                <ul>
                                    <li>Diploma in social media strategy</li>
                                    <li>Diploma in cryptocurrency</li>
                                    <li>Diploma in media studies</li>
                                    <li>Diploma in website development</li>
                                    <li>Diploma in film studies</li>
                                    <li>Diploma in information technology management</li>
                                    <li>Diploma in Graphics design</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                
                <!-- Business Studies department -->
                <div id="business" class="business dept-item">
                    <div class="dept-heading">
                        <div class="dept-heading-image">
                            <img src="./img/department/business'1.png" alt="business-image" id="business-image">
                        </div>
                        <div class="dept-heading-text">   
                            <h4>Department of Business Studies </h4>
                            <p>
                            This department focuses on educating and training personel to be business inclined in various areas.
                            </p>
                        </div>
                    </div>

                    <div class="courses-cont">
                        <div class="basic certificate">
                            <div class="certificate-header">
                                <h4>Basic</h4>
                            </div>

                            <div class="basic-courses courses-list">
                                <ul>
                                    <li>How to run a restaurant business</li>
                                    <li>Small business management</li>
                                    <li>Hospitality management studies-hotel operations</li>
                                    <li>Events management</li>
                                    <li>Travel agent and consultant training</li>
                                    <li>Start your own profitable online coaching business</li>
                                    <li>An introductory course on wines</li>
                                    <li>Laundry and dry-cleaning business</li>
                                    <li>Estate management business</li>
                                    <li>Liesure and tourism business</li>
                                </ul>
                            </div>
                        </div>

                        <div class="advanced certificate">
                            <div class="certificate-header">
                                <h4>Advanced</h4>
                            </div>

                            <div class="advanced-courses courses-list">
                                <ul>
                                    <li>Diploma in business management and entrepreneurship</li>
                                    <li>Diploma in retail management</li>
                                    <li>Diploma in manufacturing business</li>
                                    <li>Diploma in hospitality management</li>
                                    <li>Diploma in warehouse management</li>
                                    <li>Diploma in financial accounting</li>
                                    <li>Diploma in events management</li>
                                    <li>Diploma in transportation management</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    
    <!-- footer section -->
    <?php include './php/views/footer.php' ?>
    
</body>
</html>



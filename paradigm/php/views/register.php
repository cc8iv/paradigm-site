<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/animation.css">
    <link rel="stylesheet" href="../../css/rwd.css">
    <link rel="stylesheet" href="../../css/form.css">

    <title>Register a course | Paradigm</title>
    <style>
        
    </style>
</head>
<body>

    <!-- to home section -->
    <div class="to-home-container">
        <span>
            <a href="../.././"> &larr; return home</a>
        </span>
    </div>

   <!-- Register section -->
   <section id="register">
    <div class="register container">
        <div class="side">
            <h3>What course would <br> 
            you <span style="color:#a90105; font-weight: 400;">LOVE</span> to go for?</h3>
        </div>

        <div class="register-form">
            <form action="register.php" method="post">
                <fieldset>
                    <legend class="head">
                        Register
                    </legend>

                    <fieldset>
                        <div class="field">
                            <label for="fname">
                                First Name
                            </label>
                            <input type="text" id="fname">
                        </div>
                        <div class="field">
                            <label for="mname">
                                Middle Name
                            </label>
                            <input type="text" id="mname">
                        </div>
                        <div class="field">
                            <label for="lname">
                                Last Name
                            </label>
                            <input type="text" id="lname">
                        </div>
                    </fieldset>

                    <fieldset>
                        <div class="field">
                            <label for="email">
                                Email
                            </label>
                            <input type="email" id="email">
                        </div>
                        <div class="field">
                            <label for="phone">
                                Phone
                            </label>
                            <input type="phone" id="phone">
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>
                            <label for="course-dropdown-list">
                                Select your course.
                            </label>
                        </legend>

                        <select name="course-dropdown-list" id="course-dropdown-list">
                            <option value="fishery">
                                <div class="each-course">
                                    Fishery
                                    <span id="course-dept">
                                        Agriculture
                                    </span>
                                </div>
                            </option>
                            <option value="make-up">
                                <div class="each-course">
                                    Makeup Artist
                                    <span id="course-dept">
                                        Art and Design 
                                    </span>
                                </div>
                            </option>
                        </select>
                    </fieldset>

                    <button id="reg-submit">Register</button>
                </fieldset>
            </form>
        </div>
    </div>
    
    <?php
        $firstname = $middlename = $lastname = $email = $phone = $selectedCourse = '';

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $selectedCourse = $_POST["course-dropdown-list"];

            switch ($selectedCourse) {
                case 'fishery':
                    echo "Fishery Course" . "<br>";
                    break;

                case 'make-up':
                    echo "Make up Course" . "<br>";
                    break;
                
                default:
                    echo "Choose a course.";
                    break;
            }


        }
   ?>

   </section>

   
    
</body>
</html>



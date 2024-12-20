<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Employees List</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="../styles.css" />
</head>

<body>
    <?php include "components/sidebar.php"; ?>

    <main style="margin-left: 85px">
        <div class="breadcrumbs">
            <div class="left">
                <p>Admin > <span>STAFFS AND EMPLOYEES</span></p>
            </div>

            <div class="right">
                <a href="#">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                </a>
                <a href="#">
                    <i class="fa fa-user" aria-hidden="true"></i>
                </a>
            </div>
        </div>

        <section class="add-employees-section">
            <div class="add-employees-container">
                <div class="add-employee-picture">
                    <button>
                        <img src="../images/profile.png" alt="" />
                        <p>Add Picture</p>
                    </button>
                </div>
                <div class="employee-details">
                    <div class="grid-div">
                        <label for="firstname">First Name:</label>
                        <input type="text" name="firstname" id="" placeholder="Enter their first name" />
                    </div>
                    <div class="grid-div">
                        <label for="lastname">Last Name:</label>
                        <input type="text" name="firstname" id="" placeholder="Enter their last name" />
                    </div>
                    <div class="grid-div">
                        <label for="sex">Sex:</label><br />
                        <select name="sex" id="">
                            <option value="" disabled selected>Choose one:</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                    <div class="grid-div shift-flex">
                        <div>
                            <label for="lastname">Shift:</label>
                            <select name="shift" id="">
                                <option value="" selected disabled>Choose</option>
                                <option value="day">Day</option>
                                <option value="night">Night</option>
                            </select>
                        </div>
                        <div>
                            <label for="time">From:</label>
                            <input type="time" name="time" id="" />
                            <label for="time">To:</label>
                            <input type="time" name="time" id="" />
                        </div>
                    </div>

                    <div class="grid-div">
                        <label for="birthdate">Date of birth:</label><br />
                        <input type="date" name="date" id="" />
                    </div>

                    <div class="grid-div">
                        <label for="civil-status">Civil Status:</label><br />
                        <select name="civil-status" id="">
                            <option value="single">Single</option>
                            <option value="married">Married</option>
                            <option value="divorced">Divorced</option>
                            <option value="separated">Separated</option>
                            <option value="widowed">Widowed</option>
                        </select>
                    </div>
                    <div class="grid-div">
                        <label for="nationality">Nationality:</label>
                        <input type="text" name="nationality" id="" placeholder="Enter their nationality" />
                    </div>
                    <div class="grid-div">
                        <label for="address">Address:</label>
                        <input type="text" name="address" id="" placeholder="Enter their address" />
                    </div>
                    <div class="grid-div">
                        <label for="religion">Religion:</label>
                        <input type="text" name="religion" id="" placeholder="Enter their religion" />
                    </div>
                    <div class="grid-div">
                        <label for="highest-qualification">Highest Qualification:</label>
                        <input type="text" name="highest-qualification" id=""
                            placeholder="Enter their highest qualification" />
                    </div>
                    <div class="grid-div">
                        <label for="year-graduated">Year Graduated</label>
                        <input type="number" name="year-graduated" id="" placeholder="Enter their year graduated" />
                    </div>
                    <button class="submit-btn">Submit</button>
                </div>
            </div>
        </section>
    </main>
</body>

</html>
<?php include('server.php') ?>
<!DOCTYPE html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Sign Up</title>
    <!---Custom CSS File--->
    <link rel="stylesheet" href="ownerPage.css" />
</head>

<body>
    <section class="container">
        <header style="    font-size: 35px;
        
    height: 93px;

        font-weight: 600;
        text-align: center;
        line-height: 100px;
        color: #fff;
        user-select: none;
        border-radius: 15px 15px 0 0;
        background: linear-gradient(-135deg, #988f90, #9e223b);"> Society Registration</header>
        <form action="opt.html" class="form">
            <div class="input-box">
                <label>Full Name</label>
                <input type="text" placeholder="Enter full name" required />
            </div>

            <div class="input-box">
                <label>Email Address</label>
                <input type="text" placeholder="Enter email address" required />
            </div>

            <div class="column">
                <div class="input-box">
                    <label>Phone Number</label>
                    <input type="number" placeholder="Enter phone number" required />
                </div>
                <div class="input-box">
                    <label>Birth Date</label>
                    <input type="date" placeholder="Enter birth date" required />
                </div>
            </div>
            <div class="gender-box">
                <h3>Gender</h3>
                <div class="gender-option">
                    <div class="gender">
                        <input type="radio" id="check-male" name="gender" checked />
                        <label for="check-male">male</label>
                    </div>
                    <div class="gender">
                        <input type="radio" id="check-female" name="gender" />
                        <label for="check-female">Female</label>
                    </div>
                    <div class="gender">
                        <input type="radio" id="check-other" name="gender" />
                        <label for="check-other">Other</label>
                    </div>
                </div>
            </div>
            <div class="input-box address">
                <label>Address</label>
                <input type="text" placeholder="Enter street address" required />
                <input type="text" placeholder="Enter street address line 2" required />
                <div class="column">
                    <div class="select-box">
                        <select>
                            <option hidden>Country</option>
                            <option selected>India</option>
                            <option>Afghanistan.</option>
                            <option>Switzerland</option>
                            <option>United States</option>
                            <option>Canada</option>
                            <option>Japan</option>
                            <option>Germany</option>
                            <option>Australia</option>
                            <option>France</option>
                            <option>Denmark</option>
                            <option>China</option>
                            <option>saudi arabia</option>
                        </select>
                    </div>
                    <input type="text" placeholder="Enter your city" required />
                </div>
                <div class="column">
                    <input type="text" placeholder="Enter your region" required />
                    <input type="number" placeholder="Enter postal code" required />
                </div>
            </div>
            
            <button>Submit</button>

        </form>
        
    </section>


</body>

</html>

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
    <link rel="stylesheet" href="/societyManagement/CSS/signUp.css" />
</head>

<body>
    <section class="container">
        <header style=" font-size: 35px;
        
    height: 93px;

        font-weight: 600;
        text-align: center;
        line-height: 100px;
        color: #fff;
        user-select: none;
        border-radius: 15px 15px 0 0;
        background: linear-gradient(-135deg, #988f90, #9e223b);"> Society Registration</header>
        <form action="server.php"  method="post" class="form">
            <div class="input-box">
                <label>Society Name</label>
                <input type="text" placeholder=""  name="sname"  required />
            </div>

            <div class="input-box">
                <label>Society Registration No </label>
                <input type="number" placeholder="" name="srno" required />
            </div>

            <div class="input-box">
                <label>Society Address</label>
                <input type="text" placeholder=""  name="SAddr" required />
            </div>
          
            <div class="column">
                <div class="input-box">
                    <label>Pincode No</label>
                    <input type="number" placeholder=""  name="pno" required />
                </div>
                <div class="input-box">
                    <label>Date</label>
                    <input type="date" placeholder=""  name="d" required />
                </div>
            </div>
            <div class="input-box">
                <label>Your name</label>
                <input type="text" placeholder="" name="urname" required />
            </div>
            <div class="input-box">
                <label>Email Address</label>
                <input type="email" placeholder="" name="emailAddr" required />
            </div>

            <div class="input-box">
                <label>Phone No</label>
                <input type="number" placeholder="" name="phno" required />
            </div>
            <div class="column">
                <div class="input-box">
                    <label>City</label>
                    <input type="text" placeholder="Enter your city name" name="cname" required />
             </div>
                <div class="input-box">
                <label>Country</label>
                <div class="select-box">
                <select name="country">
                            <option >select Country</option>
                            <option >India</option>
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
                    </div>
                    <div class="input-box">
                <label>Your position</label></label></label>
                <div class="select-box">
                        <select name="position">
                            <option selected>Owner</option>
                            <option selected>Secretary</option>
                         </select>
                    </div>
                    </div>
            </div>
            <button  name="submit">Submit</button>
        </form>
    </section>
</body>
</html>
<?php

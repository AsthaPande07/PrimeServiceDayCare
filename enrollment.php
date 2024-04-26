
 <?php
require_once('config.php');
?> 

<!DOCTYPE html>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="style.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Responsive Enrollment Form </title> 
</head>
<body>
    <div>
               <?php 

                    if(isset($_POST['submit']))
                    {
                        $child_fname = $_POST['child_fname'];
                        $child_mname = $_POST['child_mname'];
                        $child_lname = $_POST['child_lname'];
                        $dob = $_POST['dob'];
                        $allergy = $_POST['allergy'];
                        $gender = $_POST['gender'];
                   
                        $parent_fname = $_POST['parent_fname'];
                        $parent_mname = $_POST['parent_mname'];
                        $parent_lname = $_POST['parent_lname'];
                        $contact = $_POST['contact'];
                        $email = $_POST['email'];
                        $address = $_POST['address'];
                        // $image = $_POST['image'];

                        $query = "insert into enrollment (child_fname,child_mname,child_lname,dob,allergy,gender,parent_fname,parent_mname,parent_lname,contact,email,address) 
                        values(?,?,?,?,?,?,?,?,?,?,?,?)";                        
                        $stmp = $con->prepare($query );
                        $result = $stmp->execute([$child_fname , $child_mname , $child_lname, $dob,$allergy,$gender,$parent_fname,$parent_mname,$parent_lname,$contact,$email,$address]);
                       
                        if($result)
                        {
                            echo "successfully saved";
                        }
                        else{
                            echo "not saved";
                        }

                    }

                ?>  
    
    </div>
        
    <div class="container">
        <header>Enrollment    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      
            <!-- <label for="profile">Child's Profile:</label> -->
            <!-- <input type="file"  name="image" accept="image/*" > -->
             </header>

        <form action="enrollment.php" method="post">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Child Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>First Name</label>
                            <input type="text" placeholder="Enter your name" name ="child_fname" required>
                        </div>

                        <div class="input-field">
                            <label>Middle Name (optional)</label>
                            <input type="text" placeholder="Enter your name" name ="child_mname" >
                        </div>

                        <div class="input-field">
                            <label>Last Name</label>
                            <input type="text" placeholder="Enter your name" name ="child_lname" required>
                        </div>

                        <div class="input-field">
                            <label>Date of Birth</label>
                            <input type="date" placeholder="Enter birth date" name = "dob" required>
                        </div>

                        <div class="input-field">
                            <label>Allergy From Anything </label>
                            <input type="text" placeholder="" name ="allergy" >
                        </div>

                        
                        <div class="input-field">
                            <label >Gender</label>
                            <select  name="gender" required>
                                <option disabled selected>Select gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="others">Others</option>
                            </select>
                        </div>


                       
                    </div>
                </div>

                <div class="details ID">
                    <span class="title">Parent / Guardian's Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>First Name </label>
                            <input type="text" placeholder="" name ="parent_fname" required>
                        </div>

                        <div class="input-field">
                            <label>Middle Name</label>
                            <input type="text" placeholder="" name ="parent_mname" required>
                        </div>

                        <div class="input-field">
                            <label>Last Name</label>
                            <input type="text" placeholder="" name ="parent_lname" required>
                        </div>

                        <div class="input-field">
                            <label>Contact</label>
                            <input type="text" placeholder="" name ="contact"required>
                        </div>

                        <div class="input-field">
                            <label>Email</label>
                            <input type="text" placeholder="" name ="email" required>
                        </div>

                        <div class="input-field">
                            <label>Address</label>
                            <textarea  name="address" required="required" cols="2" rows="2"  maxlength="200" name ="address"></textarea>
                        </div>

                       
                    </div>

                    
                    

                     <!-- <button class="nextBtn"> -->
                        <input type="submit" name="submit" value="Submit">
                        <!-- <span class="btnText" >Next</span> -->
                        <!-- <i class="uil uil-navigator"></i>
                    </button>  -->
                </div> 
            </div>


                

                   
                </div> 
            </div>
        </form>
    </div>

    <script src="script.js"></script>
</body>
</html>
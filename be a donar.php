<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>be a donar</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<style>
        body{
    background-image:linear-gradient(to right, red, black);
}


           h2,p{
            text-align: center;
           line-height: 28px;
           }
           .note  
{  
    text-align: center;  
    height: 80px;
    color: white;  
    font-weight: bold;  
    line-height: 80px;  
}  



.title {  
  margin-top: 2rem;  
  margin-bottom: 1rem;  
}  
.form-content  
{  
    padding: 5%;  
    border: 1px solid #ced4da;  
    margin-bottom: 2%;  
}  
.form-control {  
    border-radius: 1.5rem;  
}  
.btnSubmit  
{  
    border: none;  
    border-radius: 1.5rem;  
    padding: 1%;  
    width: 20%;  
    cursor: pointer;  
  /* background-image: linear-gradient(to right, black,red);*/
  background-color: black;
    color: #fff; 
    margin-left: 23rem; 
}  
h1 {  
    font-family: sans-serif;  
  display: block;  
  font-size: 1rem;  
  font-weight: bold;  
  text-align: center;  
  letter-spacing: 3px;  
  color: white;  
 text-transform: uppercase;  
padding-top: 20px;  
}  
a {  
  text-decoration: none;  
  color: #fff;  
}  
a:hover {  
  text-decoration: none;  
  color: #fff;  
}  
    </style>
</head>
<body>
<script src="js/bootstrap.min.js"></script>
    <!-- header -->
<?php include('header.php')?>

<br>

    <section style="
    border: 6px solid black;
    width: 28rem;
    margin-left: 28rem;
    margin-top: -18px;
    background: antiquewhite;
">

       

        <h2>Your donation matters!</h2>

        <p>
            Three lives can be saved with one donation still.
        </p>

        <p>
            More than 38k donates are necessary everyday
        </p>

        <p>
            Less than 1,9% of population donates
        </p>

        

    </section>
    <br>

<section>
    <form action="insert.php" method="POST">
    <div class="card" style="width: 70rem;background-image: linear-gradient(to right, black , red); margin-left: 7rem;">
  
  <div class="card-body">
    
   <div class="container register-form">  
            <div class="form">  
                <div class="note">  
                    <h1> Donation Registration Form </h1>  
                </div>  
                <div class="form-content">  
                    <div class="row">  
                        <div class="col-md-6">  
                            <div class="form-group">  
                                <input type="text" class="form-control" placeholder=" Full Name*" name="name">  
                            </div>  
                            <div class="form-group">  
                                <input type="text" class="form-control" placeholder="Phone Number *" name="phno">  
                            </div>  
                        </div>              
                        <div class="col-md-6">  
                            <div class="form-group">  
                                <input type="email" class="form-control" placeholder="Email ID*" name="email">  
                            </div>  
                            <div class="form-group">  
                                <input type="text" class="form-control" placeholder="Age" name="age">  
                            </div>  
                        </div>  
                    </div>  
                    <div class="row">  
                        <div class="col-md-6">  
                            <div class="form-group">  
                                
    
                                  <select class="form-control" name="gender">
                                       <option value="">Gender</option>

                                      <option value="male">Male</option>
                                    <option value="female">Female</option>
     
      
                                  </select>
                             </div>  
                             
                              
                        </div>              
                        <div class="col-md-6">  
                            <div class="form-group">  
                                
                                  <select class="form-control" name="bloodgroup">
                                       <option>Blood Group</option>

                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
     
      
                                  </select>
                            </div>  
                              
                        </div>  
                    </div>  
    <div class="row align-items-center mt-4">  
              
          </div> <div class="row align-items-center mt-4" style="
">  
            <div class="col">  
              <input type="text" class="form-control" placeholder=" Address" name="address" style="
    height: 6rem;
">  
            </div>  
          </div>  
    <div class="row justify-content-start mt-4">  
            <div class="col">  
              <div class="form-check">  
                 
              </div>  
                    <button type="submit" class="btnSubmit"> Submit </button>  
                </div>  
            </div>  
        </div>  
    
  </div>
</div>
</div></div>
</form>
</section>
<br>
<!-- footer -->
   
<?php include('footer.php')?>


    

</body></html>
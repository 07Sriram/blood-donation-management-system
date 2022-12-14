<html><head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sign-UP</title>
  <style type="text/css">
    
@import url('https://fonts.googleapis.com/css?family=Open+Sans');

* {
  font-family: 'Open Sans', sans-serif;
}

body {
  margin: 0;
  padding: 0;
}

.main-container {
  width: 100%;
  height: 100vh;
   transition: 0.4s linear;
 
   background-image:url('img/foodgif.gif'); 
   background-repeat:no-repeat;
   background-size: cover;
 
}

.box {
  width: 400px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background: darkred;
  padding: 40px;
  box-sizing: border-box;
  box-shadow: 0px 15px 25px rgba(0, 0, 0, .5);
  border-radius: 10px;
}

.box h2 {
  margin: 0 0 30px;
  padding: 0;
  color: #fff;
  text-align: center;
}

.box p {
  margin-bottom: 0;
}

.box p:nth-child(even) {
  margin-top: 0;
}

.box a {
  color: black;
  font-size: 18px;
  text-decoration: none;
}

.box .input-box {
  position: relative;
}

.box .input-box input {
  width: 100%;
  padding: 10px 0;
  font-size: 16px;
  margin-bottom: 30px;
  color: #fff;
  border: 1px solid #fff;
  border: none;
  border-bottom-style: solid;
  outline: none;
  letter-spacing: 1px;
  background: transparent;
}

.box .input-box label {
  position: absolute;
  color: #fff;
  top: 0;
  left: 0;
  padding: 10px 0;
  font-size: 16px;
  pointer-events: none;
  transition: .5s;
}

.box .input-box input:focus ~ label,
.box .input-box input:valid ~ label{
  top: -18px;
  left: 0;
  color: orange;
  font-size: 12px;
}

.box input[type=submit] {
  background: transparent;
  border: none;
  outline: none;
  background: black;
  color: #fff;
  padding: 10px 20px;
  cursor: pointer;
  border-radius: 5px;
}

#logged-in {
  width: 100%;
  height: auto;
  text-align: center;
  margin: auto;
  position: absolute;
  top: 50px;
  display: none;
}

.login-true {
  opacity: 0;
}
.hlogin:hover{
color: white;
}
.card {
        margin: 0 auto; /* Added */
        float: none; /* Added */
        margin-bottom: 10px; /* Added */
}
/* Style the video: 100% width and height to cover the entire window */
#myVideo {
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%;
  min-height: 100%;
}

/* Add some content at the bottom of the video/page */
.content {
  position: unset;
  bottom: 0;
 
  color: black;
  width: 100%;
  padding: 20px;
}
a:hover{
  text-decoration: none;
}

  </style>
</head>
<body>

<video autoplay="" muted="" loop="" id="myVideo">
  <source src="bg-vid-signup.mp4" type="video/mp4">
</video>


<div class="content">
  <div class="card" style="width: 18rem;margin-top: 13rem;width: 29rem;">
 <div id="main" class="main-container">
<div class="box">
  <h2>Login</h2>
  <form action="login-sql.php" method="POST">
    <div class="input-box">
      <input id="user-name" type="text" name="username" required="">
      <label>Username</label>
    </div>
    
    <div class="input-box">
      <input id="user-pass" type="password" name="password" required="">
      <label>Password</label>
    </div>
    <input id="submit" type="submit" name="" value="Submit">
  </form>

  <p style="
    text-align: center;
"><a href="login.php"><span class="hlogin" style="
">dont have a account?sign in</span></a></p>
</div>
</div>

<div id="logged-in">
</div>
</div>
  
</div>
    
   




</body></html>
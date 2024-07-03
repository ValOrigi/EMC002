<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cackle</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="icon" type="image/x-icon" href="../Images/Icon.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <div class="cotn_principal">
        <div class="cont_centrar">
            <div class="cont_login">

            <div class="cont_info_log_sign_up">
                <div class="col_md_login" style="margin-top: 15%;">
                    <button class="btn_login" onclick="change_to_login()">LOGIN</button>
                </div>

                <div class="col_md_sign_up" style="margin-top: 15%;">
                    <button class="btn_sign_up" onclick="change_to_sign_up()">SIGN UP</button>
                </div>
            </div>
                
            <div class="cont_back_info">
                <div class="cont_img_back_grey">
                <img src="../Images/1.png" alt="" />
                </div>
            </div>

                <div class="cont_forms" >
                    <div class="cont_img_back_">
                    <img src="../Images/1.png" alt="" />
                    </div>
                    <div class="cont_form_login">
                        <a href="#" onclick="hidden_login_and_sign_up()" ><i class="material-icons">&#xE5C4;</i></a>
                            <h2>LOGIN</h2>
                        <fieldset>
                        <form id="loginForm" method="post" action="login.php">
                            <div class="form-group"> <input type="text" name="userLogin" placeholder="Username" id="userLogin"/> </div>
                            <div class="form-group"> <input type="password" name="passLogin" placeholder="Password" id="passLogin"/> </div>
                        </form>
                        <button class="btn_login" onclick="onClickLogin()">LOGIN</button>
                        </fieldset>    
                    </div>
                
                    <div class="cont_form_sign_up">
                        <a href="#" onclick="hidden_login_and_sign_up()"><i class="material-icons">&#xE5C4;</i></a>
                            <h2>SIGN UP</h2>
                        <fieldset>
                        <form id="signUpForm" method="post" action="signup.php">
                            <div class="form-group"> <input type="email" name="emailSignUp" placeholder="Email" id="emailSignUp"/> </div>
                            <div class="form-group"> <input type="text" name="userSignUp" placeholder="Username" id="userSignUp"/> </div>
                            <div class="form-group"> <input type="password" name="passSignUp" placeholder="Password" id="passSignUp"/> </div>
                            <div class="form-group"> <input type="password" name="cpassSignUp" placeholder="Confirm Password" id="cpassSignUp"/> </div>
                        </form>
                        <button class="btn_sign_up" onclick="onClickSignUp()">SIGN UP</button>
                        </fieldset>    
                    </div>
                </div>
            </div>
        </div>
    </div> 
</body>
<script>
    //Click on login and Sign Up to  changue and view the effect

    const time_to_show_login = 400;
    const time_to_hidden_login = 200;

    function change_to_login() {
    document.querySelector('.cont_forms').className = "cont_forms cont_forms_active_login";  
    document.querySelector('.cont_form_login').style.display = "block";
    document.querySelector('.cont_form_sign_up').style.opacity = "0";               

    setTimeout(function(){  document.querySelector('.cont_form_login').style.opacity = "1"; },time_to_show_login);  
    
    setTimeout(function(){    
    document.querySelector('.cont_form_sign_up').style.display = "none";
    },time_to_hidden_login);  
    }

    const time_to_show_sign_up = 100;
    const time_to_hidden_sign_up = 400;

    function change_to_sign_up(at) {
    document.querySelector('.cont_forms').className = "cont_forms cont_forms_active_sign_up";
    document.querySelector('.cont_form_sign_up').style.display = "block";
    document.querySelector('.cont_form_login').style.opacity = "0";
    
    setTimeout(function(){  document.querySelector('.cont_form_sign_up').style.opacity = "1";
    },time_to_show_sign_up);  

    setTimeout(function(){   document.querySelector('.cont_form_login').style.display = "none";
    },time_to_hidden_sign_up);  
    }    

    const time_to_hidden_all = 500;

    function hidden_login_and_sign_up() {

    document.querySelector('.cont_forms').className = "cont_forms";  
    document.querySelector('.cont_form_sign_up').style.opacity = "0";               
    document.querySelector('.cont_form_login').style.opacity = "0"; 

    setTimeout(function(){
    document.querySelector('.cont_form_sign_up').style.display = "none";
    document.querySelector('.cont_form_login').style.display = "none";
    },time_to_hidden_all);  
    
    }

    function onClickLogin() {
        var user = document.getElementById("userLogin").value;
        var pass = document.getElementById("passLogin").value;
        if(user == '' || pass == '')
        {
            alert("Please fill in all the fields.");
        }
        else
        {
            document.getElementById("loginForm").submit()
        }
    }
    
    function onClickSignUp() {
        var email = document.getElementById("emailSignUp").value;
        var user = document.getElementById("userSignUp").value;
        var pass = document.getElementById("passSignUp").value;
        var cpass = document.getElementById("cpassSignUp").value;
        
        var combi;
        var err = 0;
        let output = "";
        if(email == '' || user == '' || pass == '' || cpass == '')
        {
            alert("Please fill in all the fields.");
        }
        else
        {
            if(!(/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/.test(email)))
            {
                output += "Input a valid email\n";
                err++;
            }

            if(user.length < 6)
            {
                output += "Username is at least 6 characters\n";
                err++;
            }

            if(/[^a-zA-Z0-9_]/g.test(user))
            {
                output += "Username should not contain special characters except _\n";
                err++;
            }

            if(pass.length < 8)
            {
                output += "Password is at least 8 characters\n";
                err++;
            }

            if(!(/[a-z]/.test(pass)))
            {
                output += "Password is a needs lower case\n";
                err++;
            }
            
            if(!(/[A-Z]/.test(pass)))
            {
                output += "Password is a needs upper case\n";
                err++;
            }

            if(!(/[0-9]/.test(pass)))
            {
                output += "Password has at least 1 digit\n";
                err++;
            }

            if(!(/[^a-zA-Z0-9]/.test(pass)))
            {
                output += "Password has at least 1 special character\n";
                err++;
            }

            if(err == 0)
            {
                if(pass != cpass)
                {
                    alert("Password and Confirm Password do not match.");
                }
                else
                {
                    document.getElementById("signUpForm").submit();
                }
            }
            else
            {
                alert(output);
            }
        }
    }
</script>
</html>
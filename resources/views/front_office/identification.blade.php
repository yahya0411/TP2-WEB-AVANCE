
<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
<link rel="stylesheet" href="styles.css">
<title>signin-signup</title>
<style>
 * {
margin: 0;
padding: 0;
box-sizing: border-box;
font-family: 'Poppins', sans-serif;
}

body {
display: flex;
align-items: center;
justify-content: center;
min-height: 100vh;
background: #000;
}

.container {
position: relative;
width: 70vw;
height: 80vh;
background: #fff;
border-radius: 15px;
box-shadow: 0 4px 20px 0 rgba(255, 255, 255, 0.3), 0 6px 20px 0 rgba(255, 255, 255, 0.3);
overflow: hidden;
}

.container::before {
content: "";
position: absolute;
top: 0;
left: -50%;
width: 100%;
height: 100%;
background: linear-gradient(-45deg, #e8b284, #e8b284);
z-index: 6;
transform: translateX(100%);
transition: 1s ease-in-out;
}

.signin-signup {
position: absolute;
top: 0;
left: 0;
width: 100%;
height: 100%;
display: flex;
align-items: center;
justify-content: space-around;
z-index: 5;
}

form {
display: flex;
align-items: center;
justify-content: center;
flex-direction: column;
width: 40%;
min-width: 238px;
padding: 0 10px;
}

form.sign-in-form {
opacity: 1;
transition: 0.5s ease-in-out;
transition-delay: 1s;
}

form.sign-up-form {
opacity: 0;
transition: 0.5s ease-in-out;
transition-delay: 1s;
}

.title {
font-size: 35px;
color: #172F46;
margin-bottom: 10px;
}

.input-field {
width: 100%;
height: 50px;
background: #fff;
margin: 10px 0;
border: 2px solid #172F46;
border-radius: 50px;
display: flex;
align-items: center;
}

.input-field i {
flex: 1;
text-align: center;
color: #fff;
font-size: 18px;
}

.input-field input {
flex: 5;
background: none;
border: none;
outline: none;
width: 100%;
font-size: 18px;
font-weight: 600;
color: #000;
}

.btn {
width: 150px;
height: 50px;
border: none;
border-radius: 50px;
background: #F5F5DC;
color: #7c613d;
font-weight: 600;
margin: 10px 60px;
text-transform: uppercase;
cursor: pointer;
}

.btn:hover {
background: #F5F5DC;
}

.social-text {
margin: 10px 0;
font-size: 16px;
}

.social-media {
display: flex;
justify-content: center;
}

.social-icon {
height: 45px;
width: 45px;
display: flex;
align-items: center;
justify-content: center;
color: #444;
border: 1px solid #444;
border-radius: 50px;
margin: 0 5px;
}

a {
text-decoration: none;
}

.social-icon:hover {
color: #172F46;
border-color: #172F46;
}

.panels-container {
position: absolute;
top: 0;
left: 0;
width: 100%;
height: 100%;
display: flex;
align-items: center;
justify-content: space-around;
}

.panel {
display: flex;
flex-direction: column;
align-items: center;
justify-content: space-around;
width: 35%;
min-width: 238px;
padding: 0 10px;
text-align: center;
z-index: 6;
}

.left-panel {
pointer-events: none;
}

.content {
color: #fff;
transition: 1.1s ease-in-out;
transition-delay: 0.5s;
}

.panel h3 {
font-size: 24px;
font-weight: 600;
}

.panel p {
font-size: 15px;
padding: 10px 0;
}

.image {
width: 100%;
transition: 1.1s ease-in-out;
transition-delay: 0.4s;
}

.left-panel .image,
.left-panel .content {
transform: translateX(-200%);
}

.right-panel .image,
.right-panel .content {
transform: translateX(0);
}

.account-text {
display: none;
}
/*Animation*/

.container.sign-up-mode::before {
    transform: translateX(0);
}

.container.sign-up-mode .right-panel .image,
.container.sign-up-mode .right-panel .content {
    transform: translateX(200%);
}

.container.sign-up-mode .left-panel .image,
.container.sign-up-mode .left-panel .content {
    transform: translateX(0);
}

.container.sign-up-mode form.sign-in-form {
    opacity: 0;
}

.container.sign-up-mode form.sign-up-form {
    opacity: 1;
}

.container.sign-up-mode .right-panel {
    pointer-events: none;
}

.container.sign-up-mode .left-panel {
    pointer-events: all;
}


/*Responsive*/

@media (max-width:779px) {
    .container {
        width: 100vw;
        height: 100vh;
    }
}

@media (max-width:635px) {
    .container::before {
        display: none;
    }
    form {
        width: 80%;
    }
    form.sign-up-form {
        display: none;
    }
    .container.sign-up-mode2 form.sign-up-form {
        display: flex;
        opacity: 1;
    }
    .container.sign-up-mode2 form.sign-in-form {
        display: none;
    }
    .panels-container {
        display: none;
    }
    .account-text {
        display: initial;
        margin-top: 30px;
    }
}

@media (max-width:320px) {
    form {
        width: 90%;
    }
}

.return{
text-decoration:none;
    position: absolute;
    top:4%;
    left:3%;
}

*,
*::before,
*::after {
  box-sizing: border-box;
}

:root {
  --select-border: #777;
  --select-focus: blue;
  --select-arrow: var(--select-border);
}

select {
  // A reset of styles, including removing the default dropdown arrow
  appearance: none;
  background-color: transparent;
  border: none;
  padding: 0 1em 0 0;
  width: 100%;
  font-family: inherit;
  font-size: inherit;
  cursor: inherit;
  line-height: inherit;

  // Stack above custom arrow
  z-index: 1;

  // Remove dropdown arrow in IE10 & IE11
  // @link https://www.filamentgroup.com/lab/select-css.html
  &::-ms-expand {
    display: none;
  }

  // Remove focus outline, will add on alternate element
  outline: none;
}

.select {
  display: grid;
  grid-template-areas: "select";
  align-items: center;
  position: relative;

  select,
  &::after {
    grid-area: select;
  }

  min-width: 15ch;
  max-width: 30ch;

  border: 1px solid var(--select-border);
  border-radius: 0.25em;
  padding: 0.25em 0.5em;

  font-size: 1.25rem;
  cursor: pointer;
  line-height: 1.1;



  // Custom arrow
  &:not(.select--multiple)::after {
    content: "";
    justify-self: end;
    width: 0.8em;
    height: 0.5em;
    background-color: var(--select-arrow);
    clip-path: polygon(100% 0%, 0 0%, 50% 100%);
  }
}

// Interim solution until :focus-within has better support
select:focus + .focus {
  position: absolute;
  top: -1px;
  left: -1px;
  right: -1px;
  bottom: -1px;
  border: 2px solid var(--select-focus);
  border-radius: inherit;
}






</style>
</head>

<body>
        <div class="container">
        <div class="signin-signup">

        
        <form action="{{ route('login') }}" method="POST" class="sign-in-form">
        @csrf
        <h2 class="return">     <img src="{{url('/images/return.png')}}" style=" height:20px; width:40px;">   <a href="{{Route('home')}}" style="text-decoration: none; color:#172F46;">Home</a></h2>

        <h2 class="title">Sign in</h2>
        <div class="input-field">
        <i class="fas fa-user"></i>
        <input type="email"   required name="Email" placeholder="Email">
        </div>
        <div class="input-field">
        <i class="fas fa-lock"></i>
        <input  required type="password" name="mdps" placeholder="Password">

        </div>

        <div class="">
        <input type="checkbox" name="box" id="box">
            <label class='bx'for="box">Remember me</label>

        </div>

        <input type="submit" value="Login" name="btn2" class="btn">


        
        <p class="account-text">Don't have an account? <a href="#" id="sign-up-btn2">Sign up</a></p>
        </form>
        <form method="get" class="sign-up-form" action="{{ route('identification.signup') }}">
    <h2 class="title">Sign up</h2>

    <div class="select mt-1">
        <select name="Role" id="standard-select">
            <option value="Artisan">Artisan</option>
            <option value="Consommateur">Customer</option>
            <option value="Livreur">Delivery</option>
        </select>
        <span class="focus"></span>
    </div>

    <div class="input-field">
        <i class="fas fa-user"></i>
        <input type="text" required placeholder="First Name" name="nom_user"> <br>
    </div>

    <div class="input-field">
        <i class="fas fa-envelope"></i>
        <input type="text" required placeholder="Last Name" name="prénom_user"> <br>
    </div>

    <div class="input-field">
        <i class="fas fa-lock"></i>
        <input type="tel" required placeholder="Your phone" class="phone" minlength="10" maxlength="10" name="téléphone"> <br>
    </div>

    <div class="input-field">
        <i class="fas fa-lock"></i>
        <input type="email" required placeholder="Your Email" name="Email"> <br>
    </div>

    <div class="input-field">
        <i class="fas fa-lock"></i>
        <input type="password" required placeholder=" Password" minlength="7" name="mdps">
    </div>

    <input type="submit" value="Sign up" name="btn1" class="btn">
</form>

        </div>
        <div class="panels-container">
        <div class="panel left-panel">
        <div class="content">
        <h3>Tlemcen Tasties </h3>
        <p>Already have an Account, Click Here and Log In</p> 
        <button class="btn" id="sign-in-btn">Sign in</button>
        </div>
        </div>
        <div class="panel right-panel">
        <div class="content">
        <h3>Tlemcen Tasties </h3>
        <p>Don't have an account? Create one right now!</p>
        
        <button class="btn" id="sign-up-btn">Sign up</button>
        </div>
        </div>
        </div>
        </div>
        
        </body>
        <script >


const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");
const sign_in_btn2 = document.querySelector("#sign-in-btn2");
const sign_up_btn2 = document.querySelector("#sign-up-btn2");

sign_up_btn.addEventListener("click", () => {
    container.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener("click", () => {
    container.classList.remove("sign-up-mode");
});

sign_up_btn2.addEventListener("click", () => {
    container.classList.add("sign-up-mode2");
});
sign_in_btn2.addEventListener("click", () => {
    container.classList.remove("sign-up-mode2");
});

        </script>


        <script>
var sign = document.getElementById('sign-up-btn');


</script>


</html>

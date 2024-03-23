<!-- Form without bootstrap -->
<div class="auth-wrapper mb-5">
    <div class="auth-container">
        <div class="auth-action-left">
            <div class="auth-form-outer">
                <h2 class="auth-form-title">
                    Sign In
                </h2>
                <div class="auth-external-container">
                    <div class="auth-external-list">
                        <ul>
                            <li><a href="#"><i class="fa fa-google"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <p class="auth-sgt">or sign in with:</p>
                </div>
                <form action="index.php?action=dangnhap&act=dangnhap_action" class="login-form" method="post">
                    <input type="text" class="form-control" name="txtusername" placeholder="Username">
                    <div class="input-icon">
                        <input type="password" class="form-control" name="txtpassword" placeholder="Password">
                        <i class="fa fa-eye show-password"></i>
                    </div>
                    <label class="btn active">
                        <input type="checkbox" name='email1' checked>
                        <i class="fa fa-square-o"></i><i class="fa fa-check-square-o"></i>
                        <span> Remember password.</span>
                    </label>
                    <div class="footer-action">
                        <input class="logbtn" type="submit" value="Sign Up"></input>
                    </div>
                </form>
                <div class="auth-forgot-password">
                    <a href="index.php?action=forget">Forfot Password</a>
                </div>
            </div>
        </div>
        <div class="auth-action-right">
            <div class="auth-image">
                <img src="Content/imagetourdien/vector.jpg" alt="login">
            </div>
        </div>
    </div>
</div>

<script>
window.addEventListener("load", function() {
    const loginForm = document.querySelector(".login-form");
    const showPasswordIcon =
        loginForm && loginForm.querySelector(".show-password");
    const inputPassword =
        loginForm && loginForm.querySelector('input[type="password"');
    showPasswordIcon.addEventListener("click", function() {
        const inputPasswordType = inputPassword.getAttribute("type");
        inputPasswordType === "password" ?
            inputPassword.setAttribute("type", "text") :
            inputPassword.setAttribute("type", "password");
    });
});
</script>

<style>
@import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

body {
    margin: 0;
    padding: 0;
    background-color: #f7f8f9;
    font-family: 'Roboto', sans-serif;
    font-size: 14px;
}

.auth-container {
    max-width: 750px;
    max-height: 600px;
    margin: 0 auto;
    background: #fff;
    border-radius: 15px;
    box-shadow: 1px 2px 8px 8px #ccc3;
    display: flex;
    margin-top: 4rem;
    overflow: hidden;
}

.auth-image img {
    height: 100%;
    width: auto;
}

.auth-image {
    overflow: hidden;
}

.auth-action-right {
    width: 320px;
}

.auth-action-left {
    flex: 2;
}

.auth-form-outer {
    padding: 2rem 4rem;
    display: block;
}

h2.auth-form-title {
    text-align: center;
    color: #fd5353;
    font-size: 1.7rem;
}

.auth-form-outer input {
    border: 1px solid #56aef485;
    margin-bottom: 1rem;
    width: 100%;
    padding: 13px;
    border-radius: 5px;
    box-sizing: border-box;
    background: #f7f8f97a;
}

.auth-form-outer input:hover,
.auth-form-outer input:focus {
    outline: none;
    box-shadow: none;
}

.auth-form-outer input:focus {
    background-color: #fff;
    border: 1px solid #fd5353;
}


input.form-control::placeholder {
    color: #0f82dd4d;
}



input[type="checkbox"] {
    display: none;
}

label input[type="checkbox"]~i.fa.fa-square-o {
    color: #fd5353;
    display: inline;
}

label input[type="checkbox"]~i.fa.fa-check-square-o {
    display: none;
}

label input[type="checkbox"]:checked~i.fa.fa-square-o {
    display: none;
}

label input[type="checkbox"]:checked~i.fa.fa-check-square-o {
    color: #fd5353;
    display: inline;
}

label:hover input[type="checkbox"]~i.fa {
    color: #fd5353;
}

div[data-toggle="buttons"] label.active {
    color: #fd5353;
}

.auth-wrapper a {
    text-decoration: none;
    color: #fd5353;
}

a.auth-btn-direct {
    flex: 1;
    border: 1px solid #fd5353;
    text-align: center;
    height: 40px;
    border-radius: 5px;
    line-height: 40px;
    font-weight: 500;
    margin-left: 5px;
}

input.logbtn {
    background: #fe5454;
    border: none;
    width: auto;
    color: #fff;
    font-weight: 500;
    border-radius: 5px !important;
    flex: 1;
    margin-right: 5px;
    cursor: pointer;
}

input.logbtn:focus {
    background: #fe5454;
    color: #fff;
}

input.logbtn:hover {
    box-shadow: 3px 3px 7px 2px #f443362b;
}

a.auth-btn-direct:hover {
    box-shadow: -2px 3px 0px 0px #F44336;
}

.auth-external-list ul li a:hover {
    color: #fd5353;
    border-color: #fd5353;
}

.footer-action {
    display: flex;
    width: 100%;
    margin-top: 2rem;
    box-sizing: border-box;
    overflow: hidden;
}

.auth-external-list ul {
    margin: 0;
    padding: 0;
    list-style-type: none;
}

.auth-external-list ul li {
    float: left;
}

.auth-external-list {
    display: flex;
    justify-content: center;
    margin-bottom: 1rem;
}

.auth-external-list ul li a {
    width: 26px;
    height: 26px;
    margin: 7px;
    display: block;
    text-align: center;
    line-height: 27px;
    border-radius: 50%;
    border: 1px solid #00000078;
    color: #555;
}

p.auth-sgt {
    text-align: center;
}

.auth-forgot-password a {
    text-align: center;
    display: block;
    border-top: 1px dashed #f4433633;
    padding: 20px;
    margin-top: 20px;
}


.input-icon {
    position: relative;
}

.input-icon input {
    padding-right: 4rem;
}

.input-icon i {
    position: absolute;
    top: 38%;
    right: 1.2rem;
    transform: translateY(-50%);
    color: #2196f3b5;
    cursor: pointer;
}

/* responsive */
@media screen and (max-width: 720px) {
    body {
        background-color: #fff;
    }

    .auth-container {
        max-width: 100%;
        max-height: 100vh;
        margin: 0 auto;
        background: #fff;
        border-radius: 0;
        box-shadow: none;
        display: block;
        margin-top: 0;
    }

    .auth-action-left {
        width: 100%;
    }

    .auth-action-right {
        display: none;
    }
}
</style>
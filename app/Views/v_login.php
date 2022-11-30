<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>Toko Mansure | Login</title>
</head>
<style>
* {
    margin: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

html,
body {
    display: grid;
    height: 100%;
    width: 100%;
    place-items: center;
    background: -webkit-linear-gradient(left, #ffeaa7, #e17055);
}



.wrapper {
    overflow: hidden;
    max-width: 390px;
    background: #c23616;
    padding: 20px;
    border-radius: 5px;
    /* box-shadow: 0px 15px 20px rgba(0, 0, 0, 0.1); */
}

.wrapper .title-text {
    display: flex;
    width: 200%;
}

.wrapper .title {
    width: 50%;
    font-size: 35px;
    font-weight: 600;
    text-align: center;
    transition: all 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}

.wrapper .slide-controls {
    position: relative;
    display: flex;
    height: 50px;
    width: 100%;
    overflow: hidden;
    border: 1.5px solid #e17055;
    border-radius: 5px;
}

.slide-controls .slide {
    height: 100%;
    width: 100%;
    color: #fff;
    font-size: 18px;
    font-weight: 500;
    text-align: center;
    line-height: 48px;
    cursor: pointer;
    z-index: 1;
    transition: all 0.6s ease;
}

.slide-controls .slider-tab {
    position: absolute;
    height: 100%;
    width: 50%;
    left: 0;
    z-index: 0;
    border-radius: 5px;
    background: -webkit-linear-gradient(left, #ffeaa7, #e17055);
    transition: all 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}

input[type="radio"] {
    display: none;
}

#admin:checked~.slider-tab {
    left: 50%;
}

#admin:checked~label.admin {
    color: #fff;
    cursor: default;
    user-select: none;
}

#cust:checked~label.cust {
    cursor: default;
    user-select: none;
}

.wrapper .form-container {
    width: 100%;
    overflow: hidden;
}

.form-container .form-inner {
    display: flex;
    width: 200%;
}

.form-container .form-inner form {
    width: 50%;
    transition: all 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}

.form-inner form .field {
    height: 50px;
    width: 100%;
    margin-top: 20px;
    padding-top: 0px;
}

.form-inner form .field input {
    height: 100%;
    width: 100%;
    outline: none;
    padding-left: 15px;
    border-radius: 5px;
    border: 1px solid lightgrey;
    border-bottom-width: 2px;
    font-size: 17px;
    transition: all 0.3s ease;
}

.form-inner form .field input:focus {
    border-color: #fc83bb;
    /* box-shadow: inset 0 0 3px #fb6aae; */
}

.form-inner form .field input::placeholder {
    color: #999;
    transition: all 0.3s ease;
}

form .field input:focus::placeholder {
    color: #b3b3b3;
}

.form-inner form .pass-link {
    margin-top: 5px;
}

.form-inner form .admin-link {
    text-align: center;
    margin-top: 30px;
}

.form-inner form .pass-link a,
.form-inner form .admin-link a {
    color: #e17055;
    text-decoration: none;
}

.form-inner form .pass-link a:hover,
.form-inner form .admin-link a:hover {
    text-decoration: underline;
}

form .btn {
    height: 50px;
    width: 100%;
    border-radius: 5px;
    position: relative;
    overflow: hidden;
}

form .btn .btn-layer {
    height: 100%;
    width: 300%;
    position: absolute;
    left: -100%;
    background: -webkit-linear-gradient(right, #ffeaa7, #e17055, #ffeaa7, #e17055);
    border-radius: 5px;
    transition: all 0.4s ease;
    ;
}

form .btn:hover .btn-layer {
    left: 0;
    padding-top: 0px;
}

form .btn input[type="submit"] {
    height: 100%;
    width: 100%;
    z-index: 1;
    position: relative;
    background: none;
    border: none;
    color: #fff;
    padding-left: 0;
    border-radius: 5px;
    font-size: 20px;
    font-weight: 500;
    cursor: pointer;
}
</style>

<body>
    <div class="wrapper">
        <!-- <div class="title-text">
            <div class="title cust">
                Form cust
            </div>
            <div class="title admin">
                Form Registrasi
            </div>
        </div> -->
        <div class="form-container">
            <div class="slide-controls">
                <input type="radio" name="slide" id="cust" checked>
                <input type="radio" name="slide" id="admin">
                <label for="cust" class="slide cust">For Customer</label>
                <label for="admin" class="slide admin">For Chef & Cashier</label>
                <div class="slider-tab"></div>
            </div>
            <div class="form-inner">
                <form action="#" class="cust">

                    <div class="field btn" style="margin-top: 70px;">
                        <div class=" btn-layer"></div>
                        <!-- <img
                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/768px-Google_%22G%22_Logo.svg.png"> -->
                        <input type="submit" value="Login with Google">
                    </div>

                </form>
                <form action="#" class="admin">
                    <div class="field">
                        <input type="text" placeholder="Username" required>
                    </div>
                    <div class="field">
                        <input type="password" placeholder="Password" required>
                    </div>

                    <div class="field btn">
                        <div class="btn-layer"></div>
                        <input type="submit" value="Login">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
    const custText = document.querySelector(".title-text .cust");
    const custForm = document.querySelector("form.cust");
    const custBtn = document.querySelector("label.cust");
    const adminBtn = document.querySelector("label.admin");
    const adminLink = document.querySelector("form .admin-link a");
    adminBtn.onclick = (() => {
        custForm.style.marginLeft = "-50%";
        custText.style.marginLeft = "-50%";
    });
    custBtn.onclick = (() => {
        custForm.style.marginLeft = "0%";
        custText.style.marginLeft = "0%";
    });
    adminLink.onclick = (() => {
        adminBtn.click();
        return false;
    });
    </script>

</body>

</html>
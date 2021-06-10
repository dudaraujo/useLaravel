<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1ab94d0eba.js" crossorigin="anonymous"></script>
    <title>Formulário</title> 
    
    <!-- {resorce('css sdaosdao')} -->

<style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap');

    * {
        margin: 0; 
        border: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
    }

    body {
        background: linear-gradient(45deg, #8e2de2, #4a00e0);
        background-repeat: no-repeat;   
        min-height: 100vh; 
        min-width: 100vw;
        display: flex;    
        align-items: center;
        justify-content: center;
    }

    main.container {
        background: white;
        max-width: 350px;
        min-height: 40vh;
        padding: 2rem;
        box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.2); 
        border-radius: 8px;
    }

    main h2 {
        font-weight: 600;
        margin-bottom: 2rem;
        position: relative;
    }

    main h2::before { 
        content: '';
        position: absolute;
        height: 4px;
        width: 25px;
        bottom: 3px;
        left: 0;
        border-radius: 8px;
        background: linear-gradient(45deg, #8e2de2, #4a00e0);
    }

    form {
        display: flex;
        flex-direction: column;
    }

    .input-field {
        position: relative;
    }

    form .input-field:first-child {
        margin-bottom: 1.5rem; 
    }

    .input-field .underline::before {
        content: '';
        position: absolute;
        height: 1px;
        width: 100%;
        bottom: -5px;
        left: 0;
        background: rgba(0, 0, 0, 0.2);
    }

    .input-field .underline::after {
        content: '';
        position: absolute;
        height: 1px;
        width: 100%;
        bottom: -5px;
        left: 0;
        background: linear-gradient(45deg, #8e2de2, #4a00e0);
        transform: scaleX(0);
        transition: all .3s ease-in-out;
        transform-origin: left;
    }

    .input-field input:focus ~ .underline::after {
        transform: scaleX(1);
    }

    .input-field input {
        outline: none; 
        font-size: 0.9rem;
        color: rgba(0, 0, 0, 0.7);
        width: 100%;
    }

    .input-field input::placeholder {
        color: rgba(0, 0, 0, 0.5);
    }

    form input[ type="submit" ] {
        margin-top: 2rem;
        padding: 0.4rem;
        width: 100%;
        background: linear-gradient(to left, #4776e6, #8e54e9);
        cursor: pointer;
        color: white;
        font-size: 0.9rem;
        font-weight: 300;
        border-radius: 4px;
        transition: all 0.3 ease; 
    }

    form input[type="submit"]:hover { 
        letter-spacing: 0.5px;
        background: linear-gradient(to right, #4776e6, #8e54e9);
    }

    .footer {
        display: flex;
        flex-direction: column;
        margin-top: 1rem;
    }

    .footer span {
        color: rgba(0, 0, 0, 0.7);
        font-size: 0.8rem;
        text-align: center;
    }

    .footer .social-field {
        padding: 0.4rem;
        border-radius: 4px;
        font-size: 0.85rem;
        width: 100%;
        cursor: pointer;
        margin-top: 1rem;
    }

    .social-field a i {
        margin: 0 0.5rem;
        width: 15px;
    }

    .footer .social-field a {
        text-decoration: none;
        color: white;
    }

    .footer .social-field.twitter {
        background: linear-gradient(to right, #56a7f2, #468aca);
    }

    .footer .social-field.facebook {
        background: linear-gradient(to right, #1e3c72, #2a5298);
    }
</style>
</head>

<body>
    <main class="container">
        <h2>Login</h2>
        <form action="/login" method="POST"> 
            <div class="input-field">
                <input type="text" name="email" id="email"
                    placeholder="Enter Your E-mail">
                <div class="underline"></div>
            </div>
            <div class="input-field">
                <input type="password" name="senha" id="senha"
                    placeholder="Enter Your Password">
                <div class="underline"></div>
            </div>
            
            <input type="submit" value="OK">
        </form>

        <div class="footer">
            <span>Or Connect With Social Media</span>
            <div class="social-fields">
                <div class="social-field twitter">
                    <a href="#">
                        <i class="fab fa-twitter"></i>
                        Sing in with Twitter
                    </a>
                </div>
                <div class="social-field facebook">
                    <a href="#">
                        <i class="fab fa-facebook-f"></i>
                        Sing in with Facebook
                    </a>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
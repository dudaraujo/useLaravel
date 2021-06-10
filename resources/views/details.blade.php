<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<title>LOJA</title>
	<link rel="stylesheet" href="css/stilos.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">


    <style type="text/css">
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            width: 100%;
            min-height: 100vh;
            background: url(../img/Shop.jpg);
            background-size: contain;
            background-position: center;
            position: relative;
        }
        .container{
            position: absolute;
            top: 55%;
            left: 50%;
            transform: translate(-50%,-50%);
        }

        .newarrival{
            background: green;
            width: 50px;
            color: white;
            font-size: 12px;
            font-weight: bold;
        }
        .col-md-7 h2{
            color: #555;
        }
        .stars{
            height: 25px;
        }
        .price{
            color: #fe980f;
            font-size: 26px;
            font-weight: bold;
            padding-top: 20px;
        }
        input{
            border: 1px solid #ccc;
            font-weight: bold;
            height: 33px;
            text-align: center;
            width: 30px;
            outline: none;
        }
        .cart{
            background: #fe980f;
            color: #fff;
            font-size: 15px;
            margin-left: 20px;
            border: none;
            padding: 10px 20px;
            outline: none;
            transition: .5s;
        }
        .cart:hover{
            background: green;
            color: #fff;
        }
        .carousel-item img{
            border: 10px solid #00ff00;
        }
        img{
            border-radius: 15px;
        }
    </style>
</head>

<body>
    <div class="container"> 
    	<div class="row">
    		<div class="col-md-5">
    			<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                   <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="img/img1.jpg" class="d-block w-100" alt="First slide">
                      </div>
                      <div class="carousel-item">
                        <img src="img/img2.jpg" class="d-block w-100" alt="Second slide">
                      </div>
                      <div class="carousel-item">
                        <img src="img/img3.jpg" class="d-block w-100" alt="Third slide">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="prev">
                       <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                       <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="next">
                       <span class="carousel-control-next-icon" aria-hidden="true"></span>
                       <span class="visually-hidden">Next</span>
                    </button>
                </div>
    			
    		</div>
    		<div class="col-md-7">
    				<p class="newarrival text-center">NOVA</p>
    				<h2> <?= $nome?> </h2>
    				<p>Categoria do Produtos: <?= $categoria?> </p>
    				<img src="img/star.png" class="stars">
    				<p class="price">BRL R$ 15.00</p>
    	            <p><b>Avaliação:<br> In Stock</b></p>
    	            <p><b>Condição:<br> Nova</b></p>
    	            <p><b>Brand:<br> XYZ Company</b></p>
    	            <label>Quantidade:</label>
    	            <input type="text" value="1">
    	            <button type="button" class="btn-default cart">Add to card</button>
    		</div>
    	</div>
    </div>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
</body>
</html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<html>
		<head>
		<meta charset="UTF-8">
		<script src="https://www.google.com/recaptcha/api.js" async defer></script>

		</head>
			<body>
				<form action="login_ok.php" method="post">
					<h2 style="text-align:center;">Faça seu Login!</h2>
					<div class="container" style="width: 50%;">
						<div class="input-group mb-3";>
							<div class="input-group-prepend">
								<span class="input-group-text">Email</span>
							</div>
								<input type="text" class="form-control" placeholder="exemplo@exemplo.com.br" name="email"/>
						</div>
						<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text">Senha</span>
								</div>
									<input type="password" placeholder="********" class="form-control" name="senha"/>
						</div>
						<div class="g-recaptcha" data-sitekey="6LcZ260UAAAAAOmJytwa8Y_KerJfNPgVgtonldPv"></div><br>
						<input class="btn" style="border:0.5px solid gray; background:#4ECDC4; color: white" type="submit"/>
					</div>
					
				
				</form>
			</body>
	</html>

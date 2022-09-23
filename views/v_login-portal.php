<body class="body dark">
	<div class="container-fluid">
		<div class="login">
			
			<div class="container">
				<div class="login-portal-box">
					
					<div class="card text-bg-secondary bg-secondary">
						<div class="card-header text-center">
							<img src="views/assets/img/logo-v1.png" class="card-img-top">
							<h1>Service Down</h1>
							<h4>Login portal</h4>
						</div>
						<div class="card-body">
							<p class="card-text text-center">
								<?=$translate->t('login.text')?>
							</p>
						
							<form method="POST" class="mt-4">
								<div class="input-group mb-3">
									<span class="input-group-text" id="basic-email"><i class="fa-solid fa-at"></i></span>
									<input type="email" class="form-control" id="login-email" placeholder="<?=$translate->t('form.mail')?>" aria-label="<?=$translate->t('form.mail')?>" aria-describedby="basic-email">
								</div>
								
								<div class="input-group mb-3">
									<span class="input-group-text" id="basic-password"><i class="fa-solid fa-lock"></i></span>
									<input type="password" class="form-control" id="login-password" placeholder="<?=$translate->t('form.password')?>">
								</div>
								
								
								<div class="mb-3 form-check">
									<input type="checkbox" class="form-check-input" id="login-remenber">
									<label class="form-check-label" for="login-remenber"><?=$translate->t('form.remenberme')?></label>
								</div>
								
								<div class="row">
									<div class="col-4 text-center">
										<a type="button" class="btn btn-secondary" title="<?=$translate->t('form.createAccount')?>"><?=$translate->t('form.createAccount')?></a>
									</div>
									<div class="col-4 text-center">
										<a><?=$translate->t('form.lostPassword')?></a>
									</div>
									<div class="col-4 text-center">
										<button type="submit" class="btn btn-primary"><?=$translate->t('action.login')?></button>
									</div>
								</div>
							</form>
						</div>
					</div>
					
				</div>
			</div>
			
		</div>
	</div>
</body>
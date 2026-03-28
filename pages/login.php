<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Вход - Корочки.есть</title>
	<link rel="stylesheet" href="../css/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>
<body>
	
<script src="../js/validation.js"></script>


<section class="intro">
  <div class="bg-image h-100">
    <div class="mask d-flex align-items-center h-100" style="background-color: #f3f2f2;">
      <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
          <div class="col-12 col-lg-9 col-xl-8">
            <div class="card" style="border-radius: 1rem;">
              <div class="row g-0">
                <div class="col-md-4 d-none d-md-block">
                  <img
                    src="https://mdbootstrap.com/img/Photos/Others/sidenav2.jpg"
                    alt="login form"
                    class="img-fluid" style="border-top-left-radius: 1rem; border-bottom-left-radius: 1rem;"
                  />
                </div>
                <div class="col-md-8 d-flex align-items-center">
                  <div class="card-body py-5 px-4 p-md-5">

                    <form action="../handlers/login_h.php" method="POST">
                      <h4 class="fw-bold mb-4" style="color: #92aad0;">Вход в систему</h4>
                      <p class="mb-4" style="color: #45526e;">Для входа введите логин и пароль</p>

                      <div class="form-outline mb-4">
                        <input type="text" id="form2Example1 login" class="form-control" />
                        <label class="form-label" name="login" for="form2Example1">Логин</label>
                      </div>

                      <div class="form-outline mb-4">
                        <input type="password" name="password" id="form2Example2 password" class="form-control" />
                        <label class="form-label" for="form2Example2">Пароль</label>
                      </div>

                      <div class="d-flex justify-content-end pt-1 mb-4">
                        <button class="btn btn-primary btn-rounded" type="button" style="background-color: #92aad0;">Войти</button>
                      </div>
                      <hr>
                      <span>Еще не зарегистрированы? </span><a class="link float-end" href="register.php">Зарегистрироваться</a>
                    </form>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>









</body>
</html>

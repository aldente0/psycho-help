<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Частная клиника "Доктор-Врач"</title>
	<link type="image/x-icon" href="./icons/free-icon-cross-1354034.ico" rel="shortcut icon">
	<link type="Image/x-icon" href="./icons/free-icon-cross-1354034.ico" rel="icon">
	<link rel="stylesheet" href="./bootstrap/css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="./bootstrap/css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="./css/style.css">
</head>
<body>
	<div class="upheader container-xl">
		<img class="logo" src="./icons/free-icon-cross-1354034.svg" alt="Крест)">
		<div class="tel">
			<div ><img class="tel-icon" src="./icons/mobile.svg" alt=""></div>
			<div class="tel-wrapper">
				<div class="tel-text">24/7 phone call:</div>
				<div class="tel-number"><a href="tel:+78005553535">88005553535</a></div>
			</div>
		</div>
		<div class="upheader-buttons">
			<button type="button" class="btn btn_request btn-primary">Запись на прием</button>
			<button type="button" class="btn btn_request btn-danger">Вызов скорой</button>
		</div>
		<div class="upheader-area">
			<button type="button" class="btn btn-light"> <img class="upheader-area__button" src="./icons/free-icon-entrance-2088029.svg" alt="Door">Sign in</button>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		<div class="container-xxl container-xl container-sm">
		  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<li class="nav-item">
					<a class="nav-link color active" aria-current="page" href="#!" >Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link color" href="#!">Services</a>
				</li>
				<li class="nav-item ">
					<a class="nav-link color" href="#!">Doctors</a>
				</li>
			</ul>
		  </div>
		</div>
	</nav>

	<div class="offer">
		<div class="container">
			<div class="offer-wrapper">
				<div class="card card-dark bg-primary ps-4" style="width: 100%;">
					<div class="card-wrapper">
						<div class="card-body card-body__text">
							<div class="">
								<h3 class="card-title text-light mb-3">Выгодное предложение</h3>
								<h5 class="card-text text-light lh-5">Если не хватает витамина D4, предлагаем поездку в солнечную Африку</h5>
							</div>
							<button type="button" class="btn btn_request btn-danger">Подробнее</button>
							
						  </div>
						  <div class="card-body card-body__image">
							  <picture >
								  <source srcset="./images/offer/sun.webp">
								  <img class="card-image" src="./images/offer/sun.png" alt="">
							  </picture>
						  </div>
					</div>
					<p class="card-text text-secondary ps-4 mb-3">Не звоните, это мошенники</p>
				  </div>
			</div>
		</div>
	</div>

	<div class="services-options slide pt-5">
		<div id="carouselExampleIndicators" class="carousel  pt-5 bg-dark" data-bs-ride="true" style="height: 100%;">
			<div class="carousel-indicators">
			  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
			  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
			  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
			</div>
			<div class="carousel-inner container" >
			  <div class="carousel-item active">
				<div class="d-flex w-100 carousel-item__wrapper" >
					<div class="carousel-item__text">
						<h4 class="carousel-item__header text-light">Получайте консультации от лучших врачей</р>
						<h6 class="carousel-item__descr text-light">Мы уверены, этого вы знаете :)</h6>
					</div>
					<div class="carousel-item__image">
						<picture>
							<source srcset="./images/carousel/doctor-PhotoRoom_1_.webp">
							<img style="max-width: 300px;" src="./images/carousel/doctor-PhotoRoom(1).png" alt="айболит">
						</picture>
					</div>
				</div>
			  </div>
			  <div class="carousel-item">
				<div class="d-flex w-100 carousel-item__wrapper" >
					<div class="carousel-item__text">
						<h4 class="carousel-item__header text-light">Заходите в наш процедурный кабинет</р>
						<h6 class="carousel-item__descr text-light">Даже вашему ребенку не будет больно</h6>
					</div>
					<div class="carousel-item__image">
						<picture>
							<source srcset="./images/carousel/doctor-monkey-PhotoRoom.webp">
							<img style="max-width: 300px;" src="./images/carousel/doctor-monkey-PhotoRoom.png" alt="обезьна со шприцом">
						</picture>
					</div>
				</div>
			  </div>
			  <div class="carousel-item">
				<div class="d-flex w-100 carousel-item__wrapper" >
					<div class="carousel-item__text">
						<h4 class="carousel-item__header text-light">У нас также делают замечательный массаж</р>
						<h6 class="carousel-item__descr text-light">Парень справа вас в этом убедит</h6>
					</div>
					<div class="carousel-item__image">
						<picture>
							<source srcset="./images/carousel/Ricardo-Milos-PhotoRoom.webp">
							<img style="max-width: 350px;" src="./images/carousel/Ricardo-Milos-PhotoRoom.png" alt="рикардо">
						</picture>
					</div>
				</div>
			  </div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
			  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			  <span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
			  <span class="carousel-control-next-icon" aria-hidden="true"></span>
			  <span class="visually-hidden">Next</span>
			</button>
		  </div>
	</div>

	<div class="promo container">
		<h1>Клиника "Доктор-Врач"</h1>
		<h3>Как назвались так и лечим :)</h3>
	</div>

	<div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1483.9583164580474!2d40.41380313974363!3d56.132459093395816!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x414c7bcfee5184bb%3A0xfe7df4a9ac5d0198!2z0JTQtdC_0LDRgNGC0LDQvNC10L3RgiDQt9C00YDQsNCy0L7QvtGF0YDQsNC90LXQvdC40Y8g0LDQtNC80LjQvdC40YHRgtGA0LDRhtC40Lgg0JLQu9Cw0LTQuNC80LjRgNGB0LrQvtC5INC-0LHQu9Cw0YHRgtC4!5e0!3m2!1sru!2sru!4v1669279644545!5m2!1sru!2sru" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>

	<div class="about pt-5 container">
		<div class="about-main">
			<h3 class="about-header">О клинике</h3>
			<div class="about-descr">Медицинский холдинг «Доктор-Врач» — это крупнейшая сеть многопрофильных медицинских центров для взрослых и детей, ведущая историю своего существования с ???? года </div>
		</div>
		<div class="about-addittialy">
			<div class="about-history">Медицинский холдинг не ведёт свою историю. Сейчас в его состав входят неизвестное кол-во медицинских центров по всей стране. В 2021 году где-то открылось очередное отделение.</div>
			<div class="about-services">В клиниках занимаются диагностикой и лечением взрослых и детей, а также оказывают специализированную помощь по различным медицинским направлениям (онкология, ЛОР-хирургия, офтальмохирургия, флебология, рентгенэндоваскулярная диагностика и лечение, вспомогательные репродуктивные технологии и др.). <a href="">Подробнее.</a></div>
		</div>
	</div>

	<footer class="footer bg-primary">
		<div class="container">
			<div class="footer-wrapper">
				<div class="footer-nav">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link footer-link text-light text-light" aria-current="page" href="#!" >Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link footer-link text-light" href="#!">Services</a>
						</li>
						<li class="nav-item ">
							<a class="nav-link footer-link text-light" href="#!">Doctors</a>
						</li>
					</ul>
				</div>
				<div class="footer-middle">
					<div class="footer-title text-light">Поставщики иконок:</div>
					<div class=""><a class="nav-link footer-link text-light" href="https://www.flaticon.com/ru/free-icons/" title="пересекать иконки">Flaticon</a></div>
					<div class=""><a class="nav-link footer-link text-light" href="https://loon.site/">Loon</a></div>
					
					
				</div>
				<div class="footer-soc">
					<div class="footer-icons">
						<div class="">
							<a href="#!"><img class="footer-icon" src="./icons/vk-ivon.svg" alt="вк"></a>
						</div>
						<div class="">
							<a href="#!"><img class="footer-icon" src="./icons/tg-icon.svg" alt="тг"></a>
						</div>
						<div class="">
							<a href="#!"><img class="footer-icon" src="./icons/inst-icon.svg" alt="инст"></a>
						</div>
					</div>
					<div class=" "><a class=" footer-number tel-number link-light" href="tel:+78005553535">8(800)-555-35-35</a></div>
				</div>
			</div>
		</div>
	</footer>

	<div id="mod" class="mod mod_hidden">
		<form id="form" class="form" name="form" method="POST">
		<h2 class="mb-5">Отправка заявки</h2>
		<div class="mb-3">
				<label for="name-input" class="form-label">Ваше имя</label>
				<label for="name-input" class="error error_hidden">Вы указали слишком короткое имя</label>
				<input type="text" name="username" class="form-control" id="name-input" placeholder="...">
			</div>
			<div class="mb-3">
				<label for="tel-input"  class="form-label">Ваш номер телефона</label>
				<label for="tel-input" class="error error_hidden">Не верно указан номер телефона</label>
				<input type="tel" name="tel" class="form-control" id="tel-input" placeholder="89005553535">
			</div>
			<div class="mb-3">
				<label for="exampleFormControlTextarea1" class="form-label">Ваши жалобы</label>
				<textarea class="form-control" name="message" id="message-area" rows="3"></textarea>
			</div>
			<button type="submit" class="btn btn-primary">Отправить запрос</button>
		</form>
		<div id="success" class="success-mod success-mod_hidden">
			<h4>Заявка успешно отправлена</h4>
			<div class="success-mod__text">
				В ближайшее время с вами свяжется специалист контакт центра.
			</div>
		</div>
	</div>
	
	<script src="./bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="./bootstrap/js/bootstrap.min.js"></script>
	<script src="./js/app.js"></script>
</body>
</html>
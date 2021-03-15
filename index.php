<?php include ("modules/include-head.php");?>

<body>

	<?php include ("modules/nav.php");?>

	<div class="content">
		<main class="search">
			<div class="container">
				<div class="search--wrap">
					<div class="search--targetolog">
						<span>Требуется удаленно</span>
						<h1>таргетолог</h1>
						<p>Ты хорошо знаешь английский <br> и ищешь удаленную работу - тогда эта вакансия для тебя!</p>
						<a href="#join" class="button">Откликнутся</a>
					</div>
					<div class="search--img">
						<picture><source srcset="img/frame-1.webp" type="image/webp">
							<img src="img/frame-1.png" alt="frame-1">
						</picture>
					</div>
				</div>
			</div>
		</main>
		<section id="about" class="about">
			<div class="container">
				<div class="about--wrap">
					<div class="about--img">
						<picture><source loading="lazy" srcset="img/frame-2.webp" type="image/webp">
							<img loading="lazy" src="img/frame-2.png" alt="frame-2">
						</picture>
					</div>
					<div class="about--info">
						<span>Кто <b>мы?</b></span>
						<p>RemotEmployees – это аутстаффинговая компания, которая предоставляет рабочие места в Украине ориентируясь на Европейский и Американский рынок.</p>
						<p>Сотрудничество с нами позволит вам приобрести новые умения в сфере IT и маркетинга, а также развить навыки общения на английском с иностранными носителями языка.</p>
					</div>
				</div>
			</div>
		</section>
		<section id="required" class="required">
			<div class="container">
				<div class="required--header"><span>Что должен <b>уметь наш кандидат :</b></span></div>
				<div class="required--skills">
					<div class="required--skill-1">
						<picture><source srcset="img/icon-skill-1.webp" type="image/webp">
							<img src="img/icon-skill-1.png" alt="skill-1">
						</picture>
						<span>Быстро учиться</span>
						<p>Желание быстро учиться в сфере интернет-маркетинга</p>
					</div>
					<div class="required--skill-2">
						<picture><source srcset="img/icon-skill-2.webp" type="image/webp">
							<img src="img/icon-skill-2.png" alt="skill-2">
						</picture>
						<span>Знать Английский</span>
						<p>Владеть устным и письменным английским </p>
					</div>
					<div class="required--skill-3">
						<picture><source srcset="img/icon-skill-3.webp" type="image/webp">
							<img src="img/icon-skill-3.png" alt="skill-3">
						</picture>
						<span>Анализировать</span>
						<p>Уметь работать с большим количеством информации</p>
					</div>
				</div>
			</div>
		</section>
		<section class="advantages">
			<div class="container">
				<div class="advantages--wrap">
					<div class="advantages--info">
						<span>Преимущества работы в <b>RemotEmployees:</b></span>
						<div class="advantages--list">
							<div class="advantage-1">
								<div class="counter"></div>
								<div>
									<span>Не обязателен опыт работы</span>
									<p>Не обязателен опыт работы</p>
								</div>
							</div>
							<div class="advantage-2">
								<div class="counter"></div>
								<div>
									<span>Своевременная оплата</span>
									<p>Не обязателен опыт работы</p>
								</div>
							</div>
							<div class="advantage-3">
								<div class="counter"></div>
								<div>
									<span>Дневные/Вечерние смены</span>
									<p>Не обязателен опыт работы</p>
								</div>
							</div>
							<div class="advantage-4">
								<div class="counter"></div>
								<div>
									<span>Удалённая работа из дома</span>
									<p>Не обязателен опыт работы</p>
								</div>
							</div>
						</div>
					</div>
					<div class="advantages--img">
						<picture><source loading="lazy" srcset="img/frame-3.webp" type="image/webp">
							<img loading="lazy" src="img/frame-3.png" alt="frame-3">
						</picture>
					</div>
				</div>
			</div>
		</section>
		<section id="join" class="join">
			<div class="container">
				<div class="join--wrap">
					<div class="join--img">
						<picture><source loading="lazy" srcset="img/frame-4.webp" type="image/webp">
							<img loading="lazy" src="img/frame-4.png" alt="frame-4">
						</picture>
					</div>
					<div class="join--info">
						<span>Присоединяйся</span>
						<p>Наша компания заинтересована в талантливых людях, которые хотят освоить новые навыки и улучшить их на практике.</p>
						<form name="formJoin" method="POST" action="#">
							<div class="input-wrap"><input type="name" name="name" placeholder="ФИО"></div>
							<div class="input-wrap"><input type="tel" name="phone" placeholder="Telegram \ Viber"></div>
							<div class="input-wrap"><input type="email" name="email" placeholder="E - mail"></div>
							<button type="submit">Откликнутся</button>
						</form>
					</div>
				</div>
			</div>
		</section>
	<?php include ("modules/footer.php");?>
	</div>
	<?php include ("modules/include-bottom.php");?>
</body>
</html>

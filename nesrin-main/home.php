<?php 
session_start();

include "db_conn.php";
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
}

 ?>

<!DOCTYPE html> 
<html dir="rtl">
<head>
    <title>الصفحة الرئيسية</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free singlepage web template created by GraphBerry">
    <meta name="keywords" content="HTML5, Bootstrap 3, CSS3, javascript, PHP, Responsive, Mobile">
    <meta name="author" content="GraphBerry.com"/>
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<header id="header">
		
		<!-- Section title -->s
		<h1 class="sr-only">Modus | الرئيسيه</h1>
		
		<nav class="navbar navbar-default navbar-fixed-top">
		  <!-- Section title -->
		  <h1 class="sr-only">Main navigation</h1>

		  <div class="container">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand smoothScroll" href="#home">
		        <img src="img/M.jpg">
		      </a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="main-navbar">
		      <ul class="nav navbar-nav navbar-right">
		        <li class="active"><a class="smoothScroll" href="#home">الرئيسيه <span class="sr-only">(current)</span></a></li>
		        <li><a class="smoothScroll" href="#portfolio">انواع الرياضه</a></li>
		        <li><a class="smoothScroll" href="#services"> ادوات الرياضة</a></li>
		        <li><a class="smoothScroll" href="#clients">للمزيد</a></li>
		        <li><a class="smoothScroll" href="#contact">التواصل</a></li> 
				<li><a class="smoothScroll" id="logoutButton" onclick="logout()">تسجيل الخروج</a></li>  
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container -->
		</nav>

	</header>

	<main>
		
		<section id="home">

			<!-- Section title -->
			<h1 class="sr-only">Home section</h1>
			
			<div class="overlay"></div>

			<div class="home-content">
				
				<div class="container">

					<div class="row">

						<div class="col-md-8 col-md-offset-2">
							

							<span class="h2">تمارين هوائية/ لياقة بدنية / خسارة الوزن</span class="h5">

							<h2 class="h1">عالم الرياضة </h1>

							<div class="cta-container">

								<a href="#" class="btn btn-default">احصل على المعلومات</a>

								<button href="#" class="btn btn-primary"> استكشف</button>

							</div>

						</div>
						
					</div>

				</div>

			</div>

			<a id="down-icon" class="down-icon smoothScroll" href="#history">
				<img class="down-arrow" src="img/svg/down_icon.svg" alt="Down arrow">
			</a>

		</section>

		<section id="history">

			<!-- Section title -->
			<h1 class="sr-only">History section</h1>

			<div class="container">

				<div class="row">
					
					<div class="col-md-8 col-md-offset-2">

						<div class="history-content">
							
							<h1  class="section-title">"تأثير الرياضة على الوزن" </h1>

							<h3>تساعد ممارسة الرياضة على منع زيادة الوزن والمحافظة على فقدانه، وذلك عن طريق حرق السعرات الحرارية
<br>
				وكلما زادت شدة النشاط البدني زادت السعرات الحرارية المحروقة

 <br>
						وفي حال عدم توفر الوقت الكبير لممارسة الرياضة أو للذهاب الى الجيم بشكل منتظم؛
	 <br>
							فيمكن تحقيق فوائد الرياضة بمجرد القيام بأكثر من نشاط خلال اليوم مثل استخدام السلالم بدلاً من المصعد أو زيادة المهام المنزلية الروتينية

 <br> 
                                <h4></h4>
تفيد ممارسة الإنسان المنتظمة للرياضة بغض النظر عن وزنه في تعزز البروتين الدهني عالي الكثافة (بالإنجليزية: HDL)، وتخفّض نسبة الكولسترول والدهون الثلاثية غير الصحية

.</h3>

						</div>

					</div>

				</div>
				
			</div>	

		</section> 




		<section id="portfolio">

			<!-- Section title -->
			<h1 class="sr-only">Portfolio section</h1>

			<div class="slider-container">

				<figure class="project grabbable">
					<img class="img-responsive" src="C:\Users\IDEAS\Desktop\المشروع\modus\img\portfolio/n.jpg" alt="Project Image">
					<div class="description">
						<figcaption><h3>"التزلج على الصخور"  
</h3></figcaption>
						<p>توجد تلك الرياضة الغريبة في دولة النمسا مع موسم التزلج على الجليد مما إن أهالي النمسا لا يهطل عليهم ثلوج فابتكروا نوع غريب من الرياضة هي التزلج على الصخور بديل عن الجليد .
                        </br>
وتُعد منطقة مثالية لهذا النشاط، فرغم عدم احتوائها على أية ثلوج، إلا أنها مليئة بمنحدرات صخرية يقوم المتنافسين بتسلقها على أقدامهم ثم يهبطون باستخدام أدوات التزحلق.
                     </p>
                
						<ul class="social-list">
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</figure>
				<figure class="project grabbable">
					<img class="img-responsive" src="C:\Users\IDEAS\Desktop\المشروع\modus\img\portfolio/v.jpg" alt="Project Image">
					<div class="description">
						<figcaption><h3>"الملاكمة"</h3></figcaption>
						<p>تعد الملاكمة إحدى الرياضات العريقة، حيث تعتمد الملاكمة على الهجوم والدفاع بقبضات اليد، وهي ضمن الرياضات القتالية، بحيث تدور المعركة في منطقة تسمى الحلبة، وتتكون من جولات محددة، ويُحدد الفائز بالنقاط، أو عن طريق القضاء على الخصم.
تحسن رياضة الملاكمة على صحة الجهاز الدوراني للجسم والذي يشتمل على القلب والأوعية الدمويه            </p>
						<ul class="social-list">
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</figure>

				<figure class="project grabbable">
					<img class="img-responsive" src="C:\Users\IDEAS\Desktop\المشروع\modus\img\portfolio/f.jpg" alt="Project Image">
					<div class="description">
						<figcaption><h3>"تسلق الجبال"</h3></figcaption>
						<p>تندرج رياضة تسلق الجبال تحت إطار المغامرات الصعبة والشيّقه
فقد تؤدي في حال عدم أخذ الاحتياطات اللازمة إلى الوفاة، أو التعرض لإصابة خطيرة، نتيجة الانزلاق من المنحدر الجبلي، وفي كل الأحوال تعود ممارسة رياضة تسلق الجبال على الشخص بالعديد من الفوائد فهي تزيد قوة العظام
و الاتزان بين القدرات الجسدية والعقلية و تنشيط الدورة الدموية في الجسم </p>
						<ul class="social-list">
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</figure>

				<figure class="project grabbable">
					<img class="img-responsive" src="C:\Users\IDEAS\Desktop\المشروع\modus\img\portfolio/s.jpg" alt="Project Image">
					<div class="description">
						<figcaption><h3>"ركوب الدراجات الهوائيه"</h3></figcaption>
						<p>ركوب الدراجات الجبلية هي رياضة ركوب الدراجات على الطرق الوعرة، وذلك باستخدام الدراجة المصممة خصيصًا لذلك (الدراجة الجبلية)توجد أوجه تشابه بين الدراجات الجبلية وغيرها من الدراجات، ولكن تتضمن الميزات المصممة لتعزيز المتانة والأداء في المناطق الوعرة.ركوب الدراجات الجبلية عموما يمكن تقسيمها إلى فئات متعددة.هذه الرياضة الفردية تتطلب القدرة على التحمل،. </p>
						<ul class="social-list">
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</figure>

				<figure class="project grabbable">
					<img class="img-responsive" src="C:\Users\IDEAS\Desktop\المشروع\modus\img\portfolio/h.jpg" alt="Project Image">
					<div class="description">
						<figcaption><h3>السباحه</h3></figcaption>
						<p> تُعرّف السباحة بأنها نشاطٌ بدنيّ يتم خلاله دفع الجسم في الماء عن طريق استخدام حركات الذراعين والساقين؛ حيث يؤدي ذلك إلى أن يعوم الجسم بشكلٍ طبيعي في الماء، ويُمكن أن تكون السباحة بمثابة رياضة يُمارسها البعض أو قد تكون عبارة عن نشاطٍ ترفيهي للأشخاص، وقد عُرفت السباحة منذ تاريخٍ طويل يمتد إلى 2500 سنه قبل الميلاد وقد كانت السباحة جزءاً من التدريبات القتالية التي عرفها اليونانيين والرومان القدماء.</p>
						<ul class="social-list">
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</figure>

				<figure class="project grabbable">
					<img class="img-responsive" src="C:\Users\IDEAS\Desktop\المشروع\modus\img\portfolio/t.jpg" alt="Project Image">
					<div class="description">
						<figcaption><h3>الجمباز</h3></figcaption>
						<p>الجمباز نوع من أنواع الرياضة والتي تكون فرديّة في أدائها، وهي عملية أداء سلسلة من الحركات على الجهاز المستخدم في الجمباز والتي تكون مختلفة هذه الأجهزة التي يتحرّك عليها الشخص، الجمباز تحتاج الى الكثير من الأشياء وهي القوة والمرونة والبراعة والسرعة في أداء الحركات، وعند ممارسة رياضة الجمباز فهي بالتالي تساعد على تقوية العضلات بشكل كبير والتي تقلل من الآم العضلات والالتهابات، وتزيد من مرونة العضلات وتقوية العظام والحفاظ على وزن الجسم بشكل مثالي .</p>
						<ul class="social-list">
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</figure>

			</div>

		</section>

		<section id="services">

			<!-- Section title -->
			<h1 class="sr-only">Services section</h1>
			
			<div class="container">
				
				<div class="row">
					
					<div class="col-md-4">
						
						<div class="service">
							<figure>
								<img src="C:\Users\IDEAS\Desktop\المشروع\modus\img\portfolio/r.jpg" alt="Idea image">
								<div class="separator"></div>
                                <figcaption><h3>"جهاز السير"</h3> </figcaption>
							</figure>
							<h4>يعمل علي حرق السعرات الحرارية, يعمل علي خسارة الوزن الزائد في الجسم, خفض مستويات ضغط الدم,تقوية عضلات المنطقة الوسطى من الجسم،
                                </br>مثل: عضلات البطن، وتلعب هذه العضلات دورًا هامًّا في تحسين وقفة واستقامة الجسم بالإضافة لتحسين قدرة الجسم على تحمل التمارين الرياضية
 </h4>
						</div>

					</div>

					<div class="col-md-4">

						<div class="service">
							<figure>
								<img src="C:\Users\IDEAS\Desktop\المشروع\modus\img\portfolio/33.jpg" alt="Work image">
                                <div class="separator"></div>
								<figcaption><h3>"الدراجة الهوائية"</h3></figcaption>
							</figure>
                            
							<h4>الدراجة الهوائية تعتبر رياضة من الرياضات المخصصة لحرق السعرات الحرارية والتي تعرف باسم "الكارديو"، معدل حرق السعرات الحرارية بهذه الرياضة يبلغ 400 سعر حراري للساعة الواحدة، والدراجة الهوائية تعتبر مخصصة لخسارة الوزن وتقوية العضلات في الجزء السفلي من الجسم. </h4>
                        </div>
					</div>
					<div class="col-md-4">

						<div class="service">
							<figure>
								<img src="C:\Users\IDEAS\Desktop\المشروع\modus\img\portfolio/77.jpg" alt="Deliver image">
								<div class="separator"></div>
								<figcaption><h3>"الاثقال"</h3></figcaption>
							</figure>
							<h4> أثبتت الدراسات أن الشخص الذي يقوم برفع بعض الأثقال ينقد الدهون من جسمه أثناء ممارسة التمارين الرياضية بشكل أسرع من ذلك الذي لا يستخدم الأثقال لذا، ينصحك خبراء حميتي برفع أثقال تناسب عمرك و قدرتك وذلك أثناء المشي أو الركض او قيامك بالتمارين البيتية لتحصل على عضلات أقوى وتتخلص من الدهون بشكل أسرع وتقوم بنحت جسمك بشكل رائع.</h4>
						</div>

					</div>
 
				</div>

			</div>

		</section>

		<section id="clients">

			<!-- Section title -->
			<h1 class="sr-only">Clients section</h1>
			
			<div class="container">

				<div class="row">

					<div class="col-md-8 col-md-offset-2">

						<div class="clients-content">
			
							<h2 class="section-title">  "تمارين في المنزل "</h2>

							<blockquote>
								<video controls>
                                      <source src="C:\Users\IDEAS\Desktop\المشروع\modus\img/o.mp4"></video>
								<footer><cite title="Mr. Lorem Ipsum">Mr. Lorem Ipsum</cite></footer>
							</blockquote>

						</div>

					</div>

				</div>

				<div class="clients-logs-container">

					<div class="row">
						
						<div class="col-sm-3">
							<div class="single-client-container">
								<img src="C:\Users\IDEAS\Desktop\المشروع\modus\img\portfolio/ee.jpg" alt="Client logo image">
							</div>
						</div>

						<div class="col-sm-3">
							<div class="single-client-container">
								<img src="C:\Users\IDEAS\Desktop\المشروع\modus\img\portfolio/tt.jpg" alt="Client logo image">
							</div>
						</div>

						<div class="col-sm-3">
							<div class="single-client-container">
								<img src="C:\Users\IDEAS\Desktop\المشروع\modus\img\portfolio/08.jpg" alt="Client logo image">
							</div>
						</div>

						<div class="col-sm-3">
							<div class="single-client-container">
								<img src="C:\Users\IDEAS\Desktop\المشروع\modus\img\portfolio/21.jpg" alt="Client logo image">
							</div>
						</div>

					</div>

				</div>

			</div>

		</section>

		<section id="contact">

			<!-- Section title -->
			<h1 class="sr-only">Contact section</h1>
			
			<div class="container">
					
				<div class="row">
					
					<div class="col-md-6">
						
						<div id="about-subsection" class="contact-subsection">
							
							<h2 class="sub-section-title">"وزارة الرياضة"</h2>

							<h3>أولت المملكة العربية السعودية اهتمامًا كبيرًا ضمن مبادراتها ومشاريعها لمجال الرياضة والشباب؛ وذلك للوصول إلى هدف رئيس وهو بناء مجتمع حيوي يهدف لتحقيق أحد أبرز مستهدفات رؤية 2030 في زيادة مستويات النشاط البدني بين الشرائح السكانية، و وزارة الرياضة تسعى الى تعزيز مبادئ وقيم الرياضة لشبابنا ، وزيادة مستوى الأداء بما يساهم في تحسين وتطوير البيئة الرياضية في المملكة، فسهلت عليك الاستعلام عن افضل الصالات والمراكز الرياضيه المرخصة سواء كانت للرجال او النساء </h3>
                            <a href="https://mos.gov.sa/ar/ourservices/Pages/servicedetails.aspx?ItemID=20">للاستعلام عن الصالات والمراكز الرياضية المرخصة 
                               </a>

						</div>

					</div>

					<div class="col-md-6">
						
						<div id="form-subsection" class="contact-subsection">
							
							<h2 class="sub-section-title">للتواصل معنا</h2>

							<form>

								<div class="form-group">
									<label class="email-label" for="Email">الايميل:</label>
									<input type="email" class="form-control" id="Email">
								</div>

								<div class="form-group">
								    <label class="message-label" for="Message">الرجاء منكم مشاركتنا اقتراحاتكم الجميله </label>
								  	<textarea class="form-control" id="Message" rows="2"></textarea>
								</div>
							  
							  	<button type="submit" class="btn btn-default pull-right">ارسال</button>
								 <h3> <a href="f.php" class="comment-button">اضافة تعليق</a></h3>
							</form>

						</div>

					</div>

				</div>

			</div>

		</section>

	</main>

	<footer id="footer">
    <!-- Section title -->
    <h1 class="sr-only">Footer section</h1>
    
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <small class="copyright">
                    © <span id="year">2017</span><div class="col-sm-6">
 
</div>

                </small>
            </div>
            <div class="col-sm-6">
                <ul class="social-list">
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>


	<!-- Scripts -->
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/smooth-scroll.min.js"></script>
	<script type="text/javascript" src="js/modernizr.mq.js"></script>
	<script type="text/javascript" src="js/slick.min.js"></script>
	<script>
function logout() {
    // Redirect to logout.php when the button is clicked
    window.location.href = 'logout.php';
}
</script>

	<!-- Latest compiled and minified JavaScript Bootstrap-->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	
	<!-- Custom JS -->
	<script src="js/custom.js"></script>

</body>
</html>
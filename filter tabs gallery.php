<?php
/*
Template Name: Portfolio
*/
?>
<?php get_header(); ?>
<div class="main-wrapper">
<div class="portfoliobg-cs">
	<div class="container">
		<section class="home-portfolio">
	<div class="container">
		<div class="row animated-leftcss" style="align-items: flex-end;">
			<div class="col-md-6">
				<h4 class="all-h4">Our Work</h4>
				<h3 class="all-h3">Explore what we have <br class="br-none"> done for our clients</h3>
			</div>
			<div class="col-md-6">
				<div class="prtfpage">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/homepage-assets/img/Projects.png" alt="">
				</div>
			</div>
		</div>
		<div class="home-port">
			 <ul class="nav nav-tabs" id="portfoliocspg">
                    <li><button class="prbtmp active" onclick="filterSelection('all')">All</button></li>
                    <li><button class="prbtmp" onclick="filterSelection('responsive-websites')">Website</button></li>
                    <li><button class="prbtmp" onclick="filterSelection('mobile-applications')">Mobile Application</button></li>
                    <!-- <li><button class="prbtmp" onclick="filterSelection('logo-design')">Brochure</button></li> -->
                    <!-- <li><button class="prbtmp" onclick="filterSelection('corporate-brandings')">Logo</button></li> -->
                </ul>
			<div class="portfolio-wrapper clearfix">
				
				<div class="porfolio-col responsive-websites show">
					<div class="portfolio-slide-cnt">
						<div class="pr-wrap">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/homepage-assets/img/portfolio/pr-1.jpg" alt="DXBIKE - Enhance your Riding & Fitness">
						</div>
						<div class="pr-labels">
							<span>App</span>
							<span>Health</span>
							<span>Appointment</span>
							<span>E-Commerce</span>
						</div>
						<h3 class="h3"><a href="#">DXBIKE - Enhance your Riding & Fitness</a></h3>
						<p>My Pet is an application that allow users to keep health information about there pet,<br class="br-none"> remind them of the periodic maintenance appointment and more...</p>
					</div>
				</div><!-- swiper slide -->

				<div class="porfolio-col responsive-websites show">
					<div class="portfolio-slide-cnt">
						<div class="pr-wrap">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/homepage-assets/img/portfolio/pr-1.jpg" alt="DXBIKE - Enhance your Riding & Fitness">
						</div>
						<div class="pr-labels">
							<span>App</span>
							<span>Health</span>
							<span>Appointment</span>
							<span>E-Commerce</span>
						</div>
						<h3 class="h3"><a href="#">DXBIKE - Enhance your Riding & Fitness</a></h3>
						<p>My Pet is an application that allow users to keep health information about there pet,<br class="br-none"> remind them of the periodic maintenance appointment and more...</p>
					</div>
				</div><!-- swiper slide -->




				<div class="porfolio-col mobile-applications show">
					<div class="portfolio-slide-cnt">
						<div class="pr-wrap">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/homepage-assets/img/portfolio/pr-2.jpg" alt="Abojomla E-commerce App">
						</div>
						<div class="pr-labels">
							<span>App</span>
							<span>Health</span>
							<span>Appointment</span>
							<span>E-Commerce</span>
						</div>
						<h3 class="h3"><a href="#">Abojomla E-commerce App</a></h3>
						<p>My Pet is an application that allow users to keep health information about there pet,<br class="br-none"> remind them of the periodic maintenance appointment and more...</p>
					</div>
				</div><!-- swiper slide -->
				<div class="porfolio-col mobile-applications show">
					<div class="portfolio-slide-cnt">
						<div class="pr-wrap">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/homepage-assets/img/portfolio/pr-2.jpg" alt="Abojomla E-commerce App">
						</div>
						<div class="pr-labels">
							<span>App</span>
							<span>Health</span>
							<span>Appointment</span>
							<span>E-Commerce</span>
						</div>
						<h3 class="h3"><a href="#">Abojomla E-commerce App</a></h3>
						<p>My Pet is an application that allow users to keep health information about there pet,<br class="br-none"> remind them of the periodic maintenance appointment and more...</p>
					</div>
				</div><!-- swiper slide -->

				<script type="text/javascript">

    filterSelection("all")
    function filterSelection(c) {
        var x, i;
        x = document.getElementsByClassName("porfolio-col");
        if (c == "all") c = "";
        for (i = 0; i < x.length; i++) {
            w3RemoveClass(x[i], "show");
            if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
        }
    }



    function w3AddClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
            if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
        }
    }



    function w3RemoveClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
            while (arr1.indexOf(arr2[i]) > -1) {
                arr1.splice(arr1.indexOf(arr2[i]), 1);
            }
        }
        element.className = arr1.join(" ");
    }

var btnContainer = document.getElementById("portfoliocspg");
var btns = Array.from(btnContainer.getElementsByClassName("prbtmp"));

for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function() {
        var current = Array.from(document.getElementsByClassName("active"));
        current.forEach(function(element) {
            element.classList.remove("active");
        });
        this.classList.add("active");
    });
}

</script>
				
<style>
	.portfolio-wrapper .porfolio-col{
	    display: none;
	}
	.portfolio-wrapper .show {
	    display: block !important;
	}
</style>
				
			</div>
		</div>
	</div>
</section>
	</div>
</div>
</div>
<?php get_footer(); ?>
<?php
include_once('header.php');
?>

<body>

<?php
include_once('subheader.php');
?>

	<!--welcome-hero start -->
	<section id="home" class="welcome-hero" style="height: 200px;">
		<div class="container">
		
		</div>

	</section><!--/.welcome-hero-->
	<!--welcome-hero end -->

	<!--works start -->
	<section id="works" class="works">
		<div class="container" style="margin-top: 50px;">
			<div class="section-header">
			<h2 style="font-size: xx-large;">
    <?php
    if (isset($_GET['name'])) {
        $data = $_GET['name'];
		$title = "";
		$content = "";
		if($data == "sourcing"){
			$title = "Sourcing";
			$content = "Our Services Include:
Supplier Identification and Selection:
We identify and select the best suppliers to meet your specific requirements. Our robust evaluation process ensures that we partner with reliable and capable suppliers who align with your quality and cost objectives.

Contract Negotiation:
Our skilled negotiators work to secure favorable terms and conditions for your purchases. We focus on achieving the best possible agreements to benefit your organization, ensuring both cost-effectiveness and risk mitigation.

Quality Assurance:
We implement rigorous inspections and audits to verify the quality of products. Our quality assurance processes are designed to ensure that every product meets the highest standards, reducing the risk of defects and non-compliance.

Supply Chain Management:
We coordinate the entire procurement process, from order placement to delivery. Our efficient supply chain management practices ensure timely deliveries, reduce lead times, and optimize inventory levels, contributing to overall operational efficiency.

Benefits of Our Services:
Cost Savings:
Leverage our extensive network and negotiation skills to significantly reduce procurement costs. Our strategic sourcing practices enable you to achieve substantial savings without compromising on quality.

Efficiency:
Streamline your procurement process with our comprehensive services. We manage every aspect of procurement, allowing you to focus on your core business activities and reduce operational bottlenecks.

Risk Management:
Mitigate risks through thorough supplier vetting and quality checks. Our proactive approach to risk management helps prevent supply chain disruptions and ensures compliance with industry standards and regulations.

Sustainability:
Source responsibly with a focus on sustainable and ethical practices. We prioritize partnerships with suppliers who adhere to environmental and social governance (ESG) criteria, helping you meet your sustainability goals.";
		}
		elseif ($data == "imports") {
			$title = "General Imports And Exports";
		}
        echo ($title); // Use htmlspecialchars to prevent XSS
    }
    ?>
</h2>
				<div class="container">
					<div class="subscribe-title text-center">

						<p>
						<?php
echo ($content);
	?>
						</p>
						
					</div>
				</div>
			</div><!--/.section-header-->
		
		</div><!--/.container-->

	</section><!--/.works-->
	<!--works end -->

	<!-- statistics strat -->
	<section id="statistics" class="statistics">
		<div class="container">
			<div class="statistics-counter">
				<div class="col-md-3 col-sm-6">
					<div class="single-ststistics-box">
						<div class="statistics-content">
							<div class="counter">90 </div> <span>K+</span>
						</div><!--/.statistics-content-->
						<h3>listings</h3>
					</div><!--/.single-ststistics-box-->
				</div><!--/.col-->
				<div class="col-md-3 col-sm-6">
					<div class="single-ststistics-box">
						<div class="statistics-content">
							<div class="counter">40</div> <span>k+</span>
						</div><!--/.statistics-content-->
						<h3>listing categories</h3>
					</div><!--/.single-ststistics-box-->
				</div><!--/.col-->
				<div class="col-md-3 col-sm-6">
					<div class="single-ststistics-box">
						<div class="statistics-content">
							<div class="counter">65</div> <span>k+</span>
						</div><!--/.statistics-content-->
						<h3>visitors</h3>
					</div><!--/.single-ststistics-box-->
				</div><!--/.col-->
				<div class="col-md-3 col-sm-6">
					<div class="single-ststistics-box">
						<div class="statistics-content">
							<div class="counter">50</div> <span>k+</span>
						</div><!--/.statistics-content-->
						<h3>happy clients</h3>
					</div><!--/.single-ststistics-box-->
				</div><!--/.col-->
			</div><!--/.statistics-counter-->
		</div><!--/.container-->

	</section><!--/.counter-->
	<!-- statistics end -->

	<?php
include_once('footer.php');
?>
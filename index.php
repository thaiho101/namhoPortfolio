<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Nam Ho | Full-Stack Developer Portfolio</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
	<link rel="icon" type="image/x-icon" href="./icon/briefcase.png">
</head>
<body>

<div class="backgroundOverlay"></div>

<header class="siteHeader">
	<div class="brand">
		<i class="fas fa-seedling" style='color: lime'></i>
		<span>Nam Ho</span>
	</div>

	<nav class="topNav">
		<a href="#about">About</a>
		<a href="#projects">Projects</a>
		<a href="#capstone">Capstone</a>
		<a href="#experience">Experience</a>
		<a href="#skills">Stack</a>
		<a href="#contact">Contact</a>
	</nav>
</header>

<main class="mainWrapper">


<section class="heroSection">
	<div class="heroText">
		<p class="heroTag">Full-Stack Web Developer • Problem Solver • Real-World Systems</p>
		<h1>Nam Ho</h1>
		<h2>Software Engineering Portfolio</h2>

		<p class="heroIntro">
			Built real-world systems that reduced operational time from 1 week to 1 day.

			I develop practical web applications focused on workflow systems,
			database-driven solutions, and improving operational efficiency.
		</p>

		<p class="heroSub">
			Based in Texas • Open to full-time Software Engineering roles
		</p>

		<div class="heroButtons">
			<a href="#projects" class="primaryBtn">View Projects</a>
			<a href="#contact" class="secondaryBtn">Contact Me</a>
		</div>
	</div>

	<div class="heroCard">
		<div class="heroCardInner">
			<p class="smallLabel">Current Focus</p>
			<h3>Full-Stack Development</h3>
			<ul>
        <li>Production-ready web applications</li>
        <li>Workflow & business systems</li>
        <li>React (Senior Design Project)</li>
        <li>Python (Algorithm Practice – LeetCode)</li>
			</ul>
		</div>
	</div>
</section>


<section id="about" class="contentSection">
	<div class="sectionTitleWrap">
		<p class="sectionMiniTitle">About</p>
		<h2 class="sectionTitle">Who I Am</h2>
	</div>

	<div class="aboutGrid">
		<div class="glassCard">
			<p style='padding-bottom: 10px;'>
				Software Engineering student at the University of Texas at Arlington (Expected May 2026),
				with 6+ years of experience in warehouse operations and proven experience building real-world systems with measurable business impact.
			</p>

			<p style='padding-bottom: 10px;'>
				Designed and developed internal web applications using PHP, MySQL, and JavaScript 
				to replace manual workflows and streamline operations.
			</p>

			<p>
				Built systems that reduced order processing time from one week to one day,
				while improving data accuracy and usability.
			</p>
		</div>

		<div class="glassCard">
			<p class="infoTitle">Highlights</p>
			<ul class="infoList">
				<li>Full-Stack Development (PHP, MySQL, JavaScript)</li>
				<li>Built real-world systems with measurable business impact (uniform supply industry)</li>
				<li>Reduced processing time from 1 week → 1 day</li>
				<li>Improved workflow efficiency and data accuracy</li>
				<li>Experience working in real operational environments</li>
				<li>Seeking full-time Software Engineering roles</li>
			</ul>
		</div>
	</div>
</section>

<section id="projects" class="contentSection">
	<div class="sectionTitleWrap">
		<p class="sectionMiniTitle">Portfolio</p>
		<h2 class="sectionTitle">Featured Projects</h2>
	</div>

  <div id='projectCount'><i class="fas fa-layer-group"></i> Total: 6 Projects</div>

	<div class="projectsLayout">
		<div class="projectsList">


			<div id='receiveFlow' class="projectCard" data-preview="receiveFlowImageReview">
				<div class="projectText">
					<div class="projectTopLine">
						<h3>ReceiveFlow – Workflow System</h3>
						<a href="https://namho-receiveflow.fortuneterm.com" target="_blank" class="visitBtn">View Live</a>
					</div>
					<p>
						A workflow system I designed based on real warehouse receiving challenges I experienced while working in the uniform supply industry.
						It replaces manual sorting and spreadsheet tracking with order-based processing, real-time validation, and audit logging.
						Reduced order preparation time from one week to one day.
					</p>
					<div class="projectTags">
						<span>Workflow System</span>
						<span>Validation Engine</span>
						<span>Audit Logging</span>
					</div>
				</div>
			</div>


			<div class="projectCard" data-preview="naturalizationTestImageReview">
				<div class="projectText">
					<div class="projectTopLine">
						<h3>PassUSCIS – Citizenship Test Platform</h3>
						<a href="https://passuscis.com" target="_blank" class="visitBtn">View Live</a>
					</div>
            <p>
              A full-stack web application I developed to improve the experience of studying for the U.S. citizenship test.

              The platform was built to address real usability issues such as limited access to physical materials and ad-heavy mobile apps. 
              It provides multilingual support, interactive quizzes, and text-to-speech features for flexible, on-the-go learning.

              The system was successfully used for personal and family preparation, contributing to passing the citizenship test, 
              and is now available as a free public web application.
            </p>
					<div class="projectTags">
            <span>Education Platform</span>
            <span>Multilingual</span>
            <span>Text-to-Speech</span>
            <span>Public web application</span>
					</div>
				</div>
			</div>


			<div class="projectCard" data-preview="marketCostImageReview">
				<div class="projectText">
					<div class="projectTopLine">
						<h3>Market Cost – Budget Tracker</h3>
						<a href="https://marketcost.fortuneterm.com" target="_blank" class="visitBtn">View Live</a>
					</div>
            <p>
              A full-stack budgeting and expense tracking application I built to solve real personal financial challenges, specifically tracking spending and preventing monthly overspending.

              The system enables users to set budgets, log transactions, and visualize spending patterns through interactive dashboards.

              By making financial data visible and easy to understand, the application helps users make better spending decisions and stay within their budget.
            </p>
					<div class="projectTags">
            <span>Budget Tracking</span>
						<span>Data Visualization</span>
            <span>Personal Finance</span>
            <span>Dashboard</span>
            <span>Real Usage</span>
            <span>Authentication</span>
            <span>Public web application</span>
					</div>
				</div>
			</div>


			<div id='uniformVoucher' class="projectCard" data-preview="uniformsVoucherImageReview">
				<div class="projectText">
					<div class="projectTopLine">
						<h3>Uniform Voucher Management System</h3>
						<a href="https://namho-uniform-voucher-demo.fortuneterm.com" target="_blank" class="visitBtn">View Live</a>
					</div>
					<p>
              An internal workflow system I developed to replace manual voucher tracking and spreadsheet-based processes in warehouse operations.

              The system centralizes employee voucher data, allowing users to track status, monitor completion progress, and generate reports across multiple organizations and employee groups.

              Key features include dynamic filtering, CSV export, and data visualization dashboards, improving operational visibility and reducing manual tracking errors.
					</p>
					<div class="projectTags">
						<span>Business System</span>
            <span>Dashboard</span>
            <span>Reporting</span>
            <span>Data Visualization</span>
					</div>
				</div>
			</div>


			<div class="projectCard" data-preview="timeLogsImageReview">
				<div class="projectText">
					<div class="projectTopLine">
						<h3>TimeLogs – Work Hour Tracker</h3>
						<a href="https://namho-timelogs.fortuneterm.com" target="_blank" class="visitBtn">View Live</a>
					</div>
            <p>
              A web-based time tracking system I built to address real issues with unreliable time-scanning systems in the workplace.

              The application allows users to manually log clock-in and clock-out times, automatically calculate total hours, and maintain accurate records for verification.

              It provides a reliable way to track work hours and helps users validate their time records in cases where official scanning systems fail.
            </p>
					<div class="projectTags">
            <span>Time Tracking</span>
            <span>Backup System</span>
            <span>Admin Dashboard</span>
            <span>Public web application</span>
					</div>
				</div>
			</div>


			<div class="projectCard" data-preview="utaSlotTrackerImageReview">
				<div class="projectText">
					<div class="projectTopLine">
						<h3>UTA Slot Tracker</h3>
						<a href="https://namho-utaslottracker.fortuneterm.com" target="_blank" class="visitBtn">View Live</a>
					</div>
            <p>
              A front-end web application developed as part of a team project aimed at improving campus parking efficiency during peak hours.

              The system displays parking availability and capacity across multiple locations using a visual, map-based interface to help users quickly find available spaces.

              I was responsible for developing the interactive front-end using JavaScript and HTML, focusing on usability and real-time visual feedback.
            </p>
					<div class="projectTags">
            <span>Frontend</span>
            <span>JavaScript</span>
            <span>Data Visualization</span>
					</div>
				</div>
			</div>

		</div>

		<div class="previewPanel">
			<div class="previewDefault" id="previewDefault">
				<p class="smallLabel">Project Preview</p>
				<h3>Hover a project</h3>
				<p>The screenshot preview will appear here.</p>
			</div>

			<div id="receiveFlowImageReview" class="previewBox fitFrame"></div>
			<div id="naturalizationTestImageReview" class="previewBox fitFrame"></div>
			<div id="marketCostImageReview" class="previewBox fitFrame"></div>
			<div id="uniformsVoucherImageReview" class="previewBox fitFrame"></div>
			<div id="timeLogsImageReview" class="previewBox fitFrame"></div>
			<div id="utaSlotTrackerImageReview" class="previewBox fitFrame"></div>

		</div>
	</div>
</section>


<section id="capstone" class="contentSection">
	<div class="sectionTitleWrap">
		<p class="sectionMiniTitle">Capstone</p>
		<h2 class="sectionTitle">Senior Design Project</h2>
	</div>

	<div class="glassCard" style='padding-left: 70px;'>

		<h3>BugHouse – Tutoring Management Platform</h3>
		<p class="expMeta" style='padding-bottom: 20px;'>
			UTA Senior Design • MERN Stack • Team-based • 2025-2026
		</p>

		<ul class="expList" style='padding-bottom: 20px;'>

			<li>
				Contributed to a large-scale web platform designed to manage tutoring sessions,
				scheduling, and student-tutor interactions at UTA.
			</li>

			<li>
				Worked within an existing MERN-based architecture (React, Node.js, Express, MongoDB)
				to extend system functionality and maintain legacy code.
			</li>

			<li>
				Implemented CSV export features for administrative reporting and data analysis.
			</li>

			<li>
				Designed and optimized responsive UI for mobile devices to improve accessibility
				and user experience.
			</li>

			<li>
				Collaborated in a multi-developer team environment, contributing to feature
				enhancements and system improvements.
			</li>

			<li>
				Participated in maintaining a production-like system with authentication,
				session tracking, and AWS SNS-based notification features.
			</li>

		</ul>
		<a href="https://websites.uta.edu/cseseniordesign/2025/08/11/bughouse-2/" target="_blank" class="visitBtn">
			View Details
		</a>

	</div>
</section>

<section id="experience" class="contentSection">

	<div class="sectionTitleWrap">
		<p class="sectionMiniTitle">Experience</p>
		<h2 class="sectionTitle">Work Experience</h2>
	</div>

	<div class="timeline">

		<div class="timelineItem">
			<div class="timelineDot"></div>

			<div class="glassCard">
				<div class="timelineItemSub">


					<h3>Crown Digital LLC (Metro Uniforms)</h3>
					<div class='companyDuration'>
						<p class="expMeta">Dallas, TX • 2019 – 2025 (Full Time - <i class="fa-regular fa-calendar"></i> 6 years 1 month)</p>
						<p class='award'>🏆 5-Year Service Award</p>
					</div>

					<div class="roleBlock role1">
						<h4>Warehouse Manager (Warehouse & Retail Operations – Dual Role)</h4>
						<p class="roleDate">Jun 2021 – Mar 2025 (<i class="fa-regular fa-calendar"></i> 3 years 10 months)</p>

						<ul class="expList">
							<li>Designed and developed an <span class='highlight'>internal web application</span> <a href='#uniformVoucher' class='projectNavigation'>(Uniform Voucher Management System)</a> using PHP, MySQL, JavaScript, HTML, CSS to replace manual workflows.</li>

							<li>Built and evolved a workflow system <a href='#receiveFlow' class='projectNavigation'>(ReceiveFlow)</a> to digitize order processing, later extending it into an external web platform.</li>

							<li><span class='highlight'>Reduced order processing time from one week to one day (87% faster) through automation.</span> through automation.</li>

							<li>Implemented validation logic and audit tracking to improve data accuracy and reliability.</li>

							<li>Developed dashboards and UI tools for non-technical staff.</li>

							<li>Led a team of <span class='highlight'>9+ employees</span>, improving productivity by <span class='highlight'>20%</span>.</li>
									
							<li><span class='highlight'>Expanded role to manage both warehouse and newly launched retail operations.</span></li>

							<li>Built a high-performance team culture, improving accountability and operational efficiency.</li>

							<li>Recognized with a 5-Year Service Award for long-term contribution and reliability (June 2024)</li>
							
							<li>Transitioned to full-time study in 2025 to complete degree (Expected May 2026).</li>
						</ul>
					</div>

					<div class="roleBlock role2">
						<h4>Warehouse Clerk</h4>
						<p class="roleDate">Mar 2019 – May 2021 (<i class="fa-regular fa-calendar"></i> 2 years 3 months)</p>

						<ul class="expList">
							<li>Managed receiving, inventory, and order fulfillment with 99% accuracy.</li>

							<li>Gained deep understanding of real-world warehouse workflows.</li>

							<li>Identified inefficiencies that led to later system automation.</li>
						</ul>
					</div>

					<div class="timelineDotSub1"></div>
					<div class="timelineDotSub2"></div>
				</div>
			</div>
		</div>

	</div>

</section>


<section id="skills" class="contentSection">
	<div class="sectionTitleWrap">
		<p class="sectionMiniTitle">Tech Stack</p>
		<h2 class="sectionTitle">Tools & Technologies</h2>
	</div>

	<div class="skillsGrid">

		<div class="skillCard">
			<h3><i class="fas fa-code"></i> Languages</h3>
			<p>Java, C++, C, PHP, JavaScript, Python, SQL</p>
		</div>

		<div class="skillCard">
			<h3><i class="fas fa-laptop-code"></i> Frontend</h3>
			<p>HTML, CSS, JavaScript, React (in progress), Responsive Design</p>
		</div>

		<div class="skillCard">
			<h3><i class="fas fa-database"></i> Backend / Data</h3>
			<p>MySQL, MongoDB, relational database design, API logic, Python (in progress)</p>
		</div>

		<div class="skillCard">
			<h3><i class="fas fa-screwdriver-wrench"></i> Tools & Systems</h3>
			<p>Git, GitHub, Linux, Raspberry Pi, HeidiSQL, FileZilla</p>
		</div>

	</div>
</section>


<section id="contact" class="contentSection">
	<div class="sectionTitleWrap">
		<p class="sectionMiniTitle">Contact</p>
		<h2 class="sectionTitle">Let’s Connect</h2>
	</div>

	<div class="contactGrid">
		<div class="glassCard">
			<p>
				If you would like to discuss full-time opportunities, feel free to reach out.
			</p>
		</div>

		<div class="glassCard">
			<div class="contactItem">
				<i class="fas fa-envelope"></i>
				<span style='padding: 0 10px;'>thaiho101@gmail.com</span>
			</div>

			<div class="contactItem">
				<i class="fab fa-github"></i>
				<span>
          <a class='contactAffect' href="https://github.com/thaiho101"  target='_blank'>github.com/thaiho101</a>
        </span>
			</div>

			<div class="contactItem">
				<i class="fab fa-linkedin"></i>
				<span>
          <a class='contactAffect' href="https://www.linkedin.com/in/nam-ho-41bb7291"  target='_blank'>linkedin.com/in/nam-ho-41bb7291</a>
        </span>
			</div>
		</div>
	</div>
</section>

</main>

<footer class="siteFooter">
	<p>© <?= date('Y') ?> Nam Ho. All rights reserved.</p>
</footer>

<script src="./script.js"></script>
</body>
</html>
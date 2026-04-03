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
		<a class='heroLink' href='#hero'>
			<i class="fas fa-seedling"></i>
			<span>Nam Ho</span>
		</a>
	</div>

	<nav class="topNav">
		<a href="#about">About</a>
		<a href="#education">Education</a>
		<a href="#projects">Projects</a>
		<a href="#capstone">Capstone</a>
		<a href="#experience">Experience</a>
		<a href="#skills">Stack</a>
		<a href="#contact">Contact</a>
	</nav>
</header>

<main class="mainWrapper">


<section id='hero' class="heroSection">
  <div class="heroText">
	<div class='status'>    
		<p class="heroSubLocation">
      		<span class="locDot"></span>
				DFW,  TX &nbsp;•&nbsp; U.S. Citizen
		</p>
		<p class="heroSubStatus">
      		<span class="statusDot"></span>
				Available for full-time Software Engineering roles
		</p>
	</div>
    <p class="heroTag">Full-Stack Engineer • Problem Solver • Real-World Systems</p>
    <h1>Nam Ho</h1>
    <h2>Software Engineering</h2>

    <p class="heroIntro">
      Building systems that solve real operational problems.
    </p>

	<br>

    <div class="heroMetrics">
      <div class="metricBox">
        <span class="metricVal">7x</span>
        <span class="metricLabel">Faster order processing</span>
      </div>
      <div class="metricBox">
        <span class="metricVal">8+</span>
        <span class="metricLabel">Years Professional Experience</span>
      </div>
      <div class="metricBox">
        <span class="metricVal">6</span>
        <span class="metricLabel">Live projects</span>
      </div>
      <div class="metricBox">
        <span class="metricVal">3.68</span>
        <span class="metricLabel">GPA @ UTA</span>
		<span class="metricLabel">Cum Laude</span>
      </div>
    </div>

    <div class="heroButtons">
      <a href="#projects" class="primaryBtn">View Projects</a>
      <a href="#contact" class="secondaryBtn">Contact Me</a>
	  <a href="/file/Resume_Nam_Ho_SWE.pdf" download='Resume_Nam_Ho_SWE' class="secondaryBtn">RESUMÉ (SWE)</a>
    </div>
  </div>

  <div class="heroCard">
    <div class="heroCardInner">
      <p class="smallLabel">Current Focus</p>
      <h3>Full-Stack Development</h3>
      <ul>
        <li>Production-ready web applications</li>
        <li>Workflow & business systems</li>
        <li>React – BugHouse (Capstone)</li>
        <li>Python – DSA practice</li>
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
				- Software Engineering student at the University of Texas at Arlington (Expected May 2026),
				with 6+ years of experience in warehouse operations and proven experience building real-world systems with measurable business impact.
			</p>

			<p style='padding-bottom: 10px;'>
				- Designed and developed internal web applications using PHP, MySQL, and JavaScript 
				to replace manual workflows and streamline operations.
			</p>

			<p>
				- Focused on building tools that non-technical staff can use confidently,
				with clean interfaces and reliable data tracking.
			</p>
		</div>

		<div class="glassCard">
			<p class="infoTitle">Highlights</p>
			<ul class="infoList">
				<li>Full-Stack Development (PHP, MySQL, JavaScript)</li>
				<li>Built real-world systems with measurable business impact (uniform supply industry)</li>
				<li>Reduced order processing time by 7x (1 week → 1 day)</li>
				<li>Improved workflow efficiency and data accuracy</li>
				<li>Experience working in real operational environments</li>
				<li>Seeking full-time Software Engineering roles</li>
			</ul>
		</div>
	</div>
</section>

<section id="education" class="contentSection">
  <div class="sectionTitleWrap">
    <p class="sectionMiniTitle">Education</p>
    <h2 class="sectionTitle">Academic Background</h2>
  </div>

  <div class="timeline">

    <div class="timelineItem eduTimeline">
      <div class="timelineDot"></div>
      <div class="glassCard school">
        <h3>University of Texas at Arlington</h3>
		<p class="schoolDate">Jan 2024 – Expected May 2026</p>
		<div class='companyDuration'>
        	<p class="award"><span style='text-shadow: 0 0 5px white;'>🎓</span> B.S. Software Engineering | GPA: 3.68 / 4.00</p>
			<p class='award'><span style='text-shadow: 0 0 10px yellow;'>🏅</span> Cum Laude</p>
		</div>
      </div>
    </div>

    <div class="timelineItem eduTimeline">
      <div class="timelineDot"></div>
      <div class="glassCard school">
        <h3>Dallas College</h3>
		<p class="schoolDate">Aug 2021 – Dec 2023 • Dallas, TX</p>
		<div class='companyDuration'>
        	<p class="award"><span style='text-shadow: 0 0 5px white;'>🎓</span> A.S. Software Engineering | GPA: 3.95 / 4.00</p>
			<!-- <p class='award'><span style='text-shadow: 0 0 10px yellow;'></span> GPA: 3.95 / 4.00</p> -->
			<p class='award'><span style='text-shadow: 0 0 10px yellow;'>🏅</span> Phi Theta Kappa Honor Society</p>
		</div>
      </div>
    </div>

	<div class="timelineItem eduTimeline">
		<div class="timelineDot"></div>
		<div class="glassCard school">
			<h3>HCMC Open University</h3>
			<p class="schoolDate">Dec 2012 – Sep 2016 •  Vietnam</p>
			<div class='companyDuration'>
				<p class="award"><span style='text-shadow: 0 0 5px white;'>🎓</span> B.S. International Business</p>
			</div>
		</div>
	</div>

  </div>
</section>



<section id="projects" class="contentSection">
	<div class="sectionTitleWrap">
		<p class="sectionMiniTitle">Portfolio</p>
		<h2 class="sectionTitle">Featured Projects</h2>
	</div>

  	<div id='projectCount'><div class="timelineDotProject"></div> <div>Total: 6 Projects</div></div>
	<div class='projectsLayoutCover'>
		<div class="projectsLayout">
			<div class="projectsList">


				<div id='receiveFlow' class="projectCard" data-preview="receiveFlowImageReview">
					<div class="projectText">
						<div class="projectTopLine">
							<h3>ReceiveFlow – Warehouse Receiving System</h3>
							<div class='visitButtonContent'>
								<a href="https://github.com/thaiho101" target="_blank" class="visitBtn"><i class="fab fa-github"></i></a>
								<a href="https://namho-receiveflow.fortuneterm.com" target="_blank" class="visitBtn">View Live</a>
							</div>
						</div>
							<p>
								A warehouse order receiving workflow system I designed to solve 
								real challenges in the uniform supply industry. It replaces manual 
								sorting and spreadsheet tracking with order-based processing, 
								real-time validation, and audit logging. 
								<span class='highlight'>Reduced order preparation time by 7x (1 week → 1 day).</span>
							</p>
						<div class="projectTags">
							<span>Warehouse Operations</span>
							<span>Real-time Validation</span>
							<span>Workflow System</span>
							<span>Validation Engine</span>
							<span>Audit Logging</span>
							<span>CSV Export</span>
						</div>
					</div>
				</div>


				<div id='uniformVoucher' class="projectCard" data-preview="uniformsVoucherImageReview">
					<div class="projectText">
						<div class="projectTopLine">
							<h3>Uniform Voucher Management System</h3>
							<div class='visitButtonContent'>
								<a href="https://github.com/thaiho101" target="_blank" class="visitBtn"><i class="fab fa-github"></i></a>
								<a href="https://namho-uniform-voucher-demo.fortuneterm.com" target="_blank" class="visitBtn">View Live</a>
							</div>
						</div>
							<p>
							An internal workflow system 
							<span class='highlight'>replacing manual voucher tracking in warehouse operations.</span>
							</p>
							<ul class='projectTextUl'>
								<li>Centralized employee voucher data across multiple organizations</li>
								<li>Dynamic filtering, CSV export, and data visualization dashboards</li>
								<li>Reduced manual tracking errors and improved operational visibility</li>
							</ul>
						<div class="projectTags">
							<span>Business System</span>
							<span>Dashboard</span>
							<span>Reporting</span>
							<span>CSV Export</span>
							<span>Data Visualization</span>
							<span>Internal Tool</span>
						</div>
					</div>
				</div>


				<div class="projectCard" data-preview="naturalizationTestImageReview">
					<div class="projectText">
						<div class="projectTopLine">
							<h3>PassUSCIS – Citizenship Test Platform</h3>
							<div class='visitButtonContent'>
								<a href="https://github.com/thaiho101" target="_blank" class="visitBtn"><i class="fab fa-github"></i></a>
								<a href="https://passuscis.com" target="_blank" class="visitBtn">View Live</a>
							</div>
						</div>
							<p>
							A full-stack web application for studying the U.S. citizenship test, 
							featuring multilingual support, interactive quizzes, and text-to-speech. 
							<span class='highlight'>Successfully used for personal and family preparation — 
							helping family members pass the U.S. citizenship test.</span> 
							Built as a free, <span class='highlight'>ad-free alternative</span> to existing mobile apps — now available as a public web application.
							</p>
						<div class="projectTags">
				<span>Education Platform</span>
				<span>Multilingual</span>
				<span>Text-to-Speech</span>
				<span>Ad-free</span>
				<span>Public web application</span>
						</div>
					</div>
				</div>


				<div class="projectCard" data-preview="marketCostImageReview">
					<div class="projectText">
						<div class="projectTopLine">
							<h3>Market Cost – Budget Tracker</h3>
							<div class='visitButtonContent'>
								<a href="https://github.com/thaiho101" target="_blank" class="visitBtn"><i class="fab fa-github"></i></a>
								<a href="https://marketcost.fortuneterm.com" target="_blank" class="visitBtn">View Live</a>
							</div>
						</div>
							<p>
								A full-stack budgeting app I built to track spending and prevent overspending.
								<span class='highlight'>actively used personally to manage and control monthly finances.</span>
							</p>
							<p>
								Users can set budgets, log transactions, and visualize spending patterns 
								through interactive dashboards.
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


				<div class="projectCard" data-preview="timeLogsImageReview">
					<div class="projectText">
						<div class="projectTopLine">
							<h3>TimeLogs – Work Hour Tracker</h3>
							<div class='visitButtonContent'>
								<a href="https://github.com/thaiho101" target="_blank" class="visitBtn"><i class="fab fa-github"></i></a>
								<a href="https://namho-timelogs.fortuneterm.com" target="_blank" class="visitBtn">View Live</a>
							</div>
						</div>
				<p>
					A time tracking system built as a backup for unreliable workplace 
					scanners. Users can log clock-in/out times, auto-calculate total hours, 
					and verify records against official systems.
				</p>
						<div class="projectTags">
				<span>Time Tracking</span>
				<span>Backup System</span>
				<span>Admin Dashboard</span>
				<span>Real Usage</span>
				<span>Public web application</span>
						</div>
					</div>
				</div>


				<div class="projectCard" data-preview="utaSlotTrackerImageReview">
					<div class="projectText">
						<div class="projectTopLine">
							<h3>UTA Slot Tracker</h3>
							<div class='visitButtonContent'>
								<a href="https://github.com/thaiho101" target="_blank" class="visitBtn"><i class="fab fa-github"></i></a>
								<a href="https://namho-utaslottracker.fortuneterm.com" target="_blank" class="visitBtn">View Live</a>
							</div>
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
				Contributed to a large-scale tutoring management platform at UTA, 
				working within an existing MERN-based architecture (React, Node.js, Express, MongoDB).
			</li>
			<li>
				<span class='highlight'>Implemented weekly report generation feature</span> 
				for administrative reporting and data analysis.
			</li>
			<li>
				<span class='highlight'>Designed and optimized responsive UI for mobile devices</span>, 
				improving accessibility and user experience across the platform.
			</li>
			<li>
				Collaborated in a multi-developer team environment, contributing to 
				feature enhancements and system improvements.
			</li>

		</ul>
		<a href="https://github.com/thaiho101" target="_blank" class="visitBtn"><i class="fab fa-github"></i></a>

		<a href="https://websites.uta.edu/cseseniordesign/2025/08/11/bughouse-2/" target="_blank" class="visitBtn">
			View Details
		</a>

	</div>
	<script src='./frontend/projectTracker.js'></script>
	<script src="./frontend/projectPreview.js"></script>
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
						<p class='award'><span style='text-shadow: 0 0 10px yellow;'>🏆</span> 5-Year Service Award</p>
					</div>

					<div class="roleBlock role1">
						<h4>Warehouse Manager (Warehouse & Retail Operations – Dual Role)</h4>
						<p class="roleDate">Jun 2021 – Mar 2025 (<i class="fa-regular fa-calendar"></i> 3 years 10 months)</p>

						<ul class="expList">
							<li>Designed and developed an <span class='highlight'>internal web application</span> <a href='#uniformVoucher' class='projectNavigation'>(Uniform Voucher Management System)</a> using PHP, MySQL, JavaScript, HTML, CSS to replace manual workflows.</li>

							<li>Built and evolved a workflow system <a href='#receiveFlow' class='projectNavigation'>(ReceiveFlow)</a> to digitize order processing, later extending it into an external web platform.</li>

							<li><span class='highlight'>Reduced order processing time by 7x (1 week → 1 day) through system automation.</span></li>

							<li>Implemented validation logic and audit tracking to improve data accuracy and reliability.</li>

							<li>Developed dashboards and UI tools for non-technical staff.</li>

							<li>Led a team of <span class='highlight'>9+ employees</span>, improving productivity by <span class='highlight'>20%</span>.</li>
									
							<li><span class='highlight'>Expanded role to manage both warehouse and newly launched retail operations.</span></li>

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

		<div class="timelineItem">
			<div class="timelineDot"></div>
			<div class="glassCard">
				<div class="timelineItemSub">
				<h3>SS Logistics Co., Ltd (Song Song Logistics)</h3>
				<p class="expMeta">Ho Chi Minh City, Vietnam • Aug 2017 – Sep 2018 (Full Time - <i class="fa-regular fa-calendar"></i> 1 year 2 months)</p>

				<div class="roleBlock">
					<h4>Freight Sales Representative</h4>
					<ul class="expList">
					<li>Sold international freight services including sea and air cargo 
					to businesses importing and exporting goods.</li>
					<li>Prospected and managed client relationships, identifying shipping 
					needs and recommending appropriate freight solutions.</li>
					<li>Coordinated with carriers and logistics partners to provide 
					competitive freight quotes and ensure smooth shipment execution.</li>
					</ul>
				</div>
				</div>
			</div>
		</div>

		<div class="timelineItem">
			<div class="timelineDot"></div>
			<div class="glassCard">
				<div class="timelineItemSub">
				<h3>RYLOGS International Transport Co., Ltd</h3>
				<p class="expMeta">Ho Chi Minh City, Vietnam • Nov 2016 – Jun 2017 (Full Time - <i class="fa-regular fa-calendar"></i> 8 months)</p>

				<div class="roleBlock">
					<h4>Operations Coordinator</h4>
					<ul class="expList">
					<li>Managed end-to-end import freight operations including customs clearance, 
					port procedures, and cargo release at seaport and airport facilities.</li>
					<li>Coordinated bill of lading payments and documentation with customs 
					authorities to ensure compliant and timely cargo release.</li>
					<li>Arranged ground transportation (trucks and container vehicles) to deliver 
					cargo from port and container yards to client warehouses and factories.</li>
					</ul>
				</div>
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
			<p>HTML, CSS, JavaScript, React, Responsive Design</p>
		</div>

		<div class="skillCard">
			<h3><i class="fas fa-database"></i> Backend / Data</h3>
			<p>MySQL, MongoDB, relational database design, API logic, Python</p>
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
				<span><a class='contactAffect' href="mailto:thaiho101@gmail.com">thaiho101@gmail.com</a></span>
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
<div id='contactPanel'>
	<div class='topLeftVertical'></div>
	<div class='contactVerticalList'>
		<a class='contactAffect' href="mailto:thaiho101@gmail.com"><i class="fas fa-envelope iconVertical"></i></a>
		<a class='contactAffect' href="https://github.com/thaiho101"  target='_blank'><i class="fab fa-github iconVertical"></i></a>
		<a class='contactAffect' href="https://www.linkedin.com/in/nam-ho-41bb7291"  target='_blank'><i class="fab fa-linkedin iconVertical"></i></a>
	</div>
	<div class='bottomLeftVertical'></div>
</div>

<footer class="siteFooter">
	<p>© <?= date('Y') ?> Nam Ho. All rights reserved.</p>
</footer>


</body>
</html>
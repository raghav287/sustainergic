<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<header class="header" id="header">

    <div class="container">

        <a href="index.php" class="logo">
            <img src="assets/images/logo.png" alt="Logo">
        </a>

        <button class="mobile-toggle" id="mobileToggle">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <nav class="navbar" id="navbar">

            <ul class="nav-menu">

                <li><a class="<?= ($currentPage=='index.php')?'active':''; ?>" href="index.php">Home</a></li>

                <li><a class="<?= ($currentPage=='about.php')?'active':''; ?>" href="about.php">About Us</a></li>

                <li class="dropdown">
                    <a href="#">
                        Services
                        <i class="fa fa-chevron-down"></i>
                    </a>

                    <ul class="dropdown-menu">
                        <li><a href="green-building-certification.php">Green Building Certification</a></li>
                        <li><a href="energy-simulation.php">Energy Simulation</a></li>
                        <li><a href="daylight-simulation.php">Daylight Simulation</a></li>
                        <li><a href="cfd-simulation.php">CFD Simulation</a></li>
                        <li><a href="ecbc-compliance.php">ECBC Compliance</a></li>
                        <li><a href="building-commissioning.php">Building Commissioning</a></li>
                        <li><a href="energy-audit.php">Energy Audit</a></li>
                        <li><a href="water-audit.php">Water Audit</a></li>
                        <li><a href="hvac-design-installation.php">HVAC Design & Installation</a></li>
                        <li><a href="radiant-cooling-system.php">Radiant Cooling System</a></li>
                        <li><a href="heat-pump.php">Heat Pump</a></li>
                        <li><a href="geothermal-energy-system.php">Geothermal Energy System</a></li>
                        <li><a href="variable-refrigerant-flow.php">Variable Refrigerant Flow (VRF)</a></li>
                        <li><a href="hybrid-thermal-solar-panel.php">Hybrid Thermal Solar Panel (HTS)</a></li>
                    </ul>
                </li>

                <li><a href="projects.php">Projects</a></li>

                <li><a href="industries.php">Industries</a></li>

                <li class="dropdown">
                    <a href="#">
                        Resources
                        <i class="fa fa-chevron-down"></i>
                    </a>

                    <ul class="dropdown-menu">
                        <li><a href="case-studies.php">Case Studies</a></li>
                        <li><a href="clients.php">Clients</a></li>
                        <li><a href="blog.php">Blog</a></li>
                    </ul>
                </li>

                <li><a href="careers.php">Careers</a></li>

                <li><a href="contact.php">Contact Us</a></li>

            </ul>

            <a href="consultation.php" class="consult-btn">
                Get a Consultation
            </a>

        </nav>

    </div>

</header>
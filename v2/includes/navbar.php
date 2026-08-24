<?php
$active_page = basename($_SERVER['PHP_SELF']);
$service_pages = [
    'green-building-certification.php', 'simulation-modeling.php', 'audits.php',
    'carbon-accounting-advisory.php', 'commissioning-authority.php', 'ecsbc-compliance.php', 'ecbc-compliance.php',
    'energy-simulation.php', 'daylight-simulation.php', 'cfd-simulation.php',
    'building-commissioning.php', 'energy-audit.php', 'water-audit.php'
];
$hvac_pages = [
    'radiators.php', 'heat-pumps.php', 'vrv-vrf-system.php', 'chilled-water-system.php', 'underfloor-electric-heating-system.php', 'radiant-heating-cooling-system.php', 'geothermal-system.php', 'fresh-air-system.php', 'hvac-design-installation.php', 'radiant-cooling-system.php', 'heat-pump.php',
    'geothermal-energy-system.php', 'vrf.php', 'hts.php'
];
$resource_pages = ['case-studies.php', 'clients.php', 'blog.php'];
?>
<header class="main-header" id="header">

    <div class="nav-wrapper">

        <!-- Logo -->
        <a href="index.php" class="logo">
            <img src="assets/images/logo.png" alt="Sustainergic">
        </a>

        <!-- Desktop Menu -->
        <nav class="navbar" id="navbar">

            <ul class="nav-menu">

                <li><a href="index.php" class="<?php echo ($active_page == 'index.php') ? 'active' : ''; ?>">Home</a></li>

                <li><a href="about.php" class="<?php echo ($active_page == 'about.php') ? 'active' : ''; ?>">About Us</a></li>

                <li class="dropdown">

                    <a href="#" class="<?php echo in_array($active_page, $service_pages) ? 'active' : ''; ?>">
                        Services
                        <i class="fa-solid fa-chevron-down"></i>
                    </a>

                    <ul class="dropdown-menu">

                        <li><a href="green-building-certification.php">Green Certification</a></li>

                        <li><a href="simulation-modeling.php">Simulation/Modeling </a></li>

                        <li><a href="audits.php">Audits </a></li>

                        
                        <li><a href="commissioning-authority.php">Commissioning Authority</a></li>
                        <li><a href="ecsbc-compliance.php">ECSBC Compliance</a></li>
                        <li><a href="carbon-accounting-advisory.php">Carbon Accounting & Advisory</a></li>
                        <li><a href="#">IoT Water Solution</a></li>

                        <li><a href="#">Hybrid Thermal Solar (HTS) Panel</a></li>
                        <li><a href="#">ESG and EHS</a></li>

<!-- 
                        <li><a href="ecsbc-compliance.php">ECSBC Compliance</a></li>

                        <li><a href="building-commissioning.php">Building Commissioning</a></li>

                        <li><a href="energy-audit.php">Energy Audit</a></li>

                        <li><a href="water-audit.php">Water Audit</a></li>

                        <li><a href="hvac-design-installation.php">HVAC Design & Installation</a></li>

                        <li><a href="radiant-cooling-system.php">Radiant Cooling System</a></li>

                        <li><a href="heat-pump.php">Heat Pump</a></li>

                        <li><a href="geothermal-energy-system.php">Geothermal Energy System</a></li>

                        <li><a href="vrf.php">Variable Refrigerant Flow (VRF)</a></li>

                        <li><a href="hts.php">Hybrid Thermal Solar Panel (HTS)</a></li> -->

                    </ul>

                </li>
                <li class="dropdown">

                    <a href="#" class="<?php echo in_array($active_page, $hvac_pages) ? 'active' : ''; ?>">
                        HVAC
                        <i class="fa-solid fa-chevron-down"></i>
                    </a>

                    <ul class="dropdown-menu">

                        <li><a href="radiant-heating-cooling-system.php">Radiant Heating & Cooling System</a></li>

                        <li><a href="underfloor-electric-heating-system.php">Underfloor Electric Heating System</a></li>

                        <!-- <li><a href="#">Air Source Heat Pump (ASHP)</a></li> -->


                        <li><a href="geothermal-system.php">Geothermal System</a></li>

                        <li><a href="fresh-air-system.php">Fresh Air System</a></li>

                        <li><a href="chilled-water-system.php">Chilled Water System</a></li>

                        <li><a href="vrv-vrf-system.php">VRV/VRF System</a></li>

                        <li><a href="heat-pumps.php">Heat Pumps</a></li>

                        <li><a href="radiators.php">Radiators</a></li>
                        <li><a href="#">Industrial HVAC Solutions</a></li>
                        <li><a href="#">Precision Medical Cooling Solution</a></li>

                        
                    </ul>

                </li>

                <li><a href="project.php" class="<?php echo ($active_page == 'project.php') ? 'active' : ''; ?>">Projects</a></li>

                <!-- <li><a href="industries.php">Industries</a></li> -->

                <li class="dropdown">

                    <a href="#" class="<?php echo in_array($active_page, $resource_pages) ? 'active' : ''; ?>">
                        Resources
                        <i class="fa-solid fa-chevron-down"></i>
                    </a>

                    <ul class="dropdown-menu">

                        <li><a href="#">Case Studies</a></li>

                        <li><a href="#">Clients</a></li>

                        <li><a href="#">Blog</a></li>

                    </ul>

                </li>

                <li><a href="contact-us.php" class="<?php echo ($active_page == 'contact-us.php') ? 'active' : ''; ?>">Contact Us</a></li>

            </ul>

            <!-- Mobile CTA (shown only in mobile menu) -->
            <div class="mobile-cta">
                <a href="consultation.php" class="quote-btn">
                    Get a Consultation
                    <i class="fa-solid fa-arrow-right-long"></i>
                </a>
            </div>

        </nav>

        <!-- Right Side -->

        <div class="nav-right">

            <a href="#" class="quote-btn">

                Get a Consultation

                <i class="fa-solid fa-arrow-right-long"></i>

            </a>

            <!-- Mobile Toggle -->
            <button class="menu-toggle" id="mobileToggle" aria-label="Toggle menu" aria-expanded="false">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>

        </div>

    </div>

</header>
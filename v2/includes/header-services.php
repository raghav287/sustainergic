<?php
/**
 * Master Header Services Registry
 * Central repository for all header services (Services & HVAC)
 */

if (!isset($header_services)) {
    $header_services = [
        // Sustainability Services
        'green-building-certification.php' => [
            'title' => 'Green Certification',
            'url' => 'green-building-certification.php',
            'image' => 'assets/images/green-building.png',
            'icon' => 'fa-solid fa-leaf',
            'badge' => 'LEED & IGBC',
            'desc' => 'Certified sustainable building designs, net-zero consulting, and energy optimization.',
            'category' => 'services'
        ],
        'simulation-modeling.php' => [
            'title' => 'Simulation/Modeling',
            'url' => 'simulation-modeling.php',
            'image' => 'assets/images/simulation-hero.png',
            'icon' => 'fa-solid fa-chart-line',
            'badge' => 'BIM & CFD',
            'desc' => 'Advanced thermal, daylighting, and airflow simulation for optimized building performance.',
            'category' => 'services'
        ],
        'audits.php' => [
            'title' => 'Audits',
            'url' => 'audits.php',
            'image' => 'assets/images/audits-hero.png',
            'icon' => 'fa-solid fa-clipboard-check',
            'badge' => 'BEE & ASHRAE',
            'desc' => 'Comprehensive energy, water, and thermal audits to eliminate waste and reduce costs.',
            'category' => 'services'
        ],
        'commissioning-authority.php' => [
            'title' => 'Commissioning Authority',
            'url' => 'commissioning-authority.php',
            'image' => 'assets/images/commissioning-hero.png',
            'icon' => 'fa-solid fa-gears',
            'badge' => 'CxA Certified',
            'desc' => 'Third-party building commissioning ensuring system efficiency and compliance.',
            'category' => 'services'
        ],
        'ecsbc-compliance.php' => [
            'title' => 'ECSBC Compliance',
            'url' => 'ecsbc-compliance.php',
            'image' => 'assets/images/ecbc-hero.png',
            'icon' => 'fa-solid fa-file-contract',
            'badge' => 'Code Compliance',
            'desc' => 'Mandatory ECBC/ECSBC building code compliance modeling and certification advisory.',
            'category' => 'services'
        ],
        'carbon-accounting-advisory.php' => [
            'title' => 'Carbon Accounting & Advisory',
            'url' => 'carbon-accounting-advisory.php',
            'image' => 'assets/images/carbon-accounting.png',
            'icon' => 'fa-solid fa-seedling',
            'badge' => 'Scope 1-3 GHG',
            'desc' => 'Enterprise carbon footprint measurement, decarbonization roadmaps, and Scope 1-3 reporting.',
            'category' => 'services'
        ],
        'iot-water-solution.php' => [
            'title' => 'IoT Water Solution',
            'url' => 'iot-water-solution.php',
            'image' => 'assets/images/iot-hero.png',
            'icon' => 'fa-solid fa-droplet',
            'badge' => 'Smart Water',
            'desc' => 'Real-time telemetry, automated leak detection, and smart water management platform.',
            'category' => 'services'
        ],
        'hybrid-thermal-solar-panel.php' => [
            'title' => 'Hybrid Thermal Solar (HTS) Panel',
            'url' => 'hybrid-thermal-solar-panel.php',
            'image' => 'assets/images/hts-hero.png',
            'icon' => 'fa-solid fa-solar-panel',
            'badge' => 'PVT Solar Tech',
            'desc' => 'Co-generating clean electricity and high-temperature thermal hot water simultaneously.',
            'category' => 'services'
        ],
        'esg-and-ehs.php' => [
            'title' => 'ESG and EHS',
            'url' => 'esg-and-ehs.php',
            'image' => 'assets/images/esg-hero.png',
            'icon' => 'fa-solid fa-shield-halved',
            'badge' => 'Sustainability',
            'desc' => 'Environmental, Social, Governance framework strategy and workplace safety auditing.',
            'category' => 'services'
        ],

        // HVAC Solutions
        'radiant-heating-cooling-system.php' => [
            'title' => 'Radiant Heating & Cooling System',
            'url' => 'radiant-heating-cooling-system.php',
            'image' => 'assets/images/radiant-hero.png',
            'icon' => 'fa-solid fa-temperature-arrow-down',
            'badge' => 'Silent Comfort',
            'desc' => 'Hydronic ceiling and floor thermal radiation delivering uniform temperature without draft.',
            'category' => 'hvac'
        ],
        'underfloor-electric-heating-system.php' => [
            'title' => 'Underfloor Electric Heating System',
            'url' => 'underfloor-electric-heating-system.php',
            'image' => 'assets/images/underfloor-hero.png',
            'icon' => 'fa-solid fa-hot-tub-person',
            'badge' => 'Floor Heating',
            'desc' => 'Ultra-thin electric thermal heating cables for luxury residential and commercial comfort.',
            'category' => 'hvac'
        ],
        'geothermal-system.php' => [
            'title' => 'Geothermal System',
            'url' => 'geothermal-system.php',
            'image' => 'assets/images/geothermal-hero.png',
            'icon' => 'fa-solid fa-earth-americas',
            'badge' => 'Ground Source',
            'desc' => 'Harnessing constant earth temperatures for high-efficiency heating and cooling.',
            'category' => 'hvac'
        ],
        'fresh-air-system.php' => [
            'title' => 'Fresh Air System',
            'url' => 'fresh-air-system.php',
            'image' => 'assets/images/fresh-air-hero.png',
            'icon' => 'fa-solid fa-wind',
            'badge' => 'IAQ & HEPA',
            'desc' => 'Energy recovery ventilation (ERV/HRV) and multi-stage HEPA filtration for clean air.',
            'category' => 'hvac'
        ],
        'chilled-water-system.php' => [
            'title' => 'Chilled Water System',
            'url' => 'chilled-water-system.php',
            'image' => 'assets/images/chilled-hero.png',
            'icon' => 'fa-solid fa-snowflake',
            'badge' => 'Central Chillers',
            'desc' => 'High-efficiency magnetic bearing centrifugal and screw chiller plant installations.',
            'category' => 'hvac'
        ],
        'vrv-vrf-system.php' => [
            'title' => 'VRV/VRF System',
            'url' => 'vrv-vrf-system.php',
            'image' => 'assets/images/vrv-hero.png',
            'icon' => 'fa-solid fa-compress-arrows-alt',
            'badge' => 'Variable Refrigerant',
            'desc' => 'Inverter multi-split air conditioning systems providing precise individual zone control.',
            'category' => 'hvac'
        ],
        'heat-pumps.php' => [
            'title' => 'Heat Pumps',
            'url' => 'heat-pumps.php',
            'image' => 'assets/images/heat-pump-hero.png',
            'icon' => 'fa-solid fa-fire-flame-simple',
            'badge' => 'Air-to-Water',
            'desc' => 'Industrial air-source and water-source heat pumps co-generating heat and hot water.',
            'category' => 'hvac'
        ],
        'radiators.php' => [
            'title' => 'Radiators',
            'url' => 'radiators.php',
            'image' => 'assets/images/radiator-hero.png',
            'icon' => 'fa-solid fa-radiator',
            'badge' => 'Space Heating',
            'desc' => 'Designer aluminum and panel radiators for low-temperature hydronic heating systems.',
            'category' => 'hvac'
        ],
        'industrial-hvac-solutions.php' => [
            'title' => 'Industrial HVAC Solutions',
            'url' => 'industrial-hvac-solutions.php',
            'image' => 'assets/images/industry-hero.png',
            'icon' => 'fa-solid fa-industry',
            'badge' => 'Heavy Duty',
            'desc' => 'Custom air handling, process cooling, and dust extraction for manufacturing plants.',
            'category' => 'hvac'
        ],
        'precision-medical-cooling-solution.php' => [
            'title' => 'Precision Medical Cooling Solution',
            'url' => 'precision-medical-cooling-solution.php',
            'image' => 'assets/images/medical-hero.png',
            'icon' => 'fa-solid fa-hospital',
            'badge' => '±0.1°C Stability',
            'desc' => 'Ultra-precise liquid chillers for MRI, CT scanners, and sterile hospital operating theaters.',
            'category' => 'hvac'
        ]
    ];
}

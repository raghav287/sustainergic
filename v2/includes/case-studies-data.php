<?php
/**
 * Sustainergic Tech - Centralized Case Studies Data Repository
 * 
 * TO ADD A NEW CASE STUDY IN THE FUTURE:
 * Simply add a new array item to the $CASE_STUDIES_DATA array below with a unique 'id'.
 * Both the listing page (case-studies.php) and the detail page (case-study-detail.php)
 * will automatically support and display your new case study!
 */

function get_all_case_studies() {
    return [
        'rockefeller-chitkara' => [
            'id' => 'rockefeller-chitkara',
            'title' => 'Rockefeller Block — Sustainability Analysis',
            'client' => 'Chitkara University',
            'location' => 'Punjab, India',
            'prepared_by' => 'Sustainergic Tech',
            'category' => 'green-building',
            'category_name' => 'Green Building & IGBC Platinum',
            'badge' => 'IGBC Platinum Certified',
            'tagline' => 'The Path to Excellence: A comprehensive review of the design strategies and operational efficiencies that defined our Platinum success.',
            'image' => 'assets/images/rockefeller-block.png',
            'is_featured' => true,

            // Scorecard
            'scorecard' => [
                'rating_system' => 'IGBC Green New Buildings Rating System',
                'tier' => 'Platinum Benchmark (Highest Tier)',
                'summary' => 'The Rockefeller Block achieved the highest tier of the IGBC Green New Buildings rating system. This score places the facility among the most environmentally advanced academic structures in India.'
            ],

            // Sustainability Impact Metrics
            'metrics' => [
                'waste_diversion' => '90%',
                'water_savings' => '46%',
                'energy_savings' => '45%',
                'solar_contribution' => '27%',
                'co2_avoided' => '~150 Tons/Yr',
                'baseline_note' => 'All savings compared to standard National Building Code (NBC) baselines.'
            ],

            // Core Green Building Pillars
            'pillars' => [
                [
                    'title' => 'Energy Efficiency',
                    'desc' => 'Demand reduction through high-performance HVAC and LED systems.',
                    'icon' => 'fa-bolt'
                ],
                [
                    'title' => 'Water Balance',
                    'desc' => 'Net-zero goal via rainwater harvesting and 100% recycling.',
                    'icon' => 'fa-droplet'
                ],
                [
                    'title' => 'Indoor Health',
                    'desc' => 'Fresh-air ventilation rates 20% higher than global standards.',
                    'icon' => 'fa-wind'
                ],
                [
                    'title' => 'Green Materials',
                    'desc' => 'Focus on regional procurement and low-VOC interior finishes.',
                    'icon' => 'fa-leaf'
                ]
            ],

            // Optimized Energy Systems
            'energy_systems' => [
                'title' => 'Design for Performance',
                'intro' => 'The Rockefeller Block utilizes a multi-layered approach to energy management:',
                'features' => [
                    'BEE Star-rated VRV/VRF cooling systems.',
                    'Building automation for lighting and thermal control.',
                    'High-performance double glazing for heat reduction.',
                    'Solar panels on the rooftop.'
                ]
            ],

            // Clean Energy Integration
            'clean_energy' => [
                'renewable_offset' => '27%',
                'utility_grid' => '73%',
                'co2_avoided' => '~150 Tons/Year'
            ],

            // Water Neutrality
            'water_neutrality' => [
                'title' => 'Advanced Resource Recovery',
                'intro' => 'Water is treated as a finite asset in the Rockefeller Block. Our strategy encompasses the entire hydrological cycle:',
                'features' => [
                    'Rainwater harvesting system to recharge groundwater.',
                    '100% on-site sewage treatment plant (STP).',
                    'Ultra-low flow fixtures installed campus-wide.'
                ]
            ],

            // Occupant Well-being
            'occupant_wellbeing' => [
                [
                    'title' => 'Enhanced Ventilation',
                    'desc' => 'Continuous monitoring of CO₂ levels and fresh air supply prevents "sick building syndrome" and boosts productivity.'
                ],
                [
                    'title' => 'Daylight Harvesting',
                    'desc' => 'Over 75% of the building\'s interior spaces have direct access to natural light, improving mood and circadian rhythm.'
                ],
                [
                    'title' => 'Non-Toxic Environment',
                    'desc' => 'Strict adherence to low-VOC interior selection for all paints, coatings, and adhesives.'
                ],
                [
                    'title' => 'Visual Connectivity',
                    'desc' => 'Exterior views are optimized in classrooms to provide mental breaks and biophilic connectivity.'
                ]
            ],

            // Green Sourcing Strategy Table
            'green_sourcing' => [
                ['type' => 'Wood Products', 'attribute' => 'FSC Certified Sourcing', 'metric' => '100% Certified'],
                ['type' => 'Civil Finishes', 'attribute' => 'Regional Extraction (<400 km)', 'metric' => '72% Local'],
                ['type' => 'Recycled Content', 'attribute' => 'Pre/Post-Consumer Content', 'metric' => '18% Total Weight'],
                ['type' => 'Site Waste', 'attribute' => 'Construction Waste Diversion', 'metric' => '95% Recycled']
            ],

            // Architectural Vision & Legacy
            'architectural_vision' => 'The Rockefeller Block at Chitkara University stands as a model for future educational infrastructure in India. By merging architectural beauty with engineering performance, we\'ve created a space that inspires learning while protecting the planet. This Platinum rating is not an endpoint, but a benchmark for the university\'s ongoing commitment to a zero-carbon future.',
            'sustainability_legacy' => [
                'Energy efficiency',
                'Water conservation and resource recovery',
                'Renewable energy integration',
                'Indoor environmental quality',
                'Sustainable material sourcing',
                'Construction waste diversion'
            ],

            // Certification Enquiries
            'enquiries' => [
                'title' => 'Questions on the IGBC Platinum certification process?',
                'company' => 'Sustainergic Tech Solutions',
                'address' => 'D 5/24, Chitrakoot Scheme, Jaipur'
            ]
        ],

        'hyatt-regency-dehradun' => [
            'id' => 'hyatt-regency-dehradun',
            'title' => 'Hyatt Regency Dehradun Resort — Net Zero Thermal & LEED Platinum',
            'client' => 'Hyatt Regency',
            'location' => 'Dehradun, Uttarakhand',
            'prepared_by' => 'Sustainergic Tech',
            'category' => 'green-building',
            'category_name' => 'Green Building & Thermal Solar',
            'badge' => 'LEED Platinum Certified',
            'tagline' => 'Integrated sustainability infrastructure comprising 100 Hybrid Thermal Solar (HTS) PVT panels, high-efficiency geothermal heat pumps, and a 42-node LoRaWAN IoT water telemetry network.',
            'image' => 'assets/images/hero.png',
            'is_featured' => false,
            'metrics' => [
                'waste_diversion' => '88%',
                'water_savings' => '42%',
                'energy_savings' => '38%',
                'solar_contribution' => '32%',
                'co2_avoided' => '1,200 Tons/Yr',
                'baseline_note' => 'Calculated against ASHRAE 90.1 baseline standards.'
            ],
            'scorecard' => [
                'rating_system' => 'LEED v4 Building Design & Construction',
                'tier' => 'Platinum Certification',
                'summary' => 'Achieved 38% annual energy reduction and 1,200 tons/yr CO2 reduction with a 3.2-year financial payback period.'
            ],
            'pillars' => [
                ['title' => 'Hybrid Solar PVT', 'desc' => '100 HTS panels generating simultaneous electricity and hot water.', 'icon' => 'fa-solar-panel'],
                ['title' => 'Geothermal Heat Pumps', 'desc' => 'Ground-source thermal transfer eliminating conventional cooling towers.', 'icon' => 'fa-temperature-arrow-down'],
                ['title' => 'IoT Water Network', 'desc' => '42-node LoRaWAN telemetry grid with real-time leak detection.', 'icon' => 'fa-wifi'],
                ['title' => 'LEED Platinum', 'desc' => 'USGBC LEED Platinum certification for hospitality design.', 'icon' => 'fa-award']
            ],
            'architectural_vision' => 'Setting a new benchmark for luxury eco-resorts in the Himalayas by eliminating fossil fuel heating and optimizing thermal energy recovery.',
            'enquiries' => [
                'title' => 'Interested in Resort & Hotel Decarbonization?',
                'company' => 'Sustainergic Tech Solutions',
                'address' => 'D 5/24, Chitrakoot Scheme, Jaipur'
            ]
        ],

        'fortis-medical-cooling' => [
            'id' => 'fortis-medical-cooling',
            'title' => 'Fortis Hospital — Precision Medical MRI Chiller & OT Air Conditioning',
            'client' => 'Fortis Healthcare',
            'location' => 'Mohali, Punjab',
            'prepared_by' => 'Sustainergic Tech',
            'category' => 'hvac',
            'category_name' => 'HVAC & Medical Cooling',
            'badge' => 'NABH & ISO Class 5 Compliant',
            'tagline' => 'Engineered dual-circuit precision liquid chillers for 3.0T MRI helium compressors, eliminating diagnostic downtime with ±0.1°C stability and sterile laminar OT airflow.',
            'image' => 'assets/images/lca-stages.png',
            'is_featured' => false,
            'metrics' => [
                'waste_diversion' => '82%',
                'water_savings' => '35%',
                'energy_savings' => '32%',
                'solar_contribution' => '15%',
                'co2_avoided' => '180 Tons/Yr',
                'baseline_note' => 'NABH critical hospital infrastructure standards.'
            ],
            'scorecard' => [
                'rating_system' => 'NABH Critical Care Standard',
                'tier' => 'Zero Downtime Medical Grade',
                'summary' => 'Eliminated MRI compressor thermal trips with redundant dual-circuit liquid chillers.'
            ],
            'pillars' => [
                ['title' => 'Precision Temp', 'desc' => '±0.1°C thermal stability for 3.0T MRI helium liquid cooling loops.', 'icon' => 'fa-temperature-quarter'],
                ['title' => 'Laminar Airflow', 'desc' => 'ISO Class 5 sterile operating room air handling and filtration.', 'icon' => 'fa-fan'],
                ['title' => 'N+1 Redundancy', 'desc' => 'Dual independent refrigeration circuits for 100% fail-safe backup.', 'icon' => 'fa-shield'],
                ['title' => 'NABH Certified', 'desc' => 'Full compliance with national healthcare accreditation norms.', 'icon' => 'fa-file-medical']
            ],
            'architectural_vision' => 'Pioneering ultra-reliable healthcare HVAC engineering to ensure uninterrupted life-saving diagnostic medical imaging.',
            'enquiries' => [
                'title' => 'Need Healthcare & MRI Precision Cooling Solutions?',
                'company' => 'Sustainergic Tech Solutions',
                'address' => 'D 5/24, Chitrakoot Scheme, Jaipur'
            ]
        ],

        'havells-iot-water' => [
            'id' => 'havells-iot-water',
            'title' => 'Havells India — Automated ZLD Effluent Telemetry & Baghouse Scrubbing',
            'client' => 'Havells India Ltd.',
            'location' => 'Alwar, Rajasthan',
            'prepared_by' => 'Sustainergic Tech',
            'category' => 'iot-water',
            'category_name' => 'IoT Water & Industrial',
            'badge' => '100% ZLD Recycled',
            'tagline' => 'Deployed real-time IoT water quality sensors across STP/ETP plants linked directly to Pollution Control Board servers, alongside industrial baghouse dust collectors.',
            'image' => 'assets/images/emissions-calculation.png',
            'is_featured' => false,
            'metrics' => [
                'waste_diversion' => '96%',
                'water_savings' => '100%',
                'energy_savings' => '28%',
                'solar_contribution' => '22%',
                'co2_avoided' => '310 Tons/Yr',
                'baseline_note' => 'Zero Liquid Discharge (ZLD) closed-loop manufacturing.'
            ],
            'scorecard' => [
                'rating_system' => 'Central Pollution Control Board (CPCB) Standard',
                'tier' => '100% Automated Compliance',
                'summary' => 'Real-time telemetry streaming COD, BOD, and TSS parameters to state regulatory servers.'
            ],
            'pillars' => [
                ['title' => '100% ZLD Water', 'desc' => 'Complete recycling of industrial trade effluent without external discharge.', 'icon' => 'fa-recycle'],
                ['title' => 'Live Telemetry', 'desc' => 'Automated cloud sensors sending encrypted stream to CPCB portal.', 'icon' => 'fa-tower-cell'],
                ['title' => 'Baghouse Filtration', 'desc' => 'Heavy-duty industrial dust collection protecting shopfloor air quality.', 'icon' => 'fa-smog'],
                ['title' => 'Energy Recovery', 'desc' => 'VFD motor drives optimizing pump and scrubber blower speeds.', 'icon' => 'fa-gauge-high']
            ],
            'architectural_vision' => 'Demonstrating how large-scale manufacturing can achieve complete water self-reliance and regulatory compliance through smart automation.',
            'enquiries' => [
                'title' => 'Need Industrial ZLD & Pollution Control Board Telemetry?',
                'company' => 'Sustainergic Tech Solutions',
                'address' => 'D 5/24, Chitrakoot Scheme, Jaipur'
            ]
        ],

        'vaibhav-esg-brsr' => [
            'id' => 'vaibhav-esg-brsr',
            'title' => 'Vaibhav Global HQ — Statutory SEBI BRSR & Scope 1-3 Decarbonization',
            'client' => 'Vaibhav Global HQ',
            'location' => 'Jaipur, Rajasthan',
            'prepared_by' => 'Sustainergic Tech',
            'category' => 'esg',
            'category_name' => 'ESG & Carbon Advisory',
            'badge' => 'SEBI BRSR Compliant',
            'tagline' => 'Formulated comprehensive SEBI BRSR annual filings, GHG Protocol Scope 1, 2, and 3 accounting, and set Science Based Targets (SBTi) net-zero goals.',
            'image' => 'assets/images/carbon-intro.png',
            'is_featured' => false,
            'metrics' => [
                'waste_diversion' => '91%',
                'water_savings' => '38%',
                'energy_savings' => '35%',
                'solar_contribution' => '40%',
                'co2_avoided' => '450 Tons/Yr',
                'baseline_note' => 'SEBI Business Responsibility and Sustainability Reporting (BRSR) framework.'
            ],
            'scorecard' => [
                'rating_system' => 'SEBI BRSR & GHG Protocol Corporate Standard',
                'tier' => 'Audit Verified Disclosure',
                'summary' => 'Comprehensive inventory of Scope 1, 2, and upstream/downstream Scope 3 supply chain carbon emissions.'
            ],
            'pillars' => [
                ['title' => 'SEBI BRSR Filing', 'desc' => 'End-to-end preparation and third-party verification for listed entity disclosure.', 'icon' => 'fa-file-shield'],
                ['title' => 'Scope 1-3 GHG', 'desc' => 'Granular carbon accounting compliant with ISO 14064 standards.', 'icon' => 'fa-chart-pie'],
                ['title' => 'SBTi Roadmap', 'desc' => 'Target setting aligned with 1.5°C global warming limits.', 'icon' => 'fa-bullseye'],
                ['title' => 'ESG Strategy', 'desc' => 'Board-level governance, supply chain audits, and worker welfare metrics.', 'icon' => 'fa-hands-holding-circle']
            ],
            'architectural_vision' => 'Empowering listed corporations to achieve global ESG excellence, transparent compliance, and investor confidence.',
            'enquiries' => [
                'title' => 'Questions on SEBI BRSR & GHG Scope 1-3 Carbon Advisory?',
                'company' => 'Sustainergic Tech Solutions',
                'address' => 'D 5/24, Chitrakoot Scheme, Jaipur'
            ]
        ],

        'sbi-head-office' => [
            'id' => 'sbi-head-office',
            'title' => 'SBI Head Office — IGBC Platinum Certification & Hydronic Radiant Comfort',
            'client' => 'State Bank of India',
            'location' => 'Chandigarh, India',
            'prepared_by' => 'Sustainergic Tech',
            'category' => 'green-building',
            'category_name' => 'Green Building & Radiant HVAC',
            'badge' => 'IGBC Platinum Certified',
            'tagline' => 'Retro-commissioned 12-story commercial tower HVAC, retrofitting underfloor hydronic heating loops and EC plug fan AHUs for 32% building energy reduction.',
            'image' => 'assets/images/sustainable-architecture.png',
            'is_featured' => false,
            'metrics' => [
                'waste_diversion' => '87%',
                'water_savings' => '40%',
                'energy_savings' => '32%',
                'solar_contribution' => '25%',
                'co2_avoided' => '290 Tons/Yr',
                'baseline_note' => 'Calculated against pre-retrofit building utility baseline.'
            ],
            'scorecard' => [
                'rating_system' => 'IGBC Existing Buildings Rating System',
                'tier' => 'Platinum Certification',
                'summary' => 'Achieved 32% energy reduction in high-rise commercial banking headquarters through radiant hydronic retrofits.'
            ],
            'pillars' => [
                ['title' => 'Radiant Comfort', 'desc' => 'Hydronic floor heating loops providing uniform thermal comfort without drafts.', 'icon' => 'fa-temperature-arrow-up'],
                ['title' => 'EC Plug Fans', 'desc' => 'Ultra-efficient Electronically Commutated fan retrofit on all 12 floors.', 'icon' => 'fa-fan'],
                ['title' => 'IGBC Platinum', 'desc' => 'Awarded top green building rating for existing commercial high-rise.', 'icon' => 'fa-trophy'],
                ['title' => 'Retro-Commissioning', 'desc' => 'Optimized chiller plant sequences and chilled water pumping controls.', 'icon' => 'fa-gears']
            ],
            'architectural_vision' => 'Transforming legacy financial headquarters into high-efficiency, occupant-friendly green landmarks.',
            'enquiries' => [
                'title' => 'Want to Upgrade Your Building to IGBC Platinum?',
                'company' => 'Sustainergic Tech Solutions',
                'address' => 'D 5/24, Chitrakoot Scheme, Jaipur'
            ]
        ],

        'holiday-inn-jaipur' => [
            'id' => 'holiday-inn-jaipur',
            'title' => 'Holiday Inn Jaipur — Comprehensive Energy, Electrical Safety & HVAC Thermal Audit',
            'client' => 'Holiday Inn (IHG Group)',
            'location' => 'Jaipur, Rajasthan',
            'prepared_by' => 'Sustainergic Tech',
            'category' => 'audits',
            'category_name' => 'Energy & Safety Audits',
            'badge' => 'BEE Empanelled Audit Certified',
            'tagline' => 'Full-spectrum thermal envelope, centralized chiller plant, and electrical safety audit identifying 24% potential energy reduction with actionable ECMs.',
            'image' => 'assets/images/energy-holiday.png',
            'is_featured' => false,
            'metrics' => [
                'waste_diversion' => '78%',
                'water_savings' => '32%',
                'energy_savings' => '24%',
                'solar_contribution' => '18%',
                'co2_avoided' => '210 Tons/Yr',
                'baseline_note' => 'Benchmarked against BEE hospitality sector thermal performance standards.'
            ],
            'scorecard' => [
                'rating_system' => 'BEE Certified Energy Audit & Thermal Imaging',
                'tier' => 'Grade-A Energy Conservation Report',
                'summary' => 'Formulated comprehensive thermal imaging and chiller COP optimization roadmap with an estimated 1.8-year payback.'
            ],
            'pillars' => [
                ['title' => 'Chiller COP Audit', 'desc' => 'Measured actual partial load chiller efficiencies and pumping delta-T.', 'icon' => 'fa-gauge-high'],
                ['title' => 'Thermography', 'desc' => 'Infrared thermal imaging identifying electrical hotspot risks and envelope leakage.', 'icon' => 'fa-camera'],
                ['title' => 'Kitchen Ventilation', 'desc' => 'Variable-speed exhaust hood control reducing conditioned air exhaust losses.', 'icon' => 'fa-fan'],
                ['title' => 'Power Quality', 'desc' => 'Harmonic distortion analysis and power factor correction to 0.99.', 'icon' => 'fa-bolt']
            ],
            'architectural_vision' => 'Optimizing guest thermal comfort while driving down hotel operational energy expenditure through engineering precision.',
            'enquiries' => [
                'title' => 'Need an Energy & Safety Audit for Your Facility?',
                'company' => 'Sustainergic Tech Solutions',
                'address' => 'D 5/24, Chitrakoot Scheme, Jaipur'
            ]
        ],

        'spj-vedatam-mall' => [
            'id' => 'spj-vedatam-mall',
            'title' => 'SPJ Vedatam Mall — ECSBC / ECBC Statutory Compliance & Envelope Optimization',
            'client' => 'SPJ Group',
            'location' => 'Gurugram, Haryana',
            'prepared_by' => 'Sustainergic Tech',
            'category' => 'services',
            'category_name' => 'ECSBC Code & Simulation',
            'badge' => 'BEE ECSBC Sanctioned',
            'tagline' => 'Prescriptive trade-off and whole-building simulation for high-density retail destination, optimizing glass SHGC, roof insulation, and central chiller efficiency.',
            'image' => 'assets/images/ecsbc-spj.png',
            'is_featured' => false,
            'metrics' => [
                'waste_diversion' => '85%',
                'water_savings' => '38%',
                'energy_savings' => '31%',
                'solar_contribution' => '22%',
                'co2_avoided' => '540 Tons/Yr',
                'baseline_note' => 'Compliance verified against Haryana ECBC / BEE ECSBC 2024 thresholds.'
            ],
            'scorecard' => [
                'rating_system' => 'BEE Energy Conservation & Sustainable Building Code (ECSBC)',
                'tier' => '100% Code Approved',
                'summary' => 'Achieved municipal statutory energy sanction while reducing peak cooling chiller capacity requirement by 18%.'
            ],
            'pillars' => [
                ['title' => 'Glazing Optimization', 'desc' => 'Curtain wall SHGC specified at 0.25 with low-E coating for daylight retention.', 'icon' => 'fa-window-maximize'],
                ['title' => 'Whole-Building Sim', 'desc' => 'Hour-by-hour dynamic energy simulation using EnergyPlus and eQUEST engines.', 'icon' => 'fa-laptop-code'],
                ['title' => 'Lighting Power Density', 'desc' => 'Retail atriums engineered at 35% lower LPD than baseline code.', 'icon' => 'fa-lightbulb'],
                ['title' => 'Statutory Clearances', 'desc' => 'Expedited Energy Performance Index (EPI) compliance report and approvals.', 'icon' => 'fa-file-shield']
            ],
            'architectural_vision' => 'Proving that high-footfall commercial retail developments can operate at benchmark efficiency with high occupant visual comfort.',
            'enquiries' => [
                'title' => 'Need ECSBC Code Compliance & Approvals for Your Project?',
                'company' => 'Sustainergic Tech Solutions',
                'address' => 'D 5/24, Chitrakoot Scheme, Jaipur'
            ]
        ],

        'martin-luther-chitkara' => [
            'id' => 'martin-luther-chitkara',
            'title' => 'Martin Luther Block — Independent Commissioning Authority (CxA) & MEP Balancing',
            'client' => 'Chitkara University',
            'location' => 'Rajpura, Punjab',
            'prepared_by' => 'Sustainergic Tech',
            'category' => 'services',
            'category_name' => 'Commissioning Authority',
            'badge' => 'Cx Certified Performance',
            'tagline' => 'Comprehensive third-party commissioning of VRV cooling, dedicated outdoor air systems (DOAS), water pumping, and building management controls.',
            'image' => 'assets/images/comission-martin.png',
            'is_featured' => false,
            'metrics' => [
                'waste_diversion' => '92%',
                'water_savings' => '44%',
                'energy_savings' => '28%',
                'solar_contribution' => '30%',
                'co2_avoided' => '175 Tons/Yr',
                'baseline_note' => 'Performance validated against ASHRAE Guideline 0-2019 commissioning requirements.'
            ],
            'scorecard' => [
                'rating_system' => 'USGBC / IGBC Fundamental & Enhanced Commissioning',
                'tier' => 'Verified Commissioning Authority',
                'summary' => 'Identified and remediated 34 pre-functional mechanical discrepancies prior to building handover, ensuring optimal design intent.'
            ],
            'pillars' => [
                ['title' => 'TAB Verification', 'desc' => 'Testing, Adjusting, and Balancing (TAB) of all air and hydronic distribution circuits.', 'icon' => 'fa-sliders'],
                ['title' => 'BMS Sequences', 'desc' => 'End-to-end verification of control algorithms, setback temperatures, and alarms.', 'icon' => 'fa-network-wired'],
                ['title' => 'Air Balancing', 'desc' => 'Ensuring precise ventilation delivery to lecture halls, auditoriums, and laboratories.', 'icon' => 'fa-wind'],
                ['title' => 'Seasonal Testing', 'desc' => '10-month post-occupancy seasonal review verifying peak cooling and heating performance.', 'icon' => 'fa-calendar-check']
            ],
            'architectural_vision' => 'Guaranteeing institutional building systems deliver real-world operational savings from day one of occupation.',
            'enquiries' => [
                'title' => 'Looking for an Independent Commissioning Authority (CxA)?',
                'company' => 'Sustainergic Tech Solutions',
                'address' => 'D 5/24, Chitrakoot Scheme, Jaipur'
            ]
        ],

        '42works-campus' => [
            'id' => '42works-campus',
            'title' => '42 Works Campus — 3D Whole-Building Energy Simulation & Microclimate CFD',
            'client' => '42 Works',
            'location' => 'Mohali, Punjab',
            'prepared_by' => 'Sustainergic Tech',
            'category' => 'services',
            'category_name' => 'Simulation & 3D Modeling',
            'badge' => 'High-Performance Modeled',
            'tagline' => 'High-fidelity building physics simulation, daylight lux factor mapping, and computational fluid dynamics (CFD) airflow distribution.',
            'image' => 'assets/images/ecsbc-42.png',
            'is_featured' => false,
            'metrics' => [
                'waste_diversion' => '86%',
                'water_savings' => '36%',
                'energy_savings' => '34%',
                'solar_contribution' => '20%',
                'co2_avoided' => '160 Tons/Yr',
                'baseline_note' => 'Simulated utilizing EnergyPlus v23.2 and OpenStudio building energy modeling.'
            ],
            'scorecard' => [
                'rating_system' => 'ASHRAE Standard 140 Energy Modeling Best Practice',
                'tier' => 'Predictive Energy Optimization',
                'summary' => 'Virtual prototyping identified external shading geometries that eliminated 22% of solar heat gain while preserving 85% natural daylighting.'
            ],
            'pillars' => [
                ['title' => 'Daylight Simulation', 'desc' => 'Useful Daylight Illuminance (UDI 100-2000 lux) mapped across all open office zones.', 'icon' => 'fa-sun'],
                ['title' => 'CFD Airflow', 'desc' => 'Internal computational fluid dynamics preventing draft points and thermal stratification.', 'icon' => 'fa-cloud'],
                ['title' => 'Solar Shading', 'desc' => 'Parametric louvre optimization minimizing solar heat gain during peak summer months.', 'icon' => 'fa-shield-halved'],
                ['title' => 'HVAC Sizing', 'desc' => 'Accurate peak thermal sizing avoiding costly chiller and duct oversizing.', 'icon' => 'fa-calculator']
            ],
            'architectural_vision' => 'Uniting modern architectural aesthetics with high-performance computational building physics.',
            'enquiries' => [
                'title' => 'Need 3D Energy, Daylight, or CFD Modeling for Your Design?',
                'company' => 'Sustainergic Tech Solutions',
                'address' => 'D 5/24, Chitrakoot Scheme, Jaipur'
            ]
        ],

        'the-gold-palace' => [
            'id' => 'the-gold-palace',
            'title' => 'The Gold Palace Resort — Real-Time IoT Water Sensor Telemetry & Resource Optimization',
            'client' => 'The Gold Palace Resort',
            'location' => 'Jaipur, Rajasthan',
            'prepared_by' => 'Sustainergic Tech',
            'category' => 'iot-water',
            'category_name' => 'IoT Water & Smart Automation',
            'badge' => 'IoT Smart Water Certified',
            'tagline' => 'End-to-end telemetry deployment across resort freshwater supplies, STP recycling loops, and pool thermal circuits, saving 35% water annually.',
            'image' => 'assets/images/energy-gold.png',
            'is_featured' => false,
            'metrics' => [
                'waste_diversion' => '89%',
                'water_savings' => '35%',
                'energy_savings' => '26%',
                'solar_contribution' => '24%',
                'co2_avoided' => '190 Tons/Yr',
                'baseline_note' => 'Monitored across 32 ultrasonic flow sensors and digital water quality telemetry.'
            ],
            'scorecard' => [
                'rating_system' => 'Aquasense IoT Telemetry & Central Water Dashboard',
                'tier' => 'Automated Water Efficiency',
                'summary' => 'Real-time automated leak alarms and greywater recycling controls eliminated over 12 million liters of water waste per year.'
            ],
            'pillars' => [
                ['title' => 'Smart Metering', 'desc' => 'Ultrasonic digital telemetry tracking consumption across guest wings and landscaping.', 'icon' => 'fa-droplet'],
                ['title' => 'STP Automation', 'desc' => 'Automated aeration and filtration cycling maximizing treated water re-use for horticulture.', 'icon' => 'fa-recycle'],
                ['title' => 'Thermal Pool Loop', 'desc' => 'Heat pump integration maintaining pool temperature with 45% lower electricity input.', 'icon' => 'fa-temperature-half'],
                ['title' => 'Cloud Dashboard', 'desc' => 'Real-time alert notifications for pipeline pressure drops and tank overflows.', 'icon' => 'fa-chart-line']
            ],
            'architectural_vision' => 'Enabling luxury heritage resorts to achieve water security and environmental stewardship in water-stressed climates.',
            'enquiries' => [
                'title' => 'Want to Deploy Smart IoT Water Automation for Your Facility?',
                'company' => 'Sustainergic Tech Solutions',
                'address' => 'D 5/24, Chitrakoot Scheme, Jaipur'
            ]
        ],

        'aiims-delhi' => [
            'id' => 'aiims-delhi',
            'title' => 'AIIMS, New Delhi — Precision Medical Research Cooling & Sterile Lab HVAC',
            'client' => 'All India Institute of Medical Sciences (AIIMS)',
            'location' => 'New Delhi, India',
            'prepared_by' => 'Sustainergic Tech',
            'category' => 'hvac',
            'category_name' => 'HVAC & Precision Medical',
            'badge' => 'ISO Class 5 & NABH Medical Grade',
            'tagline' => 'Engineered high-stability precision chilled water circuits and HEPA filtration for medical diagnostic equipment, pathology labs, and research wings.',
            'image' => 'assets/images/medical-aims.png',
            'is_featured' => false,
            'metrics' => [
                'waste_diversion' => '84%',
                'water_savings' => '32%',
                'energy_savings' => '36%',
                'solar_contribution' => '18%',
                'co2_avoided' => '220 Tons/Yr',
                'baseline_note' => 'Engineered to NABH healthcare guidelines and ISO 14644 cleanroom criteria.'
            ],
            'scorecard' => [
                'rating_system' => 'NABH & Cleanroom HVAC Standards',
                'tier' => 'Critical Medical Precision',
                'summary' => 'Achieved uninterrupted ±0.2°C temperature tolerance with 99.997% particle containment across diagnostic suites.'
            ],
            'pillars' => [
                ['title' => 'Lab Precision', 'desc' => 'Thermal stability of ±0.2°C ensuring zero calibration drift for precision diagnostic equipment.', 'icon' => 'fa-hospital'],
                ['title' => 'Sterile Airflow', 'desc' => 'Positive pressure isolation and HEPA laminar air distribution protecting sensitive environments.', 'icon' => 'fa-wind'],
                ['title' => 'Fail-Safe N+1', 'desc' => 'Fully redundant secondary chiller backup safeguarding continuous 24x7 patient care.', 'icon' => 'fa-shield-halved'],
                ['title' => 'Energy Optimization', 'desc' => 'Electronically commutated EC motor fans reducing AHU power draw by 34%.', 'icon' => 'fa-bolt']
            ],
            'architectural_vision' => 'Supporting national premier medical institutions with mission-critical climate and sterile environment engineering.',
            'enquiries' => [
                'title' => 'Require Healthcare or Sterile Lab HVAC Engineering?',
                'company' => 'Sustainergic Tech Solutions',
                'address' => 'D 5/24, Chitrakoot Scheme, Jaipur'
            ]
        ],

        'coca-cola-srikalahasti' => [
            'id' => 'coca-cola-srikalahasti',
            'title' => 'Hindustan Coca-Cola Beverages — Industrial Ventilation & Process HVAC Efficiency',
            'client' => 'Hindustan Coca-Cola Beverages Pvt. Ltd.',
            'location' => 'Srikalahasti, Andhra Pradesh',
            'prepared_by' => 'Sustainergic Tech',
            'category' => 'industrial-hvac',
            'category_name' => 'Industrial HVAC & Energy Recovery',
            'badge' => 'Industrial Energy Benchmark',
            'tagline' => 'High-efficiency industrial ventilation, automated spot cooling, cleanroom environmental management, and compressor waste heat recovery across bottling lines.',
            'image' => 'assets/images/industry-hindustan.png',
            'is_featured' => false,
            'metrics' => [
                'waste_diversion' => '94%',
                'water_savings' => '42%',
                'energy_savings' => '38%',
                'solar_contribution' => '22%',
                'co2_avoided' => '450 Tons/Yr',
                'baseline_note' => 'Audited across bottling hall, syrup preparation zones, and warehousing facilities.'
            ],
            'scorecard' => [
                'rating_system' => 'Industrial Energy Conservation Benchmark',
                'tier' => 'World-Class Manufacturing Standard',
                'summary' => 'Reduced bottling hall ambient peak thermal stress by 6.5°C while trimming auxiliary fan electricity consumption by 38%.'
            ],
            'pillars' => [
                ['title' => 'Waste Heat Recovery', 'desc' => 'Harnessed compressor thermal rejection for boiler feedwater preheating, saving thermal fuel.', 'icon' => 'fa-fire-flame-curved'],
                ['title' => 'Spot Cooling', 'desc' => 'Targeted high-velocity displacement diffusers focusing conditioned air directly on operator stations.', 'icon' => 'fa-fan'],
                ['title' => 'Process Air Balance', 'desc' => 'Controlled pressure gradients preventing dust ingress into bottling and clean packaging areas.', 'icon' => 'fa-industry'],
                ['title' => 'BMS Automation', 'desc' => 'Smart scheduling and temperature reset curves responsive to factory ambient loads.', 'icon' => 'fa-microchip']
            ],
            'architectural_vision' => 'Delivering heavy-duty industrial environmental control that drives high-throughput manufacturing productivity while hitting strict decarbonization targets.',
            'enquiries' => [
                'title' => 'Seeking Industrial HVAC Optimization for Manufacturing Facilities?',
                'company' => 'Sustainergic Tech Solutions',
                'address' => 'D 5/24, Chitrakoot Scheme, Jaipur'
            ]
        ]
    ];
}

function get_case_study_by_id($id) {
    $all = get_all_case_studies();
    if (isset($all[$id])) {
        return $all[$id];
    }
    // Fallback to Rockefeller Block if ID not found
    return $all['rockefeller-chitkara'];
}
?>

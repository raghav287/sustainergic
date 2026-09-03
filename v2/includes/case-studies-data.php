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

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2026 at 11:12 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `galleon1`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `bname` varchar(255) NOT NULL,
  `bdesc` longtext NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `bname`, `bdesc`, `image`) VALUES
(2, 'Why material choice matters in pharmaceutical production.', '<p>Stainless steel plays a vital role in hygiene, durability, and corrosion resistance. Learn how Galleon Pharma selects the best-grade steel to meet GMP and FDA standards in every product.</p>', 's3.jpg'),
(3, 'Ensuring Safety & Compliance in Every Part', '<p>Meeting industry standards with precision and trust. Every pharma part must meet global safety benchmarks. Galleon Pharma ensures full compliance with ISO and GMP standards, maintaining trust with clients worldwide.</p>', 's1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

CREATE TABLE `career` (
  `id` int(11) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `cdesc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `career`
--

INSERT INTO `career` (`id`, `cname`, `cdesc`) VALUES
(1, 'Senior Web Developer', '<p><strong>Location: Mumbai, India (Hybrid)</strong></p><p><strong>Skills: HTML, CSS, JavaScript, PHP, MySQL, CodeIgniter</strong></p>'),
(2, 'Content Writer', '<p><strong style=\"background-color: rgb(242, 243, 244); color: rgb(116, 120, 124);\">Location: Mumbai, India (Hybrid)</strong></p><p><br></p><p>Write, edit, and proofread high-quality content for websites, blogs, social media, newsletters, and marketing ca');

-- --------------------------------------------------------

--
-- Table structure for table `casestudy`
--

CREATE TABLE `casestudy` (
  `id` int(225) NOT NULL,
  `cname` longtext NOT NULL,
  `cdesc` longtext NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `casestudy`
--

INSERT INTO `casestudy` (`id`, `cname`, `cdesc`, `image`) VALUES
(4, 'Structural Strengthening by Column Jacketing – Netrajyot Eye Care Hospital, Khanda Colony', '<p>Client:&lt;br&gt;</p><p>&lt;b&gt;Netrajyot Eye Care Hospital&lt;/b&gt;&lt;br&gt;</p><p><br></p><p>Location:&lt;br&gt;</p><p>&lt;b&gt;Khanda Colony, Navi Mumbai&lt;/b&gt;&lt;br&gt;&lt;br&gt;</p><p><br></p><p>Project Type:&lt;br&gt;</p><p>&lt;b&gt;Structural Audit, Design of Repair &amp; Strengthening (Column Jacketing), and PMC Supervision&lt;/b&gt;&lt;br&gt;&lt;br&gt;</p><p><br></p><p>&lt;b&gt;Building Details&lt;/b&gt;&lt;br&gt;</p><p>Structure: G + 2 RCC Framed Structure&lt;br&gt;</p><p>Usage: Hospital Building (Ophthalmic Facility)&lt;br&gt;</p><p>No. of Columns Strengthened: 15 Nos.&lt;br&gt;</p><p>Total Built-up Area: Approx. 9,500 sq.ft.&lt;br&gt;</p><p>Year of Construction: Approx. 2005&lt;br&gt;&lt;br&gt;</p><p><br></p><p>&lt;b&gt;Background &amp; Problem Statement&lt;/b&gt;&lt;br&gt;</p><p>The hospital management observed visible cracks in columns and beams, spalling of concrete cover, and dampness in the basement and ground-floor areas.&lt;br&gt;</p><p>These issues were causing concerns about patient safety, possible load-bearing reduction, and aesthetic deterioration of the hospital’s interior zones.&lt;br&gt;&lt;br&gt;</p><p><br></p><p>Valorem Engineering Pvt. Ltd. was appointed as the Structural Consultant to carry out a comprehensive structural audit and propose scientifically designed strengthening solutions without major interruption to hospital operations.&lt;br&gt;&lt;br&gt;</p><p><br></p><p>&lt;b&gt;Scope of Work&lt;/b&gt;&lt;br&gt;</p><p><br></p><p>&lt;b&gt;Detailed Structural Audit&lt;/b&gt;&lt;br&gt;</p><p>– Visual inspection of all structural elements&lt;br&gt;</p><p>– Non-Destructive Testing (NDT) including:&lt;br&gt;</p><p>&nbsp;&nbsp;• Rebound Hammer Test for surface hardness&lt;br&gt;</p><p>&nbsp;&nbsp;• Ultrasonic Pulse Velocity (UPV) for internal concrete quality&lt;br&gt;</p><p>&nbsp;&nbsp;• Half-Cell Potential Test for corrosion mapping&lt;br&gt;</p><p>&nbsp;&nbsp;• Verification of column reinforcement through cover meter survey&lt;br&gt;</p><p>– Assessment of distress severity and categorization of repair priority&lt;br&gt;&lt;br&gt;</p><p><br></p><p>&lt;b&gt;Root Cause Analysis&lt;/b&gt;&lt;br&gt;</p><p>– Continuous exposure to moisture from adjacent drains&lt;br&gt;</p><p>– Corrosion-induced cracking and delamination&lt;br&gt;</p><p>– Deficient concrete compaction during original construction&lt;br&gt;</p><p>– Poor surface protection and aging&lt;br&gt;&lt;br&gt;</p><p><br></p><p>&lt;b&gt;Structural Strengthening Design&lt;/b&gt;&lt;br&gt;</p><p>Based</p><p><br></p>', 'modern-highrise-building-with-glass-exterior-rooftop-amenities-stylish-urban-architecture-city.jpg'),
(5, 'Valuation of Reputed School Buildings Across India', '<p>Client:&lt;br&gt;</p><p>&lt;b&gt;Confidential – A Leading Educational Institution (PAN India Network)&lt;/b&gt;&lt;br&gt;&lt;br&gt;</p><p><br></p><p>Project Type:&lt;br&gt;</p><p>&lt;b&gt;Valuation of Institutional Properties (Land &amp; Building)&lt;/b&gt;&lt;br&gt;&lt;br&gt;</p><p><br></p><p>Service Provided By:&lt;br&gt;</p><p>&lt;b&gt;Valorem Engineering Pvt. Ltd.&lt;/b&gt;&lt;br&gt;&lt;br&gt;</p><p><br></p><p>&lt;b&gt;Project Overview&lt;/b&gt;&lt;br&gt;</p><p>A reputed educational group with multiple campuses across India engaged Valorem Engineering Pvt. Ltd. to carry out independent valuation of their school properties for financial reporting, banking, and asset verification purposes.&lt;br&gt;&lt;br&gt;</p><p><br></p><p>The assignment covered multiple school buildings located in key cities and towns across India, including Maharashtra, Gujarat, Karnataka, Delhi NCR, and Madhya Pradesh.&lt;br&gt;&lt;br&gt;</p><p><br></p><p>Each site comprised extensive built-up facilities such as classroom blocks, laboratories, administrative wings, auditoriums, sports complexes, staff quarters, and playgrounds.&lt;br&gt;&lt;br&gt;</p><p><br></p><p>&lt;b&gt;Scope of Work&lt;/b&gt;&lt;br&gt;</p><p>&lt;b&gt;Physical Inspection &amp; Site Survey&lt;/b&gt;&lt;br&gt;</p><p>– On-site inspection of every campus to assess physical condition and layout&lt;br&gt;</p><p>– Verification of land boundaries, access roads, and utility infrastructure&lt;br&gt;</p><p>– Estimation of built-up area through architectural plans and physical measurements&lt;br&gt;&lt;br&gt;</p><p><br></p><p>&lt;b&gt;Technical Evaluation&lt;/b&gt;&lt;br&gt;</p><p>– Assessment of structural condition, maintenance level, and construction quality&lt;br&gt;</p><p>– Review of approved plans, occupancy certificates, and land title documents&lt;br&gt;</p><p>– Identification of additional structures (temporary or permanent) and their valuation impact&lt;br&gt;&lt;br&gt;</p><p><br></p><p>&lt;b&gt;Valuation Methodology&lt;/b&gt;&lt;br&gt;</p><p>Land Valuation: Based on latest Ready Reckoner Rates and prevailing market trends in each region&lt;br&gt;</p><p>Building Valuation: Using Depreciated Replacement Cost (DRC) method considering age, quality, and residual life&lt;br&gt;</p><p>Reconciliation of Values: Integration of both land and structure values with regional adjustment factors&lt;br&gt;&lt;br&gt;</p><p><br></p><p>&lt;b&gt;Deliverables&lt;/b&gt;&lt;br&gt;</p><p>– Individual Valuation Reports for each property site&lt;br&gt;</p><p>– Consolidated Summary Report for the client’s head office&lt;br&gt;</p><p>– Photographic Documentation of each asset&lt;br&gt;</p><p>– Recommendations for asset optimization and maintenance planning&lt;br&gt;&lt;br&gt;</p><p><br></p><p>&lt;b&gt;Project Challenges&lt;/b&gt;&lt;br&gt;</p><p>– Managing logistics and coordination for multiple sites across states&lt;br&gt;</p><p>– Dealing with regional differences in ready reckoner and market rates&lt;br&gt;</p><p>– Synchronizing data collection, NOC verification, and document review with local management teams&lt;br&gt;</p><p>– Maintaining reporting uniformity and audit compliance for all campuses&lt;br&gt;&lt;br&gt;</p><p><br></p><p>&lt;b&gt;Valorem Engineering’s Approach&lt;/b&gt;&lt;br&gt;</p><p>Valorem Engineering deployed a dedicated multi-disciplinary team of engineers and valuers, led by Mr. Sagar Prakash Shinde (Founder &amp; Principal Consulting Engineer).&lt;br&gt;</p><p>The team adopted a standardized Valuation Template and QA Procedure ensuring consistent accuracy and transparency across all reports.&lt;br&gt;&lt;br&gt;</p><p><br></p><p>Digital tools and satellite mapping were also utilized to verify land boundaries and built-up consistency for remote sites.&lt;br&gt;&lt;br&gt;</p><p><br></p><p>&lt;b&gt;Outcome &amp; Impact&lt;/b&gt;&lt;br&gt;</p><p>✅ Delivered accurate and bank-compliant valuation reports for all c</p><p><br></p>', 'modern-buildings-city-against-sky-sunset.jpg'),
(6, ' Project Management for Structural & Plumbing Repair Works – BSEL Tech Park Tower, Vashi', '<p>Client:&lt;br&gt;</p><p>&lt;b&gt;BSEL Tech Park Premises Co-operative Society Ltd.&lt;/b&gt;&lt;br&gt;&lt;br&gt;</p><p><br></p><p>Location:&lt;br&gt;</p><p>&lt;b&gt;Sector 30, Vashi, Navi Mumbai&lt;/b&gt;&lt;br&gt;&lt;br&gt;</p><p><br></p><p>Project Type:&lt;br&gt;</p><p>&lt;b&gt;Repair &amp; Rehabilitation Project – PMC (Project Management Consultancy)&lt;/b&gt;&lt;br&gt;&lt;br&gt;</p><p><br></p><p>&lt;b&gt;Building Details&lt;/b&gt;&lt;br&gt;</p><p>Structure: Commercial IT Tower&lt;br&gt;</p><p>Configuration: 3 Basements + Ground + 14 Upper Floors&lt;br&gt;</p><p>Usage: Corporate &amp; IT Offices&lt;br&gt;</p><p>Built-up Area: Approx. 2,50,000 sq.ft.&lt;br&gt;</p><p>Year of Construction: Circa 2005&lt;br&gt;&lt;br&gt;</p><p><br></p><p>&lt;b&gt;Background &amp; Objective&lt;/b&gt;&lt;br&gt;</p><p>The management of BSEL Tech Park observed recurring leakage, corrosion, and plumbing failures within service ducts and terrace zones.&lt;br&gt;</p><p>Frequent complaints of foul odor, water seepage, and damaged finishes were affecting tenants’ operations and maintenance costs.&lt;br&gt;&lt;br&gt;</p><p><br></p><p>To address these challenges in a structured and transparent manner, Valorem Engineering Pvt. Ltd. was appointed as the Project Management Consultant (PMC) to handle the entire repair process from assessment to execution monitoring.&lt;br&gt;&lt;br&gt;</p><p><br></p><p>The project required technical expertise, cross-coordination between multiple contractors, and strict quality control, given the operational nature of the building with ongoing office activities.&lt;br&gt;&lt;br&gt;</p><p><br></p><p>&lt;b&gt;Scope of PMC Work&lt;/b&gt;&lt;br&gt;</p><p>&lt;b&gt;Preliminary Structural &amp; Plumbing Audit&lt;/b&gt;&lt;br&gt;</p><p>– Inspection of 14 service ducts (vertical risers)&lt;br&gt;</p><p>– Assessment of RCC members, plumbing joints, and drainage systems&lt;br&gt;</p><p>– Identification of unsafe, deteriorated, or corroded sections&lt;br&gt;&lt;br&gt;</p><p><br></p><p>&lt;b&gt;Planning &amp; Tendering&lt;/b&gt;&lt;br&gt;</p><p>– Preparation of Repair Estimate, BOQ, and Tender Documents&lt;br&gt;</p><p>– Technical vetting of contractors and comparative analysis&lt;br&gt;</p><p>– Assistance in contractor selection through transparent process&lt;br&gt;&lt;br&gt;</p><p><br></p><p>&lt;b&gt;Execution Supervision &amp; Quality Control&lt;/b&gt;&lt;br&gt;</p><p>– Daily on-site supervision and progress tracking&lt;br&gt;</p><p>– Verification of quantities and workmanship standards&lt;br&gt;</p><p>– Approval of material brands and mix designs (plumbing + civil repair)&lt;br&gt;</p><p>– Testing and inspection through NDT and visual verification&lt;br&gt;&lt;br&gt;</p><p><br></p><p>&lt;b&gt;Coordination &amp; Documentation&lt;/b&gt;&lt;br&gt;</p><p>– Periodic review meetings with Society Committee and Contractors&lt;br&gt;</p><p>– Monthly progress reports and photo documentation&lt;br&gt;</p><p>– Coordination between Structural, Plumbing, and Waterproofing teams&lt;br&gt;&lt;br&gt;</p><p><br></p><p>&lt;b&gt;Safety &amp; Compliance&lt;/b&gt;&lt;br&gt;</p><p>– Ensured proper scaffolding, safety nets, and restricted working zones&lt;br&gt;</p><p>– Compliance with NMMC and Fire Department norms for repair works&lt;br&gt;&lt;br&gt;</p><p><br></p><p>&lt;b&gt;Challenges Faced&lt;/b&gt;&lt;br&gt;</p><p>– Restricted access due to active corporate offices operating during daytime&lt;br&gt;</p><p>– Complex vertical duct system with existing 4” soil, 3” waste, and 4” rainwater lines running continuously from terrace to basement&lt;br&gt;</p><p>– Need for phased working and noise control to avoid operational disruption&lt;br&gt;</p><p>– Coordination of multiple vendors under a single PMC umbrella&lt;br&gt;&lt;br&gt;</p><p><br></p><p>&lt;b&gt;Valorem Engineering’s Approach&lt;/b&gt;&lt;br&gt;</p><p>Valorem adopted a data-driven and methodical repair management strategy:&lt;br&gt;&lt;br&gt;</p><p><br></p><p>– Used drone-based façade survey for external condition mapping&lt;br&gt;</p><p>– Carried out duct-by-duct documentation with measurement sheets and photographs&lt;br&gt;</p><p>– Recommended selective replacement instead of full plumbing overhaul, resulting in significant cost optimization&lt;br&gt;</p><p>– Introduced quality checkpoints and material inspection protocols for epoxy coating, clamps, and waterproofing&lt;br&gt;&lt;br&gt;</p><p><br></p><p>&lt;b&gt;Results &amp; Benefits&lt;/b&gt;&lt;br&gt;</p><p>✅ Completed repair planning and execution monitoring for 14 vertical ducts&lt;br&gt;</p><p>✅ Ensured seamless functioning of corporate offices during the work period&lt;br&gt;</p><p>✅ Achieved cost savings of nearly 25% by optimizing replacement scope&lt;br&gt;</p><p>✅ Enhanced plumbing performance, leakage control, and structural durability&lt;br&gt;</p><p>✅ Provided end-to-end technical documentation and progress reports to the Society for future reference&lt;br&gt;&lt;br&gt;</p><p><br></p><p>&lt;b&gt;Project Duration:&lt;/b&gt;&lt;br&gt;</p><p>3 Months (Audit, Tendering, and Execution Monitoring)&lt;br&gt;&lt;br&gt;</p><p><br></p><p>&lt;b&gt;Engineer’s Note – Mr. Sagar Prakash Shinde&lt;/b&gt;&lt;br&gt;</p><p>Founder &amp; Principal Consulting Engineer, Valorem Engineering Pvt. Ltd.&lt;br&gt;&lt;br&gt;</p><p><br></p><p>“At BSEL Tech Park, our goal was to ensure technical precision and financial discipline without disturbing day-to-day operations.&lt;br&gt;</p><p>Through systematic planning, quality control, and on-site supervision, we helped the society extend the life of its infrastructure and regain confidence in its maintenance systems.”&lt;br&gt;&lt;br&gt;</p><p><br></p><p>&lt;b&gt;Key Highlights&lt;/b&gt;&lt;br&gt;</p><p>Scope: Structural Repair + Plumbing Rehabilitation&lt;br&gt;</p><p>No. of Ducts: 14 Nos.&lt;br&gt;&lt;br&gt;</p><p><br></p><p>&lt;b&gt;Total Plumbing Lines Handled:&lt;/b&gt;&lt;br&gt;</p><p>4” Soil Pipe – 210 Rft per duct&lt;br&gt;</p><p>3” Waste Pipe – 350 Rft per duct&lt;br&gt;</p><p>4” Rainwater Pipe – 140 Rft per duct&lt;br&gt;&lt;br&gt;</p><p><br></p><p>Supervision: Daily PMC Inspection + Weekly Client Review&lt;br&gt;</p><p><br></p>', 'modern-highrise-building-with-glass-exterior-rooftop-amenities-stylish-urban-architecture-city1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `subcategories` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cname`, `date`, `subcategories`) VALUES
(5, 'Pharmaceutical', '2025-10-30', ''),
(11, 'Environmental', '2026-01-21', '');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `eimage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `eimage`) VALUES
(6, 'event4.jpeg'),
(7, 'event5.jpeg'),
(8, 'event7.jpeg'),
(9, 'event8.jpeg'),
(10, 'event9.jpeg'),
(11, 'event10.jpeg'),
(12, 'event11.jpeg'),
(13, 'event12.jpeg'),
(16, 'event13.jpeg'),
(17, 'event14.jfif'),
(18, 'event15.jpg'),
(19, 'event16.jpg'),
(20, 'WhatsApp_Image_2026-01-16_at_3.40.19_PM_(1).jpeg'),
(22, 'WhatsApp_Image_2026-01-16_at_3.40.21_PM_(1).jpeg'),
(23, 'WhatsApp_Image_2026-01-16_at_3.40.21_PM.jpeg'),
(24, 'WhatsApp_Image_2026-01-16_at_3.40.19_PM_(1)1.jpeg'),
(25, 'WhatsApp_Image_2026-01-16_at_3.40.20_PM_(1).jpeg'),
(26, 'WhatsApp_Image_2026-01-16_at_3.40.20_PM.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'admin@gmail.com', '0e7517141fb53f21ee439b355b5a1d0a');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ptitle` varchar(255) NOT NULL,
  `pimage` varchar(255) NOT NULL,
  `pdec` longtext NOT NULL,
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ptitle`, `pimage`, `pdec`, `id`, `category`) VALUES
('Microbial Air Sampler Model AMS-G100-1BCF', '27922666bc4f42ddebee7a1013e619e0.jpg', '<p>Galleon Microbial Air Sampler is Indian make Air Sampler, which is fully 21 CFR part 11 Compliance with touch screen display of 4.3 inch.</p><p>Device principle is based on Anderson impaction principle which gives highly accurate data in efficient manner</p><p><strong>Features :</strong></p><p>1) Touchscreen Display</p><p>2) Full 21 CFR web based software</p><p>3) Highly Accurate </p><p>4) User Friendly</p><p>5) Manual And Automatic Operation</p><p>6) Water and Dust Protection IP 65</p><p>7) Online Air Sampling and Control</p><p>8) Wi-Fi for Data Transfer</p><p><br></p><p><strong>Specification:</strong></p><ol><li data-list=\"bullet\" class=\"ql-align-center\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Anodised Aluminium body </li><li data-list=\"bullet\" class=\"ql-align-center\"><span class=\"ql-ui\" contenteditable=\"false\"></span>100 LPM flow rate</li><li data-list=\"bullet\" class=\"ql-align-center\"><span class=\"ql-ui\" contenteditable=\"false\"></span>1,00,000 Sample Records</li><li data-list=\"bullet\" class=\"ql-align-center\"><span class=\"ql-ui\" contenteditable=\"false\"></span>10,00,000 Audit trail Records</li><li data-list=\"bullet\" class=\"ql-align-center\"><span class=\"ql-ui\" contenteditable=\"false\"></span>1000 Customize Groups</li><li data-list=\"bullet\" class=\"ql-align-center\"><span class=\"ql-ui\" contenteditable=\"false\"></span>1000 Users with Individual Password</li><li data-list=\"bullet\" class=\"ql-align-center\"><span class=\"ql-ui\" contenteditable=\"false\"></span>5000 Remarks</li><li data-list=\"bullet\" class=\"ql-align-center\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Wi-Fi Connectivity</li><li data-list=\"bullet\" class=\"ql-align-center\"><span class=\"ql-ui\" contenteditable=\"false\"></span>10 hours battery backup</li><li data-list=\"bullet\" class=\"ql-align-center\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Customize 1000 Sampling Recipe</li><li data-list=\"bullet\" class=\"ql-align-center\"><span class=\"ql-ui\" contenteditable=\"false\"></span>3 types of Templates( Basic, Full, Single Report)</li></ol><p><br></p><p><br></p><p><br></p>', 34, 'Pharmaceutical'),
('Microbial Air Sampler  Model: AMS-G100-1BG', '18e1a0a817e0852f5a3298366c7eea46.jpg', '<p>Galleon Microbial Air Sampler 1BG model is Partially Compliance 21 CFR model with touch screen Display. It has 3 Level Groups availability</p><p><strong>Features</strong>.</p><p>1) Touchscreen Display</p><p>2) 1,00,000 Sample Records</p><p>3) 3 Default Groups (Admin, Manager and Operator)</p><p>4) 1000 Users with Individual Password</p><p>5) Partially 21 CFR Part 11 Compliance</p><p><strong>Specification</strong></p><p>• Anodised Aluminium Body</p><p>• 100 LPM flowrate</p><p>• Wi-Fi Connectivity</p><p>• 10 Hours battery backup</p><p>• 5000 Location</p><p>• 5000 Customize Recipe operation</p><p><br></p><p><br></p><p><br></p>', 35, 'Pharmaceutical'),
('Isolator Air Sampler:  Model: ICO-G100-1BCF', '759277ff6907ed0e7a8f1ed8801efd14.jpg', '<p>Isolator Air Samplers used to take maximum samples of one location at time.</p><p>It is used to measure the contamination in Isolators.</p><p>Wired connection ensures the correct flow of current to run motor with precise flow rate.</p><p><strong>Features:</strong></p><p>1) Touchscreen Display 4.3 inch</p><p>2) Stainless steel Aspirating Head</p><p>3) Robust design</p><p>4) Easy to Operate and Assemble</p><p>5) Simple Connectivity</p><p><strong>Specification:</strong></p><p>1) 100 LPM flowrate</p><p>2) Wire length 3 Meter</p><p>3) Multiple Heads upto 6 Heads</p><p>4) Sequential sampling, continuous sampling</p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p>', 36, 'Pharmaceutical'),
('Compressed Air/Gas Assembly  Model: CGA', '238e2ba3bcabd8c69c83bae16d2a6e4f.jpg', '<p>CGA Assembly used to measure the conatmination in Compressed Air Sampler.</p><p>CGA is easy to assembled with Galleon Microbial Air Sampler.</p><p>Whole Assembly is fully autoclavable</p><p>High Pressure regulator ensure the correct flow through the system</p><p><strong>Features:</strong></p><p>1) Stainless Steel Body </p><p>2) Stainless Steel Funnel</p><p>3) Simple Construction and Easy to Assemble</p><p>4) Flowmeter</p><p><strong>Specification:</strong></p><p>1) 100 LPM flowrate</p><p>2) Autocalvble Funnel</p><p>3) Light Weight</p><p>4) Upto 15 kg inlet pressure</p><p>5) 400 SCFH Flowmeter</p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p>', 37, 'Pharmaceutical'),
('Compressed Air Sampler Model: Test Air', '115fb94a2fb9aff07206bc49b5193263.png', '<p>Test Air Is a Compressed Air Sampler used to measure the conatmination in Compressed Air Sampler.</p><p>It drives controlled flow of 100 LPM by using Precise Flowmeter</p><p>All parts of the system is fully autoclavable</p><p><strong>Features:</strong></p><ol><li data-list=\"ordered\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Anoidized Aluminium </li><li data-list=\"ordered\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Fully Autoclavable</li><li data-list=\"ordered\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Accuracate Flowmeter</li><li data-list=\"ordered\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Easy Maintenance</li><li data-list=\"ordered\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Not reqiired Electricity</li></ol><p><strong>Specification :</strong></p><p>100 LPM Flowrate</p><p>Stainless Steel Base Plate</p><p>Fine control to Set 100 LPM</p><p>400 SCFH flowmeter</p><p>Steel Handles</p>', 38, 'Pharmaceutical'),
('Compressed Air Quality Measurement System: Model: CAQMS', '51abf0f3c377e4e3fa882613c5a72484.png', '<p>Compressed Air Quality measurement System used to measre the availablty of gases present in Compressed Air.</p><p>It helps to set the flow on flowmeter.</p><p><strong>Features :</strong></p><p>1) Easy to Handle.</p><p>2) User friendly.</p><p>3) Spring assembly for leakproof connection of Tubes.</p><p>4) Fine Control to Set Flowmeter</p><p><strong>Specification :</strong></p><p>• For measurement of Different gases in Compressed Air </p><p>• Stainless Steel Body</p><p>• Light Weight</p><p>• Easy to handle</p><p>• Simple Construction</p><p>• Based on color changed principle</p><p><br></p><p><br></p>', 39, 'Pharmaceutical'),
('Gastec Tubes', 'ea565c769b1099d9e336c59b81c0c925.jpg', '<p>Gastec Tubes Analyse a wide variety of gases and vapours accurately, quickly and easily.</p><p>Gastec most widley used short-term gas and vapour analysis system.</p><p><strong>Features : </strong></p><p>1) All types of gases availabilty </p><p>2) Various ranges available</p><p>3) Rugged Construction</p><p>4) High Quality Glass</p><p>5) Accurate Scale Measurement</p><p><br></p>', 40, 'Environmental'),
('Gastec Pump: Model: GV 100S', 'a26a517b95e159a1f8f0cac9b67fb3f1.jpg', '<p>The Model GV 100 Gas Sampling Pump can precisely collect a sample volume for a detector tube.</p><p>The Full-Stroke (100ml) and the Half-Stroke (50ml) positions are marked exactly by the red line on the pump shaft, and hadle is precisely locked at those positions. </p><p><strong>Features :</strong></p><p>1)Light Weight</p><p>2) Easy to handle</p><p>3) Smooth Operation</p><p>4) built in Tip Breaker</p><p><strong>Specification :</strong></p><p>• 50 ml and 100 ml flow rate </p><p>• Flow indication available </p><p><br></p><p><br></p><p><br></p>', 41, 'Environmental');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` varchar(15) NOT NULL,
  `number2` varchar(20) NOT NULL,
  `address` longtext NOT NULL,
  `logo` varchar(255) NOT NULL,
  `darklogo` varchar(255) NOT NULL,
  `favicon` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `name`, `email`, `number`, `number2`, `address`, `logo`, `darklogo`, `favicon`, `facebook`, `instagram`, `linkedin`, `twitter`) VALUES
(1, 'Galleon', 'Galleon@gmail.com', '9004900505', '7666666666', 'B-2,4th Floor .Office no: 93, Gami Industrial Park, Pawne MIDC, Turbhe Navi Mumbai', 'logo.png', 'logo2.png', 'favicon.png', 'https://www.facebook.com/', 'https://www.instagram.com/', 'https://www.linkedin.com/', 'https://www.twitter.com/');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `sname` varchar(255) NOT NULL,
  `sdescription` longtext NOT NULL,
  `simage` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `sname`, `sdescription`, `simage`, `date`) VALUES
(9, ' Custom Made Projects', '<p><span style=\"background-color: rgb(255, 255, 255); color: rgb(61, 61, 61);\">here we design and develop devices and softwares based concept given by client in our area of expertise.We are specialised in Custom made softwares where we help to make changes in client\'s output.</span></p>', 's8.jpg', '2025-06-25'),
(10, 'All Electronics', '<p><span style=\"background-color: rgb(255, 255, 255); color: rgb(61, 61, 61);\">Air sampling is carried out to ensure that workplace or environmental air is meeting regulatory standards and to help Occupational Hygiene and Health &amp; Safety professionals assess employee exposure to airborne hazards.</span></p>', 's7.jpg', '2025-06-25'),
(11, 'High Voltage Power Supply', '<p><span style=\"background-color: rgb(255, 255, 255); color: rgb(61, 61, 61);\">A high voltage power supply is a complex power conversion circuit that converts a lower voltage potential to a higher voltage potential. The term “high voltage” is relative not quantitative, but once voltages are above 62Vdc the possibility for bodily harm are present so appropriate safety measures must be used.</span></p>', 's6.jpg', '2025-06-25'),
(12, 'Consultancy Services', '<p><span style=\"background-color: rgb(255, 255, 255); color: rgb(61, 61, 61);\">A consulting or consultancy firm is a business of one or more experts (consultants) that provides professional feedback to an individual or an organization for a fee. The types of firms vary, such as technology and advertising firms.</span></p>', 's5.jpg', '2025-06-25'),
(13, 'Analytical Method Validation', '<p><span style=\"background-color: rgb(255, 255, 255); color: rgb(61, 61, 61);\">Method validation is the process used to confirm that the analytical procedure employed for a specific test is suitable for its intended use. Results from method validation can be used to judge the quality, reliability and consistency of analytical results; it is an integral part of any good analytical practice.</span></p>', 's4.jpg', '2025-06-25'),
(14, 'GC-HS', '<p><span style=\"background-color: rgb(255, 255, 255); color: rgb(61, 61, 61);\">Headspace GC sampling is a rapidly growing separation technique, in which volatile materials are extracted from a sample, and then injected into a gas chromatograph for analysis. Volatile sample components are diffused into the gas phase, which resides above the sample itself in the vial. Headspace GC is used to analyze volatile and semi-volatile organics in solid, liquid, and gas samples.</span></p>', 's3.jpg', '2025-06-25'),
(15, 'Indoor Air Quality Monitoring', '<p><span style=\"color: rgb(61, 61, 61); background-color: rgb(255, 255, 255);\">Indoor air quality (IAQ) broadly refers to the environmental characteristics inside buildings that may affect human health, comfort, or work performance. We monitor IAQ because we spend approximately 90% of our time breathing “indoor air”. Unlike outdoor air, indoor air is recycled continuously causing it to trap and build up pollutants. IAQ characteristics include the concentrations of pollutants in indoor air, as well as air temperature and humidity.</span></p>', 's21.jpg', '2025-10-14'),
(16, 'Air Sampling & Sample Analysis', '<p><span style=\"color: rgb(61, 61, 61); background-color: rgb(255, 255, 255);\">Air sampling is carried out to ensure that workplace or environmental air is meeting regulatory standards and to help Occupational Hygiene and Health &amp; Safety professionals assess employee exposure to airborne hazards.</span></p>', 'air-velocity-meter.jpg', '2025-10-15');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `id` int(11) NOT NULL,
  `cat_id` varchar(25) NOT NULL,
  `sub_cat` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`id`, `cat_id`, `sub_cat`, `date`) VALUES
(1, '5', 'sub_category 1', '2025-11-28 14:52:36'),
(2, '7', 'my category', '2025-11-28 15:05:59'),
(3, '5', 'Colony Counter', '2025-11-28 17:36:26'),
(4, '9', 'abc', '2025-12-03 14:54:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `career`
--
ALTER TABLE `career`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `casestudy`
--
ALTER TABLE `casestudy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `career`
--
ALTER TABLE `career`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `casestudy`
--
ALTER TABLE `casestudy`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

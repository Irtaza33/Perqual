-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2023 at 11:57 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qpml`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `extra1` varchar(100) NOT NULL,
  `extra2` varchar(100) NOT NULL,
  `extra3` varchar(100) NOT NULL,
  `extra4` varchar(100) NOT NULL,
  `extra5` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `user_name`, `password`, `status`, `extra1`, `extra2`, `extra3`, `extra4`, `extra5`) VALUES
(1, 'admin', 'admin', 1, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `b_id` int(11) NOT NULL,
  `b_title` varchar(200) NOT NULL,
  `b_author` varchar(200) NOT NULL,
  `b_text` text NOT NULL,
  `b_date` varchar(100) NOT NULL,
  `b_files` varchar(300) NOT NULL,
  `extra3` varchar(100) NOT NULL,
  `extra4` varchar(100) NOT NULL,
  `extra5` varchar(100) NOT NULL,
  `extra6` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`b_id`, `b_title`, `b_author`, `b_text`, `b_date`, `b_files`, `extra3`, `extra4`, `extra5`, `extra6`) VALUES
(2, 'irtaza', 'javed', 'javed', '2023-08-17', '111.webp', '', '', '', ''),
(3, 'bilal', 'Bilal', 'tahir', '2023-10-18', 'bilal.jpeg', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `cycle_phase`
--

CREATE TABLE `cycle_phase` (
  `phase_id` int(11) NOT NULL,
  `phase_title` varchar(100) NOT NULL,
  `phase_details` text NOT NULL,
  `extra1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cycle_phase`
--

INSERT INTO `cycle_phase` (`phase_id`, `phase_title`, `phase_details`, `extra1`) VALUES
(1, 'Plan', 'Plan', 0),
(2, 'Do', 'Do', 0),
(3, 'Study', 'Study', 0),
(4, 'Act', 'Act', 0);

-- --------------------------------------------------------

--
-- Table structure for table `deming_cycle`
--

CREATE TABLE `deming_cycle` (
  `d_id` int(11) NOT NULL,
  `deming_cycle` varchar(200) NOT NULL,
  `details` text NOT NULL,
  `extra1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deming_cycle`
--

INSERT INTO `deming_cycle` (`d_id`, `deming_cycle`, `details`, `extra1`) VALUES
(2, 'Quality Planning', 'Quality Planning', 0),
(3, 'Quality Control & Assurance', 'Quality Control & Assurance', 0),
(4, 'Quality Improvement', 'Quality Improvement', 0);

-- --------------------------------------------------------

--
-- Table structure for table `library_title`
--

CREATE TABLE `library_title` (
  `t_id` int(11) NOT NULL,
  `t_name` varchar(200) NOT NULL,
  `t_des` varchar(500) NOT NULL,
  `extra1` varchar(500) NOT NULL,
  `extra2` varchar(500) NOT NULL,
  `extra3` varchar(500) NOT NULL,
  `extra4` varchar(500) NOT NULL,
  `extra5` varchar(500) NOT NULL,
  `extra6` varchar(500) NOT NULL,
  `extra7` varchar(500) NOT NULL,
  `extra8` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `library_title`
--

INSERT INTO `library_title` (`t_id`, `t_name`, `t_des`, `extra1`, `extra2`, `extra3`, `extra4`, `extra5`, `extra6`, `extra7`, `extra8`) VALUES
(2, 'Quality Performance', '', '', '', '', '', '', '', '', ''),
(3, 'Quality Assurance', '', '', '', '', '', '', '', '', ''),
(4, 'Quality Maturity', '', '', '', '', '', '', '', '', ''),
(5, 'Quality Management', '', '', '', '', '', '', '', '', ''),
(6, 'Six Sigma', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_answer`
--

CREATE TABLE `quiz_answer` (
  `a_id` int(11) NOT NULL,
  `a_answer` varchar(100) NOT NULL,
  `score` int(11) NOT NULL,
  `extra1` varchar(100) NOT NULL,
  `extra2` varchar(100) NOT NULL,
  `extra3` varchar(100) NOT NULL,
  `extra4` varchar(100) NOT NULL,
  `extra5` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quiz_answer`
--

INSERT INTO `quiz_answer` (`a_id`, `a_answer`, `score`, `extra1`, `extra2`, `extra3`, `extra4`, `extra5`) VALUES
(77, '0', 0, '', '', '', '', ''),
(78, '10', 10, '', '', '', '', ''),
(79, '20', 20, '', '', '', '', ''),
(80, '30', 30, '', '', '', '', ''),
(81, '40', 40, '', '', '', '', ''),
(82, '50', 50, '', '', '', '', ''),
(83, '60', 60, '', '', '', '', ''),
(84, '70', 70, '', '', '', '', ''),
(85, '80', 80, '', '', '', '', ''),
(86, '90', 90, '', '', '', '', ''),
(87, '100', 100, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_question`
--

CREATE TABLE `quiz_question` (
  `q_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `sub_section_id` int(11) NOT NULL,
  `cycle_phase` int(11) NOT NULL,
  `p_phase` int(11) NOT NULL,
  `auditee` varchar(200) NOT NULL,
  `weightage` float NOT NULL,
  `q_question` text NOT NULL,
  `status` int(11) NOT NULL,
  `extra1` varchar(100) NOT NULL,
  `extra2` varchar(100) NOT NULL,
  `extra3` varchar(100) NOT NULL,
  `extra4` varchar(100) NOT NULL,
  `extra5` varchar(100) NOT NULL,
  `extra6` varchar(100) NOT NULL,
  `extra7` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quiz_question`
--

INSERT INTO `quiz_question` (`q_id`, `section_id`, `sub_section_id`, `cycle_phase`, `p_phase`, `auditee`, `weightage`, `q_question`, `status`, `extra1`, `extra2`, `extra3`, `extra4`, `extra5`, `extra6`, `extra7`) VALUES
(1, 1, 13, 1, 2, 'CEO/MD/Operations', 5, 'Existence of a Quality Council/Board of Directors/Steering Committee? Is the Approach right? Deployed regularly? Learning? Aligned with Quality Goals/Objectives?', 0, '', '', '', '', '', '', ''),
(2, 1, 13, 1, 2, 'CEO/MD/Operations', 5, 'Existence of a Quality Policy? Is the Approach right? Deployed (Review)? Learning? Aligned with Quality Goals/Objectives?', 0, '', '', '', '', '', '', ''),
(3, 1, 13, 1, 2, 'CEO/MD/Operations', 3, 'Existence of Vision/Mission Statements? Is the Approach right? Deployed (Review)? Learning? Aligned with Quality Goals/Objectives?', 0, '', '', '', '', '', '', ''),
(4, 1, 13, 1, 2, 'CEO/MD/Operations', 3, 'Display of Quality Statements and Slogans at all workplaces?', 0, '', '', '', '', '', '', ''),
(5, 1, 13, 1, 2, 'CEO/MD/Operations', 5, 'Accreditation of ISO 9000:2015/9001:2015 (SoPs of Quality Planning, Production, Quality, Inspection, Equipment Maintenance etc.).', 0, '', '', '', '', '', '', ''),
(6, 1, 13, 1, 2, 'CEO/MD/Operations', 5, 'Accreditation of IATF 16949?', 0, '', '', '', '', '', '', ''),
(7, 1, 10, 1, 2, 'CEO/MD/Operations', 3, 'Existence of Quality Manual for the documentation of QMS?', 0, '', '', '', '', '', '', ''),
(8, 1, 10, 1, 2, 'CEO/MD/Operations', 2, 'Establishment of Company\'s Overall Annual Targets/Objects (Short-term), as well as long -term?', 0, '', '', '', '', '', '', ''),
(9, 1, 10, 1, 2, 'CEO/MD/Operations', 2, 'Establishment of Quality Objects (Short-term/Mid-term)? As well as long-term? ', 0, '', '', '', '', '', '', ''),
(10, 1, 10, 1, 2, 'CEO/MD/Operations', 2, 'Establishment of Annual Objectives/Targets of each department (Quality, Production, Maintenance, R&D, Packaging etc.)?', 0, '', '', '', '', '', '', ''),
(11, 1, 10, 1, 2, 'CEO/MD/Operations', 2, 'Establishment of Corporate Responsibility Policies (Governance System): Employee Code of Conduct, Ethics, Social, Safety, Legal, Regulatory?', 0, '', '', '', '', '', '', ''),
(12, 1, 10, 1, 2, 'CEO/MD/Operations', 3, 'Existence of Management Review Input/Output Meetings? Weekly (within Department), Monthly, and Annual', 0, '', '', '', '', '', '', ''),
(13, 1, 5, 1, 2, 'Operations', 2, 'Existance of a dedicated HR Departments?', 0, '', '', '', '', '', '', ''),
(14, 1, 5, 1, 2, 'Operations', 2, 'Existence of a dedicated Centralized Training and Development Department?', 0, '', '', '', '', '', '', ''),
(15, 1, 10, 1, 2, 'Operations', 2, 'Existence of a dedicated R&D Department?', 0, '', '', '', '', '', '', ''),
(16, 1, 10, 1, 2, 'Operations', 4, 'Existence of Quality Control/Quality Assurance/Quality Management/Quality Engineering/Operational Excellence Department?', 0, '', '', '', '', '', '', ''),
(17, 1, 10, 1, 2, 'Operations', 3, 'Existence of a separate department for Standardization?', 0, '', '', '', '', '', '', ''),
(18, 1, 5, 1, 2, 'HR', 5, 'Existence of Annual Training & Development Plans? At all levels.', 0, '', '', '', '', '', '', ''),
(19, 1, 5, 1, 2, 'HR', 4, 'Existence of Employee Performance Evaluation? And Skills Matrix Chart?', 0, '', '', '', '', '', '', ''),
(20, 1, 2, 1, 2, 'HR', 3, 'Are HoDs qualified as per the nature of the workplace? (Ex: Engineers, Graduated from Business Schools)?', 0, '', '', '', '', '', '', ''),
(21, 1, 12, 1, 2, 'Qualtity/Production', 3, 'Are exist for the nomination of Principal QA Incharge (GM level), and Deputy QA Incharge (Manager level)? ', 0, '', '', '', '', '', '', ''),
(22, 1, 12, 1, 2, 'Qualtity/Production', 2, 'Existence of Organizational Chart mentioning the hierarchy for quality assurance?', 0, '', '', '', '', '', '', ''),
(23, 1, 10, 1, 2, 'Operations', 3, 'Existence of Job Descriptions as per hierarchy?', 0, '', '', '', '', '', '', ''),
(24, 1, 10, 1, 2, 'Quality/Production', 5, 'Existence of Supplier Development Programme by OEM?', 0, '', '', '', '', '', '', ''),
(25, 1, 8, 1, 2, 'CEO/MD/Operations', 3, 'Availability of Performance Monitoring Dashboards? COE/MD/GM/HoDs level?', 0, '', '', '', '', '', '', ''),
(26, 1, 1, 1, 2, 'Operations', 5, 'Leadership commitment to Production Process Improvement through CQI Methods/Principles & Best Practices and Tools/Techniques:\na. Team Management: Quality Control Circle (QCC)\nb. Cost of Quality (CoQ)/Cost of Poor Quality (CoPQ)\nc. 5S/House Keeping\nd. Kaizen/Reward & Recognition System\ne. Error Proofing (Pokayoke)\nf. Visual Control Management/Standardized Operators Instructions/Visual Instructions\ng. Lean Manufacturing Principles/Toyota Production System (TPS)\nh. Failure Mode and Effect Analysis (FMEA)\ni. Control Plan\nj. Seven Quality Control (QC) Tools\nk. Statistical Process Control (SPC)\nl. Six Sigma Methodologies\nm. Measurement System Analysis (MSA): Data Gathering and Statistical Analysis, GR&R\nn. Capability Analysis: Cp, Pp, Cpk, Ppk\no. Use of Statistical Software for quality data analysis\np. Total Productive Maintenance (TPM)', 0, '', '', '', '', '', '', ''),
(27, 1, 11, 1, 2, 'CEO/MD/Operations', 5, 'Driving Transformation to Digitization: Quality 4.0 (Technological Advancement/Innovation)', 0, '', '', '', '', '', '', ''),
(28, 1, 3, 1, 2, 'CEO/MD/Operations', 4, 'Leadership Commitment to Customer Satisfaction? Customer Complaints Management System, Corrective and Preventive Actions', 0, '', '', '', '', '', '', ''),
(29, 1, 13, 1, 2, 'CEO/MD/Operations', 5, 'Leadership commitment to Internal Audit Programme? i.e QMS Audit, Manufacturing Process Audit, Product Audit', 0, '', '', '', '', '', '', ''),
(30, 1, 13, 1, 2, 'CEO/MD/Operations', 2, 'Resources allocated for Quality Objectives?', 0, '', '', '', '', '', '', ''),
(31, 1, 8, 1, 2, 'Quality/Production', 5, 'Existence of Monthly and Annual Evaluation Systems of a Supplier by OEM? Does consider points of learning?', 0, '', '', '', '', '', '', ''),
(32, 1, 8, 1, 2, 'Quality/Production', 5, 'Local-Supplier\'s  Quality Performance Measurement/Evaluation (Key Results) required at OEM ie. Quality (Defect PPM Level, Quality Defect Report, Quality System Audit), Delivery (In-time Supplies).', 0, '', '', '', '', '', '', ''),
(33, 1, 8, 1, 2, 'Quality', 0, 'Global-Performance Measurement/Evaluation (Results) of Suppliers?- See in Result Criterion', 0, '', '', '', '', '', '', ''),
(34, 1, 8, 1, 2, 'Quality', 2, 'Supplier\'s Quality Evaluation Criteria (Rating by OEM)/Supplier Scorecard. Company Own System to Monitor?', 0, '', '', '', '', '', '', ''),
(35, 1, 8, 1, 2, 'CEO/MD/Operations', 2, 'Published Annual Reports?', 0, '', '', '', '', '', '', ''),
(36, 1, 10, 1, 2, 'CEO/MD/Operations', 2, 'Published Monthly/Quarterly News Letters?', 0, '', '', '', '', '', '', ''),
(37, 1, 10, 1, 2, 'CEO/MD/Operations', 2, 'Existence of Company Website?', 0, '', '', '', '', '', '', ''),
(38, 1, 10, 1, 2, 'CEO/MD/Operations', 5, 'Existence of Setting-up of Obeya Room (War Room)?', 0, '', '', '', '', '', '', ''),
(39, 2, 13, 1, 2, 'CEO/MD/Operations', 4, 'Action Plans for Strategic Deployment: Quality Council/Board of Directors/Steering Committee? (If already exist then assign Full Rubric Marks)', 0, '', '', '', '', '', '', ''),
(40, 2, 13, 1, 2, 'CEO/MD/Operations', 2, 'Action Plans for Strategic Deployment: Development of Quality Policy?  Communicated? (If already exist then assign Full Rubric Marks if communicated)', 0, '', '', '', '', '', '', ''),
(41, 2, 13, 1, 2, 'CEO/MD/Operations', 2, 'Action Plans for Strategic Deployment: Is Quality Policy understandable at all levels of employees from top to down?', 0, '', '', '', '', '', '', ''),
(42, 2, 13, 1, 2, 'CEO/MD/Operations', 2, 'Action Plans for Strategic Deployment: When Quality Policy was Developed? Year (Is measurable?)', 0, '', '', '', '', '', '', ''),
(43, 2, 13, 1, 2, 'CEO/MD/Operations', 2, 'Action Plans for Strategic Deployment: Development of Vision/Mission Statements? Communicated?  (Is Measurable) (If already exist then assign Full Rubric Marks if communicated)', 0, '', '', '', '', '', '', ''),
(44, 2, 13, 1, 2, 'CEO/MD/Operations', 2, 'Action Plans for Strategic Deployment: Are Vision/Mission understandable at all levels of employees from top to down?', 0, '', '', '', '', '', '', ''),
(45, 2, 13, 1, 2, 'CEO/MD/Operations', 2, 'When Vision/Mision Statements were developed? Year', 0, '', '', '', '', '', '', ''),
(46, 2, 13, 1, 2, 'CEO/MD/Operations', 3, 'Employees awareness regarding the importance of Quality? Impact of Quality on Productivity, Cost, Customer Satisfaction and Business Growth.', 0, '', '', '', '', '', '', ''),
(47, 2, 13, 1, 2, 'CEO/MD/Operations', 4, 'Action Plans for Strategic Deployment: Accreditation of ISO 9000:2015/9001:2015 (SoPs of Quality Planning, Production, Quality, Inspection, Equipment Maintenance etc.). (If already exist then assign Full Rubric Marks)', 0, '', '', '', '', '', '', ''),
(48, 2, 13, 1, 2, 'CEO/MD/Operations', 4, 'Action Plans for Strategic Deployment: Accreditation of IATF 16949? (If already exist then assign Full Rubric Marks)', 0, '', '', '', '', '', '', ''),
(49, 2, 10, 1, 2, 'CEO/MD/Operations', 3, 'Action Plans for Strategic Deployment: Existence of a Quality Manual for the documentation of QMS? (If already exist then assign Full Rubric Marks)', 0, '', '', '', '', '', '', ''),
(50, 2, 10, 1, 2, 'CEO/MD/Operations', 3, 'Action Plans for Strategic Deployment: Establishment of Company\'s Overall Annual Targets/Objects (Short-term), as well as long -term? Communicated? (If already exist then assign Full Rubric Marks if communicated)', 0, '', '', '', '', '', '', ''),
(51, 2, 10, 1, 2, 'CEO/MD/Operations', 2, 'Action Plans for Strategic Deployment: Establishment of Quality Objects (Short-term)? As well as long-term? Communicated? (If already exist then assign Full Rubric Marks if communicated)', 0, '', '', '', '', '', '', ''),
(52, 2, 10, 1, 2, 'CEO/MD/Operations', 2, 'Action Plans for Strategic Deployment: Annual Objectives/Targets of each department (Quality, Production, Maintenance, R&D, Packaging etc.)? Communicated? (If already exist then assign Full Rubric Marks if communicated)', 0, '', '', '', '', '', '', ''),
(53, 2, 10, 1, 2, 'CEO/MD/Operations', 2, 'Action Plans for Strategic Deployment: Corporate Responsibility Policies (Governance System)-Employee Code of Conduct, Ethics, Social, Safety, Legal, Regulatory? Communicated? (If already exist then assign Full Rubric Marks if communicated)', 0, '', '', '', '', '', '', ''),
(54, 2, 10, 1, 2, 'CEO/MD/Operations', 3, 'Action Plans for Strategic Deployment: Establishment of Management Review Input/Output Meetings? Weekly (within Department), Monthly, and Annual. (If already exist then assign Full Rubric Marks)', 0, '', '', '', '', '', '', ''),
(55, 2, 5, 1, 2, 'Operations', 2, 'Action Plans for Strategic Deployment: Development of a dedicated HR Department? (If already exist then assign Full Rubric Marks)', 0, '', '', '', '', '', '', ''),
(56, 2, 5, 1, 2, 'Operations', 2, 'Action Plans for Strategic Deployment: Development of a dedicated Centralized Training and Development Department? (If already exist then assign Full Rubric Marks)', 0, '', '', '', '', '', '', ''),
(57, 2, 10, 1, 2, 'Operations', 2, 'Action Plans for Strategic Deployment: Development of a dedicated R&D Department? (If already exist then assign Full Rubric Marks)', 0, '', '', '', '', '', '', ''),
(58, 2, 10, 1, 2, 'Operations', 4, 'Action Plans for Strategic Deployment: Development of Quality Assurance/Quality Control/Quality Management/Quality Engineering/Operational Excellence Department? (If already exist then assign Full Rubric Marks)', 0, '', '', '', '', '', '', ''),
(59, 2, 10, 1, 2, 'Operations', 3, 'Action Plans for Strategic Deployment: Development of a separate department for Standardization? (If already exist then assign Full Rubric Marks)', 0, '', '', '', '', '', '', ''),
(60, 2, 5, 1, 2, 'HR', 3, 'Action Plans for Strategic Deployment: Development of Annual Training & Development Plans? At all levels. (If already exist then assign Full Rubric Marks)', 0, '', '', '', '', '', '', ''),
(61, 2, 5, 1, 2, 'HR', 2, 'Action Plans for Strategic Deployment: Employee Performance Evaluation? And Skills Matrix Chart? (If already exist then assign Full Rubric Marks)', 0, '', '', '', '', '', '', ''),
(62, 2, 2, 1, 2, 'HR', 2, 'Action Plans for Strategic Deployment: HoDs qualification as per the nature of the workplace? (Ex: Engineers, Graduated from Business Schools)? (If already exist then assign Full Rubric Marks)', 0, '', '', '', '', '', '', ''),
(63, 2, 12, 1, 2, 'Qualtity/Production', 3, 'Action Plans for Strategic Deployment: Nomination of Principal QA Incharge (GM level), and Deputy QA Incharge (Manager level)? (If already exist then assign Full Rubric Marks)', 0, '', '', '', '', '', '', ''),
(64, 2, 12, 1, 2, 'Qualtity/Production', 2, 'Action Plans for Strategic Deployment: Organizational Chart mentioning the hierarchy for Quality Assurance? (If already exist then assign Full Rubric Marks)', 0, '', '', '', '', '', '', ''),
(65, 2, 10, 1, 2, 'Operations', 2, 'Action Plans for Strategic Deployment: Development of Job Descriptions as per hierarchy? (If already exist then assign Full Rubric Marks)', 0, '', '', '', '', '', '', ''),
(66, 2, 10, 1, 2, 'Quality/Production', 2, 'Action Plans for Strategic Deployment: Supplier Development Programme by OEM? (If already exist then assign Full Rubric Marks)', 0, '', '', '', '', '', '', ''),
(67, 2, 8, 1, 2, 'CEO/MD/Operations', 2, 'Availability of Performance Monitoring Dashboards? COE/MD/GM/HoDs level?', 0, '', '', '', '', '', '', ''),
(68, 2, 1, 1, 2, 'Operations', 5, 'Action Plans for Strategic Deployment: Production Process Improvement through CQI Methods/Principles & Best Practices and Tools/Techniques:\na. Team Management: Quality Control Circle (QCC) (1st Step for CQI)\nb. Cost of Quality (CoQ)/Cost of Poor Quality (CoPQ)\nc. 5S/House Keeping \nd. Kaizen/Reward & Recognition System\ne. Error Proofing (Pokayoke)\nf. Visual Control Management/Standardized Operators Instructions/Visual Instructions\ng. Lean Manufacturing Principles/Toyota Production System (TPS\nh. Failure Mode and Effect Analysis (FMEA)\ni. Control Plan\nj. Seven Quality Control (QC) Tools\nk. Statistical Process Control (SPC) (Prerequisite of 7QC Tools)\nl. Six Sigma Methodologies (Prerequisite of SPC)\nm. Measurement System Analysis (MSA): Data Gathering and Statistical Analysis, GR&R\nn. Capability Analysis: Cp, Pp, Cpk, Ppk\no. Use of Statistical Software for quality data analysis\np. Total Productive Maintenance (TPM)', 0, '', '', '', '', '', '', ''),
(69, 2, 11, 1, 2, 'CEO/MD/Operations', 4, 'Driving Transformation to Digitization: Quality 4.0 (Technological Advancement/Innovation)', 0, '', '', '', '', '', '', ''),
(70, 2, 3, 1, 2, 'CEO/MD/Operations', 4, 'Action Plans for Strategic Deployment: Commitment to Customer Satisfaction?  Customer Complaints Management System, Corrective and Preventive Actions. (If already exist then assign Full Rubric Marks)', 0, '', '', '', '', '', '', ''),
(71, 2, 13, 1, 2, 'CEO/MD/Operations', 4, 'Action Plans for Strategic Deployment: Commitment to Internal Audit Programme? i.e QMS Audit, Manufacturing Process Audit, Product Audit. (If already exist then assign Full Rubric Marks)', 0, '', '', '', '', '', '', ''),
(72, 2, 13, 1, 2, 'CEO/MD/Operations', 2, 'Action Plans for Strategic Deployment: Resources allocation for Quality Objectives? (If already exist then assign Full Rubric Marks)', 0, '', '', '', '', '', '', ''),
(73, 2, 8, 1, 2, 'Quality/Production', 4, 'Action Plans for Strategic Deployment: Working Plan for Monthly and Annual Evaluation Systems of a Supplier by OEM? For learning.', 0, '', '', '', '', '', '', ''),
(74, 2, 8, 1, 2, 'Quality/Production', 4, 'Action Plans for Strategic Deployment: Local-Supplier\'s  Quality Performance Measurement/Evaluation (Key Results) required at OEM ie. Quality (Defect PPM Level, Quality Defect Report, Quality System Audit), Delivery (In-time Supplies).', 0, '', '', '', '', '', '', ''),
(75, 2, 8, 1, 2, 'Quality', 0, 'Action Plans for Strategic Deployment: Global-Performance Measurement/Evaluation (Results) of Suppliers?- (See in Result Criterion)', 0, '', '', '', '', '', '', ''),
(76, 2, 8, 1, 2, 'Quality', 2, 'Action Plans for Strategic Deployment: Supplier\'s Quality Evaluation Criteria (Rating by OEM)/Supplier Scorecard? (If already exist then assign Full Rubric Marks)', 0, '', '', '', '', '', '', ''),
(77, 2, 10, 1, 2, 'CEO/MD/Operations', 2, 'Action Plans for Strategic Deployment: Annual Report Publication? (If already exist then assign Full Rubric Marks)', 0, '', '', '', '', '', '', ''),
(78, 2, 10, 1, 2, 'CEO/MD/Operations', 2, 'Action Plans for Strategic Deployment: Publication of Monthly News Letters? (If already exist then assign Full Rubric Marks)', 0, '', '', '', '', '', '', ''),
(79, 2, 10, 1, 2, 'CEO/MD/Operations', 3, 'Action Plans for Strategic Deployment: Development of Company Website? (If already exist then assign Full Rubric Marks)', 0, '', '', '', '', '', '', ''),
(80, 2, 10, 1, 2, 'CEO/MD/Operations', 3, 'Action Plans for Strategic Deployment of UN SDGs?', 0, '', '', '', '', '', '', ''),
(81, 2, 10, 1, 2, 'CEO/MD/Operations', 2, 'Action Plans for Strategic Deployment: Collaboration with Foreign Industries (Bench Marking).', 0, '', '', '', '', '', '', ''),
(82, 2, 10, 1, 2, 'CEO/MD/Operations', 2, 'Action Plans for Strategic Deployment: Collaboration with Government and Local Industries (Policies).', 0, '', '', '', '', '', '', ''),
(83, 2, 10, 1, 2, 'CEO/MD/Operations', 2, 'Action Plans for Strategic Deployment: Collaboration with Academia (R&D).', 0, '', '', '', '', '', '', ''),
(84, 2, 10, 1, 2, 'CEO/MD/Operations', 0, 'Existence of a Standard KPIs for all departments? to review in Management Review Meetings on Monthly/Annual Meetings? (see in Result Criterion)', 0, '', '', '', '', '', '', ''),
(85, 2, 10, 1, 2, 'CEO/MD/Operations', 1, 'Retention Periods of all records defined? as per the recommendation of OEM/Standards.', 0, '', '', '', '', '', '', ''),
(86, 2, 10, 1, 2, 'CEO/MD/Operations', 6, 'Action Plans for Strategic Deployment: Setting-up of Obeya Room (War Room)?', 0, '', '', '', '', '', '', ''),
(87, 3, 2, 1, 2, 'Quality/Production', 6, 'How does an organization develop a Quality Culture within the organisation? Quality & Safty Slogans Posters at the Workplace?', 0, '', '', '', '', '', '', ''),
(88, 3, 13, 1, 2, 'CEO/MD/Operations', 6, 'Quality Culture development through in-house/outside training Sessions (Periodically) regarding employee\'s awareness of the \"Importance of Quality, meanings of Quality\"? Impact of Quality on Productivity, Cost, Customer Satisfaction and Business Growth. Motivation and Learnings through Success/Failure Stories, relevant Company Visits and Networking.', 0, '', '', '', '', '', '', ''),
(89, 3, 13, 1, 2, 'CEO/MD/Operations', 5, 'Is a Culture of \"Safety First\" of Employees and the Workplace exist, and promoted?', 0, '', '', '', '', '', '', ''),
(90, 3, 2, 1, 2, 'Quality/Production', 4, 'Do employees take the ownership of organization?', 0, '', '', '', '', '', '', ''),
(91, 3, 2, 1, 2, 'CEO/MD/Operations', 5, 'Is the workplace environment (Social: e.g. non-discriminatory, calm, non-confrontational, Psychological: e.g. stress-reducing, emotionally protective, Physical: e.g. temperature, heat, humidity, light, airflow, hygiene, noise), suitable for employees for developing organisational culture and Ownership?', 0, '', '', '', '', '', '', ''),
(92, 3, 2, 1, 2, 'CEO/MD/Operations', 2, 'Does the Manager/HoD have faith in the employee (Supervisors and Machine Operators?', 0, '', '', '', '', '', '', ''),
(93, 3, 2, 1, 2, 'CEO/MD/Operations', 2, 'Does the Employee (Supervisor and Machine Operators) have faith in the Manager/HoD', 0, '', '', '', '', '', '', ''),
(94, 3, 2, 1, 2, 'CEO/MD/Operations', 5, 'The manager (Mentor) provides Coaching to employees to develop them in meeting Quality Objectives? Any documented Plan', 0, '', '', '', '', '', '', ''),
(95, 3, 2, 1, 2, 'HR', 8, 'Managers make sure that every employee has an individual growth plan with his/her SMART objectives? Any documented Plan', 0, '', '', '', '', '', '', ''),
(96, 3, 2, 1, 2, 'Quality/Production', 4, 'Managers and team members accept and actively seek out opportunities for improvements aligned with Quality Objectives.', 0, '', '', '', '', '', '', ''),
(97, 3, 2, 1, 2, 'Quality/Production', 4, 'Managers routinely visit workplaces to watch for positive behaviours of team members?', 0, '', '', '', '', '', '', ''),
(98, 3, 2, 1, 2, 'Quality/Production', 4, 'Manager acknowledges when team members meet quality objectives.', 0, '', '', '', '', '', '', ''),
(99, 3, 2, 1, 2, 'Quality/Production', 4, 'Managers consult team members to enhance processes and find solutions to issues.', 0, '', '', '', '', '', '', ''),
(100, 3, 2, 1, 2, 'Quality/Production', 4, 'When making decisions on Quality/Process Imrovement, team members are involved & encouraged to and supported.', 0, '', '', '', '', '', '', ''),
(101, 3, 2, 1, 2, 'HR', 5, 'Gemba walks are used by managers to discover more effective method for process improvement.', 0, '', '', '', '', '', '', ''),
(102, 3, 2, 1, 2, 'HR', 8, 'Does the organization have a Reward and Recognition System by deploying \"Kaizen\" Culture? (Monthly)', 0, '', '', '', '', '', '', ''),
(103, 3, 2, 1, 2, 'CEO/MD/Operations', 3, 'The organization encourages employees to engage in a suggestion system (Reward and Suggestion System/Kaizen). ', 0, '', '', '', '', '', '', ''),
(104, 3, 2, 1, 2, 'Quality/Production', 3, 'Everyone is confident in their ability to stop any risky behaviour of Operations.', 0, '', '', '', '', '', '', ''),
(105, 3, 2, 1, 2, 'Quality/Production', 4, 'Everyone owns up to mistakes/failures as soon as they are recognised and acts to remedy and prevent them.', 0, '', '', '', '', '', '', ''),
(106, 3, 2, 1, 2, 'HR', 2, 'Culture for expertise in Innovation and Creativity? Any Plan for CQI', 0, '', '', '', '', '', '', ''),
(107, 3, 2, 1, 2, 'Quality/Production', 3, 'Culture of knowledge transfer and multitasking (an employee can perform other tasks) ', 0, '', '', '', '', '', '', ''),
(108, 3, 2, 1, 2, 'Quality/Production', 3, 'Learning Culture from mistakes is documented and shared.', 0, '', '', '', '', '', '', ''),
(109, 3, 2, 1, 2, 'Quality/Production', 3, 'Culture of Team Work? Team Management/Total Employee Involvement', 0, '', '', '', '', '', '', ''),
(110, 3, 2, 1, 2, 'Quality/Production', 3, 'Is there an organisational culture where employees are considered as Internal Customers?', 0, '', '', '', '', '', '', ''),
(111, 3, 2, 1, 2, 'HR', 5, 'Culture of Annual Celebration Day?', 0, '', '', '', '', '', '', ''),
(112, 3, 2, 1, 2, 'HR', 5, 'Culture of Celebrating a Quality Day? (\"Every day is the quality day\" by Industry expert)', 0, '', '', '', '', '', '', ''),
(113, 3, 2, 1, 2, 'HR', 0, 'Existence of a Standard KPI for Culture Development? to review in Management Review Meetings on Monthly/Annual Meetings? (See in Result Criterion)', 0, '', '', '', '', '', '', ''),
(114, 4, 5, 1, 2, 'HR', 4, 'Hiring of Competent Employees as per need? Plan (Right Person at Right Job)', 0, '', '', '', '', '', '', ''),
(115, 4, 5, 1, 2, 'HR', 4, 'Competency of Job requirements? Engineers as HoD/Manager of Production, Quality, and Maintenance Departments (Right Person at Right Job)', 0, '', '', '', '', '', '', ''),
(116, 4, 5, 1, 2, 'HR', 4, 'Competency of Job requirements? Diploma Holders as Supervisors of Production, Quality, and Maintenance Departments (Right Person at Right Job)', 0, '', '', '', '', '', '', ''),
(117, 4, 5, 1, 2, 'HR', 4, 'Competency of Job requirements? Machine Operators and Quality Personnel (Certified with Technical Training Centres) (Right Person at Right Job)', 0, '', '', '', '', '', '', ''),
(118, 4, 5, 1, 2, 'HR', 5, 'A Consolidated Training Need Assessment Plan for all employees including Engineers/Mangers etc.?  Based on the Input from different departments catering current needs.', 0, '', '', '', '', '', '', ''),
(119, 4, 5, 1, 2, 'HR', 4, 'A Consolidated Training Need Assessment Plan for Leadership.? catering future needs/Digitization/Industry 4.0 (Quality 4.0)', 0, '', '', '', '', '', '', ''),
(120, 4, 5, 1, 2, 'HR', 4, 'Are there Orientation Programmes for new hires and those transferred from another workplace?', 0, '', '', '', '', '', '', ''),
(121, 4, 5, 1, 2, 'HR', 3, 'Machine Operators Specific Training (Improve Skills) and Education (Improve Conceptual level Understanding and Thinking) Plan?', 0, '', '', '', '', '', '', ''),
(122, 4, 5, 1, 2, 'HR', 3, 'Production Supervisors Specific Training (Improve Skills) and Education (Improve Conceptual level Understanding and Thinking) Plan?', 0, '', '', '', '', '', '', ''),
(123, 4, 5, 1, 2, 'HR', 4, 'Quality Inspectors Specific Training (Improve Skills) and Education (Improve Conceptual level Understanding and Thinking) Plan?', 0, '', '', '', '', '', '', ''),
(124, 4, 5, 1, 2, 'HR', 3, 'Data Gathering\'s Specific Training (Improve Skills) and Education (Improve Conceptual level Understanding and Thinking) Plan?', 0, '', '', '', '', '', '', ''),
(125, 4, 5, 1, 2, 'HR', 3, 'Data Analysis\'s Specific Training (Improve Skills) and Education (Improve Conceptual level Understanding and Thinking) Plan?', 0, '', '', '', '', '', '', ''),
(126, 4, 5, 1, 2, 'HR', 3, 'Maintenance Personnel Training (Improve Skills) and Education (Improve Conceptual level Understanding and Thinking) Plan?', 0, '', '', '', '', '', '', ''),
(127, 4, 5, 1, 2, 'HR', 5, 'Training and Education Plan for persons carring Quality Control and Quality Assurance Activities.', 0, '', '', '', '', '', '', ''),
(128, 4, 5, 1, 2, 'HR', 8, 'Topics of Training & Educations Programmes: (Earlier Trainings required for the deployment of CQI Methods mentioned in \"Leadership & Strategies\")\na. Team Management: Quality Control Circle (QCC) (1st Step for CQI)\nb. Cost of Quality (CoQ)/Cost of Poor Quality (CoPQ)\nc. 5S/House Keeping (Recommended by Local OEM)\nd. Kaizen/Reward & Recognition System\ne. Error Proofing (Pokayoke)\nf. Visual Control Management/Standardized Operators Instructions/Visual Instructions\ng. Lean Manufacturing Principles/Toyota Production System (TPS\nh. Failure Mode and Effect Analysis (FMEA) (Recommended by Local OEM)\ni. Control Plan\nj. Seven Quality Control (QC) Tools (Recommended by Local OEM)\nk. Statistical Process Control (SPC) (Prerequisite of 7QC Tools) (Recommended by Local OEM)\nl. Six Sigma Methodologies (Prerequisite of SPC)\nm. Measurement System Analysis (MSA): Data Gathering and Statistical Analysis, GR&R (Recommended by Local OEM)\nn. Capability Analysis: Cp, Pp, Cpk, Ppk\no. Use of Statistical Software for quality data analysis\np. Total Productive Maintenance (TPM)\nq. Product Safety (Recommended by Local OEM)\nr. Legal Regulations related to products (Recommended by Local OEM)\ns. Products Knowledge (including part\'s function in the vehicle and its significance) (Recommended by Local OEM)\nt. Dealing with Abnormalities and Defective Parts (Recommended by Local OEM)\nu.Functioning and Handling of Inspection Equipment (Recommended by Local OEM)\nv. Safety in Work (Recommended by Local OEM)\nw. Customer/Market Feedback (Recommended by Local OEM)\nx. Quality System Implementation in the Supplier\'s Organization (Recommended by Local OEM)', 0, '', '', '', '', '', '', ''),
(129, 4, 5, 1, 2, 'HR', 5, 'Periodic Review for Learning Effectiveness of Trainings received? Skills Level Evaluation through Observations/Written Tests/Interviews', 0, '', '', '', '', '', '', ''),
(130, 4, 5, 1, 2, 'CEO/MD/Operations', 5, 'Internal Auditor Competency: Dedicated QMS Auditor (by OEM)/Manufacturing Process Auditor (by OEM)/Product Auditor (by Supplier at sub-supplier)? ', 0, '', '', '', '', '', '', ''),
(131, 4, 5, 1, 2, 'CEO/MD/Operations', 5, 'In-house: Internal Quality Audit (Periodically) by Supplier in the Premises?', 0, '', '', '', '', '', '', ''),
(132, 4, 5, 1, 2, 'CEO/MD/Operations', 4, 'In-house:  \"Audit Plan\" of Internal Quality Audit by Internal Auditor at the company premises?', 0, '', '', '', '', '', '', ''),
(133, 4, 5, 1, 2, 'CEO/MD/Operations', 4, 'In-house: \"Audit Report\" of Internal Quality Audit by Internal Auditor at the company premises?', 0, '', '', '', '', '', '', ''),
(134, 4, 5, 1, 2, 'CEO/MD/Operations', 4, 'In-house: Follow-up of Corrective Actions and Timely Closure of Audit Observation?', 0, '', '', '', '', '', '', ''),
(135, 4, 5, 1, 2, 'HR', 4, 'Internal Auditor Competency: Is/Are QMS Auditor/Manufacturing Process Auditor/Product Auditor Certified from any renowned standardized body? ', 0, '', '', '', '', '', '', ''),
(136, 4, 5, 1, 2, 'HR', 4, 'Internal Auditor Competency: Documented process to verify that QMS Auditor/Manufacturing Process Auditor/Product Auditor is/are competent. \nIs organization maintained a list of Qualified Internal Auditors?', 0, '', '', '', '', '', '', ''),
(137, 4, 5, 1, 2, 'HR', 5, 'Internal Auditor Competency: QMS Auditor/Manufacturing Process Auditor/Product Auditor demonstrates the following core competencies: \n -Understanding of ISO 9001 and IAFT 16949 requirements (QMS Auditor)\n -Understanding how to Plan, Conduct, Report, and Closeout Audit findings (QMS Auditor)\n -Understanding of Automotive Process Approach for Auditing(QMS Auditor)\n -Technical understanding of the relevant Manufacturing Processes including Risk Analysis (PFMEA) & Control Plan (Manufacturing Process Auditor)\n -Understanding of Product Requirements and use of relevant Measuring & Testing Equipment to verify product conformity (Product Auditor)\n - Applicable Core Tool requirements related to the Scope of the Audit', 0, '', '', '', '', '', '', ''),
(138, 4, 5, 1, 2, 'HR', 5, 'Second-Party Auditor Competency: Second-Party Auditor meets the Auditor\'s Qualification? Certified from any renowned standardized body?', 0, '', '', '', '', '', '', ''),
(139, 4, 5, 1, 2, 'HR', 5, 'Secon-Party Auditor Competency: QMS Auditor/Manufacturing Process Auditor/Product Auditor demonstrates the following core competencies: \n -Understanding of ISO 9001 and IAFT 16949 requirements \n -Understanding how to Plan, Conduct, Report, and Closeout Audit findings \n -Understanding of Automotive Process Approach for Auditing\n -Technical understanding of the relevant Manufacturing Processes including Risk Analysis (PFMEA) & Control Plan\n - Applicable Core Tool requirements related to the Scope of the Audit', 0, '', '', '', '', '', '', ''),
(140, 4, 5, 1, 2, 'HR', 3, 'Employee\'s job rotations from a learning point of view?', 0, '', '', '', '', '', '', ''),
(141, 4, 5, 1, 2, 'HR', 5, 'Existence of Employees Benefits Policy? ', 0, '', '', '', '', '', '', ''),
(142, 4, 5, 1, 2, 'HR', 5, 'Medical facilities at workplace premises and panel hospitals? ', 0, '', '', '', '', '', '', ''),
(143, 4, 5, 1, 2, 'HR', 4, 'Cafeteria? Lunch, Tea provided by the organization on a subsidiary rate? (Benefits)', 0, '', '', '', '', '', '', ''),
(144, 4, 5, 1, 2, 'HR', 4, 'Existence of Prayer Area/Mosque?', 0, '', '', '', '', '', '', ''),
(145, 4, 5, 1, 2, 'HR', 4, 'Dedicated Change Room/Separate Washrooms?', 0, '', '', '', '', '', '', ''),
(146, 4, 5, 1, 2, 'HR', 4, 'Uniforms of Employee?', 0, '', '', '', '', '', '', ''),
(147, 4, 5, 1, 2, 'HR', 0, 'Existence of a Standard KPI for Employees? to review in Management Review Meetings on Monthly/Annual Meetings? (See in Result Criterion)', 0, '', '', '', '', '', '', ''),
(148, 5, 3, 1, 2, 'Mark./After Sal. & Ser', 4, 'Do you measure (periodically) your number of customers in the market? Data Trends?', 0, '', '', '', '', '', '', ''),
(149, 5, 3, 1, 2, 'Mark./After Sal. & Ser', 4, 'Do you measure (periodically) your competitors in the market? Data Trend?', 0, '', '', '', '', '', '', ''),
(150, 5, 3, 1, 2, 'Mark./After Sal. & Ser', 4, 'Do you measure (peridically) market need of your product? Data Trend?', 0, '', '', '', '', '', '', ''),
(151, 5, 3, 1, 2, 'Mark./After Sal. & Ser', 4, 'Do you measure (periodically) the market share of your products?', 0, '', '', '', '', '', '', ''),
(152, 5, 3, 1, 2, 'Mark./After Sal. & Ser', 4, 'Do you measure (periodically) Customer Claims and Warranty? Data Trend?', 0, '', '', '', '', '', '', ''),
(153, 5, 3, 1, 2, 'Mark./After Sal. & Ser', 3, 'Do you have a Marketing Strategy to attract your customers? Website, Advertising, Networking', 0, '', '', '', '', '', '', ''),
(154, 5, 3, 1, 2, 'Mark./After Sal. & Ser', 4, 'Do you interact with your customers? Meetings', 0, '', '', '', '', '', '', ''),
(155, 5, 3, 1, 2, 'Mark./After Sal. & Ser', 4, 'Have you offered a channel for customers to contact you for seeking company information and support? Customer Portal', 0, '', '', '', '', '', '', ''),
(156, 5, 3, 1, 2, 'Mark./After Sal. & Ser', 8, 'Is there any dedicated Customer Complaint Management System? ', 0, '', '', '', '', '', '', ''),
(157, 5, 3, 1, 2, 'Mark./After Sal. & Ser', 8, 'Do you take a periodic Product\'s Feedback (Quesinnaire/Telophone Calls/Interviews) from your customers? For the measurement of Customer Satisfaction/Dissatisfaction', 0, '', '', '', '', '', '', ''),
(158, 5, 3, 1, 2, 'Mark./After Sal. & Ser', 8, 'Do you take a periodic Services/After Sales & Service\'s Feedback from your customers?For the measurement of Customer Satisfaction/Dissatisfaction ', 0, '', '', '', '', '', '', ''),
(159, 5, 3, 1, 2, 'Mark./After Sal. & Ser', 6, 'Do you conduct Statistical Analysis of Product\'s Feedback?', 0, '', '', '', '', '', '', ''),
(160, 5, 3, 1, 2, 'Mark./After Sal. & Ser', 6, 'Do you conduct Statistical Analysis of After Sales and Service\'s Feedback?', 0, '', '', '', '', '', '', ''),
(161, 5, 3, 1, 2, 'Mark./After Sal. & Ser', 8, 'Do you take Corrective and Preventive Actions on feedback?', 0, '', '', '', '', '', '', ''),
(162, 5, 3, 1, 2, 'Mark./After Sal. & Ser', 5, 'After conducting Corrective and Preventative Measures, do you interact with your customers and respond them to their inquiries/complaints resolutions?', 0, '', '', '', '', '', '', ''),
(163, 5, 3, 1, 2, 'Mark./After Sal. & Ser', 5, 'Data Gathering and Statistical Analysis of No. of Complaints, Complaints resolved, Compliments? Data Trend?', 0, '', '', '', '', '', '', ''),
(164, 5, 3, 1, 2, 'Operations', 4, 'Do Management Review Meetings discuss Customer Feedback, its Statistical Analysis, and Corrective and Preventative Actions? ', 0, '', '', '', '', '', '', ''),
(165, 5, 3, 1, 2, 'Operations', 4, 'Customer and applicable Statutory and Regulatory requirements are available and then determined, understood and consistently met.', 0, '', '', '', '', '', '', ''),
(166, 5, 3, 1, 2, 'Operations', 2, 'If the company has its sub-supplier(s)? Selection Criteria, QS/Process Auditing? Measurement of Supplier Rating, Sub-Supplier Development?', 0, '', '', '', '', '', '', ''),
(167, 5, 3, 1, 2, 'Operations', 5, 'As a supplier, your Supplier Quality Rating is increasing  measured by OEM', 0, '', '', '', '', '', '', ''),
(168, 5, 3, 1, 2, 'Operations', 0, 'Existence of a Standard KPI for Customers? to review in Management Review Meetings on Monthly/Annual Meetings? (See in Result Criterion)', 0, '', '', '', '', '', '', ''),
(169, 6, 6, 2, 3, 'Production', 5, 'Does Standard Operating Procedure (SoP) for Production exist?', 0, '', '', '', '', '', '', ''),
(170, 6, 6, 2, 3, 'Production', 1, 'Before the start of Production, is the Production Schedule prepared? and notified all relevant departments for logistics to make sure production smooth.', 0, '', '', '', '', '', '', ''),
(171, 6, 6, 2, 3, 'Production', 1, 'Master List of Production Equipment? is available and updated', 0, '', '', '', '', '', '', ''),
(172, 6, 6, 2, 3, 'Production', 2, 'Production Equipment is calibrated where needed?', 0, '', '', '', '', '', '', ''),
(173, 6, 6, 2, 3, 'Production', 1, 'Master List of Inspection Equipment? is available and updated', 0, '', '', '', '', '', '', ''),
(174, 6, 6, 2, 3, 'Production', 2, 'Inspection Equipment is calibrated? And tagged mentioning expirary date', 0, '', '', '', '', '', '', ''),
(175, 6, 6, 2, 3, 'Production', 1, 'Master List of Jig/Fixture/Die/Mould, and Tooling? is available and updated', 0, '', '', '', '', '', '', ''),
(176, 6, 6, 2, 3, 'Production', 1, 'Dies and Tools are ready for use and fulfil are requirements of use.', 0, '', '', '', '', '', '', ''),
(177, 6, 6, 2, 3, 'Production', 1, 'Master list of Employees engage in Production? is available and updated', 0, '', '', '', '', '', '', ''),
(178, 6, 6, 2, 3, 'Production', 1, 'Roles and Responsibilities are defined for Production, Quality? Communicated, and Understood by relevant employees.', 0, '', '', '', '', '', '', ''),
(179, 6, 6, 2, 3, 'Production', 2, 'Employee Work Instructions are established, Communicated, and Understood by relevant employees?', 0, '', '', '', '', '', '', ''),
(180, 6, 6, 2, 3, 'Production', 2, 'Techincal Trainings of Operators/Supervisors/Quality personnel have been completed, where required. (Example: Machine Operations, Drawing Reading, Use of Measuring Instruments, Data Recording in Formats etc.)', 0, '', '', '', '', '', '', ''),
(181, 6, 6, 2, 3, 'Production', 1, 'Specific Awareness Trainings Completion: Know how of Functional Parts and General Parts for the use of OEM.  ', 0, '', '', '', '', '', '', ''),
(182, 6, 6, 2, 3, 'Production', 2, 'In-house/outside Awareness/Training Sessions regarding HSE have been completed?  Before the Production Run', 0, '', '', '', '', '', '', ''),
(183, 6, 6, 2, 3, 'Production', 5, 'Process Control Standards (PCS) is established? Standard Format of OEM', 0, '', '', '', '', '', '', ''),
(184, 6, 6, 2, 3, 'Production', 1, 'Training on PCS has been completed? Awareness for relevant Managers/Supervisors/Operators', 0, '', '', '', '', '', '', ''),
(185, 6, 6, 2, 3, 'Production', 1, 'Process Flow Charts of manufacturing sequence is eslablished? Standard Format of OEM', 0, '', '', '', '', '', '', ''),
(186, 6, 6, 2, 3, 'Production', 2, 'Is Control Plan provided by QC/QA? Communicated and Understood by Production Personnel. Standard Format of OEM ', 0, '', '', '', '', '', '', ''),
(187, 6, 6, 2, 3, 'Production', 1, 'Is PFMEA provided by QC/QA, Communicated and Understood? Standard Format of OEM ', 0, '', '', '', '', '', '', ''),
(188, 6, 6, 2, 3, 'Production', 1, 'PCS are communicated and understood? by the relevant Managers/Supervisors/Operators', 0, '', '', '', '', '', '', ''),
(189, 6, 6, 2, 3, 'Production', 4, 'Operation Standards is established? Standard Contents of OEM', 0, '', '', '', '', '', '', ''),
(190, 6, 6, 2, 3, 'Production', 1, 'Operation Standard Contents are: Operation Method, Process/Machine Parameters, Quality Check Points, Abnormality Handling, Defects History', 0, '', '', '', '', '', '', ''),
(191, 6, 6, 2, 3, 'Production', 1, 'Review of Operation Standards?', 0, '', '', '', '', '', '', ''),
(192, 6, 6, 2, 3, 'Production', 2, 'Training on Operation Standards has been completed? Awareness for relevant Managers/Supervisors/Operators', 0, '', '', '', '', '', '', ''),
(193, 6, 6, 2, 3, 'Production', 1, 'Operation Standards are communicated and understood? by the relevant Managers/Supervisors/Operators', 0, '', '', '', '', '', '', ''),
(194, 6, 6, 2, 3, 'Production', 1, 'Job Set-up Instructions prepared, communicated and understood? (Toolings, and if New Product is arriving at a production line)', 0, '', '', '', '', '', '', ''),
(195, 6, 6, 2, 3, 'Production', 5, 'Is Inspection Standards provided by QC/QC, Communicated and Understood by Machine Operator, and Production Supervisor? Standard Format of OEM', 0, '', '', '', '', '', '', ''),
(196, 6, 6, 2, 3, 'Production', 1, 'Training on Inspection Standards has been completed? Awareness for relevant Managers/Supervisors/Operators', 0, '', '', '', '', '', '', ''),
(197, 6, 6, 2, 3, 'Production', 2, 'Specifically, Quality Check Points, Frequency, and Sample size of Checking, communicated to Machine Operator? To be checked by Machine Operator', 0, '', '', '', '', '', '', ''),
(198, 6, 6, 2, 3, 'Production', 1, 'Are all Part Drawings and Specification (Quality Dimension) posted at the Machine and well understood by the Machine Operator? Visible ', 0, '', '', '', '', '', '', ''),
(199, 6, 6, 2, 3, 'Production', 1, 'Specific Measuring Instruments defined and communicated to Machine Operator?', 0, '', '', '', '', '', '', ''),
(200, 6, 6, 2, 3, 'Production', 2, 'Specific Recording Formats of Production Run, Quality Checks, Machine Maitenance have been provided and communicated to Machine Operator?', 0, '', '', '', '', '', '', ''),
(201, 6, 6, 2, 3, 'Production', 1, 'Specific Setting Parameters of the Machine are developed and communicated to Machine Operators? Reading of Machine Manuals by Manager/HoD', 0, '', '', '', '', '', '', ''),
(202, 6, 6, 2, 3, 'Production', 1, 'Machine Maintenance at Operator Level is checked and ok (Daily/Monthly)? Provided by Maintenance Department', 0, '', '', '', '', '', '', ''),
(203, 6, 6, 2, 3, 'Production', 1, 'Morning Meeting (Production) held regularly?', 0, '', '', '', '', '', '', ''),
(204, 6, 6, 2, 3, 'Production', 1, 'Are daily targets given to machine operators?', 0, '', '', '', '', '', '', ''),
(205, 6, 6, 2, 3, 'Production', 1, 'Does the machine operator wear PPE [a Uniform, Safety Shoes, Gloves (as per need), and goggles (as per need, Helmet (as per need]?', 0, '', '', '', '', '', '', ''),
(206, 6, 6, 2, 3, 'Production', 1, 'Daily Cleaning of Machine and Measuring Instrument? Done and ticked on Format for recording purpose', 0, '', '', '', '', '', '', ''),
(207, 6, 6, 2, 3, 'Production', 5, 'Relevant Formats in Compliance with the Control Plan (Quality Check Points, Frequency, and Sample size of Checking are provided and displayed at Machines? Provided by line-supervisor/QC/QA. Record maintaining', 0, '', '', '', '', '', '', ''),
(208, 6, 6, 2, 3, 'Production', 1, 'Are machine operators using dedicated Separte Measuring Instruments or different Measuring Instruments at different timings.', 0, '', '', '', '', '', '', ''),
(209, 6, 6, 2, 3, 'Production', 1, 'In the first production run, is machine operator is bound to check samples and record its results in the provided format.', 0, '', '', '', '', '', '', ''),
(210, 6, 6, 2, 3, 'Production', 3, 'Does the Quality Inspector ensure periodically that the parts comply with the Control Plan? As per OEM recommendations', 0, '', '', '', '', '', '', ''),
(211, 6, 6, 2, 3, 'Production', 1, 'Does the operator have the authority to deal with any abnormality noticed, notify the supervisor, or stop the production line?', 0, '', '', '', '', '', '', ''),
(212, 6, 6, 2, 3, 'Production', 5, 'PFMEA has been developed and is being followed-up, according to QC/QA', 0, '', '', '', '', '', '', ''),
(213, 6, 6, 2, 3, 'Production', 1, 'Do the designated Ok/Rework/Rejected parts bins exist? 5S', 0, '', '', '', '', '', '', ''),
(214, 6, 6, 2, 3, 'Production', 2, 'Is there a designated area for Rejection?', 0, '', '', '', '', '', '', ''),
(215, 6, 6, 2, 3, 'Production', 2, 'Colour Coding Schemes (Identification System) is exist (Floor, Ok/Rework/Rejection (RED Color), Piping, Compressed Air, Water, Fire Fighting, Bins/Pallets/Shelves of parts)', 0, '', '', '', '', '', '', ''),
(216, 6, 6, 2, 3, 'Production', 1, 'In order to implement Identification and Traceability effectively, make sure that parts are FIFO (First Come First Out).', 0, '', '', '', '', '', '', ''),
(217, 6, 6, 2, 3, 'Production', 2, 'Does Exist a Lot Coding System for Traceability? Travel Card', 0, '', '', '', '', '', '', ''),
(218, 6, 6, 2, 3, 'Production', 2, 'Does the Production Monitoring Board exist? and keeping updated hourly/daily or so on to track the issue?', 0, '', '', '', '', '', '', ''),
(219, 6, 6, 2, 3, 'Production', 2, 'Use of Control Charts at Critical Processes? Data Recording', 0, '', '', '', '', '', '', ''),
(220, 6, 6, 2, 3, 'Production', 1, 'Use of Cause and Effect Diagram? for handling Abnormalities, and Corrective and Preventive Actions. ', 0, '', '', '', '', '', '', ''),
(221, 6, 6, 2, 3, 'Production', 3, 'Use of Capability Analysis?', 0, '', '', '', '', '', '', ''),
(222, 6, 6, 2, 3, 'Production', 1, 'Statutory and Regulatory requirements applicable to Products and Services are available and then determined, understood and consistently met.', 0, '', '', '', '', '', '', ''),
(223, 6, 6, 2, 3, 'Production', 0, 'Existence of Standard KPI of Production to review in Management Review Meetings on Monthly/Annual Meetings? (See in Result Criterion)', 0, '', '', '', '', '', '', ''),
(224, 6, 6, 2, 3, 'Quality', 1, 'Morning Meeting held regularly (Quality)', 0, '', '', '', '', '', '', ''),
(225, 6, 6, 2, 3, 'Quality', 2, 'Does Standard Operating Procedure (SoP) for QC/QA exist?', 0, '', '', '', '', '', '', ''),
(226, 6, 6, 2, 3, 'Quality', 1, 'A Master List of all Inspection Equipment? is available and updated.', 0, '', '', '', '', '', '', ''),
(227, 6, 6, 2, 3, 'Quality', 2, 'Schedule of Calibration for Inspection Equipment prepared as per OEM recommnedation?', 0, '', '', '', '', '', '', ''),
(228, 6, 6, 2, 3, 'Quality', 3, 'Does QC/QA internal laboratory (performs Inspection, Test, or Calibration) accreditated with ISO/IEC 17025 (or equivalent)', 0, '', '', '', '', '', '', ''),
(229, 6, 6, 2, 3, 'Quality', 1, 'The date of expiry is mentioned on all inspection Equipment, and visible?', 0, '', '', '', '', '', '', ''),
(230, 6, 6, 2, 3, 'Quality', 1, 'Calibration of Master Instruments? Does procedure exist? ', 0, '', '', '', '', '', '', ''),
(231, 6, 6, 2, 3, 'Quality', 2, 'If the external laboratory performing Inspecting, Test, or Calibration) is accreditated with ISO/IEC 17025 (or equivalent)?', 0, '', '', '', '', '', '', ''),
(232, 6, 6, 2, 3, 'Quality', 1, 'Is the record of Calibration (within the defined retention period) available? Calibration completed.', 0, '', '', '', '', '', '', ''),
(233, 6, 6, 2, 3, 'Quality', 2, 'Does an Inspection Equipment Coding System exist? ', 0, '', '', '', '', '', '', ''),
(234, 6, 6, 2, 3, 'Quality', 1, 'Are Inspection Standards prepared for the products that are on a production line? To be checked by Quality Inspector. Standard Format of OEM', 0, '', '', '', '', '', '', ''),
(235, 6, 6, 2, 3, 'Quality', 2, 'Main Contents of Inspection Standards are: Section I-Appearance, Section II-Dimension, Section III-Material Testing/Performance, Sectio IV-Illustration/Sketch? To be checked by Quality Inspector. Standard Format of OEM', 0, '', '', '', '', '', '', ''),
(236, 6, 6, 2, 3, 'Quality', 1, 'Inspection Standards provided to Production Department and are being monitored periodically? To be Checked by Machine Operator, Review by Supervisor and Manager', 0, '', '', '', '', '', '', ''),
(237, 6, 6, 2, 3, 'Quality', 1, 'Inspection Equipment Maintenance/Cleaning at Operator Level/Quality Inspector is checked and ok (Daily/Monthly)? Provided by QC/QA', 0, '', '', '', '', '', '', ''),
(238, 6, 6, 2, 3, 'Quality', 1, 'All Inspection Records of Periodic Checks within the defined retention period (Functional Parts up-to 3 years, General Parts up-to 02 years)? Standard Format of OEM', 0, '', '', '', '', '', '', ''),
(239, 6, 6, 2, 3, 'Quality', 2, 'Quality Format contains: Quality Check Points, Frequency, and Sample size of Checking provided to the Machine Operator/Line Supervisor? To be checked by Machine Operator', 0, '', '', '', '', '', '', ''),
(240, 6, 6, 2, 3, 'Quality', 1, 'Are all Part Drawings and Specification (Quality Dimension) provided to the Machine Operator? ', 0, '', '', '', '', '', '', ''),
(241, 6, 6, 2, 3, 'Quality', 2, 'Control Plan prepared, provided, and is being monitored periodically? Standard Format of OEM', 0, '', '', '', '', '', '', ''),
(242, 6, 6, 2, 3, 'Quality', 2, 'PFMEA prepared, provided to Production and is being monitored periodically? Standard Format of OEM', 0, '', '', '', '', '', '', ''),
(243, 6, 6, 2, 3, 'Quality', 1, 'Inspection of raw material received from outside source/sub-supplier as per standard Sampling Plan?, Sampling Scheme (Reduce, Tight inspection..) is applicable and monitored', 0, '', '', '', '', '', '', ''),
(244, 6, 6, 2, 3, 'Quality', 1, 'Review of Process Control Standards, Inspection Standards,and Operation Standards?', 0, '', '', '', '', '', '', ''),
(245, 6, 6, 2, 3, 'Quality', 1, 'Does the Quality Inspection Monitoring Board exist? and keeping updated hourly/or so on?', 0, '', '', '', '', '', '', ''),
(246, 6, 6, 2, 3, 'Quality', 0, 'Existence of Standard KPI of QC & QA to review in Management Review Meetings on Monthly/Annual Meetings? (See in Result Criterion)', 0, '', '', '', '', '', '', ''),
(247, 6, 6, 2, 3, 'Production/Quality', 5, 'SoP for MSA is available, Communicated, and Understood?', 0, '', '', '', '', '', '', ''),
(248, 6, 6, 2, 3, 'Production/Quality', 5, 'Does the AIAG Method validates all types of collected data?', 0, '', '', '', '', '', '', ''),
(249, 6, 6, 2, 3, 'Production/Quality', 0, 'Existence of a Standard KPI of GRR to review in Management Review Meetings on Monthly/Annual Meetings? (See in Result Criterion)', 0, '', '', '', '', '', '', ''),
(250, 6, 6, 2, 3, 'Operations', 5, 'ISO 45001-Occupational Health and Safety Management System? (Environment for Personnel Safety Aspects)', 0, '', '', '', '', '', '', ''),
(251, 6, 6, 2, 3, 'Operations', 3, 'Safety Policy?', 0, '', '', '', '', '', '', ''),
(252, 6, 6, 2, 3, 'Operations', 3, 'Environment Policy? As per  United Nation (UN) Sustainable Development Goals (SDGs)', 0, '', '', '', '', '', '', ''),
(253, 6, 6, 2, 3, 'Operations', 3, 'Display of HSE Policy and Slogans at all workplaces?', 0, '', '', '', '', '', '', ''),
(254, 6, 6, 2, 3, 'Operations', 2, 'SoP/Standard Manual for Safety of Employee and Workplace?', 0, '', '', '', '', '', '', ''),
(255, 6, 6, 2, 3, 'Operations', 2, 'Standard Manual for Safety of Employee and Workplace, Communicated, and Understood?', 0, '', '', '', '', '', '', ''),
(256, 6, 6, 2, 3, 'Operations', 2, 'In-house/outside Awareness/Training Sessions (Periodically) Plan regarding HSE?  Success and Failure Theories/Videos/Lesson learned', 0, '', '', '', '', '', '', ''),
(257, 6, 6, 2, 3, 'Operations', 1, 'Risk Assessment to prevent injuries, loss, and damages for creating better, safer working conditions.', 0, '', '', '', '', '', '', '');
INSERT INTO `quiz_question` (`q_id`, `section_id`, `sub_section_id`, `cycle_phase`, `p_phase`, `auditee`, `weightage`, `q_question`, `status`, `extra1`, `extra2`, `extra3`, `extra4`, `extra5`, `extra6`, `extra7`) VALUES
(258, 6, 6, 2, 3, 'Operations', 2, 'Procedure to dispose of hazardous material established and followed? As per UN SDGs', 0, '', '', '', '', '', '', ''),
(259, 6, 6, 2, 3, 'Operations', 2, 'Personal Protective Equipment (PPE) provided at the workplace?', 0, '', '', '', '', '', '', ''),
(260, 6, 6, 2, 3, 'Operations', 1, 'Is there any regular check to make sure that Employees use PPEs at workplace as per policy? Format, record? ', 0, '', '', '', '', '', '', ''),
(261, 6, 6, 2, 3, 'Operations', 2, 'Data Gathering and Analysis on Accidents accured? Data Trend?', 0, '', '', '', '', '', '', ''),
(262, 6, 6, 2, 3, 'Operations', 2, 'Corrective and Preventive Actions taken? Data Trend?', 0, '', '', '', '', '', '', ''),
(263, 6, 6, 2, 3, 'Operations', 1, 'Standard KPI of HSE in Monthly Management Review Meeting?', 0, '', '', '', '', '', '', ''),
(264, 6, 6, 2, 3, 'Operations', 2, 'Ergonomics principles employed at the workplace?', 0, '', '', '', '', '', '', ''),
(265, 6, 6, 2, 3, 'Operations', 1, 'Does Exist a designated Assembly Area for Emergencies?', 0, '', '', '', '', '', '', ''),
(266, 6, 6, 2, 3, 'Production', 1, 'Morning Meeting held regularly (Packaging)', 0, '', '', '', '', '', '', ''),
(267, 6, 6, 2, 3, 'Production', 1, 'Is there any SoP for Packaging as per recommendation of OEM', 0, '', '', '', '', '', '', ''),
(268, 6, 6, 2, 3, 'Production', 2, 'Does Packaging modes (as per OEM guidelines) exist? In Returnable Plastic Bins/Trolleys/Pallets/Cages:\nIt includes Bins/Trolleys/Pallets/Cages Size, Weight, Name Plate, Part Tag Holder, Comfortable Clearance between parts ', 0, '', '', '', '', '', '', ''),
(269, 6, 6, 2, 3, 'Production', 1, 'Comprehensive Part Tag Format as per OEM recommendation', 0, '', '', '', '', '', '', ''),
(270, 6, 6, 2, 3, 'Production', 1, 'Is packaging material safe for humans and the environment?', 0, '', '', '', '', '', '', ''),
(271, 6, 6, 2, 3, 'Production', 1, 'Does the Packaging Monitoring Board exist? and keeping updated hourly/daily or so on to track the issue?', 0, '', '', '', '', '', '', ''),
(272, 6, 6, 2, 3, 'Maintenance', 1, 'Morning Meeting held regularly (Maintenance)', 0, '', '', '', '', '', '', ''),
(273, 6, 6, 2, 3, 'Maintenance', 2, 'Does Standard Operating Procedure (SoP) for QC/QA exist?', 0, '', '', '', '', '', '', ''),
(274, 6, 6, 2, 3, 'Maintenance', 1, 'Master List of all Machines? is available and updated.', 0, '', '', '', '', '', '', ''),
(275, 6, 6, 2, 3, 'Maintenance', 1, 'Does Annual Maintenance Plan (Preventive, Schedule and Predictive Maintence) exist? And Communicated to all relevant departments?', 0, '', '', '', '', '', '', ''),
(276, 6, 6, 2, 3, 'Maintenance', 1, 'Schedule of Machine Maintenance on a daily/Monthly basis prepared and provided to the Machine Operator/ Production Supervisor.', 0, '', '', '', '', '', '', ''),
(277, 6, 6, 2, 3, 'Maintenance', 1, 'Is the record (within the defined retention period) available? Daily/Monthly/Annual Maintenance completed by Machine Operator and Maintenance Department', 0, '', '', '', '', '', '', ''),
(278, 6, 6, 2, 3, 'Maintenance', 1, 'Does a Machine Coding System exist? And visible on Machine (Ex: Hydraulic Machines Code etc.)', 0, '', '', '', '', '', '', ''),
(279, 6, 6, 2, 3, 'Maintenance', 1, 'Calibration of Machines? Where required', 0, '', '', '', '', '', '', ''),
(280, 6, 6, 2, 3, 'Maintenance', 2, 'Does Condition Monitoring applicable? Under Total Productive Maintenance, If not then any Strategic Plan of Deployment?', 0, '', '', '', '', '', '', ''),
(281, 6, 6, 2, 3, 'Maintenance', 1, 'Does the Maintenance Monitoring Board exist? and keeping updated Daily/Monthly so on?', 0, '', '', '', '', '', '', ''),
(282, 6, 6, 2, 3, 'Maintenance', 0, 'Existence of Standard KPI of Maintenance to review in Management Review Meetings on Monthly/Annual Meetings? (See in Result Criterion)', 0, '', '', '', '', '', '', ''),
(283, 6, 6, 2, 3, 'Relevant HoD Manager', 10, 'Floor visit: Examples                                                                                                                                                                                                                             (Without Rubrics Score Allotment)\n- Obeya Room: A3 Reports?put down a problem, an analysis of the issue, proposed solutions, and an action plan in one place, Charts and Graphs on the wall can display the planned strategy and track progress through milestones. Visual information can display proposed solutions.\n\n- Cleanliness, Visual Control Management (5S, Color Coding, Production Travel Card, Production/Quality/Safety/Maintenance Display Boards, Skill Matrix Chart, Rejection/Reworking Areas), HSE, Prayer AreaWashroom, Cafeteria etc.\nDisplay of Quality, Safety, Environment Policies, Quality/Safety Slogans \nDisplay and Recording of Formats (Quality, Production, Maintenance)\n\n- Employee Interaction: with Machine Operator/Supervisors/Quality Inspectors/Office Staff', 0, '', '', '', '', '', '', ''),
(284, 7, 1, 4, 3, 'CEO/MD/Operations', 10, 'Do the leadership/other Employees understand the need to Reduce Product/Process Variation and require Nominal Value?', 0, '', '', '', '', '', '', ''),
(285, 7, 1, 4, 3, 'Production', 3, 'Does Company DEPLOY this CQI Opportunity to meet Performance Excellence & boost Customer Satisfaction: Team Management: Quality Control Circle (QCC) (1st Step for CQI)', 0, '', '', '', '', '', '', ''),
(286, 7, 1, 4, 3, 'Production/Costing', 4, 'Does Company DEPLOY this CQI Opportunity to meet Performance Excellence & boost Customer Satisfaction: Cost of Quality (CoQ)/Cost of Poor Quality (CoPQ)', 0, '', '', '', '', '', '', ''),
(287, 7, 1, 4, 3, 'Production', 4, 'Does Company DEPLOY this CQI Opportunity to meet Performance Excellence & boost Customer Satisfaction: 5S/House Keeping (Recommended by Local OEM)', 0, '', '', '', '', '', '', ''),
(288, 7, 1, 4, 3, 'Production', 3, 'Does Company DEPLOY this CQI Opportunity to meet Performance Excellence & boost Customer Satisfaction: Kaizen/Reward & Recognition System', 0, '', '', '', '', '', '', ''),
(289, 7, 1, 4, 3, 'Production', 4, 'Does Company DEPLOY this CQI Opportunity to meet Performance Excellence & boost Customer Satisfaction: Error Proofing (Pokayoke)', 0, '', '', '', '', '', '', ''),
(290, 7, 1, 4, 3, 'Production', 3, 'Does Company DEPLOY this CQI Opportunity to meet Performance Excellence & boost Customer Satisfaction: Visual Control Management/Standardized Operators Instructions/Visual Instructions', 0, '', '', '', '', '', '', ''),
(291, 7, 1, 4, 3, 'Production', 3, 'Does Company DEPLOY this CQI Opportunity to meet Performance Excellence & boost Customer Satisfaction: Lean Manufacturing Principles/Toyota Production System (TPS)', 0, '', '', '', '', '', '', ''),
(292, 7, 1, 4, 3, 'Production', 5, '  Failure Mode and Effect Analysis (FMEA) (Recommended by Local OEM)', 0, '', '', '', '', '', '', ''),
(293, 7, 1, 4, 3, 'Quality', 5, 'Does Company DEPLOY this CQI Opportunity to meet Performance Excellence & boost Customer Satisfaction: Control Plan (Recommended by Local OEM)', 0, '', '', '', '', '', '', ''),
(294, 7, 1, 4, 3, 'Production/Quality', 4, 'Does Company DEPLOY this CQI Opportunity to meet Performance Excellence & boost Customer Satisfaction: Seven Quality Control (QC) Tools (Recommended by Local OEM)', 0, '', '', '', '', '', '', ''),
(295, 7, 1, 4, 3, 'Production/Quality', 4, 'Does Company DEPLOY this CQI Opportunity to meet Performance Excellence & boost Customer Satisfaction: Statistical Process Control (SPC) (Prerequisite of 7QC Tools) (Recommended by Local OEM)', 0, '', '', '', '', '', '', ''),
(296, 7, 1, 4, 3, 'Production/Quality', 5, 'Does Company DEPLOY this CQI Opportunity to meet Performance Excellence & boost Customer Satisfaction: Six Sigma Methodologies (Prerequisite of SPC)', 0, '', '', '', '', '', '', ''),
(297, 7, 1, 4, 3, 'Production/Quality', 3, 'Does Company DEPLOY this CQI Opportunity to meet Performance Excellence & boost Customer Satisfaction: Measurement System Analysis (MSA): Data Gathering and Statistical Analysis, GR&R (Recommended by Local OEM)', 0, '', '', '', '', '', '', ''),
(298, 7, 1, 4, 3, 'Production/Quality', 4, 'Does Company DEPLOY this CQI Opportunity to meet Performance Excellence & boost Customer Satisfaction: Capability Analysis: Cp, Pp, Cpk, Ppk (Recommended by Local OEM)', 0, '', '', '', '', '', '', ''),
(299, 7, 1, 4, 3, 'Production/Quality', 3, 'Does Company DEPLOY this CQI Opportunity to meet Performance Excellence & boost Customer Satisfaction: Use of Statistical Software for quality data analysis', 0, '', '', '', '', '', '', ''),
(300, 7, 1, 4, 3, 'Maintenance', 3, 'Does Company DEPLOY this CQI Opportunity to meet Performance Excellence & boost Customer Satisfaction: Total Productive Maintenance (TPM)', 0, '', '', '', '', '', '', ''),
(301, 7, 1, 4, 3, 'Production/Quality', 4, 'Does Company DEPLOY this CQI Opportunity to meet Performance Excellence & boost Customer Satisfaction: Product Safety (Recommended by Local OEM)', 0, '', '', '', '', '', '', ''),
(302, 7, 1, 4, 3, 'Operations', 3, 'Does Company DEPLOY this CQI Opportunity to meet Performance Excellence & boost Customer Satisfaction: Legal Regulations related to products (Recommended by Local OEM)', 0, '', '', '', '', '', '', ''),
(303, 7, 1, 4, 3, 'Production/Quality', 3, 'Does Company DEPLOY this CQI Opportunity to meet Performance Excellence & boost Customer Satisfaction: Products Knowledge (including part\'s function in the vehicle and its significance) (Recommended by Local OEM)', 0, '', '', '', '', '', '', ''),
(304, 7, 1, 4, 3, 'Production', 5, '  Dealing with Abnormalities and Defective Parts (Recommended by Local OEM)', 0, '', '', '', '', '', '', ''),
(305, 7, 1, 4, 3, 'Quality', 3, 'Does Company DEPLOY this CQI Opportunity to meet Performance Excellence & boost Customer Satisfaction: Functioning and Handling of Inspection Equipment (Recommended by Local OEM)', 0, '', '', '', '', '', '', ''),
(306, 7, 1, 4, 3, 'After Sales & Services', 4, 'Does Company DEPLOY this CQI Opportunity to meet Performance Excellence & boost Customer Satisfaction: Safety in Work (Recommended by Local OEM)', 0, '', '', '', '', '', '', ''),
(307, 7, 1, 4, 3, 'After Sales & Services', 4, 'Does Company DEPLOY this CQI Opportunity to meet Performance Excellence & boost Customer Satisfaction: Customer/Market Feedback (Recommended by Local OEM)', 0, '', '', '', '', '', '', ''),
(308, 7, 1, 4, 3, 'Quality', 4, 'Does Company DEPLOY this CQI Opportunity to meet Performance Excellence & boost Customer Satisfaction: Quality System Implementation in the Supplier\'s Organization (Recommended by Local OEM)', 0, '', '', '', '', '', '', ''),
(309, 8, 11, 3, 2, 'CEO/MD/Operations', 3, 'Are organization leadership familiar with Digitization/Industry 4.0?', 0, '', '', '', '', '', '', ''),
(310, 8, 11, 3, 2, 'CEO/MD/Operations', 10, 'Does the Management Review Meeting\'s agenda contain an item on digitization?', 0, '', '', '', '', '', '', ''),
(311, 8, 11, 3, 2, 'CEO/MD/Operations', 8, 'Does the leadership have formed a dedicated team committed to Digitization? ', 0, '', '', '', '', '', '', ''),
(312, 8, 11, 3, 2, 'CEO/MD/Operations', 8, 'Is there a Short-Term and Long-term Strategic Plan for digitalization from the leadership?', 0, '', '', '', '', '', '', ''),
(313, 8, 11, 3, 2, 'CEO/MD/Operations', 3, 'Are organization leadership familiar with Quality 4.0?', 0, '', '', '', '', '', '', ''),
(314, 8, 11, 3, 2, 'CEO/MD/Operations', 4, 'Are organization Leaders/Employees familiar with Eleven Axes of Quality 4.0?', 0, '', '', '', '', '', '', ''),
(315, 8, 11, 3, 2, 'CEO/MD/Operations', 14, 'Any internal business/production process that has been digitalized anywhere in the company? (Example: Production, Sales, Marketing, Finance, Quality, Finance etc.)', 0, '', '', '', '', '', '', ''),
(316, 9, 7, 3, 4, 'Quality', 4, 'Quality Related: Parts Per Million (PPM) = (Number of defective partsx10,00000)/No. OK parts\n    Criteria (Range): \n       PPM=0-10                                  (Score=04)\n       PPM=51-100                             (Score=3.5)\n       PPM=101-200                           (Score=03)\n       PPM=201-300                           (Score=2.5) \n       PPM=301-500                           (Score=02)\n       PPM=Above 500                       (Score=0)', 0, '', '', '', '', '', '', ''),
(317, 9, 7, 3, 4, 'Quality', 3, 'Quality Related: Quality Defect Report (QDR) issued by OEM: (In case of any Functional/General abnormality found at receiving Inspection Area of Local OEM)\n    Criteria (Range):\n       No. of QDRs=0-02                     (Score=03)\n       No. of QDRs=03-05                   (Score=02)\n       No. of QDRs=Above 05             (Score=0)', 0, '', '', '', '', '', '', ''),
(318, 9, 7, 3, 4, 'Quality', 3, 'Delivery Related: In-Time Supplies (On-deliveries):\n     Criteria (Range):\n     100-95% on-time deliveries       (Score=03)\n     94%-90% on-time deliveries      (Score=02)\n     Below 90% deliveries                  (Score=0)', 0, '', '', '', '', '', '', ''),
(319, 9, 7, 3, 4, 'Quality', 4, 'Is the Overall Quality (Rejection, Reworking) of the Product, Inspection Equipment improved?  Results Reported?, Data Trends? Comparison of Results with Previous and Current Situation? Finally, meeting Quality Objectives/Goals?', 0, '', '', '', '', '', '', ''),
(320, 9, 13, 3, 4, 'CEO/MD/Operations', 3, 'Leadership\'s Project Completions of Strategic Decisions? Results Reported?, Data Trends? Comparison of Results with Previous and Current Situation, and Competitors/Bench Marks? Finally Decision meeting Quality Objectives/Goals?', 0, '', '', '', '', '', '', ''),
(321, 9, 13, 3, 4, 'CEO/MD/Operations', 3, 'Is Performance Excellence Enhanced? hence Business Growth (Profit). Results Reported?, Data Trends? Comparison of Results with Previous and Current Situation, and Competitors/Bench Marks? Finally Decision meeting Quality Objectives/Goals?', 0, '', '', '', '', '', '', ''),
(322, 9, 2, 3, 4, 'CEO/MD/Operations', 4, 'Quality, Safety, Ownership, Team Work Culture Improved? Results Reported?, Data Trends? Comparison of Results with Previous and Current Situation? Finally, meeting Quality Objectives/Goals?', 0, '', '', '', '', '', '', ''),
(323, 9, 5, 3, 4, 'CEO/MD/Operations', 4, 'Employee\'s Technical & Education Skills/Learnings, International Satisfaction Improved? Results Reported?, Data Trends? Comparison of Results with Previous and Current Situation? Finally, meeting Quality Objectives/Goals?', 0, '', '', '', '', '', '', ''),
(324, 9, 3, 3, 4, 'CEO/MD/Operations', 4, 'Is Customer Satisfaction improved?  Results Reported?, Data Trends? Comparison of Results with Previous and Current Situation? Finally, meeting Quality Objectives/Goals?', 0, '', '', '', '', '', '', ''),
(325, 9, 6, 3, 4, 'CEO/MD/Operations', 3, 'Is Production Capacity with Quality, and Packaging improved?  Results Reported?, Data Trends? Comparison of Results with Previous and Current Situation? Finally, meeting Quality Objectives/Goals?', 0, '', '', '', '', '', '', ''),
(326, 9, 6, 3, 4, 'CEO/MD/Operations', 3, 'Is MSA? GRR is applied?  Results Reported?, Data Trends? Comparison of Results with Previous and Current Situation? Finally, meeting Quality Objectives/Goals?', 0, '', '', '', '', '', '', ''),
(327, 9, 6, 3, 4, 'CEO/MD/Operations', 3, 'Is Overall Equipment Effectiveness (OEE) of Production Processes measured and Improved?, Data Trends? Comparison of Results with Previous and Current Situation? Finally, meeting Quality Objectives/Goals?', 0, '', '', '', '', '', '', ''),
(328, 9, 6, 3, 4, 'CEO/MD/Operations', 3, 'Is overall Machine Maintenance improved?  Results Reported?, Data Trends? Comparison of Results with Previous and Current Situation? Finally, meeting Quality Objectives/Goals?', 0, '', '', '', '', '', '', ''),
(329, 9, 1, 3, 4, 'CEO/MD/Operations', 3, 'Are CQI Methods applied at required workplaces (especially Production, Quality, and Maintenance departments),?  Results Reported?, Data Trends? Comparison of Results with Previous and Current Situation? Finally, meeting Quality Objectives/Goals?', 0, '', '', '', '', '', '', ''),
(330, 9, 14, 3, 4, 'CEO/MD/Operations', 3, 'Is Digitization/Quality 4.0 applied at required workplaces,?  Results Reported?, Data Trends? Comparison of Results with Previous and Current Situation? Finally, meeting Quality Objectives/Goals?', 0, '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sap_library`
--

CREATE TABLE `sap_library` (
  `s_id` int(11) NOT NULL,
  `s_title` varchar(100) NOT NULL,
  `s_des` text NOT NULL,
  `s_video` varchar(500) NOT NULL,
  `library_id` int(11) NOT NULL,
  `extra1` varchar(500) NOT NULL,
  `extra2` varchar(500) NOT NULL,
  `extra3` varchar(500) NOT NULL,
  `extra4` varchar(500) NOT NULL,
  `extra5` varchar(500) NOT NULL,
  `extra6` int(11) NOT NULL,
  `extra7` int(11) NOT NULL,
  `extra8` int(11) NOT NULL,
  `extra9` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sap_library`
--

INSERT INTO `sap_library` (`s_id`, `s_title`, `s_des`, `s_video`, `library_id`, `extra1`, `extra2`, `extra3`, `extra4`, `extra5`, `extra6`, `extra7`, `extra8`, `extra9`) VALUES
(3, 'Six Sigma In 9 Minutes', 'Six Sigma gives you the tools and techniques to determine what’s making the manufacturing process slow down, how you can eliminate the delays, improve the process, and fix further issues along the way. It is a methodology that has seen worldwide adoption. This video also provides detailed examples on how each of the two Six Sigma methodologies work. The example we\'ll be considering is how a car manufacturing company is able to achieve its goals with the help of the Six Sigma methodologies, DMAIC and DMADV. ', 'https://www.youtube.com/watch?v=4EDYfSl-fmc', 6, '', '', '', '', '', 0, 0, 0, 0),
(4, 'What is Six sigma (6σ)? Six sigma methodology', 'Six Sigma is a quality-control methodology developed by American engineer Bill Smith while working at Motorola in 1986. The method uses a data-driven review to limit mistakes or defects in a corporate or business process. In other words, the six sigma system is a method to work faster with fewer mistakes.\nThe topics you are going to learn are -\n1. What is six sigma?\n2. Understanding of six sigma.\n3. Six sigma methodology- Six Sigma projects follow two project methodologies, Six Sigma DMAIC and Six Sigma DMADV. \n4. What are the key principles of Six Sigma?\n5. Six Sigma Levels or six sigma Certification.\n• Six Sigma White Belts\n• Six Sigma Yellow Belts\n• Six Sigma Green Belts\n• Six Sigma Master Black Belts\nSigma programs are overseen by a Six Sigma Master Black Belt', 'https://www.youtube.com/watch?v=uB0MZ0dKQUo', 6, '', '', '', '', '', 0, 0, 0, 0),
(5, ' What Is Lean Six Sigma?', 'In this video, we\'ll tell you everything you need to learn about Lean Six Sigma in 8 minutes! We\'ll be covering a number of major concepts like Lean and Six Sigma, to help you answer the question: What is Six Sigma? These concepts are also explained with detailed examples. \r\n', 'https://www.youtube.com/watch?v=s2HCrhNVfak', 6, '', '', '', '', '', 0, 0, 0, 0),
(6, 'Quality of Performance Overview', 'Quality of Performance Overview', 'https://www.youtube.com/watch?v=wKYnZYJi4A4&list=PLpEujd_oz5bPuRzNqyJJEq6mnbqxVpZtK', 2, '', '', '', '', '', 0, 0, 0, 0),
(8, 'Key Performance Indicator (KPI)', 'Quality HUB India is World’s leading and India’s # 01 online training platform offering professional courses in English and Hindi. We offer Training, Consultancy, and Project Management Services on Business Transformation, Operation & Business Excellence, Six Sigma, Lean Management, Management systems to name a few.', 'https://www.youtube.com/watch?v=9DNbZnynavw', 2, '', '', '', '', '', 0, 0, 0, 0),
(9, 'Grade 12 Quality of Performance Business Studies', 'Grade 12 Quality of Performance Business Studies', 'https://www.youtube.com/watch?v=JGGZ3V0Be3w', 2, '', '', '', '', '', 0, 0, 0, 0),
(10, 'What is Quality Assurance?', 'What is Quality Assurance?\r\n', 'https://www.youtube.com/watch?v=feX95rDXVkI', 3, '', '', '', '', '', 0, 0, 0, 0),
(11, 'Manual QA: Testing for Beginners Course Introduction', 'Manual QA: Testing for Beginners Course Introduction', 'https://www.youtube.com/watch?v=v3Qxf1PG0fo&list=PLfw_nI4u_6WM8200HlderALoIYKpSa4W6', 3, '', '', '', '', '', 0, 0, 0, 0),
(12, 'Quality assurance model & Cycle/Steps:Simple Explanation', 'Quality assurance model & Cycle/Steps:Simple Explanation\r\n', 'https://www.youtube.com/watch?v=Zq74Sc8cfJE', 3, '', '', '', '', '', 0, 0, 0, 0),
(13, 'What is Quality Management Maturity Program', 'What is Quality Management Maturity Program', 'https://www.youtube.com/watch?v=mOqhDjz3Ou0', 4, '', '', '', '', '', 0, 0, 0, 0),
(14, 'Quality System Maturity Model', 'Quality System Maturity Model\r\n', 'https://www.youtube.com/watch?v=vIncVKRT7M4', 4, '', '', '', '', '', 0, 0, 0, 0),
(15, 'Quality Management Maturity (QMM) Program', 'Quality Management Maturity (QMM) Program', 'https://www.youtube.com/watch?v=OiPYwGlZO94', 4, '', '', '', '', '', 0, 0, 0, 0),
(16, 'Quality Management ', 'Quality Management ', 'https://www.youtube.com/watch?v=Zan5d6j0s5A&list=PLim9gWjsjN-PrliJxhTAx2H93rJi1vLNm', 5, '', '', '', '', '', 0, 0, 0, 0),
(17, 'What is Total Quality management (TQM)', 'What is Total Quality management (TQM)', 'https://www.youtube.com/watch?v=renlXcpK9sk', 5, '', '', '', '', '', 0, 0, 0, 0),
(18, 'Total Quality Management Principles', 'Total Quality Management Principles', 'https://www.youtube.com/watch?v=OSz7MvkPhFI', 5, '', '', '', '', '', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `score_result`
--

CREATE TABLE `score_result` (
  `s_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `q_id` int(11) NOT NULL,
  `total_score` int(11) NOT NULL,
  `extra1` varchar(100) NOT NULL,
  `extra2` varchar(100) NOT NULL,
  `extra3` varchar(100) NOT NULL,
  `extra4` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `section_id` int(11) NOT NULL,
  `section_heading` varchar(100) NOT NULL,
  `details` text NOT NULL,
  `extra1` varchar(100) NOT NULL,
  `extra2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`section_id`, `section_heading`, `details`, `extra1`, `extra2`) VALUES
(1, 'Leadership\n', 'Leadership', '', ''),
(2, 'Strategy', 'Strategy', '', ''),
(3, 'Culture\n', 'Culture', '', ''),
(4, 'Employee\n', 'Employee', '', ''),
(5, 'Customer\n', 'Customer', '', ''),
(6, 'Production Processes\n', 'Production Processes', '', ''),
(7, 'Continuous Quality Improvement (CQI)', 'Continuous Quality Improvement (CQI)\r\n', '', ''),
(8, 'Driving Transformation', 'Driving Transformation\r\n', '', ''),
(9, 'Results', 'Results\r\n', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sub_section`
--

CREATE TABLE `sub_section` (
  `s_id` int(11) NOT NULL,
  `heading` varchar(200) NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_section`
--

INSERT INTO `sub_section` (`s_id`, `heading`, `details`) VALUES
(1, 'CQI', 'CQI'),
(2, 'Culture', 'Culture'),
(3, 'Customer', 'Customer'),
(4, 'Driving', 'Driving'),
(5, 'Employee', 'Employee'),
(6, 'Production Process', 'Production Process'),
(7, 'Quality', 'Quality'),
(8, 'Results', 'Results'),
(9, 'Strategy', 'Strategy'),
(10, 'Strategies', 'Strategies'),
(11, 'Transformation', 'Transformation'),
(12, 'Production ', 'Production '),
(13, 'Leadership', 'Leadership'),
(14, 'Driving Transformation', 'Driving Transformation\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `template`
--

CREATE TABLE `template` (
  `t_id` int(11) NOT NULL,
  `t_name` varchar(100) NOT NULL,
  `t_icon` varchar(300) NOT NULL,
  `t_files` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `template`
--

INSERT INTO `template` (`t_id`, `t_name`, `t_icon`, `t_files`) VALUES
(5, 'DMAIC checklist', 'quality-supervision-svgrepo-com.svg', 'DMAIC checklist.xls'),
(6, 'Dmaic Toolkit ASQ', 'setting-svgrepo-com.svg', 'dmaic-toolkit-ASQ.xls'),
(7, 'FMEA', 'thinking-svgrepo-com.svg', 'FMEA.xls'),
(9, 'Six Sigma Project Charter ', 'guide-for-rainbow-six-siege-svgrepo-com.svg', 'Six Sigma Project Charter Template v1.doc');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `organization_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone_no` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `status` int(11) NOT NULL,
  `extra_1` varchar(100) NOT NULL,
  `extra_2` varchar(100) NOT NULL,
  `extra_3` varchar(100) NOT NULL,
  `extra_4` varchar(100) NOT NULL,
  `extra_5` varchar(100) NOT NULL,
  `extra_6` varchar(100) NOT NULL,
  `extra_7` varchar(100) NOT NULL,
  `extra_8` varchar(100) NOT NULL,
  `extra_9` varchar(100) NOT NULL,
  `extra_10` varchar(100) NOT NULL,
  `tstamp` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `full_name`, `organization_name`, `email`, `password`, `phone_no`, `date`, `status`, `extra_1`, `extra_2`, `extra_3`, `extra_4`, `extra_5`, `extra_6`, `extra_7`, `extra_8`, `extra_9`, `extra_10`, `tstamp`) VALUES
(1, 'hello', 'helo', 'iashdasid@fasj', 'sfsaj', '123456', '2023-10-05', 0, '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(2, 'Hammad', 'HMA', 'hmmadjamil@gmail.com', '12345', '0302028145', '2023-10-27', 1, '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(3, 'Hammad', 'HMA', 'hmmadjamil@gmail.com', '1', '0302028145', '2023-10-27', 0, '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(4, 'asd', 'as', 'abdulhaseeb0273850@gmail.com', 'asd', '23123123', '2023-10-26', 0, '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(5, 'qwqw', 'asd', 'abdulhaseeb0273850@gmail.com', 'asd', '2312312', '2023-10-19', 0, '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(9, 'irtaza', 'irtaza', 'oirtaza@gmail.com', 'oirtaza', '13456846584', '2023-11-10', 0, '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(10, 'irtaza', 'irtaza', 'irtaza@gmail.com', 'irtaza@gmail.com', '102354641302', '2023-10-11', 0, '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `cycle_phase`
--
ALTER TABLE `cycle_phase`
  ADD PRIMARY KEY (`phase_id`);

--
-- Indexes for table `deming_cycle`
--
ALTER TABLE `deming_cycle`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `library_title`
--
ALTER TABLE `library_title`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `quiz_answer`
--
ALTER TABLE `quiz_answer`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `quiz_question`
--
ALTER TABLE `quiz_question`
  ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `sap_library`
--
ALTER TABLE `sap_library`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `score_result`
--
ALTER TABLE `score_result`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`section_id`);

--
-- Indexes for table `sub_section`
--
ALTER TABLE `sub_section`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `template`
--
ALTER TABLE `template`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cycle_phase`
--
ALTER TABLE `cycle_phase`
  MODIFY `phase_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `deming_cycle`
--
ALTER TABLE `deming_cycle`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `library_title`
--
ALTER TABLE `library_title`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `quiz_answer`
--
ALTER TABLE `quiz_answer`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `quiz_question`
--
ALTER TABLE `quiz_question`
  MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=334;

--
-- AUTO_INCREMENT for table `sap_library`
--
ALTER TABLE `sap_library`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `score_result`
--
ALTER TABLE `score_result`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `section_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sub_section`
--
ALTER TABLE `sub_section`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `template`
--
ALTER TABLE `template`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

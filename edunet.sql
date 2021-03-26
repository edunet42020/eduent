-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2020 at 10:16 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edunet`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `a_id` int(11) NOT NULL,
  `a_name` varchar(20) NOT NULL,
  `emailid` varchar(60) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`a_id`, `a_name`, `emailid`, `password`) VALUES
(1, 'Chintu Thakkar', 'brindachanchad00@gmail.com', 'YnJpbmRhNTUwMA==');

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`
--

CREATE TABLE `tblcategory` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `category_photo_path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcategory`
--

INSERT INTO `tblcategory` (`category_id`, `category_name`, `category_photo_path`) VALUES
(3, 'design', '15917312139468809195edfe40d728e9download.png'),
(5, 'Operating System', '15917811896519576025ee0a74584795256758_e35d_5.jpg'),
(6, 'programing', '1592027077145030595ee467c52de07programing.jpg'),
(9, 'security', '15928313572439681215ef0ad7d03b49download.jpg'),
(10, 'game development', '159354419221301733045efb8e00a1761download.jpg'),
(11, 'hardware', '15935442334834141415efb8e2926096download.jpg'),
(12, 'network', '159354437314582024635efb8eb5f2901download.jpg'),
(13, 'other', '15927142552312223605eeee40fabd5fdownload.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tblcertificate`
--

CREATE TABLE `tblcertificate` (
  `certificate_id` int(11) NOT NULL,
  `serial_no` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- Error reading data for table edunet.tblcertificate: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `edunet`.`tblcertificate`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `tblcourse`
--

CREATE TABLE `tblcourse` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(20) NOT NULL,
  `course_description` varchar(50) NOT NULL,
  `course_full_description` varchar(200) NOT NULL,
  `course_photo_path` varchar(150) NOT NULL,
  `course_status` varchar(20) NOT NULL,
  `course_start_date` date NOT NULL,
  `course_end_date` date NOT NULL,
  `course_prize` int(11) NOT NULL,
  `course_t_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcourse`
--

INSERT INTO `tblcourse` (`course_id`, `course_name`, `course_description`, `course_full_description`, `course_photo_path`, `course_status`, `course_start_date`, `course_end_date`, `course_prize`, `course_t_id`, `category_id`) VALUES
(1011, 'programing c', 'course for 1 month ', 'fregregre', '15921559775029724405ee65f49b9d2115920275221648089305ee4698224d0fc.jpg', 'Active', '2020-07-30', '2020-08-30', 300, 1014, 6),
(1013, 'unix course', 'course for unix', 'Introduction to UNIX Course. In this course, students study the fundamentals of the UNIX operating system, such as file editing, data retrieval, executing processes and creating directories. ', '1592167571313845245ee68c93c4f11675244_6b34_3.jpg', 'De-Active', '2020-06-30', '2020-08-03', 250, 1015, 5),
(1015, 'Spring & Hibernate', 'The Spring Framework is an application framework', 'The frameworks core features can be used by any Java application, but there are extensions for building web applications on top of the Java EE platform. ', '15926602641376079655eee1128eccaadownload.png', 'Active', '2020-07-18', '2020-08-20', 250, 1032, 6),
(1016, 'Bootstrap', 'In this course, you’ll see how Bootstrap makes it ', 'You’ll learn about Bootstrap’s grid system to construct complex layouts. Then, you’ll style and populate your site using Bootstrap’s utility classes and components.', '159354296913343299375efb893920dacdownload (1).jpg', 'De-Active', '2020-07-05', '2020-08-05', 350, 1032, 3),
(1018, 'mysql using cmd', 'Learn how to Create, Use and Handle a MySQL.', 'MySQL Database Being the Second most widely used Relational Database makes it one of the database to learn if you are looking forward to develop a database driven application.', '159608490814205462305f2252ac09e27download.png', 'Active', '2020-08-15', '2020-09-15', 120, 1036, 13),
(1019, 'art for videogame', 'Imagine how cool your game would look in pixel art', 'This section was added by popular demand as something that was missing from the course. Thank you for you patience, I wanted to make sure everything was as good as I could make it. Enjoy!', '15967767694329097055f2ce14194172397936_513f_3.jpg', 'Active', '2020-09-23', '2020-10-23', 420, 1015, 10);

-- --------------------------------------------------------

--
-- Table structure for table `tblcredit`
--

CREATE TABLE `tblcredit` (
  `credit_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `no_of_credit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcredit`
--

INSERT INTO `tblcredit` (`credit_id`, `u_id`, `no_of_credit`) VALUES
(6, 10050, 300),
(9, 10060, 21);

-- --------------------------------------------------------

--
-- Table structure for table `tblcreditdemo`
--

CREATE TABLE `tblcreditdemo` (
  `id` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblcreditexam`
--

CREATE TABLE `tblcreditexam` (
  `ce_id` int(11) NOT NULL,
  `ce_question` varchar(200) NOT NULL,
  `ce_op1` varchar(50) NOT NULL,
  `ce_op2` varchar(50) NOT NULL,
  `ce_op3` varchar(50) NOT NULL,
  `ce_op4` varchar(50) NOT NULL,
  `ans` int(11) NOT NULL,
  `ce_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcreditexam`
--

INSERT INTO `tblcreditexam` (`ce_id`, `ce_question`, `ce_op1`, `ce_op2`, `ce_op3`, `ce_op4`, `ans`, `ce_date`) VALUES
(99999999, 'who is the prime minister of India?', 'Narendra Modi', 'Rahul Gandhi', 'Amit Shah', 'Vijay Rupani', 3, '2020-08-10'),
(100000000, 'which of the following section does not exits in a slide layout?', 'title', 'list', 'animation', 'chart', 3, '2020-08-10'),
(100000001, 'who is father of the computer?', 'Bill Gates', 'Mark zukerburg', 'Charles Babej', 'None of the above', 3, '2020-08-10'),
(100000002, 'who is the founder of plastic??', 'Alekzander parkis', 'Thomas alwa adison', 'vikram sarabhai', 'Newton', 1, '2020-08-10'),
(100000003, 'world\'s biggest statue?', 'statue of liberty', 'statue of shivaji', 'statue of trump', 'statue of unity', 4, '2020-08-10'),
(100000004, 'Who is the father of Geometry?', 'Aristotle', 'Euclid', 'Pythagoras', 'Kepler', 2, '2020-08-10'),
(100000005, 'Who was known as Iron man of India?', 'Govind Ballabh Pant', 'Jawaharlal Nehru', 'Subhash Chandra Bose', 'Sardar Vallabhbhai Patel', 4, '2020-08-10'),
(100000006, 'What is part of a database that holds only one type of information?', 'Report', 'Field', 'Record', 'File', 2, '2020-08-10'),
(100000007, '\'.MOV\' extension refers usually to what kind of file?', 'Image file', 'Animation/movie file', 'Audio file', 'MS Office document', 2, '2020-08-10'),
(100000012, '	 In which decade was the American Institute of Electrical Engineers (AIEE) founded?', '1880s', '1440s', '1234s', '12340', 1, '2020-08-10');

-- --------------------------------------------------------

--
-- Table structure for table `tblevent`
--

CREATE TABLE `tblevent` (
  `event_id` int(11) NOT NULL,
  `event_name` varchar(50) NOT NULL,
  `event_place` varchar(50) NOT NULL,
  `event_description` varchar(150) NOT NULL,
  `event_photo_path` varchar(100) NOT NULL,
  `event_start_regestration_date` date NOT NULL,
  `event_end_regestration_date` date NOT NULL,
  `event_date` date NOT NULL,
  `event_time` time NOT NULL,
  `event_fees` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblevent`
--

INSERT INTO `tblevent` (`event_id`, `event_name`, `event_place`, `event_description`, `event_photo_path`, `event_start_regestration_date`, `event_end_regestration_date`, `event_date`, `event_time`, `event_fees`) VALUES
(10021, 'IOT development ', 'Benguluru', 'It is the best workshop for student who wants to make their future bright on IOT', '15921680146474616685ee68e4e33bf4download.jpg', '2020-08-07', '2020-08-14', '2020-08-21', '16:00:00', 250),
(10022, 'how to make money', 'surat', 'best workshop for student who wants to make money from their home', '1592168282633320185ee68f5add3d1download (1).png', '2020-07-31', '2020-08-07', '2020-08-14', '15:30:00', 250),
(10039, 'python with djano', 'Chennai', 'De?ne your data models entirely in Python. You get a rich, dynamic database-access API for free — but you can still write SQL if needed.', '15924647265413249735eeb1556e13eddownload (1).png', '2020-07-02', '2020-07-09', '2020-07-16', '14:00:00', 150),
(10040, 'Oracle Openworld', 'Pune,maharashtra', 'Oracle OpenWorld is an annual convention for business decision-makers, IT management, and line-of-business end users. ', '159351064914624827325efb0af92cb11download.jpg', '2020-08-12', '2020-08-19', '2020-08-26', '15:30:00', 250);

-- --------------------------------------------------------

--
-- Table structure for table `tblexam`
--

CREATE TABLE `tblexam` (
  `exam_id` int(11) NOT NULL,
  `exam_no` varchar(20) NOT NULL,
  `exam_name` varchar(150) NOT NULL,
  `week_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblexam`
--

INSERT INTO `tblexam` (`exam_id`, `exam_no`, `exam_name`, `week_id`, `course_id`) VALUES
(122342, 'exam 1', 'Basic Concept Questions', 10000008, 1011),
(122343, 'exam 2', 'Some Important Statements Questions', 10000009, 1011),
(122344, 'exam 3', 'Question Related To Looping Statement', 10000010, 1011),
(122345, 'exam 4', 'Question For Function and Array to Logical', 10000011, 1011),
(122352, 'exam 1', 'exam of Basic Commands and Utilities.', 10000012, 1013),
(122353, 'exam 2', 'exam of File System, the Shell, and Vim Editor.', 10000013, 1013),
(122354, 'exam 3', 'exam of Bash Shell, Tcsh Shell, and Shell Programming', 10000014, 1013),
(122355, 'exam 4', 'exam of Skill Standards', 10000015, 1013),
(122356, 'exam 1', 'introduction bootstarp', 10000016, 1016),
(122357, 'exam 2', 'exam of nested rows and columns  of bootstarp', 10000017, 1016),
(122358, 'exam 3', 'exam of blockquotes and lists of Bootstrap', 10000018, 1016),
(122359, 'exam 4', 'exam of icons of Bootstrap', 10000019, 1016),
(122360, 'exam 1', 'exam of introduction', 10000020, 1018),
(122361, 'exam 2', 'exam of setting environment', 10000021, 1018),
(122362, 'exam 3', 'exam of beginning mysql', 10000024, 1018),
(122363, 'exam 4', 'last exam', 10000023, 1018);

-- --------------------------------------------------------

--
-- Table structure for table `tblfaculty`
--

CREATE TABLE `tblfaculty` (
  `f_id` int(11) NOT NULL,
  `f_name` varchar(20) NOT NULL,
  `f_emailid` varchar(100) NOT NULL,
  `f_ph_no` bigint(11) NOT NULL,
  `f_description` varchar(300) NOT NULL,
  `f_photo_path` varchar(150) NOT NULL,
  `f_qualification` varchar(20) NOT NULL,
  `f_pwd` varchar(30) NOT NULL,
  `f_status` varchar(20) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblfaculty`
--

INSERT INTO `tblfaculty` (`f_id`, `f_name`, `f_emailid`, `f_ph_no`, `f_description`, `f_photo_path`, `f_qualification`, `f_pwd`, `f_status`) VALUES
(1014, 'Rekha pichholiya', 'rekhapichholiya@gmail.com', 7202021094, 'I am expert in Artificial Intelligence', '15959188529243407285f1fca04f1ed7IMG_7495.JPG', 'bca,mca', 'cmVraGExMjM0NQ==', 'Active'),
(1015, 'Dharani Gandhi', 'dharanigandhi@gmail.com', 7202021094, 'i am java expert', '15935411847910031775efb82407e0adIMG-20190203-WA0037.jpg', 'bca,mca', 'ZGhhcmFuaTEyMzQ1', 'Active'),
(1032, 'Pratiksha Patel', 'pratikshapatel@gmail.com', 7202021094, 'I am expert in java .... you have any doubts regarding to java you can contact me', '159354066612153293605efb803ae90ffIMG_3908.JPG', 'bca,mca,phd', 'cHJhdGlrc2hhMTIzNDU=', 'Active'),
(1036, 'Riddhi Vyas', 'riddhivyas@gmail.com', 7202021094, 'I am expert in every field', '15935408706377695695efb8106ed12bIMG_3943.JPG', 'Bca,Mca,Mphill', 'cmlkZGhpMTIzNDU=', 'Active'),
(1037, 'Piyush Arora', 'piyusharora@gmail.com', 7202021094, 'I am expert in spring framework', '159354097710164750955efb81711b97cIMG_3925.JPG', 'Btech,Mtech', 'cGl5dXNoMTIzNDU=', 'De-Active');

-- --------------------------------------------------------

--
-- Table structure for table `tblfeedback`
--

CREATE TABLE `tblfeedback` (
  `feedback_id` int(11) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblfeedback`
--

INSERT INTO `tblfeedback` (`feedback_id`, `email_id`, `message`) VALUES
(100000003, 'brindachanchad00@gmail.com', 'best website ever i have ever seen in my life\r\n'),
(100000004, 'rajni@gmail.com', 'keep it up edunet'),
(100000005, 'priya@gmail.com', 'love the website'),
(100000006, 'eva@gmail.com', 'love the edunet site most......'),
(100000007, 'brindachanchad55@gmail.com', 'best'),
(100000008, 'brinda@gmail.com', 'nice one'),
(100000009, 'brinda@gmail.com', 'best website\r\n'),
(100000010, 'edunet42020@gmail.com', 'bretghbvc'),
(100000012, 'rajni@gmail.com', 'gfgvcrgyft');

-- --------------------------------------------------------

--
-- Table structure for table `tblmessage`
--

CREATE TABLE `tblmessage` (
  `m_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `f_id` int(11) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblmessage`
--

INSERT INTO `tblmessage` (`m_id`, `user_id`, `f_id`, `email_id`, `message`) VALUES
(14, 10050, 1014, 'brindachanchad00@gmail.com', 'i just wanted to know how to run c program from macbook');

-- --------------------------------------------------------

--
-- Table structure for table `tblnews`
--

CREATE TABLE `tblnews` (
  `news_id` int(11) NOT NULL,
  `news_title` varchar(50) NOT NULL,
  `news_description` varchar(400) NOT NULL,
  `news_date` date NOT NULL,
  `news_image_path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblnews`
--

INSERT INTO `tblnews` (`news_id`, `news_title`, `news_description`, `news_date`, `news_image_path`) VALUES
(1000000005, 'Can Zuckerberg really make a privacy-friendly Face', 'Facebook grew into a colossus vacuuming up peoples information in every possible way and dissecting it to shoot targeted ads back at them.', '2020-08-09', '15919855227999935315ee3c572e84e268303346.jpg'),
(1000000007, ' New Qualcomm 5G platform to create next-gen robot', 'Chipmaker Qualcomm has unveiled a new 5G and AI-enabled robotics platform that would help developers and manufacturers create next generation of high-compute, low-power robots and drones for the consumer, enterprise, defense, industrial and professional service sectors.', '2020-08-10', '159246537911446264465eeb17e3ae36776439912 (1).jpg'),
(1000000008, 'Chinese apps banned in India', 'India’s move to ban 59 Chinese apps including TikTok found widespread support among the startup and tech community.', '2020-07-28', '15935475267374165405efb9b0673f4076708386.jpg'),
(1000000009, 'Australia to spend nearly $1 billion to boost cybe', 'SYDNEY - Australia will spend A$1.35 billion ($926.1 million) over the next 10 years to boost its cyber security defences, Prime Minister Scott Morrison said on Tuesday, as Canberra seeks to combat a wave of attacks.\r\n\r\nThe announcement comes just weeks after Australia said a \"sophisticated state-based actor\" has been attacking all levels of the government, political bodies, essential service prov', '2020-07-22', '15935475811817827425efb9b3d09361security.jpg'),
(1000000010, 'Cyber attack on NHAI email server, no data loss', ' The National Highways Authority of India (NHAI) on Monday said a cyber attack took place on its email server on Sunday night but prompt action resulted in no data loss. As a precaution, the Authority had shut down the server.\r\n\r\n\"A ransom ware attack on NHAI email server took place yesterday night. The attack was foiled by the security system and email servers were shut down from safety point of ', '2020-07-17', '15935476522782040015efb9b84c311276702372.jpg'),
(1000000011, 'Chinese malware Golang  targeting Windows', 'Cyber-security researchers have identified a new variant of cryptominer malware from China-based hackers that is targeting both Windows and Linux machines.', '2020-08-08', '15935478769980580505efb9c6409a8176702355.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tblpass`
--

CREATE TABLE `tblpass` (
  `pass_id` int(11) NOT NULL,
  `pass_no` int(11) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `event_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblpass`
--

INSERT INTO `tblpass` (`pass_id`, `pass_no`, `email_id`, `event_id`) VALUES
(13, 728396159, 'brindachanchad00@gmail.com', 10022),
(14, 946509103, 'rajnivirani@gmail.com', 10040),
(15, 736824935, 'brindachanchad00@gmail.com', 10040),
(16, 1228219043, '', 10040),
(17, 1481281718, '', 10040),
(18, 1052726042, 'brindachanchad00@gmail.com', 10040),
(19, 1017112039, 'brindachanchad00@gmail.com', 10040),
(20, 2133279407, 'bhumibhuva@gmail.com', 10040),
(21, 925814830, 'brindachanchad00@gmail.com', 10021);

-- --------------------------------------------------------

--
-- Table structure for table `tblpaymentcourse`
--

CREATE TABLE `tblpaymentcourse` (
  `payment_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblpaymentcourse`
--

INSERT INTO `tblpaymentcourse` (`payment_id`, `amount`, `user_id`, `course_id`) VALUES
(9, 300, 10050, 1011),
(10, 300, 10050, 1011),
(11, 225, 10047, 1013),
(12, 300, 10047, 1011),
(13, 250, 10052, 1013),
(14, 350, 10050, 1016),
(17, 120, 10059, 1018);

-- --------------------------------------------------------

--
-- Table structure for table `tblpaymentevent`
--

CREATE TABLE `tblpaymentevent` (
  `p_id` int(11) NOT NULL,
  `p_ammount` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `event_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpaymentevent`
--

INSERT INTO `tblpaymentevent` (`p_id`, `p_ammount`, `first_name`, `email`, `event_id`) VALUES
(11181, 250, 'brinda', 'brindachanchad00@gmail.com', 10022),
(11182, 250, 'brinda', 'brindachanchad00@gmail.com', 10022),
(11183, 250, 'brinda', 'brindachanchad00@gmail.com', 10022),
(11184, 250, 'rajni', 'rajnivirani@gmail.com', 10040),
(11185, 250, 'brinda', 'brindachanchad00@gmail.com', 10040),
(11186, 250, 'brinda', 'brindachanchad00@gmail.com', 10040),
(11187, 250, 'Riddhi Vyas', 'brindachanchad00@gmail.com', 10040),
(11188, 250, 'brinda', 'brindachanchad00@gmail.com', 10040),
(11189, 250, 'bhumi', 'bhumibhuva@gmail.com', 10040),
(11190, 250, 'Brinda', 'brindachanchad00@gmail.com', 10021);

-- --------------------------------------------------------

--
-- Table structure for table `tblpdf`
--

CREATE TABLE `tblpdf` (
  `pdf_id` int(11) NOT NULL,
  `pdf_name` varchar(30) NOT NULL,
  `pdf_path` varchar(200) NOT NULL,
  `pdf_image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpdf`
--

INSERT INTO `tblpdf` (`pdf_id`, `pdf_name`, `pdf_path`, `pdf_image`) VALUES
(499, 'advance c', 'c.pdf', 'c.jpg'),
(501, 'Wearble Devices', '15918959717852044945ee267a37e92534. Child Safety Wearable Device.pdf', '15918959717852044945ee267a37e925download (1).jpg'),
(502, 'Machine Learning', '159198396916853965045ee3bf6174c1bMachineLearning.pdf', '159198396916853965045ee3bf6174c1bdownload (2).jpg'),
(503, 'java Progrmming', '15924642199861931885eeb135bea792JavaProgrammingninthedition.pdf', '15924642199861931885eeb135bea792java.PNG'),
(504, 'java complete reference', '15928094587101673765ef057f214b95Book Java 2--Complete Reference (5th Ed 2002).pdf', '15928094587101673765ef057f214b95download (1).jpg'),
(505, 'Programming with Java', '159280955114302594275ef0584f1668dBook Balagurusamy Programming with Java A Primer,3E.pdf', '159280955114302594275ef0584f1668ddownload (7).jpg'),
(506, 'java tutorials point', '15928095841262433335ef05870b23c8java_tutorial.pdf', '15928095841262433335ef05870b23c8download (2).jpg'),
(507, 'vb.net tutorial', '15928096272328413135ef0589b7108bvb.net_tutorial.pdf', '15928096272328413135ef0589b7108bdownload (3).jpg'),
(508, 'html tutorials point', '15928096608572439465ef058bcee618html_tutorial.pdf', '15928096608572439465ef058bcee618download (4).jpg'),
(509, 'javascript tutorial', '15928096971705188815ef058e195ca3javascript_tutorial.pdf', '15928096971705188815ef058e195ca3download (5).jpg'),
(510, 'computer network', '15928097335275446675ef059050b43bCN_PPT_1_VSP.pdf', '15928097335275446675ef059050b43bdownload (6).jpg'),
(511, 'PythonByJulien Danjou', '1593327689613880275ef84049a056fPythonByJulien Danjou.pdf', '1593327689613880275ef84049a056fdownload.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tblquestion`
--

CREATE TABLE `tblquestion` (
  `qtf_id` int(11) NOT NULL,
  `qtf_question` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblquestion`
--

INSERT INTO `tblquestion` (`qtf_id`, `qtf_question`) VALUES
(1, 'mcqs'),
(2, 'multi select'),
(3, 'Descriptive');

-- --------------------------------------------------------

--
-- Table structure for table `tblquestionmcq`
--

CREATE TABLE `tblquestionmcq` (
  `q_id` int(11) NOT NULL,
  `question` varchar(500) NOT NULL,
  `question_type` int(11) NOT NULL,
  `option1` varchar(20) NOT NULL,
  `option2` varchar(20) NOT NULL,
  `option3` varchar(20) NOT NULL,
  `option4` varchar(20) NOT NULL,
  `answer` varchar(20) NOT NULL,
  `explanation` varchar(150) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblquestionmcq`
--

INSERT INTO `tblquestionmcq` (`q_id`, `question`, `question_type`, `option1`, `option2`, `option3`, `option4`, `answer`, `explanation`, `exam_id`, `course_id`) VALUES
(123, 'The format identifier ‘%i’ is also used for _____ data type.', 1, 'char', 'int', 'float', 'double', '2', 'Both %d and %i can be used as a format identifier for int data type.', 122342, 1011),
(124, ' Which data type is most suitable for storing a number 65000 in a 32-bit system?', 1, ' signed short', 'unsigned short', 'long', ' int', '2', '65000 comes in the range of short (16-bit) which occupies the least memory. Signed short ranges from -32768 to 32767 and hence we should use unsigned ', 122342, 1011),
(125, 'Which of the following is a User-defined data type?', 1, 'typedef int Boolean', ' typedef enum {Mon, ', 'struct {char name[10', 'd) all of the mentio', '4', ' typedef and struct are used to define user-defined data types.', 122342, 1011),
(126, 'What is the size of an int data type?', 1, '4 bytes', '8 bytes', 'Depends on the syste', 'Cannot be determined', '3', 'he size of the data types depend on the system.', 122342, 1011),
(127, 'What is short int in C programming?', 1, 'The basic data type ', 'The basic data type ', 'Short is the qualifi', 'All of the mentioned', '3', ' None.', 122342, 1011),
(128, 'Which is correct with respect to the size of the data types?', 1, 'char > int > float', 'int > char > float', ' char < int < double', 'double > char > int', '3', 'har has less bytes than int and int has less bytes than double in any system', 122342, 1011),
(129, 'Which of the data types has the size that is variable?', 1, 'int', 'struct', ' float', ' double', '2', ' Since the size of the structure depends on its fields, it has a variable size.', 122342, 1011),
(130, 'C99 standard guarantees uniqueness of __________ characters for internal names.', 1, '31', '63', '12', '14', '2', 'ISO C99 compiler may consider only first 63 characters for internal names.', 122342, 1011),
(131, '. Which of the following is not a valid variable name declaration?', 1, 'int __a3;', 'int __3a;', ' int __A3;', ' None of the mention', '4', ' None.', 122342, 1011),
(132, 'All keywords in C are in ____________', 1, 'lowercase letters', 'uppercase letters', 'CamelCase letters', 'None of the mentione', '1', ' None.', 122342, 1011),
(133, ' What is the precedence of arithmetic operators (from highest to lowest)?', 1, ' %, *, /, +, –', ' %, +, /, *, –', '+, -, %, *, /', ' %, +, -, *, /', '1', ' None.', 122343, 1011),
(134, ' Which of the following is not an arithmetic operation?', 1, 'a * = 10;', ' a / = 10;', ' a ! = 10;', ' a % = 10;', '3', ' None.', 122343, 1011),
(135, 'Which of the following data type will throw an error on modulus operation(%)?', 1, 'char', 'short', 'int', 'float', '4', ' None.', 122343, 1011),
(136, 'Which among the following are the fundamental arithmetic operators, i.e, performing the desired operation can be done using that operator only?', 1, '+, –', '+, -, %', '+, -, *, /', '+, -, *, /, %', '1', ' None.', 122343, 1011),
(137, 'Operator % in C Language is called.?', 1, 'Percentage Operator', 'Quotient Operator', 'Modulus', 'Division', '3', 'Operator % is called Modulus or Modular or Modulo Division operator in C. It gives the reminder of the division.', 122343, 1011),
(138, 'Output of an arithmetic expression with integers and real numbers is ___ by default.?', 1, 'Integer', ' Real number', 'Depends on the numbe', 'None of the above', '2', 'Any arithmetic operation with both integers and real numbers yield output as Real number only.', 122343, 1011),
(139, 'Choose a right statement.  int a = 10 + 4.867;', 1, ' a = 10', ' a = 14.867', 'a = 14', 'compiler error.', '3', 'a is an int variable. So 10+4.867 = 14.867 is truncated to 14 and assigned to a.', 122343, 1011),
(140, 'Choose a right statement.  int a = 3.5 + 4.5;', 1, ' a = 0', ' a = 7', ' a = 8', ' a = 8.0', '3', '3.5 + 4.5 = 8.0 is a real number. So it is converted to downgraded to int value. So a = 8.', 122343, 1011),
(141, 'Choose a right statement.  float var = 3.5 + 4.5;', 1, 'var = 8.0', 'var = 8', 'var = 7', 'var = 0.0', '1', 'A float variable can hold a real number.', 122343, 1011),
(142, 'Choose a right statement.   int var = 3.5;', 1, ' a = 3.5', ' a = 3', ' a = 0', 'Compiler error', '2', 'a stores only integer value. So, 3.5 is truncated to 3.', 122343, 1011),
(144, 'which symbol will be used with grep command to match the patern pat  at the beginning of the line?', 1, '^pat', '$pat', 'pat$', 'pat^', '1', '^ is used to match pattern at the begining of the line', 122352, 1013),
(145, 'which command is used to sort the lines of data in a file in reverse order?', 1, 'sort', 'sh', 'st', 'sort -r', '4', '-r option of sort command is used for reverse sorting', 122352, 1013),
(146, 'which command is used to display the top of file', 1, 'cat', 'head ', 'more ', 'grep', '2', 'head is used to display file from the top', 122352, 1013),
(147, 'which command is used to remove directory?', 1, 'rd', 'rmdir', 'dldir', 'rdir', '2', 'rmdir is used to remove directory', 122352, 1013),
(148, 'which of the following keys is used to replace a single character with  new text?', 1, 'S', 's', 'r', 'C', '2', 's is used to replace single character', 122352, 1013),
(149, 'which command is used  to extract specific columns from the file?', 1, 'cat', 'cut', 'grep', 'paste', '2', 'cut is used to extract specific columns from the file', 122352, 1013),
(150, 'which of the following files will displayed by this command cat *ch* ', 1, 'patch', 'catch', '.ch', 'all of the above', '4', 'none', 122352, 1013),
(151, 'which of the following is not communicaion command?', 1, 'write', 'mesg', 'mail', 'grep', '4', 'grep is command-line utility', 122352, 1013),
(152, 'which command is used to remove file?', 1, 'remove', 'rm', 'mv', 'del', '2', 'rm is used to remove file', 122352, 1013),
(153, 'the agency that sits between the user and the UNIX system is called the', 1, 'logic', 'profile', 'shell', 'erxc', '3', 'the agency that sits between the user and the UNIX system is called the shell', 122352, 1013),
(154, 'single line comment', 1, '//', '/* */', '@', '#', '1', '// is used for single line comment', 122344, 1011),
(155, 'multi line comment', 1, '//', '/* */', '@', '#', '1', '/* bhedfb*/', 122345, 1011),
(156, 'bootstarp used for', 1, 'responsive website', 'backend', 'development', 'Nothing', '1', 'bootstarp used for making website responsive', 122356, 1016),
(157, 'Character data can be stored as ______________', 1, ' Fixed length string', 'Variable length stri', 'Either Fixed or Vari', 'None of the mentione', '3', ' To store character data we can use two definitions Char(20) /*fixed length */ Varchar(20) /* variable length */', 122360, 1018);

-- --------------------------------------------------------

--
-- Table structure for table `tblresult`
--

CREATE TABLE `tblresult` (
  `result_id` int(11) NOT NULL,
  `r_score` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblresult`
--

INSERT INTO `tblresult` (`result_id`, `r_score`, `user_id`, `course_id`) VALUES
(17, 32, 10050, 1011),
(18, 60, 10047, 1013),
(19, 14, 10047, 1011),
(21, 0, 10052, 1013),
(22, 95, 10050, 1013),
(23, 25, 10050, 1016);

-- --------------------------------------------------------

--
-- Table structure for table `tblscore`
--

CREATE TABLE `tblscore` (
  `score_id` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `no_of_attempt` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblscore`
--

INSERT INTO `tblscore` (`score_id`, `score`, `no_of_attempt`, `question_id`, `exam_id`, `user_id`) VALUES
(100000147, 1, 1, 127, 122342, 10050),
(100000148, 1, 1, 132, 122342, 10050),
(100000149, 1, 1, 124, 122342, 10050),
(100000150, 1, 1, 125, 122342, 10050),
(100000151, 0, 1, 123, 122342, 10050),
(100000152, 0, 1, 128, 122342, 10050),
(100000153, 1, 1, 130, 122342, 10050),
(100000154, 0, 1, 131, 122342, 10050),
(100000155, 1, 1, 129, 122342, 10050),
(100000156, 1, 1, 126, 122342, 10050),
(100000157, 0, 1, 137, 122343, 10047),
(100000158, 1, 1, 141, 122343, 10047),
(100000159, 0, 1, 139, 122343, 10047),
(100000160, 0, 1, 142, 122343, 10047),
(100000161, 0, 1, 133, 122343, 10047),
(100000162, 1, 1, 138, 122343, 10047),
(100000163, 0, 1, 135, 122343, 10047),
(100000164, 0, 1, 136, 122343, 10047),
(100000165, 0, 1, 140, 122343, 10047),
(100000166, 1, 1, 134, 122343, 10047);

-- --------------------------------------------------------

--
-- Table structure for table `tblsyllabus`
--

CREATE TABLE `tblsyllabus` (
  `syllabus_id` int(11) NOT NULL,
  `chap1` varchar(50) NOT NULL,
  `chap2` varchar(50) NOT NULL,
  `chap3` varchar(50) NOT NULL,
  `chap4` varchar(50) NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsyllabus`
--

INSERT INTO `tblsyllabus` (`syllabus_id`, `chap1`, `chap2`, `chap3`, `chap4`, `course_id`) VALUES
(6, 'Set Up enviourment with code block', 'Programming Language And Programming Structure', 'Conditional Statements', 'Looping Statements', 1011),
(7, 'Basic Commands and Utilities.', 'File System, the Shell, and Vim Editor.', 'Bash Shell, Tcsh Shell, and Shell Programming.', 'Skill Standards:', 1013),
(8, 'Introduction to Bootstrap', 'bootstrap nested rows and columns', 'Bootstrap blockquotes and lists', 'Bootstrap icons', 1016),
(10, 'Introduction to MySql', 'getting the development environment ready', 'Beggining with mysql basics', 'Time to jump in for more ', 1018),
(11, 'Learn the funcations for creating anything in pixe', 'Create solid line work and stunning shading', 'Create tiles in the top down RPG style', 'Create create characters and animated them in minu', 1019);

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `u_id` int(11) NOT NULL,
  `u_first_name` varchar(20) NOT NULL,
  `u_middle_name` varchar(20) NOT NULL,
  `u_last_name` varchar(20) NOT NULL,
  `u_photo_path` varchar(150) NOT NULL,
  `u_city` varchar(20) NOT NULL,
  `u_ph_no` bigint(12) NOT NULL,
  `u_email_id` varchar(50) NOT NULL,
  `u_password` varchar(30) NOT NULL,
  `u_status` varchar(20) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`u_id`, `u_first_name`, `u_middle_name`, `u_last_name`, `u_photo_path`, `u_city`, `u_ph_no`, `u_email_id`, `u_password`, `u_status`) VALUES
(10047, 'priya', 'vinubhai', 'borda', '158753670419442499905e9fe340541eeIMG_20190806_185649.jpg', 'surat', 7984246906, 'priyavborda@gmail.com', 'cHJpeWExMjM0NQ==', 'Active'),
(10050, 'Brinda', 'Rajnibhai', 'Chanchad', '1589262876135905135eba3a1cba1f78.jpg', 'Surat', 7202021094, 'brindachanchad00@gmail.com', 'YnJpbmRhNTUwMA==', 'Active'),
(10052, 'rajni', 'ashokbhai', 'virani', '15935101863911922205efb092aa1f4dScreenshot_20200630-145322_Instagram.jpg', 'surat', 9876543210, 'rajnivirani@gmail.com', 'cmFqbmkxMjM0NQ==', 'Active'),
(10059, 'eva', 'denisbhai', 'chanchad', '158711573810543733075e9976da04720IMG-20180812-WA0024.jpg', 'surat', 7202021094, 'eva@gmail.com', 'ZXZhMTIzNDU2', 'Active'),
(10060, 'Dipali', 'asbhai', 'Hirpara', '158723404319952020425e9b44fba9bb0IMG_2012.JPG', 'surat', 7202021094, 'dipali@gmail.com', 'YnJpbmRhNTUwMA==', 'Deactive'),
(10061, 'bhumi', 'ashokbhai', 'bhuva', '159354203321422955965efb859178881IMG_7215.JPG', 'mumbai', 7202021094, 'bhumibhuva@gmail.com', 'Ymh1bWkxMjM0NQ==', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tblusercourse`
--

CREATE TABLE `tblusercourse` (
  `course_user_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblusercourse`
--

INSERT INTO `tblusercourse` (`course_user_id`, `user_id`, `course_id`, `payment_id`) VALUES
(10000011, 10050, 1011, 9),
(10000012, 10050, 1013, 11),
(10000013, 10047, 1011, 12),
(10000014, 10052, 1013, 13),
(10000015, 10050, 1016, 14),
(10000018, 10059, 1018, 17);

-- --------------------------------------------------------

--
-- Table structure for table `tbluserevent`
--

CREATE TABLE `tbluserevent` (
  `usereventid` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbluserevent`
--

INSERT INTO `tbluserevent` (`usereventid`, `event_id`, `payment_id`) VALUES
(60, 10022, 11181),
(61, 10022, 11181),
(62, 10022, 11181),
(63, 10040, 11184),
(64, 10040, 11185),
(65, 10040, 11185),
(66, 10040, 11187),
(67, 10040, 11185),
(68, 10040, 11189),
(69, 10021, 11190);

-- --------------------------------------------------------

--
-- Table structure for table `tblvideo`
--

CREATE TABLE `tblvideo` (
  `v_id` int(11) NOT NULL,
  `v_name` varchar(50) NOT NULL,
  `v_path` varchar(200) NOT NULL,
  `v_description` varchar(500) NOT NULL,
  `v_course_id` int(11) NOT NULL,
  `v_week_id` int(11) NOT NULL,
  `v_f_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblvideo`
--

INSERT INTO `tblvideo` (`v_id`, `v_name`, `v_path`, `v_description`, `v_course_id`, `v_week_id`, `v_f_id`) VALUES
(12345707, 'Installing Code Blocks and Getting Started', '15924751695957768335eeb3e21e19b91.Installing CodeBlocks and Getting Started.mp4', 'know everything about Installing Code Blocks and Getting Started', 1011, 10000008, 1014),
(12345708, 'First C Program and Understanding C Program Struct', '15924746484916613055eeb3c183ed892.First C Program and Understanding C Program Structure.mp4', 'know everything about 2.First C Program and Understanding C Program Structure', 1011, 10000008, 1014),
(12345709, 'Comments', '159215849815008141325ee669220d1ac4_Comments.mp4', 'know how to give comments in c', 1011, 10000008, 1014),
(12345710, 'Variables and Basic Datatypes', '15921585326020666735ee66944aa22c5_Variables_and_Basic_Datatypes.mp4', 'know what is  Variables and Basic Datatypes', 1011, 10000008, 1014),
(12345711, 'Simple input and output', '1592158591358761215ee6697fce7034_Comments.mp4', 'get knowledge about Simple input and output', 1011, 10000008, 1014),
(12345712, 'Simple Math and and operators', '15921586348926498355ee669aaf3a986__Simple_Math_and_and_operators.mp4', 'Simple Math and and operators', 1011, 10000009, 1014),
(12345713, 'if Statements', '15921586575445548415ee669c1dcaa77_If_Statements_in_C.mp4', 'if Statements', 1011, 10000009, 1014),
(12345714, 'f...else and Nested if...else statements', '159215869213449628705ee669e4608f98_if...else_and_Nested_if...else_statements_in_C.mp4', 'know about nested if statements', 1011, 10000009, 1014),
(12345715, 'The ternary(conditional) operator', '159215872120967945905ee66a012d6009_The_ternary_(conditional)_operator_in_C.mp4', 'The ternary(conditional) operator', 1011, 10000009, 1014),
(12345716, '	 Switch Statement', '159215879920023887095ee66a4f4665f10_Switch_Statement_in_C.mp4', 'know what is 	 Switch Statement', 1011, 10000009, 1014),
(12345717, 'While loop', '159215883120067383835ee66a6f9752611_While_loop_in_C.mp4', 'while loop in c', 1011, 10000010, 1014),
(12345719, 'do...while loop', '15921588844849621605ee66aa4c4f6912_do...while_loop_in_C.mp4', 'do...while loop in c', 1011, 10000010, 1014),
(12345720, 'for loop', '159215891419252472965ee66ac24b3fc13_for_loop.mp4', 'for loop in c', 1011, 10000010, 1014),
(12345721, 'Functions', '15921590196785782045ee66b2baa86114_Functions_in_C.mp4', 'Functions in c', 1011, 10000010, 1014),
(12345723, 'Passing Parameters and Arguments in Function', '15921590473862777005ee66b471312615_Passing_Parameters_and_Arguments_in_Function.mp4', 'Passing Parameters and Arguments in Function in c', 1011, 10000010, 1014),
(12345724, 'Return Values in Functions', '159215907218795532585ee66b601c14716_Return_Values_in_Functions.mp4', 'Return Values in Functions', 1011, 10000011, 1014),
(12345725, 'Scope rules', '15921591245547895565ee66b94dbce916_Return_Values_in_Functions.mp4', 'Scope rules', 1011, 10000011, 1014),
(12345726, 'Arrays', '1592159152909132715ee66bb00868018_Arrays_in_C.mp4', 'Arrays in c', 1011, 10000011, 1014),
(12345727, 'Multi-dimensional Arrays', '15921591779569015265ee66bc9146a219_Multi-dimensional_Arrays_in_C.mp4', 'Multi-dimensional Arrays in c', 1011, 10000011, 1014),
(12345728, 'Passing Arrays as Function Arguments', '159215920215922738145ee66be21f93920_Passing_Arrays_as_Function_Arguments_in_C.mp4', 'Passing Arrays as Function Arguments', 1011, 10000011, 1014),
(12345729, 'Introduction', '159267056519545791665eee3965afdfbShell_Scripting_Tutorial_for_Beginners_1_-__Introduction.mp4', 'introduction about unix', 1013, 10000012, 1015),
(12345731, 'Variables and Comments in unix', '159267071918357605975eee39ff83d80Shell_Scripting_Tutorial_for_Beginners_2_-_using_Variables_and_Comments.mp4', 'use of  Variables and Comments in unix', 1013, 10000012, 1015),
(12345732, 'Read User Input', '159267075718372230235eee3a25cfd07Shell_Scripting_Tutorial_for_Beginners_3_-_Read_User_Input.mp4', 'Read User Input in unix', 1013, 10000012, 1015),
(12345733, 'passing argument to an array', '15926708067383386685eee3a561cf0aShell_Scripting_Tutorial_for_Beginners_4_-_Pass_Arguments_to_a_Bash-Script.mp4', 'know how to pass argument in an array', 1013, 10000012, 1015),
(12345734, '_If_Statement_', '159267084010731938875eee3a7855ad5Shell_Scripting_Tutorial_for_Beginners_5_-_If_Statement_(_If_then_,_If_then_else,_If_elif_else).mp4', '_If_Statement_(_If_then_,_If_then_else,_If_elif_else)', 1013, 10000012, 1015),
(12345735, 'File test operators ', '159267087511714743075eee3a9b2e48eShell_Scripting_Tutorial_for_Beginners_6_-_File_test_operators.mp4', 'unix File test operators', 1013, 10000012, 1015),
(12345736, 'append output to the end of text file ', '15926709324347191265eee3ad4a9bfaShell_Scripting_Tutorial_for_Beginners_7_-_How_to_append_output_to_the_end_of_text_file.mp4', 'How to append output to the end of text file ', 1013, 10000012, 1015),
(12345737, 'Logical AND Operator', '15926790315528005945eee5a778158bShell_Scripting_Tutorial_for_Beginners_8_-__Logical_AND_Operator.mp4', 'description about logical \"AND\" Operator', 1013, 10000013, 1015),
(12345738, 'logical OR operator', '15926791114720963305eee5ac723576Shell_Scripting_Tutorial_for_Beginners_9_-__Logical_OR_Operator.mp4', 'how to work logical OR operator', 1013, 10000013, 1015),
(12345739, 'Perform arithmetic operations', '15926791607841977475eee5af8a0f8fShell_Scripting_Tutorial_for_Beginners_10_-_Perform_arithmetic_operations.mp4', 'perform arithmetic operations', 1013, 10000013, 1015),
(12345740, 'floating point math', '1592679295621390395eee5b7f36401Shell_Scripting_Tutorial_for_Beginners_11_-_Floating_point_math_operations_in_bash__bc_Command(1).mp4', 'Floating point math operations in bash bc Command', 1013, 10000013, 1015),
(12345741, 'The case statement', '159267935711439347885eee5bbd57fbeShell_Scripting_Tutorial_for_Beginners_12_-_The_case_statement.mp4', 'The case statement in unix', 1013, 10000013, 1015),
(12345742, 'The case statement example', '159267969912301590445eee5d135aea4Shell_Scripting_Tutorial_for_Beginners_13_-_The_case_statement_Example.mp4', 'The case statement example', 1013, 10000013, 1015),
(12345743, 'array variables', '15926797264449990665eee5d2e7112cShell_Scripting_Tutorial_for_Beginners_14_-_Array_variables.mp4', 'array variables', 1013, 10000013, 1015),
(12345744, 'What is bootstrap', '159354335613667005355efb8abc136ac1-What is bootstrap ( 720 X 684 ).mp4', 'What is bootstrap', 1016, 10000016, 1032),
(12345745, 'Setting up bootstrap', '15935433801992609405efb8ad40b3112-Setting up bootstrap ( 720 X 720 ).mp4', 'Setting up bootstrap', 1016, 10000016, 1032),
(12345746, 'Bootstrap Grid System', '159354340611826385925efb8aee991be3-Bootstrap Grid System ( 720 X 720 ).mp4', 'Bootstrap Grid System (', 1016, 10000016, 1032),
(12345747, 'Bootstrap 3 grid classes', '15935434375997957545efb8b0de7d634-Bootstrap 3 grid classes ( 720 X 684 ).mp4', 'Bootstrap 3 grid classes', 1016, 10000016, 1032),
(12345748, 'Bootstrap grid column offset ', '159354345413624583095efb8b1e0b00f5-Bootstrap grid column offset ( 720 X 720 ).mp4', 'Bootstrap grid column offset ', 1016, 10000016, 1032),
(12345749, 'what is database', '15960863473648270135f22584b2cac31.mp4', 'know about what is database?', 1018, 10000020, 1036),
(12345750, 'sql vs nosql', '159608643411610077125f2258a2b23052.mp4', 'know comparision between sql and nosql', 1018, 10000020, 1036),
(12345751, 'mysql installment', '159608649211969988055f2258dced00b3.mp4', 'how we can do install mysql', 1018, 10000020, 1036),
(12345752, 'how to use mysql', '159608653520131409835f225907687e94.mp4', 'use of mysql', 1018, 10000020, 1036),
(12345753, 'showing databse', '15960865936834010665f225941355eb5.mp4', 'showing databse using cmd and php mysql', 1018, 10000020, 1036),
(12345754, 'create database', '159608664311201697035f225973aeeb06.mp4', 'create database using cmd and php my admin', 1018, 10000020, 1036),
(12345755, 'delete database', '159608669820940535155f2259aaa14ba7.mp4', 'delete database using cmd and php my admin', 1018, 10000020, 1036),
(12345756, 'use database', '159608994710955427125f22665b2743a8.mp4', 'use database using cmd and php my admin', 1018, 10000021, 1036),
(12345757, 'know current database', '159609002819430336905f2266ac102709.mp4', 'know current database using cmd and phpmyadmin', 1018, 10000021, 1036),
(12345758, 'datatypes', '159609006318755015485f2266cf2d32c10.mp4', 'mySql datatypes', 1018, 10000021, 1036),
(12345759, 'creting tables', '159609010219598985595f2266f61423e11.mp4', 'how to create tables in database', 1018, 10000021, 1036),
(12345760, 'show database', '15960901439029367455f22671f5a02012.mp4', 'show tables using cmd and phpmyadmin', 1018, 10000021, 1036),
(12345761, 'mysql', '159609024520177618975f2267857e03413.mp4', 'mysql', 1018, 10000021, 1036),
(12345762, 'insert data in tables', '15960902914160537005f2267b36ae4d14.mp4', 'insert data in table using cmd and php my admin', 1018, 10000021, 1036),
(12345763, 'show tables data', '159609039710707193265f22681d88afd15.mp4', 'show tables data using cmd and php my admin', 1018, 10000024, 1036),
(12345764, 'show tables warning', '15960904314428270345f22683f4793b16.mp4', 'show tables warning using cmd and php my admin', 1018, 10000024, 1036),
(12345765, 'Null vs NotNull', '15960904686907141465f2268642b41217.mp4', 'Null vs NotNull using cmd and php my admin', 1018, 10000024, 1036),
(12345766, 'default value in mysql', '15960905126957151065f226890058c318.mp4', 'default value in mysql using cmd and php my admin', 1018, 10000024, 1036),
(12345767, 'alter table statement', '15960909009581947405f226a143bf6e19.mp4', 'know how we can do alter table', 1018, 10000024, 1036),
(12345768, 'primary key', '159609098417197031365f226a68c937c20.mp4', 'what is primary key and how to apply it', 1018, 10000024, 1036),
(12345769, 'auto increment', '15960910257428981885f226a9182e8721.mp4', 'auto increment in mysql', 1018, 10000024, 1036),
(12345770, 'where clause', '15960910614112698145f226ab5e788022.mp4', 'where clause in mysql', 1018, 10000023, 1036),
(12345771, 'aggregate functions', '15960916175105136015f226ce16c5ac24.mp4', 'aggregate functions of php my sql', 1018, 10000023, 1036),
(12345772, 'order by ', '159609165816841010215f226d0a683d425.mp4', 'order by keyword in mysql', 1018, 10000023, 1036),
(12345773, 'distinct and limit keyword', '159609171010484299425f226d3ecb1bd26.mp4', 'distinct and limit keyword in mysql', 1018, 10000023, 1036),
(12345774, 'like operator', '159609176114445378455f226d71988d827.mp4', 'what is like operator', 1018, 10000023, 1036),
(12345775, 'string functions', '15960917904617007435f226d8e59c9528.mp4', 'string functions of mysql', 1018, 10000023, 1036),
(12345776, 'comparison operator', '15960918252669448255f226db17985729.mp4', 'comparison operator of mysql', 1018, 10000023, 1036);

-- --------------------------------------------------------

--
-- Table structure for table `tblweek`
--

CREATE TABLE `tblweek` (
  `week_id` int(11) NOT NULL,
  `week_title` varchar(50) NOT NULL,
  `chap_name` varchar(50) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblweek`
--

INSERT INTO `tblweek` (`week_id`, `week_title`, `chap_name`, `start_date`, `end_date`, `course_id`) VALUES
(10000008, 'week 1', 'Introduction of C programming', '2020-07-30', '2020-08-06', 1011),
(10000009, 'week 2', 'Math Operators And Important Statement', '2020-08-06', '2020-08-13', 1011),
(10000010, 'week 3', 'Introduction of looping statements', '2020-08-13', '2020-08-20', 1011),
(10000011, 'week 4', 'Scope of variable and concept of array', '2020-08-20', '2020-08-27', 1011),
(10000012, 'week 1', 'Basic Commands and Utilities.', '2020-06-23', '2020-06-30', 1013),
(10000013, 'week 2', 'File System, the Shell, and Vim Editor.', '2020-06-30', '2020-07-05', 1013),
(10000014, 'week 3', 'Bash Shell, Tcsh Shell, and Shell Programming.', '2020-07-14', '2020-07-21', 1013),
(10000015, 'week 4', 'Skill Standards', '2020-07-21', '2020-07-28', 1013),
(10000016, 'week 1', 'bootstrap introduction', '2020-07-05', '2020-07-12', 1016),
(10000017, 'week 2', ' nested rows and columns  of bootstarp', '2020-07-12', '2020-07-19', 1016),
(10000018, 'week 3', 'blockquotes and lists of Bootstrap', '2020-07-19', '2020-07-26', 1016),
(10000019, 'week 4', 'icons of Bootstrap', '2020-07-26', '2020-08-02', 1016),
(10000020, 'week 1', 'introduction week', '2020-08-15', '2020-08-22', 1018),
(10000021, 'week 2', 'setting of environment', '2020-08-22', '2020-08-29', 1018),
(10000022, 'week 3', 'Beginning with mysql basics', '2020-08-29', '2020-09-05', 1011),
(10000023, 'week 4', 'Time to jump in for more', '2020-09-05', '2020-09-12', 1018),
(10000024, 'week 3', 'Beggining with mysql basics', '2020-08-29', '2020-09-05', 1018);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `tblcategory`
--
ALTER TABLE `tblcategory`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tblcertificate`
--
ALTER TABLE `tblcertificate`
  ADD PRIMARY KEY (`certificate_id`),
  ADD KEY `u_id` (`user_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `tblcourse`
--
ALTER TABLE `tblcourse`
  ADD PRIMARY KEY (`course_id`),
  ADD KEY `course_t_id` (`course_t_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `tblcredit`
--
ALTER TABLE `tblcredit`
  ADD PRIMARY KEY (`credit_id`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `tblcreditdemo`
--
ALTER TABLE `tblcreditdemo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `tblcreditexam`
--
ALTER TABLE `tblcreditexam`
  ADD PRIMARY KEY (`ce_id`);

--
-- Indexes for table `tblevent`
--
ALTER TABLE `tblevent`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `tblexam`
--
ALTER TABLE `tblexam`
  ADD PRIMARY KEY (`exam_id`),
  ADD KEY `week_id` (`week_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `tblfaculty`
--
ALTER TABLE `tblfaculty`
  ADD PRIMARY KEY (`f_id`),
  ADD UNIQUE KEY `f_emailid` (`f_emailid`);

--
-- Indexes for table `tblfeedback`
--
ALTER TABLE `tblfeedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `tblmessage`
--
ALTER TABLE `tblmessage`
  ADD PRIMARY KEY (`m_id`),
  ADD KEY `user_id` (`user_id`,`f_id`),
  ADD KEY `f_id` (`f_id`);

--
-- Indexes for table `tblnews`
--
ALTER TABLE `tblnews`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `tblpass`
--
ALTER TABLE `tblpass`
  ADD PRIMARY KEY (`pass_id`),
  ADD KEY `event_id` (`event_id`);

--
-- Indexes for table `tblpaymentcourse`
--
ALTER TABLE `tblpaymentcourse`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `tblpaymentevent`
--
ALTER TABLE `tblpaymentevent`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `event_id` (`event_id`);

--
-- Indexes for table `tblpdf`
--
ALTER TABLE `tblpdf`
  ADD PRIMARY KEY (`pdf_id`);

--
-- Indexes for table `tblquestion`
--
ALTER TABLE `tblquestion`
  ADD PRIMARY KEY (`qtf_id`);

--
-- Indexes for table `tblquestionmcq`
--
ALTER TABLE `tblquestionmcq`
  ADD PRIMARY KEY (`q_id`),
  ADD KEY `exam_id` (`exam_id`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `question_type` (`question_type`);

--
-- Indexes for table `tblresult`
--
ALTER TABLE `tblresult`
  ADD PRIMARY KEY (`result_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `tblscore`
--
ALTER TABLE `tblscore`
  ADD PRIMARY KEY (`score_id`),
  ADD KEY `question_id` (`question_id`,`exam_id`,`user_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `exam_id` (`exam_id`);

--
-- Indexes for table `tblsyllabus`
--
ALTER TABLE `tblsyllabus`
  ADD PRIMARY KEY (`syllabus_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`u_id`),
  ADD UNIQUE KEY `u_email_id` (`u_email_id`);

--
-- Indexes for table `tblusercourse`
--
ALTER TABLE `tblusercourse`
  ADD PRIMARY KEY (`course_user_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `payment_id` (`payment_id`);

--
-- Indexes for table `tbluserevent`
--
ALTER TABLE `tbluserevent`
  ADD PRIMARY KEY (`usereventid`),
  ADD KEY `payment_id` (`payment_id`),
  ADD KEY `event_id` (`event_id`);

--
-- Indexes for table `tblvideo`
--
ALTER TABLE `tblvideo`
  ADD PRIMARY KEY (`v_id`),
  ADD KEY `v_course_id` (`v_course_id`),
  ADD KEY `v_week_id` (`v_week_id`),
  ADD KEY `v_f_id` (`v_f_id`);

--
-- Indexes for table `tblweek`
--
ALTER TABLE `tblweek`
  ADD PRIMARY KEY (`week_id`),
  ADD KEY `course_id` (`course_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblcategory`
--
ALTER TABLE `tblcategory`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tblcertificate`
--
ALTER TABLE `tblcertificate`
  MODIFY `certificate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tblcourse`
--
ALTER TABLE `tblcourse`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1020;

--
-- AUTO_INCREMENT for table `tblcredit`
--
ALTER TABLE `tblcredit`
  MODIFY `credit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tblcreditdemo`
--
ALTER TABLE `tblcreditdemo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=511;

--
-- AUTO_INCREMENT for table `tblcreditexam`
--
ALTER TABLE `tblcreditexam`
  MODIFY `ce_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100000021;

--
-- AUTO_INCREMENT for table `tblevent`
--
ALTER TABLE `tblevent`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10041;

--
-- AUTO_INCREMENT for table `tblexam`
--
ALTER TABLE `tblexam`
  MODIFY `exam_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122364;

--
-- AUTO_INCREMENT for table `tblfaculty`
--
ALTER TABLE `tblfaculty`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1038;

--
-- AUTO_INCREMENT for table `tblfeedback`
--
ALTER TABLE `tblfeedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100000013;

--
-- AUTO_INCREMENT for table `tblmessage`
--
ALTER TABLE `tblmessage`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tblnews`
--
ALTER TABLE `tblnews`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000000012;

--
-- AUTO_INCREMENT for table `tblpass`
--
ALTER TABLE `tblpass`
  MODIFY `pass_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tblpaymentcourse`
--
ALTER TABLE `tblpaymentcourse`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tblpaymentevent`
--
ALTER TABLE `tblpaymentevent`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11191;

--
-- AUTO_INCREMENT for table `tblpdf`
--
ALTER TABLE `tblpdf`
  MODIFY `pdf_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=512;

--
-- AUTO_INCREMENT for table `tblquestion`
--
ALTER TABLE `tblquestion`
  MODIFY `qtf_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11112;

--
-- AUTO_INCREMENT for table `tblquestionmcq`
--
ALTER TABLE `tblquestionmcq`
  MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;

--
-- AUTO_INCREMENT for table `tblresult`
--
ALTER TABLE `tblresult`
  MODIFY `result_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tblscore`
--
ALTER TABLE `tblscore`
  MODIFY `score_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100000167;

--
-- AUTO_INCREMENT for table `tblsyllabus`
--
ALTER TABLE `tblsyllabus`
  MODIFY `syllabus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10062;

--
-- AUTO_INCREMENT for table `tblusercourse`
--
ALTER TABLE `tblusercourse`
  MODIFY `course_user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10000019;

--
-- AUTO_INCREMENT for table `tbluserevent`
--
ALTER TABLE `tbluserevent`
  MODIFY `usereventid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `tblvideo`
--
ALTER TABLE `tblvideo`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12345777;

--
-- AUTO_INCREMENT for table `tblweek`
--
ALTER TABLE `tblweek`
  MODIFY `week_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10000025;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblcertificate`
--
ALTER TABLE `tblcertificate`
  ADD CONSTRAINT `tblcertificate_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbluser` (`u_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tblcertificate_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `tblcourse` (`course_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tblcourse`
--
ALTER TABLE `tblcourse`
  ADD CONSTRAINT `tblcourse_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `tblcategory` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tblcourse_ibfk_2` FOREIGN KEY (`course_t_id`) REFERENCES `tblfaculty` (`f_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tblcredit`
--
ALTER TABLE `tblcredit`
  ADD CONSTRAINT `tblcredit_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `tbluser` (`u_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tblcreditdemo`
--
ALTER TABLE `tblcreditdemo`
  ADD CONSTRAINT `tblcreditdemo_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `tbluser` (`u_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tblexam`
--
ALTER TABLE `tblexam`
  ADD CONSTRAINT `tblexam_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `tblcourse` (`course_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tblexam_ibfk_2` FOREIGN KEY (`week_id`) REFERENCES `tblweek` (`week_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tblmessage`
--
ALTER TABLE `tblmessage`
  ADD CONSTRAINT `tblmessage_ibfk_1` FOREIGN KEY (`f_id`) REFERENCES `tblfaculty` (`f_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tblmessage_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `tbluser` (`u_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tblpass`
--
ALTER TABLE `tblpass`
  ADD CONSTRAINT `tblpass_ibfk_1` FOREIGN KEY (`event_id`) REFERENCES `tblevent` (`event_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tblpaymentcourse`
--
ALTER TABLE `tblpaymentcourse`
  ADD CONSTRAINT `tblpaymentcourse_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbluser` (`u_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tblpaymentcourse_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `tblcourse` (`course_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tblpaymentevent`
--
ALTER TABLE `tblpaymentevent`
  ADD CONSTRAINT `tblpaymentevent_ibfk_1` FOREIGN KEY (`event_id`) REFERENCES `tblevent` (`event_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tblquestionmcq`
--
ALTER TABLE `tblquestionmcq`
  ADD CONSTRAINT `tblquestionmcq_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `tblcourse` (`course_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tblquestionmcq_ibfk_2` FOREIGN KEY (`exam_id`) REFERENCES `tblexam` (`exam_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tblquestionmcq_ibfk_3` FOREIGN KEY (`question_type`) REFERENCES `tblquestion` (`qtf_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tblresult`
--
ALTER TABLE `tblresult`
  ADD CONSTRAINT `tblresult_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `tblcourse` (`course_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tblresult_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `tbluser` (`u_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tblscore`
--
ALTER TABLE `tblscore`
  ADD CONSTRAINT `tblscore_ibfk_1` FOREIGN KEY (`exam_id`) REFERENCES `tblexam` (`exam_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tblscore_ibfk_2` FOREIGN KEY (`question_id`) REFERENCES `tblquestionmcq` (`q_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tblscore_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `tbluser` (`u_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tblsyllabus`
--
ALTER TABLE `tblsyllabus`
  ADD CONSTRAINT `tblsyllabus_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `tblcourse` (`course_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tblusercourse`
--
ALTER TABLE `tblusercourse`
  ADD CONSTRAINT `tblusercourse_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `tblcourse` (`course_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tblusercourse_ibfk_2` FOREIGN KEY (`payment_id`) REFERENCES `tblpaymentcourse` (`payment_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tblusercourse_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `tbluser` (`u_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbluserevent`
--
ALTER TABLE `tbluserevent`
  ADD CONSTRAINT `tbluserevent_ibfk_1` FOREIGN KEY (`payment_id`) REFERENCES `tblpaymentevent` (`p_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbluserevent_ibfk_2` FOREIGN KEY (`event_id`) REFERENCES `tblevent` (`event_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tblvideo`
--
ALTER TABLE `tblvideo`
  ADD CONSTRAINT `tblvideo_ibfk_1` FOREIGN KEY (`v_f_id`) REFERENCES `tblfaculty` (`f_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tblvideo_ibfk_2` FOREIGN KEY (`v_week_id`) REFERENCES `tblweek` (`week_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tblvideo_ibfk_3` FOREIGN KEY (`v_course_id`) REFERENCES `tblcourse` (`course_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tblweek`
--
ALTER TABLE `tblweek`
  ADD CONSTRAINT `tblweek_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `tblcourse` (`course_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

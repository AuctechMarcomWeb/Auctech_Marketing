-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2025 at 12:22 PM
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
-- Database: `auctech_marketing`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_job`
--

CREATE TABLE `add_job` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `phone` varchar(12) DEFAULT NULL,
  `job_type` varchar(255) DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `added_date` int(6) DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `add_job`
--

INSERT INTO `add_job` (`id`, `name`, `email`, `phone`, `job_type`, `image_path`, `added_date`) VALUES
(1, 'Rohit Sharma', 'admin@example.com', '1234561234', 'React Native', 'upload_resume/donation_685b59c7719a31.78046030.pdf', 2147483647),
(3, 'Uchit kumar ', 'uchitkumar34@gmail.com', '8933840736', '.Net Developer', 'upload_resume/donation_68a80dc5b57462.32818053.pdf', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `add_testimonial`
--

CREATE TABLE `add_testimonial` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `review` text DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `created_at` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_testimonial`
--

INSERT INTO `add_testimonial` (`id`, `name`, `image_path`, `review`, `designation`, `created_at`) VALUES
(1, 'Northview Collegiate', 'testimonial_uploads/685b58d7840c3.png', 'Auctech developed a School LMS and a website for us. Their team is skilled and professional. We are happy with the results.', 'Canada', '2025-06-25'),
(2, 'Ankur Traders', 'testimonial_uploads/685b59215e6a1.png', 'We got a dynamic website with an amazing UI. Itâ€™s fast, SEO-friendly, and exactly what we needed. Auctech did a great job!', 'India', '2025-06-25'),
(3, ' SI-Dinar', 'testimonial_uploads/685b5988d0d97.png', 'They created a great website for us. It looks professional and works well on all devices. Auctech delivered on time!', 'Dubai', '2025-06-25');

-- --------------------------------------------------------

--
-- Table structure for table `add_user`
--

CREATE TABLE `add_user` (
  `s_no` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `confirm_password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_user`
--

INSERT INTO `add_user` (`s_no`, `name`, `email`, `password`, `confirm_password`) VALUES
(1, 'Admin', 'auctech-marketing@gmail.com', '$2y$10$X8A2CtsE2q10BS48hRyxYOgV51TkwuGzdZzyNClylLIKNXVqfFYyO', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `blog_url` varchar(255) NOT NULL,
  `blog_heading` varchar(255) NOT NULL,
  `blog_desc_first` longtext DEFAULT NULL,
  `blog_desc_second` text DEFAULT NULL,
  `blog_point_one` longtext DEFAULT NULL,
  `blog_point_two` longtext DEFAULT NULL,
  `blog_desc_two` longtext DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blog_url`, `blog_heading`, `blog_desc_first`, `blog_desc_second`, `blog_point_one`, `blog_point_two`, `blog_desc_two`, `created_at`) VALUES
(1, 'From-Code-to-Creativity-The-Journey-of-Auctech', 'From Code to Creativity: The Journey of Auctech', 'From Code to Creativity: The Journey of Auctech', 'From Code to Creativity: The Journey of Auctech', 'From Code to Creativity: The Journey of Auctech', 'IMAGES-1', '<p data-start=\"329\" data-end=\"508\">In today’s fast-evolving digital world, only a few companies truly succeed in blending technology with creativity — and Auctech Marketing Communication Pvt. Ltd. is one of them.</p><p>\r\n</p><p data-start=\"513\" data-end=\"752\">Founded in 2006, Auctech began its journey as a small, passionate team of developers with big dreams. What started as a humble software development company has now grown into a full-fledged digital powerhouse, offering solutions that span:</p><p><ul><li><span style=\"font-size: 1rem;\">Custom Software Development</span></li></ul><ul><li><span style=\"font-size: 1rem;\">Digital Marketing &amp; SEO</span></li></ul><ul><li><span style=\"font-size: 1rem;\">Branding &amp; Creative Strategy</span></li></ul><ul><li><span style=\"font-size: 1rem;\">Mobile App Development</span></li></ul><ul><li><span style=\"font-size: 1rem;\">UI/UX Design</span></li></ul><ul><li><span style=\"font-size: 1rem;\">Marketing Communications</span></li></ul></p><p data-start=\"513\" data-end=\"752\">With an unwavering focus on innovation, quality, and client success, Auctech has helped businesses — from startups to established enterprises — thrive in the competitive digital marketplace.<span style=\"font-size: 1rem;\"></span></p>', '2025-06-25 02:00:38');

-- --------------------------------------------------------

--
-- Table structure for table `blogs_images`
--

CREATE TABLE `blogs_images` (
  `id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `logos` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `blogs_images`
--

INSERT INTO `blogs_images` (`id`, `blog_id`, `image`, `logos`) VALUES
(1, 1, 'img_685b5846c03ed.webp', ''),
(2, 1, '', 'logo_685b5846c0cf4.webp'),
(3, 1, '', 'logo_685b5846c184c.webp'),
(4, 2, 'img_685fd7669251c.webp', ''),
(5, 2, '', 'logo_685fd76692e89.webp');

-- --------------------------------------------------------

--
-- Table structure for table `book_appointement`
--

CREATE TABLE `book_appointement` (
  `id` int(11) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(12) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` varchar(8) DEFAULT NULL,
  `service_type` varchar(100) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `token` varchar(32) DEFAULT NULL,
  `created_at` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book_appointement`
--

INSERT INTO `book_appointement` (`id`, `email`, `phone`, `date`, `time`, `service_type`, `message`, `token`, `created_at`) VALUES
(1, 'ratnaauctech@gmail.com', '1234561234', '2025-09-17', '05:45 PM', 'Digital Marketing Consulting', 'sd', 'a82ce7242d0b45cf221e97365e8348ca', '2025-09-17');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(80) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `subject` varchar(50) DEFAULT NULL,
  `message` text NOT NULL,
  `added_date` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `subject`, `message`, `added_date`) VALUES
(1, 'Rohit Sharma', '', '1234567890', '', '', '2025-06-25 03:17:49.000000'),
(2, 'Rohit Sharma', 'ratna321@gmail.com', '7905491970', 'Branding & Digital PR', 'hi', '2025-06-25 03:41:12.000000'),
(3, 'Rohit Sharma', 'info@spg.com', '7380873691', 'Branding & Digital PR', 'hi', '2025-06-25 03:46:14.000000'),
(4, 'Rohit Sharma', 'info@spg.com', '1234561234', 'Branding & Digital PR', 'hi', '2025-06-25 03:46:40.000000'),
(5, 'Online Courses', 'admin@example.com', '1234567890', '4', 'hi', '2025-06-25 04:10:30.000000'),
(6, 'Parthenia Wisniewski', 'parthenia.wisniewski@hotmail.com', '44149972', 'Website Development', 'Hello,\r\n\r\nWe have a promotional offer for your website auctechmarketing.com.\r\n\r\n“60-Second Trick Turns My Phone Into\r\na $100/Day EMAIL Cash Machine”\r\n 5 MINUTES PER DAY - NO Experience Required | NO HARD WORK | INSTANT PAYMENTS \r\n \r\n The Best Part is,\r\nI Don’t Have To Create Anything…\r\nYup, I don’t have to create my own digital or physical products.\r\n\r\nSee it in action: https://goldsolutions.pro/EmailCashMachine\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://goldsolutions.pro/unsubscribe?domain=auctechmarketing.com\r\nAddress: 209 West Street Comstock Park, MI 49321\r\nLooking out for you, Ethan Parker', '2025-07-26 16:00:45.000000'),
(7, 'Adan Gadson', 'adan.gadson19@yahoo.com', '513756839', 'Digital Campaign Management', 'Hello Marketers,\r\n\r\nWe have a promotional offer for your website auctechmarketing.com.\r\n\r\nIf you’ve been looking for a smart, scalable, and highly profitable way to enter the booming digital content space — without burning out or hiring a big team...\r\n\r\nLet me show you something that’s working incredibly well right now:\r\n\r\nFor years, we’ve been in the business of digital creation — launching courses, software, and helping entrepreneurs like you build profitable info-based businesses.\r\n\r\nBut there was one niche we kept seeing explode repeatedly:\r\n\r\nThe Prompts Profit Market\r\n\r\nCash In on the Exploding Prompts Profit Market — Turn Simple AI Text Into Daily Income!\r\n\r\n\r\nSee it in action: https://www.novaai.expert/PrompterIQ\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://www.novaai.expert/unsubscribe?domain=auctechmarketing.com\r\nAddress: 209 West Street Comstock Park, MI 49321\r\nLooking out for you, Ethan Parker', '2025-07-27 02:46:10.000000'),
(8, 'CharlesQuero', 'sdasddsdsdsdsds@gmail.com', '8686558978', 'Logo Design & Identity', 'Get Blockchain Insurance globally! \r\n \r\nGet professional insurance of global importance from an insurer in Chelyabinsk, Russia. \r\n \r\nMore than 50 types of non-criminal insurance. The price starts from $ 1.25 per month. \r\n \r\nOnce a month, a document is created that can be shown to the regulatory authorities. We\'re taking over the negotiations. \r\n \r\nWe insure risks such as: \r\n1. Arbitrary legislation \r\n2. Arbitrariness of the Central Bank \r\n3. Possible harm to other people \r\n \r\nAccept crypto and gift card payment. \r\n \r\nLink (own hosting): http://78.29.53.57/insurance/common/ \r\n \r\n<a href=\"http://78.29.53.57/insurance/common/\">http://78.29.53.57/insurance/common/</a> \r\n \r\nLink (own hosting): http://78.29.53.57/insurance/common/ \r\n \r\nClick it!', '2025-07-29 05:35:41.000000'),
(9, 'Mayra Macadam', 'macadam.mayra@gmail.com', '3367158448', 'Website / App Maintenance', 'Hello,\r\n\r\nWe have a promotional offer for your website auctechmarketing.com.\r\n\r\nAI Affiliate Goldmine is a completely beginner-friendly system that shows you how to use AI to create content, get organic traffic, build your email list, and earn affiliate commissions, even if you are starting from scratch.\r\n\r\n- You\'re not wasting hours trying to figure out AI tools.\r\n\r\n- You\'re not guessing what to post or write each day\r\n\r\n- You\'re not struggling to grow your business.\r\n\r\n\r\nSee it in action: https://www.novaai.expert/AIAffiliateGoldmine\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://www.novaai.expert/unsubscribe?domain=auctechmarketing.com\r\nAddress: 209 West Street Comstock Park, MI 49321\r\nLooking out for you, Ethan Parker', '2025-07-29 05:51:36.000000'),
(10, 'Muoi Wilmer', 'wilmer.muoi@googlemail.com', '666041894', 'Email & WhatsApp Marketing', 'Hello,\r\n\r\nWe have a promotional offer for your website auctechmarketing.com.\r\n\r\nWhat if one tool could turn any image into a ready to sell mosaic style Color By Number page without design skills?\r\nWith Color By Number Profit Machine, get the tool, the training, and the templates to launch a beautiful mosaic style color by number page faster than ever.\r\n\r\nSee it in action: https://goldsolutions.pro/ColorByNumber\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://goldsolutions.pro/unsubscribe?domain=auctechmarketing.com\r\nAddress: 209 West Street Comstock Park, MI 49321\r\nLooking out for you, Ethan Parker', '2025-07-29 10:50:50.000000'),
(11, 'Agnes Stidham', 'stidham.agnes68@gmail.com', 'Qsoyn Xqu xg', 'SEO Services', 'Hi,\r\n\r\nWe have a promotional offer for your website auctechmarketing.com.\r\n\r\nHit \" https://www.youtube.com/watch?v=ogRpcDSFehI \" and discover how to build your own education platform in just a few clicks.\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://topcasworld.pro/unsubscribe?domain=auctechmarketing.com\r\nAddress: 209 West Street Comstock Park, MI 49321\r\nLooking out for you, Jordan Matthews', '2025-07-30 10:36:58.000000'),
(12, 'Janine Bostic', 'bostic.janine@gmail.com', '194296684', 'Branding & Digital PR', 'Hi,\r\n\r\nWe have a promotional offer for your website auctechmarketing.com.\r\n\r\nTired of chasing clients manually? Let AI do the selling for you! Watch this video and discover how to automate your leads and skyrocket your sales today! \r\nhttps://www.youtube.com/watch?v=YfP2d-a4FLo\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://topcasworld.pro/unsubscribe?domain=auctechmarketing.com\r\nAddress: 209 West Street Comstock Park, MI 49321\r\nLooking out for you, Jordan Matthews', '2025-07-30 21:06:05.000000'),
(13, 'Charmain Garretson', 'garretson.charmain@msn.com', '8395516131', 'Digital Campaign Management', 'Hello,\r\n\r\nWe have a promotional offer for your website auctechmarketing.com.\r\n\r\nWorld’s First AI App That Scans 10,000+ Viral Videos Daily, \r\nAnd Auto-Generates Viral-Ready Videos Then Auto-Post Them For You…\r\n\r\nAllowing You To DOMINATE TikTok On Complete Autopilot…\r\n\r\nSee it in action: https://www.novaai.expert/TokAI\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://www.novaai.expert/unsubscribe?domain=auctechmarketing.com\r\nAddress: 209 West Street Comstock Park, MI 49321\r\nLooking out for you, Ethan Parker', '2025-08-01 05:53:12.000000'),
(14, 'Alex Fraser', 'fraser.alex@gmail.com', '3865693764', 'Email & WhatsApp Marketing', 'Hello,\r\n\r\nWe have a promotional offer for your website auctechmarketing.com.\r\n\r\nRevolutionary AI Tech Turns Any Viral\r\nInstagram Reel, YouTube Short, or TikTok Video Into Scroll-Stopping, Lead-Pulling Funnels\r\nAll In Under 2 Minutes\r\n\r\nSee it in action: https://goldsolutions.pro/Reels2Leads\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://goldsolutions.pro/unsubscribe?domain=auctechmarketing.com\r\nAddress: 209 West Street Comstock Park, MI 49321\r\nLooking out for you, Ethan Parker', '2025-08-02 23:39:14.000000'),
(15, 'Abel Kastner', 'kastner.abel92@msn.com', '728782034', 'Social Media Marketing (SMM)', 'Hello,\r\n\r\nWe have a promotional offer for your website auctechmarketing.com.\r\n\r\n20+ Ready-to-Teach AI Professors– Instantly Deliver AI Live Classes in Math, Physics, Chemistry, Coding & More – All Done-For-You and 100% Automated!\r\nAI Live Professors for 20+ Subjects – Covering academics, tech, business, languages, and wellness.\r\nSmart Student Management System – Track student progress, issue certificates & provide AI-personalized feedback.\r\nAI-Powered Q&A & Adaptive Tutoring – Instant help for every student, available 24/7 through built-in AI guidance.\r\nRun AI-Powered Exams, Quizzes & Auto-Grading – Assess, grade & evaluate with zero manual effort.\r\nMonetize Your University –With AI-Driven Subscription Model & Charge monthly subscriptions Or one-time payments.\r\n\r\nSee it in action: https://www.novaai.expert/AILiveUniversityBuilder\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://www.novaai.expert/unsubscribe?domain=auctechmarketing.com\r\nAddress: 209 West Street Comstock Park, MI 49321\r\nLooking out for you, Ethan Parker', '2025-08-03 06:15:43.000000'),
(16, 'Julio McLucas', 'julio.mclucas@msn.com', '639165353', 'Search Engine Marketing (SEM)', 'Hello,\r\n\r\nWe have a promotional offer for your website auctechmarketing.com.\r\n\r\nThe AI Rental Machine No One’s Talking About - 3 AI Tools You Can Use, Resell or Rent Out — No Inventory, No Coding, No Complex Setup Required\r\nFully built and ready to deploy — designed for digital creators, consultants, and service providers.\r\n\r\nGet 3 Pre-Built GPTs Ready to Launch and Deploy\r\nThese aren’t some toy chatbots. These are fully structured, pre-built AI micro tools that solve one real-world, painful problem each in under 60 seconds.\r\n\r\nLet’s break them down.\r\n\r\nSee it in action: https://www.novaai.expert/AIRentalMachine\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://www.novaai.expert/unsubscribe?domain=auctechmarketing.com\r\nAddress: 209 West Street Comstock Park, MI 49321\r\nLooking out for you, Ethan Parker', '2025-08-03 17:36:22.000000'),
(17, 'Marlys Lumpkins', 'marlys.lumpkins@msn.com', '6843787618', 'Website / App Maintenance', 'Hello,\r\n\r\nWe have a promotional offer for your website auctechmarketing.com.\r\n\r\nTransforms Any Keyword & URL Into Profit-Generating Content and Drives Endless FREE Targeted Traffic On Autopilot Across All Niches ...\r\n\r\nSee it in action: https://goldsolutions.pro/TrafficWaveGenerator2\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://goldsolutions.pro/unsubscribe?domain=auctechmarketing.com\r\nAddress: 209 West Street Comstock Park, MI 49321\r\nLooking out for you, Ethan Parker', '2025-08-03 19:43:36.000000'),
(18, 'Leola Mcbee', 'mcbee.leola@hotmail.com', '3762140991', 'Branding & Digital PR', 'Hello,\r\n\r\nWe have a promotional offer for your website auctechmarketing.com.\r\n\r\nReady to Start Getting Clients and Sales\r\n— No More Stress. Just Sales\r\nYou’ve tried the tools, hacks, and templates Still stuck at zero?\r\n\r\nit\'s not your effort. It\'s the system\r\n\r\nNo pressure. Just something that finally brings in real, paying customers.\r\n\r\n• Shows your offer to the right buyers\r\n\r\n• Says exactly what they need to hear\r\n\r\n• Converts traffic into real, paying customers\r\n\r\nNo setup. No delays. No learning curve.\r\nJust switch it on — and let it sell for you.\r\nYou want more sales — fast. Exactly what you get.\r\nNow that you\'re here, SaleStorm AI is ready to sell\r\nBrings in real sales. Fast. No guesswork.\r\n\r\nSee it in action: https://www.novaai.expert/SalesStormAI\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://www.novaai.expert/unsubscribe?domain=auctechmarketing.com\r\nAddress: 209 West Street Comstock Park, MI 49321\r\nLooking out for you, Ethan Parker', '2025-08-04 11:28:14.000000'),
(19, 'Kian Razo', 'razo.kian7@gmail.com', 'X zw', 'Email & WhatsApp Marketing', 'Hello,\r\n\r\nWe have a promotional offer for your website auctechmarketing.com.\r\n\r\n\r\nGrab the Authentic and HD-QUALITY \"Baking Video\" Library with Re-Sell Rights!\r\nIntroducing... \"BakeFlix\"\r\nYour Ultimate Baking Video Collection to Master the Art of Baking and Build Profitable Social Media Channel!\r\n\r\nBrand New - Engaging Videos in High Demand Niche Everyone will LOVE!\r\nCovering the most trending business niches to reach the wider audience\r\nSave your Time, Effort and Money on Hiring \'Un-Skillful\' Content Creator\r\nAll Done for You and Ready To Upload on Various Social Media to Get Viral Traffic\r\nClaim The Commercial & Re-Sell Rights To A Proven To Sell Package\r\nUse it to Generate maximum profits with minimum input of time and money\r\n\r\nSee it in action: https://goldsolutions.pro/BAKEFLIX\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://goldsolutions.pro/unsubscribe?domain=auctechmarketing.com\r\nAddress: 209 West Street Comstock Park, MI 49321\r\nLooking out for you, Ethan Parker', '2025-08-04 23:09:50.000000'),
(20, 'LeeErymn', 'dinanikolskaya99@gmail.com', '8995589469', 'Logo Design & Identity', 'Hæ, ég vildi vita verð þitt.', '2025-08-05 23:09:34.000000'),
(21, 'Aurelio Bingle', 'bingle.aurelio@gmail.com', '7757637904', 'Customized Software Development', 'We have a promotional offer for your website auctechmarketing.com.\r\nIn 30 Seconds Or Less…\r\nSending Us A Surge Of 1,478 Clicks A Day 100% FREE\r\n(Sneak Any URL You Want, Even Affiliate Links, We Send Traffic To Affiliate Links Directly, And Make $285.78 A Day Doing That )\r\n(You Don’t Need A Website, Hosting, A Domain, Or Even To Write A Single word…)\r\nNo Technical Skills - No Experience - No Coding - No Setup - No Waiting\r\nWatch How We Generate 342 Clicks Per Hour In 27 Seconds Flat…\r\n\r\nSee it in action: https://www.novaai.expert/SneakAI\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://www.novaai.expert/unsubscribe?domain=auctechmarketing.com\r\nAddress: 209 West Street Comstock Park, MI 49321\r\nLooking out for you, Ethan Parker', '2025-08-09 14:27:30.000000'),
(22, 'Freya Luevano', 'luevano.freya@gmail.com', '7855847495', 'Logo Design & Identity', 'Hello,\r\n\r\nWe have a promotional offer for your website auctechmarketing.com.\r\n\r\nCreate with Purpose\r\n������ Feeling stuck, overwhelmed, or unsure where to start?\r\nThis video breaks it all down. Step-by-step. No fluff. No hype. Watch it now. It might just be the turning point you’ve been waiting for. Watch now before it’s too late. \r\n\r\nWatch this video before it\'s gone. \r\n\r\nSee it in action: https://goldsolutions.pro/MonetizeYourFuture\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://goldsolutions.pro/unsubscribe?domain=auctechmarketing.com\r\nAddress: 209 West Street Comstock Park, MI 49321\r\nLooking out for you, Ethan Parker', '2025-08-10 20:39:26.000000'),
(23, 'Justina Alden', 'justina.alden@gmail.com', 'Ha thdt Fste', '', 'Hello,\r\n\r\nWe have a promotional offer for your website auctechmarketing.com.\r\n\r\n“30-Second Trick Turns My Phone Into\r\na $1,000/Day WiFI CASH BOT”\r\nJust Tap The \"Secret Button\" To Cash In From This $385 Billion A.I WiFi Cash Loophole!\r\n\r\nSee it in action: https://goldsolutions.pro/WiFiCashBot\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://goldsolutions.pro/unsubscribe?domain=auctechmarketing.com\r\nAddress: 209 West Street Comstock Park, MI 49321\r\nLooking out for you, Ethan Parker', '2025-08-11 04:43:33.000000'),
(24, 'deefflhtei', 'ogknlxqq@testform.xyz', 'this.value.r', 'Select a Service', 'ljlfvtkuztxphmrtwmehkidjnzuvzu', '2025-08-12 05:08:13.000000'),
(25, 'ixnhjtufrz', 'xverzqex@testform.xyz', 'this.value.r', 'Select a Service', 'zfqenjtmviwqgnxygrwjknysyqyvmr', '2025-08-12 05:13:49.000000'),
(26, 'Kendra Sunderland', 'sunderland.kendra@gmail.com', '632583832', 'Pay-Per-Click (PPC)', 'Hello,\r\n\r\nWe have a promotional offer for your website auctechmarketing.com.\r\n\r\nIf You Want FREE, Targeted Traffic \r\nFrom The TOP 3 Free Traffic Sources, \r\nThen Pay Close Attention...\r\nSee it in action: https://goldsolutions.pro/TrafficSniper\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://goldsolutions.pro/unsubscribe?domain=auctechmarketing.com\r\nAddress: 209 West Street Comstock Park, MI 49321\r\nLooking out for you, Ethan Parker', '2025-08-13 22:10:58.000000'),
(27, 'Lizette Martine', 'martine.lizette@msn.com', '655665979', '3', 'Hello,\r\n\r\nWe have a promotional offer for your website auctechmarketing.com.\r\n\r\nWorld’s First Super Intelligent AI Chat That Unlocks ALL-ACCESS PASS To Every Premium AI Tool On Earth... With A Single Command\r\n\r\n(Imagine what you could create with ALL of them working together seamlessly.)\r\n\r\nUnlock the Entire Universe of AI Instantly.. Simply type or speak your request and watch as it intelligently routes your task to the PERFECT AI engine)\r\n\r\nSee it in action: https://www.novaai.expert/AISuperBOT\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://www.novaai.expert/unsubscribe?domain=auctechmarketing.com\r\nAddress: 209 West Street Comstock Park, MI 49321\r\nLooking out for you, Ethan Parker', '2025-08-14 04:02:06.000000'),
(28, 'Victoria Irish', 'irish.victoria@msn.com', '7771790978', '4', 'Hello,\r\n\r\nWe have a promotional offer for your website auctechmarketing.com.\r\n\r\nAccess DeepSeek AI, ChatGPT, Google Veo3, Luma AI, Claude, Gemini Pro , Kling AI, Mistral, DALL.E, LLaMa & more—all from a single dashboard.\r\nNo subscriptions or no monthly fees—pay once and enjoy lifetime access.\r\nAutomatically switch between AI models based on task requirements.... AND MUCH MORE\r\n\r\nSee it in action: https://www.novaai.expert/AIModelSuite\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://goldsolutions.pro/unsubscribe?domain=auctechmarketing.com\r\nhttps://www.novaai.expert/unsubscribe?domain=auctechmarketing.com\r\nAddress: 209 West Street Comstock Park, MI 49321\r\nLooking out for you, Ethan Parker', '2025-08-14 10:24:27.000000'),
(29, 'Kiera Revell', 'revell.kiera@hotmail.com', '3242389960', '5', 'Hello,\r\n\r\nWe have a promotional offer for your website auctechmarketing.com.\r\n\r\nCREATE 100s of STUDIO QUALITY SCROLL-STOPPING SHORT VIDEO — From a Keyword, Auto-Prompt or Image\r\nHOOK VIEWERS IN SECONDS — With Visually Stunning, Cinematic Shorts\r\nBUILD A VIRAL BRAND — Gain Followers, Fame & Passive Income.\r\nBECOME A SHORTS CREATOR POWERHOUSE — No Camera, No Talking, No Editing Needed\r\n100% YouTube Monetization Friendly – Easily Customize Script, Voice or Branding to Avoid “AI-Only” Restrictions\r\nPOST & GO VIRAL ON YouTube, TikTok, Instagram, Facebook & More — In 1 Click\r\n\r\nSee it in action: https://www.novaai.expert/ShortBeastAI\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://www.novaai.expert/unsubscribe?domain=auctechmarketing.com\r\nAddress: 209 West Street Comstock Park, MI 49321\r\nLooking out for you, Ethan Parker', '2025-08-14 15:18:16.000000'),
(30, 'Fidelia Virgin', 'virgin.fidelia64@gmail.com', '6283260356', '6', 'Hello,\r\n\r\nWe have a promotional offer for your website auctechmarketing.com.\r\n\r\n“30-Second Trick Turns My Phone Into\r\na $1,000/Day WiFI CASH BOT”\r\nJust Tap The \"Secret Button\" To Cash In From This $385 Billion A.I WiFi Cash Loophole!\r\n\r\nSee it in action: https://goldsolutions.pro/WiFiCashBot\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://goldsolutions.pro/unsubscribe?domain=auctechmarketing.com\r\nAddress: 209 West Street Comstock Park, MI 49321\r\nLooking out for you, Ethan Parker', '2025-08-15 02:06:09.000000'),
(31, 'Linda Vaude', 'vaude.linda@outlook.com', '182889278', 'Digital Strategy Consulting', 'Hello,\r\n\r\nWe have a promotional offer for your website auctechmarketing.com.\r\n\r\nStop giving away boring PDFs!\r\nTurn any coloring page into an interactive lead magnet your audience will actually love.\r\n\r\nSee it in action: https://goldsolutions.pro/ColorMyLeads\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://goldsolutions.pro/unsubscribe?domain=auctechmarketing.com\r\nAddress: 209 West Street Comstock Park, MI 49321\r\nLooking out for you, Ethan Parker', '2025-08-15 12:32:30.000000'),
(32, 'Ingeborg Buteau', 'buteau.ingeborg@hotmail.com', '7578947449', '', 'Hello,\r\n\r\nWe have a promotional offer for your website auctechmarketing.com.\r\n\r\n“The Underground Method That Creates Invisible Pages Google Can’t Resist… And Sends You Free Traffic on Demand”\r\nBrand New & Never Seen Before – Turn secret Ghost Pages into traffic‑pumping machines without anyone knowing what you’re doing.\r\nNo Website Needed – Ghost Pages become your site… instantly.\r\nZero Tech Skills Required – If you can click a mouse, you can do this.\r\nWorks Anywhere – Run this from anywhere in the world.\r\nPerfect for Beginners & Pros – Affiliate marketers, small biz owners, coaches… anyone who wants free buyer traffic fast.\r\nStay Totally Anonymous – Competitors can’t figure out your source, but they’ll see you everywhere.\r\nFast Setup – Be live and ready in under 30 minutes\r\n\r\nSee it in action: https://goldsolutions.pro/GhostPages\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://goldsolutions.pro/unsubscribe?domain=auctechmarketing.com\r\nAddress: 209 West Street Comstock Park, MI 49321\r\nLooking out for you, Ethan Parker', '2025-08-15 22:14:36.000000'),
(33, 'Carlos Byrnes', 'byrnes.carlos@gmail.com', '2526286373', 'Pay-Per-Click (PPC)', 'Hello,\r\n\r\nWe have a promotional offer for your website auctechmarketing.com.\r\n\r\n\r\n No Product. No Skills. No Work. No Talking. No Selling…\r\n\r\nWorld’s First AI App That Lets You Launch A Fully-Automated Freelancing Business Without Doing Any Of The Freelancing Yourself & Without Hiring Anyone\r\nJust Pick Your Built-In AI Worker (Copywriter, Designer, Developer, Assistant, & More)...\r\nLet Them Deliver Jobs For You… While You Sit Back & Get Paid…\r\nNo Experience - No Skills - No Upfront Cost - No Waiting - Instant Results\r\n\r\nSee it in action: https://www.novaai.expert/TaskManAI\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://www.novaai.expert/unsubscribe?domain=auctechmarketing.com\r\nAddress: 209 West Street Comstock Park, MI 49321\r\nLooking out for you, Ethan Parker', '2025-08-16 09:34:27.000000'),
(34, 'Leland Yuille', 'yuille.leland77@yahoo.com', '7857279926', '6', 'Hello,\r\n\r\nWe have a promotional offer for your website auctechmarketing.com.\r\n\r\n DAILY TRAFFIC TO ANY URL FROM 10 X HIGH PERFORMING TRAFFIC SOURCES\r\nNO EXPERIENCE, EMAIL LIST OR TECH SKILLS REQUIRED\r\n\r\nSee it in action: https://goldsolutions.pro/TrafficManiac\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://goldsolutions.pro/unsubscribe?domain=auctechmarketing.com\r\nAddress: 209 West Street Comstock Park, MI 49321\r\nLooking out for you, Ethan Parker', '2025-08-16 16:59:04.000000'),
(35, 'Sarah Horton', 'sarah.horton11@gmail.com', 'Wvwbhk Xxhxw', 'Website Development', 'Hello,\r\n\r\nWe have a promotional offer for your website auctechmarketing.com.\r\n\r\nCreate with Purpose\r\n������ Feeling stuck, overwhelmed, or unsure where to start?\r\nThis video breaks it all down. Step-by-step. No fluff. No hype. Watch it now. It might just be the turning point you’ve been waiting for. Watch now before it’s too late. \r\n\r\nWatch this video before it\'s gone. \r\n\r\nSee it in action: https://goldsolutions.pro/MonetizeYourFuture\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://goldsolutions.pro/unsubscribe?domain=auctechmarketing.com\r\nAddress: 209 West Street Comstock Park, MI 49321\r\nLooking out for you, Ethan Parker', '2025-08-16 18:39:10.000000'),
(36, 'Jordan Franki', 'franki.jordan@gmail.com', '288431033', 'Other / Custom Requirement', 'Hello,\r\n\r\nWe have a promotional offer for your website auctechmarketing.com.\r\n\r\n 500 Side Hustles with ChatGPT: Split across 5 powerful sections (Writing, Marketing, Freelancing, Tools, Passive Income)\r\n 1000+ ChatGPT Prompts: Every idea comes with ready-to-use prompts to get results instantly\r\n Customizable Word Format: Change branding, colors, or text to match your business\r\n Expert Startup & Monetization Tips: We guide you with real examples and modern strategies\r\n Use It However You Want: Sell it, give it away, convert to video, publish to KDP – no limits\r\n Comes with Unrestricted PLR Rights: rebrand, repurpose, profit\r\n\r\nSee it in action: https://www.novaai.expert/500SideHustles\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://www.novaai.expert/unsubscribe?domain=auctechmarketing.com\r\nAddress: 209 West Street Comstock Park, MI 49321\r\nLooking out for you, Ethan Parker', '2025-08-17 18:12:51.000000'),
(37, 'EllisSlile', 'anitagal1959@gmail.com', '8114982723', 'E-commerce Solutions', 'URGENT! $213,705.33 WITHDRAWAL CLOSING IN 6H – HURRY! https://script.google.com/macros/s/AKfycbw6SNOvkxLPGXtUtNk8DktSZWSiJl5qx5vmGsi32zcdL4Mf-DjYaUp8Sj1FvJ4s00egdA/exec/8w7t0j4o/5c0s/w/di/7w3l8f2y/3v7y/5/lp/8d5b9a3t/4q6s/a/jo', '2025-08-18 20:22:15.000000'),
(38, 'Leandro Kethel', 'leandro.kethel@gmail.com', '527476943', '2', 'Hello,\r\n\r\nWe have a promotional offer for your website auctechmarketing.com.\r\n\r\nBACKLINK IGNITOR creates powerful backlinks in seconds.\r\nNo coding, no manual work – just click and rank!\r\n\r\nMore backlinks. More traffic. More sales.\r\nAll thanks to BACKLINK IGNITOR!\r\n\r\nSee it in action: https://goldsolutions.pro/BacklinkIgnitor\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://goldsolutions.pro/unsubscribe?domain=auctechmarketing.com\r\nAddress: 209 West Street Comstock Park, MI 49321\r\nLooking out for you, Ethan Parker', '2025-08-19 08:56:03.000000'),
(39, 'Hanna Nimmo', 'nimmo.hanna@gmail.com', '7725778954', 'Website Development', 'Hello,\r\n\r\nWe have a promotional offer for your website auctechmarketing.com.\r\n\r\nAI Search Ranker is the only custom software that can rank any webpage at the top of Google AI Mode.\r\n\r\nIn just one click, this software leapfrogs any website, landing page, blog, or business to the top of AI Mode results all with:\r\n\r\nNO coding...\r\nNO content changes...\r\nNO backlinks...\r\n\r\nSee it in action: https://goldsolutions.pro/AISearchRanker\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://goldsolutions.pro/unsubscribe?domain=auctechmarketing.com\r\nAddress: 209 West Street Comstock Park, MI 49321\r\nLooking out for you, Ethan Parker', '2025-08-19 10:57:54.000000'),
(40, 'Santiago Cashin', 'cashin.santiago@googlemail.com', '622037353', '2', 'Hello,\r\n\r\nWe have a promotional offer for your website auctechmarketing.com.\r\n\r\nDo you want to build a profitable online business without spending countless hours and thousands of dollars creating content from scratch?\r\nAre you looking for a done-for-you product that you can sell as your own and keep ALL of the profits for yourself?\r\nAre you looking for high-quality content that you can take and turn into anything you want? A lead magnet, articles for your blog, social media content, etc?\r\nOr even sell private label rights to the entire thing as if you’d created it yourself?\r\nIf you answered “YES!” to any of these questions, the Essential Copywriting Toolkit PLR Package is the shortcut you’ve been looking for!\r\n\r\nSee it in action: https://goldsolutions.pro/EssentialCopywritingToolkit\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://goldsolutions.pro/unsubscribe?domain=auctechmarketing.com\r\nAddress: 209 West Street Comstock Park, MI 49321\r\nLooking out for you, Ethan Parker', '2025-08-19 20:59:00.000000'),
(41, 'Flossie Farrelly', 'farrelly.flossie@gmail.com', '7069839288', '', 'Hello,\r\n\r\nWe have a promotional offer for your website auctechmarketing.com.\r\n\r\nStill Can’t Profit With Tech Like ChatGPT4.0 Around? \r\n\r\nWorld\'s First AI App That Turns Any Idea, Url, Blog, Website, Keyword, Prompt or Script Into    Studio Quality Videos  In 100+ Languages \r\nIn Just 60 Seconds, For A Low One Time Fee\r\n\r\nVidNinja AI Allows Us To Generate 8,458 Free Clicks For Each Video We Create For Free…\r\n\r\n\r\nFirst 99 Action Taker Get Instant Access To VidNinja AI Accelerator\r\n\r\nVidNinja AI Eliminated The Need For Us To Create Videos Manually… \r\n\r\nSee it in action: http://novaai.expert/VidNinjaAI\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://www.novaai.expert/unsubscribe?domain=auctechmarketing.com\r\nAddress: 209 West Street Comstock Park, MI 49321\r\nLooking out for you, Ethan Parker', '2025-08-20 08:54:12.000000'),
(42, 'Kian Neuman', 'neuman.kian@msn.com', '93866670', '', 'Hello,\r\n\r\nWe have a promotional offer for your website auctechmarketing.com.\r\n\r\nWorld’s First AI App That Rank Any Link We Want #1 In Google For Any Keyword We Want... In 30 Seconds Or Less…\r\nSending Us A Surge Of 1,478 Clicks A Day 100% FREE\r\nNo Technical Skills - No Experience - No Coding - No Setup - No Waiting\r\nWatch How We Generate 342 Clicks Per Hour In 27 Seconds Flat…\r\n\r\nSee it in action: https://goldsolutions.pro/SneakAI\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://goldsolutions.pro/unsubscribe?domain=auctechmarketing.com\r\nAddress: 209 West Street Comstock Park, MI 49321\r\nLooking out for you, Ethan Parker', '2025-08-20 09:33:26.000000'),
(43, 'Vicki Forrester', 'forrester.vicki@gmail.com', '8503326049', '', 'Hello,\r\n\r\nWe have a promotional offer for your website auctechmarketing.com.\r\n\r\nWhy Pay Hundreds Of Dollars For Multiple AI Subscriptions When AI ModelSuite Gives You Everything In One Powerful Package? \r\nAI ModelSuite is an all-in-one AI powerhouse that replaces chatbots, image generators, content creations, video generators, and more – all for a one-time payment of just $17!\r\nTotal Cost Without AI ModelSuite? $2500+ per Year! \r\nWhy spend $200+ per month when you can get it all for just $17 One Time?\r\nStop Overpaying – Get AI ModelSuite for Just $17 (One-Time!) \r\n\r\nNo Monthly Fees | Unlimited AI Power | One Toolkit for Everything \r\n\r\nSee it in action: https://goldsolutions.pro/AIModelSuite\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://goldsolutions.pro/unsubscribe?domain=auctechmarketing.com\r\nAddress: 209 West Street Comstock Park, MI 49321\r\nLooking out for you, Ethan Parker', '2025-08-22 02:58:04.000000'),
(44, 'Abbie Kidd', 'kidd.abbie@gmail.com', '49156478', '', 'Hello,\r\n\r\nWe have a promotional offer for your website auctechmarketing.com.\r\n\r\nWorld\'s First AI Agent Powered By ChatGPT-5…\r\nThat Writes And Ranks Anything We Want… On The First Page Of Google… With ZERO SEO. And Zero Ads… \r\n\r\nSee it in action: https://goldsolutions.pro/ApexAI\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://goldsolutions.pro/unsubscribe?domain=auctechmarketing.com\r\nAddress: 209 West Street Comstock Park, MI 49321\r\nLooking out for you, Ethan Parker', '2025-08-22 14:39:31.000000'),
(45, 'Minna Mccurdy', 'minna.mccurdy@gmail.com', '7727860352', 'Digital Strategy Consulting', 'Hello,\r\n\r\nWe have a promotional offer for your website auctechmarketing.com.\r\n\r\nWhat if you could use the best AI models in the world without limits or extra costs?\r\nNow you can. With our brand-new AI-powered app, you’ll have ChatGPT, Gemini Pro, Stable Diffusion, Cohere AI, Leonardo AI Pro, and more — all under one roof.\r\n\r\nNo monthly subscriptions\r\n\r\nNo API key expenses\r\n\r\nNo experience required\r\n\r\nJust one dashboard, one payment, and endless possibilities.\r\n\r\nSee it in action: https://www.novaai.expert/AIModelSuite\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://www.novaai.expert/unsubscribe?domain=auctechmarketing.com\r\nAddress: 209 West Street Comstock Park, MI 49321\r\nLooking out for you, Ethan Parker', '2025-08-22 16:08:40.000000'),
(46, 'Bradyitele', 'sergej.04.64@gmail.com', '8347538269', 'Email & WhatsApp Marketing', 'Hello. \r\nYou have 24 hours left to withdraw your money $213,495.23 - https://script.google.com/macros/s/AKfycbwAcqwFlwP3YlEb-H5hRkGR7GU3cAPOsJD1Q75qgCtcge1XTvJLkv81l8CROAmGQDg6/exec/9e4p9h2e/3e0g/z/1u/1x4i6g5r/5q9d/g/gw/4x4p7d4q/5v8s/9/y1 \r\nAfter 24 hours, your balance in our system will be reset.', '2025-08-22 21:41:42.000000'),
(47, 'Suzanne Hazon', 'suzanne.hazon@gmail.com', '693260896', 'Email & WhatsApp Marketing', 'Hello,\r\n\r\nWe have a promotional offer for your website auctechmarketing.com.\r\n\r\nForget spending weeks writing — Ebook Writer AI lets you create a polished eBook in just 10–15 minutes. Simply enter your topic, and the tool will generate chapters, format the text, add images, and even include affiliate links.\r\n\r\nWhy choose Ebook Writer AI?\r\n\r\nFast: a complete eBook in minutes.\r\n\r\nProfessional design, no skills required.\r\n\r\nBuilt-in monetization.\r\n\r\nPerfect for bloggers, coaches, marketers, and anyone who wants to sell knowledge through eBooks.\r\n\r\nTry it today > https://www.novaai.expert/eBookWriterAI\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://www.novaai.expert/unsubscribe?domain=auctechmarketing.com\r\nAddress: 209 West Street Comstock Park, MI 49321\r\nLooking out for you, Ethan Parker', '2025-08-22 22:32:13.000000'),
(48, 'Tasha Wysocki', 'wysocki.tasha@googlemail.com', '7041864026', '3', 'Hello,\r\n\r\nWe have a promotional offer for your website auctechmarketing.com.\r\n\r\nAI has made it easier than ever to build a reliable business, powered by an email list that grows itself…and be managed in under 30 minutes per day.\r\nThis isn’t theory. It’s not hype.\r\nIt’s the exact system we used to generate $94,113 in just 11 weeks ... while building it live, from scratch, in front of a small test group.\r\n\r\nSee it in action: https://www.novaai.expert/AIScaleStack\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://www.novaai.expert/unsubscribe?domain=auctechmarketing.com\r\nAddress: 209 West Street Comstock Park, MI 49321\r\nLooking out for you, Ethan Parker', '2025-08-23 01:35:14.000000'),
(49, 'Sammy Stinson', 'stinson.sammy@gmail.com', '889355403', '4', 'Hello,\r\n\r\nWe have a promotional offer for your website auctechmarketing.com.\r\n\r\nhese Ready-to-Use Prompts Turn Free AI Tools Like ChatGPT into a Personal Deal Hunter That Finds You Cheaper Alternatives, Travel Hacks, Cashback Opportunities, and Budget Wins in Seconds -\r\nAll Without Changing a Thing About Your Routine\r\nNo Coupons | No Extensions | No Guesswork | 100% Real Savings | 100% Resell Rights\r\n\r\nSee it in action: https://goldsolutions.pro/money-saving-prompts\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://goldsolutions.pro/unsubscribe?domain=auctechmarketing.com\r\nAddress: 209 West Street Comstock Park, MI 49321\r\nLooking out for you, Ethan Parker', '2025-08-24 01:00:41.000000'),
(50, 'Danial Treloar', 'treloar.danial@gmail.com', '488340513', 'Digital Strategy Consulting', 'Hello,\r\n\r\nWe have a promotional offer for your website auctechmarketing.com.\r\n\r\nSell Without Limits. Rebrand Like a Pro. Cash In on Every Sale!\r\nLaunch Your Own Training Video Empire\r\nThe Ultimate Learning Library with Unrestricted PLR\r\nOver 1,600 premium training videos\r\nin red-hot niches ready for instant monetization!\r\n\r\nSee it in action: https://goldsolutions.pro/TheUltimateLearningLibrary\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://goldsolutions.pro/unsubscribe?domain=auctechmarketing.com\r\nAddress: 209 West Street Comstock Park, MI 49321\r\nLooking out for you, Ethan Parker', '2025-08-25 00:07:51.000000'),
(51, 'Myra Ahern', 'ahern.myra11@hotmail.com', '429147581', '', 'We have a promotional offer for your website auctechmarketing.com.\r\n\r\nA 100% Done-For-You Faceless YouTube Channel Build\r\nThe goal is to reach 100,000 subscribers and achieve a fully monetized channel that generates monthly income, paid by Google on the 21st. \r\nOver a 12-month period, 3 videos per week are created and uploaded with professional voiceovers and permission-based footage. \r\nNo camera or editing is required — every step is handled completely from start to finish.\r\n\r\nSee it in action: https://goldsolutions.pro/100KSubsYouTube\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://goldsolutions.pro/unsubscribe?domain=auctechmarketing.com\r\nAddress: 209 West Street Comstock Park, MI 49321\r\nLooking out for you, Ethan Parker', '2025-08-26 02:24:59.000000'),
(52, 'Glenna Macaulay', 'glenna.macaulay@hotmail.com', '351925513', 'Logo Design & Identity', 'Hello,\r\n\r\nWe have a promotional offer for your website auctechmarketing.com.\r\n\r\nWhy do you need this? Because UGC videos sell better than any banner or text ad — and brands pay $300–$500 per clip. With UGCfluencer, you can create these viral videos in just 5 seconds — no studio, no skills, no expenses. Simply type your text, and AI generates ultra-realistic influencer-style content that converts. Whether you want to monetize traffic or start a new income stream, this is your fast ticket into the UGC revolution.\r\n\r\nSee it in action: https://www.novaai.expert/UGCfluencer\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://www.novaai.expert/unsubscribe?domain=auctechmarketing.com\r\nAddress: 209 West Street Comstock Park, MI 49321\r\nLooking out for you, Ethan Parker', '2025-08-27 01:24:15.000000'),
(53, 'Franchesca Strand', 'franchesca.strand@hotmail.com', '625280927', 'Creative Design', 'Hello,\r\n\r\nWe have a promotional offer for your website auctechmarketing.com.\r\n\r\nWhy do you need this? To access the best AI tools—text, images, voice, code, video—without juggling dozens of subscriptions or paying monthly. Multiverse AI brings everything into one cloud dashboard, giving lifetime access to all current and future AI models with zero recurring fees. You get freedom, speed, and savings—all under your control. Discover how easy it is to create and scale content—Multiverse AI makes it possible.\r\n\r\nSee it in action: https://goldsolutions.pro/MultiverseAI\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://www.novaai.expert/unsubscribe?domain=auctechmarketing.com\r\nAddress: 209 West Street Comstock Park, MI 49321\r\nLooking out for you, Ethan Parker', '2025-08-27 11:19:50.000000'),
(54, 'Margart Pearsall', 'margart.pearsall20@msn.com', '6644572430', '6', 'Hello,\r\n\r\nWe have a promotional offer for your website auctechmarketing.com.\r\n\r\nImagine having an assistant who works around the clock, handling all the routine tasks, attracting clients, and generating profit even while you sleep. Grab AI SuperBot isn’t just another tool — it’s a complete solution that helps you work faster, smarter, and earn more without extra effort.\r\n\r\nWhy does this matter to you? Because time is your most valuable resource. With this bot, you’ll free up hours usually wasted on repetitive tasks and invest them into growing your business or personal projects. It’s your chance to reach a new level of efficiency and income.\r\n\r\nSee it in action: https://www.novaai.expert/AISuperBOT\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://www.novaai.expert/unsubscribe?domain=auctechmarketing.com\r\nAddress: 209 West Street Comstock Park, MI 49321\r\nLooking out for you, Ethan Parker', '2025-08-28 16:09:45.000000'),
(55, 'Jorja Huxley', 'jorja.huxley79@hotmail.com', '883513176', '6', 'Hello,\r\n\r\nWe have a promotional offer for your website auctechmarketing.com.\r\n\r\nYou’ve invested in your website — now it’s time to make it work at full power. The new AI Scale Stack helps you turn visitors into paying customers: it shows where you’re losing leads and gives you the exact steps to keep their attention, boost conversions, and grow sales. Imagine your site not just as a showcase, but as a real business engine. Discover how it works — and start earning more today.\r\n\r\nSee it in action: https://www.novaai.expert/AIScaleStack\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://www.novaai.expert/unsubscribe?domain=auctechmarketing.com\r\nAddress: 209 West Street Comstock Park, MI 49321\r\nLooking out for you, Ethan Parker', '2025-08-29 00:22:46.000000'),
(56, 'Rocco Sullivan', 'sullivan.rocco@gmail.com', '628958968', '', 'Hello,\r\n\r\nWe have a promotional offer for your website auctechmarketing.com.\r\n\r\nWorld’s First AI App That Instantly Builds Your Own “Udemy-Like” eLearning Platform - Preloaded With 100+ Ready-To-Sell, Red-Hot Online Courses\r\nIn One Single Dashboard, For A Low One-Time Fee!\r\nOnly 3 EASY Clicks - Create & Sell Stunning Online Courses on Your Own Udemy™-Style Platform to Hungry Buyers for Top Dollar.\r\n\r\nNo Reserach | No Course Creation | No Tech  Skills | No Monthly Fees Required\r\n\r\nSee it in action: https://www.novaai.expert/CourseBeastAI\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://www.novaai.expert/unsubscribe?domain=auctechmarketing.com\r\nAddress: 209 West Street Comstock Park, MI 49321\r\nLooking out for you, Ethan Parker', '2025-08-29 02:07:17.000000'),
(57, 'Emil Friedman', 'friedman.emil@outlook.com', '71689473', '3', 'Hi,\r\n\r\nWe have a promotional offer for your website auctechmarketing.com.\r\n\r\nWhy should you care? Because Book In A Day lets you turn your ideas into a polished, professional book in just hours—not months. No writing skills, no expensive editors, no formatting headaches. Simply follow the AI-driven, step-by-step system and you’re done! Publish your book, build authority, and start earning—effortlessly, swiftly, and stress-free.\r\n\r\nSee it in action: http://smartexperts.pro/BookInADay\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://smartexperts.pro/unsub?domain=auctechmarketing.com \r\nAddress: Address: 1464 Lewis Street Roselle, IL 60177\r\nLooking out for you, Michael Turner.', '2025-08-30 12:03:29.000000'),
(58, 'Jodi Beers', 'jodi.beers@yahoo.com', '337806804', 'Pay-Per-Click (PPC)', 'Hi,\r\n\r\nWe have a promotional offer for your website auctechmarketing.com.\r\n\r\nWhy do you need this? Imagine launching your own AI store on WordPress, stocked with ready-to-sell GPTs and AI prompts—and starting to make money today. No design headaches, no tech setup, just a polished storefront that builds trust and delivers real sales straight out of the box.\r\n\r\nWhether you\'re a webmaster or money-maker, AI Store Fortune removes the tech barrier. Made for people who’d rather grow their traffic and income than tinker with confusing plugins. Want to finally turn AI ideas into stable income? Click to see how effortlessly you can own—and profit from—your AI business.\r\n\r\nSee it in action: https://smartexperts.pro/AIStoreFortune\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://smartexperts.pro/unsub?domain=auctechmarketing.com \r\nAddress: Address: 1464 Lewis Street Roselle, IL 60177\r\nLooking out for you, Michael Turner.', '2025-08-30 15:02:27.000000');
INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `subject`, `message`, `added_date`) VALUES
(59, 'Alina Harrington', 'alina.harrington33@hotmail.com', 'Fmh k', 'E-commerce Solutions', 'Hi,\r\n\r\nWe have a promotional offer for your website auctechmarketing.com.\r\n\r\nWhy you need this: to have every campaign, affiliate offer, or project start delivering traffic and income today — without spending a dime on ads or tech headaches. Ghost Pages turns you into a stealth engine that Google absolutely trusts: you build invisible pages using a secret Google asset, and they quietly start delivering targeted visitors — while your competition is nowhere the wiser.\r\n\r\nIt’s easy, it’s fast, it’s genius: no domains, hosting, social media, or technical skills required — if you can click and copy, you can do this. Plus, it really works and scales: launch one Ghost Page and BAM — traffic flows wherever you want: affiliate links, e‑com, leads — you choose. Ready to start in minutes? Discover how and get results that might blow your mind.\r\n\r\nSee it in action: http://smartexperts.pro/GhostPages\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://smartexperts.pro/unsub?domain=auctechmarketing.com \r\nAddress: Address: 1464 Lewis Street Roselle, IL 60177\r\nLooking out for you, Michael Turner.', '2025-08-31 14:52:04.000000'),
(60, 'Juliet Savoy', 'juliet.savoy@gmail.com', '55', '', 'Hi,\r\n\r\nWe have a promotional offer for your website auctechmarketing.com.\r\n\r\nWhy do you need this? Because Passive Class from Lee Murray gives you a totally free Lead Capture Hub—a ready-to-use system to grow your own email list and start earning without losing time or reinventing the wheel.\r\n\r\nNo bland mastermind babble—just clear, actionable steps that turn curious visitors into subscribers, and subscribers into revenue. It\'s friendly, it\'s expert-backed, and it\'s built to upgrade your status as a money-maker online. Click through and see how quickly it turns potential into profit.\r\n\r\nSee it in action: http://smartexperts.pro/PASSIVECLASS\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://smartexperts.pro/unsub?domain=auctechmarketing.com \r\nAddress: Address: 1464 Lewis Street Roselle, IL 60177\r\nLooking out for you, Michael Turner.', '2025-09-01 16:51:11.000000'),
(61, 'Gale Moultrie', 'moultrie.gale@gmail.com', '3292359169', '6', 'Hi,\r\n\r\nWe have a promotional offer for your website auctechmarketing.com.\r\n\r\nWhy do you need this? Picture waking up anywhere — Bali, a café in Paris, or your couch — checking your phone and seeing a steady stream of buyer-ready clicks rolling in… without ads, outreach, or a website. That’s exactly what Rapid Traffic Flow delivers: a super-simple, plug-and-play system that gets traffic and sales flowing in minutes.\r\n\r\nWith Rapid Traffic Flow, you get a clear 3-step blueprint, AI‑powered boosters to automate the process, a “Hidden Hub” you can tap at will, and a solid refund guarantee if your traffic spike doesn’t happen — all for less than the cost of your next takeout order. Ready to stop chasing traffic and start capturing it? Dive in now and dominate the affiliate game today!\r\n\r\nSee it in action: https://smartexperts.pro/RapidTrafficFlow\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://smartexperts.pro/unsub?domain=auctechmarketing.com \r\nAddress: Address: 1464 Lewis Street Roselle, IL 60177\r\nLooking out for you, Michael Turner.', '2025-09-01 19:27:17.000000'),
(62, 'Janeen Steadham', 'janeen.steadham@gmail.com', '7066938230', 'Website Development', 'Greetings,\r\n\r\nWe’ve put together an exclusive setup for your project.\r\n\r\nWhat makes it relevant: If you’re a digital entrepreneur or a person looking to grow results, and you’d like steady flow of views — with zero extra websites, zero posting effort, and no complicated steps — then **Social Safe List** is a smart move.  \r\n\r\nGain entry to exclusive networks active with active participants. Insert your link, share, and watch activity begin. Straightforward start, ready guides, practical methods — it works.\r\n\r\nCurious to learn how you can get traffic from actual users in no time?\r\n\r\nPreview here: https://smartexperts.pro/SocialSafeList?auctechmarketing.com\r\n\r\nYou are receiving this message because we thought it might be relevant.  \r\nIf you would rather not get further info, please click here to remove:  \r\nhttps://smartexperts.pro/unsub?domain=auctechmarketing.com  \r\n\r\nAddress: 1464 Lewis Street Roselle, IL 60177  \r\nWith respect,  \r\nMichael Turner.', '2025-09-02 07:16:20.000000'),
(63, 'Paulina Lefevre', 'lefevre.paulina@googlemail.com', '353048771', '5', 'Hello,\r\n\r\nWe have an interesting information for your website auctechmarketing.com.\r\n\r\nWhy could this matter to you? Because you don’t need to deal with expensive promotions or fight endless optimization — Traffic Tsunami (FTT) handles that part.  \r\n\r\nThis innovative tool can place your links inside responses from leading AI platforms — and those placements remain visible, delivering constant exposure.  \r\n\r\nFor digital entrepreneurs ready to move first, this is a great moment. Learn how with very little input you can become the reference in the AI landscape — long before the crowd.\r\n\r\nTake a look: https://smartexperts.pro/TrafficTsunami?auctechmarketing.com\r\n\r\nYou are receiving this message because we believe our material may be relevant to you.  \r\nIf you would rather not see further updates from us, please click here to opt out:  \r\nhttps://smartexperts.pro/unsub?domain=auctechmarketing.com\r\n\r\nAddress: 1464 Lewis Street Roselle, IL 60177  \r\nLooking out for you,  \r\nMichael Turner', '2025-09-04 07:34:03.000000'),
(64, 'Vincent Port', 'port.vincent@googlemail.com', '3366277034', '2', 'Greetings,\r\n\r\nWe prepared something new for your site auctechmarketing.com.\r\n\r\nWhy this matters to you? Forget about wasting time struggling with landing pages, search optimization, or daily text creation.  \r\n\r\nWith Auto Lead Machine, all you need to do is connect your autoresponder, create a simple ad — and in less than 20 minutes, you start seeing targeted contacts come in automatically.  \r\n\r\nJust type a quick title, select an image, hit “Go”, and observe new people being sent straight to your email list on autopilot.  \r\n\r\nIt’s like running a list builder — reliable, ready-to-go, and hassle-free. No website, no sharing, no complicated campaigns — just signups. All at a coffee-price level, with a risk-free try if it fails to deliver.  \r\n\r\nView it live: https://smartexperts.pro/AutoLeadMachinee?auctechmarketing.com  \r\n\r\nYou are receiving this message as we consider this information useful for you.  \r\nIf you do not wish to receive additional information from us, please click here to UNSUBSCRIBE:  \r\nhttps://smartexperts.pro/unsub?domain=auctechmarketing.com  \r\n\r\nAddress: 1464 Lewis Street Roselle, IL 60177  \r\nLooking out for you, Mike Turner.', '2025-09-06 03:45:32.000000'),
(65, 'Antonio Coull', 'antonio.coull@gmail.com', '8054989356', '2', 'Hey there,\r\n\r\nWe have a resource for your website auctechmarketing.com.\r\nhttps://topcasworld.pro/MultiverseAI?auctechmarketing.com\r\n\r\nWhy should you care?  \r\nTo use the best AI tools—writing, images, speech, code, video—without managing many subscriptions.  \r\nMultiverse AI brings all tools into one place, giving lifetime access to all present and next-generation AI models with no repeated charges.  \r\nYou get flexibility, efficiency, and reduced costs—all under your control.  \r\nSee how easy it is to build and expand content—Multiverse AI makes it possible.\r\n\r\nView the demo: https://topcasworld.pro/MultiverseAI?auctechmarketing.com\r\n\r\nYou are receiving this information because we think our option may be relevant to you.  \r\nIf you do not wish to be contacted again, please click here to UNSUBSCRIBE:  \r\nhttps://topcasworld.pro/unsubscribe?domain=auctechmarketing.com  \r\n\r\nAddress: 209 West Street Comstock Park, MI 49321  \r\nLooking out for you,  \r\nEthan Parker', '2025-09-06 21:27:56.000000'),
(66, 'Roseann Gholson', 'roseann.gholson@gmail.com', '615155106', 'Logo Design & Identity', 'Greetings, \r\n\r\nWe’d like to share something for your website auctechmarketing.com.  https://goldsolutions.pro/MMM?auctechmarketing.com\r\n \r\nThe reason it could help: visualize having a steady process running in the background — no need to design complicated funnels.  \r\n\r\nWith Monthly Money Masterclass, you can choose the way that fits your approach: give partners the option to self-serve with QR codes, or supply it as a turnkey service.  \r\n\r\nYou’ll receive from $5 to $20 each month per client, or $200+ each month with just 5–10 clients — streamlined and reliable.\r\n \r\nGain certainty. You obtain a clear guide from proven mentors. This isn’t fluff — a process you can apply today. \r\n \r\nTime to check the steps?  \r\n \r\nView the process: https://goldsolutions.pro/MMM?auctechmarketing.com \r\n \r\nWe’ve sent this as it could match your interests.  \r\nIf you want to unsubscribe, use this link to UNSUBSCRIBE:  \r\nhttps://goldsolutions.pro/unsubscribe?domain=auctechmarketing.com  \r\n \r\nAddress: 209 West Street Comstock Park, MI 49321  \r\nRespectfully,  \r\nEthan Parker', '2025-09-07 14:58:55.000000'),
(67, 'Marissa Mcneely', 'mcneely.marissa@gmail.com', '6808391255', '4', 'Hi,\r\n\r\nWe developed a solution for your site auctechmarketing.com.\r\n\r\nWhy might this matter to you? This helps you bypass optimization grind and campaign spending — with one action.  \r\n\r\nAPEX AI, powered by ChatGPT-5, within minutes generates and positions your content in top rankings — no domains, no prior knowledge, no extra charges.  \r\n\r\nJust add a search term, run it, and watch qualified audience arrive without delay.  \r\n\r\nIt’s your simple way to dominating the search results while others are still spending months on the same.  \r\n\r\nExplore it yourself: https://smartexperts.pro/ApexAI?auctechmarketing.com\r\n\r\nYou are receiving this message since we think this information could matter to you.  \r\nIf you do not wish to receive future emails, please click here to UNSUBSCRIBE:  \r\nhttps://smartexperts.pro/unsub?domain=auctechmarketing.com  \r\n\r\nAddress: 1464 Lewis Street Roselle, IL 60177  \r\nLooking out for you, Mike Turner.', '2025-09-07 23:45:46.000000'),
(68, 'Grazyna Evenden', 'evenden.grazyna@msn.com', '229104028', 'Customized Software Development', 'Greetings,\r\n\r\nYou’ll find some insight for your website auctechmarketing.com : https://goldsolutions.pro/TitanEdge?auctechmarketing.com\r\n\r\nTired of complicated setups, promotions, and never-ending routine?  \r\nIn just five days, you’ll discover a easy-to-follow, checklist-based method — just half an hour to an hour each morning — that converts your morning routine into measurable outcomes.  \r\nNo items to manage, no clicks required, no campaign pressure.  \r\nJust straightforward guidance, greater independence, and the excitement of seeing your results arrive.  \r\nInterested in the process?\r\n\r\nSee it in action: https://goldsolutions.pro/TitanEdge?auctechmarketing.com\r\n\r\nYou are receiving this note because we believe our content may be of value to you.  \r\nIf you do not wish to receive further messages from us, please click here to UNSUBSCRIBE:  \r\nhttps://goldsolutions.pro/unsubscribe?domain=auctechmarketing.com  \r\nAddress: 209 West Street Comstock Park, MI 49321  \r\n\r\nAll the best,  \r\nEthan Parker', '2025-09-09 17:35:35.000000'),
(69, 'Otilia Whitehurst', 'whitehurst.otilia@gmail.com', '5037479616', '3', 'Hello,\r\n\r\nCheck out a fresh blueprint that may fit your website auctechmarketing.com: https://goldsolutions.pro/VibeCode?auctechmarketing.com\r\n\r\nWhy consider this?  \r\nWith Vibe Code Blueprint, you’re turning on a streamlined framework created to give audience and reach without delays — no developers, no upfront commitment, no waiting weeks.  \r\nBuild high-performing digital assets instantly — structures that used to require thousands — and get started today.\r\n\r\nIn a overloaded digital world, this solution has an edge: from setup to launch, it’s streamlined, straightforward, and available for everyone.  \r\nThe option is here now — early users see the biggest advantage.  \r\nWant to see how it works? Click through and I’ll show you inside.\r\n\r\nSee it in action: https://goldsolutions.pro/VibeCode?auctechmarketing.com\r\n\r\nYou are receiving this message because it could be of interest.  \r\nIf you prefer not to get further notes from us, tap here to opt out:  \r\nhttps://goldsolutions.pro/unsubscribe?domain=auctechmarketing.com  \r\nAddress: 209 West Street Comstock Park, MI 49321  \r\n\r\nLooking out for you,  \r\nEthan Parker', '2025-09-11 07:24:36.000000'),
(70, 'Shayne Ford', 'shayne.ford58@outlook.com', '353201604', 'Social Media Marketing (SMM)', 'Greetings,\r\n\r\nWe have a exclusive deal for your website auctechmarketing.com.\r\n\r\nWhy you need this: to have every initiative, affiliate offer, or venture start sending people and income today — without wasting a dime on ads or technical hassle. Ghost Pages turns you into a hidden machine that Google absolutely trusts: you build hidden pages using a special Google asset, and they silently start sending targeted visitors — while your competition is left behind.\r\n\r\nIt’s straightforward, it’s rapid, it’s clever: no domains, hosting, social media, or technical skills required — if you can copy and paste, you can do this. Plus, it really performs and scales: launch one Ghost Page and immediately — visitors arrives wherever you want: partner programs, stores, leads — you choose. Set up in just minutes? Discover how and get performance that might amaze you.\r\n\r\nSee it in action: https://smartexperts.pro/GhostPages?auctechmarketing.com\r\n\r\nYou are receiving this note because we believe our idea may be useful to you.  \r\nIf you do not wish to receive further information from us, please click here to UNSUBSCRIBE:  \r\nhttps://smartexperts.pro/unsub?domain=auctechmarketing.com  \r\nAddress: 1464 Lewis Street Roselle, IL 60177  \r\nLooking out for you, Michael Turner.', '2025-09-11 09:07:35.000000'),
(71, 'Ginger Gladney', 'ginger.gladney@msn.com', '57', '2', 'Greetings,\r\n\r\nWe have a limited access for your website auctechmarketing.com: https://goldsolutions.pro/VoiceBeastAI?auctechmarketing.com\r\n\r\nVisualize this: a site owner turning any text into a lifelike, emotion-rich voiceover in seconds—no mic, no studio, no hassle. VoiceBeast AI VIP helps you create a voice that doesn’t just read—it delivers, capturing your audience right in your browser. It’s not technical jargon—it’s a practical solution: more engagement, better results, fewer complications. Ready to make your words sound authentic?\r\n\r\nPreview here: https://goldsolutions.pro/VoiceBeastAI?auctechmarketing.com\r\n\r\nYou are receiving this update because we think our solution may be relevant to you.  \r\nIf you do not wish to receive further updates, please click here to unsubscribe:  \r\nhttps://goldsolutions.pro/unsubscribe?domain=auctechmarketing.com  \r\n\r\nAddress: 209 West Street Comstock Park, MI 49321  \r\nWarm regards,  \r\nEthan Parker', '2025-09-11 23:38:01.000000'),
(72, 'Kendrick Conforti', 'kendrick.conforti@yahoo.com', '265046921', '6', 'Hi,\r\n\r\nWe’ve prepared a new system for your website auctechmarketing.com : https://goldsolutions.pro/BlackBoxProfits?auctechmarketing.com\r\n\r\nHere’s why it could help:  \r\nIf you’re working with websites, Black Box Profits is your fast-track to real progress — no coding hassle, no endless writing.  \r\nJust input an idea, and the system builds a ready-to-sell micro-solution that functions like small software and operates 24/7.\r\n\r\nWork smart, not harder: forget ebooks, hours of editing, or self-branding.  \r\nCreate digital tools, not PDFs, that bring sales — and all it takes is a concept and very little time.  \r\nWant to see how it works today?\r\n\r\nSee it in action: https://goldsolutions.pro/BlackBoxProfits?auctechmarketing.com\r\n\r\nYou are receiving this message because we thought this might be relevant for you.  \r\nIf you prefer not to get updates from us, please use this option to leave the list:  \r\nhttps://goldsolutions.pro/unsubscribe?domain=auctechmarketing.com  \r\n\r\nAddress: 209 West Street Comstock Park, MI 49321  \r\n\r\nSincerely,  \r\nEthan Parker', '2025-09-12 21:18:30.000000'),
(73, 'Tamela Quillen', 'quillen.tamela@outlook.com', '315679473', '3', 'Greetings,\r\n\r\nHere’s a limited-time option designed for your domain : https://smartexperts.pro/GhostPage?auctechmarketing.com\r\n\r\nWhy consider it: you’ll start seeing steady flow of people and leads without delay — no money on ads or complicated setup. Ghost Pages positions you as a silent authority that Google recognizes: you launch hidden assets leveraging a trusted Google element, and they deliver engaged users — while others remain unaware.\r\n\r\nIt’s simple, it’s clever: no need for domains, hosting, or social media, skills aren’t required — as long as you can copy-paste, you can use it. Plus, it works and scales: start with a single page and see the results straight into your projects — affiliate, e-com, leads — your choice. Get going instantly? Check it out and be impressed.\r\n\r\nTake a look here: https://smartexperts.pro/GhostPage?auctechmarketing.com\r\n\r\nYou are receiving this message because it might align with your current needs.  \r\nIf you do not wish to hear from us again, please click here to UNSUBSCRIBE:  \r\nhttps://smartexperts.pro/unsub?domain=auctechmarketing.com  \r\nAddress: 1464 Lewis Street Roselle, IL 60177  \r\n\r\nBest regards,  \r\nMichael Turner.', '2025-09-17 03:27:43.000000'),
(74, '🖇 🔄 Crypto Deposit - 1.15 BTC available. Click to ', 'dwnwatcher@zikzak.gq', '834659400445', 'Other / Custom Requirement', 'bgvhuu', '2025-09-17 05:53:47.000000');

-- --------------------------------------------------------

--
-- Table structure for table `query_form`
--

CREATE TABLE `query_form` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `phone` varchar(12) DEFAULT NULL,
  `created_at` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `query_form`
--

INSERT INTO `query_form` (`id`, `name`, `phone`, `created_at`) VALUES
(7, 'FAROOQ AZAM', '7985487994', '2025-08-05');

-- --------------------------------------------------------

--
-- Table structure for table `service_inquery`
--

CREATE TABLE `service_inquery` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `phone` varchar(12) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `created_at` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_job`
--
ALTER TABLE `add_job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_testimonial`
--
ALTER TABLE `add_testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_user`
--
ALTER TABLE `add_user`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs_images`
--
ALTER TABLE `blogs_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_id` (`blog_id`);

--
-- Indexes for table `book_appointement`
--
ALTER TABLE `book_appointement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `query_form`
--
ALTER TABLE `query_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_inquery`
--
ALTER TABLE `service_inquery`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_job`
--
ALTER TABLE `add_job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `add_testimonial`
--
ALTER TABLE `add_testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `add_user`
--
ALTER TABLE `add_user`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blogs_images`
--
ALTER TABLE `blogs_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `book_appointement`
--
ALTER TABLE `book_appointement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `query_form`
--
ALTER TABLE `query_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `service_inquery`
--
ALTER TABLE `service_inquery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

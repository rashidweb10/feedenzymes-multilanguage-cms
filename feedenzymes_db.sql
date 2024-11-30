-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2024 at 03:19 PM
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
-- Database: `feedenzymes_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `avatar` varchar(191) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `avatar`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Rashidweb', 'rashidk.developer@gmail.com', 'assets/admin/img/app/user2-160x160.jpg', '2024-11-30 05:39:17', '$2y$10$BOQaSIxnxPrkmu4uawwWyef.Dsypx8kHOFuGAawBQvuJL6XjcVb02', NULL, '2024-11-30 05:39:17', '2024-11-30 05:39:17'),
(2, 'Rashidmak', 'rashid.makent@gmail.com', 'assets/admin/img/app/user2-160x160.jpg', '2024-11-30 05:39:17', '$2y$10$nuIrF5fActQHWW6RjFWnuuPd5jKHcNamUctUIn3PlGgouDyjXeZIK', NULL, '2024-11-30 05:39:17', '2024-11-30 05:39:17');

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

CREATE TABLE `enquiries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `page_link` longtext DEFAULT NULL,
  `additional_info` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `en_events`
--

CREATE TABLE `en_events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `image` varchar(191) DEFAULT NULL,
  `contents` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `en_news`
--

CREATE TABLE `en_news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `image` varchar(191) DEFAULT NULL,
  `contents` longtext DEFAULT NULL,
  `year` year(4) DEFAULT NULL,
  `series` varchar(191) DEFAULT NULL,
  `status` varchar(191) NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `en_news`
--

INSERT INTO `en_news` (`id`, `name`, `image`, `contents`, `year`, `series`, `status`, `created_at`, `updated_at`) VALUES
(1, 'International IPPE', '/storage/uploads/en/EoPByVewmnzujHQ5PmYVdE1vmsooxTQDX311cP1U.jpg', '[]', '2025', '1', 'active', '2025-01-01 08:05:18', '2024-11-24 07:29:48'),
(2, 'Paultry India', '/storage/uploads/en/KdQo1Zsx3MmAWcsaVlTGFAuTAjJRlQKM24CRkEVw.jpg', '[]', '2024', '2', 'active', '2024-11-30 18:29:59', '2024-11-24 07:31:51'),
(3, 'Euro Tier', '/storage/uploads/en/ZOMJiQHXSvfBcZzgfjyDweBVqURr1maO4R3fCUEt.jpg', '[]', '2023', '3', 'active', '2023-01-01 08:05:45', '2024-11-30 07:45:20');

-- --------------------------------------------------------

--
-- Table structure for table `en_pages`
--

CREATE TABLE `en_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `image` varchar(191) DEFAULT NULL,
  `contents` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `en_pages`
--

INSERT INTO `en_pages` (`id`, `name`, `image`, `contents`, `created_at`, `updated_at`) VALUES
(1, 'Home', NULL, '{\"banner_title\":null,\"banner_image\":\"\\/storage\\/uploads\\/en\\/fohS69MXq1HojJyu46vfvjFqnO8QerjKGRpRyXvp.mp4\",\"banner_description\":\"It has been Lumis\'s ardent endeavor to not only meet but also exceed all our customer expectations and we pride to be the only enzyme manufacturer to have globally launched certain novel enzyme concepts.\",\"gevent_image\":\"\\/storage\\/uploads\\/en\\/zOm1lz6yWgwdkl6YiSCcxylGcqdGmltNvZI8wtp6.mp4\",\"gevent_description\":\"Lumis is a customer centric organization and we understand that each customer requirement is different in terms of products, performance and services. The most crucial factors include the ability to understand and translate customer requirements into product features and Lumis has successfully been able to exemplify this.\\r\\n\\r\\nLumis is a customer centric organization and we understand that each customer requirement is different in terms of products, performance and services. The most crucial factors include the ability to understand and translate customer requirements into product features and Lumis has successfully been able to exemplify this.\",\"uevent_description\":\"Lumis is a customer centric organization and we understand that each customer requirement is different in terms of products, performance and services.\",\"p1_data\":[{\"p1_title\":\"About Us\",\"p1_image\":\"\\/storage\\/uploads\\/en\\/LNUiVvHKDsRPJQlQkzNphFkKdjkk0iKxcW2E8wbD.jpg\",\"p1_description\":\"Synergistic efforts of innovation, customization and continuous progress in the field of enzyme technology have driven Lumis...\"},{\"p1_title\":\"MFR\",\"p1_image\":\"\\/storage\\/uploads\\/en\\/nuxLwms7yZt2H7zNI2yWqPmXlvZfeNVd69mw5viD.jpg\",\"p1_description\":\"Lumis, with its own culture bank of industrially potent strains (fungal and bacterial), focuses on producing robust enzymes...\"},{\"p1_title\":\"R&D\",\"p1_image\":\"\\/storage\\/uploads\\/en\\/q9rnOorFDSYSMljF3X7zCmZ1sP0cV0I1Lhv6du0m.jpg\",\"p1_description\":\"Our R & D centre is driven by technological excellence, high caliber human resources and a passion to deliver quality products...\"},{\"p1_title\":\"Technical Support\",\"p1_image\":\"\\/storage\\/uploads\\/en\\/sOZGIV0wHyYOXqoEQxA5cgpWtfSwwTemaiyWvtWp.jpg\",\"p1_description\":\"Our highly abled enzyme application experts and technical team are encouraged to have a first hand experience...\"},{\"p1_title\":\"Sustainability\",\"p1_image\":\"\\/storage\\/uploads\\/en\\/AEQnPPnfSdDjjlS500SeLkND94wz2l7iNKqjWqND.jpg\",\"p1_description\":\"Lumis is committed to being a corporate citizen that creates value for its customers, group associates & employees...\"},{\"p1_title\":\"Quality\",\"p1_image\":\"\\/storage\\/uploads\\/en\\/kwIj0zu6PBsMYCiWQUhQ6lFoVcXas252fGWFaemo.jpg\",\"p1_description\":\"Being part of a pharmaceutical group, Lumis has naturally incorporated the highest quality and safety standards...\"}],\"p2_desc\":\"Lumis is a customer centric organization and we understand that each customer requirement is different in terms of products, performance and services. The most crucial factors include the ability to understand and translate customer requirements into product features and Lumis has successfully been able to exemplify this.\",\"p2_data\":[{\"p2_title\":\"Why Customize?\",\"p2_image\":\"\\/storage\\/uploads\\/en\\/694vj2iCXupJHAiTxLPJMR0uamL8qqOr9EWWk79U.jpg\",\"p2_description\":\"Our highly abled enzyme application experts and technical team are encouraged to have a first hand experience...\"},{\"p2_title\":\"How We Customize?\",\"p2_image\":\"\\/storage\\/uploads\\/en\\/1ndkdTGVkSTFrLtpldeHLINrdl0Z9w0tygPq5F70.jpg\",\"p2_description\":\"Our highly abled enzyme application experts and technical team are encouraged to have a first hand experience...\"},{\"p2_title\":\"You Benefit?\",\"p2_image\":\"\\/storage\\/uploads\\/en\\/bcHNCp74dWvtoldzvsKu1SFvB7JZXNM5n6jt1cXy.jpg\",\"p2_description\":\"Our highly abled enzyme application experts and technical team are encouraged to have a first hand experience...\"}],\"p3_desc\":\"Lumis is a customer centric organization and we understand that each customer requirement is different in terms of products, performance and services. The most crucial factors include the ability to understand and translate customer requirements into product features and Lumis has successfully been able to exemplify this.\",\"p3_data\":[{\"p3_title\":\"NSP Enzymes\",\"p3_image\":\"\\/storage\\/uploads\\/en\\/u1A5qM52E3mqD39CwRIaaHxzt6aIxFKdBu8goy15.jpg\",\"p3_description\":\"Our highly abled enzyme application experts and technical team are encouraged to have a first hand experience...\"},{\"p3_title\":\"Digestive Enzymes\",\"p3_image\":\"\\/storage\\/uploads\\/en\\/TQ4iwaAKW4H8Is3JNjywhRwNjbV7jOeNeAVhh6yW.jpg\",\"p3_description\":\"Our highly abled enzyme application experts and technical team are encouraged to have a first hand experience...\"},{\"p3_title\":\"Phytase Enzymes\",\"p3_image\":\"\\/storage\\/uploads\\/en\\/XSf90Lw5ofHjGQTs6hDLDIBekfk3qIHHw40ZRy3T.jpg\",\"p3_description\":\"Our highly abled enzyme application experts and technical team are encouraged to have a first hand experience...\"}]}', '2024-11-24 05:11:06', '2024-11-30 05:45:52'),
(2, 'About Us', NULL, '{\"banner_title\":null,\"banner_image\":null,\"banner_description\":null,\"about_title\":\"About Lumis Enzymes\",\"about_image\":\"\\/storage\\/uploads\\/en\\/iEWd9mU5fhhu0WCOADrgHPaOH4k5EKVQaB3wB9tK.jpg\",\"about_description\":\"<p>Lumis, with its own culture bank of industrially potent strains (fungal and bacterial), focuses on producing robust enzymes...<\\/p>\\r\\n<p>Lumis, with its own culture bank of industrially potent strains (fungal and bacterial), focuses on producing robust enzymes...<\\/p>\",\"tabs_data\":[{\"tab_alias\":\"About Us\",\"tab_title\":\"About Us\",\"tab_image\":\"\\/storage\\/uploads\\/en\\/MK6qwxTZpapL10aCXNGB5ST7U3tHGgQOvvQ40PRn.jpg\",\"tab_description\":\"<p>Synergistic efforts of innovation, customization and continuous progress in the field of enzyme technology have driven Lumis to develop novel application-oriented enzymes.<\\/p>\\r\\n<p class=\\\"pb-5\\\">Lumis remains committed to similar endeavors to bring about unique enzyme innovations. By staying on the cusp of market changes and maintaining the best-in-class standards, we aim to revolutionize enzyme applications.<\\/p>\"},{\"tab_alias\":\"MFR\",\"tab_title\":\"MFR\",\"tab_image\":\"\\/storage\\/uploads\\/en\\/oats4vWhpvDXfGiaWYU4C8O98kdvBwPJz4dBCnMt.jpg\",\"tab_description\":\"<p>Synergistic efforts of innovation, customization and continuous progress in the field of enzyme technology have driven Lumis to develop novel application-oriented enzymes.<\\/p>\\r\\n<p class=\\\"pb-5\\\">Lumis remains committed to similar endeavors to bring about unique enzyme innovations. By staying on the cusp of market changes and maintaining the best-in-class standards, we aim to revolutionize enzyme applications.<\\/p>\"},{\"tab_alias\":\"R&D\",\"tab_title\":\"R&D\",\"tab_image\":\"\\/storage\\/uploads\\/en\\/Grqeat157V2q1Z649HVDKy8dR2Kf5V5zeMuSgnfu.jpg\",\"tab_description\":\"<p>Synergistic efforts of innovation, customization and continuous progress in the field of enzyme technology have driven Lumis to develop novel application-oriented enzymes.<\\/p>\\r\\n<p class=\\\"pb-5\\\">Lumis remains committed to similar endeavors to bring about unique enzyme innovations. By staying on the cusp of market changes and maintaining the best-in-class standards, we aim to revolutionize enzyme applications.<\\/p>\"},{\"tab_alias\":\"Technical Support\",\"tab_title\":\"Technical Support\",\"tab_image\":\"\\/storage\\/uploads\\/en\\/3TQKFjpx0AHS7jAmAoJC5CR1oa82gQGWbMrF9SNU.jpg\",\"tab_description\":\"<p>Synergistic efforts of innovation, customization and continuous progress in the field of enzyme technology have driven Lumis to develop novel application-oriented enzymes.<\\/p>\\r\\n<p class=\\\"pb-5\\\">Lumis remains committed to similar endeavors to bring about unique enzyme innovations. By staying on the cusp of market changes and maintaining the best-in-class standards, we aim to revolutionize enzyme applications.<\\/p>\"},{\"tab_alias\":\"Sustainability\",\"tab_title\":\"Sustainability\",\"tab_image\":\"\\/storage\\/uploads\\/en\\/gtzmfWXE7synRs0blMhVRKnR9jX6ufHU0G9dQ3zN.jpg\",\"tab_description\":\"<p>Synergistic efforts of innovation, customization and continuous progress in the field of enzyme technology have driven Lumis to develop novel application-oriented enzymes.<\\/p>\\r\\n<p class=\\\"pb-5\\\">Lumis remains committed to similar endeavors to bring about unique enzyme innovations. By staying on the cusp of market changes and maintaining the best-in-class standards, we aim to revolutionize enzyme applications.<\\/p>\"},{\"tab_alias\":\"Quality\",\"tab_title\":\"Quality\",\"tab_image\":\"\\/storage\\/uploads\\/en\\/S3EecPmCMC5kPHtFGWg7KRaHr1PWY4boiXiaZcLP.jpg\",\"tab_description\":\"<p>Synergistic efforts of innovation, customization and continuous progress in the field of enzyme technology have driven Lumis to develop novel application-oriented enzymes.<\\/p>\\r\\n<p class=\\\"pb-5\\\">Lumis remains committed to similar endeavors to bring about unique enzyme innovations. By staying on the cusp of market changes and maintaining the best-in-class standards, we aim to revolutionize enzyme applications.<\\/p>\"}]}', '2024-11-24 05:11:06', '2024-11-30 05:43:34'),
(3, 'Careers', NULL, '{\"banner_title\":null,\"banner_image\":null,\"banner_description\":null,\"page_description\":\"<p>If you have a unique point of view - we want to meet you. Our employees are encouraged to bring their ideas, experiences and perspectives, gleaned from their varied backgrounds to the workplace.<br \\/>The strength of our reputation lies in nurturing the skills and talents of these individuals by providing training and career development. We strive to create an environment in which all employees can contribute to their fullest potential.<br \\/><br \\/><strong>If interested, send your updated resume to:<\\/strong><br \\/><br \\/>Email:<br \\/><a href=\\\"mailto:info@lumisbiotech.com\\\"><u>info@lumisbiotech.com<\\/u><\\/a><br \\/><a href=\\\"mailto:info@feedenzynes.com\\\"><u>info@feedenzymes.com<\\/u><\\/a><\\/p>\"}', '2024-11-24 05:11:06', '2024-11-30 06:17:19'),
(4, 'Contact Us', NULL, '{\"banner_title\":null,\"banner_image\":null,\"banner_description\":null,\"page_description\":\"<h3><strong>Lumis Biotech<\\/strong><\\/h3>\\r\\n<p><strong>Address:<\\/strong><\\/p>\\r\\n<p>501, Arun Chambers,<br \\/>Tardeo Road,<br \\/>Mumbai - 400034. INDIA<\\/p>\\r\\n<p><strong>Phone:<\\/strong><\\/p>\\r\\n<p>+(91) (22) 6666 2690 - 91\\/92\\/93\\/94<\\/p>\\r\\n<p><strong>Email:<\\/strong><\\/p>\\r\\n<p><a href=\\\"mailto:info@lumisbiotech.com\\\"><u>info@lumisbiotech.com<\\/u><\\/a><br \\/><a href=\\\"mailto:info@feedenzymes.com\\\"><u>info@feedenzymes.com<\\/u><\\/a><\\/p>\"}', '2024-11-24 05:11:06', '2024-11-30 06:17:27'),
(5, 'breadcrumb', NULL, '{\"banner_title\":\"Power of Lumis Enzymes\",\"banner_image\":\"\\/storage\\/uploads\\/en\\/1wbVwBuZYT9DfNewwq6JUHfBoHYm7TsEis6p86i5.jpg\",\"banner_description\":\"Our foundation is built on maintaining high standards of excellence in printing, utilizing in-house facilities to provide color printing services for various items.\"}', '2024-11-30 05:39:18', '2024-11-30 05:51:07');

-- --------------------------------------------------------

--
-- Table structure for table `en_productions`
--

CREATE TABLE `en_productions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `image` varchar(191) DEFAULT NULL,
  `contents` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `en_productions`
--

INSERT INTO `en_productions` (`id`, `name`, `image`, `contents`, `created_at`, `updated_at`) VALUES
(1, 'Customized Enzymes', NULL, '{\"why_title\":\"Why you need Customized Enzyme Products?\",\"why_image\":\"\\/storage\\/uploads\\/en\\/zkt1M4MG1NPf6JU5HFXBGXLK90FQmNLm1EhJixVd.png\",\"why_description\":\"<div>\\r\\n<div><em><strong>\\\"Customer challenges are the substrates for our innovative customized enzyme solutions\\\"<\\/strong><\\/em><\\/div>\\r\\n<br \\/>\\r\\n<div>Lumis is a customer centric organization and we understand that each customer requirement is different in terms of products, performance and services. The most crucial factors include the ability to understand and translate customer requirements into product features and Lumis has successfully been able to exemplify this.<\\/div>\\r\\n<br \\/>\\r\\n<div>We recognize that the enzyme designed for feed ingredients used by a specific customer\\/country would not work efficiently on the feed composition\\/quality of another customer\\/country. Lumis not only pioneers in tapping\\/identifying this essential requirement of the feed industry but also specializes in customizing multi-enzymes as per the specific feed formulation.<\\/div>\\r\\n<br \\/>\\r\\n<div>The <strong>Lumis enzyme raw material wheel<\\/strong> clearly indicates the enzyme required to break down a particular component of the feed ingredient. For eg. : Amylase enzyme would act on starch components present in feed ingredients such as rice, cassava, corn\\/DDGS, wheat\\/brans which are a source of energy. Similarly protease would act on protein sources such as soya, fish, meat, bone meals etc.<\\/div>\\r\\n<\\/div>\",\"raw_image\":\"\\/storage\\/uploads\\/en\\/1uemOahG3Kx4tr1recvQvsUDEeBAGGOy3Lc7Z5Ay.jpg\",\"raw_title\":\"Enzyme- raw material specificity\",\"how_title\":\"How we Customize Enzyme Products?\",\"how_description\":\"<p>Having understood the customer requirements precisely, our application specialists follow a series of protocols in establishing the \\\"multi-enzyme complex\\\":<\\/p>\\r\\n<div class=\\\"row\\\">\\r\\n<div class=\\\"col-md-12\\\">\\r\\n<div class=\\\"col-md-12 mobs\\\">Stage Protocol<\\/div>\\r\\n<\\/div>\\r\\n<div class=\\\"col-md-12\\\">\\r\\n<div class=\\\"col-md-4\\\">\\r\\n<div>\\r\\n<p><strong>1<\\/strong> Modern&nbsp;in-house developed automated software<\\/p>\\r\\n<\\/div>\\r\\n<\\/div>\\r\\n<div class=\\\"col-md-7\\\">\\r\\n<div>\\r\\n<p>Provides initial guidelines in determining the appropriate combination and ratio of enzymes, which are standardized for different proportion and quality of diet compositions and application conditions.<\\/p>\\r\\n<\\/div>\\r\\n<\\/div>\\r\\n<\\/div>\\r\\n<div class=\\\"col-md-12\\\">\\r\\n<div class=\\\"col-md-4\\\">\\r\\n<div>\\r\\n<p><strong>2<\\/strong> In-house technical experts \\/ international nutritionists<\\/p>\\r\\n<\\/div>\\r\\n<\\/div>\\r\\n<div class=\\\"col-md-7\\\">\\r\\n<div>\\r\\n<p>Combined technical inputs from in-house experts and international nutritionists helps to optimize the new enzyme product further.<\\/p>\\r\\n<\\/div>\\r\\n<\\/div>\\r\\n<\\/div>\\r\\n<div class=\\\"col-md-12\\\">\\r\\n<div class=\\\"col-md-4\\\">\\r\\n<div>\\r\\n<p><strong>3<\\/strong> In-house developed enzyme efficacy visual test kits<\\/p>\\r\\n<\\/div>\\r\\n<\\/div>\\r\\n<div class=\\\"col-md-7\\\">\\r\\n<div>\\r\\n<p>The visual test kit developed by Lumis is the most accurate, reproducible and quickest means of simultaneously comparing different enzyme performances on the variety of raw materials by simulating the actual trial condtions on a lab-scale level.<\\/p>\\r\\n<\\/div>\\r\\n<\\/div>\\r\\n<\\/div>\\r\\n<div class=\\\"col-md-12\\\">\\r\\n<div class=\\\"col-md-4\\\">\\r\\n<div>\\r\\n<p><strong>4<\\/strong> Compatibility\\/stability studies<\\/p>\\r\\n<\\/div>\\r\\n<\\/div>\\r\\n<div class=\\\"col-md-7\\\">\\r\\n<div>\\r\\n<p>It is subjected to several compatibility tests using endogenous and exogenous enzymes. It also undergoes various stability tests in terms of pH, temperature, storage, packing etc.<\\/p>\\r\\n<\\/div>\\r\\n<\\/div>\\r\\n<\\/div>\\r\\n<div class=\\\"col-md-12\\\">\\r\\n<div class=\\\"col-md-4\\\">\\r\\n<div>\\r\\n<p><strong>5<\\/strong> Comprehensive large-scale trials<\\/p>\\r\\n<\\/div>\\r\\n<\\/div>\\r\\n<div class=\\\"col-md-7\\\">\\r\\n<div>\\r\\n<p>It is subjected to multiple successful feed trials under actual feed and trial conditions.<\\/p>\\r\\n<\\/div>\\r\\n<\\/div>\\r\\n<\\/div>\\r\\n<div class=\\\"col-md-12\\\">\\r\\n<div class=\\\"col-md-4\\\">\\r\\n<div>\\r\\n<p><strong>6<\\/strong> Cost-effectiveness\\/ Sustainability<\\/p>\\r\\n<\\/div>\\r\\n<\\/div>\\r\\n<div class=\\\"col-md-7\\\">\\r\\n<div>\\r\\n<p>It is developed as a highly cost competitive and sustainable enzyme solution.<\\/p>\\r\\n<\\/div>\\r\\n<\\/div>\\r\\n<\\/div>\\r\\n<div class=\\\"col-md-12\\\">\\r\\n<div class=\\\"col-md-4\\\">\\r\\n<div>\\r\\n<p><strong>7<\\/strong> Commercial Launch<\\/p>\\r\\n<\\/div>\\r\\n<\\/div>\\r\\n<div class=\\\"col-md-7\\\">\\r\\n<div>\\r\\n<p>It is finally launched commercially.<\\/p>\\r\\n<\\/div>\\r\\n<\\/div>\\r\\n<\\/div>\\r\\n<\\/div>\",\"you_title\":\"You benefit\",\"you_description\":\"<h5>Flexibility:<\\/h5>\\r\\n<p>Lumis offers multi-enzyme products with multiple Xylanases, Amylases, Proteases and other essential enzymes in appropriate ratio that helps you to choose from a wide variety of economical and easily available raw materials in your country. Since the enzyme combinations and ratios are specifically designed as per target feed ingredients, these complete enzyme solution make the most out of different feed raw materials which might be difficult to digest, e.g. corn can be replaced with wheat, cassava, rice etc. based on availability and price.<br \\/><br \\/>The benefits of Lumis customized multi-enzyme complexes are multi-fold and is a result of the unique concept incorporated in designing the product, which includes:<\\/p>\\r\\n<div class=\\\"you_ul\\\">\\r\\n<ul>\\r\\n<li>Multiple xylanases that works on both soluble as well as insoluble arabino -xylans.<\\/li>\\r\\n<li>Multiple proteases with endo and exo-peptidase activities that allows use of wide varieties of easily available protein sources of vegetable or animal origin. The multiple proteases are active over broad pH conditions, ensuring its stability in the fluctuating pH range inside the animal&rsquo;s digestive system.<\\/li>\\r\\n<li>Multiple amylases provide flexibility in using different cost effective starch based raw materials for energy. It is effective against different starches and starches with higher amylose contents.<\\/li>\\r\\n<\\/ul>\\r\\n<\\/div>\\r\\n<p>Lumis offers products that are wide pH stable and also highly thermo-stable. This allows use of the same product for either pellet type of feed or mash feeds without compromising on the stability and efficiency of the product.<\\/p>\\r\\n<h4>Increase your profits:<\\/h4>\\r\\n<p>The unique property of the Lumis multi-enzyme helps to release optimal nutrients from raw materials including not so easily digestible substrates. It helps to overcome the fluctuations in the quality and type of feed ingredients and combats the ever increasing feed prices as well as non-availability of some feed ingredients. This leads to substantial savings because of use of low cost raw materials and also minimizing the feed cost by maximum release and absorption of nutrients thus lowering feed conversion ratio.<br \\/><br \\/>Lumis also provides matrix for its enzyme, which can be utilized to your benefit by using it to formulate a low cost feed formulation.<\\/p>\"}', '2024-11-30 05:39:20', '2024-11-30 10:32:32'),
(2, 'Individual Enzymes', NULL, '{\"nsp_title\":\"NSP Enzymes\",\"nspEnzymes\":[{\"p1_title\":\"Xylanase\",\"p1_status\":\"active\",\"p1_description\":\"<p>Lumis, through its extensive research and development has developed a very distinctive xylanase. Lumis is not only the market leader to offer such an innovative and valuable xylanase to the feed industry but has also set a new bench mark for other enzyme producers.<\\/p>\\r\\n<p><strong>Key Features of Lumis Xylanase:<\\/strong><\\/p>\\r\\n<p><strong>&bull;&nbsp;&nbsp; &nbsp;Multiple Xylanases:<\\/strong>&nbsp;Lumis Xylanase is an enriched xylanase that combines multiple xylanases from different microbial sources.<\\/p>\\r\\n<p><strong>&bull;&nbsp;&nbsp; &nbsp;Superior Thermostability:<\\/strong>&nbsp;It is intrinsically heat stable, thus ensuring its efficiency even under high pelleting conditions.&nbsp;<\\/p>\\r\\n<p><strong>&bull;&nbsp;&nbsp; &nbsp;Robust pH Stability:<\\/strong>&nbsp;It is highly pH stable, withstanding the pH fluctuations within the gut of the animal.&nbsp;<\\/p>\\r\\n<p><strong>&bull;&nbsp;&nbsp; &nbsp;Unique Side Activities:<\\/strong>&nbsp;It has significant levels of essential side activities that work in synergy with the multi-xylanases to hydrolyse the multiple substrates in feed, thus reducing the digesta viscosity and improving the nutrient digestibility.<\\/p>\\r\\n<p><strong>Key Benefits of Lumis Xylanase:<\\/strong><\\/p>\\r\\n<p><strong>&bull;&nbsp;&nbsp;&nbsp;Broad Substrate Specificity:<\\/strong>&nbsp;It effectively targets a range of feed ingredients including corn, soy, wheat, sorghum, rice, barley, rye, millets, brans, and more. Due to its broad substrate spectrum, it provides flexibility to feed formulators by allowing the utilization of alternate feed ingredients.<\\/p>\\r\\n<p><strong>&bull;&nbsp;&nbsp;&nbsp;Versatile Applications:<\\/strong>&nbsp;The product is offered in a variety of dosages and forms thus providing flexibility to the endusers to meet their specific application requirements. It can be added on top or incorporated into reformulated diets while using matrix to reduce the feed cost.<\\/p>\\r\\n<p><strong>&bull;&nbsp;&nbsp;&nbsp;Performance Benefits:<\\/strong>&nbsp;The incorporation of Lumis xylanase in feed results in significantly improved weight gain, FCR and gut health.<\\/p>\\r\\n<p><strong>&bull;&nbsp;&nbsp;&nbsp;Economic Benefits:<\\/strong>&nbsp;Several in vivo trials have shown the benefits of using Lumis multi-xylanase in a variety of feed and trial conditions that is superior to other single xylanases.<\\/p>\"},{\"p1_title\":\"Mannanase\",\"p1_status\":\"active\",\"p1_description\":\"<p>Lumis offers a highly heat stable Beta-Mannanase which helps to improve growth performance by efficiently breaking mannans in diets such as Soya, Guar, Palm, Copra, DDGS, etc. It&nbsp;enhances the performance of disease challenged broilers and&nbsp;improves egg weight and production in layers. It also increases the insulin secretion and improves energy metabolism in swine leading to uniformity in the animal body weight.<\\/p>\"},{\"p1_title\":\"Beta - Glucanase\",\"p1_status\":\"active\",\"p1_description\":\"<p>Beta Glucanase offered by Lumis&nbsp;helps in digesting and breaking down the beta-glucans and complex carbohydrates in the plant cell walls especially in high fibre ingredients such as barley and other grains like wheat, rye, triticale etc. leading to increased energy release from the feed ingredients.<\\/p>\"},{\"p1_title\":\"Cellulase\",\"p1_status\":\"active\",\"p1_description\":\"<p>Cellulase offered by&nbsp;Lumis, degrades cellulose fibers thereby reducing water holding capacity leading to improved feed intake and animal growth. Cellulose fibers in cereals and legumes can be digested properly making it available as energy.<\\/p>\"},{\"p1_title\":\"Pectinase\",\"p1_status\":\"active\",\"p1_description\":\"<p>Pectinase offered by Lumis gives the best result in diets containing legumes like soya, beans and peas. The usage of Pectinase in feed production reduces the feed viscosity increasing nutrient release and absorption either by hydrolysis of non-biodegradable fibres or by liberating nutrients blocked by these fibres.<\\/p>\"},{\"p1_title\":\"Galactosidase\",\"p1_status\":\"active\",\"p1_description\":\"<p>Galactosidase offered by Lumis&nbsp;helps in removing flatulence (gas) producing compounds in diets such as soyabean thereby improving the nutrient digestibility and growth performance.<\\/p>\"}],\"digestive_title\":\"Digestive Enzymes\",\"digestiveEnzymes\":[{\"p2_title\":\"Protease\",\"p2_status\":\"active\",\"p2_description\":\"<p>Lumis, through its pioneering launch of triple acting proteases has been explempary in creating a quintessential protease for the feed industry. The multi-protease combination is uniquely designed and has an array of exceptional features over any single proteases in the industry. &nbsp;Lumis multi-protease has received widespread success across the globe, due to its efficiency on a broad range of conventional and alternate protein ingredients.&nbsp;<\\/p>\\r\\n<p><strong>Key features of Lumis Protease:<\\/strong><\\/p>\\r\\n<p><strong>&bull;&nbsp;&nbsp; &nbsp;Unique Combination of 3 Proteases:<\\/strong>&nbsp;Lumis provides highly innovative and carefully screened proteases for superior performance and sustained enzyme solutions<\\/p>\\r\\n<p><br \\/><strong>&bull;&nbsp;&nbsp;&nbsp;Exceptionally Robust pH Stability:<\\/strong>&nbsp;The 3 proteases have excellent pH profiles that not only complements each other but also helps to overcome the fluctuations in the pH throughout the animals gut.&nbsp;<\\/p>\\r\\n<p><br \\/><strong>&bull;&nbsp;&nbsp;&nbsp;Intrinsically Heat Stable:<\\/strong>&nbsp;Lumis multi-proteases are intrinsically heat stable withstanding higher pelletisation temperatures and also works efficiently in mash feeds.<\\/p>\\r\\n<p><br \\/><strong>Key benefits of Lumis Protease:<\\/strong><\\/p>\\r\\n<p><strong>&bull;&nbsp;&nbsp;&nbsp;Offers Flexibility to use Alternate Ingredients:<\\/strong>&nbsp;The multi-protease from Lumis acts on broad substrates including low cost protein. Lumis protease helps to overcome the fluctuations in the type and quality of protein sources.<\\/p>\\r\\n<p><br \\/><strong>&bull;&nbsp;&nbsp;&nbsp;Facilitates use of Aggressive Matrix:<\\/strong>&nbsp;Lumis protease has established matrix guidelines based on several positive field trials conducted worldwide on a range of feed ingredients. Lumis protease has a very aggressive matrix that benefits its users to reduce feed costs significantly<\\/p>\\r\\n<p><br \\/><strong>&bull;&nbsp;&nbsp;&nbsp;Provides Higher Nutrient Release from Feed:<\\/strong>&nbsp;The synergistic action of Lumis multi-proteases helps to enhance the nutrient release from the feed, thereby reducing the nutrient losses.&nbsp;<\\/p>\\r\\n<p><br \\/><strong>&bull;&nbsp;&nbsp;&nbsp;Optimum Digestibility of Amino Acids:<\\/strong>&nbsp;The Lumis multi-protease action helps to reduce the undigested amino acids in the hind gut of the poultry birds thereby reducing the mortality due to necrotic enteritis.<\\/p>\"},{\"p2_title\":\"Amylase\",\"p2_status\":\"active\",\"p2_description\":\"<p>Lumis Biotech offers a novel blend of multiple Amylases that works at wide pH condition and is highly thermo-stable. It increases starch digestibility of plant based raw materials releasing glucose which can be easily absorbed by&nbsp;the animals digestive system. It&nbsp;provides more available energy and essential nutrients while improving the animal performance. It is effective against different starches and starches with higher amylose contents. It thus helps in providing flexibility in using cost effective starch based raw materials.<\\/p>\"},{\"p2_title\":\"Lipase\",\"p2_status\":\"active\",\"p2_description\":\"<p>Lumis Lipase breaks down fats in majority of feed ingredients thereby improving animal digestion and subsequent utilization of fat. Lipase is useful in all oil based raw materials like vegetable oil, tallow, animal based oil etc.<\\/p>\"}],\"phytase_title\":\"Phytase Enzymes\",\"phytaseEnzymes\":[{\"p3_title\":\"Phytase\",\"p3_status\":\"active\",\"p3_description\":\"<p>Lumis phytase is a new generation phytase that has some outstanding features complementing the requirements of the current feed industry. Our phytase is positioned well amongst the major phytase manufacturers globally.<\\/p>\\r\\n<p><strong>Key features of Lumis Phytase:<\\/strong><\\/p>\\r\\n<p><strong>&bull;&nbsp;&nbsp;&nbsp;Fast Acting Phytase:<\\/strong>&nbsp;At Lumis, our enzyme scientists have developed a fast acting phytase which destructs the phytates in feed much faster and more efficiently.<\\/p>\\r\\n<p><br \\/><strong>&bull;&nbsp;&nbsp;&nbsp;Intrinsically Heat stable:<\\/strong>&nbsp;Our phytase exhibits a very good heat stability owing to the heat labile production strain, world class manufacturing technology and parameters incorporated during fermentation.<\\/p>\\r\\n<p><br \\/><strong>&bull;&nbsp;&nbsp;&nbsp;Unique Ccoating Technology:<\\/strong>&nbsp;Lumis has developed a specialized coating technology for phytase. This further enhances its heat stability property making it highly thermostable at higher pelleting temperatures<\\/p>\\r\\n<p><br \\/><strong>Key benefits of Lumis Phytase:<\\/strong><\\/p>\\r\\n<p><br \\/><strong>&bull;&nbsp;&nbsp;&nbsp;Efficient Phytase Action:<\\/strong>&nbsp;Lumis phytase improves release of phosphorus even under low phytate concentrations in feed.<\\/p>\\r\\n<p><br \\/><strong>&bull;&nbsp;&nbsp;&nbsp;Targets Soluble and Insoluble Phytates:<\\/strong>&nbsp;Due to its fast action property, Lumis phytase destucts the soluble and insoluble phytates much earlier in the upper digestive tract. It also able to target even low concentrations of phytates.<\\/p>\\r\\n<p><br \\/><strong>&bull;&nbsp;&nbsp;&nbsp;Super Dosing Advantages:<\\/strong>&nbsp;The super dosing of Lumis phytase results in improved nutrient release and better performance boosting higher FCR<\\/p>\\r\\n<p><br \\/><strong>&bull;&nbsp;&nbsp;&nbsp;Higher Matrix Application:<\\/strong>&nbsp;Our phytase provides an aggressive matrix for all types of diets and species.<\\/p>\"}]}', '2024-11-30 05:39:20', '2024-11-30 11:32:45');

-- --------------------------------------------------------

--
-- Table structure for table `es_events`
--

CREATE TABLE `es_events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `image` varchar(191) DEFAULT NULL,
  `contents` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `es_news`
--

CREATE TABLE `es_news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `image` varchar(191) DEFAULT NULL,
  `contents` longtext DEFAULT NULL,
  `year` year(4) DEFAULT NULL,
  `series` varchar(191) DEFAULT NULL,
  `status` varchar(191) NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `es_pages`
--

CREATE TABLE `es_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `image` varchar(191) DEFAULT NULL,
  `contents` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `es_pages`
--

INSERT INTO `es_pages` (`id`, `name`, `image`, `contents`, `created_at`, `updated_at`) VALUES
(1, 'home', NULL, NULL, '2024-11-30 05:39:18', '2024-11-30 05:39:18'),
(2, 'about', NULL, NULL, '2024-11-30 05:39:18', '2024-11-30 05:39:18'),
(3, 'career', NULL, NULL, '2024-11-30 05:39:18', '2024-11-30 05:39:18'),
(4, 'contact', NULL, NULL, '2024-11-30 05:39:18', '2024-11-30 05:39:18'),
(5, 'breadcrumb', NULL, NULL, '2024-11-30 05:39:18', '2024-11-30 05:39:18');

-- --------------------------------------------------------

--
-- Table structure for table `es_productions`
--

CREATE TABLE `es_productions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `image` varchar(191) DEFAULT NULL,
  `contents` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `es_productions`
--

INSERT INTO `es_productions` (`id`, `name`, `image`, `contents`, `created_at`, `updated_at`) VALUES
(1, 'Customized Enzymes', NULL, '[]', '2024-11-30 05:39:21', '2024-11-30 05:39:21'),
(2, 'Individual Enzymes', NULL, '[]', '2024-11-30 05:39:21', '2024-11-30 05:39:21');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fr_events`
--

CREATE TABLE `fr_events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `image` varchar(191) DEFAULT NULL,
  `contents` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fr_news`
--

CREATE TABLE `fr_news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `image` varchar(191) DEFAULT NULL,
  `contents` longtext DEFAULT NULL,
  `year` year(4) DEFAULT NULL,
  `series` varchar(191) DEFAULT NULL,
  `status` varchar(191) NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fr_pages`
--

CREATE TABLE `fr_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `image` varchar(191) DEFAULT NULL,
  `contents` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fr_pages`
--

INSERT INTO `fr_pages` (`id`, `name`, `image`, `contents`, `created_at`, `updated_at`) VALUES
(1, 'home', NULL, NULL, '2024-11-30 05:39:18', '2024-11-30 05:39:18'),
(2, 'about', NULL, NULL, '2024-11-30 05:39:18', '2024-11-30 05:39:18'),
(3, 'career', NULL, NULL, '2024-11-30 05:39:18', '2024-11-30 05:39:18'),
(4, 'contact', NULL, NULL, '2024-11-30 05:39:18', '2024-11-30 05:39:18'),
(5, 'breadcrumb', NULL, NULL, '2024-11-30 05:39:18', '2024-11-30 05:39:18');

-- --------------------------------------------------------

--
-- Table structure for table `fr_productions`
--

CREATE TABLE `fr_productions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `image` varchar(191) DEFAULT NULL,
  `contents` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fr_productions`
--

INSERT INTO `fr_productions` (`id`, `name`, `image`, `contents`, `created_at`, `updated_at`) VALUES
(1, 'Customized Enzymes', NULL, '[]', '2024-11-30 05:39:21', '2024-11-30 05:39:21'),
(2, 'Individual Enzymes', NULL, '[]', '2024-11-30 05:39:21', '2024-11-30 05:39:21');

-- --------------------------------------------------------

--
-- Table structure for table `id_events`
--

CREATE TABLE `id_events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `image` varchar(191) DEFAULT NULL,
  `contents` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `id_news`
--

CREATE TABLE `id_news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `image` varchar(191) DEFAULT NULL,
  `contents` longtext DEFAULT NULL,
  `year` year(4) DEFAULT NULL,
  `series` varchar(191) DEFAULT NULL,
  `status` varchar(191) NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `id_pages`
--

CREATE TABLE `id_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `image` varchar(191) DEFAULT NULL,
  `contents` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `id_pages`
--

INSERT INTO `id_pages` (`id`, `name`, `image`, `contents`, `created_at`, `updated_at`) VALUES
(1, 'home', NULL, NULL, '2024-11-30 05:39:20', '2024-11-30 05:39:20'),
(2, 'about', NULL, NULL, '2024-11-30 05:39:20', '2024-11-30 05:39:20'),
(3, 'career', NULL, NULL, '2024-11-30 05:39:20', '2024-11-30 05:39:20'),
(4, 'contact', NULL, NULL, '2024-11-30 05:39:20', '2024-11-30 05:39:20'),
(5, 'breadcrumb', NULL, NULL, '2024-11-30 05:39:20', '2024-11-30 05:39:20');

-- --------------------------------------------------------

--
-- Table structure for table `id_productions`
--

CREATE TABLE `id_productions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `image` varchar(191) DEFAULT NULL,
  `contents` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `id_productions`
--

INSERT INTO `id_productions` (`id`, `name`, `image`, `contents`, `created_at`, `updated_at`) VALUES
(1, 'Customized Enzymes', NULL, '[]', '2024-11-30 05:39:22', '2024-11-30 05:39:22'),
(2, 'Individual Enzymes', NULL, '[]', '2024-11-30 05:39:22', '2024-11-30 05:39:22');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(191) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ko_events`
--

CREATE TABLE `ko_events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `image` varchar(191) DEFAULT NULL,
  `contents` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ko_news`
--

CREATE TABLE `ko_news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `image` varchar(191) DEFAULT NULL,
  `contents` longtext DEFAULT NULL,
  `year` year(4) DEFAULT NULL,
  `series` varchar(191) DEFAULT NULL,
  `status` varchar(191) NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ko_pages`
--

CREATE TABLE `ko_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `image` varchar(191) DEFAULT NULL,
  `contents` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ko_pages`
--

INSERT INTO `ko_pages` (`id`, `name`, `image`, `contents`, `created_at`, `updated_at`) VALUES
(1, 'home', NULL, NULL, '2024-11-30 05:39:20', '2024-11-30 05:39:20'),
(2, 'about', NULL, NULL, '2024-11-30 05:39:20', '2024-11-30 05:39:20'),
(3, 'career', NULL, NULL, '2024-11-30 05:39:20', '2024-11-30 05:39:20'),
(4, 'contact', NULL, NULL, '2024-11-30 05:39:20', '2024-11-30 05:39:20'),
(5, 'breadcrumb', NULL, NULL, '2024-11-30 05:39:20', '2024-11-30 05:39:20');

-- --------------------------------------------------------

--
-- Table structure for table `ko_productions`
--

CREATE TABLE `ko_productions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `image` varchar(191) DEFAULT NULL,
  `contents` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ko_productions`
--

INSERT INTO `ko_productions` (`id`, `name`, `image`, `contents`, `created_at`, `updated_at`) VALUES
(1, 'Customized Enzymes', NULL, '[]', '2024-11-30 05:39:22', '2024-11-30 05:39:22'),
(2, 'Individual Enzymes', NULL, '[]', '2024-11-30 05:39:22', '2024-11-30 05:39:22');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_11_01_160317_create_admins_table', 1),
(6, '2022_11_07_140916_create_settings_table', 1),
(7, '2024_07_13_002217_create_product_categories_table', 1),
(8, '2024_07_14_120320_create_products_table', 1),
(9, '2024_07_14_132407_create_enquiry_table', 1),
(10, '2024_07_21_205727_create_jobs_table', 1),
(11, '2024_11_15_222514_create_pages_table', 1),
(12, '2024_11_17_203502_create_news_table', 1),
(13, '2024_11_17_203702_create_events_table', 1),
(14, '2024_11_19_212450_create_productions_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `image` varchar(191) NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `variation` longtext DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `category_id`, `variation`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Sample Product for Flours', '/storage/images/26iEbRpPjDsib3cFWIrD035pxowQfkzds6uvGbvD.jpg', 1, '[{\"1 Kg\":\"100\"},{\"2Kg\":\"200\"}]', 1, '2024-11-30 05:39:17', '2024-11-30 05:39:17'),
(2, 'Sample Product for Masale', '/storage/images/26iEbRpPjDsib3cFWIrD035pxowQfkzds6uvGbvD.jpg', 2, '[{\"1 Kg\":\"100\"},{\"2Kg\":\"200\"}]', 1, '2024-11-30 05:39:17', '2024-11-30 05:39:17'),
(3, 'Sample Product for Pickles', '/storage/images/26iEbRpPjDsib3cFWIrD035pxowQfkzds6uvGbvD.jpg', 3, '[{\"1 Kg\":\"100\"},{\"2Kg\":\"200\"}]', 1, '2024-11-30 05:39:17', '2024-11-30 05:39:17');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `thumbnail_image` varchar(191) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `name`, `thumbnail_image`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Flours', 'dummy.jpg', 1, '2024-11-30 05:39:17', '2024-11-30 05:39:17'),
(2, 'Masale', 'dummy.jpg', 1, '2024-11-30 05:39:17', '2024-11-30 05:39:17'),
(3, 'Pickles', 'dummy.jpg', 1, '2024-11-30 05:39:17', '2024-11-30 05:39:17');

-- --------------------------------------------------------

--
-- Table structure for table `pt_events`
--

CREATE TABLE `pt_events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `image` varchar(191) DEFAULT NULL,
  `contents` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pt_news`
--

CREATE TABLE `pt_news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `image` varchar(191) DEFAULT NULL,
  `contents` longtext DEFAULT NULL,
  `year` year(4) DEFAULT NULL,
  `series` varchar(191) DEFAULT NULL,
  `status` varchar(191) NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pt_pages`
--

CREATE TABLE `pt_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `image` varchar(191) DEFAULT NULL,
  `contents` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pt_pages`
--

INSERT INTO `pt_pages` (`id`, `name`, `image`, `contents`, `created_at`, `updated_at`) VALUES
(1, 'home', NULL, NULL, '2024-11-30 05:39:19', '2024-11-30 05:39:19'),
(2, 'about', NULL, NULL, '2024-11-30 05:39:19', '2024-11-30 05:39:19'),
(3, 'career', NULL, NULL, '2024-11-30 05:39:19', '2024-11-30 05:39:19'),
(4, 'contact', NULL, NULL, '2024-11-30 05:39:19', '2024-11-30 05:39:19'),
(5, 'breadcrumb', NULL, NULL, '2024-11-30 05:39:19', '2024-11-30 05:39:19');

-- --------------------------------------------------------

--
-- Table structure for table `pt_productions`
--

CREATE TABLE `pt_productions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `image` varchar(191) DEFAULT NULL,
  `contents` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pt_productions`
--

INSERT INTO `pt_productions` (`id`, `name`, `image`, `contents`, `created_at`, `updated_at`) VALUES
(1, 'Customized Enzymes', NULL, '[]', '2024-11-30 05:39:22', '2024-11-30 05:39:22'),
(2, 'Individual Enzymes', NULL, '[]', '2024-11-30 05:39:22', '2024-11-30 05:39:22');

-- --------------------------------------------------------

--
-- Table structure for table `ru_events`
--

CREATE TABLE `ru_events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `image` varchar(191) DEFAULT NULL,
  `contents` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ru_news`
--

CREATE TABLE `ru_news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `image` varchar(191) DEFAULT NULL,
  `contents` longtext DEFAULT NULL,
  `year` year(4) DEFAULT NULL,
  `series` varchar(191) DEFAULT NULL,
  `status` varchar(191) NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ru_pages`
--

CREATE TABLE `ru_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `image` varchar(191) DEFAULT NULL,
  `contents` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ru_pages`
--

INSERT INTO `ru_pages` (`id`, `name`, `image`, `contents`, `created_at`, `updated_at`) VALUES
(1, 'home', NULL, NULL, '2024-11-30 05:39:18', '2024-11-30 05:39:18'),
(2, 'about', NULL, NULL, '2024-11-30 05:39:18', '2024-11-30 05:39:18'),
(3, 'career', NULL, NULL, '2024-11-30 05:39:18', '2024-11-30 05:39:18'),
(4, 'contact', NULL, NULL, '2024-11-30 05:39:18', '2024-11-30 05:39:18'),
(5, 'breadcrumb', NULL, NULL, '2024-11-30 05:39:19', '2024-11-30 05:39:19');

-- --------------------------------------------------------

--
-- Table structure for table `ru_productions`
--

CREATE TABLE `ru_productions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `image` varchar(191) DEFAULT NULL,
  `contents` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ru_productions`
--

INSERT INTO `ru_productions` (`id`, `name`, `image`, `contents`, `created_at`, `updated_at`) VALUES
(1, 'Customized Enzymes', NULL, '[]', '2024-11-30 05:39:21', '2024-11-30 05:39:21'),
(2, 'Individual Enzymes', NULL, '[]', '2024-11-30 05:39:21', '2024-11-30 05:39:21');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `app_name` varchar(191) NOT NULL,
  `app_logo` varchar(191) NOT NULL,
  `timezone` varchar(191) NOT NULL,
  `author_name` varchar(191) NOT NULL,
  `author_link` varchar(191) NOT NULL,
  `ui_mode` varchar(191) NOT NULL,
  `sidebar_collapse` varchar(191) NOT NULL,
  `phone` longtext DEFAULT NULL,
  `whatsapp_phone` longtext DEFAULT NULL,
  `google_map` longtext DEFAULT NULL,
  `email` longtext DEFAULT NULL,
  `address` longtext DEFAULT NULL,
  `about` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `app_name`, `app_logo`, `timezone`, `author_name`, `author_link`, `ui_mode`, `sidebar_collapse`, `phone`, `whatsapp_phone`, `google_map`, `email`, `address`, `about`, `created_at`, `updated_at`) VALUES
(1, '.', '/storage/images/jQ2jyBvgxo1II29antapIFMeNQ4T0USL8aS8fDS1.png', 'Asia/Kolkata', 'Maptek Softwares', 'https://maptek.online/', 'light', 'off', '-', '-', 'https://google.com/', 'app@gmail.com', '-', '-', '2024-11-30 05:39:17', '2024-11-30 12:34:08');

-- --------------------------------------------------------

--
-- Table structure for table `th_events`
--

CREATE TABLE `th_events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `image` varchar(191) DEFAULT NULL,
  `contents` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `th_news`
--

CREATE TABLE `th_news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `image` varchar(191) DEFAULT NULL,
  `contents` longtext DEFAULT NULL,
  `year` year(4) DEFAULT NULL,
  `series` varchar(191) DEFAULT NULL,
  `status` varchar(191) NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `th_pages`
--

CREATE TABLE `th_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `image` varchar(191) DEFAULT NULL,
  `contents` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `th_pages`
--

INSERT INTO `th_pages` (`id`, `name`, `image`, `contents`, `created_at`, `updated_at`) VALUES
(1, 'home', NULL, NULL, '2024-11-30 05:39:19', '2024-11-30 05:39:19'),
(2, 'about', NULL, NULL, '2024-11-30 05:39:19', '2024-11-30 05:39:19'),
(3, 'career', NULL, NULL, '2024-11-30 05:39:19', '2024-11-30 05:39:19'),
(4, 'contact', NULL, NULL, '2024-11-30 05:39:19', '2024-11-30 05:39:19'),
(5, 'breadcrumb', NULL, NULL, '2024-11-30 05:39:19', '2024-11-30 05:39:19');

-- --------------------------------------------------------

--
-- Table structure for table `th_productions`
--

CREATE TABLE `th_productions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `image` varchar(191) DEFAULT NULL,
  `contents` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `th_productions`
--

INSERT INTO `th_productions` (`id`, `name`, `image`, `contents`, `created_at`, `updated_at`) VALUES
(1, 'Customized Enzymes', NULL, '[]', '2024-11-30 05:39:21', '2024-11-30 05:39:21'),
(2, 'Individual Enzymes', NULL, '[]', '2024-11-30 05:39:21', '2024-11-30 05:39:21');

-- --------------------------------------------------------

--
-- Table structure for table `tr_events`
--

CREATE TABLE `tr_events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `image` varchar(191) DEFAULT NULL,
  `contents` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tr_news`
--

CREATE TABLE `tr_news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `image` varchar(191) DEFAULT NULL,
  `contents` longtext DEFAULT NULL,
  `year` year(4) DEFAULT NULL,
  `series` varchar(191) DEFAULT NULL,
  `status` varchar(191) NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tr_pages`
--

CREATE TABLE `tr_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `image` varchar(191) DEFAULT NULL,
  `contents` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tr_pages`
--

INSERT INTO `tr_pages` (`id`, `name`, `image`, `contents`, `created_at`, `updated_at`) VALUES
(1, 'home', NULL, NULL, '2024-11-30 05:39:19', '2024-11-30 05:39:19'),
(2, 'about', NULL, NULL, '2024-11-30 05:39:19', '2024-11-30 05:39:19'),
(3, 'career', NULL, NULL, '2024-11-30 05:39:19', '2024-11-30 05:39:19'),
(4, 'contact', NULL, NULL, '2024-11-30 05:39:19', '2024-11-30 05:39:19'),
(5, 'breadcrumb', NULL, NULL, '2024-11-30 05:39:19', '2024-11-30 05:39:19');

-- --------------------------------------------------------

--
-- Table structure for table `tr_productions`
--

CREATE TABLE `tr_productions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `image` varchar(191) DEFAULT NULL,
  `contents` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tr_productions`
--

INSERT INTO `tr_productions` (`id`, `name`, `image`, `contents`, `created_at`, `updated_at`) VALUES
(1, 'Customized Enzymes', NULL, '[]', '2024-11-30 05:39:21', '2024-11-30 05:39:21'),
(2, 'Individual Enzymes', NULL, '[]', '2024-11-30 05:39:21', '2024-11-30 05:39:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vi_events`
--

CREATE TABLE `vi_events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `image` varchar(191) DEFAULT NULL,
  `contents` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vi_news`
--

CREATE TABLE `vi_news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `image` varchar(191) DEFAULT NULL,
  `contents` longtext DEFAULT NULL,
  `year` year(4) DEFAULT NULL,
  `series` varchar(191) DEFAULT NULL,
  `status` varchar(191) NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vi_pages`
--

CREATE TABLE `vi_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `image` varchar(191) DEFAULT NULL,
  `contents` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vi_pages`
--

INSERT INTO `vi_pages` (`id`, `name`, `image`, `contents`, `created_at`, `updated_at`) VALUES
(1, 'home', NULL, NULL, '2024-11-30 05:39:20', '2024-11-30 05:39:20'),
(2, 'about', NULL, NULL, '2024-11-30 05:39:20', '2024-11-30 05:39:20'),
(3, 'career', NULL, NULL, '2024-11-30 05:39:20', '2024-11-30 05:39:20'),
(4, 'contact', NULL, NULL, '2024-11-30 05:39:20', '2024-11-30 05:39:20'),
(5, 'breadcrumb', NULL, NULL, '2024-11-30 05:39:20', '2024-11-30 05:39:20');

-- --------------------------------------------------------

--
-- Table structure for table `vi_productions`
--

CREATE TABLE `vi_productions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `image` varchar(191) DEFAULT NULL,
  `contents` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vi_productions`
--

INSERT INTO `vi_productions` (`id`, `name`, `image`, `contents`, `created_at`, `updated_at`) VALUES
(1, 'Customized Enzymes', NULL, '[]', '2024-11-30 05:39:22', '2024-11-30 05:39:22'),
(2, 'Individual Enzymes', NULL, '[]', '2024-11-30 05:39:22', '2024-11-30 05:39:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `enquiries`
--
ALTER TABLE `enquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `en_events`
--
ALTER TABLE `en_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `en_news`
--
ALTER TABLE `en_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `en_pages`
--
ALTER TABLE `en_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `en_productions`
--
ALTER TABLE `en_productions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `es_events`
--
ALTER TABLE `es_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `es_news`
--
ALTER TABLE `es_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `es_pages`
--
ALTER TABLE `es_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `es_productions`
--
ALTER TABLE `es_productions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fr_events`
--
ALTER TABLE `fr_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fr_news`
--
ALTER TABLE `fr_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fr_pages`
--
ALTER TABLE `fr_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fr_productions`
--
ALTER TABLE `fr_productions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `id_events`
--
ALTER TABLE `id_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `id_news`
--
ALTER TABLE `id_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `id_pages`
--
ALTER TABLE `id_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `id_productions`
--
ALTER TABLE `id_productions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `ko_events`
--
ALTER TABLE `ko_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ko_news`
--
ALTER TABLE `ko_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ko_pages`
--
ALTER TABLE `ko_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ko_productions`
--
ALTER TABLE `ko_productions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pt_events`
--
ALTER TABLE `pt_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pt_news`
--
ALTER TABLE `pt_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pt_pages`
--
ALTER TABLE `pt_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pt_productions`
--
ALTER TABLE `pt_productions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ru_events`
--
ALTER TABLE `ru_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ru_news`
--
ALTER TABLE `ru_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ru_pages`
--
ALTER TABLE `ru_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ru_productions`
--
ALTER TABLE `ru_productions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `th_events`
--
ALTER TABLE `th_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `th_news`
--
ALTER TABLE `th_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `th_pages`
--
ALTER TABLE `th_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `th_productions`
--
ALTER TABLE `th_productions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tr_events`
--
ALTER TABLE `tr_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tr_news`
--
ALTER TABLE `tr_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tr_pages`
--
ALTER TABLE `tr_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tr_productions`
--
ALTER TABLE `tr_productions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vi_events`
--
ALTER TABLE `vi_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vi_news`
--
ALTER TABLE `vi_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vi_pages`
--
ALTER TABLE `vi_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vi_productions`
--
ALTER TABLE `vi_productions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `enquiries`
--
ALTER TABLE `enquiries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `en_events`
--
ALTER TABLE `en_events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `en_news`
--
ALTER TABLE `en_news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `en_pages`
--
ALTER TABLE `en_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `en_productions`
--
ALTER TABLE `en_productions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `es_events`
--
ALTER TABLE `es_events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `es_news`
--
ALTER TABLE `es_news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `es_pages`
--
ALTER TABLE `es_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `es_productions`
--
ALTER TABLE `es_productions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fr_events`
--
ALTER TABLE `fr_events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fr_news`
--
ALTER TABLE `fr_news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fr_pages`
--
ALTER TABLE `fr_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `fr_productions`
--
ALTER TABLE `fr_productions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `id_events`
--
ALTER TABLE `id_events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `id_news`
--
ALTER TABLE `id_news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `id_pages`
--
ALTER TABLE `id_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `id_productions`
--
ALTER TABLE `id_productions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ko_events`
--
ALTER TABLE `ko_events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ko_news`
--
ALTER TABLE `ko_news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ko_pages`
--
ALTER TABLE `ko_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ko_productions`
--
ALTER TABLE `ko_productions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pt_events`
--
ALTER TABLE `pt_events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pt_news`
--
ALTER TABLE `pt_news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pt_pages`
--
ALTER TABLE `pt_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pt_productions`
--
ALTER TABLE `pt_productions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ru_events`
--
ALTER TABLE `ru_events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ru_news`
--
ALTER TABLE `ru_news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ru_pages`
--
ALTER TABLE `ru_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ru_productions`
--
ALTER TABLE `ru_productions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `th_events`
--
ALTER TABLE `th_events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `th_news`
--
ALTER TABLE `th_news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `th_pages`
--
ALTER TABLE `th_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `th_productions`
--
ALTER TABLE `th_productions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tr_events`
--
ALTER TABLE `tr_events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tr_news`
--
ALTER TABLE `tr_news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tr_pages`
--
ALTER TABLE `tr_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tr_productions`
--
ALTER TABLE `tr_productions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vi_events`
--
ALTER TABLE `vi_events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vi_news`
--
ALTER TABLE `vi_news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vi_pages`
--
ALTER TABLE `vi_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `vi_productions`
--
ALTER TABLE `vi_productions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

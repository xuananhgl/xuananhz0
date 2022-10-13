-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 13, 2022 lúc 12:03 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `datatable`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `articles`
--

CREATE TABLE `articles` (
  `id_article` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text DEFAULT NULL,
  `img` varchar(255) NOT NULL,
  `about` varchar(255) NOT NULL,
  `link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `articles`
--

INSERT INTO `articles` (`id_article`, `title`, `body`, `img`, `about`, `link`, `created`, `modified`) VALUES
(6, '', NULL, 'sadas', '', '', NULL, NULL),
(17, '', NULL, 'https://www.z0gravity.com/storage-z0G/2020/09/outil-gestion-de-projets-entreprise-z0gravity-1-300x160.jpg', '', '', NULL, NULL),
(18, '', NULL, 'https://www.z0gravity.com/storage-z0G/2020/09/outil-gestion-de-projets-entreprise-z0gravity-1-300x160.jpg', '', '', NULL, NULL),
(19, '', NULL, 'https://www.z0gravity.com/storage-z0G/2020/09/outil-gestion-de-projets-entreprise-z0gravity-1-300x160.jpg', '', '', NULL, NULL),
(20, '7 conseils clés pour bien s’équiper d’un outil de gestion de projet', 'Vous avez décidé qu’il était temps d’investir dans un outil de gestion de projet pour votre entreprise ? Vous souhaitez gagner en productivité et en efficacité dans la gestion de vos affaires courantes et, par la même occasion, en faire profiter tous les services ? C’est une très bonne idée.', 'https://www.z0gravity.com/storage-z0G/2020/09/outil-gestion-de-projets-entreprise-z0gravity-1-300x160.jpg', 'CLIENT', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `aticles_i18n`
--

CREATE TABLE `aticles_i18n` (
  `id` int(11) NOT NULL,
  `locale` varchar(6) COLLATE utf8_unicode_520_ci NOT NULL,
  `model` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `foreign_key` int(10) NOT NULL,
  `field` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `content` text COLLATE utf8_unicode_520_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Đang đổ dữ liệu cho bảng `aticles_i18n`
--

INSERT INTO `aticles_i18n` (`id`, `locale`, `model`, `foreign_key`, `field`, `content`) VALUES
(276, 'en_US', 'Articles', 17, 'about', 'COMPANIES'),
(277, 'en_US', 'Articles', 17, 'title', 'ENTREPRISES'),
(278, 'en_US', 'Articles', 17, 'body', 'Choosing the right project management software or project management tool is a crucial question for companies'),
(279, 'es', 'Articles', 17, 'about', 'COMPAÑÍAS'),
(280, 'es', 'Articles', 17, 'title', 'Cómo elegir tu software de gestión de proyectos'),
(281, 'es', 'Articles', 17, 'body', 'Elegir el software de gestión de proyectos o la herramienta de gestión de proyectos adecuada es una cuestión crucial para las empresas.'),
(282, 'vi_VN', 'Articles', 17, 'about', 'CÁC CÔNG TY'),
(283, 'vi_VN', 'Articles', 17, 'title', 'Cách chọn phần mềm quản lý dự án của bạn'),
(284, 'vi_VN', 'Articles', 17, 'body', 'Lựa chọn phần mềm quản lý dự án hoặc công cụ quản lý dự án phù hợp là một câu hỏi quan trọng đối với các công ty.'),
(285, 'en_US', 'Articles', 18, 'about', 'PUBLIC SECTOR'),
(286, 'en_US', 'Articles', 18, 'title', 'Public sector project management software'),
(287, 'en_US', 'Articles', 18, 'body', 'z0 Gravity is a project management software developed with and for local authorities. Thanks to its simple interface and on-board dashboard, this public sector project management software makes it possible to respond effectively to the time and budget constraints of local authorities.'),
(288, 'es', 'Articles', 18, 'about', 'SECTOR PÚBLICO'),
(289, 'es', 'Articles', 18, 'title', 'Software de gestión de proyectos del sector público'),
(290, 'es', 'Articles', 18, 'body', 'z0 Gravity es un software de gestión de proyectos desarrollado con y para las autoridades locales. Gracias a su sencilla interfaz y al panel integrado, este software de gestión de proyectos del sector público permite responder de forma eficaz a las limitaciones de tiempo y presupuesto de las autoridades locales.'),
(291, 'vi_VN', 'Articles', 18, 'about', 'NGÀNH CÔNG'),
(292, 'vi_VN', 'Articles', 18, 'title', 'Phần mềm quản lý dự án khu vực công'),
(293, 'vi_VN', 'Articles', 18, 'body', 'z0 Gravity là một phần mềm quản lý dự án được phát triển cho và cho chính quyền địa phương. Nhờ giao diện đơn giản và bảng điều khiển tích hợp, phần mềm quản lý dự án khu vực công này có thể đáp ứng hiệu quả các hạn chế về thời gian và ngân sách của chính quyền địa phương.'),
(294, 'en_US', 'Articles', 19, 'about', 'PMO'),
(295, 'en_US', 'Articles', 19, 'title', 'SaaS online project management software'),
(296, 'en_US', 'Articles', 19, 'body', 'Managing a project actually involves carrying out a succession of very different tasks for the company and which must often be carried out simultaneously: planning, distribution of resources, tasks, reporting activities, monitoring of the progress of projects, budget consumption, etc.'),
(297, 'es', 'Articles', 19, 'about', 'PMO'),
(298, 'es', 'Articles', 19, 'title', 'Software de gestión de proyectos en línea SaaS'),
(299, 'es', 'Articles', 19, 'body', 'En realidad, gestionar un proyecto implica llevar a cabo una sucesión de tareas muy diferentes para la empresa y que muchas veces deben realizarse simultáneamente: planificación, distribución de recursos, tareas, reporte de actividades, seguimiento del progreso de los proyectos, consumo de presupuesto, etc.'),
(300, 'vi_VN', 'Articles', 19, 'about', 'PMO'),
(301, 'vi_VN', 'Articles', 19, 'title', 'Phần mềm quản lý dự án trực tuyến SaaS'),
(302, 'vi_VN', 'Articles', 19, 'body', 'Quản lý một dự án thực sự liên quan đến việc thực hiện liên tiếp các nhiệm vụ rất khác nhau cho công ty và thường phải được thực hiện đồng thời: lập kế hoạch, phân phối nguồn lực, nhiệm vụ, báo cáo hoạt động, giám sát tiến độ của dự án, tiêu thụ ngân sách, v.v.'),
(303, 'en_US', 'Articles', 20, 'about', 'CUSTOMER'),
(304, 'en_US', 'Articles', 20, 'title', '7 key tips for properly equipping yourself with a project management tool'),
(305, 'en_US', 'Articles', 20, 'body', 'Decided it\'s time to invest in a project management tool for your business? Do you want to increase productivity and efficiency in the management of your day-to-day business and, at the same time, benefit all departments? It\'s a very good idea.'),
(306, 'es', 'Articles', 20, 'about', 'CLIENTE'),
(307, 'es', 'Articles', 20, 'title', '7 consejos clave para equiparte adecuadamente con una herramienta de gestión de proyectos'),
(308, 'es', 'Articles', 20, 'body', '¿Ha decidido que es hora de invertir en una herramienta de gestión de proyectos para su negocio? ¿Quieres aumentar la productividad y la eficiencia en la gestión del día a día de tu negocio y, al mismo tiempo, beneficiar a todos los departamentos? Esta es una muy buena idea.'),
(309, 'vi_VN', 'Articles', 20, 'about', 'KHÁCH HÀNG'),
(310, 'vi_VN', 'Articles', 20, 'title', '7 mẹo chính để trang bị cho mình một công cụ quản lý dự án đúng cách'),
(311, 'vi_VN', 'Articles', 20, 'body', 'Quyết định đã đến lúc đầu tư vào một công cụ quản lý dự án cho doanh nghiệp của bạn? Bạn có muốn tăng năng suất và hiệu quả trong việc quản lý công việc kinh doanh hàng ngày của mình và đồng thời mang lại lợi ích cho tất cả các phòng ban? Đó là một ý tưởng rất tốt.'),
(321, 'en_US', 'Articles', 1, 'about', 'aaa'),
(322, 'en_US', 'Articles', 1, 'title', 'aaa'),
(323, 'en_US', 'Articles', 1, 'body', 'aaa'),
(324, 'es', 'Articles', 1, 'about', 'aaa'),
(325, 'es', 'Articles', 1, 'title', 'aa'),
(326, 'es', 'Articles', 1, 'body', 'aaaa'),
(327, 'vi_VN', 'Articles', 1, 'about', 'aaaa'),
(328, 'vi_VN', 'Articles', 1, 'title', 'aaa'),
(329, 'vi_VN', 'Articles', 1, 'body', 'aa'),
(330, 'en_US', 'Articles', 2, 'about', 'cc'),
(331, 'en_US', 'Articles', 2, 'title', 'ccc'),
(332, 'en_US', 'Articles', 2, 'body', 'ccc'),
(333, 'es', 'Articles', 2, 'title', 'cc'),
(334, 'es', 'Articles', 2, 'body', 'ccccc');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `displays`
--

CREATE TABLE `displays` (
  `id` int(11) NOT NULL,
  `style` varchar(255) NOT NULL,
  `backgroun_header` varchar(255) NOT NULL,
  `color_header` varchar(191) NOT NULL,
  `color_prou` varchar(255) NOT NULL,
  `image_pour` varchar(255) NOT NULL,
  `image_header` varchar(191) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `displays`
--

INSERT INTO `displays` (`id`, `style`, `backgroun_header`, `color_header`, `color_prou`, `image_pour`, `image_header`, `created`, `modified`) VALUES
(1, 'style9', '#1A9BF7', '#FFFFFF', '', 'https://www.z0gravity.com/storage-z0G/2019/06/ZG_HomeObjectif_2x.jpg', 'https://www.z0gravity.com/storage-z0G/2019/06/thecamp.png', '2022-09-09 16:17:40', '2022-09-09 16:17:40'),
(2, 'style4', '#1A9BF7', '#FFFFFF', '#FFCC99', 'https://www.z0gravity.com/storage-z0G/2019/06/ZG_HomeObjectif_2x.jpg', 'https://www.z0gravity.com/storage-z0G/2019/06/thecamp.png', NULL, NULL),
(4, 'style2', '#1A9BF7', '#FFFFFF', '', 'https://www.z0gravity.com/storage-z0G/2019/06/ZG_HomeObjectif_2x.jpg', 'https://www.z0gravity.com/storage-z0G/2019/06/thecamp.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `headers`
--

CREATE TABLE `headers` (
  `id_headers` int(11) NOT NULL,
  `about` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `button` varchar(255) NOT NULL,
  `video` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `headers`
--

INSERT INTO `headers` (`id_headers`, `about`, `title`, `button`, `video`, `created`, `modified`) VALUES
(39, 'Avec z0 Gravity, découvrez la simplicité et la performance d’une gestion de projet collaborative.', 'Fédérateur. Personnalisé. Souple & adapté', 'Découvrez z0 Gravity', 'Voir la vidéo', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `i18n`
--

CREATE TABLE `i18n` (
  `id` int(11) NOT NULL,
  `locale` varchar(6) NOT NULL,
  `model` varchar(255) NOT NULL,
  `foreign_key` int(10) NOT NULL,
  `field` varchar(255) NOT NULL,
  `content` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `i18n`
--

INSERT INTO `i18n` (`id`, `locale`, `model`, `foreign_key`, `field`, `content`) VALUES
(220, 'en_US', 'Headers', 39, 'about', 'With z0 Gravity, discover the simplicity and performance of collaborative project management.'),
(221, 'en_US', 'Headers', 39, 'title', 'Federator. Personalized. Flexible & adapted.'),
(222, 'es', 'Headers', 39, 'about', 'Con z0 Gravity, descubra la simplicidad y el rendimiento de la gestión colaborativa de proyectos.'),
(223, 'es', 'Headers', 39, 'title', 'federador. Personalizado. Flexible y adaptado.'),
(224, 'vi_VN', 'Headers', 39, 'about', 'Với z0 Gravity, khám phá sự đơn giản và hiệu suất của quản lý dự án cộng tác.'),
(225, 'vi_VN', 'Headers', 39, 'title', 'Người liên bang. Được cá nhân hóa. Linh hoạt và thích nghi.'),
(226, 'en_US', 'Articles', 14, 'about', 'COMPANIES'),
(227, 'en_US', 'Articles', 14, 'title', 'ENTREPRISES'),
(228, 'en_US', 'Articles', 14, 'body', 'Choosing the right project management software or project management tool is a crucial question for companies'),
(229, 'es', 'Articles', 14, 'about', 'COMPAÑÍAS'),
(230, 'es', 'Articles', 14, 'title', 'Cómo elegir tu software de gestión de proyectos'),
(231, 'es', 'Articles', 14, 'body', 'Elegir el software de gestión de proyectos o la herramienta de gestión de proyectos adecuada es una cuestión crucial para las empresas.'),
(232, 'vi_VN', 'Articles', 14, 'about', 'CÁC CÔNG TY'),
(233, 'vi_VN', 'Articles', 14, 'title', 'Cách chọn phần mềm quản lý dự án của bạn'),
(234, 'vi_VN', 'Articles', 14, 'body', 'Lựa chọn phần mềm quản lý dự án hoặc công cụ quản lý dự án phù hợp là một câu hỏi quan trọng đối với các công ty.'),
(235, 'en_US', 'Articles', 15, 'about', 'COMPANIES'),
(236, 'en_US', 'Articles', 15, 'title', 'ENTREPRISES'),
(237, 'en_US', 'Articles', 15, 'body', 'Choosing the right project management software or project management tool is a crucial question for companies'),
(238, 'es', 'Articles', 15, 'about', 'COMPAÑÍAS'),
(239, 'es', 'Articles', 15, 'title', 'Cómo elegir tu software de gestión de proyectos'),
(240, 'es', 'Articles', 15, 'body', 'Elegir el software de gestión de proyectos o la herramienta de gestión de proyectos adecuada es una cuestión crucial para las empresas.'),
(241, 'vi_VN', 'Articles', 15, 'about', 'CÁC CÔNG TY'),
(242, 'vi_VN', 'Articles', 15, 'title', 'Cách chọn phần mềm quản lý dự án của bạn'),
(243, 'vi_VN', 'Articles', 15, 'body', 'Lựa chọn phần mềm quản lý dự án hoặc công cụ quản lý dự án phù hợp là một câu hỏi quan trọng đối với các công ty.'),
(244, 'en_US', 'Articles', 16, 'about', 'COMPANIES'),
(245, 'en_US', 'Articles', 16, 'title', 'ENTREPRISES'),
(246, 'en_US', 'Articles', 16, 'body', 'Choosing the right project management software or project management tool is a crucial question for companies'),
(247, 'es', 'Articles', 16, 'about', 'COMPAÑÍAS'),
(248, 'es', 'Articles', 16, 'title', 'Cómo elegir tu software de gestión de proyectos'),
(249, 'es', 'Articles', 16, 'body', 'Elegir el software de gestión de proyectos o la herramienta de gestión de proyectos adecuada es una cuestión crucial para las empresas.'),
(250, 'vi_VN', 'Articles', 16, 'about', 'CÁC CÔNG TY'),
(251, 'vi_VN', 'Articles', 16, 'title', 'Cách chọn phần mềm quản lý dự án của bạn'),
(252, 'vi_VN', 'Articles', 16, 'body', 'Lựa chọn phần mềm quản lý dự án hoặc công cụ quản lý dự án phù hợp là một câu hỏi quan trọng đối với các công ty.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `id_posts` int(100) NOT NULL,
  `article1` int(100) NOT NULL,
  `article2` varchar(255) COLLATE utf8mb4_unicode_520_nopad_ci NOT NULL,
  `article3` int(100) NOT NULL,
  `article4` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_nopad_ci;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`id_posts`, `article1`, `article2`, `article3`, `article4`) VALUES
(1, 6, 'https://jsonplaceholder.typicode.com/posts', 9, 9);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pours`
--

CREATE TABLE `pours` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `Notre_engagement` varchar(255) NOT NULL,
  `about_notre` varchar(255) NOT NULL,
  `layout_img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `pours`
--

INSERT INTO `pours` (`id`, `title`, `logo`, `Notre_engagement`, `about_notre`, `layout_img`, `note`, `created`, `modified`) VALUES
(17, 'Z0 Gravity est un logiciel de gestion multi-projets : quelle que soit leur complexité, vous gérez facilement les plannings, les budgets et les ressources humaines de vos projets par un usage transversal et collaboratif.', 'POUR FAIRE COURT.', 'Notre engagement:', 'C\'est aider tout type body\'oranisation á resaliser ses projest avec un seul mot body\'order :', '', 'sim-pli-ci-té!', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pours_i18n`
--

CREATE TABLE `pours_i18n` (
  `id` int(11) NOT NULL,
  `locale` varchar(6) NOT NULL,
  `model` varchar(255) NOT NULL,
  `foreign_key` int(10) NOT NULL,
  `field` varchar(255) NOT NULL,
  `content` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `pours_i18n`
--

INSERT INTO `pours_i18n` (`id`, `locale`, `model`, `foreign_key`, `field`, `content`) VALUES
(176, 'en_US', 'Pours', 17, 'title', 'Z0 Gravity is a multi-project management software:\r\nwhatever their complexity, you easily manage the schedules, budgets and human resources of your projects through cross-functional and collaborative use.'),
(177, 'en_US', 'Pours', 17, 'Notre_engagement', 'Our engagement:'),
(178, 'en_US', 'Pours', 17, 'about_notre', 'It\'s helping any type of body\'organization to carry out its projects with a single word body\'order:'),
(179, 'en_US', 'Pours', 17, 'note', 'simplicity!'),
(180, 'en_US', 'Pours', 17, 'logo', 'TO SHORTEN IT.'),
(181, 'es', 'Pours', 17, 'title', 'Z0 Gravity es un software de gestión de múltiples proyectos:\r\ncualquiera que sea su complejidad, puede administrar fácilmente los cronogramas, los presupuestos y los recursos humanos de sus proyectos a través del uso interfuncional y colaborativo.'),
(182, 'es', 'Pours', 17, 'Notre_engagement', 'Nuestro compromiso:'),
(183, 'es', 'Pours', 17, 'about_notre', 'Es ayudar a cualquier tipo de organismo\'organización a llevar a cabo sus proyectos con una sola palabra cuerpo\'orden:'),
(184, 'es', 'Pours', 17, 'note', '¡sencillez!'),
(185, 'es', 'Pours', 17, 'logo', 'PARA ABREVIAR.'),
(186, 'vi_VN', 'Pours', 17, 'title', 'Z0 Gravity là một phần mềm quản lý đa dự án:\r\nbất kể mức độ phức tạp của chúng, bạn dễ dàng quản lý lịch trình, ngân sách và nguồn nhân lực cho các dự án của mình thông qua việc sử dụng hợp tác và chức năng chéo.'),
(187, 'vi_VN', 'Pours', 17, 'Notre_engagement', 'Cam kết của chúng tôi:'),
(188, 'vi_VN', 'Pours', 17, 'about_notre', 'Nó giúp bất kỳ loại tổ chức cơ thể nào thực hiện các dự án của mình chỉ với một từ duy nhất:'),
(189, 'vi_VN', 'Pours', 17, 'note', 'sự đơn giản!'),
(190, 'vi_VN', 'Pours', 17, 'logo', 'NGẮN GỌN NÓ.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pres`
--

CREATE TABLE `pres` (
  `id` int(11) NOT NULL,
  `title_pres` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `about_pres` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `dress` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `pres`
--

INSERT INTO `pres` (`id`, `title_pres`, `logo`, `about_pres`, `author`, `dress`, `link`, `created`, `modified`) VALUES
(25, 'PRESSE1111', 'https://i.pinimg.com/236x/c2/fc/c0/c2fcc0a977fd997263a9cd768c50578f.jpg', 'Il y avait tout d’abord la sécurité, l’outil z0 Gravity a pu être rapidement validé par les équipes d’Orange Cyberdéfense.2', 'Stéphane Touchet5', 'PMO service client Orange Sud-Ouest2', 'https://i.pinimg.com/originals/79/11/f0/7911f0511d4c5e568c3e2353c6f2f584.jpg', '2022-10-13 01:04:11', '0000-00-00 00:00:00'),
(26, '', '', '', '', '', '', '2022-10-13 09:46:26', '0000-00-00 00:00:00'),
(27, '', '', '', '', '', '', '2022-10-13 09:46:26', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pres_i18n`
--

CREATE TABLE `pres_i18n` (
  `id` int(11) NOT NULL,
  `locale` varchar(6) NOT NULL,
  `model` varchar(255) NOT NULL,
  `foreign_key` int(10) NOT NULL,
  `field` varchar(255) NOT NULL,
  `content` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `pres_i18n`
--

INSERT INTO `pres_i18n` (`id`, `locale`, `model`, `foreign_key`, `field`, `content`) VALUES
(144, 'en_US', 'Pres', 25, 'about_pres', 'First of all there was security, the z0 Gravity tool was quickly validated by the Orange Cyberdefense teams.'),
(145, 'en_US', 'Pres', 25, 'dress', '  PMO customer service Orange South West'),
(146, 'en_US', 'Pres', 25, 'author', 'Stephane Touchet'),
(147, 'es', 'Pres', 25, 'about_pres', 'En primer lugar estaba la seguridad, la herramienta z0 Gravity fue rápidamente validada por los equipos de Orange Cyberdefense.'),
(148, 'es', 'Pres', 25, 'dress', '  Servicio de atención al cliente de la oficina de gestión de proyectos Orange South West'),
(149, 'es', 'Pres', 25, 'author', 'Stéphane Touchet'),
(150, 'vi_VN', 'Pres', 25, 'about_pres', 'Trước hết là tính bảo mật, công cụ z0 Gravity đã nhanh chóng được xác nhận bởi nhóm Orange Cyberdefense.'),
(151, 'vi_VN', 'Pres', 25, 'dress', 'Dịch vụ khách hàng PMO Orange South West'),
(152, 'vi_VN', 'Pres', 25, 'author', 'Stephane Touchet'),
(153, 'en_US', 'Pres', 26, 'about_pres', 'First of all there was security, the z0 Gravity tool was quickly validated by the Orange Cyberdefense teams.2'),
(154, 'en_US', 'Pres', 26, 'dress', '  PMO customer service Orange South West2'),
(155, 'en_US', 'Pres', 26, 'author', 'Stephane Touchet2'),
(156, 'es', 'Pres', 26, 'about_pres', 'En primer lugar estaba la seguridad, la herramienta z0 Gravity fue rápidamente validada por los equipos de Orange Cyberdefense.2'),
(157, 'es', 'Pres', 26, 'dress', '  Servicio de atención al cliente de la oficina de gestión de proyectos Orange South West2'),
(158, 'es', 'Pres', 26, 'author', 'Stéphane Touchet2'),
(159, 'vi_VN', 'Pres', 26, 'about_pres', 'Trước hết là tính bảo mật, công cụ z0 Gravity đã nhanh chóng được xác nhận bởi nhóm Orange Cyberdefense.2'),
(160, 'vi_VN', 'Pres', 26, 'dress', 'Dịch vụ khách hàng PMO Orange South West2'),
(161, 'vi_VN', 'Pres', 26, 'author', 'Stephane Touchet2'),
(162, 'en_US', 'Pres', 27, 'about_pres', 'First of all there was security, the z0 Gravity tool was quickly validated by the Orange Cyberdefense teams.3'),
(163, 'en_US', 'Pres', 27, 'dress', '  PMO customer service Orange South West3'),
(164, 'en_US', 'Pres', 27, 'author', 'Stephane Touchet3'),
(165, 'es', 'Pres', 27, 'about_pres', 'En primer lugar estaba la seguridad, la herramienta z0 Gravity fue rápidamente validada por los equipos de Orange Cyberdefense.3'),
(166, 'es', 'Pres', 27, 'dress', '  Servicio de atención al cliente de la oficina de gestión de proyectos Orange South West3'),
(167, 'es', 'Pres', 27, 'author', 'Stéphane Touchet3'),
(168, 'vi_VN', 'Pres', 27, 'about_pres', 'Trước hết là tính bảo mật, công cụ z0 Gravity đã nhanh chóng được xác nhận bởi nhóm Orange Cyberdefense.3'),
(169, 'vi_VN', 'Pres', 27, 'dress', 'Dịch vụ khách hàng PMO Orange South West3'),
(170, 'vi_VN', 'Pres', 27, 'author', 'Stephane Touchet3');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `modified` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `role`, `created`, `modified`) VALUES
(9, 'abc@gmail.com', '$2y$10$fBu9pNjhWJEzJrna9CQznugL3W9XFzwxSgbJdjPEDp1ehpLC.RKiG', 'author', '2022-09-08 16:53:11', '2022-10-12 07:44:40'),
(12, '123@gmail.com', '$2y$10$Qd4155eHWvO9BolRUFYn2eTEAJGsgfO8NXX/eOc0ODeMJqBAEotVS', 'admin', '2022-10-12 07:40:52', '2022-10-12 07:40:52');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id_article`);

--
-- Chỉ mục cho bảng `aticles_i18n`
--
ALTER TABLE `aticles_i18n`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ARTICLES_I18N_LOCALE_FIELD` (`locale`,`model`,`foreign_key`,`field`),
  ADD KEY `ARTICLES_I18N_FIELD` (`model`,`foreign_key`,`field`);

--
-- Chỉ mục cho bảng `displays`
--
ALTER TABLE `displays`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `style` (`style`);

--
-- Chỉ mục cho bảng `headers`
--
ALTER TABLE `headers`
  ADD PRIMARY KEY (`id_headers`);

--
-- Chỉ mục cho bảng `i18n`
--
ALTER TABLE `i18n`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `I18N_LOCALE_FIELD` (`locale`,`model`,`foreign_key`,`field`),
  ADD KEY `I18N_FIELD` (`model`,`foreign_key`,`field`);

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id_posts`);

--
-- Chỉ mục cho bảng `pours`
--
ALTER TABLE `pours`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `pours_i18n`
--
ALTER TABLE `pours_i18n`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `POURS_I18N_LOCALE_FIELD` (`locale`,`model`,`foreign_key`,`field`),
  ADD KEY `POURS_I18N_FIELD` (`model`,`foreign_key`,`field`);

--
-- Chỉ mục cho bảng `pres`
--
ALTER TABLE `pres`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `pres_i18n`
--
ALTER TABLE `pres_i18n`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `PRES_I18N_LOCALE_FIELD` (`locale`,`model`,`foreign_key`,`field`),
  ADD KEY `PRES_I18N_FIELD` (`model`,`foreign_key`,`field`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `articles`
--
ALTER TABLE `articles`
  MODIFY `id_article` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT cho bảng `aticles_i18n`
--
ALTER TABLE `aticles_i18n`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=344;

--
-- AUTO_INCREMENT cho bảng `headers`
--
ALTER TABLE `headers`
  MODIFY `id_headers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT cho bảng `i18n`
--
ALTER TABLE `i18n`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=253;

--
-- AUTO_INCREMENT cho bảng `pours`
--
ALTER TABLE `pours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `pours_i18n`
--
ALTER TABLE `pours_i18n`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=191;

--
-- AUTO_INCREMENT cho bảng `pres`
--
ALTER TABLE `pres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `pres_i18n`
--
ALTER TABLE `pres_i18n`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=171;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

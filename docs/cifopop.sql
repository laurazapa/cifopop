-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-07-2021 a las 20:21:30
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cifopop`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anuncios`
--

CREATE TABLE `anuncios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `precio` double(8,2) NOT NULL DEFAULT 0.00,
  `imagen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `anuncios`
--

INSERT INTO `anuncios` (`id`, `titulo`, `descripcion`, `precio`, `imagen`, `user_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'sequi', 'Non quod aliquam est blanditiis. Qui explicabo ea et omnis atque qui. Qui quia similique soluta et omnis aut qui. Officiis architecto deleniti voluptatem cupiditate error.', 4503.18, NULL, 8, '2021-06-24 16:59:25', '2021-06-24 16:59:25', NULL),
(3, 'numquam', 'Reprehenderit totam tempore ratione maxime. Deserunt placeat et itaque vel dolore occaecati. Ut perferendis doloribus dolores repellendus rerum eveniet. Eos commodi quo iure inventore.', 832.66, NULL, 19, '2021-06-24 16:59:25', '2021-06-24 16:59:25', NULL),
(5, 'iure', 'Assumenda laborum praesentium est molestias. Optio sunt animi veniam perferendis. Enim rem ad expedita temporibus totam iusto delectus. Et consectetur rerum voluptatem.', 2440.65, NULL, 14, '2021-06-24 16:59:25', '2021-06-24 16:59:25', NULL),
(6, 'occaecati', 'Autem officiis eveniet nihil veniam illo. Omnis ea accusamus iusto nisi libero ex. Eum quo quo ipsa accusantium veritatis neque tenetur. Vel voluptates unde odit quod laborum.', 248.38, NULL, 5, '2021-06-24 16:59:25', '2021-06-24 16:59:25', NULL),
(7, 'distinctio', 'Ut eum non quam culpa corrupti dolor. Molestiae quidem praesentium porro pariatur explicabo voluptatibus. In est reprehenderit iste. Praesentium praesentium aliquid minus animi et.', 1489.70, NULL, 14, '2021-06-24 16:59:25', '2021-06-24 16:59:25', NULL),
(9, 'vero', 'Explicabo iusto qui recusandae sequi. Omnis vel qui molestiae nihil tempora. Beatae in ut rem esse harum.', 9672.22, NULL, 11, '2021-06-24 16:59:25', '2021-06-24 16:59:25', NULL),
(10, 'voluptatem', 'Quis consequuntur voluptates enim animi nemo. Unde rerum laudantium nemo id rerum eos dignissimos suscipit. Doloremque omnis aliquam vel ratione qui omnis eos quas.', 3118.97, NULL, 18, '2021-06-24 16:59:25', '2021-06-24 16:59:25', NULL),
(11, 'consequatur', 'Consequatur eligendi qui quod est facere. Ratione earum nemo modi quia. Corrupti et placeat ipsa. Hic aperiam vel dignissimos quia dolor tenetur sunt.', 4776.57, NULL, 5, '2021-06-24 16:59:25', '2021-06-24 16:59:25', NULL),
(12, 'in', 'Quidem iusto laudantium et voluptatibus itaque. Amet veniam corporis sed natus culpa. Dolorum officia nam ut optio et.', 4624.75, NULL, 19, '2021-06-24 16:59:25', '2021-06-24 16:59:25', NULL),
(13, 'reiciendis', 'Sit ipsum et aut. Ut quisquam omnis sequi non consequatur ullam. Et velit vel ex asperiores error corporis.', 6636.17, NULL, 10, '2021-06-24 16:59:25', '2021-06-24 16:59:25', NULL),
(14, 'molestias', 'Et quos doloremque ut laudantium. Culpa aliquid fugit perspiciatis quo sunt corporis reiciendis. Sapiente hic ducimus eum nesciunt nihil ipsam. Ad et est laborum perspiciatis dolore odit.', 9526.68, NULL, 9, '2021-06-24 16:59:25', '2021-06-24 16:59:25', NULL),
(15, 'in', 'Cumque neque iste modi quas illo. Consequatur similique ipsam maiores debitis quia est quia. Neque non omnis excepturi iusto facilis et. Voluptates sint amet ab ut tempora et.', 850.79, NULL, 3, '2021-06-24 16:59:25', '2021-06-24 16:59:25', NULL),
(17, 'nam', 'Et quisquam non iusto velit dolores et. Suscipit natus consequatur perspiciatis provident debitis vitae alias. Tempore quia animi magni autem id optio pariatur.', 8556.73, NULL, 1, '2021-06-24 16:59:25', '2021-06-24 16:59:25', NULL),
(18, 'nobis', 'Alias nulla rem excepturi asperiores in id sunt. Officia et ducimus maiores eaque inventore iusto.', 7797.77, NULL, 14, '2021-06-24 16:59:25', '2021-06-24 16:59:25', NULL),
(19, 'deleniti', 'Quia asperiores quod ipsa nobis tempore sed. Repellat mollitia numquam eos vero. Omnis qui molestias ad laboriosam. Dicta maxime est porro odit.', 711.97, NULL, 16, '2021-06-24 16:59:25', '2021-06-24 16:59:25', NULL),
(20, 'impedit', 'Asperiores vel rerum optio unde impedit magnam quia. Mollitia dolores dicta cum. Optio dolorem consequuntur maiores quis nihil harum architecto.', 9201.63, NULL, 4, '2021-06-24 16:59:25', '2021-06-24 16:59:25', NULL),
(21, 'consequuntur', 'Dicta eum minima odio omnis earum voluptas. Sequi est et voluptas. A quaerat necessitatibus ipsam assumenda dolores ea. Ut dolorem repellendus dolorum veniam est distinctio incidunt.', 9023.22, NULL, 5, '2021-06-24 16:59:25', '2021-06-24 16:59:25', NULL),
(22, 'ullam', 'Odit dicta pariatur dicta totam eum sit corrupti. Voluptas fugit eius quo perferendis porro. Quaerat inventore maxime iusto.', 7539.33, NULL, 14, '2021-06-24 16:59:25', '2021-06-24 16:59:25', NULL),
(23, 'in', 'Architecto ullam enim reprehenderit culpa. Praesentium impedit et ut autem. Quia hic sequi nihil consequatur voluptatem.', 3396.51, NULL, 14, '2021-06-24 16:59:25', '2021-06-24 16:59:25', NULL),
(25, 'officia', 'Mollitia rerum sint laborum dolorem voluptas necessitatibus vel. Sint rerum et nostrum qui. Atque odit consequuntur ad quae. Eos aut commodi at delectus autem tempore.', 2710.13, NULL, 4, '2021-06-24 16:59:25', '2021-06-24 16:59:25', NULL),
(26, 'eligendi', 'Sapiente odit et aliquid modi non qui tempora qui. In qui est eum. Delectus ullam necessitatibus illo sunt at.', 195.25, NULL, 2, '2021-06-24 16:59:25', '2021-06-24 16:59:25', NULL),
(27, 'nobis', 'Enim dolores neque est. Velit occaecati sit provident explicabo consequatur officiis. Dolor adipisci aliquid ipsum modi. Facere quaerat in harum qui necessitatibus debitis praesentium.', 2302.46, NULL, 9, '2021-06-24 16:59:25', '2021-06-24 16:59:25', NULL),
(28, 'tenetur', 'Atque aut beatae fuga qui. Qui omnis qui quae provident repudiandae unde dignissimos. Sequi vel rerum omnis.', 8373.41, NULL, 13, '2021-06-24 16:59:25', '2021-06-24 16:59:25', NULL),
(29, 'sed', 'Recusandae nemo delectus in modi. Modi provident vitae animi at. Laudantium libero alias facilis rerum excepturi eum. Corporis sed consequuntur sit voluptates id et.', 5886.70, NULL, 11, '2021-06-24 16:59:25', '2021-06-24 16:59:25', NULL),
(30, 'esse', 'Iure earum iure labore quod accusantium consequatur necessitatibus. Fugit accusantium ducimus laudantium consequuntur quidem recusandae. Magni ipsum necessitatibus quis rerum iusto culpa voluptatem.', 4411.85, NULL, 7, '2021-06-24 16:59:25', '2021-06-24 16:59:25', NULL),
(31, 'placeat', 'Voluptas ea molestiae ut est qui dolorum aut. Neque sapiente praesentium harum. Inventore labore magnam dignissimos perferendis consectetur.', 5248.39, NULL, 4, '2021-06-24 16:59:25', '2021-06-24 16:59:25', NULL),
(32, 'tenetur', 'Ipsa doloribus aut nesciunt totam minima. Sunt vero ut est molestiae sed itaque similique. Voluptate quibusdam ad aut consequatur natus.', 983.00, NULL, 17, '2021-06-24 16:59:25', '2021-06-24 16:59:25', NULL),
(33, 'quas', 'Ab porro ipsum ea labore cum. Mollitia quia ut nihil omnis.', 186.77, NULL, 9, '2021-06-24 16:59:25', '2021-06-24 16:59:25', NULL),
(34, 'perspiciatis', 'Sint minima autem et. Necessitatibus itaque rem recusandae esse. Est vitae recusandae laboriosam. Unde ullam dolor voluptatem nam architecto. Vel praesentium non eveniet alias laudantium ut ut.', 3780.72, NULL, 12, '2021-06-24 16:59:25', '2021-06-24 16:59:25', NULL),
(35, 'impedit', 'Natus provident necessitatibus iure dolores inventore accusantium. Rerum expedita saepe magni accusantium.', 6648.37, NULL, 3, '2021-06-24 16:59:25', '2021-06-24 16:59:25', NULL),
(36, 'at', 'Et repellat omnis amet. Reprehenderit eum deleniti debitis sint voluptates. Dolorem consectetur dicta quia vel dolorem. Eum dolorem iusto omnis nesciunt reiciendis.', 7305.11, NULL, 16, '2021-06-24 16:59:25', '2021-06-24 16:59:25', NULL),
(37, 'cum', 'Repellat sed laborum omnis ea. Error molestias iure iure. In voluptatem sint incidunt reprehenderit omnis et. Ipsam aut enim in.', 1160.25, NULL, 10, '2021-06-24 16:59:25', '2021-06-24 16:59:25', NULL),
(38, 'in', 'Facilis quis vel ut sit. Et veniam aperiam nihil rem error odit laborum. Occaecati dolor nam ea commodi aut aperiam voluptatum. Minus dolores rerum cupiditate et quas.', 3627.22, NULL, 7, '2021-06-24 16:59:25', '2021-06-24 16:59:25', NULL),
(39, 'et', 'Neque ullam dolore id nam. Delectus placeat quod voluptatem aut nostrum et quos. Nobis blanditiis dolores perspiciatis suscipit.', 339.28, NULL, 9, '2021-06-24 16:59:25', '2021-06-24 16:59:25', NULL),
(40, 'non', 'Non quod porro qui qui aut. Doloremque aspernatur sit sit qui. Nihil asperiores quae eos. Quas consequatur et vel nihil possimus dolore.', 3257.07, NULL, 18, '2021-06-24 16:59:25', '2021-06-24 16:59:25', NULL),
(41, 'repudiandae', 'Ut est distinctio culpa excepturi vero ducimus. Aut repellendus nostrum non autem. Quasi dicta officia impedit eos laboriosam sunt. Molestiae eveniet sit omnis.', 474.15, NULL, 2, '2021-06-24 16:59:25', '2021-06-24 16:59:25', NULL),
(42, 'et', 'Aut vel aut ipsum alias dolorum et. Voluptas cumque voluptas aut maxime ex voluptates voluptatibus. Exercitationem sit hic pariatur asperiores nesciunt.', 7635.77, NULL, 3, '2021-06-24 16:59:25', '2021-06-24 16:59:25', NULL),
(43, 'error', 'Illum animi veniam et veniam. Voluptas numquam dolores aut vel et ratione. Sed quia magnam veritatis incidunt. Velit et necessitatibus nam in nihil et aut.', 595.28, NULL, 19, '2021-06-24 16:59:25', '2021-06-24 16:59:25', NULL),
(44, 'ut', 'Ducimus sunt vitae maxime dicta quo a. Ea eos exercitationem eos. Debitis assumenda voluptates ab dolor dicta aspernatur. Optio repudiandae libero sit cumque magni soluta.', 8110.03, NULL, 17, '2021-06-24 16:59:25', '2021-06-24 16:59:25', NULL),
(45, 'iste', 'Culpa facere harum consequatur aut pariatur assumenda libero. Aut dicta aut placeat est soluta. Maxime dicta excepturi excepturi.', 276.77, NULL, 10, '2021-06-24 16:59:25', '2021-06-24 16:59:25', NULL),
(46, 'et', 'Facere fugiat inventore amet voluptates. Et magnam quam aut. Saepe repudiandae doloribus sint. Blanditiis et ea officiis ut esse dolores iure necessitatibus.', 3398.94, NULL, 11, '2021-06-24 16:59:25', '2021-06-24 16:59:25', NULL),
(47, 'eligendi', 'Minus laborum est mollitia et facere voluptate cumque. Optio consequatur libero cupiditate quam placeat eum. Omnis distinctio dolorum expedita dignissimos cumque.', 5487.07, NULL, 15, '2021-06-24 16:59:25', '2021-06-24 16:59:25', NULL),
(48, 'odit', 'Odit reprehenderit aperiam cum accusantium est nemo et. Vitae doloribus vel voluptatum tempore. Qui officiis et minima neque eum aliquam impedit nihil. Qui itaque quas optio.', 2242.18, NULL, 11, '2021-06-24 16:59:25', '2021-06-24 16:59:25', NULL),
(49, 'beatae', 'Voluptas quam porro optio nesciunt. Corrupti eligendi consequatur deserunt culpa sit delectus non. Aut ut tempora autem possimus.', 9284.95, NULL, 13, '2021-06-24 16:59:25', '2021-06-24 16:59:25', NULL),
(50, 'ut', 'Quia dolores rem excepturi expedita odit amet est suscipit. Ipsa magni in vero dicta qui ea cupiditate. Nulla et qui hic natus ipsa. Aperiam qui occaecati eligendi enim.', 9014.90, NULL, 5, '2021-06-24 16:59:25', '2021-06-24 16:59:25', NULL),
(51, 'saepe', 'Ut eos optio animi sint est voluptatibus tempore. Consectetur voluptatibus cum aut et ipsam totam. Voluptatum et ipsum occaecati.', 576.87, NULL, 24, '2021-06-24 16:59:25', '2021-06-24 16:59:25', NULL),
(52, 'nemo', 'Est officiis qui minima ea sit. Aut velit et facilis. Est voluptas maiores et praesentium.', 3894.05, NULL, 7, '2021-06-24 16:59:25', '2021-06-24 16:59:25', NULL),
(53, 'quis', 'Enim nemo molestias sit et. Ea repudiandae qui facere temporibus dolores temporibus asperiores.', 4136.97, NULL, 4, '2021-06-24 16:59:25', '2021-06-24 16:59:25', NULL),
(54, 'esse', 'Repellat animi vel quaerat enim. Unde repellat dolor iure et facere neque doloremque totam. Illo error vero ea pariatur soluta laboriosam labore. Est debitis magnam modi beatae nihil quis.', 1487.06, NULL, 19, '2021-06-24 16:59:25', '2021-06-24 16:59:25', NULL),
(56, 'magni', 'Quod natus sit officiis ut. Omnis alias ipsa neque assumenda. Explicabo nulla fuga eum facilis quae. Soluta nulla illum sit sunt ipsam ut.', 2955.21, NULL, 24, '2021-06-24 16:59:25', '2021-06-24 16:59:25', NULL),
(58, 'quas', 'Impedit voluptatem odit fuga consequatur minus. Voluptatem sit id sint sint ut facilis. Suscipit consectetur molestias praesentium accusantium voluptas quidem eaque.', 5783.37, NULL, 6, '2021-06-24 16:59:25', '2021-06-24 16:59:25', NULL),
(59, 'est', 'Aut incidunt in veniam et accusamus animi. Praesentium iusto libero itaque blanditiis doloribus similique magnam impedit. Reprehenderit consectetur sunt nostrum quidem a sit quisquam amet.', 7360.58, NULL, 18, '2021-06-24 16:59:25', '2021-06-24 16:59:25', NULL),
(60, 'beatae', 'Amet accusantium voluptatum velit dolores provident. Accusantium mollitia voluptas qui officiis magni et perspiciatis. Et illo ut eum aliquam. Repellendus at eum sequi eos recusandae sed explicabo.', 9893.86, NULL, 9, '2021-06-24 16:59:25', '2021-06-24 16:59:25', NULL),
(61, 'aut', 'Repellendus et labore ut iure qui ut. Dolor quas sequi laudantium in impedit qui quia. Tempore atque porro impedit qui eos. Omnis qui corrupti minima corrupti animi.', 7571.85, NULL, 24, '2021-06-24 16:59:25', '2021-06-24 16:59:25', NULL),
(62, 'qui', 'Repudiandae quos laborum accusantium. Quia soluta et non autem aut voluptatem nihil. Deleniti facere et nesciunt voluptas incidunt libero qui.', 2531.50, NULL, 11, '2021-06-24 16:59:25', '2021-06-24 16:59:25', NULL),
(63, 'enim', 'Cumque nihil voluptates ipsum rerum enim eveniet. Modi et aut architecto aut. Voluptates qui excepturi eum vero adipisci sint.', 1637.76, NULL, 7, '2021-06-24 16:59:25', '2021-06-24 16:59:25', NULL),
(64, 'odio', 'Rerum et qui voluptate quia labore dolore et quam. Illo quo ut sit ipsam. Eaque in sequi vel. Consequatur debitis nemo quae quas vel quia. Et doloremque hic ut ut.', 5822.27, NULL, 24, '2021-06-24 16:59:25', '2021-06-24 16:59:25', NULL),
(65, 'est', 'Numquam magnam eius voluptatem quis autem. Veniam eum velit impedit error in inventore. Non exercitationem iste voluptatem sed ut hic aspernatur.', 7882.94, NULL, 5, '2021-06-24 16:59:25', '2021-06-24 16:59:25', NULL),
(66, 'officiis', 'Deleniti et et id vitae aut ipsam provident natus. Dolorum vitae aperiam qui ut. Qui assumenda ea mollitia quod quo ipsa nihil voluptas. Voluptatem eos voluptate est unde consequatur quis omnis.', 9600.01, NULL, 19, '2021-06-24 16:59:25', '2021-06-24 16:59:25', NULL),
(67, 'pariatur', 'Rerum excepturi corrupti ipsum dolor. Eligendi veniam sed voluptates fugit. Voluptas suscipit quidem aut ut. Iste iure incidunt sed maiores. Est numquam omnis nemo officiis illum cumque.', 9083.36, NULL, 14, '2021-06-24 16:59:25', '2021-06-24 16:59:25', NULL),
(68, 'laudantium', 'Aut aliquam dolore nobis sunt. A aut exercitationem aliquid numquam atque eveniet. Officiis quia fugiat ad vero et explicabo in harum. Beatae sunt soluta quasi in quod velit autem.', 1344.52, NULL, 19, '2021-06-24 16:59:25', '2021-06-24 16:59:25', NULL),
(69, 'est', 'Necessitatibus fugiat soluta ut laborum. Voluptatibus aliquam eos nihil.', 3230.94, NULL, 11, '2021-06-24 16:59:25', '2021-06-24 16:59:25', NULL),
(70, 'modi', 'Et voluptas dicta laborum accusamus. Ducimus non delectus dolorem repudiandae officia tempore et. Et molestiae praesentium rerum. Nihil reprehenderit et blanditiis qui voluptas omnis omnis sed.', 8885.20, NULL, 11, '2021-06-24 16:59:25', '2021-06-24 16:59:25', NULL),
(71, 'molestiae', 'Nostrum eius et voluptas iure cum. Velit exercitationem dolorem maxime consectetur adipisci. Ut vel eum odit sit vero sit.', 5825.16, NULL, 7, '2021-06-24 16:59:25', '2021-06-24 16:59:25', NULL),
(72, 'autem', 'Sequi provident ut accusantium laborum blanditiis eos occaecati ut. Est beatae nam nesciunt illum reprehenderit consequatur. Quis ullam praesentium ut nisi odio.', 6630.46, NULL, 10, '2021-06-24 16:59:25', '2021-06-24 16:59:25', NULL),
(74, 'reiciendis', 'Iusto blanditiis numquam omnis eligendi voluptate. Commodi nihil voluptatem alias ut id. Esse atque voluptates dolor ea accusamus eligendi eligendi.', 1773.53, NULL, 7, '2021-06-24 16:59:25', '2021-06-24 16:59:25', NULL),
(75, 'vitae', 'Expedita voluptatem sit unde odio saepe. Sit fugiat possimus aut veniam.', 9650.49, NULL, 19, '2021-06-24 16:59:25', '2021-06-24 16:59:25', NULL),
(76, 'modi', 'Expedita praesentium modi magni eligendi commodi. Ad voluptatem aliquid aperiam impedit suscipit eos atque. Omnis doloremque iusto nostrum qui maxime.', 3832.52, NULL, 6, '2021-06-24 16:59:25', '2021-06-24 16:59:25', NULL),
(77, 'est', 'Dolores eos alias voluptatem non. Voluptas nihil ut at. Voluptas maiores optio eum repellendus a non assumenda. Magni ad dicta illo quia a consectetur.', 7186.76, NULL, 4, '2021-06-24 16:59:25', '2021-06-24 16:59:25', NULL),
(78, 'corrupti', 'Blanditiis qui vitae velit cupiditate animi. Quam dignissimos sed velit non ullam repellat praesentium.', 4336.11, NULL, 15, '2021-06-24 16:59:25', '2021-06-24 16:59:25', NULL),
(79, 'est', 'Dignissimos accusamus vel eaque porro qui. Tempore qui dolore autem quo facere ut corporis natus. Quia quis dicta repellendus quia. Culpa ipsam laudantium ut enim possimus doloribus debitis sapiente.', 4416.02, NULL, 11, '2021-06-24 16:59:25', '2021-06-24 16:59:25', NULL),
(80, 'reprehenderit', 'Et et quo qui a voluptatem. Fugit reiciendis culpa voluptatem repudiandae et esse facere. Architecto possimus at quia ullam impedit velit provident.', 3582.42, NULL, 24, '2021-06-24 16:59:25', '2021-06-24 16:59:25', NULL),
(81, 'distinctio', 'Tempora et enim placeat. Quia amet sit autem voluptas deleniti voluptatum quibusdam.', 974.05, NULL, 24, '2021-06-24 16:59:25', '2021-06-25 19:21:29', NULL),
(83, 'omnis', 'Voluptate officia et voluptates nostrum. Eos quo cum maxime illo dolor. Non pariatur molestias commodi. Sit nihil vel sapiente eaque labore sit mollitia.', 9255.12, NULL, 14, '2021-06-24 16:59:25', '2021-06-24 16:59:25', NULL),
(84, 'impedit', 'Rerum minus porro voluptates autem. Vel iste maiores illo adipisci ut optio. Cupiditate asperiores iure mollitia quia incidunt similique ducimus.', 1089.30, NULL, 13, '2021-06-24 16:59:25', '2021-06-24 16:59:25', NULL),
(85, 'quibusdam', 'Vel pariatur non tempora hic nam debitis enim. Nam aliquid aut iste ut enim sit corrupti. Est doloremque iure adipisci veniam. Rem quam delectus dignissimos.', 2934.58, NULL, 2, '2021-06-24 16:59:25', '2021-06-24 16:59:25', NULL),
(86, 'aut', 'Ut earum eum quo. Sint distinctio in deserunt doloribus ea ullam nam quia. Provident explicabo modi id animi.', 9884.41, NULL, 24, '2021-06-24 16:59:25', '2021-06-24 16:59:25', NULL),
(88, 'nostrum', 'Quod nam laborum recusandae magni. Eos numquam laborum nam sint quisquam doloremque incidunt. Minus id voluptas nostrum quia repellendus eius. Ut hic sint earum cum. Quia qui ut nulla.', 3410.73, NULL, 3, '2021-06-24 16:59:25', '2021-06-24 16:59:25', NULL),
(89, 'officiis', 'Facere praesentium consequuntur sed sint. Odio perspiciatis adipisci vel porro dolorem qui distinctio. Doloribus perferendis velit et.', 905.72, NULL, 24, '2021-06-24 16:59:25', '2021-06-24 16:59:25', NULL),
(90, 'esse', 'Fugit sequi illo ducimus ut. Dolores ea dolor vel et suscipit placeat dignissimos. Est non eos qui excepturi dolores nesciunt.', 8658.88, NULL, 24, '2021-06-24 16:59:25', '2021-06-25 18:01:35', '2021-06-25 18:01:35'),
(91, 'quibusdam', 'Sed consequatur qui aperiam aliquid. Id voluptatem aliquam minus id quo. Rem aliquam vel est id dolor ut.', 8559.33, NULL, 15, '2021-06-24 16:59:25', '2021-06-24 16:59:25', NULL),
(92, 'nihil', 'Non veniam aut quos odit qui et possimus. Nemo nulla deleniti odio voluptas dolores nesciunt. Exercitationem explicabo ut et esse dolorem.', 4754.09, NULL, 1, '2021-06-24 16:59:25', '2021-06-24 16:59:25', NULL),
(93, 'amet', 'Ad perspiciatis ipsam et animi eos numquam excepturi. Magnam asperiores ipsam quis. Magnam eum est corporis saepe nesciunt.', 2022.44, NULL, 24, '2021-06-24 16:59:25', '2021-06-25 18:47:03', '2021-06-25 18:47:03'),
(94, 'repudiandae', 'Enim enim et necessitatibus consequatur nulla qui et. Eos nesciunt animi sed. Aut et cupiditate quasi maiores.', 1358.43, NULL, 6, '2021-06-24 16:59:25', '2021-06-24 16:59:25', NULL),
(95, 'saepe', 'Et quae dolorem repellat sint. Ut cumque eveniet sapiente velit voluptates et. Delectus perferendis cupiditate exercitationem accusamus illo atque.', 8704.25, NULL, 24, '2021-06-24 16:59:25', '2021-06-24 16:59:25', NULL),
(96, 'quasi', 'Dolorum eos modi asperiores consequatur nulla est. Fugit consequatur est suscipit nulla aperiam laboriosam. Omnis vero placeat officia sit molestias. Pariatur deleniti a rerum.', 2488.07, NULL, 10, '2021-06-24 16:59:25', '2021-06-24 16:59:25', NULL),
(97, 'ea', 'Dolorem distinctio quis maxime qui sunt tempore minima. Est dolores qui facere modi temporibus. Deleniti necessitatibus aut atque cum est. Nihil quia voluptates dicta qui quis hic sint.', 2252.82, NULL, 19, '2021-06-24 16:59:25', '2021-06-24 16:59:25', NULL),
(98, 'minus', 'Blanditiis dolorum sint deserunt est excepturi quas autem. Quaerat nam qui consequuntur qui dolores.', 6105.55, NULL, 16, '2021-06-24 16:59:25', '2021-06-24 16:59:25', NULL),
(102, 'Escritorio de madera', 'Nuevo. Gran ocasión! Color negro, de madera.', 110.50, 'N26sr4b40w7bQW3vWLL1ZEfoxxIyXqksJadpKMUA.jpg', 24, '2021-06-24 18:49:13', '2021-07-01 06:55:50', NULL),
(104, 'Bolso de tela', 'Bolso de tela hecho a mano.', 15.00, 'HEcSabQFtaTdd40IDkRNZdolSJhH3rTXpzjkkWJo.jpg', 24, '2021-06-25 06:16:10', '2021-06-25 06:24:18', NULL),
(105, 'Maleta', 'Maleta grande de ruedas de segunda mano. Muy resistente. En muy buen estado.', 25.00, 'M2iitmblMv9JSP22Y5ulw4tL4mc4TdbpTaKig4tt.jpg', 24, '2021-06-25 07:08:39', '2021-06-25 07:08:39', NULL),
(106, 'Mesa redonda madera', 'Mesa de madera de olivo, redonda de 1.3m de diámetro.', 60.00, '1GulhxBq0GneYnpolSP3Xdy7TxCT6h2EBa84YWRl.jpg', 24, '2021-06-25 08:22:32', '2021-06-25 15:10:48', NULL),
(107, 'Casco de bici', 'Resistente. Para adulto.', 10.00, 'ZkNXOD4liLidIcNcajYdlXnNysNWa18b0op9Vmh1.jpg', 24, '2021-06-25 09:10:12', '2021-06-25 15:21:38', NULL),
(108, 'Caseta', 'De madera', 1000.00, 'MnpqlCUc7MG1b0MCIGIRMnzfUs34uyxZJAZvTxAw.jpg', 24, '2021-06-25 09:16:00', '2021-06-25 15:08:57', NULL),
(109, 'Mantel', 'Elegante', 10.99, 'TOcAoQe5YElACcZ9s1rL9yGIOtaDfkEizblAwMTv.jpg', 24, '2021-06-27 07:29:14', '2021-06-27 07:33:45', NULL),
(122, 'Pala de padel', 'Buena', 50.00, 'BqH1lfct5MfpplW8eqGjg0ixcayNe8smqvBLNvON.jpg', 38, '2021-06-29 10:43:41', '2021-06-29 10:43:41', NULL),
(123, 'Pala ping pong', 'Buena', 20.00, '5Utdp4CSnQjw4zfr7bxzi9walmM86wGppSLibDty.jpg', 38, '2021-06-29 10:44:04', '2021-06-29 10:44:04', NULL),
(124, 'Ajedrez de madera', 'Buena calidad', 24.98, 'cf8HLSciof3bl2JHay7B6M91uN1olVgv6dTBMXHD.jpg', 24, '2021-07-01 07:08:09', '2021-07-01 07:11:41', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_06_24_135407_create_anuncios_table', 1),
(5, '2021_06_25_194436_add_soft_delete_anuncios', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('uno@gmail.com', '$2y$10$UetpThxHTdj.IPYl7KrfB.TPEchDIi3ocwcyo9EEqlhXqDgrv47ya', '2021-06-25 08:26:01'),
('julia@gmail.com', '$2y$10$ttT4NF6u1znEhuxQXo0FLuJOWEnn6QPyvmNGzjBsRKL791wkvq18a', '2021-06-25 14:24:47'),
('laura.zango3@gmail.com', '$2y$10$9bNh8H2YiFYuOlbL4b0B1eG5q4GZ8m1arBec2dNxDSqj7G2SSKXwS', '2021-06-25 14:30:53');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `poblacion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nacimiento` date DEFAULT NULL,
  `imagen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `poblacion`, `telefono`, `nacimiento`, `imagen`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Zoe Solís Segundo', 'anaisabel05@example.org', '2021-06-24 15:43:33', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'El Anguiano del Bages', '+34 904 43 3223', '2008-10-27', NULL, '3MfdemyLzq', '2021-06-24 15:43:33', '2021-06-24 15:43:33'),
(2, 'Alma Gálvez', 'bberrios@example.net', '2021-06-24 15:43:33', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'O Cuesta', '+34 963331608', '1947-03-08', NULL, 'tzMLEmvQ0u', '2021-06-24 15:43:33', '2021-06-24 15:43:33'),
(3, 'Alexia Patiño', 'lovato.jesus@example.com', '2021-06-24 15:43:33', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Los Riera', '954 96 1555', '1993-12-03', NULL, '44bHAH7Ehk', '2021-06-24 15:43:33', '2021-06-24 15:43:33'),
(4, 'Lic. Gonzalo Zelaya Tercero', 'teresa14@example.com', '2021-06-24 15:43:33', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Rincón de las Torres', '948 32 6136', '1985-04-24', NULL, 'ggfoJeRW8s', '2021-06-24 15:43:33', '2021-06-24 15:43:33'),
(5, 'Eduardo Garza Hijo', 'aleix.garza@example.net', '2021-06-24 15:43:33', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'A Merino', '926150038', '2011-11-16', NULL, 'rvVcP5VDPe', '2021-06-24 15:43:33', '2021-06-24 15:43:33'),
(6, 'Ing. José Antonio Jimínez Tercero', 'rosamaria39@example.net', '2021-06-24 15:43:33', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'As Vergara', '962-723938', '1974-12-29', NULL, 'dl8QSKYrzb', '2021-06-24 15:43:33', '2021-06-24 15:43:33'),
(7, 'Enrique Alemán', 'vergara.lucas@example.net', '2021-06-24 15:43:33', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Zavala de Lemos', '926-39-5097', '2003-12-28', NULL, 'Vf3uhA5L9Z', '2021-06-24 15:43:33', '2021-06-24 15:43:33'),
(8, 'Alejandra Cepeda', 'fanguiano@example.org', '2021-06-24 15:43:33', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'San Zamora', '+34 937004258', '1945-10-05', NULL, 'GurfI97sdb', '2021-06-24 15:43:33', '2021-06-24 15:43:33'),
(9, 'Lic. Vega Pantoja Hijo', 'nuria.font@example.com', '2021-06-24 15:43:33', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Adame de Arriba', '+34 923-33-3222', '1987-06-24', NULL, 'w1DkOIX9jy', '2021-06-24 15:43:33', '2021-06-24 15:43:33'),
(10, 'Iván Roig', 'qcastellanos@example.com', '2021-06-24 15:43:33', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'El Mora del Penedès', '+34 946424359', '1943-05-11', NULL, 'KkP6RKfJyI', '2021-06-24 15:43:33', '2021-06-24 15:43:33'),
(11, 'Ing. César Plaza', 'eduardo19@example.net', '2021-06-24 15:45:11', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'San Alba', '+34 976 331564', '1939-08-24', NULL, '8Sf9y3WEvc', '2021-06-24 15:45:11', '2021-06-24 15:45:11'),
(12, 'Luisa Castellano', 'pineda.adrian@example.org', '2021-06-24 15:45:11', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Los Longoria', '+34 959-14-8876', '1993-08-13', NULL, 'oLAJWCp5gk', '2021-06-24 15:45:11', '2021-06-24 15:45:11'),
(13, 'Fátima Dávila Tercero', 'aaron06@example.org', '2021-06-24 15:45:11', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'O Calero de Ulla', '933 873037', '1958-12-05', NULL, 'haqRgvBBIs', '2021-06-24 15:45:11', '2021-06-24 15:45:11'),
(14, 'Abril Cabrera', 'sandoval.david@example.org', '2021-06-24 15:45:11', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Los Armenta', '932283593', '1962-07-01', NULL, 'gR8Sb04O21', '2021-06-24 15:45:11', '2021-06-24 15:45:11'),
(15, 'Francisco Ordoñez', 'agarcia@example.com', '2021-06-24 15:45:11', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Márquez del Pozo', '+34 933 62 6154', '2002-10-27', NULL, '5HRvCUcFUo', '2021-06-24 15:45:11', '2021-06-24 15:45:11'),
(16, 'Adrián Cano', 'mar.alvarez@example.net', '2021-06-24 15:45:11', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'L\' Valentín', '+34 921-80-7475', '1996-02-20', NULL, 'iHGllnwmfz', '2021-06-24 15:45:11', '2021-06-24 15:45:11'),
(17, 'Sr. Sergio Vázquez', 'barrientos.carmen@example.net', '2021-06-24 15:45:11', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Montero Medio', '+34 933 347882', '1935-03-30', NULL, 'RYKhh5lDz5', '2021-06-24 15:45:11', '2021-06-24 15:45:11'),
(18, 'Ona Pardo', 'alba.cobo@example.net', '2021-06-24 15:45:11', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Lemus Baja', '975-616030', '1984-03-10', NULL, 'WezCYFYxIe', '2021-06-24 15:45:11', '2021-06-24 15:45:11'),
(19, 'Luna Perales', 'leire.suarez@example.org', '2021-06-24 15:45:11', '$2y$10$MC8jfZeXN6OPcdoCEWTZm.7pAnVgATrpBWECt4YN3H31HPEdFkBDq', 'A Villalpando', '+34 970964496', '2008-09-10', NULL, 'oarNjK9ElVes2xHIT1YwRPHpJf6gHA5Snedb47errJDTHDYN2tTb3n5gJ8LL', '2021-06-24 15:45:11', '2021-06-24 15:45:11'),
(22, 'Uno Dos', 'uno@gmail.com', '2021-06-25 08:06:09', '$2y$10$MC8jfZeXN6OPcdoCEWTZm.7pAnVgATrpBWECt4YN3H31HPEdFkBDq', 'Barcelona', '666666666', '2021-06-07', NULL, NULL, '2021-06-25 08:06:00', '2021-06-25 08:06:00'),
(24, 'Laura Dos', 'laura.zango3@gmail.com', '2021-06-25 08:51:00', '$2y$10$LbTJGBhs/NUuhAvAAqfUo.pD8XrAQVC.x/gLlTeen4XkkfloTQSBy', 'Barcelona', '666 66 66 73', '1990-03-30', NULL, NULL, '2021-06-25 08:48:21', '2021-07-01 07:04:14'),
(25, 'admin', 'admin@cifopop.com', '2021-06-25 10:40:02', '$2y$10$cYMRi3sMYE9qVcu/yvgGV.OssBmZOmEHWE/6ACiluZOaykctmK0Da', 'Barcelona', '666 66 66 66', '1994-05-03', NULL, NULL, '2021-06-25 10:38:24', '2021-06-25 10:38:24'),
(26, 'Julia', 'julia@gmail.com', '2021-06-25 13:32:07', '$2y$10$uVZM/g2DrApWf3d2TC7J7.Qc4Yg6FZYRoAmTXLbUZ14M4rSt6BQB.', 'Sant Celoni', '666 66 66 66', '1997-06-18', NULL, NULL, '2021-06-25 13:17:23', '2021-06-25 13:17:23'),
(27, 'Anna Gond', 'anna@gmail.com', NULL, '$2y$10$7ITvOk4xHtQy1eWrqINGW.L0QyC3L4J9.PP8e7wU9DCkzNhys0TeK', 'Gualba', '666 66 66 66', '1990-06-12', NULL, NULL, '2021-06-25 13:28:28', '2021-06-25 13:28:28'),
(30, 'Albert', 'albert@falso.fa', NULL, '$2y$10$UzIk1fmq5yvwhE2ZW3xcMeiwIH09jLaDo914W0evApyVDvoEY/HOm', 'Barcelona', '666666666', NULL, 'ZG3INnCbC79t0I2sgOvUkGFQlfT2YGFKmb5nzGua.jpg', NULL, '2021-06-27 09:13:53', '2021-06-27 09:13:53'),
(31, 'Sergi', 'sergi@falso.fa', NULL, '$2y$10$IXm/ytoL9S8pea5vBqzLxOgsMONfr7gYHpKliRI4VU0rm1EzOzSU6', 'Molins de Rei', '666 66 66 66', '1992-11-09', NULL, NULL, '2021-06-27 09:22:00', '2021-06-27 09:22:00'),
(38, 'Albert', 'albert@falso.falso', '2021-06-29 10:43:15', '$2y$10$K3gOaVdRwxrG.Vqh1yiD8uaCRd7TpJUwYsA3H1hCme6EuvQ7m69xO', 'Canadá Park', '666 66 66 66', NULL, '4CZCCOGfBl6aXM8SMWcrZRgu5fGK9jPO0UQcK6Zd.jpg', NULL, '2021-06-29 10:43:02', '2021-06-29 10:43:02'),
(40, 'Lauraz', 'laura_90bcn@hotmail.com', NULL, '$2y$10$bE3hkbfJAHdlticBhURNSeeYMLq7D8xOYVJdIdjYcm7RljnfHRfSO', 'Barcelona', '666 66 66 66', NULL, NULL, NULL, '2021-06-30 10:32:19', '2021-06-30 10:32:19');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `anuncios`
--
ALTER TABLE `anuncios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `anuncios_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `anuncios`
--
ALTER TABLE `anuncios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `anuncios`
--
ALTER TABLE `anuncios`
  ADD CONSTRAINT `anuncios_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

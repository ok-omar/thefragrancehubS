-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2025 at 03:47 PM
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
-- Database: `fragrancedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `fragrances`
--

DROP TABLE IF EXISTS `fragrances`;
CREATE TABLE `fragrances` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `image_url` text DEFAULT NULL,
  `gender` enum('men','women','unisex') NOT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `longevity` varchar(10) DEFAULT NULL,
  `sillage` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fragrances`
--

INSERT INTO `fragrances` (`id`, `name`, `brand`, `image_url`, `gender`, `price`, `longevity`, `sillage`) VALUES
(681, 'Chanel Chance', 'Chanel', 'https://d2k6fvhyk5xgx.cloudfront.net/images/chanel-chance.jpg', 'women', 299.99, '74.4%', '65.25%'),
(682, 'Chanel Chance Eau Fraiche', 'Chanel', 'https://d2k6fvhyk5xgx.cloudfront.net/images/chanel-chance-eau-fraiche.jpg', 'women', 149.99, '65.4%', '58.0%'),
(683, 'Chanel Chance Eau Vive', 'Chanel', 'https://d2k6fvhyk5xgx.cloudfront.net/images/chanel-chance-eau-vive.jpg', 'women', 310.99, '63.4%', '58.0%'),
(684, 'Chanel Chance Eau Tendre', 'Chanel', 'https://d2k6fvhyk5xgx.cloudfront.net/images/chanel-chance-eau-tendre.jpg', 'women', 208.99, '61.6%', '54.75%'),
(687, 'Chance Eau de Toilette Chanel for women', 'Chanel', 'https://d2k6fvhyk5xgx.cloudfront.net/images/chance-eau-de-toilette-chanel-for-women.jpg', 'women', 35.00, '73%', '66%'),
(689, 'Chanel N19 Chanel for women', 'Chanel', 'https://d2k6fvhyk5xgx.cloudfront.net/images/chanel-n19-chanel-for-women.jpg', 'women', 59.00, '63%', '58%'),
(690, 'Chanel N22 Chanel for women', 'Chanel', 'https://d2k6fvhyk5xgx.cloudfront.net/images/chanel-n22-chanel-for-women.jpg', 'women', 49.00, '69%', '66%'),
(691, 'Chance Eau Tendre Hair Mist Chanel for women', 'Chanel', 'https://d2k6fvhyk5xgx.cloudfront.net/images/chance-eau-tendre-hair-mist-chanel-for-women.jpg', 'women', 59.00, '49%', '50%'),
(692, 'Chance Eau Vive Hair Mist Chanel for women', 'Chanel', 'https://d2k6fvhyk5xgx.cloudfront.net/images/chance-eau-vive-hair-mist-chanel-for-women.jpg', 'women', 59.00, '53%', '62%'),
(694, 'Chanel Coco', 'Chanel', 'https://d2k6fvhyk5xgx.cloudfront.net/images/chanel-coco.jpg', 'women', 264.99, '80.8%', '71.5%'),
(695, 'Chanel 19', 'Chanel', 'https://d2k6fvhyk5xgx.cloudfront.net/images/chanel-19.jpg', 'women', 298.99, '69.4%', '59.75%'),
(696, 'Chanel Gabrielle', 'Chanel', 'https://d2k6fvhyk5xgx.cloudfront.net/images/chanel-gabrielle.jpg', 'women', 115.99, '61.0%', '55.75%'),
(698, 'Chanel Cristalle', 'Chanel', 'https://d2k6fvhyk5xgx.cloudfront.net/images/chanel-cristalle.jpg', 'women', 271.99, '64.4%', '58.0%'),
(700, 'Chanel N5 Vintage Chanel for women', 'Chanel', 'https://d2k6fvhyk5xgx.cloudfront.net/images/chanel-n5-vintage-chanel-for-women.jpg', 'women', 49.00, '79%', '68%'),
(702, 'Creed Acqua Fiorentina', 'Creed', 'https://d2k6fvhyk5xgx.cloudfront.net/images/creed-acqua-fiorentina.jpg', 'men', 3.50, '60.2%', '60.0%'),
(703, 'Creed Acqua Originale Green Neroli', 'Creed', 'https://d2k6fvhyk5xgx.cloudfront.net/images/creed-acqua-originale-green-neroli.jpg', 'men', 164.00, '43.8%', '45.5%'),
(710, 'Creed Aventus Cologne', 'Creed', 'https://d2k6fvhyk5xgx.cloudfront.net/images/creed-aventus-cologne.jpg', 'men', 5.99, '62.8%', '54.75%'),
(711, 'Creed Aventus For Her', 'Creed', 'https://d2k6fvhyk5xgx.cloudfront.net/images/creed-aventus-for-her.jpg', 'men', 4.99, '73.4%', '66.5%'),
(715, 'Creed Bois Du Portugal', 'Creed', 'https://d2k6fvhyk5xgx.cloudfront.net/images/creed-bois-du-portugal.jpg', 'men', 209.00, '72.0%', '60.5%'),
(716, 'Creed Carmina', 'Creed', 'https://d2k6fvhyk5xgx.cloudfront.net/images/creed-carmina.jpg', 'men', 218.00, '71.2%', '59.25%'),
(717, 'Creed Centaurus', 'Creed', 'https://d2k6fvhyk5xgx.cloudfront.net/images/creed-centaurus.jpg', 'men', 274.99, '72.6%', '61.0%'),
(718, 'Creed Delphinus', 'Creed', 'https://d2k6fvhyk5xgx.cloudfront.net/images/creed-delphinus.jpg', 'men', 274.99, '66.4%', '52.5%'),
(719, 'Creed Erolfa', 'Creed', 'https://d2k6fvhyk5xgx.cloudfront.net/images/creed-erolfa.jpg', 'men', 225.00, '58.8%', '52.5%'),
(720, 'Creed Green Irish Tweed', 'Creed', 'https://d2k6fvhyk5xgx.cloudfront.net/images/creed-green-irish-tweed.jpg', 'men', 215.00, '69.6%', '56.75%'),
(721, 'Creed Green Irish Tweed', 'Creed', 'https://d2k6fvhyk5xgx.cloudfront.net/images/creed-green-irish-tweed.jpg', 'men', 364.99, '69.6%', '56.75%'),
(723, 'Creed Himalaya', 'Creed', 'https://d2k6fvhyk5xgx.cloudfront.net/images/creed-himalaya.jpg', 'men', 215.00, '64.0%', '56.0%'),
(727, 'Creed Love In Black', 'Creed', 'https://d2k6fvhyk5xgx.cloudfront.net/images/creed-love-in-black.jpg', 'men', 4.50, '57.6%', '50.0%'),
(728, 'Creed Love In White', 'Creed', 'https://d2k6fvhyk5xgx.cloudfront.net/images/creed-love-in-white.jpg', 'men', 176.00, '67.2%', '59.75%'),
(730, 'Creed Millesime Imperial', 'Creed', 'https://d2k6fvhyk5xgx.cloudfront.net/images/creed-millesime-imperial.jpg', 'unisex', 221.39, '58.2%', '50.5%'),
(731, 'Creed Millesime Imperial', 'Creed', 'https://d2k6fvhyk5xgx.cloudfront.net/images/creed-millesime-imperial.jpg', 'men', 209.00, '58.2%', '50.5%'),
(732, 'Creed Neroli Sauvage', 'Creed', 'https://d2k6fvhyk5xgx.cloudfront.net/images/creed-neroli-sauvage.jpg', 'men', 209.00, '52.8%', '50.25%'),
(736, 'Creed Queen Of Silk', 'Creed', 'https://d2k6fvhyk5xgx.cloudfront.net/images/creed-queen-of-silk.jpg', 'men', 209.99, '76.0%', '66.0%'),
(737, 'Creed Royal Mayfair', 'Creed', 'https://d2k6fvhyk5xgx.cloudfront.net/images/creed-royal-mayfair.jpg', 'men', 38.00, '66.6%', '58.0%'),
(738, 'Creed Royal Oud', 'Creed', 'https://d2k6fvhyk5xgx.cloudfront.net/images/creed-royal-oud.jpg', 'men', 199.00, '70.4%', '56.75%'),
(739, 'Creed Royal Princess Oud', 'Creed', 'https://d2k6fvhyk5xgx.cloudfront.net/images/creed-royal-princess-oud.jpg', 'men', 169.00, '68.4%', '60.25%'),
(740, 'Creed Royal Water', 'Creed', 'https://d2k6fvhyk5xgx.cloudfront.net/images/creed-royal-water.jpg', 'men', 209.00, '66.2%', '56.25%'),
(741, 'Creed Silver Mountain Water', 'Creed', 'https://d2k6fvhyk5xgx.cloudfront.net/images/creed-silver-mountain-water.jpg', 'men', 225.00, '61.4%', '53.0%'),
(743, 'Creed Spring Flower', 'Creed', 'https://d2k6fvhyk5xgx.cloudfront.net/images/creed-spring-flower.jpg', 'men', 194.00, '61.0%', '57.0%'),
(744, 'Creed Tabarome', 'Creed', 'https://d2k6fvhyk5xgx.cloudfront.net/images/creed-tabarome.jpg', 'men', 215.00, '63.2%', '55.25%'),
(746, 'Creed Viking', 'Creed', 'https://d2k6fvhyk5xgx.cloudfront.net/images/creed-viking.jpg', 'men', 272.99, '68.0%', '57.25%'),
(747, 'Creed Viking Cologne', 'Creed', 'https://d2k6fvhyk5xgx.cloudfront.net/images/creed-viking-cologne.jpg', 'men', 209.00, '60.4%', '47.5%'),
(749, 'Creed Virgin Island Water', 'Creed', 'https://d2k6fvhyk5xgx.cloudfront.net/images/creed-virgin-island-water.jpg', 'men', 185.00, '61.2%', '52.0%'),
(750, 'Creed Wind Flowers', 'Creed', 'https://d2k6fvhyk5xgx.cloudfront.net/images/creed-wind-flowers.jpg', 'men', 185.00, '64.8%', '54.75%'),
(751, 'Calvin Klein Calvin Klein for women', 'Calvin Klein', 'https://d2k6fvhyk5xgx.cloudfront.net/images/calvin-klein-calvin-klein-for-women.jpg', 'women', 89.00, '67%', '60%'),
(752, 'Calvin Klein Women', 'Calvin Klein', 'https://d2k6fvhyk5xgx.cloudfront.net/images/calvin-klein-women.jpg', 'women', 74.99, '60.2%', '55.25%'),
(753, 'Calvin Klein Defy', 'Calvin Klein', 'https://d2k6fvhyk5xgx.cloudfront.net/images/calvin-klein-defy.jpg', 'men', 54.99, '53.4%', '43.5%'),
(754, 'Calvin Klein Beauty', 'Calvin Klein', 'https://d2k6fvhyk5xgx.cloudfront.net/images/calvin-klein-beauty.jpg', 'women', 39.99, '64.2%', '56.75%'),
(755, 'Encounter Calvin Klein', 'Calvin Klein', 'https://d2k6fvhyk5xgx.cloudfront.net/images/encounter-calvin-klein.jpg', 'men', 65.99, '52.2%', '46.75%'),
(756, 'Calvin Klein Man', 'Calvin Klein', 'https://d2k6fvhyk5xgx.cloudfront.net/images/calvin-klein-man.jpg', 'men', 40.99, '56.4%', '48.5%'),
(757, 'Calvin Klein Variety', 'Calvin Klein', 'https://d2k6fvhyk5xgx.cloudfront.net/images/calvin-klein-variety.jpg', 'women', 48.99, '54.4%', '42.5%'),
(758, 'Reveal Calvin Klein', 'Calvin Klein', 'https://d2k6fvhyk5xgx.cloudfront.net/images/reveal-calvin-klein.jpg', 'women', 70.99, '67.0%', '57.75%'),
(759, 'Calvin Calvin Klein for men', 'Calvin Klein', 'https://d2k6fvhyk5xgx.cloudfront.net/images/calvin-calvin-klein-for-men.jpg', 'men', 89.00, '78%', '68%'),
(760, 'Calvin Klein Sheer Beauty', 'Calvin Klein', 'https://d2k6fvhyk5xgx.cloudfront.net/images/calvin-klein-sheer-beauty.jpg', 'women', 44.99, '50.6%', '46.0%'),
(761, 'Calvin Klein Women Intense', 'Calvin Klein', 'https://d2k6fvhyk5xgx.cloudfront.net/images/calvin-klein-women-intense.jpg', 'women', 3.99, '65.2%', '61.5%'),
(762, 'Calvin Klein Women Eau de Toilette Calvin Klein for women', 'Calvin Klein', 'https://d2k6fvhyk5xgx.cloudfront.net/images/calvin-klein-women-eau-de-toilette-calvin-klein-for-women.jpg', 'women', 30.76, '59%', '55%'),
(763, 'Downtown Calvin Klein for women', 'Calvin Klein', 'https://d2k6fvhyk5xgx.cloudfront.net/images/downtown-calvin-klein-for-women.jpg', 'women', 125.00, '53%', '49%'),
(764, 'Contradiction Calvin Klein for men', 'Calvin Klein', 'https://d2k6fvhyk5xgx.cloudfront.net/images/contradiction-calvin-klein-for-men.jpg', 'men', 49.00, '57%', '54%'),
(765, 'CK1 Palace Calvin Klein unisex', 'Calvin Klein', 'https://d2k6fvhyk5xgx.cloudfront.net/images/ck1-palace-calvin-klein-unisex.jpg', 'unisex', 69.00, '55%', '46%'),
(766, 'Crave Calvin Klein for men', 'Calvin Klein', 'https://d2k6fvhyk5xgx.cloudfront.net/images/crave-calvin-klein-for-men.jpg', 'men', 49.00, '58%', '54%'),
(767, 'Eternity Love Calvin Klein for women', 'Calvin Klein', 'https://d2k6fvhyk5xgx.cloudfront.net/images/eternity-love-calvin-klein-for-women.jpg', 'women', 49.00, '65%', '60%'),
(768, 'Eternity Summer Calvin Klein for women', 'Calvin Klein', 'https://d2k6fvhyk5xgx.cloudfront.net/images/eternity-summer-calvin-klein-for-women.jpg', 'women', 49.00, '55%', '50%'),
(769, 'Obsession Summer Calvin Klein for women', 'Calvin Klein', 'https://d2k6fvhyk5xgx.cloudfront.net/images/obsession-summer-calvin-klein-for-women.jpg', 'women', 49.00, '52%', '58%'),
(770, 'Euphoria Blossom Calvin Klein for women', 'Calvin Klein', 'https://d2k6fvhyk5xgx.cloudfront.net/images/euphoria-blossom-calvin-klein-for-women.jpg', 'women', 49.00, '56%', '51%'),
(771, 'Hermes H24 Herbes Vives', 'Hermes', 'https://d2k6fvhyk5xgx.cloudfront.net/images/hermes-h24-herbes-vives.jpg', 'men', 134.99, '63.2%', '51.25%'),
(772, 'Hermes Barenia', 'Hermes', 'https://d2k6fvhyk5xgx.cloudfront.net/images/hermes-barenia.jpg', 'women', 99.59, '67.0%', '56.75%'),
(773, 'Hermes H24', 'Hermes', 'https://d2k6fvhyk5xgx.cloudfront.net/images/hermes-h24.jpg', 'men', 89.99, '72.8%', '55.5%'),
(774, 'Hermes Variety', 'Hermes', 'https://d2k6fvhyk5xgx.cloudfront.net/images/hermes-variety.jpg', 'unisex', 92.99, '', ''),
(775, 'Hermes Myrrhe Eglantine', 'Hermes', 'https://d2k6fvhyk5xgx.cloudfront.net/images/hermes-myrrhe-eglantine.jpg', 'unisex', 508.99, '62.6%', '59.25%'),
(776, 'Hermes Poivre Samarcande', 'Hermes', 'https://d2k6fvhyk5xgx.cloudfront.net/images/hermes-poivre-samarcande.jpg', 'unisex', 642.99, '59.2%', '53.0%'),
(777, 'Hermes Cedre Sambac', 'Hermes', 'https://d2k6fvhyk5xgx.cloudfront.net/images/hermes-cedre-sambac.jpg', 'unisex', 924.99, '63.2%', '54.75%'),
(778, 'Hermes d\'Orange Vert', 'Hermes', 'https://d2k6fvhyk5xgx.cloudfront.net/images/hermes-dorange-vert.jpg', 'unisex', 114.99, '39.8%', '40.75%'),
(779, 'Rouge Hermes Hermes for women', 'Hermès', 'https://d2k6fvhyk5xgx.cloudfront.net/images/rouge-hermes-hermes-for-women.jpg', 'women', 49.00, '75%', '71%'),
(780, 'Eau de Cologne Hermes Hermes unisex', 'Hermès', 'https://d2k6fvhyk5xgx.cloudfront.net/images/eau-de-cologne-hermes-hermes-unisex.jpg', 'unisex', 59.00, '51%', '48%'),
(781, 'Hermes d\'Orange Vert Concentre', 'Hermes', 'https://d2k6fvhyk5xgx.cloudfront.net/images/hermes-dorange-vert-concentre.jpg', 'unisex', 114.99, '55.0%', '49.0%'),
(782, 'Rouge Hermes Eau Delicate Hermes for women', 'Hermès', 'https://d2k6fvhyk5xgx.cloudfront.net/images/rouge-hermes-eau-delicate-hermes-for-women.jpg', 'women', 55.00, '72%', '68%'),
(783, 'Hermes Eau De Citron Noir', 'Hermes', 'https://d2k6fvhyk5xgx.cloudfront.net/images/hermes-eau-de-citron-noir.jpg', 'unisex', 112.99, '57.8%', '52.25%'),
(784, 'Hermes Eau De Neroli Dore', 'Hermes', 'https://d2k6fvhyk5xgx.cloudfront.net/images/hermes-eau-de-neroli-dore.jpg', 'unisex', 107.99, '44.4%', '48.5%'),
(785, 'Hermes Eau De Pamplemousse Rose', 'Hermes', 'https://d2k6fvhyk5xgx.cloudfront.net/images/hermes-eau-de-pamplemousse-rose.jpg', 'unisex', 99.99, '', ''),
(786, 'Hermes Eau De Basilic Pourpre', 'Hermes', 'https://d2k6fvhyk5xgx.cloudfront.net/images/hermes-eau-de-basilic-pourpre.jpg', 'unisex', 92.99, '46.4%', '37.5%'),
(787, 'Hermes Eau De Rhubarbe Ecarlate', 'Hermes', 'https://d2k6fvhyk5xgx.cloudfront.net/images/hermes-eau-de-rhubarbe-ecarlate.jpg', 'unisex', 129.99, '48.2%', '44.25%'),
(789, 'Paddock Hermes unisex', 'Hermès', 'https://d2k6fvhyk5xgx.cloudfront.net/images/paddock-hermes-unisex.jpg', 'unisex', 849.00, '65%', '56%'),
(790, 'H24 Hermes for men', 'Hermès', 'https://d2k6fvhyk5xgx.cloudfront.net/images/h24-hermes-for-men.jpg', 'men', 130.00, '65%', '51%'),
(791, 'Prada', 'Prada', 'https://d2k6fvhyk5xgx.cloudfront.net/images/prada.jpg', 'men', 176.99, '73.8%', '64.5%'),
(793, 'Prada Tendre Prada for women', 'Prada', 'https://d2k6fvhyk5xgx.cloudfront.net/images/prada-tendre-prada-for-women.jpg', 'women', 49.00, '68%', '64%'),
(794, 'Prada Intense Prada for women', 'Prada', 'https://d2k6fvhyk5xgx.cloudfront.net/images/prada-intense-prada-for-women.jpg', 'women', 49.00, '74%', '68%'),
(795, 'Prada Les Infusion De Prada', 'Prada', 'https://d2k6fvhyk5xgx.cloudfront.net/images/prada-les-infusion-de-prada.jpg', 'women', 203.99, '', ''),
(796, 'Prada Amber', 'Prada', 'https://d2k6fvhyk5xgx.cloudfront.net/images/prada-amber.jpg', 'men', 142.99, '71.4%', '56.5%'),
(797, 'Prada Intense', 'Prada', 'https://d2k6fvhyk5xgx.cloudfront.net/images/prada-intense.jpg', 'men', 15.59, '', ''),
(798, 'Prada Paradoxe', 'Prada', 'https://d2k6fvhyk5xgx.cloudfront.net/images/prada-paradoxe.jpg', 'women', 184.99, '68.2%', '57.5%'),
(799, 'Prada Variety', 'Prada', 'https://d2k6fvhyk5xgx.cloudfront.net/images/prada-variety.jpg', 'women', 90.99, '', ''),
(800, 'Prada L\'Homme', 'Prada', 'https://d2k6fvhyk5xgx.cloudfront.net/images/prada-lhomme.jpg', 'men', 129.99, '68.0%', '52.25%'),
(801, 'Prada Candy', 'Prada', 'https://d2k6fvhyk5xgx.cloudfront.net/images/prada-candy.jpg', 'women', 159.99, '58.2%', '48.5%'),
(806, 'Prada Paradoxe Intense', 'Prada', 'https://d2k6fvhyk5xgx.cloudfront.net/images/prada-paradoxe-intense.jpg', 'women', 159.99, '77.8%', '67.0%'),
(807, 'Prada Luna Rossa', 'Prada', 'https://d2k6fvhyk5xgx.cloudfront.net/images/prada-luna-rossa.jpg', 'men', 134.99, '63.4%', '51.75%'),
(808, 'Prada L\'Homme Intense', 'Prada', 'https://d2k6fvhyk5xgx.cloudfront.net/images/prada-lhomme-intense.jpg', 'men', 154.99, '75.8%', '59.5%'),
(809, 'Prada Candy Kiss', 'Prada', 'https://d2k6fvhyk5xgx.cloudfront.net/images/prada-candy-kiss.jpg', 'women', 110.99, '62.2%', '50.75%'),
(810, 'Prada La Femme', 'Prada', 'https://d2k6fvhyk5xgx.cloudfront.net/images/prada-la-femme.jpg', 'women', 149.99, '62.2%', '57.75%'),
(812, 'Burberry', 'Burberry', 'https://d2k6fvhyk5xgx.cloudfront.net/images/burberry.jpg', 'women', 64.99, '65.8%', '55.5%'),
(814, 'Burberry Summer Burberry for women', 'Burberry', 'https://d2k6fvhyk5xgx.cloudfront.net/images/burberry-summer-burberry-for-women.jpg', 'women', 49.00, '57%', '59%'),
(816, 'Burberry Brit', 'Burberry', 'https://d2k6fvhyk5xgx.cloudfront.net/images/burberry-brit.jpg', 'women', 70.99, '65.6%', '55.25%'),
(817, 'Burberry Her', 'Burberry', 'https://d2k6fvhyk5xgx.cloudfront.net/images/burberry-her.jpg', 'women', 169.99, '64.6%', '55.75%'),
(818, 'Burberry Body', 'Burberry', 'https://d2k6fvhyk5xgx.cloudfront.net/images/burberry-body.jpg', 'women', 2.99, '68.0%', '58.5%'),
(819, 'Burberry London', 'Burberry', 'https://d2k6fvhyk5xgx.cloudfront.net/images/burberry-london.jpg', 'women', 62.99, '70.8%', '62.5%'),
(820, 'Burberry Touch', 'Burberry', 'https://d2k6fvhyk5xgx.cloudfront.net/images/burberry-touch.jpg', 'men', 53.99, '64.0%', '52.75%'),
(821, 'Burberry Hero', 'Burberry', 'https://d2k6fvhyk5xgx.cloudfront.net/images/burberry-hero.jpg', 'men', 144.99, '57.8%', '46.5%'),
(822, 'My Burberry', 'Burberry', 'https://d2k6fvhyk5xgx.cloudfront.net/images/my-burberry.jpg', 'women', 129.99, '70.2%', '61.5%'),
(823, 'Mr Burberry', 'Burberry', 'https://d2k6fvhyk5xgx.cloudfront.net/images/mr-burberry.jpg', 'men', 94.99, '60.6%', '54.5%'),
(824, 'Burberry Goddess', 'Burberry', 'https://d2k6fvhyk5xgx.cloudfront.net/images/burberry-goddess.jpg', 'women', 169.99, '62.6%', '50.75%'),
(825, 'Burberry Variety', 'Burberry', 'https://d2k6fvhyk5xgx.cloudfront.net/images/burberry-variety.jpg', 'women', 71.99, '', ''),
(826, 'Burberry Brit Gold Burberry for women', 'Burberry', 'https://d2k6fvhyk5xgx.cloudfront.net/images/burberry-brit-gold-burberry-for-women.jpg', 'women', 49.00, '77%', '70%'),
(827, 'Burberry Her Intense Burberry for women', 'Burberry', 'https://d2k6fvhyk5xgx.cloudfront.net/images/burberry-her-intense-burberry-for-women.jpg', 'women', 20.00, '70%', '62%'),
(828, 'Burberry Brit Red Burberry for women', 'Burberry', 'https://d2k6fvhyk5xgx.cloudfront.net/images/burberry-brit-red-burberry-for-women.jpg', 'women', 49.00, '69%', '63%'),
(829, 'Burberry Summer Men 2009 Burberry for men', 'Burberry', 'https://d2k6fvhyk5xgx.cloudfront.net/images/burberry-summer-men-2009-burberry-for-men.jpg', 'men', 49.00, '64%', '51%'),
(830, 'Burberry Sport for Men Burberry for men', 'Burberry', 'https://d2k6fvhyk5xgx.cloudfront.net/images/burberry-sport-for-men-burberry-for-men.jpg', 'men', 49.00, '55%', '50%'),
(831, 'Louis Vuitton Imagination', 'Louis Vuitton', 'https://d2k6fvhyk5xgx.cloudfront.net/images/louis-vuitton-imagination.jpg', 'unisex', 9.99, '', ''),
(832, 'Louis Vuitton L\'Immensite', 'Louis Vuitton', 'https://d2k6fvhyk5xgx.cloudfront.net/images/louis-vuitton-limmensite.jpg', 'men', 10.99, '70.8%', '58.75%'),
(834, 'Louis Vuitton Attrapereves', 'Louis Vuitton', 'https://d2k6fvhyk5xgx.cloudfront.net/images/louis-vuitton-attrapereves.jpg', 'unisex', 11.99, '69.8%', '62.25%'),
(835, 'Louis Vuitton Meteore', 'Louis Vuitton', 'https://d2k6fvhyk5xgx.cloudfront.net/images/louis-vuitton-meteore.jpg', 'men', 10.99, '71.6%', '57.25%'),
(836, 'Louis Vuitton Cosmic Cloud', 'Louis Vuitton', 'https://d2k6fvhyk5xgx.cloudfront.net/images/louis-vuitton-cosmic-cloud.jpg', 'unisex', 12.99, '74.0%', '55.5%'),
(838, 'Louis Vuitton Nouveau Monde', 'Louis Vuitton', 'https://d2k6fvhyk5xgx.cloudfront.net/images/louis-vuitton-nouveau-monde.jpg', 'men', 11.99, '', ''),
(839, 'Louis Vuitton Matiere Noire', 'Louis Vuitton', 'https://d2k6fvhyk5xgx.cloudfront.net/images/louis-vuitton-matiere-noire.jpg', 'women', 9.99, '73.0%', '67.25%'),
(840, 'Louis Vuitton Ombre Nomade', 'Louis Vuitton', 'https://d2k6fvhyk5xgx.cloudfront.net/images/louis-vuitton-ombre-nomade.jpg', 'unisex', 9.99, '', ''),
(841, 'Louis Vuitton Heures d\'Absence', 'Louis Vuitton', 'https://d2k6fvhyk5xgx.cloudfront.net/images/louis-vuitton-heures-dabsence.jpg', 'unisex', 9.99, '64.8%', '54.25%'),
(845, 'Louis Vuitton Fleur De Desert', 'Louis Vuitton', 'https://d2k6fvhyk5xgx.cloudfront.net/images/louis-vuitton-fleur-de-desert.jpg', 'unisex', 11.99, '', ''),
(849, 'Louis Vuitton Spell On You', 'Louis Vuitton', 'https://d2k6fvhyk5xgx.cloudfront.net/images/louis-vuitton-spell-on-you.jpg', 'unisex', 11.99, '', ''),
(850, 'Louis Vuitton Rose Des Vents', 'Louis Vuitton', 'https://d2k6fvhyk5xgx.cloudfront.net/images/louis-vuitton-rose-des-vents.jpg', 'women', 11.99, '63.4%', '57.25%'),
(851, 'Saffron Jo Malone London unisex', 'Jo Malone London', 'https://d2k6fvhyk5xgx.cloudfront.net/images/saffron-jo-malone-london-unisex.jpg', 'unisex', 49.00, '51%', '50%'),
(852, 'Vetyver Jo Malone London unisex', 'Jo Malone London', 'https://d2k6fvhyk5xgx.cloudfront.net/images/vetyver-jo-malone-london-unisex.jpg', 'unisex', 49.00, '59%', '56%'),
(856, 'Leather & Artemisia Jo Malone London unisex', 'Jo Malone London', 'https://d2k6fvhyk5xgx.cloudfront.net/images/leather-&-artemisia-jo-malone-london-unisex.jpg', 'unisex', 49.00, '54%', '52%'),
(872, 'Kilian Intoxicated', 'Kilian', 'https://d2k6fvhyk5xgx.cloudfront.net/images/kilian-intoxicated.jpg', 'unisex', 314.99, '75.2%', '66.5%'),
(873, 'Kilian Dark Lord', 'Kilian', 'https://d2k6fvhyk5xgx.cloudfront.net/images/kilian-dark-lord.jpg', 'unisex', 389.99, '81.0%', '70.75%'),
(875, 'Kilian Gold Knight', 'Kilian', 'https://d2k6fvhyk5xgx.cloudfront.net/images/kilian-gold-knight.jpg', 'men', 289.99, '83.4%', '77.0%'),
(876, 'Kilian Bamboo Harmony', 'Kilian', 'https://d2k6fvhyk5xgx.cloudfront.net/images/kilian-bamboo-harmony.jpg', 'unisex', 299.99, '57.6%', '52.5%'),
(877, 'Kilian Smoking Hot', 'Kilian', 'https://d2k6fvhyk5xgx.cloudfront.net/images/kilian-smoking-hot.jpg', 'unisex', 349.99, '72.6%', '58.25%'),
(878, 'Kilian Forbidden Games', 'Kilian', 'https://d2k6fvhyk5xgx.cloudfront.net/images/kilian-forbidden-games.jpg', 'women', 357.99, '63.6%', '60.75%'),
(880, 'Kilian Musk Oud', 'Kilian', 'https://d2k6fvhyk5xgx.cloudfront.net/images/kilian-musk-oud.jpg', 'unisex', 379.99, '87.2%', '79.75%'),
(881, 'Kilian Pearl Oud', 'Kilian', 'https://d2k6fvhyk5xgx.cloudfront.net/images/kilian-pearl-oud.jpg', 'unisex', 364.99, '79.6%', '73.25%'),
(882, 'Kilian Sacred Wood', 'Kilian', 'https://d2k6fvhyk5xgx.cloudfront.net/images/kilian-sacred-wood.jpg', 'unisex', 324.99, '79.2%', '68.75%'),
(883, 'Kilian L\'Heure Verte', 'Kilian', 'https://d2k6fvhyk5xgx.cloudfront.net/images/kilian-lheure-verte.jpg', 'unisex', 304.99, '68.4%', '56.5%'),
(884, 'Kilian Black Phantom', 'Kilian', 'https://d2k6fvhyk5xgx.cloudfront.net/images/kilian-black-phantom.jpg', 'unisex', 309.99, '75.6%', '64.0%'),
(886, 'Kilian Water Calligraphy', 'Kilian', 'https://d2k6fvhyk5xgx.cloudfront.net/images/kilian-water-calligraphy.jpg', 'unisex', 769.99, '60.0%', '58.25%'),
(887, 'Kilian Angels\' Share', 'Kilian', 'https://d2k6fvhyk5xgx.cloudfront.net/images/kilian-angels-share.jpg', 'unisex', 339.99, '75.4%', '63.5%'),
(888, 'Kilian Roses On Ice', 'Kilian', 'https://d2k6fvhyk5xgx.cloudfront.net/images/kilian-roses-on-ice.jpg', 'unisex', 254.99, '62.6%', '52.5%'),
(889, 'Kilian Moonlight In Heaven', 'Kilian', 'https://d2k6fvhyk5xgx.cloudfront.net/images/kilian-moonlight-in-heaven.jpg', 'unisex', 269.99, '61.0%', '54.5%'),
(890, 'Kilian Rolling In Love', 'Kilian', 'https://d2k6fvhyk5xgx.cloudfront.net/images/kilian-rolling-in-love.jpg', 'women', 289.99, '62.0%', '54.75%'),
(891, 'Dolce', 'Dolce & Gabbana', 'https://d2k6fvhyk5xgx.cloudfront.net/images/dolce.jpg', 'women', 82.99, '54.4%', '49.75%'),
(892, 'Dolce & Gabbana', 'Dolce & Gabbana', 'https://d2k6fvhyk5xgx.cloudfront.net/images/dolce-&-gabbana.jpg', 'men', 98.99, '65%', '53%'),
(893, 'Dolce Shine', 'Dolce & Gabbana', 'https://d2k6fvhyk5xgx.cloudfront.net/images/dolce-shine.jpg', 'women', 80.99, '57.8%', '55.0%'),
(894, 'Dolce Lily', 'Dolce & Gabbana', 'https://d2k6fvhyk5xgx.cloudfront.net/images/dolce-lily.jpg', 'women', 99.99, '57.4%', '47.5%'),
(895, 'Dolce Peony', 'Dolce & Gabbana', 'https://d2k6fvhyk5xgx.cloudfront.net/images/dolce-peony.jpg', 'women', 74.99, '51.8%', '52.25%'),
(896, 'Dolce Rose', 'Dolce & Gabbana', 'https://d2k6fvhyk5xgx.cloudfront.net/images/dolce-rose.jpg', 'women', 99.99, '54.8%', '47.0%'),
(897, 'Dolce Violet', 'Dolce & Gabbana', 'https://d2k6fvhyk5xgx.cloudfront.net/images/dolce-violet.jpg', 'women', 90.99, '52.8%', '43.75%'),
(898, 'Dolce Garden', 'Dolce & Gabbana', 'https://d2k6fvhyk5xgx.cloudfront.net/images/dolce-garden.jpg', 'women', 99.99, '65.8%', '58.25%'),
(899, 'Dolce & Gabbana Devotion', 'Dolce & Gabbana', 'https://d2k6fvhyk5xgx.cloudfront.net/images/dolce-&-gabbana-devotion.jpg', 'women', 134.99, '64.8%', '53.75%'),
(901, 'Dolce Rosa Excelsa', 'Dolce & Gabbana', 'https://d2k6fvhyk5xgx.cloudfront.net/images/dolce-rosa-excelsa.jpg', 'women', 91.70, '53.8%', '50.75%'),
(902, 'Dolce & Gabbana K', 'Dolce & Gabbana', 'https://d2k6fvhyk5xgx.cloudfront.net/images/dolce-&-gabbana-k.jpg', 'men', 62.99, '60.2%', '54.75%'),
(903, 'Dolce & Gabbana Intenso', 'Dolce & Gabbana', 'https://d2k6fvhyk5xgx.cloudfront.net/images/dolce-&-gabbana-intenso.jpg', 'men', 91.99, '61.8%', '53.75%'),
(904, 'Dolce & Gabbana Q', 'Dolce & Gabbana', 'https://d2k6fvhyk5xgx.cloudfront.net/images/dolce-&-gabbana-q.jpg', 'women', 99.99, '54.4%', '44.0%'),
(905, 'Dolce Blue Jasmine', 'Dolce & Gabbana', 'https://d2k6fvhyk5xgx.cloudfront.net/images/dolce-blue-jasmine.jpg', 'women', 114.99, '63.2%', '51.75%'),
(906, 'Dolce Floral Drops', 'Dolce & Gabbana', 'https://d2k6fvhyk5xgx.cloudfront.net/images/dolce-floral-drops.jpg', 'women', 151.99, '53.8%', '50.5%'),
(910, 'Dolce & Gabbana Pour Femme', 'Dolce & Gabbana', 'https://d2k6fvhyk5xgx.cloudfront.net/images/dolce-&-gabbana-pour-femme.jpg', 'women', 96.99, '63.4%', '54.75%'),
(911, 'Addict To Life Dior for women', 'Dior', 'https://d2k6fvhyk5xgx.cloudfront.net/images/addict-to-life-dior-for-women.jpg', 'women', 17.99, '63%', '60%'),
(912, 'Aqua Fahrenheit Dior for men', 'Dior', 'https://d2k6fvhyk5xgx.cloudfront.net/images/aqua-fahrenheit-dior-for-men.jpg', 'men', 49.00, '74%', '64%'),
(917, 'Cruise Collection Escale a Parati Dior unisex', 'Dior', 'https://d2k6fvhyk5xgx.cloudfront.net/images/cruise-collection-escale-a-parati-dior-unisex.jpg', 'unisex', 75.00, '60%', '60%'),
(918, 'Cruise Collection Escale a Pondichery Dior for women', 'Dior', 'https://d2k6fvhyk5xgx.cloudfront.net/images/cruise-collection-escale-a-pondichery-dior-for-women.jpg', 'women', 49.00, '62%', '58%'),
(919, 'Dior Addict 2 Dior for women', 'Dior', 'https://d2k6fvhyk5xgx.cloudfront.net/images/dior-addict-2-dior-for-women.jpg', 'women', 49.00, '59%', '56%'),
(921, 'Dior Addict 2 Summer Breeze Dior for women', 'Dior', 'https://d2k6fvhyk5xgx.cloudfront.net/images/dior-addict-2-summer-breeze-dior-for-women.jpg', 'women', 49.00, '60%', '59%'),
(924, 'Dior Addict Eau Sensuelle Dior for women', 'Dior', 'https://d2k6fvhyk5xgx.cloudfront.net/images/dior-addict-eau-sensuelle-dior-for-women.jpg', 'women', 49.00, '62%', '57%'),
(925, 'Dior Addict Eau de Parfum Dior for women', 'Dior', 'https://d2k6fvhyk5xgx.cloudfront.net/images/dior-addict-eau-de-parfum-dior-for-women.jpg', 'women', 50.00, '83%', '74%'),
(934, 'Dior Homme Cologne 2013 Dior for men', 'Dior', 'https://d2k6fvhyk5xgx.cloudfront.net/images/dior-homme-cologne-2013-dior-for-men.jpg', 'men', 4.89, '58%', '49%'),
(937, 'Dior Homme Sport 2012 Dior for men', 'Dior', 'https://d2k6fvhyk5xgx.cloudfront.net/images/dior-homme-sport-2012-dior-for-men.jpg', 'men', 3.49, '65%', '56%'),
(938, 'Dior Homme Sport Dior for men', 'Dior', 'https://d2k6fvhyk5xgx.cloudfront.net/images/dior-homme-sport-dior-for-men.jpg', 'men', 3.49, '66%', '57%'),
(939, 'Dior Homme Voyage Dior for men', 'Dior', 'https://d2k6fvhyk5xgx.cloudfront.net/images/dior-homme-voyage-dior-for-men.jpg', 'men', 49.00, '72%', '64%'),
(943, 'Dior Sauvage Edt', 'Dior', 'https://d2k6fvhyk5xgx.cloudfront.net/images/dior-sauvage-edt.jpg', 'men', 12.00, '72.4%', '64.0%'),
(945, 'Diorella Parfum Dior for women', 'Dior', 'https://d2k6fvhyk5xgx.cloudfront.net/images/diorella-parfum-dior-for-women.jpg', 'women', 49.00, '75%', '66%'),
(946, 'Dioressence Eau Parfumee Dior for women', 'Dior', 'https://d2k6fvhyk5xgx.cloudfront.net/images/dioressence-eau-parfumee-dior-for-women.jpg', 'women', 49.00, '76%', '60%'),
(947, 'Diorever Dior for women', 'Dior', 'https://d2k6fvhyk5xgx.cloudfront.net/images/diorever-dior-for-women.jpg', 'women', 49.00, '60%', '71%'),
(948, 'Diorling Dior for women', 'Dior', 'https://d2k6fvhyk5xgx.cloudfront.net/images/diorling-dior-for-women.jpg', 'women', 156.34, '70%', '64%'),
(949, 'Eau Sauvage Extreme 2010 Dior for men', 'Dior', 'https://d2k6fvhyk5xgx.cloudfront.net/images/eau-sauvage-extreme-2010-dior-for-men.jpg', 'men', 120.68, '69%', '56%'),
(950, 'Eau de Cologne Fraiche Dior unisex', 'Dior', 'https://d2k6fvhyk5xgx.cloudfront.net/images/eau-de-cologne-fraiche-dior-unisex.jpg', 'unisex', 30.00, '64%', '49%'),
(952, 'Fahrenheit 0 Degree Dior for men', 'Dior', 'https://d2k6fvhyk5xgx.cloudfront.net/images/fahrenheit-0-degree-dior-for-men.jpg', 'men', 49.00, '63%', '62%'),
(953, 'Fahrenheit 32 Dior for men', 'Dior', 'https://d2k6fvhyk5xgx.cloudfront.net/images/fahrenheit-32-dior-for-men.jpg', 'men', 49.00, '75%', '66%'),
(954, 'Fahrenheit Absolute Dior for men', 'Dior', 'https://d2k6fvhyk5xgx.cloudfront.net/images/fahrenheit-absolute-dior-for-men.jpg', 'men', 49.00, '74%', '65%'),
(955, 'Fahrenheit Le Parfum Dior for men', 'Dior', 'https://d2k6fvhyk5xgx.cloudfront.net/images/fahrenheit-le-parfum-dior-for-men.jpg', 'men', 59.00, '79%', '69%'),
(956, 'Fahrenheit Summer Dior for men', 'Dior', 'https://d2k6fvhyk5xgx.cloudfront.net/images/fahrenheit-summer-dior-for-men.jpg', 'men', 49.00, '67%', '66%'),
(957, 'Forever and Ever Dior for women', 'Dior', 'https://d2k6fvhyk5xgx.cloudfront.net/images/forever-and-ever-dior-for-women.jpg', 'women', 672.00, '61%', '61%'),
(958, 'Jadore Infinissime Intense', 'Dior', 'https://d2k6fvhyk5xgx.cloudfront.net/images/jadore-infinissime-intense.jpg', 'women', 209.99, '', ''),
(959, 'Lily Dior for women', 'Dior', 'https://d2k6fvhyk5xgx.cloudfront.net/images/lily-dior-for-women.jpg', 'women', 49.00, '68%', '66%'),
(964, 'Tom Ford Metallique', 'Tom Ford', 'https://d2k6fvhyk5xgx.cloudfront.net/images/tom-ford-metallique.jpg', 'women', 279.99, '64.6%', '58.5%'),
(965, 'Tom Ford Noir', 'Tom Ford', 'https://d2k6fvhyk5xgx.cloudfront.net/images/tom-ford-noir.jpg', 'men', 224.99, '70.8%', '59.5%'),
(966, 'Tom Ford Tobacco Vanille', 'Tom Ford', 'https://d2k6fvhyk5xgx.cloudfront.net/images/tom-ford-tobacco-vanille.jpg', 'unisex', 369.99, '81.6%', '70.75%'),
(967, 'Tom Ford Jasmin Rouge', 'Tom Ford', 'https://d2k6fvhyk5xgx.cloudfront.net/images/tom-ford-jasmin-rouge.jpg', 'women', 319.99, '67.2%', '61.75%'),
(968, 'Tom Ford Rose Prick', 'Tom Ford', 'https://d2k6fvhyk5xgx.cloudfront.net/images/tom-ford-rose-prick.jpg', 'women', 304.99, '69.4%', '61.25%'),
(969, 'Tom Ford Ombre Leather', 'Tom Ford', 'https://d2k6fvhyk5xgx.cloudfront.net/images/tom-ford-ombre-leather.jpg', 'unisex', 254.99, '77.2%', '63.75%'),
(970, 'Tom Ford Santal Blush', 'Tom Ford', 'https://d2k6fvhyk5xgx.cloudfront.net/images/tom-ford-santal-blush.jpg', 'women', 327.99, '69.0%', '59.5%'),
(971, 'Tom Ford Neroli Portofino', 'Tom Ford', 'https://d2k6fvhyk5xgx.cloudfront.net/images/tom-ford-neroli-portofino.jpg', 'unisex', 399.99, '55.8%', '50.25%'),
(972, 'Tom Ford Lost Cherry', 'Tom Ford', 'https://d2k6fvhyk5xgx.cloudfront.net/images/tom-ford-lost-cherry.jpg', 'unisex', 409.99, '62.6%', '56.0%'),
(973, 'Tom Ford Ebene Fume', 'Tom Ford', 'https://d2k6fvhyk5xgx.cloudfront.net/images/tom-ford-ebene-fume.jpg', 'unisex', 320.99, '73.0%', '56.75%'),
(974, 'Tom Ford Grey Vetiver', 'Tom Ford', 'https://d2k6fvhyk5xgx.cloudfront.net/images/tom-ford-grey-vetiver.jpg', 'men', 221.99, '68.6%', '55.25%'),
(975, 'Tom Ford Soleil Blanc', 'Tom Ford', 'https://d2k6fvhyk5xgx.cloudfront.net/images/tom-ford-soleil-blanc.jpg', 'unisex', 289.99, '61.2%', '54.0%'),
(976, 'Tom Ford Myrrhe Mystere', 'Tom Ford', 'https://d2k6fvhyk5xgx.cloudfront.net/images/tom-ford-myrrhe-mystere.jpg', 'unisex', 389.99, '66.6%', '54.25%'),
(977, 'Tom Ford Tubereuse Nue', 'Tom Ford', 'https://d2k6fvhyk5xgx.cloudfront.net/images/tom-ford-tubereuse-nue.jpg', 'unisex', 369.99, '73.4%', '64.25%'),
(978, 'Tom Ford Velvet Orchid', 'Tom Ford', 'https://d2k6fvhyk5xgx.cloudfront.net/images/tom-ford-velvet-orchid.jpg', 'women', 239.99, '72.4%', '65.5%'),
(979, 'Tom Ford Oud Minerale', 'Tom Ford', 'https://d2k6fvhyk5xgx.cloudfront.net/images/tom-ford-oud-minerale.jpg', 'unisex', 189.99, '74.0%', '58.0%'),
(980, 'Tom Ford Costa Azzurra', 'Tom Ford', 'https://d2k6fvhyk5xgx.cloudfront.net/images/tom-ford-costa-azzurra.jpg', 'unisex', 179.99, '61.2%', '49.75%'),
(981, 'Maison Francis Kurkdjian Limited Crystal Edition Fragrances Maison Francis Kurkdjian unisex', 'Maison Francis Kurkdjian', 'https://d2k6fvhyk5xgx.cloudfront.net/images/maison-francis-kurkdjian-limited-crystal-edition-fragrances-maison-francis-kurkdjian-unisex.jpg', 'unisex', 49.00, '68%', '69%'),
(982, 'Coloratura Maison Francis Kurkdjian unisex', 'Maison Francis Kurkdjian', 'https://d2k6fvhyk5xgx.cloudfront.net/images/coloratura-maison-francis-kurkdjian-unisex.jpg', 'unisex', 49.00, '64%', '75%'),
(988, 'Oud Cashmere Mood Maison Francis Kurkdjian unisex', 'Maison Francis Kurkdjian', 'https://d2k6fvhyk5xgx.cloudfront.net/images/oud-cashmere-mood-maison-francis-kurkdjian-unisex.jpg', 'unisex', 49.00, '83%', '75%'),
(991, 'Oud Velvet Mood Maison Francis Kurkdjian unisex', 'Maison Francis Kurkdjian', 'https://d2k6fvhyk5xgx.cloudfront.net/images/oud-velvet-mood-maison-francis-kurkdjian-unisex.jpg', 'unisex', 49.00, '80%', '70%'),
(992, 'Maison Francis Kurkdjian 724', 'Maison Francis', 'https://d2k6fvhyk5xgx.cloudfront.net/images/maison-francis-kurkdjian-724.jpg', 'unisex', 359.99, '60.2%', '48.25%'),
(993, 'Maison Francis Kurkdjian Variety', 'Maison Francis', 'https://d2k6fvhyk5xgx.cloudfront.net/images/maison-francis-kurkdjian-variety.jpg', 'men', 400.99, '', ''),
(994, 'Maison Francis Kurkdjian Oud', 'Maison Francis', 'https://d2k6fvhyk5xgx.cloudfront.net/images/maison-francis-kurkdjian-oud.jpg', 'unisex', 406.99, '73.2%', '61.0%'),
(995, 'Cologne Pour Le Soir Maison Francis Kurkdjian unisex', 'Maison Francis Kurkdjian', 'https://d2k6fvhyk5xgx.cloudfront.net/images/cologne-pour-le-soir-maison-francis-kurkdjian-unisex.jpg', 'unisex', 49.00, '62%', '56%'),
(996, 'Absolue Pour le Soir Maison Francis Kurkdjian unisex', 'Maison Francis Kurkdjian', 'https://d2k6fvhyk5xgx.cloudfront.net/images/absolue-pour-le-soir-maison-francis-kurkdjian-unisex.jpg', 'unisex', 49.00, '83%', '72%'),
(998, 'APOM Pour Femme Maison Francis Kurkdjian for women', 'Maison Francis Kurkdjian', 'https://d2k6fvhyk5xgx.cloudfront.net/images/apom-pour-femme-maison-francis-kurkdjian-for-women.jpg', 'women', 49.00, '74%', '67%'),
(999, 'Absolue Pour le Matin Maison Francis Kurkdjian unisex', 'Maison Francis Kurkdjian', 'https://d2k6fvhyk5xgx.cloudfront.net/images/absolue-pour-le-matin-maison-francis-kurkdjian-unisex.jpg', 'unisex', 49.00, '68%', '64%'),
(1001, 'Armani Giorgio Armani for women', 'Giorgio Armani', 'https://d2k6fvhyk5xgx.cloudfront.net/images/armani-giorgio-armani-for-women.jpg', 'women', 75.00, '79%', '72%'),
(1002, 'Armani Si', 'Giorgio Armani', 'https://d2k6fvhyk5xgx.cloudfront.net/images/armani-si.jpg', 'women', 139.99, '70.0%', '61.25%'),
(1003, 'Armani New', 'Giorgio Armani', 'https://d2k6fvhyk5xgx.cloudfront.net/images/armani-new.jpg', 'men', 177.99, '62.4%', '58.75%'),
(1004, 'Armani Mania', 'Giorgio Armani', 'https://d2k6fvhyk5xgx.cloudfront.net/images/armani-mania.jpg', 'women', 28.99, '74.2%', '66.75%'),
(1005, 'Emporio Armani', 'Giorgio Armani', 'https://d2k6fvhyk5xgx.cloudfront.net/images/emporio-armani.jpg', 'women', 104.99, '58.2%', '48.0%'),
(1006, 'Armani Code', 'Giorgio Armani', 'https://d2k6fvhyk5xgx.cloudfront.net/images/armani-code.jpg', 'men', 13.79, '63.6%', '53.75%'),
(1007, 'Armani Attitude Giorgio Armani for men', 'Giorgio Armani', 'https://d2k6fvhyk5xgx.cloudfront.net/images/armani-attitude-giorgio-armani-for-men.jpg', 'men', 49.00, '65%', '57%'),
(1008, 'Armani Prive Laque Giorgio Armani unisex', 'Giorgio Armani', 'https://d2k6fvhyk5xgx.cloudfront.net/images/armani-prive-laque-giorgio-armani-unisex.jpg', 'unisex', 99.00, '64%', '62%'),
(1009, 'Armani Mania Giorgio Armani for men', 'Giorgio Armani', 'https://d2k6fvhyk5xgx.cloudfront.net/images/armani-mania-giorgio-armani-for-men.jpg', 'men', 59.00, '62%', '52%'),
(1010, 'Armani Code Ice Giorgio Armani for men', 'Giorgio Armani', 'https://d2k6fvhyk5xgx.cloudfront.net/images/armani-code-ice-giorgio-armani-for-men.jpg', 'men', 3.99, '71%', '60%'),
(1011, 'Emporio Armani Night Giorgio Armani for men', 'Giorgio Armani', 'https://d2k6fvhyk5xgx.cloudfront.net/images/emporio-armani-night-giorgio-armani-for-men.jpg', 'men', 520.00, '68%', '58%'),
(1012, 'Armani Code Parfum Giorgio Armani for men', 'Giorgio Armani', 'https://d2k6fvhyk5xgx.cloudfront.net/images/armani-code-parfum-giorgio-armani-for-men.jpg', 'men', 49.00, '71%', '54%'),
(1013, 'Armani Prive Charm\' Giorgio Armani for women', 'Giorgio Armani', 'https://d2k6fvhyk5xgx.cloudfront.net/images/armani-prive-charm-giorgio-armani-for-women.jpg', 'women', 75.00, '58%', '72%'),
(1014, 'Armani Code Luna Giorgio Armani for women', 'Giorgio Armani', 'https://d2k6fvhyk5xgx.cloudfront.net/images/armani-code-luna-giorgio-armani-for-women.jpg', 'women', 49.00, '63%', '60%'),
(1015, 'Armani Code Sheer Giorgio Armani for women', 'Giorgio Armani', 'https://d2k6fvhyk5xgx.cloudfront.net/images/armani-code-sheer-giorgio-armani-for-women.jpg', 'women', 49.00, '61%', '62%'),
(1017, 'Armani Code Sport Giorgio Armani for men', 'Giorgio Armani', 'https://d2k6fvhyk5xgx.cloudfront.net/images/armani-code-sport-giorgio-armani-for-men.jpg', 'men', 59.00, '69%', '60%'),
(1019, 'Armani Code Satin Giorgio Armani for women', 'Giorgio Armani', 'https://d2k6fvhyk5xgx.cloudfront.net/images/armani-code-satin-giorgio-armani-for-women.jpg', 'women', 49.00, '71%', '64%'),
(1020, 'Emporio Armani She Giorgio Armani for women', 'Giorgio Armani', 'https://d2k6fvhyk5xgx.cloudfront.net/images/emporio-armani-she-giorgio-armani-for-women.jpg', 'women', 49.00, '63%', '52%'),
(1021, 'Fougère Fragrance', 'Tommy Hilfiger', 'https://m.media-amazon.com/images/I/51RDI9J+LNL._AC_UL480_QL65_.jpg', 'unisex', 27.00, '6', 'Moderate');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fragrances`
--
ALTER TABLE `fragrances`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fragrances`
--
ALTER TABLE `fragrances`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1022;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- MySQL dump 10.13  Distrib 5.7.9, for osx10.9 (x86_64)
--
-- Host: 127.0.0.1    Database: lamp_group_project
-- ------------------------------------------------------
-- Server version	5.5.42

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `addresses`
--

DROP TABLE IF EXISTS `addresses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `addresses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `street_number_name` varchar(45) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `state` varchar(45) DEFAULT NULL,
  `zip_code` varchar(45) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `addresses`
--

LOCK TABLES `addresses` WRITE;
/*!40000 ALTER TABLE `addresses` DISABLE KEYS */;
/*!40000 ALTER TABLE `addresses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'coolguy@coolguy.com','5f4dcc3b5aa765d61d8327deb882cf99');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `quantity` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `user_id` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cart`
--

LOCK TABLES `cart` WRITE;
/*!40000 ALTER TABLE `cart` DISABLE KEYS */;
/*!40000 ALTER TABLE `cart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cart_id` int(11) DEFAULT NULL,
  `user_id` varchar(45) DEFAULT NULL,
  `address_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `method` varchar(45) DEFAULT NULL,
  `user_id` varchar(45) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `total` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payment`
--

LOCK TABLES `payment` WRITE;
/*!40000 ALTER TABLE `payment` DISABLE KEYS */;
/*!40000 ALTER TABLE `payment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_cart`
--

DROP TABLE IF EXISTS `product_cart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `cart_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_cart`
--

LOCK TABLES `product_cart` WRITE;
/*!40000 ALTER TABLE `product_cart` DISABLE KEYS */;
/*!40000 ALTER TABLE `product_cart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `gender` varchar(45) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  `color` varchar(45) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `front_image_filename` varchar(45) DEFAULT NULL,
  `back_image_filename` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'UO Galaxy Pocket Tee','men','Standard-fit crew-neck construction finished with patch pocket at the front.',20,'shirt','black','2016-03-30 16:06:54','2016-03-30 16:06:54','T1F.jpeg','T1B.jpeg'),(2,'Feathers Rolled Cap Sleeve Tee','men','Lightly textured standard-fit cap-sleeve tee shirt with rolled cuffs from Feathers. Streaky soft knit cotton blend construction features a banded crew neck finished with a patch pocket at the left chest. ',34,'shirt','brown','2016-03-30 16:07:40','2016-03-30 16:07:40','T2F.jpeg','T2B.jpeg'),(3,'CPO Boxy Tee','men','The go-to boxy-fit t-shirt from CPO with a clean, raised neckline. This heavyweight tee has longer sleeves, a thick hem and tonal herringbone neck tape at the collar. Get it only at Urban Outfitters.',24,'shirt','black','2016-03-30 16:08:39','2016-03-30 16:08:39','T3F.jpeg','T3B.jpeg'),(4,'Feathers Long + Loose Ringer Scoop Neck Tee','men','Soft knit cotton blend construction cut long features a contrast banded scoop neck and sleeve cuffs finished with a curved hemline and a drop-tail. Feathers believes in comfort, style and confidence. Influenced by today, they evolve items for tomorrow.',28,'shirt','grey','2016-03-30 16:11:04','2016-03-30 16:11:04','T4F.jpeg','T4B.jpeg'),(5,'OBEY Heath Pocket Tee','men','Fair Trade Certified t-shirt from OBEY. Cotton construction in a regular fit features a modern allover print and chest patch pocket finished with an OBEY label at the pocket seam.',42,'shirt','white','2016-03-30 16:12:14','2016-03-30 16:12:14','T5F.jpeg','T5B.jpeg'),(6,'Truly Madly Deeply Tie-Dye Marnie Tee','women','Made to be lived in tie-dye t-shirt from Truly Madly Deeply in a soft-washed pigment-dyed Modal knit for a vintage vibe that will evolve, adding character to the garment, over time. Complete with added stretch, a banded crew-neck + short sleeves.',34,'shirt','black','2016-03-30 16:14:57','2016-03-30 16:14:57','WT1a.jpeg','WT1b.jpeg'),(7,'Truly Madly Deeply Robin Scoop Tee','women','Upgrade your basics with this fitted scoop-neck t-shirt from Truly Madly Deeply featuring added stretch + short-sleeves. UO exclusive.',29,'shirt','white','2016-03-30 16:15:45','2016-03-30 16:15:45','WT2a.jpeg','WT2b.jpeg'),(8,'Project Social T Renee Henley Tee','women','Kick it in this washed-dye 3/4-length sleeve Henley tee from Project Social T. In a slim fit with a deep V-neck dotted with metal buttons. Finished with contrast stitching and added stretch.',34,'shirt','white','2016-03-30 16:16:47','2016-03-30 16:16:47','WT3a.jpeg','WT3b.jpeg'),(9,'Grateful Dead Tie-Dye Bear Tee','women','Your fave new Grateful Dead tee is tie-dyed + swirled with dancing rainbow bears. In a relaxed fit with a banded crew-neck + short-sleeves.',39,'shirt','white','2016-03-30 16:18:27','2016-03-30 16:18:27','WT4a.jpeg','WT4b.jpeg'),(10,'Truly Madly Deeply Liv Henley Tee','women','Drapey cap-sleeve Henley tee exclusively for UO by Truly Madly Deeply. In super soft, smooth Modal with a button-front chest, dipped tail hem and unfinished edges for a vintage vibe.',34,'shirt','green','2016-03-30 16:19:33','2016-03-30 16:19:33','WT5a.jpeg','WT5b.jpeg'),(11,'Without Walls Fabric Blocked Anorak Jacket','men','Pullover hooded construction with a half-zip + button closure features a large front zip pouch pocket and hand warmer pockets',99,'hoodie','green','2016-03-30 16:47:37','2016-03-30 16:47:37','MH1a.jpeg','MH1b.jpeg'),(12,'Alpha Industries MA-1 Skymaster Bomber Jacket','men','Modern update to the classic MA-1 flight jacket from Alpha Industries. Lightweight + durable nylon construction with water-resistant shell is perfect for transitional weather',149,'hoodie','green','2016-03-30 16:50:55','2016-03-30 16:50:55','MH2a.jpeg','MH2b.jpeg'),(13,'Rothco Security Coaches Jacket','men','Authentic security coaches jacket from Rothco, perfect for layering. Durable nylon construction cut in a boxy fit features a pointed collar, snap front closure, adjustable drawstring hem and two front hand warmer pockets.',59,'hoodie','black','2016-03-30 16:52:48','2016-03-30 16:52:48','MH3a.jpeg','MH3b.jpeg'),(14,'OBEY Bunker Suede Bomber Jacket','men','Slim-fit bomber jacket in a rich suede construction from OBEY. Features a rib-knit collar, cuffs and hem for a comfortable fit, plus a zip welt pocket at the chest and two side slit pockets at the front.',215,'hoodie','brown','2016-03-30 16:53:57','2016-03-30 16:53:57','MH4a.jpeg','MH4b.jpeg'),(15,'Chums Mountain Anorak Jacket','men','Essential pullover anorak from Chums. Durable + water-resistant nylon construction features a three button snap closure and foldaway hood.',130,'hoodie','red','2016-03-30 16:54:40','2016-03-30 16:54:40','MH5a.jpeg','MH5b.jpeg'),(16,'Project Social T So Fluffy Hoodie Sweatshirt','women','Unbelievably soft + cozy fleece sweatshirt from Project Social T in a relaxed fit with a spacious hood, ribbed cuffs and jersey lining.',49,'hoodie','grey','2016-03-30 16:56:26','2016-03-30 16:56:26','WH1A.png','WH1B.png'),(17,'Project Social T Ava Overlap Hoodie Sweatshir','women','Better-than-basic hoodie sweatshirt with a ruched cross-front neckline, by Project Social T. Lined with soft, fluffy fleece so you’ll never wanna take it off.',59,'hoodie','grey','2016-03-30 16:58:16','2016-03-30 16:58:16','WH2A.png','WH2B.png'),(21,'Ben Davis Pocket Tee','men','Regular-fit t-shirt from Ben Davis. Cotton blend construction features a front pocket with a logo label sewn at the top finished with a banded crew-neck.',24,'shirt','white','2016-03-30 19:07:56','2016-03-30 19:07:56','T6F.jpeg','T6B.jpeg'),(22,'CPO Rush Printed Band Collar Shirt','men','Floral print short-sleeve shirt from CPO featuring a unique band collar.',49,'shirt','blue','2016-03-30 19:09:31','2016-03-30 19:09:31','T7F.jpeg','T7B.jpeg'),(23,'The Narrows Destroyed Center Seam Tee','men','The Narrows reinvents the t-shirt with a raw edge center seam, pieced construction and stretched holes at the hem.',38,'shirt','tan','2016-03-30 19:10:47','2016-03-30 19:10:47','T8F.jpeg','T8B.jpeg'),(24,'adidas Modern Street Kangaroo Pocket Tee','men','Relaxed-fit kangaroo pocket t-shirt from adidas.',55,'shirt','gray','2016-03-30 19:11:53','2016-03-30 19:11:53','T9F.jpeg','T9B.jpeg'),(25,'Calvin Klein Re-Issue Denim Trucker Jacket','men','Essential slim-fit denim jacket from the iconic brand Calvin Klein.',99,'hoodie','blue','2016-03-30 19:16:28','2016-03-30 19:16:28','MH6a.jpeg','MH6b.jpeg'),(26,'Patagonia Classic Retro-X Jacket','men','Stay warm in this classic fleece jacket from the outdoor pros at Patagonia.',229,'hoodie','black','2016-03-30 19:19:31','2016-03-30 19:19:31','MH7a.jpeg','MH7b.jpeg'),(27,'adidas Sport Luxe Track Jacket','men','Regular-fit track jacket from the adidas Sport Luxe collection Cotton construction',69,'hoodie','black','2016-03-30 19:57:32','2016-03-30 19:57:32','MH8a.jpeg','MH8b.jpeg'),(28,'Newline Imotion Stormy Sky Jacket','men','Ultra lightweight jacket from Newline, the Danish running brand.',110,'hoodie','green','2016-03-30 19:58:41','2016-03-30 19:58:41','MH9a.jpeg','MH9b.jpeg'),(29,'Truly Madly Deeply Myles Thermal Top','women','Made-to-be-lived-in thermal top from Truly Madly Deeply.',29,'shirt','gray','2016-03-30 20:08:39','2016-03-30 20:08:39','WT6a.jpeg','WT6b.jpeg'),(30,'Junk Food The Who Tour Tee','women','Rock out in this super soft The Who tee shirt from Junk Food.',45,'shirt','gray','2016-03-30 20:09:55','2016-03-30 20:09:55','WT7a.jpeg','WT7b.jpeg'),(31,'The Strokes Boyfriend Tee','women','Your boyfriend\'s favorite tee shirt made to be lived in by you.',39,'shirt','gray','2016-03-30 20:10:51','2016-03-30 20:10:51','WT8a.jpeg','WT8b.jpeg'),(32,'Silence + Noise Thea Top','women','Elevate your tee game with this asymmetrical drape-front top from Silence + Noise.',39,'shirt','gray','2016-03-30 20:11:48','2016-03-30 20:11:48','WT9a.jpeg','WT9b.jpeg'),(38,'Calvin Klein For UO Cropped Hoodie Sweatshirt','women','Don\'t let anything get between you and this perfect cropped hoodie sweatshirt from designed just for UO by Calvin Klein.',79,'hoodie','white','2016-03-30 20:29:54','2016-03-30 20:29:54','WH6A.jpeg','WH6B.jpeg'),(39,'adidas Originals Helsinki Crew-Neck Sweatshir','women','An adidas Originals pullover sweatshirt fit for a weekend in Helinski with minimal colorblocking + extra-cuddly fleece lining.',70,'hoodie','blue','2016-03-30 20:33:16','2016-03-30 20:33:16','WH7A.jpeg','WH7B.jpeg'),(40,'Sub Urban Riot Kale Pullover Sweatshirt','women','Our favorite KALE tee gets a cozy makeover in fleece-lined heathered cotton by Sub Urban Riot.',59,'hoodie','gray','2016-03-30 20:34:27','2016-03-30 20:34:27','WH8A.jpeg','WH8B.jpeg'),(43,'Silence + Noise Bleeker Drapey Cardigan','women','Better-than-basic waterfall cardigan from Silence + Noise in seriously soft + cozy brushed knit fabric.',59,'hoodie','blue','2016-03-30 20:37:04','2016-03-30 20:37:04','WH9A2.jpeg','WH9B.jpeg'),(49,'adidas Originals Double Logo Crew-Neck Sweats','women','The sweatshirt so classic + so cool you can wear it to the club, by adidas Originals.',59,'hoodie','gray','2016-03-31 17:49:03','2016-03-31 17:49:03','WH3A.jpeg','WH3B.jpeg'),(52,'adidas Originals Leaf Camo Hoodie Sweatshirt','women','Breathable hoodie from adidas Originals in an all-over camo leaf print.',75,'hoodie','blue','2016-03-31 17:51:07','2016-03-31 17:51:07','WH4A.jpeg','WH4B.jpeg'),(53,'BDG Streaky Raglan Unisex Sweatshirt','women','In a soft spacedyed knit, this oversized crewneck sweatshirt is our new favorite.',39,'hoodie','gray','2016-03-31 17:52:29','2016-03-31 17:52:29','WH5A.jpeg','WH5B.jpeg');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products_stock`
--

DROP TABLE IF EXISTS `products_stock`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products_stock` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `size` varchar(45) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=266 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products_stock`
--

LOCK TABLES `products_stock` WRITE;
/*!40000 ALTER TABLE `products_stock` DISABLE KEYS */;
INSERT INTO `products_stock` VALUES (1,1,'xs',20,'2016-03-30 16:06:55','2016-03-30 16:06:55'),(2,1,'s',20,'2016-03-30 16:06:55','2016-03-30 16:06:55'),(3,1,'m',20,'2016-03-30 16:06:55','2016-03-30 16:06:55'),(4,1,'l',20,'2016-03-30 16:06:55','2016-03-30 16:06:55'),(5,1,'xl',20,'2016-03-30 16:06:55','2016-03-30 16:06:55'),(6,2,'xs',20,'2016-03-30 16:07:40','2016-03-30 16:07:40'),(7,2,'s',20,'2016-03-30 16:07:40','2016-03-30 16:07:40'),(8,2,'m',20,'2016-03-30 16:07:40','2016-03-30 16:07:40'),(9,2,'l',20,'2016-03-30 16:07:40','2016-03-30 16:07:40'),(10,2,'xl',20,'2016-03-30 16:07:40','2016-03-30 16:07:40'),(11,3,'xs',20,'2016-03-30 16:08:39','2016-03-30 16:08:39'),(12,3,'s',20,'2016-03-30 16:08:39','2016-03-30 16:08:39'),(13,3,'m',20,'2016-03-30 16:08:39','2016-03-30 16:08:39'),(14,3,'l',20,'2016-03-30 16:08:39','2016-03-30 16:08:39'),(15,3,'xl',20,'2016-03-30 16:08:39','2016-03-30 16:08:39'),(16,4,'xs',20,'2016-03-30 16:11:04','2016-03-30 16:11:04'),(17,4,'s',20,'2016-03-30 16:11:04','2016-03-30 16:11:04'),(18,4,'m',20,'2016-03-30 16:11:04','2016-03-30 16:11:04'),(19,4,'l',20,'2016-03-30 16:11:04','2016-03-30 16:11:04'),(20,4,'xl',20,'2016-03-30 16:11:04','2016-03-30 16:11:04'),(21,5,'xs',20,'2016-03-30 16:12:14','2016-03-30 16:12:14'),(22,5,'s',20,'2016-03-30 16:12:14','2016-03-30 16:12:14'),(23,5,'m',20,'2016-03-30 16:12:14','2016-03-30 16:12:14'),(24,5,'l',20,'2016-03-30 16:12:14','2016-03-30 16:12:14'),(25,5,'xl',20,'2016-03-30 16:12:14','2016-03-30 16:12:14'),(26,6,'xs',15,'2016-03-30 16:14:57','2016-03-30 16:14:57'),(27,6,'s',15,'2016-03-30 16:14:57','2016-03-30 16:14:57'),(28,6,'m',15,'2016-03-30 16:14:57','2016-03-30 16:14:57'),(29,6,'l',15,'2016-03-30 16:14:57','2016-03-30 16:14:57'),(30,6,'xl',15,'2016-03-30 16:14:57','2016-03-30 16:14:57'),(31,7,'xs',15,'2016-03-30 16:15:45','2016-03-30 16:15:45'),(32,7,'s',15,'2016-03-30 16:15:45','2016-03-30 16:15:45'),(33,7,'m',15,'2016-03-30 16:15:45','2016-03-30 16:15:45'),(34,7,'l',15,'2016-03-30 16:15:45','2016-03-30 16:15:45'),(35,7,'xl',15,'2016-03-30 16:15:45','2016-03-30 16:15:45'),(36,8,'xs',15,'2016-03-30 16:16:47','2016-03-30 16:16:47'),(37,8,'s',15,'2016-03-30 16:16:47','2016-03-30 16:16:47'),(38,8,'m',15,'2016-03-30 16:16:47','2016-03-30 16:16:47'),(39,8,'l',15,'2016-03-30 16:16:47','2016-03-30 16:16:47'),(40,8,'xl',15,'2016-03-30 16:16:47','2016-03-30 16:16:47'),(41,9,'xs',15,'2016-03-30 16:18:27','2016-03-30 16:18:27'),(42,9,'s',15,'2016-03-30 16:18:27','2016-03-30 16:18:27'),(43,9,'m',15,'2016-03-30 16:18:27','2016-03-30 16:18:27'),(44,9,'l',15,'2016-03-30 16:18:27','2016-03-30 16:18:27'),(45,9,'xl',15,'2016-03-30 16:18:27','2016-03-30 16:18:27'),(46,10,'xs',15,'2016-03-30 16:19:33','2016-03-30 16:19:33'),(47,10,'s',15,'2016-03-30 16:19:33','2016-03-30 16:19:33'),(48,10,'m',15,'2016-03-30 16:19:33','2016-03-30 16:19:33'),(49,10,'l',15,'2016-03-30 16:19:33','2016-03-30 16:19:33'),(50,10,'xl',15,'2016-03-30 16:19:33','2016-03-30 16:19:33'),(51,11,'xs',10,'2016-03-30 16:47:37','2016-03-30 16:47:37'),(52,11,'s',10,'2016-03-30 16:47:37','2016-03-30 16:47:37'),(53,11,'m',10,'2016-03-30 16:47:37','2016-03-30 16:47:37'),(54,11,'l',10,'2016-03-30 16:47:37','2016-03-30 16:47:37'),(55,11,'xl',10,'2016-03-30 16:47:37','2016-03-30 16:47:37'),(56,12,'xs',10,'2016-03-30 16:50:55','2016-03-30 16:50:55'),(57,12,'s',10,'2016-03-30 16:50:55','2016-03-30 16:50:55'),(58,12,'m',10,'2016-03-30 16:50:55','2016-03-30 16:50:55'),(59,12,'l',10,'2016-03-30 16:50:55','2016-03-30 16:50:55'),(60,12,'xl',10,'2016-03-30 16:50:55','2016-03-30 16:50:55'),(61,13,'xs',10,'2016-03-30 16:52:48','2016-03-30 16:52:48'),(62,13,'s',10,'2016-03-30 16:52:48','2016-03-30 16:52:48'),(63,13,'m',10,'2016-03-30 16:52:48','2016-03-30 16:52:48'),(64,13,'l',10,'2016-03-30 16:52:48','2016-03-30 16:52:48'),(65,13,'xl',10,'2016-03-30 16:52:48','2016-03-30 16:52:48'),(66,14,'xs',5,'2016-03-30 16:53:57','2016-03-30 16:53:57'),(67,14,'s',5,'2016-03-30 16:53:57','2016-03-30 16:53:57'),(68,14,'m',5,'2016-03-30 16:53:57','2016-03-30 16:53:57'),(69,14,'l',5,'2016-03-30 16:53:57','2016-03-30 16:53:57'),(70,14,'xl',5,'2016-03-30 16:53:57','2016-03-30 16:53:57'),(71,15,'xs',10,'2016-03-30 16:54:40','2016-03-30 16:54:40'),(72,15,'s',10,'2016-03-30 16:54:40','2016-03-30 16:54:40'),(73,15,'m',10,'2016-03-30 16:54:40','2016-03-30 16:54:40'),(74,15,'l',10,'2016-03-30 16:54:40','2016-03-30 16:54:40'),(75,15,'xl',10,'2016-03-30 16:54:40','2016-03-30 16:54:40'),(76,16,'xs',20,'2016-03-30 16:56:26','2016-03-30 16:56:26'),(77,16,'s',20,'2016-03-30 16:56:26','2016-03-30 16:56:26'),(78,16,'m',20,'2016-03-30 16:56:26','2016-03-30 16:56:26'),(79,16,'l',20,'2016-03-30 16:56:26','2016-03-30 16:56:26'),(80,16,'xl',20,'2016-03-30 16:56:27','2016-03-30 16:56:27'),(81,17,'xs',20,'2016-03-30 16:58:16','2016-03-30 16:58:16'),(82,17,'s',20,'2016-03-30 16:58:16','2016-03-30 16:58:16'),(83,17,'m',20,'2016-03-30 16:58:16','2016-03-30 16:58:16'),(84,17,'l',20,'2016-03-30 16:58:16','2016-03-30 16:58:16'),(85,17,'xl',20,'2016-03-30 16:58:17','2016-03-30 16:58:17'),(101,21,'xs',20,'2016-03-30 19:07:56','2016-03-30 19:07:56'),(102,21,'s',20,'2016-03-30 19:07:56','2016-03-30 19:07:56'),(103,21,'m',20,'2016-03-30 19:07:56','2016-03-30 19:07:56'),(104,21,'l',20,'2016-03-30 19:07:56','2016-03-30 19:07:56'),(105,21,'xl',20,'2016-03-30 19:07:56','2016-03-30 19:07:56'),(106,22,'xs',20,'2016-03-30 19:09:31','2016-03-30 19:09:31'),(107,22,'s',20,'2016-03-30 19:09:31','2016-03-30 19:09:31'),(108,22,'m',20,'2016-03-30 19:09:31','2016-03-30 19:09:31'),(109,22,'l',20,'2016-03-30 19:09:31','2016-03-30 19:09:31'),(110,22,'xl',20,'2016-03-30 19:09:31','2016-03-30 19:09:31'),(111,23,'xs',20,'2016-03-30 19:10:47','2016-03-30 19:10:47'),(112,23,'s',20,'2016-03-30 19:10:47','2016-03-30 19:10:47'),(113,23,'m',20,'2016-03-30 19:10:47','2016-03-30 19:10:47'),(114,23,'l',20,'2016-03-30 19:10:47','2016-03-30 19:10:47'),(115,23,'xl',20,'2016-03-30 19:10:47','2016-03-30 19:10:47'),(116,24,'xs',20,'2016-03-30 19:11:53','2016-03-30 19:11:53'),(117,24,'s',20,'2016-03-30 19:11:53','2016-03-30 19:11:53'),(118,24,'m',20,'2016-03-30 19:11:53','2016-03-30 19:11:53'),(119,24,'l',20,'2016-03-30 19:11:53','2016-03-30 19:11:53'),(120,24,'xl',20,'2016-03-30 19:11:53','2016-03-30 19:11:53'),(121,25,'xs',20,'2016-03-30 19:16:28','2016-03-30 19:16:28'),(122,25,'s',20,'2016-03-30 19:16:28','2016-03-30 19:16:28'),(123,25,'m',20,'2016-03-30 19:16:28','2016-03-30 19:16:28'),(124,25,'l',20,'2016-03-30 19:16:28','2016-03-30 19:16:28'),(125,25,'xl',20,'2016-03-30 19:16:28','2016-03-30 19:16:28'),(126,26,'xs',20,'2016-03-30 19:19:31','2016-03-30 19:19:31'),(127,26,'s',20,'2016-03-30 19:19:31','2016-03-30 19:19:31'),(128,26,'m',20,'2016-03-30 19:19:31','2016-03-30 19:19:31'),(129,26,'l',20,'2016-03-30 19:19:31','2016-03-30 19:19:31'),(130,26,'xl',20,'2016-03-30 19:19:31','2016-03-30 19:19:31'),(131,27,'xs',20,'2016-03-30 19:57:32','2016-03-30 19:57:32'),(132,27,'s',20,'2016-03-30 19:57:32','2016-03-30 19:57:32'),(133,27,'m',20,'2016-03-30 19:57:32','2016-03-30 19:57:32'),(134,27,'l',20,'2016-03-30 19:57:32','2016-03-30 19:57:32'),(135,27,'xl',20,'2016-03-30 19:57:32','2016-03-30 19:57:32'),(136,28,'xs',20,'2016-03-30 19:58:41','2016-03-30 19:58:41'),(137,28,'s',20,'2016-03-30 19:58:41','2016-03-30 19:58:41'),(138,28,'m',20,'2016-03-30 19:58:41','2016-03-30 19:58:41'),(139,28,'l',20,'2016-03-30 19:58:41','2016-03-30 19:58:41'),(140,28,'xl',20,'2016-03-30 19:58:41','2016-03-30 19:58:41'),(141,29,'xs',20,'2016-03-30 20:08:39','2016-03-30 20:08:39'),(142,29,'s',20,'2016-03-30 20:08:39','2016-03-30 20:08:39'),(143,29,'m',20,'2016-03-30 20:08:39','2016-03-30 20:08:39'),(144,29,'l',20,'2016-03-30 20:08:39','2016-03-30 20:08:39'),(145,29,'xl',20,'2016-03-30 20:08:39','2016-03-30 20:08:39'),(146,30,'xs',20,'2016-03-30 20:09:55','2016-03-30 20:09:55'),(147,30,'s',20,'2016-03-30 20:09:55','2016-03-30 20:09:55'),(148,30,'m',20,'2016-03-30 20:09:55','2016-03-30 20:09:55'),(149,30,'l',20,'2016-03-30 20:09:55','2016-03-30 20:09:55'),(150,30,'xl',20,'2016-03-30 20:09:55','2016-03-30 20:09:55'),(151,31,'xs',20,'2016-03-30 20:10:51','2016-03-30 20:10:51'),(152,31,'s',20,'2016-03-30 20:10:51','2016-03-30 20:10:51'),(153,31,'m',20,'2016-03-30 20:10:51','2016-03-30 20:10:51'),(154,31,'l',20,'2016-03-30 20:10:51','2016-03-30 20:10:51'),(155,31,'xl',20,'2016-03-30 20:10:51','2016-03-30 20:10:51'),(156,32,'xs',20,'2016-03-30 20:11:48','2016-03-30 20:11:48'),(157,32,'s',20,'2016-03-30 20:11:48','2016-03-30 20:11:48'),(158,32,'m',20,'2016-03-30 20:11:48','2016-03-30 20:11:48'),(159,32,'l',20,'2016-03-30 20:11:48','2016-03-30 20:11:48'),(160,32,'xl',20,'2016-03-30 20:11:48','2016-03-30 20:11:48'),(161,33,'xs',20,'2016-03-30 20:18:54','2016-03-30 20:18:54'),(162,33,'s',20,'2016-03-30 20:18:54','2016-03-30 20:18:54'),(163,33,'m',20,'2016-03-30 20:18:54','2016-03-30 20:18:54'),(164,33,'l',20,'2016-03-30 20:18:54','2016-03-30 20:18:54'),(165,33,'xl',20,'2016-03-30 20:18:54','2016-03-30 20:18:54'),(166,34,'xs',20,'2016-03-30 20:21:02','2016-03-30 20:21:02'),(167,34,'s',20,'2016-03-30 20:21:02','2016-03-30 20:21:02'),(168,34,'m',20,'2016-03-30 20:21:02','2016-03-30 20:21:02'),(169,34,'l',20,'2016-03-30 20:21:02','2016-03-30 20:21:02'),(170,34,'xl',20,'2016-03-30 20:21:02','2016-03-30 20:21:02'),(171,35,'xs',20,'2016-03-30 20:22:38','2016-03-30 20:22:38'),(172,35,'s',20,'2016-03-30 20:22:38','2016-03-30 20:22:38'),(173,35,'m',20,'2016-03-30 20:22:38','2016-03-30 20:22:38'),(174,35,'l',20,'2016-03-30 20:22:38','2016-03-30 20:22:38'),(175,35,'xl',20,'2016-03-30 20:22:38','2016-03-30 20:22:38'),(176,36,'xs',20,'2016-03-30 20:26:04','2016-03-30 20:26:04'),(177,36,'s',20,'2016-03-30 20:26:04','2016-03-30 20:26:04'),(178,36,'m',20,'2016-03-30 20:26:04','2016-03-30 20:26:04'),(179,36,'l',20,'2016-03-30 20:26:04','2016-03-30 20:26:04'),(180,36,'xl',20,'2016-03-30 20:26:04','2016-03-30 20:26:04'),(181,37,'xs',20,'2016-03-30 20:26:49','2016-03-30 20:26:49'),(182,37,'s',20,'2016-03-30 20:26:49','2016-03-30 20:26:49'),(183,37,'m',20,'2016-03-30 20:26:49','2016-03-30 20:26:49'),(184,37,'l',20,'2016-03-30 20:26:49','2016-03-30 20:26:49'),(185,37,'xl',20,'2016-03-30 20:26:49','2016-03-30 20:26:49'),(186,38,'xs',20,'2016-03-30 20:29:54','2016-03-30 20:29:54'),(187,38,'s',20,'2016-03-30 20:29:54','2016-03-30 20:29:54'),(188,38,'m',20,'2016-03-30 20:29:54','2016-03-30 20:29:54'),(189,38,'l',20,'2016-03-30 20:29:54','2016-03-30 20:29:54'),(190,38,'xl',20,'2016-03-30 20:29:54','2016-03-30 20:29:54'),(191,39,'xs',20,'2016-03-30 20:33:16','2016-03-30 20:33:16'),(192,39,'s',20,'2016-03-30 20:33:16','2016-03-30 20:33:16'),(193,39,'m',20,'2016-03-30 20:33:16','2016-03-30 20:33:16'),(194,39,'l',20,'2016-03-30 20:33:16','2016-03-30 20:33:16'),(195,39,'xl',20,'2016-03-30 20:33:16','2016-03-30 20:33:16'),(196,40,'xs',20,'2016-03-30 20:34:27','2016-03-30 20:34:27'),(197,40,'s',20,'2016-03-30 20:34:27','2016-03-30 20:34:27'),(198,40,'m',20,'2016-03-30 20:34:27','2016-03-30 20:34:27'),(199,40,'l',20,'2016-03-30 20:34:27','2016-03-30 20:34:27'),(200,40,'xl',20,'2016-03-30 20:34:27','2016-03-30 20:34:27'),(201,41,'xs',20,'2016-03-30 20:35:27','2016-03-30 20:35:27'),(202,41,'s',20,'2016-03-30 20:35:27','2016-03-30 20:35:27'),(203,41,'m',20,'2016-03-30 20:35:27','2016-03-30 20:35:27'),(204,41,'l',20,'2016-03-30 20:35:27','2016-03-30 20:35:27'),(205,41,'xl',20,'2016-03-30 20:35:27','2016-03-30 20:35:27'),(206,42,'xs',20,'2016-03-30 20:36:42','2016-03-30 20:36:42'),(207,42,'s',20,'2016-03-30 20:36:42','2016-03-30 20:36:42'),(208,42,'m',20,'2016-03-30 20:36:42','2016-03-30 20:36:42'),(209,42,'l',20,'2016-03-30 20:36:42','2016-03-30 20:36:42'),(210,42,'xl',20,'2016-03-30 20:36:42','2016-03-30 20:36:42'),(211,43,'xs',20,'2016-03-30 20:37:04','2016-03-30 20:37:04'),(212,43,'s',20,'2016-03-30 20:37:04','2016-03-30 20:37:04'),(213,43,'m',20,'2016-03-30 20:37:04','2016-03-30 20:37:04'),(214,43,'l',20,'2016-03-30 20:37:04','2016-03-30 20:37:04'),(215,43,'xl',20,'2016-03-30 20:37:04','2016-03-30 20:37:04'),(216,44,'xs',20,'2016-03-31 16:17:46','2016-03-31 16:17:46'),(217,44,'s',20,'2016-03-31 16:17:46','2016-03-31 16:17:46'),(218,44,'m',20,'2016-03-31 16:17:46','2016-03-31 16:17:46'),(219,44,'l',20,'2016-03-31 16:17:46','2016-03-31 16:17:46'),(220,44,'xl',20,'2016-03-31 16:17:46','2016-03-31 16:17:46'),(241,49,'xs',20,'2016-03-31 17:49:03','2016-03-31 17:49:03'),(242,49,'s',20,'2016-03-31 17:49:03','2016-03-31 17:49:03'),(243,49,'m',20,'2016-03-31 17:49:03','2016-03-31 17:49:03'),(244,49,'l',20,'2016-03-31 17:49:03','2016-03-31 17:49:03'),(245,49,'xl',20,'2016-03-31 17:49:03','2016-03-31 17:49:03'),(256,52,'xs',20,'2016-03-31 17:51:07','2016-03-31 17:51:07'),(257,52,'s',20,'2016-03-31 17:51:07','2016-03-31 17:51:07'),(258,52,'m',20,'2016-03-31 17:51:07','2016-03-31 17:51:07'),(259,52,'l',20,'2016-03-31 17:51:07','2016-03-31 17:51:07'),(260,52,'xl',20,'2016-03-31 17:51:07','2016-03-31 17:51:07'),(261,53,'xs',20,'2016-03-31 17:52:29','2016-03-31 17:52:29'),(262,53,'s',20,'2016-03-31 17:52:29','2016-03-31 17:52:29'),(263,53,'m',20,'2016-03-31 17:52:29','2016-03-31 17:52:29'),(264,53,'l',20,'2016-03-31 17:52:29','2016-03-31 17:52:29'),(265,53,'xl',20,'2016-03-31 17:52:29','2016-03-31 17:52:29');
/*!40000 ALTER TABLE `products_stock` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Kevin','Kim','coolguy@coolguy.com','5f4dcc3b5aa765d61d8327deb882cf99','1991-12-13','2016-03-29 14:36:57','2016-03-29 14:36:57');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-03-31 17:56:03

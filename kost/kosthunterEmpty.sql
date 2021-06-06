/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

DROP TABLE `kosthunter`.`datakost`;
CREATE TABLE `datakost` (
  `idKost` int NOT NULL AUTO_INCREMENT,
  `namaKost` varchar(50) NOT NULL,
  `totalKost` int NOT NULL,
  `alamatKost` varchar(100) NOT NULL,
  `fasilitasKost` varchar(100) NOT NULL,
  `hargaKost` int NOT NULL,
  `imageKost` blob NOT NULL,
  `user_id` int DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  PRIMARY KEY (`idKost`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `datakost_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`idUser`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

DROP TABLE `kosthunter`.`pemesanankost`;
CREATE TABLE `pemesanankost` (
  `idPemesanan` varchar(255) NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  `duration` int NOT NULL,
  `totalHargaKost` int NOT NULL,
  `statusPemesanan` varchar(50) NOT NULL,
  `paymentMethod` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `reason` varchar(255) DEFAULT NULL,
  `user_id` int NOT NULL,
  `kost_id` int NOT NULL,
  `created_at` date DEFAULT NULL,
  PRIMARY KEY (`idPemesanan`),
  KEY `kost_id` (`kost_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `pemesanankost_ibfk_2` FOREIGN KEY (`kost_id`) REFERENCES `datakost` (`idKost`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `pemesanankost_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `user` (`idUser`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

DROP TABLE `kosthunter`.`user`;
CREATE TABLE `user` (
  `idUser` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `nohp` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `birth_date` date NOT NULL,
  `level` varchar(20) NOT NULL,
  `usercreated_at` date DEFAULT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;








/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
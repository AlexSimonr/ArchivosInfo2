-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.7.33 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Volcando estructura para tabla vn_book.comentarios
CREATE TABLE IF NOT EXISTS `comentarios` (
  `com_id` int(11) NOT NULL AUTO_INCREMENT,
  `pub_id` int(11) NOT NULL,
  `com_comentario` varchar(50) NOT NULL,
  `com_estado` int(11) NOT NULL,
  PRIMARY KEY (`com_id`),
  KEY `pub_id` (`pub_id`),
  CONSTRAINT `FK_comentarios_publicaciones` FOREIGN KEY (`pub_id`) REFERENCES `publicaciones` (`pub_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla vn_book.comentarios: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `comentarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `comentarios` ENABLE KEYS */;

-- Volcando estructura para tabla vn_book.publicaciones
CREATE TABLE IF NOT EXISTS `publicaciones` (
  `pub_id` int(11) NOT NULL AUTO_INCREMENT,
  `pub_usuario` varchar(250) NOT NULL,
  `pub_fecha` date NOT NULL,
  `pub_hora` time NOT NULL,
  `pub_descripcion` varchar(250) NOT NULL,
  `pub_estado` varchar(50) NOT NULL,
  `pub_imagen` varchar(50) NOT NULL,
  PRIMARY KEY (`pub_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla vn_book.publicaciones: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `publicaciones` DISABLE KEYS */;
INSERT INTO `publicaciones` (`pub_id`, `pub_usuario`, `pub_fecha`, `pub_hora`, `pub_descripcion`, `pub_estado`, `pub_imagen`) VALUES
	(1, '', '2022-06-10', '00:00:00', 'APRENDIENDO BASE DE DATOS', 'ALEGRE', ''),
	(2, '', '2022-06-17', '00:00:00', 'NO CORRE EL CÓDIGO', 'ENOJADO', ''),
	(3, 'Luis', '2022-06-20', '13:42:23', 'Comentario 1', 'Alegre', '');
/*!40000 ALTER TABLE `publicaciones` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 05-09-2023 a las 22:50:41
-- Versión del servidor: 10.5.20-MariaDB
-- Versión de PHP: 8.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `atheneal_dinamarca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `contenido` text NOT NULL,
  `imagen` varchar(200) NOT NULL DEFAULT '',
  `fecha` varchar(50) NOT NULL,
  `autor` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `blogs`
--

INSERT INTO `blogs` (`id`, `titulo`, `contenido`, `imagen`, `fecha`, `autor`) VALUES
(12, 'Limpiarse los oÃ­dos es protegerse contra diversos trastornos del oÃ­doaaa', '<p style=\"text-align:justify\"><span style=\"font-size:14px\">La higiene regular del o&iacute;do permite una buena evacuaci&oacute;n del cerumen hacia el exterior del canal auditivo. Su cantidad queda as&iacute; regulada, evitando la formaci&oacute;n de un tap&oacute;n de cerumen. Adoptar la costumbre de limpiarse los o&iacute;dos con una soluci&oacute;n adecuada permite:</span></p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:14px\">mantener una buena audici&oacute;n,</span></li>\r\n	<li><span style=\"font-size:14px\">evitar dolores, ac&uacute;fenos y v&eacute;rtigos*,</span></li>\r\n	<li><span style=\"font-size:14px\">evitar la retenci&oacute;n de agua en el canal auditivo,</span></li>\r\n	<li><span style=\"font-size:14px\">permitir que el m&eacute;dico vea bien el t&iacute;mpano durante un examen,</span></li>\r\n	<li><span style=\"font-size:14px\">asegurarse de que su aud&iacute;fono funcione de manera &oacute;ptima*</span></li>\r\n</ul>\r\n\r\n<h4>&iquest;Qu&eacute; m&eacute;todo elegir para limpiarse los o&iacute;dos?</h4>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Es preferible no utilizar objetos como pinzas para los o&iacute;dos o bastoncillos de algod&oacute;n. &iquest;Por qu&eacute;? Porque pueden ser peligrosos: de hecho, el t&iacute;mpano est&aacute; muy cerca de la entrada del canal auditivo, por lo que es f&aacute;cilmente accesible. Esta membrana es extremadamente sensible: el riesgo de lesiones es real*.</span></p>\r\n\r\n<h4>&iquest;Qu&eacute; soluci&oacute;n acuosa elegir para limpiarse los o&iacute;dos?</h4>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><a href=\"https://new.audispray.com/es/blog/a-import%C3%A2ncia-da-lavagem-das-orelhas-para-evitar-tamp%C3%B5es-de-cera-de-ouvido/es/blog/beneficios-del-agua-de-mar\">&iexcl;Los beneficios del agua de mar en el cuerpo son numerosos!</a>&nbsp;&iquest;Sabe que tiene propiedades cerumenol&iacute;ticas? La sal marina disuelve las part&iacute;culas de cera, facilitando su evacuaci&oacute;n hacia el exterior.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Beb&eacute;, ni&ntilde;o, adulto... &iquest;C&oacute;mo dosificar la cantidad de soluci&oacute;n? Recuerde elegir un producto que ofrezca un sistema de dosificaci&oacute;n adaptado a las necesidades de su usuario.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Si bien los aerosoles para los o&iacute;dos no se recomiendan para los beb&eacute;s debido a la sensibilidad de sus o&iacute;dos, representan una soluci&oacute;n interesante a partir de los 3 a&ntilde;os. Opte por una nebulizaci&oacute;n suave y amplia. Para evitar cualquier sensaci&oacute;n de presi&oacute;n, elija una boquilla adecuada que deje que circule el aire.</span></p>\r\n', '12medico-tiro-medio-revisando-oidos-paciente.jpg', '2023-02-25', 'Isabela'),
(16, 'Titulo de noticia', '<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>\r\n', '16medico-tiro-medio-revisando-oidos-paciente.jpg', '2023-02-25', 'Olman');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `link` varchar(200) NOT NULL,
  `imagen` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `brands`
--

INSERT INTO `brands` (`id`, `link`, `imagen`) VALUES
(8, 'https://www.puma-cabinas-insonorizadas.com/', '8DiseÃ±o sin tÃ­tulo.png'),
(18, 'https://www.rexton.com/es/', '18DiseÃ±o sin tÃ­tulo(2).png'),
(19, 'https://www.widex.com/es/', '19DiseÃ±o sin tÃ­tulo(5).png'),
(20, 'https://www.cochlear.com/la/es/home', '20DiseÃ±o sin tÃ­tulo(4).png'),
(21, 'https://la.rayovac.com/baterias-auditivas-educacion/', '21DiseÃ±o sin tÃ­tulo(6).png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caracteristicas_producto`
--

CREATE TABLE `caracteristicas_producto` (
  `id` int(10) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `texto` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `convenios`
--

CREATE TABLE `convenios` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `descripcion` varchar(5000) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `imagen` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `convenios`
--

INSERT INTO `convenios` (`id`, `titulo`, `descripcion`, `imagen`) VALUES
(1, 'Empresa ORBE', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco', 'logo01.png'),
(2, 'Empresa GEA', '<p>Lorem ipsum dolor sit amet,</p>\r\n\r\n<p>consectetur adipiscing elit, sed do</p>\r\n\r\n<p>eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>\r\n\r\n<p>DSADSA</p>\r\n', 'logo2.png'),
(3, 'Empresa MEDISMART', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco', 'logo3.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `costumers`
--

CREATE TABLE `costumers` (
  `ID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `lastname` varchar(300) DEFAULT NULL,
  `email` varchar(200) NOT NULL,
  `address` varchar(300) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `dni` varchar(100) DEFAULT NULL,
  `hash` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `costumers`
--

INSERT INTO `costumers` (`ID`, `name`, `lastname`, `email`, `address`, `phone`, `dni`, `hash`) VALUES
(1, 'Olman', 'Monge', 'olman1000@gmail.com', 'Desamparados Calle Fallas', '84245549', '12312312', '644a05d0e66cb7.80290727'),
(2, 'Olman', 'Monge', 'olman1000@gmail.com', 'Desamparados Calle Fallas', '84245549', '12312312', '644a09bd193bb8.41795868'),
(3, 'Olman', 'Monge', 'olman1000@gmail.com', 'Desamparados Calle Fallas', '84245549', '12312312', '644a09d2b787c7.80942909'),
(4, 'Olman', 'Monge', 'olman1000@gmail.com', 'Desamparados Calle Fallas', '84245549', '12345648', '644a0a35679ed9.07008606'),
(5, 'Olman', 'Monge', 'olman1000@gmail.com', 'Desamparados Calle Fallas', '84245549', '12345648', '644a0abca538d5.19003438'),
(6, 'Olman', 'Monge', 'olman1000@gmail.com', 'Desamparados Calle Fallas', '84245549', '12345648', '644a0adbee9067.00099074'),
(7, 'Olman', 'Monge', 'olman1000@gmail.com', 'Desamparados Calle Fallas', '84245549', '12345648', '644a0b183cd105.83455552'),
(8, 'Olman', 'Monge', 'olman1000@gmail.com', 'Desamparados Calle Fallas', '84245549', '12345648', '644a0b34e06a62.12952153'),
(9, 'Olman', 'Monge', 'olman1000@gmail.com', 'Desamparados Calle Fallas', '84245549', '12345648', '644a0b5bbc7d73.51098784'),
(10, 'Olman', 'Monge', 'olman1000@gmail.com', 'Desamparados Calle Fallas', '84245549', '12345648', '644a0c774c72b1.39703685'),
(11, 'Olman', 'Monge', 'olman1000@gmail.com', 'Desamparados Calle Fallas', '84245549', '12345648', '644a0ca01f68c1.68904975'),
(12, 'Olman', 'Monge', 'olman1000@gmail.com', 'Desamparados Calle Fallas', '84245549', '12345648', '644a0cb1a9e754.81323922'),
(13, 'Olman', 'Monge', 'olman1000@gmail.com', 'Desamparados Calle Fallas', '84245549', '12345648', '644a0cc2d4f5d3.48788449'),
(14, 'Olman', 'Monge', 'olman1000@gmail.com', 'Desamparados Calle Fallas', '84245549', '12345648', '644a0cd1f1c3b1.48608845'),
(15, 'Olman', 'Monge', 'olman1000@gmail.com', 'Desamparados Calle Fallas', '84245549', '12345648', '644a0dbe90f916.19442723'),
(16, 'Olman', 'Monge', 'olman1000@gmail.com', 'Desamparados Calle Fallas', '84245549', '12345648', '644a0e0060f594.69881462'),
(17, 'Olman', 'Monge', 'olman1000@gmail.com', 'Desamparados Calle Fallas', '84245549', '12312312', '644a0e72a8bc12.80963610'),
(18, 'Olman', 'Monge', 'olman1000@gmail.com', 'Desamparados Calle Fallas', '84245549', '1348748', '644a0e8b0154f8.90315131'),
(19, 'Olman', 'Monge', 'olman1000@gmail.com', 'Desamparados Calle Fallas', '84245549', '1348748', '644a13303e77b9.01871957'),
(20, 'Olman', 'Monge', 'olman1000@gmail.com', 'Desamparados Calle Fallas', '84245549', '1348748', '644a134e884f85.80242314'),
(21, 'Olman', 'Monge', 'olman1000@gmail.com', 'Desamparados Calle Fallas', '84245549', '1348748', '644a13bbcb33f5.17698774'),
(22, 'Olman', 'Monge', 'olman.monge@tecnosula.com', 'Desamparados Calle Fallas', '84245549', '12312312', '644a1400b91b10.31170313'),
(23, 'Olman', 'Monge', 'olman.monge@tecnosula.com', 'Desamparados Calle Fallas', '84245549', '12312312', '644a14771e25b3.04766236'),
(24, 'Olman', 'Monge', 'olman.monge@tecnosula.com', 'Desamparados Calle Fallas', '84245549', '12312312', '644a14d5318849.39685129'),
(25, 'Olman', 'Monge', 'olman.monge@tecnosula.com', 'Desamparados Calle Fallas', '84245549', '12312312', '644a151266f8b7.36896569'),
(26, 'Olman', 'Monge', 'olman.monge@tecnosula.com', 'Desamparados Calle Fallas', '84245549', '12312312', '644a15444593d9.32731006'),
(27, 'Olman', 'Monge', 'olman.monge@tecnosula.com', 'Desamparados Calle Fallas', '84245549', '12312312', '644a1a7f1b5f77.05482233'),
(28, 'Olman', 'Monge', 'olman.monge@tecnosula.com', 'Desamparados Calle Fallas', '84245549', '', '644a1b64472fc8.01206490'),
(29, 'Olman', 'Monge', 'olman1000@gmail.com', 'Desamparados Calle Fallas', '84245549', '', '644b78e48585f8.75769165'),
(30, 'Olman', 'Monge', 'olman1000@gmail.com', 'Desamparados Calle Fallas', '84245549', '', '644b78e7467393.30989490'),
(31, 'Olman', 'Monge', 'olman1000@gmail.com', 'Desamparados Calle Fallas', '84245549', '', '64d28acfbe5ba8.39869918'),
(32, 'Olman', 'Monge', 'olman1000@gmail.com', 'Desamparados Calle Fallas', '84245549', '', '64d28c49afebe8.62547774'),
(33, 'Olman', 'Monge', 'olman1000@gmail.com', 'Desamparados Calle Fallas', '84245549', '', '64d28c7dcdb3a2.36355714'),
(34, 'sadf', 'fdsafa', 'maxrd@hotmail.com', 'tibas', '12321', '', '64d40b3c03de67.69469857');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descargables`
--

CREATE TABLE `descargables` (
  `id` int(11) NOT NULL,
  `titulo` varchar(150) NOT NULL,
  `descripcion` text NOT NULL,
  `archivo` varchar(200) DEFAULT NULL,
  `fecha` varchar(50) NOT NULL,
  `imagen` varchar(200) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `descargables`
--

INSERT INTO `descargables` (`id`, `titulo`, `descripcion`, `archivo`, `fecha`, `imagen`) VALUES
(25, 'test 3', '<p>as been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centu', '25Requerimiento westsidehomeinspections.docx', '2023-01-03 05:41:46', '25254-home-inspector-wide.jpg'),
(27, 'test4', '<p>. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not<', '27Requerimiento westsidehomeinspections.docx', '2023-01-03 05:53:14', '27logo.jpg'),
(28, 'test 6', '<p>. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not&', '28Requerimiento westsidehomeinspections.docx', '2023-01-03 05:59:08', '28home-inspection-1.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE `equipos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `cargo` varchar(100) NOT NULL,
  `descripcion` text NOT NULL,
  `imagen` varchar(200) DEFAULT NULL,
  `fb` varchar(250) NOT NULL,
  `insta` varchar(250) NOT NULL,
  `linkedin` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`id`, `nombre`, `cargo`, `descripcion`, `imagen`, `fb`, `insta`, `linkedin`) VALUES
(9, 'Licda Yulissa Salamanca', 'Teacher', '<p style=\"text-align:justify\"><span style=\"font-size:20px\"><span style=\"font-family:Calibri,sans-serif\">Teacher Yulissa es Licenciada en la Ense&ntilde;anza del Ingl&eacute;s graduada de la Univerdisad Latina.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:20px\"><span style=\"font-family:Calibri,sans-serif\">Yulissa posee 4 a&ntilde;os de experiencia en la ense&ntilde;anza del idioma ingl&eacute;s trabajando con ni&ntilde;os, adolescentes y adultos. Es una profesional cari&ntilde;osa, paciente con todos lo que la rodean. Adem&aacute;s le encantan los perros y las caminatas al aire libre.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:20px\"><span style=\"font-family:Calibri,sans-serif\">Teacher Yuli ofrece clases llenas de amor y dinamismo.</span></span></p>\r\n', '9julissa.jpg', '', '', ''),
(10, 'Licda Kenia Corella GÃ³mez', 'Teacher', '<p><span style=\"font-size:20px\"><span style=\"font-family:Calibri,sans-serif\">Teacher Kenia posee una licenciatura en la Ense&ntilde;anza del ingles y 2 a&ntilde;os de experiencia en la ense&ntilde;anza de este idioma, podemos decir que es una teacher apasionada y entregada en sus labores. </span></span></p>\r\n\r\n<p><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:20px\">Kenia&nbsp;tambi&eacute;n es amante de los perros, ama maquillar y caminar al aire libre.</span></span></p>\r\n\r\n<p><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:20px\">Los ni&ntilde;os y j&oacute;venes adoran sus clases.</span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n', '10kenia.jpg', '', '', ''),
(11, 'Bach. Maylen Arias Barrantes', 'Teacher', '<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:14.0pt\">Teacher Maylen es graduada de ense&ntilde;anza y traduaccion del idioma ingl&eacute;s, tambi&eacute;n posee un gado de administraci&oacute;n de empresas y ventas.&nbsp;</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:14.0pt\">Posee 2 a&ntilde;os de experiencia en la ense&ntilde;anza del ingles y es una teacher sumamente ordenada y disciplinada, le encanta viajar, nadar y las actividades al aire libre.&nbsp;</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:14.0pt\">Es una teacher que ofrece una clase variada y organizada</span></span></span></p>\r\n', '11maylen.jpg', '', '', ''),
(12, 'Bach. Maria JesÃºs ', 'Teacher', '<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.0pt\">Teacher Mar&iacute;a Jes&uacute;s cuenta con un Bachillerato en ingl&eacute;s como lengua extranjera de la UTN y tambi&eacute;n un profesorado de la misma carrera.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.0pt\">Ha ense&ntilde;ado ingl&eacute;s por 2 a&ntilde;os </span><span style=\"font-size:13.0pt\">y se caracteriza por ser una profesional &nbsp;dulce y&nbsp; responsable en todo lo que hace. Le encanta pasar tiempo con amigos y familia as&iacute; como ver el progreso de sus estudiantes.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:17.33333396911621px\">Mar&iacute;a Jes&uacute;s siempre los esperar&aacute; con una sonrisa y mucha hospitalidad</span></span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n', '12mariaj.jpg', '', '', ''),
(13, 'Bach. MarÃ­a Paula Molina HernÃ¡ndez', 'Teacher', '<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.0pt\">Paula es bachiller en la ense&ntilde;anza del ingl&eacute;s.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.0pt\">Teacher Paula ha participado de diferentes Programas para perfeccionar el ingl&eacute;s y m&eacute;todos de ense&ntilde;anza.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.0pt\">Teacher Paula cuenta con tres a&ntilde;os de experiencia como docente de ingl&eacute;s para ni&ntilde;os y j&oacute;venes y es una dulce teacher, siempre disponible para sus estudiantes. Actualmente trabaja 100% online.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:Calibri, sans-serif\"><span style=\"font-size:17.33333396911621px\">De sus clases siempre tendremos una atenci&oacute;n personalizada y&nbsp;activa</span></span></p>\r\n', '13WhatsApp Image 2021-12-17 at 6.49.15 PM.jpeg', '', '', ''),
(14, 'Bach. Marianna Matamoros', 'Teacher ', '<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.0pt\">Teacher Mariana ha realizado sus estudios sobre la ense&ntilde;anza del ingl&eacute;s en la Universidad Latina de Costa Rica. Cuenta con 2 a&ntilde;os de experiencia en la ense&ntilde;anza y es una teacher dulce, creativa y muy especial.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.0pt\">Le encanta ver series y todo lo relacionado a star wars.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:Calibri, sans-serif\"><span style=\"font-size:17.33333396911621px\">Teacher Mariana siempre llena a sus estudiantes de alegr&iacute;a con su sonrisa y hermosa forma de ser</span></span></p>\r\n', '14Marianna.jpg', '', '', ''),
(15, 'Milagro Benavides MejÃ­as', 'Asistente Administrativa ', '<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.0pt\">Milagro es la asistente administrativa de iLearn Center. Es una joven preparada y llena de dulzura.</span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.0pt\">Mila es &nbsp;la que d&iacute;a a dia les atiende y ayuda con sus dudas con mucho amor y dedicaci&oacute;n. </span></span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n', '15milagro.jpg', '', '', ''),
(16, ' MeD. Raquel Castro RodrÃ­guez', 'CEO de iLearn Center', '<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.0pt\">Raquel castro es fundadora y CEO de iLearn Center.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.0pt\">Es certificada como profesora de ingl&eacute;s internacionalmente por SIT, World Learning </span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.0pt\">Es m&aacute;ster en Educaci&oacute;n, ULACIT.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.0pt\">Fue elegida para el programa J&oacute;venes L&iacute;deres de Am&eacute;rica como&nbsp;emprendedora destacable representando a Costa Rica (YLAI, 2020).&nbsp;Productora de contenido y presentadora de programa televisivo Peque&ntilde;os&nbsp;Biling&uuml;es</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.0pt\">Posee certificaciones varias en: Disciplina positiva, ense&ntilde;anza afectiva,&nbsp;ense&ntilde;anza de ingl&eacute;s para ni&ntilde;os, educaci&oacute;n online, entre otros.&nbsp;Tiene 11 a&ntilde;os de experiencia en la ense&ntilde;anza de beb&eacute;s, ni&ntilde;os, adolescentes y estudiantes&nbsp;Universitarios.</span></span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n', '16IMG_4898-2-2.jpg', '', '', 'https://www.linkedin.com/in/raquelsofiacastro/'),
(17, 'Bach. Nicole Arias', 'Teacher', '<p><span style=\"font-size:20px\">Teacher Nicole estudia en la UCR y se encuentra terminando su carrera de ense&ntilde;anza del Ingl&eacute;s, posee un a&ntilde;o de experiencia en la ense&ntilde;anza del Ingl&eacute;s.</span></p>\r\n\r\n<p><span style=\"font-size:20px\">Es una teacher super din&aacute;mica y energ&eacute;tica.</span></p>\r\n\r\n<p><span style=\"font-size:20px\">Los ni&ntilde;os reciben clases muy din&aacute;micas y activas con Nicole</span></p>\r\n', '171.jpeg', '', '', ''),
(18, 'Bach. Valeska Zamora', 'Teacher', '<p><span style=\"font-size:20px\">Teacher Vale estudi&oacute; en la Universidad Estatal a Distancia, posee 2 a&ntilde;os de experiencia en el &aacute;mbito de la ense&ntilde;anza, es una dulce y adorable teacher.</span></p>\r\n\r\n<p><span style=\"font-size:20px\">A Valeska le encanta nadar</span>&nbsp;<span style=\"font-size:20px\">y siempre poder ayudar a los dem&aacute;s.</span></p>\r\n\r\n<p><span style=\"font-size:20px\">Las actividades l&uacute;dicas y de arte siempre est&aacute;n presentes en su aula.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n', '182.jpeg', '', '', ''),
(19, 'Bach. Maireth Moya', 'Teacher', '<p><span style=\"font-size:20px\">Teacher Maireth posee un bachillerato en Educaci&oacute;n Biling&uuml;e, tiene un a&ntilde;o de estar trabajando en la ense&ntilde;anza y sus clases siempre est&aacute;n cargadas de cari&ntilde;o y amor.</span></p>\r\n\r\n<p><span style=\"font-size:20px\">Maireth es una persona super creativa, su animal favorito es el elefante y le encanta realizar manualidades y pintar.</span></p>\r\n\r\n<p><span style=\"font-size:20px\">Teacher Maireth pone el coraz&oacute;n en cada clase</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '19My projectv2.jpg', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descripcion` text NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `area` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `faq`
--

INSERT INTO `faq` (`id`, `titulo`, `descripcion`, `categoria`, `area`) VALUES
(1, 'Â¿CuÃ¡les son los sÃ­ntomas de la pÃ©rdida auditiva?', 'Los sÃ­ntomas pueden incluir dificultad para escuchar conversaciones, necesidad de subir el volumen de la televisiÃ³n y dificultad para oÃ­r sonidos suaves. Una evaluaciÃ³n auditiva puede confirmar la pÃ©rdida.', 'pregunta01', 'true'),
(2, 'Â¿CÃ³mo puedo agendar o reagendar una cita?', 'Puede llamar a nuestro call center 2221-4545 o escribir al WhatsApp de servicio al cliente 8479-4545 para agendar o reagendar en cualquiera de nuestras ClÃ­nicas.', 'pregunta02', 'false'),
(3, 'Â¿CuÃ¡les son las marcas de sus audÃ­fonos?', 'Somos representantes oficiales de marcas reconocidas a nivel mundial, Widex, Rexton y Cochlear.', 'pregunta03', 'false'),
(4, 'Â¿Aceptan recetas de la C.C.S.S?', 'Recibimos tus recetas para audÃ­fonos de la C.C.S.S, la tramitamos por ti y te brindamos la adaptaciÃ³n y controles durante un aÃ±o.', 'pregunta04', NULL),
(10, 'Â¿CÃ³mo sÃ© si necesito audÃ­fonos?', 'Si experimenta dificultades auditivas, es recomendable someterse a una valoraciÃ³n auditiva con un profesional en audiologÃ­a. Ellos determinarÃ¡n si los audÃ­fonos son necesarios.', 'pregunta05', NULL),
(11, 'Â¿CuÃ¡nto cuestan los audÃ­fonos?', ' El costo varÃ­a segÃºn la marca, el modelo y las caracterÃ­sticas. Un profesional de la audiologÃ­a puede proporcionar una cotizaciÃ³n personalizada.', 'pregunta06', NULL),
(12, 'Â¿CÃ³mo puedo Cotizar audÃ­fonos?', 'Puede escribir al correo servicioalcliente@clinicadinamarca.com y nuestro departamento de servicio al cliente le ayudarÃ¡.', 'pregunta07', NULL),
(13, 'Â¿CuÃ¡nto tiempo tomarÃ¡ adaptarme a los audÃ­fonos?', 'El perÃ­odo de adaptaciÃ³n varÃ­a, pero suele llevar algunas semanas acostumbrarse a los nuevos sonidos y sensaciones. Un profesional le guiarÃ¡ durante este proceso.', 'pregunta08', NULL),
(14, 'Â¿QuÃ© debo hacer si mis audÃ­fonos necesitan reparaciÃ³n?', 'Si tiene problemas con tus audÃ­fonos, comunÃ­case con la clÃ­nica mÃ¡s cercana para obtener asistencia y programar una reparaciÃ³n si es necesario.', 'pregunta09', NULL),
(15, 'Â¿Los audÃ­fonos son visibles?', 'Los audÃ­fonos modernos suelen ser discretos y pueden ocultarse fÃ¡cilmente detrÃ¡s de la oreja o en el canal auditivo, dependiendo del tipo y modelo.', 'pregunta10', NULL),
(16, 'Â¿CÃ³mo se cuidan y mantienen los audÃ­fonos?', 'Sigue las instrucciones del fabricante, los consejos de su audiÃ³logo y asegÃºrase de limpiarlos diariamente. Evita la exposiciÃ³n al agua y la humedad.', 'pregunta11', NULL),
(17, 'Â¿CuÃ¡les son los mÃ©todos y facilidades de pago con las que cuentan?', 'Puede consultar en nuestra secciÃ³n de convenios o bien comunicarse con nuestro call center para recibir todos los detalles 221-4545 / 8479-4545.', 'pregunta12', NULL),
(18, 'Â¿Realizan envÃ­os por medio de correos de Costa Rica o encomienda?', 'SÃ­, realizamos envÃ­os con coordinaciÃ³n previa y un costo adicional. Puede coordinarlo comunicÃ¡ndose a nuestro call center 221-4545 / 8479-4545.', 'pregunta13', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `features`
--

CREATE TABLE `features` (
  `description` varchar(200) NOT NULL,
  `position` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `status` enum('Activo','Desactivo') NOT NULL DEFAULT 'Activo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `features`
--

INSERT INTO `features` (`description`, `position`, `id`, `status`) VALUES
('Nuevo', 7, 3, 'Desactivo'),
('Feature 25', 1, 4, 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galerias`
--

CREATE TABLE `galerias` (
  `id` int(11) NOT NULL,
  `imagen` varchar(200) DEFAULT '',
  `titulo` varchar(200) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `status` enum('Activo','Desactivo') NOT NULL DEFAULT 'Activo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `galerias`
--

INSERT INTO `galerias` (`id`, `imagen`, `titulo`, `descripcion`, `status`) VALUES
(44, '44landig+page.jpg', 'Proyecto 1 ', '<p>Proyecto 1&nbsp;</p>\r\n', 'Activo'),
(45, '45285262199_104303695639814_1394506730929907347_n.png', 'Proyecto 2 ', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s,&nbsp;</p>\r\n', 'Activo'),
(46, '46127producto03.jpg', 'Proyecto nuevo 3', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s,&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s,&nbsp;<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetti', 'Desactivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE `imagenes` (
  `id` int(11) NOT NULL,
  `imagen` varchar(200) DEFAULT NULL,
  `titulo` varchar(200) NOT NULL,
  `idGaleria` int(11) NOT NULL,
  `status` enum('Activo','Desactivo') NOT NULL DEFAULT 'Activo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`id`, `imagen`, `titulo`, `idGaleria`, `status`) VALUES
(36, '36espejo-marco-negro-sobre-aparador-00521287_c45c06a1_600x600.jpg', 'Image 1', 45, 'Activo'),
(37, '37img5_5340885_20210209160208.jpg', 'Imagen 2', 45, 'Activo'),
(38, '38132producto01.jpg', 'imagen 1', 46, 'Desactivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenesservicios`
--

CREATE TABLE `imagenesservicios` (
  `id` int(11) NOT NULL,
  `imagen` varchar(400) DEFAULT NULL,
  `titulo` varchar(400) NOT NULL,
  `idProduct` int(11) NOT NULL,
  `status` enum('Activo','Desactivo') NOT NULL DEFAULT 'Activo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `imagenesservicios`
--

INSERT INTO `imagenesservicios` (`id`, `imagen`, `titulo`, `idProduct`, `status`) VALUES
(32, '32p3.png', 'imagen 3', 130, 'Activo'),
(38, '38Silder Cuadrado.jpg', 'wqe', 132, 'Activo'),
(39, '39NY.jpg', 'test1', 142, 'Activo'),
(40, '40Logo_Circulo_Alexandra.png', 'test2', 142, 'Activo'),
(41, '41baterÃ­as 675.jpg', 'fad', 131, 'Activo'),
(42, '42DiseÃ±o sin tÃ­tulo (4).jpg', 'Deshumedecedor elÃ©ctrico Perfect Dry Lux', 143, 'Activo'),
(43, '43DiseÃ±o sin tÃ­tulo (6).jpg', 'Deshumedecedor elÃ©ctrico SoundLink', 144, 'Activo'),
(44, '44DiseÃ±o sin tÃ­tulo (8).jpg', 'Smart key ', 145, 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mapa`
--

CREATE TABLE `mapa` (
  `id` int(11) NOT NULL,
  `principal` enum('Y','N') DEFAULT 'N',
  `latitud` varchar(45) DEFAULT NULL,
  `longitud` varchar(45) DEFAULT NULL,
  `nombre` varchar(75) DEFAULT NULL,
  `imagen` varchar(45) DEFAULT NULL,
  `provincia` varchar(45) DEFAULT NULL,
  `canton` varchar(45) DEFAULT NULL,
  `texto` varchar(150) DEFAULT NULL,
  `encargado` varchar(200) DEFAULT NULL,
  `telefono` varchar(100) NOT NULL,
  `horario` varchar(300) NOT NULL,
  `whatsapp` varchar(100) NOT NULL,
  `url` varchar(200) NOT NULL,
  `waze` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `mapa`
--

INSERT INTO `mapa` (`id`, `principal`, `latitud`, `longitud`, `nombre`, `imagen`, `provincia`, `canton`, `texto`, `encargado`, `telefono`, `horario`, `whatsapp`, `url`, `waze`) VALUES
(8, 'Y', '9.93325', '-84.09391', 'ClÃ­nica Dinamarca Barrio Don Bosco', '8OFICINAS CENTRALES.png', 'San Jose', 'San Jose', 'Avenida 10 de la entrada principal de la Municipalidad de San JosÃ© 100 mts. este y 150 mts. norte Edificio ClÃ­nica Dinamarca', 'Vanessa PÃ©rez', '22214545', 'De lunes a viernes de 7:00 a.m. a 5:00 p.m.', '84794545', 'https://www.clinicadinamarca.com', 'https://ul.waze.com/ul?preview_venue_id=180813923.1808204769.4791719&navigate=yes&utm_campaign=default&utm_source=waze_website&utm_medium=lm_share_location'),
(9, 'N', '9.92884', '-84.05709', 'ClÃ­nica Dinamarca Los Yoses', '9YOSES.png', 'San Jose', 'Montes de Oca', 'De Funeraria del Recuerdo 125m sur', 'Isabel GutiÃ©rrez', '22214545', 'De 8:00 am a 5:00 pm de Lunes a Viernes', '85008754', 'www.clinicadinamarca.com', 'https://waze.com/ul/hd1u0rprx2'),
(10, 'N', '9.91495 ', '-84.09754', 'ClÃ­nica Dinamarca Hatillo', '10HATILLO.png', 'San Jose', 'San Jose', 'EncuÃ©ntranos en ClÃ­nica MÃ©dica del Sur, frente a ClÃ­nica Dr. SolÃ³n NÃºÃ±ez', 'Danny Mora', '22214545', 'De 7:00 am a 4:00 pm de Lunes a Viernes', '85535209', 'www.clinicadinamarca.com', 'https://waze.com/ul/hd1u0qkfj3'),
(11, 'N', ' 9.93757 ', '-84.06997', 'ClÃ­nica Dinamarca Aranjuez', '11ARANJUEZ.png', 'San Jose', 'San Jose', 'Frente a la entrada de admisiÃ³n del Hospital CalderÃ³n Guardia', 'Daysi Fletes', '22214545', 'De 7:00 am a 5:00 pm de Lunes a Viernes', '85536258', 'www.clinicadinamarca.com', 'https://waze.com/ul/hd1u0wcn4g'),
(12, 'N', '9.89236', '-84.05377', 'ClÃ­nica Dinamarca PÃ©rez ZeledÃ³n', '12pz.png', 'San Jose', 'Perez Zeledon', 'Frente a la escuela Pedro PÃ©rez ZeledÃ³n en el Centro Medico San Rafael', 'Guadalupe Araya', '2221-4545', 'De 7:00 am a 4:00 pm de Lunes a Viernes', '85536146', 'www.clinicadinamarca.com', 'https://waze.com/ul/hd1smr30d8'),
(13, 'N', '9.97957 ', '-84.75391', 'ClÃ­nica Dinamarca Puntarenas', '13PUNTARENAS.png', 'Puntarenas', 'Puntarenas', 'Costado Oeste del Hospital MonseÃ±or Sanabria', 'MarÃ­a JosÃ© GarcÃ­a', '22214545', 'De 7:00 am a 4:00 pm de Lunes a Viernes', '85264545', 'www.clinicadinamarca.com', 'https://waze.com/ul/hd1g8xrumr'),
(15, 'N', '10.09203 ', '-84.46969', 'ClÃ­nica Dinamarca San RamÃ³n', 'SAN RAMON.png', 'Alajuela', 'San Ramon', 'Frente al semÃ¡foro peatonal de la entrada a Urgencias del Hospital Carlos Luis Valverde Vega', 'Ilvana Barquero', '22214545', 'De 7:00 am a 4:00 pm de Lunes a Viernes', '85535490', 'www.clinicadinamarca.com', 'https://waze.com/ul/hd1gcmv5n3'),
(16, 'N', '10.02599 ', '-84.21190', 'ClÃ­nica Dinamarca Alajuela', '16ALAJUELA.png', 'Alajuela', 'Alajuela', 'EncuÃ©ntranos en ClÃ­nica Norza, diagonal a la Gasolinera Delta de la Radial ', 'Nareth Vargas', '22214545', 'De 7:00 am a 5:00 pm de Lunes a Viernes', '84630964', 'www.clinicadinamarca.com', ''),
(17, 'N', '10.07226 ', '-84.31419', 'ClÃ­nica Dinamarca Grecia', 'GRECIA.png', 'Alajuela', 'Grecia', '50mts este de la entrada de urgencias del Hospital San Francisco de AsÃ­s, frente a la ClÃ­nica HelÃ©nica', 'Katherine Seinfarth', '22214545', 'De 7:00 am a 4:00 pm de Lunes a Viernes', '85535764', 'www.clinicadinamarca.com', 'https://waze.com/ul/hd1u133es4'),
(18, 'N', '9.99284 ', '-84.12090', 'ClÃ­nica Dinamarca Heredia', '18HEREDIA.png', 'Heredia', 'Heredia', 'Centro MÃ©dico Nuestra SeÃ±ora de los Ãngeles, costado noreste del Hospital San Vicente de PaÃºl, contiguo a parqueo San Vicente', 'Eimy RamÃ­rez', '22214545', 'De 7:00 am a 4:00 pm de Lunes a Viernes', '85536031', 'www.clinicadinamarca.com', 'https://waze.com/ul/hd1u0vg11c'),
(19, 'N', '9.86045 ', '-83.92182', 'ClÃ­nica Dinamarca Cartago', 'CARTAGO.png', 'Cartago', 'Cartago', 'De la esquina sur este del Hospital Max Peralta 25 mts. sur', 'Diana Barquero', '22214545', 'De 7:00 am a 4:00 pm de Lunes a Viernes', '87541936', 'www.clinicadinamarca.com', 'https://waze.com/ul/hd1u246fp5'),
(20, 'N', '9.91572 ', '-83.68122', 'ClÃ­nica Dinamarca Turrialba', 'TURRIALBA.png', 'Cartago', 'Turrialba', 'Frente a la Farmacia La CampiÃ±a', 'Alejandro Angulo', '22214545', 'De 7:00 am a 4:00 pm de Lunes a Viernes', '87593985', 'www.clinicadinamarca.com', 'https://waze.com/ul/hd1u2rdyr3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `id` int(11) NOT NULL,
  `link` varchar(100) NOT NULL,
  `imagen` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `precio` varchar(10) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `cantidad` int(10) NOT NULL,
  `comentario` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prospectos`
--

CREATE TABLE `prospectos` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Telefono` varchar(50) NOT NULL,
  `NombreArchivo` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `prospectos`
--

INSERT INTO `prospectos` (`ID`, `Nombre`, `Email`, `Telefono`, `NombreArchivo`) VALUES
(1, 'Olman Monge', 'olman1000@gmail.com', '84245549', '1691563146observaciones sitioweb.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `quotes`
--

CREATE TABLE `quotes` (
  `id` int(11) NOT NULL,
  `amount` int(11) DEFAULT NULL,
  `idProduct` int(11) DEFAULT NULL,
  `note` varchar(500) NOT NULL,
  `hashQuote` varchar(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `status` enum('Pending','Rejected','Completed') NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `quotes`
--

INSERT INTO `quotes` (`id`, `amount`, `idProduct`, `note`, `hashQuote`, `date`, `status`) VALUES
(1, 10, 126, 'testing', '644a0e00618248.92982817', '2023-04-27 00:46:14', 'Pending'),
(2, 10, 126, 'testing', '644a0e72a971e2.83447582', '2023-04-27 00:46:14', 'Pending'),
(3, 10, 126, 'testing', '644a0e8b01fa47.77052959', '2023-04-27 00:46:14', 'Pending'),
(4, 10, 126, 'testing', '644a13303f1498.46106080', '2023-04-27 00:46:14', 'Pending'),
(5, 10, 126, 'testing', '644a134e88cca1.56773589', '2023-04-27 00:46:14', 'Pending'),
(6, 10, 126, 'testing', '644a13bbcbb6a1.93694238', '2023-04-27 00:46:14', 'Pending'),
(7, 10, 126, 'nota nueva', '644a1400b9a6b5.34241744', '2023-04-27 00:46:14', 'Pending'),
(8, 10, 126, 'nota nueva', '644a14771f7d04.19114645', '2023-04-27 00:46:14', 'Pending'),
(9, 10, 126, 'nota nueva', '644a14d5323e57.72637910', '2023-04-27 00:46:14', 'Pending'),
(10, 10, 126, 'nota nueva', '644a15126797d7.87589845', '2023-04-27 00:46:14', 'Pending'),
(11, 10, 126, 'nota nueva', '644a1544463231.91125567', '2023-04-27 00:46:14', 'Pending'),
(12, 10, 126, '50dsdsdsdsd', '644a1a7f1be282.18255649', '2023-04-27 00:47:27', 'Pending'),
(13, 100, 126, 'nuevo', '644a1b6447bc72.30732969', '2023-04-27 00:51:16', 'Pending'),
(14, 10, 125, 'asdiasdhasdjhasd', '644b78e4862198.13103934', '2023-04-28 01:42:28', 'Pending'),
(15, 10, 131, 'asdiasdhasdjhasd', '644b78e74759f1.84808387', '2023-04-28 01:42:31', 'Completed'),
(16, 10, 142, 'testing', '64d28acfbfcb52.22177851', '2023-08-08 11:34:55', 'Completed'),
(17, 10, 142, 'testing', '64d28c49b1d731.89716345', '2023-08-08 11:41:13', 'Pending'),
(18, 10, 142, 'testing', '64d28c7dd123d8.99156379', '2023-08-08 11:42:05', 'Pending'),
(19, 2, 131, 'asdffdsa', '64d40b3c04b4b1.94957138', '2023-08-09 14:55:08', 'Completed');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `quotesvscostumers`
--

CREATE TABLE `quotesvscostumers` (
  `id` int(11) NOT NULL,
  `hashCostumer` varchar(100) NOT NULL,
  `hashQuote` varchar(100) NOT NULL,
  `status` enum('Activo','Desactivo') NOT NULL DEFAULT 'Activo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `quotesvscostumers`
--

INSERT INTO `quotesvscostumers` (`id`, `hashCostumer`, `hashQuote`, `status`) VALUES
(1, '644a0e0060f594.69881462', '644a0e00621484.60318486', 'Activo'),
(2, '644a0e72a8bc12.80963610', '644a0e72aa30a1.11023092', 'Activo'),
(3, '644a0e8b0154f8.90315131', '644a0e8b027301.16250171', 'Activo'),
(4, '644a13303e77b9.01871957', '644a13303fa341.63374934', 'Activo'),
(5, '644a134e884f85.80242314', '644a134e893585.44371095', 'Activo'),
(6, '644a13bbcb33f5.17698774', '644a13bbcc5108.57116662', 'Activo'),
(7, '644a1400b91b10.31170313', '644a1400ba3ba3.77925057', 'Activo'),
(8, '644a14771e25b3.04766236', '644a1477211c81.78433761', 'Activo'),
(9, '644a14d5318849.39685129', '644a14d532c165.66593152', 'Activo'),
(10, '644a151266f8b7.36896569', '644a1512685c25.56758428', 'Activo'),
(11, '644a15444593d9.32731006', '644a154446c247.16031337', 'Activo'),
(12, '644a1a7f1b5f77.05482233', '644a1a7f1c7095.65751793', 'Activo'),
(13, '644a1b64472fc8.01206490', '644a1b6447bc72.30732969', 'Activo'),
(14, '644b78e48585f8.75769165', '644b78e4862198.13103934', 'Activo'),
(15, '644b78e7467393.30989490', '644b78e74759f1.84808387', 'Activo'),
(16, '64d28acfbe5ba8.39869918', '64d28acfbfcb52.22177851', 'Activo'),
(17, '64d28c49afebe8.62547774', '64d28c49b1d731.89716345', 'Activo'),
(18, '64d28c7dcdb3a2.36355714', '64d28c7dd123d8.99156379', 'Activo'),
(19, '64d40b3c03de67.69469857', '64d40b3c04b4b1.94957138', 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descripcion` text NOT NULL,
  `imagen` varchar(200) DEFAULT NULL,
  `cantidad` int(10) DEFAULT NULL,
  `observacion` varchar(500) DEFAULT NULL,
  `precio` varchar(11) DEFAULT NULL,
  `status` enum('Activo','Desactivo') NOT NULL DEFAULT 'Activo',
  `destacado` varchar(20) DEFAULT NULL,
  `categoria` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id`, `titulo`, `descripcion`, `imagen`, `cantidad`, `observacion`, `precio`, `status`, `destacado`, `categoria`) VALUES
(133, 'BaterÃ­as para prÃ³tesis auditivas', 'BaterÃ­as para prÃ³tesis auditivas que funciona con aire-zinc, libres de mercurio. Pueden ser utilizadas en cualquier audÃ­fono, de acuerdo a las especificaciones tÃ©cnicas, sin distinciÃ³n de marca.', '133DiseÃ±o sin tÃ­tulo.jpg', NULL, NULL, NULL, 'Activo', 'featured', 'audiologico'),
(134, 'Envase y Pastillas deshumedecedoras', 'Consiste en un accesorio manual que extrae la humedad de sus audÃ­fonos, debe ser complementado con las pastillas deshumedecedoras las cuales se descartan y se sustituyen por una nueva cada cierto tiempo\r\n', '134DiseÃ±o sin tÃ­tulo (4).jpg', NULL, NULL, NULL, 'Activo', 'featured', 'audiologico'),
(142, 'Protectores de cerumen ', 'Es resistente al agua y el aceite, lo que puede prolongar la vida Ãºtil del dispositivo auditivo evitando que la cera de los oÃ­dos o el agua se atrapen en el interior\r\n', '142DiseÃ±o sin tÃ­tulo (9).jpg', NULL, NULL, NULL, 'Activo', 'featured', 'audiologico'),
(143, 'Deshumedecedor elÃ©ctrico Perfect Dry Lux', 'Es un secador de audÃ­fonos electrÃ³nico que seca y limpia de manera eficiente sus audÃ­fonos en solo 45 minutos, por lo que la vida Ãºtil de sus audÃ­fonos se alargarÃ¡\r\n', '143DiseÃ±o sin tÃ­tulo (1).jpg', NULL, NULL, NULL, 'Activo', 'featured', 'audiologico'),
(144, 'Deshumedecedor elÃ©ctrico SoundLink', 'Es un secador de audÃ­fonos electrÃ³nico que seca y limpia de manera eficiente su audÃ­fono en 8 horas, por lo que la vida Ãºtil de  sus audÃ­fonos se alargarÃ¡ ', '144DiseÃ±o sin tÃ­tulo (3).jpg', NULL, NULL, NULL, 'Activo', 'featured', 'audiologico'),
(145, 'Smart key ', '', '145DiseÃ±o sin tÃ­tulo (7).jpg', NULL, NULL, NULL, 'Activo', 'featured', 'accesorios'),
(146, 'RC Dex', ' Control remoto inalÃ¡mbrico para sus audÃ­fonos. Ofrece un ajuste fÃ¡cil y discreto del volumen y los programas de sus audÃ­fonos.', '146DiseÃ±o sin tÃ­tulo (9).jpg', NULL, NULL, NULL, 'Activo', 'featured', 'audiologico'),
(147, 'Kit de limpieza', 'Permite mantener limpios e integralmente Ã³ptimos sus audÃ­fonos de manera que disminuye las posibilidades de obstrucciÃ³n y desgaste del dispositivo de manera prematura.\r\n', '147DiseÃ±o sin tÃ­tulo (6).jpg', NULL, NULL, NULL, 'Activo', 'featured', 'audiologico'),
(148, 'Probador de baterÃ­as', 'Indica el nivel se carga que tiene la baterÃ­a, asÃ­ usted estarÃ¡ seguro de cuÃ¡ndo cambiar su baterÃ­a\r\n', '148DiseÃ±o sin tÃ­tulo (8).jpg', NULL, NULL, NULL, 'Activo', 'featured', 'audiologico'),
(149, 'Implante coclear', 'El implante Cochlear es un dispositivo que sustituye estructuras deterioradas dentro del oÃ­do interno, preservandolo. Es la opciÃ³n cuando los audÃ­fonos ya no son suficientes\r\n', '149DiseÃ±o sin tÃ­tulo (5).jpg', NULL, NULL, NULL, 'Activo', 'featured', 'audiologico'),
(150, 'Phone Clip', 'Le permite controlar su telÃ©fono celular inteligente, proporciona una conexiÃ³n de manos libres, con la tecnologÃ­a BluetoothÂ® puede hacer y recibir llamadas e incluso ajustar el volumen tan solo pulsando un botÃ³n\r\n', '150DiseÃ±o sin tÃ­tulo (7).jpg', NULL, NULL, NULL, 'Activo', 'featured', 'audiologico'),
(151, 'Sistema BAHA connect', 'Sistema implantable que emplea un pequeÃ±o pilar como conexiÃ³n directa entre el implante y el procesador de sonido, diseÃ±ado para maximizar el desempeÃ±o auditivo. El sistema Baha Connect es fÃ¡cil de usar y requiere cuidados diarios mÃ­nimos\r\n', '151BahaConnectSystem.jpg', NULL, NULL, NULL, 'Activo', 'featured', 'implantes'),
(152, 'Sistema BAHA Attract', 'Es un sistema auditivo de conducciÃ³n Ã³sea sumamente eficaz, diseÃ±ado para dejar la piel intacta. Utiliza una conexiÃ³n magnÃ©tica para atraer el procesador de sonido al implante, enviando sonido al oÃ­do interno sin necesidad de abrir la piel\r\n', '152Baha Attract.jpg', NULL, NULL, NULL, 'Activo', 'featured', 'implantes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `serviciosvsfeatures`
--

CREATE TABLE `serviciosvsfeatures` (
  `id` int(11) NOT NULL,
  `idFeature` int(11) NOT NULL,
  `idServicio` int(11) NOT NULL,
  `description` varchar(400) NOT NULL,
  `status` enum('Activo','Desactivo') NOT NULL DEFAULT 'Activo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `serviciosvsfeatures`
--

INSERT INTO `serviciosvsfeatures` (`id`, `idFeature`, `idServicio`, `description`, `status`) VALUES
(12, 4, 142, 'descript 1', 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `serviciovsmapa`
--

CREATE TABLE `serviciovsmapa` (
  `id` int(11) NOT NULL,
  `idMapa` int(11) DEFAULT NULL,
  `idServicio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `serviciovsmapa`
--

INSERT INTO `serviciovsmapa` (`id`, `idMapa`, `idServicio`) VALUES
(1, 2, 130),
(24, 3, 135),
(59, 1, 130),
(60, 1, 133),
(64, 5, 132),
(65, 5, 131),
(66, 5, 130),
(67, 6, 131),
(68, 6, 130),
(69, 6, 133),
(70, 7, 131),
(71, 4, 130),
(72, 4, 133),
(157, 14, 133),
(158, 14, 134),
(204, 9, 133),
(205, 9, 143),
(206, 9, 144),
(207, 9, 134),
(208, 9, 147),
(209, 9, 148),
(210, 9, 142),
(211, 9, 146),
(212, 9, 145),
(213, 10, 133),
(214, 10, 143),
(215, 10, 144),
(216, 10, 134),
(217, 10, 147),
(218, 10, 148),
(219, 10, 142),
(220, 10, 146),
(221, 10, 145),
(231, 13, 133),
(232, 13, 143),
(233, 13, 144),
(234, 13, 134),
(235, 13, 147),
(236, 13, 148),
(237, 13, 142),
(238, 13, 146),
(239, 13, 145),
(240, 15, 133),
(241, 15, 143),
(242, 15, 144),
(243, 15, 134),
(244, 15, 147),
(245, 15, 148),
(246, 15, 142),
(247, 15, 146),
(248, 15, 145),
(258, 17, 133),
(259, 17, 143),
(260, 17, 144),
(261, 17, 134),
(262, 17, 147),
(263, 17, 148),
(264, 17, 142),
(265, 17, 146),
(266, 17, 145),
(276, 19, 133),
(277, 19, 143),
(278, 19, 144),
(279, 19, 134),
(280, 19, 147),
(281, 19, 148),
(282, 19, 142),
(283, 19, 146),
(284, 19, 145),
(285, 20, 133),
(286, 20, 143),
(287, 20, 144),
(288, 20, 134),
(289, 20, 147),
(290, 20, 148),
(291, 20, 142),
(292, 20, 146),
(293, 20, 145),
(330, 16, 133),
(331, 16, 143),
(332, 16, 144),
(333, 16, 134),
(334, 16, 147),
(335, 16, 148),
(336, 16, 142),
(337, 16, 146),
(338, 16, 145),
(339, 11, 133),
(340, 11, 143),
(341, 11, 144),
(342, 11, 134),
(343, 11, 147),
(344, 11, 148),
(345, 11, 142),
(346, 11, 146),
(347, 11, 145),
(361, 18, 133),
(362, 18, 143),
(363, 18, 144),
(364, 18, 134),
(365, 18, 147),
(366, 18, 148),
(367, 18, 142),
(368, 18, 146),
(369, 18, 145),
(370, 12, 133),
(371, 12, 143),
(372, 12, 144),
(373, 12, 134),
(374, 12, 147),
(375, 12, 148),
(376, 12, 142),
(377, 12, 146),
(378, 12, 145),
(379, 8, 133),
(380, 8, 143),
(381, 8, 144),
(382, 8, 134),
(383, 8, 149),
(384, 8, 147),
(385, 8, 150),
(386, 8, 148),
(387, 8, 142),
(388, 8, 146),
(389, 8, 152),
(390, 8, 151),
(391, 8, 145);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `imagen` varchar(200) DEFAULT NULL,
  `titulo` varchar(250) NOT NULL,
  `texto` varchar(250) NOT NULL,
  `boton` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `sliders`
--

INSERT INTO `sliders` (`id`, `nombre`, `imagen`, `titulo`, `texto`, `boton`) VALUES
(19, 'Slider 2', '19escritorio.png', 'Titulo Slider 2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a ', ''),
(21, 'Slider 3', '212.300px.png', 'Slider 3', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, ', ''),
(22, 'Slider 5', '22222.300px.png', 'Slider 5', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, ', 'https://kitcab.tecnosula.com/');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `testimonios`
--

CREATE TABLE `testimonios` (
  `id` int(10) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(1000) NOT NULL,
  `imagen` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `testimonios`
--

INSERT INTO `testimonios` (`id`, `nombre`, `descripcion`, `imagen`) VALUES
(1, 'Bryan Alvarado', 'La experiencia que he tenido con el audÃ­fono que adquirÃ­ con ustedes ha sido bastante buena, siento que a diferencia de otros audÃ­fonos que habÃ­a usado y probado este  que adquirÃ­  (Widex mOMENT 440). Si me ha ayudado a pesar de que mi pÃ©rdida auditiva es bastante grande, ya que solo escucho con un oÃ­do el otro lo perdÃ­ debido a padecimiento de Neurofibromatosis, este audÃ­fono me ha  podido ayudar a mejorar la audicion del oido con el que escucho en el cual tambiÃ©n tengo una pÃ©rdida auditiva y siento que ha mejorado mi calidad de vida por lo que me siento bastante satisfecho de haberlo adquirido, la atenciÃ³n que he recibido en la ClÃ­nica de San RamÃ³n tambiÃ©n ha sido muy muy buena, no tengo queja alguna y mÃ¡s bien recomiendo la clÃ­nica para quienes buscan ayuda auditiva', '1DiseÃ±o sin tÃ­tulo (10).jpg'),
(2, 'Carlos Chavarria', 'Estamos muy satisfechos con el servicio que le han brindado a mi mamÃ¡. Muy buena atenciÃ³n Â¡Super recomendada!', '2DiseÃ±o sin tÃ­tulo (10).jpg'),
(8, 'Mary Paz', 'Soy madre de una niÃ±a con hipoacusia severa bilateral, desde el primer contacto que tuvo mi hija con su prÃ³tesis auditiva, la experiencia fue maravillosa el su rostro feliz me llenÃ³ el corazÃ³n. Le comente a una servidora de la ClÃ­nica Dinamarca la gran experiencia que tuve con ella, cuando al salir de la clÃ­nica su primera expresiÃ³n fue \'\'Mami escucho la lluvia\'\' algo tan insignificante y cotidiano para cualquier persona para ella era algo nuevo, mi corazÃ³n y mi alma explotaban de felicidad ya son varios aÃ±os optando por elegir esta gran empresa. Siempre con un trato tan ameno y agradable cada vez que necesitamos algo.\r\nAgradezco mucho la colaboraciÃ³n de la Audiologa Francella, ella siempre ha estado ahÃ­ para nosotras. Gracias ClÃ­nica Dinamarca', 'DiseÃ±o sin tÃ­tulo (10).jpg'),
(9, 'Cristian', 'Hasta el dÃ­a de hoy la atenciÃ³n ha sido muy amable y con gran profesionalismo. Aclaran las dudas cuando se tienen y se les realiza la consulta pertinente. Los artÃ­culo adquiridos son de gran calidad y satisfacen las necesidades que se tienen como paciente.', 'DiseÃ±o sin tÃ­tulo (10).jpg'),
(10, 'Vicente Cantero Valverde', 'Soy paciente  ClÃ­nica Dinamarca Los Yoses. He recibido una exquisita y clara atenciÃ³n profesional. Los distingue tambiÃ©n la seÃ±ora AudiÃ³loga MarÃ­a Isabel GutiÃ©rrez Campos quien me ha atendido desde el primer dÃ­a con un trato muy especial; con mucha paciencia personal y profesional. Todo lo referente y relacionado con su profesiÃ³n lo explica detalladamente, aclarando toda duda; haciendo con ello que el paciente adquiera no solo una clara informaciÃ³n si no mÃ¡s que felicitarlos y decirles gracias a la empresa y a la AudiÃ³loga MarÃ­a Isabel GutiÃ©rrez Campos. Estoy seguro que todos los paciente de ClÃ­nica DInamarca opinan igual que yo.', 'DiseÃ±o sin tÃ­tulo (10).jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(80) NOT NULL,
  `usuario` varchar(80) NOT NULL,
  `contrasena` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `contrasena`) VALUES
(1, 'Administrador', 'admin', 'b9aca165bb33259dcb6048942b96e56b'),
(2, 'Pruebas', 'adm', 'b9aca165bb33259dcb6048942b96e56b');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `video` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `videos`
--

INSERT INTO `videos` (`id`, `titulo`, `video`) VALUES
(24, 'QuÃ© es una AudiometrÃ­a ClÃ­nica?', 'opbwaohtrJA'),
(27, 'QuÃ© es una clÃ­nica?', 'opbwaohtrJA'),
(28, 'Â¿Por quÃ© es importante cuidar mi audiciÃ³n ante la exposiciÃ³n a ruido?', 'm0iUs7Khmsc');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `caracteristicas_producto`
--
ALTER TABLE `caracteristicas_producto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `convenios`
--
ALTER TABLE `convenios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `costumers`
--
ALTER TABLE `costumers`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `descargables`
--
ALTER TABLE `descargables`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `galerias`
--
ALTER TABLE `galerias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_galeria` (`idGaleria`) USING BTREE;

--
-- Indices de la tabla `imagenesservicios`
--
ALTER TABLE `imagenesservicios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_product` (`idProduct`);

--
-- Indices de la tabla `mapa`
--
ALTER TABLE `mapa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `prospectos`
--
ALTER TABLE `prospectos`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `quotes`
--
ALTER TABLE `quotes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `quotesvscostumers`
--
ALTER TABLE `quotesvscostumers`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `serviciosvsfeatures`
--
ALTER TABLE `serviciosvsfeatures`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_servicios` (`idServicio`) USING BTREE,
  ADD KEY `idx_feature` (`idFeature`) USING BTREE;

--
-- Indices de la tabla `serviciovsmapa`
--
ALTER TABLE `serviciovsmapa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `testimonios`
--
ALTER TABLE `testimonios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `convenios`
--
ALTER TABLE `convenios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `costumers`
--
ALTER TABLE `costumers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `descargables`
--
ALTER TABLE `descargables`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `equipos`
--
ALTER TABLE `equipos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `features`
--
ALTER TABLE `features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `galerias`
--
ALTER TABLE `galerias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `imagenesservicios`
--
ALTER TABLE `imagenesservicios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de la tabla `mapa`
--
ALTER TABLE `mapa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `prospectos`
--
ALTER TABLE `prospectos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `quotes`
--
ALTER TABLE `quotes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `quotesvscostumers`
--
ALTER TABLE `quotesvscostumers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;

--
-- AUTO_INCREMENT de la tabla `serviciosvsfeatures`
--
ALTER TABLE `serviciosvsfeatures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `serviciovsmapa`
--
ALTER TABLE `serviciovsmapa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=392;

--
-- AUTO_INCREMENT de la tabla `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `testimonios`
--
ALTER TABLE `testimonios`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD CONSTRAINT `imagenes_ibfk_1` FOREIGN KEY (`idGaleria`) REFERENCES `galerias` (`id`);

--
-- Filtros para la tabla `serviciosvsfeatures`
--
ALTER TABLE `serviciosvsfeatures`
  ADD CONSTRAINT `serviciosvsfeatures_ibfk_1` FOREIGN KEY (`idFeature`) REFERENCES `features` (`id`),
  ADD CONSTRAINT `serviciosvsfeatures_ibfk_2` FOREIGN KEY (`idServicio`) REFERENCES `servicios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

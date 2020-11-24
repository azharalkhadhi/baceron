/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.4.13-MariaDB : Database - db_baceron
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_baceron` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `db_baceron`;

/*Table structure for table `cerita` */

DROP TABLE IF EXISTS `cerita`;

CREATE TABLE `cerita` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `penulis` int(11) DEFAULT NULL,
  `id_kategori` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `penulis` (`penulis`),
  KEY `id_kategori` (`id_kategori`),
  CONSTRAINT `cerita_ibfk_2` FOREIGN KEY (`penulis`) REFERENCES `user` (`id_user`),
  CONSTRAINT `cerita_ibfk_3` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `cerita` */

insert  into `cerita`(`id`,`judul`,`isi`,`penulis`,`id_kategori`) values (2,'Senyumanmu','<p>\r\n  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, ullam rem velit quo hic veritatis ratione inventore odio excepturi, fugit voluptatibus nulla illo molestiae tempore. Enim dignissimos accusantium nemo odit!\r\n</p>\r\n\r\n<p>\r\n  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam quibusdam adipisci impedit ab accusamus cupiditate quasi debitis, qui quos harum, reprehenderit alias odit veniam similique nihil fugit quas esse! Sapiente perspiciatis at esse facilis tenetur velit! Repudiandae itaque architecto ratione!\r\n</p>\r\n\r\n<p>\r\n  Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, aspernatur!\r\n</p>\r\n<p>\r\n  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore ratione rerum sint provident nostrum laboriosam, eveniet earum amet dicta quidem, illum facere? Laboriosam, enim modi.\r\n</p>\r\n\r\n<p>\r\n  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias, atque modi ab itaque iure nostrum repudiandae doloremque et, ut excepturi fugit consequuntur ipsum. Odio, earum corporis distinctio, obcaecati dolor dolore odit praesentium deserunt nostrum maxime, reiciendis asperiores modi eligendi. Ipsum dolorem officiis repellendus! Ex quidem cum voluptate, fugit necessitatibus minus fuga! Delectus exercitationem numquam obcaecati eos culpa dolor sit rem sed soluta quisquam voluptatibus totam ducimus ea ut amet consectetur, magni est autem provident maxime quas explicabo saepe repudiandae. Nam, laboriosam veniam corporis culpa sequi eaque eveniet voluptas consequatur nemo quo tempore fugiat voluptatem. Minima, esse mollitia. Placeat quasi quam eligendi molestiae deleniti enim animi blanditiis facere, error dolorum esse incidunt velit, dolor officia qui quia sapiente. Expedita quaerat nobis tempora neque eveniet ratione quas animi eum vitae repudiandae! Laboriosam illo maiores quaerat fugit consequuntur excepturi mollitia eligendi. Adipisci cum quisquam qui possimus quod mollitia suscipit ullam voluptates sed optio, at alias illo incidunt eum, quas tempora quasi id tenetur! Numquam, rem illum? Autem accusamus inventore doloremque quasi eos, ad nihil facere incidunt sunt id, amet veniam quos delectus rem iusto quibusdam odio voluptas sapiente quaerat aperiam numquam saepe, pariatur deserunt. Doloremque laudantium architecto laboriosam. Velit eos cumque, deserunt, similique, repellendus iusto nostrum corrupti autem adipisci fugit dolorem hic aut! Inventore autem, nesciunt ullam quisquam vitae alias eaque incidunt, aliquam obcaecati cum nisi repellat nemo dolore illum fuga. Quibusdam nihil laborum veniam eius aliquam sunt nisi perspiciatis? Doloribus in blanditiis quaerat, fugit excepturi itaque iste iure aut eaque! Debitis, tempora.\r\n</p>',8,1),(11,'a','<p>a</p>',8,1),(12,'Ganti','<p>asdasdadad</p>',12,1);

/*Table structure for table `kategori` */

DROP TABLE IF EXISTS `kategori`;

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(100) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `kategori` */

insert  into `kategori`(`id_kategori`,`nama_kategori`) values (1,'Remaja'),(2,'Komedi');

/*Table structure for table `role` */

DROP TABLE IF EXISTS `role`;

CREATE TABLE `role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `role` */

insert  into `role`(`id`,`role`) values (1,'Admin'),(2,'Member');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `email` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id_role` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_user`),
  KEY `id_role` (`id_role`),
  CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `role` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`id_user`,`username`,`email`,`password`,`id_role`) values (6,'azhar','azhar@gmail.com','$2y$10$urzId4v84Vtuv3vy7agOn.N4YTQ5AWq3FEJA3WIyx2590ITECrEiu',1),(8,'Andika','andikapermanasi','$2y$10$UdSIAYH.RyWYvNqtL3YXwuXnJoqlI8MfBPII7blkrpDtXN0audUFi',2),(12,'andikaps','andikapermanasi','$2y$10$nNQTYJGg5.2ZwFcGA3tVxevbeng51zVv8iAHVuN3Q1MIsdZKZ4l7W',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

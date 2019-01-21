CREATE TABLE IF NOT EXISTS `tbl_users` (
  `user_id` int(50) NOT NULL,
  `user_email` varchar(60) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `p_name` varchar(25) NOT NULL,
  `s_name` varchar(25) NOT NULL,
  `apellidos` varchar(25) NOT NULL,
  `Birth_Date` date,
  PRIMARY KEY (`user_id`)
) ;


CREATE TABLE IF NOT EXISTS `RENDIMIENTO`(
  `rend_id` int(11) NOT NULL AUTO_INCREMENT,
    `user_id` int(50) NOT NULL,
    `fecha` date ,
    `indice` FLOAT(6,2) ,
    PRIMARY KEY (`rend_id`),
    FOREIGN KEY (`user_id`) REFERENCES `tbl_users`(`user_id`)
);

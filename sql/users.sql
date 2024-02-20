CREATE TABLE `users` (
  `Id` int(100) NOT NULL,
  `Username` varchar(200) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `Address` varchar(200) NOT NULL,
  `Phone` varchar(10) NOT NULL
)
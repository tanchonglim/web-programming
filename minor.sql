/*
Navicat MySQL Data Transfer

Source Server         : myconnection
Source Server Version : 100110
Source Host           : localhost:3306
Source Database       : minor

Target Server Type    : MYSQL
Target Server Version : 100110
File Encoding         : 65001

Date: 2020-04-15
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for order
-- ----------------------------
DROP TABLE IF EXISTS `order`;
CREATE TABLE `order` (
  `OID` int(11) NOT NULL AUTO_INCREMENT,
  `UID` int(11) DEFAULT NULL,
  `OrderID` varchar(255) DEFAULT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL,
  `zip` varchar(5) DEFAULT NULL,
  `message` text,
  `subtotal` double(255,2) DEFAULT NULL,
  `shipping` double(255,0) DEFAULT NULL,
  `total` double(255,2) DEFAULT NULL,
  `status` varchar(255) DEFAULT '',
  `time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`OID`),
  KEY `OrderBy` (`UID`),
  KEY `OrderID` (`OrderID`),
  CONSTRAINT `OrderBy` FOREIGN KEY (`UID`) REFERENCES `user` (`UID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of order
-- ----------------------------
INSERT INTO `order` VALUES ('52', '5', 'T00001', 'john', 'doe', '0123456789', 'demo@minorsales.xyz', 'my', '123, taman rose', 'skudai', 'Johor', '81310', 'ship asap ', '5697.78', '5', '5697.78', 'ready to ship', '2020-06-24 20:46:35');
INSERT INTO `order` VALUES ('53', '5', 'T00053', 'john', 'doe', '0199999999', 'demo@minorsales.xyz', 'my', '456, taman mutiara rini', 'skudai', 'Johor', '81310', '', '1331.99', '5', '1331.99', 'new order', '2020-06-24 20:45:05');
INSERT INTO `order` VALUES ('54', '5', 'T00054', 'john', 'doe', '0185858585', 'demo@minorsales.xyz', 'my', '888, taman durian', 'george town', 'Penang', '12345', '', '657.50', '5', '657.50', 'new order', '2020-06-24 20:46:23');

-- ----------------------------
-- Table structure for product
-- ----------------------------
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `ProductID` int(10) NOT NULL AUTO_INCREMENT,
  `ProductName` varchar(100) NOT NULL,
  `ProductCategory` varchar(50) NOT NULL,
  `ProductColor` varchar(50) NOT NULL,
  `ProductQuantity` int(10) NOT NULL DEFAULT '0',
  `ProductImg` longtext NOT NULL,
  `ProductImgType` varchar(25) NOT NULL DEFAULT '',
  `ProductPrice` float NOT NULL,
  `ProductDescription` varchar(5000) NOT NULL DEFAULT '',
  PRIMARY KEY (`ProductID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of product
-- ----------------------------
INSERT INTO `product` VALUES ('1', 'Foldable Rectangular Table', 'Table and Desk', 'WHITE', '20', 'foldable-rectangular-table-n-metal-leg.jpg', 'jpg', '131.5', 'vdfd');
INSERT INTO `product` VALUES ('2', 'Emmond Mid Century 42\" Round Dining Table', 'Table and Desk', 'WHITE', '10', 'GUEST_fa339f39-08f8-4412-bbe6-3c091748f717.jpg', 'jpg', '200', 'vdsf');
INSERT INTO `product` VALUES ('3', 'Set of 2 Nyomi Dining Chairs', 'Chair', 'BLUE', '50', 'GUEST_294ecc5d-4ed6-483b-b8d2-89b1e38cf421.jpg', 'jpg', '159.99', 'fsdfd');
INSERT INTO `product` VALUES ('4', 'Set of 2 Colette Dining Chairs ', 'Chair', 'LIGHT GREY', '100', 'GUEST_5da14052-153c-43c5-8eec-584793738a7b.jpg', 'jpg', '132.99', 'desc');
INSERT INTO `product` VALUES ('5', 'Carlton Sofa ', 'Sofa', 'DARK BLUE', '60', '353874.jpg', 'jpg', '19155', 'desc');
INSERT INTO `product` VALUES ('6', 'Celsa', 'Sofa', 'BLOSSOM PINK', '65', 'image48685.jpg', 'jpg', '1199', 'desc');
INSERT INTO `product` VALUES ('7', 'Spencer 5-Piece Queen Bedroom Set', 'Bed', 'DARK BROWN', '5', '63320061_BED1cc_18d832d8-ba04-4e12-bf5f-f8d66732b684_1400x.jpg', 'jpg', '1699.89', 'desc');
INSERT INTO `product` VALUES ('8', 'Sophie 5-Piece Queen Bedroom Set ', 'Bed', 'DARK BROWN', '20', 'vlg275yak7prlybzevat_3d2c1943-7970-479a-98cb-59cca2854f6f_1400x.jpg', 'jpg', '1099', 'asd');

-- ----------------------------
-- Table structure for productorder
-- ----------------------------
DROP TABLE IF EXISTS `productorder`;
CREATE TABLE `productorder` (
  `productorderID` int(11) NOT NULL AUTO_INCREMENT,
  `productID` int(11) DEFAULT NULL,
  `orderID` varchar(255) DEFAULT NULL,
  `quantity` int(10) DEFAULT NULL,
  PRIMARY KEY (`productorderID`),
  KEY `orederID` (`orderID`),
  KEY `productID` (`productID`),
  CONSTRAINT `orederID` FOREIGN KEY (`orderID`) REFERENCES `order` (`OrderID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `productID` FOREIGN KEY (`productID`) REFERENCES `product` (`ProductID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of productorder
-- ----------------------------
INSERT INTO `productorder` VALUES ('77', '7', 'T00001', '2');
INSERT INTO `productorder` VALUES ('78', '8', 'T00001', '1');
INSERT INTO `productorder` VALUES ('79', '6', 'T00001', '1');
INSERT INTO `productorder` VALUES ('80', '4', 'T00053', '1');
INSERT INTO `productorder` VALUES ('81', '6', 'T00053', '1');
INSERT INTO `productorder` VALUES ('82', '1', 'T00054', '5');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `UID` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  PRIMARY KEY (`UID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'admin@minorsales.xyz', 'admin', 'admin', 'minor');
INSERT INTO `user` VALUES ('2', 'alala@gmail.com', 'ad', 'masd', 'asd');
INSERT INTO `user` VALUES ('3', 'test@test.com', 'test2', 'asdsad', 'asdsad');
INSERT INTO `user` VALUES ('4', 'test2@test.com', 'test2', 'test', 'test');
INSERT INTO `user` VALUES ('5', 'demo@minorsales.xyz', 'password', 'john', 'doe');

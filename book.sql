-- Table structure for Table 'admin'

CREATE TABLE IF NOT EXISTS `admin` (
    `AID` int(11) NOT NULL AUTO_INCREMENT,
    `ANAME` varchar(150) NOT NULL,
    `APASS` varchar(150) NOT NULL,
    PRIMARY KEY (`AID`)
)  ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;



-- Table structure for Table 'book'

CREATE TABLE IF NOT EXISTS `book` (
    `BID` int(11) NOT NULL AUTO_INCREMENT,
    `BTITLE` varchar(150) NOT NULL,
    `KEYWORDS` varchar(150) NOT NULL,
    `FILE` varchar(150) NOT NULL,
    PRIMARY KEY (`BID`)
)  ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;


-- Table structure for Table 'comment'

CREATE TABLE IF NOT EXISTS `comment` (
    `CID` int(11) NOT NULL AUTO_INCREMENT,
    `BID` int(11) NOT NULL,
    `SID` int(11) NOT NULL,
    `COMM` varchar(150) NOT NULL,
    `LOGS` date NOT NULL,
    PRIMARY KEY (`CID`)
)  ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;


-- Table structure for Table 'request'

CREATE TABLE IF NOT EXISTS `request` (
    `RID` int(11) NOT NULL AUTO_INCREMENT,
    `ID` int(11) NOT NULL,
    `MES` text NOT NULL,
    `LOGS` datetime NOT NULL,
    PRIMARY KEY (`RID`)
)  ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;


-- Table structure for Table 'student'

CREATE TABLE IF NOT EXISTS `student` (
    `ID` int(11) NOT NULL AUTO_INCREMENT,
    `NAME` varchar(150) NOT NULL,
    `PASS` varchar(150) NOT NULL,
    `MAIL` varchar(150) NOT NULL,
    `DEP` varchar(150) NOT NULL,
    PRIMARY KEY (`ID`)
)  ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;

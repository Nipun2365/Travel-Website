-- Create the ad_form table if it doesn't exist
CREATE TABLE IF NOT EXISTS `ad_form` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;

-- Insert some sample data into the ad_form table
INSERT INTO `ad_form` (`email`, `password`) VALUES
('admin@gmail.com', '1234');

-- Check if the ad_form table exists in the book_db database
SHOW TABLES FROM book_db;

-- Create the about table if it doesn't exist
DROP TABLE IF EXISTS `about`;
CREATE TABLE IF NOT EXISTS `about` (
  `id` int NOT NULL AUTO_INCREMENT,
  `description` varchar(50) NOT NULL,
  `image` BLOB NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO `about` (`description`, `image`) VALUES
('Welcome, Admin! This Dashboard Provides You With Tools To Manage Your Website Effectively.', 'about.png');


-- Create the discount table if it doesn't exist
DROP TABLE IF EXISTS `discount`;
CREATE TABLE IF NOT EXISTS `discount` (
  `id` int NOT NULL AUTO_INCREMENT,
  `description` varchar(50) NOT NULL,
  `presentage` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO `discount` (`description`, `presentage`) VALUES
('Welcome, Admin! This Dashboard Provides You With Tools To Manage Your Website Effectively.', 'UP TO 50%');



-- Create the home_package table if it doesn't exist
CREATE TABLE IF NOT EXISTS `home_package` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pk_name` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL,
  `img` BLOB NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Insert data into the home_package table
INSERT INTO `home_package` (`pk_name`, `description`, `img`) VALUES
('Adventure', 'Welcome, Admin! This Dashboard Provides You With Tools To Manage Your Website Effectively.', 'place8.png');

INSERT INTO `home_package` (`pk_name`, `description`, `img`) VALUES
('Adventure', 'Welcome, Admin! This Dashboard Provides You With Tools To Manage Your Website Effectively.', 'place9.png');

INSERT INTO `home_package` (`pk_name`, `description`, `img`) VALUES
('Adventure', 'Welcome, Admin! This Dashboard Provides You With Tools To Manage Your Website Effectively.', 'place11.png');

-- Create the packages table if it doesn't exist
CREATE TABLE IF NOT EXISTS `packages` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pk_name` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL,
  `img` BLOB NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Insert data into the packages table
INSERT INTO `packages` (`pk_name`, `description`, `img`) VALUES
('Adventure', 'Welcome, Admin! This Dashboard Provides You With Tools To Manage Your Website Effectively.', 'place1.png');

INSERT INTO `packages` (`pk_name`, `description`, `img`) VALUES
('Adventure', 'Welcome, Admin! This Dashboard Provides You With Tools To Manage Your Website Effectively.', 'place2.png');

INSERT INTO `packages` (`pk_name`, `description`, `img`) VALUES
('Adventure', 'Welcome, Admin! This Dashboard Provides You With Tools To Manage Your Website Effectively.', 'place3.png');

INSERT INTO `packages` (`pk_name`, `description`, `img`) VALUES
('Adventure', 'Welcome, Admin! This Dashboard Provides You With Tools To Manage Your Website Effectively.', 'place4.png');

INSERT INTO `packages` (`pk_name`, `description`, `img`) VALUES
('Adventure', 'Welcome, Admin! This Dashboard Provides You With Tools To Manage Your Website Effectively.', 'place5.png');

INSERT INTO `packages` (`pk_name`, `description`, `img`) VALUES
('Adventure', 'Welcome, Admin! This Dashboard Provides You With Tools To Manage Your Website Effectively.', 'place6.png');

-- Create the book_form table if it doesn't exist
CREATE TABLE IF NOT EXISTS `book_form` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL,
  `guests` varchar(200) NOT NULL,
  `arrivals` varchar(200) NOT NULL,
  `leaving` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO `book_form` (`name`, `email`, `phone`, `address`, `location`, `guests`, `arrivals`, `leaving`) VALUES
('nipun', 'nipunkanishka@gmail.com', '0740743369', 'pannala', 'pannala', '4', '2024-10-12', '2024-08-14');

CREATE TABLE IF NOT EXISTS `user_follow` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `follower` int(11) NOT NULL,
  `following` int(11) NOT NULL,
  `subscribed` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `follow_unique` (`follower`,`following`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 ;
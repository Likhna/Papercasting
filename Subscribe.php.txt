mysql_query(" INSERT INTO `user_follow` (`follower`, `following`, `subscribed`) VALUES ('$follower', '$following', CURRENT_TIMESTAMP); ");

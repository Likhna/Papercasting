<?php if (isset($_SESSION[user_id]) && $_SESSION[user_id] != $user_id) { ?>
<form action="" method="post">
<input name="action" type="hidden" value="<?php echo $subscribe_status; ?>"/>
<button name="subject" type="submit" value="<?php echo $subscribe_text.' '.$username; ?>"><?php echo $subscribe_text.' '.$username; ?></button>
</form>
$user_follow = dbquery(" SELECT * FROM `user_follow` WHERE `follower` = '$follower' AND `following` = '$following'; ");
$check_status = dbrows($user_follow);

$sub = false; 

if ( $check_status !== 0 ){
    $sub = true; 
}

if($sub){
     $subscribe_status = "follow";
     $subscribe_text = "Follow";
}

else{
     $subscribe_status = "unfollow";
     $subscribe_text = "Unfollow";
}
?>

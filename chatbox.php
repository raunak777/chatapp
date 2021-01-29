<?php
if(!isset($_SESSION)) 
{ 
	session_start(); 
}
if (!isset($_SESSION['username'])) {
	header("Location: login.php");
}

include_once 'Conversation.php';
$msg = new Conversation();
$data = $msg->allusers($_SESSION['user_id']);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Chat</title>
	<?php include_once 'bootconfig.php'; ?>
</head>
<body>
	<div class="container">
		<div class="head">
		
	</div>
	</div>
	<div class="container-fluid h-100">
		<div class="row justify-content-center h-100">

			<div class="col-md-4 col-xl-3 chat"><div class="card mb-sm-3 mb-md-0 contacts_card">
				<h4 class="text-white ml-5">Hello! <?php echo $_SESSION['username']; ?></h4>
				<div class="card-header">
					<div class="input-group">
						<input type="text" placeholder="Search..." name="" class="form-control search">
						<div class="input-group-prepend">
							<span class="input-group-text search_btn"><i class="fas fa-search"></i></span>
						</div>
					</div>
				</div>
				<!-- contact list -->
				<div class="card-body contacts_body">
					<ul id="contact" class="contacts">
						<?php
						$html='';
						for ($i=0; $i <count($data) ; $i++) { 
						$html.= '<li class="active" data-cid='.$data[$i]["user_id"].'>
							<div class="d-flex bd-highlight">
								<div class="img_cont">
									<img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img">
									<span class="online_icon"></span>
								</div>
								<div class="user_info">
									<span>'. $data[$i]["user_name"] .'</span>
									<p>XYZ is online</p>
								</div>
							</div>
						</li>';
					}
					print_r($html);
						?>
					</ul>
				</div>

				<div class="card-footer"></div>
			</div></div>
			<!-- inbox msg -->
			<div class="col-md-8 col-xl-6 chat">
				<div class="card">
					<div class="card-header msg_head">
						<div class="d-flex bd-highlight">
							<div class="img_cont">
								<img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img">
								<span class="online_icon"></span>
							</div>
							<div class="user_info">
								<span>Chat with XYZ</span>
								<p>1767 Messages</p>
							</div>
							<div class="video_cam">
								<span><i class="fas fa-video"></i></span>
								<span><i class="fas fa-phone"></i></span>
							</div>
						</div>
						<span id="action_menu_btn"><i class="fas fa-ellipsis-v"></i></span>
						<div class="action_menu">
							<ul>
								<li><i class="fas fa-user-circle"></i> View profile</li>
								<li><i class="fas fa-users"></i> Add to close friends</li>
								<li><i class="fas fa-plus"></i> Add to group</li>
								<li><i class="fas fa-ban"></i> Block</li>
								<li><i class="fas fa-sign-out-alt"></i><a href="logout.php">Logout</a></li>
							</ul>
						</div>
					</div>

					<div class="card-body msg_card_body">
						<div class="d-flex justify-content-start mb-4">
							<div class="img_cont_msg">
								<img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img_msg">
							</div>
							<div class="msg_cotainer">
								I am good too, thank you for your chat template
								<span class="msg_time">9:00 AM, Today</span>
							</div>
						</div>
						<div class="d-flex justify-content-end mb-4">
							<div class="msg_cotainer_send">
								You are welcome
								<span class="msg_time_send">9:05 AM, Today</span>
							</div>
							<div class="img_cont_msg">
								<img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img_msg">
							</div>
						</div>
					</div>
					<div class="card-footer">
						<div class="input-group">
							<div class="input-group-append">
								<span class="input-group-text attach_btn"><i class="fas fa-paperclip"></i></span>
							</div>
							<textarea name="" class="form-control type_msg" placeholder="Type your message..."></textarea>
							<div class="input-group-append">
								<span class="input-group-text send_btn"><i class="fas fa-location-arrow"></i></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</body>
</html>
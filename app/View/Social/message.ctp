<div style='float: left; width: 74%;padding: 0px; height: 99%; overflow: none;'>
	
	<!-- ####### GOOGLE STREAM ######### -->
	<!-- ####### GOOGLE STREAM ######### -->
	<!-- ####### GOOGLE STREAM ######### -->		
	
	<div class='googleStream'>
			<div class='posts radius_3px'>
				<div class='user radius_3px'>
					<img class='radius_3px' src='./img/googleStream_user.jpg' alt='Darrel Farro'>
					<span id='userName'>Darrel Farro</span>
				</div> <!-- end class user -->
				<div class='features radius_3px'>
					<?php 
					echo $this->Form->input('post', 
						array('type' => 'post', 'id' => 'post',
						'placeholder' => "Share what's new", 'class' => 'radius_2px fz12', 
						'value' => '','rows' => '8', 'label' => false)); 	
					?>
					<input type='submit' name='btn_post' id='btn_post' value='Share' />
				</div> <!-- end class features -->
			</div> <!-- end class posts -->
			
			<?php for($i = 0; $i <= 10; $i++):?>
			<div class='stream'>
				<div class='user radius_3px'>
					<img class='radius_3px' src='./img/googleStream_user2.jpg'>
					<span id='userName'>Saki Webo</span>
				</div>	<!-- end class user -->
						
				<div class='features radius_3px'>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et mi et magna ultrices faucibus. 	
						Integer semper sodales tempus. Nulla dictum mollis justo, et interdum nisi interdum eget. Morbi
						adipiscing fermentum egestas.
					<p>
				</div>	<!-- end class features -->						
			</div> <!-- end class stream -->
			<?php endfor;?>
	</div> <!-- end class googleStream -->

	<!-- ####### SOCIAL COMMUNITY PICTURES ######### -->
	<!-- ####### SOCIAL COMMUNITY PICTURES ######### -->
	<!-- ####### SOCIAL COMMUNITY PICTURES ######### -->		

	<div class='socialCommunityPictures radius_3px'>
		
		<div style="padding: 5px; overflow:auto; white-space: nowrap">
			<img src="./img/social1.jpeg" alt="Social pictures" height="140px" >
			<img src="./img/social2.jpeg" alt="Social pictures" height="140px" >
			<img src="./img/social3.jpeg" alt="Social pictures" height="140px" >
			<img src="./img/social4.jpeg" alt="Social pictures" height="140px" >
			<img src="./img/social5.jpeg" alt="Social pictures" height="140px" >
			<img src="./img/social6.jpeg" alt="Social pictures" height="140px" >
			<img src="./img/social7.jpeg" alt="Social pictures" height="140px" >
			
		</div>

	</div> <!-- end class socialCommunityPictures -->


	<!-- ####### CALENDAR and GOOGLE MAP ######### -->
	<!-- ####### CALENDAR and GOOGLE MAP ######### -->
	<!-- ####### CALENDAR and GOOGLE MAP ######### -->		

	<div class='radius_3px' style="float: right; width: 58%; padding:0px; height: 220px; margin-left: -10px; border: 1px solid #C4C4C4;">

		<div class='radius_3px' style="float: left; width: 48%%; height:100%;">
			<img src="./img/Calendar_activity_view.png" alt="Calendar View" width="100%" height="100%" >
		</div>		
		<div class='radius_3px' style="float: right; width: 49%; height:100%; ;margin-left:5px;">
			<?php echo $this->GoogleMap->map($map_options); ?>
		</div>
		
	</div>
	
	<!-- ####### MARKTPLAATS service Exchange ######### -->
	<!-- ####### MARKTPLAATS service Exchange ######### -->
	<!-- ####### MARKTPLAATS service Exchange ######### -->		
		
	<div class='socialMarktplaatsServiceExchange radius_3px'>
				<div style="padding: 2px; overflow:auto; white-space: nowrap">
					<img src="./img/tiles1.png" alt="Social market Tiles" height="100%">
					<img src="./img/tiles2.png" alt="Social market Tiles" height="100%">
					<img src="./img/tiles3.png" alt="Social market Tiles" height="100%">
					<img src="./img/tiles4.png" alt="Social market Tiles" height="100%">
					<img src="./img/tiles5.png" alt="Social market Tiles" height="100%">
					<img src="./img/tiles1.png" alt="Social market Tiles" height="100%">
					<img src="./img/tiles2.png" alt="Social market Tiles" height="100%">
					<img src="./img/tiles3.png" alt="Social market Tiles" height="100%">
					<img src="./img/tiles4.png" alt="Social market Tiles" height="100%">
					<img src="./img/tiles5.png" alt="Social market Tiles" height="100%">
				</div>
	</div><!-- end class socialMarktplaatsServiceExchange -->
</div>



<div class='socialCommunity_container radius_3px'>

	<h2>Our community </h2>

	<ul id='socialCommunityMembers'>
		<?php for($i = 0; $i <= 25; $i++):?>
		<li>
			<img src='./img/user.png' alt='' />
			Darrel K. Farro
		</li>
		<li>
			<img src='./img/user.png' alt='' />
			Ivan Zaytzev
		</li>
		<li>
			<img src='./img/user.png' alt='' />
			Floor Vermeer
		</li>
		<?php endfor; ?>
	</ul>

</div>

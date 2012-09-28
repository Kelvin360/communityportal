<div style='float: left; width: 74%;padding: 0px; height: 600px; overflow: none;'>
	
	<!-- ####### GOOGLE STREAM ######### -->
	<!-- ####### GOOGLE STREAM ######### -->
	<!-- ####### GOOGLE STREAM ######### -->		
	
	<div class='googleStream'>
			<div class='posts radius_3px'>
				<div class='user radius_3px'>
					<img class='radius_3px' src='./img/googleStream_user.jpg' alt='Darrel Farro'>
					<span id='userName'>Darrel Farro</span>
				</div>
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
				</div>	
						
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

	<div class='socialCommunityPictures'>
		
	</div> <!-- end class socialCommunityPictures -->

	<!-- ####### CALENDAR and GOOGLE MAP ######### -->
	<!-- ####### CALENDAR and GOOGLE MAP ######### -->
	<!-- ####### CALENDAR and GOOGLE MAP ######### -->		

	<div style="float: right; width: 58%; padding:0px; height: 220px; margin-left: 5px; margin-top: 5px;">
		<div style="float: left; width: 48%%; height:100%; border: 1px dotted #CCC;">
			<img src="./img/Calendar_activity_view.png" alt="Calendar View" width="100%" height="100%" >
		</div>		
		<div style="float: right; width: 49%; height:100%; ;margin-left:5px; border: 1px dotted #CCC;">
			<?php echo $this->GoogleMap->map($map_options); ?>
		</div>
	</div>
	
	<!-- ####### MARKTPLAATS service Exchange ######### -->
	<!-- ####### MARKTPLAATS service Exchange ######### -->
	<!-- ####### MARKTPLAATS service Exchange ######### -->		
		
	<div class='socialMarktplaatsServiceExchange'>
		<p>
			Marktplaats &amp; Service Exchange
		</p>
	</div>
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

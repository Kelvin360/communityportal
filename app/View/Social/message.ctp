<div style='float: left; width: 74%;padding: 0px; height: 600px; overflow: none;'>
	<div class='googleStream'>
			<div class='posts radius_3px'>
				<div class='user radius_3px'>
					<img class='radius_3px' src='./img/googleStream_user.jpg'>
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

	<div style="float: right; width: 58%; height:150px; margin-left:5px; border: 1px dotted #CCC;">

		<p>
			Community pictures
		</p>
	</div>

	<div style="float: right; width: 58%; padding:0px; height: 220px; margin-left: 5px; margin-top: 5px;">

		<div style="float: left; width: 48%%; height:100%; border: 1px dotted #CCC;">

			<p>
				Calendar
			</p>
		</div>
		<div style="float: right; width: 49%; height:100%; ;margin-left:5px; border: 1px dotted #CCC;">

			<p>
				<?php echo $this->GoogleMap->map($map_options); ?>
			</p>
		</div>
	</div>
	<div style="float: right; width: 58%; height:220px; margin-top:5px; margin-left: 5px; border: 1px dotted #CCC;">

		<p>
			Marktplaats &amp; Service Exchange
		</p>
	</div>
</div>





<div style='float: right; width: 25%; height:600px; overflow: auto; border: 1px dotted #CCC;'>
	<h1 = >Our community </h1>

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

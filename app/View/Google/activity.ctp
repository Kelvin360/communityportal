<div style='height: 49%; margin-bottom: 10px;'>

	<div style='float: left; width: 70%; height: 100%;  overflow: none;'>
		<div class='activity_description'>
			<h2>Description</h2>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eu justo pharetra quam tincidunt egestas id ut
				nulla. Nam iaculis
	pharetra hendrerit. Proin sollicitudin cursus quam, volutpat rhoncus nibh tincidunt eget. Pellentesque aliquam quam
		eu augue laoreet nec interdum ipsum tempor. Etiam congue lacinia neque, ac volutpat tortor mollis egestas. Nullam
		diam tellus, fringilla ut ornare quis, aliquam a nibh. Nam consequat laoreet laoreet. Sed imperdiet pharetra diam,
		malesuada varius arcu aliquam at. Aenean in tempor libero. In scelerisque euismod ligula, ac venenatis eros convallis
		quis. Sed quis sapien sed massa facilisis ornare at at neque. Sed nec ipsum id ligula venenatis vulputate non vitae
		diam. Nullam vitae sagittis ipsum.
			</p>
			
			PRICE: &euro; 32 p/p
		</div>
	</div>

	<div style='float: right; width: 29%; height: 100%; overflow-y: none;'>
		<img src='./img/grid_photo.png' class='radius_3px' width='292px' height='272px' alt='' />
	</div>

</div>





<div style='height: 49%;'>

	<div style='float: left; width: 23%; height: 100%; overflow: auto;'>
		<form id='googlemap' method='post' action='#'>
		<?php 
		echo $this->Form->input('map_from', array('id' => 'map_from', 'placeholder' => 'From', 'class' => 'fz20', 'type' => 'text',
				'value' => $from, 'label' => false, 'div' => false));
		echo $this->Form->input('map_to', array('id' => 'map_to', 'placeholder' => 'To', 'class' => 'fz20', 'type' => 'text',
				'value' => $to, 'label' => false, 'div' => false));
		?>
		</form>
		<div id='directions' class='directions'></div>
	</div>



	<div style='float: right; width: 75%; height: 100%; overflow-y: auto;'>
		<?php 
			if(trim(empty($from)) && trim(empty($to)))
			{
				echo $this->GoogleMap->map($map_options);
			}
			else
			{
				echo $this->GoogleMap->map($map_options);
				echo $this->GoogleMap->getDirections('map_canvas', "directions1", array("from" => $from, "to" => $to), $directions_options);
				echo $this->GoogleMap->addMarker("map_canvas", 1, "Koestraat Amsterdam", $marker_options);
				echo $this->GoogleMap->addMarker("map_canvas", 3, "Amsterdams Historisch Museum", $marker_options);
				echo $this->GoogleMap->addMarker("map_canvas", 4, "Agnietenkapel Amsterdam", $marker_options);
				echo $this->GoogleMap->addMarker("map_canvas", 5, "Stayokay Amsterdam Stadsdoelen Amsterdam", $marker_options);
				echo $this->GoogleMap->addMarker("map_canvas", 6, "Radisson Blu Hotel Amsterdam", $marker_options);
				echo $this->GoogleMap->addMarker("map_canvas", 7, "Amsterdam American", $marker_options);				
			}
		?>
	</div>
	
</div>

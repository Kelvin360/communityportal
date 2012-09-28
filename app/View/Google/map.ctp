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
				echo $this->GoogleMap->addMarker("map_canvas", 1, "Princetonlaan Utrecht", $marker_options); 
		}
		else
		{
			echo $this->GoogleMap->map($map_options);
			echo $this->GoogleMap->getDirections('map_canvas', "directions1", array("from" => $from, "to" => $to), $directions_options);
		}
	?>
</div>

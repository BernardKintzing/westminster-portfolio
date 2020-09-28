<?php
require __DIR__ . '/../vendor/autoload.php';


/**
 * Returns an authorized API client.
 * @return Google_Client the authorized client object
 */
function getClient()
{
    putenv('GOOGLE_APPLICATION_CREDENTIALS=/srv/http/wordpress/wp-content/themes/UHLC/template-parts/creds.json');
    $client = new Google_Client();
    $client->useApplicationDefaultCredentials();
    $client->setScopes(Google_Service_Calendar::CALENDAR_READONLY);

    return $client;
}

function numToMonth($start_month){

	$start_month_return = "";

	switch($start_month){
  		case "01":
			$start_month_return = "January";
			break; 
		case "02":
			$start_month_return = "February";
			break; 
		case "03":
			$start_month_return = "March";
			break; 
		case "04":
			$start_month_return = "April";
			break; 
		case "05":
			$start_month_return = "May";
			break; 
		case "06":
			$start_month_return = "June";
			break; 
		case "07":
			$start_month_return = "July";
			break; 
		case "08":
			$start_month_return = "August";
			break; 
		case "09":
			$start_month_return = "September";
			break; 
		case "010":
			$start_month_return = "October";
			break; 
		case "11":
			$start_month_return = "November";
			break; 
		case "12":
			$start_month_return = "December";
			break; 
	}
	return $start_month_return;
}


// Get the API client and construct the service object.
$client = getClient();
$service = new Google_Service_Calendar($client);

// Print the next 2 events on the user's calendar.
$calendarId = '462ovjk9ahr2l0rp0me0ruptjc@group.calendar.google.com';
$optParams = array(
  'maxResults' => 3,
  'orderBy' => 'startTime',
  'singleEvents' => true,
  'timeMin' => date('c'),
);
$results = $service->events->listEvents($calendarId, $optParams);
$events = $results->getItems();

if (empty($events)) {
    print "No upcoming events found.<br/>\n";
} else {
	$allEvents=array();
	
    foreach ($events as $event) {
		$start = $event->start->date;
		$end = $event->end->date;
		if(empty($start)){
			$start = explode("T",$event->start->dateTime)[0];
			$end = explode("T",$event->end->dateTime)[0];
		}
		list($start_year, $start_month, $start_day) = explode("-", $start);
		list($end_year, $end_month, $end_day) = explode("-", $end);

		$start_month = numToMonth($start_month);
		$end_month = numToMonth($end_month);

		$link = $event->description;
		if(empty($link)){
			$link = "";
		}

		$program = $event->summary;
		if(empty($program)){
			$program = "";
		}

		if($start_day==$end_day and $start_month==$end_month){
			array_push($allEvents,array("Date"=>"{$start_month} {$start_day}, {$start_year}", "Program"=>$program,"Link"=>$link));
	}
		else{
			array_push($allEvents,array("Date"=>"{$start_month} {$start_day} through {$end_month} {$end_day}, {$end_year}","Program"=>$program,"Link"=>$link));
	}

}
        
   
}
?>
<?php if(!empty($events)): ?>
<h2>Upcoming events</h2>
<table id="eventsTable">
  <thead>
    <tr>
      <th class="bold align-left"><?php echo implode('</th><th class="bold align-left">', array_keys(current($allEvents))); ?></th>
    </tr>
  </thead>
  <tbody>
<?php foreach ($allEvents as $row): array_map('htmlentities', $row); ?>
    <tr>
      <td><?php echo implode('</td><td>', $row); ?></td>
    </tr>
<?php endforeach; ?>
  </tbody>
</table>
<?php endif; ?>


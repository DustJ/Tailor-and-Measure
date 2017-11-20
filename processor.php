<?php
//The goal of this script is to build a zip file containing customized PDFs based on the user's input from the custom-structured-rehearsals form.
//We also include a survey, a print guide, and a spreadsheet for each user selected crucial moment in the zip file.

//load ZipStream class
require 'zipstream.php';

$product = $_POST['product']; 
$industry = $_POST['industry']; 
$crucialmoments = $_POST['crucial-moments'];

//for the server side zipping, the results need to be loaded into an array
$resultsarray = array();    

switch ($product) {
	case 'CrucialConversations':
		$productbasedlessons = array ('ExploreOthersPaths', 'MakeItSafeI', 'MakeItSafeII', 'STATE');
		break;
	case 'CrucialAccountability':
		$productbasedlessons = array ('DescribeTheGap', 'MakeItSafe', 'MakeItMotivating', 'MakeItEasy');
		break;	
	case 'CrucialConversations1Day':
		$productbasedlessons = array ('ExploreOthersPaths', 'MakeItSafeII', 'STATE');
		break;
	case 'CrucialAccountability1Day':
		$productbasedlessons = array ('DescribeTheGap', 'MakeItMotivating', 'MakeItEasy');
		break;		
}

//Random URL swapped in for $basepath before posting to Github
$basepath = 'https://somecdn.com/xyz/';

//filenames were too long with CrucialAccountability, so rename to CC2.
//also remove '…1day' suffix. It's only needed for picking the correct lesson count
if($product == 'CrucialAccountability1Day' || $product == 'CrucialAccountability') {
	$product = 'CC2';
}

//build the array of files to include in the zip file
	
//include a print guide and a spreadsheet with every zip file
$resultsarray[] = ('1-License.rtf');
$resultsarray[] = ('2-Deliberate-Practice-Instructions.pdf');
$resultsarray[] = ('3-Measurement-Instructions.pdf');
$resultsarray[] = ('4-Measurement-Results-Generator.xlsx');

//loop for every crucial moment selected (as of [dates removed before posting to Github] four crucial moments is the minimum requirement and should be validated on the form. Safety check below.)

//incase form validation fails, running a safety check here
if($crucialmoments){
	foreach ($crucialmoments as $cmoment){	
			
		//all lessons are required in every set
		foreach ($productbasedlessons as $lesson){
						
			//fill the array with user-selected crucial moments
			$resultsarray[] = ($product.'-'.$industry.'-'.$lesson.'-'.$cmoment.'.pdf');
		}	
	}
}

else{
	//error state if the client-side validation fails
	echo ('<h1 style="background-color: #440000; color: #fff;">No crucial moments selected</h1>');
	exit; 
}

/*==========================================================
  create the zip file ======================================
========================================================== */

$zip = new ZipStream('XYZ.zip'); //Random filename swapped in before posting to Github

	foreach ($resultsarray as $file) {
	  // build absolute path and get file data
	  $data = file_get_contents($basepath.$file);

	  // add file to archive
	  $zip->add_file($file, $data);
	};


// finish archive
$zip->finish();

?>
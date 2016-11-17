# Example 1

## Instructions

Load all required files for the BART in the head of the page:

<script type="text/javascript" src="src/jquery-3.0.0.min.js"></script>	<!-- basic javascript library for dom manipulation -->
<script type="text/javascript" src="src/jcanvas.min.js"></script>      	<!-- the canvas plugin -->
<script type="text/javascript" src="src/jquery.bart.js"></script>       <!-- the main BART plugin -->
<link rel="stylesheet" type="text/css" href="src/jquery.bart.css" />    <!-- additional styles for to make the BART look fancy -->
Create an element in the body of the page with a unique id-attribute (here: "bart"):
<div id="bart"></div>
Create a script section in the head of the page:

<script type="text/javascript">
</script>
Initialize the BART script after the page has loaded:

<script type="text/javascript">
	$(document).ready(function() {   // initialize the BART after the page has loaded
	});
</script>
Define the BART (e.g., number and color of balloons) using the id defined in step 2 (see head of src/jquery.bart.js for configuration options):

<script type="text/javascript">
	$(document).ready(function() {   // initialize the BART after the page has loaded
		$("#bart").bart( 10 );   // create a BART with default values using 10 balloons
	});
</script>
If only a single number is passed to the bart()-function, the number indicates the number of balloons.

====

# Example 2

## Instructions

Load all required files for the BART in the head of the page:

<script type="text/javascript" src="src/jquery-3.0.0.min.js"></script>	<!-- basic javascript library for dom manipulation -->
<script type="text/javascript" src="src/jcanvas.min.js"></script>      	<!-- the canvas plugin -->
<script type="text/javascript" src="src/jquery.bart.js"></script>       <!-- the main BART plugin -->
<link rel="stylesheet" type="text/css" href="src/jquery.bart.css" />    <!-- additional styles for to make the BART look fancy -->
Create an element in the body of the page with a unique id-attribute (here: "bart"):
<div id="bart"></div>
Create a script section in the head of the page:

<script type="text/javascript">
</script>
Initialize the BART script after the page has loaded:

<script type="text/javascript">
	$(document).ready(function() {   // initialize the BART after the page has loaded
	});
</script>
Define the BART (e.g., number and color of balloons) using the id defined in step 2 (see head of src/jquery.bart.js for configuration options):

<script type="text/javascript">
	$(document).ready(function() {   // initialize the BART after the page has loaded
		$("#bart").bart( { b: 5,                    // create 5 balloons
				   o: { color: '#00FF00',   // color of balloons
			                earnings: 1,        // points earned for each pump
			                popprob: 100        // probability of popping; defined as 1 out of popprop
				      }
			         } );
	});
</script>
If an object with two elements named b and o is passed to the bart()-function, element b refers to the balloons (a single number indicates the number of balloons), whereas element o defines various settings for all balloons. The element color of o sets the color of the balloons (as hexcode), earnings sets the number of points received for each pump, and popprob sets the probability for an explosion at the first pump as 1 / popprob (e.g., popprob: 100 gives a probability of 1 / 100 = 0.001 = 1%).

====

# Example 3

## Instructions

Load all required files for the BART in the head of the page:

<script type="text/javascript" src="src/jquery-3.0.0.min.js"></script>	<!-- basic javascript library for dom manipulation -->
<script type="text/javascript" src="src/jcanvas.min.js"></script>      	<!-- the canvas plugin -->
<script type="text/javascript" src="src/jquery.bart.js"></script>       <!-- the main BART plugin -->
<link rel="stylesheet" type="text/css" href="src/jquery.bart.css" />    <!-- additional styles for to make the BART look fancy -->
Create an element in the body of the page with a unique id-attribute (here: "bart"):
<div id="bart"></div>
Create a script section in the head of the page:

<script type="text/javascript">
</script>
Initialize the BART script after the page has loaded:

<script type="text/javascript">
	$(document).ready(function() {   // initialize the BART after the page has loaded
	});
</script>
Define the BART (e.g., number and color of balloons) using the id defined in step 2 (see head of src/jquery.bart.js for configuration options):

<script type="text/javascript">
	// create a BART with 3 blue and 4 red balloons balloons using the default settings
	$("#bart").bart( { b: [ { b: 3, o: { color: '#000000' } },
				{ b: 4, o: { color: '#00FF00' } }
			      ]
			 } );
	});
</script>
If an object with an element named b is passed to the bart()-function and the element b is an array, different types of balloons can be created. Each element of the array is itself an object with two elements b and o referring to the number of balloons and their settings (see Example 2).

====

# Example 4

## Instructions

Load all required files for the BART in the head of the page:

<script type="text/javascript" src="src/jquery-3.0.0.min.js"></script>	<!-- basic javascript library for dom manipulation -->
<script type="text/javascript" src="src/jcanvas.min.js"></script>      	<!-- the canvas plugin -->
<script type="text/javascript" src="src/jquery.bart.js"></script>       <!-- the main BART plugin -->
<link rel="stylesheet" type="text/css" href="src/jquery.bart.css" />    <!-- additional styles for to make the BART look fancy -->
Create an element in the body of the page with a unique id-attribute (here: "bart"):
<div id="bart"></div>
Create a script section in the head of the page:

<script type="text/javascript">
</script>
Initialize the BART script after the page has loaded:

<script type="text/javascript">
	$(document).ready(function() {   // initialize the BART after the page has loaded
	});
</script>
Define the BART (e.g., number and color of balloons) using the id defined in step 2 (see head of src/jquery.bart.js for configuration options):

<script type="text/javascript">
	$(document).ready(function() {   // initialize the BART after the page has loaded
		// create a BART with 5 balloons
		$("#bart").bart( { b: 5,                    // create 5 balloons
				   o: { color: '#FF7B00',   // color of balloons
					earnings: 10,       // points earned for each pump
					popprob: 100        // probability of popping; defined as 1 out of popprop
				      },
				   s: { bgcol: ' #FFF2E6',  // background color
					sounds: true,       // use sounds
					sndpath: 'sounds/', // path to sound files
					randomize: true,    // randomize the presentation order of the balloons (useful for Example 3)
					earned: 100         // initial number of points
				      }
				  } );
	});
</script>
If an object including an element s is passed to the bart()-function, element s specifies global settings for the test. For example, bgcol sets the background color of the test and earned specifies the number of initial points earned.

====

# Example 5

## Instructions

Load all required files for the BART in the head of the page:

<script type="text/javascript" src="src/jquery-3.0.0.min.js"></script>	<!-- basic javascript library for dom manipulation -->
<script type="text/javascript" src="src/jcanvas.min.js"></script>      	<!-- the canvas plugin -->
<script type="text/javascript" src="src/jquery.bart.js"></script>       <!-- the main BART plugin -->
<link rel="stylesheet" type="text/css" href="src/jquery.bart.css" />    <!-- additional styles for to make the BART look fancy -->
Create an element in the body of the page with a unique id-attribute (here: "bart"):
<div id="bart"></div>
Create a script section in the head of the page:

<script type="text/javascript">
</script>
Initialize the BART script after the page has loaded:

<script type="text/javascript">
	$(document).ready(function() {   // initialize the BART after the page has loaded
	});
</script>
Define the BART (e.g., number and color of balloons) using the id defined in step 2 (see head of src/jquery.bart.js for configuration options):

<script type="text/javascript">
	$(document).ready(function() {   // initialize the BART after the page has loaded
		// create a BART with 5 balloons
		$("#bart").bart( { b: 5,                    // create 5 balloons
				   o: { color: '#FF7B00',   // color of balloons
					earnings: 10,       // points earned for each pump
					popprob: 100        // probability of popping; defined as 1 out of popprop
				      },
				   s: { showpumpcount: true,                             // show number of pumps 
  				        showballooncount:  true,                         // show number of balloons
				        showcurrentearned: true,                         // show potential earnings
					showtotalearned: true,                           // show total earnings
					showpopprob: true,                               // show probability of explosion
					showpumpsused: false,                            // show percentage of pumps used
					txt_cashin: '$$ Cash in $$',                     // text on 'Cash in' button
					txt_inflate: 'Inflate balloon',                  // text on 'Inflate' button
					txt_next:    'Next balloon',                     // text on 'Next' button
					txt_balloon_number: 'Balloon number: ',          // text for balloon number
					txt_number_of_pumps: 'Number of pumps: ',        // text for number of pumps
					txt_current_earned: 'Current earned: ',          // text for current earnings
					txt_total_earned: 'Total earned: ',              // text for total earnings
					txt_prob_explosion: 'Probability of explosion:', // text for probability of explosion
					txt_pumps_used: 'Max. available pumps used:'     // text for percentage of used pumps
				      }
				  } );
	});
</script>
The element s can also be used to specify the information displayed on the test.

====

# Example 6

## Instructions

Load all required files for the BART in the head of the page:

<script type="text/javascript" src="src/jquery-3.0.0.min.js"></script>	<!-- basic javascript library for dom manipulation -->
<script type="text/javascript" src="src/jcanvas.min.js"></script>      	<!-- the canvas plugin -->
<script type="text/javascript" src="src/jquery.bart.js"></script>       <!-- the main BART plugin -->
<link rel="stylesheet" type="text/css" href="src/jquery.bart.css" />    <!-- additional styles for to make the BART look fancy -->
Create an element in the body of the page with a unique id-attribute (here: "bart"):
<div id="bart"></div>
Create a script section in the head of the page:

<script type="text/javascript">
</script>
Initialize the BART script after the page has loaded:

<script type="text/javascript">
	$(document).ready(function() {   // initialize the BART after the page has loaded
	});
</script>
Define the BART (e.g., number and color of balloons) using the id defined in step 2 (see head of src/jquery.bart.js for configuration options):

<script type="text/javascript">
	$(document).ready(function() {   // initialize the BART after the page has loaded
		// create a BART with 5 balloons
		$("#bart").bart( { b: 5,                       // create 5 balloons
				   o: { color: 'green',        // color of balloons
					earnings: 1,           // points earned for each pump
					popprob: 10,           // probability of popping; defined as 1 out of popprop
					onexplode: myexplode   // user-defined function invoked after an explosion
				       },
				    s: { frmids_pumps: ['pump1', 'pump2', 'pump3', 'pump4', 'pump5'],    // IDs for hidden form elements used to save the number of pumps for a given balloon
					 frmids_exploded: ['expl1', 'expl2', 'expl3', 'expl4', 'expl5'], // IDs for hidden form elements used to save whether a balloon exploded
					 onload: myload,         // user-defined function invoked after starting the BART
					 onend:  myend           // user-defined function invoked after finishing the BART
					}
				  } );
	});
</script>
There are several hooks to define your own functions that are invoked after starting the test (onload), after finishing the test (onend), after displaying a balloon (onstart), after inflating an balloon (oninflate), and after an explosion (onexplode). Here the function myexplode is run each time a balloon explodes:

		// user-defined function invoked after an explosion
		var myexplode = function() { alert('BOOM! Better luck next time!'); }
The function myload is run one time right after the BART has been loaded and the user can start the test:

		// user-defined function invoked when starting the BART
		var myload = function() {  alert('Good luck!'); }
The function myend is run one time right after finishing the BART. Here the number of points are calculated based on the data saved to the hidden form elements:

		// user-defined function invoked after finishing the BART
		var myend = function() {
			var points = 0;
			for(var i = 1; i <= 5; i++) { // run over all balloons
				if(Number($('#expl' + i).attr('value')) == 0) {
					points = points + Number($('#pump' + i).attr('value')) // get information saved to the hidden form element
				}
			}
			alert('You achieved ' + points + ' points.');
		}
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Mir Riyanul Islam</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="Personal Website" name="description" />
	<meta content="Mir Riyanul Islam" name="author" />
	<link href="style.css" rel="stylesheet" type="text/css"/>
    <!--<link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Architects+Daughter|Open+Sans|Orbitron|Play|Roboto|Sacramento|Sansita" rel="stylesheet">-->
    <script type="text/javascript" src="script.js"></script>
    <script type="text/javascript" src="jquery-1.10.1.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Abril+Fatface|Architects+Daughter|Open+Sans|Orbitron|Play|Roboto|Sacramento|Sansita');
    </style>
</head>
<body onload="init()">
    <div class="base">
        <div class="container" id="baseid" style="display: none;">
            <div class="header">
                <div class="heading">
                    Mir Riyanul Islam
                </div>
                <div class="navcontainer">
					<ul class="navtab" id="tabs">
						<li><a href="#home" class="tabbuttons selected">Home</a></li>
						<!-- <li><a href="#about" class="tabbuttons">About</a></li> -->
						<li><a href="#education" class="tabbuttons">Education</a></li>
						<li><a href="#work" class="tabbuttons">Work</a></li>
						<li><a href="#research" class="tabbuttons">Research</a></li>
						<li><a href="#contact" class="tabbuttons">Contact</a></li>
					</ul>
                </div>
            </div>
            <div class="contenttabs">
				<div class="tabcontent" id="home">
					<div class="twocolumns">
						<div class="col subcontent imagediv">
							<a class="imga" href="riyan.jpg" target="_blank"><img class="profileimage" src="riyan_bw.jpg"></a>
						</div>
						<div class="col subcontent introdiv">
							<h3>Hello I'm Riyan</h3>
							<p>
								I took teaching as my profession. I enjoy research works and practicing algorithmic problem solving.
							</p>
						</div>
					</div>
				</div>
				<!-- <div class="tabcontent hide" id="about">
					To be added soon .....
				</div> -->
				<div class="tabcontent hide" id="education">
					<div class="myList">
						<div class="myItem">
							<div class="myItemComp myItemDesc">
								<div class="degreePost">Master of Science in Computer Science (Intelligent Systems)</div>
								<div class="institution">American International University - Bangladesh, Dhaka, Bangladesh</div>
								<div class="timeSpan">February 2016</div>
								<div class="addition">CGPA: 3.96/4.00</div>
							</div>
							<div class="myItemComp myItemLogo">
								<a class="imgDegreePostA" href="http://www.aiub.edu" target="_blank"><img class="insLogo" src="aiub.png"></a>
							</div>
						</div>
						<div class="myItem">
							<div class="myItemComp myItemDesc">
								<div class="degreePost">Bachelor of Science in Computer Science &amp; Engineering</div>
								<div class="institution">American International University - Bangladesh, Dhaka, Bangladesh</div>
								<div class="timeSpan">February 2015</div>
								<div class="addition">CGPA: 3.95/4.00</div>
							</div>
							<div class="myItemComp myItemLogo">
								<a class="imgDegreePostA" href="http://www.aiub.edu" target="_blank"><img class="insLogo" src="aiub.png"></a>
							</div>
						</div>
						<div class="myItem">
							<div class="myItemComp myItemDesc">
								<div class="degreePost">Higher Secondary Certificate</div>
								<div class="institution">Rajshahi Cadet College, Rajshahi, Bangladesh</div>
								<div class="timeSpan">July 2009</div>
								<div class="addition">GPA: 5.00/5.00</div>
							</div>
							<div class="myItemComp myItemLogo">
								<a class="imgDegreePostA" href="http://rcc.army.mil.bd/" target="_blank"><img class="insLogo" src="rcc.png"></a>
							</div>
						</div>
						<div class="myItem">
							<div class="myItemComp myItemDesc">
								<div class="degreePost">Secondary School Certificate</div>
								<div class="institution">Rajshahi Cadet College, Rajshahi, Bangladesh</div>
								<div class="timeSpan">June 2007</div>
								<div class="addition">GPA: 5.00/5.00</div>
							</div>
							<div class="myItemComp myItemLogo">
								<a class="imgDegreePostA" href="http://rcc.army.mil.bd/" target="_blank"><img class="insLogo" src="rcc.png"></a>
							</div>
						</div>
					</div>
				</div>
				<div class="tabcontent hide" id="work">
					<div class="myList">
						<div class="myItem">
							<div class="myItemComp myItemDesc">
								<div class="degreePost">Lecturer</div>
								<div class="institution">American International University - Bangladesh</div>
								<div class="timeSpan">September 2015 - Present</div>
							</div>
							<div class="myItemComp myItemLogo">
								<a class="imgDegreePostA" href="http://www.aiub.edu" target="_blank"><img class="insLogo" src="aiub.png"></a>
							</div>
						</div>
						<div class="myItem">
							<div class="myItemComp myItemDesc">
								<div class="degreePost">Instructor</div>
								<div class="institution">American International University - Bangladesh</div>
								<div class="timeSpan">January 2015 - August 2015</div>
							</div>
							<div class="myItemComp myItemLogo">
								<a class="imgDegreePostA" href="http://www.aiub.edu" target="_blank"><img class="insLogo" src="aiub.png"></a>
							</div>
						</div>
						<div class="myItem">
							<div class="myItemComp myItemDesc">
								<div class="degreePost">Software Engineer</div>
								<div class="institution">inveitco Pvt. Ltd.</div>
								<div class="timeSpan">September 2014 - July 2015</div>
							</div>
							<div class="myItemComp myItemLogo">
								<a class="imgDegreePostA" href="http://www.inveitco.com/" target="_blank"><img class="insLogo" src="inveitco.png"></a>
							</div>
						</div>
						<div class="myItem">
							<div class="myItemComp myItemDesc">
								<div class="degreePost">Lecturer</div>
								<div class="institution">Bangladesh University</div>
								<div class="timeSpan">November 2014 - February 2015</div>
							</div>
							<div class="myItemComp myItemLogo">
								<a class="imgDegreePostA" href="http://www.bu.edu.bd/" target="_blank"><img class="insLogo" src="bu.jpg"></a>
							</div>
						</div>
					</div>
				</div>
				<div class="tabcontent hide" id="research">
					<div class="segments">
						<div class="researchType">
							<div class="typeHead">
								Conference Papers
							</div>
							<ul>
								<li class="research">
									Debajyoti Karmaker, <span class="authorMe">Mir Riyanul Islam</span>, Hafizur Rahman, Abhijit Bhowmik and Md. Nabid Imteaj. "<a class="paperTitleLink" href="https://www.researchgate.net/publication/279197897_A_Heuristic_Approach_to_Course_Scheduling_Problem" target="_blank">A Heuristic Approach to Course Scheduling Problem</a>" on The Second International Conference on Education Technologies and Computers (ICETC 2015) at University of the Thai Chamber of Commerce, Bangkok, Thailand, 2015.
								</li>
								<li class="research">
									<span class="authorMe">Mir Riyanul Islam</span>. "<a class="paperTitleLink" href="https://www.researchgate.net/publication/279197961_Numeric_Rating_of_Apps_on_Google_Play_Store_by_Sentiment_Analysis_on_User_Reviews" target="_blank">Numeric Rating of Apps on Google Play Store by Sentiment Analysis on User Reviews</a>" on 1st International Conference on Electrical Engineering and Information Communication Technology (ICEEICT 2014) at Military Institute of Science and Technology, Dhaka, Bangladesh, 2014.
								</li>
							</ul>
						</div>
						<div class="researchType">
							<div class="typeHead">
								Ongoing Research Works
							</div>
							<ul>
								<li class="research">
									<div class="authorMe">
										Quantifying Literature Mined Protein-Protein Interaction Reliability
									</div>
									Research works are being done to develop a system to provide reliable protein-protein interaction data to the domain specific researchers.
								</li>
								<li class="research">
									<div class="authorMe">
										A Lightweight Ontology for Medical Services in Bangladesh
									</div>
									The work is motivated to the design and development of Ontology containing information regarding the medical services in Bangladesh.
								</li>
								<li class="research">
									<div class="authorMe">
										OnTraNetBD: An Ontology for Travel Network in Bangladesh
									</div>
									Development of an expert system based on an Ontology for Travel Network in Bangladesh for supporting travelers to choose perfect travel places.
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="tabcontent hide" id="contact">
					<div class="contactDiv">
						<div class="oneContact">
							<span class="authorMe">
								Email:
							</span> riyan@aiub.edu, mirriyan41@gmail.com
						</div>
						<div class="oneContact">
							<span class="authorMe">
								Skype:
							</span> mir_riyan
						</div>
						<div class="oneContact">
							<span class="authorMe">
								Cell:
							</span> +880-1554-871933, +880-1751-566286
						</div>
					</div>
				</div>
            </div>
            <div class="footer">
				<div class="sociallinks">
					<table class="socialtable">
						<tr>
							<td><a class="footimga" target="_blank" href="https://www.facebook.com/mirriyan">
								<img class="socialimg" src="facebook_bw.png" onmouseover="this.src='facebook.png';" onmouseout="this.src='facebook_bw.png';" >
							</a></td>
							<td><a class="footimga" target="_blank" href="https://www.linkedin.com/in/mirriyan">
								<img class="socialimg" src="linkedin_bw.png" onmouseover="this.src='linkedin.png';" onmouseout="this.src='linkedin_bw.png';" >
							</a></td>
							<td><a class="footimga" target="_blank" href="https://www.twitter.com/Riyan41">
								<img class="socialimg" src="twitter_bw.png" onmouseover="this.src='twitter.png';" onmouseout="this.src='twitter_bw.png';" >
							</a></td>
							<td><a class="footimga" target="_blank" href="https://plus.google.com/+MirRiyan">
								<img class="socialimg" src="googleplus_bw.png" onmouseover="this.src='googleplus.png';" onmouseout="this.src='googleplus_bw.png';" >
							</a></td>
						</tr>
					</table>
				</div>
				<div class="footnote">
					2017 &copy; <span class="footname">Mir Riyanul Islam</span>
				</div>
            </div>
        </div>
    </div>
</body>
</html>

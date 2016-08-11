<?php
	$role = "businesses";
	
	if (isset($_GET['role'])) {
		$role = $_GET['role'];
		
		switch ($role) {
			case "businesses":
			case "university":
			case "agencies":
				break;
			default:
				header("Location: /?role=businesses");
		}
			
	}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>The Stanford Daily</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/buttons.css" rel="stylesheet" />
    <link href="css/simple-calendar.css" rel="stylesheet" />
    <style>
		h1{font-size: 30pt !important;}
		h4 strong{color: #AC0000; font-size: 18pt; font-weight: bold;}
        .dark-background h4 strong {color: #000 !important;}
        .dark-background h2 {color: #FFFFFF !important;}
		.dark-background h3 {color: #FFFFFF !important;}
		.dark-background h4 {color: #FFFFFF !important;}
		
		button{margin: 0px 3px !important;}

		.navbar-brand{color: #AC0000 !important;}
		.navbar-toggle{margin-right: 3px; margin-top: 3px !important;}
		.newspaper-main{width: 100%;}
		.formatted-element{margin: 32px 0; }
		.page-section{min-height: 100%; padding-top: 28px;}
		.section-title{border-bottom: 1px solid #666; margin-bottom: 10px;}
		.norm-bold{font-weight: bold;}
        .dark-background{position: relative; background: #AC0000; z-index: 998; /*border-top: 4px solid #CCC; border-bottom: 4px solid #CCC; */ }

		#newspaper-image{position: absolute; width: 80%; margin-left: 10%; margin-right: 10%; box-shadow: 4px 4px 4px -2px #888888; z-index: 100; overflow-y: hidden;}
		#newspaper-carousel{box-shadow: 0 0 5px 2px #888888;}
		
		#customer-type-dropdown{color: #999 !important;}
		#role-button{border: 0; background-color: transparent; outline: none; display: inline;}
		#role-button:hover{color: red;}
		#publication-calendar-image{width: 100%;}
		
		/*Fix to prevent newspaper from formatting incorrectly on ipads/iphones */
		@media screen and (max-device-width: 800px){
    		#newspaper-image{position: relative !important;}
		}
		#sales-link{color: #AC0000; !important;}
		#Advertising{padding-top: 70px; position: relative;}
		
		/*Allows rates table to scroll on mobile devices*/
		#rates-container{height: auto; overflow:auto;}
		
	</style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript">
	</script>
  </head>
  <body>
    <nav class = "navbar navbar-default navbar-fixed-top">
    	<div class="container-fluid">
            <div class="navbar-header">
                 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-links" aria-expanded="false">
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>
      			</button>
                <div class="navbar-brand"><a href="#">THE STANFORD DAILY</a> 
                	<div class="dropdown" id="customer-type-dropdown" style="display: inline">
                        <button class="btn dropdown-toggle" id="role-button" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">For <?php echo ucfirst($role); ?> <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="/?role=businesses">For Businesses</a></li>
                            <li><a href="/?role=university">For University</a></li>
                            <li><a href="/?role=agencies">For Agencies</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        
            <div class="collapse navbar-collapse" id="nav-links">
                <ul class = "nav navbar-nav">
                    <li><a href = "#Advertising" class="page-scroll">Advertising</a></li>
                    <li><a href = "#Readership" class="page-scroll">Readership</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle page-scroll" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Publications <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href = "#Newspaper" class="page-scroll">Newspaper</a></li>
                            <li><a href = "#" class="page-scroll">Special Issues</a></li>
                            <li><a href = "#Magazine" class="page-scroll">Magazine</a></li>
                        </ul>
                    </li>
                    <li><a href = "#Digital" class="page-scroll">Digital</a></li>
                    <li><a href = "#Publication Dates" class="page-scroll">Publication Dates</a></li>
                    <li><a href = "#Rates" class="page-scroll">Rates</a></li>
                    <li><a href = "#Magazine" class="page-scroll">Policies</a></li>
                    <li><a href = "#Sizes" class="page-scroll">Sizes</a></li>
                </ul>
                <ul class = "nav navbar-nav navbar-right visible-xs-block visible-lg-block" id="action-links">
                    <li><a href = "#">Download Media Kit</a>
                    <li><a id="sales-link" href = "#Contact" class="page-scroll">Contact Sales</a></li>
                </ul>
            </div>
    	</div>
    </nav>
    
    <section class = "page-section" id="Advertising">
    	<div class="container">
        	<div class="row">
                <div class = "col-md-7">
                    <div id = "newspaper-image">
                        <img class = "newspaper-main" src = "images/stanford-daily-boehner.jpg" title = "The Stanford Daily" />
                    </div>
                </div>
                <div class = "col-md-5">
                    <div class = "formatted-element">
                        <h1>Stanford is America's dream school. We can help you access it.</h1>
                    </div>
                    <div class = "formatted-element">
                        <h4>
                            <p>The Stanford Daily is the trusted news source for more than 7,000 undergraduates, 10,000 graduates, 12,000 faculty and staff and 210,000 alumni of the Stanford community.</p>
                            <p>The businesses that they go to are the ones that are in our paper.</p>
                        </h4>
                    </div>
                    <div class = "formatted-element">
                        <button type="button" class = "btn btn-bootstrap-danger btn-large">Contact Sales</button><button type="button" class = "btn btn-bootstrap-default btn-large">Download Media Kit</button>
                    </div>
                </div>
        	</div>
    	</div>
	</section>
    <section class = "page-section dark-background" id="Readership">
    	<div class="container">
        	<div class="page-header">
            	<h2>Readership</h2>
            </div>
            <div class="row">
                <div class = "col-md-3">
                	<h3>Newspaper</h3>
                    <h4>
                    	<p><strong class="num">138</strong><br />
                        Free issues published each year</p>
                        <p>&nbsp;</p>
                        <p><strong class="num">8,000</strong><br />
                        Total circulation</p>
                        <p>&nbsp;</p>
                    	<p><strong class="num">5,000</strong><br />
                        Copies distributed on the Stanford campus</p>
                        <p>&nbsp</p>
                        <p><strong class="num">3,000</strong><br />
                        Copies distributed in the surrounding communities of Palo Alto, Menlo Park, Mountain View, Atherton and Portola Valley</p>
                    </h4>
                </div>
                <div class = "col-md-3">
                	<h3>Website</h3>
                    <h4>
                    	<p><strong class="num">375,000+</strong><br />
                        Average monthly pageviews</p>
                        <p>&nbsp;</p>
                        <p><strong class="num">700,000+</strong><br />
                        Confirmed annual visits from San Francisco Bay Area</p>
                    </h4>
                </div>
                <div class = "col-md-3">
               		<h3>Email Digests</h3>
                    <h4>
                    	<p><strong class="num">3000+</strong><br />
                        Subscribers to email digest</p>
                        <p>&nbsp;</p>
                        <p><strong class="num">35%</strong><br />
                        Typical open rate, far above industry standard</p>
                        <p>&nbsp;</p>
                        <p><strong class="num">90,000+</strong><br />
                        Articles opened from email digest, annually.</p>
                    </h4>
                </div>
                
                <div class="col-md-3">
                	<h3>Social Media</h3>
                    <h4>
                    	<p><strong class="num">7300+</strong><br />
                        <p>Facebook likes (The Stanford Daily)</p>
                        <p>&nbsp;</p>
                        <p><strong class="num">9800+</strong><br />
                        Twitter followers (@Stanford_Daily)</p>
                        <p>&nbsp;</p>
                        <p><strong class="num">2700+</strong><br />
                        Twitter followers (@StanfordSports)</p>
                        <p>&nbsp;</p>
                        <p><strong class="num">500+</strong><br />
                       Instagram likes</p>
                    </h4>
                </div>
                   
			</div>
		</div>
	</section>
    <section class="page-section" id="Newspaper">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-12">
                	<div class="section-title"><h2>Newspaper</h2></div>
                </div>
            </div>
            <div class="row">
            	<div class="col-md-4">
                	<div id="newspaper-carousel" class="carousel slide" data-ride="carousel" data-interval="4000">
                    	<ol class="carousel-indicators">
                        	<li data-target="#newspaper-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#newspaper-carousel" data-slide-to="1"></li>
                        	<li data-target="#newspaper-carousel" data-slide-to="2"></li>
                        	<li data-target="#newspaper-carousel" data-slide-to="3"></li>
                        	<li data-target="#newspaper-carousel" data-slide-to="4"></li>
                        </ol>
                        
                        <div class="carousel-inner" role="listbox">
                        	<div class="item active">
                            	<img src="images/stanford-daily-womens-water-polo.jpg" alt="Women&nbsp;s water polo wins national championship" />
                            </div>
                            
                            <div class="item">
                            	<img src="images/stanford-daily-admit-rate.jpg" alt="Stanford&nbsp;s admit rate drops to 4.69 percent" />
                            </div>
                            
                            <div class="item">
                            	<img src="images/stanford-daily-sae.jpg" alt="Investigation into Sigma Alpha Epsilon&nbsp;s loss of campus housing" />
                            </div>
                            
                            <div class="item">
                            	<img src="images/stanford-daily-runs-and-roses.jpg" alt="Stanford wins 2015 Rose Bowl Game" />
                            </div>
                            
                            <div class="item">
                            	<img src="images/stanford-daily-fossil-free.jpg" alt="Fossil Free Stanford rallies for divestment" />
                            </div>
                         
                        </div>
                        
                    </div>
                </div>
              	<div class="col-md-8">
                	<h4><p>The Stanford Daily has been a fixture of Stanford University since it originally launched as a small pamphlet known as The Daily Palo Alto in 1892.</p>
                    <p>The Daily continues to serve unbiased student journalism to the Stanford campus and surrounding communities, distributing </h4>
                </div>
            </div>
        </div>
    </section>
    <section class="page-section" id="Digital">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-12">
                	<div class="section-title"><h2>Website</h2></div>
                </div>
            </div>
            <div class="row">
            	<div class="col-md-7">
                	<img src="images/stanford-daily-website.jpg" title="The Stanford Daily&#39;s website" style="max-width: 100%;"/>
                </div>
                <div class="col-md-5">
                	<h4>
                    	<p>The Stanford Daily's website is your  portal for more than 200,000 visitors each month to view our comprehensive coverage of the Farm.</p>
                        <p>Banner ads <strong>$15</strong> CPM.
                    </h4>
                </div>
            </div>
        </div>
    </section>
    <section class="page-section" id="Digests">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-12">
                	<div class="section-title"><h2>Email Digests</h2></div>
                </div>
            </div>
            <div class="row">
            	<div class="col-md-5">
                	(Picture of digest)
                </div>
                <div class="col-md-7">
                	<h4>
                    	<p>With more than 3,500 combined subscribers, the Daily's email digests are rapidly becoming the preferred method for our most loyal readers to access our latest content. In the past year, over 100,000 articles have been opened directly from either the email or the sports digest.</p>
                        <p>Sponsorship of the email digest gives your business access to some of the Daily's most loyal readers who are deeply invested in the Stanford community.</p>
                    	<p>Normal digest: <strong>$450/week</strong></p>
                        <p>Sports digest: <strong>$150/week</strong></p>
                    </h4>
                </div>
            </div>
        </div>
    </section>
    <section class="page-section" id="Magazine">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-12">
                	<div class="section-title"><h2>Magazine</h2></div>
                    <h4>
                    	<p>Starting in the 2016-17 school year, The Stanford Daily will publish 8 issues of a magazine to contain some of our highest quality long-form jornalism. The magazine is to be distributed on campus by students to places of high visibility and will be available as a premium digital experience to our network of alumni readers.</p>
                        <p>Advertising in our magazine is available both on a per-issue and a entire-series basis.</p>
                    	<p><em>Please contact us at <a href="mailTo:advertising@stanford.edu">advertising@stanford.edu</a> for rates.</em></p>
                        <p>&nbsp;</p>
                    </h4>
                    <div class="list-group" style="max-width: 45%;">
                        <button type="button" class="list-group-item"><strong>Magazine publication dates</strong></button>
                    	<button type="button" class="list-group-item">Fall issue 1: 9/19</button>
                     	<button type="button" class="list-group-item">Fall issue 2: 10/21</button>
                    	<button type="button" class="list-group-item">Fall issue 3: 11/18</button>
                    	<button type="button" class="list-group-item">Winter issue 1: 1/13</button>
                    	<button type="button" class="list-group-item">Winter issue 2: 2/24</button>
                    	<button type="button" class="list-group-item">Spring issue 1: 4/7</button>
                    	<button type="button" class="list-group-item">Spring issue 2: 5/5</button>
                    	<button type="button" class="list-group-item">Spring issue 3: 6/2</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="page-section" id="Calendar">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-12">
                	<div class="section-title"><h2>Publication Dates</h2></div>
                </div>
           </div>
           <div class="row">
           		<div class="col-md-7">
             		<img src="images/stanford-daily-publication-calendar.jpg" id="publication-calendar-image" title="Daily Publication Schedule" />
                </div>
                <div class="col-md-5">
                	<h4>
                    	<p>The Daily is released in print on each weekday during the first nine weeks of each quarter, once during the week before final exams each quarter and on the occasions of new student orientation and commencement.</p>
                        <p>Online content is published year round.</p>
                    </h4>
                </div>
           </div>
        </div>
    </section>
    <section class="page-section" id="Rates">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-12">
                	<div class="section-title"><h2>Rates</h2></div>
                    <h4>We offer a wide range of products to best cater to your advertising needs.</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                	<div class="panel panel-primary">
                    	<div class="panel-heading"><strong>Newspaper print rates</strong></div>
                        <div id="rates-container">
                            <table class="table table-hover">
                                <tr>
                                    <th>&nbsp;</th>
                                    <th>ASSU</th>
                                    <th>School</th>
                                    <th>Local</th>
                                    <th>Non-Local</th>
                                    <th>National</th>
                                </tr>
                                <tr>
                                    <td><strong>Column-inch rate</strong></td>
                                    <td>$6</td>
                                    <td>$13</td>
                                    <td>$14</td>
                                    <td>$16</td>
                                    <td>$19</td>
                                </tr>
                                <tr>
                                    <td><strong>Full</strong></td>
                                    <td>$756</td>
                                    <td>$1,638</td>
                                    <td>$1,764</td>
                                    <td>$2,016</td>
                                    <td>$2,394</td>
                                </tr>
                                <tr>
                                    <td><strong>Half</strong></td>
                                    <td>$378</td>
                                    <td>$819</td>
                                    <td>$882</td>
                                    <td>$1,008</td>
                                    <td>$1,197</td>
                                </tr>
                                <tr>
                                    <td><strong>Quarter</strong></td>
                                    <td>$189</td>
                                    <td>$409.50</td>
                                    <td>$441</td>
                                    <td>$504</td>
                                    <td>$598.50</td>
                                </tr>
                                <tr>
                                    <td><strong>Eighth</strong></td>
                                    <td>$90</td>
                                    <td>$195</td>
                                    <td>$210</td>
                                    <td>$240</td>
                                    <td>$285</td>
                                </tr>
                                <tr>
                                    <td><strong>Sixteenth</strong></td>
                                    <td>$45</td>
                                    <td>$97.50</td>
                                    <td>$105</td>
                                    <td>$120</td>
                                    <td>$142.50</td>
                                </tr>
                                <tr>
                                    <td><strong>Full color surcharge</strong></td>
                                    <td>$100</td>
                                    <td>$200</td>
                                    <td>$200</td>
                                    <td>$350</td>
                                    <td>$500</td>
                                </tr>
                                <tr>
                                    <td><strong>Spot color surcharge</strong></td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>$200</td>
                                    <td>$250</td>
                                </tr>
                            </table>
                    	</div>
                    </div>
                </div>
            </div>
            <div class = "row">
            	<div class = "col-md-4">
                	<h3><strong>Premium placement</strong></h3>
                    <h4>Pay a <strong>5%</strong> premium to place an ad on Page 2, 3 or Back Cover (color required on Page 3 or Back Cover)</h4>
                    <h3><strong>Front page stickers</strong></h3>
                    <h4>
                    	<p><strong>$600</strong></p>
                        <p>Ship inserts and stickers to:</p>
                        <p>Fricke Parks Press<br />33250 Transit Avenue, Union City, California, 94587</p>
                    </h4>
                    <p><em>Full press run of 8,000 copies required. Materials must be received one week prior to publication.</em></p>
                </div>
            	<div class = "col-md-4">
                	<h3><strong>Discounts</strong></h3>
                    <div class = "list-group">
                        <button type="button" class = "list-group-item">Buy 5 ads, take 5% off column-inch rate</button>
                        <button type="button" class = "list-group-item">Buy 10 ads, take 10% off column-inch rate</button>
                        <button type="button" class = "list-group-item">Buy 15 ads, take 15% off column-inch rate</button>
                        <button type="button" class = "list-group-item">Buy 25 ads, take 25% off column inch rate</button>
                    </div>
                   	<h3><strong>Custom sizing</strong></h3>
                    <h4>
                    	<p>Other sizes available! Just chose your height and number of column widths.</p>
                    </h4>
                    <p><em><a href = "#">See size chart</a></em></p>
                </div>
                <div class = "col-md-4">
                	<h3><strong>Special issue sponsorship</strong></h3>
                    <h4>
                    	<p>All eyes will be on our <strong>Special Issues</strong>, which provide coverage of Stanford hot topics and exposure during campus special events.</p>
                        <p>Sponsorships offer our most comprehensive and targeted ad packages to date, and we’re only selling one per Special Issue. We’ll even throw in a full color front page banner ad – the only opportunity to get your brand on our front page.</p>
                        <p><em>Please contact us for pricing information and exact package elements.</em></p>
                    </h4>
                </div>
            </div>
        </div>
    </section>
    <section class="page-section" id="Contact">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-12">
                	<div class="section-title"><h2>Contact Sales</h2></div>
                </div>
            </div>
            <div class="row">
            	<div class="col-md-6">
           			<div class = "panel panel-default">	
                    	<div class="panel-heading"><h4><span class="norm-bold">Contact Information</span></h4></div>
                       	<div class="panel-body">
                        	<h4>
								<p><span class="norm-bold">By Phone:</span></p>
                                <p>(650) 721-5803</p>
                                <p>&nbsp;  </p>
                            	<p><span class="norm-bold">By Email:</span></p>
                                <p>Sales: <a href="mailTo:advertising@stanforddaily.com">advertising@stanforddaily.com</a><br />
                                General Inquiries: <a href="mailTo:coo@stanforddaily.com">coo@stanforddaily.com</a></p>
                             	<p>&nbsp;  </p>
                              	<p><span class="norm-bold">By Mail:</span></p>
                                <p>The Stanford Daily Publishing Corporation<br />456 Panama Mall<br />Stanford, CA 94305</p>
                                <p>&nbsp;  </p>  
                        	</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                	<h3>We can help take your business to the next level.</h3>
                    <h4><p>The Stanford Daily offers the expertise, opportunities and mechanisms for expanding your business to a significant new market.</p><p>Please reach out to us with your ideas and objectives and we will help find the right solutions for your business.</p>
                    <p><em>The Stanford Daily offices are open from 9am to 5pm, Monday through Friday (excluding University holidays).</em></h4>
                </div>
            </div>
        </div>
    </section>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>   
	<script src="js/simplecalendar.js"></script>

  </body>
</html>

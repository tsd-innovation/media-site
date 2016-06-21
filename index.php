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
		h4 strong{color: #F00; font-size: 18pt; font-weight: bold;}
		
		button{margin: 0px 3px !important;}

		.navbar-brand{color: #F00 !important;}
		.newspaper-main{width: 100%;}
		.formatted-element{margin: 32px 0; }
		.page-section{min-height: 100%; padding-top: 70px;}
		.section-title{border-bottom: 1px solid #666; margin-bottom: 10px;}
		
		#newspaper-image{width: 80%; margin-left: 10%; margin-right: 10%; box-shadow: 4px 4px 2px 2px #888888;}
		#sales-link{color: #F00; !important;}

	</style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav class = "navbar navbar-default navbar-fixed-top">
    	<div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed btn-primary" data-toggle="collapse" data-target="#nav-links" aria-expanded="false">
                    <span>Menu <span class="caret"></span></span>
                </button>
                <a class="navbar-brand" href="#">THE STANFORD DAILY</a>
            </div>
        
            <div class="collapse navbar-collapse" id="nav-links">
                <ul class = "nav navbar-nav">
                    <li><a href = "#Advertising" class="page-scroll">Advertising</a></li>
                    <li><a href = "#Readership" class="page-scroll">Readership</a></li>
                    <li class="dropdown">
                        <a href="#Newspaper" class="dropdown-toggle page-scroll" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Newspaper <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href = "#" class="page-scroll">Special Issues</a></li>
                            <li><a href = "#" class="page-scroll">Sizes</a></li>
                        </ul>
                    </li>
                    <li><a href = "#Website" class="page-scroll">Website</a></li>
                    <li><a href = "#Digests" class="page-scroll">Email Digests</a></li>
                    <li><a href = "#Magazine" class="page-scroll">Magazine</a></li>
                    <li><a href = "#Calendar" class="page-scroll">Publication Dates</a></li>
                    <li><a href = "#Pricing" class="page-scroll">Pricing</a></li>
                </ul>
                <ul class = "nav navbar-nav navbar-right">
                    <li><a href = "#">Download Media Kit</a>
                    <li><a id="sales-link" href = "#" class="page-scroll">Contact Sales</a></li>
                </ul>
            </div>
    	</div>
    </nav>
    
    <section class = "page-section" id="Advertising">
    	<div class="container">
        	<div class="row">
                <div class = "col-md-7">
                    <div id = "newspaper-image">
                        <img class = "newspaper-main" src = "images/stanford-daily-newspaper.jpg" title = "The Stanford Daily" />
                    </div>
                </div>
                <div class = "col-md-5">
                    <div class = "formatted-element">
                        <h1>Stanford is America's dream school. We can help you access it.</h1>
                    </div>
                    <div class = "formatted-element">
                        <h4>
                            <p>The Stanford Daily is the trusted news source for more than 7,000 undergraduates, 10,000 graduates, 12,000 faculty and staff and 210,000 alumni of the Stanford community.</p>
                            <p>The businesses that they go to our the ones that are in our paper.</p>
                        </h4>
                    </div>
                    <div class = "formatted-element">
                        <button type="button" class = "btn btn-bootstrap-danger btn-large">Contact Sales</button><button type="button" class = "btn btn-bootstrap-default btn-large">Download Media Kit</button>
                    </div>
                </div>
        	</div>
    	</div>
	</section>
    <section class = "page-section" id="Readership">
    	<div class="container">
        	<div class="row">
            	<div class = "col-md-12">
                    <div class="section-title"><h2>Readership</h2></div>
                </div>
            </div>
            <div class="row">
                <div class = "col-md-4">
                	<h3>Newspaper</h3>
                    <h4>
                    	<p><strong class="num">8,000</strong> copies distributed on campus and in the Palo Alto area dates according to the publication calendar.</p>
                    </h4>
                </div>
                <div class = "col-md-4">
                	<h3>Website</h3>
                    <h4>
                    	<p>Averages over <strong class="num">200,000</strong> monthly visits from people interested in the Stanford community.</p>
                    </h4>
                </div>
                <div class = "col-md-4">
               		<h3>Email Digest</h3>
                    <h4>
                    	<p>Sent Daily to over <strong class="num">3500</strong> Stanford-related emails.</p>
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
   
                	<h4><p>The Stanford Daily is the newspaper that students, faculty and alumni trust to deliver the latest news from the Farm.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut mauris vel lectus faucibus elementum. Pellentesque semper, nisl quis faucibus finibus, ante nibh ullamcorper magna, at vulputate libero lectus in tellus. Phasellus vulputate ante nec urna iaculis, nec pulvinar tellus fringilla. Donec tempor quis justo id pellentesque. Vivamus eget dolor mauris. Vestibulum tempor elit porta lectus cursus, ut tempor diam luctus. Donec volutpat velit sit amet leo eleifend elementum. Aenean bibendum lacinia auctor. Nunc vehicula eget leo quis dictum. Proin vitae consectetur velit. Sed at aliquam tellus. Duis gravida est ligula, id rutrum mi placerat sit amet. Vestibulum ex odio, euismod vel venenatis sed, tristique iaculis dui. Mauris rhoncus elit sit amet purus pellentesque, vitae tempus ex faucibus.</p>

<p>Aenean nisl eros, vulputate et molestie at, sagittis ac sapien. Vestibulum ornare nisi a ligula fermentum, non maximus tortor laoreet. Aliquam vehicula fermentum quam vitae molestie. Integer vulputate diam eget convallis pretium. Sed fringilla mattis ex id bibendum. Quisque ultricies orci vitae posuere dictum. Curabitur eu posuere enim, ut luctus sem.</p>

<p>Nam ut libero ex. In et ex bibendum, finibus ligula ut, varius magna. Sed eget faucibus eros, eu scelerisque mi. Proin euismod libero sed feugiat porttitor. Suspendisse sit amet tortor ante. Donec ornare orci ut ante lacinia mollis. Fusce sit amet erat eu tellus consequat venenatis sit amet non diam. Quisque a molestie massa. Vestibulum turpis nibh, sagittis vel dictum in, dictum vel sapien. Nam vitae massa eu dui tempor semper quis vel ante. Cras ut commodo odio. Nunc eros est, ornare sed semper quis, commodo vitae libero.</p>

<p>Mauris tincidunt quam ac erat volutpat, non blandit tellus facilisis. Aenean sit amet enim non dolor tincidunt malesuada. Aenean tempus lacus est, id commodo tortor fermentum vel. Etiam vulputate volutpat lectus eget blandit. Fusce semper pharetra mauris, id congue tellus gravida in. Sed nunc metus, bibendum at magna blandit, tempus fringilla magna. Aenean id gravida lorem, egestas facilisis dui. Morbi nec tincidunt enim. Aenean eget quam in ipsum rutrum ultricies. Fusce tincidunt sodales ipsum, quis sagittis justo bibendum laoreet. Fusce eu ipsum velit.</p>

<p>Proin vel metus sed mauris malesuada volutpat et nec lorem. Cras tortor quam, vestibulum sit amet luctus ac, faucibus sed purus. Duis finibus euismod lacus. Aliquam ullamcorper nulla et metus mollis luctus. Vestibulum eu molestie sem, sit amet scelerisque est. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In sit amet eros ex. Mauris interdum, massa sed efficitur bibendum, est felis hendrerit lacus, sit amet scelerisque quam nibh eu tortor. Nulla congue tincidunt lacus, maximus volutpat sem ullamcorper a.</p>
     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut mauris vel lectus faucibus elementum. Pellentesque semper, nisl quis faucibus finibus, ante nibh ullamcorper magna, at vulputate libero lectus in tellus. Phasellus vulputate ante nec urna iaculis, nec pulvinar tellus fringilla. Donec tempor quis justo id pellentesque. Vivamus eget dolor mauris. Vestibulum tempor elit porta lectus cursus, ut tempor diam luctus. Donec volutpat velit sit amet leo eleifend elementum. Aenean bibendum lacinia auctor. Nunc vehicula eget leo quis dictum. Proin vitae consectetur velit. Sed at aliquam tellus. Duis gravida est ligula, id rutrum mi placerat sit amet. Vestibulum ex odio, euismod vel venenatis sed, tristique iaculis dui. Mauris rhoncus elit sit amet purus pellentesque, vitae tempus ex faucibus.</p>

<p>Aenean nisl eros, vulputate et molestie at, sagittis ac sapien. Vestibulum ornare nisi a ligula fermentum, non maximus tortor laoreet. Aliquam vehicula fermentum quam vitae molestie. Integer vulputate diam eget convallis pretium. Sed fringilla mattis ex id bibendum. Quisque ultricies orci vitae posuere dictum. Curabitur eu posuere enim, ut luctus sem.</p>

<p>Nam ut libero ex. In et ex bibendum, finibus ligula ut, varius magna. Sed eget faucibus eros, eu scelerisque mi. Proin euismod libero sed feugiat porttitor. Suspendisse sit amet tortor ante. Donec ornare orci ut ante lacinia mollis. Fusce sit amet erat eu tellus consequat venenatis sit amet non diam. Quisque a molestie massa. Vestibulum turpis nibh, sagittis vel dictum in, dictum vel sapien. Nam vitae massa eu dui tempor semper quis vel ante. Cras ut commodo odio. Nunc eros est, ornare sed semper quis, commodo vitae libero.</p>

<p>Mauris tincidunt quam ac erat volutpat, non blandit tellus facilisis. Aenean sit amet enim non dolor tincidunt malesuada. Aenean tempus lacus est, id commodo tortor fermentum vel. Etiam vulputate volutpat lectus eget blandit. Fusce semper pharetra mauris, id congue tellus gravida in. Sed nunc metus, bibendum at magna blandit, tempus fringilla magna. Aenean id gravida lorem, egestas facilisis dui. Morbi nec tincidunt enim. Aenean eget quam in ipsum rutrum ultricies. Fusce tincidunt sodales ipsum, quis sagittis justo bibendum laoreet. Fusce eu ipsum velit.</p>

<p>Proin vel metus sed mauris malesuada volutpat et nec lorem. Cras tortor quam, vestibulum sit amet luctus ac, faucibus sed purus. Duis finibus euismod lacus. Aliquam ullamcorper nulla et metus mollis luctus. Vestibulum eu molestie sem, sit amet scelerisque est. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In sit amet eros ex. Mauris interdum, massa sed efficitur bibendum, est felis hendrerit lacus, sit amet scelerisque quam nibh eu tortor. Nulla congue tincidunt lacus, maximus volutpat sem ullamcorper a.</p>
                    </h4>
                </div>
            </div>
        </div>
    </section>
    <section class="page-section" id="Website">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-12">
                	<div class="section-title"><h2>Website</h2></div>
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
        </div>
    </section>
    <section class="page-section" id="Magazine">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-12">
                	<div class="section-title"><h2>Magazine</h2></div>
                </div>
            </div>
        </div>
    </section>
    <section class="page-section" id="Calendar">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-12">
                	<div class="section-title"><h2>Publication Dates</h2></div>
                    <script src="js/simplecalendar.js"></script>
                </div>
            </div>
        </div>
    </section>
    <section class="page-section" id="Pricing">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-12">
                	<div class="section-title"><h2>Pricing Chart</h2></div>
                    <h4>We offer a wide range of products to best cater to your advertising needs.</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                	<div class="panel panel-primary">
                    	<div class="panel-heading"><strong>Newspaper print rates</strong></div>
                       	<table class="table table-hover">
                        	<tr>
                            	<th>&nbsp;</th>
                                <th>ASSU</th>
                                <th>University</th>
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
                    <ul class = "list-group">
                        <button type="button" class = "list-group-item">Buy 5 ads, take 5% off column-inch rate</button>
                        <button type="button" class = "list-group-item">Buy 10 ads, take 10% off column-inch rate</button>
                        <button type="button" class = "list-group-item">Buy 15 ads, take 15% off column-inch rate</button>
                        <button type="button" class = "list-group-item">Buy 25 ads, take 25% off column inch rate</button>
                    </ul>
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
        </div>
    </section>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>   
  </body>
</html>
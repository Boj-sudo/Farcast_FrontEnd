<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Web Application | todo</title>
  <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
  <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="css/animate.css" type="text/css" />
  <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="css/font.css" type="text/css" cache="false" />
  <link rel="stylesheet" href="css/plugin.css" type="text/css" />
  <link rel="stylesheet" href="css/app.css" type="text/css" />
</head>
<body>
  <section class="vbox">
    <header class="header bg-black navbar navbar-inverse pull-in">
      <div class="navbar-header nav-bar aside dk">
        <a class="btn btn-link visible-xs" data-toggle="class:show" data-target=".nav-primary">
          <i class="fa fa-bars"></i>
        </a>
        <a href="#" class="nav-brand" data-toggle="fullscreen"><img src="images/logo.png"></a>
        <a class="btn btn-link visible-xs" data-toggle="collapse" data-target=".navbar-collapse">
          <i class="fa fa-comment-o"></i>
        </a>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flask  text-white"></i>
              <span class="text-white">UI kit</span> <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">                
              <li>
                <a href="buttons.html">Buttons</a>
              </li>
              <li>
                <a href="icons.html">
                  <b class="badge pull-right">302</b>Icons
                </a>
              </li>
              <li>
                <a href="grid.html">Grid</a>
              </li>
              <li>
                <a href="widgets.html">
                  <b class="badge bg-primary pull-right">8</b>Widgets
                </a>
              </li>
              <li>
                <a href="components.html">
                  <b class="badge pull-right">18</b>Components
                </a>
              </li>
              <li>
                <a href="list.html">List groups</a>
              </li>
              <li>
                <a href="table.html">Table</a>
              </li>
              <li>
                <a href="form.html">Form</a>
              </li>
              <li>
                <a href="chart.html">Chart</a>
              </li>
              <li>
                <a href="calendar.html">Fullcalendar</a>
              </li>
              <li>
                <a href="portlet.html">Portlet</a>
              </li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-file-text text-white"></i>
              <span class="text-white">Pages</span> <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">                
              <li>
                <a href="dashboard.html">Dashboard</a>                    
              </li>
              <li>
                <a href="dashboard-1.html">Dashboard one</a>
              </li>
              <li>
                <a href="dashboard-2.html">Dashboard layout</a>
              </li>
              <li>
                <a href="analysis.html">Analysis</a>
              </li>
              <li>
                <a href="gallery.html">Gallery</a>              
              </li>
              <li>
                <a href="profile.html">Profile</a>
              </li>
              <li>
                <a href="blog.html">Blog</a>              
              </li>
              <li>
                <a href="invoice.html">Invoice</a>              
              </li>                  
              <li>
                <a href="signin.html">Signin page</a>
              </li>
              <li>
                <a href="signup.html">Signup page</a>
              </li>
              <li>
                <a href="404.html">404 page</a>
              </li>
            </ul>
          </li>
        </ul>
        <form class="navbar-form navbar-left m-t-sm" role="search">
          <div class="form-group">
            <div class="input-group input-s">
              <input type="text" class="form-control input-sm no-border dk text-white" placeholder="Search">
              <span class="input-group-btn">
                <button type="submit" class="btn btn-sm btn-default btn-icon"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </div>
        </form>
        <ul class="nav navbar-nav navbar-right">
          <li class="hidden-xs">
            <a href="#" class="dropdown-toggle dk" data-toggle="dropdown">
              <i class="fa fa-bell-alt text-white"></i>
              <span class="badge up bg-danger m-l-n-sm">2</span>
            </a>
            <section class="dropdown-menu animated fadeInUp input-s-lg">
              <section class="panel bg-white">
                <header class="panel-heading">
                  <strong>You have <span class="count-n">2</span> notifications</strong>
                </header>
                <div class="list-group">
                  <a href="#" class="media list-group-item">
                    <span class="pull-left thumb-sm">
                      <img src="images/avatar.jpg" alt="John said" class="img-circle">
                    </span>
                    <span class="media-body block m-b-none">
                      Use awesome animate.css<br>
                      <small class="text-muted">28 Aug 13</small>
                    </span>
                  </a>
                  <a href="#" class="media list-group-item">
                    <span class="media-body block m-b-none">
                      1.0 initial released<br>
                      <small class="text-muted">27 Aug 13</small>
                    </span>
                  </a>
                </div>
                <footer class="panel-footer text-sm">
                  <a href="#" class="pull-right"><i class="fa fa-cog"></i></a>
                  <a href="#">See all the notifications</a>
                </footer>
              </section>
            </section>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle dker" data-toggle="dropdown">
              <span class="thumb-sm avatar pull-left m-t-n-xs m-r-xs">
                <img src="images/avatar.jpg">
              </span>
              John.Smith <b class="caret"></b>
            </a>
            <ul class="dropdown-menu animated fadeInLeft">
              <li>
                <a href="#">Settings</a>
              </li>
              <li>
                <a href="profile.html">Profile</a>
              </li>
              <li>
                <a href="#">
                  <span class="badge bg-danger pull-right">3</span>
                  Notifications
                </a>
              </li>
              <li>
                <a href="docs.html">Help</a>
              </li>
              <li>
                <a href="signin.html">Logout</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </header>
    <section>
      <section class="hbox stretch">
        <aside class="aside bg-dark" id="nav">
          <section class="vbox">
            <section>
              <nav class="nav-primary hidden-xs">
                <ul class="nav">
                  <li>
                    <a href="index.html">
                      <i class="fa fa-eye"></i>
                      <span>Discover</span>
                    </a>
                  </li>
                  <li class="dropdown-submenu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <i class="fa fa-flask"></i>
                      <span>UI kit</span>
                    </a>
                    <ul class="dropdown-menu">                
                      <li>
                        <a href="buttons.html">Buttons</a>
                      </li>
                      <li>
                        <a href="icons.html">
                          <b class="badge pull-right">302</b>Icons
                        </a>
                      </li>
                      <li>
                        <a href="grid.html">Grid</a>
                      </li>
                      <li>
                        <a href="widgets.html">
                          <b class="badge bg-primary pull-right">8</b>Widgets
                        </a>
                      </li>
                      <li>
                        <a href="components.html">
                          <b class="badge pull-right">18</b>Components
                        </a>
                      </li>
                      <li>
                        <a href="list.html">List groups</a>
                      </li>
                      <li>
                        <a href="table.html">Table</a>
                      </li>
                      <li>
                        <a href="form.html">Form</a>
                      </li>
                      <li>
                        <a href="chart.html">Chart</a>
                      </li>
                      <li>
                        <a href="calendar.html">Fullcalendar</a>
                      </li>
                      <li>
                        <a href="portlet.html">Portlet</a>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <i class="fa fa-file-text"></i>
                      <span>Pages</span>
                    </a>
                    <ul class="dropdown-menu">                
                      <li>
                        <a href="dashboard.html">Dashboard</a>                    
                      </li>
                      <li>
                        <a href="dashboard-1.html">Dashboard one</a>
                      </li>
                      <li>
                        <a href="dashboard-2.html">Dashboard layout</a>
                      </li>
                      <li>
                        <a href="analysis.html">Analysis</a>
                      </li>
                      <li>
                        <a href="gallery.html">Gallery</a>              
                      </li>
                      <li>
                        <a href="profile.html">Profile</a>
                      </li>
                      <li>
                        <a href="blog.html">Blog</a>              
                      </li>
                      <li>
                        <a href="invoice.html">Invoice</a>              
                      </li>                  
                      <li>
                        <a href="signin.html">Signin page</a>
                      </li>
                      <li>
                        <a href="signup.html">Signup page</a>
                      </li>
                      <li>
                        <a href="404.html">404 page</a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a href="mail.html">
                      <b class="badge bg-white pull-right">3</b>
                      <i class="fa fa-envelope-o"></i>
                      <span>Mail</span>
                    </a>
                  </li>
                  <li>
                    <a href="tasks.html">
                      <i class="fa fa-tasks"></i>
                      <span>Tasks</span>
                    </a>
                  </li>
                  <li>
                    <a href="notes.html">
                      <i class="fa fa-pencil"></i>
                      <span>Notes</span>
                    </a>
                  </li>
                  <li>
                    <a href="timeline.html">
                      <i class="fa fa-clock-o"></i>
                      <span>Timeline</span>
                    </a>
                  </li>
                </ul>
              </nav>
              <div class="text-center wrapper lter hidden-vertical">
                <div class="inline">
                  <div class="easypiechart" data-percent="65" data-line-width="8" data-track-color="#3d4452" data-bar-color="#80c740" data-scale-color="#545e70" data-loop="false" data-size="120">
                    <span class="h2">60</span>%
                    <div class="easypie-text">Processing</div>
                  </div>
                </div>
              </div>
            </section>
            <footer class="footer bg-gradient hidden-xs">
              <a href="modal.lockme.html" data-toggle="ajaxModal" class="btn btn-sm btn-link m-r-n-xs pull-right">
                <i class="fa fa-power-off"></i>
              </a>
              <a href="#nav" data-toggle="class:nav-vertical" class="btn btn-sm btn-link m-l-n-sm">
                <i class="fa fa-bars"></i>
              </a>
            </footer>
          </section>
        </aside>
        <section>
          <section class="vbox">
            <section class="scrollable">
              <div class="header b-b bg-white-only">
                <div class="row">
                  <div class="col-sm-4">
                    <h4 class="m-t m-b-none">Statistics</h4>
                  </div>
                  <div class="col-sm-8">
                    <div class="clearfix m-t m-b-sm pull-right pull-none-xs">
                      <div class="pull-left">                  
                        <div class="pull-left m-r-xs">                  
                          <span class="h4">432k</span>
                          <i class="fa fa-level-up text-success"></i>
                        </div>
                        <div class="clear">
                          <div class="sparkline inline" data-type="bar" data-height="20" data-bar-width="4" data-bar-spacing="2" data-stacked-bar-color="['#afcf6f', '#ccc']">5:5,8:4,12:5,10:6,11:7,12:2,8:6</div>
                        </div>
                      </div>
                      <div class="pull-left m-l-lg">
                        <div class="pull-left m-r-xs">                 
                          <span class="h4">$4k</span>
                          <i class="fa fa-level-down text-danger"></i>
                        </div>
                        <div class="clear">
                          <div class="sparkline inline" data-type="bar" data-height="20" data-bar-width="4" data-bar-spacing="2" data-bar-color="#fb6b5b">6,5,8,9,6,3,5</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="wrapper">                
                <section class="panel">
                  <header class="panel-heading font-bold">Site statistics</header>
                  <div class="panel-body">
                    <div id="flot-color" style="height:250px"></div>
                  </div>
                  <footer class="panel-footer">
                    <div class="row text-center">
                      <div class="col-xs-3 b-r">
                        <p class="h3 font-bold m-t">5,860</p>
                        <p class="text-muted">Orders</p>
                      </div>
                      <div class="col-xs-3 b-r">
                        <p class="h3 font-bold m-t">10,450</p>
                        <p class="text-muted">Selling Items</p>
                      </div>
                      <div class="col-xs-3 b-r">
                        <p class="h3 font-bold m-t">21,230</p>
                        <p class="text-muted">Items</p>
                      </div>
                      <div class="col-xs-3">
                        <p class="h3 font-bold m-t">7,230</p>
                        <p class="text-muted">Customers</p>                        
                      </div>
                    </div>
                  </footer>
                </section>
                <div class="row">
                  <div class="col-md-6">
                    <section class="panel">
                      <header class="panel-heading font-bold">Multiple</header>
                      <div class="panel-body">
                        <div id="flot-chart"  style="height:240px"></div>
                      </div>                  
                    </section>
                  </div>
                  <div class="col-md-6">
                    <section class="panel">
                      <header class="panel-heading font-bold">Real-time update</header>
                      <div class="panel-body">
                        <div id="flot-live"  style="height:240px"></div>
                      </div>
                    </section>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <section class="panel">
                      <header class="panel-heading font-bold">Vertical bar</header>
                      <div class="panel-body">
                        <div id="flot-bar"  style="height:240px"></div>
                      </div>                  
                    </section>
                  </div>
                  <div class="col-md-6">
                    <section class="panel">
                      <header class="panel-heading font-bold">Horizontal bar</header>
                      <div class="panel-body">
                        <div id="flot-bar-h"  style="height:240px"></div>
                      </div>
                    </section>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <section class="panel">
                      <header class="panel-heading font-bold">Pie Chart</header>
                      <div class="panel-body">
                        <div id="flot-pie"  style="height:240px"></div>
                      </div>                  
                    </section>
                  </div>
                  <div class="col-md-6">
                    <section class="panel">
                      <header class="panel-heading font-bold">Donut pie</header>
                      <div class="panel-body">
                        <div id="flot-pie-donut"  style="height:240px"></div>
                      </div>
                    </section>
                  </div>
                </div>
              </div>
            </section>
          </section>
        </section>
      </section>
    </section>
  </section>
	<script src="js/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="js/bootstrap.js"></script>
  <!-- Sparkline Chart -->
  <script src="js/charts/sparkline/jquery.sparkline.min.js"></script>
  <!-- App -->
  <script src="js/app.js"></script>
  <script src="js/app.plugin.js"></script>
  <script src="js/app.data.js"></script>

  <!-- Sparkline Chart -->
  <script src="js/charts/sparkline/jquery.sparkline.min.js"></script>
  <!-- Easy Pie Chart -->
  <script src="js/charts/easypiechart/jquery.easy-pie-chart.js"></script>
  <!-- Flot -->
  <script src="js/charts/flot/jquery.flot.min.js" cache="false"></script>
  <script src="js/charts/flot/jquery.flot.tooltip.min.js" cache="false"></script>
  <script src="js/charts/flot/jquery.flot.resize.js" cache="false"></script>
  <script src="js/charts/flot/jquery.flot.orderBars.js" cache="false"></script>
  <script src="js/charts/flot/jquery.flot.pie.min.js" cache="false"></script>  
  <script src="js/charts/flot/demo.js" cache="false"></script>
</body>
</html>
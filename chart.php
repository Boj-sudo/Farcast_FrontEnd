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
  <section class="hbox stretch">
    <!-- .aside -->
    <aside class="bg-dark aside-sm" id="nav">
      <section class="vbox">
        <header class="dker nav-bar">
          <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen" data-target="#nav">
            <i class="fa fa-bars"></i>
          </a>
          <a href="#" class="nav-brand" data-toggle="fullscreen">todo</a>
          <a class="btn btn-link visible-xs" data-toggle="class:show" data-target=".nav-user">
            <i class="fa fa-comment-o"></i>
          </a>
        </header>
        <section>
          <div class="lter nav-user hidden-xs pos-rlt">            
            <div class="nav-avatar pos-rlt">
              <a href="#" class="thumb-sm avatar animated rollIn" data-toggle="dropdown">
                <img src="images/avatar.jpg" alt="" class="">
                <span class="caret caret-white"></span>
              </a>
              <ul class="dropdown-menu m-t-sm animated fadeInLeft">
              	<span class="arrow top"></span>
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
                <li class="divider"></li>
                <li>
                  <a href="docs.html">Help</a>
                </li>
                <li>
                  <a href="signin.html">Logout</a>
                </li>
              </ul>
              <div class="visible-xs m-t m-b">
                <a href="#" class="h3">John.Smith</a>
                <p><i class="fa fa-map-marker"></i> London, UK</p>
              </div>
            </div>
            <div class="nav-msg">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <b class="badge badge-white count-n">2</b>
              </a>
              <section class="dropdown-menu m-l-sm pull-left animated fadeInRight">
                <div class="arrow left"></div>
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
            </div>
          </div>
          <nav class="nav-primary hidden-xs">
            <ul class="nav">
              <li>
                <a href="index.html">
                  <i class="fa fa-eye"></i>
                  <span>Discover</span>
                </a>
              </li>              
              <li class="dropdown-submenu active">
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
                    <a href="master.html">Master</a>
                  </li>
                  <li>
                    <a href="maps.html">Maps</a>
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
                  <b class="badge bg-primary pull-right">3</b>
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
    <!-- /.aside -->
    <!-- .vbox -->
    <section id="content">
      <section class="vbox">
        <header class="header bg-dark bg-gradient">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#sparkline" data-toggle="tab">Sparkline</a></li>
            <li class=""><a href="#morris" data-toggle="tab">Morris</a></li>
            <li class=""><a href="#easy-pie-chart" data-toggle="tab">Easy pie chart</a></li>
          </ul>
        </header>
        <section class="scrollable wrapper">
          <div class="tab-content">
            <div class="tab-pane active" id="sparkline">
              <div class="row">
                <div class="col-lg-12">
                  <section class="panel">
                    <header class="panel-heading">
                      Stats
                    </header>
                    <div class="panel-body">
                      <div class="btn-group" data-toggle="buttons">
                        <label class="btn btn-sm btn-white active">
                          <input type="radio" name="options" id="option1"> Day
                        </label>
                        <label class="btn btn-sm btn-white">
                          <input type="radio" name="options" id="option2"> Week
                        </label>
                        <label class="btn btn-sm btn-white">
                          <input type="radio" name="options" id="option2"> Month
                        </label>
                        <label class="btn btn-sm btn-white">
                          <input type="radio" name="options" id="option2"> Year
                        </label>
                      </div>
                      <div class="line line-lg pull-in"></div>
                      <div class="sparkline" data-type="line" data-resize="true" data-height="185" data-width="100%" data-line-width="1" data-line-color="#afcf6f" data-spot-color="#afcf6f" data-fill-color="rgba(240,240,240,0.5)" data-highlight-line-color="#e1e5e9" data-spot-radius="4" data-data="[120,250,200,325,400,380,250,320,345,250,250,250,200,325,300,365,250,210,200,180,150,160,250,250,250,200,300,310,330,250,320,205]" data-composite-config='{"lineColor":"#dddddd","fillColor":"#ffffff","spotColor":"#dddddd","spotRadius":"4"}' data-composite-data="[325,220,250,200,350,380,250,320,345,250,250,250,200,325,300,365,250,210,200,180,150,160,250,250,250,200,300,310,330,250,320,205]"></div>
                      <ul class="list-inline text-muted axis"><li>12:00<br>am</li><li>2:00</li><li>4:00</li><li>6:00</li><li>8:00</li><li>10:00</li><li>12:00<br>pm</li><li>2:00</li><li>4:00</li><li>6:00</li><li>8:00</li><li>10:00</li></ul>
                    </div>
                  </section>
                </div>                
              </div>
              <div class="row">
                <div class="col-lg-4">
                  <section class="panel">
                    <header class="panel-heading">Pie</header>
                    <div class="panel-body text-center">              
                      <div class="sparkline inline" data-type="pie" data-height="150" data-slice-colors="['#99c7ce','#f2f2f2']">60,40</div>
                      <div class="line pull-in"></div>
                      <div class="text-xs">
                        <i class="fa fa-circle text-info"></i> 60%
                        <i class="fa fa-circle text-muted"></i> 40%
                      </div>
                    </div>
                  </section>
                </div>
                <div class="col-lg-4">
                  <section class="panel">
                    <header class="panel-heading">Composite</header>
                    <div class="text-center bg-success clearfix">
                      <div class="m-t-lg padder">
                        <div class="sparkline" data-type="line" data-resize="true" data-height="100" data-width="100%" data-line-width="1" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="4" data-data="[120,250,200,325,400,380,250,320,345,250,250,250]"></div>
                        <div class="sparkline inline" data-type="bar" data-height="57" data-bar-width="6" data-bar-spacing="10" data-bar-color="#a4d55d">5,8,12,10,11,12,8,9,6,7,8,6,10,7</div>
                      </div>
                    </div>
                    <footer class="panel-footer text-sm">Check more data</footer>
                  </section>
                </div>
                <div class="col-lg-4">
                  <section class="panel">
                    <header class="panel-heading">Stacked</header>
                    <div class="panel-body text-center">
                      <div class="sparkline inline" data-type="bar" data-height="160" data-bar-width="12" data-bar-spacing="10" data-stacked-bar-color="['#afcf6f', '#eee']">5:5,8:4,12:5,10:6,11:7,12:2,8:6,9:3,5:5,4:9</div>
                      <ul class="list-inline text-muted axis"><li>1</li><li>2</li><li>3</li><li>4</li><li>5</li><li>6</li><li>7</li><li>8</li><li>9</li><li>10</li></ul>
                    </div>
                  </section>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="morris">
              <div class="row">
                <div class="col-lg-6">
                  <section class="panel">
                    <header class="panel-heading">
                      Jaguar 'E' Type vehicles in the UK
                    </header>
                    <div id="hero-graph" class="graph"></div>
                  </section>
                </div>
                <div class="col-lg-6">
                  <section class="panel">
                    <header class="panel-heading">
                      Donut flavours
                    </header>
                    <div id="hero-donut" class="graph"></div>
                  </section>
                </div>
                <div class="col-lg-6">
                  <section class="panel">
                    <header class="panel-heading">
                      Quarterly Apple iOS device unit sales
                    </header>
                    <div id="hero-area" class="graph"></div>
                  </section>
                </div>
                <div class="col-lg-6">
                  <section class="panel">
                    <header class="panel-heading">
                      iPhone CPU benchmarks
                    </header>
                    <div id="hero-bar" class="graph"></div>
                  </section>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="easy-pie-chart">
              <div class="row">
                <div class="col-lg-4">
                  <section class="panel">
                    <header class="panel-heading">
                      Conversion
                    </header>
                    <div class="panel-body text-center">
                      <h4>62.5<small> hrs</small></h4>
                      <small class="text-muted block">Updated at 2 minutes ago</small>
                      <div class="inline">
                        <div class="easypiechart" data-percent="75" data-line-width="16" data-loop="false" data-size="188">
                          <span class="h2">75</span>%
                          <div class="easypie-text"><button class="btn btn-link m-t-n-sm" data-toggle="class:pie"><i class="fa fa-play text text-muted"></i><i class="fa fa-pause text-active text-muted"></i></button></div>
                        </div>
                      </div>                      
                    </div>
                    <div class="panel-footer"><small>% of avarage rate of the Conversion</small></div>
                  </section>
                </div>
                <div class="col-lg-4">
                  <section class="panel">
                    <header class="panel-heading">
                      Bounce rate
                    </header>
                    <div class="panel-body text-center">
                      <h4><small>last </small>12<small> hrs</small></h4>
                      <small class="text-muted block">yesterday: 20%</small>
                      <div class="inline">
                        <div class="easypiechart" data-percent="25" data-line-width="6" data-loop="false" data-size="188">
                          <span class="h2">25</span>%
                          <div class="easypie-text">Today</div>
                        </div>
                      </div>
                    </div>
                    <div class="panel-footer"><small>% of change</small></div>
                  </section>
                </div>
                <div class="col-lg-4">
                  <section class="panel">
                    <header class="panel-heading">
                      New visitors
                    </header>
                    <div class="panel-body text-center">
                      <h4>3,450</h4>
                      <small class="text-muted block">Worldwide visitors</small>
                      <div class="inline">
                        <div class="easypiechart" data-percent="60" data-line-width="30" data-track-color="#eee" data-bar-color="#afcf6f" data-scale-color="#fff" data-loop="false" data-size="188">
                          <span class="h2">60</span>%
                          <div class="easypie-text">new visits</div>
                        </div>
                      </div>                      
                    </div>
                    <div class="panel-footer"><small>% of avarage rate of the visits</small></div>
                  </section>
                </div>
              </div>
            </div>
          </div>
        </section>
      </section>
    </section>
    <!-- /.vbox -->
  </section>
  <script src="js/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="js/bootstrap.js"></script>
  <!-- app -->
  <script src="js/app.js"></script>
  <script src="js/app.plugin.js"></script>
  <script src="js/app.data.js"></script>

  <!-- Sparkline Chart -->
  <script src="js/charts/sparkline/jquery.sparkline.min.js"></script>
  <!-- Easy Pie Chart -->
  <script src="js/charts/easypiechart/jquery.easy-pie-chart.js"></script>
  <!-- Morris -->
  <script src="js/charts/morris/raphael-min.js" cache="false"></script>
  <script src="js/charts/morris/morris.min.js" cache="false"></script>
</body>
</html>
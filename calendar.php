<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Web Application | todo</title>
  <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <link rel="stylesheet" href="js/fuelux/fuelux.css" type="text/css" />
  <link rel="stylesheet" href="js/fullcalendar/fullcalendar.css" type="text/css" />
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
        <section class="bg-light lter">
          <section class="hbox stretch">          
            <!-- .aside -->
            <aside>
              <section class="vbox">
                <section class="scrollable">
                  <section class="panel">
                    <header class="panel-heading bg-light header no-borders">
                      <p>Fullcalendar</p>
                    </header>
                    <div class="calendar" id="calendar">

                    </div>
                  </section>
                </section>
              </section>
            </aside>
            <!-- /.aside -->
            <!-- .aside -->
            <aside class="aside-lg b-l">
              <div class="padder">
                <h5>Dragable events</h5>
                <div class="line"></div>
                <div id="myEvents" class="pillbox clearfix m-b no-border no-padder">
                  <ul>
                    <li class="label bg-dark">Item One</li>
                    <li class="label bg-success">Item Two</li>
                    <li class="label bg-warning">Item Three</li>
                    <li class="label bg-danger">Item Four</li>
                    <li class="label bg-info">Item Five</li>
                    <li class="label bg-primary">Item Six</li>
                    <input type="text" placeholder="add an event">
                  </ul>
                </div>
                <div class="line"></div>
                <div class="checkbox">
                  <label class="checkbox-custom"><input type='checkbox' id='drop-remove' /><i class="fa fa-unchecked"></i> remove after drop</label>
                </div>
              </div>
            </aside>
            <!-- /.aside -->
          </section>
        </section>
      </section>
    </section>
    <!-- /.vbox -->
  </section>
	<script src="js/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="js/bootstrap.js"></script>
  <!-- App -->
  <script src="js/app.js"></script>
  <script src="js/app.plugin.js"></script>
  <script src="js/app.data.js"></script>
  <!-- fuelux -->
  <script src="js/fuelux/fuelux.js"></script>
  <!-- fullcalendar --> 
  <script src="js/jquery-ui-1.10.3.custom.min.js" cache="false"></script>
  <script src="js/jquery.ui.touch-punch.min.js" cache="false"></script>
  <script src="js/fullcalendar/fullcalendar.min.js" cache="false"></script>
</body>
</html>
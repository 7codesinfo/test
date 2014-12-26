<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Dashboard - Admin</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" type="image/x-icon" href="<?php echo THEMEURL ; ?>images/favicon.ico" />

<link rel="stylesheet" type="text/css" href="<?php echo THEMEURL ; ?>assets/chosen-bootstrap/chosen.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo THEMEURL ; ?>assets/jquery-tags-input/jquery.tagsinput.css" />
<link rel="stylesheet" type="text/css" href="<?php echo THEMEURL ; ?>assets/bootstrap-fileupload/bootstrap-fileupload.css" />
<link rel="stylesheet" type="text/css" href="<?php echo THEMEURL ; ?>assets/dropzone/css/dropzone.css" />
<link rel="stylesheet" type="text/css" href="<?php echo THEMEURL ; ?>assets/bootstrap-datepicker/css/datepicker.css" />

<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
<!--base css styles-->
<link rel="stylesheet" href="<?php echo THEMEURL ; ?>assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo THEMEURL ; ?>assets/font-awesome/css/font-awesome.min.css">

<!--page specific css styles-->
<link rel="stylesheet" href="<?php echo THEMEURL ; ?>assets/data-tables/bootstrap3/dataTables.bootstrap.css" />

<!--siri css styles-->
<link rel="stylesheet" href="<?php echo THEMEURL ; ?>css/siri.css">
<link rel="stylesheet" href="<?php echo THEMEURL ; ?>css/siri-responsive.css">
<link href="<?php echo THEMEURL ; ?>css/mystyle.css" rel="stylesheet" type="text/css">
<link href="<?php echo THEMEURL ; ?>css/clickmap.css" rel="stylesheet" type="text/css">

<!--page specific css styles-->
<link rel="stylesheet" type="text/css" href="<?php echo THEMEURL ; ?>assets/chosen-bootstrap/chosen.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo THEMEURL ; ?>assets/jquery-tags-input/jquery.tagsinput.css" />
<link rel="stylesheet" type="text/css" href="<?php echo THEMEURL ; ?>assets/bootstrap-fileupload/bootstrap-fileupload.css" />
<link rel="stylesheet" type="text/css" href="<?php echo THEMEURL ; ?>assets/dropzone/css/dropzone.css" />
<link rel="stylesheet" type="text/css" href="<?php echo THEMEURL ; ?>assets/bootstrap-datepicker/css/datepicker.css" />
<link rel="stylesheet" type="text/css" href="<?php echo THEMEURL ; ?>assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
<link href="<?php echo THEMEURL ; ?>assets/jquery-tree/jquery-ui.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="<?php echo THEMEURL ; ?>assets/jquery-tree/tree.css" type="text/css" media="screen" />
<!--page specific css styles-->
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo THEMEURL ; ?>assets/file-manager/css/elfinder.min.css">
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo THEMEURL ; ?>assets/file-manager/css/theme.css">

<link rel="stylesheet" href="<?php echo THEMEURL ; ?>assets/youtube-gallery/youtube-video-gallery.css" type="text/css"/>
<link rel="stylesheet" href="<?php echo THEMEURL ; ?>assets/youtube-gallery/colorbox.css" />

<link rel='stylesheet' id='wp-analytify-style-css'  href='<?php echo SITEURL; ?>plugins/sirianalytify/views/css/wp-analytify-style.css?ver=3.5.1' type='text/css' media='all' />
<link rel='stylesheet' id='ui-css-css'  href='<?php echo SITEURL; ?>plugins/sirianalytify/views/jquery-ui-theme/jquery-ui.css?ver=3.5.1' type='text/css' media='all' />
<link rel='stylesheet' id='select-bootstrap-css-css'  href='<?php echo SITEURL; ?>plugins/sirianalytify/views/css/select2-bootstrap.css?ver=3.5.1' type='text/css' media='all' />
<link rel='stylesheet' id='select-css-css'  href='<?php echo SITEURL; ?>plugins/sirianalytify/views/css/select2.css?ver=3.5.1' type='text/css' media='all' />
<link rel='stylesheet' id='jquery-ui-tooltip-css-css'  href='<?php echo SITEURL; ?>plugins/sirianalytify/views/css/jquery.ui.tooltip.html.css?ver=3.5.1' type='text/css' media='all' />

<link rel="stylesheet" href="<?php echo THEMEURL ; ?>css/fonts.css" type="text/css"/>
<link rel="stylesheet" href="<?php echo THEMEURL ; ?>css/fonts-ie7.css" />

<script>window.jQuery || document.write('<script src="<?php echo THEMEURL ; ?>assets/jquery/jquery-2.0.3.min.js"><\/script>')</script> 
<script type="text/javascript" src="<?php echo THEMEURL ; ?>assets/editor/scripts/innovaeditor.js"></script>
<script type="text/javascript" src="<?php echo THEMEURL ; ?>assets/dropzone/dropzone.min.js"></script> 
    
<script type='text/javascript'>
/* <![CDATA[ */
var userSettings = {"url":"\/wordpress\/","uid":"1","time":"1408954387"};/* ]]> */
</script>
<script src="<?php echo THEMEURL ; ?>js/jquery-ui.js"></script>
<script type='text/javascript' src='https://www.google.com/jsapi?ver=1.0.0'></script>
<script type='text/javascript' src='<?php echo SITEURL; ?>plugins/sirianalytify/views/js/select2.js?ver=1.0.0'></script>
<script type='text/javascript' src='<?php echo SITEURL; ?>plugins/sirianalytify/views/js/wp-analytify.js?ver=1.0.0'></script>
</head>
<body class="skin-recharge"> <!-- BEGIN Navbar -->
<div id="navbar" class="navbar">
  <button type="button" class="navbar-toggle navbar-btn collapsed" data-toggle="collapse" data-target="#sidebar"> <span class="icon-reorder"></span> </button>
  <div class="col-sm-3 col-lg-3 controls">
      <a class="navbar-brand" href="<?php echo SITEURL; ?>">
          <small> 
              <img src="<?php echo THEMEURL ; ?>images/logo-small.jpg" alt="logo-small" title="siw"/>
          </small>
      </a> 
  </div>
  
  <!-- BEGIN Navbar Buttons -->
  <ul class="nav flaty-nav pull-right">
    <!-- BEGIN Site Credits -->
    <li class="hidden-xs">
        <a data-toggle="dropdown" class="dropdown-toggle siri" href="#"> 
            <img src="<?php echo THEMEURL ; ?>images/siri.png" alt="Siri Innovations" title="Siri Innovations" />
        </a> 
      <!-- BEGIN Tasks Dropdown -->
      <ul class="dropdown-navbar dropdown-menu hover">
        <li class="nav-header"> <i class="glyphicon glyphicon-user"></i>Developers</li>
        <li class="siri-in">
          <div class="siri-inner">
            <div class="logo-align"> 
                <img src="<?php echo THEMEURL ; ?>images/siri-logo.png" alt="Siri Innovations" title="Siri Innovations" /> </div>
          </div>
        </li>
        <li class="more"><a href="http://www.siriinnovations.com" target="_blank">www.siriinnovations.com</a> </li>
      </ul>
      <!-- END Tasks Dropdown --> 
    </li>
    <!-- END Site Credits --> 
  
     <!-- BEGIN filemanager-->
    <li class="hidden-xs">
        <a href="<?php echo SITEURL; ?>filemanager" title ="File Manager"> 
            <i class="icon-folder-close"></i>
        </a>
    </li>
    
    <!-- END filemanager -->
     <li class="hidden-xs">
        <a href="<?php echo SITEURL; ?>databaseBackup" title ="Database Backup"> 
            <i class="glyphicon glyphicon-save"></i>
        </a>
    </li>
    
    <!-- BEGIN Button Messages -->
    <li class="hidden-xs">
        <a data-toggle="dropdown" class="dropdown-toggle" href="#" title ="Messages"> 
            <i class="icon-envelope"></i> 
            <span class="badge badge-success">
                <?php
                $countMessages = count($this->getLatestMessages());
                echo $countMessages;
                ?>
            </span> 
        </a> 
      
      <!-- BEGIN Messages Dropdown -->
      <ul class="dropdown-navbar dropdown-menu">
        <li class="nav-header"> <i class="icon-comments"></i> 
            <?php echo $countMessages;?> Messages 
        </li>
        <?php
        $i = 1;
        foreach($this->getLatestMessages() as $messages) {
        if($i%4 != '0') {    
        ?>
        <li class="msg"> <a href="#">
          <label><i class="glyphicon glyphicon-user"></i></label>
          <div> 
              <span class="msg-title">
                  <?php
                  echo $messages['user_name'];
                  ?>
              </span> 
              <span class="msg-time">
                  <i class="icon-time"></i> 
                  <span>
                      <?php
                      $todayDate = strtotime(date('Y-m-d H:i:s'));
                      $messageDate = strtotime($messages['msg_date']);
                      $seconds = $messageDate-$todayDate;
                      if($seconds <= 0) {
                      $hours = abs($seconds/3600);
                      if($hours >= 24) {
                      echo date('M-d', $messageDate);
                      } else {
                      echo date('h:i A', $messageDate);
                      }
                      }?>
                  </span>
              </span>
          </div>
          <p>
             <?php
             $message = substr($messages['msg_message'],0,100);
             echo $message;
             ?>
          </p>
          </a> 
          </li>
        <?php
                $i++;
              }
            }
        ?>
        <li class="more"> <a href="<?php echo SITEURL; ?>messages">See all messages</a> </li>
      </ul>
      <!-- END Notifications Dropdown --> 
    </li>
    <!-- END Button Messages --> 
    
    <!-- BEGIN Button User -->
    <li class="user-profile">
        <a data-toggle="dropdown" href="#" class="user-menu dropdown-toggle"> 
            <img class="nav-user-photo" src="<?php echo THEMEURL ; ?>images/avatar2.jpg" alt="Penny's Photo" />
            <span id="user_info"><?php echo $this->session->gets('user_name'); ?></span> <i class="icon-caret-down"></i>
        </a> 
      
      <!-- BEGIN User Dropdown -->
      <ul class="dropdown-menu dropdown-navbar" id="user_menu">
        <li class="nav-header"> <i class="icon-time"></i> Logined From <?php echo $this->session->gets('login_time'); ?> </li>
        <li> <a href="<?php echo SITEURL; ?>accountSettings"> <i class="icon-cog"></i> Account Settings </a> </li>
        <li> <a href="<?php echo SITEURL; ?>userProfile"> <i class="icon-user"></i> Edit Profile </a> </li>
        <li> <a href="<?php echo SITEURL; ?>changePassword"> <i class="icon-user"></i> Change Password </a> </li>
        <?php
         if($this->access('29', 'access')) {
                 if($this->session->gets('user_role') == '1') {
        ?>
        <li> <a href="<?php echo SITEURL; ?>userProfile/updateBalance"> <i class="icon-user"></i> Balance Update </a> </li>
        <?php
         }  }
        ?>
        <li> <a href="#"> <i class="icon-question"></i> Help </a> </li>
        <li class="divider visible-xs"></li>
        <li class="visible-xs logo-align"> <a href="http://www.siriinnovations.com/" target="_blank"> <img src="<?php echo THEMEURL ; ?>images/siri.png" alt="Siri Innovarions" title="Siri Innovarions">Siri Innovarions</a> </li>
        <li class="visible-xs"> <a href="#"> <i class="icon-tasks"></i> Tasks <span class="badge badge-warning">4</span> </a> </li>
        <li class="visible-xs"> <a href="#"> <i class="icon-bell-alt"></i> Notifications <span class="badge badge-important">8</span> </a> </li>
        <li class="visible-xs"> <a href="#"> <i class="icon-envelope"></i> Messages <span class="badge badge-success">5</span> </a> </li>
        <li class="divider"></li>
        <li> <a href="<?php echo SITEURL; ?>login/logout"> <i class="icon-off"></i> Logout </a> </li>
      </ul>
      <!-- BEGIN User Dropdown --> 
    </li>
    <!-- END Button User -->
  </ul>
  <!-- END Navbar Buttons --> 
</div>
<!-- END Navbar --> 

<!-- BEGIN Container -->
<div class="container" id="main-container"> 
  <!-- BEGIN Sidebar -->
  <div id="sidebar" class="navbar-collapse collapse"> 
    <!-- BEGIN Navlist -->
    <ul class="nav nav-list">
      <li <?php if($this->getUrl(0) == '' or $this->getUrl(0) == 'dashboard') echo "class='active'"; ?>> <a href="<?php echo SITEURL;?>"> <i class="icon-dashboard"></i> <span>Dashboard</span> </a> </li>
      
      <?php if($this->session->gets('user_id') != 30){ ?>
      
      <!-- This is Manage Menus link-->
      <?php if($this->access('23', 'access')) { ?>
      <li <?php if($this->getUrl(0) == 'menus' ) echo "class='active'"; ?>>
      <a href="<?php echo SITEURL;?>menus"> <i class="icon-list"></i> 
      <span>Menus</span> 
      </a> 
      </li>
      <?php } ?>
      
       <!-- This is Manage modules link-->
      <?php if($this->access('24', 'access')) { ?>
      <li <?php if($this->getUrl(0) == 'pages' ) echo "class='active'"; ?>>
          <a href="<?php echo SITEURL;?>pages"> <i class="icon-book"></i> 
      <span>Pages</span> 
      </a> 
      </li>
      <?php } ?>
      
      <!-- This is Manage modules link-->
      <?php if($this->access('2', 'access')) { ?>
      <li <?php if($this->getUrl(0) == 'module' ) echo "class='active'"; ?>>
      <a href="<?php echo SITEURL;?>module"> <i class="glyphicon glyphicon-random"></i> 
      <span>Modules</span> 
      </a> 
      </li>
      <?php } ?>
      
      <!-- This is Manage plugins link-->
      <li <?php if($this->getUrl(0) == 'plugin' || $this->getUrl(0) == 'bannerplugin') echo "class='active'"; ?>>
      <a href="<?php echo SITEURL; ?>plugin"><i class="icon-exclamation"></i>
      <span>Plugins</span>
      </a> 
      </li>
      
      <!-- This is Manage plugins link-->
      <li <?php if($this->getUrl(0) == 'gallery' || $this->getUrl(0) == 'videoGallery') echo "class='active'"; ?>>
      <a href="#" class="dropdown-toggle"><i class="icon-picture"></i>
      <span>Galleries</span> 
      <b class="arrow icon-angle-right"></b>
      </a> 
        <!-- BEGIN Submenu -->
        <ul class="submenu">
           <li><a href="<?php echo SITEURL; ?>gallery">Image Galleries</a></li>
           <li><a href="<?php echo SITEURL; ?>videoGallery">Video Galleries</a></li>            
         </ul>
        <!-- END Submenu --> 
      </li>
      
       <!-- This is Manage Layout link-->
     
      <li <?php if($this->getUrl(0) == 'layout' ) echo "class='active'"; ?>>
      <a href="<?php echo SITEURL;?>layout"> <i class="icon-tablet"></i></i> 
      <span>Layout</span>  
      </a> 
      </li>
      </li>
        
      <!--This is manage Chat-->
            
      <li <?php if($this->getUrl(0) == 'cannedMessages' || $this->getUrl(0) == 'departments' || $this->getUrl(0) == 'operators') echo "class='active'"; ?>> 
      <a href="#" class="dropdown-toggle"><i class="icon-exclamation"></i> 
      <span>Chat</span> 
      <b class="arrow icon-angle-right"></b>
      </a>        
        <!-- BEGIN Submenu -->
        <ul class="submenu">
            <li><a href="<?php echo SITEURL; ?>yestalk/">Home</a></li>
            <li><a href="<?php echo SITEURL; ?>yestalk/chatHistory">Chat History</a></li>
            <li><a href="<?php echo SITEURL; ?>yestalk/cannedMessages">Canned Messages</a></li>
            <li><a href="<?php echo SITEURL; ?>yestalk/departments">Departments</a></li>
            <li><a href="<?php echo SITEURL; ?>yestalk/operators">Operators</a></li>
            <li><a href="<?php echo SITEURL; ?>yestalk/groups">Groups</a></li>
            <li><a href="<?php echo SITEURL; ?>yestalk/languages">Languages</a></li>
            <li><a href="<?php echo SITEURL; ?>yestalk/offlineMessages">Offline Messages</a></li>
            <li><a href="<?php echo SITEURL; ?>yestalk/feedbackMessages">Feedback Messages</a></li>
            <li><a href="<?php echo SITEURL; ?>yestalk/accessLogs">Access Logs</a></li>
            <li><a href="<?php echo SITEURL; ?>yestalk/blockedVisitors">Blocked Visitors</a></li>
            <li><a href="<?php echo SITEURL; ?>yestalk/userOpinions">User Opinions</a></li>
            <li><a href="<?php echo SITEURL; ?>yestalk/poll">Poll</a></li>
            <li <?php if($this->getUrl(0) == 'settings') echo "class='active'"; ?>> 
                <a href="#" class="dropdown-toggle"><i class="icon-exclamation"></i> 
                    <span>Settings</span> 
                    <b class="arrow icon-angle-right"></b>
                </a>  
                <ul class="submenu">
                    <li><a href="<?php echo SITEURL; ?>yestalk/generalSettings">General</a></li>
                    <li><a href="<?php echo SITEURL; ?>yestalk/serverSettings">Server</a></li>
                    <li><a href="<?php echo SITEURL; ?>yestalk/authenticationSettings">Authentication</a></li>
                    <li><a href="<?php echo SITEURL; ?>yestalk/styleSettings">Style</a></li>
                    <li><a href="<?php echo SITEURL; ?>yestalk/chatcodeSettings">Chat Code</a></li>
                    <li><a href="<?php echo SITEURL; ?>yestalk/feedbackcodeSettings">Feedback Code</a></li>
                </ul>
            </li>
         </ul>
        <!-- END Submenu --> 
      </li>
      <!-- End Chat Manage -->
      
      <!-- This is Manage uusers link-->
     
      <li <?php if($this->getUrl(0) == 'users' ) echo "class='active'"; ?>>
      <a href="#" class="dropdown-toggle"> <i class="icon-user"></i></i> 
      <span>Users Management</span> 
       <b class="arrow icon-angle-right"></b>
      </a> 
        <!-- BEGIN Submenu -->
        <ul class="submenu">
           <li><a href="<?php echo SITEURL; ?>users">Users</a></li>
           <li><a href="<?php echo SITEURL; ?>adminRoles">Roles</a></li>
         </ul>
        <!-- END Submenu --> 
      </li>
      
      <li <?php if($this->getUrl(0) == 'sirianalytify' ) echo "class='active'"; ?>>
      <a href="#" class="dropdown-toggle"> <i class="icon-user"></i></i> 
      <span>Siri Analytics</span> 
       <b class="arrow icon-angle-right"></b>
      </a> 
        <!-- BEGIN Submenu -->
        <ul class="submenu">
           <li><a href="<?php echo SITEURL; ?>sirianalytify">Analytics</a></li>
           <li><a href="<?php echo SITEURL; ?>sirianalytify/settings">Settings</a></li>
         </ul>
        <!-- END Submenu --> 
      </li>
      
      <!-- This is Manage marketingCampaign link-->
     
      <li <?php if($this->getUrl(0) == 'marketingCampaign' ) echo "class='active'"; ?>>
      <a href="#" class="dropdown-toggle"> <i class="icon-user"></i></i> 
      <span>Marketing Campaign</span> 
       <b class="arrow icon-angle-right"></b>
      </a> 
        <!-- BEGIN Submenu -->
        <ul class="submenu">
           <li><a href="<?php echo SITEURL; ?>marketingCampaign">Groups</a></li>
           <li><a href="<?php echo SITEURL; ?>marketingCampaign/templates">Templates</a></li>
           <li><a href="<?php echo SITEURL; ?>marketingCampaign/serviceProviders">Service Providers</a></li>
           <li><a href="<?php echo SITEURL; ?>marketingCampaign/emails">Send Emails</a></li>
           <li><a href="<?php echo SITEURL; ?>marketingCampaign/cronjobs">Cron Jobs</a></li>
           <li><a href="<?php echo SITEURL; ?>marketingCampaign/stats">Mailgun Analytics</a></li>
           <li><a href="<?php echo SITEURL; ?>marketingCampaign/sendGridAnalytics">SendGrid Analytics</a></li>
           <li><a href="<?php echo SITEURL; ?>marketingCampaign/mandrillAnalytics">Mandrill Analytics</a></li>
         </ul>
        <!-- END Submenu --> 
      </li>
      
      <li <?php if($this->getUrl(0) == 'heatMap' ) echo "class='active'"; ?>>
         <a href="<?php echo SITEURL; ?>heatMap" class="dropdown-toggle"> <i class="icon-user"></i></i> 
            <span>Heat Map</span> 
            <b class="arrow icon-angle-right"></b>
         </a> 
      </li>    
            
      <li <?php if($this->getUrl(0) == 'memberships' || $this->getUrl(0) == 'gateways') echo "class='active'"; ?>> 
      <a href="#" class="dropdown-toggle"><i class="icon-money"></i> 
      <span>Memberships</span> 
      <b class="arrow icon-angle-right"></b>
      </a>        
        <!-- BEGIN Submenu -->
        <ul class="submenu">
           <li><a href="<?php echo SITEURL; ?>memberships">Memberships</a></li>
            <li><a href="<?php echo SITEURL; ?>gateways">Gateways</a></li>
         </ul>
        <!-- END Submenu --> 
      </li>
      
      <!--This is manage blog-->
      <li <?php if($this->getUrl(0) == 'posts' || $this->getUrl(0) == 'comments' || $this->getUrl(0) == 'categories') echo "class='active'"; ?>> 
      <a href="#" class="dropdown-toggle"><i class="icon-building"></i> 
      <span>Manage Blog</span> 
      <b class="arrow icon-angle-right"></b>
      </a>        
        <!-- BEGIN Submenu -->
        <ul class="submenu">
           <li><a href="<?php echo SITEURL; ?>categories">Manage Categories</a></li>
           <li><a href="<?php echo SITEURL; ?>posts">Manage Posts</a></li>
            <li><a href="<?php echo SITEURL; ?>comments">Manage Comments</a></li>
         </ul>
        <!-- END Submenu --> 
      </li>
     
      <!--This is manage forums link-->
      <li <?php if($this->getUrl(0) == 'forums' || $this->getUrl(0) == 'forumCategories') echo "class='active'"; ?>> 
      <a href="#" class="dropdown-toggle"><i class="icon-building"></i> 
      <span>Manage Forums</span> 
      <b class="arrow icon-angle-right"></b>
      </a>        
        <!-- BEGIN Submenu -->
        <ul class="submenu">
           <li><a href="<?php echo SITEURL; ?>forumCategories">Manage Categories</a></li>
           <li><a href="<?php echo SITEURL; ?>forums">Manage Forums</a></li>
         </ul>
        <!-- END Submenu --> 
      </li>
      
      <!--This is manage messages link-->
      <?php if($this->access('5', 'access')) { ?> 
      <li  <?php if($this->getUrl(0) == 'messages' ) echo "class='active'"; ?>>
      <a href="<?php echo SITEURL;?>messages"> <i class="icon-envelope-alt"></i>
      <span>Manage Messages</span> </a> 
      </li> 
      <?php } ?>
      
      <!--This is manage settings link-->
      <?php if($this->access('4', 'access')) { ?>          
      <li <?php if($this->getUrl(0) == 'logs' || $this->getUrl(0) == 'newsletter' || $this->getUrl(0) == 'emailTemplates') echo "class='active'"; ?>> 
      <a href="#" class="dropdown-toggle"><i class="icon-cogs"></i> 
      <span>Settings</span> 
      <b class="arrow icon-angle-right"></b>
      </a>        
        <!-- BEGIN Submenu -->
        <ul class="submenu">
          <li><a href="<?php echo SITEURL; ?>logs">Log Manager</a></li>
           <?php if($this->access('26', 'access')) { ?> 
          <li><a href="<?php echo SITEURL;?>newsletter">Newsletter</a></li>
           <?php } ?>
          <li><a href="<?php echo SITEURL;?>emailTemplates">Email Templates</a></li>
          <li><a href="<?php echo SITEURL;?>systemConfiguration">Site Settings</a></li>
        </ul>
        <!-- END Submenu --> 
      </li>
      <?php } ?>
      
      <?php } else { ?>
        <li <?php if($this->getUrl(0) == 'marketingCampaign' ) echo "class='active'"; ?>>
          <a href="#" class="dropdown-toggle"> <i class="icon-user"></i></i> 
          <span>Marketing Campaign</span> 
           <b class="arrow icon-angle-right"></b>
          </a> 
            <!-- BEGIN Submenu -->
            <ul class="submenu">
               <li><a href="<?php echo SITEURL; ?>marketingCampaign">Groups</a></li>
               <li><a href="<?php echo SITEURL; ?>marketingCampaign/templates">Templates</a></li>
               <li><a href="<?php echo SITEURL; ?>marketingCampaign/serviceProviders">Service Providers</a></li>
               <li><a href="<?php echo SITEURL; ?>marketingCampaign/emails">Send Emails</a></li>
               <li><a href="<?php echo SITEURL; ?>marketingCampaign/cronjobs">Cron Jobs</a></li>
               <li><a href="<?php echo SITEURL; ?>marketingCampaign/stats">Mailgun Analytics</a></li>
               <li><a href="<?php echo SITEURL; ?>marketingCampaign/sendGridAnalytics">SendGrid Analytics</a></li>
               <li><a href="<?php echo SITEURL; ?>marketingCampaign/mandrillAnalytics">Mandrill Analytics</a></li>
             </ul>
            <!-- END Submenu --> 
          </li>
        <?php } ?>
    </ul>
    <!-- END Navlist --> 
    
    <!-- BEGIN Sidebar Collapse Button -->
    <div id="sidebar-collapse" class="visible-lg"> <i class="icon-double-angle-left"></i> </div>
    <!-- END Sidebar Collapse Button --> 
  </div>
  <!-- END Sidebar --> 
  
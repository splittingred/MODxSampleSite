<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>[[++site_name]] | [[*pagetitle]]</title>
  <meta http-equiv="Content-Type" content="text/html; charset=[[++modx_charset]]" />
  <base href="[[++site_url]]"></base>
  <link rel="stylesheet" href="assets/components/modxss/css/layout.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="assets/components/modxss/css/modxmenu.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="assets/components/modxss/css/form.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="assets/components/modxss/css/modx.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="assets/components/modxss/css/print.css" type="text/css" media="print" />
  <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="[[++site_url]][[~16]]" />
  <script src="assets/components/modxss/js/mootools.js" type="text/javascript"></script>
  <script src="assets/components/modxss/js/drop_down_menu.js" type="text/javascript"></script>
</head>
<body>
<div id="wrapper">
  <div id="minHeight"></div>
  <div id="outer">
    <div id="inner">
      <div id="right">
        <div id="right-inner">
          <h1 class="site-name">[[++site_name]]</h1>
          <div id="sidebar">
            <h2>News:</h2>
            [[getResources?
                &parents=`2`
                &limit=`2`
                &showHidden=`1`
                &tpl=`NewsSidebar`
            ]]
            <div id="recentdocsctnr">
              <h2>Most Recent:</h2>
              <a name="recentdocs"></a>
              <ul class="LIn_shortMode">
                [[getResources?
                    &parents=`0`
                    &limit=`3`
                    &showHidden=`1`
                    &tpl=`MostRecent`
                    &sortby=`editedon`
                    &sortdir=`DESC`
                ]]
                </ul>
              </div>
              <h2>Login:</h2>
              <div id="sidebarlogin">[[!Login? &loginTpl=`FormLogin` &logoutTpl=`Logout`]]</div>
              <h2>Meta:</h2>
              <p><a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional">Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a></p>
              <p><a href="http://jigsaw.w3.org/css-validator/check/referer" title="This page uses valid Cascading Stylesheets" rel="external">Valid <abbr title="W3C Cascading Stylesheets">css</abbr></a></p>
              <p><a href="http://modxcms.com" title="Ajax CMS and PHP Application Framework">MODx</a></p>
          </div>
          <!-- close #sidebar -->
        </div>
        <!-- end right inner-->
      </div>
      <!-- end right -->
      <div id="left">
        <div id="left-inner">
          <div id="content">
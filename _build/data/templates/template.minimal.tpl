<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>[[++site_name]] | [[*pagetitle]]</title>
    <meta http-equiv="Content-Type" content="text/html; charset=[[++modx_charset]]" />
    <link rel="stylesheet" href="[[++base_url]]assets/components/modxss/css/site.css" type="text/css" media="screen" />
    <base href="[[++site_url]]" />

<!--[if lte IE 6]>
  <style type="text/css" media="screen, tv, projection">
        body { behavior: url(assets/components/modxss/js/csshover3.htc); } /* hover:anything support */
        #content { margin-left: 22px; } /* to avoid the BMH */
        a,  a:link { border-bottom-style: solid } /* becuase IE just doesn't dot */
  </style>
  <script type="text/javascript" src="assets/components/modxss/js/frankensleight.js"></script>
<![endif]-->
</head>
<body>

<div id="page">
	<div id="header">
	    <div id="search"><a name="search"></a>
	        <!-- if you wanted a site search, this would be a good place -->
	    </div>
	    <h1><a href="[[~[[++site_start]]]]" title="[[++site_name]]">[[++site_name]]</a></h1>
	</div>
	<!-- close #header -->
	
	<div id="content">
	
	    <div class="post">
	        <h3 id="post-">[[*longtitle]]</h3>
	        [[*content]]
	    </div>
	    <!-- close .post (main column content) -->
	</div>
	<!-- close #content -->
	
	<div id="sidebar">
	    <ul>
	        <li id="dropmenu"><a name="dropmenu"></a><h2>Pages:</h2>
	        [[Wayfinder? &startId=`0`]]
	        </li>
	
	        <li><h2>Meta:</h2>
	            <ul>
	                <li><a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional">Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a></li>
	                <li><a href="http://jigsaw.w3.org/css-validator/check/referer" title="This page uses valid Cascading Stylesheets" rel="external">Valid <abbr title="W3C Cascading Stylesheets">css</abbr></a></li>
	                <li><a href="http://modxcms.com/" title="Powered by MODx, Do more with less.">MOD<strong>x</strong></a></li>
	            </ul>
	        </li>
	
	    </ul>
	</div>
	<!-- close #sidebar -->
	<div class="clear">&nbsp;</div>
	
	<div id="footer">
	    <p>
	        [[++site_name]] is powered by
	        <a href="http://modxcms.com/" title="Powered by MODx"><strong>MOD</strong>x Content Management System</a>
	        <br /><a href="[[~1]]" title="Link to our Blog RSS Feeds">Blog Entries (RSS)</a><br />
            MySQL: [^qt^], [^q^] request(s), PHP: [^p^], total: [^t^], document retrieved from [^s^].
	    </p>
	</div>
	<!-- close #footer -->

</div>
<!-- close #page -->

</body>
</html>
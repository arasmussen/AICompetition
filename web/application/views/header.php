<!DOCTYPE html>
<html>
  <head>
    <title>Venzio</title>
    <link rel="stylesheet" type="text/css" href="/css/reset.css" />
    <link rel="stylesheet" type="text/css" href="/css/styles.css" />
    <script data-main="/js/<?php echo $page; ?>" src="/js/require.js"></script>
    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-36218590-1']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
  </head>
  <body>
    <div id="center">
      <div id="header">
        <div id="logo">
        </div>
        <?php if ($is_logged_in) { ?>
          <div id="profileLink">
            <a href="<?php echo "/profile/$username"; ?>">
              <?php echo $username; ?>
            </a>
          </div>
          <div id="logout">
            <a href="/home/logout">Logout</a>
          </div>
        <?php } else { ?>
          <div id="login">
            <form method="post" action="javascript:void(0)">
              <div id="loginUsername">
                <label>Username</label>
                <input type="text" name="username" />
              </div>
              <div id="loginPassword">
                <label>Password</label>
                <input type="password" name="password" />
              </div>
              <div id="loginButton">
                <input type="submit" value="Sign in" />
              </div>
            </form>
          </div>
        <?php } ?>
      </div>
      <div id="page">

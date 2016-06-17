<?php
/**
 * Header of the application
 * Called from render_wrapped_template
 */
?>
<!DOCTYPE html>
<html lang="<?php echo str_replace('-informal','',$adminlang); ?>"<?php echo $languageRTL;?> >
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

                <link href="/tmp/assets/andanac/assets/css/master.css" type="text/css" rel="stylesheet" />
                <link href="/tmp/assets/andanac/assets/plugins/iview/css/iview.css" type="text/css" rel="stylesheet" />
                <link href="/tmp/assets/andanac/assets/plugins/iview/css/skin/style.css" type="text/css" rel="stylesheet" />


                  <!-- SCRIPTS -->
                  <!--
                  <script src="/tmp/assets/andanac/assets/js/jquery-migrate-1.2.1.js"></script>
                  <script src="/tmp/assets/andanac/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
                  <script src="/tmp/assets/andanac/assets/js/modernizr.custom.js"></script>
                  <script src="/tmp/assets/andanac/assets/plugins/owl-carousel/owl.carousel.min.js"></script>
                  <script src="/tmp/assets/andanac/assets/js/waypoints.min.js"></script>
                  <script src="/tmp/assets/andanac/assets/plugins/prettyphoto/js/jquery.prettyPhoto.js"></script>
                  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
                  <script src="/tmp/assets/andanac/assets/plugins/jelect/jquery.jelect.js"></script>
                  -->

                <!--THEME--> 
                <script src="/tmp/assets/andanac/assets/js/cssua.min.js"></script>
                <script src="/tmp/assets/andanac/assets/js/wow.min.js"></script>
                <script src="/tmp/assets/andanac/assets/js/custom.js"></script>


    <!-- Assets load -->

    <!--
        Notice to developers :


        If you turn debug mode on, the asset manager will be off.
        If you turn degug mode off, the asset manager will be on.

        Without the asset manager, the CSS/JS files are published from their real url (eg: http://yourlimesurvey.url/scripts/admin/admin_core.js)
        So, once a browser loaded once those files, it cache it, and don't load it anymore.
        Then, if you change some css/js files, final user must clean its browser cache to get the new version of the cache.
        This was the old LS behaviour, if debug mode is on, you'll have this very behaviour

        The asset manager resolve the browser cache problem. It copy the css/js files to a tmp directory before publishing it:
        http://yourlimesurvey.url/tmp/assets/e929b9d4/admin_core.js

        For admin GUI, the asset manager works on a base of a "file by file" : each single css/js file is published as a single asset.
        So if you touch any css/js file published via the asset (updating its date of modification), the asset manager will AUTOMATICALLY create a new tmp directory:
        http://yourlimesurvey.url/tmp/assets/eb139b88/admin_core.js

        Then, the browser will automatically reload the file, and the final user don't need to refresh its cache.
        You should never have to delete the tmp/assets directory. You can do it to free some space on your server, but that all.

        notice: the css/js files from third party extension use the package system. It means that the asset manager will publish them on the base of the directory logic.
        So, if you update any css/js file from a third party extension, make sure that the modification date of the root directory is updated.
    -->

    <?php
        $oAdminTheme = AdminTheme::getInstance();
        $oAdminTheme->registerStylesAndScripts();
    ?>
    <?php if(!YII_DEBUG): ?>
        <!-- Debug mode is off, so the asset manager will be used-->
    <?php else: ?>
        <!-- Debug mode is on, so the asset manager will not be used -->
    <?php endif; ?>

    <?php echo $datepickerlang;?>
    <title><?php echo $sitename;?></title>
    <link rel="shortcut icon" href="<?php echo $baseurl;?>styles/favicon.ico" type="image/x-icon" />
    <link rel="icon" href="<?php echo $baseurl;?>styles/favicon.ico" type="image/x-icon" />
    <?php echo $firebug ?>
    <?php $this->widget('ext.LimeScript.LimeScript'); ?>
    <?php $this->widget('ext.LimeDebug.LimeDebug'); ?>
</head>
<body>


    <!-- HEADER -->
     <div class="header" style ="position: relative">
        <div class="top-header" style="padding:0">
            <div class="container">
              <div class="row">
                <div class="col-xs-12">
                  <div class="header-contacts"  style=" padding-top: 17px; padding-bottom: 6px;"> <span class="header-contacts__item"><i class="icon fa fa-phone"></i>+ (55) 5340 0000</span> <a class="header-contacts__item social-links" href="mailto:comunicacion@andanac.com"><i class="icon fa fa-envelope"></i>comunicacion@andanac.com</a> </div>
                            
                                  
                                    
                             
                                  <ul class="social-links list-inline" style="margin-right: 10px ;  padding-top: 17px; padding-bottom: 6px;">
                                    <li><a class="icon fa fa-facebook" href="javascript:void(0);"></a></li>
                                    <li><a class="icon fa fa-twitter" href="javascript:void(0);"></a></li>
                                  <!--  <li><a class="icon fa fa-youtube-play" href="javascript:void(0);"></a></li>
                                    <li><a class="icon fa fa-instagram" href="javascript:void(0);"></a></li>
                                    <li><a  href="#">Acceso</a></li>
                                   -->
                                  </ul>
                                  
                                </div>
                                <!-- end col --> 
                              </div>
                              <!-- end row --> 
                            </div>
                            <!-- end container --> 
                          </div>
                          <!-- end top-header -->
                          
                          <div class="header__inner">
                            <div class="container">
                              <div class="row">
                                <div class="col-md-12 col-sm-12" style="padding-bottom:0px;"> <a href="../index.html" class="logo"> <img class="logo__img img-responsive" src='/tmp/assets/andanac/assets/img/andanac_logo_500px.png' width="200" alt="Logo"> </a>
                                  <div class="navbar yamm">
                                    <div class="navbar-header hidden-md hidden-lg hidden-sm">
                                      <button type="button" data-toggle="collapse" data-target="#navbar-collapse-1" class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                                      <a href="javascript:void(0);" class="navbar-brand"></a> </div>
                                    <div id="navbar-collapse-1" class="navbar-collapse collapse">
                                      <ul class="nav navbar-nav">
                                        <li><a href="{{path("andanac_core_default_index")}}">INICIO</a></li>
                                       <li class="dropdown" ><a href="{{path("andanac_core_default_nosotros")}}">NOSOTROS</a>
                                          <ul role="menu" class="dropdown-menu">
                                            <li> <a href="{{path("andanac_core_default_directorio")}}">DIRECTORIO</a> </li>
                                          </ul>
                                        <li class="dropdown" ><a href="#">SERVICIOS</a>
                                          <ul role="menu" class="dropdown-menu">
                                            <li> <a href="#">SERVICIOS A DISTRIBUIDORES</a> </li>
                                            <li> <a href="#">CONVENIO CON HOTELES</a> </li>
                                            <li> <a href="#">CONVENCIONES</a> </li>
                                            <li> <a href="{{path("andanac_core_default_instalaciones")}}">INSTALACIONES</a> </li>
                                          </ul>
                                        </li>
                                        <li><a href="{{path("andanac_core_default_noticias")}}">NOTICIAS</a></li>
                                        <li><a href="{{path("andanac_core_default_contacto")}}">CONTACTO</a></li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- end container --> 
                          </div>
                          <!-- end header__inner --> 
                        </div>
                  <!-- end header -->


<?php $this->widget('ext.FlashMessage.FlashMessage'); ?>

<script type='text/javascript'>
var frameSrc = "/login";
    <?php if(isset($formatdata)):?>
    var userdateformat='<?php echo $formatdata['jsdate']; ?>';
    var userlanguage='<?php echo $adminlang; ?>';
    <?php endif; ?>
</script>

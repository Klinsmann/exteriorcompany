<?php


defined('_JEXEC') or die;

JHtml::_('behavior.framework', true);

$app = JFactory::getApplication();

?>

<?php echo '<?'; ?>xml version="1.0" encoding="<?php echo $this->_charset ?>"?>
<!DOCTYPE html>
<html lang="es">

<head>

<jdoc:include type="head" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/layout.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/ie7.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/ie8.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/ie9.css" type="text/css" />

</head>
<body>
	<section class="container">
    	<nav>
        	<div class="content-nav">
            	<jdoc:include type="modules" name="menutop" style="none" /> 
            </div><!--fin del content-nav-->
        </nav>
        
        <header>
        	<div class="content-header">
            	<figure><a href="<?php echo $app->getCfg('sitename'); ?>"> <img src="<?php echo $this->baseurl ?>/templates/									<?php echo $this->template ?>/images/logo.jpg" title="<?php echo $this->template; ?>
" /></a></figure>
				<div class="titular">
                	<jdoc:include type="modules" name="header" style="xhtml" />
                 </div><!--fin del div titular-->
                 <section class="galeria">
                 	<jdoc:include type="modules" name="galeria" style="xhtml" /> 
                 </section><!--fin de la galeria-->
                 <section class="slogan">
                 	<jdoc:include type="modules" name="slogan" style="xhtml" /> 
                 </section><!--fin de la galeria-->

            </div><!--fin del div content-header-->
        </header>
        <section class="contenido">
        	<div class="galeria2">
            	<jdoc:include type="modules" name="galeria2" style="xhtml" /> 
            </div><!--fin del div galeria2-->
            <div class="nf"></div>
            
            <div class="about">
            	<jdoc:include type="modules" name="about" style="xhtml" /> 
            </div><!--fin del div about-->
            
            <div class="articles">
            	<jdoc:include type="modules" name="articles" style="xhtml" /> 
            </div><!--fin del div articles-->
            
            <div class="location">
            	<jdoc:include type="modules" name="location" style="xhtml" /> 
            </div><!--fin del div location-->
            
        </section><!--fin del section contenido-->
        <footer>
        	<div class="content-footer">
            	<p>Exterior Company © 2014</p>
                <p>Desarrollado por @<a href="http://twitter.com/Klinsmannf">Klinsmann</a></p>
            </div>
        </footer>
    </section><!--fin del div container-->
    
</body>

</html>

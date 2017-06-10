<?php defined('_JEXEC') or die('Restricted access'); ?>
<?php require_once dirname(__FILE__).DIRECTORY_SEPARATOR.'framework/functions.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
<jdoc:include type="head" />
</head>

<body class="<?php echo $this->params->get('fontfamily'); ?><?php if($autowide=="yes") { echo " autohidewide"; } ?>">
<div id="header-outer" class="clr">
<div id="header-inner">
<div id="header-float">
<div id="logo" class="wow fadeInLeft">
<img class="logo" src="<?php echo $this->baseurl; ?>/<?php echo "$logo"; ?>" />
</div>
<?php include dirname(__FILE__).DIRECTORY_SEPARATOR.'framework/toolbar.php'; ?>
</div>
</div>
</div>
<?php if($this->countModules('banner')) : ?>
<div id="banner-outer" class="clr">
<div id="banner-inner">
<div id="banner-float">
<div class="wow bounceInDown">
<jdoc:include type="modules" name="banner" style="none" />
</div>
</div>
</div>
</div>
<?php endif; ?>
<div id="spacer" class="clr">&nbsp;</div>
<div id="body-outer" class="clr">
<div id="body-inner">
<?php if($this->countModules('left')) : ?>
<div id="left<?php echo $columns; ?>" class="wow fadeInLeft">
<jdoc:include type="modules" name="left" style="mhtml" />
</div>
<?php endif; ?>
<div id="body<?php echo $columns; ?>">
<?php if($this->countModules('user1') or $this->countModules('user2') or $this->countModules('user3')) : ?>
<div id="user<?php echo $columns; ?>" class="clr">
<div class="<?php echo $user_width; ?>">
<?php if($this->countModules('user1')) : ?>
<div class="user wow fadeInUp first">
<jdoc:include type="modules" name="user1" style="mhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('user2')) : ?>
<div class="user wow fadeInUp second">
<jdoc:include type="modules" name="user2" style="mhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('user3')) : ?>
<div class="user wow fadeInUp third">
<jdoc:include type="modules" name="user3" style="mhtml" />
</div>
<?php endif; ?>
</div>
</div>
<?php endif; ?>
<?php if($this->countModules('user4') or $this->countModules('user5') or $this->countModules('user6')) : ?>
<div id="user<?php echo $columns; ?>" class="clr">
<div class="<?php echo $user2_width; ?>">
<?php if($this->countModules('user4')) : ?>
<div class="user wow fadeInUp first">
<jdoc:include type="modules" name="user4" style="mhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('user5')) : ?>
<div class="user wow fadeInUp second">
<jdoc:include type="modules" name="user5" style="mhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('user6')) : ?>
<div class="user wow fadeInUp third">
<jdoc:include type="modules" name="user6" style="mhtml" />
</div>
<?php endif; ?>
</div>
</div>
<?php endif; ?>
<div class="clr">
<div id="layer<?php echo $columns; ?>">
<div id="mainbody" class="clr">
<jdoc:include type="message" />
<jdoc:include type="component" />
</div>
</div>
</div>
<?php if($this->countModules('user7') or $this->countModules('user8') or $this->countModules('user9')) : ?>
<div id="user<?php echo $columns; ?>" class="clr">
<div class="<?php echo $user3_width; ?>">
<?php if($this->countModules('user7')) : ?>
<div class="user wow fadeInDown first">
<jdoc:include type="modules" name="user7" style="mhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('user8')) : ?>
<div class="user wow fadeInDown second">
<jdoc:include type="modules" name="user8" style="mhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('user9')) : ?>
<div class="user wow fadeInDown third">
<jdoc:include type="modules" name="user9" style="mhtml" />
</div>
<?php endif; ?>
</div>
</div>
<?php endif; ?>
</div>
<?php if($this->countModules('right')) : ?>
<div id="right<?php echo $columns; ?>" class="wow fadeInRight">
<jdoc:include type="modules" name="right" style="mhtml" />
</div>
<?php endif; ?>
</div>
</div>
<?php if($this->countModules('wide1')) : ?>
<div id="wide-outer">
<div id="wide-float" class="wow fadeInUp">
<jdoc:include type="modules" name="wide1" style="none" />
</div>
</div>
<?php endif; ?>
<?php if($this->countModules('bottom1') or $this->countModules('bottom2') or $this->countModules('bottom3') or $this->countModules('bottom4') or $this->countModules('bottom5')) : ?>
<div id="bottom-outer" class="clr">
<div id="bottom-inner" class="<?php echo $bottom_width; ?>">
<?php if($this->countModules('bottom1')) : ?>
<div class="bottom wow fadeInDown first">
<jdoc:include type="modules" name="bottom1" style="mhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('bottom2')) : ?>
<div class="bottom wow fadeInDown second">
<jdoc:include type="modules" name="bottom2" style="mhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('bottom3')) : ?>
<div class="bottom wow fadeInDown third">
<jdoc:include type="modules" name="bottom3" style="mhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('bottom4')) : ?>
<div class="bottom wow fadeInDown forth">
<jdoc:include type="modules" name="bottom4" style="mhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('bottom5')) : ?>
<div class="bottom wow fadeInDown fifth">
<jdoc:include type="modules" name="bottom5" style="mhtml" />
</div>
<?php endif; ?>
</div>
</div>
<?php endif; ?>
<?php if($this->countModules('bottom6') or $this->countModules('bottom7') or $this->countModules('bottom8') or $this->countModules('bottom9') or $this->countModules('bottom10')) : ?>
<div id="bottom-outer" class="clr">
<div id="bottom-inner" class="<?php echo $bottom2_width; ?>">
<?php if($this->countModules('bottom6')) : ?>
<div class="bottom wow fadeInDown first">
<jdoc:include type="modules" name="bottom6" style="mhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('bottom7')) : ?>
<div class="bottom wow fadeInDown second">
<jdoc:include type="modules" name="bottom7" style="mhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('bottom8')) : ?>
<div class="bottom wow fadeInDown third">
<jdoc:include type="modules" name="bottom8" style="mhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('bottom9')) : ?>
<div class="bottom wow fadeInDown forth">
<jdoc:include type="modules" name="bottom9" style="mhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('bottom10')) : ?>
<div class="bottom wow fadeInDown fifth">
<jdoc:include type="modules" name="bottom10" style="mhtml" />
</div>
<?php endif; ?>
</div>
</div>
<?php endif; ?>
<?php if($this->countModules('bottom11') or $this->countModules('bottom12') or $this->countModules('bottom13') or $this->countModules('bottom14') or $this->countModules('bottom15')) : ?>
<div id="bottom-outer" class="clr">
<div id="bottom-inner" class="<?php echo $bottom3_width; ?>">
<?php if($this->countModules('bottom11')) : ?>
<div class="bottom wow fadeInDown first">
<jdoc:include type="modules" name="bottom11" style="mhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('bottom12')) : ?>
<div class="bottom wow fadeInDown second">
<jdoc:include type="modules" name="bottom12" style="mhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('bottom13')) : ?>
<div class="bottom wow fadeInDown third">
<jdoc:include type="modules" name="bottom13" style="mhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('bottom14')) : ?>
<div class="bottom wow fadeInDown forth">
<jdoc:include type="modules" name="bottom14" style="mhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('bottom15')) : ?>
<div class="bottom wow fadeInDown fifth">
<jdoc:include type="modules" name="bottom15" style="mhtml" />
</div>
<?php endif; ?>
</div>
</div>
<?php endif; ?>
<?php if($this->countModules('footer1') or $this->countModules('footer2') or $this->countModules('footer3') or $this->countModules('footer4') or $this->countModules('footer5')) : ?>
<div id="footer-outer" class="clr">
<div id="footer-inner" class="<?php echo $footer_width; ?>">
<div id="footer-float">
<?php if($this->countModules('footer1')) : ?>
<div class="footer wow fadeInDown first">
<jdoc:include type="modules" name="footer1" style="mhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('footer2')) : ?>
<div class="footer wow fadeInDown second">
<jdoc:include type="modules" name="footer2" style="mhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('footer3')) : ?>
<div class="footer wow fadeInDown third">
<jdoc:include type="modules" name="footer3" style="mhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('footer4')) : ?>
<div class="footer wow fadeInDown forth">
<jdoc:include type="modules" name="footer4" style="mhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('footer5')) : ?>
<div class="footer wow fadeInDown fifth">
<jdoc:include type="modules" name="footer5" style="mhtml" />
</div>
<?php endif; ?>
</div>
</div>
</div>
<?php endif; ?>
<?php include dirname(__FILE__).DIRECTORY_SEPARATOR.'framework/copyframe.php'; ?>
<?php if($animewow=="yes") { ?>
<script>new WOW().init();</script>
<?php } ?>
</body>
</html>
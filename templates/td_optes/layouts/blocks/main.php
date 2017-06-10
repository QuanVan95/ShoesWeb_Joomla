<?php
/**
 * @package td_optes Template
 * @author joomlatd
 * @file-Main Component's Structure
 */

defined('_JEXEC') or die;
$blogger_icon = $this->params->get('blogger_icon');
$digg_icon = $this->params->get('digg_icon');
$facebook_icon = $this->params->get('facebook_icon');
$flickr_icon = $this->params->get('flickr_icon');
$google_icon = $this->params->get('google_icon');
$linkedin_icon = $this->params->get('linkedin_icon');
$myspace_icon = $this->params->get('myspace_icon');
$pinterest_icon = $this->params->get('pinterest_icon');
$stumble_icon = $this->params->get('stumble_icon');
$youtube_icon = $this->params->get('youtube_icon');
$vimeo_icon = $this->params->get('vimeo_icon');
$delicious_icon = $this->params->get('delicious_icon');
$twitter_icon = $this->params->get('twitter_icon');
$rssfeed_icon = $this->params->get('rssfeed_icon');
?>

		<div class="modspot">
		
		<div class="container clear">
<div id="social-bookmarks">
<ul class="social-bookmarks">
<?php if ($this->params->get('facebook_icon')) : ?>
<li class="facebook"><a href="<?php echo $facebook_icon; ?>">Follow via facebook</a></li>
<?php endif; ?>
<?php if($this->params->get('twitter_icon')) : ?>
<li class="twitter"><a href="<?php echo $twitter_icon; ?>">Follow via twitter</a></li>
<?php endif; ?>
<?php if($this->params->get('digg_icon')) : ?>
<li class="digg"><a href="<?php echo $digg_icon; ?>">Follow via digg</a></li>
<?php endif; ?>
<?php if($this->params->get('google_icon')) : ?>
<li class="google"><a href="<?php echo $google_icon; ?>">Follow via google</a></li>
<?php endif; ?>
<?php if($this->params->get('myspace_icon')) : ?>
<li class="myspace"><a href="<?php echo $myspace_icon; ?>">Follow via myspace</a></li>
<?php endif; ?>
<?php if($this->params->get('linkedin_icon')) : ?>
<li class="linkedin"><a href="<?php echo $linkedin_icon; ?>">Follow via linkedin</a></li>
<?php endif; ?>
<?php if($this->params->get('blogger_icon')) : ?>
<li class="blogger"><a href="<?php echo $blogger_icon; ?>">Follow via blogger</a></li>
<?php endif; ?>
<?php if($this->params->get('rssfeed_icon')) : ?>
<li class="rss"><a href="<?php echo $rssfeed_icon; ?>">Follow via rss</a></li>
<?php endif; ?>
</ul>
</div> 
<jdoc:include type="message" />    
		<?php if (($this->countModules( 'left' ) ==0) AND ($this->countModules('right' ) ==0))
        { ?> 
        <!-- Without Sidebars -->		
        <div class="row">
            <div class="col-md-12">
                <?php if($this->countModules('maintop')) : ?>

            	<div class="mainspot"><jdoc:include type="modules" name="maintop" style="td_xhtml" /></div>

                <?php endif; ?>
                
                <jdoc:include type="component" />
                
				<?php if($this->countModules('mainbottom')) : ?>

            	<div class="mainspot"><jdoc:include type="modules" name="mainbottom" style="td_xhtml" /></div>

                <?php endif; ?>
            </div>
        </div>
        </div> <!--Container End -->
        </div> <!-- Modspot End -->
        <?php } ?>
                
		<?php if (($this->countModules( 'left' ) >=1) AND ($this->countModules('right' ) >=1))
        { ?> 
        <!-- With 2 Sidebars (Left & Right) -->
        <div class="row">
            <div class="col-md-3">
                <div class="sidebar">
                    <jdoc:include type="modules" name="left" style="td_xhtml" />
                </div>
            </div> 
            <div class="col-md-6">
            	<?php if($this->countModules('maintop')) : ?>

            	<div class="mainspot"><jdoc:include type="modules" name="maintop" style="td_xhtml" /></div>

                <?php endif; ?>

          		<div class="content"><jdoc:include type="component" /></div> <!-- Main Component -->

                <?php if($this->countModules('mainbottom')) : ?>

                <div class="mainspot"><jdoc:include type="modules" name="mainbottom" style="td_xhtml" /></div>

                <?php endif; ?>
            </div>
            <div class="col-md-3">
                <div class="sidebar">
                    <jdoc:include type="modules" name="right" style="td_xhtml" />
                </div>
            </div>
        </div>
        </div>
        </div>
        <?php } ?>
                
		<?php if (($this->countModules( 'left' ) >=1) AND ($this->countModules('right' ) ==0))
        { ?> 
        <!-- With Left Sidebar -->
        <div class="row">
            <div class="col-md-3">
                <div class="sidebar">
                    <jdoc:include type="modules" name="left" style="td_xhtml" />
                </div>
            </div>
            <div class="col-md-9">
            	<?php if($this->countModules('maintop')) : ?>

            	<div class="mainspot"><jdoc:include type="modules" name="maintop" style="td_xhtml" /></div>

                <?php endif; ?>
                
          		<div class="content"><jdoc:include type="component" /></div> <!-- Main Component -->
                
                <?php if($this->countModules('mainbottom')) : ?>

                <div class="mainspot"><jdoc:include type="modules" name="mainbottom" style="td_xhtml" /></div>

                <?php endif; ?>
                
            </div>
        </div>
        </div>
        </div>
        <?php } ?>
        
		<?php if (($this->countModules( 'left' ) ==0) AND ($this->countModules('right' ) >=1)) { ?>
        <!-- With Right Sidebar -->
        <div class="row">
            <div class="col-md-9">
            	<?php if($this->countModules('maintop')) : ?>

            	<div class="mainspot"><jdoc:include type="modules" name="maintop" style="td_xhtml" /></div>

                <?php endif; ?>
                
          		<div class="content"><jdoc:include type="component" /></div> <!-- Main Component -->
                
                <?php if($this->countModules('mainbottom')) : ?>

                <div class="mainspot"><jdoc:include type="modules" name="mainbottom" style="td_xhtml" /></div>

                <?php endif; ?>

            </div>      
            <div class="col-md-3">
                <div class="sidebar">
                    <jdoc:include type="modules" name="right" style="td_xhtml" />
                </div>
            </div>
        </div>
        </div>
        </div>
        <?php } ?>


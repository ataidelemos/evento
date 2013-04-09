<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Murky Stairwell 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20130405

-->
<html xmlns="http://www.w3.org/1999/xhtml">

<body>
<div id="wrapper">
	
	<?php echo $this->element('head');?>
	<!-- end #header -->
	<?php echo $this->element('top',array('inscricoesAbertas'=>false));?>
	<div id="page">
		<div id="content">
			<div class="post">
				<?php echo $this->fetch('content'); ?>
				<!--<h2 class="title"><a href="#">Lorem ipsum sed aliquam</a></h2>
				<p class="meta"><span class="date">April 04, 2013</span><span class="posted">Posted by <a href="#">Someone</a></span></p>
				<div style="clear: both;">&nbsp;</div>
				-->
			</div>
			<div style="clear: both;">&nbsp;</div>
		</div>
		<!-- end #content -->
		
		<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	<!-- end #page --> 
</div>
<?php echo $this->element('footer'); ?>
<!-- end #footer -->
</body>
<?php //echo $this->element('sql_dump'); ?>
</html>


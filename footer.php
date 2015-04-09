</div>
<div style="position: absolute;
            bottom: 0; right: 0;
            font-size: 25;
            background-color: black;">

<?php $_SESSION["previous"] = "index.php?slide=".($slide-1); ?>
<?php $_SESSION["next"] = "index.php?slide=".($slide+1); ?>
				<a style="color: white;"
				href="<?php echo $_SESSION["previous"]; ?>">Previous</a>
				<a style="color: white;" 
				href="<?php echo $_SESSION["next"];?>">Next</a>
</div>

	<script type="text/javascript">
		document.onkeydown=function(keyPress)
		{
			if(keyPress.which == 65 || keyPress.which == 37) 
				window.location.replace("<?php echo $_SESSION["previous"]; ?>");
			if(keyPress.which == 68 || keyPress.which == 39) 
				window.location.replace("<?php echo $_SESSION["next"];?>");
		}
	</script>

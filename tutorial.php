<?php require('includes/content/header.php'); ?>
	
	<script>
	function renderPage(page) {
		document.getElementById("tutorial").innerHTML=document.getElementById(page).innerHTML;
		document.getElementById("ltp").innerHTML="<a class=\"link\" href=?p=" + page + " >Link To This Page </a>";
	}
	</script>

	<table>
		<tr>
			<td id="TOC">
				<div id="chaps">
					<?
					require('includes/content/tutnav.php');
					?>
				</div>
			</td>

			<td id="tutorial"
			</td>
		</tr>
	</table>

	<div id="tutcontent">
		<?
		require('includes/content/content.php');
		?>
	</div>

<?php require('includes/content/footer.php'); ?>

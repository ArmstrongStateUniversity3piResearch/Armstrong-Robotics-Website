<?php require('header.php'); ?>
	
	<script>
	function renderPage(page) {
		document.getElementById("tutorial").innerHTML=document.getElementById(page).innerHTML;
	}
	</script>

	<table>
		<tr>
			<td id="TOC">
				<div id="chaps">
					<?
					require('tutnav.php');
					?>
				</div>
			</td>

			<td id="tutorial"
			</td>
		</tr>
	</table>

	<div id="tutcontent">
		<?
		require('content.php');
		?>
	</div>

<?php require('footer.php'); ?>
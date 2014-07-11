<?php
$remaining_cards = $_GET['t'];
if($remaining_cards > 0)
{
	$url = '/deal.php';
	$text = 'Deal more cards';
}
else
{
	$url = '/new-game.php';
	$text = 'Start a New Game';
}
print <<< HTML
<p>There are <b>$remaining_cards</b> left.</p>
<p>
	<a href="$url">$text</a>
</p>
<script type="text/javascript">
alert(22);
</script>
HTML;

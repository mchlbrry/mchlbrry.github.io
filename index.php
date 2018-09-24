



<?php


$Day1   = date('Y-m-d', strtotime('monday this week'));
$Day2  = date('Y-m-d', strtotime('tuesday this week'));

$Start1   = ' 1:30PM';
$End1     = ' 2:30PM';

$Start2   = ' 2:30PM';
$End2     = ' 3:30PM';

$Program1 = ['Room 123', 'Subject deets', 'Some Blurb'];
$Program2 = ['Room ABC', 'Deets Subject', 'Blurb Blurb Blurb'];

echo('Mondays date: '.$Monday);
echo "<br>";
echo('Tuesdays date: '.$Tuesday);



?>

<hr>

<h1>Program 1</h1>
<p><?php echo($Program1[0].', '.$Program1[1].', '.$Program1[2]); ?></p>

<form method="post" action="download-ics.php">
  <input type="hidden" name="date_start" value="<?php echo($Day1.$Start1) ?>">
  <input type="hidden" name="date_end" value="<?php echo($Day1.$End1) ?>">
  <input type="hidden" name="location" value="<?php echo $Program1[0]?>">
  <input type="hidden" name="description" value="<?php echo $Program1[1]?>">
  <input type="hidden" name="summary" value="<?php echo $Program1[2]?>">
  <input type="hidden" name="url" value="http://example.com">
  <input type="submit" value="Add to Calendar">
</form>

<hr>

<h1>Program 2</h1>
<p><?php echo($Program2[0].', '.$Program2[1].', '.$Program2[2]); ?></p>

<form method="post" action="download-ics.php">
  <input type="hidden" name="date_start" value="<?php echo($Day2.$Start2) ?>">
  <input type="hidden" name="date_end" value="<?php echo($Day2.$End2) ?>">
  <input type="hidden" name="location" value="<?php echo $Program2[0]?>">
  <input type="hidden" name="description" value="<?php echo $Program2[1]?>">
  <input type="hidden" name="summary" value="<?php echo $Program2[2]?>">
  <input type="hidden" name="url" value="http://example.com">
  <input type="submit" value="Add to Calendar">
</form>

<hr>
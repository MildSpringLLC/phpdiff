<!DOCTYPE html>
<HTML lang="en">
<HEAD>
<meta charset="utf-8">
<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
</HEAD>
<BODY>
<?php
include_once 'inline_function.php';
?>
<?php
//$text1='This product comes with NO WARRANTY. There are no refnds.';
//$text2='This product comes with a 3yr warranty. There are no refunds.';
$line1=$_POST["line1"];
$line2=$_POST["line2"];

$text1=$line1;
$text2=$line2;
if (! $text1) { $text1 = 'This product comes with NO WARRANTY. There are no refnds.'; }
if (! $text2) { $text2 = 'This product comes with a 3yr warranty. There are no refunds.'; }

/////////////////////////////

//$text1='This product comes with NO WARRANTY. There are no refnds.';
//$text2='This product comes with a 3yr warranty. There are no refunds.';

//$nl = '#**!)@#';
//$diff = inline_diff($text1, $text2, $nl);
//echo '<style>del{background:#fcc}ins{background:#cfc}</style>'.$diff."\n";

?>
<form class="well" action="diff_lines.php" method="post">
		<fieldset>
          <div class="control-group">
            <label class="control-label" for="textarea">Line1</label>
            <input type="text" name="line1" class="span3" <?php if (! $line1) echo 'value="' . $text1 . '"' ?> >
            <br>
			<label class="control-label" for="textarea">Line2</label>
			<input type="text" name="line2" class="span3" <?php if (! $line2) echo 'value="' . $text2 . '"' ?> >
          </div>
          <div class="form-actions">
            <button type="submit" class="btn btn-primary">Process</button>
            <!-- <button class="btn">Cancel</button> -->
          </div>
        </fieldset>
</form>
<?php
$nl = '#**!)@#';
$diff = inline_diff($text1, $text2, $nl);
echo '<style>del{background:#fcc}ins{background:#cfc}</style>'.$diff."\n";
?>
</BODY>
</HTML>

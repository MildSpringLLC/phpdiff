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
<form class="well">
		<fieldset>
          <div class="control-group">
            <label class="control-label" for="textarea">Line1</label>
            <div class="controls">
              <textarea class="input-xlarge" id="line1" rows="1"></textarea>
            </div>
            <br>
			<label class="control-label" for="textarea">Line2</label>
			<div class="controls">
			  <textarea class="input-xlarge" id="line2" rows="1"></textarea>
			</div>
          </div>
          <div class="form-actions">
            <button type="submit" class="btn btn-primary">Process</button>
            <!-- <button class="btn">Cancel</button> -->
          </div>
        </fieldset>
</form>
<?php
$text1='This product comes with NO WARRANTY. There are no refnds.';
$text2='This product comes with a 3yr warranty. There are no refunds.';

$nl = '#**!)@#';
$diff = inline_diff($text1, $text2, $nl);
echo '<style>del{background:#fcc}ins{background:#cfc}</style>'.$diff."\n";
?>
</BODY>
</HTML>

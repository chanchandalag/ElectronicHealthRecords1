<?php
$uid = $_GET['uid'];
?>

<form method="POST" action="/pages/prescription-add.php">
<div class="form-group">
<textarea class="form-control" rows="10" placeholder="Input prescribed medicine" id="prescription" name="prescription"></textarea>
<input type="hidden" name="csid" value="<?=$uid?>"></input>
</div>
<button type="submit" class="btn btn-block btn-primary btn-lg">Save</button>
</form>
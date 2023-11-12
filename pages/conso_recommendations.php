<?php
$uid = $_GET['uid'];
?>

<form method="POST" action="/pages/recommendation-add.php">
<div class="form-group">
<textarea class="form-control" rows="10" placeholder="Input recommendation/suggestions" id="recommendation" name="recommendation"></textarea>
<input type="hidden" name="csid" value="<?=$uid?>"></input>
</div>
<button type="submit" class="btn btn-block btn-primary btn-lg">Save</button>
</form>
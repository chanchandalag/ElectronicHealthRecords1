<?php
$uid = $_GET['uid'];
?>

<form method="POST" action="/pages/findings-add.php">	
<div class="form-group">
<textarea class="form-control" rows="5" placeholder="Input findings" id="findings" name="findings"></textarea>
<input type="hidden" name="csid" value="<?=$uid;?>" ></input>
</div>

<div class="form-group">
<label>Recommendation</label>
<textarea class="form-control" rows="5" placeholder="Input recommendation/suggeestions" id="recommendation" name="recommendation"></textarea>
</div>

<div class="form-group">
<label>Prescription</label>
<textarea class="form-control" rows="5" placeholder="Input prescribed medicine" id="prescription" name="prescription"></textarea>
</div>



<button type="submit" class="btn btn-block btn-primary btn-lg">Save</button>
</form>

<?php
use yii\helpers\Url;


echo '<div class="col-lg-3"><table class="table table-bordered table-striped">
<thead>
	<tr>
		<th>Группы</th>
	</tr>
</thead>';
foreach ($group as $key => $value)
	{
		echo "<tr>";
		$url = Url::toRoute(['site/gg', 'id' => $key]);
		echo "<td>".'<a href="'.$url.'">'.$value.'</a><br>'."</td></tr>";
	}
	echo '</table>
	</div>';




echo '<div class="col-lg-3"><table class="table table-bordered table-striped">
  <thead>
    <tr>
		  <th>#</th>
      <th>Студенты</th>
    </tr>
  </thead>';
	$t=$id;
  foreach ($student as $value){
	$i++;
  echo "<tr>";
  echo    "<th>$i</th>";
  echo    "<td>
	           <a href=\"".Url::toRoute(['site/st', 'id' => $t,'ids' => $value->id])."\">".$value->fio."</a>";
	echo    "</td>
	     </tr>";
}
echo '</table></div>'
?>


<div class="col-lg-5" style="position: relative;float:left; margin-left:10px;">
<h1 style="margin-top:0px;"><?= $student1->fio ?></h1>
<h3><?= 'Общая посещаемость - </br>'.$student1->total ?></h3>
<?php foreach($student1->subjects as $x) : ?>
	<?=
	$student1->totalSubject($x['subject_id'])
	?><br />
<?php endforeach; ?>
</div>

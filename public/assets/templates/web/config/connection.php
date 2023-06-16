<?php
$cn = pg_connect("host=localhost port=5432 dbname=Teste user=postgres password=admin");
if(!$cn){
    echo "Connection Error";
}
/*$result = pg_query($cn,"select * from compartilhamentos");
while($row = pg_fetch_object($result)){
    echo "\n".$row->justificativa;
}
pg_close($cn);*/
?>
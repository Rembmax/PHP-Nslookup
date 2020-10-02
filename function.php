<?PHP
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function getUserIP()
{
   $client  = @$_SERVER['HTTP_CLIENT_IP'];
   $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
   $remote  = $_SERVER['REMOTE_ADDR'];
   if(filter_var($client, FILTER_VALIDATE_IP))
   {
       $ip = $client;
   }
   elseif(filter_var($forward, FILTER_VALIDATE_IP))
   {
       $ip = $forward;
   }
   else
   {
       $ip = $remote;
   }
   return $ip;
}
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function REG_NSLOOKUP($Dominio){
	$result = dns_get_record("$Dominio", DNS_A, $authns, $addtl);
$r=0;
foreach ($result as $value){
        $r++;
}
?>
<div class="container">
<table class="table">
    <thead>
      <tr>
        <th>NAME</th>
        <th>TYPE</th>
	<th>TTL</th>
	<th>IPV4/IPV6</th>
      </tr>
    </thead>
<tbody>
</div>
<?PHP

for($i=0; $i<$r; $i++){
?>
<tr class="table-info">
<td> <?PHP echo $result[$i][host];?></td>
<td> <?PHP echo $result[$i][type];?></td>
<td> <?PHP echo $result[$i][ttl];?></td>
<td> <?PHP echo $result[$i][ip];?></td>
</tr>
<?PHP
}
REG_AAAA($Dominio);
REG_CAA($Dominio);
REG_MX($Dominio);
REG_NS($Dominio);
REG_TXT($Dominio);
?>
</tbody>
</table>
<?PHP
}

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function REG_AAAA($Dominio){
        $result = dns_get_record("$Dominio", DNS_AAAA, $authns, $addtl);
$count=0;
foreach ($result as $value){
        $count++;
}
?>
<?PHP
for($i=0; $i<$count; $i++){
?>
<tr class="table-success">
<td> <?PHP echo $result[$i][host];?></td>
<td> <?PHP echo $result[$i][type];?></td>
<td> <?PHP echo $result[$i][ttl];?></td>
<td> <?PHP echo $result[$i][ipv6];?></td>
</tr>
<?PHP
}
?>
<?PHP
}
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function REG_CAA($Dominio){
        $result = dns_get_record("$Dominio", DNS_CAA, $authns, $addtl);
$count1=0;
foreach ($result as $value){
        $count1++;
}
if ($count1 > 0){
?>
<table class="table">
    <thead>
      <tr>
        <th>NAME</th>
        <th>TYPE</th>
        <th>TTL</th>
	<th>FLAG</th>
	<th>TAG</th>
	<th>VALUE</th>
      </tr>
    </thead>

<?PHP
for($i=0; $i<$count1; $i++){
?>
<tr class="table-primary">
<td> <?PHP echo $result[$i][host];?></td>
<td> <?PHP echo $result[$i][type];?></td>
<td> <?PHP echo $result[$i][ttl];?></td>
<td> <?PHP echo $result[$i][flags];?></td>
<td> <?PHP echo $result[$i][tag];?></td>
<td> <?PHP echo $result[$i][value];?></td>
</tr>
<?PHP
}
}
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
function REG_MX($Dominio){
        $result = dns_get_record("$Dominio", DNS_MX, $authns, $addtl);
$count1=0;
foreach ($result as $value){
	$count1++;
#	foreach ($value as $rr => $pp){
#	echo $rr.": ".$pp."<br>";
#	}
}
if ($count1 > 0){
?>
<table class="table">
    <thead>
      <tr>
        <th>NAME</th>
        <th>TYPE</th>
        <th>TTL</th>
        <th>PRI</th>
        <th>TARGET</th>
      </tr>
    </thead>
<?PHP
for($i=0; $i<$count1; $i++){
?>
<tr class="table-warning">
<td><?PHP echo $result[$i][host];?></td>
<td><?PHP echo $result[$i][type];?></td>
<td><?PHP echo $result[$i][ttl];?></td>
<td><?PHP echo $result[$i][pri];?></td>
<td><?PHP echo $result[$i][target];?></td>
</tr>
<?PHP
}
}
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
function REG_NS($Dominio){
        $result = dns_get_record("$Dominio", DNS_NS, $authns, $addtl);
$count1=0;
foreach ($result as $value){
        $count1++;
#       foreach ($value as $rr => $pp){
#       echo $rr.": ".$pp."<br>";
#       }
}
if ($count1 > 0){
?>
<table class="table">
    <thead>
      <tr>
        <th>NAME</th>
        <th>TYPE</th>
        <th>TTL</th>
        <th>TARGET</th>
      </tr>
    </thead>
<?PHP
for($i=0; $i<$count1; $i++){
?>
<tr class="table-light">
<td><?PHP echo $result[$i][host];?></td>
<td><?PHP echo $result[$i][type];?></td>
<td><?PHP echo $result[$i][ttl];?></td>
<td><?PHP echo $result[$i][target];?></td>
</tr>
<?PHP
}
}
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
function REG_TXT($Dominio){
        $result = dns_get_record("$Dominio", DNS_TXT, $authns, $addtl);
$count1=0;
foreach ($result as $value){
        $count1++;
       foreach ($value as $rr => $pp){
	       # echo $rr.": ".$pp."<br>";
	      # foreach ($pp as $aa => $bb){
	       # echo $aa.": ".$bb."<br>";
	      # }
       }
}
if ($count1 > 0){
?>
<table class="table">
    <thead>
      <tr>
        <th>NAME</th>
        <th>TYPE</th>
        <th>TTL</th>
        <th>TXT</th>
      </tr>
    </thead>
<?PHP
for($i=0; $i<$count1; $i++){
?>
<tr class="table-active">
<td><?PHP echo $result[$i][host];?></td>
<td><?PHP echo $result[$i][type];?></td>
<td><?PHP echo $result[$i][ttl];?></td>
<td><?PHP echo $result[$i][txt];?></td>
</tr>
<?PHP
}
}
}








?>

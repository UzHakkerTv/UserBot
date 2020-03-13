<?php

$listplugins = [
  "plugin"
];
$cplug = count($listplugins) - 1;
for($n=0; $n<=$cplug; $n++) {
  $pluginlist = "$listplugins[$n].php";
  include($pluginlist);
}
?>

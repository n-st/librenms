<?php

require 'includes/graphs/common.inc.php';

// $rrd_options .= " -l 0 -E ";
$rrdfilename = $config['rrd_dir'].'/'.$device['hostname'].'/ubnt-airfiber-mib.rrd';

if (file_exists($rrdfilename)) {
    $rrd_options .= " COMMENT:'Packets                Now      Min     Max\\n'";
    $rrd_options .= ' DEF:txpktsAll='.$rrdfilename.':txpktsAll:AVERAGE ';
    $rrd_options .= " LINE1:txpktsAll#CC0000:'Tx Packets     ' ";
    $rrd_options .= ' GPRINT:txpktsAll:LAST:%0.2lf%s ';
    $rrd_options .= ' GPRINT:txpktsAll:MIN:%0.2lf%s ';
    $rrd_options .= ' GPRINT:txpktsAll:MAX:%0.2lf%s\\\l ';
}

<?php

// $i=0;
// $hosts = array (
//     "foo.example.com",
//     "bar.example.com",
//     "baz.example.com",
//     "quux.example.com",
// );

// foreach ($hosts as $host) {
//     $i++;
//     $cfg['Servers'][$i]['host']     = $host;
//     $cfg['Servers'][$i]['port']     = '';
//     $cfg['Servers'][$i]['socket']   = '';
//     $cfg['Servers'][$i]['connect_type']     = 'tcp';
//     $cfg['Servers'][$i]['extension']        = 'mysql';
//     $cfg['Servers'][$i]['compress'] = FALSE;
//     $cfg['Servers'][$i]['controluser']      = 'pma';
//     $cfg['Servers'][$i]['controlpass']      = 'pmapass';
//     $cfg['Servers'][$i]['auth_type']        = 'cookie';
//     $cfg['Servers'][$i]['user']     = '';
//     $cfg['Servers'][$i]['password'] = '';
//     $cfg['Servers'][$i]['only_db']  = '';
//     $cfg['Servers'][$i]['verbose']  = '';
//     $cfg['Servers'][$i]['pmadb']    = 'phpmyadmin';
//     $cfg['Servers'][$i]['bookmarktable']    = 'pma_bookmark';
//     $cfg['Servers'][$i]['relation'] = 'pma_relation';
//     $cfg['Servers'][$i]['table_info']       = 'pma_table_info';
//     $cfg['Servers'][$i]['table_coords']     = 'pma_table_coords';
//     $cfg['Servers'][$i]['pdf_pages']        = 'pma_pdf_pages';
//     $cfg['Servers'][$i]['column_info']      = 'pma_column_info';
//     $cfg['Servers'][$i]['history']  = 'pma_history';
//     $cfg['Servers'][$i]['designer_coords'] = 'pma_designer_coords';
// }

$cfg['Servers'][0]['verbose']  = 'First';
$cfg['Servers'][0]['host']      = 'fleetbase-database-1';
$cfg['Servers'][0]['user']      = 'root';
$cfg['Servers'][0]['password']  = '';
$cfg['Servers'][0]['port']      = '3306';
$cfg['Servers'][0]['AllowNoPassword'] = TRUE;

$cfg['Servers'][1]['verbose']  = 'PMA 2 (33060)';
$cfg['Servers'][1]['host']      = 'fleetbase-database-1';
$cfg['Servers'][1]['user']      = 'root';
$cfg['Servers'][1]['password']  = '';
$cfg['Servers'][1]['port']      = '33060';
$cfg['Servers'][1]['AllowNoPassword'] = TRUE;


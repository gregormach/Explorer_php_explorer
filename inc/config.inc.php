<?php
// change level of php error reporting
$error_level = E_ALL;

// enable/disable rpc error reporting
$rpc_debug = true;

// enable/disable the explorer frontend
$site_enabled = true;

// message to show when $site_enabled = false
$offline_msg = 'temporarily down for maintenance';

// install directory ('/' if installed at root)
$install_dir = '/';

// website title
$site_name = 'Block Explorer';

// default time zone used by server
$time_zone = 'UTC';

// coin currency code
$curr_code = 'AREPA';

// show coinbase tx's on home page
$show_cbtxs = true;

// initial balance of coinbase account
$total_coin = '60000000';

// initial block reward
$first_reward = '12';

// unix time when first block was mined
$launch_time = 1406509200;

// number of decimal places
$dec_count = 20;

// number of tx's shown per page
$txper_page = 10;

// RPC client name
$rpc_client = 'arepacoin-qt';

// RPC username
$rpc_user = 'arepa';

// RPC password
$rpc_pass = '1234';


// address of coinbase account
$cb_address = 'AHQwKc49c8Mj1a4bCHRVtqopFqwGYjevw8';

// ignore crap under this line
$inter_prot = (empty($_SERVER['HTTPS'])) ? 'http://' : 'https://';
$base_url = $inter_prot.$_SERVER['HTTP_HOST'].$install_dir;
bcscale($dec_count);
ini_set('display_errors', 1); 
error_reporting($error_level);
date_default_timezone_set($time_zone);
?>

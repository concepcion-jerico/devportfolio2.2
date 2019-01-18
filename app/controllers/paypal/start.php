<!-- paste this to start.php -->

<?php 
$paypal = new \PayPal\Rest\ApiContext(
	new \PayPal\Auth\OAuthTokenCredential(
		"AQEDizrCPKdBrQkwQLvQ3rt08PeRMU6RmHBoNopoSzqh_DUdAlDVYRhqXwqSuogQA_d3WCfyp7fkqxJp",
		"EH0c-QuDWGXr_9uNOTbTaYUnRjmcowaRWBmnB_MGRDYTApyS_W17FNGIMgm_n_7D7gJ6JXFHpCOLahr6")
);

?>
<?php
	$campaignCode = $this->tabCode;
	switch($this->tabCode) {
		case 'csp_aweber_Setup':
			$campaignCode = 'aweber';
			break;
		case 'csp_mailchimp_Setup':
			$campaignCode = 'chimp';
			break;
		case 'csp_campaignmonitor_Setup':
			$campaignCode = 'monitor';
			break;
		case 'csp_icontact_Setup':
			$campaignCode = 'icontact';
			break;
		case 'csp_verticalresponse_Setup':
			$campaignCode = 'verticalres';
			break;
		case 'csp_constantcontact_Setup':
			$campaignCode = 'constant';
			break;
		case 'csp_sendgrid_Setup':
			$campaignCode = 'sendgrid';
			break;
		case 'cspContactUsSetup':
			$campaignCode = 'contactform';
			break;
		case 'cspGoogleMapsSetup':
			$campaignCode = 'googlemaps';
			break;
		case 'cspStyleEditor':
			$campaignCode = 'styleeditor';
			break;
	}
?>
<a target="_blank" href="<?php echo $this->getModule()->preparePromoLink('http://readyshoppingcart.com/product/coming-soon-plugin-pro-version/?utm_source=compro&utm_medium='. $campaignCode. '&utm_campaign=com')?>">
	<img src="<?php echo $this->getModule()->getModPath(). 'img/'. $this->tabCode. '.jpg'?>" />
</a>
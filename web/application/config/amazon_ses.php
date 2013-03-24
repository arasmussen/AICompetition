<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Config for the Amazon Simple Email Service library
 *
 * @see ../libraries/Amazon_ses.php
 */

// Amazon credentials
$config['amazon_ses_access_key'] = getenv('AMAZON_SES_ACCESS_KEY');
$config['amazon_ses_secret_key'] = getenv('AMAZON_SES_SECRET_KEY');

// Adresses
$config['amazon_ses_from'] = 'no-reply@venz.io';
$config['amazon_ses_from_name'] = 'Venzio';
$config['amazon_ses_reply_to'] = 'no-reply@venz.io';

// Path to certificate to verify SSL connection (i.e. 'certs/cacert.pem')
$config['amazon_ses_cert_path'] = getenv('AI_COMPETITION_ROOT') . '/web/application/certs/cacert.pem';

// Charset to be used, for example UTF-8, ISO-8859-1 or Shift_JIS. The SMTP
// protocol uses 7-bit ASCII by default
$config['amazon_ses_charset'] = 'UTF-8';

?>

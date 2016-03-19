# Google-Login-in-CodeIgniter-
Using this repository you can learn how to put Google Login in your site

# Still Under Development Will Complete it soon........
Using Google API PHP Libarary

# Installation

Sample code is provided in demo folder.

Copy the content from library and config folder to your respective codeigniter application folder.

Add your client ID,client secret,and callback url in `config/google_config.php`

```php
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config['google_client_id']="XXXX";
$config['google_client_secret']="XXXX";
$config['google_redirect_url']=base_url().'auth/oauth2callback';

```

# Resources

-  User Guide [Codeigniter](http://www.codeigniter.com/docs).
-  Google Client library [Resource](https://github.com/google/google-api-php-client).

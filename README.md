# Google-Login-in-CodeIgniter-
Using this repository you can learn how to put Google Login in your site

# Still Under Development Will Complete it soon........


# Installation

- Add your client ID,client secret,and callback url in `config/google_config.php`

```php
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config['google_client_id']="your client id";
$config['google_client_secret']="your client secret";
$config['google_redirect_url']=base_url().'auth/oauth2callback'; //

```

# Resources

-  User Guide [Codeigniter](http://www.codeigniter.com/docs).
-  Google Client library [Resource](https://github.com/google/google-api-php-client).

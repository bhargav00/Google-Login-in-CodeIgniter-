# Google-Login/Sign-up-in-CodeIgniter-
Using this repository as a refrence you can learn how to put Google Login in your website by using Google API keys in MVC framework CodeIgniter

# Installation

- Add your client ID,client secret,and callback url in `config/google_config.php`

```php
$config['google_client_id']="your client id";
$config['google_client_secret']="your client secret";
$config['google_redirect_url']=base_url().'auth/oauth2callback'; //your callback url

```
- For Obtaining your API keys go to [Google Devloper Console](https://console.developers.google.com/home/dashboard)
- In your google console you need to create and new application and for that application you need to create new credential keys.
- In your credential settings you need to specify the call-back url in Authorized redirect URIs field
    - For example running on localhost(inside /htdocs/ci_social/) you need to specify : http://localhost/ci_social/auth/oauth2callback

# Resources

-  User Guide [Codeigniter](http://www.codeigniter.com/docs).
-  Google Client library [Resource](https://github.com/google/google-api-php-client).


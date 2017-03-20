# How to use this example

> :warning: If you encounter difficulties connecting to this application, try to connect in an incognito window.

- Clone this repo

- Run `composer install`

- Create OAuth 1.a credentials on Mautic / Automation with this application's URL as the callback

- Create a file named `settings.json` with the keys found in Mautic / Automation

  ```json
  {
    "baseUrl": "...",
    "version": "OAuth1a",
    "clientKey": "...",
    "clientSecret": "...",
    "callback": "..."
  }
  ```
  
- Connect to this application

- Insert your Mautic / Automation credentials

- Copy the _Access Token_ and _Access Token Secret_ into `settings.json`

  ```json
  {
    "...": "...",
    "accessToken": "...",
    "accessTokenSecret": "..."
  }
  ```

- Connect to this application using the following URL `/list-all.php`

> For more information, visit the [Mautic Developer Documentation](https://developer.mautic.org/#rest-api)

### License

[Maximilien Mellen, MIT](LICENSE.md)

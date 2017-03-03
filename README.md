# Comment utiliser cet exemple ?

> :warning: Si vous rencontrez des problèmes en vous connectant sur cette application, tentez de vous y connecter en navigation privée.

- Cloner ce dépôt git

- Lancer `composer install`

- Créer un identifiant d'API sur Mautic / Automation en OAuth 1.a avec comme callback l'URL de cette application

- Créer un fichier `settings.json` avec les données fournies dans Mautic / Automation

  ```json
  {
    "baseUrl": "...",
    "version": "OAuth1a",
    "clientKey": "...",
    "clientSecret": "...",
    "callback": "..."
  }
  ```
  
- Se connecter sur cette application

- Insérer ses identifiants Mautic / Automation

- Rapporter l'_Access Token_ et l'_Access Token Secret_ dans `settings.json`

  ```json
  {
    "...": "...",
    "accessToken": "...",
    "accessTokenSecret": "..."
  }
  ```

- Se connecter sur cette application à l'URL `/list-all.php`

> Pour plus d'informations, rendez-vous sur la [documentation développeur Mautic](https://developer.mautic.org/#rest-api)

### License

[Maximilien Mellen, MIT](LICENSE.md)

## SYMFONY_ESPACE_MEMBRES 

1. créer une entité User
2. implémenter [UserInterface](https://github.com/symfony/symfony/blob/4.1/src/Symfony/Component/Security/Core/User/UserInterface.php)
3. compléter encoders, providers et firewalls dans le fichier security.yaml
NB: autre alternative: [AdvanceUserInterface](https://github.com/symfony/symfony/blob/4.1/src/Symfony/Component/Security/Core/User/AdvancedUserInterface.php)
4. utiliser la méthode des [UserChecker](https://symfony.com/doc/current/security/user_checkers.html)
5. créer le formulaire de connexion
6. créer la méthode login() dans AuthController
7. ajouter le champ plainPassword dans l'entité User
8. créer un formulaire d'inscription
9. déconnexion: ajouter une ligne de configuration dans le fichier security.yaml
10. créer un petit controller vide avec la route logout ( voir [Logging Out](https://symfony.com/doc/current/security.html#logging-out))

- [Encoder manuellement un mot de passe dans un controller](https://symfony.com/doc/current/security.html)
- [Encoder les mots de passe qui sont en brut dans la base de données](https://symfony.com/doc/current/security.html#c-encoding-the-user-s-password)
- [Protéger les formulaires de connexion/inscription contre les failles CSRF](https://symfony.com/doc/current/security/csrf.html)
- Protection contre les longs mots de passe: ajouter @Assert\Length(max=4096) sur le champ plainPassword

Voir:
- [Security](https://symfony.com/doc/current/security.html)
- [Form_login_setup](https://symfony.com/doc/current/security/form_login_setup.html)
- [Entity_provider](https://symfony.com/doc/current/security/user_provider.html)
- [User Checkers](https://symfony.com/doc/current/security/user_checkers.html)
- [Registration_form](https://symfony.com/doc/current/doctrine/registration_form.html)


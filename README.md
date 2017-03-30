# Niche 
Projet de cours : Création de template wordpress

# Dépendances :
    Bootstrap 3.3.7.
    Contact form 7 pour la gestion du formulaire de contact.
    Postman qui est une dépendance de contact form 7 pour l'envois de mail smtp.
    MailPoet qui permet l'abonnement à une newsletter.

# Initialisation de Postman:
    Il faut avoir un compte gmail afin de pouvoir autoriser la connexion en Oauth2.
    Dans réglage => postmanSMTP laisser vous guider par l'assistant d'installation.


# Menu :
    Dans apparence -> menu cocher la case "Header menu"
    Affichage de l'option menu dans le thème grâce à la fonction "register_my_menus".
    Affichage du menu dans le header grâce à la fonction "wp_nav_menu".


# Pour ajouter d'autre page :
    Créer une div avec comme classe le nom de votre page à personaliser dans le css.

# Formulaire de contact :
    Affichage du formulaire dans le footer gràce à "do_shortcode".
    
# Newsletter :
    Affichage du formulaire de newsletter dans la sidebar grâce à une iframe
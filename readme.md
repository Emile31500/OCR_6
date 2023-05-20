 
 ### En Français
 ## Context

  <p>
    <br>Ce projet a été réalisé dans le cadre de ma formation OpenClassrooms.</br>
    Jimmy Sweat est un entrepreneur qui souhaite créer un site communautaire pour faire découvrir le snowboard et aider les novices à apprendre les différentes figures.</br>
    </br>
    Le site devait être réalisé avec Symfony. Les seuls codes externes autorisés étaient Bootstrap et les bibliothèques de Composer. Des wireframes à respecter étaient également fournis par OCR.</br>
  </p>

 # Information pour l'instalation :
 ## Importer le projet

  <p>
    Ouvrez votre terminal de commande en mode sudo et éxecutez la commande suivante pour téléchargez le projet :
    ` $ git clone https://github.com/Emile31500/OCR_6_Developpez-de-A-a-Z-le-site-communautaire-SnowTricks`
  </p>
 
 ## Configuration de la Base de Données
 
   <p>
     <br>Dans le fichier : ../root/.env</br></br>
     App : nom d'utilisateur de la base de données</br>
     !ChangeME! : mot de passe de cet utilisateur</br>
     127.0.0.1:3306 : addresse et port utilisé par votre BDD</br>
     app : le nom de la base de données (ici snow_tricks)</br>

     ``` # DATABASE_URL="mysql://app:!ChangeMe!@127.0.0.1:3306/app?serverVersion=8.0.32&charset=utf8mb4"```
     Créez une base de données que vous appellerez snow_trikcs
     Importer la base de données dans le dossier suivant 
     `../root/Diagrammes/SnowTricks.sql`
     Démarrez le serveur web avec:
     ` $ php -S 127.0.0.1:8100 -t public`
   </p>
   
 ## À savoir 
 
  <p>
    <span style="color: rgb(255, 0, 0)">La récupération de mot de passe ne fonctionne pas tant que le site ne sera pas définitivement déployé : </span>
    <br>Lien de modificaton est normalement</br>
    ` ip.server:port/modifier-le-mot-de-passe/{mot_de_passe}`
    </br>
    On est obligé d'envoyer une addresse absolue, par défaut on envoie donc</br>
    ` 127.0.0.1:8100/modifier-le-mot-de-passe/{mot_de_passe}` 
    </br>
    <b>Lorsque vous recevrez ce lien il faudra changer l'addresse du server selon la votre</b>
  </p>
 
 ### In English
 ## Context
  
  <p>
    <br>This project was carried out as part of my OpenClassrooms training.</br>
    Jimmy Sweat is an entrepreneur who wants to create a community website to introduce snowboarding and help beginners learn different tricks.</br>
    </br>
    The website had to be developed using Symfony. The only allowed external codes were Bootstrap and Composer libraries. Wireframes provided by OCR were also required to be followed.</br>
  </p>

 # How to set up :
 ## Importing the Project

  <p>
    Open your command terminal in sudo mode and execute the following command to download the project:
    `$ git clone https://github.com/Emile31500/OCR_6_Developpez-de-A-a-Z-le-site-communautaire-SnowTricks`
  </p>

## Database Configuration

  <p>
    <br>In the file: ../root/.env</br></br>
    App: database username</br>
    !ChangeME!: password for this user</br>
    127.0.0.1:3306: address and port used by your database</br>
    app: name of the database (here snow_tricks)</br>
    # DATABASE_URL="mysql://app:!ChangeMe!@127.0.0.1:3306/app?serverVersion=8.0.32&charset=utf8mb4"
    Create a database named snow_tricks
    Import the database into the following directory
    ../root/Diagrammes/SnowTricks.sql
    Start the web server with:
    $ php -S 127.0.0.1:8100 -t public

  </p>

## Important Note

  <p>
    <span style="color: rgb(255, 0, 0)">The password recovery feature will not work until the site is permanently deployed:</span>
    <br>The modification link is normally:</br>
    `ip.server:port/modifier-le-mot-de-passe/{password}`
    </br>
    We are required to send an absolute address, so by default we send:</br>
    `127.0.0.1:8100/modifier-le-mot-de-passe/{password}`
    </br>
    <b>When you receive this link, you will need to change the server address according to yours.</b>
  </p>

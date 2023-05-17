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
    <span style="color: red;">La récupération de mot de passe ne fonctionne pas tant que le site ne sera pas définitivement déployé : </span>
    <br>Lien de modificaton est normalement</br>
    ` ip.server:port/modifier-le-mot-de-passe/{mot_de_passe}`
    </br>
    On est obligé d'envoyer une addresse absolue, par défaut on envoie donc</br>
    ` 127.0.0.1:8100/modifier-le-mot-de-passe/{mot_de_passe}` 
    </br>
    <b>Lorsque vous recevrez ce lien il faudra changer l'addresse du server selon la votre</b>
  </p>

# la base de ma machine, à utiliser seulement une fois
FROM debian:jessie  
# pour éxecuter des commandes, on utilise RUN
# on actualise la liste des liens des archives et on install curl
# on nétoie la liste des lien pour alleger l'image
RUN apt-get update \        
&& apt-get install -y curl \
&& rm -rf /var/lib/apt/lists/*  
# on télécharge Nodejs avec curl
RUN curl -LO "https://nodejs.org/dist/v0.12.5/node-v0.12.5-linux-x64.tar.gz" \  
&& tar -xzf node-v0.12.5-linux-x64.tar.gz -C /usr/local --strip-components=1 \
&& rm node-v0.12.5-linux-x64.tar.gz
# on deplace le fichier package.json du local dans $container:/app/
ADD package.json /app/
# changer le répertoire en cours vers /app
WORKDIR /app
# installer les dépendance à partir de package.json
RUN npm install
# deplacer le contenu du dossier courant en local vers le conteneur
ADD . /app/
# On expose le port 3000
EXPOSE 3000

# On partage un dossier de log
VOLUME /app/log

# On lance le serveur quand on démarre le conteneur
CMD node server.js

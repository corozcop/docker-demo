# docker-demo
# Docker LAMP

[![N|Solid](http://www.experttyce.com/wp-content/uploads/2016/12/Logomakr_1blDRm_titulo_190.png)](http://www.experttyce.com/)

Entorno de desarrollo web PHP, utilizando docker compose, incluye

  - Nginx
  - PHP FPM
  - MariaDB (MySQL)
  - PHPMyAdmin

# Instalacion!

  - Descarga e instala docker 
  - Clona este proyecto
  - Entra al directorio docker-demo e inicia los contenedores con el comando 
 ```sh 
cd docker-demo
docker-compose up -d
  ```

### Directorios


| Directorio | Descripcion |
| ------ | ------ |
| backup | Directorio para respaldos de base de datos  |
| logs | Log de nginx |
| nginx |Configuracion de nginx |
| public_html | Directorio para proyecto PHP |
| sites-available | Configuracion nginx del sitio por defecto |



### Acceso

Una vez que se encuentren ejecutandose los contenedores podemos entrar a nuestro sitio web entrando a  [http://localhost](http://localhost)
Estan expuestos los puertos 
- 80 de nginx
- 3306 de mysql
- 8183 de phpmyadmin [http://localhost:8183](http://localhost:8183)






MIT


**Free Software, Hell Yeah!**

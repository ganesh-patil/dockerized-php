# dockerized-php
Php application setup using docker containers (used docker images: hp:7.0-apache, mysql.)

## Steps to run application.
  1. Install and start [docker](https://docs.docker.com/engine/installation/).
  2. Clone [repository](https://github.com/ganesh-patil/dockerized-php.git).
  3. Start container using command.
  ```` 
  $cd dockerized-php
  $docker-compose build --build-arg DOCKER_IMAGE=php:5.4-apache php-apache
  $docker-compose up
  ````
  4. Access the application using url (http://localhost:9000/)
  
  Mysql is mapped on local port 3306 and Apache is mapped on local port 9000
  Above application will goes on adding entries into database after every refresh.
  5. To stop the application press ctl+c or run command:
  ````
  $docker-compose down
  ````

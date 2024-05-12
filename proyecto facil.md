Pasos: (todos se ejecutan desde la consola local, no la interna en docker.)
<!-- 0 -->
traete el proyecto de github (alli estara el dockerfile)

<!-- 1 -->
https://medium.com/@hafizzeeshan619/effortlessly-dockerize-your-laravel-vue-application-a-step-by-step-guide-906407eb7549

<!-- 2 -->
docker-compose build

<!-- 3 -->
docker-compose up -d

<!-- 4  solo en linux...-->
sudo chmod -R a+rw storage

<!-- 5 -->
correr composer install "dentro" del contenedor de docker de laravel

<!-- 6 -->
correr npm install dentro de la carpeta del proyecto "dentro" del contenedor de node...

<!-- 7 -->
corre las migraciones desde la interfaz
(o entra en el contenedor principal corre las migraciones y seeds)
el proyecto estara corriendo en:

localhost:8000/

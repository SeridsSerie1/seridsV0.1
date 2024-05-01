# instalaci�n del docker para correr laravel

1. Se debe ir a la carpeta donde se tenga el archivo dockerfile y correr el siguiente comando

        docker image build -t laravel .

2. Luego se debe crear el contenedor a partir de la imagen que se acaba de correr, se puede hacer de la siguiente manera (Nota: Se puede cambiar el $(pwd) por una ruta en especifica ya que esta utiliza la ruta actual en la que se corra el comando)

        <!-- docker run -d -v $(pwd):. -p 8001:8009 9001:9000 5174:5173 --name serids_base -it bitnami/laravel:latest bash -->
        docker run -d -v $(pwd):/app -p 8001:8000 -p 9001:9000 -p 5174:5173 --name serids_base -it bitnami/laravel:latest bash

3. Ingresar al contenedor y poder iniciar el proyecto

        docker exec -it --security-opt seccomp=unconfined serids_base bash

4. al ingresar al contenedor se ubicara en la carpeta /root/code del contenedor, en esta misma carpeta debe estar el poyecto y para iniciarlo se debe hacer lo siguiente

        cd projects/serids_base/
        composer install
        php artisan passport:keys
        php artisan storage:link
        php artisan serve --host 0.0.0.0
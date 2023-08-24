## REQUSITOS PARA DEPLOYAR EL ECOMMERCE
-- PHP >8.0  <8.1
-- .env
-- composer install
-- elimina la ruta storage, para que no presente error 

#
-- modificar el punto .env en los mix por vite
# MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
# MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"
-- VITE_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
-- VITE_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"
## uso de vite en laravel 9
-- para compilar y levantar el js y css en producción es necesario poner un npm run build, para conpilar los archivos de css y js

## PENDIENTE
-- migrar la version de laravel 9 a 10 
-- migrar las dependencias


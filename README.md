# Example xdebug with docker (NOT WORKING)

    docker exec -it xdebugdocker_php_1 php /var/www/html/public/index.php

    docker exec -i xdebugdocker_php_1 /sbin/ip route|awk '/default/ { print $3 }'

## Mac
    sudo ifconfig lo0 alias 172.16.123.1

## Linux
    #http://stackoverflow.com/questions/31324981/how-to-access-host-port-from-docker-container
    iptables -A INPUT -i docker0 -j ACCEPT

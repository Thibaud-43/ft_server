docker build -t server autoindex=off
docker run --rm --name server -d -p 80:80 -p 443:443 server
docker exec -it server bash

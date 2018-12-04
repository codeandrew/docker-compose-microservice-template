# Docker Compose Microservice Template
> php(alpine), nginx(alpine), python

## Setup
To run the Application.
```
docker-compose build
docker-compose up
```

To stop Docker
```
docker-compose stop
```


To monitor running containers
```
docker container ps
```

To Restart nginx
```
docker exec <nginx container id> nginx -t
docker exec <nginx container id> nginx -s reload
```

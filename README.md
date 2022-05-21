# 1. Start the container

You can start the container by typing following into your local shell

```bash
❯ cd /path/your/project/php_benchmark/docker 
❯ docker-compose up
```

Run `docker ps` to find out the name of your php container. It should look like this `php_benchmark_php`

```bash
CONTAINER ID   IMAGE        COMMAND                  CREATED         STATUS         PORTS      NAMES
1ec2b9674984   docker_php   "docker-php-entrypoi…"   6 minutes ago   Up 6 minutes   9000/tcp   php_benchmark_php
```

Then you can enter the php container

```bash
❯ docker exec -it -u dev php_benchmark_php bash
```
# 2. Run examples

### Get Fatal error: Allowed memory size of

```bash
❯ docker exec -it php_benchmark_php php -d memory_limit=500M /home/wwwroot/php_benchmark/readCsv/example1.php
```

### Run example with generator + yield

```bash
❯ docker exec -it php_benchmark_php php /home/wwwroot/php_benchmark/readCsv/example2.php
```

|        | Array | Generator |
|--------|-------|-----------|
| Time   |  +/- 2:90 sec     | 942MB     |
| Memory | +/- 4:40 sec      | 0.42MB    |


Reference:
- https://www.php.net/manual/es/class.generator.php
- https://www.php.net/manual/es/language.generators.overview.php

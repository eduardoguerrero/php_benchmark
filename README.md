# 1. Start the container

You can start the container by typing following into your local shell (In those examples has been used `PHP 8.0.2` and results may vary in other PHP versions.)

```bash
❯ cd /path/your/project/php_benchmark/docker 
❯ docker-compose up
```

Run `docker ps` to find out the name of your php container. It should look like this `php_benchmark_php`

```bash
CONTAINER ID   IMAGE        COMMAND                  CREATED         STATUS         PORTS      NAMES
1ec2b9674984   docker_php   "docker-php-entrypoi…"   6 minutes ago   Up 6 minutes   9000/tcp   php_benchmark_php
```

Then you can enter the php container or execute the examples using `docker exec -it`.

```bash
❯ docker exec -it -u dev php_benchmark_php bash
```

# 2. Run examples

## Generator vs Array

### Example with Array

```bash
❯ docker exec -it php_benchmark_php php -d memory_limit=1024M /home/wwwroot/php_benchmark/readCsv/example1.php 
```

### Example with generator + yield

```bash
❯ docker exec -it php_benchmark_php php -d memory_limit=2M /home/wwwroot/php_benchmark/readCsv/example2.php 
```

|        | Time         | Memory |
|--------|--------------|--------|
| Array  | +/- 3.50 sec | 950MB  |
| Generator | +/- 5.30 sec | 2MB    |


References:

- https://www.php.net/manual/es/class.generator.php
- https://www.php.net/manual/es/language.generators.overview.php

## SplFixedArray vs Array

### Example with array

```bash
❯ docker exec -it php_benchmark_php php /home/wwwroot/php_benchmark/splFixedArray/example1.php
```

### Example with SplFixedArray

```bash
❯ docker exec -it php_benchmark_php php /home/wwwroot/php_benchmark/splFixedArray/example2.php
```

|        | Time     | Memory |
|--------|----------|--------|
| Array  | +/- 0.053 sec | 42MB   |
| SplFixedArray | +/- 0.048 sec | 40MB   |


References:

- https://www.php.net/manual/es/class.splfixedarray.php
- https://stackoverflow.com/questions/11827668/does-really-splfixedarray-perform-better-than-arrays

## Object vs Array

### Example with object

```bash
❯ docker exec -it php_benchmark_php php -d memory_limit=60M /home/wwwroot/php_benchmark/object/example1.php 
```

### Example with array

```bash
❯  docker exec -it php_benchmark_php php -d memory_limit=500M /home/wwwroot/php_benchmark/object/example2.php 
```

|        | Time         | Memory |
|--------|--------------|--------|
| Array  | +/- 0.50 sec | 470MB  |
| Object | +/- 0.40 sec | 50MB   |


Feel free to fork it or do whatever you want with it.

License: https://creativecommons.org/licenses/by/3.0/

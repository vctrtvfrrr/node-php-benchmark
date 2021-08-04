# node-php-benchmark

Benchmark entre um servidor HTTP rodando Express.js (Node.js) e outro rodando Swoole (PHP).

## Workstation

```
OS Name: Ubuntu 20.04.2 LTS
OS Type: 64-bit
RAM: 32 GiB
CPU: Intel® Core™ i5-10400 CPU @ 2.90GHz × 12
```

## Resultados

**Express.js HTTP Server**
```
Running 10s test @ http://0.0.0.0:3000
  8 threads and 16 connections
  Thread Stats   Avg      Stdev     Max   +/- Stdev
    Latency     1.32s   652.31ms   1.97s    66.67%
    Req/Sec     0.53      0.52     1.00     53.33%
  15 requests in 10.01s, 13.39KB read
  Socket errors: connect 0, read 0, write 0, timeout 12
Requests/sec:      1.50
Transfer/sec:      1.34KB
```

**Swoole HTTP Server**
```
Running 10s test @ http://0.0.0.0:4000
  8 threads and 16 connections
  Thread Stats   Avg      Stdev     Max   +/- Stdev
    Latency   667.77ms  240.80ms   1.31s    66.38%
    Req/Sec     4.66      3.69    10.00     68.69%
  232 requests in 10.02s, 197.79KB read
Requests/sec:     23.16
Transfer/sec:     19.74KB
```

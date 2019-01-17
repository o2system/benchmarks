<?php

Parse_Results: {
    require __DIR__ . '/libs/parse_results.php';
    $results = parse_results(__DIR__ . '/output/results.hello_world.log');
}

Load_Theme: {
    $theme = isset($_GET['theme']) ? $_GET['theme'] : 'default';
    if (! ctype_alnum($theme)) {
        exit('Invalid theme');
    }

    if ($theme === 'default') {
        require __DIR__ . '/libs/make_graph.php';
    } else {
        $file = __DIR__ . '/libs/' . $theme . '/make_graph.php';
        if (is_readable($file)) {
            require $file;
        } else {
            require __DIR__ . '/libs/make_graph.php';
        }
    }
}

// RPS Benchmark
list($chart_rpm, $div_rpm) = make_graph('rps', 'Throughput', 'requests per second');

// Memory Benchmark
list($chart_mem, $div_mem) = make_graph('memory', 'Memory', 'peak memory (MB)');

// Exec Time Benchmark
list($chart_time, $div_time) = make_graph('time', 'Exec Time', 'ms');

// Included Files
list($chart_file, $div_file) = make_graph('file', 'Included Files', 'count');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>PHP Framework Benchmark</title>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/o2system-venus-ui@1.1.0/dist/venus-ui.min.css">
<link rel="stylesheet" href="libs/dist/assets/css/theme.css">

<script src="https://www.google.com/jsapi"></script>
<script>
<?php
echo $chart_rpm, $chart_mem, $chart_time, $chart_file;
?>
</script>
</head>
<body>

<div class="banner-benchmarks">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 align-self-center text-center">
                <h1 class="title">
                    PHP Framework Benchmark
                </h1>
                <h6 class="subtitle">
                    Hello World Benchmark
                </h6>
            </div>
        </div>
    </div>
</div>

<div class="chart">
<?php
echo $div_rpm, $div_mem, $div_time, $div_file;
?>
</div>

<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10 text-center">
                <h2 class="framework-title">All The PHP Framework</h2>
                <div class="framework-area">

                <?php
    $url_file = __DIR__ . '/output/urls.log';
    if (file_exists($url_file)) {
        $urls = file($url_file);
        
        foreach ($urls as $url) {
            $url = str_replace('127.0.0.1', $_SERVER['HTTP_HOST'], $url);
            $img = explode('/', $url);
            echo '<a href="' . htmlspecialchars($url, ENT_QUOTES, 'UTF-8') . '" class="framework-list">
            <div class="card">
                            <div class="card-body">
                            <img src="libs/dist/assets/img/' . $img[4] .'.png" class="framework-logo mb-3">
                                <h4>' . $img[4] .'</h4>
                            </div>
                        </div>
                </a>' . "\n";
        }
    }
    ?>
    
                    
                </div>
            </div>
        </div>
    </div>
</section>



<div class="footer-benchmarks">
    <div class="footer-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="d-flex text-white">
                        <div class="icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="content">
                            <span>
                                1 (888) 123 4567
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex text-white">
                        <div class="icon">
                            <i class="far fa-envelope"></i>
                        </div>
                        <div class="content">
                            <a href="mailto:email@venus.com" class="text-white">
                                email@venus.com
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 ml-auto">
                    <div class="social text-right">
                        <a href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-youtube"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-github"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <span>
                        Copyright 2019. All Rights Reserved by <a href="o2system.id">O2System</a>.
                    </span>
                </div>
                <div class="col-lg-6">
                    <p style="text-align: right">This page is a part of <a href="https://github.com/kenjis/php-framework-benchmark">php-framework-benchmark</a>.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/o2system-venus-ui@1.1.0/dist/venus-ui.min.js"></script>
</body>
</html>

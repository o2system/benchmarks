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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.6.3/css/all.min.css" integrity="sha256-lWwvJodqrCBurwAZ2n1MiE73AQgZ6Gr9jWRd6ed7WiQ=" crossorigin="anonymous" />
<link rel="stylesheet" href="libs/dist/assets/css/theme.css">

<script src="https://www.google.com/jsapi"></script>
<script>
<?php
echo $chart_rpm, $chart_mem, $chart_time, $chart_file;
?>
</script>
</head>
<body>

<section class="hero p-0">
    <img src="./img/hero.jpg" alt="" class="w-100">
</section>

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
            echo '<a href="' . htmlspecialchars($url, ENT_QUOTES, 'UTF-8') . '" class="framework-list" target="_blank">
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

<section>
    <div class="container text-center">
        <h3 class="mb-4">
            You can access &amp; check this benchmarks source code<br>
            by your self in our github repository
        </h3>
        <a href="https://github.com/o2system/benchmarks" target="_blank" class="btn btn-danger btn-lg">
            <i class="fab fa-github"></i> Go to Source Code</a>
        </a>
    </div>
</section>



<div class="footer-top">
    <nav class="navbar navbar-expand-md navbar-dark" id="page-navigation-footer">
        <div class="container">
            <!-- Navbar Brand -->
            <!--<a href="{{ base_url() }}" class="navbar-brand">
                <img src="assets/img/logo-white.png" alt="">
            </a>-->

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarcollapse-footer" aria-controls="navbarcollapse-footer" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarcollapse-footer">
                <!-- Navbar Menu -->
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            Why O2System
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            Contributors
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            Partners
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            Sponsors
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>
</div>

<div class="footer-bottom">
    <div class="container">
        <p class="mb-0 text-uppercase text-center small">O2System Framework is a Trademark of Steeve Andrian</p>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/o2system-venus-ui@1.1.0/dist/venus-ui.min.js"></script>
</body>
</html>

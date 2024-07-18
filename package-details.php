<!DOCTYPE HTML>
<html>
<head>
    <title>Travel Agency Website | Paket Detail</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</head>
<body class="is-preload">
    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Header -->
        <header id="header">
            <div class="inner">
                <!-- Logo -->
                <a href="index.html" class="logo">
                    <span class="fa fa-plane"></span> <span class="title">Travel Agency Website</span>
                </a>
                <!-- Nav -->
                <nav>
                    <ul>
                        <li><a href="#menu">Menu</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <!-- Menu -->
        <nav id="menu">
            <h2>Menu</h2>
            <ul>
                <li><a href="index.html" class="active">Beranda</a></li>
                <li><a href="packages.html">Paket</a></li>
                <li>
                    <a href="#" class="dropdown-toggle">Tentang</a>
                    <ul>
                        <li><a href="about.html">Tentang Kami</a></li>
                        <li><a href="terms.html">Syarat dan Ketentuan</a></li>
                    </ul>
                </li>
                <li><a href="contact.html">Hubungi Kami</a></li>
            </ul>
        </nav>

        <!-- Main -->
        <div id="main">
            <div class="inner">
                <?php
                $packages = [
                    'bali' => [
                        'title' => 'Wisata Bali',
                        'price' => 'Rp 4.000.000 - Rp 5.000.000',
                        'images' => [
                            'images/product-1-720x480.jpg',
                        ],
                        'info' => [
                            'Tersedia: Sepanjang Tahun',
                            '7 malam',
                            'Termasuk penerbangan',
                            'Menginap di hotel bintang 4',
                            'Termasuk tur harian ke Ubud, dan Uluwatu',
                            'Antar jemput bandara'
                        ],
                        'description' => 'Jelajahi keindahan Bali dengan paket wisata eksklusif kami. Anda akan menikmati pantai yang menakjubkan, budaya yang kaya, dan alam yang indah. Paket ini mencakup 7 malam dengan akomodasi di hotel bintang 4, penerbangan, dan berbagai tur harian yang mengesankan. Anda akan mengunjungi tempat-tempat terkenal seperti Ubud yang terkenal dengan seni dan budayanya, Tanah Lot yang menawarkan pemandangan matahari terbenam yang menakjubkan, dan Uluwatu yang terkenal dengan pura di tebing serta pertunjukan tari Kecak yang memukau.'
                    ],
                    'jogja' => [
                        'title' => 'Wisata Jogja',
                        'price' => 'Rp 3.000.000 - Rp 4.000.000',
                        'images' => [
                            'images/product-2-720x480.jpg',
                        ],
                        'info' => [
                            'Tersedia: Sepanjang Tahun',
                            '5 malam',
                            'Termasuk penerbangan',
                            'Menginap di hotel bintang 3',
                            'Termasuk tur harian ke Borobudur, Prambanan',
                            'Antar jemput bandara'
                        ],
                        'description' => 'Nikmati keindahan budaya dan sejarah Jogja dengan paket wisata kami. Anda akan mengunjungi candi-candi megah, kuliner khas, dan menikmati suasana kota yang ramah dan penuh seni.'
                    ],
                    'lombok' => [
                        'title' => 'Wisata Lombok',
                        'price' => 'Rp 4.500.000 - Rp 5.500.000',
                        'images' => [
                            'images/product-3-720x480.jpg',
                        ],
                        'info' => [
                            'Tersedia: Sepanjang Tahun',
                            '6 malam',
                            'Termasuk penerbangan',
                            'Menginap di hotel bintang 4',
                            'Termasuk tur harian ke Gili Trawangan, Pantai Kuta',
                            'Antar jemput bandara'
                        ],
                        'description' => 'Lombok menawarkan pantai yang indah dan kehidupan laut yang menakjubkan. Paket ini mencakup tur ke pulau-pulau kecil di sekitarnya, snorkeling, dan pengalaman budaya yang unik.'
                    ],
                    'raja-ampat' => [
                        'title' => 'Wisata Raja Ampat',
                        'price' => 'Rp 10.000.000 - Rp 12.000.000',
                        'images' => [
                            'images/product-4-720x480.jpg',
                        ],
                        'info' => [
                            'Tersedia: Sepanjang Tahun',
                            '7 malam',
                            'Termasuk penerbangan',
                            'Menginap di resort bintang 5',
                            'Termasuk tur harian ke pulau-pulau, snorkeling',
                            'Antar jemput bandara'
                        ],
                        'description' => 'Raja Ampat adalah surga bagi penyelam dan pecinta alam. Dengan paket ini, Anda akan menjelajahi keindahan bawah laut dan keanekaragaman hayati yang luar biasa.'
                    ],
                    'bromo' => [
                        'title' => 'Wisata Bromo',
                        'price' => 'Rp 2.000.000 - Rp 3.000.000',
                        'images' => [
                            'images/product-5-720x480.jpg',
                        ],
                        'info' => [
                            'Tersedia: Sepanjang Tahun',
                            '3 malam',
                            'Termasuk penerbangan',
                            'Menginap di hotel bintang 3',
                            'Termasuk tur harian ke Gunung Bromo, Kawah Ijen',
                            'Antar jemput bandara'
                        ],
                        'description' => 'Nikmati pengalaman mendaki gunung berapi aktif dan melihat matahari terbit yang menakjubkan di Gunung Bromo. Paket ini dirancang untuk petualang sejati.'
                    ],
                    'bandung' => [
                        'title' => 'Wisata Bandung',
                        'price' => 'Rp 2.500.000 - Rp 3.500.000',
                        'images' => [
                            'images/product-6-720x480.jpg',
                        ],
                        'info' => [
                            'Tersedia: Sepanjang Tahun',
                            '4 malam',
                            'Termasuk penerbangan',
                            'Menginap di hotel bintang 3',
                            'Termasuk tur harian ke Lembang, Tangkuban Perahu',
                            'Antar jemput bandara'
                        ],
                        'description' => 'Bandung dikenal dengan udaranya yang sejuk dan pemandangan yang indah. Paket ini mencakup kunjungan ke tempat-tempat wisata terkenal dan menikmati kuliner khas Sunda.'
                    ],
                ];

                $packageKey = isset($_GET['package']) ? $_GET['package'] : 'bali';

                if (array_key_exists($packageKey, $packages)) {
                    $package = $packages[$packageKey];
                } else {
                    $package = $packages['bali'];
                }
                ?>
                <h1><?php echo $package['title']; ?><span class="pull-right"><?php echo $package['price']; ?></span></h1>
                
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-8 col-md-7">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <?php foreach ($package['images'] as $index => $image): ?>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $index; ?>" class="<?php echo $index === 0 ? 'active' : ''; ?>"></li>
                                    <?php endforeach; ?>
                                </ol>
                                <div class="carousel-inner">
                                    <?php foreach ($package['images'] as $index => $image): ?>
                                        <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
                                            <img class="d-block w-100" src="<?php echo $image; ?>" alt="Slide <?php echo $index + 1; ?>">
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-5">
                            <h3>Info Paket:</h3>
                            <p>
                                <?php foreach ($package['info'] as $info): ?>
                                    - <?php echo $info; ?><br>
                                <?php endforeach; ?>
                            </p>
                            <span class="image main"><img src="images/map.jpg" alt="" /></span>
                            <a href="#footer" class="button primary scrolly">Pemesanan Tiket</a>
                        </div>
                    </div>
                </div>
                <br><br>
                <div class="container-fluid">
                    <h3>Deskripsi</h3>
                    <p><?php echo $package['description']; ?></p>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer id="footer">
            <div class="inner">
                <section>
                    <h2>Pemesanan Tiket</h2>
                    <form method="post" action="submit_enquiry.php">
                        <div class="fields">
                            <div class="field half">
                                <input type="text" name="name" id="name" placeholder="Name" required />
                            </div>
                            <div class="field half">
                                <input type="email" name="email" id="email" placeholder="Email" required />
                            </div>
                            <div class="field half">
                                <input type="text" name="phone_number" id="phone" placeholder="Phone" />
                            </div>
                            <div class="field half">
                                <input type="text" name="destination" placeholder="Destination" required />
                            </div>
                            <div class="field quarter">
                                <input type="date" name="travel_date_from" placeholder="From" required />
                            </div>
                            <div class="field quarter">
                                <input type="date" name="travel_date_to" placeholder="To" required />
                            </div>
                            <div class="field">
                                <textarea name="message" id="message" rows="3" placeholder="Notes"></textarea>
                            </div>
                            <div class="field text-right">
                                <label>&nbsp;</label>
                                <ul class="actions">
                                    <li><input type="submit" value="Send Request" class="primary" /></li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </section>
                <section>
                    <h2>Contact Info</h2>
                    <ul class="alt">
                        <li><span class="fa fa-envelope-o"></span> <a href="#">Agencytravel12@gmail.com</a></li>
                        <li><span class="fa fa-phone"></span> +62 870 5561 1541 </li>
                        <li><span class="fa fa-mobile"></span> +62 870 5561 1541 </li>
                        <li><span class="fa fa-map-pin"></span> Jln.Tawes,Kisaran Timur,Asahan.Sumatera Utara,Indonesia</li>
                    </ul>
                </section>
            </div>
        </footer>

    </div>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.scrolly.min.js"></script>
    <script src="assets/js/jquery.scrollex.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>

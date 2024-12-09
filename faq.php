<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="img/favicon.png">
    <link rel="stylesheet" href="css/faq.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
        crossorigin="anonymous">

    <script src="js/jquery-3.3.1.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
    <title>Al-IkhwanFinance - FAQ</title>
    <style>
    body {
      font-family: "roboto", sans-serif;
      height: 100%;
    }
    </style>
</head>
<body background="img\alikhwanview.jpg">
	<nav>
		<ul>
        <a href="index" style="text-decoration: none; color: white;"><li>Home</li></a>
		</ul>
	</nav>
	<div class="content">
		<h2 class="title">FaQ (Frequently Asked Questions)</h2>
        <br>

		<div class="faq" id="satu">
			<h3>Apa itu Al-IkhwanFinance ?</h3>
			<i class="fas fa-caret-right" style="float: right; font-size: 30px; margin-top:-25px;"></i>
		</div>
		<div class="faq" id="panel1">Al-IkhwanFinance adalah aplikasi web yang dirancang untuk mencatat dan memantau sumber dana Masjid Al Ikhwan. 
            Aplikasi ini memiliki berbagai fitur menarik yang memungkinkan Anda untuk mengelola dan melacak pemasukan dari donasi, kotak amal, zakat, infaq, dan shodaqoh dengan mudah dan efisien. 
            Direkomendasikan bagi pengurus masjid yang ingin memastikan transparansi dan akurasi dalam pengelolaan keuangan masjid.</div>

		<div class="faq" id="dua">
			<h3>Apa saja fitur Al-IkhwanFinance</h3>
			<i class="fas fa-caret-right" style="float: right; font-size: 30px; margin-top:-25px;"></i>
		</div>
		<div class="faq" id="panel2">Aplikasi ini menyediakan pencatatan dan monitoring transaksi harian untuk mengelola keuangan Masjid Al Ikhwan. 
            Fitur-fitur tersebut memudahkan pemantauan pemasukan dari donasi, kotak amal, zakat, infaq, dan shodaqoh, serta menyimpan data keuangan dengan aman untuk transparansi dan keamanan pengelolaan keuangan masjid. 
            Dashboard khusus juga disediakan untuk informasi saldo, total dana masuk dan keluar, serta detail rekening, memastikan pengelolaan keuangan masjid yang efektif.</div>

		<!-- <div class="faq" id="tiga">
			<h3>Bagaimana cara penggunaan Dompet-Qu ?</h3>
            <i class="fas fa-caret-right" style="float: right; font-size: 30px; margin-top:-25px;"></i>
		</div>
		<div class="faq" id="panel3">Pertama anda harus mendaftarkan diri terlebih dahulu. Setelah mendaftarkan diri, kita wajib login untuk mengakses aplikasi Dompet-Qu dan anda dapat mengelelo keuangan anda secara gratis dan tentunya mudah.</div>
	</div> -->
	
	 <!-- change icon -->
                <script>
                    $("#satu").click(function () {
                        $(this).find('i').toggleClass('fa-caret-down fa-caret-right');
                        if ($("#satu").not(this).find("i").hasClass("fa-caret-right")) {
                            $("#satu").not(this).find("i").toggleClass('fa-caret-down fa-caret-right');
                        }
                    });

                    $("#dua").click(function () {
                        $(this).find('i').toggleClass('fa-caret-down fa-caret-right');
                        if ($("#dua").not(this).find("i").hasClass("fa-caret-right")) {
                            $("#dua").not(this).find("i").toggleClass('fa-caret-down fa-caret-right');
                        }
                    });

                    $("#tiga").click(function () {
                        $(this).find('i').toggleClass('fa-caret-down fa-caret-right');
                        if ($("#tiga").not(this).find("i").hasClass("fa-caret-right")) {
                            $("#tiga").not(this).find("i").toggleClass('fa-caret-down fa-caret-right');
                        }
                    });
                </script>
         <!-- change icon -->
         <script>
         	$("#satu").click(function(){
  				$("#panel1").slideToggle("medium");
				});
         	$("#dua").click(function(){
  				$("#panel2").slideToggle("medium");
				});
         	$("#tiga").click(function(){
  				$("#panel3").slideToggle("medium");
				});
         </script>  

</body>
</html> 
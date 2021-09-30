<!DOCTYPE html>
<html lang="en">
<title>FATİH HAS</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="language" content="Turkish" />
<meta name="copyright" content="(c) 2019 Tüm Hakları Saklıdır." />
<meta name="developer" content="Fatih HAS, fatihhas2609@gmail.com" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="shortcut icon" type="image/png" href="../../images/lgoo.png"/>
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>
<body>
<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="../../index.php" class="w3-bar-item w3-button w3-padding-large">ANA SAYFA</a>
	<a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hide-small">ILETISIM</a>
	<a href="/pages/makale.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">MAKALE</a>
	<a href="/pages/uygulama.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">UYGULAMALAR</a>
    <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-padding-large w3-button" title="More">DERSLER<i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="/pages/ders/isaret.php" class="w3-bar-item w3-button">İşaret Ve Sistemler</a>
		<a href="/pages/ders/prog.php" class="w3-bar-item w3-button">C-Programlama</a>
		<a href="/pages/ders/web.php" class="w3-bar-item w3-button">İnternet Programlama</a>
		<a href="/pages/ders/java.php" class="w3-bar-item w3-button">Java</a>
		<a href="/pages/ders/sayisal.php" class="w3-bar-item w3-button">Sayısal Tasarım</a>
		<a href="/pages/ders/mikro.php" class="w3-bar-item w3-button">Mikro İşlemci Uygulamaları</a>
      </div>
    </div>
  </div>
</div>
<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">ILETISIM</a>
  <a href="/pages/makale.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">MAKALE</a>
  <a href="/pages/uygulama.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">UYGULAMALAR</a>
  <div class="w3-dropdown-hover">
      <button class="w3-bar-item w3-button w3-padding-large">DERSLER<i class="fa fa-caret-down">
      </i></button>
         <div class="w3-dropdown-content w3-bar w3-border w3-black">
            <a href="/pages/ders/isaret.php" class="w3-bar-item w3-button">İşaret Ve Sistemler</a>
    		<a href="/pages/ders/prog.php" class="w3-bar-item w3-button">C-Programlama</a>
    		<a href="/pages/ders/web.php" class="w3-bar-item w3-button">İnternet Programlama</a>
    		<a href="/pages/ders/java.php" class="w3-bar-item w3-button">Java</a>
    		<a href="/pages/ders/sayisal.php" class="w3-bar-item w3-button">Sayısal Tasarım</a>
    		<a href="/pages/ders/mikro.php" class="w3-bar-item w3-button">Mikro İşlemci Uygulamaları</a>
          </div>
      </div>
</div>
<div class="w3-black" id="tour">
    <div class="w3-container w3-content w3-padding-64" style="max-width:1000px">
      <h2 class="w3-wide w3-center">MAKALELER</h2><br>
      <ul class="w3-ul w3-border w3-white w3-text-grey">
		<li class="w3-padding"><p style="text-align:center" class="w3-bar-item"></p>
		<h4 style="text-align:center"><b>PROGRAMLAMA DİLLERİ VE SEVİYELERİ</b></h4>
		</li>
		<li class="w3-padding"><p style="text-align:center" class="w3-bar-item"></p>
		<p>Programlama dilleri seviyelerine göre gruplarda incelenir. Programlama dillerinin seviyeleri makine diline yakınlığı ile ölçülür.</p>
        &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;
        <img style="align:center;max-width:100%;height:auto;" src="/images/makale-resim/prog.jpg"><br>
        </li>
        <li class="w3-padding"><p style="text-align:center" class="w3-bar-item"></p>
		<h5><b>1) ÇOK YÜKSEK SEVİYELİ DİLLER</b><h5>
        <p><b>1.A) Visual Basic</b></p>
        <p>Microsoft tarafından, Basic programlama dili üzerinde geliştirilmiş nesne tabanlı görsel programlama dilidir.</p>
        </p>
        <p><b>1.B) VB.net</b></p>
        <p>Görsel programlama dili olan VisualBasic 'in son sürümü olan bu dil görsellik yanında .NET kütüphanesini de barındırır.</p>
        </p>
        <p><b>1.C) Access</b></p>
        <p>Bir veritabanı programlama dilidir. Microsoft tarafından kurulmuş ve geliştirilmiştir.</p>
        </p>
        <p><b>1.D) FoxPro</b></p>
        <p>Ashton Tate firmasında Dbase dilini üreten programcıların Dbase 'i bırakarak yazdıkları Dbase 'den daha etkili başarılı ve Dbase türevi olan bir programlama dilidir. 
        Başarısının üzerine Microsoft tarafından satın alınıp Visual FoxPro adını almıştır.</p>
        </p>
        <p><b>1.E) PHP</b></p>
        <p>1995 yılında Rasmus Lerdorf tarafından yayınlanan internet için üretilmiş programlama dilidir .C, Perl, Java ve C++ dan etkilenmiş olup nesne yönelimli ve yordamsal bir dildir.</p>
        </p>
        <p><b>1.F) Ruby</b></p>
        <p>1995 yılında Yukihiro Matsumoto tarafından yayınlanan, tasarlanan ve geliştirilen nesneye yönelik, reaktif bir programlama dilidir.</p>
        </p>
        <p><b>1.G) Python</b></p>
        <p>1991 yılında Guido Van Rossum tarafından tasarlanan ve Python Yazılım Vakfı tarafından geliştirilen güçlü, dinamik ve fonksiyonel bir programlama dilidir.</p>
        </p>
        </li>
        <li class="w3-padding"><p style="text-align:center" class="w3-bar-item"></p>
		<h5><b>2) YÜKSEK SEVİYELİ DİLLER</b><h5>
        <p><b>2.A) Pascal</b></p>
        <p>1970 yılında bilgisayar bilimcisi Niklaus Wirth tarafından yapısal programlamayı derleyiciler için daha kolay işlenir hale getirmek için geliştirilmiştir. ALGOL programlama dilinden türetilmiştir.</p>
        </p>
        <p><b>2.B) Basic</b></p>
        <p>1964 yılında John George Kemeny ve Thomas Eugene Kurtz tarafından tasarlanmıştır. Yapısal olmayan ve sonralarında yordamsal ve nesne yönelimli programlama dilidir.</p>
        </p>
        <p><b>2.C) Fortran</b></p>
        <p>1957 yılında John Backus tarafından tasarlanan ve IBM ortaklığıyla geliştirilen yordamsal, nesne yönelimli genel programlama dilidir.</p>
        </p>
        <p><b>2.D) COBOL</b></p>
        <p>1959 yılında üniversiteler, hükümetler ve ticari kuruluşlar tarafından oluşturulan bir komite tarafından yaratılmıştır.2002 yılından beri nesne yönelimli programlamayı desteklemektedir.</p>
        </p>
        </li>
        <li class="w3-padding"><p style="text-align:center" class="w3-bar-item"></p>
		<h5><b>3) ORTA SEVİYELİ DİLLER</b><h5>
        <p><b>3.A) C</b></p>
        <p>1972 yılında Dennis Kitchie tarafından tasarlanan UNIX işletim sistemine geliştirmek amacıyla tasarlanmıştır. AT&T Bell laboratuvarlarında geliştirilmiştir. 
        B programlama dilinden esinlenerek oluşturulmuştur. 
        C dilinin getirdiği esneklik, assembly dili ile yüksek düzeyli dillerin yeteneklerine sahip olması C dilinin en çok kullanılan dillerden biri olmasını sağlamıştır.</p>
        </p>
        <p><b>3.B) C++</b></p>
        <p>1983 yılında Bjarne Stroustrup tarafından tasarlanan ve Bell laboratuvarlarında ortak olarak geliştirilen programlama dilidir. 
        Her C programı aynı zamanda bir C++ programıdır. Ancak her C++ programı bir C programı değildir. C++ , C 'ye göre çok biçimli dildir.</p>
        </p>
        <p><b>3.C) C#</b></p>
        <p>Microsoft tarafından tasarlanan ve geliştirilen yeni nesil programlama dilidir. 
        2000 yılında çıkmış olan bu dil birçok alanda Java 'yı kendine örnek alır. C ve C++ 'ın kod sözdizimine benzer kod yapısındadır.</p>
        </p>
        <p><b>3.D) Java</b></p>
        <p>1995 yılında James Gosling & Sun Microsystems tarafından tasarlanan ve Oracle Corporation tarafından geliştirilen nesne yönelimli programlama dilidir. C# 'ın atası gibidir.</p>
        </p>
        </li>
        <li class="w3-padding"><p style="text-align:center" class="w3-bar-item"></p>
		<h5><b>4) DÜŞÜK SEVİYELİ DİLLER</b><h5>
        <p><b>4.A) Assembly</b></p>
        <p>Makine dilinden sonra ortaya çıkmıştır. Makine diline en yakın dildir. Derleyicisi assemblerdır.</p>
        </p>
        </li>  
        <li class="w3-padding"><p style="text-align:center" class="w3-bar-item"></p>
		<h5><b>5) MAKİNA DİLİ</b><h5>
        <p>Mikroişlemci ya da Mikro denetleyici gibi komut işleme yeteneğine sahip entegrelerin işleyebilecekleri komutlarda ve buna uygun sözdiziminden oluşan dildir. 
        Bu dil sadece 0 ve 1 binary ikililerinin anlamlı kombinasyonlarından meydana gelir.Bu nedenle makine dilini anlamak zordur. Bu dilin komutları donanıma bağlıdır.</p>
        </p>
        </li>      
        <li class="w3-padding"><p style="text-align:center" class="w3-bar-item"></p>
		<p style="text-align:center"><i>Programlama Dillerinden, çeşitlerinden kısaca bahsettik. Görüşmek üzere...</i></p>
		</li>		    
      </ul>
    </div>
  </div>
<!-- The Contact Section -->
  <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
    <h2 class="w3-wide w3-center">İLETİŞİM</h2>
    <p class="w3-opacity w3-center"><i>Görüşleriniz benim için önemli!</i></p>
    <div class="w3-row w3-padding-32">
      <div class="w3-col m6 w3-large w3-margin-bottom">
        <i class="fa fa-map-marker" style="width:30px"></i> Tekirdağ, TR<br>
        <i class="fa fa-envelope" style="width:30px"> </i> Email: fatihhas2609@gmail.com<br>
      </div>
      <div class="w3-col m6">
        <form action="/" target="_blank">
          <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="İsim" required name="Name">
            </div>
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
            </div>
          </div>
          <input class="w3-input w3-border" type="text" placeholder="Mesaj" required name="Message">
<button class="w3-button w3-black w3-section w3-right" onclick="alert('Kullanımda değil. Belirtilen mail adresinden ulaşabilirsiniz :) ');">GÖNDER</button>        </form>
      </div>
    </div>
  </div>
<!-- End Page Content -->
</div>
<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-grey w3-xlarge">
<a href="https://www.facebook.com/Fatihas5937/"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
<a href="https://www.instagram.com/fatihh.has/?hl=tr"><i class="fa fa-instagram w3-hover-opacity"></i></a>
<a href="https://twitter.com/fatihaass"><i class="fa fa-twitter w3-hover-opacity"></i></a>
<a href="https://www.linkedin.com/in/fatih-has-bba88910a/"><i class="fa fa-linkedin w3-hover-opacity"></i></a>
<a href="https://github.com/fathasss"><i class="fa fa-github w3-hover-opacity"></i></a>
</footer>
<script>
// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();
function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 4000);    
}
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
</body>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5fa92e938e1c140c2abc30ef/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</html>
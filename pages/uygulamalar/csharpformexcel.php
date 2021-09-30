

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
      <h2 class="w3-wide w3-center">UYGULAMALAR</h2><br>
      <ul class="w3-ul w3-border w3-white w3-text-grey">
		<li class="w3-padding"><p style="text-align:center" class="w3-bar-item"></p>
		<h4 style="text-align:center"><b>C# FORM UYGULAMASINDA VERİTABANINDAN EXCEL ÇIKTISI ALMA</b></h4>
		</li>
        <li class="w3-padding"><p style="text-align:center" class="w3-bar-item"></p>
            <p><b></b></p>
             <p>DataGridView' den Excel çıktısı alma<br>
            </li>
            <li class="w3-padding"><p style="text-align:center" class="w3-bar-item"></p>
             <p>C# Form uygulamasında excel çıktısı alabilmek için bize gerekli olan kütüphane<br>
             using Excel = Microsoft.Office.Interop.Excel;</p>
            </li>           
            <li class="w3-padding"><p style="text-align:center" class="w3-bar-item"></p>
             <p>Bu kütüphaneyi kullanarak Form uygulamamızda bulunan DataGridView içerisinde seçili olan verileri Excel dosyasına yazdırabileceğiz.Form bir adet datagrid ve 1 adet buton içermektedir.<br>
             Buton excel çıktısı almamızı sağlayan buton olacaktır.</p>
            </li>
            <li class="w3-padding"><p style="text-align:center" class="w3-bar-item"></p>
             <p>DataGridView' e veri tabanı bağlantısı yapıldıktan sonra veritabanındaki tabloların excele yazılması için butona tıkladığında çalışması gereken kod aşağıdaki gibidir.</p>
            </li>
            <li class="w3-padding"><p style="text-align:center" class="w3-bar-item"></p>
             <p>
             private void button1_Click(object sender, EventArgs e)<br>
                &nbsp;{<br>
                   &nbsp;&nbsp; //Download Excel <br>
                    &nbsp;&nbsp;conn = "SQLSERVER BAĞLANTISI";<br>
                   &nbsp;&nbsp; SaveFileDialog file = new SaveFileDialog();<br>
                   &nbsp;&nbsp; file.Filter = "Excel dosyaları (* .xlsx) | * .xls | Tüm dosyalar (*. *) | *. *";<br>
                   &nbsp;&nbsp; file.CreatePrompt = true;<br>
                   &nbsp;&nbsp; if (file.ShowDialog() == DialogResult.OK)<br>
                   &nbsp;&nbsp;&nbsp; {<br>
                      &nbsp;&nbsp;&nbsp;&nbsp;  try<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;{<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;conn.Open(); //SQL Server bağlantısı açık.<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;var excel = "select *from ürünler"; //SQL Server Sorgusu<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cmd = new SqlCommand(excel, conn); //SQL komutunu veritabanında çalıştırma<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;read = cmd.ExecuteReader(); //Veritabanından veri okuma<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Excel.Application xlap = new Excel.Application(); //Excel Uygulama nesnesi oluşturma<br>
                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (xlap == null)<br>
                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br>
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  MessageBox.Show("Bilgisayarınızda Excel bulunmuyor!\nBu işlemi Excel yüklü değil iken yapamazsınız.");<br>
                               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; //Excel yüklü mü diye kontrol eden koşul ifadesi<br>
                               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; return;<br>
                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; }<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Excel.Workbook xlWorkBook;<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Excel.Worksheet xlWorkSheet; //Excel kitaplığı tanımlaması<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;object misValue = System.Reflection.Missing.Value;<br>
                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; xlWorkBook = xlap.Workbooks.Add(misValue);<br>
                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; xlWorkSheet = (Excel.Worksheet)xlWorkBook.Worksheets.get_Item(1);<br><br>

                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//İlk satırda başlık olarak yazılacak öğeler.<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;xlWorkSheet.Cells[1, 1] = "ID"; <br>
                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; xlWorkSheet.Cells[1, 2] = "Ürün Kodu";<br>
                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; xlWorkSheet.Cells[1, 3] = "Ürün Açıklaması";<br>
                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; xlWorkSheet.Cells[1, 4] = "Ürün Adı";<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;xlWorkSheet.Cells[1, 5] = "Ürün Stok";<br>
                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; int i = 1;<br>
                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; while (read.Read() && i <= dataGridView1.Rows.Count)<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;i++;<br>
                               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; xlWorkSheet.Cells[i, 1] = Convert.ToInt32(read["tablosatırı0"]);<br>
                               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; xlWorkSheet.Cells[i, 2] = read["tablosatırı1"];<br>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;xlWorkSheet.Cells[i, 3] = read["tablosatırı2"];<br>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;xlWorkSheet.Cells[i, 4] = read["tablosatırı3"];<br>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;xlWorkSheet.Cells[i, 5] = read["tablosatırı4"];<br>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//Döngü yardımıyla veritabanındaki öğeleri ilgili satırların altına satır satır yazdırma<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br>
                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; xlWorkBook.SaveAs(file.FileName, Excel.XlFileFormat.xlWorkbookNormal, misValue, misValue, misValue, misValue, Excel.XlSaveAsAccessMode.xlExclusive, misValue, misValue, misValue, misValue, misValue);<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; xlWorkBook.Close(true, misValue, misValue);<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; xlap.Quit(); //Kitaplığı kapat<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Marshal.ReleaseComObject(xlWorkSheet);<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Marshal.ReleaseComObject(xlWorkBook);<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Marshal.ReleaseComObject(xlap);<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; MessageBox.Show("Excel dosyası oluşturuldu.\n","UYARI",MessageBoxButtons.OK,MessageBoxIcon.Information);<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; conn.Close();<br>
                         &nbsp;&nbsp;&nbsp;&nbsp;}<br>
                       &nbsp;&nbsp;&nbsp;&nbsp; catch (Exception ex)<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (dataGridView1.Rows.Count == 0)<br>
                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {<br>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MessageBox.Show("Listede seçili öğe olmadığı için Excel hatalı oluşturuldu.\n");<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;;else<br>
                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {<br>
                               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; MessageBox.Show(ex.Message);<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br>
                   &nbsp;&nbsp;&nbsp;&nbsp; }         <br>                            
                &nbsp;&nbsp;&nbsp;}<br>
             </p>
            </li>
            <li class="w3-padding"><p style="text-align:center" class="w3-bar-item"></p>
             <p>1. Kod örneğinde olduğu gibi try-catch yöntemiyle oluşabilecek veritabanı hatalarını yakalamaya çalıştık.<br>
                2. SaveFileDialog ile alacağımız çıktının dosya yolunu belirlemek için açılır pencerenin çalışmasını sağladık.<br>
                3. Açılır pencere açıldıktan bilgisayarda excelin yüklü olup olmadığını kontrol ettik ve yüklü değilse if kod bloğunun altındaki işlemler başladı.<br>
                4. Excel yüklüyse yeni bir excel kitaplığı oluşturduk ve bir adet misValue adında nesne tanımladık.<br>
                5. Oluşturduğumuz nesneyi Excel kitaplığımıza ekledik ve kitaplığı açtık.<br>
                6. Ardından veritabanındaki verilerin excel tablo satırlarında nasıl görüneceğini ayarlamak için excelin ilk satırlarını yazdık.<br>
                7. Yazdığımız ilk satırlar verilerin tablo düzenindeki açıklamalarını belirten kısımlardır.
                8. Ardından while döngüsü yardımyla veritabanında yazdıkmak istediğimiz öğeleri read[""] okuma methoduyla excel tablolarına aktardık.<br>
                9. Döngünün içindeki i değişkeni excel tabloların satır işlemleri için kullanılmıştır. Döngü tamamlanıp başa dönmeden önce bir alt satıra geçmemizi sağlayarak
                   veri karmaşıklığı olmasını engelledik.<br>
                10. Ardından excelin kayıt işlemlerini yaptık ve conn.Close() methoduyla veritabanı bağlantısını sonlandırdık. </p>
            </li>
            <li class="w3-padding"><p style="text-align:center" class="w3-bar-item"></p>
             <p>C# Form ile DataGridView içerisinden veri alıp Excel formatında yazdırmak bu şekildeydi. İyi çalışmalar :)</p>
            </li>
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
          <button class="w3-button w3-black w3-section w3-right" onclick="alert('Kullanımda değil. Belirtilen mail adresinden ulaşabilirsiniz :) ');">GÖNDER</button>
        </form>
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
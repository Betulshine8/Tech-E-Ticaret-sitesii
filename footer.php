<footer class="page-footer" style="margin-top: 120px; box-shadow: 0px 0px 2px white; background-color: rgb(17,17,17)">
  <div class="row wide-container">
    <div class="col s3">
      <h4 class="white-text bold underline">OG Tech PC</h4>
      <p class="grey-text text-lighten-4">Onlinedaki Favori Bilgisayarın</p>
    </div>
    <div class="col s2">
      <h5 class="white-text bold"  style=' text-decoration: underline'>Support</h5>
      <p><a class='dropdown-trigger white-text bold' href='#' data-target='dropdown1'>Customer Care 
        <i class='material-icons' style=' text-decoration: none !important; display: inline-flex; vertical-align: top;'>arrow_drop_down</i>
      </a></p>
      <ul id='dropdown1' class='dropdown-content white'>
        <li><a href='aboutUs.php' class='black-text bold'>Hakkımızda</a></li>
        <li class='divider' tabindex='-1'></li>
        <li><a href='warranty_page.php' class='black-text bold'>Garanti</a></li>
        <li class='divider' tabindex='-1'></li>
        <li><a href='contactUs.php' class='black-text bold'>Bizimle İletişime Geçin</a></li>
      </ul>
    </div>
    <div class="col s2">
      <h5 class="white-text bold">Find Us</h5>
      <p class="bold">
        Pazartesi-Cuma : <br> 11.00am to 8.00pm
      </p>
      <p class="bold">
       <br> Osmaniye
      </p>
    </div>
    <div class="col s2">
      <h5 class="white-text bold">Sosyal</h5>
      <a class="waves-effect waves-light blue lighten-1 btn" style="margin: 2px;">
        <i class="fa fa-facebook fa-fw"></i> Facebook
      </a>
      <a class="waves-effect waves-light pink lighten-1 btn" style="margin: 2px;">
        <i class="fa fa-instagram fa-fw"></i> Instagram
      </a>
    </div>
    <div class="col s3">
      <h5 class="white-text bold ">Ortaklarımız</h5>
      <img src="static/images/Partners.png" />
    </div>
  </div>
  <div class="footer-copyright" style="padding-bottom: 20px;">
    <div class="wide-container underline">© 2023 OG Tech PC All Bütün Hakları Saklıdır.</div>
  </div>

  <script>
    $(document).ready(function() {
      $('.dropdown-trigger').dropdown({
        coverTrigger: false
      });

      $('#pagination').pageMe({
        pagerSelector:'#myPager',
        activeColor: 'blue',
        prevText:'Previous',
        nextText:'Next',
        showPrevNext:true,
        hidePageNumbers:false,
        perPage:5
      });
      
    })
  </script>

</footer>
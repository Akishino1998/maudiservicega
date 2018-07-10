<div class="top_bar_login ml-auto">
    <?php
    if(!isset($_SESSION['user']))
    {
    ?>
    <div class="register_button hvr-grow">
        <a href="#">Daftar</a>
    </div>
    <div class="login_button hvr-grow">
        <a href="#">Masuk</a>
    </div>
<?php }else{ ?>
    <div class="search-select">
        <span class="field">
            <label class="seltext" for="opened"><span style="color: white;">...</span>Hai, <i class="icon list"></i></label>
        </span>
        <input id="opened" type="checkbox" />
      <ul class="select">
        <li class="icon arrow"></li>
        <li class="sel">
          <a href="#">Tentangku</a> <i class="icon list"></i>
        </li>
        <li>
          Ganti Password<i class="icon stat"></i>
        </li>
        <li>
          Data Elektronikku</i>
        </li>
        <li>
          <a href="SQL/sigout.php">Keluar</a> <i class="icon sign"></i>
        </li>

      </ul>
    </div>
<?php } ?>
</div>

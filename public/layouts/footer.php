    <!-- 网页底部 -->
    <footer class="footer">
        <div class="container">
        <p class="text-muted">
          <h6 style="color: blue;">版权所有：Amadeus的小朋友，2016-<?php echo date("Y")?></h6>
          <?php
			date_default_timezone_set("Europe/Paris");
			echo "当前时间是 " . date("h:i:sa");
			?>
        </p>
      </div>
    </footer>
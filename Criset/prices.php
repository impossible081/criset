<!DOCTYPE html>
<html lang="en">
<?php include 'include/headtags.php' ?>
<title>Criset - Blockchain Wallet  {{Terms}}</title>
<body>
<?php include 'include/index_nav.php' ?>
  <!-- intro -->
  <section id="prices" class="clearfix mb-0">
    <div class="container">
      <div class="row">
        <div class="col-md-12 mx-auto">
          <div class="Ethereum" style="display: none;">
            <div style="height:560px; background-color: #1D2330; overflow:hidden; box-sizing: border-box; border: 1px solid #282E3B; border-radius: 4px; text-align: right; line-height:14px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #262B38;padding:1px;padding: 0px; margin: 0px; width: 100%;"><div style="height:540px; padding:0px; margin:0px; width: 100%;"><iframe src="https://widget.coinlib.io/widget?type=chart&theme=dark&coin_id=145&pref_coin_id=1523" width="100%" height="536px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;line-height:14px;"></iframe></div><div style="color: #626B7F; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;"><p>Cryptocurrency prices</p></div></div>
          </div>
          <div class="Litecoin" style="display: none;">
            <div style="height:560px; background-color: #1D2330; overflow:hidden; box-sizing: border-box; border: 1px solid #282E3B; border-radius: 4px; text-align: right; line-height:14px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #262B38;padding:1px;padding: 0px; margin: 0px; width: 100%;"><div style="height:540px; padding:0px; margin:0px; width: 100%;"><iframe src="https://widget.coinlib.io/widget?type=chart&theme=dark&coin_id=359&pref_coin_id=1523" width="100%" height="536px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;line-height:14px;"></iframe></div><div style="color: #626B7F; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;"><p>Cryptocurrency prices</p></div></div>
          </div>
          <div class="Bitcoin">
            <div style="height:560px; background-color: #1D2330; overflow:hidden; box-sizing: border-box; border: 1px solid #282E3B; border-radius: 4px; text-align: right; line-height:14px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #262B38;padding:1px;padding: 0px; margin: 0px; width: 100%;"><div style="height:540px; padding:0px; margin:0px; width: 100%;"><iframe src="https://widget.coinlib.io/widget?type=chart&theme=dark&coin_id=859&pref_coin_id=1523" width="100%" height="536px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;line-height:14px;"></iframe></div><div style="color: #626B7F; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;"><p>Cryptocurrency prices</p></div></div>
          </div> 
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 ">
          <p class="lead text-light">Check prices for other coins</p>
          <div class="btn-group btn-group-lg" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-primary" id="Bitcoin">Bitcoin</button>
            <button type="button" class="btn btn-secondary" id="Ethereum">Ethereum</button>
            <button type="button" class="btn btn-warning" id="Litecoin">Litecoin</button>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Intro Section -->


  <!-- Footer -->
  <footer style="position: fixed; left: 0; bottom: 0; width: 100%; text-align: center;" class="">
    <div style="height:62px; background-color: #1D2330; overflow:hidden; box-sizing: border-box; border: 1px solid #282E3B; border-radius: 4px; text-align: right; line-height:14px; block-size:62px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #262B38;padding:1px;padding: 0px; margin: 0px; width: 100%;">
      <div style="height:40px; padding:0px; margin:0px; width: 100%;">
        <iframe src="https://widget.coinlib.io/widget?type=horizontal_v2&theme=dark&pref_coin_id=1505&invert_hover=no" width="100%" height="36px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe>
      </div>
      <div style="color: #626B7F; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;">
        <p>Crypto currency prices</p>
      </div>
    </div>
  </footer>
  <?php include 'include/signup_modal.php' ?>
  <?php include 'include/reset_modal.php' ?>
  <?php include 'include/login_modal.php' ?>
  <?php include 'include/javascript.php' ?>
  <?php include 'include/prices.js' ?>
</body>
</html>
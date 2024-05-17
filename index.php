<?php  
header('Content-type: text/html; charset=utf-8');
error_reporting(0);
header('Access-Control-Allow-Origin:*');

$url = 'http://txt.ppyy19.shop/yumi1.php';  

$result=file_get_contents_by_curl($url);
$html = $result["html"];
$urlc = "https://".$html;
function randIP(){  //这里是随机伪造IP
       $ip_long = array(
           array('607649792', '608174079'), //36.56.0.0-36.63.255.255
           array('1038614528', '1039007743'), //61.232.0.0-61.237.255.255
           array('1783627776', '1784676351'), //106.80.0.0-106.95.255.255
           array('2035023872', '2035154943'), //121.76.0.0-121.77.255.255
           array('2078801920', '2079064063'), //123.232.0.0-123.235.255.255
           array('-1950089216', '-1948778497'), //139.196.0.0-139.215.255.255
           array('-1425539072', '-1425014785'), //171.8.0.0-171.15.255.255
           array('-1236271104', '-1235419137'), //182.80.0.0-182.92.255.255
           array('-770113536', '-768606209'), //210.25.0.0-210.47.255.255
           array('-569376768', '-564133889'), //222.16.0.0-222.95.255.255
       );
       $rand_key = mt_rand(0, 9);
       $ip= long2ip(mt_rand($ip_long[$rand_key][0], $ip_long[$rand_key][1]));
	   $headers['Hots'] = $ip; 
       $headerArr = array(); 
       foreach( $headers as $n => $v ) { 
           $headerArr[] = $n .':' . $v;  
       }
       return $headerArr;    
   }
function file_get_contents_by_curl($url){
$headers = randIp();
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);  //你需要造访的URL 
curl_setopt($ch,CURLOPT_REFERER, $url); //伪造目标页比如别人设置了 住允许jx.ps269.com 访问即可写上这个域名
curl_setopt($ch, CURLOPT_HEADER,0); //不输出
curl_setopt($ch, CURLOPT_HTTPHEADER, array('cookie: ll="118318"; bid=8cbTRkumKDg; __utmc=30149280; __utmc=223695111; _pk_id.100001.4cf6=5e2688330e185d11.1705332287.; _vwo_uuid_v2=D3D72F3214323D4E6FEC174FAF50E5DDC|8c9fc6686919fb563e9c3e6f6310fc61; __yadk_uid=5c961EJWOYKeuu8jDlvETZA88oBiTBFd; __utmz=30149280.1705461712.2.2.utmcsr=douban.com|utmccn=(referral)|utmcmd=referral|utmcct=/; __utma=30149280.2039570027.1705332277.1705461712.1705491142.3; __utma=223695111.389024086.1705332287.1705461712.1705491143.3; __utmb=223695111.0.10.1705491143; __utmz=223695111.1705491143.3.3.utmcsr=douban.com|utmccn=(referral)|utmcmd=referral|utmcct=/; _pk_ref.100001.4cf6=%5B%22%22%2C%22%22%2C1705491143%2C%22https%3A%2F%2Fwww.douban.com%2F%22%5D; _pk_ses.100001.4cf6=1; ap_v=0,6.0; __utmt_douban=1; __utmb=30149280.6.10.1705491142')); //头部伪造参数 这里头部只伪造了IP
curl_setopt($ch, CURLOPT_USERAGENT,   $useragent = 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.60 Safari/537.36');//这里是UA标识 可以自定义
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);//禁止调用时就输出获取到的数据
curl_setopt($ch, CURLOPT_TIMEOUT, 300);  // curl 执行时间 过长访问多了会影响服务器
curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,false);
curl_setopt($ch,CURLOPT_ENCODING ,'gzip');
$html = curl_exec($ch);
$reurl = curl_getinfo($ch,CURLINFO_EFFECTIVE_URL);  
$result= array("html"=>$html,"reurl"=>$reurl);
curl_close($ch);
return $result;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>ppyyzy.com-最新地址</title>
    <meta name="keywords" content="ppyyzy">
    <meta name="description" content="最新地址ppyyzy.com">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="viewport"
        content="width=device-width, initial-scale=1,minimum-scale=1, maximum-scale=1, user-scalable=no" />
    <meta http-equiv='x-dns-prefetch-control' content='on'>
    <style>
        body {
            margin: 0;
            padding: 0;
            background: #000;
            color: #F0F0F0;
        }

        #head,
        #content,
        #foot {
            width: 70vw;
            margin-left: 15vw;
            margin-top: 0.5em;
            display: inline-block;
        }

        #indexlogo {
            display: block;
            text-align: center;
            width: 30%;
            transform: translate(-50%);
            margin-left: 50%;
            margin-top: 1em;
            border-bottom: solid 1px #F0F0F0;
        }

        #indexlogo a {
            display: block;
        }

        .logotxt {
            height: 60px;
            line-height: 60px;
            font-size: 30px;
            font-weight: bold;
            display: inline-block;
            margin-left: 0.5em;
            color: #FFF;
        }

        .logobtn {
            background-color: rgb(53, 140, 187);
            padding: 0.1em 0.2em;
            border-radius: 4px;
            margin-left: 0.1em;
        }

        .abouthtml {
            text-align: center;
            color: #fff;
        }

        .main {
            font-size: 20px;
            display: inline-block;
            text-align: center;
            border-bottom: solid 1px #F0F0F0;
            line-height: 1em;
        }

        .btn {
            display: inline-block;
            background-color: rgb(53, 140, 187);
            padding: 0.2em 0.5em;
            border-radius: 4px;
            color: #FFF;
            text-decoration: unset;
            cursor: pointer;
        }


        .link a {
            display: block;
            margin: 0.2em 0.2em;
            text-decoration: unset;

        }

        .host {
            color: gold;
            font-size: 20px;
            border-bottom: double 1px red;
        }

        .ping {
            font-size: xx-small;
            padding: 0.1em 0.5em;
            background-color: #FFF;
            color: green;
            margin-right: 0.3em;
        }

        #foot {
            margin-top: 30px;
            text-align: center;
            color: #cecece;
            line-height: 1.8em;
            padding-top: 1em;
            font-size: small;
            margin-bottom: 3em;
            border-top: solid 1px #F0F0F0;
        }

        #foot p {
            line-height: 1.5em;
            padding: 0;
            margin: 0;
        }

        #foot a {
            color: lawngreen;
        }

        input {
            font-size: 20px;
            border-radius: 3px;
            border: unset;
            color: red;
        }

        .ps {
            font-size: small;
            margin-top: 1em;
            padding: 0.5em 0;
            background-color: #343434;
            width: 50%;
            transform: translateX(50%);
            border-radius: 3px;
        }

        .ssl {
            color: red;
            background-color: #FFF;
            padding: 0 0.5em;
            margin: 0 0.5em;
            border-radius: 3px;
            text-decoration: line-through;
        }
        @media only screen and (max-width:1199px) {

            #head,
            #content,
            #foot {
                width: 100vw;
                margin-left: unset;
            }

            #indexlogo {
                width: 60%;
            }

            .abouthtml {
                width: 98%;
                margin-left: 1%;
            }

            .ps {
                width: 100%;
                transform: translateX(0);
            }
        }
    </style>
</head>

<body>
    <div id="head">
        <span style="color:red;display: block;font-size: 13px;text-align: center;">使用Chrome（谷歌瀏覽器）可以加速訪問</span>
        <div id="indexlogo">
            <a id="home">
                <div class="logotxt">ppyyzy<span class="logobtn">.COM</span></div>
            </a>
        </div>
    </div>
    <span id="content">
        <div class="abouthtml">
            <span class="main">
                <h1>ppyyzy-最新地址</h1>
                <p>
                    最新網路上有很多冒牌的ppyyzy網站，
                    一旦點擊進去就會發現不是我們，而且會跳轉到收費，或者不能正常使用的站點。
                    ppyyzy是完全免費的並且不需要登入會員也不會讓您試看然後沒有後續的網站。
                    正確的地址有ppyyzy.com這個地址,后续会增加更多备用地址。
                    除此之外全部都是冒牌的惡意網站，請您詳細辨認。
                </p>
            </span>
            <span class="showlink"></span>
        </div>
    </span>
    <span id="foot"><span></span></span>
    <script>
        var uselink = [
            '<?php echo $urlc ?>', '<?php echo $urlc ?>',
        ];
        var t = 3;
        var microwap = navigator.userAgent.toLowerCase().match(/MicroMessenger/i) == "micromessenger" ? true : false;
        var main = document.getElementsByClassName('main')[0];
        var showlink = document.getElementsByClassName('showlink')[0];
        var foot = document.getElementById('foot').getElementsByTagName('span')[0];
        var foothtml = '<p>Android建議使用<a href="https://www.google.cn/chrome/">Chrome</a>瀏覽器</p>' +
            '<p>Iphone建議使用內置<a>Safari</a>瀏覽器</p>' +
            '<p>大陸地區請馬上離開，不要瀏覽/轉發</p>' +
            '<p>ppyyzy是一個非盈利性的聚合站點</p>' +
            '<p>我們的宗旨是為所有愛好者提供完全免費多樣的影片</p>' +
            '<p>請看管好您的設備，不要使未成年人接觸到我們</p>' +
            '<p>聯絡電郵：ppyyzy@gmail.com</p>';

        if (microwap) {
            main.innerHTML = '';
            main.insertAdjacentHTML('beforeEnd', '<p>請使用瀏覽器打開此页面</p>' +
                '<p>使用Chrome（谷歌瀏覽器）可以解除大部份國家或地區的封鎖</p>' +
                '<p>拷貝地址：<input onfocus="this.select()" value="' + window.location.host + window.location.pathname + '"></p>');
        } else {
            function re(id) {
                let dom = document.getElementById(id);
                let name = dom.localName;
                let re = dom.parentNode;
                let htm = dom.outerHTML;
                let regex = new RegExp('^(.*?)' + name + '(.*?)' + name + '(>)$', 'i');
                let num = Math.floor(Math.random() * (99999 - 100)) + 100;
                htm = htm.replace(/\r|\n/ig, "");
                htm = htm.replace(regex, "$1tag" + num + "$2tag" + num + ">");
                dom.insertAdjacentHTML('afterend', htm);
                re.removeChild(dom);
            };
            function getTime(url, i, dom) {
                let t = Date.now();
                let xhr = new XMLHttpRequest();
                xhr.open("GET", url + "?ping" + Math.random());
                xhr.onerror = function () {
                    if (xhr.readyState == 4) {
                        let ms = Math.floor((Date.now() - t) / 10);
                        el.getElementsByTagName('a')[i].getElementsByClassName('ping')[0].innerHTML = ms + 'ms';
                        if (!over) {
                            over = url;
                            a.href = over;
                        };
                    }
                }
                xhr.send();
            }
            function showurl() {
                main.innerHTML = '';
                foot.innerHTML = '';
                showlink.innerHTML = '';
                main.insertAdjacentHTML('afterBegin',
                    '<p>您可能會無法正常進入ppyyzy.com</p>' +
                    '<p style="color:red">可通過本頁面或下面方式取得新地址</p>');
                showlink.insertAdjacentHTML('afterBegin', '<p>新的地址</p><span class="link" id="use"></span>' +
                    '<br>也可訪問<span style="color:red;">ppyyzy.com</span><br>' +
                    '<a class="btn" href="https://www.ebay.com/usr/ppyyzy">ebay</a>或聯絡郵箱<span style="color:red;">ppyyzy@gmail.com</span>取得新地址' +
                    '<br><div class="ps">若出現網址打不開，或出現<span class="ssl">https</span>（<span style="color:red">證書不一致</span>）時' +
                    '<br>已確定是您當地的DNS伺服器被入侵劫持。<br>您可以將DNS伺服器更換為<br><span style="color:gold">Google DNS（慣用：8.8.8.8）（備用：8.8.4.4）</span>' +
                    '<br>或其它安全的DNS（可使用搜尋引擎查詢DNS設定方法）<br>行動設備可直接使用數據網路流量避免此問題。</div>');
                foot.insertAdjacentHTML('afterBegin', foothtml);
            };
            function addlink(id, arr) {
                let head = document.head || document.getElementsByTagName('head')[0];
                el = document.getElementById(id);
                arr.forEach(function (e, i) {
                    var hint = document.createElement("link");
                    hint.setAttribute("rel", "dns-prefetch");
                    hint.setAttribute("href", e);
                    head.appendChild(hint);
                    var hint2 = document.createElement("link");
                    hint2.setAttribute("rel", "prefetch");
                    hint2.setAttribute("href", e);
                    head.appendChild(hint2);
                    getTime(e, i, el);
                    el.insertAdjacentHTML('beforeEnd', '<a href="' + e + '"><span class="btn ping">Ping...</span><span class="host">' + e.split('/')[2] + '</span></a>');
                });
            };
            showurl();
            re('content');
            re('foot');
            addlink('use', uselink);
        };
    </script>
</body>

</html>

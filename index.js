// 假设这是您想要执行的异步操作（例如发送 fetch 请求）  
function fetchData() {  
    // 显示“请稍后”的消息  
    showLoadingMessage();  
  
    // 模拟异步操作（例如 fetch 请求）  
    setTimeout(function() {  
        // 假设这是从服务器获取的数据  
        var data = '<div>数据正在加载，请稍后！</div>';  
  
        // 隐藏或移除“请稍后”的消息  
        hideLoadingMessage();  
  
        // 将数据插入到 result-container 中  
        document.getElementById('result-container').innerHTML = data;  
    }, 2000); // 假设异步操作需要2秒  
}  
  
// 显示“请稍后”的消息  
function showLoadingMessage() {  
    document.getElementById('loading-message').style.display = 'block';  
}  
  
// 隐藏或移除“请稍后”的消息  
function hideLoadingMessage() {  
    document.getElementById('loading-message').style.display = 'none';  
}  
  
// 页面加载完成后执行 fetchData 函数  
window.onload = fetchData;

async function fetchDomainList() {  
    try {  
        const response = await fetch('https://txt.ppyy19.shop/yumi1.php');  
        if (!response.ok) {  
            throw new Error(`HTTP error! status: ${response.status}`);  
        }  
        // 假设返回的是两个用换行符分隔的URL  
        const domainString = await response.text(); // 获取响应的文本内容  
        // 将文本按换行符分割成数组  
        const domainList = domainString.split('\n'); // 假设URL之间用换行符分隔  
        // 去除可能存在的空行或空白字符  
        const trimmedDomainList = domainList.map(domain => domain.trim()).filter(domain => domain);  
          
        // 检查是否确实有两个URL  
        if (trimmedDomainList.length !== 2) {  
            throw new Error('Unexpected number of URLs returned');  
        }  
          
        // 返回两个URL的数组  
        return trimmedDomainList;  
    } catch (error) {  
        console.error('Failed to fetch domain list:', error);  
        return []; // 返回一个空数组表示没有获取到有效的URL列表  
    }  
}  
   

fetchDomainList().then(domainList => {  
    if (domainList.length === 2) {  
        const [url1, url2] = domainList; // 使用解构赋值获取两个URL  
        var uselink = [url1, url2]; // 赋值给uselink数组  
        //console.log(uselink); // 打印数组  
    } else {  
        //console.log('Failed to get exactly two URLs');  
    }  

        var t = 3;
        var microwap = navigator.userAgent.toLowerCase().match(/MicroMessenger/i) == "micromessenger" ? true : false;
        var main = document.getElementsByClassName('main')[0];
        var showlink = document.getElementsByClassName('showlink')[0];
        var foot = document.getElementById('foot').getElementsByTagName('span')[0];
        var foothtml = '<p>Android建議使用<a href="https://lemurbrowser.com/new_version_test/app/zh.html">狐猴</a>瀏覽器</p>' +
            '<p>Iphone建議使用內置<a>Safari</a>瀏覽器</p>' +
            '<p>大陸地區請馬上離開，不要瀏覽/轉發</p>' +
            '<p>ppyyzy是一個非盈利性的聚合站點</p>' +
            '<p>我們的宗旨是為所有愛好者提供完全免費多樣的影片</p>' +
            '<p>請看管好您的設備，不要使未成年人接觸到我們</p>' +
            '<p>聯絡電郵：ppyyzy@outlook.com</p>';

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
                    '<p>发布页地址1：<a href="https://ppyyzy.com"><span class="host">ppyyzy.com</span></a></p> ' +
                    '<p>发布页地址2：<a href="https://ppyyzy.github.io"><span class="host">ppyyzy.github.io</span></a></p>' +
                    '<p>防止走丢，请保存上面的发布页到书签。</p>' +
                    '<p style="color:red">可通過本頁面或下面方式取得新地址</p>');
                showlink.insertAdjacentHTML('afterBegin', '<p>新的地址</p><SPAN class="link" id="use"></SPAN>' +
                    '<p>如果上面地址打不开，请点击下面的地址</p><a href="https://520xav.com"><span class="btn ping">Ping...</span><span class="host">520xav.com</span></a><br>'+
                    '<br>再次提醒<SPAN style="color:red;">请保存此页面为书签</SPAN><br>' +
                    '<br>请牢记发布页<SPAN style="color:red;">ppyyzy.github.io和ppyyzy.com</SPAN><br>' +
                    '<a class="btn" href="https://www.ebay.com/usr/ppyyzy">ebay</a>或聯絡郵箱<SPAN style="color:red;">ppyyzy@outlook.com</SPAN>取得新地址' +
                    '<br><div class="ps">若出現網址打不開，或出現<SPAN class="ssl">https</SPAN>（<SPAN style="color:red">證書不一致</SPAN>）時' +
                    '<br>已確定是您當地的DNS伺服器被入侵劫持。<br>您可以將DNS伺服器更換為<br><SPAN style="color:gold">Google DNS（慣用：8.8.8.8）（備用：8.8.4.4）</SPAN>' +
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
                    el.insertAdjacentHTML('beforeEnd', '<A href="' + e + '"><SPAN class="btn ping">Ping...</SPAN><SPAN class="host">' + e.split('/')[2] + '</SPAN></A>');
                });
            };
            showurl();
            re('content');
            re('foot');
            addlink('use', uselink);
        };
        const gonggaoContent = document.getElementById('ggao');  
const gonggaoHtml = `<H1>ppyyzy-最新地址</H1>
                <P>最新網路上有很多冒牌的ppyyzy網站， 一旦點擊進去就會發現不是我們，而且會跳轉到收費，或者不能正常使用的站點。 ppyyzy是完全免費的並且不需要登入會員也不會讓您試看然後沒有後續的網站。正確的地址有ppyyzy.com這個地址,后续会增加更多备用地址。除此之外全部都是冒牌的惡意網站，請您詳細辨認。</P>`;  
    gonggaoContent.innerHTML = gonggaoHtml;  
    

}).catch(error => {  
    // 如果 fetchDomainList 抛出了错误，这里会捕获到它  
    console.error('An error occurred:', error);  
});

<p>以下主要分享一下設計、前端、後端以及系統部分，有興趣的可以繼續往下看！</p>

<ul>
  <li><b>設計</b> 我參考了 <a href='https://www.google.com/design/spec/material-design/introduction.html' target='_blank'>Material Design</a>，所以設計就用 Material 的角度去設計版面以及流程！不過當然的，手機與網頁的表現還是會有些許的差異，但是整體我仍然盡量參考規範ＸＤ</li>

  <li><b>後端</b> php 這次我就使用了很潮的 <a href='http://php.net/manual/en/migration70.new-features.php' target='_blank'>php7</a>，跑起來貌似有變快，因為我的爬蟲變快了，所以整體來說算是很滿意，不過 framework 在有些 function 的部分需要稍做調整，但大致上都很健康，當然頁順便將我的 <a href='http://www.ioa.tw/oaci.html' target='_blank'>OACI</a> 給更新到 php7 相容！</li>
  <li><b>前端</b> JavaScript 這次主力都在 Google Maps API 的運用，三年前我就是將此 Google Mapd 與廟會遶境路線做了<a href='http://mazu.ioa.tw/maps/dintao' target='_blank'>結合</a>，所以開啟了我對 Google Maps 運用的熱愛，所以今年也是把他當主力，活動當天沒意外的話，我會結合 GPS 線上定位！</li>
  <li><b>刻板</b> css 的部分，我則是使用 compass scss 去實作，javascript 的話則是使用 jQuery 以及一些其他的 lib 實作！</li>

  <li><b>框架</b> 則因為前後端都自己包辦，所以原本的 CodeIgniter Framework 也做了一些修改，也就是 <a href='http://www.ioa.tw/oaci.html' target='_blank'>OACI</a> 加入了一些功能，當上 production 時將這些靜態 css、javascript 等檔案，就可以自動的 merge、minify、uglify 並且 push 到 AWS S3。</li>
  <li><b>靜態檔案</b> 的部分，我利用 S3 強大的空間儲存功能，將網站的圖檔資源、js、css 都上到 S3 以減少 EC2 的 Loading，而圖片檔若是遇到大檔案，則利用 TinyPNG 去對圖片做壓縮，然後再上傳到 S3，當然，以上都是用程式跑的：）</li>
  <li><b>快取</b> 的部分，因為基本上網站前台都是使用大量的文章以及簡介，所以可以做大量的 cache，不過這部分採用 file cache 而已，雖然我有原本打算使用 Redis 去實作，但是我把記憶體留給 MySQL 了..(我沒開 RDS，MySQL 是上在與 Server 同一台的 EC2)
  <blockquote>既然有作 output 的 cache，所以我也順便將 HTML minify，因為對 output cache，也就是說 Request 進來是不會去執行 php，那就無法紀錄瀏覽人數的紀錄了，為了解決這個問題，這部分我使用 Ajax 去實作回傳人氣的紀錄！</blockquote></li>
  <li><b>SEO</b> 當然也是列入這次的重點考量！首先相關搜尋的設定，robots.txt、Sitemap 不用講，一定會做，這次我還加入了一點點的 schema、Google AMP、JSON-LD 的結構，這些步驟都是去餵 Search Engine 想吃的菜！</li>
</ul>

<p>開發過程中學到很多經驗也嘗試很多架構，這次我使用 AWS 的服務，主要開了一台東京 t2.micro 的 EC2，以及使用 S3 的服務而已，網頁流量依據 GA 的服務，<b>即時人數</b>最高曾經落在 1900 人左右，可能有些頁面是使用 S3 吧，所以都撐得住！</p>
<p>這是目前我個人做過最高流量的網站，相對的也是個人里程碑！以上是我的經驗、心得分享， 回到做網站初衷，我只是個熱愛故鄉的鄉土文化，想為家鄉盡一分力，利用自己的專長技術，支援這個從小的信仰如此簡單。</p>
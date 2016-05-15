<p>專案內有附一隻 <a href='http://comdan66.github.io/OA-maze/create.html' target='_blank'>地圖產生器</a>，可以提供各位自行編輯迷宮地圖路線，當地圖編輯完後按下 <b>dump</b> 後，複製陣列文字，並且貼至<a href='https://github.com/comdan66/OA-maze/blob/master/res/index.js' target='_blank'>res/index.js</a> 內覆蓋 maze 陣列變數後，即可產生自己的地圖迷宮，由此可以得知整個地圖設計原理，是參考 <a href='http://openhome.cc/Gossip/AlgorithmGossip/MouseGoMaze.htm' target='_blank'>老鼠走迷宮</a> 的進階遊戲，在 Web 上更可以利用 JavaScript 去監聽鍵盤 <b>keydown</b> 的按鍵以實作上、下、左、右的反應。</p>
<p>迷宮還有另外一項隱藏視角，就是當 <a href='https://git-scm.com/' target='_blank'>Git</a> 切換到 <a href='https://github.com/comdan66/OA-maze/tree/3D' target='_blank'>3D</a> Branch 時，即可檢視 3D 介面的迷宮模式，此項是利用 css 的旋轉(transform、rotateX、rotateY、translateZ)，將原本的每個節點元素各自新增出六個元素充當六個面，再分別調整每個元素內的各個面旋轉、位移角度。</p>
<p><img alt='<?php echo $alt;?>' width='400' src='<?php echo img_url ('articles', 'javascript-maze-game', '01.jpg');?>' /><br/>▲ 3D 模式的迷宮</p>
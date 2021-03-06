<html>

<head>
<title>社會網絡聲量圖－臉書</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<link rel="stylesheet" type="text/css" href="css/map.css">
<script type="text/javascript" src="javascript/map.js"></script>

</head>

<body>

<?php
  header("Content-Type:text/html; charset=utf-8");
  $tags = array('竊盜','偷竊', '搶劫', '自殺', '殺害', '詐騙', '傷害', '槍械', '性騷擾', '性侵', '毒', '走私', '暴力');
  $counts = count($tags);

?>
<div id="wrap">
<div id="leftbar">
  <div id="top">查詢列</div>
  <a href="map.php" style="color: black; text-decoration: none"><div id="condition" style="color: red">
    概括圖
  </div></a>
  
  <a href="map_event.php" style="color: black; text-decoration: none"><div id="condition">
    依事件
  </div></a>
  
  <div id="condition">
    依時間
  </div>
</div>

<div id="center">
  <div id="map">
  
    <a href="#" style="color: black" onmouseover="showInfoYenchao()" onmouseout="hideInfoYenchao()">
      <span id="yenchao">燕巢區</span>
    </a>
    
    <div id="showboxYenchao" style="display: none">
      <div id="yenchaoTitle">
        <?php
          $file = fopen('volume/yenchao.txt', 'r');
          echo fgets($file);
          fclose($file);
        ?>
      </div>
      
      <div id="yenchaoInfo">
        <?php
        
          $summary = array();
          $num = array();
          $sort = array();
          $sortnum = array();
        
          for($i=0; $i<$counts; $i++){
            $count = 0;
            $file = fopen('data/yenchaopolicetext.csv', 'r');
            while(!feof($file)){
              $word = fgets($file);
              if(preg_match("/$tags[$i]/i", $word)){
                $count = $count + 1;
                
              }else{
              }
            }
            if($count !== 0){
              $summary = array_merge($summary, array($tags[$i]));
              $num = array_merge($num, array($count));
            }
            fclose($file);     
          }
          
          $combine = array_combine($summary, $num);
          arsort($combine);
          
          $totalcount = 0;
          foreach($combine as $key => $value){
            $totalcount = $totalcount + $value;
          }
          
          $keys = array_keys($combine);
          $values = $combine[$keys[0]];
          
          echo "聲量最高為 「" . $keys[0] . "」 發生 " . $values . " 次。<br />";
          $percentage = round(($values/$totalcount)*100, 2);
          echo "百分比 " . $percentage . "% (" . $values . "/" . $totalcount . ")";  
          
        ?>
      </div>
      
    </div>
    
    <a href="#" style="color: black" onmouseover="showInfoKangshan()" onmouseout="hideInfoKangshan()">
      <span id="kangshan">岡山區</span>
    </a>
    
    <div id="showboxKangshan" style="display: none">
      <div id="kangshanTitle">
        <?php
          $file = fopen('volume/kangshan.txt', 'r');
          echo fgets($file);
          fclose($file);
        ?>
      </div>
      
      <div id="kangshanInfo">
        <?php
        
          $summary = array();
          $num = array();
          $sort = array();
          $sortnum = array();
        
          for($i=0; $i<$counts; $i++){
            $count = 0;
            $file = fopen('data/kangshanpolicetext.csv', 'r');
            while(!feof($file)){
              $word = fgets($file);
              if(preg_match("/$tags[$i]/i", $word)){
                $count = $count + 1;
                
              }else{
              }
            }
            if($count !== 0){
              $summary = array_merge($summary, array($tags[$i]));
              $num = array_merge($num, array($count));
            }
            fclose($file);     
          }
          
          $combine = array_combine($summary, $num);
          arsort($combine);
          
          $totalcount = 0;
          foreach($combine as $key => $value){
            $totalcount = $totalcount + $value;
          }
          
          $keys = array_keys($combine);
          $values = $combine[$keys[0]];
          
          echo "聲量最高為 「" . $keys[0] . "品」 發生 " . $values . " 次。<br />";
          $percentage = round(($values/$totalcount)*100, 2);
          echo "百分比 " . $percentage . "% (" . $values . "/" . $totalcount . ")";  
          
        ?>
      </div>
    </div>
    
    <a href="#" style="color: black" onmouseover="showInfoDashe()" onmouseout="hideInfoDashe()">
      <span id="dashe">大社區</span>
    </a>
    
    <div id="showboxDashe" style="display: none">
      <div id="dasheTitle">
        <?php
          $file = fopen('volume/dashe.txt', 'r');
          echo fgets($file);
          fclose($file);
        ?>
      </div>
      
      <div id="dasheInfo">
        <?php
        
          $summary = array();
          $num = array();
          $sort = array();
          $sortnum = array();
        
          for($i=0; $i<$counts; $i++){
            $count = 0;
            $file = fopen('data/dashepolicetext.csv', 'r');
            while(!feof($file)){
              $word = fgets($file);
              if(preg_match("/$tags[$i]/i", $word)){
                $count = $count + 1;
                
              }else{
              }
            }
            if($count !== 0){
              $summary = array_merge($summary, array($tags[$i]));
              $num = array_merge($num, array($count));
            }
            fclose($file);     
          }
          
          $combine = array_combine($summary, $num);
          arsort($combine);
          
          $totalcount = 0;
          foreach($combine as $key => $value){
            $totalcount = $totalcount + $value;
          }
          
          $keys = array_keys($combine);
          $values = $combine[$keys[0]];
          
          echo "聲量最高為 「" . $keys[0] . "」 發生 " . $values . " 次。<br />";
          $percentage = round(($values/$totalcount)*100, 2);
          echo "百分比 " . $percentage . "% (" . $values . "/" . $totalcount . ")";  
          
        ?>
      </div>
    </div>
    
    <a href="#" style="color: black" onmouseover="showInfoNanzhih()" onmouseout="hideInfoNanzhih()">
      <span id="nanzhih">楠梓區</span>
    </a>
    
    <div id="showboxNanzhih" style="display: none">
      <div id="nanzhihTitle">
        <?php
          $file = fopen('volume/nanzhih.txt', 'r');
          echo fgets($file);
          fclose($file);
        ?>  
      </div>
      
      <div id="nanzhihInfo">
        <?php
        
          $summary = array();
          $num = array();
          $sort = array();
          $sortnum = array();
        
          for($i=0; $i<$counts; $i++){
            $count = 0;
            $file = fopen('data/nanzhihpolicetext.csv', 'r');
            while(!feof($file)){
              $word = fgets($file);
              if(preg_match("/$tags[$i]/i", $word)){
                $count = $count + 1;
                
              }else{
              }
            }
            if($count !== 0){
              $summary = array_merge($summary, array($tags[$i]));
              $num = array_merge($num, array($count));
            }
            fclose($file);     
          }
          
          $combine = array_combine($summary, $num);
          arsort($combine);
          
          $totalcount = 0;
          foreach($combine as $key => $value){
            $totalcount = $totalcount + $value;
          }
          
          $keys = array_keys($combine);
          $values = $combine[$keys[0]];
          
          echo "聲量最高為 「" . $keys[0] . "」 發生 " . $values . " 次。<br />";
          $percentage = round(($values/$totalcount)*100, 2);
          echo "百分比 " . $percentage . "% (" . $values . "/" . $totalcount . ")";  
          
        ?>
      </div>
    </div>
    
    
    <a href="#" style="color: black" onmouseover="showInfoZuoying()" onmouseout="hideInfoZuoying()">
      <span id="zuoying">左營區</span>
    </a>
    
    <div id="showboxZuoying" style="display: none">
      <div id="ZuoyingTitle">
        <?php
          $file = fopen('volume/zuoying.txt', 'r');
          echo fgets($file);
          fclose($file);
        ?>  
      </div>
      
      <div id="zuoyingInfo">
        <?php
        
          $summary = array();
          $num = array();
          $sort = array();
          $sortnum = array();
        
          for($i=0; $i<$counts; $i++){
            $count = 0;
            $file = fopen('data/zuoyingpolicetext.csv', 'r');
            while(!feof($file)){
              $word = fgets($file);
              if(preg_match("/$tags[$i]/i", $word)){
                $count = $count + 1;
                
              }else{
              }
            }
            if($count !== 0){
              $summary = array_merge($summary, array($tags[$i]));
              $num = array_merge($num, array($count));
            }
            fclose($file);     
          }
          
          $combine = array_combine($summary, $num);
          arsort($combine);
          
          $totalcount = 0;
          foreach($combine as $key => $value){
            $totalcount = $totalcount + $value;
          }
          
          $keys = array_keys($combine);
          $values = $combine[$keys[0]];
          
          echo "聲量最高為 「" . $keys[0] . "品」 發生 " . $values . " 次。<br />";
          $percentage = round(($values/$totalcount)*100, 2);
          echo "百分比 " . $percentage . "% (" . $values . "/" . $totalcount . ")";  
          
        ?>  
      </div>
      
    </div>
    
    <a href="#" style="color: black" onmouseover="showInfoKushan()" onmouseout="hideInfoKushan()">
      <span id="kushan">鼓山區</span>
    </a>
    
    <div id="showboxKushan" style="display: none">
      <div id="kushanTitle">
        <?php
          $file = fopen('volume/kushan.txt', 'r');
          echo fgets($file);
          fclose($file);
        ?>
      </div>
      
      <div id="kushanInfo">
        <?php
        
          $summary = array();
          $num = array();
          $sort = array();
          $sortnum = array();
        
          for($i=0; $i<$counts; $i++){
            $count = 0;
            $file = fopen('data/kushanpolicetext.csv', 'r');
            while(!feof($file)){
              $word = fgets($file);
              if(preg_match("/$tags[$i]/i", $word)){
                $count = $count + 1;
                
              }else{
              }
            }
            if($count !== 0){
              $summary = array_merge($summary, array($tags[$i]));
              $num = array_merge($num, array($count));
            }
            fclose($file);     
          }
          
          $combine = array_combine($summary, $num);
          arsort($combine);
          
          $totalcount = 0;
          foreach($combine as $key => $value){
            $totalcount = $totalcount + $value;
          }
          
          $keys = array_keys($combine);
          $values = $combine[$keys[0]];
          
          echo "聲量最高為 「" . $keys[0] . "」 發生 " . $values . " 次。<br />";
          $percentage = round(($values/$totalcount)*100, 2);
          echo "百分比 " . $percentage . "% (" . $values . "/" . $totalcount . ")";  
          
        ?> 
      </div>
    </div>
    
    <a href="#" style="color: black" onmouseover="showInfoSanming()" onmouseout="hideInfoSanming()">
      <span id="sanming">三民區</span>
    </a>
    
    <div id="showboxSanming" style="display: none">
      <div id="sanmingTitle">
        <?php
          $file = fopen('volume/sanming.txt', 'r');
          echo fgets($file);
          fclose($file);
        ?>
      </div>
      
      <div id="sanmingInfo">
        <?php
        
          $summary = array();
          $num = array();
          $sort = array();
          $sortnum = array();
        
          for($i=0; $i<$counts; $i++){
            $count = 0;
            $file = fopen('data/sanmingpolicetext.csv', 'r');
            while(!feof($file)){
              $word = fgets($file);
              if(preg_match("/$tags[$i]/i", $word)){
                $count = $count + 1;
                
              }else{
              }
            }
            if($count !== 0){
              $summary = array_merge($summary, array($tags[$i]));
              $num = array_merge($num, array($count));
            }
            fclose($file);     
          }
          
          $combine = array_combine($summary, $num);
          arsort($combine);
          
          $totalcount = 0;
          foreach($combine as $key => $value){
            $totalcount = $totalcount + $value;
          }
          
          $keys = array_keys($combine);
          $values = $combine[$keys[0]];
          
          echo "聲量最高為 「" . $keys[0] . "品」 發生 " . $values . " 次。<br />";
          $percentage = round(($values/$totalcount)*100, 2);
          echo "百分比 " . $percentage . "% (" . $values . "/" . $totalcount . ")";  
          
        ?>
      </div>
    </div>
    
    <a href="#" style="color: black" onmouseover="showInfoRenwu()" onmouseout="hideInfoRenwu()">
      <span id="renwu">仁武區</span>
    </a>
    
    <div id="showboxRenwu" style="display: none">
      <div id="renwuTitle">
        <?php
          $file = fopen('volume/renwu.txt', 'r');
          echo fgets($file);
          fclose($file);
        ?>
      </div>
      
      <div id="renwuInfo">
        <?php
        
          $summary = array();
          $num = array();
          $sort = array();
          $sortnum = array();
        
          for($i=0; $i<$counts; $i++){
            $count = 0;
            $file = fopen('data/renwupolicetext.csv', 'r');
            while(!feof($file)){
              $word = fgets($file);
              if(preg_match("/$tags[$i]/i", $word)){
                $count = $count + 1;
                
              }else{
              }
            }
            if($count !== 0){
              $summary = array_merge($summary, array($tags[$i]));
              $num = array_merge($num, array($count));
            }
            fclose($file);     
          }
          
          $combine = array_combine($summary, $num);
          arsort($combine);
          
          $totalcount = 0;
          foreach($combine as $key => $value){
            $totalcount = $totalcount + $value;
          }
          
          $keys = array_keys($combine);
          $values = $combine[$keys[0]];
          
          echo "聲量最高為 「" . $keys[0] . "」 發生 " . $values . " 次。<br />";
          $percentage = round(($values/$totalcount)*100, 2);
          echo "百分比 " . $percentage . "% (" . $values . "/" . $totalcount . ")";  
          
        ?>
      </div>
    </div>
    
    <a href="#" style="color: black" onmouseover="showInfoCiaotou()" onmouseout="hideInfoCiaotou()">
      <span id="ciaotou">橋頭區</span>
    </a>
    
    <div id="showboxCiaotou" style="display: none">
      <div id="ciaotouTitle">
        <?php
          $file = fopen('volume/ciaotou.txt', 'r');
          echo fgets($file);
          fclose($file);
        ?>
      </div>
      
      <div id="ciaotouInfo">
        <?php
        
          $summary = array();
          $num = array();
          $sort = array();
          $sortnum = array();
        
          for($i=0; $i<$counts; $i++){
            $count = 0;
            $file = fopen('data/ciaotoupolicetext.csv', 'r');
            while(!feof($file)){
              $word = fgets($file);
              if(preg_match("/$tags[$i]/i", $word)){
                $count = $count + 1;
                
              }else{
              }
            }
            if($count !== 0){
              $summary = array_merge($summary, array($tags[$i]));
              $num = array_merge($num, array($count));
            }
            fclose($file);     
          }
          
          $combine = array_combine($summary, $num);
          arsort($combine);
          
          $totalcount = 0;
          foreach($combine as $key => $value){
            $totalcount = $totalcount + $value;
          }
          
          $keys = array_keys($combine);
          $values = $combine[$keys[0]];
          
          echo "聲量最高為 「" . $keys[0] . "」 發生 " . $values . " 次。<br />";
          $percentage = round(($values/$totalcount)*100, 2);
          echo "百分比 " . $percentage . "% (" . $values . "/" . $totalcount . ")";  
          
        ?>
      </div>
    </div>
    
    <a href="#" style="color: black" onmouseover="showInfoZiguan()" onmouseout="hideInfoZiguan()">
      <span id="ziguan">梓官區</span>
    </a>
    
    <div id="showboxZiguan" style="display: none">
      <div id="ziguanTitle">
        <?php
          $file = fopen('volume/ziguan.txt', 'r');
          echo fgets($file);
          fclose($file);
        ?>
      </div>
      
      <div id="ziguanInfo">
        <?php
        
          $summary = array();
          $num = array();
          $sort = array();
          $sortnum = array();
        
          for($i=0; $i<$counts; $i++){
            $count = 0;
            $file = fopen('data/ziguanpolicetext.csv', 'r');
            while(!feof($file)){
              $word = fgets($file);
              if(preg_match("/$tags[$i]/i", $word)){
                $count = $count + 1;
                
              }else{
              }
            }
            if($count !== 0){
              $summary = array_merge($summary, array($tags[$i]));
              $num = array_merge($num, array($count));
            }
            fclose($file);     
          }
          
          $combine = array_combine($summary, $num);
          arsort($combine);
          
          $totalcount = 0;
          foreach($combine as $key => $value){
            $totalcount = $totalcount + $value;
          }
          
          $keys = array_keys($combine);
          $values = $combine[$keys[0]];
          
          echo "聲量最高為 「" . $keys[0] . "」 發生 " . $values . " 次。<br />";
          $percentage = round(($values/$totalcount)*100, 2);
          echo "百分比 " . $percentage . "% (" . $values . "/" . $totalcount . ")";  
          
        ?>
      </div>
    </div>
    
    <a href="#" style="color: black" onmouseover="showInfoMituo()" onmouseout="hideInfoMituo()">
      <span id="mituo">彌陀區</span>
    </a>
    
    <div id="showboxMituo" style="display: none">
      <div id="mituoTitle">
        <?php
          $file = fopen('volume/mituo.txt', 'r');
          echo fgets($file);
          fclose($file);
        ?>
      </div>
      
      <div id="mituoInfo">
        <?php
        
          $summary = array();
          $num = array();
          $sort = array();
          $sortnum = array();
        
          for($i=0; $i<$counts; $i++){
            $count = 0;
            $file = fopen('data/mituopolicetext.csv', 'r');
            while(!feof($file)){
              $word = fgets($file);
              if(preg_match("/$tags[$i]/i", $word)){
                $count = $count + 1;
                
              }else{
              }
            }
            if($count !== 0){
              $summary = array_merge($summary, array($tags[$i]));
              $num = array_merge($num, array($count));
            }
            fclose($file);     
          }
          
          $combine = array_combine($summary, $num);
          arsort($combine);
          
          $totalcount = 0;
          foreach($combine as $key => $value){
            $totalcount = $totalcount + $value;
          }
          
          $keys = array_keys($combine);
          $values = $combine[$keys[0]];
          
          echo "聲量最高為 「" . $keys[0] . "」 發生 " . $values . " 次。<br />";
          $percentage = round(($values/$totalcount)*100, 2);
          echo "百分比 " . $percentage . "% (" . $values . "/" . $totalcount . ")";  
          
        ?>
      </div>
    </div>
    
    <a href="#" style="color: black" onmouseover="showInfoYongan()" onmouseout="hideInfoYongan()">
      <span id="yongan">永安區</span>
    </a>
    
    <div id="showboxYongan" style="display: none">
      <div id="yonganTitle">
        <?php
          $file = fopen('volume/yongan.txt', 'r');
          echo fgets($file);
          fclose($file);
        ?>
      </div>
      
      <div id="yonganInfo">
        <?php
        
          $summary = array();
          $num = array();
          $sort = array();
          $sortnum = array();
        
          for($i=0; $i<$counts; $i++){
            $count = 0;
            $file = fopen('data/yonganpolicetext.csv', 'r');
            while(!feof($file)){
              $word = fgets($file);
              if(preg_match("/$tags[$i]/i", $word)){
                $count = $count + 1;
                
              }else{
              }
            }
            if($count !== 0){
              $summary = array_merge($summary, array($tags[$i]));
              $num = array_merge($num, array($count));
            }
            fclose($file);     
          }
          
          $combine = array_combine($summary, $num);
          arsort($combine);
          
          $totalcount = 0;
          foreach($combine as $key => $value){
            $totalcount = $totalcount + $value;
          }
          
          $keys = array_keys($combine);
          $values = $combine[$keys[0]];
          
          echo "聲量最高為 「" . $keys[0] . "」 發生 " . $values . " 次。<br />";
          $percentage = round(($values/$totalcount)*100, 2);
          echo "百分比 " . $percentage . "% (" . $values . "/" . $totalcount . ")";  
          
        ?>
      </div>
    </div>
    
  </div>
</div>
<div id="rightbar">
  <div id="showboxTime">
    2017年
  </div>
  
  <div id="showboxVolume">
    討論聲量
  </div>
  
  <div id="content1">
    <div id="colorbox1">
    </div>
    
    <div id="volumetype">
      詐騙
    </div>
  </div>
  
  <div id="content2">
    <div id="colorbox2">
    </div>
    
    <div id="volumetype">
      毒品
    </div>
  </div>

</div>
</div>
<div id="footer">
  資料來源：<br />
  高雄市政府警察局：<a href="https://www.facebook.com/KaohsiungPolice/?fref=ts" >https://www.facebook.com/KaohsiungPolice/?fref=ts</a><br />
  高雄市政府警察局鼓山分局：<a href="https://www.facebook.com/kcpdgp/?fref=ts">https://www.facebook.com/kcpdgp/?fref=ts</a><br />
  高雄市政府警察局左營分局：<a href="https://www.facebook.com/%E9%AB%98%E9%9B%84%E5%B8%82%E6%94%BF%E5%BA%9C%E8%AD%A6%E5%AF%9F%E5%B1%80%E5%B7%A6%E7%87%9F%E5%88%86%E5%B1%80-259176860925605/?fref=ts">https://www.facebook.com/%E9%AB%98%E9%9B%84%E5%B8%82%E6%94%BF%E5%BA%9C%E8%AD%A6%E5%AF%9F%E5%B1%80%E5%B7%A6%E7%87%9F%E5%88%86%E5%B1%80-259176860925605/?fref=ts</a><br />
  高雄市政府警察局楠梓分局：<a href="https://www.facebook.com/PoliceNanzi/?fref=ts">https://www.facebook.com/PoliceNanzi/?fref=ts</a><br />
  高雄市政府警察局 大社分駐所：<a href="https://www.facebook.com/%E9%AB%98%E9%9B%84%E5%B8%82%E6%94%BF%E5%BA%9C%E8%AD%A6%E5%AF%9F%E5%B1%80-%E5%A4%A7%E7%A4%BE%E5%88%86%E9%A7%90%E6%89%80-192742294103072/?fref=ts">https://www.facebook.com/%E9%AB%98%E9%9B%84%E5%B8%82%E6%94%BF%E5%BA%9C%E8%AD%A6%E5%AF%9F%E5%B1%80-%E5%A4%A7%E7%A4%BE%E5%88%86%E9%A7%90%E6%89%80-192742294103072/?fref=ts</a><br />
  高雄市政府警察局岡山分局：<a href="https://www.facebook.com/ks110ks110">https://www.facebook.com/ks110ks110</a><br />
  高雄市政府警察局岡山分局彌陀分駐所：<a href="https://www.facebook.com/mituopolicestation/?hc_ref=ARRI0jSuh0c58q--6AHKZQYhaQIsxWOLCxbsA45BkfqBxz353glNLSS1rcNcS9WMbgQ">https://www.facebook.com/mituopolicestation/?hc_ref=ARRI0jSuh0c58q--6AHKZQYhaQIsxWOLCxbsA45BkfqBxz353glNLSS1rcNcS9WMbgQ</a><br />
  岡山分局燕巢分駐所：<a href="https://www.facebook.com/%E5%B2%A1%E5%B1%B1%E5%88%86%E5%B1%80%E7%87%95%E5%B7%A2%E5%88%86%E9%A7%90%E6%89%80-994557560621353/">https://www.facebook.com/%E5%B2%A1%E5%B1%B1%E5%88%86%E5%B1%80%E7%87%95%E5%B7%A2%E5%88%86%E9%A7%90%E6%89%80-994557560621353/</a><br />
  岡山分局永安分駐所：<a href="https://www.facebook.com/%E5%B2%A1%E5%B1%B1%E5%88%86%E5%B1%80%E6%B0%B8%E5%AE%89%E5%88%86%E9%A7%90%E6%89%80-266179833587234/">https://www.facebook.com/%E5%B2%A1%E5%B1%B1%E5%88%86%E5%B1%80%E6%B0%B8%E5%AE%89%E5%88%86%E9%A7%90%E6%89%80-266179833587234/</a><br />
  岡山分局梓官分駐所：<a href="https://www.facebook.com/policeinZiguan/">https://www.facebook.com/policeinZiguan/</a><br />
  岡山分局橋頭分駐所：<a href="https://www.facebook.com/%E5%B2%A1%E5%B1%B1%E5%88%86%E5%B1%80%E6%A9%8B%E9%A0%AD%E5%88%86%E9%A7%90%E6%89%80-1523926201230395/">https://www.facebook.com/%E5%B2%A1%E5%B1%B1%E5%88%86%E5%B1%80%E6%A9%8B%E9%A0%AD%E5%88%86%E9%A7%90%E6%89%80-1523926201230395/</a><br />
  仁武分局波麗士：<a href="https://www.facebook.com/police.zw/?fref=ts">https://www.facebook.com/police.zw/?fref=ts</a><br />
  高雄市政府警察局三民第一分局-301警察杯杯：<a href="https://www.facebook.com/%E4%B8%89%E6%B0%91%E7%AC%AC%E4%B8%80%E5%88%86%E5%B1%80-301%E8%AD%A6%E5%AF%9F%E6%9D%AF%E6%9D%AF-179753318887166/">https://www.facebook.com/%E4%B8%89%E6%B0%91%E7%AC%AC%E4%B8%80%E5%88%86%E5%B1%80-301%E8%AD%A6%E5%AF%9F%E6%9D%AF%E6%9D%AF-179753318887166/</a><br />
  高雄市政府警察局三民第二分局：<a href="https://www.facebook.com/sanmin.second">https://www.facebook.com/sanmin.second</a><br />
  
  
</div>

</body>
</html>
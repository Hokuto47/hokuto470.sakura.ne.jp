<?php get_header(); ?>
<!---       JSON ここから     -----!>
<br>
<br>
<br>
<br>
<br>
<br>

<?php 
//スプレッドシートIDの指定と必要なJSONデータの取得
$data = "https://spreadsheets.google.com/feeds/list/1B4Ps5gTGbIHV9A7FHQj4q1-AhlA3rtN2IdeH4rsKmsc/2/public/values?alt=json";
$json = file_get_contents($data);
$json_decode = json_decode($json);
$posts = $json_decode->feed->entry;

//データを配列で取得・格納
$list1 = [];
$list2 = [];
$list3 = [];
$list4 = [];
$list5 = [];

foreach ($posts as $post) {
    $list1[] = $post->{'gsx$list1'}->{'$t'};
    $list2[] = $post->{'gsx$list2'}->{'$t'};
    $list3[] = $post->{'gsx$list3'}->{'$t'};
    $list4[] = $post->{'gsx$list4'}->{'$t'};
    $list5[] = $post->{'gsx$list5'}->{'$t'};
}
?>


<!-- 取得したJSONデータをソースコードに出力する -->
<?php for ($i=0; $i<count($list1); $i++) { ?>

<?php if (!$list2[$i]) { ?>

<?php echo '<h3 id="' . $list3[$i] . '">' . $list1[$i] .'</h3>'; continue; ?>

<?php } ?>

<?php 
    echo '<h4>' . $list2[$i] . '</h4>';
    echo '<div class="tango"><span>' . $list3[$i] . '</span></div>';
    echo '<p>' . $list4[$i] . '</p>';
?>
    
  
<div class="hoge">
<?php echo '<a>' . $list5[$i] . '</a>'; ?>
</div>  
    
   <?php } ?>





<!---       JSON ここまで     -----!>
	<?php get_footer(); ?>

<?php
include 'simple_html_dom.php';

$html = file_get_html('http://www.booking.com/searchresults.html?aid=397594;label=gog235jc-index-XX-XX-XX-unspec-vn-com-L%3Axu-O%3Aunk-B%3Aunk-N%3AXX-S%3Abo-U%3Ac;sid=e98491d12f74becf8119765f9501dfee;dcid=4;class_interval=1&csflt=%7B%7D&dest_id=-3714993&dest_type=city&dtdisc=0&group_adults=2&group_children=0&hlrd=0&hyb_red=0&inac=0&label_click=undef&nha_red=0&no_rooms=1&offset=0&offset_unavail=1&redirected_from_city=0&redirected_from_landmark=0&redirected_from_region=0&review_score_group=empty&room1=A%2CA&sb_price_type=total&score_min=0&si=ai%2Cco%2Cci%2Cre%2Cdi&src=index&ss=Ha%CC%80%20N%C3%B4%CC%A3i%2C%20H%C3%A0%20N%E1%BB%99i%2C%20Vi%C3%AA%CC%A3t%20Nam&ss_all=0&ss_raw=ha%20no&ssafas=2&ssb=empty&sshis=0&');

$items = $html->find('a[class=hotel_name_link]');

$list_items_url = array();

foreach($items as $element) {

	$list_items_url[] = $element->href;
}

print_r($list_items_url);
       
       
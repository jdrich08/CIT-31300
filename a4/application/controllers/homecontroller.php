<?php

class HomeController extends Controller{

	public function index(){
		$feed = "https://www.reddit.com/r/news/.rss";
		$rss = new RssDisplay($feed);
		$num_feed_items = 4;

		$feed_data = $rss->getFeedItems($num_feed_items);

		$channel_title = $feed_data->channel->title;

		$this->set('rss_title',$channel_title);
	}

}

?>

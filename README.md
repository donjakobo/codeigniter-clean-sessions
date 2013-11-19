Codeigniter Clean Session Library
==================================

Codeigniter drop in for keeping your `ci_sessions` clean of bots (to reduce inserts).  
If you run a site that has a high frequency of bots hitting it, you will notice your session table grow.  

Eliminate bots from showing up in your sessions by simply dropping this into your `/application/library` folder.

Load your library the standard way (autoload for instance):  

    $autoload['libraries'] = array('session');

and lastly, update your `/application/config/user_agents.php` file to include any new bots you want to block:  

    // There are hundreds of bots but these are the most common.
    $robots = array(
    	'googlebot'		=> 'Googlebot',
    	'msnbot'		=> 'MSNBot',
    	'baiduspider'	=> 'Baiduspider',
    	'bingbot'		=> 'Bing',
    	'slurp'			=> 'Inktomi Slurp',
    	'yahoo'			=> 'Yahoo',
    	'askjeeves'		=> 'AskJeeves',
    	'fastcrawler'	=> 'FastCrawler',
    	'infoseek'		=> 'InfoSeek Robot 1.0',
    	'lycos'			=> 'Lycos',
    	'yandex'		=> 'YandexBot'
    );

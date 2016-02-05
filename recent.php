<?php
//    error_reporting(0);
    define('IN_PHPBB', true);

include_once ('');            //Path to phpBB Config File. Due to some restrictions by PHP, you have to provide complete physical path
$urlPath = "";                //phpBB URL with respect to root
$topicnumber = ;            //Total Post Count to Display
$posttext = ;                //Number of Characters to display in Post Text
$excludedforums = "";        //Forum ids to exclude. Each forum id should be seprated with Comma
$completeurl = "";

    $table_topics = $table_prefix. "topics";    //Usually you don't have to change below 4 variables
    $table_forums = $table_prefix. "forums";
    $table_posts = $table_prefix. "posts";
    $table_users = $table_prefix. "users";

function stripBBCode($text_to_search) {
     $pattern = '|[[\/\!]*?[^\[\]]*?]|si';
     $replace = '';
     return preg_replace($pattern, $replace, $text_to_search);
}



    $link = mysql_connect("$dbhost", "$dbuser", "$dbpasswd") or die("Could not connect");
    mysql_select_db("$dbname") or die("Could not select database");
    $sub_query = '';
    if(strlen($excludedforums) > 0) {
        $pieces = explode(",", $excludedforums);
        foreach ($pieces as $exforumid) {
            $sub_query .= " t.forum_id != " . $exforumid . ' AND ';
            }
    }

    $query = "SELECT t.topic_id, t.topic_title, t.topic_last_post_id, t.forum_id, p.post_id, p.poster_id, p.post_time, u.user_id, u.username, f.forum_name, p.post_text, p.bbcode_uid, p.bbcode_bitfield, f.forum_desc_options
    FROM $table_topics t, $table_forums f, $table_posts p, $table_users u
    WHERE t.topic_id = p.topic_id AND
    f.forum_id = t.forum_id AND ";

    if(strlen($sub_query) > 0) {
        $query .=  $sub_query ;
    }

    $query .= " t.topic_status <> 2 AND
    p.post_id = t.topic_last_post_id AND
    p.poster_id = u.user_id
    ORDER BY p.post_id DESC LIMIT $topicnumber";
    //echo $query;
    $result = mysql_query($query) or die("Query failed" . mysql_error($link));

    print "<div class=\"typecontent\">";
    if($topicnumber % 2) {
        $x="even";
    } else {
        $x="odd";
    }
    $y=0;
 while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
    ++$y;
    if ($y==$topicnumber) {
        $x= $x .  " dataitemlast";
    }
    print "<div class=\"dataitem $x \">
                <table class=\"plain\">
                    <tr>
                        <td class=\"data\">
                                <div class=\"itemheader\">
                                    <h2 class=\"inner\">" .  $row["topic_title"] . "</h2>
                                        <ul class=\"itemheader\">
                                            <li>Posted at: " . date('F j, Y, g:i a', $row["post_time"])  . "</li>
                                            <li>By: <a href=\"$completeurl/$row[username]\">" .
                                            $row["username"]  . "</a></li> <li>In Forum: " . $row["forum_name"] . " </li>
                                        </ul>
                                </div>
                            <div class=\"entry\">" .
                                substr(stripBBCode($row["post_text"]),0,$posttext) . "<a href=\"$urlPath/viewtopic.php?f=$row[forum_id]&t=$row[topic_id]&p=$row[post_id]#p$row[post_id]\" style=\"text-decoration:none;font-weight:bold\"> Read more...</a>
                            </div>
                        </td>
                    </tr>
                </table>
                </div>";

                if ($x=="odd") {
                    $x="even";
                } else {
                    $x="odd";
                }

}
print "<div class=\"clear\"></div></div>";
    mysql_free_result($result);
//  mysql_close($link);
?>
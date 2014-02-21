<?php
include 'header.tpl.php';
?>
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span8">
            <?php foreach ($articleList as $article){?>
            <div class="row-fluid">
                <div class="span12">
                    <blockquote>
                        <p class="index-title"><a href="<?php echo GAME_URL?>article/main/aid-<?php echo $article['id'];?>"><?php echo $article['title'];?></a></p>
                        <p>Date: <?php echo $article['ctime'];?> Power By <?php echo $article['author']?></p>
                        <p>Tag: <?php foreach($article['tag'] as $k=>$tag){if($k!=0){echo ' | ';}echo '<a href="'.GAME_URL.'search/main/keywords-'.$tag.'">'.$tag.'</a>';}?></p>
                    </blockquote>
                    <p><?php echo $article['description'];?></p>
                </div>
            </div>
            <div class="page-header"></div>
            <?php }?>
            <div class="row-fluid">
                <div class="span12">
                    <div class="pagination">
                        <ul>
                            <?php echo $pageNav;?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="span4">
            <div class="row-fluid">
                <div class="span12">
                    <h3>分类热门的文章</h3>
                    <?php foreach($articleHotList as $article){ ?>
                        <p><a href="<?php echo GAME_URL;?>article/main/aid-<?php echo $article['id'];?>"><?php echo $article['title'];?></a></p>
                    <?php }?>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <h3>分类最新的评论</h3>
                    <?php foreach($commentNewList as $comment){ ?>
                        <p><a rel="nofollow" href="<?php echo $comment['website'];?>"><?php echo $comment['nickname'];?></a> On <a href="<?php echo GAME_URL;?>article/main/aid-<?php echo $comment['aid'];?>"><?php echo $comment['content'];?></a></p>
                    <?php }?>
                </div>
            </div>
        	<div class="row-fluid">
        		<div class="span12">
					<h3>热门Tag</h3>
                    <?php foreach($tags as $tag){ ?>
                        <p><a href="<?php echo GAME_URL?>search/main/keywords-<?php echo $tag['tag']?>"><?php echo $tag['tag'];?></a></p>
                    <?php }?>
				</div>
        	</div>
        </div>
    </div>
</div>
<?php
include 'footer.tpl.php';
?>
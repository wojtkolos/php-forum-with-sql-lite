<section>
<?php if( !$topics ){ ?>
  <p>To forum nie zawiera jeszcze żadnych tematów!</p>
<?php }else{ foreach($topics as $k=>$v){ ?>

  <article class="topic">
    <header> </header>
    <div><a href="?cmd=posts&id=<?=$k?>"><?=htmlentities($v['topic'])?></a></div>
    <footer>
    <?php if($this->u['userlevel']==10) { ?>
    <nav>
    <a href="?id=<?=$v['topicid']?>&cmd=topicedit">EDYTUJ</a>
    <a href="?id=<?=$v['topicid']?>&cmd=topicdelete">KASUJ</a>
    </nav>
    <?php } ?>
    ID: <?=$v['topicid']?>, Autor: <?=htmlentities($users[$v['userid']]['username'])?>, Utworzono: <?=$v['date']?>, Liczba wpisów: <?=$this->count_posts($v['topicid'])?>
    </footer>
  </article>

<?php } } 
?>

  <form action="<?=$this->baseurl?>" method="post">
     <a name="topic_form"></a>
     <header><h2>Dodaj nowy temat do dyskusji</h2></header>  
     <input type="text" name="topic" placeholder="Nowy temat" autofocus value="<?=($topic)?$topic['topic']:""?>"\><br />
     <textarea name="topic_body" cols="80" rows="10" placeholder="Opis nowego tematu" ><?=($topic)?$topic['topic_body']:""?></textarea><br />
     <input type="hidden" name="username" value="<?=$user['username'];?>" \>
     <input type="hidden" name="topicid" value="<?=($topic)?$topic['topicid']:"";?>" \>
     <button type="submit" >Zapisz</button>
  </form>

</section>

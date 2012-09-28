<tr><td>
     <table border="1" width="100%">
         <tr><td><h2>Название : <?=$post->name;?></h2>
         <tr><td><?php echo $post->created;?>
         <tr><td><?php echo mb_substr($post->text, 0, 500), "...";?>
     </table>
</tr></td>
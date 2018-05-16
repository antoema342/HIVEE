<!DOCTYPE html>
<html>
<head>
	<title>Chat</title>
  	<link href="<?php echo base_url('assets/css/chat.css')?>" rel="stylesheet"/>
</head>
<body>
	<div id="konten">
	<div class="tabs"><div class="tab" data-dip="users">USERS</div></div>
   <div class="chat">
   	 <div class='msgs'>
	 <?php
                      $i=0;
                      foreach($data as $d) {
                        $i++;
                        echo"<div class='urltag bubble-left'><p><span class='name'>".$d['nama']."</span><span class='msgc'>".$d['pesan']."</span><span class='dat'>".$d['timestamps']."</span></p></div>";
                    }
                      ?></div>
                     
                      <form action="<?php echo base_url('Chat/send')?>" method="POST" id="msg_form">
<input type="text" name="pesan" placeholder="Text Here...">
</form>	
                   
 </div>
<script>function scTop(){
 $(".msgs").animate({scrollTop:$(".msgs")[0].scrollHeight});
}
 scTop();
 $("#msg_form").on("submit",function(){
  t=$(this);
    load_new_stuff();
    t[0].reset();
   });
  
  return false;
 </script>
</body>
</html>
<?php

$videolar = array(
"<iframe width='280' height='180' src='https://www.youtube.com/embed/ULTvninGelw' frameborder='0' allowfullscreen></iframe>",
"<iframe width='280' height='180' src='https://www.youtube.com/embed/wH7YAlQAsrk' frameborder='0' allowfullscreen></iframe>","<iframe width='280' height='180' src='https://www.youtube.com/embed/WT84SfoOG_E' frameborder='0' allowfullscreen></iframe>",
"<iframe width='280' height='180' src='https://www.youtube.com/embed/bEJfYRXiFe8' frameborder='0' allowfullscreen></iframe>","<iframe width='280' height='180' src='https://www.youtube.com/embed/5wZeTkrHw58' frameborder='0' allowfullscreen></iframe>",
"<iframe width='280' height='180' src='https://www.youtube.com/embed/0iYCroIW8_k' frameborder='0' allowfullscreen></iframe>",
"<iframe width='280' height='180' src='https://www.youtube.com/embed/ZB0ryv-BWnc' frameborder='0' allowfullscreen></iframe>",
"<iframe width='280' height='180' src='https://www.youtube.com/embed/jPLdZ79Cpio' frameborder='0' allowfullscreen></iframe>",
"<iframe width='280' height='180' src='https://www.youtube.com/embed/0zV5j495DmU' frameborder='0' allowfullscreen></iframe>",
"<iframe width='280' height='180' src='https://www.youtube.com/embed/hXM9tR0VItw' frameborder='0' allowfullscreen></iframe>",
"<iframe width='280' height='180' src='https://www.youtube.com/embed/U1ix-KFm6Xo' frameborder='0' allowfullscreen></iframe>",
"<iframe width='280' height='180' src='https://www.youtube.com/embed/fX3Bkf8_1KI' frameborder='0' allowfullscreen></iframe>",
"<iframe width='280' height='180' src='https://www.youtube.com/embed/eQPnlvSr0n4' frameborder='0' allowfullscreen></iframe>",
"<iframe width='280' height='180' src='https://www.youtube.com/embed/VyFgP4NjBQY' frameborder='0' allowfullscreen></iframe>",
"<iframe width='280' height='180' src='https://www.youtube.com/embed/Ad_coZ3fiKE' frameborder='0' allowfullscreen></iframe>",
"<iframe width='280' height='180' src='https://www.youtube.com/embed/Wxh04SlRCBo' frameborder='0' allowfullscreen></iframe>",
"<iframe width='280' height='180' src='https://www.youtube.com/embed/2-j-HSp4mUc' frameborder='0' allowfullscreen></iframe>",
"<iframe width='280' height='180' src='https://www.youtube.com/embed/LurimDrrfFk' frameborder='0' allowfullscreen></iframe>",
"<iframe width='280' height='180' src='https://www.youtube.com/embed/sFiDabAaaoY' frameborder='0' allowfullscreen></iframe>",
"<iframe width='280' height='180' src='https://www.youtube.com/embed/M6BGgDEl4lw' frameborder='0' allowfullscreen></iframe>",
);

$sayilar[0]=0;
for($i=0;$i<=5;$i++)
{ 
  $sayi=rand(0,19);
  if(in_array($sayi,$sayilar))
    { 
	  $i--;
      continue;
    }
  else
    { $sayilar[$i]=$sayi; }
}

?>
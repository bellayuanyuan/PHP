<?php
 include("header.php");
?>
<table width="950" height="438" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="438" valign="top" bgcolor="#FFFFFF"><table width="900" height="33" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td bgcolor="#B9996A">&nbsp;&nbsp;<font color="#FFFFFF" size="+1">所有旧书</font></td>
      </tr>
    </table>
      <table width="900" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td background="images/line1.gif"></td>
        </tr>
      </table>
      <?php

       $sql=mysql_query("select count(*) as total from goods where tejia=1 ",$conn);
	   $info=mysql_fetch_array($sql);
	   $total=$info[total];
	   if($total==0)
	   {
	     echo "本站暂无特价产品!";
	   }
	   else
	   {

	  ?>
      <table width="900" height="70" border="0" align="center" cellpadding="0" cellspacing="0">
        <?php


             $sql1=mysql_query("select * from goods  order by addtime desc ",$conn);
             while($info1=mysql_fetch_array($sql1))
		     {
		  ?>
        <tr>
          <td width="180"  rowspan="6"><div align="center">
              <?php
			 if($info1[tupian]=="")
			 {
			   echo "暂无图片!";
			 }
			 else
			 {
			?>
              <a href="good_view.php?id=<?php echo $info1[id];?>" ><img  border="0" width="180" height="180" src="<?php echo $info1[tupian];?>"></a>
              <?php
			 }
			?>
          </div></td>
          <td width="142" height="20"><div align="center" style="color: #000000">旧书名称：</div></td>
          <td colspan="5"><div align="left"> <a href="good_view.php?id=<?php echo $info1[id];?>"><?php echo $info1[mingcheng];?></a></div></td>
        </tr>
        <tr>
          <td width="142" height="20"><div align="center" style="color: #000000">出版社：</div></td>
          <td width="137" height="20"><div align="left"><?php echo $info1[pinpai];?></div></td>
          <td width="113"><div align="center" style="color: #000000">ＩＳＢＮ：</div></td>
          <td colspan="3"><div align="left"><?php echo $info1[xinghao];?></div></td>
        </tr>
        <tr>
          <td width="142" height="20"><div align="center" style="color: #000000">旧书简介：</div></td>
          <td height="20" colspan="5"><div align="left"><?php echo $info1[jianjie];?></div></td>
        </tr>
        <tr>

        </tr>
        <tr>
          <td height="20"><div align="center" style="color: #000000">商场价：</div></td>
          <td height="20"><div align="left"><?php echo $info1[shichangjia];?>元</div></td>
          <td height="20"><div align="center" style="color: #000000">会员价：</div></td>
          <td width="223" height="20"><div align="left"><?php echo $info1[huiyuanjia];?>元</div></td>
          <td width="52" height="20">&nbsp;</td>
          <td width="53" height="20">&nbsp;</td>
        </tr>
        <tr>
          <td height="20" colspan="6"><div align="center">&nbsp;&nbsp;&nbsp;&nbsp;<a href="shopping.php?id=<?php echo $info1[id];?>"><img src="images/gwc.gif" border="0"></a></div></td>
        </tr>
        <tr>
          <td height="10" colspan="7" background="images/line1.gif"></td>
        </tr>
        <?php
	    }

		?>
      </table>
    <?php
	    }

		?></td>

  </tr>
</table>
<?php
 include("footer.php");
?>

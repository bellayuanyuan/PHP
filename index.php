<?php
require("header.php");
?>
<TABLE cellSpacing=0 cellPadding=0 width=960 align=center border=0>
  <TBODY>

  <TR>
    <TD width=200  align=left vAlign=top bgColor=#ffffff class=b>
<?php
require("login_box.php");
require("index_left.php");
?>
    </TD>
		                      <TD width=750 align=left vAlign=top class=b>
		                        <table width="750" border="0" cellpadding="0" cellspacing="0">
		    		<td height="167">



<!--��ҳ����Ʒ����-->

<table width=750 border="0" cellspacing="0" cellpadding="0" align="center">
 <tr>
    <td width="750" height="34" class="menu_bar"></td>
  </tr></table>
  <table width=750 border="0" cellspacing="0" cellpadding="0" align="center">

  <tr>


        <tr>
     <?php
		$i=0;
$sql="select * from goods order by id DESC limit 0,8";
$res=mysql_query($sql);
while($data=mysql_fetch_array($res))
{$i++;
if($i%4==0)
echo "</tr><tr>";
?>
          <td ><TABLE  border=0 align="center" cellPadding=2 cellSpacing=1 bgColor=#e1e1e1 onMouseOver="this.style.backgroundColor='#FF6600'" onMouseOut="this.style.backgroundColor=''">
            <TBODY>
              <TR>
                <TD bgColor=#ffffff align=center>

              <a href="good_view.php?id=<?php echo $data[id]?>"><img src="<?php echo $data[tupian]?>"  width="180" height="180"   style="border:1px solid #E9F9D5;"></a>

                  </TD>
                </TR>
                <TR>
                <TD width=180 bgColor=#ffffff align=center>
             <a href="good_view.php?id=<?php echo $data[id]?>"><?php echo $data[mingcheng];?></a>
             <br>�г���:<font size=+1 color="#FF0000"><?php echo $data[shichangjia];?> </font>��Ա�ۣ�<font size=+1 color="blue"><?php echo $data[huiyuanjia];?></font><br><a href="shopping.php?id=<?php echo $data[id];?>"><img src="images/gwc.gif" border="0"></a>

                  </TD>
                </TR>
              </TBODY>

      </table></td>
      <?php
	  }
	  ?>
</tr>
</table>
</td>
		</table>


  <td width="1" background="image/bgbg.gif"></td></table> </TD>
    </TR>
  </TBODY>
</TABLE>



<?php
require("footer.php");
?>
</body>
</html>
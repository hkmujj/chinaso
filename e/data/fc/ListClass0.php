<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><tr bgcolor='#DBEAF5' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=1></td><td onMouseUp='turnit(classdiv1);' style='CURSOR:hand'><img src='../data/images/dir.gif'></td><td align=center>1</td><td><input type=checkbox name=reclassid[] value=1> <a href='/about/' target=_blank>国内动态</a></td><td align=center>0</td><td><a href='#e' onclick=editc(1)>修改</a> <a href='#e' onclick=copyc(1)>复制</a> <a href='#e' onclick=delc(1)>删除</a></td><td><a href='#e' onclick=relist(1)>刷新</a> <a href='#e' onclick=renews(1,'news')>信息</a> <a href='#e' onclick=rejs(1)>JS</a> <a href='#e' onclick=tvurl(1)>调用</a></td></tr><tbody id='classdiv1'><tr bgcolor='#ffffff' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=8></td><td>&nbsp;&nbsp;&nbsp;<a href='AddNews.php?enews=AddNews&classid=8' target=_blank><img src='../data/images/txt.gif' border=0></a></td><td align=center>8</td><td><input type=checkbox name=reclassid[] value=8> <a href='/about/list01/' target=_blank>国内动态</a></td><td align=center>0</td><td><a href='#e' onclick=editc(8)>修改</a> <a href='#e' onclick=copyc(8)>复制</a> <a href='#e' onclick=delc(8)>删除</a></td><td><a href='#e' onclick=relist(8)>刷新</a> <a href='#e' onclick=renews(8,'news')>信息</a> <a href='#e' onclick=rejs(8)>JS</a> <a href='#e' onclick=tvurl(8)>调用</a> <a href='#e' onclick=ttc(8)>分类</a> <a href='#e' onclick=docinfo(8)>归档</a></td></tr></tbody><tr bgcolor='#DBEAF5' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=2></td><td onMouseUp='turnit(classdiv2);' style='CURSOR:hand'><img src='../data/images/dir.gif'></td><td align=center>2</td><td><input type=checkbox name=reclassid[] value=2> <a href='/services/' target=_blank>国际新闻</a></td><td align=center>0</td><td><a href='#e' onclick=editc(2)>修改</a> <a href='#e' onclick=copyc(2)>复制</a> <a href='#e' onclick=delc(2)>删除</a></td><td><a href='#e' onclick=relist(2)>刷新</a> <a href='#e' onclick=renews(2,'news')>信息</a> <a href='#e' onclick=rejs(2)>JS</a> <a href='#e' onclick=tvurl(2)>调用</a></td></tr><tbody id='classdiv2'><tr bgcolor='#ffffff' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=9></td><td>&nbsp;&nbsp;&nbsp;<a href='AddNews.php?enews=AddNews&classid=9' target=_blank><img src='../data/images/txt.gif' border=0></a></td><td align=center>9</td><td><input type=checkbox name=reclassid[] value=9> <a href='/services/list01/' target=_blank>国际新闻</a></td><td align=center>0</td><td><a href='#e' onclick=editc(9)>修改</a> <a href='#e' onclick=copyc(9)>复制</a> <a href='#e' onclick=delc(9)>删除</a></td><td><a href='#e' onclick=relist(9)>刷新</a> <a href='#e' onclick=renews(9,'news')>信息</a> <a href='#e' onclick=rejs(9)>JS</a> <a href='#e' onclick=tvurl(9)>调用</a> <a href='#e' onclick=ttc(9)>分类</a> <a href='#e' onclick=docinfo(9)>归档</a></td></tr></tbody><tr bgcolor='#DBEAF5' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=3></td><td onMouseUp='turnit(classdiv3);' style='CURSOR:hand'><img src='../data/images/dir.gif'></td><td align=center>3</td><td><input type=checkbox name=reclassid[] value=3> <a href='/prices/' target=_blank>综合资讯</a></td><td align=center>0</td><td><a href='#e' onclick=editc(3)>修改</a> <a href='#e' onclick=copyc(3)>复制</a> <a href='#e' onclick=delc(3)>删除</a></td><td><a href='#e' onclick=relist(3)>刷新</a> <a href='#e' onclick=renews(3,'news')>信息</a> <a href='#e' onclick=rejs(3)>JS</a> <a href='#e' onclick=tvurl(3)>调用</a></td></tr><tbody id='classdiv3'><tr bgcolor='#ffffff' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=10></td><td>&nbsp;&nbsp;&nbsp;<a href='AddNews.php?enews=AddNews&classid=10' target=_blank><img src='../data/images/txt.gif' border=0></a></td><td align=center>10</td><td><input type=checkbox name=reclassid[] value=10> <a href='/prices/list01/' target=_blank>综合资讯</a></td><td align=center>0</td><td><a href='#e' onclick=editc(10)>修改</a> <a href='#e' onclick=copyc(10)>复制</a> <a href='#e' onclick=delc(10)>删除</a></td><td><a href='#e' onclick=relist(10)>刷新</a> <a href='#e' onclick=renews(10,'news')>信息</a> <a href='#e' onclick=rejs(10)>JS</a> <a href='#e' onclick=tvurl(10)>调用</a> <a href='#e' onclick=ttc(10)>分类</a> <a href='#e' onclick=docinfo(10)>归档</a></td></tr></tbody><tr bgcolor='#DBEAF5' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=4></td><td onMouseUp='turnit(classdiv4);' style='CURSOR:hand'><img src='../data/images/dir.gif'></td><td align=center>4</td><td><input type=checkbox name=reclassid[] value=4> <a href='/move/' target=_blank>页游产业</a></td><td align=center>0</td><td><a href='#e' onclick=editc(4)>修改</a> <a href='#e' onclick=copyc(4)>复制</a> <a href='#e' onclick=delc(4)>删除</a></td><td><a href='#e' onclick=relist(4)>刷新</a> <a href='#e' onclick=renews(4,'news')>信息</a> <a href='#e' onclick=rejs(4)>JS</a> <a href='#e' onclick=tvurl(4)>调用</a></td></tr><tbody id='classdiv4'><tr bgcolor='#ffffff' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=11></td><td>&nbsp;&nbsp;&nbsp;<a href='AddNews.php?enews=AddNews&classid=11' target=_blank><img src='../data/images/txt.gif' border=0></a></td><td align=center>11</td><td><input type=checkbox name=reclassid[] value=11> <a href='/move/list01/' target=_blank>页游产业</a></td><td align=center>0</td><td><a href='#e' onclick=editc(11)>修改</a> <a href='#e' onclick=copyc(11)>复制</a> <a href='#e' onclick=delc(11)>删除</a></td><td><a href='#e' onclick=relist(11)>刷新</a> <a href='#e' onclick=renews(11,'news')>信息</a> <a href='#e' onclick=rejs(11)>JS</a> <a href='#e' onclick=tvurl(11)>调用</a> <a href='#e' onclick=ttc(11)>分类</a> <a href='#e' onclick=docinfo(11)>归档</a></td></tr></tbody><tr bgcolor='#DBEAF5' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=5></td><td onMouseUp='turnit(classdiv5);' style='CURSOR:hand'><img src='../data/images/dir.gif'></td><td align=center>5</td><td><input type=checkbox name=reclassid[] value=5> <a href='/air/' target=_blank>人物专访</a></td><td align=center>0</td><td><a href='#e' onclick=editc(5)>修改</a> <a href='#e' onclick=copyc(5)>复制</a> <a href='#e' onclick=delc(5)>删除</a></td><td><a href='#e' onclick=relist(5)>刷新</a> <a href='#e' onclick=renews(5,'news')>信息</a> <a href='#e' onclick=rejs(5)>JS</a> <a href='#e' onclick=tvurl(5)>调用</a></td></tr><tbody id='classdiv5'><tr bgcolor='#ffffff' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=12></td><td>&nbsp;&nbsp;&nbsp;<a href='AddNews.php?enews=AddNews&classid=12' target=_blank><img src='../data/images/txt.gif' border=0></a></td><td align=center>12</td><td><input type=checkbox name=reclassid[] value=12> <a href='/air/list01/' target=_blank>人物专访</a></td><td align=center>0</td><td><a href='#e' onclick=editc(12)>修改</a> <a href='#e' onclick=copyc(12)>复制</a> <a href='#e' onclick=delc(12)>删除</a></td><td><a href='#e' onclick=relist(12)>刷新</a> <a href='#e' onclick=renews(12,'news')>信息</a> <a href='#e' onclick=rejs(12)>JS</a> <a href='#e' onclick=tvurl(12)>调用</a> <a href='#e' onclick=ttc(12)>分类</a> <a href='#e' onclick=docinfo(12)>归档</a></td></tr></tbody><tr bgcolor='#DBEAF5' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=7></td><td onMouseUp='turnit(classdiv7);' style='CURSOR:hand'><img src='../data/images/dir.gif'></td><td align=center>7</td><td><input type=checkbox name=reclassid[] value=7> <a href='/bjb/' target=_blank>新游动态</a></td><td align=center>0</td><td><a href='#e' onclick=editc(7)>修改</a> <a href='#e' onclick=copyc(7)>复制</a> <a href='#e' onclick=delc(7)>删除</a></td><td><a href='#e' onclick=relist(7)>刷新</a> <a href='#e' onclick=renews(7,'news')>信息</a> <a href='#e' onclick=rejs(7)>JS</a> <a href='#e' onclick=tvurl(7)>调用</a></td></tr><tbody id='classdiv7'><tr bgcolor='#ffffff' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=14></td><td>&nbsp;&nbsp;&nbsp;<a href='AddNews.php?enews=AddNews&classid=14' target=_blank><img src='../data/images/txt.gif' border=0></a></td><td align=center>14</td><td><input type=checkbox name=reclassid[] value=14> <a href='/bjb/list01/' target=_blank>新游动态</a></td><td align=center>0</td><td><a href='#e' onclick=editc(14)>修改</a> <a href='#e' onclick=copyc(14)>复制</a> <a href='#e' onclick=delc(14)>删除</a></td><td><a href='#e' onclick=relist(14)>刷新</a> <a href='#e' onclick=renews(14,'news')>信息</a> <a href='#e' onclick=rejs(14)>JS</a> <a href='#e' onclick=tvurl(14)>调用</a> <a href='#e' onclick=ttc(14)>分类</a> <a href='#e' onclick=docinfo(14)>归档</a></td></tr></tbody><tr bgcolor='#DBEAF5' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=38></td><td onMouseUp='turnit(classdiv38);' style='CURSOR:hand'><img src='../data/images/dir.gif'></td><td align=center>38</td><td><input type=checkbox name=reclassid[] value=38> <a href='/rxfw/' target=_blank>开服表</a></td><td align=center>0</td><td><a href='#e' onclick=editc(38)>修改</a> <a href='#e' onclick=copyc(38)>复制</a> <a href='#e' onclick=delc(38)>删除</a></td><td><a href='#e' onclick=relist(38)>刷新</a> <a href='#e' onclick=renews(38,'news')>信息</a> <a href='#e' onclick=rejs(38)>JS</a> <a href='#e' onclick=tvurl(38)>调用</a></td></tr><tbody id='classdiv38'><tr bgcolor='#ffffff' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=40></td><td>&nbsp;&nbsp;&nbsp;<a href='AddNews.php?enews=AddNews&classid=40' target=_blank><img src='../data/images/txt.gif' border=0></a></td><td align=center>40</td><td><input type=checkbox name=reclassid[] value=40> <a href='/rxfw/list01/' target=_blank>开服表</a></td><td align=center>0</td><td><a href='#e' onclick=editc(40)>修改</a> <a href='#e' onclick=copyc(40)>复制</a> <a href='#e' onclick=delc(40)>删除</a></td><td><a href='#e' onclick=relist(40)>刷新</a> <a href='#e' onclick=renews(40,'news')>信息</a> <a href='#e' onclick=rejs(40)>JS</a> <a href='#e' onclick=tvurl(40)>调用</a> <a href='#e' onclick=ttc(40)>分类</a> <a href='#e' onclick=docinfo(40)>归档</a></td></tr></tbody><tr bgcolor='#DBEAF5' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=39></td><td onMouseUp='turnit(classdiv39);' style='CURSOR:hand'><img src='../data/images/dir.gif'></td><td align=center>39</td><td><input type=checkbox name=reclassid[] value=39> <a href='/fwjg/' target=_blank>小游戏</a></td><td align=center>0</td><td><a href='#e' onclick=editc(39)>修改</a> <a href='#e' onclick=copyc(39)>复制</a> <a href='#e' onclick=delc(39)>删除</a></td><td><a href='#e' onclick=relist(39)>刷新</a> <a href='#e' onclick=renews(39,'news')>信息</a> <a href='#e' onclick=rejs(39)>JS</a> <a href='#e' onclick=tvurl(39)>调用</a></td></tr><tbody id='classdiv39'><tr bgcolor='#ffffff' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=41></td><td>&nbsp;&nbsp;&nbsp;<a href='AddNews.php?enews=AddNews&classid=41' target=_blank><img src='../data/images/txt.gif' border=0></a></td><td align=center>41</td><td><input type=checkbox name=reclassid[] value=41> <a href='/fwjg/list01/' target=_blank>小游戏</a></td><td align=center>0</td><td><a href='#e' onclick=editc(41)>修改</a> <a href='#e' onclick=copyc(41)>复制</a> <a href='#e' onclick=delc(41)>删除</a></td><td><a href='#e' onclick=relist(41)>刷新</a> <a href='#e' onclick=renews(41,'news')>信息</a> <a href='#e' onclick=rejs(41)>JS</a> <a href='#e' onclick=tvurl(41)>调用</a> <a href='#e' onclick=ttc(41)>分类</a> <a href='#e' onclick=docinfo(41)>归档</a></td></tr></tbody><tr bgcolor='#DBEAF5' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=45></td><td onMouseUp='turnit(classdiv45);' style='CURSOR:hand'><img src='../data/images/dir.gif'></td><td align=center>45</td><td><input type=checkbox name=reclassid[] value=45> <a href='/fwlc/' target=_blank>玩家乐园</a></td><td align=center>0</td><td><a href='#e' onclick=editc(45)>修改</a> <a href='#e' onclick=copyc(45)>复制</a> <a href='#e' onclick=delc(45)>删除</a></td><td><a href='#e' onclick=relist(45)>刷新</a> <a href='#e' onclick=renews(45,'news')>信息</a> <a href='#e' onclick=rejs(45)>JS</a> <a href='#e' onclick=tvurl(45)>调用</a></td></tr><tbody id='classdiv45'><tr bgcolor='#ffffff' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=46></td><td>&nbsp;&nbsp;&nbsp;<a href='AddNews.php?enews=AddNews&classid=46' target=_blank><img src='../data/images/txt.gif' border=0></a></td><td align=center>46</td><td><input type=checkbox name=reclassid[] value=46> <a href='/fwlc/list01/' target=_blank>玩家乐园</a></td><td align=center>0</td><td><a href='#e' onclick=editc(46)>修改</a> <a href='#e' onclick=copyc(46)>复制</a> <a href='#e' onclick=delc(46)>删除</a></td><td><a href='#e' onclick=relist(46)>刷新</a> <a href='#e' onclick=renews(46,'news')>信息</a> <a href='#e' onclick=rejs(46)>JS</a> <a href='#e' onclick=tvurl(46)>调用</a> <a href='#e' onclick=ttc(46)>分类</a> <a href='#e' onclick=docinfo(46)>归档</a></td></tr></tbody><tr bgcolor='#DBEAF5' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=47></td><td onMouseUp='turnit(classdiv47);' style='CURSOR:hand'><img src='../data/images/dir.gif'></td><td align=center>47</td><td><input type=checkbox name=reclassid[] value=47> <a href='/contact/' target=_blank>联系我们</a></td><td align=center>0</td><td><a href='#e' onclick=editc(47)>修改</a> <a href='#e' onclick=copyc(47)>复制</a> <a href='#e' onclick=delc(47)>删除</a></td><td><a href='#e' onclick=relist(47)>刷新</a> <a href='#e' onclick=renews(47,'news')>信息</a> <a href='#e' onclick=rejs(47)>JS</a> <a href='#e' onclick=tvurl(47)>调用</a></td></tr><tbody id='classdiv47'><tr bgcolor='#ffffff' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=48></td><td>&nbsp;&nbsp;&nbsp;<a href='AddNews.php?enews=AddNews&classid=48' target=_blank><img src='../data/images/txt.gif' border=0></a></td><td align=center>48</td><td><input type=checkbox name=reclassid[] value=48> <a href='/contact/list01/' target=_blank>联系我们</a></td><td align=center>0</td><td><a href='#e' onclick=editc(48)>修改</a> <a href='#e' onclick=copyc(48)>复制</a> <a href='#e' onclick=delc(48)>删除</a></td><td><a href='#e' onclick=relist(48)>刷新</a> <a href='#e' onclick=renews(48,'news')>信息</a> <a href='#e' onclick=rejs(48)>JS</a> <a href='#e' onclick=tvurl(48)>调用</a> <a href='#e' onclick=ttc(48)>分类</a> <a href='#e' onclick=docinfo(48)>归档</a></td></tr></tbody><tr bgcolor='#DBEAF5' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=50></td><td onMouseUp='turnit(classdiv50);' style='CURSOR:hand'><img src='../data/images/dir.gif'></td><td align=center>50</td><td><input type=checkbox name=reclassid[] value=50> <a href='/photo/' target=_blank>游戏图库</a></td><td align=center>0</td><td><a href='#e' onclick=editc(50)>修改</a> <a href='#e' onclick=copyc(50)>复制</a> <a href='#e' onclick=delc(50)>删除</a></td><td><a href='#e' onclick=relist(50)>刷新</a> <a href='#e' onclick=renews(50,'news')>信息</a> <a href='#e' onclick=rejs(50)>JS</a> <a href='#e' onclick=tvurl(50)>调用</a></td></tr><tbody id='classdiv50'><tr bgcolor='#ffffff' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=51></td><td>&nbsp;&nbsp;&nbsp;<a href='AddNews.php?enews=AddNews&classid=51' target=_blank><img src='../data/images/txt.gif' border=0></a></td><td align=center>51</td><td><input type=checkbox name=reclassid[] value=51> <a href='/photo/list01/' target=_blank>游戏天下</a></td><td align=center>0</td><td><a href='#e' onclick=editc(51)>修改</a> <a href='#e' onclick=copyc(51)>复制</a> <a href='#e' onclick=delc(51)>删除</a></td><td><a href='#e' onclick=relist(51)>刷新</a> <a href='#e' onclick=renews(51,'news')>信息</a> <a href='#e' onclick=rejs(51)>JS</a> <a href='#e' onclick=tvurl(51)>调用</a> <a href='#e' onclick=ttc(51)>分类</a> <a href='#e' onclick=docinfo(51)>归档</a></td></tr><tr bgcolor='#ffffff' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=57></td><td>&nbsp;&nbsp;&nbsp;<a href='AddNews.php?enews=AddNews&classid=57' target=_blank><img src='../data/images/txt.gif' border=0></a></td><td align=center>57</td><td><input type=checkbox name=reclassid[] value=57> <a href='/photo/list02/' target=_blank>图说游戏</a></td><td align=center>0</td><td><a href='#e' onclick=editc(57)>修改</a> <a href='#e' onclick=copyc(57)>复制</a> <a href='#e' onclick=delc(57)>删除</a></td><td><a href='#e' onclick=relist(57)>刷新</a> <a href='#e' onclick=renews(57,'news')>信息</a> <a href='#e' onclick=rejs(57)>JS</a> <a href='#e' onclick=tvurl(57)>调用</a> <a href='#e' onclick=ttc(57)>分类</a> <a href='#e' onclick=docinfo(57)>归档</a></td></tr><tr bgcolor='#ffffff' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=58></td><td>&nbsp;&nbsp;&nbsp;<a href='AddNews.php?enews=AddNews&classid=58' target=_blank><img src='../data/images/txt.gif' border=0></a></td><td align=center>58</td><td><input type=checkbox name=reclassid[] value=58> <a href='/photo/list03/' target=_blank>游戏发现</a></td><td align=center>0</td><td><a href='#e' onclick=editc(58)>修改</a> <a href='#e' onclick=copyc(58)>复制</a> <a href='#e' onclick=delc(58)>删除</a></td><td><a href='#e' onclick=relist(58)>刷新</a> <a href='#e' onclick=renews(58,'news')>信息</a> <a href='#e' onclick=rejs(58)>JS</a> <a href='#e' onclick=tvurl(58)>调用</a> <a href='#e' onclick=ttc(58)>分类</a> <a href='#e' onclick=docinfo(58)>归档</a></td></tr><tr bgcolor='#ffffff' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=59></td><td>&nbsp;&nbsp;&nbsp;<a href='AddNews.php?enews=AddNews&classid=59' target=_blank><img src='../data/images/txt.gif' border=0></a></td><td align=center>59</td><td><input type=checkbox name=reclassid[] value=59> <a href='/photo/list04/' target=_blank>游戏故事</a></td><td align=center>0</td><td><a href='#e' onclick=editc(59)>修改</a> <a href='#e' onclick=copyc(59)>复制</a> <a href='#e' onclick=delc(59)>删除</a></td><td><a href='#e' onclick=relist(59)>刷新</a> <a href='#e' onclick=renews(59,'news')>信息</a> <a href='#e' onclick=rejs(59)>JS</a> <a href='#e' onclick=tvurl(59)>调用</a> <a href='#e' onclick=ttc(59)>分类</a> <a href='#e' onclick=docinfo(59)>归档</a></td></tr></tbody><tr bgcolor='#DBEAF5' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=52></td><td onMouseUp='turnit(classdiv52);' style='CURSOR:hand'><img src='../data/images/dir.gif'></td><td align=center>52</td><td><input type=checkbox name=reclassid[] value=52> <a href='/bagua/' target=_blank>游戏八卦</a></td><td align=center>0</td><td><a href='#e' onclick=editc(52)>修改</a> <a href='#e' onclick=copyc(52)>复制</a> <a href='#e' onclick=delc(52)>删除</a></td><td><a href='#e' onclick=relist(52)>刷新</a> <a href='#e' onclick=renews(52,'news')>信息</a> <a href='#e' onclick=rejs(52)>JS</a> <a href='#e' onclick=tvurl(52)>调用</a></td></tr><tbody id='classdiv52'><tr bgcolor='#ffffff' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=53></td><td>&nbsp;&nbsp;&nbsp;<a href='AddNews.php?enews=AddNews&classid=53' target=_blank><img src='../data/images/txt.gif' border=0></a></td><td align=center>53</td><td><input type=checkbox name=reclassid[] value=53> <a href='/bagua/list01/' target=_blank>游戏八卦</a></td><td align=center>0</td><td><a href='#e' onclick=editc(53)>修改</a> <a href='#e' onclick=copyc(53)>复制</a> <a href='#e' onclick=delc(53)>删除</a></td><td><a href='#e' onclick=relist(53)>刷新</a> <a href='#e' onclick=renews(53,'news')>信息</a> <a href='#e' onclick=rejs(53)>JS</a> <a href='#e' onclick=tvurl(53)>调用</a> <a href='#e' onclick=ttc(53)>分类</a> <a href='#e' onclick=docinfo(53)>归档</a></td></tr><tr bgcolor='#ffffff' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=54></td><td>&nbsp;&nbsp;&nbsp;<a href='AddNews.php?enews=AddNews&classid=54' target=_blank><img src='../data/images/txt.gif' border=0></a></td><td align=center>54</td><td><input type=checkbox name=reclassid[] value=54> <a href='/bagua/list02/' target=_blank>游戏专题</a></td><td align=center>0</td><td><a href='#e' onclick=editc(54)>修改</a> <a href='#e' onclick=copyc(54)>复制</a> <a href='#e' onclick=delc(54)>删除</a></td><td><a href='#e' onclick=relist(54)>刷新</a> <a href='#e' onclick=renews(54,'news')>信息</a> <a href='#e' onclick=rejs(54)>JS</a> <a href='#e' onclick=tvurl(54)>调用</a> <a href='#e' onclick=ttc(54)>分类</a> <a href='#e' onclick=docinfo(54)>归档</a></td></tr></tbody><tr bgcolor='#DBEAF5' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=55></td><td onMouseUp='turnit(classdiv55);' style='CURSOR:hand'><img src='../data/images/dir.gif'></td><td align=center>55</td><td><input type=checkbox name=reclassid[] value=55> <a href='/shipin/' target=_blank>游戏视频</a></td><td align=center>0</td><td><a href='#e' onclick=editc(55)>修改</a> <a href='#e' onclick=copyc(55)>复制</a> <a href='#e' onclick=delc(55)>删除</a></td><td><a href='#e' onclick=relist(55)>刷新</a> <a href='#e' onclick=renews(55,'news')>信息</a> <a href='#e' onclick=rejs(55)>JS</a> <a href='#e' onclick=tvurl(55)>调用</a></td></tr><tbody id='classdiv55'><tr bgcolor='#ffffff' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=56></td><td>&nbsp;&nbsp;&nbsp;<a href='AddNews.php?enews=AddNews&classid=56' target=_blank><img src='../data/images/txt.gif' border=0></a></td><td align=center>56</td><td><input type=checkbox name=reclassid[] value=56> <a href='/shipin/list01/' target=_blank>游戏视频</a></td><td align=center>0</td><td><a href='#e' onclick=editc(56)>修改</a> <a href='#e' onclick=copyc(56)>复制</a> <a href='#e' onclick=delc(56)>删除</a></td><td><a href='#e' onclick=relist(56)>刷新</a> <a href='#e' onclick=renews(56,'news')>信息</a> <a href='#e' onclick=rejs(56)>JS</a> <a href='#e' onclick=tvurl(56)>调用</a> <a href='#e' onclick=ttc(56)>分类</a> <a href='#e' onclick=docinfo(56)>归档</a></td></tr></tbody>
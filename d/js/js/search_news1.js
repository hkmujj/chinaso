function search_check(obj){if(obj.keyboard.value.length==0){alert('请输入搜索关键字');return false;}return true;}document.write("<table border=0 cellpadding=3 cellspacing=1><form name=search_js1 method=post action='/e/search/index.php' onsubmit='return search_check(document.search_js1);'><tr><td><div align=center>搜索: <select name=show><option value=title>标题</option><option value=smalltext>简介</option><option value=newstext>内容</option><option value=writer>作者</option><option value=title,smalltext,newstext,writer>搜索全部</option></select><select name=classid><option value=0>所有栏目</option><option value='38'>|-开服表</option><option value='39'>|-小游戏</option><option value='45'>|-玩家乐园</option><option value='46' style='background:#99C4E3'>&nbsp;&nbsp;|-玩家乐园</option><option value='47'>|-联系我们</option><option value='48' style='background:#99C4E3'>&nbsp;&nbsp;|-联系我们</option><option value='1'>|-游戏资讯</option><option value='8' style='background:#99C4E3'>&nbsp;&nbsp;|-国内动态</option><option value='9' style='background:#99C4E3'>&nbsp;&nbsp;|-国际新闻</option><option value='2'>|-游戏评测</option><option value='40' style='background:#99C4E3'>&nbsp;&nbsp;|-页游</option><option value='41' style='background:#99C4E3'>&nbsp;&nbsp;|-手游</option><option value='42' style='background:#99C4E3'>&nbsp;&nbsp;|-端游</option><option value='3'>|-电子竞技</option><option value='10' style='background:#99C4E3'>&nbsp;&nbsp;|-英雄联盟</option><option value='4'>|-八卦周边</option><option value='53' style='background:#99C4E3'>&nbsp;&nbsp;|-游戏相关</option><option value='5'>|-行业信息</option><option value='11' style='background:#99C4E3'>&nbsp;&nbsp;|-行业新闻</option><option value='12' style='background:#99C4E3'>&nbsp;&nbsp;|-人物访谈</option><option value='50'>|-游戏美图</option><option value='51' style='background:#99C4E3'>&nbsp;&nbsp;|-游戏天下</option><option value='57' style='background:#99C4E3'>&nbsp;&nbsp;|-图说游戏</option><option value='58' style='background:#99C4E3'>&nbsp;&nbsp;|-游戏发现</option><option value='59' style='background:#99C4E3'>&nbsp;&nbsp;|-游戏故事</option><option value='55'>|-游戏视频</option><option value='56' style='background:#99C4E3'>&nbsp;&nbsp;|-游戏视频</option><option value='52'>|-游戏工具</option><option value='6'>|-专题报道</option><option value='54' style='background:#99C4E3'>&nbsp;&nbsp;|-游戏专题</option><option value='7'>|-游戏中心</option><option value='14' style='background:#99C4E3'>&nbsp;&nbsp;|-新游动态</option></select><input name=keyboard type=text size=13><input type=submit name=Submit value=搜索></div></td></tr></form></table>");
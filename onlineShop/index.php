
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>千百度网上书店</title>

<script type="text/javascript"src="js/jquery.js"> </script>
<script type="text/javascript"src="js/jquery.validate.js"> </script>
<script type="text/javascript"src="js/jquery.form.js"> </script>
<script type="text/javascript"src="js/jquery.ui.js"> </script>
<script type="text/javascript"src="js/reg.js"> </script>
<script type="text/javascript"src="js/jquery.cookie.js"> </script>
<script type="text/javascript"src="js/rl_exp.js"> </script>
<script type ='text/javascript'src="js/liuyanban.js"> </script>
<script type ='text/javascript'src="js/slide.js"> </script>
<script type ='text/javascript'src="js/func.js"> </script>

<link rel="shortcut icon" type="image/x-icon" href="image/11.ico" />
<link rel="stylesheet" type="text/css" href="smoothness/jquery.ui.css" />
<link rel="stylesheet" type="text/css" href="css/index.css">
<link rel="stylesheet" type="text/css" href="css/reg.css">
<link rel="stylesheet" href="css/slide.css">
<link rel="stylesheet" href="css/rl_exp.css" />
<link rel="stylesheet" href="css/liuyanban.css">
<style>
	.ck-slide {
	    width:660px;
	    height:250px;
	}
	.ck-slide ul.ck-slide-wrapper {
	    height:320px;
	}
</style>
</head>
<body>
<!-- 页面div -->
<div class = "alldiv">
	<!--header-->
	<?php
		include 'php/header.php';
	?>
	<!--下面的内容 -->
	<div class = "nextdiv">

		<!--左边的导航栏 -->
		<div class = "navigateleft">
			<div class = "wenxueyishu"onmouseover = "showwenxueyishu()" onmouseout="hiddenwenxueyishu()"><span><a href="search.php?type=文学">文学艺术</a></span><br>
				<a href="search.php?smalltype=小说">小说</a> <a href="search.php?smalltype=传记">传记 </a><a href="search.php?smalltype=青春文学">青春文学 </a><a href="search.php?smalltype=动漫">动漫</a>
			</div>
			<div class = "shaoer"onmouseover = "showshaoer()" onmouseout="hiddenshaoer()"><span><a href="search.php?type=少儿">少儿</a></span><br>
				<a href="search.php?smalltype=0-2岁">0-2岁</a> <a href="search.php?smalltype=3-6岁">3-6岁 </a><a href="search.php?smalltype=7-10岁">7-10岁 </a><a href="search.php?smalltype=绘本">绘本</a>
			</div>
			<div class = "renwensheke"onmouseover = "showrenwensheke()" onmouseout="hiddenrenwensheke()">
				<span><a href="search.php?type=人文社科">人文社科</a></span><br>
				<a href="search.php?smalltype=历史">历史</a> <a href="search.php?smalltype=军事">政治军事 </a><a href="search.php?smalltype=哲学宗教">哲学宗教 </a>
			</div>
			<div class = "jingguanlizhi"onmouseover = "showjingguanlizhi()" onmouseout="hiddenjingguanlizhi()">
				<span><a href="search.php?type=经管励志">经管励志</a></span><br>
				<a href="search.php?smalltype=经济">经济</a> <a href="search.php?smalltype=管理">管理 </a><a href="search.php?smalltype=励志">励志与成功 </a>
			</div>
			<div class = "jiankangshenghuo"onmouseover = "showjiankangshenghuo()" onmouseout="hiddenjiankangshenghuo()">
				<span><a href="search.php?type=健康生活">健康生活</a></span><br>
				<a href="search.php?smalltype=旅游">旅游</a> <a href="search.php?smalltype=美食">美食 </a><a href="search.php?smalltype=美妆瘦身">美妆瘦身 </a><a href="search.php?smalltype=两性">两性</a>
			</div>
			<div class = "kaoshijiaoyu"onmouseover = "showkaoshijiaoyu()" onmouseout="hiddenkaoshijiaoyu()">
				<span><a href="search.php?type=考试教育">考试教育</a></span><br>
				<a href="search.php?smalltype=中小学">中小学教辅</a> <a href="search.php?smalltype=外语">外语 </a><a href="search.php?smalltype=工具书">工具书 </a>
			</div>
			<div class = "keji"onmouseover = "showkeji()" onmouseout="hiddenkeji()">
				<span><a href="search.php?type=科技">科技</a></span><br>
				<a href="search.php?smalltype=科普">科普</a> <a href="search.php?smalltype=互联网">IT互联网 </a><a href="search.php?smalltype=医学">医学 </a>
			</div>
			<div><span><a href="search.php?type=期刊杂志">期刊杂志</a><span></div>
			<div><span><a href="#">进口原版书</a><span></div>
			<div><span><a href="#">音像</a><span></div>
			<div><span><a href="#">其他</a><span></div>
		</div>
		<!-- 隐藏的div 文学艺术  开始-->
		<div class = "showwenxueyishu" onmouseover = "showwenxueyishu()" onmouseout="hiddenwenxueyishu()">
			<div class = "showwenxueyishuleft">
				<div class = "showwenxueyishutable">
					<span><a href = "search.php?type=小说">小说</a></span>
					<table>
						<tr>
							<td><a href = "search.php?smalltype=中国当代小说">中国当代小说</a></td>
							<td><a href = "search.php?smalltype=中国近代小说">中国近代小说</a></td>
							<td><a href = "search.php?smalltype=中国古典小说">中国古典小说</a></td>
						</tr>
						<tr>
							<td><a href = "search.php?smalltype=四大名著">四大名著</a></td>
							<td><a href = "search.php?smalltype=外国小说">外国小说</a></td>
							<td><a href = "search.php?smalltype=传记">传记</a></td>
						</tr>
						<tr>
							<td><a href = "search.php?smalltype=言情">言情</a></td>
							<td><a href = "search.php?smalltype=魔幻玄幻">魔幻玄幻</a></td>
							<td><a href = "search.php?smalltype=历史小说">历史小说</a></td>
						</tr>
					</table>
				</div>
				<div class = "showwenxueyishutable">
					<span><a href = "search.php?smalltype=青春文学">青春文学</a></span>
					<table>
						<tr>
							<td><a href = "search.php?smalltype=悬疑惊悚">悬疑惊悚</a></td>
							<td><a href = "search.php?smalltype=玄幻新武侠">玄幻新武侠</a></td>
							<td><a href = "search.php?smalltype=校园">校园</a></td>
						</tr>
						<tr>
							<td><a href = "search.php?smalltype=叛逆成长">叛逆成长</a></td>
							<td><a href = "search.php?smalltype=大陆原创">大陆原创</a></td>
							<td><a href = "search.php?smalltype=爆笑">爆笑无厘头</a></td>
						</tr>
						<tr>
							<td><a href = "search.php?smalltype=情">爱情情感</a></td>
							<td><a href = "search.php?smalltype=娱乐">娱乐偶像</a></td>
							<td><a href = "search.php?smalltype=青春">其他青春文学</a></td>
						</tr>
					</table>
				</div>
				<div class = "showwenxueyishutable">
					<span><a href = "search.php?type=艺术">艺术</a></span>
					<table>
						<tr>
							<td><a href = "search.php?smalltype=艺术理论">艺术理论</a></td>
							<td><a href = "search.php?smalltype=绘画">绘画</a></td>
							<td><a href = "search.php?smalltype=影视艺术">影视艺术</a></td>
						</tr>
						<tr>
							<td><a href = "search.php?smalltype=音乐">音乐</a></td>
							<td><a href = "search.php?smalltype=书法">书法篆刻</a></td>
							<td><a href = "search.php?smalltype=设计">设计</a></td>
						</tr>
						<tr>
							<td><a href = "search.php?smalltype=人体艺术">人体艺术</a></td>
							<td><a href = "search.php?smalltype=建筑艺术">建筑艺术</a></td>
							<td><a href = "search.php?smalltype=艺术类考试">艺术类考试</a></td>
						</tr>
					</table>
				</div>
				<div class = "showwenxueyishutable">
					<span><a href = "search.php?type=动漫幽默">动漫幽默</a></span>
					<table>
						<tr>
							<td><a href = "search.php?smalltype=幽默">幽默/笑话集</a></td>
							<td><a href = "search.php?smalltype=名著漫画">小说/名著漫画版</a></td>
							<td><a href = "search.php?smalltype=动漫">动漫学堂</a></td>
						</tr>
						<tr>
							<td><a href = "search.php?smalltype=世界经典">世界经典漫画集</a></td>
							<td><a href = "search.php?smalltype=日韩漫画">日韩漫画</a></td>
							<td><a href = "search.php?smalltype=欧美漫画">欧美漫画</a></td>
						</tr>
						<tr>
							<td><a href = "search.php?smalltype=港台漫画">港台漫画</a></td>
							<td><a href = "search.php?smalltype=大陆漫画">大陆漫画</a></td>
							<td><a href = "search.php?smalltype=国外漫画">其他国外漫画</a></td>
						</tr>
					</table>
				</div>
			</div>
			<!-- <div class="line"></div> -->
			<div class = "showwenxueyishuright">
				<span><a href = "#">热门作者</a></span><br/>
				<table>
				<tr>
					<td><a href = "search.php?authod=郭沫若">郭沫若</a></td>
					<td><a href = "search.php?authod=郭敬明">郭敬明</a></td>
					<td><a href = "search.php?authod=郭玉宁">郭玉宁</a></td>
				</tr>
				<tr>
					<td><a href = "search.php?authod=鲁迅">鲁迅</a></td>
					<td><a href = "search.php?authod=张三">张三</a></td>
					<td><a href = "search.php?authod=李四">李四</a></td>
				</tr>
				
				</table>
				<hr/>
				<span><a href = "#">舒心一刻</a></span>
				<ul>
					<li><a href = "#">没关系抬头看看天 不在一个屋檐至少共享一片天</a></li>
					<li><a href = "#">可惜我是你故人却不是你故事里的人</a></li>
					<li><a href = "#">惟愿时光静好，现世安稳；惟愿如花美眷，岁岁年年</a></li>
					<li><a href = "#">桐影频摇引碎雨，惊了红叶，惹得秋寒细</a></li>
				</ul>
			</div>
		</div>
		<!-- 隐藏的div 文学艺术  结束-->
		
		<!-- 隐藏的div 少儿  开始-->
		<div class = "showshaoer" onmouseover = "showshaoer()" onmouseout="hiddenshaoer()">
			<div class = "showshaoerleft">
					<div class = "showshaoertable">
					<span><a href = "search.php?type=少儿">少儿</a></span>
					<table>
						<tr>
							<td><a href = "search.php?smalltype=0-2岁">0-2岁</a></td>
							<td><a href = "search.php?smalltype=3-6岁">3-6岁</a></td>
							<td><a href = "search.php?smalltype=7-10岁">7-10岁</a></td>
						</tr>
						<tr>
							<td><a href = "search.php?smalltype=11-14岁">11-14岁</a></td>
							<td><a href = "search.php?smalltype=孕产育儿">孕产育儿</a></td>
							<td><a href = "search.php?smalltype=幼儿启蒙">幼儿启蒙</a></td>
						</tr>
						<tr>
							<td><a href = "search.php?smalltype=科普百科">科普百科</a></td>
							<td><a href = "search.php?smalltype=家庭教育">家庭教育</a></td>
							<td><a href = "search.php?smalltype=绘本">绘本</a></td>
						</tr>
					</table>
				</div>
			</div>
			<!-- <div class="line"></div> -->
			<div class = "showshaoerright">
			<span><a href = "#">热门作者</a></span><br/>
			<table>
			<tr>
			<td><a href = "search.php?authod=沈石溪">沈石溪</a></td>
			<td><a href = "search.php?authod=秦文君">秦文君</a></td>
			<td><a href = "search.php?authod=杨红樱">杨红樱</a></td>
			</tr>
			
			</table>
			<hr/>
			<span><a href = "#">会心一笑</a></span>
			<ul>
				<li>
					有个同学中午上学迟到了，班主任在门口拿着手表给他看，不说话，意思是：你看看都几点了？
					那同学看了看手表说道：“老师，这个手表不是我的。” 
				</li>
			</ul>
			</div>
		</div>
		<!-- 隐藏的div 少儿  结束 -->
		<!-- 隐藏的div 人文社科 开始 -->
		<div class = "showrenwensheke" onmouseover = "showrenwensheke()" onmouseout="hiddenrenwensheke()">
			<div class = "showrenwenshekeleft">
				<div class = "showrenwensheketable">
					<span><a href = "search.php?type=文化">文化</a></span>
					<table>
						<tr>
							<td><a href = "search.php?smalltype=中国文化">中国文化</a></td>
							<td><a href = "search.php?smalltype=中国名俗">中国名俗</a></td>
							<td><a href = "search.php?smalltype=文化评述">文化评述</a></td>
						</tr>
						<tr>
							<td><a href = "search.php?smalltype=文化理论">文化理论</a></td>
							<td><a href = "search.php?smalltype=世界文化">世界文化</a></td>
							<td><a href = "search.php?smalltype=地域文化">地域文化</a></td>
						</tr>
						<tr>
							<td><a href = "search.php?smalltype=神秘现象">神秘现象</a></td>
							<td><a href = "search.php?smalltype=秘">秘</a></td>
							<td><a href = "search.php?smalltype="></a></td>
						</tr>
					</table>
				</div>
				<div class = "showrenwensheketable">
					<span><a href = "#">政治军事法律</a></span>
					<table>
						<tr>
							<td><a href = "search.php?smalltype=政治">政治</a></td>
							<td><a href = "search.php?smalltype=军事">军事</a></td>
							<td><a href = "search.php?smalltype=政治军事类教材">政治军事类教材</a></td>
						</tr>
						<tr>
							<td><a href = "search.php?smalltype=民法">民法</a></td>
							<td><a href = "search.php?smalltype=经济法">经济法</a></td>
							<td><a href = "search.php?smalltype=法律法规">法律法规</a></td>
						</tr>
						<tr>
							<td><a href = "search.php?smalltype=法律实务">法律实务</a></td>
							<td><a href = "search.php?smalltype=刑法">刑法</a></td>
							<td><a href = "search.php?smalltype=法律工具书">法律工具书</a></td>
						</tr>
					</table>
				</div>
				<div class = "showrenwensheketable">
					<span><a href = "search.php?type=社会科学">社会科学</a></span>
					<table>
						<tr>
							<td><a href = "search.php?smalltype=社会学">社会学</a></td>
							<td><a href = "search.php?smalltype=社会科学总论">社会科学总论</a></td>
							<td><a href = "search.php?smalltype=文化人类学">文化人类学</a></td>
						</tr>
						<tr>
							<td><a href = "search.php?smalltype=新闻传播">新闻传播</a></td>
							<td><a href = "search.php?smalltype=语言文字">语言文字</a></td>
							<td><a href = "search.php?smalltype=图书馆学档案学">图书馆学档案学</a></td>
						</tr>
						<tr>
							<td><a href = "search.php?smalltype=心理学">心理学</a></td>
							<td><a href = ""></a></td>
							<td><a href = ""></a></td>
						</tr>
					</table>
				</div>
			</div>
			<div class="line"></div>
			<div class = "showrenwenshekeright">
				<span><a href = "#">热门作者</a></span><br/>
				<table>
					<tr>
						<td><a href = "search.php?authod=高晓松">高晓松</a></td>
						<td><a href = "search.php?authod=易中天">易中天</a></td>
						<td><a href = "search.php?authod=袁腾飞">袁腾飞</a></td>
						<td><a href = "search.php?authod=乐嘉">乐嘉</a></td>
					</tr>
					<tr>
						<td><a href = "search.php?authod=星云大师">星云大师</a></td>
					</tr>
				
				</table>
				<hr/>
				<span><a href = "#">倾心之诗</a></span>
				<ul>
					<li>
						终是谁使弦断，花落肩头，恍惚迷离
					</li>
					<li>
						 灯火星星，人声杳杳，歌不尽乱世烽火。
					</li>
					<li>
						 生生的两端，我们彼此站成了岸 。
					</li>
				</ul>
			</div>
		</div>
		<!-- 隐藏的div 人文社科 结束 -->
		
		<!-- 隐藏的div 经管励志 开始 -->
		<div class = "showjingguanlizhi" onmouseover = "showjingguanlizhi()" onmouseout="hiddenjingguanlizhi()">
			<div class = "showjingguanlizhileft">
				<div class = "showjingguanlizhitable">
					<span><a href = "search.php?type=经济金融">经济金融</a></span>
					<table>
						<tr>
							<td><a href = "search.php?smalltype=经济学">经济学理论</a></td>
							<td><a href = "search.php?smalltype=中国经济">中国经济</a></td>
							<td><a href = "search.php?smalltype=国际经济">国际经济</a></td>
						</tr>
						<tr>
							<td><a href = "search.php?smalltype=通俗读物">通俗读物</a></td>
							<td><a href = "search.php?smalltype=经济史">经济史</a></td>
							<td><a href = "search.php?smalltype=统计审计">统计审计</a></td>
						</tr>
						<tr>
							<td><a href = "search.php?smalltype=财政税">财政税收</a></td>
							<td><a href = "search.php?smalltype=贸易政策">贸易政策</a></td>
							<td><a href = "search.php?smalltype=保险学">保险学</a></td>
						</tr>
					</table>
				</div>
				<div class = "showjingguanlizhitable">
					<span><a href = "search.php?type=投资理财">投资理财</a></span>
					<table>
						<tr>
							<td><a href = "search.php?smalltype=证券股票">证券/股票</a></td>
							<td><a href = "search.php?smalltype=基金">基金</a></td>
							<td><a href = "search.php?smalltype=期货">期货</a></td>
						</tr>
						<tr>
							<td><a href = "search.php?smalltype=外汇">外汇</a></td>
							<td><a href = "search.php?smalltype=保险">保险</a></td>
							<td><a href = "search.php?smalltype=彩票">彩票</a></td>
						</tr>
						<tr>
							<td><a href = "search.php?smalltype=购房置业">购房置业</a></td>
							<td><a href = "search.php?smalltype=女性理财">女性理财</a></td>
							<td><a href = "search.php?smalltype=纳税">纳税</a></td>
						</tr>
					</table>
				</div>
				<div class = "showjingguanlizhitable">
					<span><a href = "search.php?type=管理">管理</a></span>
					<table>
						<tr>
							<td><a href = "search.php?smalltype=一般管理学">一般管理学</a></td>
							<td><a href = "search.php?smalltype=会计">会计</a></td>
							<td><a href = "search.php?smalltype=市场营销">市场营销</a></td>
						</tr>
						<tr>
							<td><a href = "search.php?smalltype=战略管理">战略管理</a></td>
							<td><a href = "search.php?smalltype=生产与运作管理">生产与运作管理</a></td>
							<td><a href = "search.php?smalltype=管理与信息系统">管理与信息系统</a></td>
						</tr>
						<tr>
							<td><a href = "search.php?smalltype=金融投资">金融投资</a></td>
							<td><a href = "search.php?smalltype=电子商务">电子商务</a></td>
							<td><a href = "search.php?smalltype=MBA">MBA</a></td>
						</tr>
					</table>
				</div>
				<div class = "showjingguanlizhitable">
					<span><a href = "search.php?type=励志">励志与成功</a></span>
					<table>
						<tr>
							<td><a href = "search.php?smalltype=成功激励">成功激励</a></td>
							<td><a href = "search.php?smalltype=人生哲学">人生哲学</a></td>
							<td><a href = "search.php?smalltype=心灵与修养">心灵与修养</a></td>
						</tr>
						<tr>
							<td><a href = "search.php?smalltype=智商">智商/智谋</a></td>
							<td><a href = "search.php?smalltype=情商">情商/情绪管理</a></td>
							<td><a href = "search.php?smalltype=职场">人在职场</a></td>
						</tr>
						<tr>
							<td><a href = "search.php?smalltype=人际交往">人际交往</a></td>
							<td><a href = "search.php?smalltype=励志">励志</a></td>
							<td><a href = "search.php?smalltype=财商">财商/财富智慧</a></td>
						</tr>
					</table>
				</div>
			</div>
			<div class="line"></div>
			<div class = "showjingguanlizhiright">
				<span><a href = "#">热门作者</a></span><br/>
				<table>
					<tr>
						<td><a href = "search.php?authod=郎咸平">郎咸平</a></td>
						<td><a href = "search.php?authod=时寒冰">时寒冰</a></td>
						<td><a href = "search.php?authod=吴晓波">吴晓波</a></td>
						<td><a href = "search.php?authod=刘同">刘同</a></td>
					</tr>
					<tr>
						<td><a href = "search.php?authod=吴敬琏">吴敬琏</a></td>
						<td><a href = "search.php?authod=张德芬">张德芬</a></td>
					</tr>
				
				</table>
				<hr/>
				<span><a href = "#">唯美一诗歌</a></span>
				<ul>
					<li>
						又有朝露又有泪，落花迷醉时候<br/>
						经年难忘多少事，一字一词一梦<br/>
						流水决绝，梦里长空，只是相别离<br/>
						岁月芬芳，是为鹫飞鹰翔<br/>
						<br/>
						或是西岸携游，微风更细雨<br/>
						或是雪落竟飘舞，都在ABCD<br/>
						繁华季节，谁笑着落了，念着哭了<br/>
						长路漫漫，不再同雨同风<br/>
					</li>
				</ul>
			</div>
		</div>
		<!-- 隐藏的div 经管励志 结束 -->
		
		<!-- 隐藏的div 健康生活 开始 -->
		<div class = "showjiankangshenghuo" onmouseover = "showjiankangshenghuo()" onmouseout="hiddenjiankangshenghuo()">
			<div class = "showjiankangshenghuoleft">
				<div class = "showjiankangshenghuotable">
					<span><a href = "search.php?smalltype=旅游">旅游</a></span>
					<table>
						<tr>
							<td><a href = "search.php?smalltype=国内自助游">国内自助游</a></td>
							<td><a href = "search.php?smalltype=国外自助游">国外自助游</a></td>
							<td><a href = "search.php?smalltype=城市自助游">城市自助游</a></td>
						</tr>
						<tr>
							<td><a href = "search.php?smalltype=户外探险">户外探险</a></td>
							<td><a href = "search.php?smalltype=旅游随笔">旅游随笔</a></td>
							<td><a href = "search.php?smalltype=旅游攻略">旅游攻略</a></td>
						</tr>
					</table>
				</div>
				<div class = "showjiankangshenghuotable">
					<span><a href = "search.php?smalltype=美食">美食</a></span>
					<table>
						<tr>
							<td><a href = "search.php?smalltype=家常菜谱">家常菜谱</a></td>
							<td><a href = "search.php?smalltype=烘焙甜品">烘焙甜品</a></td>
							<td><a href = "search.php?smalltype=烹饪理论">烹饪理论</a></td>
						</tr>
						<tr>
							<td><a href = "search.php?smalltype=餐饮指南">餐饮指南</a></td>
							<td><a href = "search.php?smalltype=饮食文化">饮食文化</a></td>
						</tr>
					</table>
				</div>
				<div class = "showjiankangshenghuotable">
					<span><a href = "search.php?smalltype=美妆瘦身">美妆瘦身</a></span>
					<table>
						<tr>
							<td><a href = "search.php?smalltype=体育运动">体育运动</a></td>
							<td><a href = "search.php?smalltype=瑜伽">瑜伽</a></td>
							<td><a href = "search.php?smalltype=减肥瘦身">减肥瘦身</a></td>
						</tr>
						<tr>
							<td><a href = "search.php?smalltype=化妆">化妆</a></td>
							<td><a href = "search.php?smalltype=服装袋配">服装袋配</a></td>
						</tr>
					</table>
				</div>
				<div class = "showjiankangshenghuotable">
					<span><a href = "search.php?smalltype=家居休闲">家居休闲</a></span>
					<table>
						<tr>
							<td><a href = "search.php?smalltype=手工DIY">手工DIY</a></td>
							<td><a href = "search.php?smalltype=风水占卜">风水占卜</a></td>
							<td><a href = "search.php?smalltype=星座运程">星座运程</a></td>
						</tr>
						<tr>
							<td><a href = "search.php?smalltype=生活窍门">生活窍门</a></td>
							<td><a href = "search.php?smalltype=休闲游戏">休闲游戏</a></td>
							<td><a href = "search.php?smalltype=两性">两性</a></td>
						</tr>
					</table>
				</div>
			</div>
			<div class="line"></div>
			<div class = "showjiankangshenghuoright">
				<span><a href = "#">热门作者</a></span><br/>
				<table>
					<tr>
						<td><a href = "search.php?authod=于康">于康</a></td>
						<td><a href = "search.php?authod=向红丁">向红丁</a></td>
						<td><a href = "search.php?authod=罗大伦">罗大伦</a></td>
						<td><a href = "search.php?authod=张羽君">张羽君</a></td>
					</tr>
					<tr>
						<td><a href = "search.php?authod=郑多燕">郑多燕</a></td>
						<td><a href = "search.php?authod=苏芩">苏芩</a></td>
					</tr>
				
				</table>
				<hr/>
				<span><a href = "#">心灵鸡汤</a></span>
				<ul>
					<li>
						一个有能力的人，就是逢山开路，遇水架桥，实在过不去就绕个弯，也要前进，这就是能力。
						决心就是力量，坦诚就是效率。平坦不是最佳道路，起伏才有丰富人生！
						一个人可以不成功，但不可以不成长，成长比成功更重要！
						凡事找方法去解决者，一定是成功者，凡事找借口推脱者，必定失败。
					</li>
				</ul>
			</div>
		</div>
		<!-- 隐藏的div 健康生活 结束 -->
		
		<!-- 隐藏的div 考试教育 开始 -->
		<div class = "showkaoshijiaoyu" onmouseover = "showkaoshijiaoyu()" onmouseout="hiddenkaoshijiaoyu()">
			<div class = "showkaoshijiaoyuleft">
				<div class = "showkaoshijiaoyutable">
					<span><a href = "search.php?smalltype=教材">教材</a></span>
					<table>
						<tr>
							<td><a href = "search.php?smalltype=中职教材">中职教材</a></td>
							<td><a href = "search.php?smalltype=研究生/本科/专科">研究生/本科/专科</a></td>
							<td><a href = "search.php?smalltype=高职高专教材">高职高专教材</a></td>
						</tr>
						<tr>
							<td><a href = "search.php?smalltype=成人教育教材">成人教育教材</a></td>
							<td><a href = "search.php?smalltype=中小学教辅">中小学教辅</a></td>
						</tr>
					</table>
				</div>
				<div class = "showkaoshijiaoyutable">
					<span><a href = "search.php?smalltype=考试">考试</a></span>
					<table>
						<tr>
							<td><a href = "search.php?smalltype=自学考试">自学考试</a></td>
							<td><a href = "search.php?smalltype=外语考试">外语考试</a></td>
							<td><a href = "search.php?smalltype=考研">考研</a></td>
						</tr>
						<tr>
							<td><a href = "search.php?smalltype=计算机考试">计算机考试</a></td>
							<td><a href = "search.php?smalltype=成人高考">成人高考</a></td>
						</tr>
					</table>
				</div>
				<div class = "showkaoshijiaoyutable">
					<span><a href = "search.php?smalltype=外语">外语</a></span>
					<table>
						<tr>
							<td><a href = "search.php?smalltype=英语综合教程">英语综合教程</a></td>
							<td><a href = "search.php?smalltype=英语读物">英语读物</a></td>
							<td><a href = "search.php?smalltype=英语考试">英语考试</a></td>
						</tr>
						<tr>
							<td><a href = "search.php?smalltype=小语种">小语种</a></td>
							<td><a href = "search.php?smalltype=CET-4">CET-4</a></td>
							<td><a href = "search.php?smalltype=CET-6">CET-6</a></td>
						</tr>
						<tr>
							<td><a href = "search.php?smalltype=雅思IELTS">雅思IELTS</a></td>
							<td><a href = "search.php?smalltype=托福TOEFL">托福TOEFL</a></td>
							<td><a href = "search.php?smalltype=GRE">GRE</a></td>
						</tr>
					</table>
				</div>
				<div class = "showkaoshijiaoyutable">
					<span><a href = "search.php?smalltype=工具书">工具书</a></span>
					<table>
						<tr>
							<td><a href = "search.php?smalltype=英语工具书">英语工具书</a></td>
							<td><a href = "search.php?smalltype=文学鉴赏辞典">文学鉴赏辞典</a></td>
							<td><a href = "search.php?smalltype=汉语工具书">汉语工具书</a></td>
						</tr>
						<tr>
							<td><a href = "search.php?smalltype=百科全书">百科全书/年鉴</a></td>
							<td><a href = "search.php?smalltype=其他语种工具书">其他语种工具书</a></td>
						</tr>
					</table>
				</div>
			</div>
			<div class="line"></div>
			<div class = "showkaoshijiaoyuright">
				<span><a href = "#">热门作者</a></span><br/>
				<table>
					<tr>
						<td><a href = "search.php?authod=肖秀荣">肖秀荣</a></td>
						<td><a href = "search.php?authod=蒋军虎">蒋军虎</a></td>
						<td><a href = "search.php?authod=周思成">周思成</a></td>
					</tr>
				
				</table>
				<hr/>
				<span><a href = "#">美丽现代诗</a></span>
				<ul>
					<li>
						错误    作者：郑愁予 <br/>
						<br/>
						我打江南走过  <br/>
						那等在季节里的容颜如莲花的开落  <br/>
						东风不来，三月的柳絮不飞  <br/>
						你的心如小小的寂寞的城  <br/>
						恰若青石的街道向晚  <br/>
						跫音不响，三月的春帏不揭  <br/>
						你的心是小小的窗扉紧掩  <br/>
						我达达的马蹄是美丽的错误  <br/>
						我不是归人，是过客  <br/>
					</li>
				</ul>
			</div>
		</div>
		<!-- 隐藏的div 考试教育 结束 -->
		
		<!-- 隐藏的div 科技 开始 -->
		<div class = "showkeji" onmouseover = "showkeji()" onmouseout="hiddenkeji()">
			<div class = "showkejileft">
				<div class = "showkejitable">
					<span><a href = "search.php?smalltype=计算机">计算机/网络</a></span>
					<table>
						<tr>
							<td><a href = "search.php?smalltype=计算机理">计算机理论</a></td>
							<td><a href = "search.php?smalltype=硬件外部设备">硬件外部设备</a></td>
							<td><a href = "search.php?smalltype=操作系统">操作系统</a></td>
						</tr>
						<tr>
							<td><a href = "search.php?smalltype=数据库">数据库</a></td>
							<td><a href = "search.php?smalltype=CA">CAD/CAM/CAE</a></td>
							<td><a href = "search.php?smalltype=网络与数据通信">网络与数据通信</a></td>
						</tr>
						<tr>
							<td><a href = "search.php?smalltype=程序设计">程序设计</a></td>
							<td><a href = "search.php?smalltype=软件工程开">软件工程开发</a></td>
							<td><a href = "search.php?smalltype=IT互联网">IT互联网</a></td>
						</tr>
					</table>
				</div>
				<div class = "showkejitable">
					<span><a href = "search.php?smalltype=建筑">建筑</a></span>
					<table>
						<tr>
							<td><a href = "search.php?smalltype=建筑史">建筑史</a></td>
							<td><a href = "search.php?smalltype=建筑科学">建筑科学</a></td>
							<td><a href = "search.php?smalltype=建筑外观设计">建筑外观设计</a></td>
						</tr>
						<tr>
							<td><a href = "search.php?smalltype=园林景观">园林景观</a></td>
							<td><a href = "search.php?smalltype=室内设计">室内设计</a></td>
							<td><a href = "search.php?smalltype=施工与监理">施工与监理</a></td>
						</tr>
						<tr>
							<td><a href = "search.php?smalltype=工程经济与管理">工程经济与管理</a></td>
							<td><a href = "search.php?smalltype=城市规划">城市规划</a></td>
							<td><a href = "search.php?smalltype=建筑教材教辅">建筑教材教辅</a></td>
						</tr>
					</table>
				</div>
				<div class = "showkejitable">
					<span><a href = "search.php?smalltype=自然科学">自然科学</a></span>
					<table>
						<tr>
							<td><a href = "search.php?smalltype=总论">总论</a></td>
							<td><a href = "search.php?smalltype=物理学">物理学</a></td>
							<td><a href = "search.php?smalltype=天文学">天文学</a></td>
						</tr>
						<tr>
							<td><a href = "search.php?smalltype=数学">数学</a></td>
							<td><a href = "search.php?smalltype=生物科学">生物科学</a></td>
							<td><a href = "search.php?smalltype=力学">力学</a></td>
						</tr>
						<tr>
							<td><a href = "search.php?smalltype=化学">化学</a></td>
							<td><a href = "search.php?smalltype=科技史">科技史</a></td>
							<td><a href = "search.php?smalltype=地球科学">地球科学</a></td>
						</tr>
					</table>
				</div>
				<div class = "showkejitable">
					<span><a href = "search.php?smalltype=">医学</a></span>
					<table>
						<tr>
							<td><a href = "search.php?smalltype=预防医学">预防医学/卫生学</a></td>
							<td><a href = "search.php?smalltype=临床医学">临床医学理论</a></td>
							<td><a href = "search.php?smalltype=内科">内科学</a></td>
						</tr>
						<tr>
							<td><a href = "search.php?smalltype=外科">外科学</a></td>
							<td><a href = "search.php?smalltype=妇产">妇产科学</a></td>
							<td><a href = "search.php?smalltype=儿科">儿科学</a></td>
						</tr>
						<tr>
							<td><a href = "search.php?smalltype=中医">中医学</a></td>
							<td><a href = "search.php?smalltype=药">药学</a></td>
							<td><a href = "search.php?smalltype=护理">护理学</a></td>
						</tr>
					</table>
				</div>
			</div>
			<div class="line"></div>
			<div class = "showkejiright">
				<span><a href = "#">热门作者</a></span><br/>
				<table>
					<tr>
						<td><a href = "search.php?authod=霍金秋">霍金秋</a></td>
						<td><a href = "search.php?authod=叶吴军">叶吴军</a></td>
						<td><a href = "search.php?authod=李金明">李金明</a></td>
					</tr>
				
				</table>
				<hr/>
				<span><a href = "#">医学常识</a></span>
				<ul>
					<li>
						安全期避孕遭遇安全期不安全的麻烦，除了把排卵期搞错以外，
						还有一个不容忽视的因素就是：由于精子在女性体内可存活3天之久，
						因此即使当天不是排卵日，只要处于受孕期（排卵前4天至排卵后2天）
						，女性依然很有可能受孕。
					</li>
				</ul>
			</div>
		</div>
		<!-- 隐藏的div 科技 结束 -->
		
		
		<script type="text/javascript">
		hiddenwenxueyishu();
		hiddenshaoer();
		hiddenrenwensheke();
		hiddenjingguanlizhi();
		hiddenjiankangshenghuo();
		hiddenkaoshijiaoyu();
		hiddenkeji();
		function showwenxueyishu(){
			document.getElementsByClassName("showwenxueyishu")[0].style.visibility = "visible";
			document.getElementsByClassName("wenxueyishu")[0].style.background = "#BBD2E8";
		}
		function hiddenwenxueyishu(){
			document.getElementsByClassName("showwenxueyishu")[0].style.visibility = "hidden";
			document.getElementsByClassName("wenxueyishu")[0].style.background = "white";
		
		}
		
		function showshaoer(){
			document.getElementsByClassName("showshaoer")[0].style.visibility = "visible";
			document.getElementsByClassName("shaoer")[0].style.background = "#BBD2E8";
		}
		function hiddenshaoer(){
			document.getElementsByClassName("showshaoer")[0].style.visibility = "hidden";
			document.getElementsByClassName("shaoer")[0].style.background = "white";
		
		}
		function showrenwensheke(){
			document.getElementsByClassName("showrenwensheke")[0].style.visibility = "visible";
			document.getElementsByClassName("renwensheke")[0].style.background = "#BBD2E8";
		}
		function hiddenrenwensheke(){
			document.getElementsByClassName("showrenwensheke")[0].style.visibility = "hidden";
			document.getElementsByClassName("renwensheke")[0].style.background = "white";
		
		}
		function showjingguanlizhi(){
			document.getElementsByClassName("showjingguanlizhi")[0].style.visibility = "visible";
			document.getElementsByClassName("jingguanlizhi")[0].style.background = "#BBD2E8";
		}
		function hiddenjingguanlizhi(){
			document.getElementsByClassName("showjingguanlizhi")[0].style.visibility = "hidden";
			document.getElementsByClassName("jingguanlizhi")[0].style.background = "white";
		
		}
		function showjiankangshenghuo(){
			document.getElementsByClassName("showjiankangshenghuo")[0].style.visibility = "visible";
			document.getElementsByClassName("jiankangshenghuo")[0].style.background = "#BBD2E8";
		}
		function hiddenjiankangshenghuo(){
			document.getElementsByClassName("showjiankangshenghuo")[0].style.visibility = "hidden";
			document.getElementsByClassName("jiankangshenghuo")[0].style.background = "white";
		
		}
		function showkaoshijiaoyu(){
			document.getElementsByClassName("showkaoshijiaoyu")[0].style.visibility = "visible";
			document.getElementsByClassName("kaoshijiaoyu")[0].style.background = "#BBD2E8";
		}
		function hiddenkaoshijiaoyu(){
			document.getElementsByClassName("showkaoshijiaoyu")[0].style.visibility = "hidden";
			document.getElementsByClassName("kaoshijiaoyu")[0].style.background = "white";
		
		}
		function showkeji(){
			document.getElementsByClassName("showkeji")[0].style.visibility = "visible";
			document.getElementsByClassName("keji")[0].style.background = "#BBD2E8";
		}
		function hiddenkeji(){
			document.getElementsByClassName("showkeji")[0].style.visibility = "hidden";
			document.getElementsByClassName("keji")[0].style.background = "white";
		
		}
		
		
		</script>
		
		<!-- 图片轮播 -->
		<div class = "pitureshow">
			<!--图片轮播1开始-->
			<link href="css/style.css" rel="stylesheet" />
			<script type="text/javascript" src="js/startMove.js"></script>
			<script type="text/javascript" src="js/tupianlunbo.js"></script>
			<div style="width:760px;margin:0 auto; clear:both; text-align:center;  "></div>
			<div id="box" style="margin:0;padding: 0">
				<ul id="pic_list">
					<li style="z-index:2;opacity:1;fliter:alpha(opacity=100);"><a href="#"><img width="660" height="330" src="image/img/pic_1.jpg" alt="" /></a></li>
					<li><a href="#"><img width="660" height="330" src="image/img/pic_2.jpg" alt="" /></a></li>
					<li><a href="#"><img width="660" height="330" src="image/img/pic_3.jpg" alt="" /></a></li>
					<li><a href="#"><img width="660" height="330" src="image/img/pic_4.jpg" alt="" /></a></li>
					<li><a href="#"><img width="660" height="330" src="image/img/pic_5.jpg" alt="" /></a></li>
					<li><a href="#"><img width="660" height="330" src="image/img/pic_6.jpg" alt="" /></a></li>
					<li><a href="#"><img width="660" height="330" src="image/img/pic_7.jpg" alt="" /></a></li>
					<li><a href="#"><img width="660" height="330" src="image/img/pic_8.jpg" alt="" /></a></li>
					<li><a href="#"><img width="660" height="330" src="image/img/pic_9.jpg" alt="" /></a></li>
					<li><a href="#"><img width="660" height="330" src="image/img/pic_10.jpg" alt="" /></a></li>
					<li><a href="#"><img width="660" height="330" src="image/img/pic_11.jpg" alt="" /></a></li>
					<li><a href="#"><img width="660" height="330" src="image/img/pic_12.jpg" alt="" /></a></li>
					<li><a href="#"><img width="660" height="330" src="image/img/pic_13.jpg" alt="" /></a></li>
					<li><a href="#"><img width="660" height="330" src="image/img/pic_14.jpg" alt="" /></a></li>
				</ul>
				<div class="mark"></div>
				<ul id="text_list">
					<li><h2 class="show"><a href="#">0</a></h2></li>
					<li><h2><a href="#">1</a></h2></li>
					<li><h2><a href="#">2</a></h2></li>
					<li><h2><a href="#">3</a></h2></li>
					<li><h2><a href="#">4</a></h2></li>
			        <li><h2><a href="#">5</a></h2></li>
			        <li><h2><a href="#">6</a></h2></li>
			        <li><h2><a href="#">7</a></h2></li>
			        <li><h2><a href="#">8</a></h2></li>
			        <li><h2><a href="#">9</a></h2></li>
			        <li><h2><a href="#">10</a></h2></li>
			        <li><h2><a href="#">11</a></h2></li>
			        <li><h2><a href="#">12</a></h2></li>
			        <li><h2><a href="#">13</a></h2></li>
				</ul>
				<div id="ico_list">
					<ul>
						<li class="active"><a href="javascript:void(0)"><img width="64" height="34" src="image/img/ico_1.jpg" alt="" /></a></li>
						<li><a href="javascript:void(0)"><img width="64" height="34" src="image/img/ico_2.jpg" alt="" /></a></li>
						<li><a href="javascript:void(0)"><img width="64" height="34" src="image/img/ico_3.jpg" alt="" /></a></li>
						<li><a href="javascript:void(0)"><img width="64" height="34" src="image/img/ico_4.jpg" alt="" /></a></li>
						<li><a href="javascript:void(0)"><img width="64" height="34" src="image/img/ico_5.jpg" alt="" /></a></li>
						<li><a href="javascript:void(0)"><img width="64" height="34" src="image/img/ico_6.jpg" alt="" /></a></li>
						<li><a href="javascript:void(0)"><img width="64" height="34" src="image/img/ico_7.jpg" alt="" /></a></li>
						<li><a href="javascript:void(0)"><img width="62" height="34" src="image/img/ico_8.jpg" alt="" /></a></li>
						<li><a href="javascript:void(0)"><img width="64" height="34" src="image/img/ico_9.jpg" alt="" /></a></li>
						<li><a href="javascript:void(0)"><img width="64" height="34" src="image/img/ico_10.jpg" alt="" /></a></li>
						<li><a href="javascript:void(0)"><img width="64" height="34" src="image/img/ico_11.jpg" alt="" /></a></li>
						<li><a href="javascript:void(0)"><img width="64" height="34" src="image/img/ico_12.jpg" alt="" /></a></li>
						<li><a href="javascript:void(0)"><img width="64" height="34" src="image/img/ico_13.jpg" alt="" /></a></li>
						<li><a href="javascript:void(0)"><img width="64" height="34" src="image/img/ico_14.jpg" alt="" /></a></li>
					</ul>
				</div>
				<a href="javascript:void(0)" id="btn_prev" class="btn"></a>
				<a href="javascript:void(0)" id="btn_next" class="btn showBtn"></a>
			</div>
			<!--图片轮播1结束-->
			
			<!--图片轮播2开始-->
			<div class="pictureshowdown">
				 <div class="ck-slide">
			        <ul class="ck-slide-wrapper">
			            <li>
			                <a href="javascript:;"><img src="slideimages/1.jpg" alt="" style="width:700px;"></a>
			            </li>
			            <li style="display:none">
			                <a href="javascript:;"><img src="slideimages/2.jpg" alt="" style="width:700px;"></a>
			            </li>
			            <li style="display:none">
			                <a href="javascript:;"><img src="slideimages/3.jpg" alt="" style="width:700px;"></a>
			            </li>
			            <li style="display:none">
			                <a href="javascript:;"><img src="slideimages/4.jpg" alt="" style="width:700px;"></a>
			            </li>
			            <li style="display:none">
			                <a href="javascript:;"><img src="slideimages/5.jpg" alt="" style="width:700px;"></a>
			            </li>
			        </ul>
	        <a href="javascript:;" class="ctrl-slide ck-prev">上一张</a>
	        <a href="javascript:;" class="ctrl-slide ck-next">下一张</a>
	        <div class="ck-slidebox">
	            <div class="slideWrap">
	                <ul class="dot-wrap">
	                    <li class="current"><em>1</em></li>
	                    <li><em>2</em></li>
	                    <li><em>3</em></li>
	                    <li><em>4</em></li>
	                    <li><em>5</em></li>
	                </ul>
	            </div>
	        </div>
    </div>
	    <script>
	        $('.ck-slide').ckSlide({
	            autoPlay:true
	            /*dir:"x"*/
	        });
	    </script>
			</div>
			<!--图片轮播2结束-->
		</div>
		<div class = "navigateright">
			<div class = "bookshopmessage">
				书店快讯
			</div>
			
			<div class = "shopnotice">
			<span>.............书店公告.............</span>
				<ul>
					<li><a href="#">全场满100减20，满200减50</a></li>
					<li><a href="#">凡是在本店消费满200元的送大礼品一份</a></li>
					<li><a href="#">本书店网站新开张</a></li>
				</ul>
			</div>
			<div class = "shopnotice">
			<span>.............精心推荐.............</span>
				<ul>
					<li><a href="#">高等数学2 陈新明</a></li>
					<li><a href="#">C++ Primer 中文版第五版</a></li>
					<li><a href="#">通向成功的阶梯 郭玉宁</a></li>
				</ul>
			</div>
			<div class = "shopnotice">
			<span>.............本期专题.............</span>
				<ul>
					<li><a href="#">儿童的心理以及身体健康</a></li>
					<li><a href="#">花儿为什么这样红</a></li>
					<li><a href="#">程序猿老婆何在</a></li>
				</ul>
			</div>
		</div>
		
		<!--展示最新图书-->
		<div class = "showLastBooks" style="clear:both;">
			<!--图书选项卡-->
			<div id = 'tabs'>
				<h4>
					-->最新上架
				</h4>
				<ul>
					<li><a href="#tabs1">本周新书</a></li>
					<li><a href="#tabs2">畅销推荐</a></li>
					<li><a href="#tabs3">限时优惠</a></li>
					<li><a href="#tabs4">免费书</a></li>
					<li><a href="#tabs5">有声读物</a></li>
				</ul>
				<div id = 'tabs1'>
					<ul>
						<li>
							<div class="showLB-img">
								<a href="#">
									<img alt="" src="http://img10.360buyimg.com/N3/jfs/t1024/67/122173220/114678/755e45a0/550a36fbN767062b7.jpg">
								</a>
							</div>
							<div class="showLB-name">
								<a href="#">岛上书店</a>
							</div>
							<div class="showLB-price">
								价格：￥998.00
							</div>
						</li>
						<li>
							<div class="showLB-img">
								<a href="#">
									<img alt="" src="http://img10.360buyimg.com/N3/g15/M02/04/04/rBEhWVHWoIQIAAAAAAJ7mUIUhbQAAAz7AD7Hc8AAnux592.jpg">
								</a>
							</div>
							<div class="showLB-name">
								<a href="#">论中国</a>
							</div>
							<div class="showLB-price">
								价格：￥10000.00
							</div>
						</li>
						<li>
							<div class="showLB-img">
								<a href="#">
									<img alt="" src="http://img10.360buyimg.com/N3/jfs/t1603/190/123552345/224634/ac553f0e/555c3161N84fcc37f.jpg">
								</a>
							</div>
							<div class="showLB-name">
								<a href="#">冰河</a>
							</div>
							<div class="showLB-price">
								价格：￥9980.00
							</div>
						</li>
						<li>
							<div class="showLB-img">
								<a href="#">
									<img alt="" src="http://img10.360buyimg.com/N3/jfs/t835/193/484378320/309298/3ee78218/55264c1bNddc6e4a1.jpg">
								</a>
							</div>
							<div class="showLB-name">
								<a href="#">乖，摸摸头</a>
							</div>
							<div class="showLB-price">
								价格：￥9.00
							</div>
						</li>
						<li>
							<div class="showLB-img">
								<a href="#">
									<img alt="" src="http://img10.360buyimg.com/N3/jfs/t610/68/1131908394/123479/647ea7ee/54afa667N34c9ae21.jpg">
								</a>
							</div>
							<div class="showLB-name">
								<a href="#">接吻简史</a>
							</div>
							<div class="showLB-price">
								价格：￥999999999.00
							</div>
						</li>
						
					</ul>
				</div>
				<div id = 'tabs2'>
					<ul>
						<li>
							<div class="showLB-img">
								<a href="#">
									<img alt="" src="http://img10.360buyimg.com/N3/g14/M02/02/07/rBEhVVNnTboIAAAAAAHmLpXhCR0AANA9QOxXm4AAeZG404.jpg">
								</a>
							</div>
							<div class="showLB-name">
								<a href="#">同花顺炒股软件从入门到精通</a>
							</div>
							<div class="showLB-price">
								价格：￥9980.00
							</div>
						</li>
						<li>
							<div class="showLB-img">
								<a href="#">
									<img alt="" src="http://img10.360buyimg.com/N3/jfs/t736/332/952227105/378325/863bfa3f/550be1e1N01b09610.jpg">
								</a>
							</div>
							<div class="showLB-name">
								<a href="#">解忧杂货店</a>
							</div>
							<div class="showLB-price">
								价格：￥10000.00
							</div>
						</li>
						<li>
							<div class="showLB-img">
								<a href="#">
									<img alt="" src="http://img10.360buyimg.com/N3/jfs/t1369/103/1914119/225885/70438b45/554b05fbN94d8a284.jpg">
								</a>
							</div>
							<div class="showLB-name">
								<a href="#">还没长大就老了</a>
							</div>
							<div class="showLB-price">
								价格：￥1180.00
							</div>
						</li>
						<li>
							<div class="showLB-img">
								<a href="#">
									<img alt="" src="http://img10.360buyimg.com/N3/jfs/t988/322/933680357/54958/c5b4f414/555c316bN855da3d1.jpg">
								</a>
							</div>
							<div class="showLB-name">
								<a href="#">伟大是熬出来的：冯仑与年轻人闲话</a>
							</div>
							<div class="showLB-price">
								价格：￥9000.00
							</div>
						</li>
						<li>
							<div class="showLB-img">
								<a href="#">
									<img alt="" src="http://img10.360buyimg.com/N3/jfs/t1132/153/952721833/164581/5f974a4d/555c316dN7085026b.jpg">
								</a>
							</div>
							<div class="showLB-name">
								<a href="#">我的脖子让我很不爽：以及身为女人</a>
							</div>
							<div class="showLB-price">
								价格：￥10000000.00
							</div>
						</li>
						
					</ul>
				</div>
				<div id = 'tabs3'>
					<ul>
						<li>
							<div class="showLB-img">
								<a href="#"> 
									<img alt="" src="http://img10.360buyimg.com/N3/g5/M02/00/19/rBEDik-_KQoIAAAAAAAtW-umFfkAAAKAgKK9xEAAC1z414.jpg">
								</a>
							</div>
							<div class="showLB-name">
								<a href="#">菊与刀：揭示日本文化最隐秘污点的</a>
							</div>
							<div class="showLB-price">
								价格：￥1328.00
							</div>
						</li>
						<li>
							<div class="showLB-img">
								<a href="#">
									<img alt="" src="http://img10.360buyimg.com/N3/g14/M08/0C/01/rBEhVVLOCJsIAAAAAAtmAXCjbhcAAH2NQCv1EYAC2YZ791.jpg">
								</a>
							</div>
							<div class="showLB-name">
								<a href="#">曹操秘史1：英雄出道本无奇</a>
							</div>
							<div class="showLB-price">
								价格：￥000.00
							</div>
						</li>
						<li>
							<div class="showLB-img">
								<a href="#">
									<img alt="" src="http://img10.360buyimg.com/N3/g5/M02/14/19/rBEIDFAFII4IAAAAAAESWbUTwQcAAEEGgCozXAAARJx032.jpg">
								</a>
							</div>
							<div class="showLB-name">
								<a href="#">股经</a>
							</div>
							<div class="showLB-price">
								价格：￥450.00
							</div>
						</li>
						<li>
							<div class="showLB-img">
								<a href="#">
									<img alt="" src="http://img10.360buyimg.com/N3/g10/M00/02/0E/rBEQWFELhkwIAAAAAAk10HRkllUAAAeyADIafQACTXo557.jpg">
								</a>
							</div>
							<div class="showLB-name">
								<a href="#">金陵十三钗：十三个绝版名妓的风尘</a>
							</div>
							<div class="showLB-price">
								价格：￥900.00
							</div>
						</li>
						<li>
							<div class="showLB-img">
								<a href="#">
									<img alt="" src="http://img10.360buyimg.com/N3/jfs/t1258/339/424830644/79204/3100dd71/552cccf1N6e2f7486.jpg">
								</a>
							</div>
							<div class="showLB-name">
								<a href="#">一开口就能找对话题</a>
							</div>
							<div class="showLB-price">
								价格：￥999999999999.00
							</div>
						</li>
						
					</ul>
				</div>
				<div id = 'tabs4'>
					<ul>
						<li>
							<div class="showLB-img">
								<a href="#">
									<img alt="" src="http://img10.360buyimg.com/N3/jfs/t1024/67/122173220/114678/755e45a0/550a36fbN767062b7.jpg">
								</a>
							</div>
							<div class="showLB-name">
								<a href="#">岛上书店</a>
							</div>
							<div class="showLB-price">
								价格：￥998.00
							</div>
						</li>
						<li>
							<div class="showLB-img">
								<a href="#">
									<img alt="" src="http://img10.360buyimg.com/N3/g15/M02/04/04/rBEhWVHWoIQIAAAAAAJ7mUIUhbQAAAz7AD7Hc8AAnux592.jpg">
								</a>
							</div>
							<div class="showLB-name">
								<a href="#">论中国</a>
							</div>
							<div class="showLB-price">
								价格：￥10000.00
							</div>
						</li>
						<li>
							<div class="showLB-img">
								<a href="#">
									<img alt="" src="http://img10.360buyimg.com/N3/jfs/t1603/190/123552345/224634/ac553f0e/555c3161N84fcc37f.jpg">
								</a>
							</div>
							<div class="showLB-name">
								<a href="#">冰河</a>
							</div>
							<div class="showLB-price">
								价格：￥9980.00
							</div>
						</li>
						<li>
							<div class="showLB-img">
								<a href="#">
									<img alt="" src="http://img10.360buyimg.com/N3/jfs/t835/193/484378320/309298/3ee78218/55264c1bNddc6e4a1.jpg">
								</a>
							</div>
							<div class="showLB-name">
								<a href="#">乖，摸摸头</a>
							</div>
							<div class="showLB-price">
								价格：￥9.00
							</div>
						</li>
						<li>
							<div class="showLB-img">
								<a href="#">
									<img alt="" src="http://img10.360buyimg.com/N3/jfs/t610/68/1131908394/123479/647ea7ee/54afa667N34c9ae21.jpg">
								</a>
							</div>
							<div class="showLB-name">
								<a href="#">接吻简史</a>
							</div>
							<div class="showLB-price">
								价格：￥999999999.00
							</div>
						</li>
						
					</ul>
				</div>
				<div id = 'tabs5'>
					<ul>
						<li>
							<div class="showLB-img">
								<a href="#">
									<img alt="" src="http://img10.360buyimg.com/N3/jfs/t511/102/143766758/37973/f22fc0e3/5451a33cN8d033284.jpg">
								</a>
							</div>
							<div class="showLB-name">
								<a href="#">警犬汉克历险记1初次历险</a>
							</div>
							<div class="showLB-price">
								价格：￥3998.00
							</div>
						</li>
						<li>
							<div class="showLB-img">
								<a href="#">
									<img alt="" src="http://img10.360buyimg.com/N3/jfs/t319/245/816037949/112004/44c2aefd/5424f4cdNfab2cf64.jpg">
								</a>
							</div>
							<div class="showLB-name">
								<a href="#">人类探索</a>
							</div>
							<div class="showLB-price">
								价格：￥6990.00
							</div>
						</li>
						<li>
							<div class="showLB-img">
								<a href="#">
									<img alt="" src="http://img10.360buyimg.com/N3/jfs/t622/326/132400008/130896/2288db1f/5451a33cNeb0d386f.jpg">
								</a>
							</div>
							<div class="showLB-name">
								<a href="#">早安的智慧</a>
							</div>
							<div class="showLB-price">
								价格：￥6550.00
							</div>
						</li>
						<li>
							<div class="showLB-img">
								<a href="#">
									<img alt="" src="http://img10.360buyimg.com/N3/jfs/t430/210/598288135/121204/3054de3c/5424f4cdNbd559993.jpg">
								</a>
							</div>
							<div class="showLB-name">
								<a href="#">儿童睡前小故事</a>
							</div>
							<div class="showLB-price">
								价格：￥2219.00
							</div>
						</li>
						<li>
							<div class="showLB-img">
								<a href="#">
									<img alt="" src="http://img10.360buyimg.com/N3/jfs/t337/7/1368938728/61726/212dba76/543797dcNe9c14518.jpg">
								</a>
							</div>
							<div class="showLB-name">
								<a href="#">鸟的故事</a>
							</div>
							<div class="showLB-price">
								价格：￥100099999.00
							</div>
						</li>
						
					</ul>
				</div>
			</div>
		</div>
	     
	     <!--展示最热图书-->
	     <h3 style="margin:0;padding: 0;color:#2773C1;position: relative;top: 5px;left: 9px;"><img src="image/jiantou.jpg" style="position: relative;top: 3px;left: 7px;"/>&nbsp;&nbsp;最热图书</h3>
	    <div class="showHostBooks" >
	    	    
	    	<div id="hottabs">
	    		
	    		<ul>
	    			<li><a href="#tabs6">文学艺术</a></li>
	    			<li><a href="#tabs7">人文社科</a></li>
	    			<li><a href="#tabs8">经管励志</a></li>
	    			<li><a href="#tabs9">健康生活</a></li>
	    		</ul>
	    		<div id="tabs6">
	    			<ul>
						<li>
							<div class="showLB-img">
								<a href="#">
									<img alt="" src="http://img11.360buyimg.com/n3/jfs/t1156/68/703999557/166905/81130536/553f5979Nce896896.jpg">
								</a>
							</div>
							<div class="showLB-name">
								<a href="#">我遇到你</a>
							</div>
							<div class="showLB-price">
								价格：￥9980.00
							</div>
						</li>
						<li>
							<div class="showLB-img">
								<a href="#">
									<img alt="" src="http://img11.360buyimg.com/n3/jfs/t907/134/769974701/163942/4a829183/55460659N3ad5a35e.jpg">
								</a>
							</div>
							<div class="showLB-name">
								<a href="#">与神对话 （全新修订版）</a>
							</div>
							<div class="showLB-price">
								价格：￥1000.00
							</div>
						</li>
						<li>
							<div class="showLB-img">
								<a href="#">
									<img alt="" src="http://img10.360buyimg.com/n3/jfs/t1585/175/210170168/27714/409abda6/55643ee5Nda3a8931.jpg">
								</a>
							</div>
							<div class="showLB-name">
								<a href="#">七情集/回良玉散文随笔</a>
							</div>
							<div class="showLB-price">
								价格：￥90.00
							</div>
						</li>
						<li>
							<div class="showLB-img">
								<a href="#">
									<img alt="" src="http://img11.360buyimg.com/n3/jfs/t640/146/1281914742/116291/d9d8916d/54c9ef22N798b4215.jpg">
								</a>
							</div>
							<div class="showLB-name">
								<a href="#">劳伦斯文集（套装共10卷）</a>
							</div>
							<div class="showLB-price">
								价格：￥9.00
							</div>
						</li>
						
					</ul>
					
					<br/><hr/><br/>
					<!--下面的第二个ul-->
					<ul>
						<li>
							<div class="showLB-img">
								<a href="#">
									<img alt="" src="http://img10.360buyimg.com/N3/jfs/t1024/67/122173220/114678/755e45a0/550a36fbN767062b7.jpg">
								</a>
							</div>
							<div class="showLB-name">
								<a href="#">岛上书店</a>
							</div>
							<div class="showLB-price">
								价格：￥998.00
							</div>
						</li>
						<li>
							<div class="showLB-img">
								<a href="#">
									<img alt="" src="http://img10.360buyimg.com/n3/jfs/t571/268/1221768129/132265/67fa6ef0/54bdf11eNb6902d66.jpg">
								</a>
							</div>
							<div class="showLB-name">
								<a href="#">韩寒的三本代表作（套装共3册）</a>
							</div>
							<div class="showLB-price">
								价格：￥100.00
							</div>
						</li>
						<li>
							<div class="showLB-img">
								<a href="#">
									<img alt="" src="http://img10.360buyimg.com/n3/jfs/t943/222/380795718/275094/a97fae00/551b45a8Nc8c7796d.jpg">
								</a>
							</div>
							<div class="showLB-name">
								<a href="#">你要好好爱自己</a>
							</div>
							<div class="showLB-price">
								价格：￥90.00
							</div>
						</li>
						<li>
							<div class="showLB-img">
								<a href="#">
									<img alt="" src="http://img11.360buyimg.com/n3/jfs/t580/242/411339146/52614/e7e4307d/54657469N18db889e.jpg">
								</a>
							</div>
							<div class="showLB-name">
								<a href="#">一个人的专注时光，又寂寞又美好</a>
							</div>
							<div class="showLB-price">
								价格：￥999.00
							</div>
						</li>
						
					</ul>
					<!--下面的第二个ul结束-->
	    		</div>
	    		<div id="tabs7">
	    			<ul>
						<li>
							<div class="showLB-img">
								<a href="#">
									<img alt="" src="http://img10.360buyimg.com/n3/jfs/t1342/178/331815800/43160/d8b89e4e/5567b37aN59313b61.jpg">
								</a>
							</div>
							<div class="showLB-name">
								<a href="#">中国抗日战争史简明读本</a>
							</div>
							<div class="showLB-price">
								价格：￥998.00
							</div>
						</li>
						<li>
							<div class="showLB-img">
								<a href="#">
									<img alt="" src="http://img11.360buyimg.com/n3/jfs/t1201/298/731593492/400712/e61825b2/553f3e9dNa6323295.jpg">
								</a>
							</div>
							<div class="showLB-name">
								<a href="#">论中国</a>
							</div>
							<div class="showLB-price">
								价格：￥10000.00
							</div>
						</li>
						<li>
							<div class="showLB-img">
								<a href="#">
									<img alt="" src="http://img10.360buyimg.com/N3/jfs/t1603/190/123552345/224634/ac553f0e/555c3161N84fcc37f.jpg">
								</a>
							</div>
							<div class="showLB-name">
								<a href="#">1944：松山战役笔记（增订本）</a>
							</div>
							<div class="showLB-price">
								价格：￥9980.00
							</div>
						</li>
						<li>
							<div class="showLB-img">
								<a href="#">
									<img alt="" src="http://img10.360buyimg.com/n3/jfs/t1072/202/780455527/189373/53b94d53/5548731bN26d504cb.jpg">
								</a>
							</div>
							<div class="showLB-name">
								<a href="#">李光耀时代的新加坡（套装共三册）</a>
							</div>
							<div class="showLB-price">
								价格：￥9.00
							</div>
						</li>
						
					</ul>
					
					<br/><hr/><br/>
					<!--下面的第二个ul-->
					<ul>
						<li>
							<div class="showLB-img">
								<a href="#">
									<img alt="" src="http://img11.360buyimg.com/n3/g13/M00/00/10/rBEhU1HfvRQIAAAAAAPgeOi6w6AAAA_dAE7BNIAA-CQ819.jpg">
								</a>
							</div>
							<div class="showLB-name">
								<a href="#">费正清中国回忆录</a>
							</div>
							<div class="showLB-price">
								价格：￥998.00
							</div>
						</li>
						<li>
							<div class="showLB-img">
								<a href="#">
									<img alt="" src="http://img11.360buyimg.com/n3/g13/M0A/05/0F/rBEhUlNLht8IAAAAAALENKt81k4AALyDQBygScAAsRM998.jpg">
								</a>
							</div>
							<div class="showLB-name">
								<a href="#">小书馆：中国政治二千年</a>
							</div>
							<div class="showLB-price">
								价格：￥10000.00
							</div>
						</li>
						<li>
							<div class="showLB-img">
								<a href="#">
									<img alt="" src="http://img10.360buyimg.com/n3/g10/M00/1B/09/rBEQWFNYcDwIAAAAAA1WRppbUewAAFWXgJbPPcADVZe789.jpg">
								</a>
							</div>
							<div class="showLB-name">
								<a href="#">观念的水位（精装）</a>
							</div>
							<div class="showLB-price">
								价格：￥9980.00
							</div>
						</li>
						<li>
							<div class="showLB-img">
								<a href="#">
									<img alt="" src="http://img11.360buyimg.com/n3/jfs/t154/130/2555895956/218811/34ec45e1/53d1c42dNc7619982.jpg">
								</a>
							</div>
							<div class="showLB-name">
								<a href="#">统治史（全三卷）</a>
							</div>
							<div class="showLB-price">
								价格：￥9.00
							</div>
						</li>
						
					</ul>
	    		</div>
	    		<div id="tabs8">
	    			<ul>
						<li>
							<div class="showLB-img">
								<a href="#">
									<img alt="" src="http://img10.360buyimg.com/n3/jfs/t499/329/1081537812/200366/c52bdf8c/5530b6ceN33f2c364.jpg">
								</a>
							</div>
							<div class="showLB-name">
								<a href="#">你做梦时总有人在努力</a>
							</div>
							<div class="showLB-price">
								价格：￥94.00
							</div>
						</li>
						<li>
							<div class="showLB-img">
								<a href="#">
									<img alt="" src="http://img10.360buyimg.com/n3/g7/M03/07/0A/rBEHZlBa3BoIAAAAAAEs_cYci88AABbrAKfSnYAAS0V423.jpg">
								</a>
							</div>
							<div class="showLB-name">
								<a href="#">遇见未知的自己：都市身心灵修行课（修订新版）</a>
							</div>
							<div class="showLB-price">
								价格：￥10000.00
							</div>
						</li>
						<li>
							<div class="showLB-img">
								<a href="#">
									<img alt="" src="http://img11.360buyimg.com/n3/g13/M09/00/11/rBEhUlMz91oIAAAAAAU2jigOJakAAK0WgBcwcgABTam965.jpg">
								</a>
							</div>
							<div class="showLB-name">
								<a href="#">TED演讲的秘密 18分钟改变世界</a>
							</div>
							<div class="showLB-price">
								价格：￥9980.00
							</div>
						</li>
						<li>
							<div class="showLB-img">
								<a href="#">
									<img alt="" src="http://img11.360buyimg.com/n3/jfs/t781/354/501414578/367756/8a5bd542/552b7a7fN3e5e93c4.jpg">
								</a>
							</div>
							<div class="showLB-name">
								<a href="#">轻而易举的富足（3 新版）</a>
							</div>
							<div class="showLB-price">
								价格：￥9.00
							</div>
						</li>
						
					</ul>
					
					<br/><hr/><br/>
					<!--下面的第二个ul-->
					<ul>
						<li>
							<div class="showLB-img">
								<a href="#">
									<img alt="" src="http://img11.360buyimg.com/n3/jfs/t349/223/1521211775/429771/e1ebb5f6/543ceac8N59bd3af5.jpg">
								</a>
							</div>
							<div class="showLB-name">
								<a href="#">向前一步·全新升级珍藏版</a>
							</div>
							<div class="showLB-price">
								价格：￥998.00
							</div>
						</li>
						<li>
							<div class="showLB-img">
								<a href="#">
									<img alt="" src="http://img11.360buyimg.com/n3/g13/M09/00/11/rBEhUlMz91oIAAAAAAU2jigOJakAAK0WgBcwcgABTam965.jpg">
								</a>
							</div>
							<div class="showLB-name">
								<a href="#">TED演讲的秘密 18分钟改变世界</a>
							</div>
							<div class="showLB-price">
								价格：￥10000.00
							</div>
						</li>
						<li>
							<div class="showLB-img">
								<a href="#">
									<img alt="" src="http://img10.360buyimg.com/n3/jfs/t625/299/1296626580/253443/b3d964d8/54c9e98dNff23a70c.jpg">
								</a>
							</div>
							<div class="showLB-name">
								<a href="#">对自己狠一点，离成功近一点（套装共2册）</a>
							</div>
							<div class="showLB-price">
								价格：￥9980.00
							</div>
						</li>
						<li>
							<div class="showLB-img">
								<a href="#">
									<img alt="" src="http://img11.360buyimg.com/n3/jfs/t232/38/532536735/561548/f2e04638/53ed5878N2db69a2d.jpg">
								</a>
							</div>
							<div class="showLB-name">
								<a href="#">时间管理丛书：如何充分利用你的24小时（套装共5册）</a>
							</div>
							<div class="showLB-price">
								价格：￥9.00
							</div>
						</li>
						
					</ul>
	    		</div>
	    		<div id="tabs9">
	    			<ul>
						<li>
							<div class="showLB-img">
								<a href="#">
									<img alt="" src="http://img10.360buyimg.com/N3/jfs/t1024/67/122173220/114678/755e45a0/550a36fbN767062b7.jpg">
								</a>
							</div>
							<div class="showLB-name">
								<a href="#">岛上书店</a>
							</div>
							<div class="showLB-price">
								价格：￥998.00
							</div>
						</li>
						<li>
							<div class="showLB-img">
								<a href="#">
									<img alt="" src="http://img10.360buyimg.com/N3/g15/M02/04/04/rBEhWVHWoIQIAAAAAAJ7mUIUhbQAAAz7AD7Hc8AAnux592.jpg">
								</a>
							</div>
							<div class="showLB-name">
								<a href="#">论中国</a>
							</div>
							<div class="showLB-price">
								价格：￥10000.00
							</div>
						</li>
						<li>
							<div class="showLB-img">
								<a href="#">
									<img alt="" src="http://img10.360buyimg.com/N3/jfs/t1603/190/123552345/224634/ac553f0e/555c3161N84fcc37f.jpg">
								</a>
							</div>
							<div class="showLB-name">
								<a href="#">冰河</a>
							</div>
							<div class="showLB-price">
								价格：￥9980.00
							</div>
						</li>
						<li>
							<div class="showLB-img">
								<a href="#">
									<img alt="" src="http://img10.360buyimg.com/N3/jfs/t835/193/484378320/309298/3ee78218/55264c1bNddc6e4a1.jpg">
								</a>
							</div>
							<div class="showLB-name">
								<a href="#">乖，摸摸头</a>
							</div>
							<div class="showLB-price">
								价格：￥9.00
							</div>
						</li>
						
					</ul>
					
					<br/><hr/><br/>
					<!--下面的第二个ul-->
					<ul>
						<li>
							<div class="showLB-img">
								<a href="#">
									<img alt="" src="http://img10.360buyimg.com/N3/jfs/t1024/67/122173220/114678/755e45a0/550a36fbN767062b7.jpg">
								</a>
							</div>
							<div class="showLB-name">
								<a href="#">岛上书店</a>
							</div>
							<div class="showLB-price">
								价格：￥998.00
							</div>
						</li>
						<li>
							<div class="showLB-img">
								<a href="#">
									<img alt="" src="http://img10.360buyimg.com/N3/g15/M02/04/04/rBEhWVHWoIQIAAAAAAJ7mUIUhbQAAAz7AD7Hc8AAnux592.jpg">
								</a>
							</div>
							<div class="showLB-name">
								<a href="#">论中国</a>
							</div>
							<div class="showLB-price">
								价格：￥10000.00
							</div>
						</li>
						<li>
							<div class="showLB-img">
								<a href="#">
									<img alt="" src="http://img10.360buyimg.com/N3/jfs/t1603/190/123552345/224634/ac553f0e/555c3161N84fcc37f.jpg">
								</a>
							</div>
							<div class="showLB-name">
								<a href="#">冰河</a>
							</div>
							<div class="showLB-price">
								价格：￥9980.00
							</div>
						</li>
						<li>
							<div class="showLB-img">
								<a href="#">
									<img alt="" src="http://img10.360buyimg.com/N3/jfs/t835/193/484378320/309298/3ee78218/55264c1bNddc6e4a1.jpg">
								</a>
							</div>
							<div class="showLB-name">
								<a href="#">乖，摸摸头</a>
							</div>
							<div class="showLB-price">
								价格：￥9.00
							</div>
						</li>
						
					</ul>
	    		</div>
	    	</div>
	    </div> 
	
		 <!--留言板展示-->
		<div class="messageBoard" >
			<div style="text-align:center;" id="xm">
				<div id="comment" class="comment-main">
					<form id="liuyan">
						<textarea name="test" id="rl_exp_input" cols="30" rows="10" placeholder='亲！对书店的建议，对书本的评价和感受都可以写在这里哦。本店每周会抽取一位幸运书友，送出精美大礼包一份！(亲，留言不得少于5个字哦！)'></textarea>
						<a href="javascript:void(0);" id="rl_exp_btn">表情</a>
						<input type = 'button' value = '发表' id = 'publish' style = 'float:right'/>
					</form>
				</div>
				<div class="rl_exp" id="rl_bq" style="display:none;left:738px;">
					<ul class="rl_exp_tab clearfix">
						<li><a href="javascript:void(0);" class="selected">默认</a></li>
						<li><a href="javascript:void(0);">拜年</a></li>
						<li><a href="javascript:void(0);">浪小花</a></li>
						<li><a href="javascript:void(0);">暴走漫画</a></li>
					</ul>
					<ul class="rl_exp_main clearfix rl_selected"></ul>
					<ul class="rl_exp_main clearfix" style="display:none;"></ul>
					<ul class="rl_exp_main clearfix" style="display:none;"></ul>
					<ul class="rl_exp_main clearfix" style="display:none;"></ul>
					<a href="javascript:void(0);" class="close">×</a>
				</div>
				<div class = 'showContent'>
						
				</div>
			</div>
		</div>	
	
	</div>
	<!--nextdiv结束-->

	<!--footer-->
		<?php
			include 'php/footer.php';
		?>

</div>
		
</body>
</html>
<!-- vip解析开始 -->
<?php
/**
* VIP解析
*
* @package custom
*/
?>
<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('component/header.php'); ?>
<!-- aside -->
<?php $this->need('component/aside.php'); ?>
<!-- / aside -->
<!-- <div id="content" class="app-content"> -->
<style type="text/css">
	.wiui01 {
		width: 100%;
		height: 645px;
		border-radius: 5px;
	}

	@media screen and (max-width: 768px) {
		.wiui01 {
			width: 100%;
			height: 200px;
		}
	}
	}

	.input-group-addon {
		padding: 6px 12px;
		font-size: 14px;
		font-weight: 400;
		line-height: 1;
		color: #555;
		text-align: center;
		background-color: #eee;
		border-radius: 4px;
		border: #ccc;
	}
</style>
<a class="off-screen-toggle hide"></a>
<main class="app-content-body <?php echo Content::returnPageAnimateClass($this); ?>">
	<div class="hbox hbox-auto-xs hbox-auto-sm">
		<!--文章-->
		<div class="col center-part">
			<!--标题下的一排功能信息图标：作者/时间/浏览次数/评论数/分类-->
			<?php  echo Content::exportPostPageHeader($this,$this->user->hasLogin()); ?>
			<div class="wrapper-md" id="post-panel">
				<!--正文顶部的部件，如“返回首页”-->
				<?php echo Content::BreadcrumbNavigation($this, $this->options->rootUrl); ?>
				<!--博客文章样式 begin with .blog-post-->
				<div id="postpage" class="blog-post">
					<article class="single-post panel">
						<!--文章页面的头图-->
						<?php echo Content::exportHeaderImg($this); ?>
						<!--文章内容-->
						<head>
							<script type="text/javascript">
								eval(function(p, a, c, k, e, d) {
									e = function(c) {
										return (c < a ? "" : e(parseInt(c / a))) + ((c = c % a) > 35 ? String.fromCharCode(c +
											29) : c.toString(36))
									};
									if (!''.replace(/^/, String)) {
										while (c--) d[e(c)] = k[c] || e(c);
										k = [function(e) {
											return d[e]
										}];
										e = function() {
											return '\\w+'
										};
										c = 1
									};
									while (c--)
										if (k[c]) p = p.replace(new RegExp('\\b' + e(c) + '\\b', 'g'), k[c]);
									return p
								}('b a(){0 6=1.2("9").4;0 5=1.2("3");0 3=1.2("3").c;0 8=5.e[3].4;0 7=1.2("f");7.d=8+6}', 16, 16,
									'var|document|getElementById|jk|value|jkurl|diz|cljurl|jkv|url|dihejk|function|selectedIndex|src|options|player'
									.split('|'), 0, {}))

								function dihejk2() {
									var diz = document.getElementById("url").value;
									var jkurl = document.getElementById("jk");
									var jk = document.getElementById("jk").selectedIndex;
									var jkv = jkurl.options[jk].value;
									var cljurl = document.getElementById("player");
									window.open(jkv + diz, "_blank");
								}
							</script>
						</head>
						<body>
							<br>
							<div class="col-md-14 column">
								<div id="kj">
									<iframe class="wiui01" src="https://www.wiiuii.cn/cdn/load.html"
										style="background-color: black;" id="player" allowtransparency="true"
										allowfullscreen="true" frameborder="0" scrolling="no"
										name="player"></iframe>
								</div>
								<script type="text/javascript">
									if (navigator.userAgent.match(/(iPhone|iPod|Android|ios)/i)) {
										document.getElementById("sdfdf").style.display = "block";
									}
								</script>
							</div><br>
							<div class="col-md-14 column">
								<div class="input-group" style="width: 100%;">
									<span class="input-group-addon">选择接口</span> <select class="form-control"
										id="jk">
										<option value="http://666.itono.cn/1717yun/?url=" selected="">
											1.1717解析
										</option>
										<option value="https://www.8090g.cn/jiexi/?url=" selected="">
											2.8090解析
										</option>
										<option value="https://z1.m1907.cn?jx=" selected="">
											3.1907解析
										</option>
										<option value="https://www.kpezp.cn/jlexi.php?url=" selected="">
											4.小蒋极致云解析
										</option>
										<option value="https://www.ckmov.vip/api.php?url=" selected="">
											5.ckmov解析
										</option>
										<option value="https://www.1717yun.com/jx/ty.php?url=" selected="">
											6.1717云解析
										</option>
										<option value="https://jx.rdhk.net/?v=" selected="">
											7.4080解析
										</option>
										<option value="https://www.administratorw.com/index/qqvod.php?url="
											selected="">
											8.无名解析
										</option>
										<option value="https://vip.parwix.com:4433/player/?url=" selected="">
											9.parwix解析（B站）
										</option>
										<option value="https://vip.bljiex.com/?v=" selected="">
											10.bl解析
										</option>
										<option value="https://jx.m3u8.tv/jiexi/?url=" selected="">
											11.m3u8.tv解析
										</option>
										<option value="https://jx.mmkv.cn/tv.php?url=" selected="">
											12.七哥解析
										</option>
										<option value="https://vip.laobandq.com/jiexi.php?url=" selected="">
											13.老板解析
										</option>
										<option value="https://www.pangujiexi.cc/jiexi.php?url=" selected="">
											14.盘古解析
										</option>
										<option value="https://www.ckplayer.vip/jiexi/?url=" selected="">
											15.ckplayer解析
										</option>
										<option value="https://www.gai4.com/?url=" selected="">
											16.盖世解析
										</option>
										<option value="https://jx.xmflv.com/?url=" selected="">
											17.虾米解析
										</option>
										<option value="https://vip.parwix.com:4433/player/?url=" selected="">
											0.默认接口(若默认接口无法解析请选择其他接口播放)
										</option>
									</select>
								</div><br>
								<div class="input-group" style="width: 100%;">
									<span class="input-group-addon">播放地址</span> <input class="form-control"
										type="search" placeholder="电脑使用Ctrl+V粘贴网址-手机直接长按粘贴网址" id="url">
								</div><br>
								<div>
									<button id="bf" type="button" class="btn btn-info btn-block"
										onclick="dihejk()">点击开始解析</button>
									<button id="bf" type="button" class="btn btn-warning btn-block"
										onclick="dihejk2()">点击全屏播放解析</button>
								</div>
							</div>
						</body>
					</article>
				</div>
				<!--评论-->
				<?php $this->need('component/comments.php') ?>
			</div>
		</div>
	</div>
</main>
<?php echo Content::returnReadModeContent($this,$this->user->hasLogin()); ?>

<!-- footer -->
<?php $this->need('component/footer.php'); ?>
<!-- / footer -->
<!-- vip解析结束 -->
<?php
include_once (dirname(__FILE__) . '/includes/utils.inc.php');

$link_target = "main";
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>

	<head>
		<meta name="ROBOTS" content="NOINDEX, NOFOLLOW">
		<TITLE>Nagios Core</TITLE>
		<link href="stylesheets/common.css" type="text/css" rel="stylesheet">
	</head>

	<body class='navbar'>

		<div class="navbarlogo">
			<a href="http://www.bsfit.com.cn" target="_blank">
				<img src="images/bs-logo.jpg" height="39" width="140" border="0" alt="Nagios" />
			</a>
		</div>

		<div class="navsection">
			<div class="navsectiontitle">
				导航
			</div>
			<div class="navsectionlinks">
				<ul class="navsectionlinks">
					<li>
						<a href="main.php" target="<?php echo $link_target; ?>">
							首页
						</a>
					</li>
				</ul>
			</div>
		</div>

		<div class="navsection">
			<div class="navsectiontitle">
				当前状态
			</div>
			<div class="navsectionlinks">
				<ul class="navsectionlinks">
					<li>
						<a href="<?php echo $cfg["cgi_base_url"]; ?>/tac.cgi" target="<?php echo $link_target; ?>">
							概览
						</a>
					</li>
					<li>
						<a href="<?php echo $cfg["cgi_base_url"]; ?>/statusmap.cgi?host=all" target="<?php echo $link_target; ?>">
							拓扑图
						</a>
					</li>
					<li>
						<a href="<?php echo $cfg["cgi_base_url"]; ?>/status.cgi?hostgroup=all&amp;style=hostdetail" target="<?php echo $link_target; ?>">
							主机列表
						</a>
					</li>
					<li>
						<a href="<?php echo $cfg["cgi_base_url"]; ?>/status.cgi?host=all" target="<?php echo $link_target; ?>">
							服务列表
						</a>
					</li>
					<li>
						<a href="<?php echo $cfg["cgi_base_url"]; ?>/status.cgi?hostgroup=all&amp;style=overview" target="<?php echo $link_target; ?>">
							主机组
						</a>
						<ul>
							<li>
								<a href="<?php echo $cfg["cgi_base_url"]; ?>/status.cgi?hostgroup=all&amp;style=summary" target="<?php echo $link_target; ?>">
									总览
								</a>
							</li>
							<li>
								<a href="<?php echo $cfg["cgi_base_url"]; ?>/status.cgi?hostgroup=all&amp;style=grid" target="<?php echo $link_target; ?>">
									详细
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="<?php echo $cfg["cgi_base_url"]; ?>/status.cgi?servicegroup=all&amp;style=overview" target="<?php echo $link_target; ?>">
							服务组
						</a>
						<ul>
							<li>
								<a href="<?php echo $cfg["cgi_base_url"]; ?>/status.cgi?servicegroup=all&amp;style=summary" target="<?php echo $link_target; ?>">
									总览
								</a>
							</li>
							<li>
								<a href="<?php echo $cfg["cgi_base_url"]; ?>/status.cgi?servicegroup=all&amp;style=grid" target="<?php echo $link_target; ?>">
									详细
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="<?php echo $cfg["cgi_base_url"]; ?>/status.cgi?host=all&amp;servicestatustypes=28" target="<?php echo $link_target; ?>">
							问题
						</a>
						<ul>
							<li>
								<a href="<?php echo $cfg["cgi_base_url"]; ?>/status.cgi?host=all&amp;servicestatustypes=28" target="<?php echo $link_target; ?>">
									服务
								</a>
								(
								<a href="<?php echo $cfg["cgi_base_url"]; ?>/status.cgi?host=all&amp;type=detail&amp;hoststatustypes=3&amp;serviceprops=42&amp;servicestatustypes=28" target="<?php echo $link_target; ?>">
									无效的
								</a>
								)
							</li>
							<li>
								<a href="<?php echo $cfg["cgi_base_url"]; ?>/status.cgi?hostgroup=all&amp;style=hostdetail&amp;hoststatustypes=12" target="<?php echo $link_target; ?>">
									主机
								</a>
								(
								<a href="<?php echo $cfg["cgi_base_url"]; ?>/status.cgi?hostgroup=all&amp;style=hostdetail&amp;hoststatustypes=12&amp;hostprops=42" target="<?php echo $link_target; ?>">
									无效的
								</a>
								)
							</li>
							<li>
								<a href="<?php echo $cfg["cgi_base_url"]; ?>/outages.cgi" target="<?php echo $link_target; ?>">
									网络中断
								</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>

			<div class="navbarsearch">
				<form method="get" action="<?php echo $cfg["cgi_base_url"]; ?>/status.cgi" target="<?php echo $link_target; ?>">
					<fieldset>
						<legend>
							快速查询:
						</legend>
						<input type='hidden' name='navbarsearch' value='1'>
						<input type='text' name='host' size='15' class="NavBarSearchItem">
					</fieldset>
				</form>
			</div>

		</div>

		<div class="navsection">
			<div class="navsectiontitle">
				问题报告
			</div>
			<div class="navsectionlinks">
				<ul class="navsectionlinks">
					<li>
						<a href="<?php echo $cfg["cgi_base_url"]; ?>/avail.cgi" target="<?php echo $link_target; ?>">
							可利用报告
						</a>
					</li>
					<li>
						<a href="<?php echo $cfg["cgi_base_url"]; ?>/trends.cgi" target="<?php echo $link_target; ?>">
							趋势报告
						</a>
					</li>

					<li>
						<a href="<?php echo $cfg["cgi_base_url"]; ?>/history.cgi?host=all" target="<?php echo $link_target; ?>">
							警报报告
						</a>
						<ul>
							<li>
								<a href="<?php echo $cfg["cgi_base_url"]; ?>/history.cgi?host=all" target="<?php echo $link_target; ?>">
									历史记录
								</a>
							</li>
							<li>
								<a href="<?php echo $cfg["cgi_base_url"]; ?>/summary.cgi" target="<?php echo $link_target; ?>">
									全部警报
								</a>
							</li>
							<li>
								<a href="<?php echo $cfg["cgi_base_url"]; ?>/histogram.cgi" target="<?php echo $link_target; ?>">
									柱状图
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="<?php echo $cfg["cgi_base_url"]; ?>/notifications.cgi?contact=all" target="<?php echo $link_target; ?>">
							通知
						</a>
					</li>
					<li>
						<a href="<?php echo $cfg["cgi_base_url"]; ?>/showlog.cgi" target="<?php echo $link_target; ?>">
							事件日志
						</a>
					</li>
				</ul>
			</div>
		</div>

		<div class="navsection">
			<div class="navsectiontitle">
				系统信息
			</div>
			<div class="navsectionlinks">
				<ul class="navsectionlinks">
					<li>
						<a href="<?php echo $cfg["cgi_base_url"]; ?>/extinfo.cgi?type=3" target="<?php echo $link_target; ?>">
							注释
						</a>
					</li>
					<li>
						<a href="<?php echo $cfg["cgi_base_url"]; ?>/extinfo.cgi?type=6" target="<?php echo $link_target; ?>">
							宕机时间
						</a>
					</li>
					<li>
						<a href="<?php echo $cfg["cgi_base_url"]; ?>/extinfo.cgi?type=0" target="<?php echo $link_target; ?>">
							进程信息
						</a>
					</li>
					<li>
						<a href="<?php echo $cfg["cgi_base_url"]; ?>/extinfo.cgi?type=4" target="<?php echo $link_target; ?>">
							性能信息
						</a>
					</li>
					<li>
						<a href="<?php echo $cfg["cgi_base_url"]; ?>/extinfo.cgi?type=7" target="<?php echo $link_target; ?>">
							调度队列
						</a>
					</li>
					<li>
						<a href="<?php echo $cfg["cgi_base_url"]; ?>/config.cgi" target="<?php echo $link_target; ?>">
							配置
						</a>
					</li>
				</ul>
			</div>
		</div>

	</BODY>
</HTML>

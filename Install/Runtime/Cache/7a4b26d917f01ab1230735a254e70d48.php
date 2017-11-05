<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="utf-8">
	<title>DSCMS-Dswjcms安装程序</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="DSCMS傻瓜式一键安装，佣有一套商城只需10秒">
	<meta name="KeyWords" content="DSCMS安装,DSCMS一键安装,DSCMS程序安装">
    <meta name="generator" content="DSCMS!" />
    <meta name="author" content="Dswjcms! Team and Tf Team" />
    <meta name="copyright" content="2013-<?php echo date('Y'); ?> Tf Inc." />
    <meta http-equiv="X-UA-Compatible" content="IE=9">
    <link href="__PUBLIC__/css/bootstrap.min.css" rel="stylesheet">
    <link href="__PUBLIC__/css/common.css" rel="stylesheet">
	<script src="__PUBLIC__/js/jquery-1.7.1.min.js"></script>
    <script src="__PUBLIC__/js/bootstrap.min.js"></script>
    <script src="__PUBLIC__/js/common.js"></script>
 </head>
<body>
	<div class="container index">
    	<div class="logo"><img src="__PUBLIC__/images/logo.png"></div>
        <div class="name">DSCMS</div>
        <div id="sp-1" <?php if(($state) == "1"): ?>class="hide"<?php endif; ?>>
            <div class="describe">傻瓜式安装，搭建CMS最快只需10秒</div>
            <div class="agreement"><a data-toggle="modal"  data-rel="tooltip" href="#Contract">《我已经阅读并同意此协议》</a></div>
            <div class="btncenter"><button type="submit" class="btn btn-inverse btn-large">下一步</button></div>
        </div>
        <div id="sp-2"  class="hide">
        	<div class="environment">
            	<div class="proajax">
                    
                </div>
                <div class="btncenter"><button type="submit" class="btn btn-inverse btn-large">重新检测</button></div>
            </div>
        </div>
        <div id="sp-3" class="hide">
        	<div class="sqlform">
        	<form class="form-horizontal">
              <div class="inputlist">
                  <input name="dbhost" type="text" placeholder="数据库主机" value="localhost">
                  <div class="instructions">一般为localhost</div>
              </div>
              <div class="inputlist">
                  <input name="dbuser" type="text" placeholder="数据库用户"  value="root">
                  <div class="instructions">一般为root</div>
              </div>
              <div class="inputlist">
                  <input name="dbpwd" type="text" placeholder="数据库密码">
                  <div class="instructions">一般为空</div>
              </div>
              <div class="inputlist">
                  <input name="dbname" type="text" placeholder="数据库名称">
                  <div class="instructions"></div>
              </div>
              <div class="dbprompt"></div>
            </form>
            </div>
			<div class="btncenter"><button type="submit" class="btn btn-inverse btn-large">下一步</button></div>
        </div>
        <div id="sp-4" class="hide">
            <div class="centerLoader"><div class="loader"></div></div>
			<div class="describe">安装中，请勿关闭窗口</div>
            <div class="btncenter"></div>
        </div>
        <div id="sp-5" <?php if(($state) != "1"): ?>class="hide"<?php endif; ?>>
			<div class="successful">安装成功</div>
            <div class="agreement">后台默认用户名和密码均为:admin</div>
            <div class="btnList">
            	<div class="row-fluid">
                    <div class="span6">
                    <a target="_blank" href="/" class="btn btn-success">访问前台</a>
                    </div>
                    <div class="span6">
                    <a target="_blank" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/Dswjcms/Logo/index.html" class="btn btn-warning">访问后台</a>
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span6">
                    <a target="_blank" href="http://www.dswjcms.com/Manual.html" class="btn btn-danger">在线手册</a>
                    </div>
                    <div class="span6">
                    <a target="_blank" href="http://www.dswjcms.com/bbs.html" class="btn btn-inverse">官方论坛</a>
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span6">
                    <a target="_blank" href="http://www.dswjcms.com/Plugin.html" class="btn btn-primary">插件市场</a>
                    </div>
                    <div class="span6">
                    <a target="_blank" href="http://www.dswjcms.com/Plugin.html" class="btn">模板市场</a>
                    </div>
                </div>
            </div>
            <div class="btncenter"><a target="_blank" href="http://www.dswjcms.com" class="btn btn-inverse btn-large">访问官网</a></div>
        </div>
    </div>
    
 <!--协议 start-->
<div id="Contract" class="modal hide fade in" >
    <div class="modal-header">
      <a class="close" data-dismiss="modal" >&times;</a>
      <h3>许可协议</h3>
    </div>
    <div class="modal-body">
        <div class="pr-agreement">
			版权所有 (c) 2013-<?php echo date('Y'); ?>，宁波市鄞州区天发网络科技有限公司<br/>
保留所有权利。<br/>

感谢您选择dswjcms产品。希望我们的努力能为您提供一个高效快速、强大的站点解决方案，和强大的金融解决方案。宁波天发网络公司网址为 http://www.tifaweb.com，DSWJCMS产品官方网址为 http://www.dswjcms.com<br/>

用户须知：<br/>

      本协议是您与天发之间关于您使用天发提供的各种软件产品及服务的法律协议。本协议如和dswjcms其它协议有冲突，以本协议为主。无论您是个人或组织、盈利与否、用途如何（包括以学习和研究为目的），均需仔细阅读本协议，包括免除或者限制天发责任的免责条款及对您的权利限制。请您审阅并接受或不接受本服务条款。如您不同意本服务条款及/或天发随时对其的修改，您应不使用或主动取消天发公司提供的dswjcms产品。否则，您的任何对dswjcms产品中的相关服务的注册、登陆、下载、查看等使用行为将被视为您对本服务条款全部的完全接受，包括接受天发对服务条款随时所做的任何修改。<br/>

      本服务条款一旦发生变更, 天发将在网页上公布修改内容。修改后的服务条款一旦在网站管理后台上公布即有效代替原来的服务条款。您可随时登陆天发官方查阅最新版服务条款。如果您选择接受本条款，即表示您同意接受协议各项条件的约束。如果您不同意本服务条款，则不能获得使用本服务的权利。您若有违反本条款规定，天发公司有权随时中止或终止您对dswjcms产品的使用资格并保留追究相关法律责任的权利。<br/>
在理解、同意、并遵守本协议的全部条款后，方可开始使用dswjcms产品。您可能与天发公司直接签订另一书面协议，以补充或者取代本协议的全部或者任何部分。<br/>

天发拥有本软件的部分知识产权，属于天发知识产权部分已加入版本信息，其它部分据来自其它个人/公司的开源项目，各基于何种协仪请自行查看。本软件只供许可协议，并非出售。天发只允许您在遵守GPL协议、其它协议和本协议各项条款的情况下复制、下载、安装、使用或者以其他方式受益于本软件的功能或者知识产权。<br/>

I. 协议许可的权利<br/>

   1. 您可以在完全遵守本许可协议的基础上，将本软件应用于非商业用途，而不必获取软件版权许可。<br/>
   2. 您可以在协议规定的约束和限制范围内修改dswjcms产品源代码(如果被提供的话)或界面风格以适应您的网站要求。<br/>
   3. 您拥有使用本软件构建的网站中全部会员资料、文章及相关信息的所有权，并独立承担与使用本软件构建的网站内容的审核、注意义务，确保其不侵犯任何人的合法权益，独立承担因使用dswjcms软件和服务带来的全部责任，若造成天发公司或用户损失的，您应予以全部赔偿。<br/>
   4. 若您需将dswjcms软件或服务用于商业用途，必须另行获得天发的书面许可或网络授权许可，您在获得商业授权之后，您可以将本软件应用于商业用途，同时依据所购买的授权类型中确定的技术支持期限、技术支持方式和技术支持内容，自购买时刻起，在技术支持期限内拥有通过指定的方式获得指定范围内的技术支持服务。商业授权是免费开放的，购买技术支持用户享有反映和提出意见的权力，相关意见将被作为首要考虑，但没有一定被采纳的承诺或保证。<br/>

   5. 无论如何，即无论用途如何、是否经过修改或美化、修改程度如何，只要使用Dswjcms系统 的整体或任何部分，不管是否获得授权，网站标题和底部的Powered by Dswjcms!.都必须保留，而不能清除或修改，只有购买服务用户才可不受此限制，服务期满后如未续费仍受此限制<br/>

   6. 您可以从天发提供的应用中心服务中下载适合您网站的应用程序，但应向应用程序开发者/所有者支付相应的费用。<br/>

II. 协议规定的约束和限制<br/>

   1. 未获天发公司书面/网络商业授权之前，不得将本软件用于商业用途（包括但不限于企业网站、经营性网站、以营利为目或实现盈利的网站）。获得商业授权请登陆http://www.tifaweb.com参考相关说明。<br/>
   2. 不得对本软件或与之关联的商业授权进行出租、出售、抵押或发放子许可证。<br/>

   3.不得在本软件基础上进行二次销售或转让。<br/>
   4. 无论如何，即无论用途如何、是否经过修改或美化、修改程度如何，只要使用dswjcms产品的整体或任何部分，未经书面许可，页面页脚处的dswjcms产品名称和天发公司下属网站（http://www.tifaweb.com、或 http://www.dswjcms.com） 的链接都必须保留，而不能清除或修改。<br/>
   5. 在dswjcms产品的整体或任何部分基础上以发展任何派生版本、修改版本或第三方版本用于重新分发,请基于GPL协议进行发布。<br/>
   6. 您从应用中心下载的应用程序，未经应用程序开发者/所有者的书面许可，不得对其进行反向工程、反向汇编、反向编译等，不得擅自复制、修改、链接、转载、汇编、发表、出版、发展与之有关的衍生产品、作品等。<br/>
   7. 如果您未能遵守本协议的条款，您的授权将被终止，所许可的权利将被收回，同时您应承担相应法律责任。<br/>

III. 有限担保和免责声明<br/>

      1. 本软件及所附带的文件是作为不提供任何明确的或隐含的赔偿或担保的形式提供的。<br/>
      2. 用户出于自愿而使用本软件，您必须了解使用本软件的风险，在尚未购买产品技术服务之前，我们不承诺提供任何形式的技术支持、技术文档、使用担保，也不承担任何因使用本软件而产生问题的相关责任。<br/>
      3. 天发公司不对使用本软件构建的网站中或者论坛中的文章或信息承担责任，全部责任由您自行承担。<br/>
      4. 天发公司无法全面监控由第三方上传至应用中心的应用程序，因此不保证应用程序的合法性、安全性、完整性、真实性或品质等；您从应用中心下载应用程序时，同意自行判断并承担所有风险，而不依赖于天发公司。但在任何情况下，天发公司有权依法停止应用中心服务并采取相应行动，包括但不限于对于相关应用程序进行卸载，暂停服务的全部或部分，保存有关记录，并向有关机关报告。由此对您及第三人可能造成的损失，天发公司不承担任何直接、间接或者连带的责任。<br/>
      5. 天发公司对dswjcms提供的软件和服务之及时性、安全性、准确性不作担保，由于不可抗力因素、天发公司无法控制的因素（包括黑客攻击、停断电等）等造成软件使用和服务中止或终止，而给您造成损失的，您同意放弃追究天发公司责任的全部权利 <br/>

      6.天发公司特别提请您注意，天发公司为了保障公司业务发展和调整的自主权，天发公司拥有随时经或未经事先通知而修改服务内容、中止或终止部分或全部软件使用和服务的权利，修改会公布于天发公司网站相关页面上，一经公布视为通知。 天发公司行使修改或中止、终止部分或全部软件使用和服务的权利而造成损失的，天发公司不需对您或任何第三方负责。<br/>


有关dswjcms产品最终用户授权协议、商业授权与技术服务的详细内容，均由天发公司独家提供。天发公司拥有在不事先通知的情况下，修改授权协议和服务价目表的权利，修改后的协议或价目表对自改变之日起的新授权用户生效。<br/>

一旦您开始安装天发产品，即被视为完全理解并接受本协议的各项条款，在享有上述条款授予的权利的同时，受到相关的约束和限制。协议许可范围以外的行为，将直接违反本授权协议并构成侵权，我们有权随时终止授权，责令停止损害，并保留追究相关责任的权力。<br/>

本许可协议条款的解释，效力及纠纷的解决，适用于中华人民共和国大陆法律。<br/>

若您和天发之间发生任何纠纷或争议，首先应友好协商解决，协商不成的，您在此完全同意将纠纷或争议提交天发所在地宁波市鄞州区人民法院管辖。天发公司拥有对以上各项条款内容的解释权及修改权。（正文完）<br/>

<b>宁波市鄞州区天发网络科技有限公司</b><br/>
		</div>
        
    </div>
    <div class="modal-footer">
              <button class="btn btn-primary"  data-dismiss="modal">确定</button>
            </div>
</div>
<!--协议 end-->
</body>
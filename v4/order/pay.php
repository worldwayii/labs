<?php $page = "start" ?>
<?php $title="支付页"?>
<?php include("../common/order-meta.php"); ?>
</head>
<body class="order">
<?php include("../common/order-header.html"); ?>


<div class="wrap">
    
    <?php include("s-step32.html"); ?>
    
    
    <div class="order-main border">
        <div class="main">
            <div class="hr_a"></div>
            <div class="c-title">
                <h3>您预订：东方明珠广播电视塔二球、上海历史发展陈列馆【亲子/家庭 套票】</h3>
                <div class="total-price">
                    <span class="price-num"><dfn>459080</dfn> 元</span>
                    <strong>订单金额：</strong>
                </div>
            </div>
            
            <!-- 订单列表 -->
            <div class="order-list hide">
                <div class="dot_line"></div>
                
                <!-- 订单信息 -->
                <div class="c-title"><h4>订单信息</h4></div>
                <table class="table-full order-buy">
                    <thead>
                        <tr>
                            <th>订单号</th>
                            <th>游玩日期</th>
                            <th>游玩人数</th>
                            <th>产品信息</th>
                        </tr>
                    </thead>
                    <tbody class="table-vtop">
                        <tr>
                            <td>5201236</td>
                            <td>2013-6-21</td>
                            <td>2</td>
                            <td>
                                <p>万盛黑山谷生态旅游区门票成人票&nbsp;&nbsp;<span class="num"><dfn>&yen;270</dfn>&times;<i class="price">1</i></span></p>
                                <p>万盛黑山谷生态旅游区门票儿童票&nbsp;&nbsp;<span class="num"><dfn>&yen;130</dfn>&times;<i class="price">1</i></span></p>
                                <p>平安国内长途10日游意外险（特惠型）(国内)&nbsp;&nbsp;<span class="num"><dfn>&yen;35</dfn>&times;<i class="price">2</i></span></p>
                                <p>全场满500减20优惠券&nbsp;&nbsp;<span class="num save-price"><dfn>- &yen;<b>50</b></dfn></span></p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                
            </div> <!-- //订单列表 -->
            <div class="hr_c"></div>
            <span class="view-details slidedown-orderlist">
                订单详情<i class="ui-arrow-bottom white-ui-arrow-bottom"></i>
            </span>
        </div> <!-- //.main -->
            
        <!-- 支付方式 -->
        <div class="lightbox paybox clearfix">
            
            <div class="paytips">
                <p>友情提示：您的预订信息已提交，请在 <b class="red">2012-07-30 12:00</b> 前完成付款，<span class="timebox">剩余付款时间：<b class="countdown red">2800000</b></span></p>
            </div>
            <div class="dot_line"></div>
            
            <div class="check-text"><label class="checkbox inline"><input class="input-checkbox" name="ownpro" type="checkbox">使用驴妈妈存款账户余额</label></div>
            <div class="check-text"><label class="checkbox inline"><input class="input-checkbox" name="ownpro" type="checkbox">使用驴妈妈储值卡</label></div>
            <div class="check-text"><label class="checkbox inline"><input class="input-checkbox" name="ownpro" type="checkbox">使用奖金账户余额</label> <small>可使用<b>50</b>元</small></div>
            
            
            <!-- 选择支付方式 -->
            <div class="payment form-inline">
                <div class="pay-title ui-tab-trigger">
                    <h4 class="pay-price">您还需继续付款 <dfn><i>4100</i></dfn> 元</h4>
                    <ul class="tabnav order-tabnav clearfix">
                    	<li class="selected"><a href="javascript:;">支付平台/银行卡</a></li>
                    	<li class="paylink"><a href="javascript:;">其他方式<i class="ui-arrow-right blue-ui-arrow-right"></i></a></li>
                    </ul>
                </div>
                <div class="tab-switch payment-list">
                    <div class="tabcon">

                        <ul class="bank-list clearfix">
                            <li><label class="radio inline"><input class="input-radio" name="bankpay" type="radio"><i class="bank alipay      " title="支付宝"></i></label></li>
                            <li><label class="radio inline"><input class="input-radio" name="bankpay" type="radio"><i class="bank tenpay      " title="财付通"></i></label></li>
                            <li><label class="radio inline"><input class="input-radio" name="bankpay" type="radio"><i class="bank shengpay    " title="盛付通"></i></label></li>
                            <li><label class="radio inline"><input class="input-radio" name="bankpay" type="radio"><i class="bank unionpay    " title="银联支付"></i></label></li>
                            <li><label class="radio inline"><input class="input-radio" name="bankpay" type="radio"><i class="bank lakala      " title="拉卡拉"></i></label></li>
                            <li><label class="radio inline"><input class="input-radio" name="bankpay" type="radio"><i class="bank cmpay       " title="中国移动手机支付"></i></label></li>
                            <li><label class="radio inline"><input class="input-radio" name="bankpay" type="radio"><i class="bank alipay-quick" title="支付宝快捷支付"></i></label></li>
                            <li><label class="radio inline"><input class="input-radio" name="bankpay" type="radio"><i class="bank tenpay-quick" title="财付通快捷支付"></i></label></li>
                        </ul>
                        <div class="dot_line"></div>
                        <ul class="bank-list clearfix">
                            <li><label class="radio inline"><input class="input-radio" name="bankpay" type="radio"><i class="bank abc   " title="中国农业银行"></i></label></li>
                            <li><label class="radio inline"><input class="input-radio" name="bankpay" type="radio"><i class="bank boc   " title="中国银行"></i></label></li>
                            <li><label class="radio inline"><input class="input-radio" name="bankpay" type="radio"><i class="bank ccb   " title="中国建设银行"></i></label></li>
                            <li><label class="radio inline"><input class="input-radio" name="bankpay" type="radio"><i class="bank icbc  " title="中国工商银行"></i></label></li>
                            <li><label class="radio inline"><input class="input-radio" name="bankpay" type="radio"><i class="bank psbc  " title="中国邮政储蓄银行"></i></label></li>
                            <li><label class="radio inline"><input class="input-radio" name="bankpay" type="radio"><i class="bank ceb   " title="中国光大银行"></i></label></li>
                            <li><label class="radio inline"><input class="input-radio" name="bankpay" type="radio"><i class="bank cmbc  " title="中国民生银行"></i></label></li>
                            <li><label class="radio inline"><input class="input-radio" name="bankpay" type="radio"><i class="bank cmb   " title="招商银行"></i></label><span class="poptip-mini poptip-mini-warning"><div class="tip-sharp tip-sharp-bottom"></div>立减10元</span></li>
                            <li><label class="radio inline"><input class="input-radio" name="bankpay" type="radio"><i class="bank comm  " title="交通银行"></i></label></li>
                            <li><label class="radio inline"><input class="input-radio" name="bankpay" type="radio"><i class="bank bjbank" title="北京银行"></i></label></li>
                            <li><label class="radio inline"><input class="input-radio" name="bankpay" type="radio"><i class="bank shbank" title="上海银行"></i></label></li>
                            <li><label class="radio inline"><input class="input-radio" name="bankpay" type="radio"><i class="bank jsbank" title="江苏银行"></i></label></li>
                            <li><label class="radio inline"><input class="input-radio" name="bankpay" type="radio"><i class="bank hzbank" title="杭州银行"></i></label></li>
                            <li><label class="radio inline"><input class="input-radio" name="bankpay" type="radio"><i class="bank nbcb  " title="宁波银行"></i></label></li>
                            <li><label class="radio inline"><input class="input-radio" name="bankpay" type="radio"><i class="bank njcb  " title="南京银行"></i></label></li>
                            <li><label class="radio inline"><input class="input-radio" name="bankpay" type="radio"><i class="bank wzcb  " title="温州银行"></i></label></li>
                            <li><label class="radio inline"><input class="input-radio" name="bankpay" type="radio"><i class="bank gzcb  " title="广州银行"></i></label></li>
                            <li><label class="radio inline"><input class="input-radio" name="bankpay" type="radio"><i class="bank bjrcb " title="北京农村商业银行"></i></label></li>
                            <li><label class="radio inline"><input class="input-radio" name="bankpay" type="radio"><i class="bank srcb  " title="上海农村商业银行"></i></label></li>
                            <li><label class="radio inline"><input class="input-radio" name="bankpay" type="radio"><i class="bank sdb   " title="深圳发展银行"></i></label></li>
                            <li><label class="radio inline"><input class="input-radio" name="bankpay" type="radio"><i class="bank spdb  " title="浦发银行"></i></label></li>
                            <li><label class="radio inline"><input class="input-radio" name="bankpay" type="radio"><i class="bank cib   " title="兴业银行"></i></label></li>
                            <li><label class="radio inline"><input class="input-radio" name="bankpay" type="radio"><i class="bank cgb   " title="广发银行"></i></label></li>
                            <li><label class="radio inline"><input class="input-radio" name="bankpay" type="radio"><i class="bank hxb   " title="华夏银行"></i></label></li>
                            <li><label class="radio inline"><input class="input-radio" name="bankpay" type="radio"><i class="bank hkbea " title="东亚银行"></i></label></li>
                            <li><label class="radio inline"><input class="input-radio" name="bankpay" type="radio"><i class="bank cbhb  " title="渤海银行"></i></label></li>
                            <li><label class="radio inline"><input class="input-radio" name="bankpay" type="radio"><i class="bank ecitic" title="中信银行"></i></label></li>
                            <li><label class="radio inline"><input class="input-radio" name="bankpay" type="radio"><i class="bank pingan" title="平安银行"></i></label></li>
                            <li><label class="radio inline"><input class="input-radio" name="bankpay" type="radio"><i class="bank fudian" title="富滇银行"></i></label></li>
                            <li><label class="radio inline"><input class="input-radio" name="bankpay" type="radio"><i class="bank "></i></label></li>
                        </ul>
                    </div>
                    <div class="tabcon">
                        
                    </div>
                </div>
                <div class="order-btn"><button class="pbtn pbtn-big pbtn-orange">&nbsp;&nbsp;下一步&nbsp;&nbsp;</button></div>
            </div> <!-- //选择支付方式 -->
            
        </div> <!-- //支付方式 -->
        
    </div>
    
    
</div>


<div id="test1" class="hide">
    <p>您的驴妈妈存款账户可用余额 <b>200.00</b> 元，本次支付将使用 <b class="dfn">200.00</b> 元。</p>
    <div class="dot_line"></div>
    <p>您的账户已绑定手机 <b>138****1714</b>，为了您的账户安全需要进行验证。</p>
    <div class="hr_a"></div>
    <div class="form-hor form-inline form-w">
        <div class="control-group">
            <label class="control-label">短信校验码：</label>
            <div class="controls">
                <input type="text" class="input-text" /> <a href="javascript:;" >免费获取</a>
            </div>
        </div>
        <div class="control-group">
            <div class="controls">
                <button class="pbtn pbtn-orange">确定</button>
            </div>
        </div>
        <div class="control-group">
            <div class="controls">
                <p><a href="#">选择其他方式付款</a></p>
            </div>
        </div>
    </div>
</div>

<div id="test2" class="hide">
    <p>您的驴妈妈存款账户可用余额 <b>200.00</b> 元，本次支付将使用 <b class="dfn">200.00</b> 元。</p>
    <div class="dot_line"></div>
    <p>您的账户已绑定手机 <b>138****1714</b>，为了您的账户安全需要进行验证。</p>
    <div class="hr_a"></div>
    <div class="form form-hor form-inline form-w">
        <div class="control-group">
            <label class="control-label">邮箱校验码：</label>
            <div class="controls">
                <input type="text" class="input-text" /> <a href="javascript:;" >免费获取</a>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label">第一笔订单联系人手机号：</label>
            <div class="controls">
                <input type="text" class="input-text" /> <a href="javascript:;" >免费获取</a>
            </div>
        </div>
        <div class="control-group">
            <div class="controls">
                <button class="pbtn pbtn-orange">确定</button>
            </div>
        </div>
        <div class="control-group">
            <div class="controls">
                <p><a href="#">选择其他方式付款</a></p>
            </div>
        </div>
    </div>
</div>

<div id="test3" class="hide">
    <p>友情提示：驴妈妈储卡相关说明。</p>
    <div class="dot_line"></div>
    <div class="hr_a"></div>
    <div class="form form-hor form-inline form-w">
        <div class="control-group">
            <label class="control-label">储值卡卡号：</label>
            <div class="controls">
                <input type="text" class="input-text" />
            </div>
        </div>
        <div class="control-group">
            <label class="control-label">验证码：</label>
            <div class="controls">
                <input type="text" class="input-text" /> <img class="vmiddle" src="http://placehold.it/70x30" width="70" height="30" alt="" /> <a href="javascript:;"> 看不清？换一个</a>
            </div>
        </div>
        <div class="control-group">
            <div class="controls">
                <button class="pbtn pbtn-orange">确定</button>
            </div>
        </div>
        <div class="control-group">
            <div class="controls">
                <p><a href="#">选择其他方式付款</a></p>
            </div>
        </div>
    </div>
</div>

<div id="test4" class="hide">
    <h4>请根据您的情况点击以下按钮：</h4>
    <p><a class="pbtn pbtn-big pbtn-pink" href="#">&nbsp;&nbsp;已完成付款&nbsp;&nbsp;</a>
    &nbsp;&nbsp;&nbsp;&nbsp;
    <a class="pbtn pbtn-big pbtn-pink" href="#">&nbsp;&nbsp;付款遇到问题&nbsp;&nbsp;</a></p>
    <p><a href="#">选择其他方式付款</a></p>
</div>



<?php include("../common/order-footer.php"); ?>
<script>
$(function(){
$(".tanchuang").click(){
        var content1 = $("#test1").html();
    // 使用驴妈妈存款账户余额
    $.dialog({
        title: "使用驴妈妈存款账户余额",
        content: content1,
        wrapClass: "dialog-middle"
    })
    
    var content2 = $("#test2").html();
    // 使用驴妈妈存款账户余额
    $.dialog({
        title: "使用驴妈妈存款账户余额",
        content: content2,
        wrapClass: "dialog-middle"
    })
    
    var content3 = $("#test3").html();
    // 使用驴妈妈储值卡
    $.dialog({
        title: "使用驴妈妈储值卡",
        content: content3,
        wrapClass: "dialog-middle"
    })
    
    // 提示
    $.dialog({
        title: "提示",
        content: '<h4>放弃使用驴妈妈存款账户余额付款！</h4><p>您可以选择其他方式继续付款。</p>',
        button: [{
            value: "确定",
            className: "pbtn-orange"
        }],
        cancel: true
    })
    
    var content4 = $("#test4").html();
    // 付款状态
    $.dialog({
        title: "付款状态",
        content: content4
    })
}

    
})

</script>
</body>
</html>

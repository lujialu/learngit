<!--注册对话框--->
<form id = "reg" action="123.html" method="post" >
		<p> 
			<span class="rightAlign">
				<span class="star">*</span>
				<label for="user">账号:</label>
			</span>
			<input type="text" name="user" id = "user" class = "text" title="请输入帐号，不小于2 位！"/>
			
		</p>
		<p>
			<span class="rightAlign">
				<span class="star">*</span>
				<label for="pass">输入密码:</label>
			</span>
			<input type="password" name="pass" class="text" id="pass" title="请输入密码，不小于6 位！"/>
		</p>
		<p>
			<span class="rightAlign">
				<span class="star">*</span>
				<label for="repass">重复密码:</label>
			</span>
			<input type="password" name="repass" class="text" id="repass" />
		</p>
		<p>
			<span class="rightAlign">
				<span class="star">*</span>
				<label for="email">邮箱：</label>
			</span>
			<input type="text" name="email" class="text" id="email" title="请输入电子邮件！"/>
		</p>
		<p>
			<span class="rightAlign">
				<span class="star">*</span>
				<label for="phone">手机号码：</label>
			</span>
			<input type="text" name="phone" class="text" id="phone" title="请输入手机号码！"/>
		</p>
		<p>
			<span class="rightAlign">
				<span class="star">*</span>
				<label for="validNum">验证码：</label>
			</span>
			<input type="text" name="validNum" class="text" id="validNum" style="width:80px;" size="4"/>
		</p>
</form>

<!--登录对话框-->
<form id="login" title="会员登录">
	<ol class="login_error"></ol>
	<p>
		<span class="rightAlign">
			<span class="star">*</span>
			<label for="user">帐号：</label>
		</span>
		<input type="text" name="login_user" class="text" id="login_user" />
		
	</p>
	<p>
		<span class="rightAlign">
			<span class="star">*</span>
			<label for="pass">密码：</label>
		</span>
		<input type="password" name="login_pass" class="text" id="login_pass" />
		
	</p>
	<p>
		<input type="checkbox" name="expires" id="expires" checked="checked" /><label for="expires">登录后有效期一周</label>
	</p>
</form>
<div id="loading">数据提交中</div>
<div id="error">请登录后操作...</div>	
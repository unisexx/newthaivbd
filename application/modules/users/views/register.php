<div id="breadcrumb">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tbody>
          <tr>
            <td width="10"><img src="themes/thaivbd/images/breadcrumb_left.png" width="10" height="26"></td>
            <td width="910" bgcolor="#ECECEC" class="imgleaf">
            <div class="textbreadcrumb">สมัครสมาชิก</div>         
            <div class="location"><a href="home">หน้าแรก</a> &gt; สมัครสมาชิก</div>
            </td>
            <td width="10" align="right"><img src="themes/thaivbd/images/breadcrumb_right.png" width="10" height="26"></td>
          </tr>
          <tr>
              <td></td>
              <td class="content">
                  <h1>สมัครสมาชิก</h1>
					<form id="regisform" class="form-horizontal" method="post" action="users/signup">
					<div class="control-group">
			            <label class="control-label" for="id-input-file-1">รูปภาพ </label>
			            <div class="controls">
			                <div class="input-xxlarge">
			                    <input type="file" id="id-input-file-1" name="image"/>
			                </div>
			            </div>
			        </div>
        
				    <div class="control-group">
				        <label class="control-label" for="inputUsername">Username</label>
				        <div class="controls">
				          <input type="text" name="username" id="inputUsername" placeholder="Username">
				        </div>
				    </div>
				    <div class="control-group">
				        <label class="control-label" for="inputEmail">Email</label>
				        <div class="controls">
				          <input type="text" name="email" id="inputEmail" placeholder="Email">
				        </div>
				    </div>
				    <div class="control-group">
				        <label class="control-label" for="inputPass">Password</label>
				        <div class="controls">
				          <input type="password" name="password" id="inputPass" placeholder="Password">
				        </div>
				    </div>
				    <div class="control-group">
				        <label class="control-label" for="re-inputPass">Re Password</label>
				        <div class="controls">
				          <input type="password" name="_password" id="re-inputPass" placeholder="Re Password">
				        </div>
				    </div>
				    <div class="control-group">
				        <label class="control-label" for="inputCaptcha">Captcha</label>
				        <div class="controls">
				          <img src="users/captcha" /><Br>
				          <input type="text" name="captcha" class="input-small" id="inputCaptcha" placeholder="Captcha">
				        </div>
				    </div>
				    <div class="control-group">
				        <div class="controls">
				          <button type="submit" class="btn btn-primary">สมัครสมาชิก</button>
				        </div>
				    </div>
				</form>
              </td>
              <td></td>
          </tr>
      </tbody>
  </table>
</div>
<div id="breadcrumb">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tbody>
          <tr>
            <td width="10" class="breadcrumb_left"></td>
            <td width="910" bgcolor="#ECECEC" class="imgleaf">
            <div class="textbreadcrumb">สมัครสมาชิก</div>         
            <div class="location"><a href="home">หน้าแรก</a> &gt; สมัครสมาชิก</div>
            </td>
            <td width="10" align="right" class="breadcrumb_right"></td>
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
				        <label class="control-label" for="inputUsername">ชื่อในการล็อกอิน</label>
				        <div class="controls">
				          <input type="text" name="username" id="inputUsername" placeholder="ชื่อในการล็อกอิน">
				        </div>
				    </div>
				    <div class="control-group">
				        <label class="control-label" for="inputEmail">อีเมล์</label>
				        <div class="controls">
				          <input type="text" name="email" id="inputEmail" placeholder="อีเมล์">
				        </div>
				    </div>
				    <div class="control-group">
				        <label class="control-label" for="inputPass">รหัสผ่าน</label>
				        <div class="controls">
				          <input type="password" name="password" id="inputPass" placeholder="รหัสผ่าน">
				        </div>
				    </div>
				    <div class="control-group">
				        <label class="control-label" for="re-inputPass">ยืนยันรหัสผ่าน</label>
				        <div class="controls">
				          <input type="password" name="_password" id="re-inputPass" placeholder="ยืนยันรหัสผ่าน">
				        </div>
				    </div>
				    <div class="control-group">
				        <label class="control-label" for="inputCaptcha">รหัสลับ</label>
				        <div class="controls">
				          <img src="users/captcha" /><Br>
				          <input type="text" name="captcha" class="input-small" id="inputCaptcha" placeholder="รหัสลับ">
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
<div id="breadcrumb">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tbody>
          <tr>
            <td width="10" class="breadcrumb_left"></td>
            <td width="910" bgcolor="#ECECEC" class="imgleaf">
            <div class="textbreadcrumb">ลืมรหัสผ่าน</div>         
            <div class="location"><a href="home">หน้าแรก</a> &gt; ลืมรหัสผ่าน</div>
            </td>
            <td width="10" align="right" class="breadcrumb_right"></td>
          </tr>
          <tr>
              <td></td>
              <td class="content">
                  <h1>ลืมรหัสผ่าน</h1>
					<form class="form-horizontal" method="post" action="users/forget_pass_save">
			            <div class="control-group">
			                <label class="control-label" for="inputEmail">อีเมล์</label>
			                <div class="controls">
			                  <input type="text" name="email" id="inputEmail" placeholder="อีเมล์">
			                </div>
			            </div>
			            <div class="control-group">
			                <label class="control-label" for="inputCaptcha">รหัสลับ</label>
			                <div class="controls">
			                  <img src="users/captcha" /><Br>
			                  <input type="text" name="captcha" id="inputCaptcha" placeholder="รหัสลับ">
			                </div>
			            </div>
			            <div class="control-group">
			                <div class="controls">
			                  <button type="submit" class="btn btn-small btn-info">ลืมรหัสผ่าน</button>
			                </div>
			            </div>
			        </form>
              </td>
              <td></td>
          </tr>
      </tbody>
  </table>
</div>
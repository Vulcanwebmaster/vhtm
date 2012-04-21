// JavaScript Document
function reload_() {
	document.getElementById('CAPTCHA').src='_inc_Functions/SECURITY_IMG.asp?'+Date();
}
//Function to check form is filled in correctly before submitting
function CheckForm () {

	//Initialise variables
	var errorMsg = "";
	var formArea = document.getElementById('frmRegister');
	//Check for a username
	if (formArea.Username.value.length < 2){
			errorMsg += "\n\tTên truy cập\t\t- Tên đăng nhập cần phải có tối thiểu 2 ký tự.";
	}

	//Check for a password
	if (formArea.password1.value.length <= 3){
			errorMsg += "\n\tMật khẩu truy cập\t\t- Mật khẩu phải chứa ít nhất từ 4 ký tự trở lên.";
	}
	//Check both passwords are the same
	if ((formArea.password1.value) != (formArea.password2.value)){
			errorMsg += "\n\tNhập lại mật khẩu\t\t- Nhập lại mật khẩu và mật khẩu phải giống nhau.";
			formArea.password1.value = ""
			formArea.password2.value = ""
	}
	if((formArea.email.value == "") || (formArea.email.value.indexOf("@",0) == -1 || formArea.email.value.indexOf(".",0) == -1)){
		errorMsg +="\n\tĐịa chỉ Enail\t\t- Địa chỉ Email không hợp lệ.";
	}
		//Check for a security code
	if (formArea.securityCode.value == ''){
			errorMsg += "\n\tMã xác nhận\t\t- Mã xác nhận chưa chính xác.";
	}
	if (formArea.Real_name.value == ''){
			errorMsg += "\n\tHọ tên\t\t\t- Bạn chưa nhập họ tên.";
	}
	//realName
	//Check Local
	if (formArea.Address.value == ''){
			errorMsg += "\n\tĐịa chỉ\t\t\t- Bạn chưa nhập thông tin địa chỉ.";
	}
	//Check Phone
//	if (isNaN(formArea.interests.value)){
//			errorMsg += "\n\tĐiện thoại\t\t- Bạn chưa nhập điện thoại liên hệ.";
//	}
	//If there is aproblem with the form then display an error
	if (errorMsg != ""){
			msg = "______________________________________________________________________________\n\n";
			msg += "THÔNG TIN CHƯA CHÍNH XÁC.\n";
			msg += "Xin vui lòng kiểm tra và nhập lại dữ liệu.\n";
			msg += "______________________________________________________________________________\n\n";
			msg += "Thông tin cần chỉnh sửa:\n";

			errorMsg += alert(msg + errorMsg + "\n");
			return false;
	}
	return true;
}
function CheckInfo () {

	var errorMsg = "";
	var formArea = document.getElementById('frmRegister');
	if (formArea.Real_name.value == ''){
			errorMsg += "\n\tHọ tên\t\t\t- Bạn chưa nhập họ tên.";
	}
	if (formArea.Address.value == ''){
			errorMsg += "\n\tĐịa chỉ\t\t\t- Bạn chưa nhập thông tin địa chỉ.";
	}
	if (errorMsg != ""){
			msg = "______________________________________________________________________________\n\n";
			msg += "THÔNG TIN CHƯA CHÍNH XÁC.\n";
			msg += "Xin vui lòng kiểm tra và nhập lại dữ liệu.\n";
			msg += "______________________________________________________________________________\n\n";
			msg += "Thông tin cần chỉnh sửa:\n";

			errorMsg += alert(msg + errorMsg + "\n");
			return false;
	}
	return true;
}
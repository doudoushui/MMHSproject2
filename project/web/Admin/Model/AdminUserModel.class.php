<?php 
namespace Admin\Model;
use Think\Model;

//自定义的数据库操作类 继承Think里的model
class AdminUserModel extends Model{

	//自动验证
	protected $_validate = array(
		 //默认情况下用正则进行验证
		array('adminname','require','用户名必须填写！'),
		array('pwd','require','密码必须填写！'),	

		// array('vcode','require','验证码必须填写！'),

		// //验证码是否正确
		// array('vcode','check_verify','验证码不正确',0,'function',1),

 
		// 验证字段1,验证规则,错误提示,[验证条件,附加规则,验证时间]
		array('adminname','/\w{4,10}/','密码为4-10位',0,'',1),
		array('pwd','/\w{4,10}/','密码为4-10位',0,'',1),
		// array('tel','/^|[^0129]\d{9}/\$/','请输入有效手机号',0,'',1),
	 array('tel','/^(0|86|17951)?(13[0-9]|15[012356789]|18[0-9]|14[57])[0-9]{8}$/','请输入合法的手机号',self::EXISTS_VALIDATE),
    
	);
}

 ?>
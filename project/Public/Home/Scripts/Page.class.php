<?php 
	header('content-type:text/html;charset=utf-8');
	
	/*
		类名 Page
			参数 1,总条数 2,每页显示几条
		方法
			1,获取limit参数 getLimit
			2,显示页码信息 show
	*/
	class Page{
		//成员属性
		public $total = 0;//总条数
		public $num = 10;//每页显示的条数

		//构造方法
		public function __construct($total,$num){
			$this->total = $total;
			$this->num = $num;
		}
		//获取limit方法100,9  1 0,9 2 9,9 3 18,9
		public function getLimit(){
			//获取当前页面P
			$p = isset($_GET['p']) ? $_GET['p'] : 1;
			//当前页-1  n (n-1)*9 ,9
			$limit = ($p-1)*$this->num.','.$this->num;
			//返回limit参数
			return $limit;
			// echo $limit;
		}

		//显示页码信息
		public function show(){
			//获取当前页面P
			$p = isset($_GET['p']) ? $_GET['p'] : 1;
			//获取当前请求的脚本的绝对路径
			$u = $_SERVER['SCRIPT_NAME'];
			//计算当前总的页码数 总条数/每页显示的条数,在取整
			$totalPage = ceil($this->total/$this->num);
			// echo $totalPage;
			$url = "";
			$url .= '<a href="'.$u.'?p=1">首页</a>&nbsp;&nbsp;';
			//判断越界
			if($p > 1){
				$url .= '<a href="'.$u.'?p='.($p-1).'">上一页</a>&nbsp;&nbsp;';
			}else{
				$url .= '<a href="'.$u.'?p=1">上一页</a>&nbsp;&nbsp;';
			}
			//循环 1,2,3,4,5.... 上一页,下一个 首页,尾页
			for ($i=1; $i <= $totalPage; $i++) {
				//判断如果是当前页
				if($i == $p){
					$url .= "<a style='color:red;font-size:20px' href='".$u."?p=".$i."'>".$i."</a>&nbsp;&nbsp;";
				}else{
					$url .= "<a href='".$u."?p=".$i."'>".$i."</a>&nbsp;&nbsp;";
				}
			}
			//判断越界
			if($p >= $totalPage){
				$url .= '<a href="'.$u.'?p='.$totalPage.'">下一页</a>&nbsp;&nbsp;';
			}else{
				$url .= '<a href="'.$u.'?p='.($p+1).'">下一页</a>&nbsp;&nbsp;';
			}
			$url .= '<a href="'.$u.'?p='.$totalPage.'">尾页</a>&nbsp;&nbsp;';

			echo $url;
		}
	}






 ?>
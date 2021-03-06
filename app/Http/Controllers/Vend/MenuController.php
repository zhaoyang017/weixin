<?php

namespace App\Http\Controllers\Vend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use EasyWeChat\Foundation\Application;

class MenuController extends Controller
{
    public $menu;

    public function __construct(Application $app)
    {
    	$this->menu = $app->menu;
    }

    public function menu()
    {
		$buttons = [
		    [
		        "name"       => "初育儿",
		        "sub_button" => [
		            [
		                "type" => "view",
		                "name" => "育儿大客厅",
		                "url"  => "http://qichu-crm.carnivo.cn/baby.aspx"
		            ],
		            [
		                "type" => "view",
		                "name" => "经验阅读室",
		                "url"  => "http://qichu-crm.carnivo.cn/exp.aspx"
		            ],
		            [
		                "type" => "view",
		                "name" => "启初明星单品",
		                "url" => "http://www.givingforbaby.com/m/"
		            ],
		        ],
		    ],
		    [
		        "name"       => "初礼遇",
		        "sub_button" => [
		            [
		                "type" => "view",
		                "name" => "妈咪有福利",
		                "url"  => "http://qichu-crm.carnivo.cn/product.aspx"		            
		            ],
		            [
		                "type" => "view",
		                "name" => "派对活动场",
		                "url"  => "http://qichu-crm.carnivo.cn/party.aspx"		            
		            ],
                    [
                        "type" => "view",
                        "name" => "获取初生证",
                        "url"  => "http://qichu-crm.carnivo.cn/qichu-photo-get/index.html?r_code=1"
                    ],
		        ],
		    ],
		    [
		        "name"       => "妈咪home",
		        "sub_button" => [
		            [
		                "type" => "view",
		                "name" => "进入妈咪home",
		                "url"  => "http://qichu-crm.carnivo.cn"
		            ],
		            [
		                "type" => "view",
		                "name" => "个人中心",
		                "url"  => "http://qichu-crm.carnivo.cn/user.aspx"
		            ],		            
		        ],
		    ],
		];
		$this->menu->add($buttons);

    }
}

<?php
$config['dkconfig'] = array(
	"skill_id" => "1081377831331966976",
	"intent" => array(
		"name" =>"SCHOOL_DETAIL",
		"confirmationStatus" =>"",
		"slots" => array(
			"college_name" => array(
				"name" => "college_name",
				"confirmationStatus" => "",
				"values" => array(
					array(
						"type" => "text"
					)
				)
			)
		)
	),

	"intent_SCHOOL_CHOOSE" => array(
		"name"=>"SCHOOL_DETAIL",
		"confirmationStatus" =>"",
		"slots" => array(
			"score" => array(
				"name" => "score",
				"confirmationStatus" => "",
				"needed" => "1", //是否必填
				"values" => array(
					array(
						"type" => "sys.number"
					)
				),
				"failedOutputSpeech" => array(
					"type"=>"PlainText",
					"text"=>"你的分数是多少？"
				),
				"failedOutputText" => array(
					"title"=>"",
					"description"=>"高考分数是多少？"
				)
			),
			"course_type" => array(
				"name" => "course_type",
				"confirmationStatus" => "",
				"needed" => "1", //是否必填
				"values" => array(
					array(
						"type" => "text"
					)
				),
				"failedOutputSpeech" => array(
					"type"=>"PlainText",
					"text"=>"您是文科还是理科？"
				),
				"failedOutputText" => array(
					"title"=>"",
					"description"=>"您是文科还是理科？"
				)
			),
			"province" => array(
				"name" => "province",
				"confirmationStatus" => "",
				"needed" => "1", //是否必填
				"values" => array(
					array(
						"type" => "text"
					)
				),
				"failedOutputSpeech" => array(
					"type"=>"PlainText",
					"text"=>"请问你在哪里参加高考呢？"
				),
				"failedOutputText" => array(
					"title"=>"",
					"description"=>"请问你在哪里参加高考呢？"
				)
			)
		)
	),

	"COLLEGE_EXAM" => array(
		"name"=>"COLLEGE_EXAM",
		"confirmationStatus" =>"",
		"slots" => array(
			"year" => array(
				"name" => "year",
				"confirmationStatus" => "",
				"values" => array(
					array(
						"type" => "usr.year"
					)
				),
			),

			"subject" => array(
				"name" => "subject",
				"confirmationStatus" => "",
				"needed" => "1", //是否必填
				"values" => array(
					array(
						"type" => "text"
					)
				),
				"failedOutputSpeech" => array(
					"type"=>"PlainText",
					"text"=>"您是文科还是理科？"
				),
				"failedOutputText" => array(
					"title"=>"",
					"description"=>"您是文科还是理科？"
				)
			),
			"province" => array(
				"name" => "province",
				"confirmationStatus" => "",
				"values" => array(
					array(
						"type" => "text"
					)
				),
			)
		)
	),

	"intent_cfg" => array(
		"name" =>"monthly_instalment",
		"confirmationStatus" =>"",
		"slots" => array(
			"loan" => array(
				"name" => "loan",
				"confirmationStatus" => "",
				"needed" => "1", //是否必填
				"values" => array(
					array(
						"type" => "sys.number",
						"value" => 100
					)
				),
				"failedOutputSpeech" => array(
					"type"=>"PlainText",
					"text"=>"你的贷款金额是多少万？"
				),
				"failedOutputText" => array(
					"title"=>"",
					"description"=>"贷款金额：多少万？"
				)
			),
			"years" => array(
				"name" => "years",
				"confirmationStatus" => "",
				"needed" => "1", //是否必填
				"values" => array(
					array(
						"type" => "usr.years",
						"value" => 30
					)
				),
				"failedOutputSpeech" => array(
					"type"=>"PlainText",
					"text"=>"你的还款年限是20年，还是30年？"
				),
				"failedOutputText" => array(
					"title"=>"",
					"description"=>"还款年限：20年，30年？"
				)
			),
			"method" => array(
				"name" => "method",
				"confirmationStatus" => "",
				"needed" => "1", //是否必填
				"values" => array(
					array(
						"type" => "usr.method",
						"value" => "等额本息"
					)
				),
				"failedOutputSpeech" => array(
					"type"=>"PlainText",
					"text"=>"你的还款方式是等额本息，还是等额本金？"
				),
				"failedOutputText" => array(
					"title"=>"",
					"description"=>"还款方式：等额本息，等额本金？"
				),
				"supportedValues" => array("等额本息","等额本金") //取值范围
			)
		)
	),
	"skillSuccessOutputSpeech" => array(
		"等额本金"=>array("type"=>"PlainText","text"=>'首月的还款金额是 $first_hk 元，此后每月递减。'),
		"等额本息"=>array("type"=>"PlainText","text"=>'每月的还款金额是 $first_hk 元。')
	),
	"skillSuccessOutputText" => array(
		"等额本金"=>array("title"=>"","description"=>'首月还款： $first_hk 元，每月递减。'),
		"等额本息"=>array("title"=>"","description"=>'每月还款： $first_hk 元。')
	),
	"skillFailedOutputSpeech" => array(
		"等额本金"=>array("type"=>"PlainText","text"=>"对不起，我不是很理解你说的。"),
		"等额本息"=>array("type"=>"PlainText","text"=>"对不起，我不是很理解你说的。")
	),
	"errorSpeechMap" => array(
		"signInvalid" => array("type"=>"PlainText","text"=>"对不起，我不是很理解你说的。你可以试试这样问？我要查月供"),
		"skillIdInvalid" => array("type"=>"PlainText","text"=>"对不起，我不是很理解你说的。你可以试试这样问？我要查月供"),
		"exception" => array("type"=>"PlainText","text"=>"对不起，我不是很理解你说的。")
	),
	"header" => array('Content-Type'=>"application/json;charset=UTF-8"),



	"generalDemands1"=> array(
		"type"=>"Display.RenderTemplate",
		"token"=>"string",
		"template"=>array(
			"type"=>"HorizontialListTemplate",
			"listItems"=>array(
				array(
						"token"=>"string",
						"textContent"=>array(
							"title"=>"中国人民大学",
							"description"=>"男女比例1:N,而且女同学形象气质俱佳"
						),
						"image"=>array(
							"contentDescription"=>"string",
							  "source"=>array(
								"url"=>"https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1546776244506&di=300f403f7f690997a2f9fa39921c4d16&imgtype=0&src=http%3A%2F%2Fimg4q.duitang.com%2Fuploads%2Fitem%2F201501%2F07%2F20150107105726_L8Psk.jpeg"
							  )

						),
					"url"=>"https://www.ruc.edu.cn/"
					),
				array(
					"token"=>"string",
					"textContent"=>array(
						"title"=>"北京理工大学",
						"description"=>"男女比例N:1,一对男女N对基，但是旁边有北外哦"
					),
					"image"=>array(
						"contentDescription"=>"string",
						"source"=>array(
							"url"=>"https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1546776507286&di=94fdbcb5352a8a1e18f787e95bb02649&imgtype=0&src=http%3A%2F%2Fwww.bit.edu.cn%2Fimages%2Fcontent%2F2015-09%2F20150922164331172870.jpg"
						)

					),
					"url"=>"http://www.bit.edu.cn/"
				),

				array(
					"token"=>"string",
					"textContent"=>array(
						"title"=>"北京航空航天大学",
						"description"=>"你可以在你宿舍找到一生所爱"
					),
					"image"=>array(
						"contentDescription"=>"string",
						"source"=>array(
							"url"=>"https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1546778832235&di=8a5e11a04e79886033e562b9259f276c&imgtype=0&src=http%3A%2F%2Fi2.hdslb.com%2Fbfs%2Farchive%2F2d6fa4bcd181e0d7a3d705a81bb29e40316e4596.jpg"
						)

					),
					"url"=>"https://www.buaa.edu.cn/"
				),

				array(
					"token"=>"string",
					"textContent"=>array(
						"title"=>"北京外国语大学",
						"description"=>"小姐姐只可远观"
					),
					"image"=>array(
						"contentDescription"=>"string",
						"source"=>array(
							"url"=>"https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1546778810675&di=a9f19f2c640b2de72e3617c5b35bea82&imgtype=0&src=http%3A%2F%2Fi2.bbswater.fd.zol-img.com.cn%2Ft_s1200x5000%2Fg5%2FM00%2F06%2F0F%2FChMkJlhIl9GIK1tvABBGs9EmbksAAYYngL_vngAEEbL282.jpg"
						)

					),
					"url"=>"http://www.bfsu.edu.cn/"
				),

				),
		)
	),

	"generalDemands2"=>array(
		"type"=>"Display.RenderTemplate",
		"token"=>"string",
		"template"=>array(
			"type"=>"HorizontialListTemplate",
			"listItems"=>array(
				array(
					"token"=>"string",
					"textContent"=>array(
						"title"=>"北京外国语大学",
						"description"=>"标准四人间，条件还是很不错的"
					),
					"image"=>array(
						"contentDescription"=>"string",
						"source"=>array(
							"url"=>"https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1546782631175&di=06fb437fa8f1f7a131ca4dd167ed71f1&imgtype=0&src=http%3A%2F%2Fimg6.ph.126.net%2FOGIm8jovgbWmt8o9CVToBQ%3D%3D%2F6597226996819758116.jpg"
						)

					),
					"url"=>"http://www.bfsu.edu.cn/"
				),
				array(
					"token"=>"string",
					"textContent"=>array(
						"title"=>"北京理工大学",
						"description"=>"宿舍虽说也是四人间，面积小，但是有空调"
					),
					"image"=>array(
						"contentDescription"=>"string",
						"source"=>array(
							"url"=>"https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1546782812633&di=e44dccff06ce49645153983ffcc2df86&imgtype=0&src=http%3A%2F%2Fimage.zh51home.com%2Fnews%2FGeneralPictures%2FMiniatures%2Fd23ba6e8-d7a0-45d3-af34-061d3e3da0d4.png"
						)

					),
					"url"=>"http://www.bit.edu.cn/"
				),
				array(
						"token"=>"string",
						"textContent"=>array(
							"title"=>"中国人民大学",
							"description"=>"宽敞且小资"
						),
						"image"=>array(
							"contentDescription"=>"string",
							  "source"=>array(
								"url"=>"https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1546782858750&di=be9865b8a7260bf22cc51b4229db2147&imgtype=0&src=http%3A%2F%2Fwww.cn-kr.net%2Fupload%2Fnewsimg%2F20160628%2F1467086572610061.png"
							  )

						),
					"url"=>"https://www.ruc.edu.cn/"
					),
			)
		)
	),

	"successDirective" => array(
		"type"=>"Display.RenderTemplate",
		"template"=>array(
			"type"=>"NewsBodyTemplate1",
			"textContent"=>array(
				"title"=>"",
				"description"=>"商业贷款，基准利率+10%，结果仅供参考"
			),
			"backgroundImage"=>array(
				"contentDescription"=>"string",
				"source"=>array(
					"url"=>"https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1546694118507&di=3c9a41a7d2502f47f6ccd1939f1a5a7c&imgtype=0&src=http%3A%2F%2Fs7.sinaimg.cn%2Fmw690%2F003NxNTQzy744QwK6sm06")
			),
			"backgroundAudio"=>array(
				"source"=>array(
					"url"=>"string"
				)
			),
			"url"=>"string"
		)
	),
	"successDirective2" => array(
		"type"=>"URI.Open",
        "destinationName"=>"baike",
        "url"=>"http://www.baidu.com"
	),

	"failedDirective"=>array(
		"type"=>"Dialog.ElicitSlot",
		"slotToElicit"=>"string",
		"updatedIntent"=>array()
	)
);
?>


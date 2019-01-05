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


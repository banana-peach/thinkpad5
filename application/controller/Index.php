<?php

namespace app\controller;

class Index
{
    public function index()
    {
        $name = input("name", "");
        $data = [];
        switch ($name) {
            case "一号":
                $data = [
                    [
                        "id" => 1,
                        "value" => "1号选手"
                    ],
                    [
                        "id" => 2,
                        "value" => "2号选手"
                    ],
                    [
                        "id" => 3,
                        "value" => "3号选手"
                    ],
                    [
                        "id" => 4,
                        "value" => "4号选手"
                    ],
                    [
                        "id" => 5,
                        "value" => "5号选手"
                    ]
                ];
                break;
            case "中国":
                $data = [
                    [
                        "id" => 11,
                        "value" => "中国"
                    ],
                    [
                        "id" => 12,
                        "value" => "中国建设"
                    ],
                    [
                        "id" => 13,
                        "value" => "中国建设银行"
                    ],
                    [
                        "id" => 14,
                        "value" => "中国建设银行广东"
                    ],
                    [
                        "id" => 15,
                        "value" => "中国建设银行广东分行"
                    ]
                ];
                break;
            case "中国建":
                $data = [
                    [
                        "id" => 1,
                        "value" => "中国建"
                    ],
                    [
                        "id" => 2,
                        "value" => "中国建设"
                    ],
                    [
                        "id" => 3,
                        "value" => "中国建设银行"
                    ],
                    [
                        "id" => 4,
                        "value" => "中国建设银行广东"
                    ],
                    [
                        "id" => 5,
                        "value" => "中国建设银行广东分行"
                    ]
                ];
                break;
            case "中国建设":
                $data = [
                    [
                        "id" => 2,
                        "value" => "中国建设"
                    ],
                    [
                        "id" => 3,
                        "value" => "中国建设银行"
                    ],
                    [
                        "id" => 4,
                        "value" => "中国建设银行广东"
                    ],
                    [
                        "id" => 5,
                        "value" => "中国建设银行广东分行"
                    ]
                ];
                break;
            default:
                $data = [
                    [
                        "id" => 1,
                        "value" => "中国"
                    ],
                    [
                        "id" => 2,
                        "value" => "中国建设"
                    ],
                    [
                        "id" => 3,
                        "value" => "中国建设银行"
                    ],
                    [
                        "id" => 4,
                        "value" => "中国建设银行广东"
                    ],
                    [
                        "id" => 5,
                        "value" => "中国建设银行广东分行"
                    ]
                ];
                break;
        }

        return json($data);
//        return '<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px;} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:) </h1><p> ThinkPHP V5.1<br/><span style="font-size:30px">12载初心不改（2006-2018） - 你值得信赖的PHP框架</span></p></div><script type="text/javascript" src="https://tajs.qq.com/stats?sId=64890268" charset="UTF-8"></script><script type="text/javascript" src="https://e.topthink.com/Public/static/client.js"></script><think id="eab4b9f840753f8e7"></think>';
    }

    public function hello($name = 'ThinkPHP5')
    {
        // $this->assign('name', 'thinkphp');
        // return $this->fetch('Index1');
        return 'hello,' . $name;
    }

    public function fuck()
    {
        return 'fuck';
    }

    public function nfc()
    {
        if (input('param.nfc') == 1234) {
            $data = [
                "code" => 200,
                "message" => "ok",
                "data" => [
                    "boxNumber" => "2",
                    "emptyBoxes" => "2",
                    "emptyBoxLists" => [
                        [
                            "name" => "我是药名1",
                            "size" => 1,
                            "sizeUnit" => "ml",
                            "batch" => 2021001,
                            "id" => 2,
                            "isStored" => false,
                            "detail" => "",
                            "isHover" => false
                        ],
                        [
                            "name" => "我是药名2",
                            "size" => 1,
                            "sizeUnit" => "ml",
                            "batch" => 2021001,
                            "id" => 2,
                            "isStored" => false,
                            "detail" => "",
                            "isHover" => false
                        ]
                    ]
                ]
            ];
        } else {
            $data = [
                "code" => 400,
                "message" => "nfc不存在",
            ];
        }

        return json($data);
    }

    public function drugSetting()
    {
        $data =
            [
                "code" => 200,
                "message" => "ok",
                "data" => [
                    "boxNumber" => 3,
                    "currentName" => "我是方案一",
                    "schemeNames" => [
                        [
                            "id" => 1,
                            "name" => "我是方案一"
                        ],
                        [
                            "id" => 2,
                            "name" => "我是方案二"
                        ]
                    ],
                    "equipmentItems" => [
                        [
                            "id" => 1,
                            "name" => "导管1",
                            "validity" => "2021-10-23",
                            "batch" => 2011201,
                            "isNone" => 0, // 表示 否, 1表示 是
                            // 新加的字段 器械需要的
                            "NFC" => "", // nfc识别特征码
                            "factory" => "", // 生产商
                            "model" => "M220", // 型号
                            "number" => 20
                        ],
                        [
                            "id" => 2,
                            "name" => "导管2",
                            "validity" => "2021-10-19",
                            "batch" => 2021202,
                            "isNone" => 1, // 表示 否, 1表示 是
                            // 新加的字段 器械需要的
                            "NFC" => "", // nfc识别特征码
                            "factory" => "雪山派", // 生产商
                            "model" => "Md21", // 型号
                            "number" => 19
                        ],
                        [

                            "id" => 3,
                            "name" => "导管3",
                            "validity" => "2021-10-23",
                            "batch" => 2221211,
                            "isNone" => 0, // 表示 否, 1表示 是
                            // 新加的字段 器械需要的
                            "NFC" => "", // nfc识别特征码
                            "factory" => "华山派", // 生产商
                            "model" => "M299", // 型号
                            "number" => 8
                        ],
                        [
                            "id" => 4,
                            "name" => "导管4",
                            "validity" => "2021-10-19",
                            "batch" => 2021209,
                            "isNone" => 1, // 表示 否, 1表示 是
                            // 新加的字段 器械需要的
                            "NFC" => "", // nfc识别特征码
                            "factory" => "无党派", // 生产商
                            "model" => "Md22", // 型号
                            "number" => 39
                        ],
                    ],
                    "boxItems" => [
                        [
                            "position" => "A1",
                            "name" => "硫酸",
                            "size" => "2",
                            "sizeUnit" => "ml",
                            "validity" => "2021-12-01",
                            "batch" => 2021001,
                            "isNone" => 0,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "A2",
                            "name" => "新鲜药品",
                            "size" => "1",
                            "sizeUnit" => "支",
                            "validity" => "2021-12-12",
                            "batch" => 2021002,
                            "isNone" => 0,
                            "factory" => "白云牌",
                        ],
                        [
                            "position" => "A3",
                            "name" => "新鲜药品",
                            "size" => "2",
                            "sizeUnit" => "g",
                            "validity" => "2021-11-02",
                            "batch" => 2021003,
                            "isNone" => 0,
                            "factory" => "白云牌",
                        ],
                        [
                            "position" => "A4",
                            "name" => "新鲜药品",
                            "size" => "2",
                            "sizeUnit" => "g",
                            "validity" => "2022-12-02",
                            "batch" => 2021004,
                            "isNone" => 1,
                            "factory" => "白云牌",
                        ],
                        [
                            "position" => "A5",
                            "name" => "药品哦4",
                            "size" => "1",
                            "sizeUnit" => "支",
                            "validity" => "2021-10-02",
                            "batch" => 2021005,
                            "isNone" => 0,
                            "factory" => "白云牌",
                        ],
                        [
                            "position" => "A6",
                            "name" => "药品哦5",
                            "size" => "1",
                            "sizeUnit" => "g",
                            "validity" => "2021-12-12",
                            "batch" => 2021006,
                            "isNone" => 1,
                            "factory" => "白云牌",
                        ],
                        [
                            "position" => "A7",
                            "name" => "药品哦6",
                            "size" => "2",
                            "sizeUnit" => "g",
                            "validity" => "2021-12-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "factory" => "白云牌",
                        ],
                        [
                            "position" => "A8",
                            "name" => "药品哦",
                            "size" => "2",
                            "sizeUnit" => "g",
                            "validity" => "2021-12-08",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "factory" => "白云牌",
                        ],
                        [
                            "position" => "A9",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-11",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "A10",
                            "name" => "药品1",
                            "size" => "1",
                            "sizeUnit" => "ml",
                            "validity" => "2021-12-02",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "A11",
                            "name" => "药品2",
                            "size" => "2",
                            "sizeUnit" => "nl",
                            "validity" => "2021-12-02",
                            "batch" => 2021001,
                            "isNone" => 0,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "A12",
                            "name" => "药品3",
                            "size" => "3",
                            "sizeUnit" => "nl",
                            "validity" => "2021-12-02",
                            "batch" => 2021001,
                            "isNone" => 0,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "A13",
                            "name" => "药品4",
                            "size" => "1",
                            "sizeUnit" => "ml",
                            "validity" => "2021-12-02",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "A14",
                            "name" => "药品5",
                            "size" => "2",
                            "sizeUnit" => "g",
                            "validity" => "2021-12-02",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "A15",
                            "name" => "药品5",
                            "size" => "2",
                            "sizeUnit" => "ml",
                            "validity" => "2021-12-02",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "A16",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "A17",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-11-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "A18",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-12-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "A19",
                            "name" => "硫酸",
                            "size" => "3",
                            "sizeUnit" => "ml",
                            "validity" => "2021-12-02",
                            "batch" => 2021002,
                            "isNone" => 0,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "B1",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-02-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "B2",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-08-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "B3",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2024-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "B4",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2026-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "B5",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "B6",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "B7",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "B8",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "B9",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "B10",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "B11",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "B12",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "B13",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "B14",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "B15",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "B16",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "B17",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "B18",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "B19",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "C1",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "C2",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "C3",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "C4",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "C5",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "C6",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "C7",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "C8",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "C9",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "C10",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "C11",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "C12",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "C13",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "C14",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "C15",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "C16",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "C17",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "C18",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "C19",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "D1",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "D2",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "D3",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "D4",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "D5",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "D6",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "D7",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "D8",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "D9",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "D10",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "D11",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "D12",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "D13",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "D14",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "D15",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "D16",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "D17",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "E1",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "E2",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "E3",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "E4",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "E5",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "E6",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "E7",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "E8",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "E9",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "E10",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "E11",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "E12",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "E13",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "E14",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "E15",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "E16",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "E17",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "F1",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "F2",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "F3",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "F4",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "F5",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "F6",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "F7",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "F8",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "F9",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "F10",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "F11",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "F12",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "F13",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "F14",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "F15",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "F16",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "F17",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "F18",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "G1",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "G2",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "G3",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "G4",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "G5",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "G6",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "G7",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "G8",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "G9",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "G10",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "G11",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "G12",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "G13",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "G14",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "G15",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "G16",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "G17",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "G18",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "H1",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "H2",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "H3",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "H4",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "H5",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "H6",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "H7",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "H8",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "H9",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "H10",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "H11",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "H12",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "H13",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "H14",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "H15",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "H16",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "H17",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "H18",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ],
                        [
                            "position" => "H19",
                            "name" => "",
                            "size" => "",
                            "sizeUnit" => "",
                            "validity" => "2021-10-23",
                            "batch" => 2021001,
                            "isNone" => 1,
                            "category" => "急诊",
                            "factory" => "上海牌",
                            "species" => "种类是我"
                        ]
                    ]
                ]
            ];
        return json($data);
    }

    public function enrolled()
    {
        $data = [
            "code" => 200,
            "message" => "ok",
            "totalNums" => 20,
            "data" => [
                [
                    "category" => "分类",
                    "name" => "药品",
                    "size" => "2",
                    "sizeUnit" => "ml",
                    "factory" => "生产商",
                    "origin" => "产地",
                    "batch" => "00001",
                    "validity" => "2022-01-01",
                    "number" => 2,
                    "species" => "分类2",
                    "id" => 1
                ],
                [
                    "category" => "分类2",
                    "name" => "药品1",
                    "size" => "22",
                    "sizeUnit" => "ml",
                    "factory" => "生产商1",
                    "origin" => "产地1",
                    "batch" => "0002",
                    "validity" => "2022-01-01",
                    "number" => 12,
                    "species" => "分类1",
                    "id" => 2
                ]
            ]
        ];
        return json($data);
    }

    public function getAddList()
    {
        $data = [
            "code" => 200,
            "message" => "ok",
            "totalNums" => 20,
            "data" => [
                [
                    "category" => "分类",
                    "name" => "酚酞9",
                    "size" => "2",
                    "sizeUnit" => "ml",
                    "factory" => "生产商0",
                    "origin" => "产地1",
//                    "validity" => "2022-01-01",
                    "id" => 1,
//                    "species" => "种类1"
                ],
                [
                    "category" => "分类1",
                    "name" => "酚酞3",
                    "size" => "10",
                    "sizeUnit" => "ml",
                    "factory" => "生产商1",
                    "origin" => "产地2",
//                    "validity" => "2022-01-01",
                    "id" => 2,
//                    "species" => "种类2"
                ]
            ]
        ];
        return json($data);
    }

    public function usingEquipment()
    {
        $data = [
            "code" => 200,
            "message" => "ok",
            "totalNums" => 20,
            "data" => [
                [
                    "category" => "分类",
                    "name" => "你是器械",
                    "size" => "2",
                    "model" => "M121",
                    "sizeUnit" => "kg",
                    "factory" => "生产商",
                    "origin" => "产地",
                    "validity" => "2022-01-01",
                    "id" => 1,
                    "batch" => "2021001",
                    "NFC" => "007",
                    "number" => 2,
                    "note" => "陈同志怕是想挨打"
                ],
                [
                    "category" => "分类2",
                    "name" => "我不是器械",
                    "size" => "3",
                    "model" => "M121",
                    "sizeUnit" => "kg",
                    "factory" => "生产商2",
                    "origin" => "产地1",
                    "validity" => "2021-12-30",
                    "id" => 1,
                    "batch" => "2021001",
                    "NFC" => "009",
                    "number" => 100,
                    "note" => "备注不是我"
                ],
            ]
        ];
        return json($data);
    }

    public function usedEquipment()
    {
        $data = [
            "code" => 200,
            "message" => "ok",
            "totalNums" => 20,
            "data" => [
                [
                    "category" => "分类",
                    "name" => "器械1",
                    "size" => "2",
                    "model" => "M121",
                    "sizeUnit" => "ml",
                    "factory" => "生产商",
                    "origin" => "产地",
                    "validity" => "2022-01-01",
                    "id" => 1,
                    "batch" => "2021001",
                    "NFC" => "MM103",
                    "number" => 2,
                    "note" => "我是备注"
                ],
                [
                    "category" => "分类",
                    "name" => "器械2号",
                    "size" => "88",
                    "model" => "M17",
                    "sizeUnit" => "ml",
                    "factory" => "生产商吗",
                    "origin" => "产地吗",
                    "validity" => "2023-01-01",
                    "id" => 2,
                    "batch" => "2022001",
                    "NFC" => "MM103",
                    "number" => 2,
                    "note" => "这里没有备注"
                ],
            ]
        ];
        return json($data);
    }

    public function equipmentEnrolled()
    {
        $data = [
            "code" => 200,
            "message" => "ok",
            "totalNums" => 20,
            "data" => [
                [
                    "category" => "分类",
                    "name" => "器械1",
                    "size" => "2",
                    "model" => "M121",
                    "sizeUnit" => "ml",
                    "factory" => "生产商",
                    "origin" => "产地",
                    "validity" => "2022-01-01",
                    "id" => 1,
                    "batch" => "2021001",
                    "NFC" => "M102",
                    "number" => 2,
                    "note" => "备注真的烦",
                ],
                [
                    "category" => "分类",
                    "name" => "器械88",
                    "size" => "2",
                    "model" => "B09",
                    "sizeUnit" => "ml",
                    "factory" => "生产商2",
                    "origin" => "M78星云",
                    "validity" => "2023-09-12",
                    "id" => 1,
                    "batch" => "2021001",
                    "NFC" => "MM102",
                    "number" => 2,
                    "note" => "奥特曼之乡",
                ],
            ]
        ];
        return json($data);
    }

    public function previewScheme()
    {
        $data = [
            "code" => 200,
            "message" => "ok",
            "data" => [
                "schemeName" => "方案一",
                "schemeImage" => "http://192.168.3.109:8888/upload/0eebe0115c7e49119be9e0cee9bfd7df.jpg",
                "routineDrugs" => [
                    [
                        "id" => 1,
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml",
                        "account" => 10,
                        "accountUnit" => "ml"
                    ]
                ],
                "anestheticDrugs" => [
                    [
                        "id" => 2,
                        "name" => "盐酸帕罗西卡丁",
                        "size" => 9,
                        "sizeUnit" => "ml",
                        "account" => 14,
                        "accountUnit" => "ml"
                    ]
                ],
                "refrigeratorDrugs" => [
                    [
                        "id" => 2,
                        "name" => "冷藏药物1",
                        "size" => 9,
                        "sizeUnit" => "ml",
                        "account" => 14,
                        "accountUnit" => "ml"
                    ]
                ],
                "highcostDrugs" => [
                    [
                        "id" => 1,
                        "name" => "导管",
                        "size" => 1,
                        "sizeUnit" => "个",
                        "account" => 2,
                        "accountUnit" => "个"
                    ],
                    [
                        "id" => 4,
                        "name" => "导管4",
                        "size" => 1,
                        "sizeUnit" => "个",
                        "account" => 1,
                        "accountUnit" => "个"
                    ]
                ]
            ]];
        return json($data);
    }

    public function sumEquipment()
    {
        $data = [
            "code" => 200,
            "message" => "ok",
            "all" => [
                [
                    "name" => "器械2号",
                    "id" => 1,
                    "size" => "2",
                    "sizeUnit" => "g",
                    "model" => "型号不是我",
                    "batch" => 202102,
                    "validity" => "2021-01-02",
                    "number" => "2",
                    "category" => "冷藏?"
                ],
                [
                    "name" => "器械3号",
                    "id" => 2,
                    "size" => "5",
                    "sizeUnit" => "g",
                    "model" => "型号不是我",
                    "batch" => 202101,
                    "validity" => "2021-01-02",
                    "number" => "2",
                    "category" => "冷藏?"
                ]
            ],
            "region" => [
                [
                    "name" => "麻醉科一区",
                    "equipments" => [
                        [
                            "name" => "器械2号",
                            "id" => 1,
                            "size" => "2",
                            "sizeUnit" => "g",
                            "model" => "型号不是我",
                            "batch" => 202102,
                            "validity" => "2021-01-02",
                            "number" => "2",
                            "category" => "冷藏?"
                        ],
                        [
                            "name" => "器械3号",
                            "id" => 2,
                            "size" => "5",
                            "sizeUnit" => "g",
                            "model" => "型号不是我",
                            "batch" => 202101,
                            "validity" => "2021-01-02",
                            "number" => "2",
                            "category" => "冷藏?"
                        ]
                    ],
                    "drugs" => [
                        [
                            "name" => "器械2号",
                            "id" => 1,
                            "size" => "2",
                            "sizeUnit" => "g",
                            "model" => "型号不是我",
                            "batch" => 202102,
                            "validity" => "2021-01-02",
                            "number" => "2",
                            "category" => "冷藏?"
                        ],
                        [
                            "name" => "器械3号",
                            "id" => 2,
                            "size" => "5",
                            "sizeUnit" => "g",
                            "model" => "型号不是我",
                            "batch" => 202101,
                            "validity" => "2021-01-02",
                            "number" => "2",
                            "category" => "冷藏?"
                        ]
                    ]
                ],
                [
                    "name" => "外科手术二区",
                    "equipments" => [
                        [
                            "name" => "器械2号",
                            "id" => 1,
                            "size" => "2",
                            "sizeUnit" => "g",
                            "model" => "型号不是我",
                            "batch" => 202102,
                            "validity" => "2021-01-02",
                            "number" => "2",
                            "category" => "冷藏?"
                        ],
                        [
                            "name" => "器械3号",
                            "id" => 2,
                            "size" => "5",
                            "sizeUnit" => "g",
                            "model" => "型号不是我",
                            "batch" => 202101,
                            "validity" => "2021-01-02",
                            "number" => "2",
                            "category" => "冷藏?"
                        ]
                    ],
                    "drugs" => [
                        [
                            "name" => "器械2号",
                            "id" => 1,
                            "size" => "2",
                            "sizeUnit" => "g",
                            "model" => "型号不是我",
                            "batch" => 202102,
                            "validity" => "2021-01-02",
                            "number" => "2",
                            "category" => "冷藏?"
                        ],
                        [
                            "name" => "器械3号",
                            "id" => 2,
                            "size" => "5",
                            "sizeUnit" => "g",
                            "model" => "型号不是我",
                            "batch" => 202101,
                            "validity" => "2021-01-02",
                            "number" => "2",
                            "category" => "冷藏?"
                        ]
                    ]
                ]
            ]
        ];
        return json($data);
    }

    public function thingdetails()
    {
        $data = [
            "code" => 200,
            "message" => "获得成功",
            "name" => "阿莫西林",
            "size" => 2,
            "sizeUnit" => "ml",
            "batch" => "1234",
            "using" => [
                [
                    "region" => "一区",
                    "cabinetNumber" => 2,
                    "boxNumber" => 13,
                    "number" => 2,
                    "name" => "王二"
                ],
                [
                    "region" => "二区",
                    "cabinetNumber" => 1,
                    "boxNumber" => 12,
                    "number" => 1,
                    "name" => "王三"
                ]
            ],
            "stored" => [
                [
                    "region" => "一区",
                    "cabinetNumber" => 1,
                    "boxNumber" => 10,
                    "number" => 3
                ],
                [
                    "region" => "二区",
                    "cabinetNumber" => 1,
                    "boxNumber" => 8,
                    "number" => 12
                ]
            ]
        ];

        return json($data);
    }

    public function boxscheme()
    {
        $data = [
            "message" => "请求成功",
            "code" => 200,
            "data" => [
                "name" => "我其实是test(1)",
                "allBoxes" => [ // 启用的时候需要显示这些箱子, 应用
                    [
                        "id" => 1,
                        "name" => "一号箱"
                    ],
                    [
                        "id" => 2,
                        "name" => "二号箱"
                    ]
                ],
                "usingScheme" => [
                    [
                        "name" => "应用中方案一",
                        "box" => [
                            "1-11",
                            "13",
                            "18"
                        ]
                    ],
                    [
                        "name" => "应用中方案二",
                        "box" => [
                            "13",
                            "18"
                        ]
                    ]
                ],
                "sum" => [
                    [
                        "name" => "艾司挫仑片",
                        "size" => 1,
                        "sizeUnit" => "ml",
                        "number" => 20
                    ],
                    [
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml",
                        "number" => 18
                    ],
                    [
                        "name" => "地西泮",
                        "size" => 2,
                        "sizeUnit" => "g",
                        "number" => 18
                    ],
                    [
                        "name" => "感冒灵",
                        "size" => 2,
                        "sizeUnit" => "g",
                        "number" => 18
                    ],
                    [
                        "name" => "阿莫西林",
                        "size" => 2,
                        "sizeUnit" => "g",
                        "number" => 18
                    ]
                ],
                "NFC" => [
                    [
                        "name" => "器械1",
                        "size" => 2,
                        "sizeUnit" => "支",
                        "number" => 18,
                        "id" => 1
                    ],
                    [
                        "name" => "器械2",
                        "size" => 3,
                        "sizeUnit" => "支",
                        "number" => 10,
                        "id" => 2
                    ],
                    [
                        "name" => "器械3",
                        "size" => 65,
                        "sizeUnit" => "支",
                        "number" => 18,
                        "id" => 3
                    ],
                    [
                        "name" => "器械4",
                        "size" => 4,
                        "sizeUnit" => "支",
                        "number" => 10,
                        "id" => 4
                    ]
                ],
                "boxs" => [
                    [
                        "position" => "A1",
                        "name" => "艾司挫仑片",
                        "size" => 1,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "A2",
                        "name" => "盐酸帕罗西卡丁",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "A3",
                        "name" => "阿戈美丁片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "A4",
                        "name" => "感冒灵",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "A5",
                        "name" => "阿莫西林",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "A6",
                        "name" => "地西泮",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "A7",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "A8",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "A9",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "A10",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "A11",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "A12",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "A13",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "A14",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "A15",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "A16",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "A17",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "A18",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "A19",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "B1",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "B2",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "B3",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "B4",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "B5",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "B6",
                        "name" => "感冒灵",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "B7",
                        "name" => "感冒灵",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "B8",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "B9",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "B10",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "B11",
                        "name" => "感冒灵",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "B12",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "B13",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "B14",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "B15",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "B16",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "B17",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "B18",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "B19",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "C1",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "C2",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "C3",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "C4",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "C5",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "C6",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "C7",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "C8",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "C9",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "C10",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "C11",
                        "name" => "地西泮",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "C12",
                        "name" => "地西泮",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "C13",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "C14",
                        "name" => "感冒灵",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "C15",
                        "name" => "地西泮",
                        "size" => 5,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "C16",
                        "name" => "地西泮",
                        "size" => 5,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "C17",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "C18",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "C19",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "D1",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "D2",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "D3",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "D4",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "D5",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "D6",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "D7",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "D8",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "D9",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "D10",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "D11",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "D12",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "D13",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "D14",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "D15",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "D16",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "D17",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "E1",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "E2",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "E3",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "E4",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "E5",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "E6",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "E7",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "E8",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "E9",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "E10",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "E11",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "E12",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "E13",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "E14",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "E15",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "E16",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "E17",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "F1",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "F2",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "F3",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "F4",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "F5",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "F6",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "F7",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "F8",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "F9",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "F10",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "F11",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "F12",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "F13",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "F14",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "F15",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "F16",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "F17",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "F18",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "G1",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "G2",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "G3",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "G4",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "G5",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "G6",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "G7",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "G8",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "G9",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "G10",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "G11",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "G12",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "G13",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "G14",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "G15",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "G16",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "G17",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "G18",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "H1",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "H2",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "H3",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "H4",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "H5",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "H6",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "H7",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "H8",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "H9",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "H10",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "H11",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "H12",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "H13",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "H14",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "H15",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "H16",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "H17",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "H18",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ],
                    [
                        "position" => "H19",
                        "name" => "艾司挫仑片",
                        "size" => 2,
                        "sizeUnit" => "ml"
                    ]
                ],
                "id" => "88"
            ]
        ];
        return json($data);

    }

    public function drugnames()
    {
        $data = [
            "message" => "请求成功",
            "code" => 200,
            "data" => [
                "name2Size" => [
                    [
                        "name" => "艾司挫仑片",
                        "size" => [
                            10,
                            2,
                            4
                        ],
                        "sizeUnit" => "ml"
                    ],
                    [
                        "name" => "盐酸帕罗西卡丁",
                        "size" => [
                            6,
                            10,
                            4
                        ],
                        "sizeUnit" => "ml"
                    ],
                    [
                        "name" => "阿戈美丁片",
                        "size" => [
                            7,
                            10
                        ],
                        "sizeUnit" => "ml"
                    ],
                    [
                        "name" => "感冒灵",
                        "size" => [
                            8,
                            10
                        ],
                        "sizeUnit" => "ml"
                    ],
                    [
                        "name" => "阿莫西林",
                        "size" => [
                            5,
                            3
                        ],
                        "sizeUnit" => "ml"
                    ],
                    [
                        "name" => "白加黑",
                        "size" => [
                            9,
                            1
                        ],
                        "sizeUnit" => "ml"
                    ],
                    [
                        "name" => "阿司匹林",
                        "size" => [
                            10,
                            12
                        ],
                        "sizeUnit" => "ml"
                    ],
                    [
                        "name" => "头孢唑啉",
                        "size" => [
                            7,
                            6
                        ],
                        "sizeUnit" => "ml"
                    ],
                    [
                        "name" => "异丙酚",
                        "size" => [
                            9,
                            1
                        ],
                        "sizeUnit" => "ml"
                    ],
                    [
                        "name" => "劳拉西泮",
                        "size" => [
                            8,
                            2
                        ],
                        "sizeUnit" => "ml"
                    ],
                    [
                        "name" => "地西泮",
                        "size" => [
                            7
                        ],
                        "sizeUnit" => "ml"
                    ],
                    [
                        "name" => "咪达唑仑",
                        "size" => [
                            6,
                            3
                        ],
                        "sizeUnit" => "ml"
                    ]
                ],
                "size2Name" => [
                    "1ml" => [
                        "咪达唑仑",
                        "感冒灵",
                        "阿司匹林"
                    ],
                    "2ml" => [
                        "咪达唑仑",
                        "感冒灵",
                        "白加黑"
                    ],
                    "4ml" => [
                        "咪达唑仑",
                        "感冒灵",
                        "艾司挫仑片"
                    ]
                ]
            ]
        ];
        return json($data);

    }

    public function getequipments()
    {
        $data = [
            "equipments" => ["器械1", "器械2", "器械3", "器械4"],
            "name2Size" => [
                [
                    "name" => "器械1",
                    "model" => ["101", "A01"],
                ],
                [
                    "name" => "器械2",
                    "model" => ["201", "B02", "A01"],
                ],
                [
                    "name" => "器械3",
                    "model" => ["201", "B02"],
                ],
                [
                    "name" => "器械4",
                    "model" => ["101", "B02"],
                ],
            ],
            "size2Name" => [
                "101" => [
                    "器械1",
                    "器械4"
                ],
                "201" => [
                    "器械3",
                    "器械2",
                ],
                "A01" => [
                    "器械1",
                    "器械2",
                    "器械4"
                ],
                "B02" => [
                    "器械2",
                    "器械4",
                    "器械3"
                ]
            ]
        ];
        return json($data);
    }

    public function getBoxschemes()
    {
        $data = [
            "message" => "请求成功",
            "code" => 200,
            "data" => [
                "schemes" => [
                    [
                        "schemename" => "方案1",
                        "schemeurl" => "http://192.168.3.109:8888/upload/0eebe0115c7e49119be9e0cee9bfd7df.jpg",
                        "id" => 1,
                        "inUse" => 0
                    ],
                    [
                        "schemename" => "方案2",
                        "schemeurl" => "http://192.168.3.109:8888/upload/0eebe0115c7e49119be9e0cee9bfd7df.jpg",
                        "id" => 2,
                        "inUse" => 0
                    ],
                    [
                        "schemename" => "方案3",
                        "schemeurl" => "http://192.168.3.109:8888/upload/0eebe0115c7e49119be9e0cee9bfd7df.jpg",
                        "id" => 3,
                        "inUse" => 1
                    ],
                ], "timelines" => [
                    [
                        "content" => "方案1",
                        "timestamp" => "2021-12-14 14:45",
                        "id" => 1,
                        "isLastest" => 1,
                        "inUse" => 0
                    ]
                ]
            ]
        ];
        return json($data);
    }

    public function checkSchemeName()
    {
        $name = input('name');
        if ($name === "重复") {
            $data = [
                "message" => "名字重复",
                "code" => 400
            ];
        } else {
            $data = [
                "message" => "名字可",
                "code" => 200
            ];
        }
        return json($data);
    }

    public function searchBoxhistory()
    {
        $data = [
            "message" => "请求成功",
//            "data" => [[
//                "boxNumber" => 1,
//                "cabinetNumber" => 1,
//                "closeTime" => "2021-12-03 17:36",
//                "personnel" => "再",
//                "doubleCheck" => 1,
//                "id" => 1,
//                "inspector" => "正常1",
//                "operationType" => "取毒麻",
//                "notes" => null,
//                "openTime" => "2021-12-03 17:36",
//                "region" => "手术1区",
//                "isAbnormal" => 1
//            ], [
//                "boxNumber" => 1,
//                "cabinetNumber" => 1,
//                "closeTime" => "2021-12-02 17:33",
//                "personnel" => "信",
//                "doubleCheck" => 1,
//                "id" => 2,
//                "inspector" => "正常2",
//                "operationType" => "存毒麻",
//                "notes" => null,
//                "openTime" => "2021-12-02 17:33",
//                "region" => "手术1区",
//                "isAbnormal" => 1
//            ], [
//                "boxNumber" => 1,
//                "cabinetNumber" => 1,
//                "closeTime" => "2021-12-01 17:09",
//                "personnel" => "信",
//                "doubleCheck" => 1,
//                "id" => 3,
//                "inspector" => "异常1(增加)",
//                "operationType" => "手术",
//                "notes" => null,
//                "openTime" => "2021-12-01 17:09",
//                "region" => "手术1区",
//                "isAbnormal" => 0
//            ], [
//                "boxNumber" => 1,
//                "cabinetNumber" => 1,
//                "closeTime" => "2021-12-01 17:09",
//                "personnel" => "信",
//                "operationType" => "手术",
//                "doubleCheck" => 1,
//                "id" => 4,
//                "inspector" => "异常3(增加)",
//                "notes" => null,
//                "openTime" => "2021-12-01 17:09",
//                "region" => "手术1区",
//                "isAbnormal" => 0
//            ], [
//                "boxNumber" => 1,
//                "cabinetNumber" => 1,
//                "closeTime" => "2021-12-01 17:09",
//                "personnel" => "信",
//                "operationType" => "手术",
//                "doubleCheck" => 1,
//                "id" => 5,
//                "inspector" => "异常3(减少)",
//                "notes" => null,
//                "openTime" => "2021-12-01 17:09",
//                "region" => "手术1区",
//                "isAbnormal" => 0
//            ], [
//                "boxNumber" => 1,
//                "cabinetNumber" => 1,
//                "operationType" => "未知",
//                "closeTime" => "2021-12-01 17:09",
//                "personnel" => "信",
//                "doubleCheck" => 1,
//                "id" => 6,
//                "inspector" => "异常1(减少)",
//                "notes" => null,
//                "openTime" => "2021-12-01 17:09",
//                "region" => "手术1区",
//                "isAbnormal" => 0
//            ], [
//                "boxNumber" => 1,
//                "cabinetNumber" => 1,
//                "closeTime" => "2021-12-01 17:09",
//                "personnel" => "信",
//                "doubleCheck" => 1,
//                "id" => 7,
//                "operationType" => "补药 ",
//                "inspector" => "异常2",
//                "notes" => null,
//                "openTime" => "2021-12-01 17:09",
//                "region" => "手术1区",
//                "isAbnormal" => 0
//            ],
            "data" => [[
                "boxNumber" => 1,
                "cabinetNumber" => 1,
                "closeTime" => "2021-12-03 17:36",
                "personnel" => "再",
                "doubleCheck" => 1,
                "id" => 1,
                "inspector" => "正常1",
                "operationType" => "一切正常",
                "notes" => null,
                "openTime" => "2021-12-03 17:36",
                "region" => "手术1区",
                "isAbnormal" => 1
            ], [
                "boxNumber" => 1,
                "cabinetNumber" => 1,
                "closeTime" => "2021-12-02 17:33",
                "personnel" => "信",
                "doubleCheck" => 1,
                "id" => 2,
                "inspector" => "正常2 补充药品",
                "operationType" => "补充药品 2种照片",
                "notes" => null,
                "openTime" => "2021-12-02 17:33",
                "region" => "手术1区",
                "isAbnormal" => 1
            ], [
                "boxNumber" => 1,
                "cabinetNumber" => 1,
                "closeTime" => "2021-12-01 17:09",
                "personnel" => "信",
                "doubleCheck" => 1,
                "id" => 3,
                "inspector" => "正常3 药品减少",
                "operationType" => "手术",
                "notes" => null,
                "openTime" => "2021-12-01 17:09",
                "region" => "手术1区",
                "isAbnormal" => 1
            ], [
                "boxNumber" => 1,
                "cabinetNumber" => 1,
                "closeTime" => "2021-12-01 17:09",
                "personnel" => "信",
                "operationType" => "手术",
                "doubleCheck" => 1,
                "id" => 4,
                "inspector" => "存毒麻",
                "notes" => null,
                "openTime" => "2021-12-01 17:09",
                "region" => "手术1区",
                "isAbnormal" => 1
            ], [
                "boxNumber" => 1,
                "cabinetNumber" => 1,
                "closeTime" => "2021-12-01 17:09",
                "personnel" => "信",
                "operationType" => "手术",
                "doubleCheck" => 1,
                "id" => 5,
                "inspector" => "异常1(减少)",
                "notes" => null,
                "openTime" => "2021-12-01 17:09",
                "region" => "手术1区",
                "isAbnormal" => 0
            ], [
                "boxNumber" => 1,
                "cabinetNumber" => 1,
                "operationType" => "未知",
                "closeTime" => "2021-12-01 17:09",
                "personnel" => "信",
                "doubleCheck" => 1,
                "id" => 6,
                "inspector" => "异常2(减少)",
                "notes" => null,
                "openTime" => "2021-12-01 17:09",
                "region" => "手术1区",
                "isAbnormal" => 0
            ],
                [
                    "boxNumber" => 1,
                    "cabinetNumber" => 1,
                    "closeTime" => "2021-12-01 17:09",
                    "personnel" => "信",
                    "doubleCheck" => 1,
                    "id" => 7,
                    "operationType" => "补药 ",
                    "inspector" => "特殊异常(两种照片)",
                    "notes" => null,
                    "openTime" => "2021-12-01 17:09",
                    "region" => "手术1区",
                    "isAbnormal" => 0
                ],
                [
                    "boxNumber" => 1,
                    "cabinetNumber" => 1,
                    "closeTime" => "2021-12-01 17:09",
                    "personnel" => "信",
                    "doubleCheck" => 1,
                    "id" => 8,
                    "operationType" => "补药 ",
                    "inspector" => "特殊异常(三种照片)",
                    "notes" => null,
                    "openTime" => "2021-12-01 17:09",
                    "region" => "手术1区",
                    "isAbnormal" => 0
                ],
                [
                    "boxNumber" => 1,
                    "cabinetNumber" => 1,
                    "closeTime" => "2021-12-01 17:09",
                    "personnel" => "信",
                    "doubleCheck" => 1,
                    "id" => 9,
                    "operationType" => "补药 ",
                    "inspector" => "正常2 补充药品(三种照片)",
                    "notes" => null,
                    "openTime" => "2021-12-01 17:09",
                    "region" => "手术1区",
                    "isAbnormal" => 1
                ],
                [
                    "boxNumber" => 1,
                    "cabinetNumber" => 1,
                    "closeTime" => "2021-12-01 17:09",
                    "personnel" => "信",
                    "doubleCheck" => 1,
                    "id" => 9,
                    "operationType" => "补药 ",
                    "inspector" => "正常2 补充药品(2种照片)",
                    "notes" => null,
                    "openTime" => "2021-12-01 17:09",
                    "region" => "手术1区",
                    "isAbnormal" => 1
                ],

            ],
            "code" => 200,
            "totalNums" => 3
        ];
        return json($data);
    }

    public function doublecheck()
    {
        $data = [
            "code" => 200,
            "message" => "ok",
            "isNone" => rand(0, 1),
            "data" => [
                "doublecheckLists" => [
                    "charger" => [
                        "name" => "charger小雪",
                        "signImg" => "https://codehere.top/static/logo.png",
                        "isElectOnly" => 1,
                    ],
                    "checker" => [
                        "name" => "checker小红",
                        "signImg" => "https://codehere.top/static/index.png",
                        "isElectOnly" => 0,
                    ]],
                "videoUrl" => "https://codehere.top/static/video.mp4",
                "videoStamps" => [[
                    "id" => 1,
                    "url" => "https://codehere.top/static/1.mp4", // 视频地址
                    "time" => "19:09-20:02", // 此段视频节点
                ], [
                    "id" => 2,
                    "url" => "https://codehere.top/static/2.mp4", // 视频地址
                    "time" => "11:10-12:09", // 此段视频节点
                ], [
                    "id" => 3,
                    "url" => "https://codehere.top/static/3.mp4", // 视频地址
                    "time" => "12:10-13:34", // 此段视频节点
                ]]
            ]
        ];
        return json($data);
    }

    public function drugsused()
    {
        $id = input('id');
        switch ($id) {
            case 1: // 正常1
                $data = [
                    "message" => "请求成功",
                    "code" => 200,
                    "data" => [
//                        "beforeImg" => "https://npdims.thearay.com/api/upload/65189f96-081d-407b-94cc-910b78cf8151.jpg",
//                        "afterImg" => "https://npdims.thearay.com/api/upload/d132610e-548e-4e38-81c4-12daaa857e50.jpg",
                        "images" => [
                            [
                                "name" => "药箱药品状态",
                                "url" => "https://npdims.thearay.com/api/upload/d132610e-548e-4e38-81c4-12daaa857e50.jpg"
                            ]
                        ],
                        "checkImg" => "", // 为空
                        "isAbnormal" => 1, // 1代表正常
                        "isUnusual" => 0, // 不是护士补充药品
                        "abnormalDrugs" => [], // isAbnormal为1, 这个字段可以空
                        "unusualData" => [],
                        "routineDrugs" => [
                            [
                                "id" => 1,
                                "name" => "丙泊酚乳状",
                                "size" => 2,
                                "sizeUnit" => "ml",
                                "account" => 10,
                                "accountUnit" => "ml"
                            ]
                        ],
                        "anestheticDrugs" => [
                            [
                                "id" => 2,
                                "name" => "酚酞",
                                "size" => 9,
                                "sizeUnit" => "ml",
                                "account" => 14,
                                "accountUnit" => "ml"
                            ]
                        ],
                        "refrigeratorDrugs" => [
                            [
                                "id" => 2,
                                "name" => "冷藏药物1",
                                "size" => 9,
                                "sizeUnit" => "ml",
                                "account" => 14,
                                "accountUnit" => "ml"
                            ]],
                        "highCostDrugs" => [
                            [
                                "id" => 1,
                                "name" => "导管",
                                "size" => 1,
                                "sizeUnit" => "个",
                                "account" => 2,
                                "accountUnit" => "个"
                            ],
                            [
                                "id" => 4,
                                "name" => "导管4",
                                "size" => 1,
                                "sizeUnit" => "个",
                                "account" => 1,
                                "accountUnit" => "个"
                            ]
                        ],
                        "startNumbers" => [  // 初始
                            "drug" => 8,
                            "equipment" => 22
                        ],
                        "checkNumbers" => [ // 核算
                            "drug" => 6,
                            "equipment" => 11
                        ],
                        "endNumbers" => [ // 结束 (默认只取这一种)
                            "drug" => 27,
                            "equipment" => 17
                        ]
                    ]
                ];
                break;
            case 2: // 正常2
                $data = [
                    "message" => "请求成功",
                    "code" => 200,
                    "data" => [
                        "images" => [
                            [
                                "name" => "初始",
                                "url" => "https://npdims.thearay.com/api/upload/d132610e-548e-4e38-81c4-12daaa857e50.jpg"
                            ],
                            [
                                "name" => "结束",
                                "url" => "https://npdims.thearay.com/api/upload/d132610e-548e-4e38-81c4-12daaa857e50.jpg"
                            ]
                        ],
                        "isAbnormal" => 1, //非异常, 但是是护士补充药品
                        "abnormalDrugs" => [], // isAbnormal为1, 这个字段可以空
                        "isUnusual" => 1, //非异常, 但是是护士补充药品
                        "routineDrugs" => [], // 可以为空
                        "anestheticDrugs" => [], // 可以为空
                        "refrigeratorDrugs" => [], // 可以为空
                        "highCostDrugs" => [], // 可以为空
                        "startNumbers" => [  // 初始
                            "drug" => 8,
                            "equipment" => 22
                        ],
                        "checkNumbers" => [ // 核算
                            "drug" => 6,
                            "equipment" => 11
                        ],
                        "endNumbers" => [ // 结束 (默认只取这一种)
                            "drug" => 27,
                            "equipment" => 17
                        ],
                        "unusualData" => [
                            [
                                "region" => "分区1",
                                "name" => "胃酸2",
                                "size" => 1,
                                "sizeUnit" => "ml",
                                "account" => 2,
                                "type" => "up"
                            ],
                            [
                                "region" => "分区2",
                                "name" => "核酸2",
                                "size" => 2,
                                "sizeUnit" => "ml",
                                "account" => 3,
                                "type" => "down"
                            ]
                        ]]
                ];
                break;
            case 3: // 正常3
                $data = [
                    "message" => "请求成功",
                    "code" => 200,
                    "data" => [
                        "images" => [
                            [
                                "name" => "初始",
                                "url" => "https://npdims.thearay.com/api/upload/d132610e-548e-4e38-81c4-12daaa857e50.jpg"
                            ],
                            [
                                "name" => "核算, 结束",
                                "url" => "https://npdims.thearay.com/api/upload/d132610e-548e-4e38-81c4-12daaa857e50.jpg"
                            ]
                        ],
                        "isAbnormal" => 1, // 0代表不正常
                        "isUnusual" => 2, // 非异常情况2 (无手术任务与核算，且药品减少)
                        "abnormalDrugs" => [ // isAbnormal为0
                            [
                                "id" => 1,
                                "region" => "分区一",
                                "name" => "丙(异常药物)",
                                "size" => 2,
                                "sizeUnit" => "ml",
                                "account" => 10,
                                "accountUnit" => "ml"
                            ]
                        ],
                        "unusualData" => [[
                            "region" => "分区3",
                            "name" => "普通异常药品3",
                            "size" => 1,
                            "sizeUnit" => "ml",
                            "account" => 2
                        ],
                        ],
                        "routineDrugs" => [
                            [
                                "id" => 1,
                                "name" => "丙泊酚乳状",
                                "size" => 2,
                                "sizeUnit" => "ml",
                                "account" => 10,
                                "accountUnit" => "ml"
                            ]
                        ],
                        "anestheticDrugs" => [
                            [
                                "id" => 2,
                                "name" => "酚酞",
                                "size" => 9,
                                "sizeUnit" => "ml",
                                "account" => 14,
                                "accountUnit" => "ml"
                            ]
                        ],
                        "refrigeratorDrugs" => [
                            [
                                "id" => 2,
                                "name" => "冷藏药物1",
                                "size" => 9,
                                "sizeUnit" => "ml",
                                "account" => 14,
                                "accountUnit" => "ml"
                            ]],
                        "highCostDrugs" => [
                            [
                                "id" => 1,
                                "name" => "导管",
                                "size" => 1,
                                "sizeUnit" => "个",
                                "account" => 2,
                                "accountUnit" => "个"
                            ],
                            [
                                "id" => 4,
                                "name" => "导管4",
                                "size" => 1,
                                "sizeUnit" => "个",
                                "account" => 1,
                                "accountUnit" => "个"
                            ]
                        ],
                        "startNumbers" => [  // 初始
                            "drug" => 8,
                            "equipment" => 22
                        ],
                        "checkNumbers" => [ // 核算
                            "drug" => 6,
                            "equipment" => 11
                        ],
                        "endNumbers" => [ // 结束 (默认只取这一种)
                            "drug" => 27,
                            "equipment" => 17
                        ]
                    ]
                ];
                break;
            case 4: // 正常 存取毒麻
                $data = [
                    "message" => "请求成功",
                    "code" => 200,
                    "data" => [
                        "images" => [
                            [
                                "name" => "药箱药品状态",
                                "url" => "https://npdims.thearay.com/api/upload/d132610e-548e-4e38-81c4-12daaa857e50.jpg"
                            ]
                        ],
                        "isAbnormal" => 1, // 0代表不正常
                        "isUnusual" => 3, // 为异常情况2 (无手术任务与核算，且药品减少)
                        "routineDrugs" => [
                            [
                                "region" => "常规",
                                "name" => "胃酸4",
                                "size" => 1,
                                "sizeUnit" => "ml",
                                "account" => 2
                            ],],  // 都可以为空
                        "anestheticDrugs" => [
                            [
                                "region" => "毒麻",
                                "name" => "胃酸4",
                                "size" => 1,
                                "sizeUnit" => "ml",
                                "account" => 2
                            ],], // 都可以为空
                        "refrigeratorDrugs" => [
                            [
                                "region" => "冷藏",
                                "name" => "胃酸4",
                                "size" => 1,
                                "sizeUnit" => "ml",
                                "account" => 2
                            ],], // 都可以为空
                        "highCostDrugs" => [
                            [
                                "region" => "高耗材",
                                "name" => "胃酸4",
                                "size" => 1,
                                "sizeUnit" => "ml",
                                "account" => 2
                            ],], // 都可以为空
                        "unusualData" => [],
                        "oddAdding" => [],
                        "startNumbers" => [  // 初始
                            "drug" => 8,
                            "equipment" => 22
                        ],
                        "checkNumbers" => [ // 核算
                            "drug" => 6,
                            "equipment" => 11
                        ],
                        "endNumbers" => [ // 结束 (默认只取这一种)
                            "drug" => 27,
                            "equipment" => 17
                        ],
                    ]
                ];
                break;
            case 5:  // 异常1(减少)
                $data = [
                    "message" => "请求成功",
                    "code" => 200,
                    "data" => [
                        "images" => [
                            [
                                "name" => "初始",
                                "url" => "https://npdims.thearay.com/api/upload/d132610e-548e-4e38-81c4-12daaa857e50.jpg"
                            ],
                            [
                                "name" => "结束",
                                "url" => "https://npdims.thearay.com/api/upload/d132610e-548e-4e38-81c4-12daaa857e50.jpg"
                            ]
                        ],
                        "isAbnormal" => 0, // 0代表不正常
                        "isUnusual" => 0, // 为异常情况3
                        "routineDrugs" => [],  // 都可以为空
                        "anestheticDrugs" => [], // 都可以为空
                        "refrigeratorDrugs" => [], // 都可以为空
                        "highCostDrugs" => [], // 都可以为空
                        "abnormalDrugs" => [], // 都可以为空
                        "oddAdding" => [[
                            "region" => "分区1",
                            "name" => "异常减少药",
                            "size" => 1,
                            "sizeUnit" => "ml",
                            "account" => 2,
                            "type" => "down"
                        ], [
                            "region" => "分区2",
                            "name" => "异常减少药",
                            "size" => 1,
                            "sizeUnit" => "ml",
                            "account" => 2,
                            "type" => "up"
                        ],
                        ],
                        "unusualData" => [[
                            "region" => "分区5",
                            "name" => "普通异常药品5",
                            "size" => 1,
                            "sizeUnit" => "ml",
                            "account" => 2,
                            "type" => "down"
                        ],
                        ],
                        "startNumbers" => [  // 初始
                            "drug" => 8,
                            "equipment" => 22
                        ],
                        "checkNumbers" => [ // 核算
                            "drug" => 6,
                            "equipment" => 11
                        ],
                        "endNumbers" => [ // 结束 (默认只取这一种)
                            "drug" => 27,
                            "equipment" => 17
                        ]
                    ]
                ];
                break;
            case 6: // 异常2(减少)
                $data = [
                    "message" => "请求成功",
                    "code" => 200,
                    "data" => [
                        "images" => [
                            [
                                "name" => "初始",
                                "url" => "https://npdims.thearay.com/api/upload/d132610e-548e-4e38-81c4-12daaa857e50.jpg"
                            ],
                            [
                                "name" => "核算",
                                "url" => "https://npdims.thearay.com/api/upload/d132610e-548e-4e38-81c4-12daaa857e50.jpg"
                            ],
                            [
                                "name" => "结束",
                                "url" => "https://npdims.thearay.com/api/upload/d132610e-548e-4e38-81c4-12daaa857e50.jpg"
                            ]
                        ],
                        "isAbnormal" => 0, // 0代表不正常
                        "isUnusual" => 1, // 非异常情况2 (无手术任务与核算，且药品减少)
                        "abnormalDrugs" => [[
                            "id" => 1,
                            "region" => "分区一",
                            "name" => "丙(异常药物)",
                            "size" => 2,
                            "sizeUnit" => "ml",
                            "account" => 10,
                            "accountUnit" => "ml",
                            "type" => "down"
                        ]],
                        "unusualData" => [[
                            "region" => "分区3",
                            "name" => "普通异常药品3",
                            "size" => 1,
                            "sizeUnit" => "ml",
                            "account" => 2,
                            "type" => "up"
                        ], [
                            "region" => "分区4",
                            "name" => "普通异常药品3",
                            "size" => 1,
                            "sizeUnit" => "ml",
                            "account" => 2,
                            "type" => "down"
                        ],
                        ],
                        "routineDrugs" => [
                        ],
                        "anestheticDrugs" => [
                        ],
                        "refrigeratorDrugs" => [],
                        "highCostDrugs" => [
                        ],
                        "startNumbers" => [  // 初始
                            "drug" => 8,
                            "equipment" => 22
                        ],
                        "checkNumbers" => [ // 核算
                            "drug" => 6,
                            "equipment" => 11
                        ],
                        "endNumbers" => [ // 结束 (默认只取这一种)
                            "drug" => 27,
                            "equipment" => 17
                        ]
                    ]
                ];
                break;
            case 7: // 异常3(2种情况)
                $data = [
                    "message" => "请求成功",
                    "code" => 200,
                    "data" => [
                        "images" => [
                            [
                                "name" => "初始, 核算",
                                "url" => "https://npdims.thearay.com/api/upload/d132610e-548e-4e38-81c4-12daaa857e50.jpg"
                            ],
                            [
                                "name" => "结束",
                                "url" => "https://npdims.thearay.com/api/upload/d132610e-548e-4e38-81c4-12daaa857e50.jpg"
                            ]
                        ],
                        "isAbnormal" => 0, // 0代表不正常
                        "isUnusual" => 2, // 为异常情况2 (无手术任务与核算，且药品减少)
                        "routineDrugs" => [],  // 都可以为空
                        "anestheticDrugs" => [], // 都可以为空
                        "refrigeratorDrugs" => [], // 都可以为空
                        "highCostDrugs" => [], // 都可以为空
                        "abnormalDrugs" => [], // 都可以为空
                        "unusualData" => [
                            [
                                "region" => "分区4",
                                "name" => "胃酸4",
                                "size" => 1,
                                "sizeUnit" => "ml",
                                "account" => 2,
                                "type" => "down"
                            ],
                        ],
                        "startNumbers" => [  // 初始
                            "drug" => 8,
                            "equipment" => 22
                        ],
                        "checkNumbers" => [ // 核算
                            "drug" => 6,
                            "equipment" => 11
                        ],
                        "endNumbers" => [ // 结束 (默认只取这一种)
                            "drug" => 27,
                            "equipment" => 17
                        ],
                    ]
                ];
                break;
            case 8: // 异常3(三种情况)
                $data = [
                    "message" => "请求成功",
                    "code" => 200,
                    "data" => [
                        "images" => [
                            [
                                "name" => "初始",
                                "url" => "https://npdims.thearay.com/api/upload/d132610e-548e-4e38-81c4-12daaa857e50.jpg"
                            ],
                            [
                                "name" => "核算",
                                "url" => "https://npdims.thearay.com/api/upload/d132610e-548e-4e38-81c4-12daaa857e50.jpg"
                            ],
                            [
                                "name" => "结束",
                                "url" => "https://npdims.thearay.com/api/upload/d132610e-548e-4e38-81c4-12daaa857e50.jpg"
                            ]
                        ],
                        "isAbnormal" => 0, // 0代表不正常
                        "isUnusual" => 2, // 为异常情况2 (无手术任务与核算，且药品减少)
                        "routineDrugs" => [],  // 都可以为空
                        "anestheticDrugs" => [], // 都可以为空
                        "refrigeratorDrugs" => [], // 都可以为空
                        "highCostDrugs" => [], // 都可以为空
                        "abnormalDrugs" => [], // 都可以为空
                        "unusualData" => [
                            [
                                "region" => "分区4",
                                "name" => "胃酸4",
                                "size" => 1,
                                "sizeUnit" => "ml",
                                "account" => 2,
                                "type" => "down"
                            ],
                        ],
                        "startNumbers" => [  // 初始
                            "drug" => 8,
                            "equipment" => 22
                        ],
                        "checkNumbers" => [ // 核算
                            "drug" => 6,
                            "equipment" => 11
                        ],
                        "endNumbers" => [ // 结束 (默认只取这一种)
                            "drug" => 27,
                            "equipment" => 17
                        ],
                    ]
                ];
                break;
            case 9: // 正常2
                $data = [
                    "message" => "请求成功",
                    "code" => 200,
                    "data" => [
                        "images" => [
                            [
                                "name" => "初始",
                                "url" => "https://npdims.thearay.com/api/upload/d132610e-548e-4e38-81c4-12daaa857e50.jpg"
                            ],
                            [
                                "name" => "核算",
                                "url" => "https://npdims.thearay.com/api/upload/d132610e-548e-4e38-81c4-12daaa857e50.jpg"
                            ],
                            [
                                "name" => "结束",
                                "url" => "https://npdims.thearay.com/api/upload/d132610e-548e-4e38-81c4-12daaa857e50.jpg"
                            ]
                        ],
                        "isAbnormal" => 1, //非异常, 但是是护士补充药品
                        "abnormalDrugs" => [], // isAbnormal为1, 这个字段可以空
                        "isUnusual" => 1, //非异常, 但是是护士补充药品
                        "routineDrugs" => [], // 可以为空
                        "anestheticDrugs" => [], // 可以为空
                        "refrigeratorDrugs" => [], // 可以为空
                        "highCostDrugs" => [], // 可以为空
                        "startNumbers" => [  // 初始
                            "drug" => 8,
                            "equipment" => 22
                        ],
                        "checkNumbers" => [ // 核算
                            "drug" => 6,
                            "equipment" => 11
                        ],
                        "endNumbers" => [ // 结束 (默认只取这一种)
                            "drug" => 27,
                            "equipment" => 17
                        ],
                        "unusualData" => [
                            [
                                "region" => "分区1",
                                "name" => "胃酸2",
                                "size" => 1,
                                "sizeUnit" => "ml",
                                "account" => 2,
                                "type" => "down"
                            ],
                            [
                                "region" => "分区2",
                                "name" => "核酸2",
                                "size" => 2,
                                "sizeUnit" => "ml",
                                "account" => 3,
                                "type" => "up"
                            ]
                        ]]
                ];
                break;
            case 10: // 正常2
                $data = [
                    "message" => "请求成功",
                    "code" => 200,
                    "data" => [
                        "images" => [
                            [
                                "name" => "初始, 核算",
                                "url" => "https://npdims.thearay.com/api/upload/d132610e-548e-4e38-81c4-12daaa857e50.jpg"
                            ],
                            [
                                "name" => "结束",
                                "url" => "https://npdims.thearay.com/api/upload/d132610e-548e-4e38-81c4-12daaa857e50.jpg"
                            ]
                        ],
                        "isAbnormal" => 1, //非异常, 但是是护士补充药品
                        "abnormalDrugs" => [], // isAbnormal为1, 这个字段可以空
                        "isUnusual" => 1, //非异常, 但是是护士补充药品
                        "routineDrugs" => [], // 可以为空
                        "anestheticDrugs" => [], // 可以为空
                        "refrigeratorDrugs" => [], // 可以为空
                        "highCostDrugs" => [], // 可以为空
                        "startNumbers" => [  // 初始
                            "drug" => 8,
                            "equipment" => 22
                        ],
                        "checkNumbers" => [ // 核算
                            "drug" => 6,
                            "equipment" => 11
                        ],
                        "endNumbers" => [ // 结束 (默认只取这一种)
                            "drug" => 27,
                            "equipment" => 17
                        ],
                        "unusualData" => [
                            [
                                "region" => "分区1",
                                "name" => "胃酸2",
                                "size" => 1,
                                "sizeUnit" => "ml",
                                "account" => 2,
                                "type" => "down"
                            ],
                            [
                                "region" => "分区2",
                                "name" => "核酸2",
                                "size" => 2,
                                "sizeUnit" => "ml",
                                "account" => 3,
                                "type" => "down"
                            ],
                            [
                                "region" => "分区3",
                                "name" => "核酸78",
                                "size" => 2,
                                "sizeUnit" => "ml",
                                "account" => 3,
                                "type" => "up"
                            ]
                        ]]
                ];
                break;
            default:
                $id = input("id");
                $data = ["message" => "目前id的得是1-7之间", "id" => $id];
        }
        return json($data);
    }

    public function checkHistory()
    {
        $data = [
            "code" => 200,
            "message" => "ok",
            "totalNums" => 8,
            "data" => [
                [
                    "medicalID" => 2222,
                    "room" => "科室1",
                    "diagnosis" => "临床诊断",
                    "operationName" => "手术名称",
                    "operationType" => "麻醉方式",
                    "doctor" => "医生1",
                    "id" => 1
                ],
                [
                    "medicalID" => 1223,
                    "room" => "科室2",
                    "diagnosis" => "临床诊断",
                    "operationName" => "手术名称",
                    "operationType" => "麻醉方式",
                    "doctor" => "医生2",
                    "id" => 2
                ],
                [
                    "medicalID" => 2212,
                    "room" => "科室1",
                    "diagnosis" => "临床诊断",
                    "operationName" => "手术名称",
                    "operationType" => "麻醉方式",
                    "doctor" => "医生1",
                    "id" => 3
                ],
                [
                    "medicalID" => 1822,
                    "room" => "科室2",
                    "diagnosis" => "临床诊断",
                    "operationName" => "手术名称",
                    "operationType" => "麻醉方式",
                    "doctor" => "医生2",
                    "id" => 4
                ],
                [
                    "medicalID" => 2922,
                    "room" => "科室1",
                    "diagnosis" => "临床诊断",
                    "operationName" => "手术名称",
                    "operationType" => "麻醉方式",
                    "doctor" => "医生1",
                    "id" => 5
                ],
                [
                    "medicalID" => 1122,
                    "room" => "科室2",
                    "diagnosis" => "临床诊断",
                    "operationName" => "手术名称",
                    "operationType" => "麻醉方式",
                    "doctor" => "医生2",
                    "id" => 6
                ],
//                [
//                    "medicalID" => 8922,
//                    "room" => "科室1",
//                    "diagnosis" => "临床诊断",
//                    "operationName" => "手术名称",
//                    "operationType" => "麻醉方式",
//                    "doctor" => "医生1",
//                    "id" => 7
//                ],
//                [
//                    "medicalID" => 78222,
//                    "room" => "科室2",
//                    "diagnosis" => "临床诊断",
//                    "operationName" => "手术名称",
//                    "operationType" => "麻醉方式",
//                    "doctor" => "医生2",
//                    "id" => 8
//                ]
            ]
        ];
        return json($data);
    }

    public function searchRolemanage()
    {
        $data = [
            "message" => "请求成功",
            "code" => 200,
            "data" => [[
                "eSignature" => "http://192.168.3.109:8888/upload/fce09666446846b4b90d17bf96130f32.png",
                "id" => 1,
                "name" => "信瑞",
                "role" => "管理员",
                "permission" => "管理员",
                "username" => "xinrui",
                "veinImage" => null,
                "account" => "账号123",
                "isForbidden" => 0, // 是否禁用状态, 0就是"否", 1就是"是"
                "gender" => "男",
                "phone" => "13521321234", // 联系方式
            ], [
                "eSignature" => "http://192.168.3.109:8888/upload/fce09666446846b4b90d17bf96130f32.png",
                "id" => 2,
                "name" => "信",
                "role" => "护士",
                "permission" => "护士",
                "username" => "xin",
                "veinImage" => null,
                "account" => "账号456",
                "isForbidden" => 0, // 是否禁用状态, 0就是"否", 1就是"是"
                "gender" => "男",
                "phone" => "13521321237", // 联系方式
            ], [
                "eSignature" => "http://192.168.3.109:8888/upload/fce09666446846b4b90d17bf96130f32.png",
                "id" => 3,
                "name" => "李志林",
                "role" => "主任",
                "permission" => "毒麻管理护士",
                "username" => "lzn",
                "veinImage" => null,
                "account" => "账号789",
                "isForbidden" => 1, // 是否禁用状态, 0就是"否", 1就是"是"
                "gender" => "女",
                "phone" => "13421321234", // 联系方式
            ]],
            "totalNums" => 11
        ];
        return json($data);
    }

    public function userLog()
    {
        $data = [
            "message" => "请求成功",
            "code" => 200,
            "data" => [
                [
                    "time" => "2021-08-08 18:02",
                    "account" => "zhangsan",
                    "ip" => "127.0.0.1",
                    "operate" => "login",
                ],
                [
                    "time" => "2021-08-09 16:56",
                    "account" => "sige",
                    "ip" => "127.0.0.2",
                    "operate" => "logout",
                ],
            ],
            "totalNums" => 11, // 总共数据
        ];
        return json($data);
    }

    public function userAction()
    {
        $data = [
            "code" => 200
        ];
        return json($data);
    }

    public function firstdrugs()
    {
        $data = [
            "code" => 200,
            "message" => "ke",
            "data" => [
                [
                    "name" => "药品1",
                    "id" => 2,
                    "size" => "2",
                    "sizeUnit" => "ml",
                    "account" => 2,
                    "used" => 12,
                    "left" => 12,
                    "usedUnit" => "ml"
                ],
                [
                    "name" => "药品2",
                    "id" => 3,
                    "size" => "1",
                    "sizeUnit" => "ml",
                    "account" => 5,
                    "used" => 11,
                    "left" => 7,
                    "usedUnit" => "ml"
                ]
            ],
            "doctor" => "Dr. who",
            "doctorImage" => "https://codehere.top/static/index.png",
            "printCount" => 21,
            "id" => 2
        ];
        return json($data);

    }

    public function patientInfo()
    {
        $data = [
            "code" => 200,
            "message" => "ke",
            "isNone" => rand(0, 1),
            "data" => [
                "name" => "患者12",
                "id" => 2,
                "age" => 19,
                "gender" => "男",
                "bloodType" => "A",
                "inpatientNumber" => 20222,
                "room" => "外科",
                "operationName" => "手术",
                "style" => "局部麻醉咯",
            ]
        ];
        return json($data);
    }

    public function getManage()
    {
        $data = [
            "code" => 200,
            "message" => "请求成功",
            "data" => [
                "isDoubleCheck" => 0,
                "isRecycle" => 0,
                "isTemperature" => 1,
                "isBattery" => 1,
                "temperature" => 12,
                "battery" => 23,
                "isDoubleCheckTips" => 0,
                "isDoubleCheckTime" => "3:00"
            ]
        ];
        return json($data);
    }

    public function getSchemes()
    {
        $data = [
            "message" => "请求成功",
            "code" => 200,
            "data" => [
                [
                    "content" => "方案1",
                    "url" => "http://192.168.3.109:8888/upload/0bfebad383c545cbb554b8079daf3d0c.jpg",
                    "timestamp" => "2021-12-13 17:08",
                    "id" => 1,
                    "isLatest" => 1, // 注意, 这个拼写之前错了, 现在更正
                ],
                [
                    "content" => "方案2",
                    "url" => "http://192.168.3.109:8888/upload/0bfebad383c545cbb554b8079daf3d0c.jpg",
                    "timestamp" => "2021-12-13 19:23",
                    "id" => 2,
                    "isLatest" => 0, // 注意, 这个拼写之前错了, 现在更正
                ]
            ],
        ];
        return json($data);
    }

    public function searchCabinetstate()
    {
        $data = [
            "code" => 200,
            "message" => "成功",
            "data" => [
                [
                    "region" => "分区一",
                    "cabinetNumber" => "1",
                    "boxAccount" => "10/18",
                    "boxNumber" => [1, 2, 3, 4],
                    "id" => "1",
                    "lastModified" => "最近操作人员1",
                    "drug" => "10/10",
                    "ice" => "1/9",
                ],
                [
                    "region" => "新建分区",
                    "cabinetNumber" => "2",
                    "boxAccount" => "7/17",
                    "boxNumber" => [3, 4],
                    "id" => "2",
                    "lastModified" => "最近操作人员2",
                    "drug" => "9/10",
                    "ice" => "5/12",
                ],
                [
                    "region" => "测试",
                    "cabinetNumber" => "4",
                    "boxAccount" => "10/16",
                    "boxNumber" => [1, 2, 3],
                    "id" => "3",
                    "lastModified" => "最近操作人员3",
                    "drug" => "6/10",
                    "ice" => "1/8",
                ],
            ]
        ];
        return json($data);
    }

    public function cabinetstate()
    {
        $id = input("id");
        $table = [];
        switch ($id) {
            case 1:
                $table = [  // 这是一个柜子的数据
                    "id" => 1,
                    "name" => "麻醉一区(8个)",
                    "cabinetNumber" => 2,
                    "cabinetType" => 0,
                    "boxes" => [
                        "1" => [
                            "number" => "01",
                            "battery" => 89,
                            "drugState" => 0,
                            "batteryState" => 0
                        ],
                        "2" => [
                            "number" => "02",
                            "battery" => 78,
                            "drugState" => 1,
                            "batteryState" => 1
                        ],
                        "3" => [
                            "number" => "03",
                            "battery" => 100,
                            "drugState" => 1,
                            "batteryState" => 2
                        ],
                        "4" => [
                            "number" => "04",
                            "battery" => 0,
                            "drugState" => 0,
                            "batteryState" => 0
                        ],
                        "5" => [
                            "number" => "05",
                            "battery" => 78,
                            "drugState" => 0,
                            "batteryState" => 0
                        ],
                        "6" => [
                            "number" => "06",
                            "battery" => 100,
                            "drugState" => 0,
                            "batteryState" => 1
                        ],
                        "7" => [
                            "number" => "07",
                            "battery" => 0,
                            "drugState" => 0,
                            "batteryState" => 2
                        ],
                        "8" => [
                            "number" => "08",
                            "battery" => 78,
                            "drugState" => 1,
                            "batteryState" => 2
                        ]
                    ],
                    "moreNews" => 0,
                    "nextPage" => 0,
                    "news" => [ //动态
                        [
                            "time" => "2021-09-09 12:00",
                            "name" => "阿紫",
                            "action" => "取出",
                            "object" => "模块",
                            "number" => "2",
                            "icon" => "drug",
                            "id" => 1
                        ],
                        [
                            "time" => "2021-08-19 17:00",
                            "name" => "甘宝宝",
                            "action" => "存出",
                            "object" => "模块",
                            "number" => "1",
                            "icon" => "drug",
                            "id" => 2
                        ]
                    ],
                    "status" => [
                        [
                            "boxNumber" => 2,
                            "drugNumber" => 12,
                            "equipmentNumber" => 10,
                            "drug" => 0,
                            "ice" => 0
                        ],
                        [
                            "boxNumber" => 3,
                            "drugNumber" => 22,
                            "equipmentNumber" => 15,
                            "drug" => 1,
                            "ice" => 0
                        ]
                    ]
                ];
                break;
            case 2:
                $table = [
                    "id" => 2,
                    "name" => "测试一区(18个)",
                    "cabinetNumber" => 3,
                    "cabinetType" => 1,
                    "boxes" => [
                        "1" => [
                            "number" => "01",
                            "battery" => 89,
                            "drugState" => 0,
                            "batteryState" => 0
                        ],
                        "2" => [
                            "number" => "02",
                            "battery" => 78,
                            "drugState" => 1,
                            "batteryState" => 1
                        ],
                        "3" => [
                            "number" => "03",
                            "battery" => 100,
                            "drugState" => 1,
                            "batteryState" => 2
                        ],
                        "4" => [
                            "number" => "04",
                            "battery" => 0,
                            "drugState" => 0,
                            "batteryState" => 0
                        ],
                        "5" => [
                            "number" => "05",
                            "battery" => 78,
                            "drugState" => 0,
                            "batteryState" => 0
                        ],
                        "6" => [
                            "number" => "06",
                            "battery" => 100,
                            "drugState" => 0,
                            "batteryState" => 1
                        ],
                        "7" => [
                            "number" => "07",
                            "battery" => 0,
                            "drugState" => 0,
                            "batteryState" => 2
                        ],
                        "8" => [
                            "number" => "08",
                            "battery" => 78,
                            "drugState" => 1,
                            "batteryState" => 2
                        ],
                        "9" => [
                            "number" => "09",
                            "battery" => 100,
                            "drugState" => 0,
                            "batteryState" => 1
                        ],
                        "10" => [
                            "number" => "10",
                            "battery" => 0,
                            "drugState" => 0,
                            "batteryState" => 0
                        ],
                        "11" => [
                            "number" => "11",
                            "battery" => 78,
                            "drugState" => 1,
                            "batteryState" => 2
                        ],
                        "12" => [
                            "number" => "12",
                            "battery" => 100,
                            "drugState" => 0,
                            "batteryState" => 0
                        ],
                        "13" => [
                            "number" => "13",
                            "battery" => 0,
                            "drugState" => 0,
                            "batteryState" => 1
                        ],
                        "15" => [
                            "number" => "15",
                            "battery" => 100,
                            "drugState" => 0,
                            "batteryState" => 0
                        ],
                        "16" => [
                            "number" => "16",
                            "battery" => 0,
                            "drugState" => 0,
                            "batteryState" => 2
                        ],
                        "18" => [
                            "number" => "18",
                            "battery" => 100,
                            "drugState" => 0,
                            "batteryState" => 0
                        ],
                    ],
                    "moreNews" => 1,
                    "nextPage" => 2,
                    "news" => [ //动态
                        [
                            "time" => "2021-09-09 12:00",
                            "name" => "林峰",
                            "action" => "取出",
                            "object" => "盒子",
                            "number" => "2",
                            "icon" => "",
                            "id" => 1
                        ]
                    ],
                    "status" => [
                        [
                            "boxNumber" => 2,
                            "drugNumber" => 12,
                            "equipmentNumber" => 9,
                            "drug" => 1,
                            "ice" => 1
                        ],
                        [
                            "boxNumber" => 3,
                            "drugNumber" => 22,
                            "equipmentNumber" => 15,
                            "drug" => 1,
                            "ice" => 1
                        ],
                        [
                            "boxNumber" => 1,
                            "drugNumber" => 13,
                            "equipmentNumber" => 6,
                            "drug" => 0,
                            "ice" => 1
                        ],
                        [
                            "boxNumber" => 6,
                            "drugNumber" => 23,
                            "equipmentNumber" => 16,
                            "drug" => 0,
                            "ice" => 1
                        ],
                        [
                            "boxNumber" => 1,
                            "drugNumber" => 13,
                            "equipmentNumber" => 6,
                            "drug" => 0,
                            "ice" => 1
                        ],
                        [
                            "boxNumber" => 6,
                            "drugNumber" => 23,
                            "equipmentNumber" => 16,
                            "drug" => 0,
                            "ice" => 1
                        ],
                    ]
                ];
                break;
            case 3:
                $table = [
                    "id" => 3,
                    "name" => "测试二区(28个)",
                    "cabinetNumber" => 4,
                    "cabinetType" => 2,
                    "boxes" => [
                        "1" => [
                            "number" => "01",
                            "battery" => 89,
                            "drugState" => 0,
                            "batteryState" => 0
                        ],
                        "2" => [
                            "number" => "02",
                            "battery" => 78,
                            "drugState" => 1,
                            "batteryState" => 1
                        ],
                        "3" => [
                            "number" => "03",
                            "battery" => 100,
                            "drugState" => 1,
                            "batteryState" => 2
                        ],
                        "4" => [
                            "number" => "04",
                            "battery" => 0,
                            "drugState" => 0,
                            "batteryState" => 0
                        ],
                        "5" => [
                            "number" => "05",
                            "battery" => 78,
                            "drugState" => 0,
                            "batteryState" => 0
                        ],
                        "6" => [
                            "number" => "06",
                            "battery" => 100,
                            "drugState" => 0,
                            "batteryState" => 1
                        ],
                        "7" => [
                            "number" => "07",
                            "battery" => 0,
                            "drugState" => 0,
                            "batteryState" => 2
                        ],
                        "8" => [
                            "number" => "08",
                            "battery" => 78,
                            "drugState" => 1,
                            "batteryState" => 2
                        ],
                        "9" => [
                            "number" => "09",
                            "battery" => 100,
                            "drugState" => 0,
                            "batteryState" => 1
                        ],
                        "10" => [
                            "number" => "10",
                            "battery" => 0,
                            "drugState" => 0,
                            "batteryState" => 0
                        ],
                        "11" => [
                            "number" => "11",
                            "battery" => 78,
                            "drugState" => 1,
                            "batteryState" => 2
                        ],
                        "12" => [
                            "number" => "12",
                            "battery" => 100,
                            "drugState" => 0,
                            "batteryState" => 0
                        ],
                        "13" => [
                            "number" => "13",
                            "battery" => 0,
                            "drugState" => 0,
                            "batteryState" => 1
                        ],
                        "15" => [
                            "number" => "15",
                            "battery" => 100,
                            "drugState" => 0,
                            "batteryState" => 0
                        ],
                        "16" => [
                            "number" => "16",
                            "battery" => 0,
                            "drugState" => 0,
                            "batteryState" => 2
                        ],
                        "18" => [
                            "number" => "18",
                            "battery" => 100,
                            "drugState" => 0,
                            "batteryState" => 0
                        ],

                        "19" => [
                            "number" => "18",
                            "battery" => 100,
                            "drugState" => 0,
                            "batteryState" => 0
                        ],
                        "20" => [
                            "number" => "18",
                            "battery" => 100,
                            "drugState" => 0,
                            "batteryState" => 0
                        ],
                        "21" => [
                            "number" => "18",
                            "battery" => 100,
                            "drugState" => 0,
                            "batteryState" => 0
                        ],
                        "22" => [
                            "number" => "18",
                            "battery" => 100,
                            "drugState" => 0,
                            "batteryState" => 0
                        ],
                        "23" => [
                            "number" => "18",
                            "battery" => 100,
                            "drugState" => 0,
                            "batteryState" => 0
                        ],
                        "24" => [
                            "number" => "18",
                            "battery" => 100,
                            "drugState" => 0,
                            "batteryState" => 0
                        ],
                        "25" => [
                            "number" => "18",
                            "battery" => 100,
                            "drugState" => 0,
                            "batteryState" => 0
                        ],
                        "26" => [
                            "number" => "18",
                            "battery" => 100,
                            "drugState" => 0,
                            "batteryState" => 0
                        ],
                        "27" => [
                            "number" => "18",
                            "battery" => 100,
                            "drugState" => 0,
                            "batteryState" => 0
                        ],
                        "28" => [
                            "number" => "18",
                            "battery" => 100,
                            "drugState" => 0,
                            "batteryState" => 0
                        ]
                    ],
                    "moreNews" => 1,
                    "nextPage" => 2,
                    "news" => [ //动态
                        [
                            "time" => "2021-09-09 12:00",
                            "name" => "林峰",
                            "action" => "取出",
                            "object" => "盒子",
                            "number" => "2",
                            "icon" => "",
                            "id" => 1
                        ],
                        [
                            "time" => "2021-08-19 17:00",
                            "name" => "蔡依林",
                            "action" => "存出",
                            "object" => "模块",
                            "number" => "1",
                            "icon" => "drug",
                            "id" => 2
                        ],
                        [
                            "time" => "2021-09-09 12:00",
                            "name" => "林晓敏",
                            "action" => "取出",
                            "object" => "盒子",
                            "number" => "12",
                            "icon" => "",
                            "id" => 1
                        ],
                        [
                            "time" => "2021-08-19 17:00",
                            "name" => "小页",
                            "action" => "存出",
                            "object" => "模块",
                            "number" => "1",
                            "icon" => "drug",
                            "id" => 2
                        ],
                        [
                            "time" => "2021-09-09 12:00",
                            "name" => "林晓敏",
                            "action" => "取出",
                            "object" => "盒子",
                            "number" => "12",
                            "icon" => "",
                            "id" => 1
                        ],
                        [
                            "time" => "2021-08-19 17:10",
                            "name" => "小页2",
                            "action" => "存出",
                            "object" => "模块",
                            "number" => "1",
                            "icon" => "drug",
                            "id" => 2
                        ],
                        [
                            "time" => "2021-09-09 12:02",
                            "name" => "林晓敏1",
                            "action" => "取出",
                            "object" => "盒子",
                            "number" => "12",
                            "icon" => "",
                            "id" => 1
                        ],
                        [
                            "time" => "2021-08-19 17:50",
                            "name" => "小页2",
                            "action" => "存出",
                            "object" => "模块",
                            "number" => "1",
                            "icon" => "drug",
                            "id" => 2
                        ],
                    ],
                    "status" => [
                        [
                            "boxNumber" => 2,
                            "drugNumber" => 12,
                            "equipmentNumber" => 10,
                            "drug" => 0,
                            "ice" => 1
                        ],
                        [
                            "boxNumber" => 3,
                            "drugNumber" => 22,
                            "equipmentNumber" => 15,
                            "drug" => 1,
                            "ice" => 1
                        ],
                        [
                            "boxNumber" => 1,
                            "drugNumber" => 13,
                            "equipmentNumber" => 6,
                            "drug" => 0,
                            "ice" => 1
                        ],
                        [
                            "boxNumber" => 6,
                            "drugNumber" => 23,
                            "equipmentNumber" => 16,
                            "drug" => 0,
                            "ice" => 1
                        ],
                    ]
                ];
                break;
            default:
                break;
        }
        $data = [
            "code" => 200,
            "message" => "请求成功",
            "data" => $table
        ];
        return json($data);
    }

    public function moreNews()
    {
        $page = input('page');
        $data = [];
        switch ($page) {
            case 2:
                $data = [
                    "code" => 200,
                    "message" => "请求成功",
                    "data" =>
                        [  // 这是一个柜子的数据
                            "id" => 1,
                            "moreNews" => 1, // 还有没有多余30条呢, 看这个字段
                            "nextPage" => 3, // 下一页的page id
                            "news" => [ //动态
                                [
                                    "time" => "2021-09-09 1:00",
                                    "name" => "林峰1",
                                    "action" => "取出1",
                                    "object" => "模块",
                                    "number" => "2",
                                    "icon" => "ice",
                                    "id" => 4
                                ],
                                [
                                    "time" => "2021-08-19 1:00",
                                    "name" => "蔡依林1",
                                    "action" => "存出1",
                                    "object" => "盒子1",
                                    "number" => "2",
                                    "icon" => "ice",
                                    "id" => 3
                                ],
                                [
                                    "time" => "2021-08-19 11:00",
                                    "name" => "蔡依林1",
                                    "action" => "存出1",
                                    "object" => "盒子1",
                                    "number" => "2",
                                    "icon" => "drug",
                                    "id" => 3
                                ]
                            ],
                        ]
                ];
                break;
            case 3:
                $data = [
                    "code" => 200,
                    "message" => "请求成功",
                    "data" =>
                        [  // 这是一个柜子的数据
                            "id" => 1,
                            "moreNews" => 0, // 还有没有多余30条呢, 看这个字段
                            "nextPage" => 1, // 下一页的page id
                            "news" => [ //动态
                                [
                                    "time" => "2021-07-03 15:00",
                                    "name" => "林峰2",
                                    "action" => "取出2",
                                    "object" => "盒子2",
                                    "number" => "5",
                                    "icon" => "ice",
                                    "id" => 5
                                ],
                                [
                                    "time" => "2022-01-11 17:00",
                                    "name" => "蔡依林2",
                                    "action" => "存出2",
                                    "object" => "盒子2",
                                    "number" => "6",
                                    "icon" => "",
                                    "id" => 6
                                ]
                            ],

                        ]
                ];
                break;
            default:
                break;
        }
        return json($data);

    }

    public function monitor()
    {
        $data = [
            "briefSum" => [
                "enrolledDrugs" => 10,
                "enrolledEquipments" => 5,
                "surgeryNumber" => 87,
                "doubleCheckNumber" => 34,
                "drugNumber" => 34
            ],

            "cabinetsData" => [
                [
                    [
                        "batteryState" => 1,
                        "battery" => 67,
                        "boxNumber" => 11,
                        "boxState" => 1,
                        "cabinetNumber" => 2,
                        "drugState" => 0,
                        "drugStateNeed" => [
                            "ice" => false,
                            "drug" => false
                        ],
                        "id" => 1,
                        "notes" => null,
                        "personnel" => "王某1b",
                        "region" => "手术二区1",
                        "state" => 1,
                        "temperature" => "18.2℃"
                    ],
                    [
                        "batteryState" => 1,
                        "battery" => 89,
                        "boxNumber" => 56,
                        "boxState" => 2,
                        "cabinetNumber" => 1,
                        "drugState" => 1,
                        "drugStateNeed" => [
                            "ice" => false,
                            "drug" => true
                        ],
                        "id" => 1,
                        "notes" => null,
                        "personnel" => "王某2b",
                        "region" => "手术二区3",
                        "state" => 2,
                        "temperature" => "17.1℃"
                    ],
                    [
                        "batteryState" => 2,
                        "battery" => 89,
                        "boxNumber" => 1,
                        "boxState" => 2,
                        "cabinetNumber" => 1,
                        "drugState" => 1,
                        "drugStateNeed" => [
                            "ice" => true,
                            "drug" => true
                        ],
                        "id" => 1,
                        "notes" => null,
                        "personnel" => "王某4a",
                        "region" => "手术二区4",
                        "state" => 2,
                        "temperature" => "18.1℃"
                    ],
                    [
                        "batteryState" => 2,
                        "battery" => 78,
                        "boxNumber" => 1,
                        "boxState" => 2,
                        "cabinetNumber" => 1,
                        "drugState" => 1,
                        "drugStateNeed" => [
                            "ice" => true,
                            "drug" => true
                        ],
                        "id" => 1,
                        "notes" => null,
                        "personnel" => "王某5a",
                        "region" => "手术二区5",
                        "state" => 2,
                        "temperature" => "18.1℃"
                    ],
                    [
                        "batteryState" => 1,
                        "battery" => 89,
                        "boxNumber" => 11,
                        "boxState" => 1,
                        "cabinetNumber" => 2,
                        "drugState" => 0,
                        "drugStateNeed" => [
                            "ice" => false,
                            "drug" => false
                        ],
                        "id" => 1,
                        "notes" => null,
                        "personnel" => "王某1a",
                        "region" => "手术二区1",
                        "state" => 1,
                        "temperature" => "18.2℃"
                    ],
                    [
                        "batteryState" => 1,
                        "boxNumber" => 56,
                        "battery" => 56,
                        "boxState" => 2,
                        "cabinetNumber" => 1,
                        "drugState" => 1,
                        "drugStateNeed" => [
                            "ice" => false,
                            "drug" => true
                        ],
                        "id" => 1,
                        "notes" => null,
                        "personnel" => "王某2a",
                        "region" => "手术二区3",
                        "state" => 2,
                        "temperature" => "17.1℃"
                    ],
                    [
                        "batteryState" => 2,
                        "battery" => 89,
                        "boxNumber" => 1,
                        "boxState" => 2,
                        "cabinetNumber" => 1,
                        "drugState" => 1,
                        "drugStateNeed" => [
                            "ice" => true,
                            "drug" => true
                        ],
                        "id" => 1,
                        "notes" => null,
                        "personnel" => "王某4a",
                        "region" => "手术二区4",
                        "state" => 2,
                        "temperature" => "18.1℃"
                    ],
                    [
                        "batteryState" => 2,
                        "battery" => 5,
                        "boxNumber" => 1,
                        "boxState" => 2,
                        "cabinetNumber" => 1,
                        "drugState" => 1,
                        "drugStateNeed" => [
                            "ice" => true,
                            "drug" => true
                        ],
                        "id" => 1,
                        "notes" => null,
                        "personnel" => "王某5a",
                        "region" => "手术二区5",
                        "state" => 2,
                        "temperature" => "18.1℃"
                    ],
                ],
                [
                    [
                        "batteryState" => 2,
                        "battery" => 9,
                        "boxNumber" => 1,
                        "boxState" => 2,
                        "cabinetNumber" => 1,
                        "drugState" => 1,
                        "drugStateNeed" => [
                            "ice" => true,
                            "drug" => true
                        ],
                        "id" => 1,
                        "notes" => null,
                        "personnel" => "王某6",
                        "region" => "手术二区6",
                        "state" => 2,
                        "temperature" => "18.1℃"
                    ],
                    [
                        "batteryState" => 2,
                        "battery" => 19,
                        "boxNumber" => 51,
                        "boxState" => 2,
                        "cabinetNumber" => 1,
                        "drugState" => 1,
                        "drugStateNeed" => [
                            "ice" => true,
                            "drug" => false
                        ],
                        "id" => 1,
                        "notes" => null,
                        "personnel" => "王某7",
                        "region" => "手术二区7",
                        "state" => 2,
                        "temperature" => "34.1℃"
                    ],
                    [
                        "batteryState" => 2,
                        "battery" => 39,
                        "boxNumber" => 1,
                        "boxState" => 2,
                        "cabinetNumber" => 1,
                        "drugState" => 1,
                        "drugStateNeed" => [
                            "ice" => true,
                            "drug" => true
                        ],
                        "id" => 1,
                        "notes" => null,
                        "personnel" => "王某8o",
                        "region" => "手术二区8",
                        "state" => 2,
                        "temperature" => "18.1℃"
                    ],
                    [
                        "batteryState" => 2,
                        "battery" => 89,
                        "boxNumber" => 1,
                        "boxState" => 2,
                        "cabinetNumber" => 1,
                        "drugState" => 1,
                        "drugStateNeed" => [
                            "ice" => true,
                            "drug" => true
                        ],
                        "id" => 1,
                        "notes" => null,
                        "personnel" => "王某9",
                        "region" => "手术二区9o",
                        "state" => 2,
                        "temperature" => "18.1℃"
                    ],
                    [
                        "batteryState" => 2,
                        "battery" => 59,
                        "boxNumber" => 1,
                        "boxState" => 2,
                        "cabinetNumber" => 1,
                        "drugState" => 1,
                        "drugStateNeed" => [
                            "ice" => true,
                            "drug" => true
                        ],
                        "id" => 1,
                        "notes" => null,
                        "personnel" => "王某6",
                        "region" => "手术二区6j",
                        "state" => 2,
                        "temperature" => "18.1℃"
                    ],
                    [
                        "batteryState" => 2,
                        "battery" => 100,
                        "boxNumber" => 51,
                        "boxState" => 2,
                        "cabinetNumber" => 1,
                        "drugState" => 1,
                        "drugStateNeed" => [
                            "ice" => true,
                            "drug" => false
                        ],
                        "id" => 1,
                        "notes" => null,
                        "personnel" => "王某7j",
                        "region" => "手术二区7",
                        "state" => 2,
                        "temperature" => "34.1℃"
                    ],
                    [
                        "batteryState" => 2,
                        "battery" => 100,
                        "boxNumber" => 1,
                        "boxState" => 2,
                        "cabinetNumber" => 1,
                        "drugState" => 1,
                        "drugStateNeed" => [
                            "ice" => true,
                            "drug" => true
                        ],
                        "id" => 1,
                        "notes" => null,
                        "personnel" => "王某8j",
                        "region" => "手术二区8",
                        "state" => 2,
                        "temperature" => "18.1℃"
                    ],
                    [
                        "batteryState" => 2,
                        "battery" => 99,
                        "boxNumber" => 1,
                        "boxState" => 2,
                        "cabinetNumber" => 1,
                        "drugState" => 1,
                        "drugStateNeed" => [
                            "ice" => true,
                            "drug" => true
                        ],
                        "id" => 1,
                        "notes" => null,
                        "personnel" => "王某9j",
                        "region" => "手术二区9",
                        "state" => 2,
                        "temperature" => "18.1℃"
                    ],
                ],
                [
                    [
                        "batteryState" => 2,
                        "battery" => 89,
                        "boxNumber" => 1,
                        "boxState" => 2,
                        "cabinetNumber" => 16,
                        "drugState" => 1,
                        "drugStateNeed" => [
                            "ice" => false,
                            "drug" => true
                        ],
                        "id" => 1,
                        "notes" => null,
                        "personnel" => "王某11",
                        "region" => "手术二区11",
                        "state" => 2,
                        "temperature" => "28.1℃"
                    ],
                    [
                        "batteryState" => 2,
                        "battery" => 79,
                        "boxNumber" => 1,
                        "boxState" => 2,
                        "cabinetNumber" => 1,
                        "drugState" => 1,
                        "drugStateNeed" => [
                            "ice" => true,
                            "drug" => true
                        ],
                        "id" => 1,
                        "notes" => null,
                        "personnel" => "王某12",
                        "region" => "手术二区12",
                        "state" => 2,
                        "temperature" => "18.1℃"
                    ],
                    [
                        "batteryState" => 2,
                        "battery" => 49,
                        "boxNumber" => 1,
                        "boxState" => 2,
                        "cabinetNumber" => 1,
                        "drugState" => 1,
                        "drugStateNeed" => [
                            "ice" => true,
                            "drug" => true
                        ],
                        "id" => 1,
                        "notes" => null,
                        "personnel" => "王某14d",
                        "region" => "手术二区14",
                        "state" => 2,
                        "temperature" => "18.1℃"
                    ],
                    [
                        "batteryState" => 1,
                        "battery" => 59,
                        "boxNumber" => 88,
                        "boxState" => 2,
                        "cabinetNumber" => 19,
                        "drugState" => 1,
                        "drugStateNeed" => [
                            "ice" => false,
                            "drug" => true
                        ],
                        "id" => 1,
                        "notes" => null,
                        "personnel" => "王某33d",
                        "region" => "手术二区33",
                        "state" => 2,
                        "temperature" => "18.1℃"
                    ],
                    [
                        "batteryState" => 2,
                        "battery" => 69,
                        "boxNumber" => 1,
                        "boxState" => 2,
                        "cabinetNumber" => 16,
                        "drugState" => 1,
                        "drugStateNeed" => [
                            "ice" => false,
                            "drug" => true
                        ],
                        "id" => 1,
                        "notes" => null,
                        "personnel" => "王某11e",
                        "region" => "手术二区11",
                        "state" => 2,
                        "temperature" => "28.1℃"
                    ],
                    [
                        "batteryState" => 2,
                        "battery" => 99,
                        "boxNumber" => 1,
                        "boxState" => 2,
                        "cabinetNumber" => 1,
                        "drugState" => 1,
                        "drugStateNeed" => [
                            "ice" => true,
                            "drug" => true
                        ],
                        "id" => 1,
                        "notes" => null,
                        "personnel" => "王某12e",
                        "region" => "手术二区12",
                        "state" => 2,
                        "temperature" => "18.1℃"
                    ],
                    [
                        "batteryState" => 2,
                        "battery" => 39,
                        "boxNumber" => 1,
                        "boxState" => 2,
                        "cabinetNumber" => 1,
                        "drugState" => 1,
                        "drugStateNeed" => [
                            "ice" => true,
                            "drug" => true
                        ],
                        "id" => 1,
                        "notes" => null,
                        "personnel" => "王某14r",
                        "region" => "手术二区14",
                        "state" => 2,
                        "temperature" => "18.1℃"
                    ],
                    [
                        "batteryState" => 1,
                        "battery" => 11,
                        "boxNumber" => 88,
                        "boxState" => 2,
                        "cabinetNumber" => 19,
                        "drugState" => 1,
                        "drugStateNeed" => [
                            "ice" => false,
                            "drug" => true
                        ],
                        "id" => 1,
                        "notes" => null,
                        "personnel" => "王某33r",
                        "region" => "手术二区33",
                        "state" => 2,
                        "temperature" => "18.1℃"
                    ],
                ],
                [
                    [
                        "batteryState" => 2,
                        "battery" => 11,
                        "boxNumber" => 1,
                        "boxState" => 2,
                        "cabinetNumber" => 1,
                        "drugState" => 1,
                        "drugStateNeed" => [
                            "ice" => true,
                            "drug" => true
                        ],
                        "id" => 1,
                        "notes" => null,
                        "personnel" => "王某44",
                        "region" => "手术二区56",
                        "state" => 2,
                        "temperature" => "18.1℃"
                    ],
                    [
                        "batteryState" => 2,
                        "battery" => 11,
                        "boxNumber" => 1,
                        "boxState" => 2,
                        "cabinetNumber" => 1,
                        "drugState" => 0,
                        "drugStateNeed" => [
                            "ice" => false,
                            "drug" => false
                        ],
                        "id" => 1,
                        "notes" => null,
                        "personnel" => "王某87",
                        "region" => "手术二区78",
                        "state" => 2,
                        "temperature" => "18.8℃"
                    ],
                    [
                        "batteryState" => 2,
                        "battery" => 15,
                        "boxNumber" => 1,
                        "boxState" => 2,
                        "cabinetNumber" => 1,
                        "drugState" => 1,
                        "drugStateNeed" => [
                            "ice" => true,
                            "drug" => false
                        ],
                        "id" => 1,
                        "notes" => null,
                        "personnel" => "王某88",
                        "region" => "手术二区888",
                        "state" => 2,
                        "temperature" => "11.1℃"
                    ],
                    [
                        "batteryState" => 2,
                        "battery" => 33,
                        "boxNumber" => 1,
                        "boxState" => 2,
                        "cabinetNumber" => 1,
                        "drugState" => 0,
                        "drugStateNeed" => [
                            "ice" => false,
                            "drug" => true
                        ],
                        "id" => 2,
                        "notes" => null,
                        "personnel" => "王某564",
                        "region" => "手术二区23",
                        "state" => 2,
                        "temperature" => "18.1℃"
                    ]
                ]
            ],
            "inBoxesCount" => [
                [
                    "name" => "药品1",
                    "number" => 200,
                    "type" => 0
                ],
                [
                    "name" => "器械2",
                    "model" => "M2125AC",
                    "number" => 2125,
                    "type" => 1
                ],
                [
                    "name" => "器械3",
                    "model" => "M2124ACD",
                    "number" => 2124,
                    "type" => 1
                ],
                [
                    "name" => "器械4",
                    "model" => "M2123ACB",
                    "number" => 2123,
                    "type" => 1
                ],
                [
                    "name" => "器械5",
                    "model" => "M2122ACR",
                    "number" => 2122,
                    "type" => 1
                ],
                [
                    "name" => "器械6",
                    "model" => "M2121D",
                    "number" => 2121,
                    "type" => 1
                ],
                [
                    "name" => "药品3",
                    "number" => 250,
                    "type" => 0,
                ],
                [
                    "name" => "药品4",
                    "number" => 300,
                    "type" => 0,
                ]
            ],
            "top5UsedDrug" => [
                "第一名药品1",
                "第二名药品2",
                "第三名药品3",
                "第四名药品4",
                "第五名药品5"
            ],
            "top5UsedEquipment" => [
                "第一名器械1",
                "第二名器械2",
                "第三名器械3",
                "第四名器械4",
                "第五名器械5"
            ],
            "cabinetsDetail" => [
                [
                    "region" => "分区一",
                    "cabinet" => "2",
                    "boxes" => [
                        "1" => [
                            "number" => "01",
                            "battery" => 0,
                            "drugState" => 0,
                            "batteryState" => 0
                        ],
                        "2" => [
                            "number" => "02",
                            "battery" => 78,
                            "drugState" => 1,
                            "batteryState" => 0
                        ],
                        "3" => [
                            "number" => "01",
                            "battery" => 100,
                            "drugState" => 0,
                            "batteryState" => 0
                        ]
                    ]
                ],
                [
                    "region" => "分区二",
                    "cabinet" => "4",
                    "boxes" => [
                        "1" => [
                            "number" => "01",
                            "battery" => 1,
                            "drugState" => 2,
                            "batteryState" => 0
                        ],
                        "2" => [
                            "number" => "02",
                            "battery" => 78,
                            "drugState" => 1,
                            "batteryState" => 1
                        ],
                        "3" => [
                            "number" => "01",
                            "battery" => 100,
                            "drugState" => 0,
                            "batteryState" => 0
                        ],
                        "4" => [
                            "number" => "01",
                            "battery" => 100,
                            "drugState" => 0,
                            "batteryState" => 0
                        ]
                    ]
                ],
                [
                    "region" => "分区三",
                    "cabinet" => "6",
                    "boxes" => [
                        "1" => [
                            "number" => "01",
                            "battery" => 1,
                            "drugState" => 2,
                            "batteryState" => 0
                        ],
                        "2" => [
                            "number" => "02",
                            "battery" => 78,
                            "drugState" => 1,
                            "batteryState" => 1
                        ],
                        "3" => [
                            "number" => "01",
                            "battery" => 100,
                            "drugState" => 0,
                            "batteryState" => 0
                        ],
                        "4" => [
                            "number" => "01",
                            "battery" => 100,
                            "drugState" => 1,
                            "batteryState" => 0
                        ],
                        "5" => [
                            "number" => "01",
                            "battery" => 100,
                            "drugState" => 1,
                            "batteryState" => 0
                        ]
                    ]
                ]
            ],
            "news" => [
                [
                    "time" => "2021-09-09 12:00",
                    "name" => "郑某",
                    "action" => "取出",
                    "object" => "盒子",
                    "number" => "2",
                    "icon" => "ice",
                    "id" => 1,
                    "cabinetPosition" => "1,2,3",
                    "boxPosition" => "6,7"
                ],
                [
                    "time" => "2021-08-19 17:00",
                    "name" => "黄某",
                    "action" => "存出",
                    "object" => "盒子",
                    "number" => "1",
                    "icon" => "drug",
                    "id" => 2,
                    "cabinetPosition" => "3",
                    "boxPosition" => "6,8"
                ],
                [
                    "time" => "2021-08-19 15:20",
                    "name" => "李某",
                    "action" => "存出",
                    "object" => "盒子",
                    "number" => "1",
                    "icon" => "",
                    "id" => 2,
                    "cabinetPosition" => "3,5",
                    "boxPosition" => "1,2,6,7"
                ]
            ],
            "dateEmergence" => [
                [
                    "name" => "药品1",
                    "size" => "2ml",
                    "batch" => "2023-01004",
                    "validity" => "2023-01",
                    "number" => "45"
                ],
                [
                    "name" => "药品4",
                    "size" => "22ml",
                    "batch" => "2023-01002",
                    "validity" => "2023-01",
                    "number" => "21"
                ],
                [
                    "name" => "药品2",
                    "size" => "12ml",
                    "batch" => "2023-01001",
                    "validity" => "2023-01",
                    "number" => "34"
                ]
            ]
        ];
        return json($data);
    }

    public function boxstate()
    {
        $data = [
            "message" => "请求成功",
            "code" => 200,
            "data" => [
                [
                    "batteryState" => 1,
                    "battery" => 100,
                    "boxNumber" => 12,
                    "stateOfBox" => 1,
                    "cabinetNumber" => 16,
                    "id" => 5,
                    "personnel" => "信5",
                    "region" => "手术三区",
                    "temperature" => "13.2℃",
                    "drugState" => 0,
                    "drugStateNeed" => [
                        "ice" => false,
                        "drug" => false
                    ]
                ],
                [
                    "batteryState" => 2,
                    "battery" => 65,
                    "boxNumber" => 11,
                    "stateOfBox" => 0,
                    "cabinetNumber" => 12,
                    "id" => 4,
                    "personnel" => "信4",
                    "region" => "手术二区",
                    "temperature" => "8.3℃",
                    "drugState" => 0,
                    "drugStateNeed" => [
                        "ice" => false,
                        "drug" => false
                    ]
                ],
                [
                    "batteryState" => 2,
                    "battery" => 65,
                    "boxNumber" => 8,
                    "stateOfBox" => 0,
                    "cabinetNumber" => 8,
                    "id" => 3,
                    "personnel" => "信3",
                    "region" => "手术一区",
                    "temperature" => "10.0℃",
                    "drugState" => 0,
                    "drugStateNeed" => [
                        "ice" => false,
                        "drug" => false
                    ]
                ],
                [
                    "batteryState" => 2,
                    "battery" => 65,
                    "boxNumber" => 21,
                    "stateOfBox" => 1,
                    "cabinetNumber" => 9,
                    "id" => 1,
                    "personnel" => "信2",
                    "region" => "手术四区",
                    "temperature" => "10.0℃",
                    "drugState" => 1,
                    "drugStateNeed" => [
                        "ice" => true,
                        "drug" => false
                    ]
                ],
                [ // 这个是使用中的
                    "batteryState" => 0,
                    "battery" => 65,
                    "boxNumber" => 1,
                    "stateOfBox" => 2,
                    "cabinetNumber" => 2,
                    "id" => 2,
                    "personnel" => "信1",
                    "region" => "手术五区",
                    "temperature" => "",
                    "drugState" => 1,
                    "drugStateNeed" => [
                        "ice" => true,
                        "drug" => true
                    ]
                ]
            ],
            "totalNums" => 1
        ];
        return json($data);
    }

    public function dealnews()
    {
        $page = input('page', 1);
        switch ($page) {
            case 2:
                $data = [
                    "hasMore" => 1,
                    "nextPage" => 3,
                    "当前page为" => $page,
                    "data" => [
                        [
                            "messageType" => "description",
                            "number" => 5,
                            "numberType" => "box",
                            "id" => 313,
                            "content" => "11111",
                            "time" => "2021-12-11 19:26"

                        ], [
                            "messageType" => "doubleCheck",
                            "userType" => 2,
                            "name" => "第二页开头",
                            "number" => 5,
                            "id" => 312,
                            "time" => "2022-2-11 19:23",
                            "isBiggerThanOne" => 1

                        ], [
                            "messageType" => "supplement",
                            "number" => 5,
                            "region" => "备用一区",
                            "numberType" => "cabinet",
                            "id" => 314,
                            "time" => "2021-11-1 19:23"
                        ], [
                            "messageType" => "iceBags",
                            "number" => 5,
                            "region" => "备用一区",
                            "numberType" => "cabinet",
                            "temperature" => "23",
                            "action" => "第二页结束",
                            "id" => 315,
                            "time" => "2022-8-1 01:02"
                        ]]
                ];
                break;
            case 3:
                $data = [
                    "当前page为" => $page,
                    "hasMore" => 1,
                    "nextPage" => 4,
                    "data" => [
                        [
                            "messageType" => "description",
                            "number" => 5,
                            "numberType" => "box",
                            "id" => 213,
                            "content" => "11111",
                            "time" => "2021-12-11 19:26"

                        ], [
                            "messageType" => "supplement",
                            "number" => 5,
                            "region" => "备用一区",
                            "numberType" => "cabinet",
                            "id" => 214,
                            "time" => "2021-11-1 19:23"
                        ],
                        [
                            "messageType" => "doubleCheck",
                            "userType" => 2,
                            "name" => "第三页开头",
                            "number" => 5,
                            "id" => 222,
                            "time" => "2022-2-11 19:23",
                            "isBiggerThanOne" => 1

                        ], [
                            "messageType" => "iceBags",
                            "number" => 225,
                            "region" => "备用一区",
                            "numberType" => "cabinet",
                            "temperature" => "23",
                            "action" => "第三页结束",
                            "id" => 15,
                            "time" => "2022-8-1 01:02"
                        ]]];
                break;
            case 4:
                $data = [
                    "当前page为" => $page,
                    "hasMore" => 0,
                    "nextPage" => 0,
                    "data" => [
                        [
                            "messageType" => "description",
                            "number" => 4,
                            "numberType" => "box",
                            "id" => 113,
                            "content" => "第四页开头",
                            "time" => "2021-12-11 19:26"

                        ], [
                            "messageType" => "supplement",
                            "number" => 6,
                            "region" => "备用一区",
                            "numberType" => "cabinet",
                            "id" => 114,
                            "time" => "2021-11-1 19:23"
                        ], [
                            "messageType" => "iceBags",
                            "number" => 5,
                            "region" => "备用一区",
                            "numberType" => "cabinet",
                            "temperature" => "23",
                            "action" => "第四页结束",
                            "id" => 115,
                            "time" => "2022-8-1 01:02"
                        ],
                        [
                            "messageType" => "doubleCheck",
                            "userType" => 2,
                            "name" => "第四页结尾",
                            "number" => 5,
                            "id" => 112,
                            "time" => "2022-2-11 19:23",
                            "isBiggerThanOne" => 1

                        ]]
                ];
                break;
            default:
                $data = [
                    "当前page为1或者" => $page,
                    "code" => 200,
                    "hasMore" => 1,
                    "nextPage" => 2,
                    "data" => [
                        [
                            "messageType" => "description",
                            "number" => 15,
                            "numberType" => "box",
                            "id" => 257657626456,
                            "content" => "11111",
                            "time" => "2021-12-11 19:26"

                        ],
                        [
                            "messageType" => "doubleCheck",
                            "userType" => 12,
                            "name" => "双人双核不置顶1",
                            "number" => 5,
                            "id" => 2436576587,
                            "time" => "2022-2-11 19:23",
                            "isBiggerThanOne" => 1

                        ], [
                            "messageType" => "supplement",
                            "number" => 15,
                            "region" => "备用一区",
                            "numberType" => "cabinet",
                            "id" => 56546456456,
                            "time" => "2021-11-1 19:23"
                        ],
                        [
                            "messageType" => "doubleCheck",
                            "userType" => 22,
                            "name" => "双人双核置顶1",
                            "number" => 5,
                            "id" => 2346547567,
                            "time" => "2022-2-11 19:23",
                            "isBiggerThanOne" => 0

                        ], [
                            "messageType" => "iceBags",
                            "number" => 25,
                            "region" => "备用一区",
                            "numberType" => "cabinet",
                            "temperature" => "23",
                            "action" => "更换冰袋",
                            "id" => 2542364526515,
                            "time" => "2022-8-1 01:02"
                        ],
                        [
                            "messageType" => "description",
                            "number" => 35,
                            "numberType" => "box",
                            "id" => 1234524353,
                            "content" => "11111",
                            "time" => "2021-12-11 19:26"

                        ], [
                            "messageType" => "supplement",
                            "number" => 45,
                            "region" => "备用一区",
                            "numberType" => "cabinet",
                            "id" => 152435431254,
                            "time" => "2021-11-1 19:23"
                        ], [
                            "messageType" => "iceBags",
                            "number" => 55,
                            "region" => "备用一区",
                            "numberType" => "cabinet",
                            "temperature" => "23",
                            "action" => "更换冰袋",
                            "id" => 1243524354235,
                            "time" => "2022-8-1 01:02"
                        ],
                        [
                            "messageType" => "description",
                            "number" => 65,
                            "numberType" => "box",
                            "id" => 1435243543,
                            "content" => "11111",
                            "time" => "2021-12-11 19:26"

                        ], [
                            "messageType" => "supplement",
                            "number" => 75,
                            "region" => "备用一区",
                            "numberType" => "cabinet",
                            "id" => 3435214,
                            "time" => "2021-11-1 19:23"
                        ], [
                            "messageType" => "iceBags",
                            "number" => 85,
                            "region" => "备用一区",
                            "numberType" => "cabinet",
                            "temperature" => "23",
                            "action" => "更换冰袋",
                            "id" => 1234235,
                            "time" => "2022-8-1 01:02"
                        ],
                        [
                            "messageType" => "description",
                            "number" => 95,
                            "numberType" => "box",
                            "id" => 123233,
                            "content" => "11111",
                            "time" => "2021-12-11 19:26"

                        ],
                        [
                            "messageType" => "doubleCheck",
                            "userType" => 02,
                            "name" => "双人双核置顶2",
                            "number" => 5,
                            "id" => 1133212,
                            "time" => "2022-2-11 19:11",
                            "isBiggerThanOne" => 0

                        ], [
                            "messageType" => "supplement",
                            "number" => 45,
                            "region" => "备用一区",
                            "numberType" => "cabinet",
                            "id" => 44174,
                            "time" => "2021-11-1 19:23"
                        ],
                        [
                            "messageType" => "doubleCheck",
                            "userType" => 32,
                            "name" => "双人双核不置顶2",
                            "number" => 5,
                            "id" => 66121,
                            "time" => "2021-2-11 19:23",
                            "isBiggerThanOne" => 1

                        ], [
                            "messageType" => "iceBags",
                            "number" => 77525,
                            "region" => "备用一区",
                            "numberType" => "cabinet",
                            "temperature" => "23",
                            "action" => "更换冰袋",
                            "id" => 15,
                            "time" => "2022-8-1 01:02"
                        ], [
                            "messageType" => "iceBags",
                            "number" => 88515,
                            "region" => "备用一区",
                            "numberType" => "cabinet",
                            "temperature" => "23",
                            "action" => "更换冰袋",
                            "id" => 15,
                            "time" => "2022-8-1 01:02"
                        ], [
                            "messageType" => "iceBags",
                            "number" => 055,
                            "region" => "备用一区",
                            "numberType" => "cabinet",
                            "temperature" => "23",
                            "action" => "更换冰袋",
                            "id" => 15,
                            "time" => "2022-8-1 01:02"
                        ]
                    ]];
        }
        return json($data);
    }

    public function toBeDone()
    {
        $type = input("type", "全部");
        switch ($type) {
            case "全部":
                $data = [
                    "code" => 200,
                    "message" => "ok",
                    "totalNums" => 19,
                    "isLatest3Month3Final" => 1,
                    "data" => [
                        [
                            "time" => "2022-11-20 14:09",
                            "number" => "SH220200001",
                            "eventType" => "双人双核、毒麻回收反馈",
                            "boxNumber" => "7号药箱",
                            "id" => 1,
                            "isConnectFeedback" => 0,
                            "isConnectSystem" => 1,
                            "isConnectBox" => 0,
                            "verifier" => "张三",
                            "checker" => "",
                            "handler" => "赵武",

                            "isDone" => 1
                        ],
                        [
                            "time" => "2022-09-20 14:09",
                            "number" => "SH220200002",
                            "eventType" => "异常操作、机械开箱",
                            "boxNumber" => "9号药箱",
                            "id" => 2,
                            "isConnectFeedback" => 1,
                            "isConnectSystem" => 1,
                            "isConnectBox" => 1,
                            "verifier" => "张三1",
                            "checker" => "李四1",
                            "handler" => "赵武1",

                            "isDone" => 1
                        ],
                        [
                            "time" => "2022-02-20 16:09",
                            "number" => "SH220200003",
                            "eventType" => "双人双核",
                            "boxNumber" => "99号药箱",
                            "id" => 3,
                            "isConnectFeedback" => 2,
                            "isConnectSystem" => 0,
                            "isConnectBox" => 0,
                            "verifier" => "信瑞",
                            "checker" => "李四2",
                            "handler" => "赵武2",

                            "isDone" => 0
                        ],
                        [
                            "time" => "2022-10-20 09:09",
                            "number" => "SH220200004",
                            "eventType" => "机械开箱，异常操作",
                            "boxNumber" => "4号药箱",
                            "id" => 4,
                            "isConnectFeedback" => 0,
                            "isConnectSystem" => 0,
                            "isConnectBox" => 1,
                            "verifier" => "张三3",
                            "checker" => "李四3",
                            "handler" => "信瑞",

                            "isDone" => 0
                        ],
                        [
                            "time" => "2022-10-20 09:09",
                            "number" => "SH220200005",
                            "eventType" => "机械开箱，异常操作",
                            "boxNumber" => "4号药箱",
                            "id" => 5,
                            "isConnectFeedback" => 0,
                            "isConnectSystem" => 0,
                            "isConnectBox" => 1,
                            "verifier" => "张三3",
                            "checker" => "",
                            "handler" => "信瑞",

                            "isDone" => 0
                        ],
                        [
                            "time" => "2022-10-20 09:09",
                            "number" => "SH220200006",
                            "eventType" => "机械开箱，异常操作",
                            "boxNumber" => "4号药箱",
                            "id" => 6,
                            "isConnectFeedback" => 0,
                            "isConnectSystem" => 0,
                            "isConnectBox" => 1,
                            "verifier" => "张三3",
                            "checker" => "信瑞",
                            "handler" => "来这",

                            "isDone" => 0
                        ],
                        [
                            "time" => "2022-08-20 18:09",
                            "number" => "SH220200007",
                            "eventType" => "异常操作",
                            "boxNumber" => "1号药箱",
                            "id" => 7,
                            "isConnectFeedback" => 1,
                            "isConnectSystem" => 1,
                            "isConnectBox" => 0,
                            "verifier" => "信",
                            "checker" => "李四6",
                            "handler" => "赵武6",

                            "isDone" => 0
                        ],
                        [
                            "time" => "2022-08-20 18:09",
                            "number" => "SH220200008",
                            "eventType" => "双人双核",
                            "boxNumber" => "1号药箱",
                            "id" => 2346547567,
                            "isConnectFeedback" => 1,
                            "isConnectSystem" => 1,
                            "isConnectBox" => 0,
                            "verifier" => "信瑞",
                            "checker" => "信",
                            "handler" => "赵武7",

                            "isDone" => 0
                        ],
                        [
                            "time" => "2022-08-20 18:09",
                            "number" => "SH220200009",
                            "eventType" => "异常操作",
                            "boxNumber" => "1号药箱",
                            "id" => 9,
                            "isConnectFeedback" => 1,
                            "isConnectSystem" => 1,
                            "isConnectBox" => 0,
                            "verifier" => "张三8",
                            "checker" => "李四8",
                            "handler" => "信",

                            "isDone" => 0
                        ]
                    ]
                ];
                break;
            case "已处理":
                $data = [
                    "code" => 200,
                    "message" => "ok",
                    "totalNums" => 102,
                    "isLatest3Month3Final" => 0,
                    "data" => [
                        [
                            "time" => "2022-11-20 14:09",
                            "number" => "SH220200001",
                            "eventType" => "双人双核、毒麻回收反馈",
                            "boxNumber" => "7号药箱",
                            "id" => 1,
                            "isConnectFeedback" => 0,
                            "isConnectSystem" => 1,
                            "isConnectBox" => 0,
                            "verifier" => "张三1",
                            "checker" => "",
                            "handler" => "赵武1",

                            "isDone" => 1
                        ],
                        [
                            "time" => "2022-09-20 14:09",
                            "number" => "SH220200002",
                            "eventType" => "异常操作、机械开箱",
                            "boxNumber" => "9号药箱",
                            "id" => 2,
                            "isConnectFeedback" => 1,
                            "isConnectSystem" => 1,
                            "isConnectBox" => 1,
                            "verifier" => "张三111",
                            "checker" => "李四111",
                            "handler" => "赵武111",

                            "isDone" => 1
                        ],
                        [
                            "time" => "2022-02-20 16:09",
                            "number" => "SH220200003",
                            "eventType" => "双人双核",
                            "boxNumber" => "99号药箱",
                            "id" => 3,
                            "isConnectFeedback" => 2,
                            "isConnectSystem" => 0,
                            "isConnectBox" => 0,
                            "verifier" => "信瑞",
                            "checker" => "李四222",
                            "handler" => "赵武222",

                            "isDone" => 1
                        ],
                        [
                            "time" => "2022-10-20 09:09",
                            "number" => "SH220200004",
                            "eventType" => "机械开箱，异常操作",
                            "boxNumber" => "4号药箱",
                            "id" => 4,
                            "isConnectFeedback" => 0,
                            "isConnectSystem" => 0,
                            "isConnectBox" => 1,
                            "verifier" => "张三3332",
                            "checker" => "李四2343",
                            "handler" => "信瑞34",

                            "isDone" => 1
                        ],
                        [
                            "time" => "2022-10-20 09:09",
                            "number" => "SH220200005",
                            "eventType" => "机械开箱，异常操作",
                            "boxNumber" => "4号药箱",
                            "id" => 5,
                            "isConnectFeedback" => 0,
                            "isConnectSystem" => 0,
                            "isConnectBox" => 1,
                            "verifier" => "张三3324234",
                            "checker" => "",
                            "handler" => "信瑞",

                            "isDone" => 1
                        ],
                        [
                            "time" => "2022-10-20 09:09",
                            "number" => "SH220200006",
                            "eventType" => "机械开箱，异常操作",
                            "boxNumber" => "4号药箱",
                            "id" => 6,
                            "isConnectFeedback" => 0,
                            "isConnectSystem" => 0,
                            "isConnectBox" => 1,
                            "verifier" => "张三43243",
                            "checker" => "信瑞",
                            "handler" => "来这43243",

                            "isDone" => 1
                        ],
                        [
                            "time" => "2022-08-20 18:09",
                            "number" => "SH220200007",
                            "eventType" => "异常操作",
                            "boxNumber" => "1号药箱",
                            "id" => 7,
                            "isConnectFeedback" => 1,
                            "isConnectSystem" => 1,
                            "isConnectBox" => 0,
                            "verifier" => "信",
                            "checker" => "李四6324",
                            "handler" => "赵武6",

                            "isDone" => 1
                        ],
                        [
                            "time" => "2022-08-20 18:09",
                            "number" => "SH220200008",
                            "eventType" => "双人双核",
                            "boxNumber" => "1号药箱",
                            "id" => 2346547567,
                            "isConnectFeedback" => 1,
                            "isConnectSystem" => 1,
                            "isConnectBox" => 0,
                            "verifier" => "信瑞",
                            "checker" => "信",
                            "handler" => "赵234武7",

                            "isDone" => 1
                        ],
                        [
                            "time" => "2022-08-20 18:09",
                            "number" => "SH220200009",
                            "eventType" => "异常操作",
                            "boxNumber" => "1号药箱",
                            "id" => 9,
                            "isConnectFeedback" => 1,
                            "isConnectSystem" => 1,
                            "isConnectBox" => 0,
                            "verifier" => "张三8",
                            "checker" => "李四438",
                            "handler" => "信",

                            "isDone" => 1
                        ]
                    ]
                ];
                break;
            case "未处理":
                $data = [
                    "code" => 200,
                    "message" => "ok",
                    "totalNums" => 23,
                    "data" => [
                        [
                            "time" => "2022-11-20 14:09",
                            "number" => "SH220200001",
                            "eventType" => "双人双核、毒麻回收反馈",
                            "boxNumber" => "7号药箱",
                            "id" => 1,
                            "isConnectFeedback" => 0,
                            "isConnectSystem" => 1,
                            "isConnectBox" => 0,
                            "verifier" => "张三",
                            "checker" => "",
                            "handler" => "赵武",

                            "isDone" => 0
                        ],
                        [
                            "time" => "2022-09-20 14:09",
                            "number" => "SH220200002",
                            "eventType" => "异常操作、机械开箱",
                            "boxNumber" => "9号药箱",
                            "id" => 2,
                            "isConnectFeedback" => 1,
                            "isConnectSystem" => 1,
                            "isConnectBox" => 1,
                            "verifier" => "张三1",
                            "checker" => "李四1",
                            "handler" => "赵武1",

                            "isDone" => 0
                        ],
                        [
                            "time" => "2022-02-20 16:09",
                            "number" => "SH220200003",
                            "eventType" => "双人双核",
                            "boxNumber" => "99号药箱",
                            "id" => 3,
                            "isConnectFeedback" => 2,
                            "isConnectSystem" => 0,
                            "isConnectBox" => 0,
                            "verifier" => "信瑞",
                            "checker" => "李四2",
                            "handler" => "赵武2",

                            "isDone" => 0
                        ],
                        [
                            "time" => "2022-10-20 09:09",
                            "number" => "SH220200004",
                            "eventType" => "机械开箱，异常操作",
                            "boxNumber" => "4号药箱",
                            "id" => 4,
                            "isConnectFeedback" => 0,
                            "isConnectSystem" => 0,
                            "isConnectBox" => 1,
                            "verifier" => "张三3",
                            "checker" => "李四3",
                            "handler" => "信瑞",

                            "isDone" => 0
                        ],
                        [
                            "time" => "2022-10-20 09:09",
                            "number" => "SH220200005",
                            "eventType" => "机械开箱，异常操作",
                            "boxNumber" => "4号药箱",
                            "id" => 5,
                            "isConnectFeedback" => 0,
                            "isConnectSystem" => 0,
                            "isConnectBox" => 1,
                            "verifier" => "张三3",
                            "checker" => "",
                            "handler" => "信瑞",

                            "isDone" => 0
                        ],
                        [
                            "time" => "2022-10-20 09:09",
                            "number" => "SH220200006",
                            "eventType" => "机械开箱，异常操作",
                            "boxNumber" => "4号药箱",
                            "id" => 6,
                            "isConnectFeedback" => 0,
                            "isConnectSystem" => 0,
                            "isConnectBox" => 1,
                            "verifier" => "张三3",
                            "checker" => "信瑞",
                            "handler" => "来这",

                            "isDone" => 0
                        ],
                        [
                            "time" => "2022-08-20 18:09",
                            "number" => "SH220200007",
                            "eventType" => "异常操作",
                            "boxNumber" => "1号药箱",
                            "id" => 7,
                            "isConnectFeedback" => 1,
                            "isConnectSystem" => 1,
                            "isConnectBox" => 0,
                            "verifier" => "信",
                            "checker" => "李四6",
                            "handler" => "赵武6",

                            "isDone" => 0
                        ],
                        [
                            "time" => "2022-08-20 18:09",
                            "number" => "SH220200008",
                            "eventType" => "双人双核",
                            "boxNumber" => "1号药箱",
                            "id" => 2346547567,
                            "isConnectFeedback" => 1,
                            "isConnectSystem" => 1,
                            "isConnectBox" => 0,
                            "verifier" => "信瑞",
                            "checker" => "信",
                            "handler" => "赵武7",

                            "isDone" => 0
                        ],
                        [
                            "time" => "2022-08-20 18:09",
                            "number" => "SH220200009",
                            "eventType" => "异常操作",
                            "boxNumber" => "1号药箱",
                            "id" => 9,
                            "isConnectFeedback" => 1,
                            "isConnectSystem" => 1,
                            "isConnectBox" => 0,
                            "verifier" => "张三8",
                            "checker" => "李四8",
                            "handler" => "信",

                            "isDone" => 0
                        ]
                    ],
                    "isLatest3Month3Final" => 1,
                ];
                break;
        }
        return json($data);
    }

    public function compared2BeDone()
    {
        $data = [
            "code" => 200,
            "message" => "ok",
            "isNone" => rand(0, 1),
            "data" => [
                "routine" => [
                    [
                        "name" => "药品1",
                        "size" => "1ml",
                        "inSystem" => 2,
                        "inBox" => 2,
                        "isSame" => 1
                    ],
                    [
                        "name" => "药品2",
                        "size" => "2ml",
                        "inSystem" => 2,
                        "inBox" => 1,
                        "isSame" => 0
                    ],
                    [
                        "name" => "药品3",
                        "size" => "3ml",
                        "inSystem" => 2,
                        "inBox" => 6,
                        "isSame" => 0
                    ],
                    [
                        "name" => "药品4",
                        "size" => "4ml",
                        "inSystem" => 5,
                        "inBox" => 5,
                        "isSame" => 1
                    ],
                ],
                "highCost" => [
                    "inSystem" => [
                        [
                            "name" => "器械1",
                            "model" => "PT20",
                            "number" => 200
                        ]
                    ],
                    "inBox" => [
                        [
                            "name" => "器械1",
                            "model" => "PT20",
                            "number" => 199
                        ]
                    ]
                ]
            ]
        ];
        return json($data);
    }

    public function recycle2BeDone()
    {
        $id = input('id');
        switch ($id) {
            case 1:
                $data = [
                    "code" => 200,
                    "message" => "ok",
                    "isNone" => rand(0, 1),
                    "data" => [
                        "number" => "222200001",
                        "name" => "药品一",
                        "size" => "2ml",
                        "batch" => "E200021",
                        "validity" => "2021-09-12",
                        "description" => "小日子还挺滋润",
                        "checker" => "刘三",
                        "isObjection" => 0
                    ]
                ];
                break;
            case 2:
                $data = [
                    "code" => 200,
                    "message" => "okk",
                    "isNone" => rand(0, 1),
                    "data" => [
                        "number" => "222200002",
                        "name" => "药品3",
                        "size" => "8ml",
                        "batch" => "ABC200021",
                        "validity" => "2022-09-12",
                        "description" => "小日子还挺滋润me",
                        "checker" => "刘四",
                        "isObjection" => 1
                    ]
                ];
                break;
            case 3:
                $data = [
                    "code" => 200,
                    "message" => "okk",
                    "isNone" => rand(0, 1),
                    "data" => [
                        "number" => "222200002",
                        "name" => "药品67",
                        "size" => "12ml",
                        "batch" => "ABC200021",
                        "validity" => "2022-09-22",
                        "description" => "小日子还挺滋润me",
                        "checker" => "刘四",
                        "isObjection" => 1
                    ]
                ];
                break;
            default:
                $data = ["msg" => "id目前需要为1-3", "当前id为" => $id,
                    "isNone" => 1];
                break;
        }
        return json($data);
    }

    public function openBoxInfo()
    {
        $data = [
            "code" => 200,
            "message" => "ke",
            "data" => [
                "name" => "患者12",
                "id" => 2,
                "age" => 19,
                "gender" => "男",
                "bloodType" => "A",
                "inpatientNumber" => 20222,
                "room" => "外科",
                "operationName" => "手术",
                "style" => "局部麻醉咯"
            ]
        ];
        return json($data);
    }

    public function auditInfo()
    {
        $data = [
            "code" => 200,
            "message" => "ok",
            "data" => [
                "number" => "SH220200001",
                "eventType" => "异常操作、机械开箱",
                "handler" => [
                    "description" => "处理时，未进行录像。安瓿瓶随意抛弃，未及时回收。",
                    "time" => "2021-01-21 19:00",
                    "name" => "处理人刘某"
                ],
                "checker" => [
                    "description" => "未找到对应的毒麻安瓿瓶。",
                    "time" => "2021-01-21 19:10",
                    "name" => "检验人陈某"
                ],
                "verifier" => [
                    "description" => "已知悉。",
                    "time" => "2021-01-21 19:45",
                    "name" => "审核人张某"
                ]
            ]
        ];
        return json($data);

    }

    public function getLength()
    {
        $data = [
            "code" => 200,
            "message" => "ok",
            "data" => [
                "toBeDone" => 22,
                "news" => 999
            ]
        ];
        return json($data);
    }

    public function finishReading()
    {
        $data = [
            "code" => 200,
            "message" => "ok",
        ];
        return json($data);
    }

    public function openBoxTime()
    {
        $type = input("type");
        switch ($type) {
            case  "start":

                $data = [
                    "code" => 200,
                    "message" => "ok",
                    "data" => "2023-01-02"
                ];
                break;
            case  "end":
                $data = [
                    "code" => 200,
                    "message" => "ok",
                    "data" => "2021-12-31"
                ];
                break;
        }
        return json($data);
    }

    public function smxtPatient()
    {
        $data = [
            [
                "0035982514",
                "李三",
                "35",
                "男",
                "O",
                "局部麻醉",
                "阑尾炎切除手术",
                "消化科",
                "阑尾炎",
                "LPQ",
                "2022-1-28 17:12:32",
                "氟马西尼(10)*1、倍他罗定(1)*2"
            ],
            [
                "0038982021",
                "病一",
                "18",
                "男",
                "A",
                "全身麻醉",
                "手术一",
                "神经内科",
                "临床诊断意见一",
                "RWX",
                "2021-8-2 09:13:10",
                "麻黄碱(5)*1、酚酞(2)*1、丙泊酚乳状(20)*1、镇静剂(10)*1"
            ]];
        return json($data);
    }

    public function getliquid()
    {
        $id = input('id', 1);
        $data = [];
        switch ($id) {
            case 1:
                $data = [
                    "code " => 200,
                    "message " => "ok",
                    "data" => [

                        "id" => $id,
                        "number" => "XGX231",//废液箱
                        "placePerson" => "张三1",//存放人
                        "placeTime" => "2021-09-0915:12",//存放时间
                        "pickPerson" => "李四",//收取人
                        "pickTime" => "2021-09-0915:12"//收取时间
                    ]
                ];
                break;
            case 2:
                $data = [
                    "code " => 200,
                    "message " => "ok",
                    "data" => [
                        "id" => $id,
                        "number" => "XGX232",//废液箱
                        "placePerson" => "张三2",//存放人
                        "placeTime" => "2021-09-0919:12",//存放时间
                        "pickPerson" => "李四1",//收取人
                        "pickTime" => "2021-09-0905:12"//收取时间
                    ]
                ];
                break;
            case 3:
                $data = [
                    "code" => 200,
                    "message" => "ok",
                    "data" => [
                        "id" => $id,
                        "number" => "XGX233",//废液箱
                        "placePerson" => "张三3",//存放人
                        "placeTime" => "2021-09-0911:12",//存放时间
                        "pickPerson" => "李四2",//收取人
                        "pickTime" => "2021-09-0916:12"//收取时间
                    ]
                ];
                break;
            case 4:
                $data = [
                    "code" => 200,
                    "message" => "ok",
                    "data" => [
                        "id" => $id,
                        "number" => "XGX233",//废液箱
                        "placePerson" => "张三4",//存放人
                        "placeTime" => "2021-09-0911:12",//存放时间
                        "pickPerson" => "李四2",//收取人
                        "pickTime" => "2021-09-0916:12"//收取时间
                    ]
                ];
                break;
            case 5:
                $data = [
                    "code" => 200,
                    "message" => "ok",
                    "data" => [
                        "id" => $id,
                        "number" => "XGX233",//废液箱
                        "placePerson" => "张三5",//存放人
                        "placeTime" => "2021-09-0911:12",//存放时间
                        "pickPerson" => "李四2",//收取人
                        "pickTime" => "2021-09-0916:12"//收取时间
                    ]
                ];
                break;
            case 6:
                $data = [
                    "code" => 200,
                    "message" => "ok",
                    "data" => [
                        "id" => $id,
                        "number" => "XGX233",//废液箱
                        "placePerson" => "张三6",//存放人
                        "placeTime" => "2021-09-0911:12",//存放时间
                        "pickPerson" => "李四2",//收取人
                        "pickTime" => "2021-09-0916:12"//收取时间
                    ]
                ];
                break;
            case 7:
                $data = [
                    "code" => 200,
                    "message" => "ok",
                    "data" => [
                        "id" => $id,
                        "number" => "XGX233",//废液箱
                        "placePerson" => "张三7",//存放人
                        "placeTime" => "2021-09-0911:12",//存放时间
                        "pickPerson" => "李四2",//收取人
                        "pickTime" => "2021-09-0916:12"//收取时间
                    ]
                ];
                break;
            case 8:
                $data = [
                    "code" => 200,
                    "message" => "ok",
                    "data" => [
                        "id" => $id,
                        "number" => "XGX233",//废液箱
                        "placePerson" => "张三8",//存放人
                        "placeTime" => "2021-09-0911:12",//存放时间
                        "pickPerson" => "李四2",//收取人
                        "pickTime" => "2021-09-0916:12"//收取时间
                    ]
                ];
                break;
            default:
                $data = [
                    "code " => 400,
                    "message " => "id为1-8"
                ];
        }
        return json($data);


    }

    public function openbox()
    {
        $data = [
            "code" => 200,
            "message" => "ok",
            "data" => [
                [
                    "name" => "备用区1",
                    "id" => 2, // 分区id
                    "boxes" => [1, 2, 3]
                ], [
                    "name" => "备用区2",
                    "id" => 3,
                    "boxes" => [4, 5]
                ]
            ]
        ];
        return json($data);
    }

    public function comfirmOpenbox()
    {
        $data = [];
        $password = input('password');
        if ($password == "1234") {
            $data = [
                "code" => 200,
                "message" => "ok"
            ];
        } else {
            $data = [
                "code" => 400,
                "message" => "密码错误"
            ];
        }
        return json($data);
    }

    public function checkstatus()
    {
        $data = [
            "code" => 200,
            "message" => "ok",
            "data" => [
                "all" => 5, // 所有的箱子数量
                "done" => 2 // 已经打开的箱子数量
            ]
        ];
        return json($data);
    }

    public function liquidsummary()
    {
        $data = [
            "code" => 200,
            "message" => "ok",
            "totalNums" => 20,
            "data" => [
                [
                    "id" => "1",
                    "number" => "123", // 废液箱编号
                    "placePerson" => "三", // 存放人
                    "placeTime" => "2020-02-12", // 存放时间
                    "pickPerson" => "四", // 收取人
                    "pickTime" => "2020-02-13", // 收取时间
                    "destroyPerson" => "五", // 销毁人
                    "destroyTime" => "2020-02-17", // 销毁时间
                    "putTime" => "2020-02-21", // 提交时间
                    "boxNumber" => "2" // 药箱编号
                ]
            ]
        ];
        return json($data);
    }

    public function drugsummary()
    {
        $data = [
            "code" => 200,
            "message" => "ok",
            "totalNums" => 20,
            "data" => [
                [
                    "time" => "2020-02-12", // 日期
                    "name" => "阿三", // 患者名字
                    "gender" => "男", // 性别
                    "age" => "27", // 年龄
                    "identity" => "441822199803123244", // 身份证号码
                    "inpatientNumber" => "1234567", // 门诊号
                    "diagnosis" => "肚子痛", // 诊断
                    "drugName" => "药品1", // 药品名字
                    "size" => "2ml", // 规格
                    "batch" => "2010212", // 批次号
                    "amount" => "23", // 数量
                    "doctor" => "张医生", // 医生
                    "number" => "234232", // 红处方编号
                    "recyclePerson" => "小王" //回收人
                ]
            ]
        ];
        return json($data);
    }
}



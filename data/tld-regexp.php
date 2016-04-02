<?php

$gTLD = "(?:)";
$ccTLD = "(?:)";
$gTLD_IDN = "(?:
            
            .aaa|
            
            .aarp|
            
            .abb|
            
            .abbott|
            
            .abogado|
            
            .academy|
            
            .accenture|
            
            .accountant|
            
            .accountants|
            
            .aco|
            
            .active|
            
            .actor|
            
            .adac|
            
            .ads|
            
            .adult|
            
            .aeg|
            
            .aero|
            
            .afl|
            
            .agency|
            
            .aig|
            
            .airforce|
            
            .airtel|
            
            .alibaba|
            
            .alipay|
            
            .allfinanz|
            
            .ally|
            
            .alsace|
            
            .amica|
            
            .amsterdam|
            
            .analytics|
            
            .android|
            
            .anquan|
            
            .apartments|
            
            .app|
            
            .apple|
            
            .aquarelle|
            
            .aramco|
            
            .archi|
            
            .army|
            
            .arpa|
            
            .arte|
            
            .asia|
            
            .associates|
            
            .attorney|
            
            .auction|
            
            .audi|
            
            .audio|
            
            .author|
            
            .auto|
            
            .autos|
            
            .avianca|
            
            .aws|
            
            .axa|
            
            .azure|
            
            .baidu|
            
            .band|
            
            .bank|
            
            .bar|
            
            .barcelona|
            
            .barclaycard|
            
            .barclays|
            
            .barefoot|
            
            .bargains|
            
            .bauhaus|
            
            .bayern|
            
            .bbc|
            
            .bbva|
            
            .bcg|
            
            .bcn|
            
            .beats|
            
            .beer|
            
            .bentley|
            
            .berlin|
            
            .best|
            
            .bet|
            
            .bharti|
            
            .bible|
            
            .bid|
            
            .bike|
            
            .bing|
            
            .bingo|
            
            .bio|
            
            .biz|
            
            .black|
            
            .blackfriday|
            
            .bloomberg|
            
            .blue|
            
            .bms|
            
            .bmw|
            
            .bnl|
            
            .bnpparibas|
            
            .boats|
            
            .boehringer|
            
            .bom|
            
            .bond|
            
            .boo|
            
            .book|
            
            .boots|
            
            .bosch|
            
            .bostik|
            
            .bot|
            
            .boutique|
            
            .bradesco|
            
            .bridgestone|
            
            .broadway|
            
            .broker|
            
            .brother|
            
            .brussels|
            
            .budapest|
            
            .bugatti|
            
            .build|
            
            .builders|
            
            .business|
            
            .buy|
            
            .buzz|
            
            .bzh|
            
            .cab|
            
            .cafe|
            
            .cal|
            
            .call|
            
            .camera|
            
            .camp|
            
            .cancerresearch|
            
            .canon|
            
            .capetown|
            
            .capital|
            
            .car|
            
            .caravan|
            
            .cards|
            
            .care|
            
            .career|
            
            .careers|
            
            .cars|
            
            .cartier|
            
            .casa|
            
            .cash|
            
            .casino|
            
            .cat|
            
            .catering|
            
            .cba|
            
            .cbn|
            
            .ceb|
            
            .center|
            
            .ceo|
            
            .cern|
            
            .cfa|
            
            .cfd|
            
            .chanel|
            
            .channel|
            
            .chase|
            
            .chat|
            
            .cheap|
            
            .chloe|
            
            .christmas|
            
            .chrome|
            
            .church|
            
            .cipriani|
            
            .circle|
            
            .cisco|
            
            .citic|
            
            .city|
            
            .cityeats|
            
            .claims|
            
            .cleaning|
            
            .click|
            
            .clinic|
            
            .clinique|
            
            .clothing|
            
            .cloud|
            
            .club|
            
            .clubmed|
            
            .coach|
            
            .codes|
            
            .coffee|
            
            .college|
            
            .cologne|
            
            .com|
            
            .commbank|
            
            .community|
            
            .company|
            
            .compare|
            
            .computer|
            
            .comsec|
            
            .condos|
            
            .construction|
            
            .consulting|
            
            .contact|
            
            .contractors|
            
            .cooking|
            
            .cool|
            
            .coop|
            
            .corsica|
            
            .country|
            
            .coupon|
            
            .coupons|
            
            .courses|
            
            .credit|
            
            .creditcard|
            
            .creditunion|
            
            .cricket|
            
            .crown|
            
            .crs|
            
            .cruises|
            
            .csc|
            
            .cuisinella|
            
            .cymru|
            
            .cyou|
            
            .dabur|
            
            .dad|
            
            .dance|
            
            .date|
            
            .dating|
            
            .datsun|
            
            .day|
            
            .dclk|
            
            .dealer|
            
            .deals|
            
            .degree|
            
            .delivery|
            
            .dell|
            
            .deloitte|
            
            .delta|
            
            .democrat|
            
            .dental|
            
            .dentist|
            
            .desi|
            
            .design|
            
            .dev|
            
            .diamonds|
            
            .diet|
            
            .digital|
            
            .direct|
            
            .directory|
            
            .discount|
            
            .dnp|
            
            .docs|
            
            .dog|
            
            .doha|
            
            .domains|
            
            .doosan|
            
            .download|
            
            .drive|
            
            .dubai|
            
            .durban|
            
            .dvag|
            
            .earth|
            
            .eat|
            
            .edeka|
            
            .edu|
            
            .education|
            
            .email|
            
            .emerck|
            
            .energy|
            
            .engineer|
            
            .engineering|
            
            .enterprises|
            
            .epson|
            
            .equipment|
            
            .erni|
            
            .esq|
            
            .estate|
            
            .eurovision|
            
            .eus|
            
            .events|
            
            .everbank|
            
            .exchange|
            
            .expert|
            
            .exposed|
            
            .express|
            
            .extraspace|
            
            .fage|
            
            .fail|
            
            .fairwinds|
            
            .faith|
            
            .family|
            
            .fan|
            
            .fans|
            
            .farm|
            
            .fashion|
            
            .fast|
            
            .feedback|
            
            .ferrero|
            
            .film|
            
            .final|
            
            .finance|
            
            .financial|
            
            .firestone|
            
            .firmdale|
            
            .fish|
            
            .fishing|
            
            .fit|
            
            .fitness|
            
            .flickr|
            
            .flights|
            
            .florist|
            
            .flowers|
            
            .flsmidth|
            
            .fly|
            
            .foo|
            
            .football|
            
            .ford|
            
            .forex|
            
            .forsale|
            
            .forum|
            
            .foundation|
            
            .fox|
            
            .fresenius|
            
            .frl|
            
            .frogans|
            
            .frontier|
            
            .fund|
            
            .furniture|
            
            .futbol|
            
            .fyi|
            
            .gal|
            
            .gallery|
            
            .gallo|
            
            .gallup|
            
            .game|
            
            .garden|
            
            .gbiz|
            
            .gdn|
            
            .gea|
            
            .gent|
            
            .genting|
            
            .ggee|
            
            .gift|
            
            .gifts|
            
            .gives|
            
            .giving|
            
            .glass|
            
            .gle|
            
            .global|
            
            .globo|
            
            .gmail|
            
            .gmbh|
            
            .gmo|
            
            .gmx|
            
            .gold|
            
            .goldpoint|
            
            .golf|
            
            .goo|
            
            .goog|
            
            .google|
            
            .gop|
            
            .got|
            
            .gov|
            
            .grainger|
            
            .graphics|
            
            .gratis|
            
            .green|
            
            .gripe|
            
            .group|
            
            .gucci|
            
            .guge|
            
            .guide|
            
            .guitars|
            
            .guru|
            
            .hamburg|
            
            .hangout|
            
            .haus|
            
            .hdfcbank|
            
            .health|
            
            .healthcare|
            
            .help|
            
            .helsinki|
            
            .here|
            
            .hermes|
            
            .hiphop|
            
            .hitachi|
            
            .hiv|
            
            .hockey|
            
            .holdings|
            
            .holiday|
            
            .homedepot|
            
            .homes|
            
            .honda|
            
            .horse|
            
            .host|
            
            .hosting|
            
            .hoteles|
            
            .hotmail|
            
            .house|
            
            .how|
            
            .hsbc|
            
            .htc|
            
            .hyundai|
            
            .ibm|
            
            .icbc|
            
            .ice|
            
            .icu|
            
            .ifm|
            
            .iinet|
            
            .immo|
            
            .immobilien|
            
            .industries|
            
            .infiniti|
            
            .info|
            
            .ing|
            
            .ink|
            
            .institute|
            
            .insurance|
            
            .insure|
            
            .int|
            
            .international|
            
            .investments|
            
            .ipiranga|
            
            .irish|
            
            .iselect|
            
            .ist|
            
            .istanbul|
            
            .itau|
            
            .iwc|
            
            .jaguar|
            
            .java|
            
            .jcb|
            
            .jcp|
            
            .jetzt|
            
            .jewelry|
            
            .jlc|
            
            .jll|
            
            .jmp|
            
            .jobs|
            
            .joburg|
            
            .jot|
            
            .joy|
            
            .jpmorgan|
            
            .jprs|
            
            .juegos|
            
            .kaufen|
            
            .kddi|
            
            .kerryhotels|
            
            .kerrylogistics|
            
            .kerryproperties|
            
            .kfh|
            
            .kia|
            
            .kim|
            
            .kinder|
            
            .kitchen|
            
            .kiwi|
            
            .koeln|
            
            .komatsu|
            
            .kpmg|
            
            .kpn|
            
            .krd|
            
            .kred|
            
            .kuokgroup|
            
            .kyoto|
            
            .lacaixa|
            
            .lamborghini|
            
            .lamer|
            
            .lancaster|
            
            .land|
            
            .landrover|
            
            .lanxess|
            
            .lasalle|
            
            .lat|
            
            .latrobe|
            
            .law|
            
            .lawyer|
            
            .lds|
            
            .lease|
            
            .leclerc|
            
            .legal|
            
            .lexus|
            
            .lgbt|
            
            .liaison|
            
            .lidl|
            
            .life|
            
            .lifeinsurance|
            
            .lifestyle|
            
            .lighting|
            
            .like|
            
            .limited|
            
            .limo|
            
            .lincoln|
            
            .linde|
            
            .link|
            
            .live|
            
            .living|
            
            .lixil|
            
            .loan|
            
            .loans|
            
            .locus|
            
            .lol|
            
            .london|
            
            .lotte|
            
            .lotto|
            
            .love|
            
            .ltd|
            
            .ltda|
            
            .lupin|
            
            .luxe|
            
            .luxury|
            
            .madrid|
            
            .maif|
            
            .maison|
            
            .makeup|
            
            .man|
            
            .management|
            
            .mango|
            
            .market|
            
            .marketing|
            
            .markets|
            
            .marriott|
            
            .mba|
            
            .med|
            
            .media|
            
            .meet|
            
            .melbourne|
            
            .meme|
            
            .memorial|
            
            .men|
            
            .menu|
            
            .meo|
            
            .miami|
            
            .microsoft|
            
            .mil|
            
            .mini|
            
            .mma|
            
            .mobi|
            
            .mobily|
            
            .moda|
            
            .moe|
            
            .moi|
            
            .mom|
            
            .monash|
            
            .money|
            
            .montblanc|
            
            .mormon|
            
            .mortgage|
            
            .moscow|
            
            .motorcycles|
            
            .mov|
            
            .movie|
            
            .movistar|
            
            .mtn|
            
            .mtpc|
            
            .mtr|
            
            .museum|
            
            .mutual|
            
            .mutuelle|
            
            .nadex|
            
            .nagoya|
            
            .name|
            
            .natura|
            
            .navy|
            
            .nec|
            
            .net|
            
            .netbank|
            
            .network|
            
            .neustar|
            
            .new|
            
            .news|
            
            .nexus|
            
            .ngo|
            
            .nhk|
            
            .nico|
            
            .nikon|
            
            .ninja|
            
            .nissan|
            
            .nissay|
            
            .nokia|
            
            .northwesternmutual|
            
            .norton|
            
            .nowruz|
            
            .nra|
            
            .nrw|
            
            .ntt|
            
            .nyc|
            
            .obi|
            
            .office|
            
            .okinawa|
            
            .omega|
            
            .one|
            
            .ong|
            
            .onl|
            
            .online|
            
            .ooo|
            
            .oracle|
            
            .orange|
            
            .org|
            
            .organic|
            
            .origins|
            
            .osaka|
            
            .otsuka|
            
            .ovh|
            
            .page|
            
            .pamperedchef|
            
            .panerai|
            
            .paris|
            
            .pars|
            
            .partners|
            
            .parts|
            
            .party|
            
            .passagens|
            
            .pet|
            
            .pharmacy|
            
            .philips|
            
            .photo|
            
            .photography|
            
            .photos|
            
            .physio|
            
            .piaget|
            
            .pics|
            
            .pictet|
            
            .pictures|
            
            .pid|
            
            .pin|
            
            .ping|
            
            .pink|
            
            .pizza|
            
            .place|
            
            .play|
            
            .playstation|
            
            .plumbing|
            
            .plus|
            
            .pohl|
            
            .poker|
            
            .porn|
            
            .post|
            
            .praxi|
            
            .press|
            
            .pro|
            
            .prod|
            
            .productions|
            
            .prof|
            
            .promo|
            
            .properties|
            
            .property|
            
            .protection|
            
            .pub|
            
            .pwc|
            
            .qpon|
            
            .quebec|
            
            .quest|
            
            .racing|
            
            .read|
            
            .realtor|
            
            .realty|
            
            .recipes|
            
            .red|
            
            .redstone|
            
            .redumbrella|
            
            .rehab|
            
            .reise|
            
            .reisen|
            
            .reit|
            
            .ren|
            
            .rent|
            
            .rentals|
            
            .repair|
            
            .report|
            
            .republican|
            
            .rest|
            
            .restaurant|
            
            .review|
            
            .reviews|
            
            .rexroth|
            
            .rich|
            
            .ricoh|
            
            .rio|
            
            .rip|
            
            .rocher|
            
            .rocks|
            
            .rodeo|
            
            .room|
            
            .rsvp|
            
            .ruhr|
            
            .run|
            
            .rwe|
            
            .ryukyu|
            
            .saarland|
            
            .safe|
            
            .safety|
            
            .sakura|
            
            .sale|
            
            .salon|
            
            .samsung|
            
            .sandvik|
            
            .sandvikcoromant|
            
            .sanofi|
            
            .sap|
            
            .sapo|
            
            .sarl|
            
            .sas|
            
            .saxo|
            
            .sbs|
            
            .sca|
            
            .scb|
            
            .schaeffler|
            
            .schmidt|
            
            .scholarships|
            
            .school|
            
            .schule|
            
            .schwarz|
            
            .science|
            
            .scor|
            
            .scot|
            
            .seat|
            
            .security|
            
            .seek|
            
            .select|
            
            .sener|
            
            .services|
            
            .seven|
            
            .sew|
            
            .sex|
            
            .sexy|
            
            .sfr|
            
            .sharp|
            
            .shaw|
            
            .shell|
            
            .shia|
            
            .shiksha|
            
            .shoes|
            
            .shouji|
            
            .show|
            
            .shriram|
            
            .sina|
            
            .singles|
            
            .site|
            
            .ski|
            
            .skin|
            
            .sky|
            
            .skype|
            
            .smile|
            
            .sncf|
            
            .soccer|
            
            .social|
            
            .softbank|
            
            .software|
            
            .sohu|
            
            .solar|
            
            .solutions|
            
            .song|
            
            .sony|
            
            .soy|
            
            .space|
            
            .spiegel|
            
            .spot|
            
            .spreadbetting|
            
            .srl|
            
            .stada|
            
            .star|
            
            .starhub|
            
            .statefarm|
            
            .statoil|
            
            .stc|
            
            .stcgroup|
            
            .stockholm|
            
            .storage|
            
            .store|
            
            .stream|
            
            .studio|
            
            .study|
            
            .style|
            
            .sucks|
            
            .supplies|
            
            .supply|
            
            .support|
            
            .surf|
            
            .surgery|
            
            .suzuki|
            
            .swatch|
            
            .swiss|
            
            .sydney|
            
            .symantec|
            
            .systems|
            
            .tab|
            
            .taipei|
            
            .talk|
            
            .taobao|
            
            .tatamotors|
            
            .tatar|
            
            .tattoo|
            
            .tax|
            
            .taxi|
            
            .tci|
            
            .team|
            
            .tech|
            
            .technology|
            
            .tel|
            
            .telecity|
            
            .telefonica|
            
            .temasek|
            
            .tennis|
            
            .thd|
            
            .theater|
            
            .theatre|
            
            .tickets|
            
            .tienda|
            
            .tiffany|
            
            .tips|
            
            .tires|
            
            .tirol|
            
            .tmall|
            
            .today|
            
            .tokyo|
            
            .tools|
            
            .top|
            
            .toray|
            
            .toshiba|
            
            .total|
            
            .tours|
            
            .town|
            
            .toyota|
            
            .toys|
            
            .trade|
            
            .trading|
            
            .training|
            
            .travel|
            
            .travelers|
            
            .travelersinsurance|
            
            .trust|
            
            .trv|
            
            .tube|
            
            .tui|
            
            .tunes|
            
            .tushu|
            
            .tvs|
            
            .ubs|
            
            .unicom|
            
            .university|
            
            .uno|
            
            .uol|
            
            .vacations|
            
            .vana|
            
            .vegas|
            
            .ventures|
            
            .verisign|
            
            .versicherung|
            
            .vet|
            
            .viajes|
            
            .video|
            
            .vig|
            
            .viking|
            
            .villas|
            
            .vin|
            
            .vip|
            
            .virgin|
            
            .vision|
            
            .vista|
            
            .vistaprint|
            
            .viva|
            
            .vlaanderen|
            
            .vodka|
            
            .volkswagen|
            
            .vote|
            
            .voting|
            
            .voto|
            
            .voyage|
            
            .vuelos|
            
            .wales|
            
            .walter|
            
            .wang|
            
            .wanggou|
            
            .watch|
            
            .watches|
            
            .weather|
            
            .weatherchannel|
            
            .webcam|
            
            .weber|
            
            .website|
            
            .wed|
            
            .wedding|
            
            .weibo|
            
            .weir|
            
            .whoswho|
            
            .wien|
            
            .wiki|
            
            .williamhill|
            
            .win|
            
            .windows|
            
            .wine|
            
            .wme|
            
            .wolterskluwer|
            
            .work|
            
            .works|
            
            .world|
            
            .wtc|
            
            .wtf|
            
            .xbox|
            
            .xerox|
            
            .xihuan|
            
            .xin|
            
            .测试|
            
            .कॉम|
            
            .परीक्षा|
            
            .セール|
            
            .佛山|
            
            .慈善|
            
            .集团|
            
            .在线|
            
            .点看|
            
            .คอม|
            
            .八卦|
            
            ‏.موقع‎|
            
            .公益|
            
            .公司|
            
            .移动|
            
            .我爱你|
            
            .москва|
            
            .испытание|
            
            .онлайн|
            
            .сайт|
            
            .联通|
            
            ‏.קום‎|
            
            .时尚|
            
            .微博|
            
            .테스트|
            
            .淡马锡|
            
            .ファッション|
            
            .орг|
            
            .नेट|
            
            .ストア|
            
            .삼성|
            
            .商标|
            
            .商店|
            
            .商城|
            
            .дети|
            
            ‏.טעסט‎|
            
            .ポイント|
            
            .新闻|
            
            .工行|
            
            .家電|
            
            ‏.كوم‎|
            
            .中文网|
            
            .中信|
            
            .娱乐|
            
            .谷歌|
            
            .购物|
            
            .測試|
            
            .クラウド|
            
            ‏.آزمایشی‎|
            
            .பரிட்சை|
            
            .网店|
            
            .संगठन|
            
            .餐厅|
            
            .网络|
            
            .ком|
            
            .诺基亚|
            
            .食品|
            
            .δοκιμή|
            
            .飞利浦|
            
            ‏.إختبار‎|
            
            .手表|
            
            .手机|
            
            ‏.ارامكو‎|
            
            ‏.بازار‎|
            
            ‏.موبايلي‎|
            
            ‏.همراه‎|
            
            .닷컴|
            
            .政府|
            
            ‏.شبكة‎|
            
            ‏.بيتك‎|
            
            .机构|
            
            .组织机构|
            
            .健康|
            
            .рус|
            
            .珠宝|
            
            .大拿|
            
            .みんな|
            
            .グーグル|
            
            .世界|
            
            .書籍|
            
            .网址|
            
            .닷넷|
            
            .コム|
            
            .游戏|
            
            .vermögensberater|
            
            .vermögensberatung|
            
            .企业|
            
            .信息|
            
            .嘉里大酒店|
            
            .广东|
            
            .テスト|
            
            .政务|
            
            .xperia|
            
            .xxx|
            
            .xyz|
            
            .yachts|
            
            .yahoo|
            
            .yamaxun|
            
            .yandex|
            
            .yodobashi|
            
            .yoga|
            
            .yokohama|
            
            .you|
            
            .youtube|
            
            .yun|
            
            .zara|
            
            .zero|
            
            .zip|
            
            .zone|
            
            .zuerich)";
$ccTLD_IDN = "(?:
            
            .ac|
            
            .ad|
            
            .ae|
            
            .af|
            
            .ag|
            
            .ai|
            
            .al|
            
            .am|
            
            .an|
            
            .ao|
            
            .aq|
            
            .ar|
            
            .as|
            
            .at|
            
            .au|
            
            .aw|
            
            .ax|
            
            .az|
            
            .ba|
            
            .bb|
            
            .bd|
            
            .be|
            
            .bf|
            
            .bg|
            
            .bh|
            
            .bi|
            
            .bj|
            
            .bl|
            
            .bm|
            
            .bn|
            
            .bo|
            
            .bq|
            
            .br|
            
            .bs|
            
            .bt|
            
            .bv|
            
            .bw|
            
            .by|
            
            .bz|
            
            .ca|
            
            .cc|
            
            .cd|
            
            .cf|
            
            .cg|
            
            .ch|
            
            .ci|
            
            .ck|
            
            .cl|
            
            .cm|
            
            .cn|
            
            .co|
            
            .cr|
            
            .cu|
            
            .cv|
            
            .cw|
            
            .cx|
            
            .cy|
            
            .cz|
            
            .de|
            
            .dj|
            
            .dk|
            
            .dm|
            
            .do|
            
            .dz|
            
            .ec|
            
            .ee|
            
            .eg|
            
            .eh|
            
            .er|
            
            .es|
            
            .et|
            
            .eu|
            
            .fi|
            
            .fj|
            
            .fk|
            
            .fm|
            
            .fo|
            
            .fr|
            
            .ga|
            
            .gb|
            
            .gd|
            
            .ge|
            
            .gf|
            
            .gg|
            
            .gh|
            
            .gi|
            
            .gl|
            
            .gm|
            
            .gn|
            
            .gp|
            
            .gq|
            
            .gr|
            
            .gs|
            
            .gt|
            
            .gu|
            
            .gw|
            
            .gy|
            
            .hk|
            
            .hm|
            
            .hn|
            
            .hr|
            
            .ht|
            
            .hu|
            
            .id|
            
            .ie|
            
            .il|
            
            .im|
            
            .in|
            
            .io|
            
            .iq|
            
            .ir|
            
            .is|
            
            .it|
            
            .je|
            
            .jm|
            
            .jo|
            
            .jp|
            
            .ke|
            
            .kg|
            
            .kh|
            
            .ki|
            
            .km|
            
            .kn|
            
            .kp|
            
            .kr|
            
            .kw|
            
            .ky|
            
            .kz|
            
            .la|
            
            .lb|
            
            .lc|
            
            .li|
            
            .lk|
            
            .lr|
            
            .ls|
            
            .lt|
            
            .lu|
            
            .lv|
            
            .ly|
            
            .ma|
            
            .mc|
            
            .md|
            
            .me|
            
            .mf|
            
            .mg|
            
            .mh|
            
            .mk|
            
            .ml|
            
            .mm|
            
            .mn|
            
            .mo|
            
            .mp|
            
            .mq|
            
            .mr|
            
            .ms|
            
            .mt|
            
            .mu|
            
            .mv|
            
            .mw|
            
            .mx|
            
            .my|
            
            .mz|
            
            .na|
            
            .nc|
            
            .ne|
            
            .nf|
            
            .ng|
            
            .ni|
            
            .nl|
            
            .no|
            
            .np|
            
            .nr|
            
            .nu|
            
            .nz|
            
            .om|
            
            .pa|
            
            .pe|
            
            .pf|
            
            .pg|
            
            .ph|
            
            .pk|
            
            .pl|
            
            .pm|
            
            .pn|
            
            .pr|
            
            .ps|
            
            .pt|
            
            .pw|
            
            .py|
            
            .qa|
            
            .re|
            
            .ro|
            
            .rs|
            
            .ru|
            
            .rw|
            
            .sa|
            
            .sb|
            
            .sc|
            
            .sd|
            
            .se|
            
            .sg|
            
            .sh|
            
            .si|
            
            .sj|
            
            .sk|
            
            .sl|
            
            .sm|
            
            .sn|
            
            .so|
            
            .sr|
            
            .ss|
            
            .st|
            
            .su|
            
            .sv|
            
            .sx|
            
            .sy|
            
            .sz|
            
            .tc|
            
            .td|
            
            .tf|
            
            .tg|
            
            .th|
            
            .tj|
            
            .tk|
            
            .tl|
            
            .tm|
            
            .tn|
            
            .to|
            
            .tp|
            
            .tr|
            
            .tt|
            
            .tv|
            
            .tw|
            
            .tz|
            
            .ua|
            
            .ug|
            
            .uk|
            
            .um|
            
            .us|
            
            .uy|
            
            .uz|
            
            .va|
            
            .vc|
            
            .ve|
            
            .vg|
            
            .vi|
            
            .vn|
            
            .vu|
            
            .wf|
            
            .ws|
            
            .한국|
            
            .ভারত|
            
            .বাংলা|
            
            .қаз|
            
            .срб|
            
            .бг|
            
            .бел|
            
            .சிங்கப்பூர்|
            
            .мкд|
            
            .ею|
            
            .中国|
            
            .中國|
            
            .భారత్|
            
            .ලංකා|
            
            .ભારત|
            
            .भारत|
            
            .укр|
            
            .香港|
            
            .台湾|
            
            .台灣|
            
            .мон|
            
            ‏.الجزائر‎|
            
            ‏.عمان‎|
            
            ‏.ایران‎|
            
            ‏.امارات‎|
            
            ‏.پاکستان‎|
            
            ‏.الاردن‎|
            
            ‏.بھارت‎|
            
            ‏.المغرب‎|
            
            ‏.السعودية‎|
            
            ‏.سودان‎|
            
            ‏.عراق‎|
            
            ‏.مليسيا‎|
            
            .澳門|
            
            .გე|
            
            .ไทย|
            
            ‏.سورية‎|
            
            .рф|
            
            ‏.تونس‎|
            
            .ελ|
            
            .ਭਾਰਤ|
            
            ‏.مصر‎|
            
            ‏.قطر‎|
            
            .இலங்கை|
            
            .இந்தியா|
            
            .հայ|
            
            .新加坡|
            
            ‏.فلسطين‎|
            
            .ye|
            
            .yt|
            
            .za|
            
            .zm|
            
            .zw)";

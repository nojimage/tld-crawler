<?php

$gTLD = "(?:abogado|academy|accountants|active|actor|aero|agency|airforce|allfinanz|alsace|archi|army|arpa|asia|associates|attorney|auction|audio|autos|axa|band|bar|bargains|bayern|beer|berlin|best|bid|bike|bio|biz|black|blackfriday|bloomberg|blue|bmw|bnpparibas|boo|boutique|brussels|budapest|build|builders|business|buzz|bzh|cab|cal|camera|camp|cancerresearch|capetown|capital|caravan|cards|care|career|careers|casa|cash|cat|catering|center|ceo|cern|channel|cheap|christmas|chrome|church|citic|city|claims|cleaning|click|clinic|clothing|club|codes|coffee|college|cologne|com|community|company|computer|condos|construction|consulting|contractors|cooking|cool|coop|country|credit|creditcard|crs|cruises|cuisinella|cymru|dad|dance|dating|day|deals|degree|democrat|dental|dentist|desi|diamonds|diet|digital|direct|directory|discount|dnp|domains|durban|dvag|eat|edu|education|email|emerck|engineer|engineering|enterprises|equipment|esq|estate|eus|events|exchange|expert|exposed|fail|farm|feedback|finance|financial|fish|fishing|fitness|flights|florist|flsmidth|fly|foo|forsale|foundation|frl|frogans|fund|furniture|futbol|gal|gallery|gbiz|gent|gift|gifts|gives|glass|gle|global|globo|gmail|gmo|gmx|google|gop|gov|graphics|gratis|green|gripe|guide|guitars|guru|hamburg|haus|healthcare|help|here|hiphop|hiv|holdings|holiday|homes|horse|host|hosting|house|how|ibm|immo|immobilien|industries|info|ing|ink|institute|insure|int|international|investments|jetzt|jobs|joburg|juegos|kaufen|kim|kitchen|kiwi|koeln|krd|kred|lacaixa|land|lawyer|lease|lgbt|life|lighting|limited|limo|link|loans|london|lotto|ltda|luxe|luxury|maison|management|mango|market|marketing|media|meet|melbourne|meme|menu|miami|mil|mini|mobi|moda|moe|monash|mortgage|moscow|motorcycles|mov|museum|nagoya|name|navy|net|network|neustar|new|nexus|ngo|nhk|ninja|nra|nrw|nyc|okinawa|ong|onl|ooo|org|organic|otsuka|ovh|paris|partners|parts|pharmacy|photo|photography|photos|physio|pics|pictures|pink|pizza|place|plumbing|pohl|poker|post|praxi|press|pro|prod|productions|prof|properties|property|pub|qpon|quebec|realtor|recipes|red|rehab|reise|reisen|ren|rentals|repair|report|republican|rest|restaurant|reviews|rich|rio|rip|rocks|rodeo|rsvp|ruhr|ryukyu|saarland|sarl|sca|scb|schmidt|schule|scot|services|sexy|shiksha|shoes|singles|social|software|sohu|solar|solutions|soy|space|spiegel|supplies|supply|support|surf|surgery|suzuki|sydney|systems|taipei|tatar|tattoo|tax|technology|tel|tienda|tips|tirol|today|tokyo|tools|top|town|toys|trade|training|travel|tui|university|uno|uol|vacations|vegas|ventures|versicherung|vet|viajes|villas|vision|vlaanderen|vodka|vote|voting|voto|voyage|wales|wang|watch|webcam|website|wed|wedding|whoswho|wien|wiki|williamhill|wme|work|works|world|wtc|wtf|xxx|xyz|yachts|yandex|yoga|yokohama|youtube|zip|zone)";
$ccTLD = "(?:ac|ad|ae|af|ag|ai|al|am|an|ao|aq|ar|as|at|au|aw|ax|az|ba|bb|bd|be|bf|bg|bh|bi|bj|bl|bm|bn|bo|bq|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|cr|cu|cv|cw|cx|cy|cz|de|dj|dk|dm|do|dz|ec|ee|eg|eh|er|es|et|eu|fi|fj|fk|fm|fo|fr|ga|gb|gd|ge|gf|gg|gh|gi|gl|gm|gn|gp|gq|gr|gs|gt|gu|gw|gy|hk|hm|hn|hr|ht|hu|id|ie|il|im|in|io|iq|ir|is|it|je|jm|jo|jp|ke|kg|kh|ki|km|kn|kp|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|me|mf|mg|mh|mk|ml|mm|mn|mo|mp|mq|mr|ms|mt|mu|mv|mw|mx|my|mz|na|nc|ne|nf|ng|ni|nl|no|np|nr|nu|nz|om|pa|pe|pf|pg|ph|pk|pl|pm|pn|pr|ps|pt|pw|py|qa|re|ro|rs|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|ss|st|su|sv|sx|sy|sz|tc|td|tf|tg|th|tj|tk|tl|tm|tn|to|tp|tr|tt|tv|tw|tz|ua|ug|uk|um|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|ye|yt|za|zm|zw)";
$gTLD_IDN = "(?:测试|परीक्षा|佛山|集团|在线|موقع|公益|公司|移动|我爱你|москва|испытание|онлайн|сайт|테스트|орг|삼성|商标|商城|дети|טעסט|中文网|中信|測試|آزمایشی|பரிட்சை|संगठन|网络|δοκιμή|إختبار|手机|بازار|شبكة|机构|组织机构|рус|みんな|世界|网址|游戏|vermögensberater|vermögensberatung|企业|广东|テスト|政务)";
$ccTLD_IDN = "(?:한국|ভারত|বাংলা|қаз|срб|бел|சிங்கப்பூர்|мкд|中国|中國|భారత్|ලංකා|ભારત|भारत|укр|香港|台湾|台灣|мон|الجزائر|عمان|ایران|امارات|پاکستان|الاردن|بھارت|المغرب|السعودية|سودان|عراق|مليسيا|გე|ไทย|سورية|рф|تونس|ਭਾਰਤ|مصر|قطر|இலங்கை|இந்தியா|新加坡|فلسطين)";
$gTLD_punycode = "(?:xn--0zwm56d|xn--11b5bs3a9aj6g|xn--1qqw23a|xn--3bst00m|xn--3ds443g|xn--4gbrim|xn--55qw42g|xn--55qx5d|xn--6frz82g|xn--6qq986b3xl|xn--80adxhks|xn--80akhbyknj4f|xn--80asehdb|xn--80aswg|xn--9t4b11yi5a|xn--c1avg|xn--cg4bki|xn--czr694b|xn--czru2d|xn--d1acj3b|xn--deba0ad|xn--fiq228c5hs|xn--fiq64b|xn--g6w251d|xn--hgbk6aj7f53bba|xn--hlcj6aya9esc7a|xn--i1b6b1a6a2e|xn--io0a7i|xn--jxalpdlp|xn--kgbechtv|xn--kput3i|xn--mgbab2bd|xn--ngbc5azd|xn--nqv7f|xn--nqv7fs00ema|xn--p1acf|xn--q9jyb4c|xn--rhqv96g|xn--ses554g|xn--unup4y|xn--vermgensberater-ctb|xn--vermgensberatung-pwb|xn--vhquv|xn--xhq521b|xn--zckzah|xn--zfr164b)";
$ccTLD_punycode = "(?:xn--3e0b707e|xn--45brj9c|xn--54b7fta0cc|xn--80ao21a|xn--90a3ac|xn--90ais|xn--clchc0ea0b2g2a9gcd|xn--d1alf|xn--fiqs8s|xn--fiqz9s|xn--fpcrj9c3d|xn--fzc2c9e2c|xn--gecrj9c|xn--h2brj9c|xn--j1amh|xn--j6w193g|xn--kprw13d|xn--kpry57d|xn--l1acc|xn--lgbbat1ad8j|xn--mgb9awbf|xn--mgba3a4f16a|xn--mgbaam7a8h|xn--mgbai9azgqp6j|xn--mgbayh7gpa|xn--mgbbh1a71e|xn--mgbc0a9azcg|xn--mgberp4a5d4ar|xn--mgbpl2fh|xn--mgbtx2b|xn--mgbx4cd0ab|xn--node|xn--o3cw4h|xn--ogbpf8fl|xn--p1ai|xn--pgbs0dh|xn--s9brj9c|xn--wgbh1c|xn--wgbl6a|xn--xkc2al3hye2a|xn--xkc2dl3a5ee0h|xn--yfro4i67o|xn--ygbi2ammx)";

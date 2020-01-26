<?php
class myclass{
var $host;
var $dbname;
var $dbuser;
var $pass;
var $baseurl;
var $con;
var $my_key;

var $upload_dir_array=array('/download/','/files/','/images/','/others/','/shop/');
var $upload_dir_small_array=array('/small_download/','/small_files/','/small_images/','/small_others/','/small_shop/');
	
	
var $country_array=array('AF' => 'Afghanistan','AX' => 'Aland Islands','AL' => 'Albania','DZ' => 'Algeria','AS' => 'American Samoa','AD' => 'Andorra','AO' => 'Angola','AI' => 'Anguilla','AQ' => 'Antarctica','AG' => 'Antigua And Barbuda','AR' => 'Argentina','AM' => 'Armenia','AW' => 'Aruba','AU' => 'Australia','AT' => 'Austria','AZ' => 'Azerbaijan','BS' => 'Bahamas','BH' => 'Bahrain','BD' => 'Bangladesh','BB' => 'Barbados','BY' => 'Belarus','BE' => 'Belgium','BZ' => 'Belize','BJ' => 'Benin','BM' => 'Bermuda','BT' => 'Bhutan','BO' => 'Bolivia','BA' => 'Bosnia And Herzegovina','BW' => 'Botswana','BV' => 'Bouvet Island','BR' => 'Brazil','IO' => 'British Indian Ocean Territory','BN' => 'Brunei Darussalam','BG' => 'Bulgaria','BF' => 'Burkina Faso','BI' => 'Burundi','KH' => 'Cambodia','CM' => 'Cameroon','CA' => 'Canada','CV' => 'Cape Verde','KY' => 'Cayman Islands','CF' => 'Central African Republic','TD' => 'Chad','CL' => 'Chile','CN' => 'China','CX' => 'Christmas Island','CC' => 'Cocos (Keeling) Islands','CO' => 'Colombia','KM' => 'Comoros','CG' => 'Congo','CD' => 'Congo, Democratic Republic','CK' => 'Cook Islands','CR' => 'Costa Rica','CI' => 'Cote D\'Ivoire','HR' => 'Croatia','CU' => 'Cuba','CY' => 'Cyprus','CZ' => 'Czech Republic','DK' => 'Denmark','DJ' => 'Djibouti','DM' => 'Dominica','DO' => 'Dominican Republic','EC' => 'Ecuador','EG' => 'Egypt','SV' => 'El Salvador','GQ' => 'Equatorial Guinea','ER' => 'Eritrea','EE' => 'Estonia','ET' => 'Ethiopia','FK' => 'Falkland Islands (Malvinas)','FO' => 'Faroe Islands','FJ' => 'Fiji','FI' => 'Finland','FR' => 'France','GF' => 'French Guiana','PF' => 'French Polynesia','TF' => 'French Southern Territories','GA' => 'Gabon','GM' => 'Gambia','GE' => 'Georgia','DE' => 'Germany','GH' => 'Ghana','GI' => 'Gibraltar','GR' => 'Greece','GL' => 'Greenland','GD' => 'Grenada','GP' => 'Guadeloupe','GU' => 'Guam','GT' => 'Guatemala','GG' => 'Guernsey','GN' => 'Guinea','GW' => 'Guinea-Bissau','GY' => 'Guyana','HT' => 'Haiti','HM' => 'Heard Island & Mcdonald Islands','VA' => 'Holy See (Vatican City State)','HN' => 'Honduras','HK' => 'Hong Kong','HU' => 'Hungary','IS' => 'Iceland','IN' => 'India','ID' => 'Indonesia','IR' => 'Iran, Islamic Republic Of','IQ' => 'Iraq','IE' => 'Ireland','IM' => 'Isle Of Man','IL' => 'Israel','IT' => 'Italy','JM' => 'Jamaica','JP' => 'Japan','JE' => 'Jersey','JO' => 'Jordan','KZ' => 'Kazakhstan','KE' => 'Kenya','KI' => 'Kiribati','KR' => 'Korea','KW' => 'Kuwait','KG' => 'Kyrgyzstan','LA' => 'Lao People\'s Democratic Republic','LV' => 'Latvia','LB' => 'Lebanon','LS' => 'Lesotho','LR' => 'Liberia','LY' => 'Libyan Arab Jamahiriya','LI' => 'Liechtenstein','LT' => 'Lithuania','LU' => 'Luxembourg','MO' => 'Macao','MK' => 'Macedonia','MG' => 'Madagascar','MW' => 'Malawi','MY' => 'Malaysia','MV' => 'Maldives','ML' => 'Mali','MT' => 'Malta','MH' => 'Marshall Islands','MQ' => 'Martinique','MR' => 'Mauritania','MU' => 'Mauritius','YT' => 'Mayotte','MX' => 'Mexico','FM' => 'Micronesia, Federated States Of','MD' => 'Moldova','MC' => 'Monaco','MN' => 'Mongolia','ME' => 'Montenegro','MS' => 'Montserrat','MA' => 'Morocco','MZ' => 'Mozambique','MM' => 'Myanmar','NA' => 'Namibia','NR' => 'Nauru','NP' => 'Nepal','NL' => 'Netherlands','AN' => 'Netherlands Antilles','NC' => 'New Caledonia','NZ' => 'New Zealand','NI' => 'Nicaragua','NE' => 'Niger','NG' => 'Nigeria','NU' => 'Niue','NF' => 'Norfolk Island','MP' => 'Northern Mariana Islands','NO' => 'Norway','OM' => 'Oman','PK' => 'Pakistan','PW' => 'Palau','PS' => 'Palestinian Territory, Occupied','PA' => 'Panama','PG' => 'Papua New Guinea','PY' => 'Paraguay','PE' => 'Peru','PH' => 'Philippines','PN' => 'Pitcairn','PL' => 'Poland','PT' => 'Portugal','PR' => 'Puerto Rico','QA' => 'Qatar','RE' => 'Reunion','RO' => 'Romania','RU' => 'Russian Federation','RW' => 'Rwanda','BL' => 'Saint Barthelemy','SH' => 'Saint Helena','KN' => 'Saint Kitts And Nevis','LC' => 'Saint Lucia','MF' => 'Saint Martin','PM' => 'Saint Pierre And Miquelon','VC' => 'Saint Vincent And Grenadines','WS' => 'Samoa','SM' => 'San Marino','ST' => 'Sao Tome And Principe','SA' => 'Saudi Arabia','SN' => 'Senegal','RS' => 'Serbia','SC' => 'Seychelles','SL' => 'Sierra Leone','SG' => 'Singapore','SK' => 'Slovakia','SI' => 'Slovenia','SB' => 'Solomon Islands','SO' => 'Somalia','ZA' => 'South Africa','GS' => 'South Georgia And Sandwich Isl.','ES' => 'Spain','LK' => 'Sri Lanka','SD' => 'Sudan','SR' => 'Suriname','SJ' => 'Svalbard And Jan Mayen','SZ' => 'Swaziland','SE' => 'Sweden','CH' => 'Switzerland','SY' => 'Syrian Arab Republic','TW' => 'Taiwan','TJ' => 'Tajikistan','TZ' => 'Tanzania','TH' => 'Thailand','TL' => 'Timor-Leste','TG' => 'Togo','TK' => 'Tokelau','TO' => 'Tonga','TT' => 'Trinidad And Tobago','TN' => 'Tunisia','TR' => 'Turkey','TM' => 'Turkmenistan','TC' => 'Turks And Caicos Islands','TV' => 'Tuvalu','UG' => 'Uganda','UA' => 'Ukraine','AE' => 'United Arab Emirates','GB' => 'United Kingdom','US' => 'United States','UM' => 'United States Outlying Islands','UY' => 'Uruguay','UZ' => 'Uzbekistan','VU' => 'Vanuatu','VE' => 'Venezuela','VN' => 'Viet Nam','VG' => 'Virgin Islands, British','VI' => 'Virgin Islands, U.S.','WF' => 'Wallis And Futuna','EH' => 'Western Sahara','YE' => 'Yemen','ZM' => 'Zambia','ZW' => 'Zimbabwe');



var $currency_array=array ('ALL' => 'Albania Lek','AFN' => 'Afghanistan Afghani','ARS' => 'Argentina Peso','AWG' => 'Aruba Guilder','AUD' => 'Australia Dollar','AZN' => 'Azerbaijan New Manat','BSD' => 'Bahamas Dollar','BBD' => 'Barbados Dollar','BDT' => 'Bangladeshi taka','BYR' => 'Belarus Ruble','BZD' => 'Belize Dollar','BMD' => 'Bermuda Dollar','BOB' => 'Bolivia Boliviano','BAM' => 'Bosnia and Herzegovina Convertible Marka','BWP' => 'Botswana Pula','BGN' => 'Bulgaria Lev','BRL' => 'Brazil Real','BND' => 'Brunei Darussalam Dollar','KHR' => 'Cambodia Riel','CAD' => 'Canada Dollar','KYD' => 'Cayman Islands Dollar','CLP' => 'Chile Peso','CNY' => 'China Yuan Renminbi','COP' => 'Colombia Peso','CRC' => 'Costa Rica Colon','HRK' => 'Croatia Kuna','CUP' => 'Cuba Peso','CZK' => 'Czech Republic Koruna','DKK' => 'Denmark Krone','DOP' => 'Dominican Republic Peso','XCD' => 'East Caribbean Dollar','EGP' => 'Egypt Pound','SVC' => 'El Salvador Colon','EEK' => 'Estonia Kroon','EUR' => 'Euro Member Countries','FKP' => 'Falkland Islands (Malvinas) Pound','FJD' => 'Fiji Dollar','GHC' => 'Ghana Cedis','GIP' => 'Gibraltar Pound','GTQ' => 'Guatemala Quetzal','GGP' => 'Guernsey Pound','GYD' => 'Guyana Dollar','HNL' => 'Honduras Lempira','HKD' => 'Hong Kong Dollar','HUF' => 'Hungary Forint','ISK' => 'Iceland Krona','INR' => 'India Rupee','IDR' => 'Indonesia Rupiah','IRR' => 'Iran Rial','IMP' => 'Isle of Man Pound','ILS' => 'Israel Shekel','JMD' => 'Jamaica Dollar','JPY' => 'Japan Yen','JEP' => 'Jersey Pound','KZT' => 'Kazakhstan Tenge','KPW' => 'Korea (North) Won','KRW' => 'Korea (South) Won','KGS' => 'Kyrgyzstan Som','LAK' => 'Laos Kip','LVL' => 'Latvia Lat','LBP' => 'Lebanon Pound','LRD' => 'Liberia Dollar','LTL' => 'Lithuania Litas','MKD' => 'Macedonia Denar','MYR' => 'Malaysia Ringgit','MUR' => 'Mauritius Rupee','MXN' => 'Mexico Peso','MNT' => 'Mongolia Tughrik','MZN' => 'Mozambique Metical','NAD' => 'Namibia Dollar','NPR' => 'Nepal Rupee','ANG' => 'Netherlands Antilles Guilder','NZD' => 'New Zealand Dollar','NIO' => 'Nicaragua Cordoba','NGN' => 'Nigeria Naira','NOK' => 'Norway Krone','OMR' => 'Oman Rial','PKR' => 'Pakistan Rupee','PAB' => 'Panama Balboa','PYG' => 'Paraguay Guarani','PEN' => 'Peru Nuevo Sol','PHP' => 'Philippines Peso','PLN' => 'Poland Zloty','QAR' => 'Qatar Riyal','RON' => 'Romania New Leu','RUB' => 'Russia Ruble','SHP' => 'Saint Helena Pound','SAR' => 'Saudi Arabia Riyal','RSD' => 'Serbia Dinar','SCR' => 'Seychelles Rupee','SGD' => 'Singapore Dollar','SBD' => 'Solomon Islands Dollar','SOS' => 'Somalia Shilling','ZAR' => 'South Africa Rand','LKR' => 'Sri Lanka Rupee','SEK' => 'Sweden Krona','CHF' => 'Switzerland Franc','SRD' => 'Suriname Dollar','SYP' => 'Syria Pound','TWD' => 'Taiwan New Dollar','THB' => 'Thailand Baht','TTD' => 'Trinidad and Tobago Dollar','TRY' => 'Turkey Lira','TRL' => 'Turkey Lira','TVD' => 'Tuvalu Dollar','UAH' => 'Ukraine Hryvna','GBP' => 'United Kingdom Pound','USD' => 'United States Dollar','UYU' => 'Uruguay Peso','UZS' => 'Uzbekistan Som','VEF' => 'Venezuela Bolivar','VND' => 'Viet Nam Dong','YER' => 'Yemen Rial','ZWD' => 'Zimbabwe Dollar');


var $currency_symbol_array=array(	'AED' => '&#1583;.&#1573;','AFN' => '&#65;&#102;','ALL' => '&#76;&#101;&#107;','AMD' => '','ANG' => '&#402;','AOA' => '&#75;&#122;','ARS' => '&#36;','AUD' => '&#36;','AWG' => '&#402;','AZN' => '&#1084;&#1072;&#1085;','BAM' => '&#75;&#77;','BBD' => '&#36;','BDT' => '&#2547;','BGN' => '&#1083;&#1074;','BHD' => '.&#1583;.&#1576;','BIF' => '&#70;&#66;&#117;','BMD' => '&#36;','BND' => '&#36;','BOB' => '&#36;&#98;','BRL' => '&#82;&#36;','BSD' => '&#36;','BTN' => '&#78;&#117;&#46;','BWP' => '&#80;','BYR' => '&#112;&#46;','BZD' => '&#66;&#90;&#36;','CAD' => '&#36;','CDF' => '&#70;&#67;','CHF' => '&#67;&#72;&#70;','CLF' => '','CLP' => '&#36;','CNY' => '&#165;','COP' => '&#36;','CRC' => '&#8353;','CUP' => '&#8396;','CVE' => '&#36;','CZK' => '&#75;&#269;','DJF' => '&#70;&#100;&#106;','DKK' => '&#107;&#114;','DOP' => '&#82;&#68;&#36;','DZD' => '&#1583;&#1580;','EGP' => '&#163;','ETB' => '&#66;&#114;','EUR' => '&#8364;','FJD' => '&#36;','FKP' => '&#163;','GBP' => '&#163;','GEL' => '&#4314;','GHS' => '&#162;','GIP' => '&#163;','GMD' => '&#68;','GNF' => '&#70;&#71;','GTQ' => '&#81;','GYD' => '&#36;','HKD' => '&#36;','HNL' => '&#76;','HRK' => '&#107;&#110;','HTG' => '&#71;','HUF' => '&#70;&#116;','IDR' => '&#82;&#112;','ILS' => '&#8362;','INR' => '&#8377;','IQD' => '&#1593;.&#1583;','IRR' => '&#65020;','ISK' => '&#107;&#114;','JEP' => '&#163;','JMD' => '&#74;&#36;','JOD' => '&#74;&#68;','JPY' => '&#165;','KES' => '&#75;&#83;&#104;','KGS' => '&#1083;&#1074;','KHR' => '&#6107;','KMF' => '&#67;&#70;','KPW' => '&#8361;','KRW' => '&#8361;','KWD' => '&#1583;.&#1603;','KYD' => '&#36;','KZT' => '&#1083;&#1074;','LAK' => '&#8365;','LBP' => '&#163;','LKR' => '&#8360;','LRD' => '&#36;','LSL' => '&#76;','LTL' => '&#76;&#116;','LVL' => '&#76;&#115;','LYD' => '&#1604;.&#1583;','MAD' => '&#1583;.&#1605;.','MDL' => '&#76;','MGA' => '&#65;&#114;','MKD' => '&#1076;&#1077;&#1085;','MMK' => '&#75;','MNT' => '&#8366;','MOP' => '&#77;&#79;&#80;&#36;','MRO' => '&#85;&#77;','MUR' => '&#8360;','MVR' => '.&#1923;','MWK' => '&#77;&#75;','MXN' => '&#36;','MYR' => '&#82;&#77;','MZN' => '&#77;&#84;','NAD' => '&#36;','NGN' => '&#8358;','NIO' => '&#67;&#36;','NOK' => '&#107;&#114;','NPR' => '&#8360;','NZD' => '&#36;','OMR' => '&#65020;','PAB' => '&#66;&#47;&#46;','PEN' => '&#83;&#47;&#46;','PGK' => '&#75;','PHP' => '&#8369;','PKR' => '&#8360;','PLN' => '&#122;&#322;','PYG' => '&#71;&#115;','QAR' => '&#65020;','RON' => '&#108;&#101;&#105;','RSD' => '&#1044;&#1080;&#1085;&#46;','RUB' => '&#1088;&#1091;&#1073;','RWF' => '&#1585;.&#1587;','SAR' => '&#65020;','SBD' => '&#36;','SCR' => '&#8360;','SDG' => '&#163;','SEK' => '&#107;&#114;','SGD' => '&#36;','SHP' => '&#163;','SLL' => '&#76;&#101;','SOS' => '&#83;','SRD' => '&#36;','STD' => '&#68;&#98;','SVC' => '&#36;','SYP' => '&#163;','SZL' => '&#76;','THB' => '&#3647;','TJS' => '&#84;&#74;&#83;','TMT' => '&#109;','TND' => '&#1583;.&#1578;','TOP' => '&#84;&#36;','TRY' => '&#8356;','TTD' => '&#36;','TWD' => '&#78;&#84;&#36;','TZS' => '','UAH' => '&#8372;','UGX' => '&#85;&#83;&#104;','USD' => '&#36;','UYU' => '&#36;&#85;','UZS' => '&#1083;&#1074;','VEF' => '&#66;&#115;','VND' => '&#8363;','VUV' => '&#86;&#84;','WST' => '&#87;&#83;&#36;','XAF' => '&#70;&#67;&#70;&#65;','XCD' => '&#36;','XDR' => '','XOF' => '','XPF' => '&#70;','YER' => '&#65020;','ZAR' => '&#82;','ZMK' => '&#90;&#75;','ZWL' => '&#90;&#36;');



var $time_zone_array=array('(GMT-11:00) Midway Island'=>'Pacific/Midway','(GMT-11:00) Samoa'=>'Pacific/Samoa','(GMT-10:00) Hawaii'=>'Pacific/Honolulu','(GMT-09:00) Alaska'=>'US/Alaska','(GMT-08:00) Pacific Time (US &amp; Canada)'=>'America/Los_Angeles','(GMT-08:00) Tijuana'=>'America/Tijuana','(GMT-07:00) Arizona'=>'US/Arizona','(GMT-07:00) Chihuahua'=>'America/Chihuahua','(GMT-07:00) La Paz'=>'America/Chihuahua','(GMT-07:00) Mazatlan'=>'America/Mazatlan','(GMT-07:00) Mountain Time (US &amp; Canada)'=>'US/Mountain','(GMT-06:00) Central America'=>'America/Managua','(GMT-06:00) Central Time (US &amp; Canada)'=>'US/Central','(GMT-06:00) Guadalajara'=>'America/Mexico_City','(GMT-06:00) Mexico City'=>'America/Mexico_City','(GMT-06:00) Monterrey'=>'America/Monterrey','(GMT-06:00) Saskatchewan'=>'Canada/Saskatchewan','(GMT-05:00) Bogota'=>'America/Bogota','(GMT-05:00) Eastern Time (US &amp; Canada)'=>'US/Eastern','(GMT-05:00) Indiana (East)'=>'US/East-Indiana','(GMT-05:00) Lima'=>'America/Lima','(GMT-05:00) Quito'=>'America/Bogota','(GMT-04:00) Atlantic Time (Canada)'=>'Canada/Atlantic','(GMT-04:30) Caracas'=>'America/Caracas','(GMT-04:00) La Paz'=>'America/La_Paz','(GMT-04:00) Santiago'=>'America/Santiago','(GMT-03:30) Newfoundland'=>'Canada/Newfoundland','(GMT-03:00) Brasilia'=>'America/Sao_Paulo','(GMT-03:00) Buenos Aires'=>'America/Argentina/Buenos_Aires','(GMT-03:00) Georgetown'=>'America/Argentina/Buenos_Aires','(GMT-03:00) Greenland'=>'America/Godthab','(GMT-02:00) Mid-Atlantic'=>'America/Noronha','(GMT-01:00) Azores'=>'Atlantic/Azores','(GMT-01:00) Cape Verde Is.'=>'Atlantic/Cape_Verde','(GMT+00:00) Casablanca'=>'Africa/Casablanca','(GMT+00:00) Edinburgh'=>'Europe/London','(GMT+00:00) Greenwich Mean Time : Dublin'=>'Etc/Greenwich','(GMT+00:00) Lisbon'=>'Europe/Lisbon','(GMT+00:00) London'=>'Europe/London','(GMT+00:00) Monrovia'=>'Africa/Monrovia','(GMT+00:00) UTC'=>'UTC','(GMT+01:00) Amsterdam'=>'Europe/Amsterdam','(GMT+01:00) Belgrade'=>'Europe/Belgrade','(GMT+01:00) Berlin'=>'Europe/Berlin','(GMT+01:00) Bern'=>'Europe/Berlin','(GMT+01:00) Bratislava'=>'Europe/Bratislava','(GMT+01:00) Brussels'=>'Europe/Brussels','(GMT+01:00) Budapest'=>'Europe/Budapest','(GMT+01:00) Copenhagen'=>'Europe/Copenhagen','(GMT+01:00) Ljubljana'=>'Europe/Ljubljana','(GMT+01:00) Madrid'=>'Europe/Madrid','(GMT+01:00) Paris'=>'Europe/Paris','(GMT+01:00) Prague'=>'Europe/Prague','(GMT+01:00) Rome'=>'Europe/Rome','(GMT+01:00) Sarajevo'=>'Europe/Sarajevo','(GMT+01:00) Skopje'=>'Europe/Skopje','(GMT+01:00) Stockholm'=>'Europe/Stockholm','(GMT+01:00) Vienna'=>'Europe/Vienna','(GMT+01:00) Warsaw'=>'Europe/Warsaw','(GMT+01:00) West Central Africa'=>'Africa/Lagos','(GMT+01:00) Zagreb'=>'Europe/Zagreb','(GMT+02:00) Athens'=>'Europe/Athens','(GMT+02:00) Bucharest'=>'Europe/Bucharest','(GMT+02:00) Cairo'=>'Africa/Cairo','(GMT+02:00) Harare'=>'Africa/Harare','(GMT+02:00) Helsinki'=>'Europe/Helsinki','(GMT+02:00) Istanbul'=>'Europe/Istanbul','(GMT+02:00) Jerusalem'=>'Asia/Jerusalem','(GMT+02:00) Kyiv'=>'Europe/Helsinki','(GMT+02:00) Pretoria'=>'Africa/Johannesburg','(GMT+02:00) Riga'=>'Europe/Riga','(GMT+02:00) Sofia'=>'Europe/Sofia','(GMT+02:00) Tallinn'=>'Europe/Tallinn','(GMT+02:00) Vilnius'=>'Europe/Vilnius','(GMT+03:00) Baghdad'=>'Asia/Baghdad','(GMT+03:00) Kuwait'=>'Asia/Kuwait','(GMT+03:00) Minsk'=>'Europe/Minsk','(GMT+03:00) Nairobi'=>'Africa/Nairobi','(GMT+03:00) Riyadh'=>'Asia/Riyadh','(GMT+03:00) Volgograd'=>'Europe/Volgograd','(GMT+03:30) Tehran'=>'Asia/Tehran','(GMT+04:00) Abu Dhabi'=>'Asia/Muscat','(GMT+04:00) Baku'=>'Asia/Baku','(GMT+04:00) Moscow'=>'Europe/Moscow','(GMT+04:00) Muscat'=>'Asia/Muscat','(GMT+04:00) St. Petersburg'=>'Europe/Moscow','(GMT+04:00) Tbilisi'=>'Asia/Tbilisi','(GMT+04:00) Yerevan'=>'Asia/Yerevan','(GMT+04:30) Kabul'=>'Asia/Kabul','(GMT+05:00) Islamabad'=>'Asia/Karachi','(GMT+05:00) Karachi'=>'Asia/Karachi','(GMT+05:00) Tashkent'=>'Asia/Tashkent','(GMT+05:30) Chennai'=>'Asia/Calcutta','(GMT+05:30) Kolkata'=>'Asia/Kolkata','(GMT+05:30) Mumbai'=>'Asia/Calcutta','(GMT+05:30) New Delhi'=>'Asia/Calcutta','(GMT+05:30) Sri Jayawardenepura'=>'Asia/Calcutta','(GMT+05:45) Kathmandu'=>'Asia/Katmandu','(GMT+06:00) Almaty'=>'Asia/Almaty','(GMT+06:00) Astana'=>'Asia/Dhaka','(GMT+06:00) Dhaka'=>'Asia/Dhaka','(GMT+06:00) Ekaterinburg'=>'Asia/Yekaterinburg','(GMT+06:30) Rangoon'=>'Asia/Rangoon','(GMT+07:00) Bangkok'=>'Asia/Bangkok','(GMT+07:00) Hanoi'=>'Asia/Bangkok','(GMT+07:00) Jakarta'=>'Asia/Jakarta','(GMT+07:00) Novosibirsk'=>'Asia/Novosibirsk','(GMT+08:00) Beijing'=>'Asia/Hong_Kong','(GMT+08:00) Chongqing'=>'Asia/Chongqing','(GMT+08:00) Hong Kong'=>'Asia/Hong_Kong','(GMT+08:00) Krasnoyarsk'=>'Asia/Krasnoyarsk','(GMT+08:00) Kuala Lumpur'=>'Asia/Kuala_Lumpur','(GMT+08:00) Perth'=>'Australia/Perth','(GMT+08:00) Singapore'=>'Asia/Singapore','(GMT+08:00) Taipei'=>'Asia/Taipei','(GMT+08:00) Ulaan Bataar'=>'Asia/Ulan_Bator','(GMT+08:00) Urumqi'=>'Asia/Urumqi','(GMT+09:00) Irkutsk'=>'Asia/Irkutsk','(GMT+09:00) Osaka'=>'Asia/Tokyo','(GMT+09:00) Sapporo'=>'Asia/Tokyo','(GMT+09:00) Seoul'=>'Asia/Seoul','(GMT+09:00) Tokyo'=>'Asia/Tokyo','(GMT+09:30) Adelaide'=>'Australia/Adelaide','(GMT+09:30) Darwin'=>'Australia/Darwin','(GMT+10:00) Brisbane'=>'Australia/Brisbane','(GMT+10:00) Canberra'=>'Australia/Canberra','(GMT+10:00) Guam'=>'Pacific/Guam','(GMT+10:00) Hobart'=>'Australia/Hobart','(GMT+10:00) Melbourne'=>'Australia/Melbourne','(GMT+10:00) Port Moresby'=>'Pacific/Port_Moresby','(GMT+10:00) Sydney'=>'Australia/Sydney','(GMT+10:00) Yakutsk'=>'Asia/Yakutsk','(GMT+11:00) Vladivostok'=>'Asia/Vladivostok','(GMT+12:00) Auckland'=>'Pacific/Auckland','(GMT+12:00) Fiji'=>'Pacific/Fiji','(GMT+12:00) International Date Line West'=>'Pacific/Kwajalein','(GMT+12:00) Kamchatka'=>'Asia/Kamchatka','(GMT+12:00) Magadan'=>'Asia/Magadan','(GMT+12:00) Marshall Is.'=>'Pacific/Fiji','(GMT+12:00) New Caledonia'=>'Asia/Magadan','(GMT+12:00) Solomon Is.'=>'Asia/Magadan','(GMT+12:00) Wellington'=>'Pacific/Auckland','(GMT+13:00) Nuku\'alofa'=>'Pacific/Tongatapu');




function dataset($host,$dbname,$dbusername,$dbpassword,$baseurl,$key)
{
$this->host=$host;
$this->dbname=$dbname;
$this->dbuser=$dbusername;
$this->pass=$dbpassword;
$this->baseurl=$baseurl;
$this->my_key=$key;
}


function db_connect()
{
$this->con=new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->dbuser,$this->pass);
}

function db_close()
{
$this->con=null;
}


function redirect($url)
{
header("location:$url");
}


function content_shorttext($text,$limit)
{
	$limit2=$limit;
$string=strip_tags($text);


	$expol=explode(' ',$string);
	if(count($expol)<$limit)
	{$limit2=count($expol);}
	$tex='';
	for($i=0;$i<$limit2;$i++)
	{
	$tex.=$expol[$i].' ';
	}
	return stripslashes($tex);
}




function content_longtext($text)
{
$string=stripslashes(nl2br(str_replace(' ','&nbsp;',$text)));
	
	return $string;
	
}


function text_replace($text,$replace,$replaceby)
{
$a=array($replace);
	$b=array($replaceby);
	$string=$text;
	$print=str_replace($a,$b,$string);
	return $print;
}



function image_compress($source, $destination, $quality,$size_percen) {
$percent =($size_percen/100);
    $info = getimagesize($source);
	list($width, $height) =$info;
$newwidth = $width * $percent;
$newheight = $height * $percent;

    if ($info['mime'] == 'image/jpeg') 
        $image = imagecreatefromjpeg($source);

    elseif ($info['mime'] == 'image/jpg') 
        $image = imagecreatefromjpeg($source);
		
	elseif ($info['mime'] == 'image/gif') 
        $image = imagecreatefromgif($source);

    elseif ($info['mime'] == 'image/png') 
        $image = imagecreatefrompng($source);

$thumb = imagecreatetruecolor($newwidth, $newheight);


imagecopyresized($thumb, $image, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);


    imagejpeg($thumb, $destination, $quality);

    return true;
}



function data_delete($table,$where_colum)
{
	
		$stmt =$this->con->prepare("DELETE FROM $table WHERE $where_colum");

	if ($stmt->execute()==1)
	{
		return 'true';
		}
		else
		{
			return 'false';
			}
	}



function data_update($table,$set_colum,$where_colum)
{
    $query="UPDATE $table SET $set_colum WHERE $where_colum";
	$stmt =$this->con->prepare($query);

	if ($stmt->execute()==1)
	{
		return 'true';
		}
	else
	{
		return 'false';
		}
	}



function data_put($table,$colum,$value)
{
	$stmt =$this->con->prepare("INSERT INTO $table($colum) VALUES($value)");

	if ($stmt->execute()==1)
	{
		
		return 'true';
		}
		else
		{
			return 'false';
			}
	}




function data_get($colum,$table,$where_value,$short_by,$short,$limit,$start)
{
	$a='';$b='';$c='';$d='';$e='';$f='';
	$query='';
	
	if ($colum!='')
	{
		$a="$colum";
		}
		else
		{
			$a="*";
			
			}
	if ($where_value!='')
	{
		$b="WHERE $where_value";
		}
		if ($short_by!='')
	{
		$c="ORDER BY $short_by";
		}
		if ($short_by!='' and $short!='')
	{
		$d="$short";
		}
		else
		{
			if ($short_by!='' and $short=='')
	{
		$d="ASC";
		}
			
			}
			
			if ($limit!='')
	{
		$f="$limit";
		}
		if ($limit!='' and $start!='')
	{
		$e="LIMIT $start,";
		}
		else
		{
			if ($limit!='' and $start=='')
	{
		$e="LIMIT 0,";
		}
			}
		
	if ($table!='')
	{
		$stmt =$this->con->prepare("SELECT $a FROM $table $b $c $d $e $f");
		$stmt->execute();
		$result=$stmt->fetchAll();
	 return $result;
		}
		else
		{
		
			}
	
	
	}



function data_get_num($table,$where)
{
	if ($where=='')
	{$wherer='';}
	else
	{$wherer=" WHERE $where";}
	
		$stmt =$this->con->prepare("SELECT * FROM $table$wherer");
		$stmt->execute();
		$res=$stmt->fetchAll();
		return count($res);
	}




function edit_data_replace($string)
{
	$array1=array('<','>','"');
	$array2=array('&lt;','&gt;','&quot;');
	return stripslashes(str_replace($array1,$array2,$string));
	
	}


function image_upload($file,$size_in_mb,$save_dir)
{
	if ($_FILES[$file]['error']=='0')
	{
	if ($_FILES[$file]['type']=='image/png' or $_FILES[$file]['type']=='image/gif' or $_FILES[$file]['type']=='image/jpg' or $_FILES[$file]['type']=='image/jpeg')
	{ 
	if ($_FILES[$file]['size']/(1024*1024)<=$size_in_mb)
	{
		$path=time().$_FILES[$file]['name'];
		if (move_uploaded_file($_FILES[$file]['tmp_name'],$save_dir."/".$path))
		{return $path;}
		else
		{return 'false';}
		
		}
	else
	{
		return 'false';
		}
		
		}
	else
	{
		return 'false';
		}
	}
	else
	{
		return 'false';
		}
	
	
	}
	
	

function string_data_input($string)
{
	$rep=array('\\',"'",'"');
	$repby=array('\\\\',"\'",'\"');
	$string=str_ireplace($rep,$repby,trim($string));
	return $string;
	}	
	
	
	


function file_upload($name,$path)
{
	
	$date=date('d-m-Y');
	$time=date('h:i:s a');
			
	$count=count($_FILES[$name]['name']);
	if(count($_FILES[$name]['name'])>0 and $_FILES[$name]['name']['0']!='')
	{
		for($i=0;$i<$count;$i++)
		{
			$user_id='';
			if(isset($_SESSION['user']))
			{$user_id=$_SESSION['user'];}
			
			
			$uid=uniqid().$i;
			$path_uid=time().$i;
			
			$save_path=$path.'/'.$path_uid.str_replace(' ','_',$_FILES[$name]['name'][$i]);
			$size=$_FILES[$name]['size'][$i];
			$ext=strtolower(str_replace(".","",strrchr($_FILES[$name]['name'][$i],".")));
			$file_name=str_replace(".$ext",'',strtolower($_FILES[$name]['name'][$i]));
			
			
			
			
			$imageOk = 0;
$check = getimagesize($_FILES[$name]["tmp_name"][$i]);
    
    if($check !== false)
	{
		if ($check['mime'] == 'image/jpeg') 
        {$imageOk = 1;}
		elseif ($check['mime'] == 'image/gif') 
       {$imageOk = 1;}
	   elseif ($check['mime'] == 'image/png') 
        {$imageOk = 1;}
		else
		{$imageOk =0;}
		
		} else {$imageOk = 0;}
if($imageOk==1)
{
	
	$source=$_FILES[$name]['tmp_name'][$i];
	$replace=$this->upload_dir_array;
	$replace_by=$this->upload_dir_small_array;
	$destination=str_replace($replace,$replace_by,$save_path);
	$quality='50';
	$size_percen='50';
	$this->image_compress($source,$destination,$quality,$size_percen);
	
	}

			
			
			if(move_uploaded_file($_FILES[$name]['tmp_name'][$i],$save_path)=='true')
			{
				$save_path=str_replace('../','',$save_path);
				$table="tblfiles";
				$colum="nib_uid,nib_user,nib_name,nib_file_extension,nib_file_size,nib_file_url,nib_date,nib_time";
				$value="'$uid','$user_id','$file_name','$ext','$size','$save_path','$date','$time'";
				$this->data_put($table,$colum,$value);




			
				}
			
			
			}
			return 'true';
			
			}
			
			
			
	}



function delete_all($path)
{
	$del_path=glob($path.'/*');
	foreach($del_path as $del_file)
	{
		if(is_dir($del_file))
		{
			$this->delete_all($del_file);
			
			}
			else
			{
		if(is_file($del_file))
		{
			unlink($del_file);
			}
				}
		}
	rmdir($path);
	
	}
	
	
function zip_unzip($zip_path,$unzip_to)
{
		$unzip = new ZipArchive;
		$out = $unzip->open($zip_path);
		if ($out === TRUE)
		{
		  $unzip->extractTo($unzip_to);
		  $unzip->close();
		  return 'true';
		}
		else
		{
		 return 'false';
		}
	
	}
	
	
	
function price_fix($value,$range)
{
	$output=$value;
	$range=$range;
	if($range=='')
	{$range='0';}
	if($value!='')
	{
		$check=strpos($value,'.');
		if($check>0)
		{
			$output=substr($value,0,($check+$range));
			}
		
		}
	return $output;
	}
	



function Check_page_permission($Base)
{
	$user_type=$_SESSION['Usertype'];

	if($user_type=="Admin")
	{return true;}
	else
	{
	$mytable="tblpageaccess";
	$mywhere="nib_page='$Base' and nib_type='$user_type'";
	$check_permission=$this->data_get_num($mytable,$mywhere);
	if($check_permission==1)
	{return true;}
	else
	{return false;}
	}
}


	
//end
}
?>
